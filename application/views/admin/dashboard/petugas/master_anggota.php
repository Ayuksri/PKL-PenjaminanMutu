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
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Master Data Anggota</li>
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
                <div class="box-header">
                  <h3 class="box-title">Data Anggota
                    <br><br><a class="btn-success btn-sm" id="tambahBuku">Tambah</a>
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="dataAnggota" class="table table-bordered table-hover">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Anggota</th>
                        <th>Prodi</th>
                        <th>Jenjang</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $i = 1;
                     foreach ($anggota as $item){  ?>
                      <tr>
                        <td><?=$i++;?></td>
                        <td><?=$item->Kd_Anggota;?></td>
                        <td><?=$item->Nama;?></td>
                        <td><?=$item->Prodi;?></td>
                        <td><?=$item->Jenjang;?></td>
                        <td><?=$item->Alamat;?></td>
                        <td>
                            <a href="<?=base_url("/Perpustakaan/hapus/anggota/{$item->Kd_Anggota}");?>" onclick="return confirm('Yakin Hapus Buku <?=$item->Nama ?>?')" class="btn btn-danger btn-xs" alt="Hapus Kusri"><i class="fa fa-trash"></i> Hapus</a>
                            <a 
                              data-id_anggota="<?=$item->Kd_Anggota?>"
                              data-nama = "<?=$item->Nama?>"
                              data-prodi = "<?=$item->Prodi?>"
                              data-jenjang = "<?=$item->Jenjang?>"
                              data-alamat = "<?=$item->Alamat?>"
                              class="btn btn-warning btn-xs editbuku" alt="edit Buku"><i class="fa fa-pencil"> Edit</i></a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Anggota</th>
                        <th>Prodi</th>
                        <th>Jenjang</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title" id="myModalLabel">Tambah Anggota</h4>
                      </div>
                      <div class="modal-body">

                          <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/addNew/anggota');?>" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Nama Anggota</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="nama">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Prodi</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="prodi">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Jenjang</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="jenjang">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Alamat</label>
                                  <div class="col-md-6">
                                    <textarea class="form-control" name="alamat"></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary" id="button-reg">
                                          Simpan
                                      </button>
                                  </div>
                              </div>
                          </form>

                      </div>
                  </div>
              </div>
          </div>
          <!--end of Modal -->
          <!-- Modal -->
          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title" id="myModalLabel">Edit Anggota</h4>
                      </div>
                      <div class="modal-body">

                          <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/anggota');?>" enctype="multipart/form-data">
                              <input type="hidden" name="id">
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Nama Anggota</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="nama">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Prodi</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="prodi">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Jenjang</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="jenjang">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Alamat</label>
                                  <div class="col-md-6">
                                    <textarea class="form-control" name="alamat"></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-success" id="button-reg">
                                          Simpan
                                      </button>
                                  </div>
                              </div>
                          </form>

                      </div>
                  </div>
              </div>
          </div>
          <!--end of Modal -->
    </section>
    </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/layout/footer') ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
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

          $(form).find('input[name="id"]').val($(this).attr('data-id_anggota'));
          $(form).find('input[name="nama"]').val($(this).attr('data-nama'));
          $(form).find('input[name="prodi"]').val($(this).attr('data-prodi'));
          $(form).find('input[name="jenjang"]').val($(this).attr('data-jenjang'));
          $(form).find('textarea[name="alamat"]').val($(this).attr('data-alamat'));
          insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
          $(form).find('#formEditKelas').attr('action',insert);
          return false;
        });
      });
    </script>

@endsection
