# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.11.2-MariaDB-1:10.11.2+maria~ubu2204)
# Database: mycollection
# Generation Time: 2023-04-03 10:07:45 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table collection_recipes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `collection_recipes`;

CREATE TABLE `collection_recipes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(512) NOT NULL,
  `imagelink` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `collection_recipes` WRITE;
/*!40000 ALTER TABLE `collection_recipes` DISABLE KEYS */;

INSERT INTO `collection_recipes` (`id`, `name`, `date`, `description`, `imagelink`)
VALUES
	(1,'Broad Bean Danish','2022-04-03','Vegan broad bean and pea danish with sunflower \'cream\', salsa verde and pickled radish. ','https://res.cloudinary.com/dkweuv1ms/image/upload/v1680426798/broadbeandanish_z5lcot.jpg'),
	(2,'Bacon & Cheese Crolinder','2023-03-01','Bacon jam and Coolea cheese custard crolinder','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_center,h_3024,w_3024/v1680425173/baconcheesecrol_ya5vcx.jpg'),
	(3,'Char Sui Bun ','2023-01-16','Char Sui Pork Bun','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,g_center,h_3024,w_3024/v1680425182/charsuibun_faqkl0.jpg'),
	(4,'Curry Puffs','2023-01-05','Spicy vegan potato parsnip and pea curry puffs','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,g_center,h_3024,w_3024/v1680425182/currypuffs_o8nlya.jpg'),
	(5,'Feta & Honey Swirls','2022-06-05','Feta, honey and fennel swirls','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_south_east,h_3024,w_3024/v1680425182/fetahoneyswirls_crdljt.jpg'),
	(6,'Kimchi swirls','2022-09-15','Vegan kimchi and smoked fermented cashew curd swirls','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_center,w_2448/v1680425191/kimchiswirl_bxvjmf.jpg'),
	(7,'Saltfish Rissoles','2022-06-22','Creamy saltfish filled rissoles','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_center,h_3024,w_3024/v1680444320/rissoles_izmqjf.jpg'),
	(8,'Smoked Trout Danish','2022-09-23','Smoked trout with lemon cultured cream, dill and pickle','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_center,h_3024,w_3024/v1680425188/smokedtroutdanish_uclp4l.jpg'),
	(9,'Spanakopita swirl','2023-02-10','Vegan smoked fermented cashew curd with herb and spinach','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_south,h_3024,w_3024/v1680444161/spanakopitaswirls_kubhbr.jpg'),
	(10,'Tomato & Ricotta Danish','2022-07-01','Balsamic roast cherry tomatoes with basil and lemon ricotta','https://res.cloudinary.com/dkweuv1ms/image/upload/c_crop,e_vibrance:20,g_south_east,h_3024,w_3024/v1680425190/tomatodanish_qcrdqt.jpg');

/*!40000 ALTER TABLE `collection_recipes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
