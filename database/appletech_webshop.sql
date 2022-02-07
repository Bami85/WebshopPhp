-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2022 at 09:35 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appletech webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(10) NOT NULL,
  `email` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `description`) VALUES
(1, 'applewatches', ''),
(2, 'iphones', ''),
(3, 'macbooks', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(10) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `imgSrc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageID`, `imageName`, `imgSrc`) VALUES
(1, 'appleWatch-2019-biege', 'appleWatch-2019.jpg'),
(2, 'appleWatch-2020-gold', 'appleWatch-2020.jpg'),
(3, 'appleWatch-2021-black', 'appleWatch-2021.jpg'),
(4, 'Iphone11.128GB.pic1', 'Iphone11.128GB.pic1.jpg'),
(5, 'Iphone11.128GB.pic2', 'Iphone11.128GB.pic2.jpg'),
(6, 'Iphone12Mini64GB.pic1', 'Iphone12Mini64GB.pic1.jpeg'),
(7, 'Iphone12Mini64GB.pic2', 'Iphone12Mini64GB.pic2.jpg'),
(8, 'Iphone13ProMaxPic1.256GB', 'Iphone13ProMaxPic1.256GB.jpg'),
(9, 'Iphone13ProMaxPic2.256GB', 'Iphone13ProMaxPic2.256GB.jpg'),
(10, 'macbook-pro2019pic1', 'macbook-pro2019pic1.jpg'),
(11, 'macbook-pro2019pic2', 'macbook-pro2019pic2.jpg'),
(12, 'macbook-air-m1-2020.pic1', 'macbook-air-m1-2020.pic1.jpg'),
(13, 'macbook-air-m1-2020.pic2', 'macbook-air-m1-2020.pic2.jpg'),
(14, 'macbook-pro2021Pic1', 'macbook-pro2021Pic1.jpg'),
(15, 'macbook-pro2021Pic2', 'macbook-pro2021Pic2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletterID` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(10) NOT NULL,
  `ShippingName` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `unitPrice` int(11) NOT NULL,
  `unitsInStock` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `unitPrice`, `unitsInStock`, `description`) VALUES
(1, 'appleWatch2019', 2500, 200, 'apple klocka från 2019 som har färgen biege och material i gummi'),
(2, 'appleWatch2020', 3000, 200, 'apple watch från 2020 som har färgen guld och material i stål'),
(3, 'AppleWatch2021', 3500, 200, 'apple watch från 2021 i färgen svart och material i gummi'),
(4, 'macbook-pro2019', 12000, 200, 'laptop macbook pro från 2019 i färgen silver'),
(5, 'macbook-air-m1-2020', 13500, 200, 'laptop macbook air-m1 från 2020 i färgen bronze'),
(6, 'macbook-pro2021', 15000, 200, 'laptop macbook pro från 2021 i färgen silver'),
(7, 'Iphone11.128GB', 5000, 200, 'mobiltelefon Iphone11 med 128gb i färgen röd'),
(8, 'Iphone12Mini64GB', 6500, 200, 'mobiltelefon Iphone12 Mini 64gb i färgen lila'),
(9, 'Iphone13ProMax256GB', 11000, 200, 'mobiltelefon Iphone13 ProMax 256GB i färgen svart');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shippingID` int(10) NOT NULL,
  `shippingName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shippingID`, `shippingName`) VALUES
(1, 'Bring'),
(2, 'DHL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletterID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shippingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
