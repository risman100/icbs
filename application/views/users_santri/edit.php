<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Text Fields
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">

            <?php
            echo form_open_multipart('users_santri/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('username', $santri['username']);
            ?>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    USERNAME
                </label>
                <div class="col-sm-2">
                    <input type="text" value="<?php echo $santri['username'] ?>" readonly="" placeholder="MASUKAN USERNAME" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    PASSWORD
                </label>
                <div class="col-sm-3">
                    <input type="password" name="password" placeholder="MASUKAN PASSWORD" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA LENGKAP
                </label>
                <div class="col-sm-3">
                    <input type="text" value="<?php echo $santri['nama'] ?>" name="nama" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    TEMPAT, TGL LAHIR
                </label>
                <div class="col-sm-2">
                    <input type="text" name="tempat_lahir" value="<?php echo $santri['tempat_lahir'] ?>" placeholder="TEMPAT LAHIR" id="form-field-1" class="form-control">
                </div>
                <div class="col-sm-2">
                    <input type="date" value="<?php echo $santri['tanggal_lahir'] ?>" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    GENDER
                </label>
                <div class="col-sm-2">
                    <?php
                    echo form_dropdown('gender', array('L' => 'LAKI LAKI', 'P' => 'PEREMPUAN'), $santri['gender'], "class='form-control'");
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    AGAMA
                </label>
                <div class="col-sm-2">
                    <?php
                    echo cmb_dinamis('agama', 'tabel_agama', 'nama_agama', 'kd_agama', $santri['kd_agama']);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    Foto
                </label>
                <div class="col-sm-2">
                    <input type="file" name="userfile">
                    <img src="<?php echo base_url()."/uploads/foto_user_santri/".$santri['foto']?>" width="200">
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    PILIH ROMBEL
                </label>
                <div class="col-sm-6">
                   <?php echo cmb_dinamis('rombel', 'tabel_rombel', 'nama_rombel', 'id_rombel',$santri['id_rombel'])?>
                </div>
            </div> -->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    TAHUN MASUK
                </label>
                <div class="col-sm-2">
                    <input type="text" value="<?php echo $santri['tahun_masuk'] ?>" name="tahun_masuk" placeholder="MASUKAN TAHUN MASUK" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('users_santri', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>