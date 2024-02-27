
<?php 
    include "../layout/header.php";
    include "../layout/menu.php";
    

    ?>
<form action="simpan.php" method="post">
  <div class="mb-3">
    <label for="nama_distributor" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama_distributor" name="nama_distributor">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  <div class="mb-3">
    <label for="telepon" class="form-label">Telepon</label>
    <input type="text" class="form-control" id="telepon" name="telepon">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include "../layout/footer.php";?>