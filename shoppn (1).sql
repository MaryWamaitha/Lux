-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 06:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppn`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(9, 'MacBok'),
(10, 'Yellow');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `c_id`, `qty`) VALUES
(12, '::1', 3, 2),
(13, '::1', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(3, 'Food'),
(4, 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(600) NOT NULL,
  `customer_country` varchar(30) NOT NULL,
  `customer_city` varchar(30) NOT NULL,
  `customer_contact` varchar(15) NOT NULL,
  `customer_image` varchar(100) DEFAULT NULL,
  `user_role` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES
(1, 'Mary Wambui Wamaitha', 'marywamaitha019@gmail.com', 'Forevertired', 'Kenya', 'Nairobi', '+254701950103', NULL, 1),
(3, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.gh', '$2y$10$yj6ICVteqN9IuJXL3nDSdeEVik06gEWmNeHtheRo2umDlP/ZAjEF2', 'Kenya', 'Nairobi', '+254701950103', NULL, 1),
(11, 'Mary ', 'mary@gmail.com', '$2y$10$NW1lGjum4kLQxpAwANmU9uAtg7gPpeHbsNVJRqTyE6IoXpNmlY5S.', 'Kenya', 'Nairobi', '+254701950103', NULL, 1),
(14, 'Mary Wambui Wamaitha', 'wamaitha@gmail.com', '$2y$10$id6/mUjP19lqLM61bBRCz.Yy.6Sge14k74fbahzWmew1sUTvYqGHW', 'Kenya', 'Nairobi', '+254701950103', NULL, 1),
(15, 'Mary Wambui Wamaitha', 'mwamaitha@gmail.com', '$2y$10$8tcSoPHAHMMtDqZkGBw9FOvif58UFMB.v2BK6F1KpDERoBN.aZ.su', 'Kenya', 'Nairobi', 'jslokoakolp', NULL, 2),
(16, '123649', 'mwamaitha@ashesi.edu.gh', '$2y$10$e22jlp3f2wRxADP4CQe7beiEDtTWgctHPQyvTVv3UGSquHGRKvI/W', 'Kenya', 'Nairobi', '+254701950103', NULL, 0),
(17, '1264479', 'wamaitham@ashesi.edu.gh', '$2y$10$GUklXdYDxiJrma7fAqkC8.AGiJbH6YhElOPsB7qn0qrz5h7Ac4D1C', 'Kenya', 'Nairobi', '+254701950103', NULL, 2),
(18, '124578893', 'june.wamaitha@ashesi.edu.gh', '$2y$10$xfTEce8K8piOe5TCarrJSemOH6c.4/EC/SE2jaMRQwv4ZWpJ0WYP.', 'Kenya', 'Nairobi', '+254701950103', NULL, 0),
(19, 'Grace', 'grace.wamaitha@ashesi.edu.gh', '$2y$10$cVIkMW1fs710IkX0E6M76OcGRQvwxSTq789Dd0Ts60dZsuc10OSay', 'Kenya', 'Nairobi', '+254701950103', NULL, 2),
(20, 'John Mwangi', 'john.wamaitha@ashesi.edu.gh', '$2y$10$uOUqQVM8WLruDyAtDLFX/eXNo0MZEz8NwwDks4XJDYQr/fikycYRC', 'Kenya', 'Nairobi', '+254701950103', NULL, 0),
(21, 'Mary Wambui Wamaitha', 'jesse.wamaitha@ashesi.edu.gh', '$2y$10$Y30V45bcg9V6gCw9qFjm0.2z7OIj3zPC4ouTtyZxPl5Kz4m5luFfq', 'Kenya', 'Nairobi', '+254701950103', NULL, 0),
(22, '0980986', 'mary.wamaitha@ashesi.edu.jk', '$2y$10$hQRLQb6JB8fqQlwCZ4haN.RRTHLHlmFrU7hSl9AnGQOLUvWVMXmz2', 'Kenya', 'Accra', '0701950103', NULL, 2),
(23, '0998687', 'mary.wamaitha@ashesi.edu.ko', '$2y$10$vyTgg3ha1E45B149kFS2MOKM6w9rFfH7yCfl2o2Q56HA/a21t4S.W', 'Kenya', 'Nairobi', '+254701950103', NULL, 0),
(24, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.ol', '$2y$10$2yx4jEX76wwaG.ab2bJZGeMhqdJWl6p5ipgmgdJNM9oNscWHDbdyq', 'Kenya', 'Nairobi', 'Kenya', NULL, 0),
(25, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.ma', '$2y$10$93hb/7m8dOCQUOlRzZkCwuK0S27pmwVKG/Q1X1c4QwlzrxMsFlv42', 'Kenya', 'Nairobi', 'Kenya', NULL, 0),
(26, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.fs', '$2y$10$m6YyrJ8xmmkoxBUklNhOeuBHQb2NYsBPs7gX0QN.OMxxw/So3.OAi', 'Kenya', 'Nairobi', 'Kenya', NULL, 0),
(27, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.jm', '$2y$10$tidi/w9fUwFzmiAiT5ySwewXCcYTpWjBT1HYiiqFPMODvSAv4mrza', 'Kenya', 'Nairobi', 'Kenya', NULL, 0),
(28, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.ms', '$2y$10$0tDWHoMwMsksfztOEfRzEuBPzYXNyYRG86bVfGdnBTzYAM5O0YJU6', 'Kenya', 'Nairobi', 'Kenya', NULL, 0),
(29, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.vs', '$2y$10$Jo7Xv/6tb1Z8KMZfdWmWAuDSqiC/UtUU51pngoIeZHLkw9.MMfr/C', 'Kenya', 'Nairobi', 'Kenya', NULL, 2),
(30, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.va', '$2y$10$eW1D9lJRPfo5kqfOTLogDOBe66/76UWniftnct0.zsJB4pgv2L7Q.', 'Kenya', 'Nairobi', 'Kenya', NULL, 1),
(31, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.km', '$2y$10$X46Lv7qmVwhbt9.qBKf0G.MTAmB/HXz64D0oR5o5hGqnhFW04x/PK', 'Kenya', 'Nairobi', 'Kenya', NULL, 1),
(32, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.sh', '$2y$10$huvuXkL8sLEi6WVJqDAnhO6USuBiYcP0VcUKc/ih4GeNbtL0B4PIC', 'Kenya', 'Nairobi', '+254701950103', NULL, 2),
(33, 'Wambui', 'mary.wamaitha@ashesi.edu.fk', '$2y$10$wwXabOYmx33mMawgrv8Y9Ousze6dhrQeb76.zDQgLk7poLr1u8QXK', 'Ghana', 'Accra', '0571661441', NULL, 2),
(34, 'Mary Wambui Wamaitha', 'mary.njpogu@ashesi.edu.gh', '$2y$10$fdK.jrYYW//6tyjT.fMOC.hedIafi/RUMkCR0H6dHFGI0kxyIOZTK', 'Kenya', 'Nairobi', '+254701950103', NULL, 2),
(35, 'kjblop', 'mary.wambui@ashesi.edu.gh', '$2y$10$XSjZAI60ZyQRJSvkWWAEDOVY4vmSXqJVOmIi/gGTERVvpCVyt309O', 'Kenya', 'Nairobi', '+254701950103', NULL, 2),
(36, 'Mary Wambui Wamaitha', 'johnmwangi@ashesi.edu.za', '$2y$10$VQCuTt9Si8FKOLsafdSzWOO8anTJwlSP.nwS2EeFsLy1UYoFYqRr6', 'Kenya', 'Nairobi', '+254701950103', NULL, 2),
(37, 'Mary Wambui Wamaitha', 'mwaura@gmail.com', '$2y$10$8JOGjWc2s145wKjz01JujOzCJgZ6HmkRDFShWRgq9hP4XHMtJeH8q', 'Kenya', 'Nairobi', '+254701950jko', NULL, 2),
(38, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.js', '$2y$10$odH5LuEdnHjEYyRjB6utYOVs5.icXdR4JOLAEesc3GnSSQ3StWg8W', 'Kenya', 'Nairobi', '+254701950lopf', NULL, 2),
(39, '', 'mary.wamaitha@ashesi.edu.et', '$2y$10$u8YQDwb9oAu.XoSZBnYFleaOdnvwznWizKP40vOYemTCrx13ma08S', 'Ghana', 'Accra', '0571661441', NULL, 2),
(40, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.oh', '$2y$10$wnl2S.o2wCdxBzXmDpiOr.g82MLNeBM8WLA7Yvm.ER4tY9vzin/LS', 'Kenya', 'Nairobi', '+254701950103', NULL, 2),
(41, 'Mary Wambui Wamaitha', 'mary.wamaitha@ashesi.edu.moh', '$2y$10$FXPaTr3zJ9VTImqIT1PLVOTswT8KDwOlRKAAo3MVJ1/tjQL5uCoOW', '', 'Nairobi', '+254701950103', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `product_id`, `qty`) VALUES
(1, 9, 5),
(1, 13, 3),
(2, 12, 1),
(3, 12, 5),
(4, 12, 2),
(4, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES
(1, 31, 179, '2021-11-16', 'pending'),
(2, 31, 897, '2021-11-16', 'pending'),
(3, 31, 620, '2021-11-16', 'pending'),
(4, 31, 242, '2021-11-16', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES
(12, 900, 31, NULL, '', '0000-00-00'),
(13, 900, 31, NULL, '', '0000-00-00'),
(14, 900, 31, NULL, '', '0000-00-00'),
(15, 900, 31, NULL, '', '0000-00-00'),
(16, 900, 31, NULL, '', '0000-00-00'),
(17, 900, 31, NULL, '', '2021-11-16'),
(18, 900, 31, 1, 'GHC', '2021-11-16'),
(19, 558, 31, 2, 'GHC', '2021-11-16'),
(20, 2790, 31, 3, 'GHC', '2021-11-16'),
(21, 1136, 31, 4, 'GHC', '2021-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(500) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_keywords` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(9, 3, 10, 'klojsklakdl ksalkskzzz', 5, 'uvjh', '../Images/Products/God.jpg', 'j k '),
(12, 4, 10, 'Haappy', 558, 'Joy is what we claaim, what we have, our promise', '../Images/Products/coke east africa.jpg', 'Haapiness'),
(13, 3, 9, 'Phones', 300, 'Used for comms', '../Images/Products/Networking.JPG', 'Communication, telephone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `p_id` (`p_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`),
  ADD KEY `product_brand` (`product_brand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
