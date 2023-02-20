-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 06:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wytepizzas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `summary` varchar(250) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `email`, `title`, `summary`, `createAt`) VALUES
(1, 'ademolademilade363@gmail.com', 'Mario Ninja Supreme', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error mollitia sunt autem alias dolor magnam itaque aspernatur et! Doloremque, quod facere assumenda optio voluptates harum! Distinctio rerum voluptates maxime!', '2023-02-17 15:00:20'),
(3, 'ademolademilade362@gmail.com', 'Ninja Still Supreme', 'Lorem ipsum dolor sit amet consectetur adipisicing elit Enim error mollitia sunt autem alias dolor magnam itaque aspernatur et Doloremque quod facere assumenda optio voluptates harum Distinctio rerum voluptates maxime', '2023-02-17 15:11:13'),
(4, 'richard@newhorizons.ng', 'Mini Chips', '    Lorem ipsum dolor sit amet consectetur adipisicing elit At accusantium reprehenderit Saepe cupiditate voluptatibus rerum eos pariatur magnam veritatis illum necessitatibus maiores accusantium consequuntur deserunt porro natus officia aliquam recu', '2023-02-17 15:32:51'),
(5, 'olajide@newhorizon.ik', 'Cheese Burger', '    Lorem ipsum dolor sit amet consectetur adipisicing elit At accusantium reprehenderit Saepe cupiditate voluptatibus rerum eos pariatur magnam veritatis illum necessitatibus maiores accusantium consequuntur deserunt porro natus officia aliquam recu', '2023-02-17 15:33:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
