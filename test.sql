SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+06:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `test`;



CREATE TABLE IF NOT EXISTS `coursepers` (
  `CourseId` smallint(6) NOT NULL COMMENT 'CoursesPerson',
  `PersonaId` smallint(6) NOT NULL,
  `CountStudent` smallint(6) NOT NULL COMMENT 'колво студентов',
  UNIQUE KEY `cours_person` (`PersonaId`,`CourseId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `tbl_company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `NameCompany` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhoneCompany` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EmailCompany` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GeneralDirector` int(40) DEFAULT NULL,
  PRIMARY KEY (`id_company`),
  UNIQUE KEY `NameCompany` (`NameCompany`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tbl_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direct_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `duration` smallint(6) NOT NULL,
  `memb_int` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tbl_passwords` (
  `id_password` int(11) NOT NULL AUTO_INCREMENT,
  `PersonaId` int(11) NOT NULL,
  `UserLogin` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `UserPassword` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_password`),
  KEY `fk_persona` (`PersonaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tbl_persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyId` int(11) NOT NULL,
  `FirstName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `SurName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `MiddleName` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EmailUser` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneUser` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KolvoStudent` smallint(6) NOT NULL COMMENT 'кол-во слушателей',
  PRIMARY KEY (`id_persona`),
  KEY `fk_company` (`CompanyId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


ALTER TABLE `tbl_persona`
  ADD CONSTRAINT `fk_company` FOREIGN KEY (`CompanyId`) REFERENCES `tbl_company` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
