-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 02:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iab`
--
CREATE DATABASE IF NOT EXISTS `iab` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `iab`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `userEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `userEmail`) VALUES
(1, 'admin1@iub.edu.bd'),
(2, 'admin2@iub.edu.bd');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

DROP TABLE IF EXISTS `alumni`;
CREATE TABLE `alumni` (
  `id` int(10) UNSIGNED NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `currentWorkPlace` varchar(255) DEFAULT NULL,
  `graduationYear` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `userEmail`, `designation`, `currentWorkPlace`, `graduationYear`) VALUES
(1, '1910282@iub.edu.bd', 'Frontend Developer', 'IUB', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `award_posts`
--

DROP TABLE IF EXISTS `award_posts`;
CREATE TABLE `award_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL,
  `awardTitle` varchar(255) NOT NULL,
  `awardDescription` varchar(1000) NOT NULL,
  `awardDate` date NOT NULL,
  `awardImageURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_posts`
--

INSERT INTO `award_posts` (`id`, `postID`, `awardTitle`, `awardDescription`, `awardDate`, `awardImageURL`) VALUES
(1, 5, 'Champion of National Innovation Competition', 'On 15th March 2023, the IUB CSE department participated in the Technocrats V.1 National Innovation Competition, hosted by IUBAT. Students from various Colleges, Polytechnics and Universities came together to showcase their innovative ideas and compete against each other. This year total 117 teams participated in different segments of this event.', '2023-03-15', 'technocrats.jpg'),
(2, 16, 'Award Test 1', 'award test description 1', '2022-11-17', 'programming contest.jpg'),
(3, 17, 'Award Test 2', 'award test description 2', '2020-11-12', 'Gold medal.jpg'),
(5, 29, 'SHE Awards', 'Proud to announce SHE BUSINESS AWARDS 2020 DUBAI..\r\nOur Experts and Judges will also be rewarding few selected Awards to the most Deserving Businesses in UAE.', '2020-03-06', 'She.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

DROP TABLE IF EXISTS `bookmarks`;
CREATE TABLE `bookmarks` (
  `bookmarkID` int(10) UNSIGNED NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `commentID` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_students`
--

DROP TABLE IF EXISTS `current_students`;
CREATE TABLE `current_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `minor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_students`
--

INSERT INTO `current_students` (`id`, `userEmail`, `program`, `major`, `minor`) VALUES
(1, '2020301@iub.edu.bd', 'BSc', 'CSE', 'MIS'),
(2, '2021397@iub.edu.bd', 'BSc', 'CSC', 'MIS');

-- --------------------------------------------------------

--
-- Table structure for table `event_posts`
--

DROP TABLE IF EXISTS `event_posts`;
CREATE TABLE `event_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL,
  `eventTitle` varchar(255) NOT NULL,
  `eventDescription` varchar(1000) NOT NULL,
  `eventStartDate` date NOT NULL,
  `eventEndDate` date NOT NULL,
  `eventStartTime` time NOT NULL,
  `eventEndTime` time NOT NULL,
  `eventImageURL` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_posts`
--

INSERT INTO `event_posts` (`id`, `postID`, `eventTitle`, `eventDescription`, `eventStartDate`, `eventEndDate`, `eventStartTime`, `eventEndTime`, `eventImageURL`, `eventLocation`) VALUES
(1, 4, 'TechFest Spring 2023', 'Welcome, tech enthusiasts!\r\nAre you eager to challenge your intellect and unleash your creativity? We are pleased to announce that the Department of Computer Science and Engineering is organizing TechFest, a platform to enhance students\' problem-solving and critical-thinking abilities in an enjoyable atmosphere. Our primary objective is to inspire students to enhance their technical skills and knowledge by showcasing their ability to apply classroom learning.\r\nAre you ready to compete for the crown? Sharpen your skills, focus your mind, and get ready to showcase your brilliance in this exciting journey!', '2023-04-05', '2023-04-06', '10:00:00', '16:00:00', '338202108_3344330385818763_2430062038123361519_n.jpg', 'Independent University, Bangladesh'),
(2, 14, 'Test 1', 'test description 2', '2023-07-20', '2023-07-28', '08:56:00', '20:56:00', 'SETS Fest 2022.png', 'test location 1'),
(3, 15, 'Test 2', 'test description 2', '2024-04-25', '2025-04-10', '08:57:00', '20:57:00', 'event1.jpg', 'test location 2'),
(4, 22, 'Github Workshop', 'Git repositories', '2027-05-06', '2027-05-27', '05:33:00', '17:31:00', 'event2.jpg', 'Independent University, Bangladesh'),
(5, 28, 'Rock N Rhythm 3.0 : Tribute Fiesta', '𝐑𝐎𝐂𝐊 𝐍 𝐑𝐇𝐘𝐓𝐇𝐌 - the event people remembered as a diversified music fest when the all the next gen lineup were all together under one roof. The event we won\'t forget. and to revitalize the moments, Adventor Communications is proud to present 𝐑𝐨𝐜𝐤 𝐍 𝐑𝐡𝐲𝐭𝐡𝐦 𝟑.𝟎: 𝐓𝐫𝐢𝐛𝐮𝐭𝐞 𝐅𝐢𝐞𝐬𝐭𝐚, an epic night of music featuring some of the best rock and metal bands in Bangladesh.\r\nThe performance promises to be an impressive showcase of rock and metal music that is sure to leave a lasting impression. Don\'t miss out on this epic celebration of music - you\'ll be reminiscing about for ages!', '2023-05-07', '2023-05-08', '18:58:00', '00:00:00', 'Rock.jpg', 'ICCB');

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

DROP TABLE IF EXISTS `job_posts`;
CREATE TABLE `job_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `jobDescription` text NOT NULL,
  `responsibility` text NOT NULL,
  `requirement` text NOT NULL,
  `contactEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `postID`, `jobTitle`, `companyName`, `location`, `jobDescription`, `responsibility`, `requirement`, `contactEmail`) VALUES
(1, 7, 'Web Developer', 'ABC Company', 'baridhara', 'web developer needed', '-website dev\r\n-backend\r\n-frontend', '-php\r\n-laravel\r\n-mysql', 'test@gmail.com'),
(2, 12, 'Test 1', 'Test Company 1', 'Test location 1', 'Test Description', '-test 1 responsibility 1\r\n-test 2 responsibility 2', '-test 1 requirement 1\r\n-test 2 requirement 2', 'test1@gmail.com'),
(3, 13, 'Test 2', 'Test Company 2', 'Test location 2', 'Test Description 2', '-test 2 responsibility 1\r\n-test 2 responsibility 2', '-test 2 requirement 1\r\n-test 2 requirement 2', 'test2@gmail.com'),
(4, 20, 'Test 3', 'Test Company 3', 'Test location 3', 'System Analyst', '-System, Design\r\n-System Management', '-System Analysis Knowledge\r\n-Experience: 10yrs', 'test3@gmail.com'),
(5, 26, 'SALESFORCE ADMINISTRATOR WANTED!', 'Airwrk', 'Remote', 'A New York-based Healthtech company is looking for a Salesforce Administrator. The Salesforce Administrator role is responsible for maintaining and optimizing the organization\'s use of the Salesforce platform. This includes configuring and customizing Salesforce to meet the needs of various departments, maintaining data accuracy and integrity, and supporting users with training and troubleshooting.', '- Configuring and customizing Salesforce to meet the needs of various departments, including sales, provider network, and customer service.\r\n- Managing user accounts, security settings, and access controls in Salesforce.\r\n- Maintaining data accuracy and integrity in Salesforce, including data quality and deduplication.', '- 4+ years of experience as a Salesforce Administrator or similar role.\r\n- Salesforce Administrator certification.\r\n- Strong understanding of Salesforce configuration and customization using tools like the Lightning App Builder, Process Builder, and Flow.', 'airwrk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_02_160946_create_users_table', 1),
(3, '2023_05_02_161929_create_admins_table', 1),
(4, '2023_05_02_162316_create_students_table', 1),
(5, '2023_05_02_162811_create_alumnis_table', 1),
(6, '2023_05_02_162931_create_current_students_table', 1),
(7, '2023_05_02_163245_create_posts_table', 1),
(8, '2023_05_02_163358_create_events_table', 1),
(9, '2023_05_02_163406_create_queries_table', 1),
(10, '2023_05_02_163412_create_awards_table', 1),
(11, '2023_05_02_163419_create_jobs_table', 1),
(12, '2023_05_02_163426_create_comments_table', 1),
(13, '2023_05_02_163435_create_bookmarks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `userEmail`, `created_at`, `updated_at`) VALUES
(1, NULL, '2023-05-05 07:52:25', '2023-05-05 07:52:25'),
(2, NULL, '2023-05-05 07:54:01', '2023-05-05 07:54:01'),
(3, NULL, '2023-05-05 07:54:37', '2023-05-05 07:54:37'),
(4, NULL, '2023-05-05 07:58:37', '2023-05-05 07:58:37'),
(5, NULL, '2023-05-05 08:03:44', '2023-05-05 08:03:44'),
(6, NULL, '2023-05-05 08:50:13', '2023-05-05 08:50:13'),
(7, '1910282@iub.edu.bd', '2023-05-05 08:51:20', '2023-05-05 08:51:20'),
(8, '1910282@iub.edu.bd', '2023-05-05 08:52:36', '2023-05-05 08:52:36'),
(9, '1910282@iub.edu.bd', '2023-05-05 08:53:22', '2023-05-05 08:53:22'),
(10, '1910282@iub.edu.bd', '2023-05-05 08:53:29', '2023-05-05 08:53:29'),
(11, '1910282@iub.edu.bd', '2023-05-05 08:53:41', '2023-05-05 08:53:41'),
(12, '1910282@iub.edu.bd', '2023-05-05 08:55:05', '2023-05-05 08:55:05'),
(13, '1910282@iub.edu.bd', '2023-05-05 08:55:53', '2023-05-05 08:55:53'),
(14, NULL, '2023-05-05 08:56:57', '2023-05-05 08:56:57'),
(15, NULL, '2023-05-05 08:57:48', '2023-05-05 08:57:48'),
(16, NULL, '2023-05-05 08:58:52', '2023-05-05 08:58:52'),
(17, NULL, '2023-05-05 08:59:20', '2023-05-05 08:59:20'),
(18, '1910282@iub.edu.bd', '2023-05-05 11:11:42', '2023-05-05 11:11:42'),
(19, '2021397@iub.edu.bd', '2023-05-05 11:19:09', '2023-05-05 11:19:09'),
(20, '1910282@iub.edu.bd', '2023-05-05 17:28:53', '2023-05-05 17:28:53'),
(21, '2020301@iub.edu.bd', '2023-05-05 17:30:31', '2023-05-05 17:30:31'),
(22, NULL, '2023-05-05 17:32:45', '2023-05-05 17:32:45'),
(25, '1910282@iub.edu.bd', '2023-05-05 17:54:14', '2023-05-05 17:54:14'),
(26, '1910282@iub.edu.bd', '2023-05-05 17:55:37', '2023-05-05 17:55:37'),
(27, '2021397@iub.edu.bd', '2023-05-05 17:56:46', '2023-05-05 17:56:46'),
(28, NULL, '2023-05-05 17:59:17', '2023-05-05 17:59:17'),
(29, NULL, '2023-05-05 18:00:54', '2023-05-05 18:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `query_posts`
--

DROP TABLE IF EXISTS `query_posts`;
CREATE TABLE `query_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL,
  `postDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `query_posts`
--

INSERT INTO `query_posts` (`id`, `postID`, `postDescription`) VALUES
(1, 8, 'mojaa e moja'),
(2, 9, 'rocket'),
(3, 10, 'lol'),
(4, 11, 'CSE309'),
(5, 18, 'hello'),
(6, 19, 'hi'),
(7, 21, 'Yay Project Done'),
(8, 25, 'Hello I am an Alumni of IUB'),
(9, 27, 'Hello I am a current student of CSE department of IUB');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `iubId` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `contactNo` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `profilePictureURL` varchar(255) DEFAULT 'defaultDisplayPicture.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `userEmail`, `firstName`, `lastName`, `iubId`, `school`, `linkedIn`, `facebook`, `contactNo`, `dob`, `profilePictureURL`) VALUES
(1, '1910282@iub.edu.bd', 'Rashid ', 'Shabab', '1910282', 'SETS', NULL, NULL, NULL, '2016-05-05', 'Gold medal.jpg'),
(2, '2020301@iub.edu.bd', 'Mushfiqur Alam', 'Bhuiyan', '2020301', 'SETS', NULL, NULL, '01851742939', '2013-05-24', 'defaultDisplayPicture.jpg'),
(3, '2021397@iub.edu.bd', 'Injamam Ul', 'Haque', '2021397', 'SETS', NULL, NULL, NULL, '2003-05-01', 'defaultDisplayPicture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userEmail`, `password`) VALUES
('1910282@iub.edu.bd', '12345'),
('2020301@iub.edu.bd', '12345'),
('2021397@iub.edu.bd', '12345'),
('admin1@iub.edu.bd', '12345'),
('admin2@iub.edu.bd', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_useremail_foreign` (`userEmail`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_useremail_foreign` (`userEmail`);

--
-- Indexes for table `award_posts`
--
ALTER TABLE `award_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `award_posts_postid_foreign` (`postID`);

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`bookmarkID`),
  ADD KEY `bookmarks_useremail_foreign` (`userEmail`),
  ADD KEY `bookmarks_postid_foreign` (`postID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `comments_useremail_foreign` (`userEmail`),
  ADD KEY `comments_postid_foreign` (`postID`);

--
-- Indexes for table `current_students`
--
ALTER TABLE `current_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `current_students_useremail_foreign` (`userEmail`);

--
-- Indexes for table `event_posts`
--
ALTER TABLE `event_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_posts_postid_foreign` (`postID`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_posts_postid_foreign` (`postID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `posts_useremail_foreign` (`userEmail`);

--
-- Indexes for table `query_posts`
--
ALTER TABLE `query_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `query_posts_postid_foreign` (`postID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_useremail_foreign` (`userEmail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `award_posts`
--
ALTER TABLE `award_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `bookmarkID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_students`
--
ALTER TABLE `current_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_posts`
--
ALTER TABLE `event_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `query_posts`
--
ALTER TABLE `query_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_useremail_foreign` FOREIGN KEY (`userEmail`) REFERENCES `users` (`userEmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_useremail_foreign` FOREIGN KEY (`userEmail`) REFERENCES `students` (`userEmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `award_posts`
--
ALTER TABLE `award_posts`
  ADD CONSTRAINT `award_posts_postid_foreign` FOREIGN KEY (`postID`) REFERENCES `posts` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD CONSTRAINT `bookmarks_postid_foreign` FOREIGN KEY (`postID`) REFERENCES `posts` (`postID`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookmarks_useremail_foreign` FOREIGN KEY (`userEmail`) REFERENCES `students` (`userEmail`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_postid_foreign` FOREIGN KEY (`postID`) REFERENCES `posts` (`postID`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_useremail_foreign` FOREIGN KEY (`userEmail`) REFERENCES `students` (`userEmail`) ON DELETE CASCADE;

--
-- Constraints for table `current_students`
--
ALTER TABLE `current_students`
  ADD CONSTRAINT `current_students_useremail_foreign` FOREIGN KEY (`userEmail`) REFERENCES `students` (`userEmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_posts`
--
ALTER TABLE `event_posts`
  ADD CONSTRAINT `event_posts_postid_foreign` FOREIGN KEY (`postID`) REFERENCES `posts` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD CONSTRAINT `job_posts_postid_foreign` FOREIGN KEY (`postID`) REFERENCES `posts` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_useremail_foreign` FOREIGN KEY (`userEmail`) REFERENCES `students` (`userEmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `query_posts`
--
ALTER TABLE `query_posts`
  ADD CONSTRAINT `query_posts_postid_foreign` FOREIGN KEY (`postID`) REFERENCES `posts` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_useremail_foreign` FOREIGN KEY (`userEmail`) REFERENCES `users` (`userEmail`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
