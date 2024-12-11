-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 08:30 AM
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
-- Database: `bigbites_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(10) NOT NULL,
  `area` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `area`, `img`, `description`) VALUES
(1, 'Cebu City', 'images\\loc1.webp', 'Explore the best restaurants in Cebu City'),
(2, 'Mandaue City', 'images/loc2.jpg', 'Find top-rated eateries in Mandaue City.'),
(3, 'Lapu-Lapu City', 'images/loc3.png', 'Discover the best dining spots in Lapu-Lapu City.'),
(4, 'Talisay City', 'images\\loc4.jpg', 'Enjoy local delicacies in Talisay City.'),
(5, 'Carcar City', 'images\\loc5.jpg', 'Experience the best of Carcar City\'s food scene.'),
(6, 'Naga City', 'images\\loc6.jpg', 'Check out restaurants in Naga City.'),
(7, 'Consolation', 'images\\loc7.jpg', 'Discover hidden gems in Consolacion.'),
(8, 'Liloan', 'images\\loc8.jpg', 'Explore food destinations in Liloan.'),
(9, 'Compostela', 'images\\loc9.jpg', 'Check out the best food spots in Compostela.'),
(10, 'San Fernando', 'images/sanfer.jpg', 'Find delicious meals in San Fernando.'),
(11, 'Minglanilla', 'images/minglanilla.jpg', 'Explore dining options in Minglanilla.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meal`
--

CREATE TABLE `tbl_meal` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(50,0) NOT NULL,
  `store` int(10) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_meal`
--

INSERT INTO `tbl_meal` (`id`, `name`, `description`, `price`, `store`, `img`) VALUES
(1, 'Pork Sisig', 'Mayonnaise, raw egg, ox brain, and chicharon bits.', 100, 3, 'uploads/images/sisig.jpg'),
(2, 'Lumpia', 'Lumpia with sauteed ground pork, onions, carrots, raisins.', 150, 3, 'uploads/images/lumpia.jpg'),
(3, 'Sinigang', 'Sinigang na baboy.', 175, 4, 'uploads/images/sinigang.jpg'),
(4, 'Kare-Kare', 'Ox tail and tripe with sweet and savory peanut sauce, and grilled veges.', 200, 4, 'uploads/images/kare-kare.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store`
--

CREATE TABLE `tbl_store` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` int(10) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_store`
--

INSERT INTO `tbl_store` (`id`, `name`, `location`, `img`) VALUES
(1, 'Roady\'s Eatery', 11, ''),
(2, 'Porky Town', 4, 'uploads\\images\\lechon-kawali.jpg'),
(3, 'Kuya G\'s', 6, ''),
(4, 'Cooking Ina Mo!', 10, ''),
(5, 'The Cater\'s Food Services', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `acc_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `pass`, `acc_type`, `status`, `timestamp`) VALUES
(1, 'Gen Sedicol', 'genlarosa606@gmail.com', '$2y$10$yNpqysQy51D5F0C5iELcdORnc7xCga.loBU2lNuuU./.PXP4ZrgEG', 'customer', 'active', '2024-12-08 17:20:31.339692'),
(2, 'Gen', 'genlarosa@gmail.com', '$2y$10$ZW6c8prl7QjPDV2T9FHYdeOkhURHIKfJcObNrENbfUGENt.r556aK', 'customer', 'active', '2024-12-10 16:06:17.999161'),
(3, 'La Rosa', 'glr@gmail.com', '$2y$10$d5r9i0870ncjp4S4Nm.Ske8h2/qKiJqcp7GNCCV3/ppOPngjIbyRK', 'customer', 'active', '2024-12-09 00:29:45.625970'),
(4, 'Gen', 'genlarosa@gmail.com', '$2y$10$O3fptHZuCYE1YlJFxSaMA./MoBxDjN0v/b/gAz/Sf36sO1F1uAQMC', 'customer', 'active', '2024-12-10 04:24:00.056583'),
(5, 'Gen', 'genlarosa@gmail.com', '$2y$10$uB5EydO9WYMvrf79cZeMS.WHMD6O3Q5S6Q9RnvCA0z.bx5xCts37S', 'customer', 'active', '2024-12-10 04:24:04.684036'),
(6, 'Gen', 'genny@gmail.com', '$2y$10$hJuqaj5zZJMxzZKVIbZRKObP6ELJwjfMHqijZ0fYrWD6ptGZu7CI2', 'customer', 'active', '2024-12-10 04:27:16.771851'),
(7, 'Gen', 'genn@gmail.com', '$2y$10$opck9CDAQo/rjVYqP.wMxO3edqU2gYgUiQeX7lmojpATsKnKX4.B.', 'customer', 'active', '2024-12-10 04:34:17.130288'),
(8, 'Gen', 'gennn@gmail.com', '$2y$10$Cd4Nc6keRXtMJI4GqlXlZewJu1mP010Ypl/EueOuOJSbL.MX8Fzxu', 'customer', 'active', '2024-12-10 04:35:43.304918'),
(9, 'Nesis LaRosa', 'genlarosa707@gmail.com', '$2y$10$pUOxuyx3fzKMoijmjBWJb.KMlPt7TmoycChaV76Y5gYihQXwww1oi', 'customer', 'active', '2024-12-10 04:48:17.275271'),
(10, 'Admin', 'admin@gmail.com', '$2y$10$apCRADs6w/Uq6jqV8YTPROWwswY679Z0aR9ya/QUU.dSIuQ8AUneq', 'admin', 'active', '2024-12-10 16:13:03.058582');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_meal`
--
ALTER TABLE `tbl_meal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store` (`store`);

--
-- Indexes for table `tbl_store`
--
ALTER TABLE `tbl_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_meal`
--
ALTER TABLE `tbl_meal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_store`
--
ALTER TABLE `tbl_store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_meal`
--
ALTER TABLE `tbl_meal`
  ADD CONSTRAINT `tbl_meal_ibfk_1` FOREIGN KEY (`store`) REFERENCES `tbl_store` (`id`);

--
-- Constraints for table `tbl_store`
--
ALTER TABLE `tbl_store`
  ADD CONSTRAINT `tbl_store_ibfk_1` FOREIGN KEY (`location`) REFERENCES `tbl_location` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
