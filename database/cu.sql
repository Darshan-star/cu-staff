-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 03:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin@gmail.com'),
(2, 'Darshan Yadav', 'DY', '121', 'darshanrao526@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `sub_heading` varchar(500) NOT NULL,
  `link` varchar(100) NOT NULL,
  `link_txt` varchar(100) NOT NULL,
  `order_number` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `heading`, `sub_heading`, `link`, `link_txt`, `order_number`, `added_on`, `status`) VALUES
(1, 'banner.jpg', 'Come Let\'s ', 'Meet With Chandigarh University Faculties.', 'home', 'Search Now', 2, '2020-06-23 03:00:05', 1),
(2, 'banner2.jpg', 'CU Staff Zone', 'Best Place For Students and Teachers Instruction.', 'home', 'Meet Now', 1, '2020-06-23 03:06:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `order_number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `order_number`, `status`, `added_on`) VALUES
(6, 'C - Block', 3, 1, '2022-09-18 11:05:40'),
(7, 'A - Block ', 1, 1, '2022-09-18 11:06:08'),
(8, 'B - Block', 2, 1, '2022-09-18 11:07:09'),
(9, 'D - Block', 4, 1, '2022-09-18 11:08:08'),
(10, 'DD - Block', 5, 1, '2022-09-18 11:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `added_on`) VALUES
(1, 'Vishal', 'phpvishal@gmail.com', '9999999999', 'Test Subject', 'test message', '2020-06-23 03:21:43'),
(2, 'sohit rao', 'sohit@gmail.com', '9494333312', 'nice work', '', '2022-08-14 12:19:56'),
(3, 'sohit rao', 'sohit@gmail.com', '9494333312', 'nice work', '', '2022-08-14 12:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `dish` varchar(100) NOT NULL,
  `dish_detail` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` enum('veg','non-veg') NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `category_id`, `dish`, `dish_detail`, `image`, `type`, `status`, `added_on`) VALUES
(6, 8, 'Darshan [1E23017] ', 'Available in room no - 714_A.', '21.jpeg', '', 0, '2022-09-18 11:46:12'),
(7, 7, 'Bhavy Rao [1E8205]', 'Computer Network ', 'Bhavy rao.jpg', '', 1, '2022-09-18 03:35:19'),
(8, 8, 'Kirat Kaur', 'Available In Room No - 302 Block B3', 'kirart.jpg', '', 0, '2022-11-02 03:21:01'),
(9, 8, 'Chet Ram ', 'Available In Room No - 411 Block B1', 'chet-ram-sir.jpg', '', 1, '2022-11-03 12:38:42'),
(10, 8, 'Simranjit Singh [E13378]', 'Available In Room No - 721 Block B1', 'simranjit.jpg', '', 0, '2022-11-03 12:41:35'),
(11, 8, 'Disha Sharma [E13241]', 'Available In Room No - 721 Block B1', '917165077_kirart.jpgdisha.jpg', '', 0, '2022-11-03 12:46:35'),
(12, 6, 'Niket Kumar ', 'Available In Room No - 401 Block C2', 'Niket-sir.jpg', '', 1, '2022-11-09 10:09:08'),
(13, 6, 'Akshay ', 'Available In Room No - 311 Block C2', 'akshay-sir.jpg', '', 1, '2022-11-09 10:16:24'),
(14, 6, 'Manjeet Singh', 'Available In Room No - 311 Block C2', 'manjeet-sir.jpg', '', 1, '2022-11-09 10:18:50'),
(15, 8, 'Sumit Kumar Mishra[E13101]', 'Available In Room No - 311 Block B1', '289325814_PHOTO.jpg', '', 0, '2022-11-10 11:02:37'),
(16, 8, 'Gurleen Kaur', 'Available In Room No - 711 Block B1', '669460273_PHOTO.jpg', '', 0, '2022-11-10 11:03:47'),
(17, 8, 'Neha Dutta', 'Available In Room No - 711 Block B1', '960598224_PHOTO.jpg', '', 0, '2022-11-10 11:06:05'),
(18, 6, 'Deepika ', 'Available In Room No - 317, Block B1', 'deepika-mam.jpg', '', 1, '2022-11-10 11:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `dish_details`
--

CREATE TABLE `dish_details` (
  `id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `attribute` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `dish_detail_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `cart_min_price` int(11) NOT NULL,
  `cart_min_price_msg` varchar(250) NOT NULL,
  `website_close` int(11) NOT NULL,
  `wallet_amt` int(11) NOT NULL,
  `website_close_msg` varchar(250) NOT NULL,
  `referral_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `cart_min_price`, `cart_min_price_msg`, `website_close`, `wallet_amt`, `website_close_msg`, `referral_amt`) VALUES
(1, 40, 'Cart min price will be 50 rs', 0, 0, 'Website Closed for today', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `email_verify` int(11) NOT NULL,
  `rand_str` varchar(20) NOT NULL,
  `referral_code` varchar(20) NOT NULL,
  `from_referral_code` varchar(20) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `status`, `email_verify`, `rand_str`, `referral_code`, `from_referral_code`, `added_on`) VALUES
(2, 'Vishal', 'ervishalwebdeveloper@gmail.com', '9999999999', '$2y$10$cZ6sSDVYUINCnynmB3Tbuend7e7bRqgCPeD.RPmxdRucxKhbSo/52', 1, 1, 'lmkaetixyrzqoqy', 'lmkaetixyrzqoqds', '', '2020-07-18 05:11:37'),
(5, 'Vishal', 'phpvishal@gmail.com', '9999999999', '$2y$10$wWBWMJTK37jkyLujN8YQoOVfQQt/3.B9ruoaNkjruQEwz4ZVfvNJa', 1, 1, 'zdoxxhajyeqtgpp', 'lhqtkjofzevfdai', 'lmkaetixyrzqoqds', '2020-07-23 08:48:08'),
(6, 'Darshan Yadav', 'darshanrao526@gmail.com', '9494333312', '$2y$10$d.pOQkXOshppz9aZ1b5CcevgOlpA0oLQv2TXnxCHe8eKiuh4GxD26', 1, 1, 'qcxnaooximrsery', 'ihirmemgucvkvkt', '', '2022-09-23 04:29:22'),
(7, 'DY', 'darshan@gmail.com', '1234567891', '$2y$10$ta5AQMGe3vzuhOnd9bOqNOdTvukMeT/PjudPO.XHhFeMgAqEY10r.', 1, 1, 'xsdjrwiyzvkmpbe', 'mkqpsaxjdymwile', '', '2022-11-03 01:32:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish_details`
--
ALTER TABLE `dish_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dish_details`
--
ALTER TABLE `dish_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
