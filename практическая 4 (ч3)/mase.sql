-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 28 2023 г., 15:39
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Client`
--

CREATE TABLE `Client` (
  `ID` int(11) NOT NULL,
  `Log_In` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Client`
--

INSERT INTO `Client` (`ID`, `Log_In`, `Password`) VALUES
(1, 'kuasb123', '$2y$10$pPbSEESJB5vKHKIbsEj1YuNXLYn3U3qI65nTFuMG9O6h6kHxD2VFi'),
(2, 'admin', '$2y$10$rWReytdHgEAdqv5q8LpEnubW8f0VGyHPzvQOpggopmlVyPJHxjIv2');

-- --------------------------------------------------------

--
-- Структура таблицы `Otzav`
--

CREATE TABLE `Otzav` (
  `ID` int(11) NOT NULL,
  `User` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Otzav`
--

INSERT INTO `Otzav` (`ID`, `User`, `Comment`) VALUES
(1, 'baz123', 'так себе компания'),
(2, 'chern123', 'быстрая доставка, хорошая упаковка, всем советую');

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE `Product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`ID`, `Name`, `Link`, `Price`) VALUES
(2, 'Стул стремянка', '../img/стул_стремянка.jpg', 2700),
(3, 'Органайзер для косметики', '../img/органайзер_для_косметики.jpg', 4500),
(4, 'Корзина для белья', '../img/корзина_для_белья.jpg', 3700),
(5, 'Настольный органайзер', '../img/Настольный_органайзер.jpg', 1500),
(6, 'Контейнер', '../img/контейнер.jpg', 550),
(8, 'Этажерка ярусная', '../img/этажерка_ярусная.jpg', 1200);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Otzav`
--
ALTER TABLE `Otzav`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Client`
--
ALTER TABLE `Client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Otzav`
--
ALTER TABLE `Otzav`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
