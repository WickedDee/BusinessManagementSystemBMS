-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 12:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsu_pcbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(10) NOT NULL,
  `personnel_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `personnel_id`, `username`, `password`) VALUES
(1, 200001, 'lois_vsu', 'admin'),
(2, 200005, 'nara_vsu', 'sales'),
(3, 200004, 'jitro_vsu', 'sales'),
(4, 200006, 'enrique_vsu', 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `cname`, `contact_number`, `address`) VALUES
(399990, 'Alda Pancito', '09878578000', 'Brgy. Hibunawan Baybay City, Leyte'),
(399991, 'Aurelia Lopez', '09870000091', 'Brgy. Gabas Baybay City, Leyte'),
(399992, 'Eriberto Calibud', '09763459281', 'Visca, VSU Market Brgy. Pangasugan Baybay City, Leyte\r\n'),
(399993, 'Lourdes Serato', '09289654317', 'Visca, VSU Market Brgy. Pangasugan Baybay City, Leyte\r\n'),
(399994, 'Jeanette Godoy', '09719654283', 'Visca, VSU Market Brgy. Pangasugan Baybay City, Leyte\r\n'),
(399995, 'Danilo Gloria', '09532814679', 'Visca, VSU Market Brgy. Pangasugan Baybay City, Leyte\r\n'),
(399996, 'Madona Armas', '09476352981', 'Visca, VSU Market Brgy. Pangasugan Baybay City, Leyte\r\n'),
(399997, 'Gerardo Latras', '09547391268', 'Visca, VSU Market Brgy. Pangasugan Baybay City, Leyte\r\n'),
(399998, 'POPING\'S STORE\r\n', '09368579412', 'Brgy. Pomponan Baybay City, Leyte\r\n'),
(399999, 'Alma Kirong', '09638572914', 'Visca, VSU Market Brgy. Pangasugan Baybay City, Leyte\r\n'),
(400001, 'Prince Marketing', '09893597239', 'Baybay City, Leyte'),
(400002, 'Leonel Toring', '08938987963', 'R. Magsaysay Ave. Brgy. Zone 11 Poblacion Baybay City, Leyte'),
(400003, 'J & C LUCKY 99 STORE', '09097856781', 'GH Del Pilar St. Brgy. Zone 6 Poblacion Baybay City, Leyte'),
(400004, 'Jonathan B. Escototo', '09748294820', 'Brgy. Mailhi Baybay City, Leyte'),
(400005, 'Elmer Pilit', '09182736452', '2/F Metrostar Building 1007 Metropolitan Avenue 1205, Tacloban City'),
(400006, 'Seigfried Santiago', '09119283718', 'E. Jacinto St. Baybay City, Leyte');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `personnel_id` int(10) NOT NULL,
  `purpose` varchar(1000) NOT NULL,
  `log_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `personnel_id`, `purpose`, `log_time`) VALUES
