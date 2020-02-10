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
                      <th>ID Matakuliah</th>
                      <th>Kode Matakuliah</th>
                      <th>Nama Matakuliah</th>
                      <th>Nama Dosen</th>
                      <th>Kelas</th>
                      <th>Jalur</th>
                      <th>Semester</th>
                      <th>Angkatan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($matakuliah as $item){?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$item->id_matkul;?></td>
                      <td><?=$item->kode_matkul;?></td>
                      <td><?=$item->nama_matkul;?></td>
                      <td><?=$item->nama;?></td>
                      <td><?=$item->kelas;?></td>
                      <td><?=$item->jalur;?></td>
                      <td><?=$item->semester;?></td>
                      <td><?=$item->angkatan_mhs;?></td>
                      <td>
                        <!-- <a 
                          data-id_matkul="<?=$item->id_matkul?>"
                          data-kode_matkul = "<?=$item->kode_matkul?>"
                          data-nama_matkul="<?=$item->nama_matkul?>"
                          data-nama="<?=$item->nama?>"
                          data-kelas = "<?=$item->kelas?>"
                          data-jalur = "<?=$item->jalur?>"
                          data-semester="<?=$item->semester?>"
                          data-angkatan_mhs="<?=$item->angkatan_mhs?>"
                          class="btn btn-warning btn-xs editmateri" alt="edit Buku" href="<?php// echo base_url("Perpustakaan/update/matakuliah/{$item->kode_matkul}");?>"><i class="fa fa-pencil"></i>
                        </a> -->
                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal<?php echo $item->id_matkul; ?>"><i class="fa fa-pencil"></i></button>
                        <a href="<?=base_url("/Perpustakaan/hapus/matakuliah/{$item->kode_matkul}");?>" onclick="return confirm('Yakin Hapus Matakuliah <?=$item->nama_matkul?> ?')" class="btn btn-danger btn-xs" alt="Hapus Kusri"><i class="fa fa-trash"></i>
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
              <h4 class="modal-title" id="myModalLabel" ><b>Tambah Matakuliah</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/addNew/matakuliah');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode Matakuliah</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="kode_matkul" id="kode_matkul" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Nama Matakuliah</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Pilih Dosen</label>
                  <div class="col-md-6 has-error">
                     <select class="form-control" name="nidn">
                        <option>===PILIH===</option>
                        <?php foreach($dosen as $data):?>
                          <option value="<?php echo $data->nidn;?>"><?php echo $data->nama;?></option>
                        <?php endforeach;?>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Kelas</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="kelas" id="kelas" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Jalur</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="jalur" id="jalur" required="">
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Pilih Semester</label>
                  <div class="col-md-6 has-error">
                     <select class="form-control" name="id_semester">
                        <option>===PILIH===</option>
                        <?php foreach ($semester as $data) { ?>
                          <option value="<?=$data->id_semester;?>"><?=$data->semester;?></option>
                        <?php } ?>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Pilih Angkatan</label>
                  <div class="col-md-6 has-error">
                     <select class="form-control" name="id_angkatan">
                        <option>===PILIH===</option>
                        <?php foreach ($angkatan as $data) { ?>
                          <option value="<?=$data->id_angkatan;?>"><?=$data->angkatan_mhs;?></option>
                        <?php } ?>
                      </select>
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
  <?php foreach ($matakuliah as $second_item){?>

    <!-- Modal Edit-->
       <div class="modal fade" id="myModal<?php echo $second_item->id_matkul; ?>" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Materi</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/matakuliah');?>" enctype="multipart/form-data">
                <input type="hidden" name="id_matkul" value="<?php echo $second_item->id_matkul; ?>">
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode Matakuliah</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="kode_matkul" value="<?php echo $second_item->kode_matkul;?>">
                    <!-- <input type="text" class="form-control" name="kode_matkul" style="display: none;" id="kode_matkul"> -->
                    <small class="help-block"></small>
                  </div>
                </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Matakuliah</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" value="<?php echo $second_item->nama_matkul;?>" name="nama_matkul" id="nama_matkul">
                    <small class="help-block"></small>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Dosen</label>
                <div class="col-md-6">
                  <select class="form-control" name="nidn">
                    <option selected=""><?php echo $second_item->nama;?></option>
                    <option>===PILIH===</option>
                    <?php foreach($dosen as $data):?>
                      <option value="<?php echo $data->nidn;?>"><?php echo $data->nama;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Kelas</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" value="<?php echo $second_item->kelas;?>" name="kelas" id="kelas">
                  <small class="help-block"></small>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Jalur</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" value="<?php echo $second_item->jalur;?>" name="jalur" id="jalur">
                  <small class="help-block"></small>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Semester</label>
                <div class="col-md-6">
                  <select class="form-control" name="id_semester">
                    <option selected="" value="<?=$second_item->id_semester;?>"><?php echo $second_item->semester;?></option>
                    <option>===PILIH===</option>
                    <?php foreach ($semester as $data) { ?>
                      <option value="<?=$data->id_semester;?>"><?=$data->semester;?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Angkatan</label>
                <div class="col-md-6">
                  <select class="form-control" name="id_angkatan">
                    <option selected="" value="<?php echo $second_item->id_angkatan; ?>">
                      <?php echo $second_item->angkatan_mhs;?>
                      </option>
                    <option>===PILIH===</option>
                    <?php foreach ($angkatan as $data) { ?>
                      <option value="<?=$data->id_angkatan;?>"><?=$data->angkatan_mhs;?></option>
                    <?php } ?>
                  </select>
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
