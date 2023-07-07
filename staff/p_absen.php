<?php
include "../koneksi.php";

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$jammasuk = $_POST['jammasuk'];
$keterangan = $_POST['keterangan'];
$foto = $_FILES['foto']['name'];

$q = mysqli_query($con, "INSERT INTO absen_staff VALUES('','$nama', '$jabatan', '$jammasuk', '$keterangan', '$foto')");
echo "<script>window.alert('Berhasil Mengisi Absen')
    window.location='home.php'</script>";
if (strlen($foto) > 0) {
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        move_uploaded_file($_FILES['foto']['tmp_name'], "../TU/img/bukti staff/" . $foto);
    }
}