(4860, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4861, 200001, 'User Logged In', '2022-10-24 02:13:44'),
(4862, 200001, 'Personnel `200006` Added', '2022-10-24 02:21:03'),
(4863, 200001, 'Supplier `55500006` Updated', '2022-10-24 02:58:30'),
(4864, 200001, 'Supplier `55500007` Updated', '2022-10-24 02:59:40'),
(4865, 200001, 'Supplier `55500008` Updated', '2022-10-24 03:03:32'),
(4867, 200001, 'Supplier `55500006` Updated', '2022-10-24 03:06:32'),
(4868, 200001, 'Supplier `55500007` Added', '2022-10-24 03:07:21'),
(4869, 200001, 'Personnel `81817659` Updated', '2022-10-24 03:14:28'),
(4870, 200001, 'Personnel `12121212` Updated', '2022-10-24 03:34:29'),
(4871, 200001, 'Product `81769530` Added', '2022-10-24 03:50:53'),
(4872, 200005, 'Account `3` Updated', '2022-10-24 04:17:05'),
(4873, 200005, 'Account `3` Updated', '2022-10-24 04:17:14'),
(4874, 200006, 'Account `4` Added', '2022-10-24 04:18:41'),
(4875, 200001, 'Personnel `0` Updated', '2022-10-24 04:26:19'),
(4876, 200001, 'Supplier `200006` Updated', '2022-10-24 04:37:46'),
(4877, 200001, 'Supplier `200006` Updated', '2022-10-24 04:38:38'),
(4878, 200001, 'Personnel `200006` Updated', '2022-10-24 04:39:27'),
(4879, 200001, 'Personnel `200006` Updated', '2022-10-24 04:40:53'),
(4880, 200001, 'Personnel `200006` Updated', '2022-10-24 04:41:37'),
(4881, 200001, 'Personnel `200006` Updated', '2022-10-24 04:43:04'),
(4882, 200001, 'Personnel `200006` Updated', '2022-10-24 04:43:21'),
(4883, 200001, 'Personnel `200006` Updated', '2022-10-24 04:43:49'),
(4884, 200001, 'Personnel `200006` Updated', '2022-10-24 04:48:55'),
(4885, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4886, 200001, 'User Logged In', '2022-10-24 09:06:55'),
(4887, 200001, 'Personnel `200006` Updated', '2022-10-24 09:07:20'),
(4888, 200001, 'Personnel `200006` Updated', '2022-10-24 09:07:33'),
(4889, 200001, 'Personnel `200007` Added', '2022-10-24 09:10:25'),
(4890, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4891, 200001, 'User Logged In', '2022-10-24 09:17:28'),
(4892, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4893, 200001, 'User Logged In', '2022-10-24 09:18:14'),
(4894, 200001, 'User Logged In', '2022-10-25 09:01:12'),
(4895, 200001, 'User Logged In', '2022-10-25 09:07:18'),
(4896, 200004, 'User Logged In', '2022-10-25 09:08:18'),
(4897, 200004, 'User Logged Out', '0000-00-00 00:00:00'),
(4898, 200004, 'User Logged In', '2022-10-25 09:10:17'),
(4899, 200004, 'User Logged Out', '0000-00-00 00:00:00'),
(4900, 200001, 'User Logged In', '2022-10-25 09:10:32'),
(4901, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4902, 200004, 'User Logged In', '2022-10-25 09:12:22'),
(4903, 200004, 'User Logged Out', '0000-00-00 00:00:00'),
(4904, 200001, 'User Logged In', '2022-10-25 09:28:22'),
(4905, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4906, 200001, 'User Logged In', '2022-10-25 09:38:38'),
(4907, 200001, 'User Logged In', '2022-10-25 09:38:46'),
(4908, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4909, 200001, 'User Logged In', '2022-10-25 09:42:34'),
(4910, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4911, 200001, 'User Logged In', '2022-10-25 09:46:50'),
(4912, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4913, 200001, 'User Logged In', '2022-10-25 11:39:02'),
(4914, 200001, 'Customer `400005` Added', '2022-10-26 03:28:11'),
(4915, 200001, 'Customer `400006` Added', '2022-10-26 03:29:22'),
(4916, 200001, 'Customer `400008` Added', '2022-10-26 03:30:50'),
(4917, 200001, 'Customer `400009` Added', '2022-10-26 03:47:10'),
(4918, 200001, 'Customer `97867564` Added', '2022-10-26 03:48:15'),
(4919, 200001, 'Customer `432532` Added', '2022-10-26 03:53:31'),
(4920, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4921, 200001, 'User Logged In', '2022-10-26 03:54:12'),
(4922, 200001, 'Personnel `200008` Added', '2022-10-26 03:56:11'),
(4923, 200001, 'Personnel `0` Updated', '2022-10-26 07:21:01'),
(4924, 200001, 'Personnel `0` Updated', '2022-10-26 07:21:55'),
(4925, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4926, 200001, 'User Logged In', '2022-10-26 11:16:14'),
(4927, 200001, 'Personnel `` Updated', '2022-10-27 02:32:59'),
(4928, 200001, 'Purchase Order `77913871` Updated', '2022-10-27 02:33:27'),
(4929, 200001, 'Purchase Order `77285234` Updated', '2022-10-27 02:53:42'),
(4930, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4931, 200001, 'User Logged In', '2022-10-27 03:17:37'),
(4932, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4933, 200001, 'User Logged In', '2022-10-27 03:18:22'),
(4934, 200001, 'User Logged In', '2022-10-27 03:20:48'),
(4935, 200001, 'Product `01010101` Added', '2022-10-27 03:25:30'),
(4936, 200001, 'Personnel `1010101` Updated', '2022-10-27 03:26:09'),
(4937, 200001, 'Personnel `01010101` Added', '2022-10-27 03:31:49'),
(4938, 200001, 'Personnel `1214` Added', '2022-10-27 03:35:26'),
(4939, 200001, 'Personnel `6453423545` Added', '2022-10-27 03:39:22'),
(4940, 200001, 'Personnel `200006` Updated', '2022-10-27 03:40:54'),
(4941, 200001, 'Personnel `200006` Updated', '2022-10-27 03:42:01'),
(4942, 200001, 'Supplier `55500007` Updated', '2022-10-27 03:42:38'),
(4943, 200001, 'Supplier `12121` Added', '2022-10-27 03:42:55'),
(4944, 200001, 'Personnel `0` Updated', '2022-10-27 03:43:27'),
(4945, 200001, 'Customer `121212` Added', '2022-10-27 03:43:57'),
(4946, 200001, 'PUrchase Order `24134` Added', '2022-10-27 03:45:10'),
(4947, 200001, 'User Logged In', '2022-10-27 03:50:06'),
(4948, 200001, 'User Logged In', '2022-10-27 03:52:19'),
(4949, 200001, 'Purchase Order `77969813` Updated', '2022-10-27 03:52:31'),
(4950, 200001, 'PUrchase Order `77969814` Added', '2022-10-27 03:53:27'),
(4951, 200001, 'User Logged In', '2022-10-27 03:54:12'),
(4952, 200001, 'PUrchase Order `77969815` Added', '2022-10-27 03:57:30'),
(4953, 200001, 'Purchase Order `77969815` Updated', '2022-10-27 03:57:48'),
(4954, 200001, 'Personnel `200006` Updated', '2022-10-27 03:58:43'),
(4955, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4956, 200006, 'User Logged In', '2022-10-27 03:58:55'),
(4957, 200006, 'Account `4` Updated', '2022-10-27 04:00:38'),
(4958, 200005, 'Account `2` Updated', '2022-10-27 04:01:11'),
(4959, 200004, 'Account `3` Updated', '2022-10-27 04:01:18'),
(4960, 200001, 'Account `1` Updated', '2022-10-27 04:01:26'),
(4961, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4962, 200005, 'User Logged In', '2022-10-27 04:11:14'),
(4963, 200005, 'User Logged In', '2022-10-27 04:12:06'),
(4964, 200005, 'User Logged Out', '0000-00-00 00:00:00'),
(4965, 200001, 'User Logged In', '2022-10-27 04:13:39'),
(4966, 200001, 'User Logged Out', '0000-00-00 00:00:00'),
(4967, 200001, 'User Logged In', '2022-10-27 04:32:26'),
(4968, 200006, 'User Logged In', '2022-10-27 05:25:06'),
(4969, 200001, 'User Logged In', '2022-10-27 05:43:29'),
(4970, 200006, 'User Logged Out', '0000-00-00 00:00:00'),
(4971, 200001, 'User Logged In', '2022-10-27 06:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `personnel_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `position` enum('Admin','Management','Sales') NOT NULL,
  `hired_date` date NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`personnel_id`, `fname`, `mname`, `lname`, `sex`, `email`, `contact_number`, `position`, `hired_date`, `address`) VALUES
