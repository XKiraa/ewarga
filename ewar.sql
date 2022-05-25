-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2022 pada 15.38
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(222) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'About', 'Kami adalah tenaga profesional yang menyediakan jasa pembuatan aplikasi guna mempermudah pekerjaan semua orang', '639-2(1).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_berkas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` enum('Baru','Selesai','','') NOT NULL,
  `datas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `nik`, `nama_berkas`, `keterangan`, `status`, `datas`) VALUES
(15, '206789', 'Pengantar SKCK', 'Meminta tanda tangan', 'Baru', ''),
(16, '1234', 'Pengantar SKCK', 'legalisir eryty', 'Selesai', '740-ADSI-00-Preliminary.pdf'),
(17, '3098767', 'Pengantar SKCKC', 'Meminta tanda tangan', 'Selesai', '215-infp.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_pakrt`
--

CREATE TABLE `d_pakrt` (
  `id_pakrt` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `kode_alamat` enum('Wringin Anom','Kepuh Utara','Kepuh Selatan','Karangploso Wetan','Turi','Tlasih') NOT NULL,
  `pwd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_pakrt`
--

INSERT INTO `d_pakrt` (`id_pakrt`, `nama`, `username`, `jenis_kelamin`, `no_telp`, `kode_alamat`, `pwd`) VALUES
('PRT-000003', 'kencono', 'kencono', 'Laki-laki', '085155348914', 'Wringin Anom', 'kencono'),
('PRT-000002', 'Sukandar', 'sukandar', 'Laki-laki', '085155348914', 'Kepuh Utara', 'sukandar'),
('PRT-000004', 'Lutfi Maulana Azkia', 'lutfi', 'Laki-laki', '081230320816', 'Kepuh Selatan', 'lutfi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_penduduk`
--

CREATE TABLE `d_penduduk` (
  `id_penduduk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode_alamat` enum('Wringin Anom','Kepuh Utara','Kepuh Selatan','Karangploso Wetan','Turi','Tlasih') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `umur` int(3) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `nik` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_penduduk`
--

INSERT INTO `d_penduduk` (`id_penduduk`, `nama`, `kode_alamat`, `no_telp`, `umur`, `tanggal_lahir`, `jenis_kelamin`, `nik`, `email`, `pwd`) VALUES
('PND-000002', 'Edo Maulana ', 'Kepuh Utara', '081230320816', 23, '2022-02-14', 'Laki-laki', '1234', 'edo@student.ub.ac.id', 'edo'),
('PND-000004', 'Edo', 'Kepuh Utara', '081230320816', 50, '2022-05-23', 'Perempuan', '12345612', 'hendra16@student.ub.ac.id', 'edo'),
('PND-000001', 'HENDRO DWI PRASETYO', 'Wringin Anom', '085155348914', 22, '2022-02-26', 'Laki-laki', '12345678', 'hendra16@student.ub.ac.id', 'hendro'),
('PND-000003', 'Awlili Nabriz', 'Kepuh Selatan', '085155348914', 23, '2022-02-18', 'Perempuan', '206789', 'awlili@student.ub.ac.id', 'lili'),
('PND-000005', 'tuki', 'Wringin Anom', '081230320816', 23, '2022-05-18', 'Laki-laki', '3098767', 'hendra16@student.ub.ac.id', 'tuki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `judul`, `deskripsi`, `no_telp`, `email`) VALUES
(1, 'Desa Kepuharjo. Malang', 'Kepuharjo adalah sebuah desa di wilayah Kecamatan Karangploso, Kabupaten Malang, Provinsi Jawa Timur', 81223456, 'ewarga@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `deskripsi` varchar(222) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `deskripsi`, `judul`, `gambar`) VALUES
(1, 'Ewar.ga hadir sebagai jawaban dari keluhan kalian, lewat sistem ini dapat memudahkan untuk meminta surat menyurat tanpa harus pergi ke balai desa cukup dirumah saja.', 'Halo Warga Desa Kepuharjo', '692-2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_user` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `foto_user`) VALUES
('USR-000001', 'admin', 'admin', '448-11zon_cropped.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `d_pakrt`
--
ALTER TABLE `d_pakrt`
  ADD PRIMARY KEY (`kode_alamat`);

--
-- Indeks untuk tabel `d_penduduk`
--
ALTER TABLE `d_penduduk`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `kode_rt` (`kode_alamat`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `berkas_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `d_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `d_penduduk`
--
ALTER TABLE `d_penduduk`
  ADD CONSTRAINT `d_penduduk_ibfk_1` FOREIGN KEY (`kode_alamat`) REFERENCES `d_pakrt` (`kode_alamat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
