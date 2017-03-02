-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2016 at 09:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lorday_businessmodel`
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
(1, 'Its been a week, & I am all ready to get this party started!', '5.jpg'),
(2, 'So simple, love it.\n', '5.jpg'),
(3, 'So flawlessly & fluidly manoeuvred in order to cater to a low startup capital. ', '5.jpg'),
(4, 'Holy s**t. It actually works...', '5.jpg'),
(5, 'I can see applying myself to this business on a full time basis within six months.', '5.jpg'),
(6, 'I started hiring employees within a week of understanding & implementing this business models processes.', '4_5.jpg'),
(7, 'Im so glad this didnt turn out to be a scam!', '4_5.jpg'),
(8, 'It cant be this easy. Surely!', '4_5.jpg'),
(9, 'Wow! if it keeps growing at this rate Im looking at 800K revenue for this year! ', '4_5.jpg'),
(10, 'So glad to not have to answer to a boss anymore.', '4_5.jpg'),
(11, 'I wasnt expecting anything good, especially for something with such a low startup capital. But taking into account the surrounding statistics. The numbers are just there. This would work!', '4.jpg'),
(12, 'Oh yeah, 2017 is gonna be a good year. Cant wait to get started on this.', '4.jpg'),
(13, 'Interesting. Very Interesting.', '4.jpg'),
(14, 'Best investment I ever made.\n\n', '4.jpg'),
(15, 'Wow, so simple. Cant wait to try it out!', '4.jpg'),
(16, 'Hmm, I mean I guess it could potentially work. But then again, people buy a lot worse for a lot more, so...', '3_5.jpg'),
(17, 'aaand that effectively ends my job search. its an entrepreneurs life for me!', '5.jpg'),
(18, 'Plain & Simple. It works. ', '5.jpg'),
(19, 'Im trying to find a fault with this strategy but the foot traffic is existent & would very likely generate a very generous amount of revenue.', '5.jpg'),
(20, 'A must have this Christmas.', '5.jpg'),
(21, 'Awesome!', '5.jpg'),
(22, 'This has significantly improved my Christmas spirit.', '4_5.jpg'),
(23, 'My grandson was over the moon at having received such a great gift for Christmas. So constructive he said.', '4_5.jpg'),
(24, 'My husband loved the idea. Its so simple & easy.  ', '4_5.jpg'),
(25, 'I dont see how it wouldnt work. Hmm. ', '4_5.jpg'),
(26, 'Great present for my son. Hes always talking about businesses.\n', '4_5.jpg'),
(27, 'I have so many people wanting a piece of my company!', '4.jpg'),
(28, 'Definitely recommend it. So easy to initiate.', '4.jpg'),
(29, 'You know what, Im not gonna wait, Im gonna start this business up today. Why wait right.', '4.jpg'),
(30, 'I can see how the revenue would compound upon itself with the increase in employees. ', '4.jpg'),
(31, 'Wow, I wouldnt really even have to do that much. I mean yeah Id have employees, but aside from remaining in communication with them there wouldnt be much else Id need to do!', '4.jpg'),
(32, 'The employee turnover rate is concerning, but its only for the first three months. Ill take on board the recommendations & see how it affects this statistic. \n', '3_5.jpg'),
(33, 'Six months later & Im looking at seven figures of net profit! ', '5.jpg'),
(34, 'The quicker you grow, the more money you make. Thats the secret.', '5.jpg'),
(35, 'How did I not think of this! Its so simple!', '5.jpg'),
(36, 'Forget working for someone else. Im the boss now.', '5.jpg'),
(37, 'Wonderful!', '5.jpg'),
(38, 'I was so stressed about what to do after college, this really really helped lower the stress a lot.', '4_5.jpg'),
(39, 'My phone will not stop ringing with interview requests! ', '4_5.jpg'),
(40, 'Theres like no expenses at all, unless of course if you choose to advertise, but you dont even have to do that, your employees take care for all of it!', '4_5.jpg'),
(41, 'I understand how employees can burst your revenue through the roof but I think the middleman approach is a lot better. Never was a social person myself. Might hire an employee to take care of that for me though!', '4_5.jpg'),
(42, 'Never had a single problem.', '4_5.jpg'),
(43, 'Wow, this model is so flexible. It would totally work. \n', '4.jpg'),
(44, 'This model really understands consumer cognitive processes, which is why it would most definitely work.', '4.jpg'),
(45, 'For the first twelve weeks I think I pulled thirty hours a week, but for the last couple of months, Ive only been doing fifteen at the most, & revenue keeps streaming through. Very nice.', '4.jpg'),
(46, 'Its brought back enjoyment into my life. ', '4.jpg'),
(47, 'I honestly thought this would not work but Ive run the numbers over & over again, it just doesnt make sense for it not to work!', '4.jpg'),
(48, 'What do you know. It actually works.', '3_5.jpg'),
(49, 'The first three months are the hardest for sure. After a year Im on route to take my seventh holiday this year.', '5.jpg'),
(50, 'Im so very glad I found this. ', '5.jpg'),
(51, 'Thank god it works. Thank god.', '5.jpg'),
(52, 'Brilliant. Simply Brilliant.', '5.jpg'),
(53, 'Its the little things which add up to such an effective strategy. Very happy.', '5.jpg');

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
