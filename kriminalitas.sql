-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 07:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kriminalitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pencurian`
--

CREATE TABLE `tb_pencurian` (
  `id` int(10) NOT NULL,
  `jalan` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pencurian`
--

INSERT INTO `tb_pencurian` (`id`, `jalan`, `latitude`, `longitude`, `kategori`, `foto`) VALUES
(1, 'Berdikari', '0.562272', '101.426378', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611465/Jl._Berdikari_gxsq0z.jpg'),
(2, 'Inti Sari', '0.567706', '101.426606', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611481/Jl._Inti_Sari_cynh5a.jpg'),
(3, 'Umban Sari', '0.569044', '101.423467', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611511/Jl._Umban_Sari_mib9wf.jpg'),
(4, 'Patria Sari', '0.572956', '101.423217', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611504/Jl._Patria_Sari_l1uxif.jpg'),
(5, 'Kartika Indah', '0.566114', '101.413153', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611481/Jl._Kartika_Indah_g5wl2g.jpg'),
(6, 'Kartika Sari', '0.566458', '101.413778', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611480/jl._Kembang_Sari_u6ohoo.jpg'),
(7, 'Palas Mekar', '0.578503', '101.405903', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611495/Jl._Palas_Mekar_z9nrxu.jpg'),
(8, 'Bina Widya', '0.476353', '101.380822', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611470/Jl._Bina_Widya_wtdepf.jpg'),
(9, 'Gurindam 12', '0.579836', '101.406275', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611474/Jl._Gurindam_12_dqmzfv.jpg'),
(10, 'Sri Mersing', '0.576722', '101.405156', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611507/Jl._Sri_Mersing_qdicww.jpg'),
(11, 'Padat Karya', '0.579047', '101.412331', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611497/Jl._Padat_Karya_wmbddp.jpg'),
(12, 'Kota Baru', '0.575731', '101.402594', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611488/Jl._Kota_Baru_mi6b5e.jpg'),
(13, 'Taman Karya', '0.451353', '101.377217', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611510/Jl._Taman_Karya_onjcqm.jpg'),
(14, 'Cipta Karya', '0.450681', '101.391189', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611468/Jl._Cipta_Karya_uwqs4n.jpg'),
(15, 'Balam Sakti', '0.467586', '101.383325', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611467/Jl._Balam_Sakti_vl5cot.jpg'),
(16, 'Bangau Sakti', '0.477450', '101.375339', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611464/Jl._Bangau_Sakti_rb23xt.jpg'),
(17, 'Merpati Sakti', '0.468842', '101.372106', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611492/Jl._Merpati_Sakti_ru1zyl.jpg'),
(18, 'Pahlawan Kerja', '0.452392', '101.448825', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611496/Jl._Pahlawan_Kerja_ajniyy.jpg'),
(19, 'Gading ', '0.483369', '101.506328', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611470/Jl._Gading_rwxicj.jpg'),
(20, 'Karya', '0.443200', '101.457283', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611483/Jl._Karya_eo2d9j.jpg'),
(21, 'Tawas Raya', '0.564736', '101.442581', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611511/Jl._Tawas_Raya_kyccnq.jpg'),
(22, 'Pari Induk', '0.564736', '101.443179', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611504/Jl._Pari_Induk_oc3yfv.jpg'),
(23, 'Gurami Raya', '0.564732', '101.442443', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611471/Jl._Gurami_Raya_eueury.jpg'),
(24, 'Bandeng 2', '0.565370', '101.442249', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611464/Jl._Bandeng_2_xkqrwa.jpg'),
(25, 'Udang 2', '0.565853', '101.440925', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611512/Jl._Udang_2_okl2qu.jpg'),
(26, 'Mujair 5', '0.564359', '101.441773', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611496/Jl._Mujair_5_i3bhdh.jpg'),
(27, 'Bandeng Raya', '0.565176', '101.441617', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611464/Jl._Bandeng_Raya_ftvysn.jpg'),
(28, 'Pari 1', '0.564587', '101.443994', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611499/Jl._Pari_1_g8ebag.jpg'),
(29, 'Mas Raya', '0.564216', '101.443804', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611491/Jl._Mas_Raya_p2ihqz.jpg'),
(30, 'Kurnia 3', '0.565266', '101.444366', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611489/Jl._Kurnia_3_msdrfw.jpg'),
(31, 'Mekar Sari', '0.493766', '101.458976', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611494/Jl._Mekar_Sari_pgp45y.jpg'),
(32, 'Tiga Sari', '0.492906', '101.459257', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611508/Jl._Tiga_Sari_ho3b3l.jpg'),
(33, 'Rukit Sari', '0.492971', '101.459158', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611504/Jl._Rukit_Sari_duax8v.jpg'),
(34, 'Kembang Sari', '0.492936', '101.459404', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611480/jl._Kembang_Sari_u6ohoo.jpg'),
(35, 'Kebun Sari', '0.492773', '101.460693', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611482/Jl._Kebun_Sari_sceimp.jpg'),
(36, 'Permata Sari', '0.491810', '101.459338', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611504/Jl._Permata_Sari_spt0b0.jpg'),
(37, 'Tj Sari', '0.494353', '101.457093', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611508/Jl._Tj_Sari_jailv5.jpg'),
(38, 'Legasari', '0.494691', '101.459437', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611489/Jl._Legasari_uk86er.jpg'),
(39, 'Pandan Sari', '0.492626', '101.460230', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611499/Jl._Pandan_Sari_pn789v.jpg'),
(40, 'Wonosari', '0.493993', '101.457955', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611582/GIS/Jl._Wonosari_gacdh1.jpg'),
(41, 'Kesadaran', '0.4755113', '101.480491', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611486/Jl._Kesadaran_ncmofn.jpg'),
(42, 'Firdaus', '0.4977008', '101.471383', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611476/Jl._Firdaus_n8kqwb.jpg'),
(43, 'Bunga Raya', '0.4906041', '101.463387', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611466/Jl._Bunga_Raya_h9fitu.jpg'),
(44, 'Surabaya', '0.4969886', '101.459244', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611508/Jl._Surabaya_s1nclr.jpg'),
(45, 'Jati', '0.5002866', '101.456313', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611476/Jl._Jati_m1ozvq.jpg'),
(46, 'Brigjen Katamso', '0.5031672', '101.456985', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611468/Jl._Brigjen_Katamso_pqnpob.jpg'),
(47, 'Sejahtera', '0.5056506', '101.460469', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611505/Jl._Sejahtera_h9jxjl.jpg'),
(48, 'Emasari', '0.4902885', '101.460721', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611476/Jl._Emasari_o2tlz8.jpg'),
(49, 'Tunas Jaya', '0.4976156', '101.466813', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611512/Jl._Tunas_Jaya_zk6r1i.jpg'),
(50, 'Kopi', '0.4991307', '101.475462', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611489/Jl._Kopi_h6v8is.jpg'),
(51, 'W R Supratman Ujung', '0.5145940', '101.456869', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611513/Jl._W.R.Supratman_Ujung_dybzcn.jpg'),
(52, 'Kencana', '0.5061145', '101.472837', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611482/Jl._Kencana_frikbu.jpg'),
(53, 'Lembah Raya', '0.5100026', '101.468525', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611490/Jl._Lembah_Raya_wdx4ux.jpg'),
(54, 'Datuk Laksamana', '0.5136082', '101.466599', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611466/Jl._Datuk_Laksamana_k5uly0.jpg'),
(55, 'Hang Tuah Ujung', '0.5181013', '101.483875', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611476/Jl._Hangtuah_Ujung_bs2zhs.jpg'),
(56, 'Abdul Muis', '0.5094414', '101.458826', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611465/Jl._Abdul_Muis_semvlh.jpg'),
(57, 'Hang Jebat', '0.5249729', '101.461371', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611470/Jl._Hang_Jebat_vvvwe2.jpg'),
(58, 'M Husni Thamrin VII', '0.5170969', '101.463509', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611496/Jl._Moh._Husni_Thamrin_VII_a3clkt.jpg'),
(59, 'Cemara', '0.5139210', '101.463787', 'Sangat Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611468/Jl._Cemara_xmi0ji.jpg'),
(60, 'Pattimura', '0.5103028', '101.455243', 'Rawan', 'https://res.cloudinary.com/du5owvahb/image/upload/v1669611505/Jl._Pattimura_tqehlr.jpg'),
(70, 'Tegalsari', '0.565200', '101.425434', 'Sangat Rawan', 'http://localhost/kriminal2/assets/images/jalan/tegalsari.png'),
(74, 'bandara', '0.464668', '101.449705', 'Sangat Rawan', 'http://localhost/kriminal2/assets/images/jalan/bandara.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'pizil', 'pizil@gmail.com', 'pizil123'),
(4, 'fizhil', 'fizhilmp@gmail.com', 'hantu'),
(5, 'admin', 'admin1@gmail.com', '123'),
(6, 'admin2', 'admin2@gmail.com', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pencurian`
--
ALTER TABLE `tb_pencurian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pencurian`
--
ALTER TABLE `tb_pencurian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
