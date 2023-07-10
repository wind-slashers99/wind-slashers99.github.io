<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>

  <!--Font awesome icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="DataTables/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="css/pesan.css">



  <!--Google web fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">


  <!--Simplebar css-->
  <link rel="stylesheet" href="assets/vendor/css/simplebar.min.css">

  <!--Choices css-->
  <link rel="stylesheet" href="assets/vendor/css/choices.min.css">

  <!--Date range picker-->
  <link rel="stylesheet" href="assets/vendor/css/daterangepicker.css">

  <!--Main style-->
  <link rel="stylesheet" href="assets/css/style.min.css" id="switchThemeStyle">
</head>

<body>


  <!--////////////////// PreLoader Start//////////////////////-->
  <div class="loader">
    <!--Placeholder animated layout for preloader-->
    <div class="d-flex flex-column flex-root">
      <div class="page d-flex flex-row flex-column-fluid">

        <!--Sidebar start-->
        <aside class="page-sidebar placeholder-wave">
          <div class="placeholder col-12 h-100 bg-gray"></div>
        </aside>
        <div class="page-content d-flex flex-column flex-row-fluid">
          <div class="content flex-column p-4 pb-0 d-flex justify-content-center align-items-center flex-column-fluid position-relative">
            <div class="w-100 h-100 position-relative d-flex align-items-center justify-content-center">
              <div class="spinner-border me-3 text-primary" role="status">
              </div>

              <div>
                <span>Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--////////////////// /.PreLoader END//////////////////////-->


  <div class="d-flex flex-column flex-root">
    <!--Page-->
    <div class="page d-flex flex-row flex-column-fluid">


      <!--///////////Page sidebar begin///////////////-->
      <aside class="page-sidebar">
        <div class="h-100 flex-column d-flex" data-simplebar>

          <!--Aside-logo-->
          <div class="aside-logo p-3 position-relative">
            <a href="index.html" class="d-block pe-2">
              <div class="d-flex align-items-center flex-no-wrap text-truncate">
                <!--Sidebar-icon-->
                <span class="sidebar-icon fs-5 lh-1 text-white rounded-circle bg-primary">
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.399994" width="4" height="12" fill="white" />
                    <path d="M5.89998 9.6C7.1465 9.6 8.34196 9.09429 9.22338 8.19411C10.1048 7.29394 10.6 6.07304 10.6 4.8C10.6 3.52696 10.1048 2.30606 9.22338 1.40589C8.34196 0.505713 7.1465 2.4787e-07 5.89998 0L5.89998 4.8L5.89998 9.6Z" fill="white" />
                  </svg>
                </span>
                <span class="sidebar-text">
                  <!--Sidebar-text-->
                  <span class="sidebar-text text-truncate fs-4 text-uppercase fw-bolder">
                    Panel <sub class="fs-6 opacity-50">2.0</sub>
                  </span>
                </span>
              </div>
            </a>
          </div>
          <!--Aside-Menu-->
          <div class="aside-menu pe-2 my-auto flex-column-fluid">
            <nav class="flex-grow-1 h-100" id="page-navbar">
              <!--:Sidebar nav-->
              <ul class="nav flex-column collapse-group collapse d-flex pt-4">
                <li class="nav-item sidebar-title text-truncate opacity-50 small">
                  <i class="bi bi-three-dots align-middle"></i>

                  <!--Sidebar nav text-->
                  <span>Menu</span>
                </li>
                <li class="nav-item">
                  <a href="index.php" class="nav-link d-flex align-items-center text-truncate ">
                    <span class="sidebar-icon">
                      <i class="fas fa-home fs-5"></i>
                    </span>
                    <span class="sidebar-text">Home </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pengaduan.php" class="nav-link d-flex align-items-center text-truncate ">
                    <span class="sidebar-icon">
                      <i class="fas fa-user fs-5"></i>
                    </span>
                    <span class="sidebar-text">Form Pengaduan</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="cek.php" class="nav-link d-flex align-items-center text-truncate ">
                    <span class="sidebar-icon">
                      <i class="fas fa-briefcase fs-5"></i>
                    </span>
                    <span class="sidebar-text">Cek Pengaduan</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="regis.php" class="nav-link d-flex align-items-center text-truncate ">
                    <span class="sidebar-icon">
                      <i class="fas fa-file-invoice fs-5"></i>
                    </span>
                    <span class="sidebar-text">Registrasi</span>
                  </a>
                </li>





              </ul>
            </nav>
          </div>
          <!--Aside-footer-->

        </div>
      </aside>
      <!--///////////Page Sidebar End///////////////-->

      <!--///Sidebar close button for 991px or below devices///-->
      <div class="sidebar-close d-lg-none">
        <a href="#"></a>
      </div>
      <!--///.Sidebar close end///-->



      <!--///////////Page content wrapper///////////////-->
      <main class="page-content d-flex flex-column flex-row-fluid">

        <!--//page-header//-->
        <header class="navbar py-0 page-header border-bottom navbar-expand navbar-light px-4">
          <a href="index.html" class="navbar-brand d-block d-lg-none">
            <div class="d-flex align-items-center flex-no-wrap text-truncate">
              <!--Sidebar-icon-->
              <span class="sidebar-icon bg-primary rounded-circle size-40 text-white">
                <svg width="16" height="18" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.399994" width="4" height="12" fill="white" />
                  <path d="M5.89998 9.6C7.1465 9.6 8.34196 9.09429 9.22338 8.19411C10.1048 7.29394 10.6 6.07304 10.6 4.8C10.6 3.52696 10.1048 2.30606 9.22338 1.40589C8.34196 0.505713 7.1465 2.4787e-07 5.89998 0L5.89998 4.8L5.89998 9.6Z" fill="white" />
                </svg>
              </span>
            </div>
          </a>
          <ul class="navbar-nav d-flex align-items-center h-100">
            <li class="nav-item d-none d-lg-flex flex-column h-100 me-lg-2 align-items-center justify-content-center">
              <a href="javascript:void(0)" class="sidebar-trigger nav-link rounded-3 size-35 d-flex align-items-center justify-content-center p-0">
                <i class="bi bi-arrow-bar-left fs-5"></i></a>
            </li>


            <!--Search dropdown menu-->

            <!--Search form-->


            <!--Recently searched-->




          </ul>
          <ul class="navbar-nav ms-auto d-flex align-items-center h-100">
            <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100 me-2">
              <button class="bg-transparent border-0 nav-link p-0 size-35 fs-5 d-flex align-items-center justify-content-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                <span class="bi my-1 theme-icon-active">
                  <i class="bi bi-sun"></i>
                </span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme" style="--bs-dropdown-min-width: 8rem;">
                <li class="mb-1">
                  <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light">
                    <span class="bi me-2 theme-icon">
                      <i class="bi bi-sun"></i>
                      </svg>
                    </span>
                    Light

                  </button>
                </li>
                <li class="mb-1">
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                    <span class="bi me-2 theme-icon">
                      <i class="bi bi-moon"></i>
                    </span>
                    Dark
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
                    <span class="bi me-2 theme-icon"><i class="bi bi-circle-half"></i></span>
                    Auto

                  </button>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100">
              <a href="#" class="nav-link rounded-pill p-1 lh-1 pe-1 pe-md-2 d-flex align-items-center justify-content-center" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="d-flex align-items-center">

                  <!--Avatar with status-->

                  <div class="avatar-status status-online me-1 avatar sm">
                    <img src="pict/user.png" class="rounded-circle img-fluid" alt="">
                  </div>
                </div>
              </a>

              <div class="dropdown-menu mt-0 p-0 dropdown-menu-end overflow-hidden">
                <!--User meta-->

                <div class="p-2">
                  <a href="login.php" class="dropdown-item">
                    <i class="fas fa-user opacity-75 fs-5 align-middle me-2">&nbsp;</i>Login Petugas</a>


                </div>
              </div>
            </li>
            <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100">


              <div class="dropdown-menu mt-0 p-0 dropdown-menu-end overflow-hidden">
                <!--User meta-->
                <div class="position-relative overflow-hidden p-4 bg-primary-subtle">
                  <div class="position-relative">
                    <h5 class="mb-1"><?php echo $d['nama_petugas'] ?></h5>
                    <p class="text-body-tertiary small mb-0 lh-1"><?php echo $d['level'] ?></p>
                  </div>
                </div>
                <div class="p-2">
                  <a href="setting.php" class="dropdown-item">
                    <i class="bi bi-gear opacity-75 fs-5 align-middle me-2"></i>Setting</a>

                  <a href="logout.php" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-box-arrow-in-right opacity-75 fs-5 align-middle me-2"></i>
                    Keluar
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown ms-1 ms-lg-3 d-flex d-lg-none align-items-center justify-content-center flex-column h-100">
              <a href="#" class="nav-link sidebar-trigger-lg-down size-35 p-0 fs-4 d-flex align-items-center justify-content-center rounded-3">
                <i class="bi bi-list"></i>
              </a>
            </li>
          </ul>
        </header>
        <!--Main Header End-->





        <!--//Page-footer//-->

</body>

</html>