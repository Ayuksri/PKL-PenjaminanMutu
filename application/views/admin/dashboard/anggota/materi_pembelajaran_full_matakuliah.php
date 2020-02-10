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
        <small>Data Matakuliah</small>
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
              <div class="box-body" method="get" action="<?php echo base_url("Perpustakaan/pencarian_semester)/")?>"><!-- tahun ajaran -->
                <div class="form-group" style="width: 240px; display: inline-block;">
                  <div style="width: 250px;display: inline-block;vertical-align: middle;">
                    <label>Tahun Ajar :</label>
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-list"></i>
                    </div>
                    <!-- <select class="input_select form-control selectHierarchy" name="tahun_ajaran" id="tahun_ajaran" onchange="show(this.value)"> -->

                    <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                      <option >Semua</option>
                      <option  value='1' >Ganjil-2016/2017</option>
                      <option  value='2' >Genap-2016/2017</option>
                      <option  value='3' >Ganjil-2017/2018</option>
                      <option  value='4' >Genap-2017/2018</option>
                      <option  value='5' >Ganjil-2018/2019</option>
                      <option  value='6''>Genap-2018/2019</option>
                    </select>
                    </div><!-- /.input group -->
                  </div>
                </div>
              </div>
              <div class="box-body">
                <table id="dataAnggota" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama Matakuliah</th>
                      <th>Semester</th>
                      <th>Angkatan</th>
                      <th>Jalur</th>
                      <th>Kelas</th>
                      <th>Dosen</th>
                      <th>NIDN</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($matakuliah as $item){?>
                    <tr class="tabel <?=$item->id_semester;?>">
                      <td><?=$i++;?></td>
                      <td><?=$item->kode_matkul;?></td>
                      <td><?=$item->nama_matkul;?></td>
                      <td><?=$item->semester;?></td>
                      <td><?=$item->angkatan_mhs;?></td>
                      <td><?=$item->jalur;?></td>
                      <td><?=$item->kelas;?></td>
                      <td><?=$item->nama;?></td>
                      <td><?=$item->nidn;?></td>
                      <td>
                        <a class="btn btn-success btn-xs detailbuku" alt="detail Matkul" href="<?php echo base_url("/Perpustakaan/listMateri_full/{$item->id_matkul}");?>"><i class="fa fa-pencil">Detail</i></a>
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
      <!-- Modal -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Matakuliah</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('Perpustakaan/update/anggota');?>" enctype="multipart/form-data">
                <input type="hidden" name="id">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Nama Matakuliah</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="nama">
                      <small class="help-block"></small>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Kelas</label>
                    <div class="col-md-6 has-error">
                      <input type="text" class="form-control" name="prodi">
                      <small class="help-block"></small>
                    </div>
                  </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Semester</label>
                  <div class="col-md-6 has-error">
                    <input type="text" class="form-control" name="jenjang">
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

    <script type="text/javascript">
      function show(id){
        // alert(id);
        if(id != 'semua'){
          $('.tabel').fadeOut();
          $('.'+id).fadeIn();
        }
        else{
          $('.tabel').fadeOut();
          $('.tabel').fadeIn();
        }
      }
    </script>
