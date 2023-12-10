-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 04:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `intro` varchar(300) NOT NULL,
  `details` text NOT NULL,
  `fb_link` varchar(100) NOT NULL,
  `twitter_link` varchar(100) NOT NULL,
  `linkedin_link` varchar(100) NOT NULL,
  `github_link` varchar(100) NOT NULL,
  `photo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `name`, `intro`, `details`, `fb_link`, `twitter_link`, `linkedin_link`, `github_link`, `photo`) VALUES
(1, 'Eduard Roland Donor', 'I am Eduard. I am a Web Developer . I know HTML, CSS, Bootstrap, jQuery,Php and Laravel.', 'I am a hardworking and ambitious individual with a great passion for computer programming. I am currently at Pilar College of Zamboanga City Studying Bachelor of Science and Information Technology. I am good at programming. I have a good knowledge about HTML, CSS, Bootstrap  PHP, MySQL. Give me the opportunity to spend my skills on the welfare of your company', 'https://www.facebook.com/midoyoki', 'https://twitter.com/midoyoki', 'https://www.linkedin.com/in/eduardonor/', 'https://github.com/ewardronin35', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `id` int(1) NOT NULL,
  `small_text` text NOT NULL,
  `office` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`id`, `small_text`, `office`, `address`, `phone`, `email`) VALUES
(1, 'You can contact me or email me I am always available!', 'Pilar College of Zamboanga City', 'Philippines, Zamboanga City R.T Lim Boulevard', '+639475365202', 'eduardroland20@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `education_informations`
--

CREATE TABLE `education_informations` (
  `id` int(1) NOT NULL,
  `degree_name` varchar(100) NOT NULL,
  `degree_information` varchar(111) NOT NULL,
  `year` int(5) NOT NULL,
  `progressbar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education_informations`
--

INSERT INTO `education_informations` (`id`, `degree_name`, `degree_information`, `year`, `progressbar`) VALUES
(3, 'Bachelor of Science in Information Technology', 'Not Graduated', 2020, 80),
(4, 'Icas De Calarian', '', 2014, 100),
(6, 'Pilar College of Zamboanga City (Senior High Graduate)', '', 2020, 100);

-- --------------------------------------------------------

--
-- Table structure for table `guest_messages`
--

CREATE TABLE `guest_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guest_messages`
--

INSERT INTO `guest_messages` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'Rakib', 'r@gmail.com', 'ki bolbo ?!', 2),
(2, 'rAKIB', 'r@gmail.com', 'dkjfdjkd', 2),
(3, 'Rakib', 'r@g.c', 'djfkdjfkd', 2),
(4, 'djfkdjks', 'a@d.d', 'djkfdkjdk', 2),
(5, 'Rakib', 'a@gmail.com', 'Kobi Nirob!!', 2),
(6, 'djkfjdks', 'a@gmail.com', 'dkfjdkjkkkkkkkkkj', 2),
(7, 'dkjfkd', 'a@dd.cdd', 'dfjdjj', 2),
(8, 'Eduard', 'eduard@gmail.c', 'weqeqwe', 2);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(3) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `photo`) VALUES
(3, '20622.png'),
(4, '96898.jpg'),
(7, '5822.png'),
(14, '35845.png'),
(15, '84952.jpg'),
(18, '50159.png');

-- --------------------------------------------------------

--
-- Table structure for table `my_best_works`
--

CREATE TABLE `my_best_works` (
  `id` int(2) NOT NULL,
  `works_name` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `photo` varchar(110) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_best_works`
--

INSERT INTO `my_best_works` (`id`, `works_name`, `catagory`, `photo`) VALUES
(16, 'Lost and Found System', 'Project System', '16.jpg'),
(17, 'PCZC Quadra', 'Photography', '17.png'),
(18, 'Registrar Monitoring System', 'Project System', '18.png'),
(19, 'Sari-Sari Store System', 'Project System', '19.png'),
(20, 'Boulevard of Zamboanga City', 'Photography', '20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `resume_file` longblob NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`resume_file`, `id`, `email`) VALUES
(0x446561722d5369737465722d50726563792e706466, 1, 'eduard@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(3) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `some_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `some_text`) VALUES
(15, 'fab fa-php', 'Dynamic Website with php', 'Can do website with php with BASIC Crud Functions'),
(16, 'fab fa-laravel', 'Dynamic Website with laravel', 'Can also use Laravel and create some websites with databases including the CRUD operations'),
(17, 'fab fa-java', 'Java Developer', 'Can Develop Java Programs and Systems '),
(18, 'fab fa-instagram', 'Instagram Reels', 'Can do Instagram reels and edit its video'),
(19, 'fab fa-windows', 'Windows Fixer', 'Can also fix some files in windows and can fix system errors and etc');

-- --------------------------------------------------------

--
-- Table structure for table `stastistics`
--

CREATE TABLE `stastistics` (
  `id` int(1) NOT NULL,
  `feature_item` int(11) NOT NULL,
  `active_products` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `clients` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stastistics`
--

INSERT INTO `stastistics` (`id`, `feature_item`, `active_products`, `experience`, `clients`) VALUES
(1, 10, 2, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(3) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_desegnation` varchar(100) NOT NULL,
  `customer_comment` text NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `customer_name`, `customer_desegnation`, `customer_comment`, `photo`) VALUES
(19, 'Roland', 'Manager at Green Service Corp', 'Good and Reliable Service', '19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `photo` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `password`, `status`, `photo`) VALUES
(1, 'Eduard', 'eduard@gmail.com', '$2y$10$gKvIQETV8D.I5OCH4RgTBenFbUMYbhjl8jn6sKmRwrzN28U9TdFfS', 2, '1.jpg'),
(2, 'Vincent San Buenaventura', 'vincent@gmail.com', '$2y$10$gKvIQETV8D.I5OCH4RgTBenFbUMYbhjl8jn6sKmRwrzN28U9TdFfS', 2, '2.png'),
(3, 'Khalid Agrasada', 'agrasada@gmail.com', '$2y$10$gKvIQETV8D.I5OCH4RgTBenFbUMYbhjl8jn6sKmRwrzN28U9TdFfS', 2, '3.png'),
(4, 'Derwin Lim', 'derwin@gmail.com', '$2y$10$gKvIQETV8D.I5OCH4RgTBenFbUMYbhjl8jn6sKmRwrzN28U9TdFfS', 2, '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_informations`
--
ALTER TABLE `education_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_messages`
--
ALTER TABLE `guest_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_best_works`
--
ALTER TABLE `my_best_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stastistics`
--
ALTER TABLE `stastistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_informations`
--
ALTER TABLE `education_informations`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guest_messages`
--
ALTER TABLE `guest_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `my_best_works`
--
ALTER TABLE `my_best_works`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stastistics`
--
ALTER TABLE `stastistics`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
