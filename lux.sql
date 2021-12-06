-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 03:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lux`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminLogID` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(20) NOT NULL,
  `brand_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Nike'),
(2, 'Apple'),
(3, 'Tecno'),
(4, 'Canon'),
(5, 'Generic'),
(6, 'Punny Crafts');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` int(11) NOT NULL DEFAULT 1,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Landscapes'),
(12, 'Animals '),
(13, 'Potraits');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_Fname` varchar(100) NOT NULL,
  `customer_Lname` varchar(100) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(150) NOT NULL,
  `customer_contact` varchar(15) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_Fname`, `customer_Lname`, `customer_email`, `customer_pass`, `customer_contact`, `customer_address`, `role`) VALUES
(1, 'Mary', 'Wamaitha', 'mary.wamaitha@ashesi.edu.oh', '$2y$10$XE.04Wn39Q/R8On.rVFQ1uJHGy7CR5XQ2/fD1a7pLDBLXeeDTItlK', '', '', 0),
(2, '', '', 'mary.wamaitha@ashesi.edu.km', '$2y$10$R7vJZGgLhDkfSxm2JbbM2.bKFmkTbBNEy3LsmqVIUaLm/kvSQcm.C', '', '', 0),
(3, 'Mary', 'Wamaitha', 'marywamaitha019@gmail.com', '$2y$10$IWz5H5DBMVoBisrJa4r9Eu1An26KlPnuVEcfSeMuF7RIEjO7bVJyW', '', '', 0),
(1000, 'Mercy', 'Mukiri', 'mercy.mukiri@gmail.com', '$2y$10$dp0gaRYmhH6Kk2JyFbwyF.MIg6ZhoB8G7O5tDYDE01Q22W/QfntKy', '', '', 0),
(1001, 'Perfect', 'Gift', 'perfectgift@gmail.com', '$2y$10$H.tMWa6aqmk/WmCQ6DeTm.NTgcv8i7ivSzPASfU5lCogog0bGsmry', '', '', 0),
(1002, 'Perfect', 'Gift', 'perfect.gift@gmail.com', '$2y$10$HGbvomkJrvkDdvRUpT.4WOpJdWzNYEmBvdup.KAVgZOzcp3Yahd9O', NULL, NULL, 1),
(1003, 'Mary', 'Wamaitha', 'marywamaitha1@gmail.com', '$2y$10$D3G288NbKgECTOvyy7TybeslVpQhiff3dxess0p6Sj.zYGtsQZtWC', '0701950103', NULL, 0),
(1004, 'admin', 'lux', 'luxartgallery@gmail.com', '$2y$10$7xugXUSqxj8eTwLeXVIQL.VlLJBOUb8WXuPcXIWh6sGxZM94CKLpG', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_cost`
--

CREATE TABLE `delivery_cost` (
  `location_id` int(20) NOT NULL,
  `locations` enum('East Legon','Airport Residential','','') NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `product_id`, `image_path`) VALUES
(1, 16, '../images/Products/shirt1.png'),
(8, 9, '../images/Products/notebook2.png'),
(10, 11, '../images/Products/mug3.jpg'),
(12, 13, '../images/Products/jar3.png'),
(14, 15, '../images/Products/jar2.png'),
(16, 17, '../images/Products/Mug2.png'),
(17, 18, '../images/Products/Jordans1.jpg'),
(18, 19, '../images/Products/NikeZoom.jpg'),
(21, 22, '../images/Products/Sneakers1.jpg'),
(23, 21, '../images/Products/yellow.jpg'),
(24, 20, '../images/Products/shoes.jpg'),
(25, 23, '../images/Products/book3.png'),
(26, 24, '../images/Products/writeideas.jpg'),
(27, 25, '../images/Products/book5.jpg'),
(28, 26, '../images/Products/iphoneairpods.jpg'),
(29, 27, '../images/Products/headphones.jpg'),
(30, 28, '../images/Products/macbook.jpg'),
(31, 29, '../images/Products/macbook5.jpg'),
(32, 30, '../images/Products/giraffe2.jpeg'),
(39, 36, '../images/Products/homepage.jpg'),
(41, 37, '../images/Products/boat.jpeg'),
(42, 38, '../images/Products/zebra2.jpeg'),
(43, 39, '../images/Products/woman.jpeg'),
(44, 40, '../images/Products/mane2.jpeg'),
(45, 41, '../images/Products/bluewoman.jpeg'),
(46, 42, '../images/Products/cryingelephant.jpeg'),
(47, 43, '../images/Products/elephant.jpeg'),
(48, 44, '../images/Products/elephant2.jpeg'),
(49, 45, '../images/Products/zebra3.jpeg'),
(50, 46, '../images/Products/nomad.jpeg'),
(51, 47, '../images/Products/giraffe2.jpeg'),
(52, 48, '../images/Products/elephantmain.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` int(11) NOT NULL DEFAULT 2,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `product_id`, `qty`, `size`, `details`) VALUES
(1, 26, 2, 0, ''),
(1, 19, 1, 0, ''),
(2, 15, 1, 0, ''),
(2, 26, 2, 0, ''),
(3, 22, 1, 0, ''),
(3, 20, 1, 0, ''),
(3, 21, 2, 0, ''),
(4, 19, 1, 0, ''),
(4, 11, 1, 0, ''),
(5, 19, 1, 0, ''),
(5, 20, 1, 0, ''),
(6, 19, 11, 0, ''),
(6, 15, 4, 0, ''),
(7, 20, 7, 0, ''),
(8, 19, 2, 0, ''),
(9, 20, 2, 0, ''),
(9, 21, 1, 0, ''),
(11, 20, 2, 0, 'bkjslkd'),
(12, 26, 3, 0, 'hjsbdkljadbskjd,f'),
(13, 11, 1, 0, 'yellow'),
(14, 46, 1, 0, ''),
(14, 42, 1, 0, ''),
(14, 37, 2, 0, ''),
(15, 38, 1, 0, ''),
(15, 41, 1, 0, ''),
(16, 38, 1, 0, ''),
(17, 38, 1, 3, ''),
(18, 38, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `amt` decimal(10,0) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `invoice_no`, `amt`, `order_date`, `order_status`) VALUES
(1, 3, 876, '0', '2021-11-20', 'pending'),
(2, 3, 258, '0', '2021-11-20', 'pending'),
(3, 3, 532, '0', '2021-11-20', 'pending'),
(4, 3, 890, '0', '2021-11-21', 'pending'),
(5, 0, 493, '0', '2021-11-21', 'pending'),
(6, 0, 240, '0', '2021-11-21', 'pending'),
(7, 0, 144, '0', '2021-11-21', 'pending'),
(8, 0, 264, '0', '2021-11-21', 'pending'),
(9, 1000, 836, '0', '2021-11-21', 'pending'),
(10, 1000, 700, '0', '2021-11-21', 'pending'),
(11, 1000, 627, '0', '2021-11-21', 'pending'),
(12, 1000, 482, '0', '2021-11-21', 'pending'),
(13, 1000, 639, '0', '2021-11-25', 'pending'),
(14, 1003, 604, '0', '0000-00-00', 'pending'),
(15, 1003, 633, '3300', '2021-12-05', 'pending'),
(16, 1003, 207, '4000', '2021-12-05', 'pending'),
(17, 1003, 126, '10000', '2021-12-05', 'pending'),
(18, 1003, 456, '750', '2021-12-06', 'Half Paid');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` int(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES
(1, 9470, 3, 1, 'GHC', '2021-11-20'),
(2, 9900, 3, 2, 'GHC', '2021-11-20'),
(3, 1320, 3, 3, 'GHC', '2021-11-20'),
(4, 330, 3, 4, 'GHC', '2021-11-21'),
(5, 570, 0, 5, 'GHC', '2021-11-21'),
(6, 5770, 0, 6, 'GHC', '2021-11-21'),
(7, 2100, 0, 7, 'GHC', '2021-11-21'),
(8, 540, 0, 8, 'GHC', '2021-11-21'),
(9, 1050, 1000, 9, 'GHC', '2021-11-21'),
(10, 600, 1000, 11, 'GHC', '2021-11-21'),
(11, 13800, 1000, 12, 'GHC', '2021-11-21'),
(12, 1, 1000, 13, 'GHC', '2021-11-25'),
(13, 750, 1003, 18, 'GHC', '2021-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_price` double NOT NULL DEFAULT 3000,
  `product_desc` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_cat`, `product_price`, `product_desc`) VALUES
(37, 'Sailing Boat', 1, 3000, ' Sailing, Blue colours, water'),
(38, 'Running Zebras', 12, 3000, ''),
(39, 'Colourful Afro Woman', 13, 3000, ''),
(40, 'Colourful Lion Mane', 12, 3000, ''),
(41, 'Bold Blue Woman', 13, 300, ''),
(42, 'Crying Elephant', 12, 3000, ''),
(43, 'Elephants of the River', 12, 3000, 'Elephants crossing river'),
(44, 'Elephants of the Savanna', 12, 3000, ''),
(45, 'Zebras of the Savanna', 12, 3000, ''),
(46, 'Nomad ', 1, 3000, ''),
(47, 'Girrafes', 12, 3000, 'Giraffes in Savanna'),
(48, 'Elephants crossing River', 12, 3000, '');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `StockID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Manager` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminLogID`),
  ADD UNIQUE KEY `AdminLogID` (`AdminLogID`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
