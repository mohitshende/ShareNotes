-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 03:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharenotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `user` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `filename`, `heading`, `message`, `time`, `user`, `size`) VALUES
(5, '250421165327196_Sample-Chapter.pdf', 'hey', 'test3', '2021-04-25 20:23:44', 'abhishekbadole8@gmail.com', 513082),
(6, '260421142051nimcet_2019_question_paper_with_answer_key.pdf', 'Testing', 'test4', '2021-04-26 17:52:01', 'admin@gmail.com', 1486858),
(7, '260421143016196_Sample-Chapter.pdf', 'Review ', 'test7', '2021-04-26 18:00:36', 'mohit_shende@yahoo.com', 513082);

-- --------------------------------------------------------

--
-- Table structure for table `rejectednotes`
--

CREATE TABLE `rejectednotes` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `user` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rejectednotes`
--

INSERT INTO `rejectednotes` (`id`, `filename`, `message`, `heading`, `time`, `user`, `size`) VALUES
(5, '250421164124196_Sample-Chapter.pdf', 'test1', 'Testing', '2021-04-25 20:11:49', 'abhishekbadole8@gmail.com', 513082),
(6, '250421165233196_Sample-Chapter.pdf', 'test2', 'Review ', '2021-04-25 20:22:51', 'abhishekbadole8@gmail.com', 513082);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `user` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `srno.` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`srno.`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin'),
(2, 'Mohit', 'mohit_shende@yahoo.com', '123456'),
(3, 'abhishek badole', 'abhishekbadole8@gmail.com', 'Abhishek1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejectednotes`
--
ALTER TABLE `rejectednotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`srno.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rejectednotes`
--
ALTER TABLE `rejectednotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `srno.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
