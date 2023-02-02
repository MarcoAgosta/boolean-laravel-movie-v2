-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 02, 2023 at 03:24 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boolean_laravel_movie_team`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anno_uscita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibile` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`,`descrizione`, `anno_uscita`, `genere`, `disponibile`, `created_at`, `updated_at`) VALUES
(1, 'Una notte da leoni ',"lorem ipsum", '2014', 'Commedia ', 1, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(2, 'Avatar', "lorem ipsum",'2009', 'Fantascientifico ', 0, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(3, 'Una notte da leoni ', "lorem ipsum",'2014', 'Commedia ', 1, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(4, 'Avatar',"lorem ipsum", '2009', 'Fantascientifico ', 0, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(5, 'Cars',"lorem ipsum", '2009', 'Animazione', 1, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(6, 'Jurassic Park',"lorem ipsum", '2009', 'Fantascienza ', 0, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(7, 'Cars',"lorem ipsum", '2009', 'Animazione', 1, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(8, 'Jurassic Park',"lorem ipsum", '2009', 'Fantascienza ', 0, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(9, 'Fast and  Furious ',"lorem ipsum", '2014', 'Azione', 1, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(10, 'Inception',"lorem ipsum", '2009', 'Psicologico ', 0, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(11, 'Fast and  Furious ',"lorem ipsum", '2014', 'Azione', 1, '2023-01-24 22:00:00', '2023-01-24 22:00:00'),
(12, 'Inception', "lorem ipsum",'2009', 'Psicologico ', 0, '2023-01-24 22:00:00', '2023-01-24 22:00:00');`
--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
