-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for greenswap
CREATE DATABASE IF NOT EXISTS `greenswap` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `greenswap`;

-- Dumping structure for table greenswap.howitworks
CREATE TABLE IF NOT EXISTS `howitworks` (
  `photo_link` varchar(100) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_desc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.howitworks: ~3 rows (approximately)
INSERT INTO `howitworks` (`photo_link`, `item_name`, `item_desc`) VALUES
	('images\\browse.png', 'Browse for Items', 'Browse our website to find any item that is listed'),
	('images\\buy.png', 'Add the item to your cart', 'Press the \'Buy\' button to add the item to your cart'),
	('images/cart.png', 'Checkout', 'Once you have completed all your shopping simply checkout and fill out the required details');

-- Dumping structure for table greenswap.newsletter_mailing_list
CREATE TABLE IF NOT EXISTS `newsletter_mailing_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_subscribed` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.newsletter_mailing_list: ~0 rows (approximately)

-- Dumping structure for table greenswap.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL,
  `account_id` int NOT NULL,
  `product_quantity` int NOT NULL,
  `order_total` double NOT NULL,
  `order_shipping_cost` double NOT NULL,
  `order_date_finalised` date NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `account_id_orders` (`account_id`),
  CONSTRAINT `account_id_orders` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.orders: ~0 rows (approximately)

-- Dumping structure for table greenswap.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL,
  `product_name` char(50) NOT NULL,
  `product_desc` char(150) NOT NULL,
  `product_category` char(50) NOT NULL,
  `price` double NOT NULL,
  `product_image_link` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_condition` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `product_stock` int DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.products: ~8 rows (approximately)
INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_category`, `price`, `product_image_link`, `product_condition`, `product_stock`) VALUES
	(1, 'Tropical Leaf Plant', 'Lush banana-style foliage to bring a tropical vibe to any room.', 'Plant', 5.99, 'images\\productImages\\plants\\plant1.png', 'good', 4),
	(2, 'Zen Leaf Arrangement\n\n', 'Minimalist indoor plant ideal for calming and clean decor styles.\n\n', 'Plant', 14.5, 'images\\productImages\\plants\\plant2.png', 'ripe', 2),
	(3, 'Oasis Shrub\n\n', 'A vibrant indoor shrub that thrives in low light and brings fresh energy.', 'Plant', 6.9, 'images\\productImages\\plants\\plant3.png', 'old', 1),
	(4, 'Variegated Harmony', 'Balanced greenery with natural variegation — a statement piece for any space.', 'Plant', 12.99, 'images\\productImages\\plants\\plant4.png', 'half good', 2),
	(5, 'Elegant Spire Plant\n\n', 'Tall, slender greenery that adds vertical elegance to modern interiors.', 'Plant', 14.99, 'images\\productImages\\plants\\plant5.png', 'great', 1),
	(6, 'Mini Forest Terrarium', 'A hand-crafted glass terrarium featuring real moss, stones, and succulents.', 'Plant', 10, 'images\\productImages\\plants\\plant6.png', 'perfect condition', 3),
	(7, 'Lavender Bunch', 'A fragrant bundle of dried lavender — perfect for calming energy and rustic decor.', 'Plant', 10, 'images\\productImages\\plants\\plant7.png', 'perfect condition', 3),
	(8, 'Desert Palm Mini', ' A sun-loving mini palm that adds a desert-inspired charm to your space.', 'Plant', 10, 'images\\productImages\\plants\\plant8.png', 'perfect condition', 3),
	(9, 'Pink Bloom Bonsai\n\n', 'A vibrant flowering bonsai bringing a splash of color and elegance to your room.', 'Plant', 10, 'images\\productImages\\plants\\plant9.png', 'perfect condition', 3),
	(10, 'Ornamental Bowl Grass\n\n', 'Compact ornamental grass in a stylish bowl, ideal for tabletops and window sills.', 'Plant', 10, 'images\\productImages\\plants\\plant10.png', 'perfect condition', 3),
	(11, 'Tropical Split-Leaf\n\n', 'A lush split-leaf plant known for its bold foliage and natural air-purifying benefits.', 'Plant', 10, 'images\\productImages\\plants\\plant11.png', 'perfect condition', 3),
	(12, 'Trailing Ivy Hanger\n\n', 'A hanging ivy plant that cascades beautifully — perfect for vertical green decor.', 'Plant', 10, 'images\\productImages\\plants\\plant12.png', '#', 3),
	(13, 'Classic Teddy Bear', 'A soft and cuddly teddy bear — perfect for bedtime hugs.', 'Toys', 12.99, 'images/productImages/toys/toy1.png', NULL, NULL),
	(14, 'Learning Blocks Set', 'Colorful blocks to help kids learn numbers and basic math.', 'Toys', 9.5, 'images/productImages/toys/toy2.png', NULL, NULL),
	(15, 'Mini Toy Shelf Set', 'A pretend play shelf with tiny books and accessories.', 'Toys', 15, 'images/productImages/toys/toy3.png', NULL, NULL),
	(16, 'Educational Play Set', 'Shapes, letters, and stacking blocks for early development.', 'Toys', 13.75, 'images/productImages/toys/toy4.png', NULL, NULL),
	(17, 'Rubber Duck Duo', 'Classic bath time yellow and green rubber duckies.', 'Toys', 4.99, 'images/productImages/toys/toy5.png', NULL, NULL),
	(18, 'Off-Road RC Car', 'High-speed remote control car with rugged tires.', 'Toys', 22.49, 'images/productImages/toys/toy6.png', NULL, NULL),
	(19, 'Tea Party Set', 'Complete pretend tea set with cups, plates, and utensils.', 'Toys', 10.99, 'images/productImages/toys/toy7.png', NULL, NULL),
	(20, 'Homemade Toys', 'Homemade Toys created for kids', 'Toys', 34, 'images/productImages/toys/toy8.png', NULL, NULL),
	(21, 'Knitted Bear Plush', 'Handmade cozy bear with a warm, rustic look.', 'Toys', 11.95, 'images/productImages/toys/toy9.png', NULL, NULL),
	(22, 'Stacking Rings Tower', 'Brightly colored rings for stacking and motor skill learning.', 'Toys', 8.75, 'images/productImages/toys/toy10.png', NULL, NULL),
	(23, 'Ride-On Truck', 'Toddler ride-on truck for backyard adventures.', 'Toys', 29.99, 'images/productImages/toys/toy11.png', NULL, NULL),
	(24, 'Russian Nesting Dolls', 'Traditional matryoshka dolls with colorful designs.', 'Toys', 18.5, 'images/productImages/toys/toy12.png', NULL, NULL);

