-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2014 at 12:48 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `class_network`
--
CREATE DATABASE IF NOT EXISTS `class_network` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `class_network`;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `name` varchar(32) NOT NULL,
  `type` varchar(64) NOT NULL,
  `place` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `organiser` varchar(32) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`name`, `type`, `place`, `date`, `time`, `organiser`, `details`) VALUES
('', '', '', '0000-00-00', '2014-10-05 04:41:04', '12106B0035', ''),
('Yoroichi', '', 'Mu', '2014-09-08', '2014-09-30 10:26:25', '12106B0035', 'DDDo'),
('Picnic To', 'yupo', 'Mumbai', '2014-10-21', '2014-10-10 08:34:22', '12106B0035', 'Enjoy'),
('picnic', '', 'yo', '0022-02-22', '2014-09-29 18:14:22', '12106B0035', 'kvnksd');

-- --------------------------------------------------------

--
-- Table structure for table `pnmanager`
--

CREATE TABLE IF NOT EXISTS `pnmanager` (
  `member` varchar(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnmanager`
--

INSERT INTO `pnmanager` (`member`, `name`, `status`) VALUES
('12106B0026', 'yo', 0),
('12106B0027', 'Hello', 0),
('12106B0027', 'PooKapil', 1),
('12106B0027', 'PooKapil1', 1),
('12106B0027', 'Project', 0),
('12106B0028', 'Tax', 0),
('12106B0028', 'yo', 0),
('12106B0029', 'Tax', 0),
('12106B0029', 'yo', 0),
('12106B0032', 'Hello', 0),
('12106B0032', 'PooKapil1', 1),
('12106B0032', 'Project', 0),
('12106B0032', 'Tax', 0),
('12106B0032', 'yo', 0),
('12106B0034', 'yup', 0),
('12106B0035', 'Hello', 1),
('12106B0035', 'PooKapil1', 1),
('12106B0035', 'Project', 0),
('12106B0035', 'yup', 0),
('12106B0070', 'PooKapil', 0),
('12106B0070', 'PooKapil1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `priv1disc`
--

CREATE TABLE IF NOT EXISTS `priv1disc` (
  `sender` varchar(12) NOT NULL,
  `receiver` varchar(12) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priv1disc`
--

INSERT INTO `priv1disc` (`sender`, `receiver`, `msg`, `time`, `status`) VALUES
('12106B0026', '12106B0035', 'hello', '2014-10-10 06:21:57', 1),
('12106B0026', '12106B0027', '  nn', '2014-10-10 08:16:09', 0),
('12106B0026', '12106B0035', 'how r u', '2014-10-10 08:35:22', 1),
('12106B0027', '12106B0032', 'HI wasup', '2014-10-07 02:27:19', 1),
('12106B0027', '12106B0032', 'OK cool', '2014-10-07 02:27:42', 1),
('12106B0028', '12106B0040', 'yo', '2014-09-16 06:57:18', 1),
('12106B0028', '12106B0040', 'yokjkjk', '2014-09-16 06:57:25', 1),
('12106B0028', '12106B0040', '121', '2014-09-16 06:57:32', 1),
('12106B0028', '12106B0040', 'ok', '2014-09-16 06:59:22', 1),
('12106B0028', '12106B0040', 'hello', '2014-09-16 07:14:10', 1),
('12106B0028', '12106B0040', 'hellojoj', '2014-09-16 07:14:15', 1),
('12106B0028', '12106B0032', 'sdsd', '2014-10-05 18:38:31', 0),
('12106B0028', '0', 'dfs', '2014-10-05 18:39:03', 0),
('12106B0028', '0', 'yo', '2014-10-05 18:49:53', 0),
('12106B0028', '0', 'df', '2014-10-05 18:50:25', 0),
('12106B0028', '0', 'df', '2014-10-05 18:50:42', 0),
('12106B0028', '0', 'fgf', '2014-10-05 18:50:57', 0),
('12106B0028', '0', 'dfd', '2014-10-05 18:51:06', 0),
('12106B0028', '0', 'fgf', '2014-10-05 18:51:13', 0),
('12106B0032', '12106B0027', 'Enjoying ', '2014-10-07 02:27:27', 1),
('12106B0032', '12106B0027', 'Bye', '2014-10-07 02:27:47', 1),
('12106B0034', '12106B0035', 'bo', '2014-09-29 10:24:44', 1),
('12106B0034', '12106B0035', 'yo', '2014-09-29 10:29:03', 1),
('12106B0034', '12106B0035', 'ppw', '2014-09-29 10:29:43', 1),
('12106B0034', '12106B0035', 'jo', '2014-10-04 10:53:53', 1),
('12106B0034', '12106B0035', 'mm', '2014-10-04 10:55:20', 1),
('12106B0034', '12106B0035', ' m ', '2014-10-04 10:55:22', 1),
('12106B0034', '12106B0035', 'xcx', '2014-10-04 10:56:18', 1),
('12106B0034', '12106B0035', 'xcx', '2014-10-04 10:56:21', 1),
('12106B0034', '12106B0035', 'cxc', '2014-10-04 10:56:23', 1),
('12106B0034', '12106B0035', 'xcx', '2014-10-04 10:56:24', 1),
('12106B0034', '12106B0035', 'xcx', '2014-10-04 10:56:25', 1),
('12106B0034', '12106B0035', 'xcx', '2014-10-04 10:56:30', 1),
('12106B0034', '12106B0035', 'xcx', '2014-10-04 10:56:31', 1),
('12106B0034', '12106B0035', 'xcx', '2014-10-04 10:56:32', 1),
('12106B0034', '12106B0035', 'xcx', '2014-10-04 10:56:33', 1),
('12106B0034', '12106B0035', 'xc', '2014-10-04 10:56:34', 1),
('12106B0034', '12106B0035', 'x', '2014-10-04 10:56:35', 1),
('12106B0034', '12106B0035', 'xc', '2014-10-04 10:56:36', 1),
('12106B0034', '12106B0035', 'cxc', '2014-10-04 10:56:37', 1),
('12106B0034', '12106B0035', 'xc', '2014-10-04 10:56:38', 1),
('12106B0034', '12106B0035', 'dfsf', '2014-10-04 10:58:35', 1),
('12106B0034', '12106B0035', 'sd', '2014-10-04 10:58:36', 1),
('12106B0034', '12106B0035', 'dfsd', '2014-10-04 10:59:05', 1),
('12106B0034', '12106B0035', 'cxvxc', '2014-10-04 10:59:21', 1),
('12106B0034', '12106B0035', 'vxcxv', '2014-10-04 10:59:22', 1),
('12106B0034', '12106B0035', 'xc', '2014-10-04 10:59:23', 1),
('12106B0034', '12106B0040', 'lkl', '2014-10-04 11:08:55', 0),
('12106B0034', '12106B0035', 'gf', '2014-10-04 11:09:03', 1),
('12106B0034', '12106B0035', 'sds', '2014-10-04 11:09:15', 1),
('12106B0034', '12106B0035', 'dfdf', '2014-10-04 11:09:19', 1),
('12106B0034', '12106B0035', 'dfdfsd', '2014-10-04 11:09:22', 1),
('12106B0034', '12106B0035', 'ddsfds', '2014-10-04 11:09:25', 1),
('12106B0034', '12106B0035', 'dfsdfsd', '2014-10-04 11:09:28', 1),
('12106B0034', '12106B0035', 'dfsdf', '2014-10-04 11:09:29', 1),
('12106B0035', '12106B0034', 'yo', '2014-09-29 07:35:52', 1),
('12106B0035', '12106B0034', 'yo', '2014-09-29 07:35:55', 1),
('12106B0035', '12106B0034', 'yo', '2014-09-29 07:35:56', 1),
('12106B0035', '12106B0034', 'hi', '2014-09-29 10:24:31', 1),
('12106B0035', '12106B0034', 'tt', '2014-09-29 10:29:18', 1),
('12106B0035', '12106B0034', 'pp', '2014-09-29 10:29:37', 1),
('12106B0035', '12106B0040', 'sdfs', '2014-10-03 06:39:56', 0),
('12106B0035', '12106B0034', 'hello', '2014-10-03 14:07:56', 1),
('12106B0035', '12106B0034', 'yo', '2014-10-03 14:10:59', 1),
('12106B0035', '12106B0034', 'hello', '2014-10-03 14:11:03', 1),
('12106B0035', '12106B0040', 'fgdf', '2014-10-04 03:09:51', 0),
('12106B0035', '12106B0040', 'dfgd', '2014-10-04 03:09:52', 0),
('12106B0035', '12106B0040', 'fdgdf', '2014-10-04 03:09:53', 0),
('12106B0035', '12106B0040', 'df', '2014-10-04 03:09:54', 0),
('12106B0035', '12106B0040', 'fdg', '2014-10-04 03:09:55', 0),
('12106B0035', '12106B0040', 'dfg', '2014-10-04 03:09:56', 0),
('12106B0035', '12106B0040', 'df', '2014-10-04 03:09:57', 0),
('12106B0035', '12106B0040', 'dfg', '2014-10-04 03:09:58', 0),
('12106B0035', '12106B0040', 'dfg', '2014-10-04 03:09:59', 0),
('12106B0035', '12106B0040', 'dfg', '2014-10-04 03:10:00', 0),
('12106B0035', '12106B0040', 'dfg', '2014-10-04 03:10:01', 0),
('12106B0035', '12106B0040', 'gdfg', '2014-10-04 03:10:02', 0),
('12106B0035', '0', 'sfdsf', '2014-10-04 03:38:56', 0),
('12106B0035', '0', 'dfsdfsd', '2014-10-04 03:38:57', 0),
('12106B0035', '0', 'fsdfsd', '2014-10-04 03:38:58', 0),
('12106B0035', '0', 'sdf', '2014-10-04 03:38:59', 0),
('12106B0035', '0', 'fs', '2014-10-04 03:39:00', 0),
('12106B0035', '0', 'sdfsd', '2014-10-04 03:39:16', 0),
('12106B0035', '0', 'f', '2014-10-04 03:39:17', 0),
('12106B0035', '0', 'df', '2014-10-04 03:39:18', 0),
('12106B0035', '0', 'sdf', '2014-10-04 03:39:19', 0),
('12106B0035', '0', 'sdf', '2014-10-04 03:39:20', 0),
('12106B0035', '0', 'sdf', '2014-10-04 03:39:21', 0),
('12106B0035', '0', 'dfds', '2014-10-04 03:39:30', 0),
('12106B0035', '0', 'sf', '2014-10-04 03:39:31', 0),
('12106B0035', '0', 'df', '2014-10-04 03:39:32', 0),
('12106B0035', '0', 'fsd', '2014-10-04 03:39:33', 0),
('12106B0035', '0', 'sdds', '2014-10-04 03:39:34', 0),
('12106B0035', '0', '---dfds 0---fQuery Error 0---sf 0---sdfQuery Error 0---sQuery Error 0---dfQuery Error 0---sfQuery Error 0---sQuery Error 0---df 0---sdQuery Error 0---fdsQuery Error 0---fQuery Error 0---dQuery Error 0---fsd 0---fQuery Error 0---sdQuery Error 0---fsQuery Error 0---dfQuery Error 0---sdds 0---fQuery Erro', '2014-10-04 03:39:44', 0),
('12106B0035', '0', 'sdfsd', '2014-10-04 03:40:01', 0),
('12106B0035', '0', 'f', '2014-10-04 03:40:02', 0),
('12106B0035', '0', 's', '2014-10-04 03:40:03', 0),
('12106B0035', '0', 'df', '2014-10-04 03:40:04', 0),
('12106B0035', '0', 'sdf', '2014-10-04 03:40:05', 0),
('12106B0035', '0', 's', '2014-10-04 03:40:06', 0),
('12106B0035', '0', 'dsfdsf', '2014-10-04 05:56:48', 0),
('12106B0035', '0', 'sdf', '2014-10-04 05:56:49', 0),
('12106B0035', '0', 'df', '2014-10-04 05:56:50', 0),
('12106B0035', '0', 'sdf', '2014-10-04 05:56:51', 0),
('12106B0035', '0', 'sd', '2014-10-04 05:56:52', 0),
('12106B0035', '0', 'f', '2014-10-04 05:56:53', 0),
('12106B0035', '0', 'f', '2014-10-04 05:56:54', 0),
('12106B0035', '12106B0040', 'sds', '2014-10-04 05:57:20', 0),
('12106B0035', '12106B0040', 'sdsd', '2014-10-04 05:57:21', 0),
('12106B0035', '12106B0040', 'sds', '2014-10-04 05:57:22', 0),
('12106B0035', '12106B0040', 'sdsd', '2014-10-04 05:57:23', 0),
('12106B0035', '12106B0040', 'sdsd', '2014-10-04 05:57:24', 0),
('12106B0035', '0', 'dfdf', '2014-10-04 06:36:40', 0),
('12106B0035', '0', 'df', '2014-10-04 06:36:41', 0),
('12106B0035', '0', 'f', '2014-10-04 06:36:42', 0),
('12106B0035', '0', 'fd', '2014-10-04 06:36:43', 0),
('12106B0035', '0', 'fd', '2014-10-04 06:36:44', 0),
('12106B0035', '0', 'dfdf', '2014-10-04 06:37:29', 0),
('12106B0035', '0', 'f', '2014-10-04 06:37:30', 0),
('12106B0035', '0', 'df', '2014-10-04 06:37:31', 0),
('12106B0035', '0', 'fd', '2014-10-04 06:37:32', 0),
('12106B0035', '0', 'dfsd', '2014-10-04 06:38:25', 0),
('12106B0035', '0', 'sdsdsa', '2014-10-04 08:40:01', 0),
('12106B0035', '0', 'asdasd', '2014-10-04 08:40:02', 0),
('12106B0035', '0', 'as', '2014-10-04 08:40:03', 0),
('12106B0035', '0', 'sa', '2014-10-04 08:40:04', 0),
('12106B0035', '0', 'asd', '2014-10-04 08:40:05', 0),
('12106B0035', '0', 'cvcxv', '2014-10-04 08:49:35', 0),
('12106B0035', '0', 'cxvx', '2014-10-04 08:49:36', 0),
('12106B0035', '0', 'cv', '2014-10-04 08:49:37', 0),
('12106B0035', '0', 'vc', '2014-10-04 08:49:38', 0),
('12106B0035', '0', 'cv', '2014-10-04 08:49:39', 0),
('12106B0035', '0', 'cv', '2014-10-04 08:49:40', 0),
('12106B0035', '0', 'cvc', '2014-10-04 08:49:41', 0),
('12106B0035', '0', 'cv', '2014-10-04 08:49:42', 0),
('12106B0035', '0', 'asdasd', '2014-10-04 09:01:51', 0),
('12106B0035', '0', 'asd', '2014-10-04 09:01:52', 0),
('12106B0035', '0', 'as', '2014-10-04 09:01:53', 0),
('12106B0035', '0', 'asd', '2014-10-04 09:01:54', 0),
('12106B0035', '0', 'asd', '2014-10-04 09:01:55', 0),
('12106B0035', '0', 'as', '2014-10-04 09:01:56', 0),
('12106B0035', '0', 'ds', '2014-10-04 09:01:57', 0),
('12106B0035', '0', 'dsfdsf', '2014-10-04 09:33:26', 0),
('12106B0035', '0', 'sdf', '2014-10-04 09:33:27', 0),
('12106B0035', '0', 'sdf', '2014-10-04 09:33:28', 0),
('12106B0035', '0', 'sdf', '2014-10-04 09:33:29', 0),
('12106B0035', '0', 'sf', '2014-10-04 09:33:30', 0),
('12106B0035', '0', 'sadasd', '2014-10-04 09:35:08', 0),
('12106B0035', '0', 's', '2014-10-04 09:35:09', 0),
('12106B0035', '0', 'ds', '2014-10-04 09:35:10', 0),
('12106B0035', '0', 'd', '2014-10-04 09:35:11', 0),
('12106B0035', '0', 'dfdsf', '2014-10-04 09:36:09', 0),
('12106B0035', '0', 'sd', '2014-10-04 09:36:10', 0),
('12106B0035', '0', 's', '2014-10-04 09:36:11', 0),
('12106B0035', '0', 'sdf', '2014-10-04 09:36:12', 0),
('12106B0035', '0', 'sf', '2014-10-04 09:36:13', 0),
('12106B0035', '0', 'dfsd', '2014-10-04 09:36:54', 0),
('12106B0035', '0', 'f', '2014-10-04 09:36:55', 0),
('12106B0035', '0', 'sdf', '2014-10-04 09:36:56', 0),
('12106B0035', '0', 'd', '2014-10-04 09:36:57', 0),
('12106B0035', '0', 'dsd', '2014-10-04 09:37:43', 0),
('12106B0035', '0', 'd', '2014-10-04 09:37:44', 0),
('12106B0035', '0', 'z', '2014-10-04 09:37:45', 0),
('12106B0035', '0', 'vf', '2014-10-04 09:37:46', 0),
('12106B0035', '0', 'vf', '2014-10-04 09:37:47', 0),
('12106B0035', '0', 'v', '2014-10-04 09:37:48', 0),
('12106B0035', '0', 'c', '2014-10-04 09:37:49', 0),
('12106B0035', '0', 'jkhjk', '2014-10-04 09:37:55', 0),
('12106B0035', '0', 'mn', '2014-10-04 09:42:12', 0),
('12106B0035', '12106B0034', 'hello', '2014-10-04 10:37:24', 1),
('12106B0035', '12106B0034', 'bakakono', '2014-10-04 10:38:36', 1),
('12106B0035', '12106B0034', 'baka', '2014-10-04 10:47:47', 1),
('12106B0035', '12106B0034', 'me', '2014-10-04 10:48:11', 1),
('12106B0035', '12106B0034', 'jkk', '2014-10-04 10:48:53', 1),
('12106B0035', '12106B0034', 'ml', '2014-10-04 10:54:07', 1),
('12106B0035', '12106B0034', 'ml', '2014-10-04 10:54:12', 1),
('12106B0035', '12106B0034', 'ko', '2014-10-04 10:55:13', 1),
('12106B0035', '12106B0034', 'xcx', '2014-10-04 10:56:09', 1),
('12106B0035', '12106B0034', 'xcx', '2014-10-04 10:56:11', 1),
('12106B0035', '12106B0034', 'xxcx', '2014-10-04 10:56:12', 1),
('12106B0035', '12106B0034', 'fgf', '2014-10-04 11:09:09', 1),
('12106B0035', '12106B0034', 'dfdf', '2014-10-04 11:09:17', 1),
('12106B0035', '12106B0034', 'fdfd', '2014-10-04 11:09:20', 1),
('12106B0035', '12106B0034', 'dfdfb', '2014-10-04 11:09:24', 1),
('12106B0035', '12106B0034', 'vdfgfd', '2014-10-04 11:09:26', 1),
('12106B0035', '12106B0034', 'dfdfd', '2014-10-04 11:09:31', 1),
('12106B0035', '12106B0027', 'JP', '2014-10-07 10:41:34', 0),
('12106B0035', '12106B0032', 'Hello', '2014-10-08 18:32:41', 0),
('12106B0035', '12106B0032', 'hi', '2014-10-08 18:32:45', 0),
('12106B0035', '12106B0032', 'sd', '2014-10-08 18:32:48', 0),
('12106B0035', '12106B0032', 'sd', '2014-10-08 18:32:49', 0),
('12106B0035', '12106B0032', 's', '2014-10-08 18:32:50', 0),
('12106B0035', '12106B0032', 'sds', '2014-10-08 18:32:52', 0),
('12106B0035', '12106B0032', 'sds', '2014-10-08 18:32:53', 0),
('12106B0035', '12106B0032', 'sdsd', '2014-10-08 18:32:55', 0),
('12106B0035', '12106B0032', 'sdsd', '2014-10-08 18:32:56', 0),
('12106B0035', '12106B0032', 'sdsd', '2014-10-08 18:32:57', 0),
('12106B0035', '12106B0032', 'sdsd', '2014-10-08 18:32:58', 0),
('12106B0035', '12106B0032', 'sdsd', '2014-10-08 18:32:59', 0),
('12106B0035', '12106B0032', 'sdsd', '2014-10-08 18:33:00', 0),
('12106B0035', '12106B0027', 'ahmed dhoka', '2014-10-10 06:22:15', 0),
('12106B0035', '12106B0026', 'Hello', '2014-10-10 08:35:07', 1),
('12106B0035', '12106B0026', 'jojo', '2014-10-13 10:17:37', 0),
('12106B0040', '12106B0028', 'nbn', '2014-09-16 06:59:39', 1),
('12106B0040', '12106B0028', '121', '2014-09-16 07:14:03', 1),
('ahmed', '12106B0035', 'hello', '2014-10-05 14:56:27', 0),
('ahmed', '12106B0035', 'hello', '2014-10-05 15:02:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `privndisc`
--

CREATE TABLE IF NOT EXISTS `privndisc` (
  `dname` varchar(32) NOT NULL,
  `sender` varchar(12) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privndisc`
--

INSERT INTO `privndisc` (`dname`, `sender`, `msg`, `time`) VALUES
('yo', '12106B0026', 'jhgjh', '2014-10-05 19:08:58'),
('Project', '12106B0027', 'Wazzup?', '2014-10-07 02:29:39'),
('Project', '12106B0027', 'All good!', '2014-10-07 02:30:06'),
('Project', '12106B0027', 'All good!', '2014-10-07 02:30:34'),
('Project', '12106B0027', 'hello', '2014-10-07 02:32:52'),
('Project', '12106B0027', 'Naruto', '2014-10-07 02:33:07'),
('Project', '12106B0027', 'HI', '2014-10-07 02:35:34'),
('PooKapil1', '12106B0027', 'hello guys', '2014-10-08 14:26:46'),
('PooKapil1', '12106B0027', 'ok', '2014-10-08 17:35:26'),
('PooKapil1', '12106B0027', 'ummm', '2014-10-08 17:36:12'),
('PooKapil1', '12106B0027', 'Inu', '2014-10-08 17:37:24'),
('PooKapil1', '12106B0027', 'nono', '2014-10-08 17:41:18'),
('PooKapil1', '12106B0027', 'nono', '2014-10-08 17:41:19'),
('PooKapil1', '12106B0027', 'yoohoo', '2014-10-08 18:30:05'),
('PooKapil1', '12106B0027', 'make some noise', '2014-10-08 18:31:37'),
('Tax', '12106B0028', 'Hello Everyone', '2014-10-05 18:55:55'),
('Tax', '12106B0028', 'fd', '2014-10-05 19:00:08'),
('Tax', '12106B0028', 'fd', '2014-10-05 19:00:12'),
('Tax', '12106B0028', 'ere', '2014-10-05 19:02:05'),
('Tax', '12106B0028', 'ere', '2014-10-05 19:02:06'),
('Tax', '12106B0028', 'sdsd', '2014-10-05 19:03:14'),
('Tax', '12106B0028', 'dfd', '2014-10-05 19:03:49'),
('Tax', '12106B0028', 'dfd', '2014-10-05 19:03:54'),
('Tax', '12106B0028', 'dfds', '2014-10-05 19:03:58'),
('yo', '12106B0028', 'bvnb', '2014-10-05 19:09:07'),
('yo', '12106B0028', 'bvnbnnm', '2014-10-05 19:09:11'),
('Project', '12106B0032', 'Hello', '2014-10-07 02:29:21'),
('Project', '12106B0032', 'ok cool', '2014-10-07 02:30:16'),
('Project', '12106B0032', 'BYee', '2014-10-07 02:30:40'),
('PooKapil1', '12106B0032', 'shika', '2014-10-08 17:37:43'),
('PooKapil1', '12106B0032', 'shika', '2014-10-08 17:37:46'),
('PooKapil1', '12106B0032', 'giga', '2014-10-08 17:40:22'),
('PooKapil1', '12106B0032', 'gigo', '2014-10-08 17:40:32'),
('PooKapil1', '12106B0032', 'nope', '2014-10-08 18:32:06'),
('', '12106B0034', 'yu', '2014-09-29 10:36:55'),
('yup', '12106B0034', '2323fgdfg', '2014-09-29 14:08:46'),
('yup', '12106B0034', 'pppppppp', '2014-09-29 14:09:04'),
('yup', '12106B0035', 'qqq', '2014-09-29 14:08:16'),
('yup', '12106B0035', 'ol', '2014-09-29 14:09:51'),
('yup', '12106B0035', 'ty', '2014-09-29 14:18:55'),
('yup', '12106B0035', 'tyuu', '2014-09-29 14:19:03'),
('yup', '12106B0035', 'tyuut', '2014-09-29 14:19:28'),
('PooKapil1', '12106B0035', 'yaa wassup', '2014-10-08 17:27:33'),
('PooKapil1', '12106B0035', 'yaa wassup', '2014-10-08 17:34:56'),
('PooKapil1', '12106B0035', 'yaa wassup', '2014-10-08 17:34:58'),
('PooKapil1', '12106B0035', 'mo', '2014-10-08 17:40:58'),
('PooKapil1', '12106B0035', 'mo', '2014-10-08 17:41:00'),
('PooKapil1', '12106B0035', 'lklkl', '2014-10-08 18:29:50'),
('PooKapil1', '12106B0035', 'lklkl', '2014-10-08 18:30:17'),
('PooKapil1', '12106B0035', 'lklkl', '2014-10-08 18:30:25'),
('PooKapil1', '12106B0035', 'hello', '2014-10-08 18:35:06'),
('Hello', '12106B0035', 'sds', '2014-10-10 08:35:57'),
('0', 'ahmed', 'tttt', '2014-10-05 15:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `publicdisc`
--

CREATE TABLE IF NOT EXISTS `publicdisc` (
  `sender` varchar(12) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicdisc`
--

INSERT INTO `publicdisc` (`sender`, `time`, `msg`, `status`) VALUES
('12106B0028', '2014-10-05 17:42:20', 'sdsds', 1),
('12106B0028', '2014-10-05 17:43:51', 'sds', 1),
('12106B0028', '2014-10-05 17:43:53', 'sds', 1),
('12106B0028', '2014-10-05 17:43:54', 'sds', 1),
('12106B0028', '2014-10-05 17:43:55', 'sds', 1),
('12106B0028', '2014-10-05 17:44:07', 'sds', 1),
('12106B0028', '2014-10-05 17:44:10', 'sdssd', 1),
('12106B0028', '2014-10-05 17:45:24', 'to', 1),
('12106B0028', '2014-10-05 17:45:52', 'fdf', 1),
('12106B0028', '2014-10-05 17:45:53', 'fdfdfd', 1),
('12106B0028', '2014-10-05 17:46:17', 'df', 1),
('12106B0028', '2014-10-05 17:46:19', 'df', 1),
('12106B0028', '2014-10-05 17:46:20', 'df', 1),
('12106B0028', '2014-10-05 17:46:21', 'df', 1),
('12106B0028', '2014-10-05 17:46:25', 'f', 1),
('12106B0028', '2014-10-05 17:46:27', 'f', 1),
('12106B0028', '2014-10-05 17:47:54', '', 1),
('12106B0028', '2014-10-05 17:50:03', '', 1),
('12106B0028', '2014-10-05 17:50:06', '', 1),
('12106B0028', '2014-10-05 17:50:07', '', 1),
('12106B0028', '2014-10-05 17:50:09', '', 1),
('12106B0028', '2014-10-05 17:50:10', '', 1),
('12106B0028', '2014-10-05 17:50:11', '', 1),
('12106B0028', '2014-10-05 17:50:12', '', 1),
('12106B0028', '2014-10-05 17:50:13', '', 1),
('12106B0028', '2014-10-05 17:50:24', '', 1),
('12106B0028', '2014-10-05 17:50:25', '', 1),
('12106B0028', '2014-10-05 17:50:26', '', 1),
('12106B0028', '2014-10-05 17:50:27', '', 1),
('12106B0028', '2014-10-05 17:51:01', '', 1),
('12106B0028', '2014-10-05 17:51:32', '', 1),
('12106B0028', '2014-10-05 17:51:36', '', 1),
('12106B0028', '2014-10-05 17:51:38', '', 1),
('12106B0028', '2014-10-05 17:51:43', '', 1),
('12106B0028', '2014-10-05 17:52:02', '', 1),
('12106B0028', '2014-10-05 17:53:26', '', 1),
('12106B0028', '2014-10-05 17:53:35', '', 1),
('12106B0028', '2014-10-05 17:53:50', 'undefined', 1),
('12106B0028', '2014-10-05 17:54:09', 'undefined', 1),
('12106B0028', '2014-10-05 18:04:17', 'undefined', 1),
('12106B0028', '2014-10-05 18:04:22', 'undefined', 1),
('12106B0028', '2014-10-05 18:04:51', 'fgd', 1),
('12106B0028', '2014-10-05 18:04:54', 'dfd', 1),
('12106B0028', '2014-10-05 18:04:56', 'Ahmed', 1),
('12106B0028', '2014-10-05 18:13:11', 'sdfs', 1),
('12106B0028', '2014-10-05 18:23:05', 'sdsds', 1),
('12106B0028', '2014-10-05 18:35:06', 'dfdf', 1),
('12106B0035', '2014-10-01 09:11:10', 'kj', 1),
('12106B0070', '2014-10-07 03:26:15', 'koo', 1),
('ahmed', '2014-10-05 15:03:20', 'rtryfg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
  `subject` varchar(32) NOT NULL,
  `author` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `link` varchar(256) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`subject`, `author`, `name`, `link`, `time`) VALUES
('Agorithm', 'Cormen', 'Analysis of Algorithm', '\\book\\Cormen.pdf', '2014-10-05 10:22:33'),
('Computer Network', 'A Tanenbaum', 'Computer Networks 5th Ed', '/book/Computer Networks - A Tanenbaum - 5th edition.www.eeeuniversity.com.pdf', '2014-10-07 02:55:44'),
('Computer Network', 'Behrouz A.Forouzan', 'Data Communications and Network', '/book/Data Communications and Networking By Behrouz A.Forouzan.pdf', '2014-10-07 02:56:32'),
('Web Technologu', 'John Ducket', 'HTML And CSS - Design And Build', '/book/HTML And CSS - Design And Build Websites.pdf', '2014-10-07 02:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
  `mon` varchar(32) DEFAULT NULL,
  `tue` varchar(32) DEFAULT NULL,
  `wed` varchar(32) DEFAULT NULL,
  `thur` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`mon`, `tue`, `wed`, `thur`) VALUES
(NULL, 'Practicals', 'Practicals', 'SOOAD Lec'),
('OS LEC', 'Practicals', 'MP Lec', 'Practicals'),
('Practicals', 'Practicals', 'CN Lec', 'SOOAD Lec'),
('OS Lec', 'CN Lec', 'BCE Lec', 'Practicals'),
('SOOAD Lec', 'MP Lec', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `roll_no` varchar(12) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `pswd` varchar(128) NOT NULL,
  `phno` int(11) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `bday` date NOT NULL,
  `dp` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`roll_no`, `name`, `pswd`, `phno`, `email_id`, `gender`, `bday`, `dp`, `status`, `about`) VALUES
('12106B0026', 'Neha', 'vit@123', 98765421, 'neha.tembe@gmail.com', 'female', '2014-10-05', '\\images\\12106B0026.jpg', 'WHere tjeres a will theres a way', 'Studious'),
('12106B0027', 'Poornima Sapkal', '123', 2147483647, 'asabeeh18@hotmail.com', 'female', '1994-10-07', '\\images\\12106B0027.jpg', 'Busy', 'Joke around everytime'),
('12106B0032', 'Neha Manjrekar', 'cmpn234', 2147483647, 'neham1001@gmail.com', 'female', '1994-01-10', '\\images\\12106B0032.jpg', 'Too much busy', '>.< Never'),
('12106B0035', 'Ahmed Sabeeh', '123', 2147483647, 'asabeeh18@hotmail.com', '', '2014-10-13', '\\images\\12106B0035.jpg', 'Naruto Awesome', 'Happy'),
('12106B0070', 'Karan Kapil', '123', 2147483647, 'aba@gg.com', 'male', '0000-00-00', '\\images\\12106B0070.jpg', 'Ksjf kjhkj', 'Clear'),
('23', 'vedang', '123456', NULL, 'j.vedang@yahoo.com', '', '0000-00-00', '\\images\\23.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`place`,`date`);

--
-- Indexes for table `pnmanager`
--
ALTER TABLE `pnmanager`
 ADD PRIMARY KEY (`member`,`name`);

--
-- Indexes for table `priv1disc`
--
ALTER TABLE `priv1disc`
 ADD PRIMARY KEY (`sender`,`time`);

--
-- Indexes for table `privndisc`
--
ALTER TABLE `privndisc`
 ADD PRIMARY KEY (`sender`,`time`);

--
-- Indexes for table `publicdisc`
--
ALTER TABLE `publicdisc`
 ADD PRIMARY KEY (`sender`,`time`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`roll_no`), ADD UNIQUE KEY `phno` (`phno`,`email_id`,`dp`), ADD FULLTEXT KEY `name` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;