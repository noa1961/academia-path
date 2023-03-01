-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: academiapathio
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `college` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `acceptance_rate` smallint unsigned NOT NULL,
  `graduation_rate` smallint unsigned NOT NULL,
  `cost` int unsigned NOT NULL,
  `ranking` smallint unsigned NOT NULL,
  `type_id` bigint unsigned NOT NULL,
  `location_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ranking` (`ranking`),
  KEY `type_id` (`type_id`),
  KEY `location_id` (`location_id`),
  CONSTRAINT `college_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`),
  CONSTRAINT `college_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college`
--

LOCK TABLES `college` WRITE;
/*!40000 ALTER TABLE `college` DISABLE KEYS */;
INSERT INTO `college` VALUES (1,'Harvard College','<p>Harvard College is a medium, 4-year, private university. This coed college is located in a city in an urban setting and is primarily a residential campus. It offers bachelor\'s, master\'s, and doctoral degrees.</p>',4,97,15,1,2,25),(2,'Stanford University','<p>Stanford University is a medium, 4-year, private university. This coed college is located in a suburban setting and is primarily a residential campus. It offers bachelor\'s, certificate, master\'s, and doctoral degrees.</p>',4,94,17,2,2,6),(3,'Massachusetts Institute of Technology','<p>Massachusetts Institute of Technology is a medium, 4-year, private university. This coed college is located in a city in an urban setting and is primarily a residential campus. It offers bachelor\'s, master\'s, and doctoral degrees.</p>',7,95,20,3,2,25),(4,'California Institute of Technology','<p>California Institute of Technology is a small, 4-year, private school. This coed college is located in a city in a suburban setting and is primarily a residential campus. It offers bachelor\'s, master\'s, certificate, and doctoral degrees.</p>',6,94,27,4,2,6),(5,'Princeton University','<p>Princeton University is a medium, 4-year, private school. This coed college is located in a large town in a suburban setting and is primarily a residential campus. It offers bachelor\'s, master\'s, and doctoral degrees.</p>',6,98,19,5,2,34),(6,'University of California: Berkeley','<p>University of California: Berkeley is a very large, 4-year, public technical college. This coed college is located in an urban setting and is primarily a residential campus. It offers bachelor\'s, certificate, master\'s, and doctoral degrees.</p>',16,93,19,6,1,6),(7,'Yale University','<p>Yale University is a medium, 4-year, private university. This coed college is located in the city of New Haven, CT in a urban setting and is primarily a residential campus. It offers certificate, bachelor\'s, master\'s, and doctoral degrees.</p>',6,97,18,7,2,8),(8,'Columbia University','<p>Columbia University is a medium, 4-year, private university. This coed college is located in a large city in an urban setting and is primarily a residential campus. It offers bachelor\'s, master\'s, and doctoral degrees.</p>',5,95,22,8,2,36),(9,'University of Chicago','<p>University of Chicago is a medium, 4-year, private school. This coed college is located in a large city in an urban setting and is primarily a residential campus. It offers bachelor\'s, certificate, master\'s, and doctoral degrees.</p>',6,95,35,9,2,17);
/*!40000 ALTER TABLE `college` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college_major`
--

DROP TABLE IF EXISTS `college_major`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `college_major` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `major_id` bigint unsigned NOT NULL,
  `college_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `major_id` (`major_id`),
  KEY `college_id` (`college_id`),
  CONSTRAINT `college_major_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `major` (`id`),
  CONSTRAINT `college_major_ibfk_2` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college_major`
--

LOCK TABLES `college_major` WRITE;
/*!40000 ALTER TABLE `college_major` DISABLE KEYS */;
/*!40000 ALTER TABLE `college_major` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `state` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `abbreviation` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `state` (`state`),
  UNIQUE KEY `abbreviation` (`abbreviation`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'Alabama','AL'),(2,'Alaska','AK'),(3,'American Samoa','AS'),(4,'Arizona','AZ'),(5,'Arkansas','AR'),(6,'California','CA'),(7,'Colorado','CO'),(8,'Connecticut','CT'),(10,'Delaware','DE'),(11,'District of Columbia','DC'),(12,'Florida','FL'),(13,'Georgia','GA'),(14,'Guam','GU'),(15,'Hawaii','HI'),(16,'Idaho','ID'),(17,'Illinois','IL'),(18,'Indiana','IN'),(19,'Iowa','IA'),(20,'Kansas','KS'),(21,'Kentucky','KY'),(22,'Louisiana','LA'),(23,'Maine','ME'),(24,'Maryland','MD'),(25,'Massachusetts','MA'),(26,'Michigan','MI'),(27,'Minnesota','MN'),(28,'Mississippi','MS'),(29,'Missouri','MO'),(30,'Montana','MT'),(31,'Nebraska','NE'),(32,'Nevada','NV'),(33,'New Hampshire','NH'),(34,'New Jersey','NJ'),(35,'New Mexico','NM'),(36,'New York','NY'),(37,'North Carolina','NC'),(38,'North Dakota','ND'),(39,'Northern Mariana Islands','MP'),(40,'Ohio','OH'),(41,'Oklahoma','OK'),(42,'Oregon','OR'),(43,'Pennsylvania','PA'),(44,'Puerto Rico','PR'),(45,'Rhode Island','RI'),(46,'South Carolina','SC'),(47,'South Dakota','SD'),(48,'Tennessee','TN'),(49,'Texas','TX'),(50,'Utah','UT'),(51,'Vermont','VT'),(52,'Virgin Islands U.S.','VI'),(53,'Virginia','VA'),(54,'Washington','WA'),(55,'West Virginia','WV'),(56,'Wisconsin','WI'),(57,'Wyoming','WY');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `major`
--

DROP TABLE IF EXISTS `major`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `major` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `field` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `major`
--

LOCK TABLES `major` WRITE;
/*!40000 ALTER TABLE `major` DISABLE KEYS */;
INSERT INTO `major` VALUES (1,'Agricultural Sciences','Agriculture'),(2,'Social Sciences','Anthropology'),(3,'Social Sciences','Sociology'),(4,'Architecture','Interior Architecture'),(5,'Architecture','Landscape Architecture'),(6,'Architecture','Environmental Architecture and Design'),(7,'Art','Ceramics'),(8,'Art','Illustration'),(9,'Art','Multimedia'),(10,'Art','Painting'),(11,'Art','Sculpture'),(12,'Art','Visual and Performing Arts'),(13,'Biological and Biomedical Sciences','Biology'),(14,'Biological and Biomedical Sciences','Bioinformatics'),(15,'Biological and Biomedical Sciences','Biochemistry'),(16,'Biological and Biomedical Sciences','Genetics'),(17,'Biological and Biomedical Sciences','Neuroscience and Neurobiology'),(18,'Business and Management','Human Resources'),(19,'Business and Management','International Business'),(20,'Business and Management','Marketing'),(21,'Computer Science','Computer Science, General'),(22,'Computer Science','Computer SOftware Engineering'),(23,'Computer Science','Computer Graphics'),(24,'Communications and Journalism','Journalism'),(25,'Communications and Journalism','Sports Communication'),(26,'Communications and Journalism','Advertising'),(27,'Criminal Justice and Law Enforcement','Criminal Justice'),(28,'Criminal Justice and Law Enforcement','Criminology'),(29,'Criminal Justice and Law Enforcement','Cyber/Computer Forensics and Counterterrorism'),(30,'Criminal Justice and Law Enforcement','Financial Forensics'),(31,'Criminal Justice and Law Enforcement','Forensic Science and Technology'),(32,'Design','Graphic Design'),(33,'Design','Interior Design'),(34,'Design','Web, Product, and User Experience Design'),(35,'Design','Game Design and Interactive Media'),(36,'Design','Fashion and Apparel Design'),(37,'Economics','Economics, General'),(38,'Economics','Applied Economics'),(39,'Engineering','Aerospace Engineering'),(40,'Engineering','Bioengineering and Biomedical Engineering'),(41,'Engineering','Chemical Engineering'),(42,'Engineering','Civil Engineering'),(43,'Engineering','Computer Hardware Engineering'),(44,'Engineering','Electrical Engineering'),(45,'Engineering','Mechanical Engineering'),(46,'Engineering','Industrial Engineering'),(47,'Engineering','Engineering, General'),(48,'Engineering','Engineering Physics'),(49,'English and Writing','Literature'),(50,'English and Writing','English'),(51,'English and Writing','Creative Writing'),(52,'Film and Photography','Photography'),(53,'Film and Photography','Film and Video Studies'),(54,'Film and Photography','Cinematography and Video Production'),(55,'Film and Photography','Animation, Video Graphics, and Special Effects'),(56,'Finance and Accounting','Finance and Accounting, General'),(57,'Finance and Accounting','Banking and Finance'),(58,'Foreign Languages','Chinese Language and Literature'),(59,'Foreign Languages','Arabic Language and Literature'),(60,'Foreign Languages','German Language and Literature'),(61,'Foreign Languages','French Language and Literature'),(62,'Foreign Languages','Italian Language and Literature'),(63,'Foreign Languages','Japanese Language and Literature'),(64,'Foreign Languages','East Asian Languages and Literature'),(65,'Foreign Languages','Linguistics, Interpretation, and Translation'),(66,'Foreign Languages','Foreign Languages and Literatures'),(67,'Global Studies','African Studies'),(68,'Global Studies','United States Studies'),(69,'Global Studies','Asian Studies'),(70,'Global Studies','European Studies'),(71,'History','Art History'),(72,'History','History, General'),(73,'History','Historic Preservation and Conservation'),(74,'Math','Mathematics, General'),(75,'History','Statistics'),(76,'History','Computational and Applied Mathematics'),(77,'Philosophy and Ethics','Philosophy, General'),(78,'Philosophy and Ethics','Ethics'),(79,'Physics','Astronomy and Astrophysics'),(80,'Physics','Physics, General'),(81,'Political Science','Political Science and Government, General'),(82,'Political Science','United States Government and Politics'),(83,'Psychology','Behavioral Sciences'),(84,'Psychology','Counseling Psychology'),(85,'Psychology','Forensic Psychology'),(86,'Psychology','Psychology, General'),(87,'Psychology','Social Psychology');
/*!40000 ALTER TABLE `major` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'Public'),(2,'Private');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (5,'admin','admin@gmail.com','$2y$10$ERWnoA/Jt3WfJszC2pML9un7bVk6ibTE8ripsLyCRMUD06Jzoj/P6','admin'),(6,'teste','teste@gmail.com','$2y$10$6aa0YocoJXssf5aEtFIVEuAKmNbD16AbpL5ZLzSRHs0E2XLI4PAHS','user');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-23 11:15:17
