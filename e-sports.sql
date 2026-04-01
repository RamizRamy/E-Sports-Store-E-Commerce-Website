-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2026 at 10:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Gaming PC', 3500.00, 'Strong PC can run almost any thing with RTX5090', 'blue pc.jpg'),
(2, 'Gaming Laptop', 4000.00, 'Strong Laptp RTX5060', 'blue laptop.png'),
(3, 'Gaming Mouse', 2000.00, 'A Stylish Gaming Mouse with Seven Buttons', 'mouse.jpg'),
(4, 'Gaming Keyboard', 5000.00, 'A Stylish Gaming Keybaord with Mechanic keys sound', 'Keyboard.avif'),
(5, 'Gaming Chair', 7000.00, 'A Stylish and Comfortable Gaming Chair', 'Gaming-chair.png'),
(6, 'Gaming HeadPhones', 8000.00, 'A Profesional Headphones with intgrated mice Prefect for gaming and streaming', 'headset.png'),
(8, 'Mechanical Keyboard', 79.99, 'Durable mechanical keyboard with RGB backlight and fast response switches.', 'Gkeyboard.jpg'),
(9, 'Gaming Headset', 59.99, 'Surround sound headset with noise-canceling microphone for clear communication.', 'headset.jpg'),
(10, 'Gaming Monitor 24\"', 199.99, '24-inch Full HD gaming monitor with 144Hz refresh rate and low response time.', 'monitor.jpg'),
(11, 'PlayStation 5 Controller', 69.99, 'Wireless DualSense controller with haptic feedback and adaptive triggers.', 'PlayStation 5 Controller.avif'),
(12, 'Xbox Series X Controller', 64.99, 'Ergonomic wireless controller with textured grip and precise controls.', 'xbox-controller.jpg'),
(13, 'Gaming Chair', 149.99, 'Comfortable ergonomic gaming chair with adjustable height and lumbar support.', 'chair.jpg'),
(14, 'Gaming Laptop', 999.99, 'High-performance gaming laptop with powerful GPU and fast SSD storage.', 'Glaptop.jpg'),
(15, 'Graphics Card RTX 3060', 399.99, 'NVIDIA RTX 3060 graphics card for high-end gaming and rendering.', 'gpu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
