<h2>PRODUK</h2>

<a href="<?php echo URL; ?>/Produk/input" class="btn">Input Produk</a>

<table id="dtb">
<thead>
      <tr>
            <th>NO</th>
            <th>KODE BARANG</th>
            <th>NAMA BARANG</th>
            <th>HARGA BARANG</th>
            <th>STOCK BARANG</th>
            <th>EDIT</th>
      </tr> 
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['kode_barang']; ?></td>
                  <td><?php echo $row['nama_barang']; ?></td>
                  <td><?php echo $row['harga_barang']; ?></td>
                  <td><?php echo $row['stock_barang']; ?></td>
                  <td><a href="<?php echo URL; ?>/Produk/edit/<?php echo $row['kode_barang']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>
      </tbody>

</table>