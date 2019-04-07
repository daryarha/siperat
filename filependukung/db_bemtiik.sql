-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2017 pada 11.34
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bemtiik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bars`
--

CREATE TABLE `bars` (
  `id` int(11) NOT NULL,
  `content` varchar(50) NOT NULL,
  `url` varchar(120) NOT NULL,
  `positionId` int(11) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bars`
--

INSERT INTO `bars` (`id`, `content`, `url`, `positionId`, `parent`) VALUES
(1, 'Home', '', 1, 0),
(2, 'News', '#', 2, 0),
(3, 'Profile', '#', 3, 0),
(4, 'Contact', 'contact', 4, 0),
(5, 'BEM Information', 'info', 5, 2),
(6, 'BEM News', 'news', 6, 2),
(7, 'Presiden & Wakil', '#', 7, 3),
(8, 'Bendahara', '#', 8, 3),
(9, 'Administrasi', '#', 9, 3),
(10, 'Kementrian Kewirausahaan', 'info/kewirausahaan', 10, 3),
(11, 'Kementrian PSDM', 'info/pengembangan-sumber-daya-manusia', 11, 3),
(12, 'Kementrian Advokesma', 'info/advokesma', 12, 3),
(13, 'Kementrian Humas', 'info/humas', 13, 3),
(14, 'Jasa', 'info/kewirausahaan', 14, 10),
(15, 'Produksi', 'info/kewirausahaan', 15, 10),
(16, 'Akademik', 'info/pengembangan-sumber-daya-manusia', 16, 11),
(17, 'Non Akademik', 'info/pengembangan-sumber-daya-manusia', 17, 11),
(18, 'Pengabdian Masyarakat', 'info/pengembangan-sumber-daya-manusia', 18, 11),
(19, 'Advokasi', 'info/advokesma', 19, 12),
(20, 'Kesejahteraan Mahasiswa', 'info/advokesma', 20, 12),
(21, 'Informasi', 'info/humas', 21, 13),
(22, 'Komunikasi', 'info/humas', 22, 13),
(23, 'Alumni', '#', 22, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `nim` varchar(16) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `no_urut` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`nim`, `nama`, `hp`, `no_urut`, `waktu`) VALUES
('125150400111026', 'Ilyas Habiburrahman', '085719311994', 25, '2013-06-15 06:00:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_gel1`
--

CREATE TABLE `calon_gel1` (
  `nim` varchar(16) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `no_urut` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `idcatatan` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Info'),
(3, 'Profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `author` int(11) DEFAULT NULL,
  `authorsName` varchar(30) DEFAULT NULL,
  `authorsEmail` varchar(30) DEFAULT NULL,
  `authorsPhoto` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(320) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `new` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `durasi`
--

CREATE TABLE `durasi` (
  `id` int(11) NOT NULL,
  `no_urut` int(16) NOT NULL,
  `lama` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fix`
--

CREATE TABLE `fix` (
  `Nama` varchar(32) DEFAULT NULL,
  `NIM` varchar(16) DEFAULT NULL,
  `HP` varchar(15) DEFAULT NULL,
  `departemen` varchar(72) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `pesan` longtext NOT NULL,
  `kadiv` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL,
  `kelompok` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawab`
--

CREATE TABLE `jawab` (
  `id_jawab` int(11) NOT NULL,
  `idsoal` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nim` varchar(30) NOT NULL,
  `passHP` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `url` varchar(120) NOT NULL,
  `positionId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `jabatanId` int(11) NOT NULL,
  `photoId` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `path` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `slugId` int(11) NOT NULL,
  `category` tinyint(1) NOT NULL DEFAULT '1',
  `tags` varchar(28) DEFAULT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `author` int(11) NOT NULL,
  `photo` int(11) DEFAULT '1',
  `pengurusId` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `isSlider` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jenis_penerima`
--

CREATE TABLE `tabel_jenis_penerima` (
  `id_jenis_penerima` int(11) NOT NULL,
  `kode_jenis_penerima` char(3) NOT NULL,
  `nama_jenis_penerima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_jenis_penerima`
--

INSERT INTO `tabel_jenis_penerima` (`id_jenis_penerima`, `kode_jenis_penerima`, `nama_jenis_penerima`) VALUES
(1, 'A', 'Internal BEMTIIK'),
(2, 'B', 'Internal PTIIK dan Personal'),
(3, 'C', 'Eksternal PTIIK-Internal UB'),
(4, 'D', 'Eksternal UB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jenis_pengirim`
--

CREATE TABLE `tabel_jenis_pengirim` (
  `id_jenis_pengirim` int(11) NOT NULL,
  `kode_jenis_pengirim` char(3) NOT NULL,
  `nama_jenis_pengirim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_jenis_pengirim`
--

INSERT INTO `tabel_jenis_pengirim` (`id_jenis_pengirim`, `kode_jenis_pengirim`, `nama_jenis_pengirim`) VALUES
(1, 'A', 'Internal BEM'),
(2, 'B', 'Internal PTIIK dan Personal'),
(3, 'C', 'Eksternal PTIIK-Internal UB'),
(4, 'D', 'Eksternal UB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jenis_surat`
--

CREATE TABLE `tabel_jenis_surat` (
  `id_jenis_surat` int(11) NOT NULL,
  `kode_jenis_surat` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_jenis_surat`
--

INSERT INTO `tabel_jenis_surat` (`id_jenis_surat`, `kode_jenis_surat`, `keterangan`) VALUES
(1, 'PH', 'Permohonan'),
(2, 'U', 'Undangan'),
(3, 'PB', 'Pemberitahuan'),
(4, 'M', 'Mandat'),
(5, 'KP', 'Keputusan'),
(6, 'PR', 'Pernyataan'),
(7, 'PU', 'Pengumuman'),
(8, 'Rek', 'Rekomendasi'),
(9, 'Ket', 'Keterangan'),
(10, 'ST', 'Penugasan'),
(11, 'Up', 'Ucapan'),
(12, 'KS', 'Kerjasama'),
(13, 'Stap', 'Surat Ketetapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengirim`
--

CREATE TABLE `tabel_pengirim` (
  `id_pengirim` int(11) NOT NULL,
  `kode_pengirim` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_jenis_pengirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pengirim`
--

INSERT INTO `tabel_pengirim` (`id_pengirim`, `kode_pengirim`, `keterangan`, `id_jenis_pengirim`) VALUES
(1, 'PRES', 'Presiden Bem', 1),
(2, 'ADM', 'Administrasi', 1),
(3, 'BEND', 'Bendahara', 1),
(4, 'HUMAS', 'Kementrian Hubungan Masyarakat', 1),
(5, 'PSDM', 'Kementrian Pengembangan Sumber Daya Manusia', 1),
(6, 'KWU', 'Kementrian Kewirauhsaan', 1),
(7, 'ADV', 'Kementrian Advokasi dan Kesejahteraan Mahasiswa', 1),
(8, '', 'Kepo', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_priv`
--

CREATE TABLE `tabel_priv` (
  `id_priv` int(11) NOT NULL,
  `nama_priv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_priv`
--

INSERT INTO `tabel_priv` (`id_priv`, `nama_priv`) VALUES
(1, 'admin'),
(2, 'petugas masuk'),
(3, 'petugas keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_surat_keluar`
--

CREATE TABLE `tabel_surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `no_surat_keluar` varchar(100) NOT NULL,
  `id_jenis_surat` int(11) NOT NULL,
  `id_jenis_penerima` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemohon` varchar(44) NOT NULL,
  `nim_pemohon` varchar(44) NOT NULL,
  `no_hp_pemohon` varchar(44) NOT NULL,
  `id_status_arsip` int(11) NOT NULL,
  `nama_penerima` varchar(44) NOT NULL,
  `nama_acara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_surat_keluar`
--

INSERT INTO `tabel_surat_keluar` (`id_surat_keluar`, `no_surat_keluar`, `id_jenis_surat`, `id_jenis_penerima`, `id_pengirim`, `perihal`, `keterangan`, `lampiran`, `tanggal`, `nama_pemohon`, `nim_pemohon`, `no_hp_pemohon`, `id_status_arsip`, `nama_penerima`, `nama_acara`) VALUES
(1, '001/BEM TIIK-UB/PRES/PH/C/VII/2013', 1, 3, 1, 'percobaan', '', '', '2013-07-01', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_surat_masuk`
--

CREATE TABLE `tabel_surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_surat_masuk` varchar(100) NOT NULL,
  `id_jenis_surat` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `id_priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `password`, `id_priv`) VALUES
(2, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tolak`
--

CREATE TABLE `tolak` (
  `Nama` varchar(32) DEFAULT NULL,
  `NIM` varchar(16) DEFAULT NULL,
  `HP` varchar(15) DEFAULT NULL,
  `departemen` varchar(72) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `pesan` longtext NOT NULL,
  `kadiv` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(30) NOT NULL,
  `privileges` tinyint(1) NOT NULL,
  `photoId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `privileges`, `photoId`) VALUES
(1, 'admin', '62927b81f5fde83cf9f07c4679462afd', 'Administrator', 1, 1),
(2, 'humas', 'c11a539a1c3b7d058a7a109e85adff14', 'Humas', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bars`
--
ALTER TABLE `bars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `positionId` (`positionId`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `calon_gel1`
--
ALTER TABLE `calon_gel1`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`idcatatan`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contentId` (`content`),
  ADD KEY `postId` (`postId`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `durasi`
--
ALTER TABLE `durasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fix`
--
ALTER TABLE `fix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `jawab`
--
ALTER TABLE `jawab`
  ADD PRIMARY KEY (`id_jawab`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `positionId` (`positionId`),
  ADD KEY `parentId` (`parentId`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatanId` (`jabatanId`),
  ADD KEY `jabatanId_2` (`jabatanId`),
  ADD KEY `jabatanId_3` (`jabatanId`),
  ADD KEY `photoId` (`photoId`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photoId` (`photo`),
  ADD KEY `pengurusId` (`pengurusId`),
  ADD KEY `author` (`author`),
  ADD KEY `category` (`category`),
  ADD KEY `slugId` (`slugId`),
  ADD KEY `slugId_2` (`slugId`);

--
-- Indexes for table `tabel_jenis_penerima`
--
ALTER TABLE `tabel_jenis_penerima`
  ADD PRIMARY KEY (`id_jenis_penerima`);

--
-- Indexes for table `tabel_jenis_pengirim`
--
ALTER TABLE `tabel_jenis_pengirim`
  ADD PRIMARY KEY (`id_jenis_pengirim`);

--
-- Indexes for table `tabel_jenis_surat`
--
ALTER TABLE `tabel_jenis_surat`
  ADD PRIMARY KEY (`id_jenis_surat`);

--
-- Indexes for table `tabel_pengirim`
--
ALTER TABLE `tabel_pengirim`
  ADD PRIMARY KEY (`id_pengirim`),
  ADD KEY `id_jenis_pengirim` (`id_jenis_pengirim`);

--
-- Indexes for table `tabel_priv`
--
ALTER TABLE `tabel_priv`
  ADD PRIMARY KEY (`id_priv`);

--
-- Indexes for table `tabel_surat_keluar`
--
ALTER TABLE `tabel_surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`),
  ADD UNIQUE KEY `no_surat_keluar` (`no_surat_keluar`),
  ADD KEY `id_jenis_surat` (`id_jenis_surat`),
  ADD KEY `id_pengirim` (`id_pengirim`),
  ADD KEY `id_jenis_penerima` (`id_jenis_penerima`);

--
-- Indexes for table `tabel_surat_masuk`
--
ALTER TABLE `tabel_surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`),
  ADD UNIQUE KEY `no_surat_masuk` (`no_surat_masuk`),
  ADD KEY `id_jenis_surat` (`id_jenis_surat`),
  ADD KEY `id_pengirim` (`id_pengirim`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_priv` (`id_priv`);

--
-- Indexes for table `tolak`
--
ALTER TABLE `tolak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photoId` (`photoId`),
  ADD KEY `privileges` (`privileges`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bars`
--
ALTER TABLE `bars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `calon_gel1`
--
ALTER TABLE `calon_gel1`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `idcatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `durasi`
--
ALTER TABLE `durasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;
--
-- AUTO_INCREMENT for table `fix`
--
ALTER TABLE `fix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id_jawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3795;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tabel_jenis_penerima`
--
ALTER TABLE `tabel_jenis_penerima`
  MODIFY `id_jenis_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_jenis_pengirim`
--
ALTER TABLE `tabel_jenis_pengirim`
  MODIFY `id_jenis_pengirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_jenis_surat`
--
ALTER TABLE `tabel_jenis_surat`
  MODIFY `id_jenis_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tabel_pengirim`
--
ALTER TABLE `tabel_pengirim`
  MODIFY `id_pengirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tabel_priv`
--
ALTER TABLE `tabel_priv`
  MODIFY `id_priv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_surat_keluar`
--
ALTER TABLE `tabel_surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_surat_masuk`
--
ALTER TABLE `tabel_surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tolak`
--
ALTER TABLE `tolak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_pengirim`
--
ALTER TABLE `tabel_pengirim`
  ADD CONSTRAINT `tabel_pengirim_ibfk_1` FOREIGN KEY (`id_jenis_pengirim`) REFERENCES `tabel_jenis_pengirim` (`id_jenis_pengirim`);

--
-- Ketidakleluasaan untuk tabel `tabel_surat_keluar`
--
ALTER TABLE `tabel_surat_keluar`
  ADD CONSTRAINT `tabel_surat_keluar_ibfk_1` FOREIGN KEY (`id_jenis_surat`) REFERENCES `tabel_jenis_surat` (`id_jenis_surat`),
  ADD CONSTRAINT `tabel_surat_keluar_ibfk_3` FOREIGN KEY (`id_pengirim`) REFERENCES `tabel_pengirim` (`id_pengirim`),
  ADD CONSTRAINT `tabel_surat_keluar_ibfk_4` FOREIGN KEY (`id_jenis_penerima`) REFERENCES `tabel_jenis_penerima` (`id_jenis_penerima`);

--
-- Ketidakleluasaan untuk tabel `tabel_surat_masuk`
--
ALTER TABLE `tabel_surat_masuk`
  ADD CONSTRAINT `tabel_surat_masuk_ibfk_1` FOREIGN KEY (`id_jenis_surat`) REFERENCES `tabel_jenis_surat` (`id_jenis_surat`),
  ADD CONSTRAINT `tabel_surat_masuk_ibfk_2` FOREIGN KEY (`id_pengirim`) REFERENCES `tabel_pengirim` (`id_pengirim`);

--
-- Ketidakleluasaan untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD CONSTRAINT `tabel_user_ibfk_1` FOREIGN KEY (`id_priv`) REFERENCES `tabel_priv` (`id_priv`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
