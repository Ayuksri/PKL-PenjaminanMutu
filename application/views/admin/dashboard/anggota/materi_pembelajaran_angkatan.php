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
                <h3 class="box-title"><b>PILIH ANGKATAN</b></h3>
              </div>
              <div class="box-body">
                <!-- Main content -->
                <section class="content">
                <!-- Small boxes (Stat box) -->
                  <div class="row">
                    <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <h3>Angkatan</h3>
                          <h3>2016</h3>
                        </div>
                        <div class="icon">
                          <i class="ion ion-bag"></i>
                        </div>
                          <a href="<?php echo base_url('/Perpustakaan/listMatakuliah1'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
          <!-- small box -->
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3>Angkatan</h3>
                          <h3>2017</h3>
                        </div>
                        <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?php echo base_url('/Perpustakaan/listMatakuliah2'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
        <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
          <!-- small box -->
                      <div class="small-box bg-yellow">
                        <div class="inner">
                          <h3>Angkatan</h3>
                          <h3>2018</h3>
                        </div>
                        <div class="icon">
                          <i class="ion ion-person-add"></i>
                        </div>
                          <a href="<?php echo base_url('/Perpustakaan/listMatakuliah3'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                </section>
              </div>
            </div>
              
              <!-- /.box-body -->
          </div>
        </div>
          <!-- /.box -->
        <!-- /.col -->
    </section>
    <!-- /.content -->
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
