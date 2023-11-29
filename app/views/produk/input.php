<h2>Input Produk</h2>

<form action="<?php echo URL; ?>/Produk/save" method="post">
    <table>
        <tr>
            <td>KODE BARANG</td>
            <td><input type="text" name="kode_barang" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama_barang" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga_barang" required></td>
        </tr>
        <tr>
            <td>STOCK</td>
            <td><input type="text" name="stock_barang" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>