CREATE DATABASE house_of_cats;
CREATE USER 'cat_admin'@'localhost' IDENTIFIED BY 'Mi0ihD55Fbc6pc4Ijh6mmhYS4T7UBZ5oG1Jf51aCEHSfK3Ee2z';
GRANT ALL on house_of_cats.* TO 'cat_admin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

USE house_of_cats;

--
-- Table structure for table `cats`
--

DROP TABLE IF EXISTS `cats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cats`
--

LOCK TABLES `cats` WRITE;
/*!40000 ALTER TABLE `cats` DISABLE KEYS */;
INSERT INTO `cats` VALUES (1,'FLAG{C475_4r3_N07_7H47_54F3}');
/*!40000 ALTER TABLE `cats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'How to Get a Fabulous CATS on a Tight Budget','image1.png'),(2,'5 Ways to Get through to Your CATS','image3.png'),(3,'Top Ten Trends in CATS to Watch','image2.png'),(4,'The Story of CATS Has Just Gone Viral','image4.png'),(5,'5 Ways to Have a More Appealing CATS','image5.png'),(6,'5 Meetups about CATS You Should Attend','image2.png'),(7,'5 Best Ways to Sell CATS','image1.png'),(8,'Addicted to CATS? Us Too. 5 Reasons We Just Can\'t Stop','image3.png'),(9,'CATS Tip: Be Consistent','image5.png'),(10,'5 Steps to CATS of Your Dreams','image4.png'),(11,'When You Ask People about CATS This Is What They Answer','image2.png'),(12,'Never Lose Your CATS Again','image5.png'),(13,'5 Small Changes That Will Have a Huge Impact on Your CATS','image3.png'),(14,'How to Get More Results Out of Your CATS','image1.png'),(15,'Quick and Easy Fix for Your CATS','image2.png'),(16,'A CATS Success Story You\'ll Never Believe','image4.png'),(17,'Famous Quotes on CATS','image5.png'),(18,'How Green Is Your CATS?','image2.png');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;