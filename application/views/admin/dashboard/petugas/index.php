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
                <h3 class="box-title">Dashboard</h3>
              </div>
              <div class="box-body">
                <h3>Selamat datang di Sistem Informasi Penjaminan Mutu Universitas Udayana</h3>
                <br>
                <p>Sistem informasi yaitu suatu sistem yang menyediakan informasi untuk manajemen dalam mengambil keputusan dan juga untuk menjalankan operasional perusahaan, di mana sistem tersebut merupakan kombinasi dari orang-orang, teknologi informasi dan prosedur-prosedur yang tergorganisasi. <b>Sistem Informasi Penjaminan Mutu(PMU)</b> merupakan sebuah sistem informasi yang dapat memberikan manfaat yaitu meningkatkan  mutu akademik Program Studi Teknik Informatika. Terdapat tiga buah fitur pada sistem ini yaitu : Materi Pembelajaran, Proses Pembelajaran, Nilai Pembelajaran.</p>
              <!-- <h2>Hai, <?php echo $this->session->userdata("nama");?> -->
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
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/layoutA/footer') ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layoutA/scrip') ?>
</body>
</html>
