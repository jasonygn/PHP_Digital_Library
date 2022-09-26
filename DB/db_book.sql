-- MySQL dump 10.13  Distrib 8.0.19, for macos10.15 (x86_64)
--
-- Host: localhost    Database: db_book
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `tbl_book`
--

DROP TABLE IF EXISTS `tbl_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_book` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `isbn` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `Year_of_Publication` varchar(20) NOT NULL,
  `URL` varchar(50) NOT NULL,
  PRIMARY KEY (`_id`),
  UNIQUE KEY `isbn` (`isbn`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_book`
--

LOCK TABLES `tbl_book` WRITE;
/*!40000 ALTER TABLE `tbl_book` DISABLE KEYS */;
INSERT INTO `tbl_book` VALUES (1,'9871119836018','Defi and The Future of Finance','Campbell R. Harvey','WILEY','2021','/books/web3/1.pdf'),(2,'9781944835019','The Fourth Industrial Revolution','Klaus Schwab','World Economic Forum','2016','/books/web3/2.pdf'),(3,'9780071835565','The Digital Economy','Don Tapscott','McGrawHill','2021','/books/web3/3.pdf'),(4,'9780262543156','Building The New Economy','Alex Pentland','MIT Press','2021','/books/web3/4.pdf'),(5,'9781119235613','Digital Marketing','Ryan Deiss and Russ Henneberry','John Wiley & Sons','2017','/books/business/1.pdf'),(6,'980749474713','Digital Marketing Strategy','Simon Kingsnorth','Simon Kingsnorth','2016','/books/business/2.pdf'),(7,'9780813945163','Marketing Analytics','Rajkumar, Paul and Ronald','Darden Business Publishing','2021','/books/business/3.pdf'),(8,'9781941142981','1-Page Marketing Plan','Allan Dib','Successwise','2016','/books/business/4.pdf'),(9,'9781089919445','Basics of Blockchain','Bettina, Bill and Tom','Animal Ventures','2019','/books/blockchain/1.pdf'),(10,'97814842260329','Blockchain Basics','Daniel Drescher','Apress','2017','/books/blockchain/2.pdf'),(11,'9781119555018','Blockchain For Dummies','Tiana Laurence','John Wiley & Sons','2019','/books/blockchain/3.pdf'),(12,'9781119474128','Ethereum For Dummies','Michael G.Solomon','John Wiley & Sons','2019','/books/blockchain/4.pdf'),(20,'9781119843313','NFTs for Dummies','Tiana and Seoyoung','John Wiley & Sons','2022','/books/nft/1.pdf'),(21,'9781119838388','NFT Handbook','Matt and QuHarrison','John Wiley & Sons','2022','/books/nft/2.pdf'),(22,'222222222222','Metaverse For Beginners','Andrew Clemens','Andrew Clemens','2022','/books/nft/3.pdf'),(23,'9781593278229','Cracking Codes with Python','AI Sweigart','No Starch Press','2018','/books/programming/1.pdf'),(24,'9781491985571','Web Scraping with Python ','Ryan Mitchell','O\'Reilly','2018','/books/programming/2.pdf'),(25,'9781492053446','Web Development with Node & Express','Ethan Brown','O\'Reilly','2019','/books/programming/3.pdf'),(26,'9780136502142','Modern JavaScript for the Impatient','Cay S. Horstmann','Pearson Education','2020','/books/programming/4.pdf'),(27,'9781800562523','JavaScript from Beginner to Professional','Laurence, Rob and Maaike','Packt Publishing','2021','/books/programming/5.pdf'),(32,'9781492055754','JavaScript Cookbook','Adam, Matthew and Shelley','O\'Reilly','2021','/books/programming/6.pdf'),(33,'9781945051548','SQL QuickStart Guide','ClydeBank Technology','ClydeBank Media','2016','/books/database/1.pdf'),(34,'9781491954461','MongoDB: The Definitive Guide','Shannon, Eoin and Kristina','O\'Reilly','2020','/books/database/2.pdf'),(35,'111111111111111','Beginning Node.js, Express and MongoDB','Greg Lim','Greg Lim','2019','/books/database/3.pdf'),(36,'9781484208953','MongoDB Basics','David, Peter and Eelco','Apress','2014','/books/database/4.pdf');
/*!40000 ALTER TABLE `tbl_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'jason','$2y$10$IPPrPQx/u5FNkecjUSULKeQWvbrk.gQDoSBSYO5WWFtu5ihdxXp1C','2022-09-26 09:38:23'),(2,'guest','$2y$10$2D4LoCg7YLePaiMtmITvCeQ5D0ktcFxtcCRzDARyHNdJEJaKhYgRW','2022-09-26 10:02:50');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-26 14:49:40
