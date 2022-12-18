-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:18 PM
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
-- Database: `mylaundry.lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES
('Tishan Rashmika', 'tishanrashmika00@gmail.com', 'Satisfied!!'),
('Vidumini Rathnayaka', 'viduminirathnayaka@gmail.com', 'I could not get my order on time but the service is good\r\n'),
('Lakmal Dushshantha', 'lakmalsrc@gmail.com', 'The best laundery service I ever had..\r\n'),
('Suranga Jayaweera', 'jayaweera@gmail.com', 'Price is little bit high..\r\n'),
('kasun samaranayaka', 'kasun@gmail.com', 'great service.');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiryID` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `respond` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiryID`, `date`, `name`, `email`, `message`, `respond`) VALUES
(89, '2022-05-01', 'Sirimal', 'sirimal@gmail.com', 'How to buy a package ?', 1),
(90, '2022-05-02', 'Navidu', 'navidu@gmail.com', 'Do you deliver to galle ?', 0),
(91, '2022-05-03', 'Martin', 'martin@gmail.com', 'I want a refund for my order!', 0),
(92, '2022-05-04', 'Kanchana', 'malinda@gmail.com', 'Best service but can you hurry up my order', 0),
(93, '2022-05-05', 'Nimali', 'Nimali@gmail.com', 'Can\'t wait', 0),
(94, '2022-05-06', 'Nirmali', 'Nirmali@gmail.com', 'Sooo well', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_register`
--

CREATE TABLE `login_register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user',
  `address` varchar(255) DEFAULT NULL,
  `pickup` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_register`
--

INSERT INTO `login_register` (`id`, `username`, `email`, `password`, `type`, `address`, `pickup`, `fullname`) VALUES
(1, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', 'No:75, Maradana RD, Colombo 07.', '', 'Shalini Medonsa'),
(2, 'user', 'user@gmail.com', '6ad14ba9986e3615423dfca256d04e3f', 'user', 'malabe', '#Gotagogama Housing scheme, Galle Rd, Colombo 07.', 'fish'),
(9, 'dinal kumara', 'dial@gmail.com', 'd28532001ee8a430264876cfeb52d46b', 'user', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Number` int(4) NOT NULL,
  `Notification` varchar(80) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`Number`, `Notification`, `Date`, `Time`) VALUES
(1, 'Order confirmed', '2022-05-04', '04:40:00'),
(4, 'You have Successfully registered.', '2022-05-28', '09:40:00'),
(6, 'Order received successfully.', '2022-05-03', '06:12:00'),
(7, 'Order canceled!..', '2022-05-01', '03:55:00'),
(8, 'Order canceled!..', '2022-05-01', '03:55:00'),
(9, 'Order complete.', '2022-04-30', '18:57:00'),
(10, 'Order complete.', '2022-04-29', '19:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(4, 'Shirt|Wash', 'shirt-wash', 100, '../images/shirt.jpg'),
(11, 'Shirt|Press', 'shirt-press', 150, '../images/shirt.jpg'),
(12, 'Shirt|Dry', 'shirt-dry', 200, '../images/shirt.jpg'),
(13, 'T-Shirt|Wash', 'tshirt-wash', 100, '../images/tshirt.jpg'),
(14, 'T-Shirt|Press', 'tshirt-press', 150, '../images/tshirt.jpg'),
(15, 'T-Shirt|Dry', 'tshirt-dry', 200, '../images/tshirt.jpg'),
(18, 'Short|Wash', 'short-wash', 200, '../images/short.jpg'),
(19, 'Short|Press', 'short-press', 250, '../images/short.jpg'),
(20, 'Short|Dry', 'short-dry', 300, '../images/short.jpg'),
(21, 'Blouse|Wash', 'blouse-wash', 150, '../images/blouse.jpg'),
(28, 'Blouse|Press', 'blouse-press', 200, '../images/blouse.jpg'),
(29, 'Blouse|Dry', 'blouse-dry', 250, '../images/blouse.jpg'),
(30, 'Frock|Wash', 'frock-wash', 150, '../images/frock.jpg'),
(31, 'Frock|Press', 'frock-press', 200, '../images/frock.jpg'),
(32, 'Frock|Dry', 'frock-dry', 250, '../images/frock.jpg'),
(33, 'Skirt|Wash', 'skirt-wash', 200, '../images/skirt.jpg'),
(34, 'Skirt|Press', 'skirt-press', 250, '../images/skirt.jpg'),
(35, 'Skirt|Dry', 'skirt-dry', 250, '../images/skirt.jpg'),
(36, 'Trouser|Wash', 'trouser-wash', 250, '../images/trouser.jpg'),
(37, 'Trouser|Press', 'trouser-press', 300, '../images/trouser.jpg'),
(38, 'Trouser|Dry', 'trouser-dry', 350, '../images/trouser.jpg'),
(39, 'Underwear|Wash', 'underwear-wash', 250, '../images/underwear.jpg'),
(40, 'Underwear|Press', 'underwear-press', 300, '../images/underwear.jpg'),
(41, 'Underwear|Dry', 'underwear-dry', 350, '../images/underwear.jpg'),
(42, 'Jacket|Wash', 'jacket-wash', 250, '../images/jacket.jpg'),
(43, 'Jacket|Press', 'jacket-press', 250, '../images/jacket.jpg'),
(44, 'Jacket|Dry', 'jacket-dry', 300, '../images/jacket.jpg'),
(45, 'Coat|Wash', 'coat-wash', 300, '../images/coat.jpg'),
(46, 'Coat|Press', 'coat-press', 350, '../images/coat.jpg'),
(47, 'Coat|Dry', 'coat-dry', 400, '../images/coat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Number` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Review` varchar(100) NOT NULL,
  `Stars` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Number`, `Name`, `Review`, `Stars`) VALUES
(1, 'Stefan', 'Awesome.!!!Good work. Well done.', 5),
(2, 'Nimeshan', 'Good job!! Great Customer Service..', 4),
(3, 'Sanuli', 'Very good and quality service. really satisfied. Thank you!!', 4),
(4, 'Santhush', 'On time delivery. Superb service.', 3),
(5, 'Santhush', 'On time delivery. Superb service.', 3),
(6, 'Namal', 'I really appreciate this service. the quality and customer support are excellent.', 5),
(7, 'Namal', 'I really appreciate this service. the quality and customer support are excellent.', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiryID`);

--
-- Indexes for table `login_register`
--
ALTER TABLE `login_register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fullname` (`fullname`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `login_register`
--
ALTER TABLE `login_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `Number` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
