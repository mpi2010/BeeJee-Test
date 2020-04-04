-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2020 г., 11:33
-- Версия сервера: 5.7.26
-- Версия PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `btest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '0',
  `status_admin` int(11) DEFAULT '0',
  `id_sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `email`, `status`, `status_admin`, `id_sort`) VALUES
(1, 'Aaa', 'aaaaajhfh', 'a2234225@i.ua', 0, 1, 8),
(2, 'Bbbb', 'wfwfwefwef', 'b2234225@i.ua', 1, 0, 7),
(3, 'cccc', 'ccccc', 'c2234225@i.ua', 0, 0, 6),
(4, 'dddd', 'dddddd', 'd2234225@i.ua', 0, 0, 5),
(5, 'eee', 'eeeeee', 'e2234225@i.ua', 0, 0, 4),
(6, 'uuu', 'uuuuu', 'u2234225@i.ua', 0, 0, NULL),
(7, 'rrr', 'rrrr', 'r2234225@i.ua', 0, 0, NULL),
(8, 'uiiii', 'oooo', 'o2234225@i.ua', 0, 0, NULL),
(9, 'hhh', 'hhhh', 'h2234225@i.uah', 0, 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
