-- MySQL dump 10.13  Distrib 8.0.45, for macos15 (arm64)
--
-- Host: localhost    Database: bubbletea
-- ------------------------------------------------------
-- Server version	8.0.45

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
-- Table structure for table `bubbletea_drinks`
--

DROP TABLE IF EXISTS `bubbletea_drinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bubbletea_drinks` (
  `bubbletea_id` int NOT NULL,
  `bubbletea_code` varchar(10) NOT NULL,
  `bubbletea_name` varchar(255) NOT NULL,
  `bubbletea_description` text NOT NULL,
  `bubbletea_sugar_level` varchar(50) NOT NULL,
  `bubbletea_size` varchar(50) NOT NULL,
  `bubbletea_ice_level` varchar(50) NOT NULL,
  `bubbletea_type_id` int DEFAULT '0',
  `bubbletea_buy_price` decimal(10,2) NOT NULL,
  `bubbletea_sell_price` decimal(10,2) NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bubbletea_id`),
  UNIQUE KEY `bubbletea_code` (`bubbletea_code`),
  KEY `bubbletea_type_id` (`bubbletea_type_id`),
  CONSTRAINT `bubbletea_drinks_ibfk_1` FOREIGN KEY (`bubbletea_type_id`) REFERENCES `bubbletea_types` (`bubbletea_type_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bubbletea_drinks`
--

LOCK TABLES `bubbletea_drinks` WRITE;
/*!40000 ALTER TABLE `bubbletea_drinks` DISABLE KEYS */;
INSERT INTO `bubbletea_drinks` VALUES (2,'MANGO','Mango Fruit Tea','Refreshing jasmine green tea infused with mango and mango jelly.','50%','Large','Less Ice',2,2.00,5.25,'2026-02-23 03:57:14','2026-02-23 03:57:14'),(3,'BRNSUG','Brown Sugar Milk Tea','Rich milk tea sweetened with brown sugar and tapioca with sweet foam and cocoa powder on top.','100%','Medium','No Ice',4,2.75,6.00,'2026-02-23 03:57:15','2026-02-23 03:57:15'),(4,'MATCHA','Matcha Cheese Foam Tea','Premium matcha green tea topped with a creamy salted cheese foam.','50%','Large','Regular Ice',5,3.00,6.50,'2026-02-23 03:57:17','2026-02-23 03:57:17');
/*!40000 ALTER TABLE `bubbletea_drinks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bubbletea_items`
--

DROP TABLE IF EXISTS `bubbletea_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bubbletea_items` (
  `bubbletea_id` int NOT NULL,
  `bubbletea_code` varchar(10) NOT NULL,
  `bubbletea_name` varchar(255) NOT NULL,
  `bubbletea_description` text NOT NULL,
  `bubbletea_brand` varchar(50) NOT NULL,
  `bubbletea_size` varchar(50) NOT NULL,
  `bubbletea_sugar_level` varchar(50) NOT NULL,
  `bubbletea_ice_level` varchar(50) NOT NULL,
  `bubbletea_type_id` int DEFAULT NULL,
  `bubbletea_buy_price` decimal(10,2) NOT NULL,
  `bubbletea_sell_price` decimal(10,2) NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bubbletea_id`),
  UNIQUE KEY `bubbletea_code` (`bubbletea_code`),
  KEY `bubbletea_type_id` (`bubbletea_type_id`),
  CONSTRAINT `bubbletea_items_ibfk_1` FOREIGN KEY (`bubbletea_type_id`) REFERENCES `bubbletea_types` (`bubbletea_type_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bubbletea_items`
--

LOCK TABLES `bubbletea_items` WRITE;
/*!40000 ALTER TABLE `bubbletea_items` DISABLE KEYS */;
INSERT INTO `bubbletea_items` VALUES (1,'MT','Taro Milk Tea','A creamy milk black tea blended with sweet taro tropical root vegetable flavor and chewy tapioca pearls.','Gong-Cha','Large','50%','Less ice',1,2.70,6.70,'2026-02-23 04:12:10','2026-03-13 16:28:36'),(2,'MANGO','Mango Fruit Tea','Refreshing jasmine green tea infused with mango and mango jelly.','Gong-Cha','Large','75%','Less Ice',2,2.00,5.25,'2026-02-23 04:02:21','2026-02-23 04:02:21'),(3,'BRNSUG','Brown Sugar Milk Tea','Rich milk tea sweetened with brown sugar and tapioca with sweet foam and cocoa powder on top.','Gong-Cha','Medium','100%','No Ice',4,2.75,6.00,'2026-02-23 04:02:22','2026-02-23 04:02:22'),(4,'MATCHA','Matcha Cheese Foam Tea','Premium matcha green tea topped with a creamy salted cheese foam.','Gong-Cha','Large','50%','Light Ice',5,3.00,6.50,'2026-02-23 04:02:24','2026-02-23 04:02:24'),(5,'BMT','Black Milk Tea','Fresh Black tea blended with creamy milk and topped with chewy brown sugar boba pearls.','Gong-Cha','Small','75%','Regualar ice',1,2.50,5.75,'2026-02-28 04:13:17','2026-02-28 04:13:17'),(6,'GMT','Green Milk Tea','Fresh Green tea blended with creamy milk and topped with chewy brown sugar boba pearls.','Gong-Cha','Small','75%','Regualar ice',1,2.50,5.75,'2026-02-28 04:13:38','2026-02-28 04:13:38'),(7,'OOL','oolong Milk Tea','Fresh Oolong tea blended with creamy milk and topped with chewy brown sugar boba pearls.','Gong-Cha','Small','75%','Regualar ice',1,2.50,5.75,'2026-02-28 04:14:47','2026-02-28 04:14:47'),(8,'THAI','Thai Milk Tea','Fresh Thai tea blended with creamy milk and topped with chewy brown sugar boba pearls.','Gong-Cha','Small','75%','Regualar ice',1,2.50,5.75,'2026-02-28 04:15:12','2026-02-28 04:15:12'),(9,'STRAWBERRY','Strawberry Fruit Tea','Refreshing strawberry fruit tea made with a green tea base and sweet strawberry flavor. Served chilled with a light, juicy taste and optional fruit pearls.','Gong-Cha','Meduim','75%','Less ice',2,2.50,4.50,'2026-02-28 04:18:22','2026-02-28 04:18:22'),(10,'PASSION','Passion Fruit Tea','Tangy passionfruit tea blended with green tea for a bright and tropical flavor. A refreshing citrusy drink served over ice with a smooth finish.','Gong-Cha','Meduim','75%','Less ice',2,2.50,4.50,'2026-02-28 04:20:06','2026-02-28 04:20:06'),(11,'PEACH','Peach Fruit Tea','Sweet peach fruit tea infused with green tea and natural peach flavor. Light, refreshing, and served chilled with a smooth fruity aroma.','Gong-Cha','Meduim','75%','Less ice',2,2.50,4.50,'2026-02-28 04:20:49','2026-02-28 04:20:49'),(12,'LYCHEE','Lychee Fruit Tea','Delicate lychee fruit tea with a floral sweetness blended into green tea. Served cold with a crisp and refreshing finish.','Gong-Cha','Meduim','75%','Less ice',2,2.50,4.50,'2026-02-28 04:21:31','2026-02-28 04:21:31'),(13,'JASMINE','Jasmie Cheese Foam','DFragrant jasmine green tea topped with a rich and creamy cheese foam layer. Light, floral, and slightly salty for a smooth balanced finish.','Gong-Cha','Large','50%','Less ice',5,3.00,6.50,'2026-02-28 04:26:59','2026-02-28 04:26:59'),(14,'OSMANTHUS','Osmanthus Cheese Foam','Delicate osmanthus flower tea with a sweet floral aroma, topped with creamy cheese foam for a smooth and slightly savory finish.','Gong-Cha','Large','50%','Less ice',5,3.00,6.50,'2026-02-28 04:27:44','2026-02-28 04:27:44'),(15,'BLACKCF','Black Milk Tea Cheese Foam','Classic black milk tea blended with creamy milk and finished with a thick layer of savory cheese foam on top. Rich, smooth, and indulgent.','Gong-Cha','Large','50%','Less ice',5,3.00,6.50,'2026-02-28 04:28:32','2026-02-28 04:28:32'),(16,'PEACHCF','Peach Cheese Foam','Sweet peach green tea with a refreshing fruity flavor, topped with creamy cheese foam for a perfect sweet and salty combination.','Gong-Cha','Large','50%','Less ice',5,3.00,6.50,'2026-02-28 04:29:58','2026-02-28 04:29:58'),(17,'5','Dark Chocolate Matcha','Matcha latter with dark chocolate with rich earth taste','KFT','Large','50%','light ice',3,2.00,7.50,'2026-03-13 15:54:24','2026-04-18 04:07:08'),(18,'CT','Cherry Cheese Foam','A creamy milk black tea blended with sweet taro tropical root vegetable flavor and chewy tapioca pearls.','Gong-Cha','Large','50%','light ice',5,2.70,6.70,'2026-03-14 00:39:45','2026-03-14 00:39:45'),(19,'TTT','TungTungTung','Sahur','Italia','m','50%','light ice',1,1.00,7.00,'2026-04-18 03:17:38','2026-04-18 03:17:38'),(21,'PST','Passion Fruit Mactha','Matcha latter with passion fruit  with rich earth taste','Italia','Large','50%','Less ice',2,1.00,6.70,'2026-04-18 04:03:39','2026-04-18 04:03:39');
/*!40000 ALTER TABLE `bubbletea_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bubbletea_types`
--

DROP TABLE IF EXISTS `bubbletea_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bubbletea_types` (
  `bubbletea_type_id` int NOT NULL,
  `bubbletea_type_code` varchar(255) NOT NULL,
  `bubbletea_type_name` varchar(255) NOT NULL,
  `bubbletea_series_location` varchar(50) NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bubbletea_type_id`),
  UNIQUE KEY `bubbletea_type_code` (`bubbletea_type_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bubbletea_types`
--

LOCK TABLES `bubbletea_types` WRITE;
/*!40000 ALTER TABLE `bubbletea_types` DISABLE KEYS */;
INSERT INTO `bubbletea_types` VALUES (1,'MT','Black Milk Tea','Milk Tea Series','2026-02-23 04:12:09','2026-02-23 04:12:09'),(2,'FRU','Fruit Tea','Fruit Tea Series','2026-02-23 03:38:53','2026-02-23 03:38:53'),(3,'SLU','Slush','Slushes','2026-02-23 03:38:54','2026-02-23 03:38:54'),(4,'BRW','Brown Sugar','Gong-Cha Specialties','2026-02-23 03:38:55','2026-02-23 03:38:55'),(5,'CHE','Cheese Foam','Cheese Foam Series','2026-02-23 03:38:56','2026-02-23 03:38:56'),(6,'TES','Test Type','Gong-Cha Specialties','2026-03-13 15:50:57','2026-03-13 15:50:57'),(7,'ML','Strawberry Matcha ','Gongcha','2026-03-14 00:29:28','2026-03-14 00:29:28'),(9,'WAS','WASD','Gongcha','2026-04-18 03:18:00','2026-04-18 03:18:00'),(10,'LWKYYYY','Test Type','Gongcha','2026-04-04 01:13:14','2026-04-04 01:13:14'),(11,'CLO','Colombia ','Cafe','2026-04-18 03:58:50','2026-04-18 03:58:50'),(19,'MLL','Strawberry Matcha ','Gongcha','2026-04-03 19:01:27','2026-04-03 19:01:27'),(20,'OMGG','Test Type2','Gongcha','2026-04-04 02:01:01','2026-04-04 02:01:01'),(21,'SOT','Test Type3','Gongcha','2026-04-04 02:32:13','2026-04-04 02:32:13');
/*!40000 ALTER TABLE `bubbletea_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bubbletea_users`
--

DROP TABLE IF EXISTS `bubbletea_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bubbletea_users` (
  `bubbletea_user_id` int NOT NULL AUTO_INCREMENT,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `pronouns` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bubbletea_user_id`),
  UNIQUE KEY `email_address` (`email_address`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bubbletea_users`
--

LOCK TABLES `bubbletea_users` WRITE;
/*!40000 ALTER TABLE `bubbletea_users` DISABLE KEYS */;
INSERT INTO `bubbletea_users` VALUES (1,'Hanni@bubbletea.com','35dcd9b451414758928e918598bbae8f8b3e0a0d5e6d3fbab701ee71c302c350','She/Her','Hanni','Pham','555-1111','2026-02-09 00:39:53','2026-02-09 00:39:53'),(2,'Preppy@bubbletea.com','8e501d432e1ef138ee3c7accda88590422e0fa1a40e81fdc5914acc7ce91711e','She/Her','Preppy','Legend','555-2222','2026-02-09 00:39:56','2026-02-09 00:39:56'),(4,'Miles@bubbletea.com','54dfd166336e3355db4edeb95fddaeaa6decd4fefe80c8f97e5e7b9298ac7e92','He/Him','Miles','Molrales','555-3333','2026-02-09 00:39:59','2026-02-09 00:39:59');
/*!40000 ALTER TABLE `bubbletea_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-04-18  0:35:39
