<?php include 'header.php'; ?>
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
          <h5 class="card-title">Login</h5>
          <p class="card-text">

          <form action="login_act.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Level</label>
              <select class="form-control" name="hakakses" id="exampleFormControlSelect1">
                <option>Silahkan Pilih...</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
              </select>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
  <?php include 'footer.php'; ?>