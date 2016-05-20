-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 14:43
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mysql`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mysongs`
--

CREATE TABLE `mysongs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `audio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `mysongs`
--

INSERT INTO `mysongs` (`id`, `name`, `audio`) VALUES
(65, 'askar', 'a ap rocky pussy money weed.mp3'),
(66, 'askar', 'a ap rocky pussy money weed.mp3'),
(67, 'askar', 'a ap rocky pussy money weed.mp3'),
(68, 'askar', 'a ap rocky pussy money weed.mp3'),
(69, 'askar', 'a ap rocky pussy money weed.mp3'),
(70, 'askar', 'a ap rocky pussy money weed.mp3'),
(71, 'askar', 'a ap rocky pussy money weed.mp3'),
(72, 'askar', 'a ap rocky pussy money weed.mp3'),
(73, 'askar', 'a ap rocky pussy money weed.mp3'),
(74, 'askar', 'a ap rocky pussy money weed.mp3'),
(75, '', ''),
(76, '', ''),
(77, '', ''),
(78, '', ''),
(79, '', ''),
(80, 'askar', 'a ap rocky pussy money weed.mp3'),
(81, 'askar', 'a ap rocky pussy money weed.mp3'),
(82, 'askar', ''),
(83, 'askar', 'a ap rocky pussy money weed.mp3'),
(84, 'asa', 'a ap rocky pussy money weed.mp3'),
(85, 'asa', 'a ap rocky pussy money weed.mp3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mysongs`
--
ALTER TABLE `mysongs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mysongs`
--
ALTER TABLE `mysongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
