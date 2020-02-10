<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <img src="<?php echo base_url();?>assets/dist/img/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Dr. Anak Agung Istri Ngurah Eka Karyawati, S.Si.,M.Eng.</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
       <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Cari...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigasi Utama</li>
        <li>
        <li class="treeview">
          <a>
            <i class="fa fa-book"></i> <span>Materi Pembelajaran</span>
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
            <i class="fa fa-laptop"></i>
            <span>Proses Pembelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('/Perpustakaan/listAngkatan_prosesPembelajaran'); ?>"><i class="fa fa-circle-o"></i>Matakuliah Yang Diampu</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listMatakuliah_full'); ?>"><i class="fa fa-circle-o"></i>Daftar Matakuliah</a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Nilai Pembelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('/Perpustakaan/listAngkatan_mhs');?>"><i class="fa fa-circle-o"></i>Penilaian Keseharian</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listAngkatan');?>"><i class="fa fa-circle-o"></i>Penilaian UTS Dan UAS</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listAngkatan');?>"><i class="fa fa-circle-o"></i>Rekap Nilai</a></li>
          </ul>
        </li>
      </ul>
  </section>
    <!-- /.sidebar -->
</aside>
