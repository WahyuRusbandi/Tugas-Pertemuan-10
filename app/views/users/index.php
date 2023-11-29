<h2>Users</h2>

<a href="<?php echo URL; ?>/users/input" class="btn">Input User</a>

<table id="dtb">
<thead>
      <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>NAME</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>ROLE</th>
            <th>AKTIF</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>
      </thead>
    <tbody>
      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['nama_user']; ?></td>
                  <td><?php echo $row['alamat_user']; ?></td>
                  <td><?php echo $row['nohp_user']; ?></td>
                  <td><?php echo $row['role_user']; ?></td>
                  <td><?php echo $row['aktif_user']; ?></td>
                  <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['id_user']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['id_user']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>
      </tbody>

</table>