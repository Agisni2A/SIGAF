<?php
include "../koneksi.php";

$id = $_POST['id'];

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];
$hp = $_POST['hp'];

$edit = mysqli_query($con, "UPDATE guru SET nip='$nip', nama='$nama', jk='$jk', ttl='$ttl', alamat='$alamat', pendidikan='$pendidikan', hp='$hp' WHERE id='$id'");

if ($edit) {
    echo "<script>window.alert('Data Guru Berhasil Diedit')
	window.location='guru.php'</script>";
} else {
    echo "<script>window.alert('Gagal Diedit')
	window.location='editguru.php'</script>";
}
