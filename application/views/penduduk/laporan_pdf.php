<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>


</html>
<h2>Informasi Data Kependudukan Desa Bojongkeding</h2>


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
</body>