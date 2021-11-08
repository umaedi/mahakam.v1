-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2021 pada 06.48
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahakam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tag` varchar(20) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `deskripsi` varchar(2500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `nama_agenda`, `slug`, `tag`, `kategori`, `img`, `lokasi`, `tanggal`, `deskripsi`, `created_at`, `updated_at`) VALUES
(23, 'Lorem Ipsum 1', 'lorem-ipsum-1', 'Vaksin', '1', '1635959100_31cb8e345572070a1eaa.jpg', 'Bandar Lampung', '2021-11-12', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2021-11-03 12:05:00', '2021-11-03 12:12:41'),
(24, 'Simak! Anak 6-11 Tahun Ini', 'simak-anak-6-11-tahun-ini', 'Vaksin', '2', '1635962271_84f13b7dfef576401b5b.jpg', 'Bandar Lampung', '2021-11-05', '<p>Jakarta, CNBC Indonesia - Ikatan Dokter Anak Indonesia (IDAI) mendukung keputusan Badan Pengawas Obat dan Makanan (BPOM) yang memberikan izin penggunaan darurat (EUA) pada vaksin Covid-19 buatan Sinovac dan produksi Bio Farma untuk disuntikkan kepada anak usia 6-11 tahun.</p><p>Ketua Umum Ikatan Dokter Anak Indonesia (IDAI), Pimprim Basarah mengatakan anak-anak punya potensi tertular serta menularkan virus Covid-19 kepada orang lain. Jadi pihak IDAI menyambut baik adanya program vaksinasi untuk anak 6-11 tahun.</p><p>\"Selain tertular bisa menularkan. Anak-anak jadi OTG tidak ketahui mengidap Covid-19 menularkan kemana-mana eyang, orang tua dan om tante dengan kormorbid sangat fatal akibatnya,\" ungkapnya beberapa waktu lalu, seperti dikutip Rabu (3/11/2021).</p>', '2021-11-03 12:57:51', '2021-11-06 01:39:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `url_banner` varchar(100) NOT NULL,
  `url_bupati` varchar(255) NOT NULL,
  `url_wakil` varchar(255) NOT NULL,
  `img_banner` varchar(255) NOT NULL,
  `bupati` varchar(100) NOT NULL,
  `wakil` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `url_banner`, `url_bupati`, `url_wakil`, `img_banner`, `bupati`, `wakil`, `created_at`, `updated_at`) VALUES
(3, 'mahakamulu-kab.id', 'http://mahakamulu-kab.id/biografi/bupati', 'http://mahakamulu-kab.id/biografi/wakil', '1636142770_845faf2a0303754b313e.jpg', '1636211800_d588a972ec7f8f70ed2e.png', '1636211821_5c41886c453604c99a5c.png', '2021-11-05 15:06:10', '2021-11-05 15:06:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bupati`
--

