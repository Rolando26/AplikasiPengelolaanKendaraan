-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2019 pada 10.51
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_telp` int(200) NOT NULL,
  `bagian` varchar(290) NOT NULL,
  `waktuawal` varchar(200) NOT NULL,
  `waktuakhir` varchar(200) NOT NULL,
  `haritgl` varchar(200) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `tempatstandby` varchar(200) NOT NULL,
  `jumlahpeserta` varchar(10) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `waktustandby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama`, `no_telp`, `bagian`, `waktuawal`, `waktuakhir`, `haritgl`, `tujuan`, `alamat`, `kegiatan`, `tempatstandby`, `jumlahpeserta`, `jenis`, `waktustandby`) VALUES
(9, 'Agus Salim', 99798123, 'sma/k', '08:00', '', '2019-10-24', 'Bogor', 'Rusun Cinta Kasih', 'LDKS', 'Sekolah Cinta Kasih Tzu Chi', '20 Orang', 'apv', '08:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `jenismobil` varchar(200) NOT NULL,
  `nomor` varchar(200) NOT NULL,
  `jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `jenismobil`, `nomor`, `jenis`) VALUES
(6, 'Avanza', 'B 1298 PLO', 'Genap'),
(7, 'APV', 'B 2901 POS', 'Ganjil'),
(8, 'Mini Bus 20 Seat', 'B 8971 PJH', 'Ganjil'),
(9, 'Mini Bus 45 Seat', 'B 9082 AGB', 'Genap ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `level` char(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `email`, `alamat`, `no_hp`, `level`, `gambar`) VALUES
(4, 'Rolando', '123456', 'Rolando', 'ando@gmail.com', 'Dadap', '081292819231', 'admin', '../admin/gambar_admin/annonymous.jpg'),
(5, 'Parlan', 'parlan123', 'Parlan', 'parlan@gmail.com', 'Rusun Cinta Kasih Tzu Chi ', '123123', 'admin', '../admin/gambar_admin/tzuchi-logo.jpg'),
(6, 'user', 'user', 'user', '-', '-', '-', 'user', '../admin/gambar_admin/tzuchi-logo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
