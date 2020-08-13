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
        <a class="nav-link active text-primary" href="<?= base_url('keluarga/index') ?>">
            <i class="fas fa-chalkboard-teacher" style="color: #1abc9c;"></i>
            <span>Kelola Data Keluarga</span></a>
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
        Settings
    </div>

    <!-- Nav Item  -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/profile'); ?>">
            <i class="fas fa-user"></i>
            <span>Profile</span></a>
    </li>

    <!-- Nav Item  -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/edit'); ?>">
            <i class="fas fa-user-cog"></i>
            <span>Akun</span></a>
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
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                    </a>
                    <!-- Dropdown - User Information  -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/profile'); ?>">
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
                <h1 class="h3 mb-0 text-gray-800">Kelola Data Keluarga</h1>
            </div>


            <!-- Data Tabel Keluarga -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold"><a href="<?= base_url(); ?>keluarga/tambah" class="shadow-sm btn btn-primary mb-2">Tambah Data</a>

                        <a href="<?= base_url('keluarga/pdf'); ?>" target="blank" class="shadow-sm btn btn-warning mb-2" style="color: white;"><i class="fa fa-download"></i> PDF</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nomor KK</th>
                                    <th>Jumlah Anggota</th>
                                    <th>Ibu</th>
                                    <th>Ayah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (empty($keluarga)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        data tidak ditemukan.
                                    </div>
                                <?php endif; ?>
                                <?php
                                $no = 1;
                                foreach ($keluarga as $klrg) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no;
                                                                $no++; ?></td>
                                        <td><?= $klrg['id_kk']; ?></td>
                                        <td><?= $klrg['jml_anggota']; ?></td>
                                        <td><?= $klrg['ibu']; ?></td>
                                        <td><?= $klrg['ayah']; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url(); ?>keluarga/detail/<?= $klrg['id']; ?>" class="badge badge-primary float-center"><i class="fas fa-user"></i> Lihat</a>
                                            <a href="<?= base_url(); ?>keluarga/ubah/<?= $klrg['id']; ?>" class="badge badge-success float-center"><i class="fas fa-edit"></i> Ubah</a>
                                            <a href="<?= base_url() ?>keluarga/hapus/<?= $klrg['id']; ?>" class="badge badge-danger float-center" data-toggle="modal" data-target="#hapusModal">
                                                <i class="far fa-trash-alt"></i> Hapus
                                            </a>
                                        </td>
                                    </tr> <?php endforeach; ?> </tbody>
                        </table>
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
</div>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Hapus Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url(); ?>keluarga/hapus/<?= $klrg['id']; ?>">Ya</a>
            </div>
        </div>
    </div>
</div>