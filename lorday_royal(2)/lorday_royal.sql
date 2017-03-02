-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2017 at 08:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lorday_royal`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `customer_id` int(11) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `customer_id` int(11) NOT NULL,
  `credit_card_number` varchar(500) NOT NULL,
  `credit_card_expiry_date` varchar(500) NOT NULL,
  `credit_card_cvv` varchar(500) NOT NULL,
  `email_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_price`, `product_quantity`) VALUES
(1, 'King of London II', 24.95, 10000),
(2, 'Queen of London III', 24.95, 10000),
(3, 'Prince of London IV', 24.95, 10000),
(4, 'Princess of London V', 24.95, 10000),
(5, 'Duke of London III', 24.95, 10000),
(6, 'Duchess of London IV', 24.95, 10000),
(7, 'Archduke of London II', 24.95, 10000),
(8, 'Archduchess of London III', 24.95, 10000),
(9, 'Knight of London IV', 24.95, 10000),
(10, 'Lord of London V', 24.95, 10000),
(11, 'Lady of London VI', 24.95, 10000),
(12, 'Count of London III', 24.95, 10000),
(13, 'Grand Prince of London IV', 24.95, 10000),
(14, 'Grand Princess of London III', 24.95, 10000),
(15, 'Grand Duke of London VII', 24.95, 10000),
(16, 'Grand Duchess of London IV', 24.95, 10000),
(17, 'Sovereign Prince of London V', 24.95, 10000),
(18, 'Sovereign Princess of London VI', 24.95, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(100) NOT NULL,
  `customer_review` varchar(10000) NOT NULL,
  `review_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `customer_review`, `review_image`) VALUES
(1, 'Great gift for the kids.', '5.jpg'),
(2, 'Best. Decision. Ever.\r\n', '5.jpg'),
(3, 'My daughter was overjoyed.', '5.jpg'),
(4, 'My wife loves being a queen.', '5.jpg'),
(5, 'Great Christmas present.', '5.jpg'),
(6, 'My little girl was over the moon about being a princess.', '4_5.jpg'),
(7, 'It was great being able to make my daughter smile.', '4_5.jpg'),
(8, 'My husband loves being a duke.', '4_5.jpg'),
(9, 'I love how thoughtful this item is & not at all expensive.', '4_5.jpg'),
(10, 'My son cant stop talking about being a prince!', '4_5.jpg'),
(11, 'Im the uncle who is never around so being able to impart something so significant was great.', '4.jpg'),
(12, 'My daughter loved the movie The Princess Diaries & ever since she has wanted to be a princess & she is so happy now she is a princess.', '4.jpg'),
(13, 'Nothing beats making your sons day.', '4.jpg'),
(14, 'Sure love bringing up being a duchess every now & again.\r\n\r\n', '4.jpg'),
(15, 'No complaints.', '4.jpg'),
(16, 'Quick delivery.', '3_5.jpg'),
(17, 'Definitely will be back for more.', '5.jpg'),
(18, 'Great.', '5.jpg'),
(19, 'Lovely customer service.', '5.jpg'),
(20, 'A must have this Christmas.', '5.jpg'),
(21, 'Great last minute gift idea.', '5.jpg'),
(22, 'What to get someone who says they do not want anything.', '4_5.jpg'),
(23, 'My son will not stop talking about being a prince. He loved it.', '4_5.jpg'),
(24, 'Great anniversary present.', '4_5.jpg'),
(25, 'What to get someone when you have run out of ideas for gifts.', '4_5.jpg'),
(26, 'Great family present.\r\n', '4_5.jpg'),
(27, 'Being a prince weirdly helped with my sons anxiety!\r\n', '4.jpg'),
(28, 'M wife loved being a queen for our anniversary.\r\n', '4.jpg'),
(29, 'We ended up starting a trend at our school, everyone wanted to be a duchess like my daughter!', '4.jpg'),
(30, 'Great gag gift.', '4.jpg'),
(31, 'My girlfriend could not stop laughing at finally being a princess.', '4.jpg'),
(32, 'My boyfriend loved it for our three-month anniversary.\r\n', '3_5.jpg'),
(33, 'Lovely gift.', '5.jpg'),
(34, 'Great present for our cousins.', '5.jpg'),
(35, 'Made our anniversary so much sweeter.', '5.jpg'),
(36, 'For someone who is not a romantic, this is a great present.', '5.jpg'),
(37, 'Wonderful.', '5.jpg'),
(38, 'Great gift for my soccer teammates.', '4_5.jpg'),
(39, 'I am finally a princess!', '4_5.jpg'),
(40, 'Now I am a duchess just like Cate in England!', '4_5.jpg'),
(41, 'I love how thoughtful of a gift this is.', '4_5.jpg'),
(42, 'Got to be one of the sweetest gifts I have ever received.', '4_5.jpg'),
(43, 'What a lovely present.\r\n', '4.jpg'),
(44, 'My granddaughters were so happy about being princesses.', '4.jpg'),
(45, 'It is a great showcase of how much someone really means to you.\r\n', '4.jpg'),
(46, 'Great present for my childcare clients.', '4.jpg'),
(47, 'My granny is so wonderful & kind for making me a prince.', '4.jpg'),
(48, 'Great parting gift for a great friend.', '3_5.jpg'),
(49, 'Simple & amazing.', '5.jpg'),
(50, 'It is the simple gifts which really hit home. ', '5.jpg'),
(51, 'Nifty little prezzy.', '5.jpg'),
(52, 'Choice gift mate.', '5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
