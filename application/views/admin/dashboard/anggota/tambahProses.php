<!-- TAMBAH KONTRAK KULIAH BARU -->
<!DOCTYPE html>
<html>
<?php $this->load->view('admin/layout/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/layout/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/layout/sidebar') ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-book" aria-hidden="true"></i> Proses Pembelajaran
        <!-- <small>Panel Control</small>-->
      </h1>
    </section>
    
    <div class="box-body">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Proses Pembelajaran Baru</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" id="tambahKontrakKuliah" action="<?php echo base_url() ?>tambahKontrakKuliahBaru" method="post" role="form">
              <div class="box-body">

                <div class="form-group">

                  <label for="mataKuliah" class="col-sm-2 control-label">Mata Kuliah</label>

                  <div class="col-sm-10">
                    <select class="form-control">
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
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="dosenPengampu" class="col-sm-2 control-label">Dosen Pengampu</label>

                  <div class="col-sm-10">
                  <select class="form-control required" id="dosen" name="dosen">
                      <option value="0">Pilih dosen pengampu...</option>
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
                    </select>                  </div>
                </div>

                <div class="form-group">
                  <label for="jumlahSks" class="col-sm-2 control-label">Jumlah SKS</label>
                  <div class="col-sm-10">
                    <select class="form-control">
                      <option>3</option>
                      <option>2</option>
                      <option>1</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="semester" class="col-sm-2 control-label">Semester</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="semester" name="semester">
                    <option value="0">Pilih semester...</option>
                      <?php
                                            if(!empty($semester))
                                            {
                                                foreach ($semester as $smt)
                                                {
                                                    ?>
                                                    <option value="<?php echo $smt->id_semester ?>"><?php echo $smt->tahun_ajar ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="hariPertemuan" class="col-sm-2 control-label">Hari Pertemuan</label>
                  <div class="col-sm-10">
                    <select class="form-control">
                      <option>Senin</option>
                      <option>Selasa</option>
                      <option>Rabu</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="hariPertemuan" class="col-sm-2 control-label">Jam Pertemuan</label>
                  <div class="col-sm-10">
                    <select class="form-control">
                      <option>1 (08.30-11.10)</option>
                      <option>2 (11.10-13.40)</option>
                      <option>3 (13.40-16.30)</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tempatPertemuan" class="col-sm-2 control-label">Tempat Pertemuan</label>
                  <div class="col-sm-10">
                    <select class="form-control">
                      <option>Ruang BD-11</option>
                      <option>Ruang BD-12</option>
                      <option>Ruang Tikus</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="manfaatMataKuliah" class="col-sm-2 control-label">Manfaat Mata Kuliah</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan manfaat mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="deskripsiMataKuliah" class="col-sm-2 control-label">Deskripsi Mata Kuliah</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan deskripsi mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="standarKompetensi" class="col-sm-2 control-label">Standar Kompetensi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan standar kompetensi mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="strategiPerkuliahan" class="col-sm-2 control-label">Strategi Perkuliahan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan manfaat mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="materiPokok" class="col-sm-2 control-label">Materi Pokok</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan materi pokok dari mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="bahanBacaan" class="col-sm-2 control-label">Bahan Bacaan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan bahan bacaan dari mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tugasTugas" class="col-sm-2 control-label">Tugas-Tugas</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan tugas-tugas dari mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="kriteriaPenilaian" class="col-sm-2 control-label">Kriteria Penilaian</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan kriteria penilaian mata kuliah..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="uploadJadwalKuliah" class="col-sm-2 control-label">Upload Jadwal Kuliah</label>
                  <div class="col-sm-10">
                    <input type="file" id="exampleInputFile">

                  <p class="help-block">Maksimal ukuran file 2 MB.</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="catatanKhusus" class="col-sm-2 control-label">Catatan Khusus</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Masukkan catatan khusus mata kuliah..."></textarea>
                  </div>
                </div>
              



              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          
        </div>

    </div>

    <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>

</body>
</html>
