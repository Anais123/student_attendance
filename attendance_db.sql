-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 août 2020 à 00:53
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `attendance_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `datesign` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `attendance`
--

INSERT INTO `attendance` (`id`, `iduser`, `email`, `name`, `datesign`, `time`) VALUES
(1, 1, '', '', '2020-07-17', '14:32:37'),
(2, 2, '', '', '2020-07-17', '15:08:12'),
(3, 5, '', '', '2020-08-26', '20:13:49'),
(4, 5, '', '', '2020-08-26', '20:14:25'),
(5, 5, '', '', '2020-08-26', '20:18:15'),
(6, 4, '', '', '2020-08-26', '20:20:19'),
(7, 4, '', '', '2020-08-26', '20:23:38'),
(8, 4, '', '', '2020-08-26', '20:23:52'),
(9, 10, '', '', '2020-08-26', '21:01:18'),
(10, 14, '', '', '2020-08-26', '21:21:13'),
(11, 14, '', '', '2020-08-26', '21:29:35'),
(12, 14, '', '', '2020-08-26', '21:34:52'),
(13, 14, '', '', '2020-08-26', '21:45:41'),
(14, 14, '', '', '2020-08-26', '21:47:35'),
(15, 14, '', '', '2020-08-26', '21:49:16'),
(16, 14, '', '', '2020-08-26', '21:49:59'),
(17, 14, '', '', '2020-08-26', '21:54:57'),
(18, 0, 'claude@gmail.com', '', '2020-08-26', '22:22:47'),
(19, 0, 'claude@gmail.com', '', '2020-08-26', '22:33:02');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `password`, `email`, `name`) VALUES
(1, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'anais.allou123@gmail.com', 'Allou anais '),
(2, '8cb2237d0679ca88db6464eac60da96345513964', 'kristelle.quendra123@gmail.com', 'christelle allou'),
(3, '8cb2237d0679ca88db6464eac60da96345513964', 'laety@gmail.com', 'Seri Gakou Laeticia'),
(4, '123', 'marc@gmail.com', 'marc'),
(5, '1234', 'marc@gmail.com', 'marc kouassi'),
(6, 'abcd', 'patrick@gmail.com', 'patrick koffi'),
(7, 'abcd', 'patrick@gmail.com', 'patrick koffi'),
(8, 'abcd', 'patrick@gmail.com', 'patrick koffi'),
(9, '12345', 'patrick@gmail.com', 'b765ff5e20169d54efc639c901050453'),
(10, '1234', 'patrick@gmail.com', 'b765ff5e20169d54efc639c901050453'),
(11, 'bbbb', 'patrick@gmail.com', 'b765ff5e20169d54efc639c901050453'),
(12, 'e7880f4be5b280cb33e4148d01e10192', 'ange@gmail.com', 'ange seri'),
(13, 'f3475e5cd0b9ca6ff49b6ea84d5083e4', 'gakou@gmail.com', 'gakou gakou'),
(14, 'f3475e5cd0b9ca6ff49b6ea84d5083e4', 'gakouu@gmail.com', 'gakou gakou'),
(15, 'f3475e5cd0b9ca6ff49b6ea84d5083e4', 'gakouu@gmail.com', 'gakou gakou'),
(16, '827ccb0eea8a706c4c34a16891f84e7b', 'franck@gmail.com', 'franck emerson'),
(17, '827ccb0eea8a706c4c34a16891f84e7b', 'claude@gmail.com', 'claude');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
