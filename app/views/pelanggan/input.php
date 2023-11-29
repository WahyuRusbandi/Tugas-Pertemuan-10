<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>PELANGGAN ID</td>
            <td><input type="text" name="kode_barang" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama_user" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat_user" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="nohp_user" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="ktp_user" required></td>
        </tr>
        <tr>
            <td>USER ID</td>
            <td><input type="text" name="id_user" required></td>
        </tr>
        <tr>
            <td>PELANGGAN AKTIF</td>
            <td><input type="text" name="pelanggan_aktif" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>