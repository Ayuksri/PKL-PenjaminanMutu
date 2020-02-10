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
<<<<<<< HEAD
        Halaman Utama
        <small>Sistem Otomatisasi Penjaminan Mutu Teknik Informatika Universitas Udayana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Halaman Utama</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Mata Kuliah</span>
              <span class="info-box-number">9</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-file-text"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Materi</span>
              <span class="info-box-number">4</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-tasks"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Proses</span>
              <span class="info-box-number">3</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-bar-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Penilaian</span>
              <span class="info-box-number">2</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
    <div class="col-lg-12">
        <div class="box box-form box-purple" style="margin-top:15px;">
            <div class="box-header">
                <h3 class="box-title">
                    Selamat datang di Sistem Otomatisasi Penjaminan Mutu Program Studi Teknik Informatika Universitas Udayana
                </h3>
            </div>
            <div style="padding:20px;">
                <p align="justify">SOPM (Sistem Otomatisasi Penjaminan Mutu) merupakan suatu sistem informasi yang dibangun untuk memberikan kemudahan kepada pengguna (operator akademik, dosen dan mahasiswa) dalam kegiatan administrasi akademik secara online, khususnya mengenai isi pembelajaran, proses pembelajaran, dan penilaian pembelajaran mata kuliah program studi. Pada SOPM memungkinkan untuk mengelola proses input data dari sistem penerimaan mahasiswa baru (E-Registrasi), pengelolaan data mahasiswa, kurrikulum, mata kuliah, penawaran mata kuliah, pengisian Kartu Rencana Studi (KRS), pengelolaan rubrik akademik, absensi perkuliahan, pengisian nilai, cetak transkrip, riwayat keaktifan mahasiswa, pengelolaan data skripsi/tesis/disertasi, kerja praktek, publikasi jurnal, integrasi dengan SIMDOS untuk data dosen, integrasi dengan sistem UKT-Ku untuk data pembayaran UKT, integrasi dengan SIM Beasiswa, integrasi dengan sistem pelaporan PDDIKTI hingga proses pendaftaran wisuda. Selain itu, SIMAK juga dapat berfungsi sebagai pendukung untuk analisis data dalam pengambilan keputusan terkait bidang akademik di Universitas Udayana.</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-lg-12 connectedSortable ui-sortable">
        <div class="nav-tabs-custom" style="cursor: move;">
            <ul class="nav nav-tabs pull-right ui-sortable-handle">
                <li class=""><a href="#panduan" data-toggle="tab" aria-expanded="false">Panduan</a></li>
                <li class="active"><a href="#pengumuman" data-toggle="tab" aria-expanded="true">Pengumuman</a></li>
            </ul>
            <div class="tab-content no-padding">
                <div class="tab-pane active" id="pengumuman" style="position: relative; ">
                    <br>
                    <div class="box-group" id="accordion">
                        <div class="col-lg-12 form-group" id="show_pengumuman"><div style="margin: 0!important;padding: 0!important">
    <div class="pagination pagination-xs no-margin">Menampilkan 0 dari 0 entri</div>
    <div class="pagination pagination-xs no-margin pull-right"></div>
</div>

<script type="text/javascript">
$(function() {
    $(".pagination a").click(function() {
      var url = new URL($(this).attr('href'));
    var c = url.searchParams.get("page");
    get_pengumuman(c);
    return false;
    });
});
</script></div>
                    </div>
                </div>
                <div class="tab-pane" id="panduan" style="position: relative; ">
                    <br>
                    <div class="box-group" id="accordion">
                        <div class="col-lg-12 form-group">
                          <p class="text-red" style="font-size: 9pt;">Tidak ada data panduan.</p>
                      </div>
                    </div>
                </div>
            </div>
            <blockquote>
                <small class="text-red" style="font-size: 9pt;">*) Klik judul untuk melihat detail pengumuman.</small>
            </blockquote>
        </div>
    </div>
  </div>
=======
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <!-- /.box-header -->
             <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Dashboard Petugas</h3>
              </div>
              <div class="box-body">
                <h1>Login berhasil !</h1>
                <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
              </div>
              
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/layout/footer') ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/scrip') ?>
</body>
</html>
