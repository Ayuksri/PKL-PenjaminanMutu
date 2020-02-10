<!-- Designed By Muhamad Rizal Azhari -->
<!-- https://bit.ly/2vBKb8Y -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Penjaminan Mutu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/iCheck/flat/blue.css'); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/morris/morris.css'); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/datepicker/datepicker3.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/datatables/dataTables.bootstrap.css'); ?>">
  <!-- Bootstrap Validator CSS -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/bootstrap-validator/css/bootstrapValidator.css'); ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/iCheck/all.css'); ?>">
  <!-- jQuery 3.3.1 -->
  <script type="text/javascript" src="<?php echo base_url('AdminLTE/plugins/jQuery/jquery-3.3.1.min.js'); ?>"></script>
  <!-- jQuery Validate -->
  <script type="text/javascript" src="<?php echo base_url('AdminLTE/plugins/jQueryValidate/jquery.validate.js'); ?>"></script>

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components')?>/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components')?>/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components')?>/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist')?>/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist')?>/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components')?>/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components')?>/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components')?>/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components')?>/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components')?>/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins')?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">PMU</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Penjaminan Mutu</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">              
              <img src="<?php echo base_url();?>assets/dist/img/buk-eka.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("nama");?><!-- <?php echo $username; ?> --></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <img src="<?php echo base_url();?>assets/dist/img/buk-eka.jpg;?>" class="img-circle" alt="User Image">
                <p> class="hidden-xs"><?php echo $this->session->userdata("nama");?><small>Sebagai Administrator</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Pengaturan</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('home/logout'); ?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/buk-eka.jpg;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama");?></p>
          <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
        <li class=" treeview">
          <a>
            <i class="fa fa-book"></i> <span>MATERI PEMBELAJARAN </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('/Perpustakaan/listAngkatan'); ?>"><i class="fa fa-circle-o"></i>Matakuliah Yang Diampu</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listMatakuliah_full'); ?>"><i class="fa fa-circle-o"></i>Daftar Matakuliah</a></li>
          </ul>
        </li>
         <li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>PROSES PEMBELAJARAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <!-- <li><a href="<?php echo base_url('/Perpustakaan/data_mahasiswa'); ?>"><i class="fa fa-circle-o"></i>Data Mahasiswa</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/data_kontrak_kuliah'); ?>"><i class="fa fa-circle-o"></i>Data Kontrak Kuliah</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/data_rencana_pembelajaran'); ?>"><i class="fa fa-circle-o"></i>Data Rencana Pembelajaran</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/data_referensi'); ?>"><i class="fa fa-circle-o"></i>Data Referensi</a></li> -->
            <!-- li><a href="<?php echo base_url('c_kontrak_kuliah');?>"><i class="fa fa-circle-o"></i>Kontrak Kuliah</a></li>
            <li><a href="<?php echo base_url('/c_rencana_pembelajaran');?>"><i class="fa fa-circle-o"></i>Rencana Pembelajaran</a></li>
            <li><a href="<?php echo base_url('/c_referensi');?>"><i class="fa fa-circle-o"></i>Referensi</a></li> -->
            <li><a href="<?php echo base_url('c_mahasiswa'); ?>"><i class="glyphicon glyphicon-education"></i> <span>Data Mahasiswa</span></a></li>
            <li><a href="<?php echo base_url('c_kontrak_kuliah'); ?>"><i class="glyphicon glyphicon-education"></i> <span>Data Kontrak Kuliah</span></a></li>
            <li><a href="<?php echo base_url('c_rencana_pembelajaran'); ?>"><i class="glyphicon glyphicon-education"></i> <span>Data Rencana Pembelajaran</span></a></li>
            <li><a href="<?php echo base_url('c_referensi'); ?>"><i class="glyphicon glyphicon-education"></i> <span>Data Referensi</span></a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>NILAI PEMBELAJARAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('/Perpustakaan/listAngkatan_mhs');?>"><i class="fa fa-circle-o"></i>Penilaian Pembelajaran</a></li>
          </ul>
        </li>
      <!-- <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <li class="treeview">
        <li><a href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-home"></i> <span>Beranda</span></a></li>
      </li>
      <li>
          <a href="<?php echo base_url('/Perpustakaan/dataMatakuliah_full'); ?>">
            <i class="fa fa-book"></i> <span>MATAKULIAH</span>
          </a>
        </li>
        <li>
        <li>
          <a href="<?php echo base_url('/Perpustakaan/data_template');?>">
            <i class="fa fa-laptop"></i>
            <span>TEMPLATE PEMBELAJARAN</span>
          </a>
        </li>
      
      <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-briefcase"></i> <span>Proses Pembelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('c_mahasiswa'); ?>"><i class="glyphicon glyphicon-education"></i> <span>Data Mahasiswa</span></a></li>
            <li><a href="<?php echo base_url('c_kontrak_kuliah'); ?>"><i class="glyphicon glyphicon-education"></i> <span>Data Kontrak Kuliah</span></a></li>
            <li><a href="<?php echo base_url('c_rencana_pembelajaran'); ?>"><i class="glyphicon glyphicon-education"></i> <span>Data Rencana Pembelajaran</span></a></li>
            <li><a href="<?php echo base_url('c_referensi'); ?>"><i class="glyphicon glyphicon-education"></i> <span>Data Referensi</span></a></li>
          </ul>
      </li>      
      <li class="header">SETTING</li>
        <li class="treeview">
          <li><a href="#"><i class="glyphicon glyphicon-cog"></i> <span>Pengaturan</span></a></li>
          <li><a href="<?php echo base_url('home/logout'); ?>"><i class="glyphicon glyphicon-lock"></i> <span>Logout</span></a></li>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<?php include "main_content.php"; ?>

  <footer class="main-footer">
    <div align="center">
    <strong>Copyright &copy; 2018 <a href="https://bit.ly/2vBKb8Y" target="_blank" title="Link to Profile Creator">Universitas Udayana</a></strong>. All Rights
    Reserved.
    </div>
  </footer>
