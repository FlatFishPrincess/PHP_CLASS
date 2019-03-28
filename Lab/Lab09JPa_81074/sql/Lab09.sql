-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: Lab09
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Odey','Mouse','omouse0@boston.com','omouse','$2y$10$F1vS1kvDllulPuEUUtB4FezllXBhTiMjeztrsPzoGzBaaItJZiyhe'),
                (2,'Theresita','Baynard','tbaynard1@samsung.com','tbaynard','$2y$10$S7BquvQNiGx42TVA2Fa1r.Z6l0..s6OPN1pfSusLkCAvlpd5ly.Dq'),
                (3,'Shaine','Burford','sburford2@dedecms.com','sburford','$2y$10$f4mcWDzaRqst29TInOztfeH7iejrTZNDvrb7l/6Gpr2KYATLX6xXW'),
                (4,'Ilse','Carlucci','icarlucci3@webnode.com','icarlucci','$2y$10$Bsxbydpj6Gp7bKNYNmOJnOmicuCOWHMMlXVxozPT7XFucUL9CRik6'),
                (5,'Herbert','Danhel','hdanhel4@last.fm','hdanhel','$2y$10$se9AZQzlzncaYc9I7dTisue8ol/vzAMwWD8rM9ITLzZte9bl65i5.'),
                (6,'Reggy','Douglass','rdouglass5@sbwire.com','rdouglass','$2y$10$7LToKLnU2agLuoGXi.8VKux.wh6wi42n9d75diUsZTbsCJZQMnqva'),
                (7,'Collette','Zapatero','czapatero6@ox.ac.uk','czapatero','$2y$10$LmMEdnzaXcHCkv9h23nMyOHwYVc12wb2jqT/iLEZUqeCMaXyP34gS'),
                (8,'Ebeneser','Rochford','erochford7@slashdot.org','erochford','$2y$10$qnFxcZQwmHE6TMpfVz3NBejloTzQuPT/1KeUCTo0m6h5Or/AqMP6u'),
                (9,'Giustino','Ebdin','gebdin8@sciencedirect.com','gebdin','$2y$10$aTfR3lW4V201JMG3CjOtvOAYWcZPDw63UK8mzeJPt8Ac63jDgeosi'),
                (10,'Bernie','Dymocke','bdymocke9@rambler.ru','bdymocke','$2y$10$VJ6yW6zbj3E.PIwQJwjihuABtt53b56.yvRW3SvrLWoiIq0e5e6TW');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-20  9:52:08
