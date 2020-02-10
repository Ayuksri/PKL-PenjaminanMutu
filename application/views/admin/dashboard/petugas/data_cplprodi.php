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
        CPL-PRODI
        <small>Data CPL</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Pendidikan</li>
            <li class="active">Data CPL</li>
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
                      <th>Id CPL-PRODI</th>
                      <th>Kode CPL-PRODI</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($cpl_prodi as $item){?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$item->id_cpl;?></td>
                      <td><?=$item->kode_cpl;?></td>
                      <td><?=$item->deskripsi_cpl;?></td>
                      <td>
                        <a 
                              data-kode_cpl="<?=$item->kode_cpl?>"
                              data-deskripsi_cpl="<?=$item->deskripsi_cpl?>"
                              class="btn btn-warning btn-xs editmateri" alt="edit Buku" href="<?php echo base_url("Perpustakaan/update/cpl/{$item->id_cpl}");?>"><i class="fa fa-pencil"></i>
                        </a>
                        <a href="<?=base_url("/Perpustakaan/hapus/cpl/{$item->id_cpl}");?>" onclick="return confirm('Yakin Hapus Materi <?=$item->kode_cpl?> ?')" class="btn btn-danger btn-xs" alt="Hapus Kusri"><i class="fa fa-trash"></i>
                        </td>
                        <!-- <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal<?php echo $item->id_cpl; ?>"><i class="fa fa-pencil"></i></button>
                        <a href="<?=base_url("/Perpustakaan/hapus/cpl/{$item->kode_cpl}");?>"" onclick="return confirm('Yakin Hapus CPL-PRODI <?=$item->kode_cpl?> ?')" class="btn btn-danger btn-xs" alt="Hapus Kusri"><i class="fa fa-trash"></i> -->
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
              <h4 class="modal-title" id="myModalLabel" ><b>Tambah CPL-PRODI</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/addNew/cpl');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode CPL-Prodi</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="kode_cpl" id="kode_cpl" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Deskripsi</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="deskripsi_cpl" id="deskripsi_cpl" required="">
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
  <!------------------------------------------------------------------------------------------------------------------------------->
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit CPL-PRODI</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/cpl');?>" enctype="multipart/form-data">
                <!-- <input type="hidden" name="id"> -->
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode CPL</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="kode_cpl" disabled>
                    <input type="text" class="form-control" name="kode_cpl" style="display: none;" id="kode_cpl">
                    <small class="help-block"></small>
                  </div>
                </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Deskripsi CPL</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="deskripsi_cpl" id="deskripsi_cpl" >
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

          $(form).find('input[name="kode_cpl"]').val($(this).attr('data-kode_cpl'));
          $(form).find('input[name="deskripsi_cpl"]').val($(this).attr('data-deskripsi_cpl'));
          insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
          $(form).find('#formEditKelas').attr('action',insert);
          return false;
        });
      });
    </script>
