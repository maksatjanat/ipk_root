-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 15 2017 г., 02:14
-- Версия сервера: 5.6.13
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_courses`
--

CREATE TABLE IF NOT EXISTS `tbl_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direct_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` smallint(6) NOT NULL,
  `memb_int` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=91 ;

--
-- Дамп данных таблицы `tbl_courses`
--

INSERT INTO `tbl_courses` (`id`, `direct_id`, `title`, `date`, `date2`, `duration`, `memb_int`) VALUES
(1, 1, 'Эксплуатация ремонт и наладка газотурбинных, газопоршневых и дизельных электростанций', 'с 16 по 27 мая 2016г.', NULL, 72, NULL),
(2, 1, 'Функции оперативного персонала электрических станций', 'с 30 мая по 10 июня 2016г.', NULL, 72, NULL),
(3, 1, 'Диспетчеризациh и режимы работы электрических станций', 'с 30 мая по 10 июня 2016г.', NULL, 72, NULL),
(4, 1, 'Эксплуатация и модернизация оборудования ГЭС, ТЭЦ, ГРЭС', 'с 13 по 17 июня 2016г.', NULL, 72, NULL),
(5, 1, 'Ремонт электрооборудования ТЭЦ, ГРЭС', 'с 20 по 24 июня 2016г.', NULL, 36, NULL),
(6, 1, 'Ремонт турбинного оборудования тепловых электростанций', 'с 13 по 17 июня 2016г.', NULL, 36, NULL),
(7, 1, 'Ремонт котельного оборудования тепловых электростанций', 'с 20 по 24 июня 2016г.', NULL, 36, NULL),
(8, 1, 'Диагностика паровых и газовых турбин', 'с 13 по 17 июня 2016г.', NULL, 36, NULL),
(9, 1, 'Эксплуатация котельного оборудования ТЭС', 'с 07 марта по 18 марта 2016г.', NULL, 72, NULL),
(10, 1, 'Эксплуатация котельного оборудования районных котельных и промышленных предприятий', 'с 11 по 22 апреля и с 05 по 16 сентября', NULL, 72, NULL),
(11, 1, 'Эксплуатация угольного котла тепловых электростанций', 'с 26 по 30 сентября 2016г.', NULL, 36, NULL),
(12, 1, 'Эксплуатация газового котла тепловых электростанций', 'с 26 по 30 сентября 2016г.', NULL, 72, NULL),
(13, 1, 'Эксплуатация паровых турбин тепловых электростанций', 'с 10 по 14 октября 2016г.', NULL, 36, NULL),
(14, 1, 'Эксплуатация газовых турбин газотурбинных установок (ГТУ)', 'с 04 по 08 апреля 2016г.', NULL, 36, NULL),
(15, 1, 'Организация работ котельного цеха ГРЭС и ТЭЦ', 'с 04 по 15 апреля 2016г.', NULL, 72, NULL),
(16, 1, 'Организация работ электроцеха ГРЭС и ТЭЦ', 'с 11 по 22 апреля 2016г.', NULL, 72, NULL),
(17, 1, 'Методы и средства обеспечения бесперебойной работы собственных нужд тепловых электростанций', 'с 25 апреля по 06 мая 2016г.', NULL, 72, NULL),
(18, 2, 'Современные методы диагностики электротехнических материалов подстанционного оборудования', 'с 11 января по 22 января', NULL, 72, NULL),
(19, 2, 'Профессиональный английский язык для специалистов в области электроэнергетики', 'с 25 по 29 января', NULL, 36, NULL),
(20, 2, 'Релейная защита распределительных электрических сетей', 'с 08 по 19 февраля', NULL, 72, NULL),
(21, 2, 'Эксплуатация и модернизация электрооборудования подстанций', 'с 22 февраля по 04 марта', NULL, 72, NULL),
(22, 2, 'Программный комплекс РТП-3 по расчету потерь электрической энергии', 'с 22 февраля по 04 марта', NULL, 72, NULL),
(23, 2, 'Эксплуатация высоковольтных линий', 'с 28 марта по 08 апреля', NULL, 72, NULL),
(24, 2, 'Релейная защита электроэнергетических систем', 'с 11 по 22 апреля', NULL, 72, NULL),
(25, 2, 'Мастер районных или региональных электрических сетей по ремонту ВЛ', 'с 18 по 22 апреля', NULL, 36, NULL),
(26, 2, 'Диагностика силовых трансформаторов, генераторов и кабелей', 'с 25 по 29 апреля', NULL, 36, NULL),
(27, 2, 'Ремонт и наладка коммутируемого электросетевого оборудования напряжением 220 кВ и выше', 'с 03 мая по 13 мая', NULL, 72, NULL),
(28, 2, 'Монтаж и эксплуатация высоковольтных выключателей с напряжением 110кВ и ниже', 'с 23 мая по 03 июня', NULL, 72, NULL),
(29, 2, 'Изоляция и устройства защиты от перенапряжений', 'с 05 сентября по 16 сентября', NULL, 72, NULL),
(30, 2, 'Диспетчеризация электроэнергии в энергетических предприятиях РК', 'с 10 октября  по 21 октября', NULL, 72, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
