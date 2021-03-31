-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Anamakine: sql201.byethost.com
-- Üretim Zamanı: 19 Oca 2019, 15:44:27
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
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` int(1) NOT NULL,
  `user_uid` varchar(30) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_first` varchar(30) NOT NULL,
  `user_last` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `image`, `user_uid`, `user_pwd`, `user_email`, `user_first`, `user_last`) VALUES
(1, 0, 'alpekin', '123456', 'alperenekin97@gmail.com', 'alperen', 'ekin'),
(4, 0, 'berkbildirici', 'berkbildirici', 'berkbildirici@hotmail.com', 'Berk', 'Bildirici');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
