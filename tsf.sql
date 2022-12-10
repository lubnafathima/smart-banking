-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 12:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Eric Anderson', 'eric.anderson.official@gmail.com', 47800),
(2, 'Kylie Allan', 'itssskylie.allan@gmail.com', 50000),
(3, 'Emma Brown', 'emma.brown@gmail.com', 49900),
(4, 'Olivia	Churchill', 'olivia.churchill@gmail.com', 51000),
(5, 'Rachel	Johnston', 'rachel.johnston@gmail.com', 50948),
(6, 'Michelle	Langdon', 'michelle.langdon@gmail.com', 50700),
(7, 'Megan Harris', 'megan.harris@gmail.com', 51000),
(8, 'John	Sanderson', 'john.sanderson@gmail.com\r\n', 50097),
(9, 'Nicholas Davies', 'nicholas.davies@gmail.com', 50610),
(10, 'Neil Sterlings', 'neil.sterlings@gmail.com', 50600);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` int(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `sender`, `receiver`, `balance`, `timestamp`) VALUES
(1, 'Kylie Allan', 'Nicholas Davies', 500, '2022-12-10 09:46:08'),
(2, 'Eric Anderson', 'Kylie Allan', 2000, '2022-12-10 11:13:55'),
(3, 'Kylie Allan', 'Olivia	Churchill', 555, '2022-12-10 11:16:08'),
(4, 'Kylie Allan', 'Rachel	Johnston', 948, '2022-12-10 11:16:22'),
(5, 'Eric Anderson', 'Michelle	Langdon', 200, '2022-12-10 11:17:25'),
(6, 'Emma Brown', 'John	Sanderson', 97, '2022-12-10 11:17:43'),
(7, 'Olivia	Churchill', 'Nicholas Davies', 110, '2022-12-10 11:18:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
