<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_pelanggan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $kode_barang = $_POST['kode_barang'];
          $nama_user = $_POST['nama_user'];
          $alamat_user = $_POST['alamat_user'];
          $nohp_user = $_POST['nohp_user'];
          $ktp_user = $_POST['ktp_user'];
          $id_user = $_POST['id_user'];
          $pelanggan_aktif = $_POST['pelanggan_aktif'];

          $sql = "INSERT INTO tb_pelanggan SET kode_barang=:kode_barang, nama_user=:nama_user, alamat_user=:alamat_user, nohp_user=:nohp_user, ktp_user=:ktp_user, id_user=:id_user, pelanggan_aktif=:pelanggan_aktif";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":kode_barang", $kode_barang);
          $stmt->bindParam(":nama_user", $nama_user);
          $stmt->bindParam(":alamat_user", $alamat_user);
          $stmt->bindParam(":nohp_user", $nohp_user);
          $stmt->bindParam(":ktp_user", $ktp_user);
          $stmt->bindParam(":id_user", $id_user);
          $stmt->bindParam(":user_aktif", $user_aktif);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_pelanggan WHERE pelanggan_id=:pelanggan_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pelanggan_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $kode_barang = $_POST['kode_barang'];
          $kode_barang = $_POST['nama_user'];
          $alamat_user = $_POST['alamat_user'];
          $nohp_user = $_POST['nohp_user'];
          $ktp_user = $_POST['ktp_user'];
          $id_user = $_POST['id_user'];
          $pelanggan_aktif = $_POST['pelanggan_aktif'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_pelanggan
          SET kode_barang=:kode_barang, nama_user=:nama_user, alamat_user=:alamat_user, nohp_user=:nohp_user, ktp_user=:ktp_user, id_user=:id_user, pelanggan_aktif=:pelanggan_aktif WHERE pelanggan_id=:pelanggan_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":kode_barang", $kode_barang);
          $stmt->bindParam(":nama_user", $nama_user);
          $stmt->bindParam(":alamat_user", $alamat_user);
          $stmt->bindParam(":nohp_user", $nohp_user);
          $stmt->bindParam(":ktp_user", $ktp_user);
          $stmt->bindParam(":id_user", $id_user);
          $stmt->bindParam(":pelanggan_aktif", $pelanggan_aktif);
          $stmt->bindParam(":pelanggan_id", $id);

          $stmt->execute();
     }
}
