-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2016 г., 19:12
-- Версия сервера: 5.6.29
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL,
  `family` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `patronymic` varchar(150) NOT NULL,
  `date_rasp` varchar(150) NOT NULL,
  `info` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`id`, `family`, `name`, `patronymic`, `date_rasp`, `info`) VALUES
(1, 'Павлюк', 'Андрей ', 'Викторович', '8:00 - 13:00', 'Врач терапевт'),
(2, 'Мороз', 'Наталия', 'Николаевна', '10:00 - 15:00', 'врач-гениколог'),
(3, 'Водяницкая', 'Ирина', 'Алексеевна', '09:00 - 14:00', 'старшая медсестра'),
(6, 'Завизион ', 'Олег', 'Петрович', '12:00 - 17:00', 'хирург'),
(7, 'Лятин', 'Денис', 'Викторович', '08:00 - 15:00', 'невропатолог'),
(8, 'Митрофанов', 'Илья ', 'Александрович', '14:00 -  17:00', 'Лор'),
(9, 'Казак ', 'Надежда ', 'николаевна', '13:00 - 17:00', 'дерматолог');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `family` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `admin` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `email`, `login`, `password`, `admin`) VALUES
(5, '', '', '', 'admin', 'qwerty', '1'),
(7, 'Дмитрий', 'Водяницкий', 'vodyanickij7@gmail.com', '123', '123', '');

-- --------------------------------------------------------

--
-- Структура таблицы `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `telefon` varchar(200) NOT NULL,
  `date` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `doctorName` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `visit`
--

INSERT INTO `visit` (`id`, `name`, `last_name`, `adress`, `telefon`, `date`, `comments`, `doctorName`) VALUES
(4, 'Александр', 'Водяницкий', 'Харьков', '050-630-91-93', 2016, 'Геморой', 'Павлюк Андрей Викторович'),
(5, 'Виктория', 'Козакова', 'Харьков', '097-456-34-34', 2016, 'Болит голова', 'Завизион Олег Петрович');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
