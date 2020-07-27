<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>assets_m/img/icon-desa.png" />
</head>


<body>


    <h1 style="text-align: center">Daftar Data Penduduk Desa Bojongkeding</h1>
    <table border="1">
        <thead>

            <tr class="card-header text-center">
                <td><b>NO</b></td>
                <td><b>ID NIK</b></td>
                <td><b>ID KK</b></td>
                <td><b>Nama</b></td>
                <td><b>Tempat Lahir</b></td>
                <td><b>Tanggal Lahir</b></td>
                <td><b>Jenis Kelamin</b></td>
                <td><b>Status</b></td>
                <td><b>Alamat</b></td>
                <td><b>Pekerjaan</b></td>
                <td><b>Kewarganegaraan</b></td>
                <td><b>Agama</b></td>
            </tr>

        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($penduduk as $pndk) :
                $no = $no++;
                $id_nik = $pndk['id_nik'];
                $id_kk = $pndk['id_kk'];
                $nama = $pndk['nama'];
                $tempat_lahir = $pndk['tempat_lahir'];
                $tanggal_lahir = $pndk['tanggal_lahir'];
                $jk = $pndk['jk'];
                $status = $pndk['status'];
                $alamat = $pndk['alamat'];
                $pekerjaan = $pndk['pekerjaan'];
                $kewarganegaraan = $pndk['kewarganegaraan'];
                $agama = $pndk['agama'];
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $id_nik; ?></td>
                    <td><?= $id_kk; ?></td>
                    <td><?= $nama; ?></td>
                    <td><?= $tempat_lahir; ?></td>
                    <td><?= $tanggal_lahir; ?></td>
                    <td><?= $jk; ?></td>
                    <td><?= $status; ?></td>
                    <td><?= $alamat; ?></td>
                    <td><?= $pekerjaan; ?></td>
                    <td><?= $kewarganegaraan; ?></td>
                    <td><?= $agama; ?></td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>