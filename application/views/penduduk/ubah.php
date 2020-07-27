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





    <li class="nav-item active">
        <a class="nav-link active text-primary" href="<?= base_url('penduduk/index') ?>">
            <i class="fas fa-address-book" style="color: #1abc9c;"></i>
            <span>Kelola Data Penduduk</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">





    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('mahasiswa/index') ?>">
            <i class="fas fa-address-book"></i>
            <span>Kelola Data Mahasiswa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Blog</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Info Desa :</h6>
                <a class="collapse-item" href="<?= base_url('admin/blog') ?>">Lihat Blog</a>
                <a class="collapse-item" href="cards.html">Kelola Blog</a>
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
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small ">Admin</span>
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
                <h1 class="h3 mb-0 text-gray-800">Kelola Data Penduduk</h1>
            </div>

            <!-- Data Tabel Penduduk -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="h5 card-header text-center text-primary">
                        Form Ubah Data Penduduk
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card-body col-lg-7">
                        <div class="card">

                            <div class="card-body">
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?= $penduduk['id']; ?>">
                                    <div class="form-group">
                                        <label for="id_nik">Nomor NIK :</label>
                                        <input type="text" name="id_nik" class="form-control" id="id_nik" value="<?= $penduduk['id_nik']; ?>">
                                        <small class="form-text text-danger"><?= form_error('id_nik'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kk">Nomor KK :</label>
                                        <input type="text" name="id_kk" class="form-control" id="id_kk" value="<?= $penduduk['id_kk']; ?>">
                                        <small class="form-text text-danger"><?= form_error('id_kk'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap :</label>
                                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $penduduk['nama']; ?>">
                                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir :</label>
                                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?= $penduduk['tempat_lahir']; ?>">
                                        <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Taggal Lahir :</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $penduduk['tanggal_lahir']; ?>">
                                        <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin :</label>
                                        <select class="form-control" id="jk" name="jk">
                                            <?php foreach ($jk as $j) : ?>
                                                <?php if ($j == $penduduk['jk']) : ?>
                                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status :</label>
                                        <input type="text" name="status" class="form-control" id="status" value="<?= $penduduk['status']; ?>">
                                        <small class="form-text text-danger"><?= form_error('status'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat :</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $penduduk['alamat']; ?>">
                                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan :</label>
                                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?= $penduduk['pekerjaan']; ?>">
                                        <small class="form-text text-danger"><?= form_error('pekerjaan'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="kewarganegaraan">Kewarganegaraan :</label>
                                        <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                            <?php foreach ($kewarganegaraan as $k) : ?>
                                                <?php if ($k == $penduduk['kewarganegaraan']) : ?>
                                                    <option value="<?= $k; ?>" selected><?= $k; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $k; ?>"><?= $k; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama :</label>
                                        <input type="text" name="agama" class="form-control" id="agama" value="<?= $penduduk['agama']; ?>">
                                        <small class="form-text text-danger"><?= form_error('agama'); ?></small>
                                    </div>
                                    <a href="<?= base_url('penduduk'); ?>" class="btn btn-primary float-left"><i class="fas fa-caret-left"></i>Kembali</a>
                                    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah</button>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
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