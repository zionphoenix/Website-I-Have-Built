-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2016 at 09:42 PM
-- Server version: 5.6.33-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lorday_luxury`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `message` varchar(10000) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `credit_card_number` varchar(500) NOT NULL,
  `credit_card_expiry_date` varchar(500) NOT NULL,
  `credit_card_cvv` varchar(500) NOT NULL,
  `email_address` varchar(500) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(100) NOT NULL AUTO_INCREMENT,
  `customer_review` varchar(10000) NOT NULL,
  `review_image` varchar(100) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `customer_review`, `review_image`) VALUES
(1, 'Whoo! Money flowing!', '5.jpg'),
(2, 'Cash, cash, & more cash, every single day!\n', '5.jpg'),
(3, 'I have more money than I know what to do with!', '5.jpg'),
(4, 'Holy shit. It actually works!', '5.jpg'),
(5, 'aaand now Im rich. Boom.', '5.jpg'),
(6, 'Very very nice.', '4_5.jpg'),
(7, 'Im so glad this didnt turn out to be a scam!', '4_5.jpg'),
(8, 'It cant be this easy. Surely!', '4_5.jpg'),
(9, 'Wow! Im looking at 800K for this year! ', '4_5.jpg'),
(10, 'So glad to not have to answer to a boss anymore!', '4_5.jpg'),
(11, 'From 10K/week to 10K/day son. Yeah boy!', '4.jpg'),
(12, 'Oh yeah, 2017s gonna be a good year. Cant wait to get started!', '4.jpg'),
(13, 'Interesting. Very Interesting.', '4.jpg'),
(14, 'Best investment I ever made.\n\n', '4.jpg'),
(15, 'Wow, so simple. Cant wait to try it out!', '4.jpg'),
(16, 'Hmm, I mean I guess it could potentially work...', '3_5.jpg'),
(17, 'aaand that effectively ends my job search. Free!', '5.jpg'),
(18, 'Plain & Simple. It works. ', '5.jpg'),
(19, 'Im trying to find a fault with this strategy but this would generate a very generous amount of revenue.', '5.jpg'),
(20, 'A must have this Christmas.', '5.jpg'),
(21, 'Awesome!', '5.jpg'),
(22, 'This has significantly improved my Christmas spirit!', '4_5.jpg'),
(23, 'Amazing, made over 2K in my first week!', '4_5.jpg'),
(24, 'My husband loved it! Its so simple & easy.', '4_5.jpg'),
(25, 'I dont see how it wouldnt work. Hmm. ', '4_5.jpg'),
(26, 'Great present for my son. Hes always talking about never having any money.\n', '4_5.jpg'),
(27, 'I have so many ladies wanting a piece of me now Im rich!', '4.jpg'),
(28, 'Definitely recommend it. So easy to initiate.', '4.jpg'),
(29, 'You know what, Im not gonna wait, Im gonna start today. Why wait right.', '4.jpg'),
(30, 'Really? This easy? Surely not...', '4.jpg'),
(31, 'Love it. Love it. Love it.', '4.jpg'),
(32, 'Easy $200.00/day & I go back to sleep.\n', '3_5.jpg'),
(33, 'Six months later & Im looking at seven figures in my bank account! ', '5.jpg'),
(34, 'DAMN! This shit works!', '5.jpg'),
(35, 'How did I not think of this! Its so simple!', '5.jpg'),
(36, 'Forget working for someone else. Im the boss now.', '5.jpg'),
(37, 'Wonderful!', '5.jpg'),
(38, 'I was so stressed about what to do after college, this really really helped lower the stress a lot.', '4_5.jpg'),
(39, 'Im so happy this works, from hard times to penthouses, its just, I dont even know what to say. Wow. ', '4_5.jpg'),
(40, 'Whoa! It works...', '4_5.jpg'),
(41, 'Just made $400.00 in my first hour!', '4_5.jpg'),
(42, 'Never had a single problem.', '4_5.jpg'),
(43, 'So simple, brilliant, absolutely brilliant.\n', '4.jpg'),
(44, 'Time to go backpacking I think!', '4.jpg'),
(45, 'Very nice!', '4.jpg'),
(46, 'Its brought back enjoyment into my life. ', '4.jpg'),
(47, 'I honestly thought this would not work but Ive run the numbers over & over again, it just doesnt make sense for it not to work!', '4.jpg'),
(48, 'Its alright I guess.', '3_5.jpg'),
(49, 'Im telling all my friends! ', '5.jpg'),
(50, 'Im so very glad I found this. Oh man, thank God!', '5.jpg'),
(51, 'Thank god it works. Thank god.', '5.jpg'),
(52, 'Brilliant. Simply Brilliant.', '5.jpg'),
(53, 'Straight forward cash money. The way I like it.', '5.jpg'),
(54, 'So this is what its like being rich... I like it.', '4_5.jpg'),
(55, 'Had a 10K week, 8K week before that, & a 12K week before that. Time to get that Lamborghini! ', '4_5.jpg'),
(56, 'Just made 20K in a day!', '4_5.jpg'),
(57, 'VIP everywhere I go. 10K aint nothing no more cuz. I make that in a day now. ', '4_5.jpg'),
(58, 'Private jets here I come. 5K/day.', '4_5.jpg'),
(59, 'Whoo! 25K in one month!', '4.jpg'),
(60, 'Somebody stop me, I want a gold suit, you know what, dont. I made 5k yesterday, it wont even make a dent at this point. HAHA!', '4.jpg'),
(61, 'Cash Money Heroes Son! 2K in an hour!', '4.jpg'),
(62, 'Partying with celebrities now. Kingpin made 10k this week bruh. Step aside.', '4.jpg'),
(63, 'Made it. Finally made it. 7K/day. Wow.', '4.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
