-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_fitness_trainer`
--
CREATE DATABASE IF NOT EXISTS `online_fitness_trainer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `online_fitness_trainer`;

-- --------------------------------------------------------

--
-- Table structure for table `fitnessmodel`
--

CREATE TABLE `fitnessmodel` (
  `id` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `weight` int(11) NOT NULL,
  `fitnessLevel` varchar(100) NOT NULL,
  `goal` varchar(300) NOT NULL,
  `equipment` varchar(300) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitnessmodel`
--

INSERT INTO `fitnessmodel` (`id`, `gender`, `unit`, `weight`, `fitnessLevel`, `goal`, `equipment`, `days`) VALUES
(1, 'Male', 'Kilograms', 70, 'Beginner', 'Weight Loss', 'Treadmill, Resistance Bands, Yoga Mat', 3),
(2, 'Female', 'Pounds', 130, 'Intermediate', 'Muscle Gain', 'Dumbbells, Treadmill, Resistance Bands', 4),
(3, 'Male', 'Kilograms', 75, 'Advanced', 'Toning', 'Barbell, Bench Press, Pull-up Bar', 5),
(4, 'Female', 'Pounds', 140, 'Beginner', 'Weight Loss', 'Treadmill, Dumbbells, Kettlebells', 4),
(5, 'Male', 'Kilograms', 80, 'Intermediate', 'Muscle Gain', 'Barbell, Bench Press, Pull-up Bar', 5);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_ID` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `NIC` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `subscription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_ID`, `member_name`, `member_email`, `address`, `date_of_birth`, `age`, `contact_no`, `NIC`, `gender`, `username`, `password`, `confirm_password`, `height`, `weight`, `subscription`) VALUES
(33, 'Dhanushi', 'dhanushi.p@gmail.com', '123', '2023-11-01', 0, 1234567890, 123, 'female', '123', '12', '12', 123, 123, ''),
(34, 'Dhanushi', 'dhanushi.p@gmail.com', '123', '2023-10-06', 123, 1234567890, 123, 'male', '12', '12', '12', 12, 123, ''),
(35, 'ADMIN', '', '', '0000-00-00', 12, 0, 0, 'blank', 'admin', '123', '123', 0, 123, ''),
(43, 'Dhanushi', 'dhanushi.p@gmail.com', '123', '2023-10-06', 123, 1232, 1234567890, 'female', 'dhanushi', '*Dhan123*', '*Dhan123*', 123, 12, ''),
(47, 'John Doe', 'john.doe@gmail.com', '123 Main St', '1990-08-15', 31, 1234567890, 123456789, 'Male', 'johndoe', 'password123', 'password123', 180, 75.5, 'Gold'),
(48, 'Jane Smith', 'jane.smith@gmail.com', '456 Elm St', '1988-07-20', 33, 2147483647, 987654321, 'Female', 'janesmith', 'pass123', 'pass123', 165.5, 63, 'Silver'),
(49, 'Sam Johnson', 'sam.johnson@gmail.com', '789 Oak St', '1995-12-10', 26, 2147483647, 789012345, 'Male', 'samjohnson', 'sam123', 'sam123', 172, 80, 'Bronze'),
(50, 'Emily Wilson', 'emily.wilson@gmail.com', '101 Pine St', '1998-05-05', 23, 2147483647, 765432109, 'Female', 'emilywilson', 'pass456', 'pass456', 160.5, 55.5, 'Platinum'),
(51, 'David Brown', 'david.brown@gmail.com', '321 Birch St', '1993-11-30', 27, 2147483647, 654321098, 'Male', 'davidbrown', 'david123', 'david123', 175, 86, 'Gold');

-- --------------------------------------------------------

--
-- Table structure for table `nutritionarticles`
--

