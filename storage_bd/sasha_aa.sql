-- MySQL dump 10.17  Distrib 10.3.15-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: sasha_aa
-- ------------------------------------------------------
-- Server version	10.3.15-MariaDB

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
-- Table structure for table `registration_user`
--

DROP TABLE IF EXISTS `registration_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration_user`
--

LOCK TABLES `registration_user` WRITE;
/*!40000 ALTER TABLE `registration_user` DISABLE KEYS */;
INSERT INTO `registration_user` VALUES (1,'alenka.kod.host@gmail.com ','6512bd43d9caa6e02c990b0a82652dca'),(2,'alenka.kod.host@gmail.com ','6512bd43d9caa6e02c990b0a82652dca'),(3,'alenka.kod.host@gmail.com ','6512bd43d9caa6e02c990b0a82652dca'),(4,'sasha@gmail.com','12345');
/*!40000 ALTER TABLE `registration_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_user`
--

DROP TABLE IF EXISTS `setting_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `contry` varchar(85) DEFAULT NULL,
  `sity` varchar(85) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `phone` varchar(85) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_user`
--

LOCK TABLES `setting_user` WRITE;
/*!40000 ALTER TABLE `setting_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `setting_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temporary_registration_link`
--

DROP TABLE IF EXISTS `temporary_registration_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temporary_registration_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(95) NOT NULL,
  `password` varchar(90) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temporary_registration_link`
--

LOCK TABLES `temporary_registration_link` WRITE;
/*!40000 ALTER TABLE `temporary_registration_link` DISABLE KEYS */;
INSERT INTO `temporary_registration_link` VALUES ('alenka.kod.host@gmail.com','11','2020-01-19 10:31:46'),('sasha11@aaa.aa','123456789','2020-01-19 11:00:44'),('ff','ff','2020-01-19 13:38:07'),('aas','ss','2020-01-19 14:28:16'),('','','2020-01-19 14:28:50'),('hhh','hhhh','2020-01-19 14:29:09'),('fdf','ff','2020-01-19 14:29:50'),('ff','ff','2020-01-19 14:30:21'),('ff','ff','2020-01-19 14:32:12'),('sasha@gmail.com','123','2020-01-21 10:18:56'),('sashaperian@gmail.com','123','2020-01-21 10:19:07'),('sashaperian@gmail.com','123','2020-01-21 10:19:07'),('sashaperian@gmail.com','123','2020-01-21 10:19:11'),('sashaperian@gmail.com','123','2020-01-21 10:19:12'),('sashaperian@gmail.com','123','2020-01-21 10:19:12'),('sashaperian@gmail.com','123','2020-01-21 10:19:13'),('sashaperian@gmail.com','123','2020-01-21 10:19:13'),('sashaperian@gmail.com','123','2020-01-21 10:19:13'),('sashaperian@gmail.com','123','2020-01-21 10:19:13'),('32','32','2020-01-21 10:28:23'),('32','32','2020-01-21 10:28:27'),('32','32','2020-01-21 10:28:33'),('','','2020-01-21 10:44:51'),('','','2020-01-21 10:56:36'),('','','2020-01-21 10:57:20'),('','','2020-01-21 10:57:34'),('','','2020-01-21 10:58:23'),('','','2020-01-21 11:00:07'),('','','2020-01-21 11:00:15'),('','','2020-01-21 11:07:02'),('','','2020-01-21 11:07:18'),('','','2020-01-21 11:07:40'),('','','2020-01-21 11:07:43'),('','','2020-01-21 11:08:25'),('','','2020-01-21 11:08:40'),('','','2020-01-21 11:11:05'),('','','2020-01-21 11:11:36'),('31','31','2020-01-21 11:33:20'),('{','{','2020-01-21 11:34:50'),('{','{','2020-01-21 11:34:57'),('{','{','2020-01-21 11:35:16'),('31','31','2020-01-21 11:37:45'),('31','31','2020-01-21 11:48:50'),('31','31','2020-01-21 11:49:09'),('31','31','2020-01-21 11:50:21'),('31','31','2020-01-21 11:51:12'),('31','31','2020-01-21 11:53:37'),('13','31','2020-01-21 11:56:09');
/*!40000 ALTER TABLE `temporary_registration_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'sasha_aa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-21  7:18:39
