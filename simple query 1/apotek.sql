-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2022 pada 00.39
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
-- Database: `eduwork`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id`, `merk`) VALUES
(1, 'sidomuncul\r\n'),
(2, 'sanmol'),
(3, 'Pharma'),
(4, 'Gsk'),
(5, 'kalbe'),
(6, 'Alfentanil'),
(7, 'Naftifine'),
(8, 'Salonpas'),
(9, 'Labetalol'),
(10, 'Kalpanax');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `kadaluarsa` date NOT NULL,
  `id_merk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama`, `jenis`, `harga`, `kadaluarsa`, `id_merk`) VALUES
(1, 'Tolak Angin', 'cair', 2500, '2023-12-03', 1),
(2, 'Paracetamol', 'Tablet', 5000, '2024-12-20', 2),
(3, 'Amoxilin', 'Tablet', 7500, '2024-12-01', 3),
(4, 'panadol', 'Tablet', 12500, '2023-05-11', 4),
(5, 'OBH', 'Cair', 15000, '2024-08-15', 2),
(6, 'Sari Kunyit', 'Kapsul', 23000, '2024-04-25', 1),
(7, 'Hepacomb', 'Cair', 20500, '2024-12-17', 1),
(8, 'Woods', 'Cair', 9200, '2023-08-11', 5),
(9, 'Blackmores', 'Cair', 27000, '2024-05-10', 5),
(10, 'Peptisol', 'Cair', 15500, '2023-07-07', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_obat` (`id_merk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
