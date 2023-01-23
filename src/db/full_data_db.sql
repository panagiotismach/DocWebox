-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 23 Ιαν 2023 στις 19:10:47
-- Έκδοση διακομιστή: 10.4.20-MariaDB
-- Έκδοση PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `docwebox`
--
CREATE DATABASE docwebox;
-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', '2023-01-23 18:46:00');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `appointment`
--

INSERT INTO `appointment` (`id`, `doctor_id`, `patient_id`, `date`, `time`, `description`, `created`) VALUES
(1, 1, 1, '2023-01-20', '11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:31:47'),
(2, 3, 1, '2023-01-20', '11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:32:13'),
(3, 1, 1, '2023-01-26', '14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:33:35'),
(4, 1, 1, '2023-01-29', '16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:33:46'),
(5, 2, 1, '2023-01-12', '12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:34:11'),
(6, 1, 1, '2023-01-20', '13', '', '2023-01-23 18:35:07'),
(7, 2, 2, '2023-01-26', '16', '', '2023-01-23 18:37:16'),
(8, 2, 2, '2023-01-25', '14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:37:22'),
(9, 2, 2, '2023-01-29', '16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:37:27'),
(10, 2, 2, '2023-01-18', '19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:37:33'),
(11, 3, 2, '2023-01-25', '19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:39:10'),
(12, 1, 2, '2023-01-17', '13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:39:31'),
(13, 1, 3, '2023-01-04', '13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:40:20'),
(14, 1, 3, '2023-01-15', '15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:40:25'),
(17, 1, 3, '2023-01-25', '14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:40:33'),
(18, 3, 3, '2023-01-27', '17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:41:15'),
(19, 3, 3, '2023-02-04', '19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:41:20'),
(20, 3, 3, '2023-02-01', '19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:41:24'),
(21, 3, 3, '2023-01-11', '14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:41:48'),
(22, 3, 3, '2023-01-13', '14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:41:51'),
(23, 3, 3, '2023-01-04', '14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2023-01-23 18:41:56');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `vat` varchar(40) NOT NULL,
  `num_patients` int(11) UNSIGNED NOT NULL,
  `num_publications` int(11) UNSIGNED NOT NULL,
  `work_experience_years` int(11) UNSIGNED NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `doctor`
--

INSERT INTO `doctor` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `phone`, `specialization`, `vat`, `num_patients`, `num_publications`, `work_experience_years`, `bio`, `location`, `image`, `created`) VALUES
(1, 'George - John', 'Stefou', 'stefou', 'ics20051@uom.edu.gr', '$2y$10$YMrKO.jo4jRe3.QP1uBZq.oJVja.Fe9s2qlFW9mHil4Mp42kFzZvG', '6999999999', 'Cardiologist', '432432', 5, 7, 13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Egnatias 125, Thessaloniki', 'stefou1674495559.jpeg', '2023-01-23 18:11:47'),
(2, 'Kaylie', 'Hodges', 'kaylie', 'kaylie@gmail.com', '$2y$10$kETXV5tot3MdJHtUHtiZKurt.9tieEUf11jHe0EsNbMNc3/CB5FdK', '6999999999', 'Dentist', '142568', 17, 12, 6, '', 'Tsimiski 34, Athens', '', '2023-01-23 18:13:29'),
(3, 'Keaton', 'Travis', 'travis', 'travis@gmail.com', '$2y$10$iGNvuMtPAfokY0GKF5TGNe3b8IdaJzD4QQK2cAX3O2XL63Aa.Ilq.', '6999999999', 'Pathologist', '436798', 13, 6, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ionias 12, Heraklion, Crete', 'travis1674495589.jpeg', '2023-01-23 18:14:37'),
(4, 'Madelynn', 'Kane', 'kane', 'kane@gmail.com', '$2y$10$EoNyHva4tfJgFFNHGTzgfObJxec2wnZ.KFX18RMJ/B3srs3MOjP2.', '6999999999', 'Allergist', '432534', 0, 0, 0, '', 'Thessaloniki', '', '2023-01-23 18:49:14'),
(5, 'Nicolas', 'Travis', 'nicolas_travis', 'nicolas_travis@gmail.com', '$2y$10$U6wPfFiqzhRRtP7EttWDjeaSYVCGG04mHc/VzrhX08GMsyswG8scW', '6999999999', 'Cardiologist', '43244324', 0, 0, 0, '', 'Amsterdam', '', '2023-01-23 18:54:58');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `patient`
--

INSERT INTO `patient` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `phone`, `location`, `image`, `created`) VALUES
(1, 'Minas - Theodoros', 'Charakopoulos', 'minas', 'ics20072@uom.edu.gr', '$2y$10$TAE/SqaDDF0pucyifTTRf.okb5tQxn8biwUI/dKSboWvHQtiTagKe', '6999999999', 'Thessaloniki', 'minas1674495425.jpeg', '2023-01-23 18:02:47'),
(2, 'Dionisis', 'Lougaris', 'dio', 'ics20058@uom.edu.gr', '$2y$10$ru/E0vB.CvzBJrYVX50rkOHeNQU98OEIDxkwfmyODvoVcy1.kl2bq', '6999999999', '', 'dio1674495460.jpeg', '2023-01-23 18:09:33'),
(3, 'Panagiotis', 'Machairas', 'panos', 'ics20044@uom.edu.gr', '$2y$10$SRp74HArZpG1MB73oeztMeOWcHjqSZ2GKZxMMUiGnx9JFhYwgiBh6', '6999999999', 'Thessaloniki, Greece', 'panos1674495499.jpeg', '2023-01-23 18:10:36');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT για πίνακα `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
