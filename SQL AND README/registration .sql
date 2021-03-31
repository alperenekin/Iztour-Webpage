-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Anamakine: sql201.byethost.com
-- Üretim Zamanı: 19 Oca 2019, 15:45:05
-- Sunucu sürümü: 5.6.41-84.1
-- PHP Sürümü: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `b3_23321899_login`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `telno` varchar(20) NOT NULL,
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Tablo döküm verisi `registration`
--

INSERT INTO `registration` (`place`, `date`, `telno`, `r_id`) VALUES
('seferihisar', '2019-05-01', '5557831620', 34),
('foca', '2019-07-20', '5367125643', 35);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
