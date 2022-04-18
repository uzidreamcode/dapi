-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2022 pada 11.20
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dada`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `foto`) VALUES
(15, 'Cafe', 'file_1649922771.PNG'),
(20, 'AC', 'file_1648613822.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas_kamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_fasilitas_kamar`, `id_kamar`, `id_fasilitas`) VALUES
(3, 1, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(200) DEFAULT NULL,
  `jumlah_kamar` varchar(200) DEFAULT NULL,
  `keterangan` text,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`id_jenis`, `nama_jenis`, `jumlah_kamar`, `keterangan`, `foto`) VALUES
(1, 'Deluxe Room', '5', 'Jenis kamar Deluxe ini lebih bagus dibandingkan dengan jenis kamar superior karena lebih banyak memiliki fasilitas', 'file_1645591181.jpg'),
(2, 'Superior Room', '5', 'Superior room merupakan jenis kamar hotel yang lebih baik dari sisi fasilitas hingga ukuran yang diberikan dibandingkan standar room.', 'file_1645599770.jpg'),
(4, 'Standart Room', '5', 'Standar room juga merupakan jenis kamar hotel yang murah karena fasilitas yang diberikan terbilang standar, seperti televisi, meja, kamar mandi, hingga lemari es.', 'file_1648775524.jpg'),
(5, 'Suit Room', '5', 'Jenis kamar hotel ini bisa dikatakan mirip dengan sebuah apartemen kecil yang berada di dalam hotel. Dengan fasilitas seperti kamar tidur, dapur, ruang tamu, dan kamar mandi yang terpisah.', 'file_1648775484.jpg'),
(6, 'Presidental Suit', '5', 'Jenis kamar hotel ini adalah jenis kamar yang terbaik dan termahal. Fasilitas yang diberikan kamar inipun merupakan fasilitas yang terbaik yang ditawarkan oleh hotel.', 'file_1648775715.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `no_kamar` varchar(20) DEFAULT NULL,
  `id_jenis` int(11) NOT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `foto_kamar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `no_kamar`, `id_jenis`, `harga`, `foto_kamar`) VALUES
(1, '101', 4, '200000', 'file_1649924635.jpg'),
(7, '103', 1, '50000', 'file_1649924642.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nama_pembayar` varchar(200) DEFAULT NULL,
  `no_rekening` varchar(200) DEFAULT NULL,
  `jenis_pembayaran` varchar(100) DEFAULT NULL,
  `bukti_pembayaran` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nama_pembayar`, `no_rekening`, `jenis_pembayaran`, `bukti_pembayaran`) VALUES
(1, 'siu', '2142142', NULL, 'file_1649226334.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pemesan` varchar(200) DEFAULT NULL,
  `no_telepon` varchar(50) DEFAULT NULL,
  `cek_in` date DEFAULT NULL,
  `cek_out` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `id_jenis` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Check In'),
(2, 'Check Out'),
(3, 'Di Pesan'),
(4, 'Di Batalkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama`, `email`, `telepon`) VALUES
(1, 'miftahul jannah', 'ppp@gmail.com', '234'),
(2, 'miftahul jannah', 'ppp@gmail.com', '234'),
(3, 'miftahul jannah', 'ppp@gmail.com', '234'),
(4, 'miftahul jannah', 'ppp@gmail.com', '234'),
(5, '\',', '', ''),
(6, 'fgh', 'graceferica0@gmail.com', '34'),
(7, 'kalsum', 'graceferica0@gmail.com', '09618242712'),
(8, 'A Ahsanul Khuluq', 'ppp@gmail.com', '02314234235'),
(9, 'Ahsanul ', 'admin@gmail.com', '09172367521');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_tamu` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `jumlah_harga` varchar(100) DEFAULT NULL,
  `tanggal_pesan` date DEFAULT NULL,
  `lama_inap` varchar(20) DEFAULT NULL,
  `kode_invoice` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_tamu`, `id_pembayaran`, `id_status`, `id_kamar`, `check_in`, `check_out`, `jumlah_harga`, `tanggal_pesan`, `lama_inap`, `kode_invoice`) VALUES
(3, 7, 0, 3, 1, '2022-04-01', '2022-04-06', '0', '2022-04-06', '5', 'F4MDIK3EQB'),
(4, 8, 0, 3, 1, '2022-04-01', '2022-04-04', '0', '2022-04-06', '3', 'BTFC691EYA'),
(5, 9, 1, 3, 1, '2022-04-01', '2022-04-06', '1000000', '2022-04-06', '5', 'RQVOHKYPCS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `username`, `password`, `role`) VALUES
(9, 'admin', 'admin@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1'),
(10, 'rita', 'ritaanggreani@gmail.com', 'rita', '6fe06f8d903ee0d0242c6f31b94578b2957c9752', '2'),
(11, 'dafi', 'dafi@gmail.com', 'dafi', 'ba2f9326e1e74f797fd9b0156429ebc552ed8878', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas_kamar`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

--
-- Indeks untuk tabel `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_tamu` (`id_tamu`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_fasilitas_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
