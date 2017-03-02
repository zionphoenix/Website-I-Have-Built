-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2016 at 10:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lorday_resume`
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
(1, 'Website Resume', 499.99, 10000);

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
(1, 'Lot better than do it yourself websites. Those little costs for editing & adding things can really stack up!', '5.jpg'),
(2, 'So much more professional than LinkedIn, mostly because it is not too busy or has little adverts along the side or anything. It is everything I am on a website, & my name is the URL, which is so great. \n', '5.jpg'),
(3, 'The premise of exclusivity is what allowed Facebook to rise amongst the giants of MySpace, & Friendster at the time. This service, ladies & gentleman, stands alongside such a simple notion, which will undoubtedly lead to a meteoric rise, not only for the company, but its clients also. I, for one, am not missing out on getting the kind of job I deserve.', '5.jpg'),
(4, 'I got a job in two weeks!', '5.jpg'),
(5, 'I have so many interviews lined up.', '5.jpg'),
(6, 'I am actually being chased by people instead of me desperately applying everywhere.', '4_5.jpg'),
(7, 'Great decision.', '4_5.jpg'),
(8, 'Love my website.', '4_5.jpg'),
(9, 'I actually got a promoted because of this.', '4_5.jpg'),
(10, 'Wow, this really works!', '4_5.jpg'),
(11, 'My website resume looks so much better than my old one.', '4.jpg'),
(12, 'I love how I can change whatever I want at no added costs.', '4.jpg'),
(13, 'No complaints.', '4.jpg'),
(14, 'Best investment I ever made.\n\n', '4.jpg'),
(15, 'Great communication.', '4.jpg'),
(16, 'Meh. No complaints.', '3_5.jpg'),
(17, 'Definitely will be back for more.', '5.jpg'),
(18, 'Great.', '5.jpg'),
(19, 'Lovely customer service.', '5.jpg'),
(20, 'A must have this Christmas.', '5.jpg'),
(21, 'Awesome!', '5.jpg'),
(22, 'What to get someone who dont want nothing.', '4_5.jpg'),
(23, 'My grandson was over the moon at having received such a great gift for christmas. So constructive he said.', '4_5.jpg'),
(24, 'I thought my husband would never get a job, I just got it for our anniversary, & now he is getting head hunted for jobs he never thought he would get! ', '4_5.jpg'),
(25, 'Such a constructive service.', '4_5.jpg'),
(26, 'Great present for my son.\n', '4_5.jpg'),
(27, 'Employers really do seem to take notice! Got a job in a week!', '4.jpg'),
(28, 'Got a great entry level gig.\n', '4.jpg'),
(29, 'I got promoted!', '4.jpg'),
(30, 'I swear every other week I get a phone call requesting an interview from bigger companies. Did not expect it to be this effective.', '4.jpg'),
(31, 'I have so many interviews I might have to start saying no to some of them!', '4.jpg'),
(32, 'Employers definitely see you in a much more professional light. Just got hired!\n', '3_5.jpg'),
(33, 'Brilliant service.', '5.jpg'),
(34, 'Great present for my cousin. He never has a job, now apparently he has to choose between three!', '5.jpg'),
(35, 'I got a pay increase!', '5.jpg'),
(36, 'I have been asking for a pay raise for years, now that a whole bunch of companies are head hunting me, I am being offered a 15% increase!', '5.jpg'),
(37, 'Wonderful.', '5.jpg'),
(38, 'My dad loved it. He is always doing contract work so its great for him getting gigs.', '4_5.jpg'),
(39, 'My phone will not stop ringing with interview requests.', '4_5.jpg'),
(40, 'Finally getting called up for jobs I deserve.', '4_5.jpg'),
(41, 'I love how thoughtful of a service this is.', '4_5.jpg'),
(42, 'Never had a single problem.', '4_5.jpg'),
(43, 'I got such a great job, & I have not even graduated college yet.\n', '4.jpg'),
(44, 'Its so great having someone handle all my website requests for me.', '4.jpg'),
(45, 'It is a great showcase of how much someone really means to you.', '4.jpg'),
(46, 'My company is thinking of promoting me!', '4.jpg'),
(47, 'I honestly thought this would not work but I have twelve interviews lined up this week!', '4.jpg'),
(48, 'What do you know. It actually works.', '3_5.jpg'),
(49, 'Simple & amazing.', '5.jpg'),
(50, 'Boom. Job acquired under 96 hours.', '5.jpg'),
(51, 'There is such a clear difference. The interviewers were so impressed.', '5.jpg'),
(52, 'Wow, I thought I would never get a job being a minority, thank god it worked.', '5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
