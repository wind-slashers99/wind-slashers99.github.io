<!-- ?php include('header.php') ?> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../DataTables/css/dataTables.bootstrap.css">

    <title>Admin</title>
  </head>
  <body>
   
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h3>Rekapitulasi Data Pengaduan</h3>
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-datatable">
        <thead>
  <tr>
    <th>No</th>
    <th>ID Pengaduan</th>
    <th>Tanggal</th>
    <th>NIK</th>
    <th>Isi Pengaduan</th>
    <th>Status</th>
      </tr>
      </thead>
      <tbody>

        <?php include '../conn.php';
        $no=1;
        $data = mysqli_query($con,"select * from pengaduan order by id_pengaduan desc");

        while ($d = mysqli_fetch_array($data)){
            ?>
             <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $d['id_pengaduan'] ?></td>
              <td><?php echo $d['tgl_pengaduan'] ?></td>
              <td><?php echo $d['nik'] ?></td>
              <td><?php echo $d['isi_laporan'] ?></td>
              <td><?php if($d['status'] == "proses"){
                echo "<span class='badge badge-danger'>Menunggu Konfirmasi</span>";
              } else {
                echo "<span class='badge badge-success'>Selesai</span>";
              } ?></td>

        </tr>
            <?php
        }
        ?>
</tbody>
        </table>
        
        </div>
    </div>
    <div class="col-md-1">
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../DataTables/js/dataTables.bootstrap.js"></script>
    <script src="../DataTables/js/dataTables.dataTables.js"></script>
    <script src="../DataTables/js/jquery.dataTables.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script type="text/javascript">window.print();</script>

  </body>
</html>


<?php include'footer.php' ?>