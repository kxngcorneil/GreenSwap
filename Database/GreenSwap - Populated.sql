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

-- Dumping structure for table greenswap.newsletter
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_subscribed` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.newsletter: ~0 rows (approximately)

-- Dumping structure for table greenswap.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_category` char(50) NOT NULL,
  `price` double NOT NULL,
  `product_image_link` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `product_condition` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `product_stock` int(3) unsigned zerofill DEFAULT '001',
  `is_featured` tinyint(1) DEFAULT '0',
  `is_swapable` tinyint(1) DEFAULT '0',
  `delivery_method` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Post',
  `created_by` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Site Admin',
  `createdOn` date DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.products: ~54 rows (approximately)
INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_category`, `price`, `product_image_link`, `product_condition`, `product_stock`, `is_featured`, `is_swapable`, `delivery_method`, `created_by`, `createdOn`) VALUES
	(4, 'Variegated Harmony', 'Balanced greenery with natural variegation — a statement piece for any space.', 'Plant', 12.99, 'images/productImages/plant4.png', NULL, 002, 0, 0, 'Post', 'JHowe', '2025-05-04'),
	(5, 'Elegant Spire Plant', 'Tall, slender greenery that adds vertical elegance to modern interiors.', 'Plant', 14.99, 'images/productImages/plant5.png', NULL, 001, 1, 0, 'Collection', 'EPotter1', '2025-05-04'),
	(6, 'Mini Forest Terrarium', 'A hand-crafted glass terrarium featuring real moss, stones, and succulents.', 'Plant', 10, 'images/productImages/plant6.png', NULL, 003, 0, 0, 'Post', 'JHowe', '2025-05-04'),
	(7, 'Lavender Bunch', 'A fragrant bundle of dried lavender — perfect for calming energy and rustic decor.', 'Plant', 10, 'images/productImages/plant7.png', NULL, 003, 0, 1, 'Post', 'EPotter1', '2025-04-01'),
	(8, 'Desert Palm Mini', 'A sun-loving mini palm that adds a desert-inspired charm to your space.', 'Plant', 10, 'images/productImages/plant8.png', NULL, 003, 0, 0, 'Home_Dropoff', 'JHowe', '2025-04-01'),
	(9, 'Pink Bloom Bonsai', 'A vibrant flowering bonsai bringing a splash of color and elegance to your room.', 'Plant', 10, 'images/productImages/plant9.png', NULL, 003, 0, 0, 'Post', 'JHowe', '2025-04-01'),
	(10, 'Ornamental Bowl Grass', 'Compact ornamental grass in a stylish bowl, ideal for tabletops and window sills.', 'Plant', 10, 'images/productImages/plant10.png', NULL, 003, 0, 0, 'Collection', 'EPotter1', '2025-04-01'),
	(11, 'Tropical Split-Leaf', 'A lush split-leaf plant known for its bold foliage and natural air-purifying benefits.', 'Plant', 10, 'images/productImages/plant11.png', NULL, 003, 0, 0, 'Post', 'JHowe', '2025-04-01'),
	(12, 'Trailing Ivy Hanger', 'A hanging ivy plant that cascades beautifully — perfect for vertical green decor.', 'Plant', 10, 'images/productImages/plant12.png', NULL, 003, 0, 0, 'Home_Dropoff', 'JHowe', '2025-04-01'),
	(13, 'Classic Teddy Bear', 'A soft and cuddly teddy bear — perfect for bedtime hugs.', 'Toys', 12.99, 'images/productImages/toy1.png', NULL, 001, 0, 1, 'Post', 'JHowe', '2025-04-01'),
	(14, 'Learning Blocks Set', 'Colorful blocks to help kids learn numbers and basic math.', 'Toys', 9.5, 'images/productImages/toy2.png', NULL, 001, 0, 0, 'Home_Dropoff', 'EPotter1', '2025-04-01'),
	(15, 'Mini Toy Shelf Set', 'A pretend play shelf with tiny books and accessories.', 'Toys', 15, 'images/productImages/toy3.png', NULL, 001, 0, 0, 'Post', 'JHowe', '2025-04-01'),
	(16, 'Educational Play Set', 'Shapes, letters, and stacking blocks for early development.', 'Toys', 13.75, 'images/productImages/toy4.png', NULL, 001, 0, 0, 'Collection', 'EPotter1', '2025-04-01'),
	(17, 'Rubber Duck Duo', 'Classic bath time yellow and green rubber duckies.', 'Toys', 4.99, 'images/productImages/toy5.png', NULL, 001, 0, 0, 'Post', 'JHowe', '2025-04-01'),
	(18, 'Off-Road RC Car', 'High-speed remote control car with rugged tires.', 'Toys', 22.49, 'images/productImages/toy6.png', NULL, 001, 0, 0, 'Post', 'EPotter1', '2025-04-01'),
	(19, 'Tea Party Set', 'Complete pretend tea set with cups, plates, and utensils.', 'Toys', 10.99, 'images/productImages/toy7.png', NULL, 001, 0, 1, 'Collection', 'JHowe', '2025-04-01'),
	(20, 'Homemade Toys', 'Homemade Toys created for kids', 'Toys', 34, 'images/productImages/toy8.png', NULL, 001, 0, 0, 'Post', 'JHowe', '2025-04-01'),
	(21, 'Knitted Bear Plush', 'Handmade cozy bear with a warm, rustic look.', 'Toys', 11.95, 'images/productImages/toy9.png', NULL, 001, 0, 0, 'Collection', 'JHowe', '2025-04-01'),
	(22, 'Stacking Rings Tower', 'Brightly colored rings for stacking and motor skill learning.', 'Toys', 8.75, 'images/productImages/toy10.png', NULL, 001, 1, 0, 'Post', 'JHowe', '2025-04-01'),
	(23, 'Ride-On Truck', 'Toddler ride-on truck for backyard adventures.', 'Toys', 29.99, 'images/productImages/toy11.png', NULL, 001, 0, 0, 'Home_Dropoff', 'EPotter1', '2025-04-01'),
	(24, 'Russian Nesting Dolls', 'Traditional matryoshka dolls with colorful designs.', 'Toys', 18.5, 'images/productImages/toy12.png', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-04-01'),
	(26, 'Mini Jade Bonsai Duo', 'A set of two charming Jade Bonsai plants in minimalist metallic pots. Perfect for desktops or small shelves.', 'Plant', 24.99, 'images/productImages/plant14.png', NULL, 001, 0, 0, 'Post', 'EPotter1', '2025-04-01'),
	(27, 'Succulent in Aqua Ceramic Pot', 'A resilient succulent housed in a glossy aqua-colored ceramic pot.', 'Plant', 12.99, 'images/productImages/plant15.png', NULL, 001, 0, 0, 'Home_Dropoff', 'EBurges', '2025-04-01'),
	(28, 'Banana Leaf Plant in Wooden Pot', 'A bold statement plant with large banana-like leaves, nestled in a sleek wooden pot for modern aesthetics.', 'Plant', 44.99, 'images/productImages/plant16.png', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-04-01'),
	(29, 'Snake Plant on Shelf', 'A stylish snake plant displayed on a minimalist wooden shelf. A striking combination of design and greenery.', 'Plant', 34.5, 'images/productImages/plant17.png', NULL, 001, 1, 1, 'Post', 'EPotter1', '2025-04-01'),
	(30, 'Desert Aloe in Clay Pot', 'Small but mighty, this Aloe plant thrives in dry conditions and adds rustic charm with its matte clay pot.', 'Plant', 15.75, 'images/productImages/plant18.png', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-04-01'),
	(31, 'Topiary Ball in Black Planter', 'A lush, perfectly-rounded topiary plant presented in a modern black container.', 'Plant', 49, 'images/productImages/plant19.png', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-04-01'),
	(32, 'Zebra Cactus in Cream Pot', 'A striking zebra cactus with bold striping, placed in a neutral-toned pot to complement any room.', 'Plant', 13.25, 'images/productImages/plant20.png', NULL, 001, 1, 1, 'Collection', 'EBurges', '2025-04-01'),
	(33, 'Tiny Tree in White Pot', 'A small decorative indoor tree in a clean white planter. Adds subtle greenery and calm to your space.', 'Plant', 18.99, 'images/productImages/plant21.png', NULL, 001, 0, 0, 'Post', 'EPotter1', '2025-04-01'),
	(34, 'The Killing of The Reavey Brothers', 'In this gripping true crime account, Eugene Reavey takes readers on a harrowing journey through the darkest chapter of his life during the Northern Ireland Troubles.', 'Book', 19.99, 'images/productImages/book1.jpg', NULL, 001, 0, 0, 'Home_Dropoff', 'EBurges', '2025-04-01'),
	(35, 'Dermot Whelan: Busy and Wrecked', 'Create space and energy for the people and things that really matter. Get ready to de-whelm your day, reclaim your calm, and find your way back to yourself.', 'Book', 18.99, 'images/productImages/book2.jpg', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-04-01'),
	(36, 'I Am by Gerry Hussey', 'Gerry Hussey offers a transformative guide to unlocking your true potential and living a fulfilled life.', 'Book', 21.5, 'images/productImages/book3.jpg', NULL, 001, 1, 0, 'Post', 'EPotter1', '2025-04-01'),
	(37, 'Dream State', 'An exploration into the subconscious mind and the power of dreams in shaping our reality.', 'Book', 17.99, 'images/productImages/book4.jpg', NULL, 001, 0, 1, 'Post', 'EPotter1', '2025-04-01'),
	(38, 'Frogs for Watchdogs', 'A whimsical tale that delves into the unexpected adventures of unlikely heroes.', 'Book', 16.5, 'images/productImages/book5.jpg', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-04-01'),
	(39, 'The Bee Sting by Paul Murray', 'A darkly comic novel that examines the complexities of family life and personal ambition.', 'Book', 22, 'images/productImages/book6.jpg', NULL, 001, 0, 0, 'Home_Dropoff', 'EPotter1', '2025-04-01'),
	(40, 'Strange Sally Diamond by Liz Nugent', 'A gripping psychological thriller that unravels the secrets of a seemingly ordinary woman.', 'Book', 19.99, 'images/productImages/book7.jpg', NULL, 001, 1, 0, 'Post', 'EPotter1', '2025-04-01'),
	(41, 'Sunday Miscellany: A Selection 2018–2023', 'A curated collection of essays and stories from the beloved radio program.', 'Book', 24.99, 'images/productImages/book8.jpg', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-04-01'),
	(42, 'Paul O\'Connell: The Battle (A Memoir)', 'There has never been a rugby player quite like Paul O\'Connell. He is synonymous with passion, heart and determination;', 'Book', 20, 'images/productImages/book9.jpg', NULL, 001, 1, 0, 'Home_Dropoff', 'EBurges', '2025-04-01'),
	(43, 'Flavour: Every Day Food Made Exceptional', 'A culinary masterpiece that brings new life to traditional recipes.', 'Book', 25, 'images/productImages/book10.jpg', NULL, 001, 1, 1, 'Post', 'EPotter1', '2025-04-01'),
	(44, 'My Hot Friend', 'A contemporary novel exploring friendship and desire.', 'Book', 18, 'images/productImages/book11.jpg', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-04-01'),
	(45, 'The President\'s Dog', 'A charming children\'s book about the adventures of the President\'s canine companion.', 'Book', 15.99, 'images/productImages/book12.jpg', NULL, 001, 0, 0, 'Post', 'JHowe', '2025-04-01'),
	(46, 'I Am The Wind: Irish Poems for Children Everywhere', 'A delightful anthology of Irish poetry tailored for young readers.', 'Book', 17.5, 'images/productImages/book13.jpg', NULL, 001, 0, 0, 'Post', 'JHowe', '2025-04-01'),
	(47, '2 Seater Sofa', '2-seat sofa, Kilanda dark blue', 'Indoor_Furniture', 350, 'images/productImages/ektorp-2-seat-sofa-kilanda-dark-blue__1194825_pe902075_s5.avif', 'Good', 001, 1, 0, 'Collection', 'JHowe', '2025-04-01'),
	(48, 'Snug Milano Bean Bag - Blue', 'This chair is perfect for livening up a lonely corner. It’s a great choice for kids’ playrooms.', 'Indoor_Furniture', 24.99, 'images/productImages/upholstered-bean-bag-chair-navy-at-teds-interiors-newry-scaled-1.jpg', 'Good', 001, 0, 0, 'Collection', 'JHowe', '2025-04-01'),
	(49, 'Kilmore Corner TV Unit - Antique Grey', 'Wooden TV Unit that would be perfect for a new home', 'Indoor_Furniture', 340.6, 'images/productImages/corner_tv_unit.jpg', NULL, 001, 0, 0, 'Home_Dropoff', 'JHowe', '2025-04-01'),
	(58, 'MICKE Desk - White', 'Donec euismod dui nec quam lacinia commodo. Nam aliquet eleifend mi, nec condimentum nibh commodo sit amet. Aliquam venenatis blandit.', 'Indoor_Furniture', 129, 'images/productImages/micke-desk-white__0736576_pe740630_s5.webp', '1', 001, 0, 1, 'Collection', 'EBurges', '2025-05-05'),
	(60, 'ROCKSJÖN 2-seat sofa - White', 'Donec euismod dui nec quam lacinia commodo. Nam aliquet eleifend mi, nec condimentum nibh commodo sit amet. Aliquam venenatis blandit.', 'Indoor_Furniture', 279, 'images/productImages/rocksjoen-2-seat-sofa-blekinge-white__1247372_pe922643_s5.avif', '1', 001, 0, 0, 'Post', 'EBurges', '2025-05-05'),
	(63, 'HOCSOK Chest of Drawers', 'Wooden Bedroom Cabinet with 4 Drawers, Storage Dresser for Bedroom, Living Room,', 'Indoor_Furniture', 117.43, 'images/productImages/71Xvc8ydQQL._AC_SX679_.jpg', NULL, 001, 0, 1, 'Collection', 'EBurges', '2025-05-05'),
	(64, 'HOCSOK Chest of Drawers', 'Wooden Bedroom Cabinet with 4 Drawers, Storage Dresser for Bedroom, Living Room,', 'Indoor_Furniture', 117.43, 'images/productImages/71Xvc8ydQQL._AC_SX679_.jpg', NULL, 001, 0, 0, 'Collection', 'EBurges', '2025-05-05'),
	(65, 'Nevada Small Sideboard', 'levate your living space with our exquisite collection of traditional design parquet furniture, featuring stunning dining tables and occasional pieces. The Nevada collection is crafted with precision and passion.', 'Indoor_Furniture', 200, 'images/productImages/nevada_small_sideboard.webp', NULL, 001, 0, 0, 'Collection', 'EBurges', '2025-05-05'),
	(66, 'ROCKSJÖN 2-seat sofa - Beige', 'Donec euismod dui nec quam lacinia commodo. Nam aliquet eleifend mi, nec condimentum nibh commodo sit amet. Aliquam venenatis blandit.', 'Indoor_Furniture', 299, 'images/productImages/rocksjoen-2-seat-sofa-kilanda-light-beige__1247376_pe922644_s5.webp', NULL, 001, 0, NULL, 'Home_Dropoff', 'EBurges', '2025-05-05'),
	(74, 'New Hampshire Transformer Patio Set - Grey', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis in risus pretium posuere. Nulla fermentum mauris eget finibus', 'Outdoor_Furniture', 499, 'images/productImages/1698419772_11_7366.jpg', NULL, 001, 0, 0, 'Post', 'EBurges', '2025-05-05'),
	(75, 'Cambridge Bistro Set - Natural', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis in risus pretium posuere. Nulla fermentum mauris eget finibus', 'Outdoor_Furniture', 150, 'images/productImages/1707905816_11_8136.jpg', NULL, 001, 0, 1, 'Collection', 'EBurges', '2025-05-05'),
	(76, 'New Hampshire Gazebo 3M x 4M - Grey', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis in risus pretium posuere. Nulla fermentum mauris eget finibus', 'Outdoor_Furniture', 120, 'images/productImages/1580995841_2_2793.jpg', NULL, 001, 0, 1, 'Collection', 'EBurges', '2025-05-05');

-- Dumping structure for table greenswap.users
CREATE TABLE IF NOT EXISTS `users` (
  `account_id` int NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `user_password` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_profile_picture_link` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_account_create_date` date NOT NULL,
  `user_bio` char(255) DEFAULT NULL,
  `user_firstname` char(20) NOT NULL,
  `user_lastname` char(20) NOT NULL,
  `user_email` char(50) NOT NULL,
  `user_phone_number` char(15) DEFAULT NULL,
  `user_age` int DEFAULT NULL,
  `user_location` char(100) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.users: ~3 rows (approximately)
INSERT INTO `users` (`account_id`, `username`, `user_password`, `user_profile_picture_link`, `user_account_create_date`, `user_bio`, `user_firstname`, `user_lastname`, `user_email`, `user_phone_number`, `user_age`, `user_location`) VALUES
	(1, 'JHowe', '$2y$10$...WFwIYNN5LGOh.ZaffKefGQEzy9Tb2P0O2Dg7cVkQ2Sv8eGj7mi', NULL, '2025-05-04', NULL, 'Jake', 'Howe', 'b00164837@mytudublin.ie', NULL, NULL, NULL),
	(8, 'EBurges', '$2y$10$vXKhKVnuUBO6hV3L7byIuOBGz8K6E6aNu5rgIPBQtUigQp.POCX0e', NULL, '2025-05-05', NULL, 'Elliot', 'Burges', 'ElliotBurgess@armyspy.com', NULL, NULL, NULL),
	(9, 'EPotter1', '$2y$10$VgYaIuXNzNADoJuC8CzNsOVsbI1bojLBgT3bvHYsaROmBM1YFLioO', NULL, '2025-05-05', NULL, 'Eloise', 'Potter', 'EloisePotter@armyspy.com', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
