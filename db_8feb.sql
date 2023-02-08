-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 09.26
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_8feb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_montor`
--

CREATE TABLE `tb_montor` (
  `id_montor` int(10) NOT NULL,
  `nomor_rangka` varchar(10) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `jenis_montor` varchar(20) NOT NULL,
  `tahun_montor` int(10) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_montor`
--

INSERT INTO `tb_montor` (`id_montor`, `nomor_rangka`, `merek`, `jenis_montor`, `tahun_montor`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(23, '1111', 'supra', 'supra bapak', 2021, '2023-02-07', '2023-02-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` int(10) NOT NULL,
  `nama_peminjaman` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(10) NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `jaminan` varchar(20) NOT NULL,
  `id_montor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjaman`, `nama_peminjaman`, `alamat`, `umur`, `keperluan`, `jaminan`, `id_montor`) VALUES
(12, 'saya', 'belum pasti', 29, 'pinjam', 'ktp', 34),
(13, 'saya', ' ntah', 17, ' minjem', 'sim', 23),
(14, 'dia', ' sayung', 19, ' kredit', 'sertifikat', 29),
(16, 'saya', ' sayung', 28, ' ', 'stnk', 0),
(23, 'dia', 'demak', 26, 'pinjem', 'stnk', 23),
(24, 'yani', ' sayu', 27, ' ', 'bbpb', 23),
(25, 'hgf', ' jhghj', 23, ' ', 'uy', 0),
(26, 'ydtew', ' wgdyew', 12, ' ', 'hdhsa', 23);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_montor`
--
ALTER TABLE `tb_montor`
  ADD PRIMARY KEY (`id_montor`);

--
-- Indeks untuk tabel `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_montor` (`id_montor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_montor`
--
ALTER TABLE `tb_montor`
  MODIFY `id_montor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_montor`
--
ALTER TABLE `tb_montor`
  ADD CONSTRAINT `tb_montor_ibfk_1` FOREIGN KEY (`id_montor`) REFERENCES `tb_peminjaman` (`id_montor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
