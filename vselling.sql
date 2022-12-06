-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyerregistration`
--

CREATE TABLE `buyerregistration` (
  `buyer_id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `buyer_phone` varchar(255) NOT NULL,
  `buyer_addr` varchar(255) NOT NULL,
  `buyer_pan` varchar(255) NOT NULL,
  `buyer_mail` varchar(255) NOT NULL,
  `buyer_username` varchar(255) NOT NULL,
  `buyer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerregistration`
--

INSERT INTO `buyerregistration` (`buyer_id`, `buyer_name`, `buyer_phone`, `buyer_addr`, `buyer_pan`, `buyer_mail`, `buyer_username`, `buyer_password`) VALUES
(1, 'Aniket Aggarwal', '9667080750', 'L115', '20BKT0086', 'aggarwalaniket03@gmail.com', 'Aniket', 'u8zb5e0duwg='),
(2, 'Ved verma', '9876543210', 'L234', '20BCE0976', 'ved@gmail.com', 'Ved', 'jMfW5OE='),
(3, 'Aniket Aggarwal', '01127010000', '1/7432 East Gorakh park Shahdara, Delhi', '20BKT0086', 'aggarwalaniket03@gmail.com', 'Aniket', 'm8DR6u0Ptgk='),
(4, 'Aniket Aggarwal', '9717590306', '1/7432 East Gorakh park Shahdara, Delhi', '123456789012', 'aggarwalaniket03@gmail.com', 'mudiiiiit', 'l9fW5/w=');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pic` blob NOT NULL,
  `sname` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `prod_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `description`, `category`, `price`, `pic`, `sname`, `num`, `mail`, `room`, `prod_id`) VALUES
('Mattress', '6x3x4 red color sleepwell mattress in good condition. Brought 3 years back , no dust , no deformations , Good to use', '3 years old', '  2000', 0x6265642e6a666966, 'Saksham Aggarwal', '9764312580', 'saksham@gmail.com', 'F-244', 13),
('Blanket', 'AC blanket pink color , works in both seasons, clean and well maintained. Provides cozy comfort in ac rooms and cold weather.', '5 months old', '  600', 0x626c616e6b65742e6a666966, 'Harsh Kashyap', '9632587413', 'harshk@gmail.com', 'L-718', 14),
('Basketball', 'Wilson Company Basketball, best grade rubber quality, no cuts, bounces perfectly, in good condition.', '6 months old', '  550', 0x6262616c6c2e6a666966, 'Aryan Kumar', '9513578426', 'kumararyan@gmail.com', 'G-110', 15),
('Bucket', 'Best grade quality plastic bucket 20L, in perfect condition.', '10 months', '  100', 0x6275636b65742e6a7067, 'Anupam joshi', '9856321470', 'janup@gmail.com', 'H-110', 16),
('Cycle', 'Hero gear cycle has upto 7 combination of gear changing and cycle is in mint condition. No part is rusted and moves smoothly as day one. Perfect for college commute.', '2 years old', '  6000', 0x6379636c652e6a7067, 'Danish M', '9632587415', 'danish@gmail.com', 'Q-223', 17),
('Extension Board', 'Good quality extension board with 4 plugs and individual switches with 5 m long wire. In perfect working condition, maintains the voltage to keep devices safe.', '5 months old', '  300', 0x65626f6172642e6a7067, 'Naman Sinha', '9514563287', 'sinaman@gmail.com', 'L-1002', 18),
('Electric iron', 'Phillips Steam iron , perfectly presses the clothes without leaving a crease, has low voltage so that it can run inside hostels, has 3 heat settings', '8 months old', '  350', 0x6569726f6e2e6a7067, 'Sritam Jain', '9635241780', 'sritam@gmail.com', 'C-129', 19),
('Pillow', 'Cotton pillow , fluffy, comfortable for sleep ,has protection cover.', '3 years old', '  100', 0x70696c6c6f772e6a7067, 'Chetan verma', '9516284735', 'chetan@gmail.com', 'A-555', 20),
('Laptop', 'Hp laptop 256 gb SSD, i7 10th generation intel processor, 12GB RAM , Iris core graphics,  Backlit keyboard , 3 USB port , lightweight (1.1kg) , 8 hour battery life. Perfect for coding in college.', '2 years old', '  40000', 0x6c6170746f702e6a7067, 'Aniket Aggarwal', '9667080750', 'aggarwalaniket@gmail.com', 'L-115', 21),
('Electric kettle', '500W kettle , perfect for boiling water and making maggi in hostel, low voltage so it can work in the hostels. Works perfectly.', '3 years old', '  200', 0x656b6574746c652e6a7067, 'Ved Singh', '9764315824', 'ved@gmail.com', 'K-245', 22),
('Headphones', 'JBL 12w headphones wired, high bass , active noise cancellation, comfortable on ear headphones with tough build quality. Sound quality is very good and clean.', '7 months old', '  1200', 0x6a626c2e6a7067, 'Harsh Mittal', '9462153875', 'mittalharsh@gmail.com', 'J-909', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerregistration`
--
ALTER TABLE `buyerregistration`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyerregistration`
--
ALTER TABLE `buyerregistration`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
