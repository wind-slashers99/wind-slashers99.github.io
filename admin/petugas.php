<?php include'header.php' ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h3>Data Petugas</h3>
        <a href="petugas_tambah.php" class="btn btn-success"><i class="fas fa-plus">&nbsp Tambah Petugas</i></a>
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-datatable">
        <thead>
  <tr>
    <th>No</th>
    <th>ID Petugas</th>
    <th>Nama Petugas</th>
    <th>Username</th>
    <th>No Telp</th>
    <th>Hapus</th>
      </tr>
      </thead>
      <tbody>

        <?php include '../conn.php';
        $no=1;
        $data = mysqli_query($con,"select * from petugas where level='petugas'");
        while ($d = mysqli_fetch_array($data)){
            ?>
             <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $d['id_petugas'] ?></td>
              <td><?php echo $d['nama_petugas'] ?></td>
              <td><?php echo $d['username'] ?></td>
              <td><?php echo $d['telp'] ?></td>
              <td><a href="petugas_hapus.php?id=<?php echo $d['id_petugas']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
        </tr>
            <?php
        }
        ?>
</tbody>
        </table>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

<?php include'footer.php' ?>