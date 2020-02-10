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
                <table id="dataAnggota" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Template</th>
                      <th>Nama Template</th>
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($template as $item){?>
                      <td><?=$i++;?></td>
                      <td><?=$item->id_template;?></td>
                      <td><?=$item->nama_template;?></td>
                      <td><a href="<?php echo base_url('/Perpustakaan/file_template/'.$item->file);?>"><?=$item->file;?></a>
                      <td>
                        <a href="<?=base_url("/Perpustakaan/get_file_template/{$item->id_template}");?>" class="btn btn-info btn-xs"><i class="fa fa-download"></i></a>
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
          $('#dataAnggota').DataTable({"pageLength": 10});
          $('#tambahBuku').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModal').modal('show');
          return false;
        });
          $('.editbuku').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModal2').modal('show');

          var form = "#myModal2";

          $(form).find('input[name="kode_matkul"]').val($(this).attr('data-kode_matkul'));
          $(form).find('input[name="nama_matkul"]').val($(this).attr('data-nama_matkul'));
          $(form).find('input[name="kelas"]').val($(this).attr('data-kelas'));
          $(form).find('input[name="semester"]').val($(this).attr('data-semester'));
          insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
          $(form).find('#formEditKelas').attr('action',insert);
          return false;
        });
      });
    </script>
