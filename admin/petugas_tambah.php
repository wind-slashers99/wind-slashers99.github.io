<?php include'header.php'; ?>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
    <br>
    <br>
    <br>
    <br>
    <div class="container">
<div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Registrasi</h5>
    <p class="card-text">
        <form action="petugas_tambah_act.php" method="post">
       
        <div class="form-group">
    <label for="exampleInputEmail1">Nama Petugas</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

        <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
        <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
        <div class="form-group">
    <label for="exampleInputEmail1">No Telepon</label>
    <input type="number" class="form-control" name="telpon" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
    </p>
  </div>
</div>
</div>
</div>
<div class="col-md-4"></div>
<?php include'footer.php'; ?>
