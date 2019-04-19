<?php

include 'header.php';
include '../koneksi.php';

$id = $_GET['id_spbu'];
$sql = "SELECT * FROM info WHERE id_spbu='$id'";
$query = mysqli_query($konek,$sql);
$data = mysqli_fetch_array($query);

?>
<div class="ecommerce-widget">

  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
      <div class="card">
        <h5 class="card-header">Update Data</h5>
        <div class="card-body p-3">
          <div class="row">
            <div class="col-md-6">
              <form action="simpan_update.php" method="post">
                <input type="text" class="form-control" name="id_spbu" placeholder="Id SPBU" value="<?= $data['id_spbu'];  ?>" readonly>
                <br>
                <input type="text" name="nama_lokasi" class="form-control" placeholder="Nama SPBU" value="<?= $data['nama_lokasi'];  ?>">
                <br>
                <input type="text" name="latitude" placeholder="Latitude" class="form-control" value="<?= $data['lat'];  ?>">
                <br>
                <input type="text" name="logitude" placeholder="Longitude" class="form-control" value="<?= $data['lng'];  ?>">
                <br>
                <input type="submit" name="Update" value="Update" class="btn btn-success">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>
