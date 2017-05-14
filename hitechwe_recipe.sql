-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 06:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitechwe_recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `ad_id` int(11) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `ad_img` varchar(255) NOT NULL,
  `ad_url` varchar(255) NOT NULL,
  `ad_footer` varchar(255) NOT NULL,
  `ad_c_page` varchar(255) NOT NULL,
  `ad_cat` int(11) NOT NULL,
  `ad_st` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`ad_id`, `ad_title`, `ad_img`, `ad_url`, `ad_footer`, `ad_c_page`, `ad_cat`, `ad_st`) VALUES
(1, 'recipe Hut Add', 'image/84503video-img.png', '<img src=\"http://localhost/coupon/image/3488410247261_1482670658666165_1281216141431095276_n.jpg\">', '1', '1', 1, 1),
(2, 'Advertisement', 'image/21105video-img.png', '<img src=\"http://localhost/coupon/image/3488410247261_1482670658666165_1281216141431095276_n.jpg\">', '1', '1', 1, 1),
(4, 'Advertisement Four', 'image/75845video-img.png', '<img src=\"http://localhost/coupon/image/3488410247261_1482670658666165_1281216141431095276_n.jpg\">', '1', '1', 1, 1),
(5, 'Advertisement Four', 'image/88504-02.jpg', '<img src=\"http://localhost/coupon/image/3488410247261_1482670658666165_1281216141431095276_n.jpg\">', '1', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` longtext NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_seo_url` varchar(255) NOT NULL,
  `cat_top` int(5) NOT NULL,
  `cat_parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`, `cat_image`, `cat_seo_url`, `cat_top`, `cat_parent_id`) VALUES
