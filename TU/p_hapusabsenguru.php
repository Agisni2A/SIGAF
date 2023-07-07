<?php
include "../koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($con, "DELETE FROM absen_guru WHERE id='$id'");

if ($hapus) {
    echo "<script>window.alert('Absensi Guru Dihapus')
	window.location='absenguru.php'</script>";
} else {
    echo "<script>window.alert('Gagal Dihapus')
	window.location='absenguru.php'</script>";
}