CREATE TABLE `nutritionarticles` (
  `articlesId` int(11) NOT NULL,
  `articleName` varchar(100) DEFAULT NULL,
  `articleDescription` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nutritionarticles`
--

INSERT INTO `nutritionarticles` (`articlesId`, `articleName`, `articleDescription`) VALUES
(2, 'Understanding Macros: A Beginners Guide to Macronutrients', 'Macronutrients, including carbohydrates, proteins, and fats, are the essential building blocks of a well-rounded diet. Understanding how to balance these macros can optimize your nutrition, energy levels, and overall performance. In this article, we break down what macros are, their role in your body, and how to calculate and manage your daily intake for your specific health and fitness goals'),
(3, 'Mindful Eating: Cultivating a Healthy Relationship with Food', 'Eating isnt just about nourishing our bodies; its also about our relationship with food. Mindful eating is a practice that encourages us to be present during meals, savoring each bite and listening to our bodys hunger and fullness cues. This article delves into the principles of mindful eating, offering tips on how to develop a healthier relationship with food, prevent overeating, and fully enjoy the culinary experience'),
(4, '10 Superfoods to Boost Your Health', 'Superfoods are nutrient-dense powerhouses that provide a variety of health benefits. Incorporating these into your diet can help you maintain optimal health and well-being. In this article, well explore 10 superfoods, their nutritional benefits, and how to easily integrate them into your meals. From berries packed with antioxidants to leafy greens rich in vitamins and minerals, well guide you on the path to a healthier lifestyle.'),
(13, 'The Power of Protein', 'Protein is an essential macronutrient that plays a crucial role in muscle growth and repair. Learn how to include high-quality protein sources like lean meats, fish, and plant-based options in your diet.'),
(14, 'Healthy Eating Habits', 'Developing healthy eating habits can lead to a longer and more fulfilling life. Discover practical tips on portion control, mindful eating, and balancing nutrients for overall wellness.'),
(15, 'Vitamins and Minerals', 'Explore the world of vitamins and minerals and understand their importance in maintaining good health. Learn about the sources of key vitamins and minerals and how to meet your daily requirements.'),
(16, 'Boost Your Energy with Carbs', 'Carbohydrates are the body\'s primary source of energy. Find out how to incorporate complex carbohydrates like whole grains, fruits, and vegetables into your meals for sustained energy throughout the day.'),
(17, 'Fats: The Good and the Bad', 'Not all fats are created equal. Uncover the differences between healthy fats (unsaturated) and unhealthy fats (saturated and trans fats) and make informed choices for a heart-healthy diet.');

-- --------------------------------------------------------

--
-- Table structure for table `nutritionplan`
--

CREATE TABLE `nutritionplan` (
  `planId` int(11) NOT NULL,
  `planName` varchar(100) DEFAULT NULL,
  `planDescription` longtext DEFAULT NULL,
  `trainerName` varchar(45) DEFAULT NULL,
  `planTypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nutritionplan`
--

INSERT INTO `nutritionplan` (`planId`, `planName`, `planDescription`, `trainerName`, `planTypeId`) VALUES
(2, '7 Day High Enrgy Plans', 'Day 1: <br>Breakfast: Scrambled eggs, spinach, and whole grain toast.\r\n                        Snack: Greek yogurt with honey and almonds.\r\n                        Lunch: Grilled chicken or chickpea salad with quinoa and veggies.\r\n                        Snack: Apple slices with peanut butter.\r\n                        Dinner: Baked salmon, sweet potato, and steamed broccoli. <br>\r\n\r\n                        Day 2:<br>Breakfast: Smoothie with banana, spinach, Greek yogurt, and almond milk.\r\n                        Snack: Trail mix with nuts and dried fruits.\r\n                        Lunch: Turkey or tofu wrap with veggies.\r\n                        Snack: Greek yogurt with berries.\r\n                        Dinner: Stir-fried veggies with lean protein and brown rice. <br>\r\n\r\n                        Day 3:<br>Breakfast: Whole grain pancakes with fruit and yogurt.\r\n                        Snack: Hard-boiled egg and a small apple.\r\n                        Lunch: Lentil soup, whole grain roll, and mixed veggies.\r\n                        Snack: Grapes and a handful of nuts.\r\n                        Dinner: Grilled chicken or fish, quinoa, and steamed asparagus. <br>', 'James', 2),
(3, '7 Day Sports and Endurance Plans', 'Day 1:<br>Pre-workout: Banana and a small portion of Greek yogurt.\r\n                        During workout: Water or electrolyte-rich sports drink.\r\n                        Post-workout: Protein shake or chocolate milk. <br>\r\n                        Day 2:<br>Pre-workout: Whole grain toast with peanut butter and a banana.\r\n                        During workout: Energy gel or chews (if needed) and water.\r\n                        Post-workout: Grilled chicken, sweet potato, and steamed vegetables. <br>\r\n                        Day 3:<br>Pre-workout: Oatmeal with berries and a scoop of protein powder.\r\n                        During workout: Electrolyte-rich sports drink.\r\n                        Post-workout: Greek yogurt with honey and almonds. <br>\r\n                        Day 4:<br>Pre-workout: Smoothie with spinach, banana, protein powder, and almond milk.\r\n                        During workout: Energy gel or chews (if needed) and water.\r\n                        Post-workout: Grilled salmon, quinoa, and mixed vegetables. <br>', 'Kevin', 3),
(5, '14 Day Heart and Healthy Plans', 'Day 1: <br>Breakfast: Scrambled eggs, spinach, and whole grain toast.\r\n                        Snack: Greek yogurt with honey and almonds.\r\n                        Lunch: Grilled chicken or chickpea salad with quinoa and veggies.\r\n                        Snack: Apple slices with peanut butter.\r\n                        Dinner: Baked salmon, sweet potato, and steamed broccoli. <br>\r\n\r\n                        Day 2:<br>Breakfast: Smoothie with banana, spinach, Greek yogurt, and almond milk.\r\n                        Snack: Trail mix with nuts and dried fruits.\r\n                        Lunch: Turkey or tofu wrap with veggies.\r\n                        Snack: Greek yogurt with berries.\r\n                        Dinner: Stir-fried veggies with lean protein and brown rice. <br>\r\n\r\n                        Day 3:<br>Breakfast: Whole grain pancakes with fruit and yogurt.\r\n                        Snack: Hard-boiled egg and a small apple.\r\n                        Lunch: Lentil soup, whole grain roll, and mixed veggies.\r\n                        Snack: Grapes and a handful of nuts.\r\n                        Dinner: Grilled chicken or fish, quinoa, and steamed asparagus. <br>', 'Alex', 1),
(9, '14 Day Weight Loss Plan', 'A comprehensive weight loss plan designed to help you shed pounds and achieve your fitness goals. This plan includes balanced meals, exercise routines, and expert guidance to keep you on track.', 'Trainer A', 4),
(10, '30 Day Muscle Building Plan', 'A muscle-building plan that focuses on strength training and nutrition to help you gain lean muscle mass. Get ready for intense workouts and a protein-rich diet to fuel your gains.', 'Trainer B', 4),
(11, '10 Day Detox Plan', 'Give your body a reset with this 10-day detox plan. It includes cleansing foods, herbal teas, and a break from processed foods to help you feel refreshed and revitalized.', 'Trainer C', 4),
(12, '7 Day Vegan Meal Plan', 'Discover the benefits of a plant-based diet with this 7-day vegan meal plan. It\'s packed with delicious and nutritious vegan recipes that will satisfy your taste buds and support your health goals.', 'Trainer D', 4),
(13, '21 Day Balanced Diet Plan', 'Achieve balance in your diet with this 21-day meal plan. It covers all major food groups, ensuring you get the right nutrients for your well-being. Your journey to better nutrition starts here.', 'Trainer E', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `orderName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderName`, `quantity`, `total`) VALUES
(1, 'Product A', 2, 50),
(2, 'Product B', 1, 30),
(3, 'Product C', 3, 80),
(4, 'Product D', 2, 60),
(5, 'Product E', 4, 110);

-- --------------------------------------------------------

--
-- Table structure for table `plantype`
--

CREATE TABLE `plantype` (
  `planTypeId` int(11) NOT NULL,
  `planTypeName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `plantype`
--

INSERT INTO `plantype` (`planTypeId`, `planTypeName`) VALUES
(1, 'Heart and Healthy Plans'),
(2, 'High Energy Plans'),
(3, 'Sports and Endurance Plans'),
(4, 'Meal Plan'),
(5, 'Weight Loss Plans'),
(6, 'Muscle Building Plans'),
(7, 'Detox Plans'),
(8, 'Vegan Meal Plans'),
(9, 'Balanced Diet Plans');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rep_ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rep_ID`, `name`, `email`, `message`) VALUES
(1, 'Mohamed Asath', 'asath12882@gmail.com', 'abc'),
(2, 'icy', 'icy@mail.com', 'hi, hello llllllllllllllllllllllllllllllllllllllllllladkwfnwelkfhweiuhgiwgtihgtiweigfiuewhghsdhfjlhsdjlhgjshgjkshfhkweh helloo this is a text from icy. lets seee whats gonna happern\r\n'),
(3, 'User1', 'user1@gmail.com', 'This is a sample report.'),
(4, 'User2', 'user2@gmail.com', 'Reporting an issue with the website.'),
(5, 'User3', 'user3@gmail.com', 'Feedback on the training program.'),
(6, 'User4', 'user4@gmail.com', 'Request for assistance.'),
(7, 'User5', 'user5@gmail.com', 'General inquiry about fitness');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `t_ID` int(10) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_gender` varchar(10) NOT NULL,
  `t_address` varchar(100) NOT NULL,
  `t_position` varchar(30) NOT NULL,
  `t_dob` date NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_phoneNo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`t_ID`, `t_name`, `t_gender`, `t_address`, `t_position`, `t_dob`, `t_email`, `t_phoneNo`) VALUES
