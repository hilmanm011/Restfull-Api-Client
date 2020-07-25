<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>
    <div>
        <h2>Informasi Data Kependudukan Desa Bojongkeding</h2>
    </div>

    <div class="row mt-3">
        <div class="col">

            <?php if (empty($penduduk)) : ?>
                <div class="alert alert-danger" role="alert">
                    data penduduk tidak ditemukan.
                </div>
            <?php endif; ?>
            <table class="table table-bordered table-striped">
                <thead>

                    <tr class="card-header text-center">
                        <td><b>ID NIK</b></td>
                        <td><b>Nama</b></td>
                        <td><b>Tanggal Lahir</b></td>
                        <td><b>Jenis Kelamin</b></td>
                        <td><b>Alamat</b></td>
                        <td><b>Status</b></td>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($penduduk as $pndk) :
                        $id_nik = $pndk['id_nik'];
                        $nama = $pndk['nama'];
                        $tanggal_lahir = $pndk['tanggal_lahir'];
                        $jk = $pndk['jk'];
                        $alamat = $pndk['alamat'];
                        $status = $pndk['status'];
                    ?>
                        <tr>

                            <td><?= $id_nik; ?></td>
                            <td><?= $nama; ?></td>
                            <td><?= $tanggal_lahir; ?></td>
                            <td><?= $jk; ?></td>
                            <td><?= $alamat; ?></td>
                            <td><?= $status; ?></td>

                        </tr>

                </tbody>
            <?php endforeach; ?>
            </table>
        </div>
    </div>

    <nav>
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Sebelumnya</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Selanjutnya</a>
            </li>
        </ul>
    </nav>

</div>