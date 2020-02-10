<!DOCTYPE html>
<html>
<?php $this->load->view('admin/layout/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('admin/layout/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/layout/sidebar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nilai Pembelajaran
        <small>Data Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Pendidikan</li>
            <li class="active">Data Matakuliah</li>
            <li class="active">Data Materi</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="card-body">
              <?php if($this->session->flashdata('msg_alert_error')) { ?>
                <div class="alert alert-danger">
                  <?=$this->session->flashdata('msg_alert_error');?>
                </div>
              <?php } ?>
              <?php if($this->session->flashdata('msg_alert')) { ?>
              <div class="alert alert-success">
                <?=$this->session->flashdata('msg_alert');?>
              </div>
              <?php } ?>
              <!-- <div class="box-header">
                <h3 class="box-title">Data Matakuliah</h3>
                <br><br>
              </div> --><!-- /.box-header --> 
              <div class="box-body">
                <table id="dataMateri" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Mahasiswa</th>
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($mahasiswa as $item){?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$item->id_mahasiswa;?></td>
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <!-- <td>
                        <a class="btn btn-primary btn-xs" id="tambahMateri"><i class="fa fa-plus"></i> Input </a> -->
                        <?php //if ($item->id_nilai == NULL){ ?> 
                        <!-- <a 
                          data-id_mahasiswa="<?=$item->id_mahasiswa?>"
                          data-nim = "<?=$item->nim?>"
                          data-nama_mhs="<?=$item->nama_mhs?>"
                          data-id_matkul="<?=$item->id_matkul?>"
                          class="btn btn-primary btn-xs editmateri" alt="input Nilai" href="<?php //echo base_url("Perpustakaan/addNew/nilai/{$item->id_mahasiswa}");?>" 
                          ><i class="fa fa-plus"> Input</i>
                          isi if null -->
                        <!-- </a> -->
                        <?php   //}  
                        //else { ?>
                        <!-- <a 
                          data-id_mahasiswa="<?=$item->id_mahasiswa?>"
                          data-id_nilai="<?=$item->id_nilai?>"
                          data-nim = "<?=$item->nim?>"
                          data-nama_mhs="<?=$item->nama_mhs?>"
                          data-id_matkul="<?=$item->id_matkul?>"
                          data-nilai_mandiri="<?=$item->nilai_mandiri?>"
                          data-nilai_keaktifan="<?=$item->nilai_keaktifan?>"
                          data-nilai_kelompok="<?=$item->nilai_kelompok?>"
                          data-nilai_quiz="<?=$item->nilai_quiz?>"
                          data-nilai_uts="<?=$item->nilai_uts?>"
                          data-nilai_uas="<?=$item->nilai_uas?>"
                          class="btn btn-success btn-xs editmateri2" alt="edit Buku" href="<?php //echo //base_url("Perpustakaan/edit/nilai/{$item->id_mahasiswa}");?>"
                          ><i class="fa fa-pencil"> Edit</i>
                        </a> -->
                        <?php //  } ?>
                        <!-- </td> -->
                        <td>
                          <a 
                          data-id_mahasiswa="<?=$item->id_mahasiswa?>"
                          data-id_matkul="<?=$item->id_matkul?>"
                          data-nim = "<?=$item->nim?>"
                          data-nama_mhs="<?=$item->nama_mhs?>"
                          <?php foreach ($nilai_ujian as $itemUjian){ 
                            if(strcmp($item->id_mahasiswa, $itemUjian->id_mahasiswa)==0){ ?>    
                              data-nilai_uts="<?=$itemUjian->nilai_uts?>"
                              data-nilai_uas="<?=$itemUjian->nilai_uas?>"
                          <?php }}?>
                          class="btn btn-success btn-xs editmateriUjian" alt="edit Buku"
                          ><i class="fa fa-pencil">Input Nilai UAS/UTS</i>
                          </a>

                          <a 
                          data-id_mahasiswa="<?=$item->id_mahasiswa?>"
                          data-id_matkul="<?=$item->id_matkul?>"
                          data-nim = "<?=$item->nim?>"
                          data-nama_mhs="<?=$item->nama_mhs?>"
                          <?php 
                          $indeksMandiri = 0;
                          foreach ($nilai_mandiri as $itemMandiri){
                            if(strcmp($item->id_mahasiswa, $itemMandiri->id_mahasiswa)==0){ 
                              $indeksMandiri+=1; ?>
                              <?php echo "data-nilai_mandiri".$indeksMandiri."=".$itemMandiri->nilai_mandiri;  ?>
                          <?php  } } ?>
                          <?php echo "data-jumlah_nilai_mandiri"."=".$indeksMandiri;?>
                          class="btn btn-success btn-xs editmateriMandiri" alt="edit Buku"
                          ><i class="fa fa-pencil">Input Nilai Mandiri</i>
                          </a>

                          <a 
                          data-id_mahasiswa="<?=$item->id_mahasiswa?>"
                          data-id_matkul="<?=$item->id_matkul?>"
                          data-nim = "<?=$item->nim?>"
                          data-nama_mhs="<?=$item->nama_mhs?>"
                          <?php 
                          $indeksKelompok = 0;
                          foreach ($nilai_kelompok as $itemKelompok){
                            if(strcmp($item->id_mahasiswa, $itemKelompok->id_mahasiswa)==0){ 
                              $indeksKelompok+=1; ?>
                              <?php echo "data-nilai_kelompok".$indeksKelompok."=".$itemKelompok->nilai_kelompok;  ?>
                          <?php  } } ?>
                          <?php echo "data-jumlah_nilai_kelompok"."=".$indeksKelompok;?>
                          class="btn btn-success btn-xs editmateriKelompok" alt="edit Buku"
                          ><i class="fa fa-pencil">Input Nilai Kelompok</i>
                          </a>

                          <a 
                          data-id_mahasiswa="<?=$item->id_mahasiswa?>"
                          data-id_matkul="<?=$item->id_matkul?>"
                          data-nim = "<?=$item->nim?>"
                          data-nama_mhs="<?=$item->nama_mhs?>"
                          <?php 
                          $indeksQuiz = 0;
                          foreach ($nilai_quiz as $itemQuiz){
                            if(strcmp($item->id_mahasiswa, $itemQuiz->id_mahasiswa)==0){ 
                              $indeksQuiz+=1; ?>
                              <?php echo "data-nilai_quiz".$indeksQuiz."=".$itemQuiz->nilai_quiz;  ?>
                          <?php  } } ?>
                          <?php echo "data-jumlah_nilai_quiz"."=".$indeksQuiz;?>
                          class="btn btn-success btn-xs editmateriQuiz" alt="edit Buku"
                          ><i class="fa fa-pencil">Input Nilai Quiz</i>
                          </a>

                          <a 
                          data-id_mahasiswa="<?=$item->id_mahasiswa?>"
                          data-id_matkul="<?=$item->id_matkul?>"
                          data-nim = "<?=$item->nim?>"
                          data-nama_mhs="<?=$item->nama_mhs?>"
                          <?php 
                          $indeksKeaktifan = 0;
                          foreach ($nilai_keaktifan as $itemKeaktifan){
                            if(strcmp($item->id_mahasiswa, $itemKeaktifan->id_mahasiswa)==0){ 
                              $indeksKeaktifan+=1; ?>
                              <?php echo "data-nilai_keaktifan".$indeksKeaktifan."=".$itemKeaktifan->nilai_keaktifan;  ?>
                          <?php  } } ?>
                          <?php echo "data-jumlah_nilai_keaktifan"."=".$indeksKeaktifan;?>
                          class="btn btn-success btn-xs editmateriKeaktifan" alt="edit Buku"
                          ><i class="fa fa-pencil">Input Nilai Keaktifan</i>
                          </a>
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.card-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
<!-- ----------------------------------------------------------------------------------------------- -->
  <!-- Modal Ujian -->
    <div class="modal fade" id="myModalUjian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel" ><b>Input Nilai</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/update/nilaiUjian');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Id Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_mahasiswa" disabled>
                      <input type="text" class="form-control" name="id_mahasiswa" style="display: none;" id="id_mahasiswa" >
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">NIM Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nim" disabled>
                      <input type="text" class="form-control" name="nim" style="display: none;" id="nim">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_mhs" disabled>
                      <input type="text" class="form-control" name="nama_mhs" style="display: none;" id="nama_mhs">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai UTS</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_uts" id>
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">Nilai UAS</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_uas" id>
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <!-- <label class="col-md-4 control-label">ID Matakuliah</label> -->
                    <div class="col-md-6 has-error">
                     <!--  <input type="text" class="form-control" name="id_matkul" disabled> -->
                      <input type="text" class="form-control" name="id_matkul" style="display: none;" id="id_matkul">
                      <small class="help-block"></small>
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success" id="button-reg" name="simpan">
                      Simpan
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

       <!-- Modal Mandiri -->
    <div class="modal fade" id="myModalMandiri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel" ><b>Input Nilai</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/update/mandiri');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Id Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_mahasiswa" disabled>
                      <input type="text" class="form-control" name="id_mahasiswa" style="display: none;" id="id_mahasiswa" >
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">NIM Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nim" disabled>
                      <input type="text" class="form-control" name="nim" style="display: none;" id="nim">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_mhs" disabled>
                      <input type="text" class="form-control" name="nama_mhs" style="display: none;" id="nama_mhs">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">  
                  <label class="col-md-4 control-label">Nilai Tugas Mandiri</label> 
                    <div class="table-responsive">  
                         <table class="table table-bordered" id="mandiri_field">  
                              
                         </table>  
                    </div>    
                </div>  
                <div class="form-group">
                  <!-- <label class="col-md-4 control-label">ID Matakuliah</label> -->
                    <div class="col-md-6 has-error">
                     <!--  <input type="text" class="form-control" name="id_matkul" disabled> -->
                      <input type="text" class="form-control" name="id_matkul" style="display: none;" id="id_matkul">
                      <small class="help-block"></small>
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success" id="button-reg" name="simpan">
                      Simpan
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

       <!-- Modal Kelompok -->
    <div class="modal fade" id="myModalKelompok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel" ><b>Input Nilai</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/update/kelompok');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Id Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_mahasiswa" disabled>
                      <input type="text" class="form-control" name="id_mahasiswa" style="display: none;" id="id_mahasiswa" >
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">NIM Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nim" disabled>
                      <input type="text" class="form-control" name="nim" style="display: none;" id="nim">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_mhs" disabled>
                      <input type="text" class="form-control" name="nama_mhs" style="display: none;" id="nama_mhs">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">  
                  <label class="col-md-4 control-label">Nilai Kelompok</label> 
                    <div class="table-responsive">  
                         <table class="table table-bordered" id="kelompok_field">  
                              
                         </table>  
                    </div>    
                </div>  
                <div class="form-group">
                  <!-- <label class="col-md-4 control-label">ID Matakuliah</label> -->
                    <div class="col-md-6 has-error">
                     <!--  <input type="text" class="form-control" name="id_matkul" disabled> -->
                      <input type="text" class="form-control" name="id_matkul" style="display: none;" id="id_matkul">
                      <small class="help-block"></small>
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success" id="button-reg" name="simpan">
                      Simpan
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

       <!-- Modal Quiz -->
    <div class="modal fade" id="myModalQuiz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel" ><b>Input Nilai</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/update/quiz');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Id Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_mahasiswa" disabled>
                      <input type="text" class="form-control" name="id_mahasiswa" style="display: none;" id="id_mahasiswa" >
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">NIM Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nim" disabled>
                      <input type="text" class="form-control" name="nim" style="display: none;" id="nim">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_mhs" disabled>
                      <input type="text" class="form-control" name="nama_mhs" style="display: none;" id="nama_mhs">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">  
                  <label class="col-md-4 control-label">Nilai Quiz</label> 
                    <div class="table-responsive">  
                         <table class="table table-bordered" id="quiz_field">  
                              
                         </table>  
                    </div>    
                </div>  
                <div class="form-group">
                  <!-- <label class="col-md-4 control-label">ID Matakuliah</label> -->
                    <div class="col-md-6 has-error">
                     <!--  <input type="text" class="form-control" name="id_matkul" disabled> -->
                      <input type="text" class="form-control" name="id_matkul" style="display: none;" id="id_matkul">
                      <small class="help-block"></small>
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success" id="button-reg" name="simpan">
                      Simpan
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Keaktifan -->
    <div class="modal fade" id="myModalKeaktifan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel" ><b>Input Nilai</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/update/keaktifan');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Id Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_mahasiswa" disabled>
                      <input type="text" class="form-control" name="id_mahasiswa" style="display: none;" id="id_mahasiswa" >
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">NIM Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nim" disabled>
                      <input type="text" class="form-control" name="nim" style="display: none;" id="nim">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_mhs" disabled>
                      <input type="text" class="form-control" name="nama_mhs" style="display: none;" id="nama_mhs">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">  
                  <label class="col-md-4 control-label">Nilai Keaktifan</label> 
                    <div class="table-responsive">  
                         <table class="table table-bordered" id="keaktifan_field">  
                              
                         </table>  
                    </div>    
                </div>  
                <div class="form-group">
                  <!-- <label class="col-md-4 control-label">ID Matakuliah</label> -->
                    <div class="col-md-6 has-error">
                     <!--  <input type="text" class="form-control" name="id_matkul" disabled> -->
                      <input type="text" class="form-control" name="id_matkul" style="display: none;" id="id_matkul">
                      <small class="help-block"></small>
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success" id="button-reg" name="simpan">
                      Simpan
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal tambah-->
      <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel" ><b>Input Nilai</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php //echo base_url('Perpustakaan/addNew/nilai');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Id Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_mahasiswa" disabled>
                      <input type="text" class="form-control" name="id_mahasiswa" style="display: none;" id="id_mahasiswa" >
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">NIM Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nim" disabled>
                      <input type="text" class="form-control" name="nim" style="display: none;" id="nim">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_mhs" disabled>
                      <input type="text" class="form-control" name="nama_mhs" style="display: none;" id="nama_mhs">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Mandiri</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_mandiri" id="nilai_mandiri" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Kelompok</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_kelompok" id="nilai_kelompok" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Keaktifan</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_keaktifan" id="nilai_keaktifan" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Quiz</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_quiz" id="nilai_quiz" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success" id="button-reg" name="simpan">
                      Simpan
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> -->
  <!-- ------------------------------------------------------------------------------------------------------------------------------>
   <!--  Modal Edit-->
     <!--  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Input Nilai</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php //echo base_url('Perpustakaan/addNew/nilai');?>" enctype="multipart/form-data">
                <input type="hidden" name="id"> -->
                <!-- <div class="form-group">
                  <label class="col-md-4 control-label">Id Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_mahasiswa" disabled>
                      <input type="text" class="form-control" name="id_mahasiswa" style="display: none;" id="id_mahasiswa" >
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">NIM Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nim" disabled>
                      <input type="text" class="form-control" name="nim" style="display: none;" id="nim">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_mhs" disabled>
                      <input type="text" class="form-control" name="nama_mhs" style="display: none;" id="nama_mhs">
                      <small class="help-block"></small>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">ID Matakuliah</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_matkul" disabled>
                      <input type="text" class="form-control" name="id_matkul" style="display: none;" id="id_matkul">
                      <small class="help-block"></small>
                      <small class="help-block"></small>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Mandiri</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_mandiri" id="nilai_mandiri">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Kelompok</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_kelompok" id="nilai_kelompok">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Keaktifan</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_keaktifan" id="nilai_keaktifan">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Quiz</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_quiz" id="nilai_quiz">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai UTS</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_uts" id>
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">Nilai UAS</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_uas" id>
                      <small class="help-block"></small>
                    </div>
                </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" name="submit" class="btn btn-success" id="button-reg">
                    Simpan
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->
    <!--end of Modal 

    Modal Edit-->
      <!-- <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Input Nilai</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php //echo base_url('Perpustakaan/update/nilai');?>" enctype="multipart/form-data">
                <input type="hidden" name="id"> -->
                <!-- <div class="form-group">
                  <label class="col-md-4 control-label">Id Nilai</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_nilai" disabled>
                      <input type="text" class="form-control" name="id_nilai" style="display: none;" id="id_nilai" >
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Id Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_mahasiswa" disabled>
                      <input type="text" class="form-control" name="id_mahasiswa" style="display: none;" id="id_mahasiswa" >
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">NIM Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nim" disabled>
                      <input type="text" class="form-control" name="nim" style="display: none;" id="nim">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Mahasiswa</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_mhs" disabled>
                      <input type="text" class="form-control" name="nama_mhs" style="display: none;" id="nama_mhs">
                      <small class="help-block"></small>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">ID Matakuliah</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_matkul" disabled>
                      <input type="text" class="form-control" name="id_matkul" style="display: none;" id="id_matkul">
                      <small class="help-block"></small>
                      <small class="help-block"></small>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Mandiri</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_mandiri" id="nilai_mandiri">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Kelompok</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_kelompok" id="nilai_kelompok">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Keaktifan</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_keaktifan" id="nilai_keaktifan">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai Tugas Quiz</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_quiz" id="nilai_quiz">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nilai UTS</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_uts" id="nilai_uts">
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">Nilai UAS</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nilai_uas" id="nilai_uas">
                      <small class="help-block"></small>
                    </div>
                </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" name="submit" class="btn btn-success" id="button-reg">
                    Simpan
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> --><!--end of Modal --> 

  </section>
</div>
  <?php $this->load->view('admin/layout/footer') ?> 
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/layout/scrip') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/admin/plugins')?>/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/admin/plugins')?>/datatables/dataTables.bootstrap.min.js"></script>

    <script>
      // $(function () {
      //     $('#dataMateri').DataTable({"pageLength": 10});
      //     $('#tambahMateri').click(function(){
      //     $('input+small').text('');
      //     $('input').parent().removeClass('has-error');
      //     $('select').parent().removeClass('has-error');
      //     $('#myModal').modal('show');
      //     return false;
      //   });
      //     $('.editmateri').click(function(){
      //     $('input+small').text('');
      //     $('input').parent().removeClass('has-error');
      //     $('select').parent().removeClass('has-error');
      //     $('#myModal2').modal('show');

      //     var form = "#myModal2";

      //     $(form).find('input[name="id_mahasiswa"]').val($(this).attr('data-id_mahasiswa'));
      //     $(form).find('input[name="nim"]').val($(this).attr('data-nim'));
      //     $(form).find('input[name="nama_mhs"]').val($(this).attr('data-nama_mhs'));
      //     $(form).find('input[name="id_matkul"]').val($(this).attr('data-id_matkul'));
      //     insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
      //     $(form).find('#formEditKelas').attr('action',insert);
      //     return false;
      //   });
      // });

      // $(function () {
      //   //   $('#dataMateri').DataTable({"pageLength": 10});
      //   //   $('#tambahMateri').click(function(){
      //   //   $('input+small').text('');
      //   //   $('input').parent().removeClass('has-error');
      //   //   $('select').parent().removeClass('has-error');
      //   //   $('#myModal').modal('show');
      //   //   return false;
      //   // });
      //     $('.editmateri2').click(function(){
      //     $('input+small').text('');
      //     $('input').parent().removeClass('has-error');
      //     $('select').parent().removeClass('has-error');
      //     $('#myModal3').modal('show');

      //     var form = "#myModal3";

      //     $(form).find('input[name="id_mahasiswa"]').val($(this).attr('data-id_mahasiswa'));
      //     $(form).find('input[name="nim"]').val($(this).attr('data-nim'));
      //     $(form).find('input[name="nama_mhs"]').val($(this).attr('data-nama_mhs'));
      //     $(form).find('input[name="id_matkul"]').val($(this).attr('data-id_matkul'));
      //     $(form).find('input[name="nilai_mandiri"]').val($(this).attr('data-nilai_mandiri'));
      //     $(form).find('input[name="nilai_keaktifan"]').val($(this).attr('data-nilai_keaktifan'));
      //     $(form).find('input[name="nilai_kelompok"]').val($(this).attr('data-nilai_kelompok'));
      //     $(form).find('input[name="nilai_quiz"]').val($(this).attr('data-nilai_quiz'));
      //     $(form).find('input[name="nilai_uts"]').val($(this).attr('data-nilai_uts'));
      //     $(form).find('input[name="nilai_uas"]').val($(this).attr('data-nilai_uas'));
      //     $(form).find('input[name="id_nilai"]').val($(this).attr('data-id_nilai'));


      //     insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
      //     $(form).find('#formEditKelas').attr('action',insert);
      //     return false;
      //   });
      // });
    </script>

    <script type="text/javascript">
      $(function () {
          
          $('.editmateriUjian').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModalUjian').modal('show');

          var form = "#myModalUjian";

          $(form).find('input[name="id_mahasiswa"]').val($(this).attr('data-id_mahasiswa'));
          $(form).find('input[name="nim"]').val($(this).attr('data-nim'));
          $(form).find('input[name="nama_mhs"]').val($(this).attr('data-nama_mhs'));
          $(form).find('input[name="id_matkul"]').val($(this).attr('data-id_matkul'));
          $(form).find('input[name="nilai_uts"]').val($(this).attr('data-nilai_uts'));
          $(form).find('input[name="nilai_uas"]').val($(this).attr('data-nilai_uas'));
          return false;
        });
      });
    </script>

    <script type="text/javascript">
      $(function () {
          $('.editmateriMandiri').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModalMandiri').modal('show');

          var form = "#myModalMandiri";

          $(form).find('input[name="id_mahasiswa"]').val($(this).attr('data-id_mahasiswa'));
          $(form).find('input[name="nim"]').val($(this).attr('data-nim'));
          $(form).find('input[name="nama_mhs"]').val($(this).attr('data-nama_mhs'));
          $(form).find('input[name="id_matkul"]').val($(this).attr('data-id_matkul'));
          
          $('.row_mandiri').remove();
          
          var idMandiri = $(this).attr('data-jumlah_nilai_mandiri');

          if($(this).attr('data-jumlah_nilai_mandiri')==0){
            $('#mandiri_field').append('<tr class="row_mandiri" id="row_kelompok'+idMandiri.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" min="0" max="100" id="nilai_kelompok'+idMandiri.toString()+'" /></td><td><button type="button" name="add" id="add_kelompok" class="btn btn-success">Add More</button></td></tr>');
          }
          else{
            for(var i=1; i<=$(this).attr('data-jumlah_nilai_mandiri'); i++){
            if(i==1){
              $('#mandiri_field').append('<tr class="row_mandiri" id="row_mandiri'+i.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" min="0" max="100" id="nilai_mandiri'+i.toString()+'" /></td><td><button type="button" name="add" id="add_mandiri" class="btn btn-success">Add More</button></td></tr>');   
            }
            else{
              $('#mandiri_field').append('<tr class="row_mandiri" id="row_mandiri'+i.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" id="nilai_mandiri'+i.toString()+'" /></td><td><button type="button" name="remove" id="'+i.toString()+'" class="btn btn-danger btn_remove_mandiri">X</button></td></tr>');
            }
            //var stringMandiri2 = 'data-nilai_mandiri'+i.toString();
            $(form).find('input[id="nilai_mandiri'+i.toString()+'"]').val($(this).attr('data-nilai_mandiri'+i.toString()));
            }  
          }
          
          
          $('#add_mandiri').click(function(){  
               idMandiri++;  
               $('#mandiri_field').append('<tr id="row_mandiri'+idMandiri.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+idMandiri.toString()+'" class="btn btn-danger btn_remove_mandiri">X</button></td></tr>');  
          });  
          
          return false;
        });
      });
    </script>

     <script>  
     $(document).ready(function(){    
        $(document).on('click', '.btn_remove_mandiri', function(){  
             var button_id = $(this).attr("id");   
             $('#row_mandiri'+button_id+'').remove();  
        });  
     });  
     </script>

      <script type="text/javascript">
      $(function () {
          $('.editmateriKelompok').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModalKelompok').modal('show');

          var form = "#myModalKelompok";

          $(form).find('input[name="id_mahasiswa"]').val($(this).attr('data-id_mahasiswa'));
          $(form).find('input[name="nim"]').val($(this).attr('data-nim'));
          $(form).find('input[name="nama_mhs"]').val($(this).attr('data-nama_mhs'));
          $(form).find('input[name="id_matkul"]').val($(this).attr('data-id_matkul'));
          
          $('.row_kelompok').remove();
          
          var idKelompok = $(this).attr('data-jumlah_nilai_kelompok');
          
          if($(this).attr('data-jumlah_nilai_kelompok')==0){
            $('#kelompok_field').append('<tr class="row_kelompok" id="row_kelompok'+idKelompok.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" min="0" max="100" id="nilai_kelompok'+idKelompok.toString()+'" /></td><td><button type="button" name="add" id="add_kelompok" class="btn btn-success">Add More</button></td></tr>');
          }
          else{
            for(var i=1; i<=$(this).attr('data-jumlah_nilai_kelompok'); i++){
              if(i==1){
                $('#kelompok_field').append('<tr class="row_kelompok" id="row_kelompok'+i.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" min="0" max="100" id="nilai_kelompok'+i.toString()+'" /></td><td><button type="button" name="add" id="add_kelompok" class="btn btn-success">Add More</button></td></tr>');   
              }
              else{
                $('#kelompok_field').append('<tr class="row_kelompok" id="row_kelompok'+i.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" id="nilai_kelompok'+i.toString()+'" /></td><td><button type="button" name="remove" id="'+i.toString()+'" class="btn btn-danger btn_remove_kelompok">X</button></td></tr>');
              }
              
              $(form).find('input[id="nilai_kelompok'+i.toString()+'"]').val($(this).attr('data-nilai_kelompok'+i.toString()));
            }
          }
          
          
          $('#add_kelompok').click(function(){  
               idKelompok++;  
               $('#kelompok_field').append('<tr id="row_kelompok'+idKelompok.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+idKelompok.toString()+'" class="btn btn-danger btn_remove_kelompok">X</button></td></tr>');  
          });  
          
          return false;
        });
      });
    </script>

     <script>  
     $(document).ready(function(){    
        $(document).on('click', '.btn_remove_kelompok', function(){  
             var button_id = $(this).attr("id");   
             $('#row_kelompok'+button_id+'').remove();  
        });  
     });  
     </script>

     <script type="text/javascript">
      $(function () {
          $('.editmateriQuiz').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModalQuiz').modal('show');

          var form = "#myModalQuiz";

          $(form).find('input[name="id_mahasiswa"]').val($(this).attr('data-id_mahasiswa'));
          $(form).find('input[name="nim"]').val($(this).attr('data-nim'));
          $(form).find('input[name="nama_mhs"]').val($(this).attr('data-nama_mhs'));
          $(form).find('input[name="id_matkul"]').val($(this).attr('data-id_matkul'));
          
          $('.row_quiz').remove();
          
          var idQuiz = $(this).attr('data-jumlah_nilai_quiz');
          
          if($(this).attr('data-jumlah_nilai_quiz')==0){
            $('#quiz_field').append('<tr class="row_quiz" id="row_quiz'+idQuiz.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" min="0" max="100" id="nilai_quiz'+idQuiz.toString()+'" /></td><td><button type="button" name="add" id="add_quiz" class="btn btn-success">Add More</button></td></tr>');
          }
          else{
            for(var i=1; i<=$(this).attr('data-jumlah_nilai_quiz'); i++){
              if(i==1){
                $('#quiz_field').append('<tr class="row_quiz" id="row_quiz'+i.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" min="0" max="100" id="nilai_quiz'+i.toString()+'" /></td><td><button type="button" name="add" id="add_quiz" class="btn btn-success">Add More</button></td></tr>');   
              }
              else{
                $('#quiz_field').append('<tr class="row_quiz" id="row_quiz'+i.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" id="nilai_quiz'+i.toString()+'" /></td><td><button type="button" name="remove" id="'+i.toString()+'" class="btn btn-danger btn_remove_quiz">X</button></td></tr>');
              }
              
              $(form).find('input[id="nilai_quiz'+i.toString()+'"]').val($(this).attr('data-nilai_quiz'+i.toString()));
            }
          }
          
          
          $('#add_quiz').click(function(){  
               idQuiz++;  
               $('#quiz_field').append('<tr id="row_quiz'+idQuiz.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+idQuiz.toString()+'" class="btn btn-danger btn_remove_quiz">X</button></td></tr>');  
          });  
          
          return false;
        });
      });
    </script>

     <script>  
     $(document).ready(function(){    
        $(document).on('click', '.btn_remove_quiz', function(){  
             var button_id = $(this).attr("id");   
             $('#row_quiz'+button_id+'').remove();  
        });  
     });  
     </script>

     <script type="text/javascript">
      $(function () {
          $('.editmateriKeaktifan').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModalKeaktifan').modal('show');

          var form = "#myModalKeaktifan";

          $(form).find('input[name="id_mahasiswa"]').val($(this).attr('data-id_mahasiswa'));
          $(form).find('input[name="nim"]').val($(this).attr('data-nim'));
          $(form).find('input[name="nama_mhs"]').val($(this).attr('data-nama_mhs'));
          $(form).find('input[name="id_matkul"]').val($(this).attr('data-id_matkul'));
          
          $('.row_keaktifan').remove();
          
          var idKeaktifan = $(this).attr('data-jumlah_nilai_keaktifan');
          
          if($(this).attr('data-jumlah_nilai_keaktifan')==0){
            $('#keaktifan_field').append('<tr class="row_keaktifan" id="row_keaktifan'+idKeaktifan.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" min="0" max="100" id="nilai_keaktifan'+idKeaktifan.toString()+'" /></td><td><button type="button" name="add" id="add_keaktifan" class="btn btn-success">Add More</button></td></tr>');
          }
          else{
            for(var i=1; i<=$(this).attr('data-jumlah_nilai_keaktifan'); i++){
              if(i==1){
                $('#keaktifan_field').append('<tr class="row_keaktifan" id="row_keaktifan'+i.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" min="0" max="100" id="nilai_keaktifan'+i.toString()+'" /></td><td><button type="button" name="add" id="add_keaktifan" class="btn btn-success">Add More</button></td></tr>');   
              }
              else{
                $('#keaktifan_field').append('<tr class="row_keaktifan" id="row_keaktifan'+i.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" id="nilai_keaktifan'+i.toString()+'" /></td><td><button type="button" name="remove" id="'+i.toString()+'" class="btn btn-danger btn_remove_keaktifan">X</button></td></tr>');
              }
              
              $(form).find('input[id="nilai_keaktifan'+i.toString()+'"]').val($(this).attr('data-nilai_keaktifan'+i.toString()));
            }
          }
          
          
          $('#add_keaktifan').click(function(){  
               idKeaktifan++;  
               $('#keaktifan_field').append('<tr id="row_quiz'+idKeaktifan.toString()+'"><td><input type="number" name="name[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+idKeaktifan.toString()+'" class="btn btn-danger btn_remove_keaktifan">X</button></td></tr>');  
          });  
          
          return false;
        });
      });
    </script>

     <script>  
     $(document).ready(function(){    
        $(document).on('click', '.btn_remove_keaktifan', function(){  
             var button_id = $(this).attr("id");   
             $('#row_keaktifan'+button_id+'').remove();  
        });  
     });  
     </script>