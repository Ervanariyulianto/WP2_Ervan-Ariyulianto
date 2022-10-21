<html>

<head>
    <title>Tampilan Data Mahasiswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
            <th colspan="3">
                Tampilan Data Mahasiswa
            </th>
        </tr>
        <tr>
            <td colspan="3">===========================================
                <hr>
            </td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td>
                <?= $Nama; ?>
            </td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>
                <?= $NIS; ?>
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
            <?= $Kelas; ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
            <?= $TanggalLahir; ?>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>
            <?= $TempatLahir; ?>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
            <?= $Alamat; ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
            <?= $JenisKelamin; ?>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
            <?= $Agama; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <a href="<?= base_url('tugas7'); ?>">Kembali</a>
            </td>
        </tr>
    </table>
 </center>
</body>

</html>
