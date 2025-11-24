-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: moviebook
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `add_movie`
--

DROP TABLE IF EXISTS `add_movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `add_movie` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(100) NOT NULL,
  `directer` varchar(100) NOT NULL,
  `release_date` varchar(100) NOT NULL,
  `categroy` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `you_tube_link` varchar(250) NOT NULL,
  `show` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `decription` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_movie`
--

LOCK TABLES `add_movie` WRITE;
/*!40000 ALTER TABLE `add_movie` DISABLE KEYS */;
INSERT INTO `add_movie` VALUES (13,'Chaal Jeevi Laiye','Vipul Mehta','Jan 7, 2019','Drama','Gujarati','https://www.youtube.com/embed/y1NoFZPVTr0','15:00,18:15','running','                Chaal Jeevi Laiye is a story of a Father-Son’s unplanned journey to escape a workaholic existence. The duo, Aditya Parikh and his father Bipin Chandra Parikh explore the meaning of life as they meet a stranger traveler named Ketki, who takes them on a journey of surprises and realiza','chaal-jivi-laiye.jpg',1),(14,'Tanaji','Om Raut','10th January 2020.',' Historical','Hindi','https://www.youtube.com/embed/cffAGIYTEHU','18:00,15:15','running','                Gulshan Kumar, T-Series & Ajay Devgn ffilms Presents official trailer of the most awaited bollywood movie TANHAJI -THE UNSUNG WARRIOR in 3D, Directed by Om Raut, will release on 10th January 2020.\r\nTanhaji- The Unsung Warrior is an Indian biographical period drama film based on the l','tanaji.jpeg',1),(15,'Playing With Fire ','Andrea Sedlackova','6 November 2019','Comedy','English','https://www.youtube.com/embed/fd5GlZUpfaM','21:15','running','                Playing with Fire is a 2019 American family comedy film directed by Andy Fickman from a screenplay by Dan Ewen and Matt Lieberman based on a story by Ewen. The film stars John Cena, Keegan-Michael Key, John Leguizamo, Dennis Haysbert, Brianna Hildebrand and Judy Greer, and follows a ','movieposter_en.jpg',1),(16,'Golmaal Again','Rohit Shetty','20 October 2017','Action','Hindi','https://www.youtube.com/embed/VgQUwsUHdqc','18:00','upcoming','Five orphan men return to the orphanage they grew up in to attend their mentor\'s funeral. However, they encounter the ghost of their childhood friend, Khushi, and help her attain salvation.','golmaal_again.jpg',1),(17,'Shreshaah','Vishnuvardhan','12 August 2021','Biographical War','Hindi','https://www.youtube.com/embed/Q0FTXnefVBA','15:15','upcoming','The life of Indian army captain Vikram Batra, awarded with the Param Vir Chakra, India\'s highest award for valour for his actions during the 1999 Kargil War.','shershah.jpg',1),(19,'Trường Học Uy Long 3','Châu Tinh Trì','1993-05-01','Action','English','https://www.youtube.com/embed/aA4HB7WwnGs','21:00,18:00','running','Chow Sing-Sing returns, only this time he doesn’t go back to school. Instead, Chow goes undercover as the husband of a wealthy socialite, which doesn’t sit well with his fiancée, who tries to convince Chow to quit working as undercover.','ttul.jpg',1),(20,'MAI','Trấn Thành','2025-11-03','Tình Cảm, Gia Đình','Tiếng Việt','https://www.youtube.com/embed/Yz96EBNwMGw','21:00,15:00,18:00','running','Mai (2024) kể về cuộc đời của một người phụ nữ cùng tên tên Mai (Phương Anh Đào thủ vai). Dương, người chia sẻ với người khác về những thay đổi tích cực mà Mai - cô gái đặc biệt đã mang lại cho cuộc sống của anh. Dương thổ lộ rằng Mai đã làm cho anh trở nên lạc quan hơn, biết lắng nghe hơn.','phim-te-20240201102114.jpg',1);
/*!40000 ALTER TABLE `add_movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin@gmail.com','admin','1');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking_combos`
--

DROP TABLE IF EXISTS `booking_combos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking_combos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `combo_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `booking_id` (`booking_id`),
  KEY `combo_id` (`combo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_combos`
--

LOCK TABLES `booking_combos` WRITE;
/*!40000 ALTER TABLE `booking_combos` DISABLE KEYS */;
INSERT INTO `booking_combos` VALUES (1,18,1,1,'2025-11-17 13:14:18'),(2,19,1,1,'2025-11-17 13:41:29'),(3,20,1,2,'2025-11-17 13:44:02'),(4,21,1,1,'2025-11-17 14:12:32'),(5,21,2,1,'2025-11-17 14:12:32');
/*!40000 ALTER TABLE `booking_combos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `showtime` varchar(100) NOT NULL,
  `seat` text NOT NULL,
  `total_seat` int(11) NOT NULL,
  `amount` decimal(12,0) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'Huong','Trường Học Uy Long 3','21:00','I9',1,100000,'2025-11-12 16:04:11'),(2,'Huong','Trường Học Uy Long 3','18:00','I7,F7',2,250000,'2025-11-12 16:08:31'),(3,'Huong','Chaal Jeevi Laiye','15:00','I9,F9',2,250000,'2025-11-12 16:11:08'),(4,'Huong','Tanaji','18:00','I8,H8',2,100000,'2025-11-12 16:17:08'),(5,'Huong','Trường Học Uy Long 3','18:00','I12,H12',2,100000,'2025-11-12 16:19:43'),(6,'Huong','Trường Học Uy Long 3','18:00','I7,F7',2,250000,'2025-11-12 16:22:01');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `combos`
--

DROP TABLE IF EXISTS `combos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `combos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `combo_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `image` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `combos`
--

LOCK TABLES `combos` WRITE;
/*!40000 ALTER TABLE `combos` DISABLE KEYS */;
INSERT INTO `combos` VALUES (1,'Combo Bắp + Pepsi',45000,'1 bắp ngọt + 1 Pepsi 330ml, áp dụng toàn hệ thống',1,'combo1.jpg'),(2,'Bắp Phô Mai Size L',35000,'Bắp rang vị phô mai, size lớn',1,'combo2.jpg'),(5,'Coca-Cola 390ml',15000,'Nước ngọt Coca-Cola chai 390ml',1,'combo3.jpg');
/*!40000 ALTER TABLE `combos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `show_time` varchar(100) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `totalseat` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(25) NOT NULL,
  `ex_date` varchar(100) NOT NULL,
  `cvv` int(5) NOT NULL,
  `custemer_id` int(15) NOT NULL,
  `combo` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,1,'Chaal Jeevi Laiye','15:00','G1,G2,D1,D2','4','500','Wed-09-21 ','Thu-09-21 ','pratik d','7896','2021-09-30',789,1869901767,''),(2,1,'Tanaji','15:15','F7,F8,E7,E8,A7,A8','6','1200','Thu-09-21 ','Fri-09-21 ','pratik d','145260','2021-09-30',349,1890244096,''),(3,2,'Chaal Jeevi Laiye','15:00','I5,I6,H5,H6,G5,G6','6','600','Thu-09-21 ','Fri-09-21 ','parthiv','45456845565','2021-10-23',455,560041981,''),(4,3,'Chaal Jeevi Laiye','15:00','I7,I8','2','200','Thu-09-21 ','Fri-10-21 ','rushabh','545656','2021-09-29',545,447698228,''),(5,3,'Chaal Jeevi Laiye','18:15','G9','1','100','Thu-09-21 ','Fri-10-21 ','rushabh','565464','2021-09-10',655,2080652377,''),(6,6,'Avengers','21:00','I7,F7','2','250','Mon-11-25 ','Tue-11-25 ','212112','1213212121','2025-11-20',14,845763758,''),(8,6,'Trường Học Uy Long 3','21:00','I1,H1','2','200','Tue-11-25 ','Wed-11-25 ','212112','123456','2025-11-29',1,456177243,''),(16,6,'Tanaji','15:15','I8,I9','2','200000','2025-11-14 18:30:30','2025-11-14 18:30:30','','','',0,6,''),(17,6,'Playing With Fire','21:15','I12,F12','2','295000','2025-11-17 12:44:15','2025-11-17 12:44:15','','','',0,6,''),(18,6,'Playing With Fire','21:15','I11,I12','2','245000','2025-11-17 13:14:18','2025-11-17 13:14:18','','','',0,6,'1:1'),(19,10,'MAI','18:00','F8,F9','2','345000','2025-11-17 13:41:29','2025-11-17 13:41:29','','','',0,10,'1:1'),(20,10,'Chaal Jeevi Laiye','15:00','F7,F8','2','390000','2025-11-17 13:44:02','2025-11-17 13:44:02','','','',0,10,'1:2'),(21,6,'Trường Học Uy Long 3','18:00','I1,I2','2','280000','2025-11-17 14:12:32','2025-11-17 14:12:32','','','',0,6,'1:1|2:1');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` varchar(100) NOT NULL,
  `refund_status` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (61,'Truc','trungtruchp42@gmail.com','Phim quá hay luôn nha.',1),(2,'parth','part@gmail.com','Inox Theatre is widely use now days..',0),(3,'vrushti','vrusht@gmail.com','you easily choose your sheets.',0),(4,'yash','yas@gmail.com','Also customer service is vary good.',0),(63,'?? Tr?m Trung Tr?c','trungtruchp42Gmail.com','Hoàn ti?n test',1);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refunds`
--

DROP TABLE IF EXISTS `refunds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `refunds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `reason` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refunds`
--

LOCK TABLES `refunds` WRITE;
/*!40000 ALTER TABLE `refunds` DISABLE KEYS */;
INSERT INTO `refunds` VALUES (1,'Huong',100000.00,'Khách bận không lấy vé được.','2025-11-14 12:12:31'),(2,'Truc',180000.00,'Test','2025-11-17 07:19:28');
/*!40000 ALTER TABLE `refunds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theater_show`
--

DROP TABLE IF EXISTS `theater_show`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theater_show` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `show` varchar(100) NOT NULL,
  `theater` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theater_show`
--

LOCK TABLES `theater_show` WRITE;
/*!40000 ALTER TABLE `theater_show` DISABLE KEYS */;
INSERT INTO `theater_show` VALUES (1,'21:00','1'),(2,'15:00','1'),(3,'18:00','2'),(4,'18:15','1'),(5,'15:15','2'),(6,'21:15','2');
/*!40000 ALTER TABLE `theater_show` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,10,'1030071921','Vietcombank',230000.00,'2025-11-12 15:51:38'),(2,10,'1030071921','Vietcombank',230000.00,'2025-11-12 15:51:46'),(3,10,'1030071921','Vietcombank',230000.00,'2025-11-12 15:52:25'),(4,10,'1030071921','Vietcombank',230000.00,'2025-11-12 15:52:34'),(5,10,'1030071921','Vietcombank',230000.00,'2025-11-12 15:52:43'),(6,10,'1030071921','Vietcombank',230000.00,'2025-11-12 15:52:48'),(7,10,'1030071921','Vietcombank',230000.00,'2025-11-12 15:52:59'),(8,6,'1030071921','Vietcombank',2000000.00,'2025-11-14 18:29:51'),(9,6,'1030071921','Vietcombank',2000000.00,'2025-11-14 18:29:55'),(10,6,'1030071921','Vietcombank',2000000.00,'2025-11-14 18:30:03'),(11,10,'1030071921','Vietcombank',2000000.00,'2025-11-17 13:24:53'),(12,10,'1030071921','Vietcombank',2000000.00,'2025-11-17 13:24:55'),(13,10,'1030071921','Vietcombank',2000000.00,'2025-11-17 13:24:57'),(14,10,'1030071921','Vietcombank',2000000.00,'2025-11-17 13:25:00'),(15,10,'1030071921','Vietcombank',2000000.00,'2025-11-17 13:25:02'),(16,10,'1030071921','Vietcombank',10000.00,'2025-11-17 13:33:11'),(17,10,'1030071921','Vietcombank',10000.00,'2025-11-17 13:33:20'),(18,10,'1030071921','Vietcombank',10000.00,'2025-11-17 13:34:59'),(19,10,'1030071921','Sacombank',10000.00,'2025-11-17 13:36:47'),(20,10,'1030071921','Sacombank',10000.00,'2025-11-17 13:36:49'),(21,10,'1030071921','Sacombank',10000.00,'2025-11-17 13:36:51'),(22,10,'1030071921','MB Bank',10000.00,'2025-11-17 13:38:09'),(23,10,'1030071921','MB Bank',10000.00,'2025-11-17 13:38:40'),(24,10,'1030071921','MB Bank',10000.00,'2025-11-17 13:40:35'),(25,10,'1030071921','Vietcombank',10000.00,'2025-11-17 13:40:50'),(26,6,'1030071921','VietinBank',10000.00,'2025-11-17 13:56:16');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `image` varchar(100) NOT NULL,
  `balance` decimal(10,2) DEFAULT 0.00,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'prati','prati@gmail.com',2147483647,'Surendranagar','4550','06c90bcab9e84256a70d015503f31271 (1) (1).jpg',0.00),(2,'parthiv','parthi@gmail.com',2147483647,'WADHWAN','78963','',0.00),(3,'rushabh','rushab@gmail.com',1198875215,'joravarnagar','147852','',0.00),(4,'hetanshi','hetansh@gmail.com',1234567890,'fggfrg','0','',0.00),(5,'dharmin','dharm@gmail.com',2147483647,'surat','hitesh','eye candy wallpapers 6 by deadpxl.jpg',0.00),(6,'Truc','trungtruchp42@gmail.com',374623902,'Nha Trangg','123456','',3300000.00),(10,'Huong','huong.ntt.63cntt@ntu.edu.vn',374623902,'Nha Trang','123456','122151192_186817512952408_4119837219712775257_n.jpg',9475000.00),(11,'Tuan','tuanpro123@gmail.com',123456789,'Nha Trang','123456','',0.00);
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

-- Dump completed on 2025-11-17 17:36:23
