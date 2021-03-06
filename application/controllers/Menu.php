<?php

Class Menu extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
        $this->load->model('M_menu');
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
        $table = 'tabel_menu';
        // nama PK
        $primaryKey = 'id';
        // list field
        $columns = array(
            array('db' => 'nama_menu', 'dt' => 'nama_menu'),
            array('db' => 'link', 'dt' => 'link'),
            array(
                'db' => 'is_main_menu',
                'dt' => 'is_main_menu',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return $d==0?'Main Menu':'Sub Menu';
                }),
            array(
                'db' => 'id',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('menu/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('menu/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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
        $this->template->load('template', 'menu/list');
    }

    function add() {
        $this->cekUser();
        if (isset($_POST['submit'])) {
            $this->M_menu->save();
            redirect('menu');
        } else {
            $this->template->load('template', 'menu/add');
        }
    }
    
    function edit(){
        $this->cekUser();
        if(isset($_POST['submit'])){
            $this->M_menu->update();
            redirect('menu');
        }else{
            $id           = $this->uri->segment(3);
            $data['menu'] = $this->db->get_where('tabel_menu',array('id'=>$id))->row_array();
            $this->template->load('template', 'menu/edit',$data);
        }
    }
    
    function delete(){
        $this->cekUser();
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('tabel_menu');
        }
        redirect('menu');
    }

}