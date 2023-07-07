<?php
include "../koneksi.php";

$id = $_POST['id'];

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];
$jabatan = $_POST['jabatan'];
$hp = $_POST['hp'];

$edit = mysqli_query($con, "UPDATE staff SET nama='$nama', jk='$jk', ttl='$ttl', alamat='$alamat', pendidikan='$pendidikan', jabatan='$jabatan', hp='$hp' WHERE id='$id'");

if ($edit) {
    echo "<script>window.alert('Data Staff Berhasil Diedit')
	window.location='staff.php'</script>";
} else {
    echo "<script>window.alert('Gagal Diedit')
	window.location='staff.php'</script>";
}
