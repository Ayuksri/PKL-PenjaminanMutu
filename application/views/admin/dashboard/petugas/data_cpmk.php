<!DOCTYPE html>
<html>
<?php $this->load->view('admin/layoutA/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('admin/layoutA/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/layoutA/sidebar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Matakuliah
        <small>Data MataKuliah</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Pendidikan</li>
            <li class="active">Data Matakuliah</li>
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
                <div class="box-header">
                   <br><a class="btn btn-success" id="tambahMateri" ><i class="fa fa-plus"></i> Tambah </a>
                </div>
                <table id="dataMateri" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID CP-MK</th>
                      <th>Kode CP-MK</th>
                      <th>Deskripsi CP-MK</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($cp_mk as $item){?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$item->id_cp;?></td>
                      <td><?=$item->kode_cp;?></td>
                      <td><?=$item->deskripsi_cp;?></td>
                      <td>
                        <a 
                            data-kode_cp="<?=$item->kode_cp?>"
                            data-deskripsi_cp="<?=$item->deskripsi_cp?>"
                            class="btn btn-warning btn-xs editmateri" alt="edit Buku" href="<?php echo base_url("Perpustakaan/update/cp/{$item->id_cp}");?>"><i class="fa fa-pencil"></i>
                        </a>
                        <a href="<?=base_url("/Perpustakaan/hapus/cp/{$item->id_cp}");?>" onclick="return confirm('Yakin Hapus Materi <?=$item->kode_cp?> ?')" class="btn btn-danger btn-xs" alt="Hapus Kusri"><i class="fa fa-trash"></i>
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
              <h4 class="modal-title" id="myModalLabel" ><b>Tambah CP-MK</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/addNew/cp');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode CP-MK</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="kode_cp" id="kode_cp" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Deskripsi CP-MK</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="deskripsi_cp" id="deskripsi_cp" required="">
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
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit CP-MK</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/cp');?>" enctype="multipart/form-data">
                <!-- <input type="hidden" name="id"> -->
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode CP</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="kode_cp" disabled>
                    <input type="text" class="form-control" name="kode_cp" style="display: none;" id="kode_cp">
                    <small class="help-block"></small>
                  </div>
                </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Deskripsi CP</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="deskripsi_cp" id="deskripsi_cp" >
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
    </div> 
  </section>
  </div>
  <?php $this->load->view('admin/layoutA/footer') ?> 
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/layoutA/scrip') ?>
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

          $(form).find('input[name="kode_cp"]').val($(this).attr('data-kode_cp'));
          $(form).find('input[name="deskripsi_cp"]').val($(this).attr('data-deskripsi_cp'));
          insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
          $(form).find('#formEditKelas').attr('action',insert);
          return false;
        });
      });
    </script>
