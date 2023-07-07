<?php
include "../koneksi.php";

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];
$jabatan = $_POST['jabatan'];
$hp = $_POST['hp'];

$q = mysqli_query($con, "INSERT INTO staff VALUES('','$nama','$jk','$ttl','$alamat','$pendidikan','$jabatan','$hp')");

if ($q) {
    echo "<script>window.alert('Staff Berhasil Ditambah')
	window.location='staff.php'</script>";
} else {
    echo "<script>window.alert('Gagal Ditambah')
	window.location='staff.php'</script>";
}
