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
        Template Pembelajaran
        <small>Data Template</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Pendidikan</li>
            <li class="active">Data Template</li>
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
                      <th>ID Template</th>
                      <th>Nama Template</th>
                      <th>File</th>
                      <th>Tanggal Post</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($template as $item){?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$item->id_template;?></td>
                      <td><?=$item->nama_template;?></td>
                       <td><a href="<?php echo base_url('/Perpustakaan/template/'.$item->file);?>"><?=$item->file;?></a>
                      <td><?=$item->tgl_post;?></td>
                      <td>
                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal<?php echo $item->id_template; ?>"><i class="fa fa-pencil"></i></button>
                        <a href="<?=base_url("/Perpustakaan/hapus/template/{$item->id_template}");?>" onclick="return confirm('Yakin Hapus Template <?=$item->nama_template?> ?')" class="btn btn-danger btn-xs" alt="Hapus Kusri"><i class="fa fa-trash"></i>
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
              <h4 class="modal-title" id="myModalLabel" ><b>Tambah Template</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/addNew/template');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Template</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_template" id="nama_template" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="exampleInputFile">File</label>
                  <div class="col-md-6 has-error">
                    <input type="file" id="exampleInputFile" class="form-control" name="file" id="file" required="">
                    <p class="help-block"><b>NB: type file : pdf|doc|docx|ppt|pptx. Ukuran maksimal 1 MB.</b></p>
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
  <?php foreach ($template as $second_item){?>

    <!-- Modal Edit-->
       <div class="modal fade" id="myModal<?php echo $second_item->id_template; ?>" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Template</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/template');?>" enctype="multipart/form-data">
                <input type="hidden" name="id_template" value="<?php echo $second_item->id_template; ?>">
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Template</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="nama_template" value="<?php echo $second_item->nama_template;?>">
                    <small class="help-block"></small>
                  </div>
                </div>
                <input type="hidden" class="form-control" name="sementara_file" value="<?php echo $item->file?>">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="exampleInputFile">File</label>
                  <div class="col-md-6">
                    <input type="file" id="exampleInputFile" class="form-control" name="file" id="file" >
                    <p class="help-block"></b>NB: type file : pdf|doc|docx|ppt|pptx. Ukuran maksimal 1 MB.</b></p>
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
<?php
}
?>
    
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
