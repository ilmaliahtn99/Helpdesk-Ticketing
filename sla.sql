-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2022 pada 09.18
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
-- Database: `sla`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agent`
--

CREATE TABLE `agent` (
  `id_agent` int(10) NOT NULL,
  `id_team` int(10) NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `nip` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `nama_agent` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dampak`
--

CREATE TABLE `dampak` (
  `id_dampak` int(10) NOT NULL,
  `dampak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dampak`
--

INSERT INTO `dampak` (`id_dampak`, `dampak`) VALUES
(1, 'Aplikasi tidak bisa diakses'),
(2, 'Aplikasi atau server down'),
(3, 'Data yang terdapat pada aplikasi tidak sesuai dengan formula'),
(4, 'Data tidak terupdate'),
(5, 'Gagal patching'),
(6, 'Tidak bisa menyimpan data'),
(7, 'Tidak bisa mengunggah data'),
(8, 'Data hilang'),
(9, 'Koneksi jaringan terganggu'),
(10, 'Tidak bisa generate report'),
(11, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `department`
--

CREATE TABLE `department` (
  `id_department` int(10) NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `nama_department` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(15) NOT NULL,
  `nama_divisi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'SEKPER'),
(2, 'DKU'),
(3, 'LEGAL'),
(4, 'DQHSE'),
(5, 'SPI'),
(6, 'DHC'),
(7, 'DPPU'),
(8, 'DSCN'),
(9, 'DLN'),
(10, 'INFRA 1'),
(11, 'INFRA 2'),
(12, 'DPE'),
(13, 'DIP'),
(14, 'ENGINEERING'),
(15, 'DMRPMO'),
(16, 'Pemasaran Strategis'),
(17, 'WTON'),
(18, 'WIKON'),
(19, 'REALTY'),
(20, 'WG'),
(21, 'WRK'),
(22, 'BITUMEN'),
(23, 'SERPAN'),
(24, 'WINNER'),
(25, 'WTJJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id_categories` int(10) NOT NULL,
  `nama_categories` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq_topic`
--

CREATE TABLE `faq_topic` (
  `id_faq` int(10) NOT NULL,
  `id_topic` int(10) NOT NULL,
  `id_categories` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `helptopic`
--

CREATE TABLE `helptopic` (
  `id_helptopic` int(10) NOT NULL,
  `topic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `helptopic`
--

INSERT INTO `helptopic` (`id_helptopic`, `topic`) VALUES
(1, 'Aplikasi WIKA / Admin Surat'),
(2, 'Aplikasi WIKA / CRM WIKA'),
(3, 'Aplikasi WIKA / Dashboard BI'),
(4, 'Aplikasi WIKA / E-Meeting'),
(5, 'Aplikasi WIKA / FMS WIKA'),
(6, 'Aplikasi WIKA / Nasabah Online'),
(7, 'Aplikasi WIKA / OFFICE 365'),
(8, 'Aplikasi WIKA / PMCS - Entitas Anak Perusahaan'),
(9, 'Aplikasi WIKA / PMCS - WIKA Pusat'),
(10, 'Aplikasi WIKA / Portal WIKA (Lama)'),
(11, 'Aplikasi WIKA / QIS Apps'),
(12, 'Aplikasi WIKA / SIMDIV - Entitas Anak Perusahaan'),
(13, 'Aplikasi WIKA / SIMDIV - WIKA Pusat'),
(14, 'Aplikasi WIKA / Simpro Web'),
(15, 'Aplikasi WIKA / Smartdocs'),
(16, 'Aplikasi WIKA / WIKA - HCIS'),
(18, 'Aplikasi WIKA / WIKA - KM'),
(19, 'Aplikasi WIKA / WIKA - LMS'),
(20, 'Aplikasi WIKA / WIKA - PIS / Audit SPI'),
(21, 'Aplikasi WIKA / WIKA - PIS / Hasil Usaha'),
(22, 'Aplikasi WIKA / WIKA - PIS / Manrisk'),
(23, 'Aplikasi WIKA / WIKA - PIS / Scorecard'),
(24, 'Aplikasi WIKA / WZONE'),
(25, 'Support / Aplikasi Komputer'),
(26, 'Support / Broadcast Message (WA / Email)'),
(27, 'Support / Email WIKA'),
(28, 'Support / Hardware Komputer'),
(29, 'Support / Jaringan Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `issue_categories`
--

CREATE TABLE `issue_categories` (
  `id_categories` int(10) NOT NULL,
  `nama_issue` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `issue_categories`
--

INSERT INTO `issue_categories` (`id_categories`, `nama_issue`) VALUES
(10, 'Permintaan Layanan'),
(11, 'Insiden');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `jabatan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Staf'),
(2, 'Manajer Proyek Menengah'),
(3, 'Manajer Proyek Mega'),
(4, 'Manajer Proyek Kecil'),
(5, 'Manajer Proyek Besar'),
(6, 'Manajer Konstruksi Proyek Mega'),
(7, 'Manajer Konstruksi Proyek Besar'),
(8, 'Manajer Divisi'),
(9, 'Manajer Departemen'),
(10, 'Manajer Biro Operasi'),
(11, 'Manajer Korporasi Assosiasi'),
(12, 'Manajer Korporasi'),
(13, 'Manajer Bidang Proyek Mega'),
(14, 'Manajer Bidang Departemen'),
(15, 'Manajer Bidang'),
(16, 'Manajer'),
(17, 'Koordinator'),
(18, 'Komisaris'),
(19, 'Kepala Seksi Proyek Menengah'),
(20, 'Kepala Seksi Proyek Mega'),
(21, 'Kepala Seksi Proyek Kecil'),
(22, 'Kepala Seksi Proyek Besar'),
(23, 'Kepala Seksi Produksi'),
(24, 'Kepala Pemeriksa'),
(25, 'Kepala Divisi'),
(26, 'General Manager'),
(27, 'Direktur Utama'),
(28, 'Direktur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `new_ticket`
--

CREATE TABLE `new_ticket` (
  `no_ticket` int(10) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `nama_team` varchar(70) NOT NULL,
  `id_helptopic` int(10) NOT NULL,
  `id_department` int(10) NOT NULL,
  `id_proyek` int(10) NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `id_dampak` int(30) NOT NULL,
  `id_categories` int(10) NOT NULL,
  `issue_summary` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subject` text NOT NULL,
  `from` varchar(50) NOT NULL,
  `priority` varchar(15) NOT NULL,
  `assigned_to` varchar(40) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `new_ticket`
--

INSERT INTO `new_ticket` (`no_ticket`, `email_address`, `full_name`, `id_divisi`, `nama_team`, `id_helptopic`, `id_department`, `id_proyek`, `id_jabatan`, `id_dampak`, `id_categories`, `issue_summary`, `create_date`, `subject`, `from`, `priority`, `assigned_to`, `status`) VALUES
(123456, 'asep.jujun@wikamail.id', 'Asep Jujun', 22, 'PIS', 20, 22, 6, 8, 6, 10, '-', '2022-09-13 07:02:26', 'Aplikasi Ms Teams Tidak bisa di akses', 'Asep Jujun', 'Tinggi', 'PIS', 'Open'),
(234567, 'andrianto@wikamail.od', 'Andi Nurdianto', 14, 'PMCS', 9, 9, 6, 1, 11, 10, 'sfzdgfxh', '2022-09-13 07:02:26', 'Tidak bisa login aplikasi\r\n', 'Andi Nurdianto', 'Tinggi', 'PMCS', 'Resolved'),
(234568, 'farah@wikamail.id', 'Farah', 14, 'PMCS', 9, 2, 6, 11, 3, 10, 'sfzdgfxh', '2022-09-13 07:02:26', 'Reset password', 'Farah', 'Sedang', 'PMCS', 'Open'),
(234583, 'andita@wikamail.id', 'Nur Andita', 14, 'Hardware', 27, 2, 0, 1, 11, 10, '', '2022-09-20 04:39:35', 'Permintaan Pembuatan akun Wikamail', 'Nur Andita', 'Sedang', 'Hardware', 'Resolved'),
(234584, 'firdarahmah31@wikamail.id', 'Firda Rahmah', 1, 'PIS', 22, 2, 9, 1, 11, 11, 'Salah menginputkan data', '2022-09-20 04:40:11', 'Salah menginputkan data', 'Firda Rahmah', 'Sedang', 'PIS', 'Open');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(10) NOT NULL,
  `open` text NOT NULL,
  `close` text NOT NULL,
  `resolve` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_helptopic`
--

CREATE TABLE `sub_helptopic` (
  `id_sub_helptopic` int(10) NOT NULL,
  `nama_topic` varchar(30) NOT NULL,
  `sla_plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id_team` int(10) NOT NULL,
  `nama_team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id_team`, `nama_team`) VALUES
(1, 'PMCS'),
(2, 'PIS'),
(3, 'QIS'),
(4, 'HCIS'),
(5, 'Admin Surat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id_unit_kerja` int(8) NOT NULL,
  `nama_unit_kerja` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`) VALUES
(1, 'DLN'),
(2, 'INFRA 1'),
(3, 'INFRA 2'),
(4, 'DPE'),
(5, 'DIP'),
(6, 'DBG'),
(7, 'WTON'),
(8, 'WIKON'),
(9, 'REALTY'),
(10, 'WG'),
(11, 'WRK'),
(12, 'BITUMEN'),
(13, 'SERPAN'),
(14, 'WINNER'),
(15, 'WTJJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_agent`),
  ADD KEY `id_team` (`id_team`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `dampak`
--
ALTER TABLE `dampak`
  ADD PRIMARY KEY (`id_dampak`);

--
-- Indeks untuk tabel `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indeks untuk tabel `faq_topic`
--
ALTER TABLE `faq_topic`
  ADD PRIMARY KEY (`id_faq`),
  ADD KEY `id_topic` (`id_topic`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Indeks untuk tabel `helptopic`
--
ALTER TABLE `helptopic`
  ADD PRIMARY KEY (`id_helptopic`);

--
-- Indeks untuk tabel `issue_categories`
--
ALTER TABLE `issue_categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `new_ticket`
--
ALTER TABLE `new_ticket`
  ADD PRIMARY KEY (`no_ticket`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_helptopic` (`id_helptopic`),
  ADD KEY `id_proyek` (`id_proyek`),
  ADD KEY `id_dampak` (`id_dampak`),
  ADD KEY `id_categories` (`id_categories`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_department` (`id_department`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `sub_helptopic`
--
ALTER TABLE `sub_helptopic`
  ADD PRIMARY KEY (`id_sub_helptopic`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agent`
--
ALTER TABLE `agent`
  MODIFY `id_agent` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id_categories` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `helptopic`
--
ALTER TABLE `helptopic`
  MODIFY `id_helptopic` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `new_ticket`
--
ALTER TABLE `new_ticket`
  MODIFY `no_ticket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234586;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `new_ticket`
--
ALTER TABLE `new_ticket`
  ADD CONSTRAINT `new_ticket_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `issue_categories` (`id_categories`),
  ADD CONSTRAINT `new_ticket_ibfk_3` FOREIGN KEY (`id_helptopic`) REFERENCES `helptopic` (`id_helptopic`),
  ADD CONSTRAINT `new_ticket_ibfk_4` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`),
  ADD CONSTRAINT `new_ticket_ibfk_5` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
