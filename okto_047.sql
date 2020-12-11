-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 05.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okto_047`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(6) NOT NULL,
  `nama_menu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `harga_menu` int(10) NOT NULL,
  `id_tempat` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan1`
--

CREATE TABLE `ulasan1` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasan1`
--

INSERT INTO `ulasan1` (`id`, `nama`, `komen`) VALUES
(1, 'pablo', 'bagus sekali tempatnya'),
(7, 'okto', 'tempatnya nyaman dan seru rame'),
(8, 'Mahesa', 'tempatnya dekat dengan kos saya dan harga yang diberikan cukup murah'),
(9, 'pablo', 'lumayanlahh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan2`
--

CREATE TABLE `ulasan2` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasan2`
--

INSERT INTO `ulasan2` (`id`, `nama`, `komen`) VALUES
(1, 'okto', 'mantap'),
(2, 'Mahesa', 'tempatnya  dan seru rame'),
(3, 'Jodi', 'tempatnya kalo pagi sejuk enak asri ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan3`
--

CREATE TABLE `ulasan3` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasan3`
--

INSERT INTO `ulasan3` (`id`, `nama`, `komen`) VALUES
(1, 'irpan', 'tempatnya mengasyikkan'),
(2, 'okto', 'lumayanlahh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan4`
--

CREATE TABLE `ulasan4` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `komen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasan4`
--

INSERT INTO `ulasan4` (`id`, `nama`, `komen`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `nama`, `password`) VALUES
('irpan@gmail.com', 'irpan', 1234567),
('okto@gmail.com', 'okto', 123456),
('pokpaokdpa@sdakodsa.com', 'pablo', 123456);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indeks untuk tabel `ulasan1`
--
ALTER TABLE `ulasan1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ulasan2`
--
ALTER TABLE `ulasan2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ulasan3`
--
ALTER TABLE `ulasan3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ulasan4`
--
ALTER TABLE `ulasan4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ulasan1`
--
ALTER TABLE `ulasan1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `ulasan2`
--
ALTER TABLE `ulasan2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ulasan3`
--
ALTER TABLE `ulasan3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ulasan4`
--
ALTER TABLE `ulasan4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
