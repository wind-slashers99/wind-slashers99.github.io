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
            <div class="col-12 col-xl-6 col-sm-6 mb-4">
                <!-- Card-->
                <a href="ganti_web.php">
                    <div class="card overflow-hidden">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="flex-shrink-0 size-60 rounded bg-warning-subtle text-light me-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-people fs-3"></i>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h6 class="fs-4 d-block mb-1">
                                    Ubah Logo & Nama Web
                                </h6>
                            </div>

                        </div>
                    </div>
                </a>
            </div>


            <div class="col-12 col-xl-6 col-sm-6 mb-4">
                <!-- Card-->
                <a href="profil.php">
                    <div class="card overflow-hidden">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="flex-shrink-0 size-60 rounded bg-success-subtle text-light me-3 d-flex align-items-center justify-content-center">
                                <i class="fas fa-image fs-3"></i>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h6 class="fs-4 d-block mb-1">
                                    Profil
                                </h6>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

        </div>


        <!--row-->

    </div>
</div>
<?php include 'footer.php'; ?>