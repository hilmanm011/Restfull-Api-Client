<!-- Sidebar -->
<ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kependudukan</div>
    </a>
    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">





    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('penduduk/index') ?>">
            <i class="fas fa-address-book"></i>
            <span>Kelola Data Penduduk</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">





    <li class="nav-item active">
        <a class="nav-link active text-primary" href="<?= base_url('mahasiswa/index') ?>">
            <i class="fas fa-address-book" style="color: #1abc9c;"></i>
            <span>Kelola Data Mahasiswa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book-reader"></i>
            <span>Blog</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Info Desa :</h6>
                <a class="collapse-item" href="<?= base_url('admin/blog') ?>">Lihat Blog</a>
                <a class="collapse-item" href="<?= base_url('admin/kelola_blog') ?>">Kelola Blog</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow justify-content-right">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Nav Item - User Information -->
            <ul class="navbar-nav ml-auto">
                <div class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small "><?= $user['nama']; ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/profile/default.jpg">
                    </a>
                    <!-- Dropdown - User Information  -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Data Mahasiswa</h1>
            </div>
            <!-- Data Tabel Mahasiswa -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="h5 card-header text-center text-primary">
                        Detail Data Mahasiswa
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/'); ?>img/profile/default.jpg" alt="" width="200" height="auto">
                        </div>
                        <div class="col-md-8">
                            <table width="100%" border="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                                                <tbody>
                                                    <tr class="font-weight-bold">
                                                        <td width="30%">Nama</td>
                                                        <td width="2%">:</td>
                                                        <td><?= $mahasiswa['nama']; ?></td>
                                                    </tr>
                                                    <tr class="font-weight-bold">
                                                        <td width="30%">Nrp</td>
                                                        <td width="2%">:</td>
                                                        <td><?= $mahasiswa['nrp']; ?></td>
                                                    </tr>
                                                    <tr class="font-weight-bold">
                                                        <td width="30%">Email</td>
                                                        <td width="2%">:</td>
                                                        <td><?= $mahasiswa['email']; ?></td>
                                                    </tr>
                                                    <tr class="font-weight-bold">
                                                        <td width="30%">Jurusan</td>
                                                        <td width="2%">:</td>
                                                        <td><?= $mahasiswa['jurusan']; ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card-body">
                            <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary"><i class="fas fa-caret-left"></i>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mt-3">
            <div class="sticky-footer my-auto text-center text-secondary">
                <p>Copyright &copy; Kependudukan Desa Bojongkeding <?= date('Y'); ?></p>
            </div>
        </footer>