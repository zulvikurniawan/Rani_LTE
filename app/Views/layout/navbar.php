<?php $user = session()->get('user') ?>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/img/Kota Tangerang.png" alt="KecPakuHaji" height="230" width="300">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light mr-auto shadow">
    <!-- Left navbar links -->
    <nav class="navbar-nav">
        <div class="navbar-nav">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </div>
    </nav>

    <!-- Right navbar links -->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <!-- <a class="nav-item nav-link <?= ($SidebarMenuActive == 'profile') ? 'active' : '' ?>" href="/Profile/">Profile <span class="sr-only">(current)</span></a> -->
            <a class="nav-item nav-link" href="/login/logout">Logout <span class="sr-only">(current)</span></a>
        </div>
    </div>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    <a href="/DashboardAdmin" class="brand-link" style="text-decoration:none">
        <img src="/img/Kota Tangerang.png" alt="KecPakuHaji" class="brand-image elevation-2" style="opacity: 1">
        <span class="brand-text font-weight-light">Kel. Buaran Indah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="/DashboardAdmin" class="d-block" style="text-decoration:none"><?= $user['nama']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item mb-3">
                    <a href="/DashboardAdmin" class="nav-link <?= ($SidebarMenuOpen == 'dashboard') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 <?= ($SidebarMenuOpen == 'admin' || $SidebarMenuOpen == 'adminStaff') ? 'menu-open' : '' ?>">
                    <a href="" class="nav-link <?= ($SidebarMenuActive == 'admin' || $SidebarMenuActive == 'adminStaff') ? 'active' : '' ?>">
                        <i class="nav-icon fa-solid fa-file-pen"></i>
                        <p>
                            Account
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/Admin" class="nav-link <?= ($SidebarMenuActive == 'admin') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Masyarakat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/AdminStaff" class="nav-link <?= ($SidebarMenuActive == 'adminStaff') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staff Kelurahan</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item mb-3 <?= ($SidebarMenuOpen == 'pengajuan') ? 'menu-open' : '' ?>">
                    <a href="" class="nav-link <?= ($SidebarMenuActive == 'pengajuan' || $SidebarMenuActive == 'approval' || $SidebarMenuActive == 'print') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Data Masyarakat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/Pengajuan/approval" class="nav-link <?= ($SidebarMenuActive == 'approval') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Approval</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Pengajuan/print" class="nav-link <?= ($SidebarMenuActive == 'print') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Print</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>