<?php
include '../koneksi.php';

$id_spbu = $_POST['id_spbu'];
$nama_spbu = $_POST['nama_lokasi'];
$lat = $_POST['latitude'];
$long = $_POST['logitude'];

$sql = "INSERT INTO info (id_spbu,nama_lokasi,lat,lng) VALUES ('$id_spbu','$nama_spbu','$lat','$long')";
$query = mysqli_query($konek,$sql);

if ($query) {
  echo "<script type='text/JavaScript'>
          alert('Berhasil Simpan Data');
          window.location = 'input_data_spbu.php';
        </script>";
}else {
  echo "<script type='text/JavaScript'>
          alert('Gagal Simpan Data');
          window.location = 'input_data_spbu.php';
        </script>";
}

?>
