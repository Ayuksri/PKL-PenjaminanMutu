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
          <p><?php echo $this->session->userdata("nama_admin");?></p> <!-- 
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
          <a href="<?php echo base_url('/Perpustakaan/dataMatakuliah_full'); ?>">
            <i class="fa fa-book"></i> <span>MATAKULIAH</span>
          </a>
        </li>
        <li>
        <li class=" treeview">
          <a>
            <i class="fa fa-book"></i> <span>PROSES PEMBELAJARAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('/Perpustakaan/dataCpl_Prodi');?>"><i class="fa fa-circle-o"></i>CPL-PRODI</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/dataCp_MK');?>"><i class="fa fa-circle-o"></i>CP-MK</a></li>
             <li><a href="<?php echo base_url('/Perpustakaan/dataKriteria');?>"><i class="fa fa-circle-o"></i>Kriteria Penilaian</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('/Perpustakaan/data_template');?>">
            <i class="fa fa-laptop"></i>
            <span>TEMPLATE PEMBELAJARAN</span>
          </a>
        </li>
       <!--  -->
      </ul>
  </section>
    <!-- /.sidebar -->
</aside>
=======
      <div class="user-panel">
        <div class="pull-left info">
          <p>Anggota</p>
        </div>
        <br><br>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li><a href="<?php echo base_url('Perpustakaan/pinjamBuku')?>"><i class="fa fa-circle-o"></i>Pinjam Buku</a></li>
            <li><a href="<?php echo base_url('Perpustakaan/riwayatPeminjam')?>"><i class="fa fa-circle-o"></i>Riwayat Peminjaman Buku</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan'); ?>"><i class="fa fa-circle-o"></i>Keluar</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
>>>>>>> 0772fea7dd1957dff8523b37668a219efbc2f56f
