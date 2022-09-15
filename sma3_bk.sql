-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Mei 2016 pada 14.11
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sma3_bk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pelanggaran`
--

CREATE TABLE IF NOT EXISTS `jenis_pelanggaran` (
`id_jenis_pelanggaran` int(11) NOT NULL,
  `nama_jenis_pelanggaran` varchar(50) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `jenis_pelanggaran`
--

INSERT INTO `jenis_pelanggaran` (`id_jenis_pelanggaran`, `nama_jenis_pelanggaran`, `status`) VALUES
(1, 'ringan', 'aktif'),
(2, 'sedang', 'aktif'),
(3, 'berat', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `tingkat_kelas` mediumint(2) NOT NULL,
  `status_kelas` enum('aktif','tidak aktif') NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `tingkat_kelas`, `status_kelas`) VALUES
(4, 'X IPA 3', 10, 'aktif'),
(2, 'X IPA 1', 10, 'aktif'),
(3, 'X IPA 2', 10, 'aktif'),
(7, 'X IPA 4', 10, 'aktif'),
(8, 'X IPA 5', 10, 'aktif'),
(9, 'X IPA 6', 10, 'aktif'),
(11, 'X IPS 1', 10, 'aktif'),
(12, 'X IPS 2', 10, 'aktif'),
(13, 'X IPS 3', 10, 'aktif'),
(14, 'X IPS 4', 10, 'aktif'),
(15, 'X IPS 5', 10, 'aktif'),
(16, 'X IPS 6', 10, 'aktif'),
(17, 'XI IPA 1', 11, 'aktif'),
(18, 'XI IPA 2', 11, 'aktif'),
(19, 'XI IPA 3', 11, 'aktif'),
(20, 'XI IPA 4', 11, 'aktif'),
(21, 'XI IPA 5', 11, 'aktif'),
(22, 'XI IPA 6', 11, 'aktif'),
(23, 'XI IPS 1', 11, 'aktif'),
(24, 'XI IPS 2', 11, 'aktif'),
(25, 'XI IPS 3', 11, 'aktif'),
(26, 'XI IPS 4', 11, 'aktif'),
(27, 'XI IPS 5', 11, 'aktif'),
(28, 'XI IPS 6', 11, 'aktif'),
(29, 'XII IPS 1', 12, 'aktif'),
(30, 'XII IPS 2', 12, 'aktif'),
(31, 'XII IPS 3', 12, 'aktif'),
(32, 'XII IPS 4', 12, 'aktif'),
(33, 'XII IPS 5', 12, 'aktif'),
(34, 'XII IPS 6', 12, 'aktif'),
(35, 'XII IPA 1', 12, 'aktif'),
(36, 'XII IPA 2', 12, 'aktif'),
(37, 'XII IPA 3', 12, 'aktif'),
(38, 'XII IPA 4', 12, 'aktif'),
(39, 'XII IPA 5', 12, 'aktif'),
(40, 'XII IPA 6', 12, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE IF NOT EXISTS `kelas_siswa` (
`id_kelas_siswa` int(11) NOT NULL,
  `nis` varchar(6) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id_kelas_siswa`, `nis`, `id_kelas`, `id_tahun_ajaran`) VALUES
(1, '100002', 17, 1),
(2, '100002', 2, 3),
(3, '100002', 17, 2),
(4, '100001', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
  `id_level_user` int(2) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`id_level_user`, `keterangan`, `status`) VALUES
