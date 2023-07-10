<?php include 'header.php';
include '../conn.php'; ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Profil</h5>
                    <p class="card-text">
                    <form action="update_profil.php" method="post">
                        <?php
                        $id = $_GET['id'];

                        $data = mysqli_query($con, "SELECT * FROM petugas where id_petugas ='$id'");
                        while ($d = mysqli_fetch_array($data)) {

                        ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo $d['id_petugas'] ?>" readonly>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo $d['nama_petugas'] ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo $d['username'] ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukkan Password</label>
                                <input type="text" class="form-control" name="password" placeholder="kosongkan jika tidak ingin mengganti.." id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level</label>
                                <input type="text" name="level" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo $d['level'] ?>" readonly>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telepon</label>
                                <input type="number" class="form-control" name="telpon" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo $d['telp'] ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Foto</label>
                                <br>
                                <input type="file" class="form-control" name="foto" id="foto">
                                <br>
                                <small class="text-muted">Abaikan Jika Tidak Ingin Mengganti Foto</small>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Konfirmasi</button>
                        <?php
                        }
                        ?>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
    <?php include 'footer.php'; ?>