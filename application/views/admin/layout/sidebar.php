<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<<<<<<< HEAD
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <!-- <ul class="sidebar-menu" data-widget="tree">
            <li><a href="<?php echo base_url('/Perpustakaan/listBuku'); ?>"><i class="fa fa-circle-o"></i>Buku</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listAnggota'); ?>"><i class="fa fa-circle-o"></i>Anggota</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listPeminjaman'); ?>"><i class="fa fa-circle-o"></i>Peminjaman Buku</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan'); ?>"><i class="fa fa-circle-o"></i>Keluar</a></li>
      </ul> -->
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/buk-eka.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama");?></p> <!-- 
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a> -->
        </div>
      </div>
       <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
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
            <li><a href="<?php echo base_url('c_kontrak_kuliah');?>"><i class="fa fa-circle-o"></i>Kontrak Kuliah</a></li>
            <li><a href="<?php echo base_url('/c_rencana_pembelajaran');?>"><i class="fa fa-circle-o"></i>Rencana Pembelajaran</a></li>
            <li><a href="<?php echo base_url('/c_referensi');?>"><i class="fa fa-circle-o"></i>Referensi</a></li>
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
        <!-- <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>PROSES PEMBELAJARAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('/Perpustakaan/listAngkatan_prosesPembelajaran'); ?>"><i class="fa fa-circle-o"></i>Matakuliah Yang Diampu</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Daftar RPS</a></li>
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
            <li><a href="<?php echo base_url('/Perpustakaan/listAngkatan');?>"><i class="fa fa-circle-o"></i>Rekap Nilai</a></li>
          </ul>
        </li> -->
      </ul>
  </section>
    <!-- /.sidebar -->
</aside>
=======
      <div class="user-panel">
        <div class="pull-left info">
          <p>Petugas</p>
        </div>
        <br><br>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li><a href="<?php echo base_url('/Perpustakaan/listBuku'); ?>"><i class="fa fa-circle-o"></i>Buku</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listAnggota'); ?>"><i class="fa fa-circle-o"></i>Anggota</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listPeminjaman'); ?>"><i class="fa fa-circle-o"></i>Peminjaman Buku</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan'); ?>"><i class="fa fa-circle-o"></i>Keluar</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
