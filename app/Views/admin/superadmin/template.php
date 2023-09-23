<nav class="navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo " href="<?= base_url('AdminController/SuperAdminController')?>"><img src="<?= base_url('style/images/logo.png') ?>" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('AdminController/SuperAdminController')?>"><img src="<?= base_url('style/images/logo1.png')?>" alt="logo"/></a>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= base_url('style/images/faces/admin.png') ?>" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="<?= base_url('AdminController/SuperAdminFolder/SuperAdminController/logout')?>">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="" id="profile">
              
               <span class="menu-title" id="profile1"><?= strtoupper($loggedUser['username'] )?></span>
             </a>
             </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('AdminController/SuperAdminFolder/SuperAdminController') ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Analytics</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('AdminController/SuperAdminFolder/SuperadminController/userList')?>">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">List of Users</span> 
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('AdminController/SuperAdminFolder/SuperadminController/adminList')?>">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">List of Admins</span> 
          </a>
        </li>
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('AdminController/SuperAdminFolder/JobController') ?>">
              <i class="icon-briefcase menu-icon"></i>
              <span class="menu-title">List of Jobs</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('AdminController/SuperAdminFolder/NewsController') ?>">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">List of News and Events</span> 
          </a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="<?= base_url('AuditTrailController/display') ?>">
              <i class="icon-briefcase menu-icon"></i>
              <span class="menu-title">Audit Trail</span> 
            </a>
          </li>
        </ul>
      </nav>