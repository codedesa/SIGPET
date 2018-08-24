-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2018 at 10:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_of_farmer`
--

CREATE TABLE `contact_of_farmer` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(40) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `farmer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_of_group`
--

CREATE TABLE `contact_of_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `address` text,
  `place_of_birth` varchar(40) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `status_group` enum('Ketua','Sekretaris','Bendahara','Anggota') DEFAULT NULL,
  `status` enum('Menikah','Belum Menikah') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `address`, `place_of_birth`, `date_of_birth`, `gender`, `picture`, `group_id`, `status_group`, `status`) VALUES
(1, 'Muhammad Fahmi', 'Desa Suka Damai Kec Sakra Barat Kab. Lombok Timur', 'Anjani', '2018-04-28', 'L', NULL, 2, 'Ketua', 'Menikah'),
(2, 'Muhammad Zulhan', 'Desa Suka Damai Kec Sakra Barat Kab. Lombok Timur', 'Anjani', '1992-07-27', 'L', NULL, 1, 'Ketua', 'Menikah'),
(3, 'Hamdan Rozikin', 'Desa Suka Dana  Kec Sakra Barat Kab. Lombok Timur', 'Sakra Barat', '1992-07-29', 'L', NULL, 2, 'Anggota', 'Menikah'),
(4, 'Zainal Abidin', 'Desa Suka Dana  Kec Sakra Barat Kab. Lombok Timur', 'Suka Dana', '1992-07-20', 'L', NULL, 2, 'Anggota', 'Menikah'),
(5, 'Jauhari Makruf', 'Desa Suka Dana  Kec Sakra Barat Kab. Lombok Timur', 'Suka Dana', '2018-03-12', 'P', NULL, 2, 'Anggota', 'Menikah'),
(6, 'Azmi ', 'Desa Suka Damai Kec Sakra Barat Kab. Lombok Timur', 'Suka Damai', '1992-07-29', 'L', NULL, 1, 'Anggota', 'Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_groups`
--

CREATE TABLE `farmer_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `latitude` varchar(12) DEFAULT NULL,
  `longitude` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_groups`
--

INSERT INTO `farmer_groups` (`id`, `name`, `address`, `email`, `latitude`, `longitude`) VALUES
(1, 'Berajah Ngaji ', 'Jalan Mangga Dua Nomor 32', 'berajahngaji@yahoo.com', '-8.694311', '116.486543'),
(2, 'Suka Maju', 'Desa Suka Damai Kec Sakra Barat Kab. Lombok Timur', 'sukadamai@gmail.com', '-8.694072', '116.489274'),
(3, 'Suka Laju', 'Desa Suka Damai Kec Sakra Barat Kab. Lombok Timur', 'maju@suka.com', '-8.693127', '116.483205'),
(4, 'Pade Suke', 'Desa Suka Damai Kec Sakra Barat Kab. Lombok Timur', 'pade@suke.com', '-8.694371', '116.485481'),
(5, 'Pade Girang', 'Desa Suka Dana  Kec Sakra Barat Kab. Lombok Timur', 'girang@yahoo.com', '-8.693187', '116.491110'),
(6, 'Girang Maju', 'Desa Suka Dana  Kec Sakra Barat Kab. Lombok Timur', 'arif@yahoo.com', '-8.689812', '116.487211');

-- --------------------------------------------------------

--
-- Stand-in structure for view `farmer_view`
-- (See below for the actual view)
--
CREATE TABLE `farmer_view` (
`id` int(11)
,`name` varchar(30)
,`address` text
,`place_of_birth` varchar(40)
,`date_of_birth` date
,`gender` enum('L','P')
,`picture` varchar(100)
,`group_name` varchar(40)
,`group_id` int(11)
,`status_group` enum('Ketua','Sekretaris','Bendahara','Anggota')
,`status` enum('Menikah','Belum Menikah')
);

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `id` int(11) NOT NULL,
  `land_type` varchar(20) DEFAULT NULL,
  `large` varchar(10) DEFAULT NULL,
  `border_barat` text,
  `border_timur` text,
  `border_utara` text,
  `border_selatan` text,
  `amount_year` varchar(10) DEFAULT NULL,
  `latitude` varchar(12) DEFAULT NULL,
  `longitude` varchar(12) DEFAULT NULL,
  `farmer_id` int(11) NOT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`id`, `land_type`, `large`, `border_barat`, `border_timur`, `border_utara`, `border_selatan`, `amount_year`, `latitude`, `longitude`, `farmer_id`, `address`) VALUES
(1, 'Lahan Basah', '12839 m2', 'Lahan Amak Uda', 'Lahan Amak Asrul', 'Lahan Amak Uni', 'Lahan Amak Dani', '30000000', '-38383838', '87373373', 1, 'Desa Suka Damai Kec Sakra Barat Kab. Lombok Timur'),
(2, 'Lahan Kering', '12453 m2', 'Lahan Amak Sapri', 'Lahan Amak Asrul Gayen', 'Lahan Amak Uni', 'Lahan Amak Dani Ha', '3000000', '-478464764', '756447484', 1, 'Desa Suka Dana  Kec Sakra Barat Kab. Lombok Timur');

-- --------------------------------------------------------

