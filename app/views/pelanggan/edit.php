<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['kode_barang']; ?>">
    <table>
        <tr>
            <td>KODE BARANG</td>
            <td><input type="text" name="kode_barang" value="<?php echo $data['row']['kode_barang']; ?>" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="nama_user" value="<?php echo $data['row']['nama_user']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat_user" value="<?php echo $data['row']['alamat_user']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="nohp_user" value="<?php echo $data['row']['nohp_user']; ?>" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="ktp_user" value="<?php echo $data['row']['ktp_user']; ?>" required></td>
        </tr>
        <tr>
            <td>USER ID</td>
            <td><input type="text" name="id_user" value="<?php echo $data['row']['id_user']; ?>" required></td>
        </tr>
        <tr>
            <td>PELANGGAN AKTIF</td>
            <td><input type="text" name="pelanggan_aktif" value="<?php echo $data['row']['pelanggan_aktif']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>