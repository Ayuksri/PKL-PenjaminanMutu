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
        Proses Pembelajaran
        <small>Data Matakuliah</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Pendidikan</li>
            <li><a href="#">Proses Pembelajaran</li>
            <li class="active">Data Mata Kuliah</li>
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
              <div class="box-header"><!-- tahun ajaran -->
              <div class="form-group" style="width: 240px; display: inline-block;">
                    <div style="width: 250px;display: inline-block;vertical-align: middle;">
                      <label>Tahun Ajar :</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-list"></i>
                      </div>
                      <select class="input_select form-control selectHierarchy" name="tahun_ajaran" id="tahun_ajaran">
                        <option value='all' selected='selected'>Semua</option>
                        <option  value='20161' >Ganjil - 2016/2017</option>
                        <option  value='20162' >Genap - 2016/2017</option>
                        <option  value='20171' >Ganjil - 2017/2018</option>
                        <option  value='20172' >Genap - 2017/2018</option>
                        <option  value='20181' >Ganjil - 2018/2019</option>
                        <option  value='20182' >Genap - 2018/2019</option>
                      </select>
                    </div><!-- /.input group -->
                  </div>


<div class="form-group">
                        
                        <a class="btn btn-primary" id="tambahProses" href="<?php echo base_url("/prosesPembelajaran/add_new");?>"><i class="fa fa-plus"></i> Tambah Proses Pembelajaran Baru</a>
                        
                        
                    </div>
                
              </div>
                <table id="dataProses" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Proses</th>
                      <th>Mata Kuliah</th>
                      <th>Bobot</th>
                      <th>Dosen</th>
                      <th>Deskripsi</th>
                      <th>Tanggal Unggah</th>
                      <th>File Kontrak Kuliah</th>
                      <th>File RPS</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($proses as $item){?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$item->id_proses;?></td>
                      <td><?=$item->nama_matkul;?></td>
                      <td><?=$item->bobot;?></td>
                      <td><?=$item->nama;?></td>
                      <td><?=$item->deskripsi;?></td>
                      <td><?=$item->tanggalPost;?></td>
                      <td><a href="<?php echo base_url('/Perpustakaan/file/'.$item->fileKontrakKuliah);?>"><?=$item->fileKontrakKuliah;?></a></td> 
                      <td><a href="<?php echo base_url('/Perpustakaan/file/'.$item->fileRPS);?>"><?=$item->fileRPS;?></a></td> 
                      <td>
                        <a 
                          data-kode_proses="<?=$item->id_proses?>"
                          data-kode_matkul= "<?=$item->nama_matkul?>"
                          data-bobot = "<?=$item->bobot?>"
                          data-nama = "<?=$item->nama?>"
                          class="btn btn-sm btn-warning" alt="edit Buku" href="<?php echo base_url("Perpustakaan/update/proses/{$item->id_proses}");?>"><i class="fa fa-pencil"></i></a>
                        
                          <a href="http://localhost/perpustakaan/Perpustakaan/get_file/1" class="btn btn-sm btn-info"><i class="fa fa-download"></i></a>
                          <a href="http://localhost/perpustakaan/Perpustakaan/get_file/1" class="btn btn-sm btn-info"><i class="fa fa-download"></i></a>

                        <a 
                          data-kode_proses="<?=$item->id_proses?>"
                          data-nama_matkul= "<?=$item->nama_matkul?>"
                          data-bobot = "<?=$item->bobot?>"
                          data-nama = "<?=$item->nama?>"
                          class="btn btn-sm btn-danger deleteProses" href="#" onclick="return confirm('Yakin menghapus proses matkul <?=$item->nama_matkul?> ?')" data-userid="<?php echo $item->id_proses; ?>"><i class="fa fa-trash"></i></a>
                        </td>
                        
                    </tr>
                    <?php } ?>
                  </tbody>
                  <!-- <tfoot>
                    <tr>
                      <td><?=$item->kode_matkul;?></td>
                      <td><?=$item->nama_matkul;?></td>
                      <td><?=$item->kelas;?></td>
                      <td><?=$item->semester;?></td>
                    </tr>
                  </tfoot> -->
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
              <h4 class="modal-title" id="myModalLabel" ><b>Tambah Proses Pembelajaran Baru</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/addNew/proses');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Matakuliah</label>
                    <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="id_matkul" id="id_matkul">
                    <!--<select class="form-control required" id="matakuliah" name="matakuliah">
                      <option value="0">Pilih mata kuliah...</option>
                      <?php
                                            if(!empty($matakuliah))
                                            {
                                                foreach ($matakuliah as $mk)
                                                {
                                                    ?>
                                                    <option value="<?php echo $mk->id_matkul ?>"><?php echo $mk->nama_matkul ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                    </select>-->
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Dosen</label>
                    <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="nidn" id="nidn">
                    <!--<select class="form-control required" id="dosen" name="dosen">
                      <option value="0">Pilih dosen...</option>
                      <?php
                                            if(!empty($dosen))
                                            {
                                                foreach ($dosen as $ds)
                                                {
                                                    ?>
                                                    <option value="<?php echo $ds->nidn ?>"><?php echo $ds->nama ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                    </select>-->
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label for="bobot" class="col-md-4 control-label">Bobot (SKS)</label>
                  <div class="col-md-6 has-error">
                  <input type="text" class="form-control" name="bobot" id="bobot">
                    <!--<select class="form-control" id="bobot" name="bobot">
                      <option value="3">3</option>
                      <option value="2">2</option>
                      <option value="1">1</option>
                    </select>-->
                  </div>
                </div>

                <div class="form-group">
                  <label for="bobot" class="col-md-4 control-label">Semester</label>
                  <div class="col-md-6 has-error">
                  <input type="text" class="form-control" name="id_semester" id="id_semester">
                    <!--<select class="form-control" id="semester" name="semester">
                      <option value="0">Pilih semester...</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>-->
                  </div>
                </div>

                <div class="form-group">
                  <label for="bobot" class="col-md-4 control-label">Angkatan</label>
                  <div class="col-md-6 has-error">
                  <input type="text" class="form-control" name="id_angkatan" id="id_angkatan">
                    <!--<select class="form-control" id="semester" name="semester">
                      <option value="0">Pilih semester...</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>-->
                  </div>
                </div>
                 
                <div class="form-group">
                  <label class="col-md-4 control-label">Deskripsi</label>
                    <div class="col-md-6">
                      <textarea type="text" class="form-control" name="deskripsi" id="deskripsi"></textarea>
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="exampleInputFile">File RPS</label>
                  <div class="col-md-6 has-error">
                    <input type="file" id="exampleInputFile_RPS" class="form-control" name="file_RPS" required="">
                    <p class="help-block">NB: File harus bertype pdf. Ukuran maksimal 1 MB.</p>
                    <small class="help-block"></small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="exampleInputFile">File Kontrak Kuliah</label>
                  <div class="col-md-6 has-error">
                    <input type="file" id="exampleInputFile_kontrakKuliah" class="form-control" name="file_kontrakKuliah" required="">
                    <p class="help-block">NB: File harus bertype pdf. Ukuran maksimal 1 MB.</p>
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
              <h4 class="modal-title" id="myModalLabel">Edit Proses Pembelajaran</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/proses');?>" enctype="multipart/form-data">
                <!-- <input type="hidden" name="id"> -->
                <div class="form-group">
                  <label class="col-md-4 control-label">Kode Matakuliah</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="kode_materi" disabled>
                     <input type="text" class="form-control" name="kode_materi" style="display: none;" id="kode_materi">
                    <small class="help-block"></small>
                  </div>
                </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Nama Matakuliah</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="nama_matkul" id="nama_matkul">
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
          $('#dataProses').DataTable({"pageLength": 10});
          $('#tambahProses').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModal').modal('show');
          return false;
        });
          $('.editProses').click(function(){
          $('input+small').text('');
          $('input').parent().removeClass('has-error');
          $('select').parent().removeClass('has-error');
          $('#myModal2').modal('show');

          var form = "#myModal2";

          $(form).find('input[name="id_proses"]').val($(this).attr('data-kode_proses'));
          $(form).find('input[name="id_matkul"]').val($(this).attr('data-kode_matkul'));
          $(form).find('input[name="deskripsi"]').val($(this).attr('data-deskripsi'));
          $(form).find('input[name="file"]').val($(this).attr('data-file'));
          insert = $(form).find('#formEditKelas').attr('action')+"/"+$(this).attr('data-id_kursi');
          $(form).find('#formEditKelas').attr('action',insert);
          return false;
        });
      });
    </script>
