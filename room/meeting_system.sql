-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2013 年 05 月 01 日 21:24
-- 伺服器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `meeting_system`
--

-- --------------------------------------------------------

--
-- 表的結構 `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 轉存資料表中的資料 `date`
--

INSERT INTO `date` (`Did`, `date`) VALUES
(1, '2013-04-28'),
(2, '2013-04-29'),
(3, '2013-04-30'),
(4, '2013-05-01'),
(5, '2013-05-02'),
(6, '2013-05-03'),
(7, '2013-05-04');

-- --------------------------------------------------------

--
-- 表的結構 `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `Mid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL COMMENT '會議名稱',
  `Rid` int(30) NOT NULL COMMENT '教室',
  `Date` date NOT NULL COMMENT '日期id',
  `activite` int(30) NOT NULL COMMENT '是否存在',
  `Borrower` varchar(30) NOT NULL COMMENT '借用人',
  PRIMARY KEY (`Mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- 轉存資料表中的資料 `meetings`
--

INSERT INTO `meetings` (`Mid`, `Name`, `Rid`, `Date`, `activite`, `Borrower`) VALUES
(115, '第一次課委會', 1, '2013-04-26', 1, 'lucy'),
(116, '喜歡', 3, '2013-04-27', 1, 'lucy'),
(117, '現在', 1, '2013-05-04', 1, '9930018'),
(118, 'wow', 4, '2013-04-27', 1, 'na872043  '),
(119, '你好', 3, '2013-05-05', 1, '9930018'),
(120, '開會', 2, '2013-05-06', 1, '9930018'),
(121, '你好嗎', 4, '2013-05-01', 1, 'lucy'),
(122, '123455', 3, '2013-05-01', 1, 'lucy'),
(123, '123455', 3, '2013-05-01', 1, 'lucy');

-- --------------------------------------------------------

--
-- 表的結構 `meeting_date`
--

