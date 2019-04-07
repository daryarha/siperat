-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2017 pada 05.24
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siperat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps_siperat_arsip`
--

CREATE TABLE `apps_siperat_arsip` (
  `id_arsip` int(11) NOT NULL,
  `tipe` enum('1','2') NOT NULL DEFAULT '1',
  `last` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps_siperat_arsip`
--

INSERT INTO `apps_siperat_arsip` (`id_arsip`, `tipe`, `last`) VALUES
(1, '1', 2),
(2, '2', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps_siperat_buku_tamu`
--

CREATE TABLE `apps_siperat_buku_tamu` (
  `id_buku_tamu` int(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `asal` varchar(100) NOT NULL,
  `tanggal_datang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hp` varchar(12) NOT NULL,
  `keperluan` varchar(11) NOT NULL,
  `tanggal_undangan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps_siperat_buku_tamu`
--

INSERT INTO `apps_siperat_buku_tamu` (`id_buku_tamu`, `nama`, `asal`, `tanggal_datang`, `hp`, `keperluan`, `tanggal_undangan`) VALUES
(1, 'ali', 'sas', '2017-05-31 16:48:17', '9087615212', 'ssds', '2017-05-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps_siperat_jenis_surat`
--

CREATE TABLE `apps_siperat_jenis_surat` (
  `id_jenis_surat` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `jenis_surat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps_siperat_jenis_surat`
--

INSERT INTO `apps_siperat_jenis_surat` (`id_jenis_surat`, `kode`, `jenis_surat`) VALUES
(1, 'PH', 'Permohonan'),
(2, 'U', 'Undangan'),
(3, 'PB', 'Pemberitahuan'),
(4, 'P', 'Pengumuman'),
(5, 'SM', 'Mandat'),
(6, 'SR', 'Rekomendasi'),
(7, 'Ket', 'Keterangan'),
(8, 'ST', 'Penugasan'),
(9, 'UP', 'Ucapan'),
(10, 'MO', 'Memo'),
(11, 'NT', 'Nota'),
(12, 'SP', 'Peringatan'),
(13, 'SPn', 'Pernyataan'),
(14, 'KS', 'Kerjasama'),
(15, 'SB', 'Balasan'),
(16, 'SK', 'Surat Keputusan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps_siperat_penerima`
--

CREATE TABLE `apps_siperat_penerima` (
  `id_penerima` int(11) NOT NULL,
  `kode` varchar(2) NOT NULL,
  `penerima` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps_siperat_penerima`
--

INSERT INTO `apps_siperat_penerima` (`id_penerima`, `kode`, `penerima`) VALUES
(1, 'i', 'Internal'),
(2, 'e', 'Eksternal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps_siperat_pengirim`
--

CREATE TABLE `apps_siperat_pengirim` (
  `id_pengirim` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps_siperat_pengirim`
--

INSERT INTO `apps_siperat_pengirim` (`id_pengirim`, `kode`, `nama`) VALUES
(1, 'PRES', 'Presiden / Wakil Presiden'),
(2, 'BND', 'Bendahara'),
(3, 'IQA', 'Internal Quality Assurance'),
(4, 'PSDM', 'Kementerian Pengembangan Sumber Daya Manusia'),
(5, 'K2P', 'Kementerian Karya Prestatif'),
(6, 'EK', 'Kementerian Ekonomi'),
(7, 'DAGRI', 'Menteri Dalam Negeri'),
(8, 'SOSMA', 'Kementerian Sosial Masyarakat'),
(9, 'ADV', 'Kementerian Advokasi dan Kesejahteraan Mahasiswa'),
(10, 'KASTRAT', 'Kementerian Kajian dan Aksi Strategis'),
(11, 'MEDKRAF', 'Biro Media Kreatif'),
(12, 'ADM', 'Biro Administrasi dan Kesekretariatan'),
(13, 'HUMAS', 'Biro Hubungan Masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps_siperat_surat_keluar`
--

CREATE TABLE `apps_siperat_surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `id_jenis_surat` int(11) DEFAULT NULL,
  `id_penerima` int(11) DEFAULT NULL,
  `id_pengirim` int(11) DEFAULT NULL,
  `no_surat_keluar` varchar(100) NOT NULL,
  `nama_acara` varchar(100) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `nim_pemohon` varchar(15) NOT NULL,
  `hp_pemohon` varchar(12) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `status` enum('1','2','3') DEFAULT '1',
  `tipe` enum('1','2','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps_siperat_surat_keluar`
--

INSERT INTO `apps_siperat_surat_keluar` (`id_surat_keluar`, `id_jenis_surat`, `id_penerima`, `id_pengirim`, `no_surat_keluar`, `nama_acara`, `nama_pemohon`, `nim_pemohon`, `hp_pemohon`, `nama_penerima`, `perihal`, `lampiran`, `keterangan`, `status`, `tipe`) VALUES
(36, 2, 1, 5, '005/U/i/K2P/BEM FILKOM-UB/VI/2017', 'IFEST', 'fikri', '1', '087750431397', 'OPTIIK', 'MAKAN', '-', '-', '2', '2'),
(37, 1, 2, 1, '002/PH/e/a/PRES/BEM FILKOM-UB/VI/2017', 'a', 'fikri', '1', '3', 'a', 'a', 'a', 'a', '2', '1'),
(38, 2, 2, 3, '005/U/e/IQA/BEM FILKOM-UB/VI/2017', '5', 'fikri', '1', '', '5', '5', '5', '5', '2', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps_siperat_user`
--

CREATE TABLE `apps_siperat_user` (
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `prev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps_siperat_user`
--

INSERT INTO `apps_siperat_user` (`username`, `password`, `prev`) VALUES
('165150200111100', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
('165150200111107', '21232f297a57a5a743894a0e4a801fc3', 1),
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_siperat_arsip`
--
ALTER TABLE `apps_siperat_arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `apps_siperat_buku_tamu`
--
ALTER TABLE `apps_siperat_buku_tamu`
  ADD PRIMARY KEY (`id_buku_tamu`);

--
-- Indexes for table `apps_siperat_jenis_surat`
--
ALTER TABLE `apps_siperat_jenis_surat`
  ADD PRIMARY KEY (`id_jenis_surat`);

--
-- Indexes for table `apps_siperat_penerima`
--
ALTER TABLE `apps_siperat_penerima`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `apps_siperat_pengirim`
--
ALTER TABLE `apps_siperat_pengirim`
  ADD PRIMARY KEY (`id_pengirim`);

--
-- Indexes for table `apps_siperat_surat_keluar`
--
ALTER TABLE `apps_siperat_surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`),
  ADD KEY `id_surat_keluar` (`id_surat_keluar`),
  ADD KEY `id_jenis_surat` (`id_jenis_surat`),
  ADD KEY `id_penerima` (`id_penerima`),
  ADD KEY `id_pengirim` (`id_pengirim`);

--
-- Indexes for table `apps_siperat_user`
--
ALTER TABLE `apps_siperat_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_siperat_arsip`
--
ALTER TABLE `apps_siperat_arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `apps_siperat_buku_tamu`
--
ALTER TABLE `apps_siperat_buku_tamu`
  MODIFY `id_buku_tamu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apps_siperat_jenis_surat`
--
ALTER TABLE `apps_siperat_jenis_surat`
  MODIFY `id_jenis_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `apps_siperat_penerima`
--
ALTER TABLE `apps_siperat_penerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `apps_siperat_pengirim`
--
ALTER TABLE `apps_siperat_pengirim`
  MODIFY `id_pengirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `apps_siperat_surat_keluar`
--
ALTER TABLE `apps_siperat_surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `apps_siperat_surat_keluar`
--
ALTER TABLE `apps_siperat_surat_keluar`
  ADD CONSTRAINT `apps_siperat_surat_keluar_ibfk_1` FOREIGN KEY (`id_penerima`) REFERENCES `apps_siperat_penerima` (`id_penerima`),
  ADD CONSTRAINT `apps_siperat_surat_keluar_ibfk_2` FOREIGN KEY (`id_jenis_surat`) REFERENCES `apps_siperat_jenis_surat` (`id_jenis_surat`),
  ADD CONSTRAINT `apps_siperat_surat_keluar_ibfk_3` FOREIGN KEY (`id_pengirim`) REFERENCES `apps_siperat_pengirim` (`id_pengirim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
