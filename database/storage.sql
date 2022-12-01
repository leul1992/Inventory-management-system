SET time_zone = "+03:00";
CREATE DATABASE IF NOT EXISTS storage;
USE storage;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
    `product_id` INTEGER PRIMARY KEY AUTO_INCREMENT,
    `product_name` VARCHAR(255) NOT NULL,
    `product_image` text NOT NULL,
    `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
    `quantity` varchar(255) NOT NULL,
    `rate` varchar(255) NOT NULL,
    `active` int(11) NOT NULL DEFAULT '0',
    `status` int(11) NOT NULL DEFAULT '0'
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `fullname` varchar(64) NOT NULL,
  `user_name` varchar(64) NOT NULL PRIMARY KEY,
  `password` varchar(64) NOT NULL,
  `user_role` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `signup_date` date NOT NULL,
  `photo` blob NOT NULL
);

-- -------------------------------------------------------
--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT '0',
  `brand_status` int(11) NOT NULL DEFAULT '0'
);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS`orders` (
  `order_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_place` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `order_item_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0'
);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categories_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT '0',
  `categories_status` int(11) NOT NULL DEFAULT '0'
);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `product_name` varchar(64) NOT NULL,
  `quantity` varchar(64) NOT NULL,
  `bprice` varchar(64) NOT NULL,
  `sprice` varchar(64) NOT NULL,
  `date` varchar(64) NOT NULL,
  `categoryName` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
  `catalog_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;