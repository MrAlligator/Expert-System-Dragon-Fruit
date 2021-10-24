-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2021 pada 13.00
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buahnaga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(128) NOT NULL,
  `gejala` text NOT NULL,
  `gambar` text NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `kode_gejala`, `gejala`, `gambar`) VALUES
(1, 'G001', 'Terjadi pada sulur dan batang\r', 'default.png'),
(2, 'G002', 'Terjadi pada buah\r', 'default.png'),
(3, 'G003', 'Terjadi pada buah, sulur dan batang\r', 'default.png'),
(4, 'G004', 'Kuncup bunga dikerubungi semut \r', 'default.png'),
(5, 'G005', 'Kulit buah berbintik-bintik cokelat \r', 'default.png'),
(6, 'G006', 'Cabang atau batang berwarna kuning kusam\r', 'default.png'),
(7, 'G007', 'Cabang atau batang busuk\r', 'default.png'),
(8, 'G008', 'Cabang atau batang kering\r', 'default.png'),
(9, 'G009', 'Pentil buah kerdil atau kecil\r', 'default.png'),
(10, 'G010', 'Pentil buah rontok\r', 'default.png'),
(11, 'G011', 'Pada cabang yang tidak terkena sinar matahari berwarna kusam\r', 'default.png'),
(12, 'G012', 'Terdapat semut pada area yang tidak terkena sinar matahari\r', 'default.png'),
(13, 'G013', 'Terdapat bekas gigitan dibagian pinggir batang atau sulur\r', 'default.png'),
(14, 'G014', 'Bekas gigitan bagian ujungnya bergerigi tipis dan halus seperti bekas parutan\r', 'default.png'),
(15, 'G015', 'Tunas terlihat rusak dan mengering di bekas parutan\r', 'default.png'),
(16, 'G016', 'Terdapat jejak berupa lendir berwarna keperakan\r', 'default.png'),
(17, 'G017', 'Batang dan tanaman buah naga berlubang dan habis\r', 'default.png'),
(18, 'G018', 'Terdapat kotoran berwarna hitam pada sulur atau tiang penyangga atau permukaan tanah\r', 'default.png'),
(19, 'G019', 'Buah terlihat berlubang\r', 'default.png'),
(20, 'G020', 'Lubang berbentuk khas bekas patukan paruh\r', 'default.png'),
(21, 'G021', 'Daging buah terlihat kosong\r', 'default.png'),
(22, 'G022', 'Buah menjadi busuk\r', 'default.png'),
(23, 'G023', 'Permukaan kulit buah berselaput di permukaan buah\r', 'default.png'),
(24, 'G024', 'Terdapat lilin berwarna putih di permukaan buah\r', 'default.png'),
(25, 'G025', 'Buah agak berkerut\r', 'default.png'),
(26, 'G026', 'Buah menguning\r', 'default.png'),
(27, 'G027', 'Buah mengecil\r', 'default.png'),
(28, 'G028', 'Buah kempes\r', 'default.png'),
(29, 'G029', 'Buah layu\r', 'default.png'),
(30, 'G030', 'Buah kering\r', 'default.png'),
(31, 'G031', 'Kusam pada sulur\r', 'default.png'),
(32, 'G032', 'Muncul belang-belang berwarna kuning\r', 'default.png'),
(33, 'G033', 'Terdapat bintik ? bintik halus kecoklatan pada batang\r', 'default.png'),
(34, 'G034', 'Jaringan klorofil pada kulit cabang berubah warna menjadi cokelat\r', 'default.png'),
(35, 'G035', 'Terdapat bercak ? bercak kecil, kering, timbul dan kasar jika diraba\r', 'default.png'),
(36, 'G036', 'Pusat bercak berwarna coklat tua dilingkari warna cokelat yang lebih muda\r', 'default.png'),
(37, 'G037', 'Cabang atau batang layu\r', 'default.png'),
(38, 'G038', 'Terdapat lendir putih kekuningan \r', 'default.png'),
(39, 'G039', 'Cabang tanaman mengkerut \r', 'default.png'),
(40, 'G040', 'Cabang tanaman busuk berwarna coklat\r', 'default.png'),
(41, 'G041', 'Busuk pada pangkal batang berbatas dengan tanah\r', 'default.png'),
(42, 'G042', 'Cabang atau batang berkerut \r', 'default.png'),
(43, 'G043', 'Terdapat lendir putih kekuningan \r', 'default.png'),
(44, 'G044', 'Cabang atau batang tampak basah\r', 'default.png'),
(45, 'G045', 'Ada bercak berwarna orange yang menyebar tidak beraturan\r', 'default.png'),
(46, 'G046', 'Busuk basah batang muncul bercak kuning\r', 'default.png'),
(47, 'G047', 'Bercak membesar sehingga diameternya mencapai 5 ? 15mm dan dibatasi dengan warna merah yang jelas\r', 'default.png'),
(48, 'G048', 'Batang Berair\r', 'default.png'),
(49, 'G049', 'Busuk kering dibagian tepi batang \r', 'default.png'),
(50, 'G050', 'Busuk basah atau berlendir bagian ujung batang \r', 'default.png'),
(51, 'G051', 'Terdapat bulu putih bagian pangkal batang\r', 'default.png'),
(52, 'G052', 'Batang berwarna kecoklatan\r', 'default.png'),
(58, 'G053', 'Rizki Widya Pratama', 'kutubatok2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hamapenyakit`
--

CREATE TABLE `tb_hamapenyakit` (
  `id_hamapenyakit` int(11) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `kode_hamapenyakit` varchar(128) NOT NULL,
  `hamapenyakit` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hamapenyakit`
--

INSERT INTO `tb_hamapenyakit` (`id_hamapenyakit`, `jenis`, `kode_hamapenyakit`, `hamapenyakit`) VALUES
(1, 'Hama', 'H01', 'Tungau\r'),
(2, 'Hama', 'H02', 'Kutu Putih\r'),
(3, 'Hama', 'H03', 'Kutu Batok\r'),
(4, 'Hama', 'H04', 'Kutu Sisik\r'),
(5, 'Hama', 'H05', 'Bekicot\r'),
(6, 'Hama', 'H06', 'Semut\r'),
(7, 'Hama', 'H07', 'Burung\r'),
(8, 'Penyakit', 'P01', 'Busuk Pangkal Batang\r'),
(9, 'Penyakit', 'P02', 'Busuk Bakteri\r'),
(10, 'Penyakit', 'P03', 'Fusarium\r');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `lokasi` text NOT NULL,
  `id_hamapenyakit` int(11) NOT NULL,
  `prosentase` int(11) NOT NULL,
  `id_solusi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_user`, `jenis`, `lokasi`, `id_hamapenyakit`, `prosentase`, `id_solusi`) VALUES
(1, 9, 'Hylocereus undatus', 'Banyuwangi', 8, 94, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ilmu`
--

CREATE TABLE `tb_ilmu` (
  `id_ilmu` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL DEFAULT 'default.png',
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ilmu`
--

INSERT INTO `tb_ilmu` (`id_ilmu`, `class`, `title`, `gambar`, `p1`, `p2`, `p3`, `date`) VALUES
(7, 1, 'Sistem Pakar (Expert System)', 'expert-system-icon.png', 'Sistem pakar termasuk kedalam kelompok kecerdasan buatan (Artificial Intelligence) yang mempunyai kemampuan khusus untuk menyelesaikan kondisi permasalahan yang ada. Definisi lain juga mengemukakan bahwa sistem pakar ialah hasil dari pengetahuan pakar dan teknik pencarian. Dalam referensi lainnya mengemukakan, bahwa sistem pakar adalah bagian yang terdapat dalam kecerdasan buatan yang diperuntukan dalam pendiagnosaan kerusakan sistem dan sebagai solusi permasalahan.', 'Dalam sistem pakar terdapat 2 jenis penalaran, yaitu Rule Base Reasoning dan Case Base Reasoning. Untuk Rule Base Reasoning merupakan bentuk penalaran yang menggunakan konsep aturan – aturan atau metode yang termasuk dalam Rule Base Reasoning diantaranya : Certainty Factor, Teorema Bayes, Dempster Shafer, Euclidean Probability. Sementara itu untuk Case Base Reasoning adalah bentuk penalaran yang menggunakan teknik kemiripan antara bentuk penalaran yang menggunakan teknik kemiripan antara kasus baru dengan kasus sebelumnya, metode yang termasuk didalamnya adalah K-Nearest Neigbor, Manhatan Distance dan Minkowski Distance. Dalam pengembangannya Sistem Pakar juga mengadopsi logika fuzzy yang dikenal sebagai metode yang digunakan dalam masalah prediksi atau ketidakpastian, ada beberapa metode yang terdapat dalam logika fuzzy, diantaranya : Tsukamoto, Mamdani, Tahani dan Sugeno.', 'Tujuan dari sebuah sistem pakar adalah memindahkan kepakaran dari seorang pakar ke dalam komputer, kemudian ditransfer kepada orang lain yang bukan pakar (non – expert). Proses ini melibatkan empat kegiatan, yaitu Akuisisi pengetahuan (dari pakar atau sumber lainnya), Representasi pengetahuan (ke dalam komputer), Inferensi pengetahuan, Pemindahan pengetahuan ke pengguna.', 1629526825),
(10, 2, 'Buah Naga', 'bermix-studio-FuJKjUONS4c-unsplash.jpg', 'Buah naga termasuk dalam kelompok tanaman kaktus atau famili Cacatae dan subfamili Hylocereanea. Dalam subfamili ini terdapat beberapa genus, sedangkan buah naga termasuk genus Hylocereus. Genus ini terdiri atas sekitar 16 spesies. Dua di antaranya memiliki buah yang komersial, yaitu Hylocereus undatus (berdaging putih) dan Hylocereus costaricensis (berdaging merah). Daerah asal buah ini adalah Meksiko, Amerika Tengah dan Amerika Utara. Tanaman buah naga lebih dikenal sebagai tanaman dari Asia karena dikembangkan secara besar – besaran di Asia seperti Vietnam dan Thailand.\r\nBuah naga mulai dikenal sekitar pertengahan tahun 2000, hasil impor dari Thailand dan mulai dikembangkan di Indonesia pada tahun 2001. Daerah yang mengembangkan buah naga ialah Pasuruan, Jember, Mojokerto,dan Jombang. Agar pertumbuhan perakaran tanaman normal, dianjurkan agar derajat keasaman tanah berada pada kondisi ideal, yaitu pH 6,5 - 7. Curah hujan yang ideal juga akan mempengaruhi pertumbuhan dan perkembangan tanaman, yaitu sekitar 60 mm/bulan atau 720 mm/tahun. Pada curah hujan 600 – 1.300 mm/tahun pun tanaman masih dapat tumbuh. Intensitas cahaya yang disukai oleh tanaman ini berkisar pada 70 – 80 %. Pertumbuhannya pun juga akan lebih baik jika ditanam didataran rendah antara 0 – 350 m dpl, dengan suhu udara antara 26° - 36° C dan kelembapan 70 – 90%.', '', '', 1629527469),
(15, 2, 'Hama dan Penyakit Tanaman Buah Naga', 'hama.jpg', 'Hama merupakan organisme yang merusak tanaman dan secara ekonomik merugikan manusia. Hama yang menyerang tanaman buah naga akan menurunkan kualitas dan kuantitas yang diperoleh. Oleh karena itu diperlukan tindakan yang tepat. Sedangkan, Penyakit pada tumbuhan adalah gangguan yang disebabkan oleh mikroorganisme berupa virus, bakteri, fungi (jamur), protozoa (hewan bersel satu), dan cacing nematoda. Pada tanaman buah naga memang tidak banyak jenis penyakit yang sering menyerang tanaman. Walaupun demikian, bila tanaman menampakkan gejala terinfeksi penyakit, segera diatasi agar tidak menyebar ke tanaman lain.', '', '', 1629527798);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengetahuan`
--

CREATE TABLE `tb_pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `id_hamapenyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengetahuan`
--

INSERT INTO `tb_pengetahuan` (`id_pengetahuan`, `id_hamapenyakit`, `id_gejala`, `probabilitas`) VALUES
(3, 1, 1, 0.8),
(4, 1, 2, 0.01),
(5, 1, 3, 0.01),
(6, 1, 4, 0.01),
(7, 1, 5, 0.01),
(8, 1, 6, 0.65),
(9, 1, 7, 0.01),
(10, 1, 8, 0.01),
(11, 1, 9, 0.01),
(12, 1, 10, 0.01),
(13, 1, 11, 0.01),
(14, 1, 12, 0.01),
(15, 1, 13, 0.01),
(16, 1, 14, 0.01),
(17, 1, 15, 0.01),
(18, 1, 16, 0.01),
(19, 1, 17, 0.01),
(20, 1, 18, 0.01),
(21, 1, 19, 0.01),
(22, 1, 20, 0.01),
(23, 1, 21, 0.01),
(24, 1, 22, 0.01),
(25, 1, 23, 0.01),
(26, 1, 24, 0.01),
(27, 1, 25, 0.01),
(28, 1, 26, 0.01),
(29, 1, 27, 0.01),
(30, 1, 28, 0.01),
(31, 1, 29, 0.01),
(32, 1, 30, 0.01),
(33, 1, 31, 0.65),
(34, 1, 32, 0.6),
(35, 1, 33, 0.8),
(36, 1, 34, 0.8),
(37, 1, 35, 0.4),
(38, 1, 36, 0.6),
(39, 1, 37, 0.01),
(40, 1, 38, 0.01),
(41, 1, 39, 0.01),
(42, 1, 40, 0.01),
(43, 1, 41, 0.01),
(44, 1, 42, 0.01),
(45, 1, 43, 0.01),
(46, 1, 44, 0.01),
(47, 1, 45, 0.01),
(48, 1, 46, 0.01),
(49, 1, 47, 0.01),
(50, 1, 48, 0.01),
(51, 1, 49, 0.01),
(52, 1, 50, 0.01),
(53, 1, 51, 0.01),
(54, 1, 52, 0.01),
(55, 2, 1, 0.01),
(56, 2, 2, 0.8),
(57, 2, 3, 0.01),
(58, 2, 4, 0.01),
(59, 2, 5, 0.01),
(60, 2, 6, 0.01),
(61, 2, 7, 0.01),
(62, 2, 8, 0.01),
(63, 2, 9, 0.01),
(64, 2, 10, 0.01),
(65, 2, 11, 0.01),
(66, 2, 12, 0.01),
(67, 2, 13, 0.01),
(68, 2, 14, 0.01),
(69, 2, 15, 0.01),
(70, 2, 16, 0.01),
(71, 2, 17, 0.01),
(72, 2, 18, 0.01),
(73, 2, 19, 0.01),
(74, 2, 20, 0.01),
(75, 2, 21, 0.01),
(76, 2, 22, 0.01),
(77, 2, 23, 0.4),
(78, 2, 24, 0.6),
(79, 2, 25, 0.6),
(80, 2, 26, 0.6),
(81, 2, 27, 0.8),
(82, 2, 28, 0.6),
(83, 2, 29, 0.6),
(84, 2, 30, 0.8),
(85, 2, 31, 0.01),
(86, 2, 32, 0.01),
(87, 2, 33, 0.01),
(88, 2, 34, 0.01),
(89, 2, 35, 0.01),
(90, 2, 36, 0.01),
(91, 2, 37, 0.01),
(92, 2, 38, 0.01),
(93, 2, 39, 0.01),
(94, 2, 40, 0.01),
(95, 2, 41, 0.01),
(96, 2, 42, 0.01),
(97, 2, 43, 0.01),
(98, 2, 44, 0.01),
(99, 2, 45, 0.01),
(100, 2, 46, 0.01),
(101, 2, 47, 0.01),
(102, 2, 48, 0.01),
(103, 2, 49, 0.01),
(104, 2, 50, 0.01),
(105, 2, 51, 0.01),
(106, 2, 52, 0.01),
(107, 3, 1, 0.8),
(108, 3, 2, 0.01),
(109, 3, 3, 0.01),
(110, 3, 4, 0.01),
(111, 3, 5, 0.01),
(112, 3, 6, 0.8),
(113, 3, 7, 0.01),
(114, 3, 8, 0.8),
(115, 3, 9, 0.01),
(116, 3, 10, 0.01),
(117, 3, 11, 0.01),
(118, 3, 12, 0.01),
(119, 3, 13, 0.01),
(120, 3, 14, 0.01),
(121, 3, 15, 0.01),
(122, 3, 16, 0.01),
(123, 3, 17, 0.01),
(124, 3, 18, 0.01),
(125, 3, 19, 0.01),
(126, 3, 20, 0.01),
(127, 3, 21, 0.01),
(128, 3, 22, 0.01),
(129, 3, 23, 0.01),
(130, 3, 24, 0.01),
(131, 3, 25, 0.01),
(132, 3, 26, 0.01),
(133, 3, 27, 0.01),
(134, 3, 28, 0.01),
(135, 3, 29, 0.01),
(136, 3, 30, 0.01),
(137, 3, 31, 0.01),
(138, 3, 32, 0.01),
(139, 3, 33, 0.01),
(140, 3, 34, 0.01),
(141, 3, 35, 0.01),
(142, 3, 36, 0.01),
(143, 3, 37, 0.01),
(144, 3, 38, 0.01),
(145, 3, 39, 0.01),
(146, 3, 40, 0.01),
(147, 3, 41, 0.01),
(148, 3, 42, 0.01),
(149, 3, 43, 0.01),
(150, 3, 44, 0.01),
(151, 3, 45, 0.01),
(152, 3, 46, 0.01),
(153, 3, 47, 0.01),
(154, 3, 48, 0.01),
(155, 3, 49, 0.01),
(156, 3, 50, 0.01),
(157, 3, 51, 0.01),
(158, 3, 52, 0.01),
(159, 4, 1, 0.8),
(160, 4, 2, 0.01),
(161, 4, 3, 0.01),
(162, 4, 4, 0.01),
(163, 4, 5, 0.01),
(164, 4, 6, 0.01),
(165, 4, 7, 0.01),
(166, 4, 8, 0.01),
(167, 4, 9, 0.01),
(168, 4, 10, 0.01),
(169, 4, 11, 0.8),
(170, 4, 12, 0.8),
(171, 4, 13, 0.01),
(172, 4, 14, 0.01),
(173, 4, 15, 0.01),
(174, 4, 16, 0.01),
(175, 4, 17, 0.01),
(176, 4, 18, 0.01),
(177, 4, 19, 0.01),
(178, 4, 20, 0.01),
(179, 4, 21, 0.01),
(180, 4, 22, 0.01),
(181, 4, 23, 0.01),
(182, 4, 24, 0.01),
(183, 4, 25, 0.01),
(184, 4, 26, 0.01),
(185, 4, 27, 0.01),
(186, 4, 28, 0.01),
(187, 4, 29, 0.01),
(188, 4, 30, 0.01),
(189, 4, 31, 0.01),
(190, 4, 32, 0.01),
(191, 4, 33, 0.01),
(192, 4, 34, 0.01),
(193, 4, 35, 0.01),
(194, 4, 36, 0.01),
(195, 4, 37, 0.01),
(196, 4, 38, 0.01),
(197, 4, 39, 0.01),
(198, 4, 40, 0.01),
(199, 4, 41, 0.01),
(200, 4, 42, 0.01),
(201, 4, 43, 0.01),
(202, 4, 44, 0.01),
(203, 4, 45, 0.01),
(204, 4, 46, 0.01),
(205, 4, 47, 0.01),
(206, 4, 48, 0.01),
(207, 4, 49, 0.01),
(208, 4, 50, 0.01),
(209, 4, 51, 0.01),
(210, 4, 52, 0.01),
(211, 5, 1, 0.8),
(212, 5, 2, 0.01),
(213, 5, 3, 0.01),
(214, 5, 4, 0.01),
(215, 5, 5, 0.01),
(216, 5, 6, 0.01),
(217, 5, 7, 0.01),
(218, 5, 8, 0.01),
(219, 5, 9, 0.01),
(220, 5, 10, 0.01),
(221, 5, 11, 0.01),
(222, 5, 12, 0.01),
(223, 5, 13, 0.6),
(224, 5, 14, 0.8),
(225, 5, 15, 0.65),
(226, 5, 16, 0.6),
(227, 5, 17, 0.4),
(228, 5, 18, 0.4),
(229, 5, 19, 0.01),
(230, 5, 20, 0.01),
(231, 5, 21, 0.01),
(232, 5, 22, 0.01),
(233, 5, 23, 0.01),
(234, 5, 24, 0.01),
(235, 5, 25, 0.01),
(236, 5, 26, 0.01),
(237, 5, 27, 0.01),
(238, 5, 28, 0.01),
(239, 5, 29, 0.01),
(240, 5, 30, 0.01),
(241, 5, 31, 0.01),
(242, 5, 32, 0.01),
(243, 5, 33, 0.01),
(244, 5, 34, 0.01),
(245, 5, 35, 0.01),
(246, 5, 36, 0.01),
(247, 5, 37, 0.01),
(248, 5, 38, 0.01),
(249, 5, 39, 0.01),
(250, 5, 40, 0.01),
(251, 5, 41, 0.01),
(252, 5, 42, 0.01),
(253, 5, 43, 0.01),
(254, 5, 44, 0.01),
(255, 5, 45, 0.01),
(256, 5, 46, 0.01),
(257, 5, 47, 0.01),
(258, 5, 48, 0.01),
(259, 5, 49, 0.01),
(260, 5, 50, 0.01),
(261, 5, 51, 0.01),
(262, 5, 52, 0.01),
(263, 6, 1, 0.01),
(264, 6, 2, 0.01),
(265, 6, 3, 0.8),
(266, 6, 4, 0.6),
(267, 6, 5, 0.6),
(268, 6, 6, 0.6),
(269, 6, 7, 0.6),
(270, 6, 8, 0.8),
(271, 6, 9, 0.8),
(272, 6, 10, 0.6),
(273, 6, 11, 0.01),
(274, 6, 12, 0.01),
(275, 6, 13, 0.01),
(276, 6, 14, 0.01),
(277, 6, 15, 0.01),
(278, 6, 16, 0.01),
(279, 6, 17, 0.7),
(280, 6, 18, 0.01),
(281, 6, 19, 0.01),
(282, 6, 20, 0.01),
(283, 6, 21, 0.01),
(284, 6, 22, 0.01),
(285, 6, 23, 0.01),
(286, 6, 24, 0.01),
(287, 6, 25, 0.01),
(288, 6, 26, 0.01),
(289, 6, 27, 0.01),
(290, 6, 28, 0.01),
(291, 6, 29, 0.01),
(292, 6, 30, 0.01),
(293, 6, 31, 0.01),
(294, 6, 32, 0.01),
(295, 6, 33, 0.01),
(296, 6, 34, 0.01),
(297, 6, 35, 0.01),
(298, 6, 36, 0.01),
(299, 6, 37, 0.01),
(300, 6, 38, 0.01),
(301, 6, 39, 0.01),
(302, 6, 40, 0.01),
(303, 6, 41, 0.01),
(304, 6, 42, 0.01),
(305, 6, 43, 0.01),
(306, 6, 44, 0.01),
(307, 6, 45, 0.01),
(308, 6, 46, 0.01),
(309, 6, 47, 0.01),
(310, 6, 48, 0.01),
(311, 6, 49, 0.01),
(312, 6, 50, 0.01),
(313, 6, 51, 0.01),
(314, 6, 52, 0.01),
(315, 7, 1, 0.01),
(316, 7, 2, 0.8),
(317, 7, 3, 0.01),
(318, 7, 4, 0.01),
(319, 7, 5, 0.01),
(320, 7, 6, 0.01),
(321, 7, 7, 0.01),
(322, 7, 8, 0.01),
(323, 7, 9, 0.01),
(324, 7, 10, 0.01),
(325, 7, 11, 0.01),
(326, 7, 12, 0.01),
(327, 7, 13, 0.01),
(328, 7, 14, 0.01),
(329, 7, 15, 0.01),
(330, 7, 16, 0.01),
(331, 7, 17, 0.01),
(332, 7, 18, 0.01),
(333, 7, 19, 0.5),
(334, 7, 20, 0.45),
(335, 7, 21, 0.6),
(336, 7, 22, 0.8),
(337, 7, 23, 0.01),
(338, 7, 24, 0.01),
(339, 7, 25, 0.01),
(340, 7, 26, 0.01),
(341, 7, 27, 0.01),
(342, 7, 28, 0.01),
(343, 7, 29, 0.01),
(344, 7, 30, 0.01),
(345, 7, 31, 0.01),
(346, 7, 32, 0.01),
(347, 7, 33, 0.01),
(348, 7, 34, 0.01),
(349, 7, 35, 0.01),
(350, 7, 36, 0.01),
(351, 7, 37, 0.01),
(352, 7, 38, 0.01),
(353, 7, 39, 0.01),
(354, 7, 40, 0.01),
(355, 7, 41, 0.01),
(356, 7, 42, 0.01),
(357, 7, 43, 0.01),
(358, 7, 44, 0.01),
(359, 7, 45, 0.01),
(360, 7, 46, 0.01),
(361, 7, 47, 0.01),
(362, 7, 48, 0.01),
(363, 7, 49, 0.01),
(364, 7, 50, 0.01),
(365, 7, 51, 0.01),
(366, 7, 52, 0.01),
(367, 8, 1, 0.8),
(368, 8, 2, 0.01),
(369, 8, 3, 0.01),
(370, 8, 4, 0.01),
(371, 8, 5, 0.01),
(372, 8, 6, 0.01),
(373, 8, 7, 0.01),
(374, 8, 8, 0.01),
(375, 8, 9, 0.01),
(376, 8, 10, 0.01),
(377, 8, 11, 0.01),
(378, 8, 12, 0.01),
(379, 8, 13, 0.01),
(380, 8, 14, 0.01),
(381, 8, 15, 0.01),
(382, 8, 16, 0.01),
(383, 8, 17, 0.01),
(384, 8, 18, 0.01),
(385, 8, 19, 0.01),
(386, 8, 20, 0.01),
(387, 8, 21, 0.01),
(388, 8, 22, 0.01),
(389, 8, 23, 0.01),
(390, 8, 24, 0.01),
(391, 8, 25, 0.01),
(392, 8, 26, 0.01),
(393, 8, 27, 0.01),
(394, 8, 28, 0.01),
(395, 8, 29, 0.01),
(396, 8, 30, 0.01),
(397, 8, 31, 0.8),
(398, 8, 32, 0.01),
(399, 8, 33, 0.01),
(400, 8, 34, 0.01),
(401, 8, 35, 0.01),
(402, 8, 36, 0.01),
(403, 8, 37, 0.01),
(404, 8, 38, 0.01),
(405, 8, 39, 0.01),
(406, 8, 40, 0.01),
(407, 8, 41, 0.7),
(408, 8, 42, 0.01),
(409, 8, 43, 0.01),
(410, 8, 44, 0.01),
(411, 8, 45, 0.65),
(412, 8, 46, 0.4),
(413, 8, 47, 0.6),
(414, 8, 48, 0.8),
(415, 8, 49, 0.8),
(416, 8, 50, 0.7),
(417, 8, 51, 0.65),
(418, 8, 52, 0.45),
(419, 9, 1, 0.8),
(420, 9, 2, 0.01),
(421, 9, 3, 0.01),
(422, 9, 4, 0.01),
(423, 9, 5, 0.01),
(424, 9, 6, 0.8),
(425, 9, 7, 0.7),
(426, 9, 8, 0.01),
(427, 9, 9, 0.01),
(428, 9, 10, 0.01),
(429, 9, 11, 0.01),
(430, 9, 12, 0.01),
(431, 9, 13, 0.01),
(432, 9, 14, 0.01),
(433, 9, 15, 0.01),
(434, 9, 16, 0.01),
(435, 9, 17, 0.01),
(436, 9, 18, 0.01),
(437, 9, 19, 0.01),
(438, 9, 20, 0.01),
(439, 9, 21, 0.01),
(440, 9, 22, 0.01),
(441, 9, 23, 0.01),
(442, 9, 24, 0.01),
(443, 9, 25, 0.01),
(444, 9, 26, 0.01),
(445, 9, 27, 0.01),
(446, 9, 28, 0.01),
(447, 9, 29, 0.01),
(448, 9, 30, 0.01),
(449, 9, 31, 0.01),
(450, 9, 32, 0.01),
(451, 9, 33, 0.01),
(452, 9, 34, 0.01),
(453, 9, 35, 0.01),
(454, 9, 36, 0.01),
(455, 9, 37, 0.6),
(456, 9, 38, 0.01),
(457, 9, 39, 0.01),
(458, 9, 40, 0.01),
(459, 9, 41, 0.8),
(460, 9, 42, 0.4),
(461, 9, 43, 0.7),
(462, 9, 44, 0.8),
(463, 9, 45, 0.65),
(464, 9, 46, 0.45),
(465, 9, 47, 0.6),
(466, 9, 48, 0.8),
(467, 9, 49, 0.01),
(468, 9, 50, 0.01),
(469, 9, 51, 0.01),
(470, 9, 52, 0.01),
(471, 10, 1, 0.8),
(472, 10, 2, 0.01),
(473, 10, 3, 0.01),
(474, 10, 4, 0.01),
(475, 10, 5, 0.01),
(476, 10, 6, 0.6),
(477, 10, 7, 0.7),
(478, 10, 8, 0.65),
(479, 10, 9, 0.01),
(480, 10, 10, 0.01),
(481, 10, 11, 0.01),
(482, 10, 12, 0.01),
(483, 10, 13, 0.01),
(484, 10, 14, 0.01),
(485, 10, 15, 0.01),
(486, 10, 16, 0.01),
(487, 10, 17, 0.01),
(488, 10, 18, 0.01),
(489, 10, 19, 0.01),
(490, 10, 20, 0.01),
(491, 10, 21, 0.01),
(492, 10, 22, 0.01),
(493, 10, 23, 0.01),
(494, 10, 24, 0.01),
(495, 10, 25, 0.01),
(496, 10, 26, 0.01),
(497, 10, 27, 0.01),
(498, 10, 28, 0.01),
(499, 10, 29, 0.01),
(500, 10, 30, 0.01),
(501, 10, 31, 0.01),
(502, 10, 32, 0.01),
(503, 10, 33, 0.01),
(504, 10, 34, 0.01),
(505, 10, 35, 0.01),
(506, 10, 36, 0.01),
(507, 10, 37, 0.45),
(508, 10, 38, 0.8),
(509, 10, 39, 0.6),
(510, 10, 40, 0.7),
(511, 10, 41, 0.01),
(512, 10, 42, 0.01),
(513, 10, 43, 0.01),
(514, 10, 44, 0.01),
(515, 10, 45, 0.01),
(516, 10, 46, 0.01),
(517, 10, 47, 0.01),
(518, 10, 48, 0.01),
(519, 10, 49, 0.01),
(520, 10, 50, 0.01),
(521, 10, 51, 0.01),
(522, 10, 52, 0.01);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi1` int(11) NOT NULL,
  `opsi2` int(11) NOT NULL,
  `opsi3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `pertanyaan`, `opsi1`, `opsi2`, `opsi3`) VALUES
(1, 'Gejala mana yang muncul atau ditemukan?', 4, 5, 6),
(2, 'Gejala mana yang muncul atau ditemukan?', 7, 8, 9),
(3, 'Gejala mana yang muncul atau ditemukan?', 10, 11, 12),
(4, 'Gejala mana yang muncul atau ditemukan?', 13, 14, 15),
(5, 'Gejala mana yang muncul atau ditemukan?', 16, 17, 18),
(6, 'Gejala mana yang muncul atau ditemukan?', 19, 20, 21),
(7, 'Gejala mana yang muncul atau ditemukan?', 22, 23, 24),
(8, 'Gejala mana yang muncul atau ditemukan?', 25, 26, 27),
(9, 'Gejala mana yang muncul atau ditemukan?', 28, 29, 30),
(10, 'Gejala mana yang muncul atau ditemukan?', 31, 32, 33),
(11, 'Gejala mana yang muncul atau ditemukan?', 34, 35, 36),
(12, 'Gejala mana yang muncul atau ditemukan?', 37, 38, 39),
(13, 'Gejala mana yang muncul atau ditemukan?', 40, 41, 42),
(14, 'Gejala mana yang muncul atau ditemukan?', 43, 44, 45),
(15, 'Gejala mana yang muncul atau ditemukan?', 46, 47, 48),
(16, 'Gejala mana yang muncul atau ditemukan?', 49, 50, 5),
(17, 'Gejala mana yang muncul atau ditemukan?', 51, 52, 4),
(18, 'Dimana gejala - gejala muncul atau ditemukan?', 1, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id_solusi` int(11) NOT NULL,
  `kode_solusi` varchar(128) NOT NULL,
  `hamapenyakit` varchar(128) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_solusi`
--

INSERT INTO `tb_solusi` (`id_solusi`, `kode_solusi`, `hamapenyakit`, `solusi`) VALUES
(1, 'S01', 'Tungau', 'Menjaga kebersihan kebun, Menyemprotkan Omite berkonsentrasi 1 - 2 g/liter air. Penyemprotan Omite dilakukan tujuh hari sekali sebanyak 2 - 3 kali penyemprotan. Penyemprotan dilakukan pada bagian cabang atau batang\r\n'),
(2, 'S02', 'Kutu Putih', 'Menyemprotkan Kanon berkonsentrasi 1 - 2 cc/liter air. Penyemprotan dilakukan tujuh hari sekali dengan memperhatikan jumlah tanaman yang terserang, umumnya hanya 2 kali pengulangan dan dilakukan terutama di sela - sela tanaman yang ternaungi cabang lainnya\r\n'),
(3, 'S03', 'Kutu Batok', 'Menggunakan insektisida sistematik (Kanon) tujuh hari sekali. Dengan melihat keadaan tanaman yang terserang, penyemprotan Kanon umumnya dilakukan dua kali pada seluruh permukaan cabang merata\r\n'),
(4, 'S04', 'Kutu Sisik', 'Menyemprotkan Kanon 1 - 2 cc/liter air tujuh hari sekali. Penyemprotan dilakukan dua kali secara merata pada bagian dalam dan di sela - sela sulur tanaman\r\n'),
(5, 'S05', 'Bekicot', 'Sanitasi kebun. Kebersihan kebun harus diperhatikan, terutama keberadaan gulma harus disingkirkan\r\n'),
(6, 'S06', 'Semut', 'Penyemprotan dengan Gusadrin 2 cc/liter air\r'),
(7, 'S07', 'Burung', 'Membungkus buah naga menggunakan plastik kresek'),
(8, 'S08', 'Busuk Pangkal Batang', 'Penyemprotan Benlate 2 g/liter air atau Ridomil 2 g/liter air 14 hari sekali selama sebulan atau hanya dua kali penyemprotan. Bila ada gejala kekuningan pada pangkal batang maka bagian yang disemprot adalah seluruh cabang atau batang, diutamakan pada pangkal batang. Selain penyemprotan pemberian Benlate atau Ridomil dapat dilakukan dengan cara kocoran pada pangkal batang sebanyak 100 - 150 cc. Untuk pencegahan, sebaiknya pada awal penanaman hingga tanaman berumur 30 hari dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik di daerah pangkal batang hingga setinggi 40 cm. Konsentrasi larutan Atonik adalah 10 cc/ 15 liter air, sedangkan fungisida berupa Dhitane 30 g/15 liter air. Selain itu, lahan juga harus dalam keadaan bersih\r\n'),
(9, 'S09', 'Busuk Bakteri', 'Mencabut tanaman yang sakit lalu lubang bekas tanaman tersebut diberi Basamid dengan dosis 0,5 - 1g dalam bentuk serbuk. Seminggu kemudian, lubang tersebut ditanami bibit baru\r\n'),
(10, 'S10', 'Fusarium', 'Penyemprotan dengan Benlate berkonsentrasi 2 g/liter air tujuh hari sekali hingga tiga kali penyemprotan. Penyemprotan dilakukan pada bagian cabang atau batang\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `foto_user` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `foto_user`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(8, 'Rizki Widya', 'rizkiw8778@gmail.com', 'administraror.png', '$2y$10$Q7LlWXaF1.6tlkdoTC5wbuKCuHc.ydfPq6OvYur8z8TYnAtfwQdVW', 1, 1, 1619068190),
(9, 'Silviana Widya Lestari', 'silvianawidya46@gmail.com', 'farmer.png', '$2y$10$kTW1k50WN/oy.AHsNAtetellPXavPlUSOaut4gXO6jJ5MPxmLlggK', 3, 1, 1627234284),
(13, 'Febrero Araya', 'febrero.fa@gmail.com', 'expert.png', '$2y$10$dChWlJcTGw4i2A.7qiPbbeTHOQMi1LmCAeyKZ/qvxb8mSVyJmB5vW', 2, 1, 1629477638);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_final`
--

CREATE TABLE `tmp_final` (
  `id_final` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_hamapenyakit` int(11) NOT NULL,
  `probabilitas` float NOT NULL,
  `hasil_probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `id_user` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_random`
--

CREATE TABLE `tmp_random` (
  `id_random` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi1` int(11) NOT NULL,
  `opsi2` int(11) NOT NULL,
  `opsi3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tmp_random`
--

INSERT INTO `tmp_random` (`id_random`, `id_user`, `id_pertanyaan`, `pertanyaan`, `opsi1`, `opsi2`, `opsi3`) VALUES
(81, 9, 18, 'Dimana gejala - gejala muncul atau ditemukan?', 1, 2, 3),
(82, 9, 10, 'Gejala mana yang muncul atau ditemukan?', 31, 32, 33),
(83, 9, 7, 'Gejala mana yang muncul atau ditemukan?', 22, 23, 24),
(84, 9, 16, 'Gejala mana yang muncul atau ditemukan?', 49, 50, 5),
(85, 9, 8, 'Gejala mana yang muncul atau ditemukan?', 25, 26, 27),
(86, 9, 11, 'Gejala mana yang muncul atau ditemukan?', 34, 35, 36),
(87, 9, 2, 'Gejala mana yang muncul atau ditemukan?', 7, 8, 9),
(88, 9, 15, 'Gejala mana yang muncul atau ditemukan?', 46, 47, 48),
(89, 9, 13, 'Gejala mana yang muncul atau ditemukan?', 40, 41, 42),
(90, 9, 9, 'Gejala mana yang muncul atau ditemukan?', 28, 29, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 1, 2),
(5, 2, 2),
(15, 1, 15),
(16, 2, 15),
(18, 1, 16),
(19, 2, 16),
(21, 2, 17),
(24, 3, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'User'),
(15, 'Data'),
(16, 'Pakar'),
(17, 'Dashboard'),
(18, 'Konsultasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pakar'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'backend/administrator/home', '	\r\nfas fa-fw fa-tachometer-alt\r\n', 1),
(3, 1, 'Manajemen Menu', 'backend/administrator/home/manage', 'fas fa-fw fa-tasks', 1),
(4, 1, 'Manajemen Sub Menu', 'backend/administrator/home/submenu', 'fas fa-fw fa-tasks', 1),
(6, 1, 'Manajemen Hak akses', 'backend/administrator/home/role', 'fas fa-fw fa-wrench', 1),
(10, 15, 'Data Hama dan penyakit', 'backend/data/hamapenyakit', 'fas fa-fw fa-bug', 1),
(13, 15, 'Data Gejala', 'backend/data/gejala', 'fas fa-fw fa-stethoscope', 1),
(14, 15, 'Data Probabilitas', 'backend/data/probabilitas', 'fas fa-fw fa-file-medical-alt', 1),
(15, 15, 'Data Solusi', 'backend/data/solusi', 'fas fa-fw fa-notes-medical', 1),
(20, 15, 'Data User', 'backend/data/user', 'fas fa-fw fa-address-card', 1),
(22, 16, 'Hasil Diagnosa', 'backend/pakar/pakar', 'fas fa-fw fa-file-medical-alt', 1),
(23, 16, 'Data Pertanyaan', 'backend/pakar/pertanyaan', 'fas fa-fw fa-clipboard', 1),
(25, 2, 'Profil', 'backend/user/profile', 'fas fa-fw fa-user', 1),
(26, 17, 'Dashboard', 'backend/dashboard/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(27, 1, 'Manajemen Pengetahuan', 'backend/administrator/home/knowledge', 'fas fa-fw fa-book-open', 1),
(28, 18, 'Diagnosa Hama dan Penyakit', 'frontend/konsultasi/konsultasi', 'fas fa-fw fa-stethoscope', 1),
(29, 18, 'Hasil Diagnosa', 'frontend/konsultasi/konsultasi/hasil', 'fas fa-fw fa-file-medical-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tb_hamapenyakit`
--
ALTER TABLE `tb_hamapenyakit`
  ADD PRIMARY KEY (`id_hamapenyakit`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_hamapenyakit` (`id_hamapenyakit`),
  ADD KEY `id_solusi` (`id_solusi`);

--
-- Indeks untuk tabel `tb_ilmu`
--
ALTER TABLE `tb_ilmu`
  ADD PRIMARY KEY (`id_ilmu`);

--
-- Indeks untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`),
  ADD KEY `id_hamapenyakit` (`id_hamapenyakit`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_hamapenyakit_2` (`id_hamapenyakit`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tmp_final`
--
ALTER TABLE `tmp_final`
  ADD PRIMARY KEY (`id_final`);

--
-- Indeks untuk tabel `tmp_random`
--
ALTER TABLE `tmp_random`
  ADD PRIMARY KEY (`id_random`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `tb_hamapenyakit`
--
ALTER TABLE `tb_hamapenyakit`
  MODIFY `id_hamapenyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_ilmu`
--
ALTER TABLE `tb_ilmu`
  MODIFY `id_ilmu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=527;

--
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `id_solusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tmp_random`
--
ALTER TABLE `tmp_random`
  MODIFY `id_random` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
