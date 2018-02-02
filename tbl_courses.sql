
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
(1, 1, 'Эксплуатация ремонт и наладка газотурбинных, газопоршневых и дизельных электростанций', 'с 25 по 29 сентября', NULL, 72, NULL),
(2, 1, 'Функции оперативного персонала электрических станций', 'с 06 по 17 ноября', NULL, 72, NULL),
(3, 1, 'Диспетчеризация и режимы работы электрических станций', 'с 04 по 08 декабря', NULL, 72, NULL),
(4, 1, 'Эксплуатация и модернизация оборудования ГЭС, ТЭЦ, ГРЭС', 'с 30 октября по 03 ноября', NULL, 72, NULL),
(5, 1, 'Ремонт электрооборудования ТЭЦ, ГРЭС', 'с 11 по 15 декабря', NULL, 36, NULL),
(6, 1, 'Ремонт турбинного оборудования тепловых электростанций', 'с 09 по 13 октября', NULL, 36, NULL),
(7, 1, 'Ремонт котельного оборудования тепловых электростанций', 'с 11 по 22 сентября', NULL, 36, NULL),
(8, 1, 'Диагностика паровых и газовых турбин', 'с 06 по 10 ноября', NULL, 36, NULL),
(9, 1, 'Эксплуатация котельного оборудования ТЭС', 'с 11 по 22 сентября', NULL, 72, NULL),
(14, 1, 'Эксплуатация газовых турбин газотурбинных установок (ГТУ)', 'с 02 по 06 октября', NULL, 36, NULL),
(17, 1, 'Методы и средства обеспечения бесперебойной работы собственных нужд тепловых электростанций', 'с 25 сентября по 29 сентября', NULL, 36, NULL),
(18, 2, 'Современные методы диагностики электротехнических материалов подстанционного оборудования', 'с 30 октября по 10 ноября', NULL, 72, NULL),
(20, 2, 'Релейная защита распределительных электрических сетей', 'с 13 по 24 ноября', NULL, 72, NULL),
(21, 2, 'Эксплуатация и модернизация электрооборудования подстанций', 'с 20 по 30 ноября', NULL, 72, NULL),
(22, 2, 'Программный комплекс РТП-3 по расчету потерь электрической энергии', 'с 23 октября по 03 ноября', NULL, 72, NULL),
(23, 2, 'Эксплуатация высоковольтных линий', 'с 20 по 30 ноября', NULL, 72, NULL),
(24, 2, 'Релейная защита электроэнергетических систем', 'с 04 по 15 декабря', NULL, 72, NULL),
(26, 2, 'Диагностика силовых трансформаторов, генераторов и кабелей', 'с 13 по 17 ноября', NULL, 36, NULL),
(27, 2, 'Ремонт и наладка коммутируемого электросетевого оборудования напряжением 220 кВ и выше', 'с 30 октября по 10 ноября', NULL, 72, NULL),
(28, 2, 'Монтаж и эксплуатация высоковольтных выключателей с напряжением 110кВ и ниже', 'с 16 по 27 октября', NULL, 72, NULL),
(30, 2, 'Диспетчеризация электроэнергии в энергетических предприятиях РК', 'с 09 октября  по 20 октября', NULL, 72, NULL),
(31, 2, 'Профессиональный казахский язык по направлению "Электроэнергетика"', 'с 06 по 10 ноября', NULL, 36, NULL),
(32, 2, 'Режимы межрегиональных и  распределительных электрических сетей', 'с 13 по 24 ноября', NULL, 72, NULL),
(33, 2, 'Функции оперативного персонала электрических подстанций 220кВ и выше', 'с 27 ноября по 08 декабря', NULL, 72, NULL),
(34, 3, 'Энергосбережение и повышение энергоэффективности в коммунально-бытовом секторе', 'с 09 по 20 октября', NULL, 72, NULL),
(40, 3, 'Техническая эксплуатация систем тепло-, газоснабжения, вентиляции, водоснабжения, водоотведения', 'с 02 по 13 октября', NULL, 72, NULL),
(41, 3, 'Энергосбережение и энергоаудит в системах производства и распределения энергоносителей', 'с 20 по 24 ноября', NULL, 36, NULL),
(42, 3, 'Электроснабжение промышленных предприятий', 'с 30 октября по 10 ноября', NULL, 72, NULL),
(43, 3, 'Электрохимзащита металлических труб проложенных в земле', 'с 06 по 10 ноября', NULL, 36, NULL),
(44, 3, 'Энергоаудит и управление энергосбережением', 'с 14 ноября по 25 ноября', NULL, 72, NULL),
(46, 4, 'Охрана труда и экологическая безопасность технологических процессов и производств', 'с 23 октября по 03 ноября', NULL, 72, NULL),
(48, 4, 'Промышленная безопасность и управление рисками в энергетических системах', 'с 18 сентября по 22 сентября', NULL, 36, NULL),
(49, 4, 'Экологические аспекты производственной деятельности', 'с 16 октября по 27 октября', NULL, 72, NULL),
(50, 4, 'Основы прикладной экологии', 'с 06 по 17 ноября', NULL, 72, NULL),
(51, 4, 'Надежность и безопасность обслуживания энергетического оборудования и технических процессов', 'с 27 ноября  по 08 декабря', NULL, 72, NULL),
(52, 4, 'Геоинформационные системы в управлении промыленной безопасностью', 'с 04 по 08 декабря', NULL, 36, NULL),
(61, 5, 'Проектирование систем видеонаблюдения', 'с 25 сентября по 06 октября', NULL, 72, NULL),
(62, 5, 'Современные сетевые и инфокоммуникационные технологии', 'с 16 по 27 октября', NULL, 72, NULL),
(63, 5, 'Современные системы цифровой коммутации', 'с 23 октября по 03 ноября', NULL, 72, NULL),
(64, 5, 'IP-телефония', 'с 06 по 10 ноября', NULL, 36, NULL),
(65, 5, 'Защита информации в телекоммуникационных системах', 'с 06 по 17 ноября', NULL, 72, NULL),
(66, 5, 'Коммутация и маршрутизация в сетях Cisco', 'с 13 по 24 ноября', NULL, 72, NULL),
(77, 7, 'Автоматизация технологических процессов на контроллерах Simatic 1500,1200', 'с 04 по 15 декабря', NULL, 72, NULL),
(87, 7, 'Проектирование виртуальных приборов в среде LabView', 'с 02 октября по 06 октября', NULL, 36, NULL),
(88, 7, 'Эксплуатация контрольно-измерительных приборов и систем автоматизации теплосилового оборудования ТЭС и котельных установок', 'с 23 октября  по 03 ноября', NULL, 72, NULL),
(89, 7, 'Проектирование программно-аппаратного комплекса сбора данных и диспетчерского контроля (ПО Inity PRO)', 'c 20 по 30 ноября', NULL, 72, NULL),
(90, 7, 'Программируемые логические интегральные схемы в автоматизации технологических процессов', 'с 04 по 15 декабря', NULL, 72, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
