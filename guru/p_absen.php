<?php
include "../koneksi.php";

$attendanceOption = $_POST['attendanceOption'];
$jamMasuk = $_POST['jam_masuk'];
$fotoName = $_FILES['foto']['name'];
$fotoTmp = $_FILES['foto']['tmp_name'];

$q = mysqli_query($con, "INSERT INTO absen_guru (id, keterangan, jammasuk, foto) VALUES ('', '$attendanceOption', '$jamMasuk', '$fotoName')");

if ($q) {
    // Absensi berhasil disimpan
    echo "<script>window.alert('Berhasil Mengisi Absen');
    window.location='home.php'</script>";
    if (strlen($fotoName) > 0) {
        if (is_uploaded_file($fotoTmp)) {
            move_uploaded_file($fotoTmp, "../TU/img/bukti guru/" . $fotoName);
        }
    }
} else {
    // Absensi gagal disimpan
    echo "<script>window.alert('Terjadi kesalahan saat menyimpan absen');
    window.location='home.php'</script>";
}
?>
