<?php include'header.php' ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h3>Data Pengaduan Selesai</h3>
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-datatable">
        <thead>
  <tr>
    <th>No</th>
    <th>ID Pengaduan</th>
    <th>NIK</th>
    <th>Tanggal</th>
    <th>Isi Pengaduan</th>
    <th>Tanggapan</th>
      </tr>
      </thead>
      <tbody>

        <?php include '../conn.php';
        $no=1;
        $data = mysqli_query($con,"select * from pengaduan where status='selesai' order by id_pengaduan desc ");

        while ($d = mysqli_fetch_array($data)){
            ?>
             <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $d['id_pengaduan'] ?></td>
              <td><?php echo $d['nik'] ?></td>
              <td><?php echo $d['tgl_pengaduan'] ?></td>
              <td><?php echo $d['isi_laporan'] ?></td>
              <td><a href="detail_tanggapan.php?id=<?php echo $d['id_pengaduan']; ?>" class="btn border-success text-success">Tanggapan</a></td>

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