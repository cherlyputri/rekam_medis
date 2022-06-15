-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 17.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
(2, 'Cherly Chrysdiana Putri', 'cece', '$2y$10$2SVrNlSBXoUJyu2bUbUexuoPtwlezjGjW2qEvY2JE49hDo8IumEpu', 1),
(7, 'admin', 'admin', '$2y$10$TKvJDKky3nxqc1rJ5M6NVOwfFZ1V1u0JDxJ7QS270AxXG1JCiu5yq', 1);

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
(13, '2x1'),
(14, '3x1'),
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
(49, 'TRS220001', 30000, 1),
(50, 'TRS220002', 30000, 1),
(51, 'TRS220003', 30000, 1),
(52, 'TRS220003', 25000, 2);

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
(21, 'TRIN220001', 26, 35, 35, 17500),
(22, 'TRIN220001', 46, 35, 35, 134750),
(23, 'TRIN220001', 10, 20, 39, 8000);

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
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_resep`
--

INSERT INTO `detail_resep` (`id_detail`, `kd_resep`, `id_obat`, `aturan_pakai`, `stok_out`, `stok_tot`, `total`) VALUES
(1, 'RSP190001', 11, 'c.th , 3.d.d , S 1-1-0', 1, 97, 13000),
(2, 'RSP190002', 10, 'c.th , 3.d.d , Pulv', 1, 98, 15000),
(3, 'RSP190002', 19, 'c.th , 2.d.d , S 0-0-1', 1, 48, 8000),
(4, 'RSP190003', 7, 'c.th , S 1-1-0', 9, 41, 2646),
(5, 'RSP190003', 10, 'c.th', 9, 41, 3600),
(6, 'RSP190004', 11, '3.d.d , S 1-1-0', 1, 49, 1400),
(7, 'RSP190004', 8, 'c.th , 3.d.d , S 0-1-0', 1, 49, 1868),
(8, 'RSP190005', 18, 'c.th , S 0-1-0', 9, 41, 19530),
(9, 'RSP190005', 6, '3.d.d , S 0-0-1', 9, 41, 3600),
(10, 'RSP190005', 10, 'c.th , 3.d.d', 9, 32, 3600),
(12, 'RSP190006', 40, 'c.th , 3.d.d , S 0-0-1', 1, 49, 20300),
(13, 'RSP190006', 11, '3.d.d , p.c , S 1-1-0', 9, 42, 12600),
(14, 'RSP190007', 7, '3.d.d , S 1-1-0', 9, 32, 2646),
(15, 'RSP190007', 6, '3.d.d , S 1-1-0', 9, 32, 3600),
(16, 'RSP190008', 15, '3.d.d , S 0-1-0', 1, 54, 15000),
(17, 'RSP190008', 18, 'c.th , S 1-1-0', 1, 49, 2170),
(18, 'RSP190009', 15, 'c.th , S 0-1-0', 2, 52, 30000),
(19, 'RSP190009', 40, 'c.th', 1, 48, 20300),
(22, 'RSP190010', 10, 'c.th , S 1-1-0', 9, 23, 3600),
(23, 'RSP190010', 18, 'c.th , S 1-1-0', 9, 40, 19530),
(24, 'RSP190010', 6, 'Pulv , S 0-0-1', 9, 23, 3600),
(25, 'RSP190011', 10, '3.d.d , S 0-0-1', 9, 14, 3600),
(26, 'RSP190011', 18, '2.d.d , S 0-1-0', 6, 34, 13020),
(27, 'RSP190012', 40, 'c.th', 1, 47, 20300),
(28, 'RSP190012', 17, 'c.th , S 0-0-1', 9, 61, 13302),
(29, 'RSP220013', 18, '3x1', 2, 32, 4340),
(30, 'RSP220013', 17, '3x1', 3, 58, 4434),
(31, 'RSP220014', 6, '3x1', 3, 20, 1200),
(32, 'RSP220014', 18, '3x1', 2, 30, 4340),
(33, 'RSP220015', 40, '4x1', 3, 44, 60900),
(34, 'RSP220015', 12, '3x1', 2, 47, 10000);

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
(5, 'Dokter', 'dokter', '$2y$10$bJcAPT2hWyZmp8FvJlInneSxhfO7u9aZrmGT6Q8vJ7V3RbqT/SnzO', 1),
(9, 'Cherly Chrysdiana Putri', 'cece', '$2y$10$C1iMwzA2m1sl9vvW8qlPy.B9dA.Q9wcAX5MduXGp1bWNwKM3Ur3yG', 1);

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
(6, 'Asam mefenamat 250mg (kaps)', 20, 400),
(7, 'Ibuprofen 200 mg (tab)', 32, 294),
(8, 'Ketoprofen sup 100 mg', 49, 1868),
(9, 'Natrium Dikofenak 25mg (tab)', 50, 367),
(10, 'Alopurinol 100mg (tab)', 39, 400),
(11, 'Deksametason 5mg/ml (inj)', 42, 1400),
(12, 'Loratadine', 47, 5000),
(13, 'Cetirizine', 49, 7000),
(15, 'Feno Vibrate', 52, 15000),
(17, 'Amlodipine 5mg', 58, 1478),
(18, 'Amlodipine 10mg', 30, 2170),
(20, 'Cefadroxil', 100, 600),
(21, 'Chlorampenikol', 0, 12000),
(22, 'Ceviksime', 100, 500),
(23, 'Ciprofloxaxin', 50, 0),
(24, 'Gentamisin', 50, 0),
(25, 'Clindamisin', 50, 0),
(26, 'Betahistin', 35, 500),
(27, 'Zink', 50, 0),
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
(40, 'Ibuprofen 100 mg/5 ml (sir)', 44, 20300),
(41, 'Ibuprofen 200 mg/5 ml (sir)', 50, 35000),
(42, 'ketotolak 30 mg/ml (inj)', 0, 7900),
(43, 'Natrium Dikofenak 50mg (tab)', 0, 472),
(44, 'Paracetamol 120 mg/ 5ml (sir)', 50, 7193),
(45, 'Paracetamol 60 mg/ 0.6ml (tts)', 50, 4100),
(46, 'kolkisin 500mcg (tab)', 35, 3850),
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
('TRIN220001', 160250, 8, '2022-06-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `kd_rm` varchar(11) NOT NULL,
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

INSERT INTO `pasien` (`kd_rm`, `nama_pasien`, `jenkel`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telp`, `pengobatan`, `no_bpjs`) VALUES
('RM2200001', 'Cherly Chrys', 'Perempuan', 'Jember', '2001-07-24', 'Puger, Jember', '08234567767', 'BPJS', '0987654345678'),
('RM2200002', 'Sulistyawati', 'Perempuan', 'Perumahan Mastrip Jember', '2002-06-11', 'Jember', '07434567987678', 'Umum', '-');

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
('TRS220001', 'PRS220003', 'RSP220013', 38774, 7, '2022-06-11'),
('TRS220002', 'PRS220002', 'RSP220014', 35540, 7, '2022-06-11'),
('TRS220003', 'PRS220001', 'RSP220015', 125900, 7, '2022-06-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_periksa` varchar(11) NOT NULL,
  `kd_rm` varchar(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `diagnosa` varchar(256) NOT NULL,
  `tindakan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_periksa`, `kd_rm`, `id_dokter`, `keluhan`, `diagnosa`, `tindakan`, `tanggal`) VALUES
('PRS220001', 'RM2200001', 9, 'Muntah, Mual, Panas', 'Tipes', 'Pemeriksaan dan Konsultasi , Inject (suntik)', '2022-06-11'),
('PRS220002', 'RM2200002', 9, 'Pusing, Mual, Muntah', 'Darah Rendah', 'Pemeriksaan dan Konsultasi', '2022-06-11'),
('PRS220003', 'RM2200001', 9, 'Pusing', 'Migran', 'Pemeriksaan dan Konsultasi', '2022-06-11');

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
(8, 'Cherly Chrysdiana Putri', 'cece', '$2y$10$wDp3vg/KZBzoWWiiS0NmFOGkgtT3LCJSj4aOc2okxk8GL82UqovM6', 1),
(9, 'Apoteker', 'apoteker', '$2y$10$n4t.h3TFMF9rJQMbHGlLA.8XMW7OxQ6V4t46uSihFOxusv1KPNa7u', 1);

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
('RSP190001', 13000, 'PRS190001', 5, '2019-07-24'),
('RSP190002', 23000, 'PRS190002', 5, '2019-07-24'),
('RSP190003', 6246, 'PRS190003', 5, '2019-07-25'),
('RSP190004', 3268, 'PRS190005', 5, '2019-07-28'),
('RSP190005', 26730, 'PRS190007', 5, '2019-07-30'),
('RSP190006', 32900, 'PRS190009', 5, '2019-07-31'),
('RSP190007', 6246, 'PRS190010', 5, '2019-08-01'),
('RSP190008', 17170, 'PRS190011', 5, '2019-08-14'),
('RSP190009', 50300, 'PRS190010', 5, '2019-08-14'),
('RSP190010', 26730, 'PRS190011', 5, '2019-08-15'),
('RSP190011', 16620, 'PRS190012', 5, '2019-08-16'),
('RSP190012', 33602, 'PRS190014', 5, '2019-08-16'),
('RSP220013', 8774, 'PRS220003', 9, '2022-06-11'),
('RSP220014', 5540, 'PRS220002', 9, '2022-06-11'),
('RSP220015', 70900, 'PRS220001', 9, '2022-06-11');

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
(1, 'Pemeriksaan dan Konsultasi', 30000),
(2, 'Inject (suntik)', 25000),
(3, 'Pemeriksaan Darah Lengkap', 115000),
(4, 'Pemeriksaan Darah Rutin', 105000),
(5, 'Uap', 30000),
(6, 'Cek Gula Darah', 25000),
(8, 'Vaksin', 15000);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `aturan_pakai`
--
ALTER TABLE `aturan_pakai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `detail_bayar`
--
ALTER TABLE `detail_bayar`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `detail_masuk`
--
ALTER TABLE `detail_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `detail_resep`
--
ALTER TABLE `detail_resep`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `petugas_obat`
--
ALTER TABLE `petugas_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`kd_rm`) REFERENCES `pasien` (`kd_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
