<?php
include "../koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($con, "DELETE FROM staff WHERE id='$id'");

if ($hapus) {
    echo "<script>window.alert('Data Staff Dihapus')
	window.location='staff.php'</script>";
} else {
    echo "<script>window.alert('Data Staff Gagal Dihapus')
	window.location='staff.php'</script>";
}
