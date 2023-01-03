-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 08:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `image`, `details`, `data`) VALUES
(1, 'Avatar', 'https://lumiere-a.akamaihd.net/v1/images/p_avatar_thewayofwater_97_v2_01ccadaf.png', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home. When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place', 'Release year (2022)'),
(2, 'Die Hard', 'https://m.media-amazon.com/images/I/51flj5GUcNL._AC_SY580_.jpg', 'A New York City police officer tries to save his estranged wife and several others taken hostage by terrorists during a Christmas party at the Nakatomi Plaza in Los Angeles. NYPD cop John McClane goes on a Christmas vacation to visit his wife Holly in Los', 'Release year (1988)'),
(3, 'Smile', 'https://media0001.elcinema.com/uploads/_320x_6b5f68a35b547e11dccf3c3a4d7394396f28237fc5d38c079d151b08c66b7e7f.jpg', 'It stars Sosie Bacon as a therapist named Rose Cotter, who, after witnessing the bizarre suicide of a patient, goes through increasingly disturbing and daunting experiences, leading her to believe what she is experiencing is supernatural.', 'Release year (2022)'),
(4, 'The menu', 'https://m.media-amazon.com/images/M/MV5BMzdjNjI5MmYtODhiNS00NTcyLWEzZmUtYzVmODM5YzExNDE3XkEyXkFqcGdeQXVyMTAyMjQ3NzQ1._V1_.jpg', 'It features an ensemble cast that includes Ralph Fiennes, Anya Taylor-Joy, Nicholas Hoult, Hong Chau, Janet McTeer, Reed Birney, Judith Light, and John Leguizamo. The film focuses on a group of diners at an exclusive restaurant who discover the celebrity ', 'Release year (2022)'),
(5, 'Black Adam', 'https://m.media-amazon.com/images/M/MV5BYzZkOGUwMzMtMTgyNS00YjFlLTg5NzYtZTE3Y2E5YTA5NWIyXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg', 'The story centers around Adam, an ancient superhuman who is released from his magic imprisonment by a group of archeologists to free the nation of Kahndaq from the crime syndicate Intergang.', 'Release year (2022)'),
(6, 'suicide squad', 'https://m.media-amazon.com/images/M/MV5BMjM1OTMxNzUyM15BMl5BanBnXkFtZTgwNjYzMTIzOTE@._V1_.jpg', 'A secret government agency recruits some of the most dangerous incarcerated super-villains to form a defensive task force. Their first mission: save the world from the apocalypse. A secret government agency recruits some of the most dangerous incarcerated', 'Release year (2016)'),
(7, 'Spider-Man no way home', 'https://play-lh.googleusercontent.com/Odv1QnJMznTD_SRuatFVgE6b2Lgt_BGb8TUBMjsNl-gJi3bnxLXgnusGXWHkFGihsJdTde9ucIhNwMPHbkAF', 'Plot. After Quentin Beck frames Peter Parker for his murder and reveals Parker\'s identity as Spider-Man, Parker, his girlfriend Michelle \"MJ\" Jones-Watson, best friend Ned Leeds, and aunt May are interrogated by the Department of Damage Control.', 'Release year (2021)'),
(8, 'Avengers Endgame', 'https://lumiere-a.akamaihd.net/v1/images/p_avengersendgame_19751_e14a0104.jpeg?region=0%2C0%2C540%2C810', 'Music. The grave course of events set in motion by Thanos that wiped out half the universe and fractured the Avengers ranks compels the remaining Avengers to take one final stand in Marvel Studios\' grand conclusion to twenty-two films, \"Avengers: Endgame.', 'Release year (2019)'),
(9, 'Wakanda Forever', 'https://m.media-amazon.com/images/M/MV5BNTM4NjIxNmEtYWE5NS00NDczLTkyNWQtYThhNmQyZGQzMjM0XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_FMjpg_UX1000_.jpg', 'The people of Wakanda fight to protect their home from intervening world powers as they mourn the death of King T\'Challa. Queen Ramonda, Shuri, M\'Baku, Okoye and the Dora Milaje fight to protect the kingdom of Wakanda from intervening world powers in the wake of King T\'Challa\'s death.', 'Release year (2022)'),
(10, 'Bloodshot', 'https://m.media-amazon.com/images/M/MV5BOTE4NjY2ZmQtMTlmNC00MzllLWExNmItNTE5NjE4ZjM4MGVlXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg', '2020 American superhero film based on the Valiant Comics character of the same name. It is intended to be the first installment in a series of films set within a Valiant Comics shared cinematic universe.[3] Directed by David S. F. Wilson (in his feature directorial debut) ', 'Release year (2020)'),
(11, 'Cruella', 'https://lumiere-a.akamaihd.net/v1/images/p_cruella_21672_ba40c762.jpeg', 'Set in London during the punk rock movement of the 1970s, the film revolves around Estella Miller, an aspiring fashion designer, as she explores the path that leads her to become a notorious up-and-coming fashion designer known as Cruella de Vil.', 'Release year (2021)'),
(12, 'Shazam', 'https://m.media-amazon.com/images/M/MV5BMzk4NzI3M2YtNTU0Zi00NDU3LTgxYTUtOWY0NmZiMzU5MzlhXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg', 'In 14-year-old Billy Batson\'s case, all he needs to do is shout out one word to transform into the adult superhero Shazam. Still a kid at heart, Shazam revels in the new version of himself by doing what any other teen would do -- have fun while testing out his newfound powers.', 'Release year (2019)');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `guests` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `movie`, `date`, `time`, `guests`, `userid`) VALUES
(1, 'Avatar', '2023-12-01', '12:00 PM', 3, 1),
(2, 'Avatar', '2026-04-04', '01:30 AM', 10, 1),
(3, 'Die Hard', '2024-01-02', '12:00 AM', 3, 1),
(4, 'Avatar', '2023-01-01', '12:00 PM', 3, 1),
(5, 'suicide squad', '2023-01-03', '12:00 AM', 2, 1),
(6, 'Avatar', '2023-01-01', '12:00 AM', 2, 1),
(7, 'Spider-Man no way home', '2022-01-01', '12:00 AM', 3, 1),
(8, 'Die Hard', '2023-02-02', '12:00 PM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'ahmed', '1111', 'test@test.com', 1122334455),
(24, 'asdasdsa', '123123', 'a@a.com', 1231232),
(25, 'bbb', '222', 'a@a.com', 213123123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
