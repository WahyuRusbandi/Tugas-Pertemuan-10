<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_user']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="nama_user" value="<?php echo $data['row']['user_full_name']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat_user']; ?>" required></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="hp" value="<?php echo $data['row']['nohp_user']; ?>" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name="role" value="<?php echo $data['row']['role_user']; ?>" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td><input type="text" name="aktif" value="<?php echo $data['row']['aktif_user']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>