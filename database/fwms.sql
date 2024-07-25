-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 02:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fwms`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `comment`, `rating`, `feedback_type`) VALUES
(1, 0, 'test', 0, ''),
(2, 24, 'test', 1, 'recipe_suggestions'),
(3, 24, 'testestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetsetestsetsettestestsetset', 5, 'recipe_suggestions'),
(4, 24, 'hassa', 6, 'overall_ux'),
(5, 24, 'ts', 2, 'storage_tips'),
(6, 24, 'ggdg', 1, 'recipe_suggestions'),
(7, 24, 'storage tips are amazing', 3, 'storage_tips'),
(8, 27, 'good', 1, 'recipe_suggestions'),
(9, 28, 'my overall experience with FWRS was very very good', 10, 'overall_ux');

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `item_id` int(11) NOT NULL,
  `sku` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `storage_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`item_id`, `sku`, `user_id`, `item_name`, `quantity`, `expiry_date`, `storage_location`) VALUES
(6, '2147483000', 24, 'Rice (100g pack)', 100, '2024-08-30', 'rwp_branch'),
(12, '2147483001', 24, 'Chicken (500g)', 20, '2024-08-10', 'lhr_branch'),
(13, '2147483623', 24, 'Beef (1kg Packs)', 15, '2024-09-21', 'khi_branch'),
(14, '7863129544', 24, 'Dough', 20, '2024-08-30', 'lhr_branch'),
(15, '2147488520', 24, 'Onion', 50, '2024-07-18', 'rwp_branch'),
(16, '2147483747', 24, 'Tomato', 25, '2024-07-23', 'rwp_branch'),
(17, '2147483654', 24, 'Shawarma Bread', 20, '2024-08-24', 'rwp_branch'),
(18, '2147487847', 24, 'Masala (1 standard pack)', 65, '2024-08-23', 'rwp_branch'),
(19, '2147483647', 24, 'Buns', 56, '2024-08-23', 'rwp_branch'),
(20, '2147483648', 24, 'Olive', 65, '2024-08-23', 'rwp_branch'),
(21, '2147483649', 24, 'Cheese (50g piece)', 45, '2024-08-23', 'rwp_branch'),
(22, '2147451510', 24, 'Ketchup (50ml)', 50, '2024-08-23', 'rwp_branch'),
(23, '2147487645', 24, 'Mayonese (50ml packs)', 80, '2024-08-23', 'rwp_branch'),
(24, '2147483600', 24, 'Apples', 45, '2024-10-23', 'rwp_branch'),
(25, '2147483665', 24, 'Banana', 120, '2024-12-27', 'lhr_branch'),
(26, '2105454545', 24, 'Cucumber', 68, '2027-07-24', 'rwp_branch'),
(27, '2147483645', 24, 'Chickpeas (100g packs)', 65, '2025-05-08', 'lhr_branch'),
(28, '2147483609', 24, 'Cabbage', 65, '2026-07-24', 'rwp_branch'),
(29, '2147485470', 24, 'Carrot', 65, '2024-10-21', 'rwp_branch'),
(30, '2147483557', 24, 'Beetroot', 55, '2024-08-24', 'rwp_branch'),
(31, '2147483006', 24, 'Guava', 55, '2024-08-24', 'rwp_branch'),
(32, '2147483001', 24, 'Watermelon (150g pack)', 65, '2024-08-25', 'lhr_branch'),
(33, '2147483641', 24, 'Melon ', 65, '2024-08-24', 'rwp_branch'),
(34, '2147483642', 24, 'Sauces (1 standard pack)', 100, '2025-01-23', 'rwp_branch'),
(42, '1244022465', 24, 'Mango (200g pack)', 5, '2024-08-31', 'mtn_branch'),
(43, '8365839284', 24, 'Sugar (100g pack)', 45, '2024-08-05', 'rwp_branch'),
(44, '6557442644', 24, 'Milk (500ml pack)', 65, '2024-10-01', 'rwp_branch'),
(45, '0216668677', 24, 'Flour (250g pack)', 45, '2024-12-20', 'mtn_branch'),
(46, '5603891373', 24, 'Egg', 12, '2025-03-20', 'khi_branch'),
(47, '1128540829', 24, 'Extracts (Flavours)', 5, '2024-12-19', 'mtn_branch'),
(48, '0792156043', 24, 'Pasta (200g)', 45, '2026-12-01', 'lhr_branch'),
(49, '2430435133', 24, 'Coffee Powder (5g)', 45, '2026-12-10', 'lhr_branch'),
(50, '7592633078', 24, 'Salt (100g pack)', 5, '2024-09-10', 'rwp_branch'),
(51, '5182542681', 24, 'Tea Powder (5g)', 45, '2026-10-10', 'rwp_branch'),
(52, '8975800233', 24, 'Quinoa (50g pack)', 45, '2024-12-12', 'rwp_branch'),
(53, '7888108763', 24, 'Mint ', 45, '2024-06-28', 'khi_branch'),
(54, '4686661917', 24, 'Seaweed ', 45, '2024-10-26', 'rwp_branch'),
(55, '2323570523', 24, 'Wasabi', 65, '2025-09-29', 'rwp_branch'),
(56, '7789772455', 27, 'apples', 5, '2024-06-26', 'rwp_branch'),
(57, '3871764053', 27, 'juice box', 4, '2023-02-16', 'mtn_branch'),
(58, '647441758', 27, 'Shopping Bag', 6, '2022-08-26', 'rwp_branch'),
(59, '4598129783', 28, 'Apples', 50, '2024-10-10', 'lhr_branch');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` varchar(255) NOT NULL,
  `cuisine` varchar(255) NOT NULL,
  `meal_type` varchar(255) NOT NULL,
  `cooking_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `cuisine`, `meal_type`, `cooking_time`) VALUES
