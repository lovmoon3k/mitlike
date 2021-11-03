-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: mit_like
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `autofollow`
--

DROP TABLE IF EXISTS `autofollow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autofollow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(15) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `token` text,
  `auto_delay` int(11) DEFAULT NULL,
  `auto_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autofollow`
--

LOCK TABLES `autofollow` WRITE;
/*!40000 ALTER TABLE `autofollow` DISABLE KEYS */;
/*!40000 ALTER TABLE `autofollow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autolike`
--

DROP TABLE IF EXISTS `autolike`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autolike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(15) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `token` text,
  `auto_delay` int(11) DEFAULT NULL,
  `auto_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autolike`
--

LOCK TABLES `autolike` WRITE;
/*!40000 ALTER TABLE `autolike` DISABLE KEYS */;
INSERT INTO `autolike` (`id`, `userid`, `name`, `token`, `auto_delay`, `auto_date`) VALUES (1,'100006433342112','Trung Phạm','EAAAAAYsX7TsBAPhQJJjp4VMmfABMlZAIsDb0SRWXxyU8tSFZALKECIZAKXXMGLeSvaKZCKiCIjTaef9mNETZCicKcGUZBbV2mL0yOw8EkjDa8bO10ijiILM9eAwO2CLmExj5Vg84ToQaoCp0ZBHqWL9dl3uMq4ACZBTPZC25YwREUd0tfXfdSgWMT9aOZBmRWFnfo6VGNYKhcLUpVENwH9ZCVZAG',1532006162,'2018-07-19 12:46:03'),(2,'100024837783578','Hiếu Phạm','EAAAAAYsX7TsBAFZAwZBgZBokSZCOr3OzMY4ZBAtFCOjgukDGEbDmxRnIaAZCZA6HTZCxWduurKuRAgRBZBdyrw6xA0qPypfUsoIcpKvcKM5ZCWkXANf4XuyA1IJh4aRth4czc9OejDaZB4aA102GgusTxKZABn6Ez7fMWb2oJc2IkW1cFZCBZAKTO9WPZAqLGgPFnAH8jypGndDBGJKQbN1ZBvDXMRuBeWQT3YlAPQviRVIl8nzG6wZDZD',1532006284,'2018-07-19 12:48:05'),(3,'100006729600050','Dương Dương','EAAAAAYsX7TsBAPaXP1U6MpidtJLp890gQOPNMRnSqBPemeL5UjZCiOIgYept3uSTbVj2uWmU7j2sx3nVnp40EREocIKD6CWzYBSjKgpZASVjxqXckmZBHmvGPXpdLymgvaWu4iqIdXRqpuOQoBw6FQPlqyesJ8ar9jbdrjTXNRgchpJIEz7JNUtrmAdmAGQLAdO34npFq0juLh3Cqxr',1532077165,'2018-07-20 08:29:25');
/*!40000 ALTER TABLE `autolike` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autoshare`
--

DROP TABLE IF EXISTS `autoshare`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autoshare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(15) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `token` text,
  `auto_delay` int(11) DEFAULT NULL,
  `auto_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autoshare`
--

LOCK TABLES `autoshare` WRITE;
/*!40000 ALTER TABLE `autoshare` DISABLE KEYS */;
/*!40000 ALTER TABLE `autoshare` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boss`
--

DROP TABLE IF EXISTS `boss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` tinyint(4) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boss`
--

LOCK TABLES `boss` WRITE;
/*!40000 ALTER TABLE `boss` DISABLE KEYS */;
INSERT INTO `boss` (`id`, `username`, `password`, `permission`, `add_date`) VALUES (1,'trungro12','5eea130b731059ca4a9874282309f7ed',1,'2018-07-20 01:47:04');
/*!40000 ALTER TABLE `boss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `token`
--

DROP TABLE IF EXISTS `token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(15) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `token` text NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `token`
--

LOCK TABLES `token` WRITE;
/*!40000 ALTER TABLE `token` DISABLE KEYS */;
INSERT INTO `token` (`id`, `userid`, `name`, `token`, `date_create`) VALUES (2,'100024837783578','Hiếu Phạm','EAAAAAYsX7TsBAFZAwZBgZBokSZCOr3OzMY4ZBAtFCOjgukDGEbDmxRnIaAZCZA6HTZCxWduurKuRAgRBZBdyrw6xA0qPypfUsoIcpKvcKM5ZCWkXANf4XuyA1IJh4aRth4czc9OejDaZB4aA102GgusTxKZABn6Ez7fMWb2oJc2IkW1cFZCBZAKTO9WPZAqLGgPFnAH8jypGndDBGJKQbN1ZBvDXMRuBeWQT3YlAPQviRVIl8nzG6wZDZD','2018-07-19 12:47:44'),(21,'100006729600050','Dương Dương','EAAAAAYsX7TsBAPaXP1U6MpidtJLp890gQOPNMRnSqBPemeL5UjZCiOIgYept3uSTbVj2uWmU7j2sx3nVnp40EREocIKD6CWzYBSjKgpZASVjxqXckmZBHmvGPXpdLymgvaWu4iqIdXRqpuOQoBw6FQPlqyesJ8ar9jbdrjTXNRgchpJIEz7JNUtrmAdmAGQLAdO34npFq0juLh3Cqxr','2018-07-20 08:24:28'),(14,'100027555577977','Van Ha','EAAAAAYsX7TsBAFDnXOQx5RTTZCjlD9FVqCtzVkBjYLVh4qU8SrZBoImzjQjuU7UYc6V6sMOoadC8mQ9JPrdFTiZC9aBcAPsXiOxuHnoaNb9wrooMuum2fht7Hrl4kQ4MMgEPZASmZB5kxKZBntXnZAZCVNKNmQfIs2hno9ZCZCCRDL1uS2EkOGo1kQvRiXtDWFvhm2oFHtuEz5t8IEAK8X5IqeU7NpjFxwLZCwZD','2018-07-20 07:52:53');
/*!40000 ALTER TABLE `token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mit_like'
--

--
-- Dumping routines for database 'mit_like'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-22 11:25:24
