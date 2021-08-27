<div id="sidebar" class="sidebar responsive" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
          <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
              <i class="btn btn-success"></i>
            </button>

            <button class="btn btn-info">
              <i class="btn btn-info"></i>
            </button>

            <!-- #section:basics/sidebar.layout.shortcuts -->
            <button class="btn btn-warning">
              <i class="btn btn-warning"></i>
            </button>

            <button class="btn btn-danger">
              <i class="btn btn-danger"></i>
            </button>

            <!-- /section:basics/sidebar.layout.shortcuts -->
          </div>

          <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
          </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list" style="top: 0px;">
          <li>
            <a href="<?php echo base_url('index.php/Admin/')?>">
              <i class="menu-icon fa fa-home"></i>
              <span class="menu-text"> Home </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="<?php echo base_url('index.php/Admin/lihat_orangtua'); ?>">
              <i class="menu-icon fa fa-users"></i>
              <span class="menu-text">
                User
              </span>
            </a>
          </li>

          <li class="">
            <a href="<?php echo base_url('index.php/Admin/lihat_petugas'); ?>">
              <i class="menu-icon fa fa-user-md"></i>
              <span class="menu-text"> Petugas </span>
            </a>
          </li>

          <li class="">
            <a href="<?php echo base_url('index.php/Admin/lihat_anak'); ?>">
              <i class="menu-icon fa fa-child"></i>
              <span class="menu-text"> Anak </span>
            </a>
          </li>

          <li class="">
            <a href="#" class="dropdown-toggle">
              <i class="menu-icon fa fa-slideshare"></i>
              <span class="menu-text"> Layanan Anak </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
              <li class="">
                <a href="<?php echo base_url('index.php/Admin/lihat_imunisasi'); ?>">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Imunisasi
                </a>

                <b class="arrow"></b>
              </li>

              <li class="">
                <a href="<?php echo base_url('index.php/Admin/lihat_jenis'); ?>">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Jenis Imunisasi
                </a>

                <b class="arrow"></b>
              </li>

              <li class="">
                <a href="<?php echo base_url('index.php/Admin/lihat_pertumbuhan'); ?>">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Pertumbuhan
                </a>

                <b class="arrow"></b>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="<?php echo base_url('index.php/Admin/lihat_rekammedis'); ?>">
              <i class="menu-icon fa fa-clipboard"></i>
              <span class="menu-text"> Rekam Medis </span>
            </a>
          </li>
        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
      </div>