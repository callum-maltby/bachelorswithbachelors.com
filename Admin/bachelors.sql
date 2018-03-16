-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2017 at 02:59 AM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bachelo1_bachelorswithbachelors`
--

-- --------------------------------------------------------

--
-- Table structure for table `bachelors`
--

CREATE TABLE IF NOT EXISTS `bachelors` (
  `name` text NOT NULL,
  `age` int(11) NOT NULL DEFAULT '0',
  `degree` text,
  `location` text NOT NULL,
  `mobileNumber` text NOT NULL,
  `email` text NOT NULL,
  `bio` text NOT NULL,
  `display` tinyint(1) NOT NULL,
  `dateTimeAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bachelors`
--

INSERT INTO `bachelors` (`name`, `age`, `degree`, `location`, `mobileNumber`, `email`, `bio`, `display`, `dateTimeAdded`, `image`) VALUES
('Ebeunbsh', 0, 'thRJBCNxJPSXi', 'New York', 'USA', '', '4, <a href="https://loans7foal.com/">payday loans</a>, ', 0, '2017-10-19 14:12:04', ''),
('Tkkaarrm', 0, 'ZJfabTqpNPCAxLNj', 'New York', 'USA', '', '5, <a href="https://loans24rjn.com/">payday loan</a>, ', 0, '2017-10-19 13:40:59', ''),
('Xcjzpnvw', 0, 'wcUqFRczbpxgud', 'New York', 'USA', '', '6, <a href="https://loanscerj.com/">payday loans online</a>, ', 0, '2017-10-19 13:10:12', ''),
('Yattpbqk', 0, 'dvopSlcKOvkGueLPa', 'New York', 'USA', '', '3, <a href="https://loansnzyr.com/">payday loans online</a>, ', 0, '2017-10-19 12:39:47', ''),
('Pcnjbscr', 0, 'AfnduqQSBf', 'New York', 'USA', '', '3, <a href="https://loansnerc.org/">payday loans online</a>, ', 0, '2017-10-19 12:09:41', ''),
('Qchnfpna', 0, 'meaNkFqXlsmTERhQ', 'New York', 'USA', '', '4, <a href="https://loanenav.net/">payday loans</a>, ', 0, '2017-10-19 11:39:22', ''),
('Lzocoxsg', 0, 'BAJlWEnQtYyxDVUg', 'New York', 'USA', '', '12, <a href="https://loansczne.com/">payday loan</a>, ', 0, '2017-10-19 11:07:59', ''),
('Ixkziyao', 0, 'hGfNyLSBZuaDDRNob', 'New York', 'USA', '', '4, <a href="https://paydaycnrs.net/">cash advance</a>, ', 0, '2017-10-19 10:37:40', ''),
('Junulenx', 0, 'qiMBsgpXKCqjABs', 'New York', 'USA', '', '4, <a href="https://paydayobns.com/">payday loans online</a>, ', 0, '2017-10-19 10:07:44', ''),
('Gtgknacs', 0, 'HgUlDFqdWPR', 'New York', 'USA', '', '6, <a href="https://paydayceinf.org/">cash advance</a>, ', 0, '2017-10-19 09:37:08', ''),
('Pjczctzq', 0, 'cbDGsreColLdPjBQm', 'New York', 'USA', '', '12, <a href="https://loans7foal.com/">cash advance</a>, ', 0, '2017-10-18 06:49:27', ''),
('Oygtospy', 0, 'FkcBSCQQniNfWzdOlC', 'New York', 'USA', '', '6, <a href="https://loans24rjn.com/">cash advance</a>, ', 0, '2017-10-18 06:20:14', ''),
('Tvxczwoe', 0, 'XlPoieCnJHbbO', 'New York', 'USA', '', '3, <a href="https://loanscerj.com/">payday loans</a>, ', 0, '2017-10-18 05:50:48', ''),
('Iinnimux', 0, 'qoBNqpPulukwCaH', 'New York', 'USA', '', '4, <a href="https://loansnzyr.com/">payday loan</a>, ', 0, '2017-10-18 05:21:44', ''),
('Xocwsruf', 0, 'OiffSOfOtAyZLXHeCsG', 'New York', 'USA', '', '12, <a href="https://loansnerc.org/">payday loans</a>, ', 0, '2017-10-18 04:52:54', ''),
('Neiqygzq', 0, 'iwomkaETBXrQOh', 'New York', 'USA', '', '12, <a href="https://loanenav.net/">payday loan</a>, ', 0, '2017-10-18 04:23:07', ''),
('Ndghwqye', 0, 'UqZGmDcwiZwtek', 'New York', 'USA', '', '6, <a href="https://loansczne.com/">cash advance</a>, ', 0, '2017-10-18 03:53:02', ''),
('Tbicnsvh', 0, 'kVlWUGPxrgYM', 'New York', 'USA', '', '5, <a href="https://paydaycnrs.net/">payday loan</a>, ', 0, '2017-10-18 03:22:33', ''),
('Wzfivzun', 0, 'uZTfuWAkfUi', 'New York', 'USA', '', '12, <a href="https://paydayobns.com/">cash advance</a>, ', 0, '2017-10-18 02:52:13', ''),
('Bqhhevpp', 0, 'ufAldeALcBlIrZwNo', 'New York', 'USA', '', '6, <a href="https://paydayceinf.org/">cash advance</a>, ', 0, '2017-10-18 02:23:00', ''),
('Kfspufnd', 0, 'mHBLSPYTdlTbNC', 'New York', 'USA', '', '12, <a href="https://loans7foal.com/">cash advance</a>, ', 0, '2017-10-17 21:39:34', ''),
('Oyzvyuvr', 0, 'NnBLCQIwtwmyBnCE', 'New York', 'USA', '', '12, <a href="https://loans24rjn.com/">payday loans</a>, ', 0, '2017-10-17 21:08:11', ''),
('Vbgvaioo', 0, 'FSNepJNiXCgYGsey', 'New York', 'USA', '', '4, <a href="https://loanscerj.com/">cash advance</a>, ', 0, '2017-10-17 20:38:11', ''),
('Jykvlozw', 0, 'MSUZijdRlZcUAu', 'New York', 'USA', '', '5, <a href="https://loansnzyr.com/">payday loans</a>, ', 0, '2017-10-17 20:08:42', ''),
('Xgfbbmsy', 0, 'UapRGvCqoAPYZvW', 'New York', 'USA', '', '4, <a href="https://loansnerc.org/">cash advance</a>, ', 0, '2017-10-17 19:38:38', ''),
('Uprimoyj', 0, 'NFHGognJpyZbC', 'New York', 'USA', '', '3, <a href="https://loanenav.net/">cash advance</a>, ', 0, '2017-10-17 19:07:31', ''),
('Ypdndqfg', 0, 'RPoxJlnKhTyWE', 'New York', 'USA', '', '3, <a href="https://loans7foal.com/">payday loan</a>, ', 0, '2017-10-17 18:36:53', ''),
('Dffffihi', 0, 'TsAnDPmtwkPdzksLL', 'New York', 'USA', '', '5, <a href="https://loans24rjn.com/">cash advance</a>, ', 0, '2017-10-17 18:05:41', ''),
('Xhelicvr', 0, 'SqzfNgdQafX', 'New York', 'USA', '', '5, <a href="https://loanscerj.com/">payday loans online</a>, ', 0, '2017-10-17 17:34:35', ''),
('Snsfmbdu', 0, 'ZNhHwrmtrzzZIS', 'New York', 'USA', '', '12, <a href="https://loansnzyr.com/">payday loans online</a>, ', 0, '2017-10-17 17:03:12', ''),
('Ptgpskjz', 0, 'hSbfmEfbIVWW', 'New York', 'USA', '', '5, <a href="https://loansnerc.org/">payday loans</a>, ', 0, '2017-10-17 16:30:29', ''),
('Zzazhfzy', 0, 'uyIaUHrouqebcqehExH', 'New York', 'USA', '', '3, <a href="https://loanenav.net/">cash advance</a>, ', 0, '2017-10-17 15:58:05', ''),
('Skwwyklh', 0, 'JzObgcKUkEcr', 'New York', 'USA', '', '3, <a href="https://loansczne.com/">payday loans online</a>, ', 0, '2017-10-17 15:26:22', ''),
('Hrjbtxek', 0, 'xhVLWHbWcoyrgb', 'New York', 'USA', '', '3, <a href="https://paydayobns.com/">payday loan</a>, ', 0, '2017-10-17 14:24:56', ''),
('Cukqfgnq', 0, 'vKmtUkMpuhb', 'New York', 'USA', '', '6, <a href="https://paydayceinf.org/">payday loans</a>, ', 0, '2017-10-17 13:52:34', ''),
('Hzxcqlik', 0, 'NBgmieJwfxK', 'New York', 'USA', '', '12, <a href="https://loansczne.com/">payday loans</a>, ', 0, '2017-10-17 13:20:40', ''),
('Fhctdvqj', 0, 'PggITmYsEO', 'New York', 'USA', '', '4, <a href="https://paydaycnrs.net/">payday loans online</a>, ', 0, '2017-10-17 12:49:20', ''),
('Bdeyybki', 0, 'XXCJUNBAEmhkvR', 'New York', 'USA', '', '5, <a href="https://paydayobns.com/">cash advance</a>, ', 0, '2017-10-17 12:17:54', ''),
('Foukuuqg', 0, 'NbSNtdkTqbNW', 'New York', 'USA', '', '5, <a href="https://paydayceinf.org/">payday loans</a>, ', 0, '2017-10-17 11:45:20', ''),
('Uwpdamzb', 0, 'oaIsUYFOYXNLhYlKziv', 'New York', 'USA', '', '3, <a href="https://loansczne.com/">payday loans</a>, ', 0, '2017-10-17 11:13:22', ''),
('Xncwwnqo', 0, 'DiwysXVEfPHVbjm', 'New York', 'USA', '', '4, <a href="https://paydaycnrs.net/">payday loan</a>, ', 0, '2017-10-17 10:42:12', ''),
('Gbozzrgh', 0, 'lOMfxPbmXwnINMSkq', 'New York', 'USA', '', '3, <a href="https://paydayobns.com/">payday loans</a>, ', 0, '2017-10-17 10:11:10', ''),
('Hnkwweir', 0, 'cutyMtklgBVxhA', 'New York', 'USA', '', '12, <a href="https://paydayceinf.org/">cash advance</a>, ', 0, '2017-10-17 09:40:07', ''),
('Siyemjws', 0, 'yndZohXhtQdnOSyxTi', 'New York', 'USA', '', '3, <a href="http://onlinecialis-cialisvip.com/">cialis online</a>, ', 0, '2017-10-16 16:28:55', ''),
('Luhsdmbh', 0, 'OQPSfiXdnkYBIh', 'New York', 'USA', '', '12, <a href="http://cialisonline-pricepil.com/">cialis price</a>, ', 0, '2017-10-16 15:57:35', ''),
('Jnseneiw', 0, 'YshBQisXaAkf', 'New York', 'USA', '', '12, <a href="http://cialisonline-vipmej.com/">cialis</a>, ', 0, '2017-10-16 15:26:04', ''),
('Wnnoshrg', 0, 'RFGFPpdSnzRYoThHC', 'New York', 'USA', '', '3, <a href="http://genericcialis-viaed.com/">cialis</a>, ', 0, '2017-10-16 14:56:47', ''),
('Qcszsidr', 0, 'XoxBMWIQUTrxpJ', 'New York', 'USA', '', '6, <a href="http://buycialis-menedpil.com/">buy cialis</a>, ', 0, '2017-10-16 14:25:36', ''),
('Yfrbopgl', 0, 'NBjhIBXhgbKIdbVhJH', 'New York', 'USA', '', '3, <a href="http://onlineviagra-genericed.com/">viagra 100mg</a>, ', 0, '2017-10-16 13:54:12', ''),
('Beuilisr', 0, 'BnmaveHXxQwy', 'New York', 'USA', '', '3, <a href="http://cheapviagra-edmen.com/">viagra online</a>, ', 0, '2017-10-16 13:23:41', ''),
('Lwroysca', 0, 'EiClfFvckK', 'New York', 'USA', '', '12, <a href="http://buyviagra-edgetpil.com/">generic viagra</a>, ', 0, '2017-10-16 12:52:28', ''),
('Zxwbreku', 0, 'qXnMjvMlnok', 'New York', 'USA', '', '3, <a href="http://viagraonline-getonl.com/">generic viagra</a>, ', 0, '2017-10-16 12:19:08', ''),
('Qauoxdgu', 0, 'rXbUdvGacadgiBNCQNX', 'New York', 'USA', '', '6, <a href="http://genericviagra-buyeds.com/">viagra</a>, ', 0, '2017-10-16 11:46:52', ''),
('Xcfqmsuz', 0, 'ZmoZcGtYjMuo', 'New York', 'USA', '', '4, <a href="http://onlinecialis-cialisvip.com/">cialis online</a>, ', 0, '2017-10-16 07:39:17', ''),
('Tdvewkbd', 0, 'fPJokbJseghJaVo', 'New York', 'USA', '', '4, <a href="http://cialisonline-pricepil.com/">cialis</a>, ', 0, '2017-10-16 07:06:04', ''),
('Dxkvpjbl', 0, 'waukAyiTMHsjPLQK', 'New York', 'USA', '', '3, <a href="http://cialisonline-vipmej.com/">cialis online</a>, ', 0, '2017-10-16 06:33:47', ''),
('Wtrhqnku', 0, 'dKYyVPZJmmhziF', 'New York', 'USA', '', '4, <a href="http://genericcialis-viaed.com/">generic cialis</a>, ', 0, '2017-10-16 05:59:54', ''),
('Hdyzenvq', 0, 'yAOzWcEKwRjgdthS', 'New York', 'USA', '', '4, <a href="http://buycialis-menedpil.com/">cheap cialis</a>, ', 0, '2017-10-16 05:27:06', ''),
('Yenlqbyq', 0, 'xVeyQrXCNrGGzfEe', 'New York', 'USA', '', '3, <a href="http://onlineviagra-genericed.com/">viagra online</a>, ', 0, '2017-10-16 04:53:59', ''),
('Wraegrnx', 0, 'zZqBJmChJPFWRWKFOHS', 'New York', 'USA', '', '5, <a href="http://cheapviagra-edmen.com/">viagra price</a>, ', 0, '2017-10-16 04:21:44', ''),
('Cvcrkhod', 0, 'WOnZUZZdEgqCqE', 'New York', 'USA', '', '12, <a href="http://buyviagra-edgetpil.com/">buy viagra</a>, ', 0, '2017-10-16 03:49:56', ''),
('Myvzxard', 0, 'pIULmnBcqYhEswpxFuM', 'New York', 'USA', '', '3, <a href="http://viagraonline-getonl.com/">generic viagra</a>, ', 0, '2017-10-16 03:17:48', ''),
('Ychrcmah', 0, 'PJTzrnRKWVFywA', 'New York', 'USA', '', '3, <a href="http://genericviagra-buyeds.com/">buy viagra</a>, ', 0, '2017-10-16 02:42:51', ''),
('yjxkkmhc', 0, 'yInktpgKBCObwHcS', 'New York', 'USA', '', 'pJxmnD  <a href="http://znplitotssou.com/">znplitotssou</a>, [url=http://muygojvufoag.com/]muygojvufoag[/url], [link=http://wrjorpfwtdep.com/]wrjorpfwtdep[/link], http://yffzckmqzcht.com/', 0, '2017-10-03 10:16:35', ''),
('Matt Storer', 39, 'Bachelor of handsomeness', 'Wherever the girls are ', '04333123488', 'matt_storer@altavista.co.uk', 'I am unique', 0, '2017-09-25 00:18:43', '2aaa4c0.jpg'),
('William "Sexbomb" Ngeo', 24, 'right angle', '37.7964Â° S, 144.9612Â° E', '0469 420 911', 'orientalexpress@yahOO.com', 'All aboard the oriental express', 0, '2017-05-24 21:18:23', 'url.htm'),
('Callum "Sexgrenade" Maltby', 23, 'Literally Everything!', '38.1499Â° S, 144.3617Â° E', '0469 420 911', 'whats.yours???@hotmale.com', 'NO REGRETS!!!', 0, '2017-05-17 21:03:11', 'cal4.jpg'),
('Arjun (RJ)', 19, 'Bachelor of Science', 'Anywhere where there is chicks', '0424251253', 'asrikanth@unimelb.edu.au', 'Would you risk it for the chocolate biscuit?', 0, '2017-04-24 03:46:22', 'bachelor.jpg'),
('Clive Palmer', 63, 'Diploma of Law', 'Gold Coast', '5479 2800', 'admin@palmerunited.com', 'Bunnings\r\nBaby\r\nSweet n sour\r\nHour of power\r\nSaigon corner\r\nRound about\r\nMelbourne', 0, '2017-04-12 22:15:54', 'IMG_5807.JPG'),
('Marc''Angelo Marasco', 19, 'Science', 'God''s Country', 'Who cares', '', 'I''m consistently tired', 0, '2017-04-12 22:09:18', '17902780_1846032925414225_886730523_o.jpg'),
('Vanessa Hope', 19, 'Commerce', 'Melbourne', '041luvmesxc', 'na@na.com', 'xclnt', 0, '2017-04-12 22:05:54', '17361287_1506728382684051_46504532_n.jpg'),
('Jason Bertocchi', 26, 'Town planning and dentistry double degree', 'Wagga Wagga', '+61 433 308 485', 'jakebertone@gmail.com', 'I like piÃ±a coladas and getting caught in the rain. ', 0, '2017-04-10 05:56:08', 'image.jpg'),
('Jason Bertocchi', 26, 'Town planning and dentistry double degree', 'Wagga Wagga', '+61 433 308 485', 'jakebertone@gmail.com', 'I like piÃ±a coladas and getting caught in the rain. ', 0, '2017-04-10 05:55:54', 'image.jpg'),
('Joseph McKee', 24, 'Engineering', 'Sydney', 'gonna buy me dinner first?', 'jsphmck92@gmail.com', 'Fan of Cal', 0, '2017-04-10 04:52:08', '1491817850084-145675792.jpg'),
('John', -5, 'Bachelor of HEUH', '', '', '', '', 0, '2017-04-07 01:48:43', '1BLtDZi.gif'),
('Matthew Thomas', 22, 'Bachelor of Science', 'Parkville', '0431563144', 'tmatthew02@yahoo.com.au', 'Cal''s mate, yeah guys, I know the creator', 0, '2017-04-05 22:15:09', 'IMG_1279.JPG'),
('Matthew Thomas', 22, 'Bachelor of Science', 'Parkville', '0431563144', 'tmatthew02@yahoo.com.au', 'Cal''s mate, yeah guys, I know the creator', 0, '2017-04-05 22:14:52', 'IMG_1279.JPG'),
('Eligible Bachelor Example', 25, 'Physics? I dunno', 'Springfield', '0413 123 456', 'nerds@simpsons.org', 'This is an example bachelor profile. You can make one yourself, right now!', 0, '2017-03-31 17:51:30', 'simpsonsNerds.png'),
('Another Eligible Bachelor Example', 56, 'Bachelor''s Degree in English Literature', 'England?', 'No idea', 'hugh@hugh.org', 'This could be you too. Sign up now to see your face here', 0, '2017-03-31 02:31:47', 'hughGrant.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
