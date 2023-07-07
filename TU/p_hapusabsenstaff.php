<?php
include "../koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($con, "DELETE FROM absen_staff WHERE id='$id'");

if ($hapus) {
    echo "<script>window.alert('Absensi Staff Dihapus')
	window.location='absenstaff.php'</script>";
} else {
    echo "<script>window.alert('Gagal Dihapus')
	window.location='absenstaff.php'</script>";
}
