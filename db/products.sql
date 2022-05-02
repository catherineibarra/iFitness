-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2022 年 04 月 23 日 14:39
-- 服务器版本: 5.5.56
-- PHP 版本: 5.4.45-0+deb7u8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bxr7713`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Ghost 100% Whey Protein 2lb', '60.21', './images/pd1.jpg'),
(2, 'Musashi High Protein Chocolate 2kg', '76.49', './images/pd2.jpg'),
(3, 'Muscle Matrix - 60 vcaps (25mg per capsule)', '109', './images/pd3.jpg'),
(4, 'Scream Supps PINHEAD 1 Serve Sample', '3.96', './images/pd4.jpg'),
(5, 'NIVERSAL ANIMAL ENERGY 60 CAPSUL', '29', './images/pd5.jpg'),
(6, 'PREMIUM HERBAL SUPPLEMENTS', '39', '../images/pd6.jpg'),
(7, 'Cellucor C4 Original ID 60 Serves', '68.90', './images/pd7.jpg'),
(8, 'Rich Piana 5% Nutrition Freak Show', '77', './images/pd8.jpg'),
(9, 'Muscle Builder 90 capsules', '77', './images/pd9.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
