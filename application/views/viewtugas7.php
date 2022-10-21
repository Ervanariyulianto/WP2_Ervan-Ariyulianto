<html>

<head>
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('tugas7/cetak'); ?>"method="POST">
            <table>
                <tr>
                    <th colspan="3">
                         Form Input Data Mahasiswa
                    </th>
                </tr>
                 <tr>
                    <td colspan="3">==============================
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama </th>
                    <th>:</th>
                    <td>
                        <input type="text" name="Nama" id="Nama">
                        <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="NIS" id="NIS">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Kelas" id="Kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="TempatLahir" id="TempatLahir">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Alamat" id="Alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="kelamin" id="laki" value="Laki-Laki">
                        <label for="laki">Laki-Laki</label><br>
                    </td>
                    <td>
                        <input type="radio" name="kelamin" id="perempuan" value="Perempuan">
                        <label for="Perempuan">Perempuan</label><br>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="Agama" id="Agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html