--
-- Stand-in structure for view `land_view`
-- (See below for the actual view)
--
CREATE TABLE `land_view` (
`id` int(11)
,`land_type` varchar(20)
,`large` varchar(10)
,`border_barat` text
,`border_timur` text
,`border_utara` text
,`border_selatan` text
,`amount_year` varchar(10)
,`latitude` varchar(12)
,`longitude` varchar(12)
,`address` text
,`name` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `picture_of_groups`
--

CREATE TABLE `picture_of_groups` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picture_of_land`
--

CREATE TABLE `picture_of_land` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `land_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `status` enum('Admin','User') DEFAULT NULL,
  `password` text,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `status`, `password`, `group_id`) VALUES
(2, 'zulhan@yahoo.com', 'Zulhan Arif', 'Admin', '16006dac50f6467f023c8e1868dfe871a4ce50691eec461220323c94be57a99ce5982ca76d06260955499b1fdecf7235fc7116fe4ceb49a52829fda277d4ca55jYSGNPpb3Jt6sIhKd0lxrhoARkx2nKvOsuca+YstoEU=', 0),
(3, 'Agus@yahoo.com', 'Agus Hari Murti', 'User', 'ea7f8329d39c47abbcea4e355ec460ca7f7852e6448c6697f828f286e8d7d12ef4c5585c82f136ba723cf6d78dc37010c91bb9493b431e7883ab8bdd4f6e25ae9BOxS47cK/B36vA//RxBdjggO3wWwE2KU0FpshSa5I4=', 2);

-- --------------------------------------------------------

--
-- Structure for view `farmer_view`
--
DROP TABLE IF EXISTS `farmer_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `farmer_view`  AS  select `farmers`.`id` AS `id`,`farmers`.`name` AS `name`,`farmers`.`address` AS `address`,`farmers`.`place_of_birth` AS `place_of_birth`,`farmers`.`date_of_birth` AS `date_of_birth`,`farmers`.`gender` AS `gender`,`farmers`.`picture` AS `picture`,`farmer_groups`.`name` AS `group_name`,`farmer_groups`.`id` AS `group_id`,`farmers`.`status_group` AS `status_group`,`farmers`.`status` AS `status` from (`farmers` join `farmer_groups` on((`farmers`.`group_id` = `farmer_groups`.`id`))) order by `farmer_groups`.`name` ;

-- --------------------------------------------------------

--
-- Structure for view `land_view`
--
DROP TABLE IF EXISTS `land_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `land_view`  AS  select `land`.`id` AS `id`,`land`.`land_type` AS `land_type`,`land`.`large` AS `large`,`land`.`border_barat` AS `border_barat`,`land`.`border_timur` AS `border_timur`,`land`.`border_utara` AS `border_utara`,`land`.`border_selatan` AS `border_selatan`,`land`.`amount_year` AS `amount_year`,`land`.`latitude` AS `latitude`,`land`.`longitude` AS `longitude`,`land`.`address` AS `address`,`farmers`.`name` AS `name` from (`land` join `farmers` on((`land`.`farmer_id` = `farmers`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_of_farmer`
--
ALTER TABLE `contact_of_farmer`
  ADD PRIMARY KEY (`id`,`farmer_id`) USING BTREE,
  ADD KEY `farmer_pictures` (`farmer_id`);

--
-- Indexes for table `contact_of_group`
--
ALTER TABLE `contact_of_group`
  ADD PRIMARY KEY (`id`,`group_id`) USING BTREE,
  ADD KEY `group_contact1` (`group_id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`,`group_id`) USING BTREE,
  ADD KEY `group` (`group_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `farmer_groups`
--
ALTER TABLE `farmer_groups`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id` (`id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`id`,`farmer_id`) USING BTREE,
  ADD KEY `farmer_id1` (`farmer_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `picture_of_groups`
--
ALTER TABLE `picture_of_groups`
  ADD PRIMARY KEY (`id`,`group_id`) USING BTREE,
  ADD KEY `group_pictures` (`group_id`);

--
-- Indexes for table `picture_of_land`
--
ALTER TABLE `picture_of_land`
  ADD PRIMARY KEY (`id`,`land_id`),
  ADD KEY `land_pictr` (`land_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_of_farmer`
--
ALTER TABLE `contact_of_farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_of_group`
--
ALTER TABLE `contact_of_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmer_groups`
--
ALTER TABLE `farmer_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `picture_of_groups`
--
ALTER TABLE `picture_of_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picture_of_land`
--
ALTER TABLE `picture_of_land`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_of_farmer`
--
ALTER TABLE `contact_of_farmer`
  ADD CONSTRAINT `farmer_pictures` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_of_group`
--
ALTER TABLE `contact_of_group`
  ADD CONSTRAINT `group_contact1` FOREIGN KEY (`group_id`) REFERENCES `farmer_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `farmers`
--
ALTER TABLE `farmers`
  ADD CONSTRAINT `group` FOREIGN KEY (`group_id`) REFERENCES `farmer_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `land`
--
ALTER TABLE `land`
  ADD CONSTRAINT `farmer_id1` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `picture_of_groups`
--
ALTER TABLE `picture_of_groups`
  ADD CONSTRAINT `group_pictures` FOREIGN KEY (`group_id`) REFERENCES `farmer_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `picture_of_land`
--
ALTER TABLE `picture_of_land`
  ADD CONSTRAINT `land_pictr` FOREIGN KEY (`land_id`) REFERENCES `land` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