(200001, 'Lois', 'K.', 'Collins', 'Female', 'collins@mail.com', '09743852745', 'Admin', '2020-10-30', '30 De Deciembre St. Brgy. Zone 18 Poblacion Baybay City, Leyte'),
(200004, 'Jitro', 'M.', 'Manzanas', 'Male', 'labayan@mail.com', '09686829370', 'Sales', '2022-10-12', 'R. Magsaysay Ave. Brgy. Zone 11 Poblacion Baybay City, Leyte'),
(200005, 'Nara', 'D.', 'Hudimay', 'Female', 'hudimay@mail.com', '09785647891', 'Sales', '2022-04-18', 'R. Magsaysay Ave. Brgy. Zone 11 Poblacion Baybay City, Leyte'),
(200006, 'Enrique', 'M', 'Torres', 'Male', 'enrique@mail.com', '09098189389', 'Admin', '2021-11-11', 'A. Bonifacio St. Brgy. Zone 7 Poblacion Baybay City, Leyte');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `barcode` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` enum('Beverages','Bread/Bakery','Canned/Jarred Goods','Dairy','Dry/Baking Goods','Frozen Foods','Produce','Cleaners','Paper Goods','Personal Care','Snacks','Other') NOT NULL,
  `expiration` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase_unit_price` double NOT NULL,
  `selling_unit_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `barcode`, `product_name`, `category`, `expiration`, `quantity`, `purchase_unit_price`, `selling_unit_price`) VALUES
(1, 812099745, 'Bahalina Coconut Wine 1 Liter Traditional Filipino Wine (Tuba)', 'Beverages', '2027-08-31', 100, 125.25, 140),
(2, 816095485, 'Tilde Bakery & Kitchen Oatmeal Sugar Free Cookies 250g', 'Dry/Baking Goods', '2023-06-30', 10, 89.99, 98.75),
(3, 88440677, 'Founding Farmers Okra Crisps 70g', 'Snacks', '2024-09-28', 150, 52.75, 60.25),
(4, 89097927, 'Baybay Dairy Cooperative Pure Buffalo\'s Milk', 'Dairy', '2022-06-06', 10, 15.75, 19.75),
(9, 89034712, 'String Basahan assorted 45*70cm ', 'Other', '2028-12-06', 0, 3.75, 4.5),
(12, 81408345, 'Chili Garlic Mix 50 grams', 'Canned/Jarred Goods', '2032-07-17', 38, 250.5, 258.75),
(13, 81385119, 'Fruits Seeds Collection (Watermelon, Strawberry, Blueberry, Blackberry, Red, Papaya, Lemon Calamansi', 'Beverages', '2034-04-27', 29, 366, 372.75),
(17, 86327110, 'Chicken Isaw Kelvins', 'Snacks', '2022-12-29', 100, 83.75, 88.75),
(18, 81024507, 'Sukang Atchara from Pampanga (1 Liter) Philippine Souvenir Vinegar Pinasarap', 'Canned/Jarred Goods', '2030-09-28', 100, 91.25, 100),
(21, 12121212, 'Charitos  Delights Mazapan de Pili, 12 pcs, 150g', 'Canned/Jarred Goods', '2022-10-06', 128, 89.5, 100),
(22, 2147483647, 'sdfxghvjj ', 'Beverages', '2022-10-02', 0, 122, 130),
(23, 81769530, 'Malunggay Flakes Pure ', 'Dry/Baking Goods', '2023-12-24', 100, 70, 95.88),
(24, 1010101, '0101010101 ', 'Beverages', '2022-10-29', 10101, 35.11, 98.1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_del`
--

