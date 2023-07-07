<?php

session_start();

include "koneksi.php";

$username   = $_POST['username'];
$password   = $_POST['password'];

$login      = mysqli_query($con, "select * from user where username ='$username' and password='$password'");

$cek        = mysqli_num_rows($login);

if ($cek > 0) {

    $data       = mysqli_fetch_assoc($login);

    if ($data['jabatan'] == "tata usaha") {
        $_SESSION['username']   = $username;
        $_SESSION['jabatan']      = "tata usaha";
        echo "<script>
    alert('Login Berhasil..!');
    document.location = 'TU/home.php'
    </script>";
    }
    if ($data['jabatan'] == "guru") {
        $_SESSION['username']   = $username;
        $_SESSION['jabatan']      = "guru";
        echo "<script>
    alert('Login Berhasil..!');
    document.location = 'guru/home.php'
    </script>";
    }
    if ($data['jabatan'] == "staff") {
        $_SESSION['username']   = $username;
        $_SESSION['jabatan']      = "staff";
    echo "<script>
    alert('Login Berhasil..!');
    document.location = 'staff/home.php'
    </script>";
    }
} else {
    echo "<script>
alert('Login Gagal  !');
document.location = 'index.php'
</script>";
}