-- Dumping structure for table greenswap.users
CREATE TABLE IF NOT EXISTS `users` (
  `account_id` int NOT NULL,
  `username` char(20) NOT NULL,
  `user_password` char(30) NOT NULL,
  `user_profile_picture_link` char(100) NOT NULL,
  `user_account_create_date` date NOT NULL,
  `user_bio` char(255) DEFAULT NULL,
  `user_firstname` char(20) NOT NULL,
  `user_lastname` char(20) NOT NULL,
  `user_email` char(50) NOT NULL,
  `user_phone_number` char(15) DEFAULT NULL,
  `user_age` int NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.users: ~6 rows (approximately)
INSERT INTO `users` (`account_id`, `username`, `user_password`, `user_profile_picture_link`, `user_account_create_date`, `user_bio`, `user_firstname`, `user_lastname`, `user_email`, `user_phone_number`, `user_age`) VALUES
	(1, 'John123', '12345678', 'profile_pics/johnhpfp', '2024-02-10', 'bio1', 'john', 'hills', 'jhills@gmail.com', '01 678 9342', 21),
	(2, 'James765', '6524642', 'profile_pics/jamespfp', '2024-04-01', 'bio2', 'james', 'white', 'jwhite@gmail.com', '01 932 9274', 35),
	(3, 'Sean71', 'hfgdtsr', 'profile_pics/seanpfp.png', '2024-05-19', 'bio3', 'sean', 'mcmahon', 'smahon@gmail.com', '01 142 5246', 42),
	(4, 'David9781', 'vfrsv3543', 'profile_pics/davidpfp.png', '2024-01-09', 'bio4', 'david', 'hills', 'dhills@gmail.com', '01 135 8731', 30),
	(5, 'User1789', 'GEghrt4', 'profile_pics/jackpfp.png', '2024-03-10', 'bio5', 'jack', 'oconnor', 'jconnor@gmail.com', '01 173 4731', 19),
	(6, 'RealPerson', 'bgfgGBVH3', 'profile_pics/tompfp.png', '2024-06-29', 'bio6', 'tom', 'mullins', 'tmullins@gmail.com', '01 735 1331', 25),
	(7, 'FredS21', 'vdf@235', 'profile_pics/michaelpfp.png', '2024-02-18', 'bio7', 'michael', 'jackson', 'mj@gmail.com', '01 667 7764', 39),
	(8, 'John124', 'gsdiuj23', 'profile_pics/johndpfp.png', '2025-01-31', 'bio8', 'john', 'down', 'jdown@gmail.com', '01 555 2222', 62);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
