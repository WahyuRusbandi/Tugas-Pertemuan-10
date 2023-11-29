<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nama_user = $_POST['nama_user'];
            $alamat_user = $_POST['alamat_user'];
            $nohp_user = $_POST['nohp_user'];
            $role_user = $_POST['role_user'];
            $aktif_user =  $_POST['aktif_user'];

            $sql = "INSERT INTO tb_users
            SET user_email=:user_email, user_password=PASSWORD(:user_password), user_full_name=:user_full_name, alamat_user=:alamat_user, nohp_user=:nohp_user, role_user=:role_user, aktif_user=:aktif_user";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_full_name", $nama_user);
            $stmt->bindParam(":alamat_user", $alamat_user);
            $stmt->bindParam(":nohp_user", $nohp_user);
            $stmt->bindParam(":role_user", $role_user);
            $stmt->bindParam(":aktif_user", $aktif_user);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nama_user = $_POST['nama_user'];
            $alamat_user = $_POST['alamat_user'];
            $nohp_user = $_POST['nohp_user'];
            $role_user = $_POST['role_user'];
            $aktif_user = $_POST['aktif_user'];
            $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_password=PASSWORD(:user_password), user_full_name=:user_full_name, alamat_user=:alamat_user, nohp_user=:nohp_user, role_user=:role_user, aktif_user=:aktif_user
                  WHERE user_id=:user_id";
            } else {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_full_name=:user_full_name,alamat_user=:alamat_user, nohp_user=:nohp_user, role_user=:role_user, aktif_user=:aktif_user
                  WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_full_name", $nama_user);
            $stmt->bindParam(":alamat_user", $alamat_user);
            $stmt->bindParam(":nohp_user", $nohp_user);
            $stmt->bindParam(":role_user", $role_user);
            $stmt->bindParam(":aktif_user", $aktif_user);
            $stmt->bindParam(":user_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
      }
}
