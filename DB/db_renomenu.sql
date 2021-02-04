-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2021 at 03:55 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_renomenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url_banner` varchar(150) NOT NULL,
  `status_appears` int(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(10) NOT NULL,
  `last_modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modified_by` varchar(10) NOT NULL,
  `is_deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `url_banner`, `status_appears`, `created_date`, `created_by`, `last_modified_date`, `last_modified_by`, `is_deleted`) VALUES
(1, 'banner1', '1612246312_banner-event.png', 'http://localhost/phpmyadmin/tbl_structure.php?server=1&db=db_renomenu&table=banner&pos=0', 0, '0000-00-00 00:00:00', '1', '0000-00-00 00:00:00', '1', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `header_image` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `last_modified_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2) ON UPDATE CURRENT_TIMESTAMP(2),
  `last_modified_by` int(11) NOT NULL,
  `is_deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `header_image`, `content`, `created_by`, `created_date`, `last_modified_date`, `last_modified_by`, `is_deleted`) VALUES
(1, 'blog', '1612248105_banner-event.png', '<p>coba ini isi</p><p><img src=\"http://localhost/renomenu_012021/assets/images/upload/blog/content_image/brownies1@3x.png\" xss=removed></p>', 1, '2021-02-02 06:41:45.25', '2021-02-04 05:18:38.02', 1, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `blog_keyword`
--

CREATE TABLE `blog_keyword` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_keyword`
--

INSERT INTO `blog_keyword` (`id`, `blog_id`, `keyword_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(1) NOT NULL,
  `name` varchar(40) NOT NULL,
  `created_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `created_by` varchar(10) DEFAULT NULL,
  `last_modified_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2) ON UPDATE CURRENT_TIMESTAMP(2),
  `last_modified_by` varchar(10) NOT NULL,
  `is_deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_date`, `created_by`, `last_modified_date`, `last_modified_by`, `is_deleted`) VALUES
(1, 'category1', '2021-02-02 08:37:04.68', '1', '2021-02-02 08:43:42.36', '1', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `created_by` varchar(10) NOT NULL,
  `last_modified_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2) ON UPDATE CURRENT_TIMESTAMP(2),
  `last_modified_by` varchar(10) NOT NULL,
  `is_deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`id`, `name`, `created_date`, `created_by`, `last_modified_date`, `last_modified_by`, `is_deleted`) VALUES
(1, 'tags1', '2021-02-02 06:37:24.43', '1', '2021-02-02 06:37:24.43', '1', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(4) NOT NULL,
  `question` text NOT NULL,
  `answer_desc` text NOT NULL,
  `category_id` int(2) NOT NULL,
  `created_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `created_by` varchar(10) NOT NULL,
  `last_modified_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2) ON UPDATE CURRENT_TIMESTAMP(2),
  `last_modified_by` varchar(10) NOT NULL,
  `is_deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer_desc`, `category_id`, `created_date`, `created_by`, `last_modified_date`, `last_modified_by`, `is_deleted`) VALUES
