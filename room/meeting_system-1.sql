-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2013 年 05 月 02 日 11:04
-- 伺服器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `meeting_system-1`
--

-- --------------------------------------------------------

--
-- 表的結構 `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `Mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '會議id',
  `Name` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '會議名稱',
  `Rid` int(11) NOT NULL COMMENT '教室id',
  `Date` date NOT NULL COMMENT '日期',
  `startTime` int(11) NOT NULL COMMENT '開始時段',
  `endTime` int(11) NOT NULL COMMENT '結束時段',
  `Borrower` int(11) NOT NULL COMMENT '借用人Uid',
  PRIMARY KEY (`Mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 轉存資料表中的資料 `meetings`
--

INSERT INTO `meetings` (`Mid`, `Name`, `Rid`, `Date`, `startTime`, `endTime`, `Borrower`) VALUES
(1, '開會1', 1, '2013-05-08', 2, 5, 1),
(2, '開會2', 1, '2013-05-08', 6, 8, 2),
(3, '開會3', 2, '2013-05-09', 2, 5, 1);

-- --------------------------------------------------------

--
-- 表的結構 `meeting_user`
--

CREATE TABLE IF NOT EXISTS `meeting_user` (
  `serial` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `Mid` int(11) NOT NULL COMMENT '會議id',
  `Uid` int(11) NOT NULL COMMENT '參與人員id',
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- 轉存資料表中的資料 `meeting_user`
--

INSERT INTO `meeting_user` (`serial`, `Mid`, `Uid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 2),
(5, 2, 3),
(6, 2, 4);

-- --------------------------------------------------------

--
-- 表的結構 `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `Rid` int(11) NOT NULL AUTO_INCREMENT COMMENT '教室id',
  `Name` varchar(11) NOT NULL COMMENT '教室名稱',
  PRIMARY KEY (`Rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 轉存資料表中的資料 `room`
--

INSERT INTO `room` (`Rid`, `Name`) VALUES
(1, 'M-410'),
(2, 'M-211'),
(3, 'M-216'),
(4, 'M-116');

-- --------------------------------------------------------

--
-- 表的結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Id` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '帳號',
  `Password` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '密碼',
  `Name` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '會議名稱',
  `Category` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '類別',
  `Email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Phone` varchar(11) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 轉存資料表中的資料 `user`
--

INSERT INTO `user` (`Uid`, `Id`, `Password`, `Name`, `Category`, `Email`, `Phone`, `Address`) VALUES
(1, '99300018', '123456', '王珮綸', '學生', 'lucy2750@yahoo.com.tw', '0911111111', '彰化縣員林鎮'),
(2, '9930020', '456789', '李大明', '學生', 'he@gamil.com', '0922222222', '台中市霧峰區'),
(3, 'lucy', 'lucy123', '張小平', '老師', 'joe123@yahoo.com.tw', '0966666666', '台北市信義區'),
(4, '9930022', '123456', '黃柏偉', '學生', '99300222@yahoo.com.tw', '0955555555', '台中市大里區'),
(5, '9930050', '123456', '張可佳', '學生', '9930050@gmail.com', '0988888888', '台中市大里區');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
