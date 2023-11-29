<?php

namespace App\Models;

use App\Core\Model;

class Produk extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_produk";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $nama_barang = $_POST['nama_barang'];
          $harga_barang = $_POST['harga_barang'];
          $stock_barang = $_POST['stock_barang'];

          $sql = "INSERT INTO tb_produk SET nama_barang=:nama_barang, harga_barang=:harga_barang, stock_barang=:stock_barang";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama_barang", $nama_barang);
          $stmt->bindParam(":harga_barang", $harga_barang);
          $stmt->bindParam(":stock_barang", $stock_barang);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_produk WHERE kode_barang=:kode_barang";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":kode_barang", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $nama_barang = $_POST['nama_barang'];
          $harga_barang = $_POST['harga_barang'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_produk
          SET nama_barang=:nama_barang, harga_barang=:harga_barang, stock_barang=:stock_barang WHERE kode_barang=:kode_barang";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama_barang", $nama_barang);
          $stmt->bindParam(":harga_barang", $harga_barang);
          $stmt->bindParam(":stock_barang", $stock_barang);
          $stmt->bindParam(":kode_barang", $id);

          $stmt->execute();
     }
}
