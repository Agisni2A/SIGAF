<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>BALERINA SCHOOL - Guru</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="home.php">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-database"></i>Data</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="guru.php">Data Guru</a>
                                </li>
                                <li>
                                    <a href="staff.php">Data Staff</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Absensi</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="absenguru.php">Absensi Guru</a>
                                </li>
                                <li>
                                    <a href="absenstaff.php">Absensi Staff</a>
                                </li>
                            </ul>
                        </li>
                        <hr>
                        <li>
                            <a href="../logout.php">
                                <i class="fas fa-sign-out-alt"></i>Keluar</a>
                        </li>
                    </ul>
                </ul>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="home.php">
                    <h3>BALERINA SCHOOL</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a href="home.php">
                                    <i class="fas fa-home"></i>Home</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-database"></i>Data</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="guru.php">Data Guru</a>
                                    </li>
                                    <li>
                                        <a href="staff.php">Data Staff</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="absen.php">
                                    <i class="fas fa-copy"></i>Isi Absen</a>
                            </li>
                            <hr>
                            <li>
                                <a href="../logout.php">
                                    <i class="fas fa-sign-out-alt"></i>Keluar</a>
                            </li>
                        </ul>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="text-align: right">
                            <div class="account-dropdown__body">
                            </div>
                            <div class="account-dropdown__body">
                                <p style="text-align: right">Guru</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="col-lg-12">
                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                        <center>
                            <br>
                            <h2>Absen Guru</h2>
                            <hr>
                        </center>
                        <div class="col-lg-12">
                            <div class="card-body">
                                <form action="p_absen.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="control-label mb-1">Nama</label>
                                        <input name="nama" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Kelas</label>
                                        <input name="kelas" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Bidang Studi</label>
                                        <input name="bstudi" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Tanggal & Jam Absen</label>
                                        <input name="jammasuk" readonly type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y  |  H:i:s'); ?>">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Keterangan</label>
                                        <select name="keterangan" class="form-control">
                                            <option value="Belum Dipilih">-- Pilih Keterangan --</option>
                                            <option value="Hadir">Hadir</option>
                                            <option value="Izin">Izin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Upload Foto</label>
                                        <input name="foto" type="file" class="form-control">
                                    </div>
                                    <p style="color: red"><i>Catatan : Upload foto saat mengajar jika keterangan hadir dan Upload surat izin jika keterangan izin.</i></p>
                                    <br>
                                    <center>
                                        <button class="btn btn-primary">Input Absen</button>
                                    </center>
                                    <br>
                                </form>
                            </div>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->