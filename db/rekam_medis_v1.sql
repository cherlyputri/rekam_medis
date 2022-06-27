-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2022 pada 09.53
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `aktif`) VALUES
(7, 'admin', 'admin', '$2y$10$TKvJDKky3nxqc1rJ5M6NVOwfFZ1V1u0JDxJ7QS270AxXG1JCiu5yq', 1),
(9, 'Cherly Chrysdiana Putri', 'cece', '$2y$10$0Cy/rDybMbpNIyzQnIAbwuKp86St37OBVStoNt8VQLlsDgn5TFoT2', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturan_pakai`
--

CREATE TABLE `aturan_pakai` (
  `id` int(11) NOT NULL,
  `nama_aturan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aturan_pakai`
--

INSERT INTO `aturan_pakai` (`id`, `nama_aturan`) VALUES
(13, '3x1'),
(14, '2x1'),
(15, '1x1'),
(16, '4x1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_bayar`
--

CREATE TABLE `detail_bayar` (
  `id_detail` int(11) NOT NULL,
  `kd_bayar` varchar(20) NOT NULL,
  `total` double NOT NULL,
  `id_tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_bayar`
--

INSERT INTO `detail_bayar` (`id_detail`, `kd_bayar`, `total`, `id_tarif`) VALUES
(1, 'TRS190001', 115000, 3),
(2, 'TRS190002', 115000, 3),
(3, 'TRS190003', 30000, 1),
(4, 'TRS190003', 115000, 3),
(5, 'TRS190004', 30000, 1),
(6, 'TRS190005', 30000, 1),
(7, 'TRS190005', 115000, 3),
(12, 'TRS190006', 10000, 1),
(13, 'TRS190007', 30000, 1),
(14, 'TRS190008', 30000, 1),
(15, 'TRS190008', 25000, 2),
(16, 'TRS190009', 10000, 1),
(17, 'TRS190009', 25000, 2),
(18, 'TRS190009', 115000, 3),
(19, 'TRS190009', 105000, 4),
(20, 'TRS190009', 115000, 3),
(21, 'TRS190009', 105000, 4),
(22, 'TRS190009', 30000, 5),
(23, 'TRS190009', 30000, 5),
(24, 'TRS190009', 105000, 4),
(25, 'TRS190009', 115000, 3),
(26, 'TRS190009', 25000, 2),
(27, 'TRS190009', 115000, 3),
(28, 'TRS190009', 115000, 3),
(29, 'TRS190009', 105000, 4),
(30, 'TRS190009', 30000, 5),
(31, 'TRS190009', 25000, 2),
(32, 'TRS190009', 30000, 1),
(33, 'TRS190009', 115000, 3),
(34, 'TRS190009', 115000, 3),
(35, 'TRS190009', 105000, 4),
(36, 'TRS190009', 30000, 5),
(37, 'TRS190009', 25000, 2),
(39, 'TRS190010', 30000, 1),
(40, 'TRS190010', 25000, 2),
(43, 'TRS190011', 30000, 1),
(44, 'TRS190011', 25000, 2),
(46, 'TRS190012', 30000, 1),
(47, 'TRS190013', 30000, 1),
(48, 'TRS190013', 25000, 2),
(51, 'TRS220014', 30000, 1),
(52, 'TRS220013', 30000, 1),
(53, 'TRS220014', 25000, 2),
(54, 'TRS220015', 105000, 4),
(55, 'TRS220016', 25000, 2),
(56, 'TRS220017', 30000, 1),
(57, 'TRS220017', 25000, 2),
(58, 'TRS220018', 30000, 9),
(59, 'TRS220019', 20000, 8),
(62, 'TRS220020', 20000, 8),
(63, 'TRS220021', 30000, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_masuk`
--

CREATE TABLE `detail_masuk` (
  `id_masuk` int(11) NOT NULL,
  `kd_masuk` varchar(20) NOT NULL,
  `kd_obat` int(11) NOT NULL,
  `stok_in` int(11) NOT NULL,
  `stok_tot` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_masuk`
--

INSERT INTO `detail_masuk` (`id_masuk`, `kd_masuk`, `kd_obat`, `stok_in`, `stok_tot`, `total`) VALUES
(1, 'TRIN190001', 17, 20, 70, 29560),
(2, 'TRIN190002', 38, 100, 100, 45700),
(3, 'TRIN190003', 40, 50, 50, 1015000),
(4, 'TRIN190003', 41, 50, 50, 1750000),
(5, 'TRIN190003', 39, 50, 50, 33400),
(6, 'TRIN190004', 44, 50, 50, 359650),
(7, 'TRIN190004', 45, 50, 50, 205000),
(8, 'TRIN190005', 37, 50, 50, 20350),
(9, 'TRIN190006', 11, 2, 51, 2800),
(10, 'TRIN190007', 15, 5, 55, 75000),
(11, 'TRIN190008', 18, 9, 50, 19530),
(16, 'TRIN190009', 38, 3, 103, 1371),
(17, 'TRIN190010', 20, 100, 100, 60000),
(18, 'TRIN190010', 22, 100, 100, 50000),
(19, 'TRIN190011', 47, 100, 100, 450000),
(20, 'TRIN190012', 10, 5, 19, 2500),
(21, 'TRIN220013', 10, 10, 29, 4000),
(22, 'TRIN220013', 18, 2, 36, 4340),
(23, 'TRIN220014', 10, 1, 30, 400),
(24, 'TRIN220015', 10, 2, 23, 800);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_resep`
--

CREATE TABLE `detail_resep` (
  `id_detail` int(11) NOT NULL,
  `kd_resep` varchar(20) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `aturan_pakai` varchar(128) NOT NULL,
  `stok_out` int(11) NOT NULL,
  `stok_tot` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_resep`
--

INSERT INTO `detail_resep` (`id_detail`, `kd_resep`, `id_obat`, `aturan_pakai`, `stok_out`, `stok_tot`, `total`, `status`) VALUES
(42, 'RSP220001', 17, '3x1', 1, 60, 1478, '1'),
(44, 'RSP220001', 6, '3x1', 2, 8, 800, '1'),
(45, 'RSP220002', 6, '3x1', 1, 0, 400, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `username`, `password`, `aktif`) VALUES
(11, 'Cherly Chrysdiana Putri', 'cece', '$2y$10$94/1OyvtJNpCqN85uGOwzugZHhXUAslojVKOTCYVPch45GHoChoke', 1),
(12, 'dokter', 'dokter', '$2y$10$bsFl4hGU97e7GZ2IQ6kE5.iSW3P/vEIkZVyUXslqTouqP3Lb5KFaK', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(128) NOT NULL,
  `stok` int(5) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok`, `harga`) VALUES
(6, 'Asam mefenamat 250mg (kaps)', 8, 400),
(7, 'Ibuprofen 200 mg (tab)', 30, 294),
(8, 'Ketoprofen sup 100 mg', 49, 1868),
(9, 'Natrium Dikofenak 25mg (tab)', 50, 367),
(10, 'Alopurinol 100mg (tab)', 10, 400),
(11, 'Deksametason 5mg/ml (inj)', 42, 1400),
(12, 'Loratadine', 49, 5000),
(13, 'Cetirizine', 49, 7000),
(15, 'Feno Vibrate', 49, 15000),
(17, 'Amlodipine 5mg', 60, 1478),
(18, 'Amlodipine 10mg', 0, 2170),
(20, 'Cefadroxil', 100, 600),
(22, 'Ceviksime', 100, 500),
(24, 'Gentamisin', 50, 0),
(26, 'Betahistin', 0, 500),
(28, 'Rifampisine', 50, 0),
(29, 'Etambutol', 50, 0),
(30, 'Ketakonazole', 50, 0),
(31, 'Griseofulfin', 50, 0),
(32, 'Griseofulfin', 50, 0),
(34, 'Nistatine', 50, 0),
(35, 'Metronidazole', 50, 0),
(36, 'Glimefiride', 50, 0),
(37, 'Parasetamol 500gr (tab)', 50, 407),
(38, 'Asam mefenamat 500mg (kaps)', 103, 457),
(39, 'Ibuprofen 400 mg (tab)', 50, 668),
(40, 'Ibuprofen 100 mg/5 ml (sir)', 47, 20300),
(41, 'Ibuprofen 200 mg/5 ml (sir)', 50, 35000),
(42, 'ketotolak 30 mg/ml (inj)', 0, 7900),
(43, 'Natrium Dikofenak 50mg (tab)', 0, 472),
(44, 'Paracetamol 120 mg/ 5ml (sir)', 50, 7193),
(45, 'Paracetamol 60 mg/ 0.6ml (tts)', 50, 4100),
(46, 'kolkisin 500mcg (tab)', 0, 3850),
(47, 'mixagrip', 100, 4500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `kd_masuk` varchar(20) NOT NULL,
  `subtotal` double NOT NULL,
  `id_petugas_obat` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat_masuk`
--

INSERT INTO `obat_masuk` (`kd_masuk`, `subtotal`, `id_petugas_obat`, `tanggal`) VALUES
('TRIN190001', 29560, 8, '2019-07-24'),
('TRIN190002', 45700, 8, '2019-07-30'),
('TRIN190003', 2798400, 8, '2019-07-30'),
('TRIN190004', 564650, 8, '2019-07-30'),
('TRIN190005', 20350, 8, '2019-07-30'),
('TRIN190006', 2800, 8, '2019-07-30'),
('TRIN190007', 75000, 8, '2019-07-30'),
('TRIN190008', 19530, 8, '2019-07-25'),
('TRIN190009', 1371, 8, '2019-08-15'),
('TRIN190010', 110000, 8, '2019-08-16'),
('TRIN190011', 450000, 8, '2019-08-16'),
('TRIN190012', 2500, 8, '2019-08-16'),
('TRIN220013', 8340, 8, '2022-04-16'),
('TRIN220014', 400, 9, '2022-04-25'),
('TRIN220015', 800, 10, '2022-05-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `kd_rm` varchar(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `pengobatan` varchar(128) NOT NULL,
  `no_bpjs` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`kd_rm`, `nik`, `nama_pasien`, `jenkel`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telp`, `pengobatan`, `no_bpjs`) VALUES
('RM2200001', '', 'Cherly Chrys', 'Perempuan', 'Jember', '2001-07-24', 'Jember	', '08234567767', 'BPJS', '12345676543'),
('RM2200002', '', 'Cherly Chrys', 'Perempuan', 'JEMBER', '2001-06-22', 'jember', '098', 'BPJS', '123'),
('RM2200003', '350123', 'agung', 'Laki-Laki', 'LUMAJANG', '1999-06-23', 'jember', '088', 'Umum', '123'),
('RM2200004', '350124', 'agung', 'Laki-Laki', 'jember', '1999-06-23', 'jember', '1212', 'Umum', '1212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kd_bayar` varchar(20) NOT NULL,
  `id_pemeriksaan` varchar(20) NOT NULL,
  `kd_resep` varchar(20) NOT NULL,
  `totalbayar` double NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`kd_bayar`, `id_pemeriksaan`, `kd_resep`, `totalbayar`, `id_admin`, `tanggal_bayar`) VALUES
('TRS190002', 'PRS190001', 'RSP190001', 128000, 2, '2019-07-24'),
('TRS190003', 'PRS190001', 'RSP190001', 158000, 2, '2019-07-25'),
('TRS190004', 'PRS190003', 'RSP190003', 36246, 2, '2019-07-25'),
('TRS190005', 'PRS190001', 'RSP190001', 158000, 2, '2019-07-25'),
('TRS190006', 'PRS190005', 'RSP190004', 13268, 7, '2019-07-28'),
('TRS190007', 'PRS190007', 'RSP190005', 56730, 2, '2019-07-31'),
('TRS190008', 'PRS190010', 'RSP190007', 61246, 2, '2019-08-01'),
('TRS190009', 'PRS190005', 'RSP190004', 1593268, 2, '2019-08-01'),
('TRS190010', 'PRS190010', 'RSP190009', 105300, 2, '2019-08-14'),
('TRS190012', 'PRS190012', 'RSP190011', 46620, 2, '2019-08-16'),
('TRS220013', 'PRS220016', 'RSP220014', 43420, 9, '2022-04-25'),
('TRS220014', 'PRS220016', 'RSP220014', 68420, 9, '2022-05-09'),
('TRS220015', 'PRS220016', 'RSP220014', 118420, 9, '2022-05-09'),
('TRS220016', 'PRS220016', 'RSP220014', 38420, 9, '2022-05-09'),
('TRS220018', 'PRS220001', 'RSP220015', 75400, 9, '2022-05-24'),
('TRS220019', 'PRS220002', 'RSP220018', 22758, 9, '2022-05-26'),
('TRS220020', 'PRS220002', 'RSP220018', 22758, 7, '2022-06-12'),
('TRS220021', 'PRS220002', 'RSP220018', 32758, 7, '2022-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_periksa` varchar(11) NOT NULL,
  `kd_rm` varchar(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `tb` varchar(100) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `td` varchar(100) NOT NULL,
  `diagnosa` varchar(256) NOT NULL,
  `tindakan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_periksa`, `kd_rm`, `id_dokter`, `id_perawat`, `keluhan`, `tb`, `bb`, `td`, `diagnosa`, `tindakan`, `tanggal`) VALUES
('PRS220005', 'RM2200004', 12, 1, 'mual \r\n         \r\n        ', '190', '70', '180', 'aa', 'Pemeriksaan & Konsultasi , Suntik', '2022-06-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawat`
--

CREATE TABLE `perawat` (
  `id_perawat` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perawat`
--

INSERT INTO `perawat` (`id_perawat`, `nama`, `username`, `password`, `aktif`) VALUES
(1, 'perawat', 'perawat', '$2y$10$94/1OyvtJNpCqN85uGOwzugZHhXUAslojVKOTCYVPch45GHoChoke', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas_obat`
--

CREATE TABLE `petugas_obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas_obat`
--

INSERT INTO `petugas_obat` (`id`, `nama`, `username`, `password`, `aktif`) VALUES
(10, 'Cherly Chrysdiana Putri', 'cece', '$2y$10$NwMIrqfpM05Yo.gpmLxvG.EM2ACFO40P1wQ4WEZ3wo6RqX/vCtzpK', 1),
(11, 'apoteker', 'apoteker', '$2y$10$8WeV19vIQigKJp81HHRnQeMkl.pWwvOj3gu2jw1KY6C/ftX4vii4u', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `kd_resep` varchar(20) NOT NULL,
  `subtotal` double NOT NULL,
  `id_pemeriksaan` varchar(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tanggal_resep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`kd_resep`, `subtotal`, `id_pemeriksaan`, `id_dokter`, `tanggal_resep`) VALUES
('RSP220001', 2278, 'PRS220005', 12, '2022-06-24'),
('RSP220002', 400, 'PRS220005', 12, '2022-06-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `nama_tarif` varchar(128) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `nama_tarif`, `harga`) VALUES
(8, 'Pemeriksaan & Konsultasi', 20000),
(9, 'Suntik', 30000),
(10, 'Tes Darah', 30000),
(11, 'Tes Gula Darah', 15000),
(12, 'Vaksin', 15000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `aturan_pakai`
--
ALTER TABLE `aturan_pakai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_bayar`
--
ALTER TABLE `detail_bayar`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `detail_masuk`
--
ALTER TABLE `detail_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`kd_masuk`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kd_rm`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kd_bayar`);

--
-- Indeks untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `kd_pasien` (`kd_rm`);

--
-- Indeks untuk tabel `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indeks untuk tabel `petugas_obat`
--
ALTER TABLE `petugas_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`kd_resep`),
  ADD KEY `kd_periksa` (`id_pemeriksaan`),
  ADD KEY `kd_periksa_2` (`id_pemeriksaan`);

--
-- Indeks untuk tabel `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `aturan_pakai`
--
ALTER TABLE `aturan_pakai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `detail_bayar`
--
ALTER TABLE `detail_bayar`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `detail_masuk`
--
ALTER TABLE `detail_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `detail_resep`
--
ALTER TABLE `detail_resep`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petugas_obat`
--
ALTER TABLE `petugas_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`kd_rm`) REFERENCES `pasien` (`kd_rm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
