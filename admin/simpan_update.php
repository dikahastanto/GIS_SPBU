<?php
include '../koneksi.php';


$id_spbu = $_POST['id_spbu'];
$nama_spbu = $_POST['nama_lokasi'];
$lat = $_POST['latitude'];
$long = $_POST['logitude'];

$sql = "UPDATE info SET nama_lokasi='$nama_spbu',lat='$lat',lng='$long' WHERE id_spbu='$id_spbu'";
$query = mysqli_query($konek,$sql);

if ($query) {
  echo "<script type='text/JavaScript'>
          alert('Berhasil Update Data');
          window.location = 'tampil_spbu.php';
        </script>";
}else {
  echo "<script type='text/JavaScript'>
          alert('Gagal Update Data');
          window.location = 'tampil_spbu.php';
        </script>";
}

?>
