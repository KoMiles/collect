-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: test
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET ascii NOT NULL,
  `password` varchar(100) CHARACTER SET ascii NOT NULL,
  `nickname` varchar(200) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `location` smallint(5) DEFAULT NULL,
  `hasbaby` varchar(50) NOT NULL,
  `babyname` varchar(100) DEFAULT NULL,
  `babybirthday` date DEFAULT NULL,
  `babygender` enum('boy','girl','none') DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `photo_thumb` varchar(255) DEFAULT NULL,
  `photo_server` varchar(50) CHARACTER SET ascii DEFAULT NULL,
  `status` varchar(255) DEFAULT 'normal',
  `role` enum('normal','super','admin') NOT NULL DEFAULT 'normal',
  `reg_ts` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email_status` enum('unknown','verified','bounced','deferred') DEFAULT 'unknown',
  `partner` varchar(20) DEFAULT NULL,
  `salt` char(8) DEFAULT NULL,
  `new_pwd` varchar(100) DEFAULT NULL,
  `update_pwd_ts` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `u_email` (`email`),
  KEY `babygender` (`babygender`),
  KEY `nickname` (`nickname`),
  KEY `reg_ts` (`reg_ts`),
  KEY `status` (`status`,`location`),
  KEY `status_2` (`status`,`babybirthday`)
) ENGINE=InnoDB AUTO_INCREMENT=2009 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-20 18:59:11
