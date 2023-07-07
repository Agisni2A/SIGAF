<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Attendance</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='index.scss'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="form-structor position-absolute top-50 start-50 translate-middle">
    <div class="signup">
      <h2 class="form-title" id="signup">Selamat Datang Di Sistem Absensi Al-Hadid</h2>
    </div>
    <div class="login slide-up">
      <div class="center">
        <h2 class="form-title" id="login">Log in</h2>
        <form method="POST" action="p_login.php">
          <div class="form-holder" >
            <input class="input" type="text" name="username" placeholder="Username" required />
            <input type="password" class="input" placeholder="Password" name="password" required />
          </div>
          <button type="submit" class="submit-btn" name="login">Log in</button>
        </form>
      </div>
    </div>
  </div>
<script src='main.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<!-- <html lang="en">

<head>
    Required meta tag
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    Title Pag
    <title>Login</title>

    Fontfaces CS
    <link href="TU/css/font-face.css" rel="stylesheet" media="all">
    <link href="TU/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="TU/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="TU/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    Bootstrap CS
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    Vendor CS
    <link href="TU/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="TU/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="TU/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="TU/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="TU/vendor/slick/slick.css" rel="styleshecoet" media="all">
    <link href="TU/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="TU/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    Main CS
    <link href="TU/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <center>
                                <h2>Login</h2>
                            </center>
                            <a href="#">
                                <img src="TU/img/logo.jpg" width="180px" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="p_login.php" method="POST">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <br>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Ingat Saya
                                    </label>
                                </div>
                                <br>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>

    Jquery J
    <script src="TU/vendor/jquery-3.2.1.min.js"></script>
    Bootstrap J
    <script src="TU/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="TU/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    Vendor JS      
    <script src="TU/vendor/slick/slick.min.js">
    </script>
    <script src="TU/vendor/wow/wow.min.js"></script>
    <script src="TU/vendor/animsition/animsition.min.js"></script>
    <script src="TU/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="TU/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="TU/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="TU/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="TU/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="TU/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="TU/vendor/select2/select2.min.js">
    </script>

    Main J
    <script src="TU/js/main.js"></script>

</body>

</html> -->
<!-- end document-->