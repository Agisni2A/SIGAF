<center>
    <br>
    <h2>Absensi Guru</h2>
    <hr><br>
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table border="1">
                <thead>
                    <tr>
                        <th style="text-align: center" width="100px">Nama</th>
                        <th style="text-align: center" width="100px">Jadwal Kelas</th>
                        <th style="text-align: center" width="100px">Bidang Studi</th>
                        <th style="text-align: center" width="100px">Tanggal dan Jam Absen</th>
                        <th style="text-align: center" width="100px">Keterangan</th>
                        <th style="text-align: center" width="100px">Foto</th>
                    </tr>
                </thead>
                <?php
                include "../koneksi.php";
                $q = mysqli_query($con, "SELECT * FROM absen_guru");
                while ($d = mysqli_fetch_array($q)) {
                ?>
                    <tr>
                        <td><?= $d['nama'] ?></td>
                        <td><?= $d['kelas'] ?></td>
                        <td><?= $d['bstudi'] ?></td>
                        <td style="text-align: center"><?= $d['jammasuk'] ?></td>
                        <td style="background-color: #69E849; color:white; text-align:center"><?= $d['keterangan'] ?></td>
                        <td><?php echo "<img src='img/bukti guru/" . $d['foto'] . "'width='100px' height='100px'/>" ?><br><?php echo $d['foto'] ?></td>
                    </tr>
                <?php } ?>
            </table><br><br>
            <button><a href="javascript:window.print()">Print</a></button>
</center>