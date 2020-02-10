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
        Materi Pembelajaran
        <small>Data Materi Kuliah</small>
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
                      <th>Kode Materi</th>
                      <th>Nama Materi</th>
                      <th>Deskripsi</th>
                      <th>Tanggal Post</th>
                      <th>File Materi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($materi as $item){?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$item->kode_materi;?></td>
                      <td><?=$item->nama_materi;?></td>
                      <td><?=$item->deskripsi;?></td>
                      <td><?=$item->tanggal_post;?></td>
                      <!-- ini untuk nampilin nama file yang di upload  -->
                      <td><a href="<?php echo base_url('/Perpustakaan/file/'.$item->file);?>"><?=$item->file;?></a></td> 
                      <td>
                        <a href="<?=base_url("/Perpustakaan/get_file/{$item->kode_materi}");?>" class="btn btn-info btn-xs"><i class="fa fa-download"></i></a>
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
      <!-- Modal tambah-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel" ><b>Tambah Materi</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/addNew/materi');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode Materi</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="kode_materi" id="kode_materi" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-4 control-label">ID Matkul</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="id_matkul" id="id_matkul" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Materi</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_materi" id="nama_materi" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Deskripsi</label>
                    <!-- <div class="col-md-6 has-error"> -->
                    <div class="col-md-6">
                      <textarea type="text" class="form-control" name="deskripsi" id="deskripsi"></textarea>
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="exampleInputFile">File</label>
                  <div class="col-md-6 has-error">
                    <input type="file" id="exampleInputFile" class="form-control" name="file" id="file" required="">
                    <p class="help-block">NB: file harus bertype pdf. Ukuran maksimal 1 MB.</p>
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
  <!-- ------------------------------------------------------------------------------------------------------------------------------>
    <!-- Modal Edit-->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Materi</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/materi');?>" enctype="multipart/form-data">
                <!-- <input type="hidden" name="id"> -->
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode Materi</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="kode_materi" disabled>
                     <input type="text" class="form-control" name="kode_materi" style="display: none;" id="kode_materi">
                    <small class="help-block"></small>
                  </div>
                </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Materi</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="nama_materi" id="nama_materi">
                    <small class="help-block"></small>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Deskripsi</label>
                <div class="col-md-6 has-error">
                  <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                  <small class="help-block"></small>
                </div>
              </div>
               <!--  kata indah ini untuk input value sementara -->
                <input type="hidden" class="form-control" name="sementara_file" value="<?php echo $item->file?>">

              <div class="form-group">
                <label class="col-md-4 control-label" for="exampleInputFile">File</label>
                <div class="col-md-6 has-error">
                  <input type="file" id="exampleInputFile" class="form-control" name="file" id="file">
                  <p class="help-block">NB: file harus bertype pdf. Ukuran maksimal 1 MB.</p>
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
    </div><!--end of Modal -->
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
      $(function () {
          $('#dataMateri').DataTable({"pageLength": 10});
          $('#tambahMateri').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModal').modal('show');
          return false;
        });
          $('.editmateri').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModal2').modal('show');

          var form = "#myModal2";

          $(form).find('input[name="kode_materi"]').val($(this).attr('data-kode_materi'));
          $(form).find('input[name="nama_materi"]').val($(this).attr('data-nama_materi'));
          $(form).find('input[name="deskripsi"]').val($(this).attr('data-deskripsi'));
          $(form).find('input[name="file"]').val($(this).attr('data-file'));
          insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
          $(form).find('#formEditKelas').attr('action',insert);
          return false;
        });
      });
    </script>
