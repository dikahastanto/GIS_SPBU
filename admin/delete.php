<?php
include '../koneksi.php';

$id = $_GET['id_spbu'];
$sql = "DELETE FROM info WHERE id_spbu='$id'";
$query = mysqli_query($konek,$sql);
$data = mysqli_fetch_array($query);

if ($query) {
  echo "<script type='text/JavaScript'>
          alert('Berhasil Delete Data');
          window.location = 'tampil_spbu.php';
        </script>";
}else {
  echo "<script type='text/JavaScript'>
          alert('Gagal Delete Data');
          window.location = 'tampil_spbu.php';
        </script>";
}

?>