CREATE TABLE `purchase_del` (
  `pur_del_id` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `status` enum('Received','To Receive','Cancelled') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_del`
--

INSERT INTO `purchase_del` (`pur_del_id`, `order_code`, `status`) VALUES
(1, 77101001, 'Received'),
(2, 77285234, 'Received'),
(3, 77862715, 'To Receive'),
(5, 77913871, 'To Receive');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `pur_ord_id` int(11) NOT NULL,
  `supplier_id` int(10) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `del_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`pur_ord_id`, `supplier_id`, `order_date`, `total`, `del_date`) VALUES
(77100001, 55500003, '2022-09-04', 10000, '2022-10-31'),
(77101001, 55500005, '2022-10-12', 652.5, '2022-10-31'),
(77285234, 55500001, '2022-10-16', 36957.6, '2022-11-01'),
(77862715, 55500006, '2022-10-09', 7864.8, '2022-10-31'),
(77913871, 55500003, '2022-10-09', 1087.5, '2022-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `pur_product_id` int(11) NOT NULL,
  `pur_ord_id` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_product`
--

INSERT INTO `purchase_product` (`pur_product_id`, `pur_ord_id`, `barcode`, `price`, `qty`) VALUES
(65498073, 77101001, 81131173, 21.75, 30),
(65498074, 77285234, 87577536, 51.33, 20),
(65498075, 77285234, 87577535, 13.05, 25),
(65498076, 77285234, 87577538, 100.05, 25),
(65498077, 77285234, 87577541, 116.58, 25),
(65498078, 77285234, 87577544, 195.75, 80),
(65498079, 77285234, 87577547, 152.25, 50),
(65498080, 77285234, 87577550, 138.33, 50),
(65498081, 77862715, 83133977, 93.96, 30),
(65498082, 77862715, 83133980, 88.74, 20),
(65498083, 77862715, 83133983, 78.3, 20),
(65498084, 77862715, 83133986, 85.26, 20),
(65498086, 77913871, 80169325, 21.75, 50),
(65498087, 77913871, 80169328, 5.22, 500),
(65498088, 77913871, 80169331, 313.2, 20),
(65498089, 77913871, 80285916, 25.23, 50),
(65498090, 77913871, 80285913, 34.8, 50);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `reciept_no` varchar(20) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`reciept_no`, `customer_id`, `personnel_id`, `total`, `date`) VALUES
('TRX-081903', 399990, 200005, 4722.5, '2022-07-27 21:22:41'),
('TRX-081904', 399999, 200005, 3810, '2022-08-13 21:23:41'),
('TRX-081905', 399995, 200004, 9001.25, '2022-09-06 21:58:47'),
('TRX-081906', 400005, 200004, 2403.27, '2022-10-19 21:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `sales_product`
--

CREATE TABLE `sales_product` (
  `sales_product_id` int(11) NOT NULL,
  `reciept_no` varchar(20) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_product`
--

INSERT INTO `sales_product` (`sales_product_id`, `reciept_no`, `product_id`, `price`, `qty`) VALUES
(1, 'TRX-081903', 1, 140, 5),
(2, 'TRX-081903', 18, 100, 3),
(3, 'TRX-081904', 1, 140, 10),
(4, 'TRX-081906', 2, 372.75, 3),
(5, 'TRX-081904', 3, 60.25, 40),
(6, 'TRX-081905', 12, 258.75, 20),
(7, 'TRX-081903', 13, 372.25, 10),
(8, 'TRX-081905', 13, 372.75, 10),
(9, 'TRX-081905', 4, 19.75, 5),
(10, 'TRX-081906', 18, 100, 2),
(11, 'TRX-081906', 17, 88.75, 10),
(12, 'TRX-081906', 4, 19.75, 10),
(13, 'TRX-081906', 2, 98.75, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(10) NOT NULL,
  `company` varchar(200) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `company`, `contact_number`, `address`) VALUES
(55500001, 'Beeggymen Trade Center', '09917538604', 'Brgy. Caridad Baybay City, Leyte'),
(55500002, 'Charitos Delights \r\n', '09750136482', 'Tres Martires St. Brgy. Zone 14 Poblacion Baybay City, Leyte\r\n'),
(55500003, 'Alexandra Amarille\r\n', '09451862907', 'Brgy. Villa Solidaridad Baybay City, Leyte\r\n'),
(55500004, 'Lucy Lonzano\r\n', '09872954306', 'Brgy. Bunga Baybay City Leyte\r\n'),
(55500005, 'Kily Wholesale Supplier\r\n', '09246819705', 'Brgy. Kansungka Baybay City, Leyte\r\n'),
(55500006, 'Maypatag Agrarian Reform Community Farmer Association', '09796341222', 'Brgy. Maypatag Baybay City, Leyte'),
(55500007, 'Berminde Snack Haus', '09165460218', 'Visca, VSU Market Brgy. Pangasugan Baybay City, Leyte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `personnel_id` (`personnel_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `personnel_id` (`personnel_id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`personnel_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase_del`
--
ALTER TABLE `purchase_del`
  ADD PRIMARY KEY (`pur_del_id`),
  ADD KEY `order_code` (`order_code`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`pur_ord_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD PRIMARY KEY (`pur_product_id`),
  ADD KEY `pur_ord_id` (`pur_ord_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`reciept_no`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `personnel_id` (`personnel_id`);

--
-- Indexes for table `sales_product`
--
ALTER TABLE `sales_product`
  ADD PRIMARY KEY (`sales_product_id`),
  ADD KEY `reciept_no` (`reciept_no`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4972;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `personnel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `purchase_del`
--
ALTER TABLE `purchase_del`
  MODIFY `pur_del_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchase_product`
--
ALTER TABLE `purchase_product`
  MODIFY `pur_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65498097;

--
-- AUTO_INCREMENT for table `sales_product`
--
ALTER TABLE `sales_product`
  MODIFY `sales_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55500008;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`personnel_id`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`personnel_id`);

--
-- Constraints for table `purchase_del`
--
ALTER TABLE `purchase_del`
  ADD CONSTRAINT `purchase_del_ibfk_1` FOREIGN KEY (`order_code`) REFERENCES `purchase_order` (`pur_ord_id`);

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);

--
-- Constraints for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD CONSTRAINT `purchase_product_ibfk_1` FOREIGN KEY (`pur_ord_id`) REFERENCES `purchase_order` (`pur_ord_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`personnel_id`) REFERENCES `personnel` (`personnel_id`);

--
-- Constraints for table `sales_product`
--
ALTER TABLE `sales_product`
  ADD CONSTRAINT `sales_product_ibfk_1` FOREIGN KEY (`reciept_no`) REFERENCES `sales` (`reciept_no`),
  ADD CONSTRAINT `sales_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