(1, 'biryani', 'pakistani', 'lunch', '40'),
(2, 'pizza', 'italian', 'fast food', '45'),
(3, 'burger', 'american', 'fast food', '20'),
(4, 'beefpulao', 'pakistani', 'lunch', '50'),
(5, 'shawarma', 'eastern', 'fast food', '15'),
(6, 'qorma', 'south asian', 'lunch', '100'),
(7, 'mixsalad', 'global', 'appetizer', '10'),
(8, 'vegsalad', 'global', 'appetizer', '10'),
(9, 'fruitSalad', 'global', 'appetizer', '10'),
(10, 'vegPulao', 'south asian', 'lunch', '40'),
(21, 'mangoMilkShake', 'american', 'beverage', '10'),
(22, 'cake', 'american', 'dessert ', '25'),
(23, 'pasta', 'italian', 'appetizer ', '120'),
(25, 'quinoasalad', 'mexican', 'appetizer', '20'),
(26, 'sushi', 'japanese', 'fast food', '30'),
(27, 'coffee', 'american', 'light meal', '20'),
(28, 'steak', 'american', 'High Protein', '110'),
(29, 'scrambledEggs', 'english', 'breakfast', '25');

-- --------------------------------------------------------

--
-- Table structure for table `storage_tip`
--

CREATE TABLE `storage_tip` (
  `tip_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `food_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storage_tip`
--

INSERT INTO `storage_tip` (`tip_id`, `description`, `food_category`) VALUES
(1, 'Keep bananas at room temperature until they ripen. Once ripe, store them in the refrigerator to extend their shelf life by a few days.', 'fruits'),
(2, 'Store berries in a single layer in a shallow container lined with paper towels to absorb moisture. Do not wash until ready to eat.', 'fruits'),
(3, 'Keep bread in a cool, dry place, preferably in a bread box. Avoid storing it in the refrigerator, as it will dry out faster.', 'bakery_items'),
(4, 'Wrap cheese in wax paper or parchment paper and then place it in a loose plastic bag. Store in the vegetable drawer of the refrigerator.', 'dairy_items'),
(5, 'Store cucumbers at room temperature. Refrigeration can cause them to become waterlogged and develop pitting.', 'vegetables'),
(6, 'Store eggs in their original carton on a refrigerator shelf, not in the door, to maintain a consistent temperature.', 'dairy_items'),
(7, 'Keep garlic in a cool, dark place with good air circulation. A mesh bag or paper bag works well.', 'vegetables'),
(8, 'Store fresh herbs in the refrigerator with their stems submerged in water, covered loosely with a plastic bag. Change the water every few days.', 'vegetables'),
(9, 'Wrap washed and dried lettuce in paper towels and store in a plastic bag or container in the refrigerator to keep it crisp.', 'vegetables'),
(10, 'Store milk on a refrigerator shelf, not in the door, to keep it at a consistent, cold temperature.', 'dairy_items'),
(11, 'Keep mushrooms in a paper bag in the refrigerator to prevent moisture buildup, which can cause spoilage.', 'vegetables'),
(12, 'Store nuts in the refrigerator or freezer in an airtight container to prevent them from going rancid.', 'dry_fruits'),
(13, 'Store onions in a cool, dry, well-ventilated area away from potatoes, as they can cause each other to spoil faster.', 'vegetables'),
(14, 'Store tomatoes at room temperature away from direct sunlight. Refrigeration can alter their texture and flavor.', 'vegetables'),
(15, 'Keep yogurt in the coldest part of the refrigerator, typically on a shelf rather than in the door, to maintain its freshness.', 'dairy_items');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dietary_preference` varchar(255) NOT NULL,
  `allergy_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `f_name`, `l_name`, `dob`, `gender`, `email`, `password`, `dietary_preference`, `allergy_info`) VALUES
(1, 'admin', 'Super', 'Admin', '2000-01-01', 'Male', 'admin@admin.com', 'admin@123', 'none', 'none'),
(24, 'hassan1', 'Hassan', 'Zahid', '2025-07-10', 'male', 'hassan@test.com', '123', 'gluten_free', 'egg_allergy'),
(27, 'test', 'TEST', 'USER', '2020-08-02', 'male', 'hasan@test.com', '123', 'dairy_free', 'none'),
(28, 'hassan', 'Hassan', 'Zahid', '1990-01-01', 'male', 'hassan@website.com', '123', 'ketogenic', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `storage_tip`
--
ALTER TABLE `storage_tip`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `storage_tip`
--
ALTER TABLE `storage_tip`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