CREATE TABLE IF NOT EXISTS `meeting_date` (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- 轉存資料表中的資料 `meeting_date`
--

INSERT INTO `meeting_date` (`Did`, `date`) VALUES
(2, '2013-04-28'),
(3, '2013-04-28'),
(4, '2013-04-28'),
(5, '2013-04-29'),
(6, '2013-05-01'),
(7, '2013-04-29'),
(8, '2013-05-02'),
(9, '2013-05-02'),
(10, '2013-05-02'),
(11, '2013-05-02'),
(12, '2013-05-02'),
(13, '2013-05-02'),
(14, '2013-04-29'),
(15, '2013-04-29'),
(16, '2013-04-29'),
(17, '2013-04-29'),
(18, '2013-04-29'),
(19, '2013-04-29'),
(20, '2013-04-29'),
(21, '2013-04-29'),
(22, '2013-04-29'),
(23, '2013-04-29'),
(24, '2013-04-28'),
(25, '2013-04-29'),
(26, '2013-05-01'),
(27, '2013-05-02'),
(28, '2013-05-01');

-- --------------------------------------------------------

--
-- 表的結構 `meeting_time`
--

CREATE TABLE IF NOT EXISTS `meeting_time` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Mid` int(11) NOT NULL COMMENT '會議id',
  `Rid` int(10) NOT NULL COMMENT '會議教室id',
  `TimeSlot` int(11) NOT NULL COMMENT '當天時段',
  `Date` date NOT NULL COMMENT '會議日期',
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- 轉存資料表中的資料 `meeting_time`
--

INSERT INTO `meeting_time` (`serial`, `Mid`, `Rid`, `TimeSlot`, `Date`) VALUES
(1, 115, 1, 2, '2013-04-26'),
(2, 115, 1, 3, '2013-04-26'),
(3, 0, 0, 3, '2013-04-27'),
(4, 119, 3, 4, '2013-05-05'),
(5, 119, 3, 5, '2013-05-05'),
(6, 119, 3, 6, '2013-05-05'),
(7, 120, 2, 3, '2013-05-06'),
(8, 120, 2, 4, '2013-05-06'),
(9, 120, 2, 5, '2013-05-06'),
(10, 120, 2, 6, '2013-05-06'),
(11, 120, 2, 7, '2013-05-06'),
(12, 121, 4, 2, '2013-05-01'),
(13, 121, 4, 3, '2013-05-01'),
(14, 121, 4, 4, '2013-05-01'),
(15, 121, 4, 5, '2013-05-01'),
(16, 123, 3, 3, '2013-05-01'),
(17, 123, 3, 4, '2013-05-01'),
(18, 123, 3, 5, '2013-05-01'),
(19, 123, 3, 6, '2013-05-01');

-- --------------------------------------------------------

--
-- 表的結構 `meeting_user`
--

CREATE TABLE IF NOT EXISTS `meeting_user` (
  `serial` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `Mid` int(11) NOT NULL COMMENT '會議id',
  `Uid` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '參與人員id',
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 轉存資料表中的資料 `meeting_user`
--

INSERT INTO `meeting_user` (`serial`, `Mid`, `Uid`) VALUES
(1, 115, '9930094'),
(2, 115, '9930095'),
(3, 115, '9930096');

-- --------------------------------------------------------

--
-- 表的結構 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(11) CHARACTER SET utf8 NOT NULL,
  `price` varchar(11) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 轉存資料表中的資料 `product`
--

INSERT INTO `product` (`pid`, `product`, `price`) VALUES
(1, 'a', '100'),
(2, 'b', '430'),
(3, 'c', '500'),
(4, 'k', '1000');

-- --------------------------------------------------------

--
-- 表的結構 `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `Rid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(11) CHARACTER SET utf8 NOT NULL,
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
-- 表的結構 `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `Mid` int(11) NOT NULL,
  `Rid` int(11) NOT NULL,
  `Date` date NOT NULL,
  `TimeSlot` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- 轉存資料表中的資料 `time`
--

INSERT INTO `time` (`serial`, `Mid`, `Rid`, `Date`, `TimeSlot`) VALUES
(1, 116, 3, '2013-04-27', 1),
(2, 116, 3, '2013-04-27', 2),
(3, 116, 3, '2013-04-27', 5),
(5, 0, 0, '0000-00-00', 6),
(6, 116, 3, '2013-04-27', 5);

-- --------------------------------------------------------

--
-- 表的結構 `txst`
--

CREATE TABLE IF NOT EXISTS `txst` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `TimeSlot` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 轉存資料表中的資料 `txst`
--

INSERT INTO `txst` (`serial`, `TimeSlot`) VALUES
(1, 6),
(2, 0),
(3, 6),
(4, 5),
(5, 5),
(6, 0),
(7, 0),
(8, 0),
(9, 3),
(10, 4),
(11, 5),
(12, 2),
(13, 3),
(14, 4);

-- --------------------------------------------------------

--
-- 表的結構 `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '檔案名稱',
  `filesize` int(4) NOT NULL COMMENT '檔案大小',
  `filetype` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '檔案類型',
  `Borrower` varchar(30) CHARACTER SET big5 NOT NULL,
  `filepic` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- 轉存資料表中的資料 `upload`
--

INSERT INTO `upload` (`f_id`, `filename`, `filesize`, `filetype`, `Borrower`, `filepic`) VALUES
(19, 'Qxi6jvm.gif', 546139, 'image/gif', '', '');

-- --------------------------------------------------------

--
-- 表的結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Id` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 轉存資料表中的資料 `user`
--

INSERT INTO `user` (`Uid`, `Id`, `Password`, `Name`, `Category`, `Email`, `Phone`, `Address`) VALUES
(1, 'lucy', 'lucy123', '王珮綸', '學生', 'lucy2750@yahoo.com.tw', '0921319059', '彰化縣員林鎮'),
(2, 'john', 'john123', '', '', '123@gmial.com', '0922222222', ''),
(3, '9930094', '123456', '', '', 's9930018@gmail.com', '0966666666', ''),
(4, '9930095', '123456', '', '', 'dsfsdsd@yahoo.com.tw', '0933333333', ''),
(5, '9930096', '5555', '', '', 'fqewfwe@gmail.com', '0955555555', ''),
(6, 's9930022', '11111', '', '', 'fqewifo@yahoo.com.tw', '0988888888', ''),
(13, 'na872043', '132456', '謝嘉益', '學生', 'na87204@gmail.com', '0910763295', '彰化縣田中鎮'),
(14, '90340', '90340', '王小名', '老師', 'a15112@yahoo.com.tw', '04-25138561', '台中市霧峰區'),
(15, 'yolucy', 'yolucy', '123456', '', '90340@google.com', '0958214596', ''),
(16, '9930018', '123456', 'you', '', 'lucy2750@gmail.com', '0977777777', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