(22, 'Mohamed Asath', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-06', 'asath12882@gmail.com', 654),
(23, 'Mohamed Asath', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-06', 'asath12882@gmail.com', 770664),
(24, 'Mohamed Asath', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-13', 'asath12882@gmail.com', 770664182),
(25, 'Mohamed Asath', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-19', 'asath12882@gmail.com', 888),
(26, 'Mohamed Asath', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-05', 'asath12882@gmail.com', 7706641),
(27, 'Mohamed Asath', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-14', 'asath12882@gmail.com', 770664182),
(28, 'Mohamed Asath', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-19', 'asath12882@gmail.com', 7706641),
(29, 'Mohamed Asath', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-27', 'asath12882@gmail.com', 7706641),
(30, 'S.M.kalideen', 'Male', 'Paththewa', 'Head-Trainer', '2023-10-10', 'asath12882@gmail.com', 664182),
(31, '444', 'Male', 'ddfff', 'Head-Trainer', '2023-10-12', 'avc@kk.com', 555),
(32, 'aaaa', 'Male', 'aaa', 'Head-Trainer', '2023-10-12', 'aaaA@aa.co', 111),
(33, 'hhh', 'Male', 'aaaa', 'Head-Trainer', '2023-10-18', 'as@mm.com', 1000000),
(34, '', 'Male', 'ss', 'Assistant-Trainer', '2023-10-12', 'A@gmal.com', 0),
(35, 'Trainer A', 'Male', '123 Trainer St', 'Head Trainer', '1990-04-15', 'trainerA@gmail.com', 1234567890),
(36, 'Trainer B', 'Female', '456 Trainer Rd', 'Assistant Trainer', '1995-02-20', 'trainerB@gmail.com', 2147483647),
(37, 'Trainer C', 'Male', '789 Trainer Ave', 'Head Trainer', '1988-10-10', 'trainerC@gmail.com', 2147483647),
(38, 'Trainer D', 'Female', '101 Trainer Blvd', 'Assistant Trainer', '1998-06-05', 'trainerD@gmail.com', 2147483647),
(39, 'Trainer E', 'Male', '321 Trainer Ln', 'Head Trainer', '1993-12-30', 'trainerE@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fitnessmodel`
--
ALTER TABLE `fitnessmodel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_ID`);

--
-- Indexes for table `nutritionarticles`
--
ALTER TABLE `nutritionarticles`
  ADD PRIMARY KEY (`articlesId`);

--
-- Indexes for table `nutritionplan`
--
ALTER TABLE `nutritionplan`
  ADD PRIMARY KEY (`planId`),
  ADD KEY `fk_nutritionPlan_planType_idx` (`planTypeId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `plantype`
--
ALTER TABLE `plantype`
  ADD PRIMARY KEY (`planTypeId`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rep_ID`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`t_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fitnessmodel`
--
ALTER TABLE `fitnessmodel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `nutritionarticles`
--
ALTER TABLE `nutritionarticles`
  MODIFY `articlesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nutritionplan`
--
ALTER TABLE `nutritionplan`
  MODIFY `planId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `plantype`
--
ALTER TABLE `plantype`
  MODIFY `planTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rep_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `t_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nutritionplan`
--
ALTER TABLE `nutritionplan`
  ADD CONSTRAINT `fk_nutritionPlan_planType` FOREIGN KEY (`planTypeId`) REFERENCES `plantype` (`planTypeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
