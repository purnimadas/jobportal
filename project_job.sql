-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 04:17 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_seeker_id` int(11) NOT NULL,
  `exam_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pass_year` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Male', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Female', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Both', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `genderevaluation`
--

CREATE TABLE `genderevaluation` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `jobcategory_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `job_post` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `job_description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `job_nature` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `educational_requirements` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job_location` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `salary_range` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `starting_date` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ending_date` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `user_id`, `jobcategory_id`, `company_name`, `job_post`, `job_description`, `job_nature`, `educational_requirements`, `experience`, `job_location`, `salary_range`, `starting_date`, `ending_date`, `image`, `created_at`, `updated_at`) VALUES
(1, '', '', 'fhg', 'hf', 'sdf', 'ghj', 'hh', '1', 'gh', '12', '1023-06-07', '2012-08-05', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', '', 'bdjobs', 'executive', 'high level', 'full', 'BSc', '2-3', 'dhaka', 'negotiable', '12-05-2017', '24-07-2017', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', '', 'banglacat', 'IT executive', 'higher', 'full', 'BSc', '2-3', 'Rangpur', 'negotiable', '24-05-2017', '27-09-2017', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', '', 'bd News', 'journalist', 'risky', 'full time', 'Bsc', '3 yr', 'Rajshahi', 'negotiable', '10-03-2017', '30-06-2017', 'uploads/52625.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '1', '', 'partex', 'Sales man', 'honarable', 'full time', 'HSC', '2', 'Rajshahi', '1000', '10-03-2017', '22-05-2017', 'uploads/82248.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '1', '', 'news 24', 'Executive', 'Knowledge about technology', 'full time', 'BSc', '2-3 yr', 'dinajpur', 'negotiable', '2017-03-04', '2017-06-06', 'uploads/87437.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '1', '', 'gfh', 'fhaf', 'jja', 'hjkahk', 'ajgjka', '2', 'dhaka', '2345', '10-03-2017', '22-05-2017', 'uploads/96131.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '1', '', 'des travel', 'Driver', 'Risky', 'Full time', 'SSC Pass required', '3-4 yr', 'Dhaka', '10000', '10-03-2017', '22-05-2017', 'uploads/29958.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobcategory`
--

CREATE TABLE `jobcategory` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobcategory`
--

INSERT INTO `jobcategory` (`id`, `categories`, `created_at`, `updated_at`) VALUES
(1, 'Education/Trainning', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Engineering/Architecture', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'It/Telecommunication', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Medical', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mother` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `national_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender_id` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_04_16_135927_create_users_table', 1),
('2017_04_16_140510_create_jobseekers_table', 2),
('2017_04_16_140610_create_education_table', 2),
('2017_04_16_140714_create_jobcategory_table', 2),
('2017_04_16_140820_create_reference_table', 2),
('2017_04_16_140908_create_gender_table', 2),
('2017_04_16_141057_create_genderevaluation_table', 2),
('2017_04_16_141200_create_preferred_table', 2),
('2017_04_16_141255_create_job_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `preferred`
--

CREATE TABLE `preferred` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_seeker_id` int(11) NOT NULL,
  `preferred_district` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `preferred_country` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `preferred_category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_seeker_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'purnima@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'raj@gmail.com', '202cb962ac59075b964b07152d234b70', 'jobseeker', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'manab@yahoo.com', '202cb962ac59075b964b07152d234b70', 'employer', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'sajan@gmail.com', '123', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'puru@yahoo.com', '$2y$10$wTNASo4iK3u4eMkyM/poMOwjEWmRgpdR3qPLv7G0lMkg/X8uchMBO', 'company', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'santa@gmail.com', '$2y$10$VrnN/K7l2t8dBkbTFKmQueQREqFgfSueC25Ys9lAbc/RXTulegGMK', 'jobseeker', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genderevaluation`
--
ALTER TABLE `genderevaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcategory`
--
ALTER TABLE `jobcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferred`
--
ALTER TABLE `preferred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
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
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `genderevaluation`
--
ALTER TABLE `genderevaluation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jobcategory`
--
ALTER TABLE `jobcategory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `preferred`
--
ALTER TABLE `preferred`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
