<?php
include "../koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($con, "DELETE FROM guru WHERE id='$id'");

if ($hapus) {
    echo "<script>window.alert('Data Guru Dihapus')
	window.location='guru.php'</script>";
} else {
    echo "<script>window.alert('Data Guru Gagal Dihapus')
	window.location='guru.php'</script>";
}
