<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url("/Perpustakaan/petugas");?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PMU</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PENJAMINAN </b>MUTU</span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu notifications-menu hidden-xs" title="Role Active">
                <a aria-expanded="true" href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url();?>assets/dist/img/user.jpg" class="user-image" alt="User Image"/>
              
                    <span class="info-name">Dr. Anak Agung Istri Ngurah Eka Karyawati, S.Si.,M.Eng.</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-body">
                        <div class="col-xs-12" id="role_wrap">
                            <div class="form-group" style="margin-bottom: 0px;">
                                <label>Role Active :</label>
                                <select class="role_select form-control select2-hidden-accessible" name="role_active" id="role_active" data-select2-id="role_active" tabindex="-1" aria-hidden="true">
                                                                                                                        <option selected="selected" value="3" data-select2-id="4">Mahasiswa</option>
                                                                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-role_active-container"><span class="select2-selection__rendered" id="select2-role_active-container" role="textbox" aria-readonly="true" title="Mahasiswa">Mahasiswa</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
                         
            <li class="dropdown user user-menu" title="Toggle Full Screen">
                <a href="#" onclick="toggleFullScreen(this)">
                    <i class="fa fa-expand" style="margin-right: 0px;cursor:pointer;"></i>
                </a>
            </li>
            <li class="dropdown user user-menu" id="to-top" title="to Top">
                <a href="#">
                    <i class="fa fa-arrow-up" style="margin-right: 0px;cursor:pointer;"></i>
                </a>
            </li>
            <li class="dropdown user user-menu" id="backtoimissu" title="kembali ke halaman imissu">
                <a href="https://imissu.unud.ac.id">
                    <i class="fa fa-university" style="margin-right: 0px;cursor:pointer;"></i>
                </a>
            </li>
            <li class="dropdown user user-menu" title="Logout Session Aplikasi">
                <a style="cursor: pointer;" onclick="logout_sso();">
                    <i class="fa fa-power-off" style="margin-right: 0px;cursor:pointer;"></i>
                </a>
            </li>
        </ul>
    </div>

      
    </nav>
  </header>