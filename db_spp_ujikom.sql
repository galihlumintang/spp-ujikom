-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2020 pada 12.40
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp_ujikom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(1, 'X', 'Rekayasa Perangkat Lunak'),
(2, 'XI', 'Rekayasa Perangkat Lunak'),
(3, 'XII', 'Rekayasa Perangkat Lunak'),
(4, 'X', 'Teknik Komputer dan Jaringan'),
(5, 'XI', 'Teknik Komputer dan Jaringan'),
(6, 'XII', 'Teknik Komputer dan Jaringan'),
(8, 'X', 'Akuntansi dan Keuangan Lembaga'),
(9, 'XI', 'Akuntansi dan Keuangan Lembaga'),
(10, 'XII', 'Akuntansi dan Keuangan Lembaga'),
(11, 'X', 'Otomatisasi Tata Kelola Perkantoran'),
(12, 'X', 'Bisnis Daring Pemasaran'),
(13, 'XI', 'Otomatisasi Tata Kelola Perkantoran'),
(14, 'XII', 'Otomatisasi Tata Kelola Perkantoran'),
(15, 'XI', 'Bisnis Daring Pemasaran'),
(16, 'XII', 'Bisnis Daring Pemasaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(8) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `status_pembayaran_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`, `status_pembayaran_siswa`) VALUES
(1, 1, '0017902909', '2020-04-07', '1', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(2, 1, '0017902909', '2020-04-07', '2', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(3, 1, '0017902909', '2020-04-07', '3', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(4, 1, '0017902909', '2020-04-07', '4', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(5, 1, '0017902909', '2020-04-07', '5', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(6, 1, '0017902909', '2020-04-07', '6', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(7, 1, '0017902909', '2020-04-07', '7', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(8, 1, '0017902909', '2020-04-07', '8', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(9, 1, '0017902909', '2020-04-07', '9', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(10, 1, '0017902909', '2020-04-07', '10', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(11, 1, '0017902909', '2020-04-07', '11', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(12, 1, '0017902909', '2020-04-07', '12', '1', 1, 0, 'siswa pindahan ke kelas XI'),
(13, 1, '0017902905', '2020-04-07', '1', '1', 1, 300000, ' '),
(14, 1, '0017902905', '2020-04-07', '2', '1', 1, 300000, ' '),
(15, 1, '0017902905', '2020-04-07', '3', '1', 1, 300000, ' '),
(16, 1, '0017902906', '2020-04-07', '1', '1', 1, 300000, ' '),
(17, 1, '0017902906', '2020-04-07', '2', '1', 1, 300000, ' '),
(18, 1, '0017902906', '2020-04-07', '3', '1', 1, 300000, ' '),
(19, 1, '0017902906', '2020-04-07', '4', '1', 1, 300000, ' '),
(20, 1, '0017902906', '2020-04-07', '5', '1', 1, 300000, ' '),
(21, 1, '0017902906', '2020-04-07', '6', '1', 1, 300000, ' '),
(22, 1, '0017902906', '2020-04-07', '7', '1', 1, 300000, ' '),
(23, 1, '0017902906', '2020-04-07', '8', '1', 1, 300000, ' '),
(24, 1, '0017902906', '2020-04-07', '9', '1', 1, 300000, ' '),
(25, 1, '0017902906', '2020-04-07', '10', '1', 1, 300000, ' '),
(26, 1, '0017902906', '2020-04-07', '11', '1', 1, 300000, ' '),
(27, 1, '0017902906', '2020-04-07', '12', '1', 1, 300000, ' '),
(28, 1, '0017902906', '2020-04-07', '1', '1', 1, 300000, 'tidak naik ke kelas XI'),
(29, 1, '0017902906', '2020-04-07', '1', '2', 2, 300000, ' '),
(30, 1, '0017902905', '2020-04-07', '4', '1', 1, 300000, ' '),
(31, 1, '0017902905', '2020-04-07', '5', '1', 1, 300000, ' '),
(32, 1, '0017902905', '2020-04-07', '6', '1', 1, 300000, ' '),
(33, 1, '0017902905', '2020-04-07', '7', '1', 1, 300000, ' '),
(34, 1, '0017902905', '2020-04-07', '8', '1', 1, 300000, ' '),
(35, 1, '0017902905', '2020-04-07', '9', '1', 1, 300000, ' '),
(36, 1, '0017902905', '2020-04-07', '10', '1', 1, 300000, ' '),
(37, 1, '0017902905', '2020-04-07', '11', '1', 1, 300000, ' '),
(38, 1, '0017902905', '2020-04-07', '12', '1', 1, 300000, ' '),
(39, 1, '0017902906', '2020-04-07', '2', '2', 2, 300000, ' '),
(40, 1, '0017902906', '2020-04-07', '2', '1', 1, 300000, 'tidak naik ke kelas XI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'petugas', 'petugas', 'petugas', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(11) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status_siswa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `tempat`, `tgl_lahir`, `id_kelas`, `alamat`, `no_telp`, `id_spp`, `password`, `status_siswa`) VALUES
('00179029010', '11707120', 'hallo', 'Sukabumi', '2020-05-06', 12, 'Sukabumi', '8098397014973', 4, '0017902901011707120', NULL),
('0017902905', '11707110', 'Galih lumintang', 'Sukabumi', '2000-10-18', 3, 'Sukabumi', '085624886295', 1, 'galih', NULL),
('0017902906', '11707111', 'Ath Thoriq Kartanegara', 'Sukabumi', '2001-01-02', 3, 'Sukabumi', '083979752390', 1, '001790290611707111', 'tidak naik ke kelas XI'),
('0017902907', '11707117', 'Soe hok Gie', 'Sukabumi', '2020-03-02', 2, 'Sukabumi', '085790867523', 4, '001790290711707117', NULL),
('0017902908', '11707112', 'Azril Erdiansyah Putra', 'Sukabumi', '2001-04-17', 3, 'Sukabumi', '085790867523', 4, '001790290811707112', NULL),
('0017902909', '11707119', 'najlnaj', 'Sukabumi', '2020-04-04', 12, 'Sukabumi', '8098397014973', 2, '001790290911707119', 'siswa pindahan ke kelas XI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 1, 3600000),
(2, 2, 3600000),
(3, 3, 3600000),
(4, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
