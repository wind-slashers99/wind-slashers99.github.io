<?php include 'header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profil</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped table-datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>No Telpon</th>
                                    <th width="10%" align="center">Foto</th>
                                    <th width="10%" align="center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php include '../conn.php';
                                $no = 1;
                                $data = mysqli_query($con, "select * from petugas where level='admin'");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d['nama_petugas'] ?></td>
                                        <td><?php echo $d['username'] ?></td>
                                        <td><?php echo $d['telp'] ?></td>
                                        <td>
                                            <center>
                                                <?php if ($d['foto'] == "") { ?>
                                                    <img src="../pict/user.png" style="width:90px;
                                                        height:auto">
                                                <?php } else { ?>
                                                    <img src="../pict/<?php echo $d['foto'] ?>" style="width:90px;height:auto">
                                                <?php } ?>

                                            </center>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="edit_profil.php?id=<?php echo $d['id_petugas'] ?>"><i class="fa fa-cog"></i></a>

                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>