<?php
include "../koneksi.php";

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];
$hp = $_POST['hp'];

$q = mysqli_query($con, "INSERT INTO guru VALUES('','$nip','$nama','$jk','$ttl','$alamat','$pendidikan','$hp')");

if ($q) {
    echo "<script>window.alert('Guru Berhasil Ditambah')
	window.location='guru.php'</script>";
} else {
    echo "<script>window.alert('Gagal Ditambah')
	window.location='guru.php'</script>";
}
