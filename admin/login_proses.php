<?php
session_start();
include '../koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];


if ($username == "" AND $password=="") {
  echo "<script type='text/JavaScript'>
          alert('username / Password Tidak Boleh Kosong');
          window.location = 'login.php';
        </script>";
}else {
  $sql = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
  $query = mysqli_query($konek,$sql);
  $data=mysqli_fetch_array($query);

  if ($data['username'] == $username AND $data['password'] == $password) {
    $_SESSION['logged-in'] = true;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    header('location: index.php');
  }else{
    echo "<script type='text/JavaScript'>
            alert('username / Password salah');
            window.location = 'login.php';
          </script>";
  }
}



 ?>
