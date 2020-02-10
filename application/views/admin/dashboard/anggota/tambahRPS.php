<!-- TAMBAH RPS BARU -->
<!DOCTYPE html>
<html>
<?php $this->load->view('admin/layout/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/layout/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/layout/sidebar') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-book" aria-hidden="true"></i> Proses Pembelajaran
        <!-- <small>Panel Control</small>-->
      </h1>
    </section>
    
    <div class="box-body">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Rencana Pembelajaran Semester (RPS) Baru</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" id="tambahRPS" action="<?php echo base_url() ?>tambahRPSBaru" method="post" role="form">
              <div class="box-body">

                <div class="form-group">

                  <label for="mataKuliah" class="col-sm-2 control-label">Mata Kuliah</label>

                  <div class="col-sm-10">
                    <select class="form-control required" id="matakuliah" name="matakuliah">
                      <option value="0">Pilih mata kuliah...</option>
                      <?php
                                            if(!empty($matakuliah))
                                            {
                                                foreach ($matakuliah as $mk)
                                                {
                                                    ?>
                                                    <option value="<?php echo $mk->id_matkul ?>"><?php echo $mk->nama_matkul ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                    </select>
                  </div>
                </div>

                <!--<div class="form-group">
                  <label for="kodeMatkul" class="col-sm-2 control-label">Kode Mata Kuliah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kodeMatkul" name="kodeMatkul" placeholder="Masukkan kode mata kuliah...">
                  </div>
                </div>-->

                <div class="form-group">
                  <label for="semester" class="col-sm-2 control-label">Semester</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="semester" name="semester">
                    <option value="0">Pilih semester...</option>
                      <?php
                                            if(!empty($semester))
                                            {
                                                foreach ($semester as $smt)
                                                {
                                                    ?>
                                                    <option value="<?php echo $smt->id_semester ?>"><?php echo $smt->tahun_ajar ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="bobot" class="col-sm-2 control-label">Bobot (SKS)</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="bobot" name="bobot">
                      <option value="3">3</option>
                      <option value="2">2</option>
                      <option value="1">1</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="dosen" class="col-sm-2 control-label">Dosen Pengampu</label>

                  <div class="col-sm-10">
                  <select class="form-control required" id="dosen" name="dosen">
                      <option value="0">Pilih dosen pengampu...</option>
                      <?php
                                            if(!empty($dosen))
                                            {
                                                foreach ($dosen as $ds)
                                                {
                                                    ?>
                                                    <option value="<?php echo $ds->nidn ?>"><?php echo $ds->nama ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                    </select>                  </div>
                </div>

                <div class="form-group">
                  <label for="capaianPembelajaran" class="col-sm-2 control-label">Capaian Pembelajaran</label>
                  <div class="col-sm-10">
                    <textarea id="capaianPembelajaran" name="capaianPembelajaran" class="form-control" rows="3" placeholder="Masukkan capaian pembelajaran mata kuliah..."></textarea>
                  </div>
                </div>

                 
                
                <div class="form-group">
                  <label for="bahanKajian" class="col-sm-2 control-label">Bahan Kajian</label>
                  <div class="col-sm-10">
                    <textarea id="bahanKajian" name="bahanKajian" class="form-control" rows="3" placeholder="Masukkan bahan kajian mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="uploadJadwalKuliah" class="col-sm-2 control-label">Upload Rencana Pembelajaran</label>
                  <div class="col-sm-10">
                    <input type="file" id="uploadJadwalKuliah" name="uploadJadwalKuliah">

                  <p class="help-block">File harus bertipe .xls|.xlsx, maksimal ukuran file 500 kB.</p>
                  </div>
                </div> 

                <div class="form-group">
                  <label for="bahanBacaan" class="col-sm-2 control-label">Referensi</label>
                  <div class="col-sm-10">
                    <textarea id="bahanBacaan" name="bahanBacaan" class="form-control" rows="3" placeholder="Masukkan referensi dari mata kuliah..."></textarea>
                  </div>
                </div>


              



              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          
        </div>

        <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>

    </div>
    <script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
</body>


</html>
