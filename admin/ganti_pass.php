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
    <h5 class="card-title">Ganti Password</h5>
    <p class="card-text">
        <form action="ganti_pass_act.php" method="post">
        <div class="form-group">
    <label for="exampleInputEmail1">Masukkan Password Baru</label>
    <input type="text" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <button type="submit" class="btn btn-primary">Ganti Password</button>
</form>
    </p>
  </div>
</div>
</div>
</div>
<div class="col-md-4"></div>
<?php include'footer.php'; ?>
