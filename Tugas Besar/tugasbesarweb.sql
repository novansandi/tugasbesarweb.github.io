-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 14.37
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesarweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `noBuku` varchar(11) NOT NULL,
  `judulBuku` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahunTerbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`noBuku`, `judulBuku`, `pengarang`, `penerbit`, `tahunTerbit`) VALUES
('114', 'Konspirasi Alam Semesta', 'Fiersa Besari', 'Gramedia', '2020-04-16'),
('123', 'Upin dan Ipin', 'Mahendra', 'Bentang Pustaka', '2020-04-08'),
('234', 'Pangeran Charles', 'Jono Supono', 'Bentang Pustaka', '2020-05-03'),
('332', 'Habibie dan Ainun', 'B.J Habibie', 'Gramedia', '2020-05-03'),
('678', 'Soekarno', 'Hanum Bramantyo', 'Bentang Pustaka', '2020-01-07'),
('9923', 'Bawang Putih dan Bawang Merah ', 'Bambang ', 'Bentang Pustaka', '2020-04-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `namaMhs` varchar(255) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `judulBuku` varchar(255) NOT NULL,
  `tglPinjam` datetime NOT NULL,
  `tglKembali` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `namaMhs`, `nim`, `judulBuku`, `tglPinjam`, `tglKembali`) VALUES
(10, 'Novan', '1941720076', 'Pangeran', '2019-12-16 15:30:00', '2020-01-22 20:12:00'),
(12, 'Kajong', '1941720056', 'Pangeran Charles', '2020-02-11 18:22:00', '2020-05-13 17:20:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIM` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIM`, `nama`, `kelas`, `jk`, `alamat`) VALUES
(1941720045, 'Andika', 'TI-1A', 'Laki-Laki', 'Jl. Bromo, Malang'),
(1941720056, 'Kajong', 'TI-2B', 'Perempuan', 'Jl. Borobudur, Malang'),
(1941720076, 'Novan', 'TI-2E', 'Laki-Laki', 'Jl. Bumi Citarum No.10 Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(5, 'novan', '123'),
(6, 'Yusyac', '123'),
(7, 'Dilla', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`noBuku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
