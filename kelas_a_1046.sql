-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 08:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Drop existing database if it exists
DROP DATABASE IF EXISTS `kelas_a_1046`;

-- Create new database
CREATE DATABASE `kelas_a_1046`;

-- Switch to newly created database
USE `kelas_a_1046`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('jessyca', 'jessyca@gmail.com', 'jessyca123'),
('farsya123', 'farsya123@example.com', 'password123'),
('farda456', 'farda456@example.com', 'password123'),
('agus123', 'agus123@example.com', 'password123'),
('budi456', 'budi456@example.com', 'password456'),
('citra789', 'citra789@example.com', 'password789'),
('dewi987', 'dewi987@example.com', 'password987'),
('eko234', 'eko234@example.com', 'password234'),
('fani567', 'fani567@example.com', 'password567'),
('gita890', 'gita890@example.com', 'password890'),
('hadi123', 'hadi123@example.com', 'password123'),
('indah456', 'indah456@example.com', 'password456'),
('joko789', 'joko789@example.com', 'password789'),
('kurnia987', 'kurnia987@example.com', 'password987'),
('lia234', 'lia234@example.com', 'password234'),
('maman567', 'maman567@example.com', 'password567'),
('nina890', 'nina890@example.com', 'password890'),
('oscar123', 'oscar123@example.com', 'password123');


-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_hp` varchar(15) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  FOREIGN KEY (`user_id`) REFERENCES `user`(`id`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`no_hp`, `owner`, `user_id`) VALUES
('822716212', 'Jessyca Adelia', 1),
('822627166', 'Farsya Tia', 1),
('857726352', 'Farda Trisna', 1),
('081234567890', 'Agus Priyanto', 1),
('087654321098', 'Budi Santoso', 1),
('082112233445', 'Citra Anggraini', 1),
('085678954321', 'Dewi Suryani', 1),
('081234567891', 'Eko Prasetyo', 1),
('085678967890', 'Fani Putri', 1),
('089876543210', 'Gita Wijaya', 1),
('081239876543', 'Hadi Setiawan', 1),
('087654390123', 'Indah Fitriani', 1),
('082134567890', 'Joko Santoso', 1),
('085678956789', 'Kurnia Dewi', 1),
('081234567892', 'Lia Susanti', 1),
('087654321099', 'Maman Sofyan', 1),
('082134567891', 'Nina Cahyani', 1),
('085670123456', 'Oscar Putra', 1);


COMMIT;