(1, 'Apa itu Renomeet?', '<p>Renomeet adalah aplikasi video conference real-time untuk virtual meeting.\nMemiliki desain yang simple dan mudah dalam membuat atau join meeting, tetapi\ntetap memprioritaskan keamanan meeting.<br></p>', 1, '2020-11-16 07:21:41.60', '1', '2020-11-17 04:46:18.87', '1', 'n'),
(2, 'Bagaimana cara menginstall Renomeet pada Android?', '<p>Untuk menginstall Renomeet, klik aplikasi Playstore. saat ini kriterian Android yang\ndapat diinstall renomeet adalah minimal Android 5.0 dan maksimal Android 10.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603173253_Screenshot_1.png\" style=\"width: 25%;\"></p><p>Ketik <b>Renomeet </b>dalam <b>kolom pencarian</b>. Kemudian pilih aplikasi <b>Renomeet&nbsp;</b><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603173354_Screenshot_2.png\" style=\"width: 32.4843px; height: 33.0625px;\">.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603173448_Screenshot_3.png\" style=\"width: 25%;\"></p><p>Klik <b>install </b>dan tunggu sampai instalasi selesai. Setelah itu, klik <b>Open</b>.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603173538_Screenshot_4.png\" style=\"width: 25%;\"></p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603173551_Screenshot_5.png\" style=\"width: 25%;\">&nbsp; &nbsp;&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603173606_Screenshot_6.png\" style=\"width: 25%;\"></p><p>Akan tampil aplikasi Renomeet.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603173760_Screenshot_7.png\" style=\"width: 25%;\">&nbsp; &nbsp;&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603173775_Screenshot_8.png\" style=\"width: 25%;\"></p><p><br></p>', 1, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(3, 'Bagaimana cara bergabung dengan meeting menggunakan Android?', '<p>Untuk masuk ke ruang meeting, diperlukan link ruang meeting yang dibuat oleh\nmoderator. User dapat<b> klik atau menyalin link</b> tersebut ke Google Chrome.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603175082_Screenshot_9.png\" style=\"width: 25%;\"></p><p>Link akan langsung mengarahkan layar untuk masuk ke room meeting. Jika\n<b>belum mempunyai aplikasi Renomeet, peserta dapat klik Download Android\nApp.</b> Jika peserta <b>sudah memiliki aplikasi Renomeet, maka dapat langsung klik\nJoin Room.</b></p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603175185_Screenshot_10.png\" style=\"width: 25%;\"></p><p>Peserta meeting akan langsung diarahkan ke aplikasi renomeet dengan Meeting\nID sudah terisi. User diminta untuk mengisi <b>Display Name</b>. Jika meeting\nmenggunakan password, maka user juga diminta untuk memasukan <b>password\nmeeting</b>. Jika sudah mengisi data yang dibutuhkan, klik tombol <b>Join Room</b> untuk\nmasuk kedalam ruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603175370_Screenshot_11.png\" style=\"width: 25%;\">&nbsp; &nbsp;&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603175380_Screenshot_12.png\" style=\"width: 25%;\"></p><p>Setelah peserta klik tombol Join Room, maka peserta akan diarahkan masuk ke\ndalam room.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603175435_Screenshot_13.png\" style=\"width: 800px;\"></p><p><br></p>', 2, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(4, 'Bagaimana bergabung dengan meeting menggunakan IOS?\n', '<p>Untuk masuk ke ruang meeting, diperlukan link ruang meeting yang dibuat oleh\nmoderator. User dapat <b>klik atau menyalin link</b> tersebut ke browser <b>Safari</b>.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603176140_Screenshot_14.png\" style=\"width: 25%;\"></p><p>Akan muncul layar seperti dibawah ini. Untuk masuk ke ruang meeting, peserta\ndapat mengganti ke dalam mode desktop dengan cara klik <b>tombol </b><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603176748_Screenshot_15.png\" style=\"width: 40.2478px; height: 35.7188px;\">pada\npojok kiri atas browser. Akan tampil pop up menu. Klik menu <b>Minta Situs Web\nDesktop</b>. Tampil layar untuk masuk ke ruang meeting. Klik tombol <b>Join Room</b> (<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603176794_Screenshot_16.png\" style=\"width: 116.314px; height: 41px;\">\n) untuk masuk ke dalam room.</p><h3><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603176956_Screenshot_17.png\" style=\"width: 800px;\"></h3><p>Link Isi <b>display name</b> pada layar berikut. Setelah isi display name, maka peserta\nakan masuk ke dalam ruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603177029_Screenshot_18.png\" style=\"width: 529.649px; height: 551px;\"></p><p><br></p>', 2, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(5, 'Bagaimana cara menyalakan/mematikan microphone dan camera pada platform mobile?\n', '<p>Partisipan dapat mematikan dan menyalakan camera dan microphone\nmenggunakan tombol <b>mic</b> (<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603177270_Screenshot_19.png\" style=\"width: 37.2409px; height: 38px;\"> ) dan <b>camera</b>(<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603177296_Screenshot_20.png\" style=\"width: 36.2149px; height: 37px;\"> ) yang ada di<b> bagian bawah\ndari layar meeting.</b></p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603177361_Screenshot_21.png\" style=\"width: 25%;\"><b><br></b></p><p><b><br></b><br></p>', 2, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(6, 'Bagaimana cara menyampaikan pesan teks pada saat meeting berlangsung?\n', '<p>Untuk menyampaikan pesan teks, partisipan perlu menampilkan panel chat\npada ruang meeting. Panel tersebut terdapat pada bagian<b> kiri bawah dari layar\n</b>(<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603177590_Screenshot_22.png\" style=\"width: 40.625px; height: 39px;\">).</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603177673_Screenshot_23.png\" style=\"width: 493.494px; height: 483px;\"></p><p><br></p>', 2, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(7, 'Bagaimana cara mengangkat/menurunkan tangan pada saat meeting berlangsung?\n', '<p>Untuk mengangkat tangan, user dapat klik tombol&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603177775_Screenshot_24.png\" style=\"width: 23.0156px; height: 32.6455px;\"> , kemudian klik menu&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603177806_Screenshot_25.png\" style=\"width: 107.288px; height: 35px;\">.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178043_Screenshot_26.png\" style=\"width: 264.521px; height: 544px;\">&nbsp; &nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178061_Screenshot_27.png\" style=\"width: 262.419px; height: 551px;\"></p><p>Akan tampil <b>gambar tangan</b> ( <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178093_Screenshot_28.png\" style=\"width: 33.6743px; height: 33px;\">) pada layar dari peserta yang mengangkat\ntangan.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178150_Screenshot_29.png\" style=\"width: 268px; height: 561.25px;\"></p><p>Untuk menurunkan tangan, user dapat klik tombol<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178205_Screenshot_24.png\" style=\"width: 27.3304px; height: 38.7656px;\"> . Setelah itu Klik Menu<b>\nLower your hand.</b></p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178290_Screenshot_30.png\" style=\"width: 267.201px; height: 564px;\">&nbsp; &nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178312_Screenshot_31.png\" style=\"width: 272.645px; height: 568px;\">&nbsp;</p><p><b><br></b><br></p>', 2, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(8, 'Bagaimana cara mengubah tampilan video pada layar?', '<p>Untuk mengubah tampilan,&nbsp;<span style=\"font-size: 1rem;\">&nbsp;</span><span style=\"font-size: 1rem;\">user dapat klik tombol</span><span style=\"font-size: 1rem;\">&nbsp;</span><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178573_Screenshot_24.png\" style=\"font-size: 1rem; width: 25.3806px; height: 36px;\"><span style=\"font-size: 1rem;\">. Klik menu</span><span style=\"font-size: 1rem;\">&nbsp;</span><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178633_Screenshot_32.png\" style=\"font-size: 1rem; width: 108.029px; height: 37px;\"><span style=\"font-size: 1rem;\">, kemudian klik</span><span style=\"font-size: 1rem;\">&nbsp;</span><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178653_Screenshot_33.png\" style=\"font-size: 1rem; width: 125.806px; height: 39px;\"><span style=\"font-size: 1rem;\">.</span></p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178812_Screenshot_34.png\" style=\"width: 256.875px; height: 531px;\">&nbsp; &nbsp;&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178829_Screenshot_35.png\" style=\"width: 256.704px; height: 539px;\">&nbsp;</p><p>Akan tampil tampilan layar yang berbeda. Window ditampilkan secara fullscreen\ndan secara default menampilkan layar pembicara.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178884_Screenshot_36.png\" style=\"width: 256.927px; height: 523px;\"><span style=\"font-size: 1rem;\"><br></span></p><p><span style=\"font-size: 1rem;\"><br></span></p>', 2, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(9, 'Bagaimana cara meninggalkan ruang meeting?', '<p>Untuk meninggalkan ruang meeting, peserta dapat klik tombol <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603178956_Screenshot_37.png\" style=\"width: 35.8059px; height: 35px;\">. Peserta akan\nlangsung keluar dari ruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603179004_Screenshot_38.png\" style=\"width: 260.445px; height: 544px;\"><br></p>', 2, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(10, 'Apa itu Renomeet?', '<p>Renomeet adalah aplikasi video conference real-time untuk virtual meeting.\nMemiliki desain yang simple dan mudah dalam membuat atau join meeting, tetapi\ntetap memprioritaskan keamaan meeting.</p><p><br></p>', 3, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(11, 'Bagaimana cara saya mengetahui link ruang meeting?', '<p>Untuk mengetahui link ruang meeting, moderator dapat masuk ke Renomeet\r\nControl Panel (Link: <a href=\"https://agci.renomeet.com/\" target=\"_blank\">https://agci.renomeet.com/</a> ) menggunakan <b>email addrress</b>\r\ndan <b>password</b> Control Panel.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603245749_Screen_Shot_2020-10-21_at_09_02_11.png\" style=\"width: 686px;\"></p><p>Setelah login, akan muncul layar Dashboard yang menampilkan <b>user profile</b> dan\r\n<b>room</b>.&nbsp;</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603245825_Screen_Shot_2020-10-21_at_09_03_23.png\" style=\"width: 686px;\"></p><p><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(12, 'Bagaimana cara saya membagikan link ruang meeting?', '<p>Untuk membagikan link ruang meeting, moderator dapat masuk ke layar Schedule\r\nMeeting pada Renomeet Control Panel. Klik tombol <b>Detail dan Copy to Invite</b> untuk\r\nuntuk menyimpan link pada clipboard.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603247138_Screen_Shot_2020-10-21_at_09_25_28.png\" style=\"width: 686px;\"></p><p>Jika memilih copy to clipboard, maka akan tampil copy data berhasil.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603247183_Screen_Shot_2020-10-21_at_09_26_11.png\" style=\"width: 50%;\"></p><p><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(13, 'Bagaimana cara saya membuat schedule meeting?', '<p>Untuk membuat schedule meeting, moderator dapat masuk ke layar schedule\nmeeting pada Renomeet control panel. Klik tombol <b>Schedule a New Meeting</b>,&nbsp;</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603248414_Screen_Shot_2020-10-21_at_09_46_43.png\" style=\"width: 686px;\"></p><p>Akan tampil form schedule meeting. Isi form schedule. User juga dapat\nmenambahkan <b>Password meeting</b> jika diperlukan.&nbsp;</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603248467_Screen_Shot_2020-10-21_at_09_47_33.png\" style=\"width: 686px;\"></p><p>Setelah mengisi schedule meeting, user dapat klik tomol save untuk menyimpan\njadwal meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249130_Screen_Shot_2020-10-21_at_09_58_39.png\" style=\"width: 686px;\"></p><p>Data schedule meeting akan tampil di layar schedule meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249167_Screen_Shot_2020-10-21_at_09_59_16.png\" style=\"width: 686px;\"></p><p><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(14, 'Bagaimana cara saya masuk ke ruang meeting?', '<p>Untuk masuk ke ruang meeting, moderator dapat masuk ke layar Detail Schedule\nMeeting pada Renomeet control panel. Klik Start Meeting atau copy paste link\nruang meeting ke tab baru.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249266_Screen_Shot_2020-10-21_at_10_00_55.png\" style=\"width: 686px;\"></p><p>Link akan langsung mengarahkan layar untuk masuk ke room meeting.\nModerator dapat langsung klik <b>Join Room</b>.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249357_Screen_Shot_2020-10-21_at_10_02_24.png\" style=\"width: 686px;\"></p><p>Klik tombol <b>I am the host</b> (<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249398_Screen_Shot_2020-10-21_at_10_03_04.png\" style=\"width: 86.4288px; height: 28.8438px;\"> ).</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249502_Screen_Shot_2020-10-21_at_10_04_48.png\" style=\"width: 686px;\"></p><p>Login menggunakan RenomeetID dan password moderator. Klik <b>Ok.</b></p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249572_Screen_Shot_2020-10-21_at_10_05_58.png\" style=\"width: 50%;\"><b><br></b></p><p>Moderator berhasil masuk kedalam ruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249618_Screen_Shot_2020-10-21_at_10_06_45.png\" style=\"width: 686px;\"><b><br></b></p><p><b><br></b><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(15, 'Bagaimana cara mengubah Bahasa menjadi Bahasa lain?', '<p>Untuk mengubah bahasa, moderator/peserta dapat klik tombol more actions (<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249698_Screen_Shot_2020-10-21_at_10_08_07.png\" style=\"width: 25px; height: 29.4096px;\">\n) yang terdapat pada pojok kanan bawah layar.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249756_Screen_Shot_2020-10-21_at_10_09_00.png\" style=\"width: 686px;\"></p><p>Setelah itu klik menu Settings (<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249794_Screen_Shot_2020-10-21_at_10_09_42.png\" style=\"width: 89.7903px; height: 29.5156px;\"> ) untuk menampilkan pengaturan.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249837_Screen_Shot_2020-10-21_at_10_10_18.png\" style=\"width: 25%;\"></p><p>Akan tampil pop up pengaturan. Klik tab More&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249868_Screen_Shot_2020-10-21_at_10_10_26.png\" style=\"width: 44.3456px; height: 24.5px;\">.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249917_Screen_Shot_2020-10-21_at_10_11_44.png\" style=\"width: 50%;\"></p><p>Tampil pengaturan untuk mengubah Bahasa. Klik <b>dropdown Language</b> untuk\nmengganti Bahasa.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603249991_Screen_Shot_2020-10-21_at_10_12_48.png\" style=\"width: 50%;\"></p><p>Pilih bahasan yang diinginkan. Di bawah ini adalah contoh Bahasa yang dipilih.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603250033_Screen_Shot_2020-10-21_at_10_13_41.png\" style=\"width: 50%;\"></p><p><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(16, 'Bagaimana cara menyalakan/mematikan microphone dan camera sebagai moderator saat menggunakan website?', '<p>Partisipan dapat mematikan dan menyalakan camera dan microphone dengan\ntombol mic dan camera yang ada di bagian bawah dari layar meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603251817_Screen_Shot_2020-10-21_at_10_42_40.png\" style=\"width: 686px;\"></p><p><br></p>', 5, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(17, 'Bagaimana cara melakukan share screen?', '<p>Untuk sharecreen, moderator dapat klik tombol <b>share screen</b> ( <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603251876_Screen_Shot_2020-10-21_at_10_44_25.png\" style=\"width: 36.5022px; height: 31.3906px;\">) pada pojok\nkiri bawah untuk menampilkan fitur sharescreen pada layar.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603251917_Screen_Shot_2020-10-21_at_10_45_07.png\" style=\"width: 686px;\"></p><p>Akan tampil tab berikut. Terdapat 3 pilihan untuk share screen, yaitu:</p><p style=\"margin-left: 25px;\">a.&nbsp;<span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">Membagikan screen kita secara langsung</span></p><p style=\"margin-left: 25px;\"><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252004_Screen_Shot_2020-10-21_at_10_46_24.png\" style=\"width: 50%;\"><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\"><br></span></p><p style=\"margin-left: 25px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">b.&nbsp;</span><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">Membagikan layar suatu aplikasi</span></p><p style=\"margin-left: 25px;\"><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252062_Screen_Shot_2020-10-21_at_10_47_30.png\" style=\"width: 50%;\"><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\"><br></span></p><p style=\"margin-left: 25px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">c.&nbsp;</span><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">Membagikan suatu tab dari chrome</span></p><p style=\"margin-left: 25px;\"><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252105_Screen_Shot_2020-10-21_at_10_48_13.png\" style=\"width: 50%;\"></p><p style=\"\">Pilih layar yang ingin dibagikan. Jika sudah, klik tombol <b>share</b> (<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252168_Screen_Shot_2020-10-21_at_10_49_15.png\" style=\"width: 45.9019px; height: 25.5312px;\">). Layar\nyang ingin dibagikan akan tampil pada Renomeet.</p><p style=\"\"><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252226_Screen_Shot_2020-10-21_at_10_50_14.png\" style=\"width: 686px;\"></p><p style=\"\">Untuk menghentikan share screen, moderator dapat klik kembali tombol <b>share\nscreen</b> (<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252275_Screen_Shot_2020-10-21_at_10_44_25.png\" style=\"width: 39px; height: 33.5386px;\">) pada pojok kiri bawah. Layar yang dibagikan akan segera berhenti\ndan menampilkan layar pembicara.</p><p style=\"\"><br></p>', 5, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(18, 'Bagaimana cara menyampaikan pesan teks pada saat meeting berlangsung?', '<p>Untuk menyampaikan pesan teks, partisipan perlu menampilkan panel chat\npada ruang meeting. Panel tersebut terdapat pada bagian kiri bawah dari layar (&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252403_Screen_Shot_2020-10-21_at_10_53_05.png\" style=\"width: 30.7188px; height: 29.9099px;\"> ).</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252441_Screen_Shot_2020-10-21_at_10_53_49.png\" style=\"width: 686px;\"></p><p>Panel pesan teks sudah tampil. Partisipan dapat mengetik pesan, lalu\nmengirimkannya menggunakan tombol <b>enter</b>.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603252499_Screen_Shot_2020-10-21_at_10_54_47.png\" style=\"width: 686px;\"></p><p><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(19, 'Bagaimana cara mematikan microphone seluruh peserta?', '<p>Untuk mematikan microphone seluruh peserta, moderator dapat klik tombol\n<b>more actions</b> (&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603253639_Screen_Shot_2020-10-21_at_10_08_07.png\" style=\"width: 28px; height: 32.9388px;\"> ) yang terdapat pada pojok kanan bawah layar.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603253677_Screen_Shot_2020-10-21_at_11_14_24.png\" style=\"width: 686px;\"></p><p>Setelah itu klik menu Mute everyone ( <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603253720_Screen_Shot_2020-10-21_at_11_14_53.png\" style=\"width: 111.587px; height: 30.2656px;\">).</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603253743_Screen_Shot_2020-10-21_at_11_15_03.png\" style=\"width: 259.445px; height: 314px;\"></p><p>Selain cara di atas, moderator juga bisa mematikan microphone peserta lain\nselain yang akan ditunjuk sebagai pembicara, dengan cara klik tombol&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603253788_Screen_Shot_2020-10-21_at_10_08_07.png\" style=\"width: 33.1524px; height: 39px;\"> pada\nwindow setiap peserta lalu klik mute everyone else <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603253841_Screen_Shot_2020-10-21_at_11_17_09.png\" style=\"width: 131.156px; height: 30.6561px;\">.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603253893_Screen_Shot_2020-10-21_at_11_17_59.png\" style=\"width: 686px;\"></p><p><br></p>', 5, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(20, 'Bagaimana cara mengatur layar tampilan partisipan sesuai dengan moderator?', '<p>Untuk mengatur layar dan mic peserta, moderator dapat klik tombol <b>more actions</b>\n(&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254172_Screen_Shot_2020-10-21_at_10_08_07.png\" style=\"width: 33px; height: 38.8207px;\"> ) yang terdapat pada pojok kanan bawah layar.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254220_Screen_Shot_2020-10-21_at_11_23_24.png\" style=\"width: 686px;\"></p><p>Setelah itu klik menu Settings( <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254288_Screen_Shot_2020-10-21_at_11_24_01.png\" style=\"width: 105.823px; height: 34.3906px;\">) untuk menampilkan pengaturan.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254313_Screen_Shot_2020-10-21_at_11_24_21.png\" style=\"width: 261.452px; height: 315px;\"></p><p>Akan tampil pop up pengaturan. Klik tab <b>More</b> <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254351_Screen_Shot_2020-10-21_at_11_24_27.png\" style=\"width: 64.0904px; height: 31px;\">.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254396_Screen_Shot_2020-10-21_at_11_26_22.png\" style=\"width: 50%;\"></p><p>Tampil pengaturan Moderator. Terdapat 3 jenis yang dapat diatur. Klik tombol <b>Ok</b>\nuntuk menyimpan perubahan.</p><p style=\"margin-left: 25px;\">a.&nbsp;<span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">Everyone starts muted: kondisi awal participant yang bergabung yaitu\nmute.</span></p><p style=\"margin-left: 25px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">b.&nbsp;</span><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">Everyone starts hidden: Kodisi awal participant yang bergabung yaitu\ncamera mati.</span></p><p style=\"margin-left: 25px;\"><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">c.&nbsp;</span><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">Everyone follows me: Kondisi layar participant mengikuti layar\nmoderator.</span></p><p style=\"margin-left: 25px;\"><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254498_Screen_Shot_2020-10-21_at_11_28_06.png\" style=\"width: 50%;\"><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\"><br></span></p><p style=\"\"><span style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\"><br></span></p>', 5, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(21, 'Bagaimana cara mengubah tampilan video pada layar?', '<p>Untuk mengubah tampilan, user dapat klik tombol&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254587_Screen_Shot_2020-10-21_at_11_29_32.png\" style=\"width: 28.3997px; height: 29.3906px;\"> atau klik window dari\npeserta yang ingin di tampilkan.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254777_Screen_Shot_2020-10-21_at_11_30_08.png\" style=\"width: 686px;\"></p><p>Akan tampil layar dari window yang di klik.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603254802_Screen_Shot_2020-10-21_at_11_32_46.png\" style=\"width: 686px;\"></p><p><br></p>', 5, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(22, 'Bagaimana cara mengeluarkan peserta dari ruang meeting?', '<p>Untuk mengeluarkan peserta dari ruang meeting, user dapat klik tombol (<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603255413_Screen_Shot_2020-10-21_at_10_08_07.png\" style=\"width: 32.2031px; height: 37.8833px;\"> )\npada panel peserta yang ingin dikeluarkan.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603255649_Screen_Shot_2020-10-21_at_11_47_10.png\" style=\"width: 686px;\"></p><p>Akan muncul pilihan menu. Pilih menu Kick Out (&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603255697_Screen_Shot_2020-10-21_at_11_48_02.png\" style=\"width: 96.8424px; height: 30.625px;\"> ). Peserta akan\nlangsung terdisconnected dari ruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603255817_Screen_Shot_2020-10-21_at_11_49_44.png\" style=\"width: 686px;\"></p><p><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(23, 'Bagaimana cara meninggalkan ruang meeting?', '<p>Untuk meninggalkan ruang meeting, peserta dapat klik tombol <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603255937_Screen_Shot_2020-10-21_at_11_52_01.png\" style=\"width: 29.6662px; height: 31.3906px;\">. Peserta akan\nlangsung keluar dari ruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603256003_Screen_Shot_2020-10-21_at_11_53_08.png\" style=\"width: 686px;\"></p><p><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(24, 'Apa itu Renomeet?', '<p>Renomeet adalah aplikasi video conference real-time untuk virtual meeting.\nMemiliki desain yang simple dan mudah dalam membuat atau join meeting, tetapi\ntetap memprioritaskan keamanan meeting.<br></p>', 6, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(25, 'Bagaimana cara saya masuk ke ruang meeting?', '<p>Untuk masuk ke ruang meeting, diperlukan link ruang meeting yang dibuat oleh\nmoderator. User dapat <b>klik atau menyalin link</b> tersebut ke Google Chrome.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603259295_Screen_Shot_2020-10-21_at_12_48_00.png\" style=\"width: 686px;\"></p><p>Link akan langsung mengarahkan layar untuk masuk ke room meeting. Peserta\ndapat langsung klik <b>Join Room.</b></p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603259337_Screen_Shot_2020-10-21_at_10_02_24.png\" style=\"width: 686px;\"><b><br></b></p><p>Isi username dan password room pada layar berikut, peserta dapat langsung klik\nRequest Join.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603259401_Screen_Shot_2020-10-21_at_12_49_48.png\" style=\"width: 686px;\"><b><br></b></p><p>Setelah Request Join di accept oleh moderator. Partisipan akan masuk ke dalam\nruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603259662_Screen_Shot_2020-10-21_at_12_54_03.png\" style=\"width: 686px;\"></p><p>Peserta meeting bisa masuk jika moderator sudah berada di dalam ruang\nmeeting. Jika moderator belum masuk kedalam ruang meeting, maka peserta\nmeeting harus menunggu agar bisa masuk ruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603259710_Screen_Shot_2020-10-21_at_12_54_55.png\" style=\"width: 50%;\"></p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603259758_Screen_Shot_2020-10-21_at_12_55_34.png\" style=\"width: 686px;\"></p><p><br></p>', 4, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(26, 'Bagaimana cara menyalakan/mematikan microphone dan camera?', '<p>Partisipan dapat mematikan dan menyalakan camera dan microphone dengan\ntombol mic dan camera yang ada di bagian bawah dari layar meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603261226_Screen_Shot_2020-10-21_at_13_20_12.png\" style=\"width: 686px;\"></p><p><br></p>', 8, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(27, 'Bagaimana cara menyampaikan pesan teks pada saat meeting berlangsung?', '<p>Untuk menyampaikan pesan teks, partisipan perlu menampilkan panel chat\npada ruang meeting. Panel tersebut terdapat pada bagian kiri bawah dari layar (\n<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603261526_Screen_Shot_2020-10-21_at_13_24_13.png\" style=\"width: 35.75px; height: 32.9325px;\">).</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603261765_Screen_Shot_2020-10-21_at_13_25_58.png\" style=\"width: 686px;\"></p><p>Panel pesan teks sudah tampil. Partisipan dapat mengetik pesan, lalu\nmengirimkannya menggunakan tombol <b>enter</b>.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603261809_Screen_Shot_2020-10-21_at_13_29_52.png\" style=\"width: 686px;\"></p><p><br></p>', 7, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(28, 'Bagaimana cara mengangkat/menurunkan tangan pada saat meeting berlangsung?', '<p>Untuk mengangkat tangan, user dapat klik tombol&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603261891_Screen_Shot_2020-10-21_at_13_31_16.png\" style=\"width: 29.0156px; height: 29.9514px;\"> pada pojok kiri bawah\nlayar.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603261927_Screen_Shot_2020-10-21_at_13_31_52.png\" style=\"width: 686px;\"></p><p>Akan tampil gambar tangan pada layar dari peserta yang mengangkat tangan.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603261975_Screen_Shot_2020-10-21_at_13_32_40.png\" style=\"width: 686px;\"></p><p>Untuk menurunkan tangan, user dapat klik tombol&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603262020_Screen_Shot_2020-10-21_at_13_31_16.png\" style=\"width: 37.5999px; height: 38.8125px;\"> lagi. Maka gambar tangan\npada window akan hilang.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603262144_Screen_Shot_2020-10-21_at_13_34_41.png\" style=\"width: 686px;\"></p><p><br></p>', 7, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(29, 'Bagaimana cara mengubah tampilan video pada layar?', '<p>Untuk mengubah tampilan, user dapat klik tombol&nbsp;<img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603262258_Screen_Shot_2020-10-21_at_11_29_32.png\" style=\"width: 28.9375px; height: 29.9472px;\"> atau klik window dari\npeserta yang ingin di tampilkan.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603262332_Screen_Shot_2020-10-21_at_13_38_38.png\" style=\"width: 686px;\"></p><p>Akan tampil layar dari window yang di klik.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603262375_Screen_Shot_2020-10-21_at_13_39_20.png\" style=\"width: 686px;\"></p><p><br></p>', 8, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(30, 'Bagaimana cara meninggalkan ruang meeting?', '<p>Untuk meninggalkan ruang meeting, peserta dapat klik tombol <img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603262429_Screen_Shot_2020-10-21_at_11_52_01.png\" style=\"width: 25.8859px; height: 27.3906px;\">. Peserta akan\nlangsung keluar dari ruang meeting.</p><p><img src=\"http://localhost/renomeet_BC_092020_1/./assets/img/upload/steps_1603262470_Screen_Shot_2020-10-21_at_13_40_55.png\" style=\"width: 686px;\"><br></p>', 7, '0000-00-00 00:00:00.00', '1', '2020-11-18 05:44:12.51', '1', 'n'),
(31, 'question', 'uuuuuu', 1, '2021-02-02 09:06:13.93', '1', '2021-02-02 09:25:21.84', '1', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `question_keyword`
--

CREATE TABLE `question_keyword` (
  `id` int(20) NOT NULL,
  `question_id` int(4) NOT NULL,
  `keyword_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_keyword`
--

INSERT INTO `question_keyword` (`id`, `question_id`, `keyword_id`) VALUES
(4, 31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `created_by` varchar(10) NOT NULL,
  `last_modified_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2) ON UPDATE CURRENT_TIMESTAMP(2),
  `last_modified_by` varchar(10) NOT NULL,
  `is_deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `created_date`, `created_by`, `last_modified_date`, `last_modified_by`, `is_deleted`) VALUES
(1, 'Admin', 'admin@ag-ci.com', '$2y$10$AO.IYBw5DKj2iriz8VOnSOKmt0elX8q4GFremcaWPLKdV6y3R6IYi', '2020-11-16 02:34:44.00', '', '2020-11-16 02:34:44.00', '', 'n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_keyword`
--
ALTER TABLE `blog_keyword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_keyword`
--
ALTER TABLE `question_keyword`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_keyword`
--
ALTER TABLE `blog_keyword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `question_keyword`
--
ALTER TABLE `question_keyword`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
