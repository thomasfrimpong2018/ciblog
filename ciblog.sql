-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 02:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'business', '2017-11-29 07:45:28'),
(2, 'technology', '2017-11-29 07:45:28'),
(3, 'Science', '2017-12-13 11:44:06'),
(4, 'agriculture', '2017-12-13 12:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(7, 8, 'John Doe', 'jdoe@ymail.com', 'this is the first comment', '2018-01-06 10:22:01'),
(8, 8, 'Esi Mansah', 'mansah@gmaill.com', 'it is what it is', '2018-01-09 09:07:43'),
(9, 6, 'teezle ', 'tfrimpong1987@gmail.com', 'i can''t think far..', '2018-01-09 14:07:09'),
(10, 18, 'benny', 'tfrimpong1987@gmail.com', 'it is wat it is', '2018-01-22 12:25:08'),
(11, 6, 'teezle ', 'tfrimpong1987@gmail.com', '..i can''t think madness', '2018-03-17 11:49:39'),
(12, 1, 'thomas', 'tfrimpong1987@gmail.com', 'please', '2018-03-17 11:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `post_image`, `created_at`, `category_id`, `user_id`) VALUES
(1, 'Post One', 'Post_One', 'it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose', '', '2017-11-25 14:47:02', 1, 1),
(2, 'Post two', 'Post_two', '<p>2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec sapien vel neque viverra fringilla non ultricies mauris. Sed mi dolor, semper id magna nec, gravida convallis velit. Praesent non ante erat. Vivamus cursus mi lorem, sit amet finibus eros placerat id. Vestibulum hendrerit vehicula enim, sit amet suscipit mi mattis et. Nulla malesuada ipsum nec magna commodo, vitae eleifend nibh egestas. Curabitur suscipit quis nisl ut tincidunt. Donec facilisis urna quis molestie fermentum. Duis a facilisis nibh, ut semper mi. Interdum et malesuada fames ac ante ipsum primis in</p>\r\n', '', '2017-11-25 14:47:02', 4, 1),
(6, 'Post Six', 'Post_Six', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec sapien vel neque viverra fringilla non ultricies mauris. Sed mi dolor, semper id magna nec, gravida convallis velit. Praesent non ante erat. Vivamus cursus mi lorem, sit amet finibus eros placerat id. Vestibulum hendrerit vehicula enim, sit amet suscipit mi mattis et. Nulla malesuada ipsum nec magna commodo, vitae eleifend nibh egestas. Curabitur suscipit quis nisl ut tincidunt. Donec facilisis urna quis molestie fermentum. Duis a facilisis nibh, ut semper mi. Interdum et malesuada fames ac ante ipsum primis in</p>\r\n', '', '2017-11-29 09:30:18', 2, 1),
(8, 'Test', 'Test', '<p>this is just a test entry, please.</p>\r\npa raka ta..\r\n', 'noimage.png', '2017-12-12 10:15:07', 4, 2),
(18, 'test 11', 'test_11', '<p>tewate ben tealsn yighjk</p>\r\n', 'add.png', '2017-12-12 11:14:43', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'ben carson', '2555', 'carson@gmail.com', 'ben', '827ccb0eea8a706c4c34a16891f84e7b', '2018-01-09 13:56:10'),
(2, 'hill harper', '566', 'hill@ymail.com', 'hill', '827ccb0eea8a706c4c34a16891f84e7b', '2018-01-09 14:00:25'),
(3, 'john', '233', 'tfrimpong1987@gmail.com', 'quao', '827ccb0eea8a706c4c34a16891f84e7b', '2018-03-21 12:30:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