(12, 'ricesw', '<p>asdf</p>', 'image/Rice.png', 'ricesw', 1, 0),
(13, 'sdf', '<p>sdf</p>', 'image/81779Rice.png', 'sdf', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `features_id` int(11) NOT NULL,
  `features_product_id` int(11) NOT NULL,
  `features_active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `front_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_owner_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_dis` varchar(255) NOT NULL,
  `copy_text` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frontend`
--

INSERT INTO `frontend` (`front_id`, `title`, `slogan`, `logo`, `store_name`, `store_owner_name`, `phone`, `email`, `address`, `meta_keyword`, `meta_title`, `meta_dis`, `copy_text`, `facebook`, `twitter`, `youtube`, `google`) VALUES
(1, 'Coupon Hut', 'Get coupons one stop', 'image/Chrysanthemum.jpg', 'Coupon Hut', 'Jodran', '+1 565-565-898', 'abdullasadi23@gmail.com', 'Newyork. Brooklyn', 'Get coupons one stop', 'Get coupons one stop', 'Get coupons one stop', 'www.couponhut.com', 'www.facebook.com/ya', 'www.twitter.com', 'www.youtube.com', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `Information_id` int(11) NOT NULL,
  `Information_title` varchar(255) NOT NULL,
  `Information_description` longtext NOT NULL,
  `Information_meta_title` varchar(255) NOT NULL,
  `Information_meta_description` varchar(255) NOT NULL,
  `Information_meta_keyword` varchar(255) NOT NULL,
  `Information_meta_stores` int(11) NOT NULL,
  `Information_seo_keyword` varchar(255) NOT NULL,
  `Information_meta_Bottom` int(11) NOT NULL,
  `Information_meta_Status` int(11) NOT NULL,
  `Information_sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Information_id`, `Information_title`, `Information_description`, `Information_meta_title`, `Information_meta_description`, `Information_meta_keyword`, `Information_meta_stores`, `Information_seo_keyword`, `Information_meta_Bottom`, `Information_meta_Status`, `Information_sort_order`) VALUES
(1, 'about us', '<p>about usabout usabout usabout usabout usabout usabout us &nbsp;about usabout us</p>', 'about us', 'about us', 'about us', 0, 'about-us', 1, 0, 0),
(2, 'Privecy Policy', '<p><span>Privecy Policy</span></p>', 'Privecy Policy', 'Privecy Policy', 'Privecy Policy', 0, 'privecy-policy', 1, 0, 0),
(3, 'Support ', '<p><a href=\"../cms.php\">Support</a><span>&nbsp;</span><a href=\"../cms.php\">Support</a><span>&nbsp;</span><a href=\"../cms.php\">Support</a><span>&nbsp;</span><a href=\"../cms.php\">Support</a><span>&nbsp;</span><a href=\"../cms.php\">Support</a><span>&nbsp;</span></p>', 'Support Support ', 'Support Support ', 'Support Support ', 0, 'support-', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `rec_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `rec_name` varchar(255) NOT NULL,
  `rec_image` varchar(255) NOT NULL,
  `rec_des` longtext NOT NULL,
  `rec_ing` varchar(250) NOT NULL,
  `rec_dir` varchar(250) NOT NULL,
  `rec_pre_time` varchar(50) NOT NULL,
  `rec_cook_time` varchar(50) NOT NULL,
  `rec_publish_date` date NOT NULL,
  `rec_seo_url` varchar(255) NOT NULL,
  `rec_reviews` int(11) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`rec_id`, `cat_id`, `user_id`, `friend_id`, `rec_name`, `rec_image`, `rec_des`, `rec_ing`, `rec_dir`, `rec_pre_time`, `rec_cook_time`, `rec_publish_date`, `rec_seo_url`, `rec_reviews`, `status`) VALUES
(1, 12, 1, 0, 'vat', 'image/1476917211924_664218197119579_2888182221387788556_o.jpg', 'sdfsd', 'edfwerwe', 'werwerwe', '2:30', '4:70', '2017-05-02', 'vat', 1, 0),
(2, 12, 1, 0, 'birani', 'image/Jellyfish.jpg', 'sdfsdf', '', '', '', '', '2017-05-02', 'birani', 0, 0),
(3, 2, 5, 0, 'tihari', 'image/tihari.png', 'afdas asdfsa dfd', 'dfsdf', 'sdfsd', '4.20', '4.20', '2017-05-24', 'sdfsd', 121, 1),
(4, 2, 5, 5, '', '', 'sdf', 'sdf', '', '', '', '0000-00-00', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int(11) NOT NULL,
  `sl_date` date NOT NULL,
  `sl_status` int(2) NOT NULL,
  `sl_name` varchar(255) NOT NULL,
  `sl_url` varchar(255) NOT NULL,
  `sl_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sl_id`, `sl_date`, `sl_status`, `sl_name`, `sl_url`, `sl_img`) VALUES
(1, '2015-08-24', 1, 'slider_one', 'http://www.dvrunlimited.com', 'image/2773101_banner.jpg'),
(2, '2015-08-24', 1, 'slider_two', 'http://www.funtimes209.com/', 'image/6406802_banner.jpg'),
(3, '2015-08-24', 1, 'slider_3', 'http://www.funtimes209.com/', 'image/9945003_banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(155) NOT NULL,
  `user_last_name` varchar(155) NOT NULL,
  `user_age` varchar(3) NOT NULL,
  `user_sex` varchar(5) NOT NULL,
  `user_date_of_birth` varchar(255) NOT NULL,
  `user_about` longtext NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(155) NOT NULL,
  `user_password` varchar(155) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_address2` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_r_date` date NOT NULL,
  `user_solt` varchar(155) NOT NULL,
  `user_status` varchar(155) NOT NULL,
  `user_session_id` varchar(255) NOT NULL,
  `user_agent` varchar(155) NOT NULL,
  `user_ip` varchar(155) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_age`, `user_sex`, `user_date_of_birth`, `user_about`, `user_email`, `user_username`, `user_password`, `user_address`, `user_address2`, `user_img`, `user_r_date`, `user_solt`, `user_status`, `user_session_id`, `user_agent`, `user_ip`, `user_role`) VALUES
(1, 'yeasin', 'ali', '', '', '', '', 'ssadi2011@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 'image/atms-hustler-tile.jpg', '0000-00-00', '7cbbc409ec990f19c78c75bd1e06f215', '1', 'a9a7a4bee3ad7772b8ae844834d6c83c', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.96 Safari/537.36', '110.76.129.138', 1),
(3, 'partners1', 'partners1', '', '', '', '', 'yeasin1994@gmail.com', 'admin3', '6424e342645d1b22fe5fb7ea83aba23f', 'partners1partners1partners1', 'partners1partners1partners1partners1', 'image/03-03.jpg', '2015-08-27', '', '', '49nglth9d0h1uboo7kl5j3rij1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36', '::1', 2),
(6, 'partners2', 'partners2', '', '', '', '', 'partners2@gmail.com', 'partners2', '3d9e01a0cd28aeb56f35d1821063bf89', 'partners2@gmail.compartners2@gmail.compartners2@gmail.compartners2@gmail.com', 'partners2@gmail.compartners2@gmail.compartners2@gmail.com', 'image/04-11.jpg', '2015-08-27', '', '', '49nglth9d0h1uboo7kl5j3rij1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36', '::1', 2),
(7, 'partners3', 'partners3', '', '', '', '', 'partners3@gmail.com', 'partners3', 'faec0e54725a4ff038721d29f41f4ede', 'partners3partners3partners3partners3', 'partners3partners3partners3partners3', 'image/04-10.jpg', '2015-08-27', '', '', '49nglth9d0h1uboo7kl5j3rij1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36', '::1', 2),
(8, 'partners4', 'partners4', '', '', '', '', 'partners4@gmail.com', 'partners4', 'e83de7f499a6b5f0332cc0b97347888a', 'partners4@gmail.compartners4@gmail.compartners4@gmail.com', 'partners4@gmail.compartners4@gmail.compartners4@gmail.com', 'image/3446012-05.jpg', '2015-08-27', '', '', '49nglth9d0h1uboo7kl5j3rij1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36', '::1', 2),
(9, 'partners5', 'partners5', '', '', '', '', 'partners5@gmail.com', 'partners5', 'e63184072cec58b37181028281d06104', 'partners5@gmail.compartners5@gmail.compartners5@gmail.com', 'partners5@gmail.compartners5@gmail.compartners5@gmail.com', 'image/1192301_03.jpg', '2015-08-27', '', '', '49nglth9d0h1uboo7kl5j3rij1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36', '::1', 2),
(10, 'partners6', 'partners6', '', '', '', '', 'partners6@gmail.com', 'partners6', 'f09ff16fcb2febddc13a533683a768cb', 'partners6@gmail.com', 'partners6@gmail.com', 'image/6043001_02.jpg', '2015-08-27', '', '', '49nglth9d0h1uboo7kl5j3rij1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36', '::1', 2),
(11, 'fgh', 'hfgdh', '', '', '', '', 'yeasin@gmail.com', 'yeasin', '6424e342645d1b22fe5fb7ea83aba23f', 'yeasin@gmail.comyeasin@gmail.comyeasin@gmail.com', 'yeasin@gmail.comyeasin@gmail.comyeasin@gmail.com', 'image/12049501_808351492604341_3917173517982883017_n.jpg', '2015-10-08', '', '', 'apg7gruk4ngbnna685qv3sgdd2', 'Mozilla/5.0 (Windows NT 6.1; rv:41.0) Gecko/20100101 Firefox/41.0', '::1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`features_id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
  ADD PRIMARY KEY (`front_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Information_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`,`user_session_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `front_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `Information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
