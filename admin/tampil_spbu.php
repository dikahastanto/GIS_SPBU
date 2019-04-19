<?php

include 'header.php';
include '../koneksi.php';
$sql = "SELECT * FROM info";
$query = mysqli_query($konek,$sql);

?>
<div class="ecommerce-widget">

  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
      <div class="card">
        <h5 class="card-header">Tampil Data SPBU</h5>
        <div class="card-body p-3">
          <table class="table table-responsive table-hover">
            <tr>
              <td>Id SPBU</td>
              <td>Nama SPBU</td>
              <td>Latitude</td>
              <td>Longitude</td>
              <td>Aksi</td>
            </tr>
            <?php
            while ($data=mysqli_fetch_array($query)) {
              echo "<tr>
                      <td>".$data['id_spbu']."</td>
                      <td>".$data['nama_lokasi']."</td>
                      <td>".$data['lat']."</td>
                      <td>".$data['lng']."</td>
                      <td>
                        <a href='form_update.php?id_spbu=".$data['id_spbu']."'>
                          <button class='btn btn-warning'>Update</button>
                        </a>
                        <a href='delete.php?id_spbu=".$data['id_spbu']."'>
                          <button class='btn btn-danger' onClick='return konfirmasi()'>Delete</button>
                        </a>
                      </td>
                    </tr>";
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
<script type="text/javascript" lang="javascript">
  function konfirmasi() {
    var pilihan = confirm ("Apakah Anda Yakin");
    if (pilihan) {
      return true
    }else{
      alert("Proses Di batalkan")
      return false
    }
  }
</script>
<?php include 'footer.php'; ?>
