<?php include 'header.php' ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h3>Data Masyarakat</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Daftar</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                    </tr>
                </thead>
                <tbody>

                    <?php include '../conn.php';
                    $no = 1;
                    $data = mysqli_query($con, "select * from masyarakat");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['tgl_daftar'] ?></td>
                            <td><?php echo $d['nik'] ?></td>
                            <td><?php echo $d['nama'] ?></td>
                            <td><?php echo $d['jk'] ?></td>
                            <td><?php echo $d['alamat'] ?></td>
                            <td><?php echo $d['telp'] ?></td>
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

<?php include 'footer.php' ?>