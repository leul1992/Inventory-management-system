--create database
/* CREATE DATABASE IF NOT EXISTS storage;
USE storage; */
--create table product
CREATE TABLE `product` (
    `product_id` INTEGER PRIMARY KEY AUTO_INCREMENT;
    `product_name` VARCHAR(255) NOT NULL;
    `product_image` text NOT NULL;
    `quantity` varchar(255) NOT NULL;
    `rate` varchar(255) NOT NULL;
    `active` int(11) NOT NULL;
    `status` int(11) NOT NULL;
)`
