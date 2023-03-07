-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 09:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devastro_terangbenderang`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `stock` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `country`, `description`, `image`, `stock`, `price`, `created_at`) VALUES
(1, 'Mountslafe', 'Italia', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis dolore explicabo fuga modi, rem ab.', 'img/prod-1.jpg', 100, 560000, '2023-02-28 16:19:41'),
(2, 'Katana', 'Jepang', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis dolore explicabo fuga modi, rem ab.', 'img/prod-2.jpg', 50, 250000, '2023-02-28 16:34:40'),
(3, 'Ocha', 'China', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis dolore explicabo fuga modi, rem ab.', 'img/prod-3.jpg', 20, 400000, '2023-02-28 16:35:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
