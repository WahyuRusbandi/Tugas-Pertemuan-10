<h2>Edit Produk</h2>

<form action="<?php echo URL; ?>/produk/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['kode_barang']; ?>">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="nama_barang" value="<?php echo $data['row']['nama_barang']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga_barang" value="<?php echo $data['row']['harga_barang']; ?>" required></td>
        </tr>
        <tr>
            <td>STOCK</td>
            <td><input type="text" name="stock_barang" value="<?php echo $data['row']['stock_barang']; ?>" required></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>