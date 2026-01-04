-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2025 at 08:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT;
SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS;
SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION;
SET NAMES utf8mb4;

-- --------------------------------------------------------
-- Database: `toko`
-- --------------------------------------------------------

-- --------------------------------------------------------
-- Table: admin
-- --------------------------------------------------------
CREATE TABLE `admin` (
  `id` INT(11) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------
-- Table: pesanan
-- --------------------------------------------------------
CREATE TABLE `pesanan` (
  `id` INT(11) NOT NULL,
  `id_produk` INT(11) DEFAULT NULL,
  `nama_produk` VARCHAR(255) NOT NULL,
  `nama_pemesan` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `alamat` TEXT DEFAULT NULL,
  `catatan` TEXT DEFAULT NULL,
  `jumlah` INT(11) NOT NULL DEFAULT 1,
  `harga_satuan` INT(11) NOT NULL DEFAULT 0,
  `total_harga` INT(11) NOT NULL DEFAULT 0,
  `tanggal` DATE NOT NULL,
  `status` ENUM('baru','diproses','selesai','batal') NOT NULL DEFAULT 'baru'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pesanan` (`id`, `id_produk`, `nama_produk`, `nama_pemesan`, `email`, `alamat`, `catatan`, `jumlah`, `harga_satuan`, `total_harga`, `tanggal`, `status`) VALUES
(1, 10, 'test', 'asdaad', 'asd@gmail.com', 'asd', '1', 1, 5000, 5000, '2025-11-18', 'batal');

-- --------------------------------------------------------
-- Table: produk
-- --------------------------------------------------------
CREATE TABLE `produk` (
  `id` INT(11) NOT NULL,
  `gambar` VARCHAR(100) NOT NULL,
  `nama` VARCHAR(255) NOT NULL,
  `harga` VARCHAR(100) NOT NULL,
  `wa` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produk` (`id`, `gambar`, `nama`, `harga`, `wa`) VALUES
(8, '962-kaktus (1).jpg', 'Kaktus', '5000', '+6212752132'),
(9, '932-kaktus (2).jpg', '2', '5000', '+6212752132'),
(10, '590-logo 1.png', 'test', '5000', '+62');

-- --------------------------------------------------------
-- Indexes
-- --------------------------------------------------------

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

-- --------------------------------------------------------
-- Auto Increment
-- --------------------------------------------------------

ALTER TABLE `admin`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `pesanan`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `produk`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

-- --------------------------------------------------------
-- Foreign Keys
-- --------------------------------------------------------

ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_produk`)
  REFERENCES `produk` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

COMMIT;

SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT;
SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS;
SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION;
