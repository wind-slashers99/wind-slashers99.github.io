<?php include 'header.php'; ?>
<?php include '../conn.php'; ?>
<div class="toolbar p-4 pb-0">
    <div class="position-relative container-fluid px-0">
        <div class="row align-items-center position-relative">
            <div class="col-md-5 mb-3 mb-lg-0">
                <h3 class="mb-2">Welcome back,
                    <?php
                    echo $_SESSION['nama'];
                    ?>! 👋</h3>


            </div>
            <div class="col-md-7 text-md-end">
                <div class="d-flex justify-content-md-end align-items-center">
                    <div id="reportrange" class="bg-body-secondary rounded px-3 py-1">
                        <i class="bi bi-calendar ">&nbsp; <?php echo date("d M Y"); ?></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content p-4 pb-0 d-flex flex-column-fluid position-relative">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-12 col-xl-3 col-sm-6 mb-4">
                <!-- Card-->
                <a href="petugas.php">
                    <div class="card overflow-hidden">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="flex-shrink-0 size-60 rounded bg-warning-subtle text-warning me-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-people fs-3"></i>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h5 class="fs-4 d-block mb-1">
                                    <?php
                                    $data = mysqli_query($con, "select * from petugas where level='petugas'");
                                    echo mysqli_num_rows($data);
                                    ?>
                                </h5>
                                <p class="mb-0 text-muted">Petugas</p>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-xl-3 col-sm-6 mb-4">
                <!-- Card-->
                <a href="masyarakat.php">
                    <div class="card overflow-hidden">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="flex-shrink-0 size-60 rounded bg-primary-subtle text-primary me-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-people fs-3"></i>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h5 class="fs-4 d-block mb-1">
                                    <?php
                                    $data = mysqli_query($con, "select * from masyarakat ");
                                    echo mysqli_num_rows($data);
                                    ?>
                                </h5>
                                <p class="mb-0 text-muted">Masyarakat</p>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-xl-3 col-sm-6 mb-4">
                <!-- Card-->
                <a href="pengaduan.php">
                    <div class="card overflow-hidden">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="flex-shrink-0 size-60 rounded bg-success-subtle text-success me-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-check fs-3"></i>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h5 class="fs-4 d-block mb-1">
                                    <?php
                                    $data = mysqli_query($con, "select * from pengaduan where status='selesai'");
                                    echo mysqli_num_rows($data);
                                    ?>
                                </h5>
                                <p class="mb-0 text-muted">Laporan Selesai</p>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-xl-3 col-sm-6 mb-4">
                <!-- Card-->
                <a href="masyarakat.php">

                    <div class="card overflow-hidden">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="flex-shrink-0 size-60 rounded bg-danger-subtle text-danger me-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-exclamation fs-3"></i>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h5 class="fs-4 d-block mb-1">
                                    <?php
                                    $data = mysqli_query($con, "select * from pengaduan where status='proses'");
                                    echo mysqli_num_rows($data);
                                    ?>
                                </h5>
                                <p class="mb-0 text-muted">Laporan Belum Selesai</p>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <!--Card-->
                <div class="card h-100">
                    <!--Card header-->
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <h5 class="mb-0 pe-3">Earnings</h5>
                        <!--Dropdown-->
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="size-35 d-flex align-items-center justify-content-center btn p-0 btn-outline-secondary">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mt-1">
                                <a href="#!.html" class="dropdown-item">
                                    <i class="bi bi-envelope me-2 opacity-50"></i>Email report</a>
                                <a href="#!.html" class="dropdown-item">
                                    <i class="bi bi-download me-2 opacity-50"></i>Download report</a>
                            </div>
                        </div>
                    </div>
                    <!--Apex chart for Overview-->
                    <div class="card-body px-0 pb-0">
                        <div id="chart-earnings"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 mb-4">
                <div class="card h-100 overflow-hidden">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <h5 class="pe-3 mb-0">Traffic</h5>
                        <!--Dropdown-->
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="size-35 d-flex align-items-center justify-content-center btn p-0 btn-outline-secondary">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mt-1">
                                <a href="#!.html" class="dropdown-item">
                                    <i class="bi bi-envelope me-2 opacity-50"></i>Email report</a>
                                <a href="#!.html" class="dropdown-item">
                                    <i class="bi bi-download me-2 opacity-50"></i>Download report</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <!--Col-->
                            <div class="col-4">
                                <div class="text-center">
                                    <span class="d-block text-primary mb-2">
                                        Direct
                                    </span>
                                    <h5 class="mb-0">524K</h5>
                                </div>
                            </div>

                            <!--Col-->
                            <div class="col-4 border-start border-end">
                                <div class="text-center">
                                    <span class="d-block text-info mb-2">
                                        Referral
                                    </span>
                                    <h5 class="mb-0">86K</h5>
                                </div>
                            </div>

                            <!--Col-->
                            <div class="col-4">
                                <div class="text-center">
                                    <span class="d-block text-warning mb-2">
                                        Organic
                                    </span>
                                    <h4 class="mb-0">241K</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="chart-traffic"></div>
                </div>
            </div>
        </div>

        <!--row-->
        <div class="row">

            <div class="col-md-5 col-xl-4 mb-4">
                <div class="card h-100">
                    <div class="d-flex card-header justify-content-between">
                        <h5 class="me-3 mb-0">Pendaftar Baru</h5>
                        <a href="masyarakat.php">View All</a>
                    </div>
                    <?php include '../conn.php';
                    $no = 1;
                    $data = mysqli_query($con, "select * from masyarakat order by tgl_daftar desc ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>


                        <div class="card-body py-0">
                            <ul class="list-group list-group-flush">

                                <!--List-item-->
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">

                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><?php echo $d['nama'] ?></h6>
                                            <p class="mb-0 text-muted"><?php echo $d['jk'] ?></p>
                                            <p class="mb-0 text-muted"><?php echo $d['alamat'] ?></p>
                                        </div>
                                        <div class="flex-shrink-0 text-end">
                                            <span>
                                                <?php echo $d['tgl_daftar'] ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <!--List-item-->

                            </ul>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-7 col-xl-8 mb-4">
                <!--card-->
                <div class="card overflow-hidden h-100">
                    <div class="d-flex card-header border-bottom-0 justify-content-between">
                        <h5 class="me-3 mb-0">Pengaduan Terbaru</h5>
                        <a href="#!.html">View All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless table-nowrap table-card mb-0" style="width:100%">
                            <thead class="text-muted text-uppercase small bg-body bg-opacity-50">
                                <tr>
                                    <th class="ps-3" style="width:190px">ID Pengaduan</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>NIK</th>
                                    <th>Isi Pengaduan</th>
                                    <th class="text-end">Status</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <?php include '../conn.php';
                                $no = 1;
                                $data = mysqli_query($con, "select * from pengaduan order by id_pengaduan desc ");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">

                                                <p class="mb-0 text-truncate"><?php echo $d['id_pengaduan'] ?></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="me-2"><?php echo $d['tgl_pengaduan'] ?></span>

                                            </div>
                                        </td>
                                        <td><?php echo $d['nik'] ?></td>
                                        <td><?php echo $d['isi_laporan'] ?></td>
                                        <td class="text-end"><?php echo $d['status'] ?></td>
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
</div>
<?php include 'footer.php'; ?>