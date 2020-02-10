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
            <li class="active">Master Data Peminjaman Buku</li>
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
                  <h3 class="box-title">Data Peminjaman Buku
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="dataBuku" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Petugas Yang Melayani</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Mengembalikan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $i = 1;
                     foreach ($peminjam as $item){  ?>
                      <tr>
                        <td><?=$i++;?></td>
                        <td><?=$item->anggota;?></td>
                        <td><?=$item->petugas;?></td>
                        <td><?=$item->JudulBuku;?></td>
                        <td><?=$item->Tgl_pinjam;?></td>
                        <?php if($item->Tgl_kembali == NULL || $item->Tgl_kembali == 0000-00-00){ ?>
                        <td>
                          <a href="<?=base_url("/Perpustakaan/kembali/{$item->Kd_pinjam}");?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Buku Kembali Hari ini ?</a>
                        </td>
                        <?php }else{ ?>
                        <td>
                          <?=$item->Tgl_kembali;?>
                        </td>
                        <?php } ?>
                        <td>
                            <a href="<?=base_url("/Perpustakaan/hapus/peminjam/{$item->Kd_pinjam}");?>" onclick="return confirm('Yakin Hapus Buku <?=$item->JudulBuku ?>?')" class="btn btn-danger btn-xs" alt="Hapus Kusri"><i class="fa fa-trash"></i> Hapus</a>
                            <a 
                              data-id_pinjam="<?=$item->Kd_pinjam?>"
                              data-judul = "<?=$item->JudulBuku?>"
                              data-id_buku = "<?=$item->Kd_register?>"
                              data-anggota = "<?=$item->anggota?>"
                              data-id_anggota = "<?=$item->Kd_anggota?>"
                              data-petugas = "<?=$item->petugas?>"
                              data-id_petugas = "<?=$item->Kd_petugas?>"
                              data-pinjam = "<?=$item->Tgl_pinjam?>"
                              data-kembali = "<?=$item->Tgl_kembali?>"
                              class="btn btn-warning btn-xs editbuku" alt="edit Buku"><i class="fa fa-pencil"> Edit</i></a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Petugas Yang Melayani</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Mengembalikan</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
          <!-- Modal -->
          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title" id="myModalLabel">Edit Peminjaman</h4>
                      </div>
                      <div class="modal-body">

                          <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/peminjam');?>" enctype="multipart/form-data">
                              <input type="hidden" name="id_pinjam">
                              <input type="hidden" name="id_buku">
                              <input type="hidden" name="id_anggota">
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Nama Peminjam</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="peminjam" disabled>
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Nama Petugas</label>
                                  <div class="col-md-6 has-error">
                                      <select class="form-control" name="petugas" >
                                          <?php  foreach ($petugas as $data) { ?>
                                          <option value="<?=$data->Kd_Petugas?>"><?=$data->Nama?></option>
                                          <?php } ?>
                                      </select>
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Judul Buku</label>
                                  <div class="col-md-6 has-error">
                                      <input type="text" class="form-control" name="judul" disabled>
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Tanggal Peminjaman</label>
                                  <div class="col-md-6 has-error">
                                      <input type="date" class="form-control" name="pinjam">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Tanggal Mengembalikan</label>
                                  <div class="col-md-6 has-error">
                                      <input type="date" class="form-control" name="kembali">
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
            //console.log('test');
            return false;
        });

          $('.editbuku').click(function(){
            $('input+small').text('');
            $('input').parent().removeClass('has-error');
            $('select').parent().removeClass('has-error');

            //alert($(this).attr('data-id_petugas'));

            $('#myModal2').modal('show');

            var form = "#myModal2";

            $(form).find('input[name="id_buku"]').val($(this).attr('data-id_buku'));
            $(form).find('input[name="id_pinjam"]').val($(this).attr('data-id_pinjam'));
            $(form).find('input[name="id_anggota"]').val($(this).attr('data-id_anggota'));

            $(form).find('input[name="peminjam"]').val($(this).attr('data-anggota'));
            $(form).find('input[name="judul"]').val($(this).attr('data-judul'));
            $(form).find('input[name="pinjam"]').val($(this).attr('data-pinjam'));
            $(form).find('input[name="kembali"]').val($(this).attr('data-kembali'));
            $(form).find('option:selected').val($(this).attr('data-id_petugas'));

            //console.log('test');

            return false;
        });

      });

    </script>

@endsection