</div>
<!-- ./wrapper -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/admin/plugins')?>/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/admin/plugins')?>/datatables/dataTables.bootstrap.min.js"></script>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('AdminLTE/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url('assets/admin/plugins')?>/jQuery/jQuery-2.1.4.min.js"></script>    
 <script src="<?php echo base_url('assets/admin/plugins')?>/jQueryUI/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/admin/bower_components')?>/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/admin/plugins')?>/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/admin/plugins')?>/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets/admin/bower_components')?>/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/admin/plugins')?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->

<!-- FastClick -->
<script src="<?php echo base_url('assets/admin/bower_components')?>/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/dist')?>/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/admin/dist')?>/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin/dist')?>/js/demo.js"></script>
<!-- Bootstrap 3.3.6 -->
<!-- <script src="<?php echo base_url('AdminLTE/bootstrap/js/bootstrap.min.js'); ?>"></script> -->
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('AdminLTE/plugins/morris/morris.min.js'); ?>"></script> -->
<!-- Sparkline -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script> -->
<!-- jvectormap -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/knob/jquery.knob.js'); ?>"></script> -->
<!-- daterangepicker -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url('AdminLTE/plugins/daterangepicker/daterangepicker.js'); ?>"></script> -->
<!-- datepicker -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script> -->
<!-- Slimscroll -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script> -->
<!-- FastClick -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/fastclick/fastclick.js'); ?>"></script> -->
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url('AdminLTE/dist/js/app.min.js'); ?>"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url('AdminLTE/dist/js/pages/dashboard.js'); ?>"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url('AdminLTE/dist/js/demo.js'); ?>"></script> -->
<!-- DataTables -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('AdminLTE/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script> -->
<!-- CK Editor -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/ckeditor/ckeditor.js'); ?>"></script> -->
<!-- iCheck 1.0.1 -->
<!-- <script src="<?php echo base_url('AdminLTE/plugins/iCheck/icheck.min.js'); ?>"></script> -->

</body>
</html>
