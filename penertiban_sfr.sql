-- -- phpMyAdmin SQL Dump
-- -- version 5.2.1
-- -- https://www.phpmyadmin.net/
-- --
-- -- Host: 127.0.0.1
-- -- Waktu pembuatan: 20 Feb 2024 pada 02.03
-- -- Versi server: 10.4.28-MariaDB
-- -- Versi PHP: 8.1.17

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

-- --
-- -- Database: `siska_a`
-- --

-- -- --------------------------------------------------------

-- --
-- -- Struktur dari tabel `penertiban_sfr`
-- --

-- CREATE TABLE `penertiban_sfr` (
--   `idsfr` int(11) NOT NULL,
--   `NAMA PENGGUNA` varchar(255) DEFAULT NULL,
--   `DINAS` varchar(255) DEFAULT NULL,
--   `SUBSERVICE` varchar(255) DEFAULT NULL,
--   `LOKASI` varchar(255) DEFAULT NULL,
--   `NOMER SPT` varchar(255) DEFAULT NULL,
--   `JENIS PELANGGARAN` enum('ILEGAL','LEGAL') DEFAULT NULL,
--   `TINDAKAN` varchar(255) DEFAULT NULL,
--   `STATUS` varchar(255) DEFAULT NULL,
--   `TGL OPERASI` date DEFAULT NULL,
--   `NO ISR TELAH SETELAH PENINDAKAN` varchar(255) DEFAULT NULL,
--   `NO SURAT PENINDAKAN` varchar(255) DEFAULT NULL,
--   `TANGGAL TINDAKAN` date DEFAULT NULL,
--   `KETERANGAN` text DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data untuk tabel `penertiban_sfr`
-- --

-- INSERT INTO `penertiban_sfr` (`idsfr`, `NAMA PENGGUNA`, `DINAS`, `SUBSERVICE`, `LOKASI`, `NOMER SPT`, `JENIS PELANGGARAN`, `TINDAKAN`, `STATUS`, `TGL OPERASI`, `NO ISR TELAH SETELAH PENINDAKAN`, `NO SURAT PENINDAKAN`, `TANGGAL TINDAKAN`, `KETERANGAN`) VALUES
-- (1, 'John Doe', 'Dinas A', 'Subservice A', 'Lokasi A', '123456', 'LEGAL', 'Tindakan A', 'Selesai', '2023-11-27', '789012', 'ABC123', '2022-11-20', 'Keterangan A'),
-- (2, 'Yayasan Pendidikan Bina Prestasi Mandiri (BGV FM)', 'Broadcast', 'FM', 'Batam', '123456', 'ILEGAL', 'PERINGATAN', 'Selesai', '2023-11-27', '789012', 'ABC123', '2022-11-20', 'PPNS Loka Monitor Padang telah membuat Berita Acara Pemeriksaan dan memberikan peringatan agar menghentikan sementara penggunaan frekuensi radio sampai  Izin Stasiun Radio (ISR) dimiliki.'),
-- (3, 'Yayasan Pendidikan Bina Prestasi Mandiri (BGV FM)', 'Broadcast', 'FM', 'Batam', '123456', 'ILEGAL', 'PERINGATAN', 'Selesai', '2023-11-27', '789012', 'ABC123', '2022-11-20', 'PPNS Loka Monitor Padang telah membuat Berita Acara Pemeriksaan dan memberikan peringatan agar menghentikan sementara penggunaan frekuensi radio sampai  Izin Stasiun Radio (ISR) dimiliki.');

-- --
-- -- Indexes for dumped tables
-- --

-- --
-- -- Indeks untuk tabel `penertiban_sfr`
-- --
-- ALTER TABLE `penertiban_sfr`
--   ADD PRIMARY KEY (`idsfr`);

-- --
-- -- AUTO_INCREMENT untuk tabel yang dibuang
-- --

-- --
-- -- AUTO_INCREMENT untuk tabel `penertiban_sfr`
-- --
-- ALTER TABLE `penertiban_sfr`
--   MODIFY `idsfr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
