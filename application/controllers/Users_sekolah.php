<?php

Class Users_sekolah extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
        $this->load->model('M_users_sekolah');
    }

    //cek user
    public function cekUser(){
        $id_level_user = $this->session->userdata('id_level_user');
        //cek session login
        if (!isset($id_level_user)) { 
            redirect('login');
        }//level santri
        else if ($this->session->id_level_user == 3){ 
            redirect('login');
        }//level sekolah
        // else if ($this->session->id_level_user == 2){ 
        //     redirect('users_santri');
        // }//level admin
        // else if ($this->session->id_level_user == 1){ 
        //     redirect('users_santri');
        // }
    }

    function data() {
        $this->cekUser();
        // nama tabel
        $table = 'v_tbl_user_sekolah';
        // nama PK
        $primaryKey = 'id_user_sekolah';
        // list field
        $columns = array(
            array('db' => 'foto', 'dt' => 'foto'),
            array('db' => 'nama_lengkap', 'dt' => 'nama_lengkap'),
            array('db' => 'nama_level', 'dt' => 'nama_level'),
            array(
                'db' => 'id_user_sekolah',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('users_sekolah/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('users_sekolah/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                }
            )
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

    function index() {
        $this->cekUser();
        $this->template->load('template', 'users_sekolah/list');
    }

    function add() {
        $this->cekUser();
        if (isset($_POST['submit'])) {
            $uplodFoto = $this->upload_foto_user();
            $this->M_users_sekolah->save($uplodFoto);
            redirect('users_sekolah');
        } else {
            $this->template->load('template', 'users_sekolah/add');
        }
    }
    
    function edit(){
        $this->cekUser();
        if(isset($_POST['submit'])){
            $uplodFoto = $this->upload_foto_user();
            $this->M_users_sekolah->update($uplodFoto);
            redirect('users_sekolah');
        }else{
            $id_user_sekolah       = $this->uri->segment(3);
            $data['user']  = $this->db->get_where('tbl_user_sekolah',array('id_user_sekolah'=>$id_user_sekolah))->row_array();
            $this->template->load('template', 'users_sekolah/edit',$data);
        }
    }
    
    function delete(){
        $this->cekUser();
        $id_user_sekolah = $this->uri->segment(3);
        if(!empty($id_user_sekolah)){
            // proses delete data
            $this->db->where('id_user_sekolah',$id_user_sekolah);
            $this->db->delete('tbl_user_sekolah');
        }
        redirect('users_sekolah');
    }
    
    
     function upload_foto_user(){
        $config['upload_path']          = './uploads/foto_user_sekolah/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 10240; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
    
    
    function rule(){
        $this->cekUser();
        $this->template->load('template','users_sekolah/rule');
    }
    
    function modul(){
        $level_user = $_GET['level_user'];
        echo "<table id='mytable2' class='table table-striped table-bordered table-hover table-full-width dataTable'>
                <thead>
                    <tr>
                        <th width='10'>NO</th>
                        <th>NAMA MODULE</th>
                        <th>LINK</th>
                        <th width='100'>HAK AKSES</th>
                    </tr>";
        
        $menu = $this->db->get('tabel_menu');
        $no=1;
        foreach ($menu->result() as $row){
            echo "<tr>
                <td>$no</td>
                <td>".  strtoupper($row->nama_menu)."</td>
                <td>$row->link</td>
                <td align='center'><input type='checkbox' ";
            $this->chek_akses($level_user, $row->id);
             echo " onclick='addRule($row->id)'></td>
                </tr>";
            $no++;
        }
        
        echo"</thead>
            </table>";
    }
    
    function chek_akses($level_user,$id_menu){
        $data = array('id_level_user'=>$level_user,'id_menu'=>$id_menu);
        $chek = $this->db->get_where('tbl_user_rule',$data);
        if($chek->num_rows()>0){
            echo "checked";
        }
    }




    function addrule(){
        $level_user = $_GET['level_user'];
        $id_menu    = $_GET['id_menu'];
        $data       = array('id_level_user'=>$level_user,'id_menu'=>$id_menu);
        $chek       = $this->db->get_where('tbl_user_rule',$data);
        if($chek->num_rows()<1){
            $this->db->insert('tbl_user_rule',$data);
            echo "berhasil memberikan akses modul";
        }else{
            $this->db->where('id_menu',$id_menu);
            $this->db->where('id_level_user',$level_user);
            $this->db->delete('tbl_user_rule');
            echo " berhasil delete akses modul";
        }
    }

}