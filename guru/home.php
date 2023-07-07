<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="main.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    .border-custom {
        border-color: #6D99FF;
        /* Warna border yang diinginkan */
        /* Atur properti border lainnya jika diperlukan */
        border-width: 1px;
        border-style: solid;
    }

    .graf {
        height: 430px;
    }

    .grafik {
        height: 345px;
    }

    input {
        position: absolute;
        font-size: 50px;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .button_outer {
        background: #83ccd3;
        border-radius: 30px;
        text-align: center;
        height: 50px;
        width: 200px;
        display: inline-block;
        transition: 0.2s;
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn_upload {
        padding: 12px 52px 12px;
        color: #fff;
        text-align: center;
        position: relative;
        display: inline-block;
        overflow: hidden;
        z-index: 3;
        white-space: nowrap;
        background-color: #6D99FF
    }

    .btn_upload input {
        position: absolute;
        width: 100%;
        left: 0;
        top: 0;
        width: 100%;
        height: 105%;
        cursor: pointer;
        opacity: 0;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg static-top" style="background-color:#6D99FF;">
        <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-white" href="home.php">
                SMK IT AL-HADIID
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-underline ">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Attendance</a>
                    </li>
                </ul>
            </div>  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto d-flex align-items-center ">
                    <li class="nav-item text-white p-2 border-end" id="navbarDate">
                    </li>
                    <li class="nav-item p-2 dropdown" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/Attendence/img/Notification.png" alt="..." height="30">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownNotif">
                            <li><a class="dropdown-item" href="#">isi</a></li>
                    </li>
                </ul>
                </li>
                <li class="nav-item p-2 text-white border-start text-capitalize">
                    <?php echo $_SESSION['username']; ?>
                </li>
                <li class="nav-item p-2 dropdown">
                    <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                            class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
                <li>
                    <a class="navbar-brand p-2" href="#">
                        <img src="/Attendence/img/Account.png" alt="..." height="36">
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card graf">
                    <!-- Form Absensi Guru -->
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="position-relative">
                                <form action="p_absen.php" method="POST" enctype="multipart/form-data">
                                    <h6 class="d-flex align-items-center"><img src="/ABSENSI GURU/img/Attendance.png"
                                            style="padding-right:0.5rem;" alt="">ABSENSI</h6>
                                    <div class="rounded d-flex flex-row justify-content-between w-80 align-items-center"
                                        style="height:90px; padding: 20px;margin-top:30px;background-color:#6d98ff25;">
                                        <div>
                                            <h6 id="date" style="margin: 0;"></h6>
                                            <p id="day"></p>
                                        </div>
                                        <div class="button_outer">
                                            <div class="btn_upload">
                                                <input type="file" id="foto" name="foto">
                                                Upload Image
                                            </div>
                                            <div class="processing_bar"></div>
                                            <div class="success_box"></div>
                                        </div>
                                    </div>
                            </li>
                            <li>
                                <div class="row container-fluid pt-4 px-4 justify-content-center text-center">
                                    <p style="margin-bottom: 20px"><b>Keterangan :</b></p>
                                    <div class="row justify-content-center text-center">
                                        <button type="button" id="hadirBtn"
                                            class="btn col-md-3 mb-4 rounded-pill border-custom"
                                            onclick="selectOption('hadir')">Hadir</button>
                                        <button type="button" id="alfaBtn"
                                            class="btn col-md-3 mb-4 rounded-pill border-custom" style="margin: 0 16px;"
                                            onclick="selectOption('alfa')">Alfa</button>
                                        <button type="button" id="sakitBtn"
                                            class="btn col-md-3 mb-4 rounded-pill border-custom"
                                            onclick="selectOption('sakit')">Sakit</button>
                                        <button type="button" id="izinBtn"
                                            class="btn col-md-3 mb-4 rounded-pill border-custom"
                                            onclick="selectOption('izin')">Izin</button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn_upload col-md-3 w-50 rounded-pill text-white"
                                            style="background-color:#6D99FF" onclick="submitAttendance()">Kirim
                                            <input type="hidden" id="attendanceOption" name="attendanceOption">
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src='main.js'></script>
    <script>
    function selectOption(option) {
        // Reset button colors
        document.getElementById('hadirBtn').classList.remove('btn-primary');
        document.getElementById('alfaBtn').classList.remove('btn-primary');
        document.getElementById('sakitBtn').classList.remove('btn-primary');
        document.getElementById('izinBtn').classList.remove('btn-primary');

        // Set selected button color
        const selectedButton = document.getElementById(`${option}Btn`);
        selectedButton.classList.add('btn-primary');

        // Set selected option value to the hidden input field
        document.getElementById('attendanceOption').value = option;
    }

    function submitAttendance() {
        const selectedOption = document.getElementById('attendanceOption').value;
        const fotoInput = document.getElementById('foto');

        // Validasi input
        if (selectedOption === '') {
            alert('Pilih keterangan absensi terlebih dahulu.');
            return;
        }
        if (fotoInput.files.length === 0) {
            alert('Mohon upload foto terlebih dahulu.');
            return;
        }

        // Submit form
        document.getElementById('absensiForm').submit();
    }



    const today = new Date();
    const options = {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    const option1 = {
        weekday: 'long'
    };
    const date = today.toLocaleDateString('en-US', options);
    const day = today.toLocaleDateString('en-US', option1);


    document.getElementById('date').innerHTML = date;
    document.getElementById('navbarDate').innerHTML = date;
    document.getElementById('day').innerHTML = day;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>


<!-- <html lang="en">

<head>
    Required meta tag
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    Title Pag
    <title>BALERINA SCHOOL - Guru</title>

    Fontfaces CS
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    Bootstrap CS
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    Vendor CS
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    Main CS
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        HEADER MOBIL
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
        END HEADER MOBIL

        MENU SIDEBA
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
        END MENU SIDEBA

        PAGE CONTAINE
        <div class="page-container">
            HEADER DESKTO
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
            END HEADER DESKTO

            MAIN CONTEN
            <div class="main-content">
                <div class="col-lg-12">
                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                        <center>
                            <br>
                            <h1>Selamat Datang</h1>
                            <img src="img/logo.jpg" width="300px">
                            <br>
                            <h1>Aplikasi Absensi Guru & Staff<br>Sekolah Plus BALERINA</h1>
                            <br><br>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        END PAGE CONTAINE

    </div>

    Jquery J
    <script src="vendor/jquery-3.2.1.min.js"></script>
    Bootstrap J
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    Vendor JS      
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

    Main J
    <script src="js/main.js"></script>

</body>

</html> -->
<!-- end document-->