(1, 'kepalabk', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE IF NOT EXISTS `pelanggaran` (
`id_pelanggaran` int(11) NOT NULL,
  `nama_pelanggaran` text NOT NULL,
  `id_jenis_pelanggaran` int(11) NOT NULL,
  `poin_pelanggaran` double NOT NULL,
  `status_pelanggaran` enum('aktif','tidak aktif') NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `nama_pelanggaran`, `id_jenis_pelanggaran`, `poin_pelanggaran`, `status_pelanggaran`) VALUES
(1, 'Mencuri', 3, 90, 'aktif'),
(2, 'Bolos', 2, 10, 'aktif'),
(3, 'Berkelahi', 3, 65, 'aktif'),
(4, 'mencontek', 1, 1, 'aktif'),
(5, 'merokok', 2, 35, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(6) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tlp_siswa` varchar(15) NOT NULL,
  `tlp_orangtua` varchar(15) NOT NULL,
  `status_siswa` enum('aktif','tidak aktif','alumni') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `nama`, `jenis_kelamin`, `tlp_siswa`, `tlp_orangtua`, `status_siswa`) VALUES
('100002', '1', 'sigit bayu kusuma', 'L', '', '', 'aktif'),
('100003', '<br /><b>N', 'yanuar', 'L', '', '', 'alumni'),
('100006', '', 'Sigit bayu', 'L', '', '', 'aktif'),
('100007', '', 'aji', 'L', '0987665443', '', 'aktif'),
('100009', '', 'Sidik', 'L', '089786476952', '', 'aktif'),
('100010', '', 'gita', 'P', '', '', 'aktif'),
('100011', '', 'susi', 'L', '', '', 'aktif'),
('100012', '', 'eko', 'L', '', '', 'aktif'),
('100001', '9999999999', 'bayu', 'L', '', '', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_pelanggaran`
--

CREATE TABLE IF NOT EXISTS `siswa_pelanggaran` (
`id_siswa_pelanggaran` int(11) NOT NULL,
  `nis` varchar(6) NOT NULL,
  `nip` char(18) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `poin_pelanggaran` double NOT NULL,
  `tanggal_pelanggaran` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `siswa_pelanggaran`
--

INSERT INTO `siswa_pelanggaran` (`id_siswa_pelanggaran`, `nis`, `nip`, `id_kelas`, `id_pelanggaran`, `id_tahun_ajaran`, `poin_pelanggaran`, `tanggal_pelanggaran`) VALUES
(16, '100002', '201605101988040001', 17, 1, 2, 90, '2016-05-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
`id_tahun_ajaran` int(11) NOT NULL,
  `nama_tahun_ajaran` varchar(9) NOT NULL,
  `semester` enum('ganjil','genap') NOT NULL,
  `status_tahun_ajaran` enum('aktif','tidak aktif') NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `nama_tahun_ajaran`, `semester`, `status_tahun_ajaran`) VALUES
(1, '2015/2016', 'genap', 'tidak aktif'),
(2, '2015/2016', 'ganjil', 'aktif'),
(3, '2016/2017', 'genap', 'tidak aktif'),
(4, '2016/2017', 'ganjil', 'tidak aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nip` char(18) NOT NULL,
  `id_level_user` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nip`, `id_level_user`, `nama`, `username`, `password`, `status`) VALUES
('201605101988040001', 1, 'bayu', 'bayukusuma', 'sijitekan9', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_pelanggaran`
--
ALTER TABLE `jenis_pelanggaran`
 ADD PRIMARY KEY (`id_jenis_pelanggaran`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
 ADD PRIMARY KEY (`id_kelas_siswa`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
 ADD PRIMARY KEY (`id_level_user`), ADD KEY `id_user` (`keterangan`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
 ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `siswa_pelanggaran`
--
ALTER TABLE `siswa_pelanggaran`
 ADD PRIMARY KEY (`id_siswa_pelanggaran`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
 ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`nip`), ADD KEY `id_level_user` (`id_level_user`), ADD KEY `id_level_user_2` (`id_level_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_pelanggaran`
--
ALTER TABLE `jenis_pelanggaran`
MODIFY `id_jenis_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
MODIFY `id_kelas_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `siswa_pelanggaran`
--
ALTER TABLE `siswa_pelanggaran`
MODIFY `id_siswa_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id_level_user`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
