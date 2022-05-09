-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2022 г., 00:00
-- Версия сервера: 5.5.62
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('один','два','три') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `gender`, `email`, `password`, `number`) VALUES
(9, 'ТЕСТ', 'ТЕСТ2 ТЕСТ1', '', 'test@gmail.com', '', 79112357345674),
(11, 'тестттттттт', 'тесттт', '', 'testttt@gmail.com', '', 88003553535),
(12, 'aaa', 'aaaaaaa', '', 'aaaaaaaa@gmail.com', '', 8803535353),
(13, 'тест3', 'тест 3 тест4', '', 'test1234@gmail.com', '', 89112345678),
(14, 'тест5', 'тест6 тест 7 ', '', 'testtt@gmail.com', '', 8803536465),
(19, 'dfdgfdgf', 'fdhhfh ghf hghgh', '', 'gfhfhghf@gmail.com', '', 7813298484546),
(20, 'kjh', 'ff', '', 'hsdfhfdhj@gmail.com', '', 9596585437678546),
(21, 'куееке', 'енкенек', '', 'hdshgdfhjs@gmail.com', '', 454767687),
(27, 'fdgfdg', 'fgfdgfdg', '', 'fgfgfdg', '', 0),
(29, 'авпапап', 'павпапав', 'два', 'апапапапа', '', 0),
(30, 'кеуен', 'ененене', 'один', 'енкненекнне', '', 0),
(31, 'кекекеке', 'кекекекекеке', 'три', 'екекекеке', '', 0),
(32, 'kjh646', 'ff56546', 'два', 'hsdfwert@gmail.com546546546456', '', 435654);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `image_description` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image_name`, `image_description`) VALUES
(19, 'donate-banner.jpg', ''),
(21, 'donate-banner-1576695133.jpg', ''),
(25, 'fNNGPhjpg.jpg', ''),
(27, '1773m_rus5 (1)-967603596.jpg', ''),
(28, 'end.jpg', ''),
(29, 'mod3.jpg', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
