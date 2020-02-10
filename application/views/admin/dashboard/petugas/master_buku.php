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
            <li class="active">Master Data Buku</li>
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
                  <h3 class="box-title">Data Buku
                   <br><br> <a class=" btn-success btn-sm" id="tambahBuku">Tambah</a>
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="dataBuku" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode </th>
                        <th>Judul </th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $i = 1;
                     foreach ($buku as $item){  ?>
                      <tr>
                        <td><?=$i++;?></td>
                        <td><?=$item->Kd_Register;?></td>
                        <td><?=$item->JudulBuku;?></td>
                        <td><?=$item->Pengarang;?></td>
                        <td><?=$item->Penerbit;?></td>
                        <td><?=$item->TahunTerbit;?></td>
                        <td>
                            <a href="<?=base_url("/Perpustakaan/hapus/buku/{$item->Kd_Register}");?>" onclick="return confirm('Yakin Hapus Buku ?')" class="btn btn-danger btn-xs" alt="Hapus Kusri"><i class="fa fa-trash"></i> Hapus</a>
                            <a 
                              data-id_buku="<?=$item->Kd_Register?>"
                              data-judul = "<?=$item->JudulBuku?>"
                              data-pengarang = "<?=$item->Pengarang?>"
                              data-penerbit = "<?=$item->Penerbit?>"
                              data-tahun = "<?=$item->TahunTerbit?>"
                              class="btn btn-warning btn-xs editbuku" alt="edit Buku"><i class="fa fa-pencil"> Edit</i></a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Kode </th>
                        <th>Judul </th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
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
                          <button type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >×</span></button>
                          <h4 class="modal-title" id="myModalLabel" ><b>Tambah Data Buku</b></h4>
                      </div>
                      <div class="modal-body">

                          <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/addNew/buku');?>" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Judul</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="judul">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Nama Pengarang</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="pengarang">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Penerbit</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="penerbit">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Tahun Terbit</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="tahun">
                                      <small class="help-block"></small>
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
          <!-- Modal -->
          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title" id="myModalLabel">Edit Buku</h4>
                      </div>
                      <div class="modal-body">

                          <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/buku');?>" enctype="multipart/form-data">
                              <input type="hidden" name="id">
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Judul Buku</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="judul">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Nama Pengarang</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="pengarang">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Penerbit</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="penerbit">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Tahun Terbit</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="tahun">
                                      <small class="help-block"></small>
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

        $('#dataBuku').DataTable({"pageLength": 10});
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
            $(form).find('input[name="id"]').val($(this).attr('data-id_buku'));
            $(form).find('input[name="judul"]').val($(this).attr('data-judul'));
            $(form).find('input[name="penerbit"]').val($(this).attr('data-penerbit'));
            $(form).find('input[name="pengarang"]').val($(this).attr('data-pengarang'));
            $(form).find('input[name="tahun"]').val($(this).attr('data-tahun'));
            insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
            $(form).find('#formEditKelas').attr('action',insert);
            return false;
        });
      });
    </script>

@endsection
