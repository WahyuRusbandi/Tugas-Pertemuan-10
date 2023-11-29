<?php

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{

     public object $model;

     public function __construct()
     {

          $this->model = new \App\Models\Login();
     }

     public function index()
     {
          $this->guest('login/index');
     }

     public function proses()
     {
          $row  = $this->model->proses();

          if (!empty($row)) {
               $_SESSION['login'] = true;
               $_SESSION['nama_user'] = $row['nama_user'];
               header('location:' . URL . '/dashboard');
          } else {
               $_SESSION['login'] = false;
               header('location:' . URL);
          }
     }
}
