<?php include 'header.php'; ?>
<div class="ecommerce-widget">

  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
      <div class="card">
        <h5 class="card-header">Input Data</h5>
        <div class="card-body p-3">
          <div class="row">
            <div class="col-md-6">
              <form action="simpan.php" method="post">
                <input type="text" class="form-control" name="id_spbu" placeholder="Id SPBU">
                <br>
                <input type="text" name="nama_lokasi" class="form-control" placeholder="Nama SPBU">
                <br>
                <input type="text" name="latitude" placeholder="Latitude" class="form-control">
                <br>
                <input type="text" name="logitude" placeholder="Longitude" class="form-control">
                <br>
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>
