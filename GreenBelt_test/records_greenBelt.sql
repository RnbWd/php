CREATE DATABASE  IF NOT EXISTS `records_greenBelt` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `records_greenBelt`;
-- MySQL dump 10.13  Distrib 5.5.24, for osx10.5 (i386)
--
-- Host: 127.0.0.1    Database: records_greenBelt
-- ------------------------------------------------------
-- Server version	5.5.29

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
-- Table structure for table `exam_record`
--

DROP TABLE IF EXISTS `exam_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `students_id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`id`),
  KEY `fk_exam_record_students_idx` (`students_id`),
  CONSTRAINT `fk_exam_record_students` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_record`
--

LOCK TABLES `exam_record` WRITE;
/*!40000 ALTER TABLE `exam_record` DISABLE KEYS */;
INSERT INTO `exam_record` VALUES (1,1,'Math',100,'worked hard'),(2,1,'English',50,'didn\'t try'),(3,2,'Math',75,'whatever'),(4,2,'English',75,'did okay'),(5,1,'Science',97,'Did well!'),(7,2,'Science',100,'Incredible..'),(8,3,'Math',99,'Almost perfect'),(9,3,'English',92,'Pretty Good'),(10,3,'Science',95,'Excellent'),(11,4,'Math',100,'Genius'),(12,4,'English',80,'Okay..'),(13,4,'Science',89,'Decent'),(14,5,'Math',20,'Nope'),(15,5,'English',11,'Wow..'),(16,5,'Science',90,'Not Bad..'),(17,6,'Math',100,'worked hard'),(18,6,'English',50,'didn\'t try'),(19,6,'Science',97,'Did well!'),(20,7,'Math',75,'whatever'),(21,7,'English',75,'did okay'),(22,7,'Science',100,'Incredible..'),(23,8,'Math',99,'Almost perfect'),(24,8,'English',92,'Pretty Good'),(25,8,'Science',95,'Excellent'),(26,9,'Math',100,'Genius'),(27,9,'English',80,'Okay..'),(28,9,'Science',89,'Decent'),(29,10,'Math',20,'Nope'),(30,10,'English',11,'Wow..'),(31,10,'Science',90,'Not Bad..');
/*!40000 ALTER TABLE `exam_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Winston','Churchill'),(2,'Johnny','Bravo'),(3,'Michael','Choi'),(4,'Trey','Vargas'),(5,'Mister','Potato'),(6,'Doctor','LoveJoy'),(7,'Henry','Ford'),(8,'Carl','Jung'),(9,'Epic','Link'),(10,'Donnie','Darko');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-01 17:18:38