CREATE TABLE `bupati` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `istri` varchar(255) NOT NULL,
  `anak1` varchar(255) NOT NULL,
  `anak2` varchar(255) NOT NULL,
  `anak3` varchar(255) NOT NULL,
  `anak4` varchar(255) NOT NULL,
  `anak5` varchar(255) NOT NULL,
  `sd` varchar(255) NOT NULL,
  `smp` varchar(255) NOT NULL,
  `sma` varchar(255) NOT NULL,
  `kuliah` varchar(255) NOT NULL,
  `tahun1` varchar(20) NOT NULL,
  `karir1` varchar(255) NOT NULL,
  `tahun2` varchar(20) NOT NULL,
  `karir2` varchar(255) NOT NULL,
  `tahun3` varchar(20) NOT NULL,
  `karir3` varchar(255) NOT NULL,
  `tahun4` varchar(20) NOT NULL,
  `karir4` varchar(255) NOT NULL,
  `tahun5` varchar(20) NOT NULL,
  `karir5` varchar(255) NOT NULL,
  `tahun6` varchar(20) NOT NULL,
  `karir6` varchar(255) NOT NULL,
  `tahun7` varchar(20) NOT NULL,
  `karir7` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bupati`
--

INSERT INTO `bupati` (`id`, `nama`, `jabatan`, `periode`, `agama`, `ttl`, `istri`, `anak1`, `anak2`, `anak3`, `anak4`, `anak5`, `sd`, `smp`, `sma`, `kuliah`, `tahun1`, `karir1`, `tahun2`, `karir2`, `tahun3`, `karir3`, `tahun4`, `karir4`, `tahun5`, `karir5`, `tahun6`, `karir6`, `tahun7`, `karir7`, `motto`, `img`, `created_at`, `updated_at`) VALUES
(1, 'BONIFASIUS', 'Bupati Mahakam ulu', '2021/2024', 'Katolik', 'Mahakam ulu 2021', 'Ny. Yovita Bulan', '1. Angelina Idang Belawan', '2. Marcellus Hajang Belawan', '3. Owena Mayang Shari Belawan', ' 4. Marisa Mellisa Dau Belawan', '5. Ivana Lun Belawan', '1974 – 1980 SDN 017 Mamahak Besar', '1980 – 1983 SMP WR.', '1983 – 1986 ', '2006 – 2010', '1998 – 2003', 'Ketua KSU Mayang Putri Prima', '2008 – 2013', 'Direktur PT. Cahaya Belawan Sejahtera', '2005 – 2013', 'Direktur CV. Sinto Makmur', '2014', 'Wakil Ketua DPRD Kabupaten Kutai Barat', '2014 – 2015', 'Ketua DPRD Kabupaten Mahakam Ulu', '2016 – 2021', 'Bupati Mahakam Ulu', '2021 – 2024', 'Bupati Mahakam Ulu', 'Kalau saja aku tau', '1635844159_6e58fb6442b7ea182ca6.jpg', '2021-10-30 16:58:34', '2021-11-02 04:09:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id`, `nama_file`, `slug`, `file`, `tanggal`, `created_at`, `updated_at`) VALUES
(3, 'Laporan vaksin 2021', 'laporan-vaksin-2021', '', '2021-11-04', '2021-11-03 10:59:43', '2021-11-03 11:02:55'),
(4, 'Rekap Hasil Vaksinasi', 'rekap-hasil-vaksinasi', '', '2021-11-06', '2021-11-03 18:05:23', '2021-11-06 02:07:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'bupati', '2021-11-03 07:42:13', '2021-11-03 07:42:13'),
(2, 'wakil', '2021-11-03 07:42:18', '2021-11-03 07:42:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `img`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'appbagianpem.mahulu@gmail.com', '$2y$10$EZ6/3EsGe6ckEQUmp.hes.EW.azmqMm3.zWaUPdbx7v4DAzKZOzGy', '1636186844_bbc121350297c9f149c1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wakil_bupati`
--

CREATE TABLE `wakil_bupati` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `istri` varchar(100) NOT NULL,
  `anak1` varchar(255) NOT NULL,
  `anak2` varchar(255) NOT NULL,
  `sd` varchar(100) NOT NULL,
  `smp` varchar(100) NOT NULL,
  `sma` varchar(100) NOT NULL,
  `s1` varchar(100) NOT NULL,
  `s2` varchar(100) NOT NULL,
  `tahun1` varchar(20) NOT NULL,
  `karir1` varchar(255) NOT NULL,
  `tahun2` varchar(20) NOT NULL,
  `karir2` varchar(255) NOT NULL,
  `tahun3` varchar(20) NOT NULL,
  `karir3` varchar(255) NOT NULL,
  `tahun4` varchar(20) NOT NULL,
  `karir4` varchar(255) NOT NULL,
  `tahun5` varchar(20) NOT NULL,
  `karir5` varchar(255) NOT NULL,
  `tahun7` varchar(20) NOT NULL,
  `tahun6` varchar(20) NOT NULL,
  `karir6` varchar(255) NOT NULL,
  `karir7` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wakil_bupati`
--

INSERT INTO `wakil_bupati` (`id`, `nama`, `jabatan`, `periode`, `ttl`, `agama`, `istri`, `anak1`, `anak2`, `sd`, `smp`, `sma`, `s1`, `s2`, `tahun1`, `karir1`, `tahun2`, `karir2`, `tahun3`, `karir3`, `tahun4`, `karir4`, `tahun5`, `karir5`, `tahun7`, `tahun6`, `karir6`, `karir7`, `img`, `created_at`, `updated_at`) VALUES
(1, 'DRS. YOHANES  AVUN, M.SI', 'Wakil Bupati Mahakam Ulu', '2021-2024', 'Sirau, 31 Desember 1964', 'Katolik', 'Ny. Anastasia Dang Avun', '1. Helena Hubung', '2. Hendrikus Hirang', '1971 -1977 SD Katolik Wr. Soepratman Tering', '1979 – 1981 SMP Katolik Wr. Soepratman Tering', '1982 – 1984 SMA Katolik Wr. Soepratman Samarinda', '1984 – 1988 Universitas Mulawarman', '2005 – 2007 Universitas Mulawarman', '2001 – 2003', 'Kepala Bidang Perencanaan Pemberdayaan Perkampungan Bappeda Kutai Barat', '2003 – 2005', 'Kepala Bidang Perencanaan Ekonomi Kerakyataan Bappeda Kutai Barat', '2005', 'Kabag Perekonomian Setkab Kutai Barat', '2009 – 2013', 'Kepala Badan Pelayanan Perijinan Terpadu Kutai Barat', '2013', 'Asisten Kesejahteraan Rakyat dan Administrasi Sekretariat Daerah Kabupaten Mahakam Ulu', '2013 – 2020', '2013 – 2020', 'Sekretaris Daerah Kabupaten Mahakam Ulu', ' Wakil Bupati Kabupaten Mahakam Ulu', '1635845831_c911d1d9dea95edc1a3a.jpg', NULL, '2021-11-02 04:37:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bupati`
--
ALTER TABLE `bupati`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `wakil_bupati`
--
ALTER TABLE `wakil_bupati`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `bupati`
--
ALTER TABLE `bupati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wakil_bupati`
--
ALTER TABLE `wakil_bupati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
