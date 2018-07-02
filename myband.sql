-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2014 at 08:51 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myband`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsarticles`
--

CREATE TABLE IF NOT EXISTS `newsarticles` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `newsarticles`
--

INSERT INTO `newsarticles` (`id`, `title`, `content`, `image`, `date_created`) VALUES
(1, 'Mijn eerste item', 'Ook al een mooi plaatje. In ieder geval werkt dit goed voor het voorbeeld. ', 'face3.png', '0000-00-00 00:00:00'),
(2, 'Weer een titel', 'Een stukje tekst over een troll face.', 'face2.png', '0000-00-00 00:00:00'),
(3, 'Aan het einde der Lange Laan', 'Plotseling blafte een hond, en antwoordde een andere hond en verscheurde de donsende stilte in lange, ruwe flarden; de nijdige hondekelen, heesch, ademloos, schor vijandig; plotseling ook zwegen zij stil. Aan het einde der Lange Laan lag diep in zijn voortuin het Rezidentie-huis. Laag, dadelijk in den nacht der waringinboomen, zigzagde het zijne pannendaken, het eene achter het andere, naar de schaduw van den achtertuin toe, met een primitieve lijn van dakteekening, over iedere galerij een dak, over iedere kamer een dak, tot éene lange daksilhouet.', 'face1.png', '0000-00-00 00:00:00'),
(4, 'Dit is een titel', 'Een hele korte tekst.', 'trashcat_410.jpg', '0000-00-00 00:00:00');
