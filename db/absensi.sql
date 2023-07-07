-- Membuat tabel 'guru'
CREATE TABLE `guru` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `hp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Memasukkan data ke dalam tabel 'guru'
INSERT INTO `guru` (`id`, `nip`, `nama`, `jk`, `ttl`, `alamat`, `pendidikan`, `hp`) VALUES
(1, '100', 'Budi, SPd', 'Laki-laki', 'Medan, 13 Agustus 1888', 'Jl. Perjuangan', 'Sarjana (S1)', '088888888888'),
(3, '101', 'Rosita, S.Ag', 'Laki-laki', 'Medan, 01 November 1986', 'Medan', 'Diploma III (D3)', '0877635273');

-- Membuat tabel 'staff'
CREATE TABLE `staff` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Memasukkan data ke dalam tabel 'staff'
INSERT INTO `staff` (`id`, `nama`, `jk`, `ttl`, `alamat`, `pendidikan`, `jabatan`, `hp`) VALUES
(1, 'Dewi', 'Perempuan', 'Medan, 20 Mei 1997', 'Medan', 'SMA/SMK/MA', 'Staff Keuangan', '08775756454');

-- Membuat tabel 'user'
CREATE TABLE `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Memasukkan data ke dalam tabel 'user'
INSERT INTO `user` (`id`, `username`, `password`, `jabatan`) VALUES
(1, 'tu', 'tu', 'tata usaha'),
(2, 'budi', 'budi', 'guru'),
(3, 'dewi', 'dewi', 'staff');

-- Membuat tabel 'absensi_guru'
CREATE TABLE `absensi_guru` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `guru_id` int(50) NOT NULL,
  `jam_masuk` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`guru_id`) REFERENCES `guru`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuat tabel 'absensi_staff'
CREATE TABLE `absensi_staff` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `staff_id` int(50) NOT NULL,
  `jam_masuk` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`staff_id`) REFERENCES `staff`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Mengubah tabel 'guru' dan menambahkan auto increment pada kolom 'id'
ALTER TABLE `guru`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- Mengubah tabel 'staff' dan menambahkan auto increment pada kolom 'id'
ALTER TABLE `staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- Mengubah tabel 'user' dan menambahkan auto increment pada kolom 'id'
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT for dumped tables
--
-- AUTO_INCREMENT for table `absensi_guru`
ALTER TABLE `absensi_guru`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- AUTO_INCREMENT for table `absensi_staff`
ALTER TABLE `absensi_staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- AUTO_INCREMENT for table `guru`
ALTER TABLE `guru`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT for table `staff`
ALTER TABLE `staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- AUTO_INCREMENT for table `user`
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
