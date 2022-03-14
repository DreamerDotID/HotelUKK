-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2022 at 11:02 AM
-- Server version: 10.3.34-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tropical_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image_url` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `location`, `isi`, `address`, `image_url`) VALUES
(1, 'Bali Beach Party', 'Pantai Kuta', '', 'Bali, Indonesia', ''),
(2, 'Beach Party', '', '<p>Kami baru saja menyelenggarakan Beach Party di Pantai Kuta Bali, Seluruh pemesan Luxurious Room akan mendapatkan Free Makanan dan Minuman disini.</p>\r\n', '', 'IMG-622d7971eb9802.24909084.jpg'),
(3, 'Swimming Pool', '', '<p>Kami telah menyelesaikan 2 Kolam Renang yang berada di Belakang Hotel dengan 2 Tipe yang berbeda yaitu Panas dan Dingin.</p>\r\n', '', 'IMG-622d79307165d2.70335060.jpg'),
(4, 'Saung Project', '', '<p>Kami mendirikan beberapa saung di sekitaran pantai untuk para pengunjung yang berada di pantai.</p>\r\n', '', 'IMG-622d79980f2d93.88165820.jpg'),
(5, 'Relaxation', '', '<p>Project untuk memasang beberapa kursi di pinggir kolam renang untuk para tamu.</p>\r\n', '', 'IMG-622d79a4186085.83722425.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(55) NOT NULL,
  `permission` enum('Administrator','Resepsionis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`, `permission`) VALUES
(1, 'dreamer', '202cb962ac59075b964b07152d234b70', 'Administrator'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(4, 'resepsionis', '202cb962ac59075b964b07152d234b70', 'Resepsionis');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id` int(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `position` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id`, `judul`, `subtitle`, `isi`, `position`) VALUES
(1, 'Featured Hotel', 'Best Beach Hotel', '<p>Pilihan terbaik untuk kamu yang ingin mendapatkan pemandangan langsung ke arah pantai!</p>\r\n', 'Front'),
(2, 'Welcome To', ' TROPICAL HOTEL', '', 'Welcome'),
(3, 'Our Services', 'Hotel berbintang yang menyediakan pelayanan terbaik dan juga menyediakan layanan transportasi gratis serta pengalaman makan malam yang belum pernah kalian rasakan sebelumnya!', '', 'Services'),
(4, 'Kamar Hotel', 'Kami memiliki beberapa fasilitas kamar yang dapat kalian lihat dan memiliki fasilitas yang sangat megah disetiap kamarnya.', '', 'Gallery 1'),
(5, 'Transportasi', 'Kami memberikan layanan transportasi terhadap tamu yang hendak berpergian dengan beberapa kendaraan yang sudah kami sediakan berdasarkan tipe kamar yang disewa.', '', 'Gallery 2'),
(6, 'Pantai', 'Kami memanjakan mata anda dengan pemandangan yang indah dengan pemandangan langsung ke arah Pantai.', '', 'Gallery 3'),
(7, 'Where We Are', 'Kami berada di Bali, Indonesia. Bali adalah sebuah pulau di Indonesia yang dikenal karena memiliki pegunungan berapi yang hijau, terasering sawah yang unik, pantai, dan terumbu karang yang cantik. Terdapat banyak tempat wisata religi seperti Pura Uluwatu ', '', 'Booking');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customer` varchar(35) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `customer`, `feedback`) VALUES
(1, 'Pamungkas', 'Hotelnya nyaman banget, viewnya juga langsung ke Pantai. Worth it banget.'),
(2, 'Bambang Suharto', 'Viewnya bagus banget, pelayanan nya juga mantab. Dinner sangat amat mewah dan megah.'),
(3, 'Widodo Setia', 'Kamar luas, makanannya enak banget dan pemesanannya mudah!'),
(4, 'Hartono', 'Hotel yang sangat mewah, pemandangannya langsung ke arah pantai dan pelayanannya yang sangat professional.'),
(6, 'Violetta', 'Hotelnya bagus banget dan worth it.'),
(7, 'Luna', 'Pelayanan yang sangat professional!');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `nik` int(50) NOT NULL,
  `nama` text NOT NULL,
  `nomor_hp` int(25) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `check_in` text NOT NULL,
  `check_out` text NOT NULL,
  `ruangan` varchar(35) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` enum('Telah Dikonfirmasi','Belum Dikonfirmasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `type`) VALUES
(1, 'IMG-622d97b6ac07f4.32049260.jpg', 'Home Featured 1  '),
(2, 'IMG-622daa7d90b689.06441271.jpg', 'Home Featured 2 '),
(3, 'IMG-622daa8685e378.02283050.jpg', 'Home Featured 3 '),
(4, 'IMG-622daa8f386956.75616761.jpg', 'Home Featured 4 '),
(5, 'IMG-622daa9b5ff5f8.80010129.jpg', 'Home Featured 5 '),
(6, 'IMG-622dae8c9765e3.90772868.jpg', 'Home Featured 6 '),
(7, 'IMG-622dae974086c4.03289055.jpg', 'Home Featured 7 '),
(8, 'IMG-622daea25c4de3.15769805.jpg', 'Home Featured 8 '),
(9, 'IMG-622daeb0b1e721.25396916.jpg', 'Home Featured 9 '),
(10, 'IMG-622daec21603c0.47659973.jpg', 'Home Featured 10 ');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `detail_paket` varchar(255) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `image_url` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`id`, `title`, `detail_paket`, `isi`, `image_url`) VALUES
(1, 'Kamar Luxury', '<p>Beberapa fasilitas yang akan kalian dapatkan :</p>\r\n\r\n<ul>\r\n	<li>Kamar Berukuran 50m Persegi</li>\r\n	<li>Premium Chocolate</li>\r\n	<li>Free Liburan ke Pantai</li>\r\n	<li>Free Welcome Drink and Food</li>\r\n</ul>\r\n', '<p>Kamar Luxury dengan kelengkapan maximal yang bisa kalian dapatkan. Klik untuk baca selengkapnya.</p>\r\n', 'IMG-6223218085b0b2.15856337.jpg'),
(2, 'Kamar Deluxe', '<p>Beberapa fasilitas yang akan kalian dapatkan :</p>\r\n\r\n<ul>\r\n	<li>Kamar Berukuran 40m Persegi</li>\r\n	<li>Premium Chocolate</li>\r\n	<li>Free Welcome Drink and Food</li>\r\n</ul>\r\n', '<p>Kamar Deluxe dengan kelengkapan medium yang bisa kalian dapatkan. Klik untuk baca selengkapnya.</p>\r\n', 'IMG-62232202655e53.85514742.jpg'),
(3, 'Kamar Medium', '<p>Beberapa fasilitas yang akan kalian dapatkan :</p>\r\n\r\n<ul>\r\n	<li>Kamar Berukuran 40m Persegi</li>\r\n	<li>Premium Chocolate</li>\r\n	<li>Free Welcome Drink and Food</li>\r\n</ul>\r\n', '<p>Kamar Medium dengan kelengkapan minimalis yang bisa kalian dapatkan. Klik untuk baca selengkapnya.</p>\r\n', 'IMG-6223220e108690.70174021.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
