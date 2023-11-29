<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>

<table id="dtb">
    <thead>
      <tr>
            <th>NO</th>
            <th>KOS ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HO HP</th>
            <th>KTP</th>
            <th>USER ID</th>
            <th>PELANGGAN AKTIF</th>
            <th>EDIT</th>
      </tr>  
    </thead>
    <tbody>  
        <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['kode_barang']; ?></td>
                  <td><?php echo $row['nama_user']; ?></td>
                  <td><?php echo $row['alamat_user']; ?></td>
                  <td><?php echo $row['nohp_user']; ?></td>
                  <td><?php echo $row['ktp_user']; ?></td>
                  <td><?php echo $row['id_user']; ?></td>
                  <td><?php echo $row['pelanggan_aktif']; ?></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>
    </tbody>
</table>