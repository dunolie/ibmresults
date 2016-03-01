-- MySQL dump 10.13  Distrib 5.7.10, for osx10.10 (x86_64)
--
-- Host: localhost    Database: localtheatre
-- ------------------------------------------------------
-- Server version	5.7.10

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
-- Current Database: `localtheatre`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `localtheatre` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `localtheatre`;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `userid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `userpass` char(64) NOT NULL,
  `salt` char(16) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `dob` date NOT NULL,
  `emailadd` varchar(60) NOT NULL,
  `usertype` int(1) NOT NULL DEFAULT '2',
  `tnc` int(1) NOT NULL,
  `sessionid` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (1,'bob','44ce2b13fb181306556265152403c422fc1d76e0ad0f56c3329ea9d78718c82d','ZqtlUjrxOqaweySl','Robert','MacDougall','1980-12-21','bob@bob.com',1,1,NULL),(2,'alice','9a9ffeceacae34fe76bf2d20b368366f29a8519f4f444cee3afe8fd45604ae0e','yDKCbmDekjzyXUne','Alice','Shane','1991-05-21','alice@alice.com',2,1,NULL),(3,'jane','3b117b653b3b248ff3cdf08ce7b0cf8dba36a5679ab7e63604ad2a42e14a35c7','eQFwXpwURlaWAqpB','Jane','Nicolson','1989-01-08','jane@nicolson.co.uk',3,1,NULL),(4,'robbie','586cfe88568464d582a7f4d9c6780ff2d6827fdc044c13d66d9538e79c87c5f6','QEtpvVNbUtAnkLXG','Robbie','Terris','1976-10-28','dunolie@gmail.com',2,1,'hk8qppe2o44nubr2ophs33fmj1'),(5,'robbie1','cde1cd5947533d03497514ea8611c49138db6dce9bdd04d9b5048c4b03cce192','JvGsAPDypaALGAii','Robbie','','1976-10-28','dunolie@gmail.com',2,1,NULL),(6,'uiuiu','c4f083887a583ff34391db78ab381157675ba3847b29ad244a0f12ebb9e6614e','odJdgoJxWRDzrEZg','Robbie','Terris','1992-01-01','robbie.terris@gmail.com',2,1,NULL),(7,'uiuiuiu','69f53baec49b6c6c3451d7ba4fa0f80bcdd0a7eb5597d242bc371906733d0760','nBqzvQfKMsvsvikO','Robbie','Terris','1984-03-03','robbie.terris@gmail.com',2,1,NULL),(8,'uiuiuiuiu','a620660fd1a4d3c277e73e8d3078cc7c50bfe499710117d3f70577b7114df6af','BzxSBdlwBRLRtDnG','Robbie','Terris','1984-03-03','robbie.terris@gmail.com',2,1,'5m2o0peunr10dnhsr51ga6epp5');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `student_results`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `student_results` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `student_results`;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `result` tinyint(4) DEFAULT NULL,
  `subject_id` varchar(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  KEY `fk_subject` (`subject_id`),
  KEY `fk_student` (`student_id`),
  CONSTRAINT `fk_student` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_subject` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (78,'TMP243',33447),(48,'IIA887',33447),(45,'AWD169',33447),(57,'TMP243',33672),(55,'IIA887',33672),(67,'AWD169',33672),(39,'TMP243',46321),(76,'IIA887',46321),(27,'AWD169',46321),(75,'TMP243',21698),(87,'IIA887',21698),(84,'AWD169',21698),(23,'IIA887',25814),(67,'AWD169',25814),(45,'IIA887',34852),(45,'AWD169',34852),(67,'ECO776',34852),(94,'CNA334',30321),(92,'AWD169',30321),(88,'ECO776',30321),(65,'CNA334',30731),(65,'AWD169',30731),(62,'ECO776',30731),(66,'TMP243',46372),(88,'AWD169',46372),(70,'ECO776',46372),(51,'TMP243',31279),(39,'AWD169',31279),(34,'ECO776',31279);
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `staff_id` int(10) NOT NULL,
  `staff_forename` varchar(40) DEFAULT NULL,
  `staff_surname` varchar(40) DEFAULT NULL,
  `staff_post` varchar(50) DEFAULT NULL,
  `staff_salary` decimal(13,2) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (47610,'Val','Innes','Programme Leader',34000.00),(55273,'Derek','Summers','Lecturer',27887.00),(55981,'Albert','Lumsden','Lecturer',28223.00),(55984,'George','McKenna','Lecturer',30000.00),(85321,'Gillian','Douglas','Lecturer',28528.00);
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `student_id` int(10) NOT NULL,
  `student_forename` varchar(40) DEFAULT NULL,
  `student_surname` varchar(40) DEFAULT NULL,
  `student_gender` tinyint(1) DEFAULT NULL,
  `student_dob` date DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (21698,'Kenneth','Sloan',1,'1974-01-23'),(25814,'Scott','Burns',1,'1985-10-04'),(30321,'Sarah','Douglas',0,'1979-08-13'),(30731,'Stephen','Billingham',1,'1982-04-19'),(31279,'Stephanie','Kelly',0,'1979-06-05'),(33447,'Allan','Burns',1,'1980-05-31'),(33672,'Mark','Harrison',1,'1985-03-26'),(34852,'Colin','Gardiner',1,'1984-11-28'),(46321,'Morvern','Smith',0,'1986-06-04'),(46372,'Rizwana','Hussian',0,'1986-11-08');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `subject_id` varchar(10) NOT NULL,
  `subject_title` varchar(50) DEFAULT NULL,
  `staff_id` int(10) NOT NULL,
  PRIMARY KEY (`subject_id`),
  KEY `fk_staff` (`staff_id`),
  CONSTRAINT `fk_staff` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES ('AWD169','Advanced Web Databases',85321),('CNA334','Commercial Network Apps',55273),('ECO776','E-Commerce',47610),('IIA887','Intelligent Internet Applications',55981),('TMP243','Team Project',85321);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-27 22:11:49
