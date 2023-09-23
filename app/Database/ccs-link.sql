-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 08:03 AM
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
-- Database: `ccs-link`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `role`, `status`) VALUES
(9, 'firstname', 'lastname', 'superadmin', '$2y$10$6eqymK3AkFNB2R8bUGSRieLstGvcI4mNgJZxSSfujVgIvAJSLId6S', 'superadmin', 'active'),
(11, NULL, NULL, 'RusselTinio', '$2y$10$MoN/nMhmlPeRk9kPcg24POBSbNxi/pznEbFNioiUmMwuXkrtdMWAS', 'superadmin', 'active'),
(12, NULL, NULL, 'newadmin', '$2y$10$E/JdJH7B0/O8SY/ujkUbMeyIqTsdX77YEa8LWWpoGYpLQNMtGzybS', 'superadmin', 'active'),
(13, NULL, NULL, 'adminnew', '$2y$10$tDPeKvlfAHSxL3OIe9si7.dw7Pp48TZVU8yN93dLbCA6s/JrDLd7y', 'admin', 'disabled'),
(14, NULL, NULL, 'russel', '$2y$10$EnKi2pCxLzdRJ7jpqHFHlubUmWSVwIWHB0H5FmYJGrmnpvxwaECZa', 'admin', 'disabled'),
(17, 'Russel', 'Tinio', 'admin1', '$2y$10$uiLv9Gf.AlFswfMQABuUI.CQBIagYKyBm7.x9UJzbSy2MK6H5SMFm', 'admin', 'active'),
(18, 'Dianna', 'Price', 'wonderW10', '$2y$10$r5VCGcL7eaMoHGWGeloLXukMlHWfADAaKzINTasK./sbiig77VEse', 'admin', 'active'),
(19, 'Dianna', 'Price', 'wonderW10', '$2y$10$ZVcdSsle4rIi.sg9V8y1Auf/wJq8eyu0snkQrH7eE.ngHKDsBY2Y.', 'admin', 'disabled'),
(20, 'Dianna', 'Price', 'wonderW10', '$2y$10$h7yPFkm04lKSjJXIdBjB1e3XFAw6bxS1okdrKrP9avCpD9stdnTIi', 'admin', 'disabled'),
(21, 'Dianna', 'Price', 'wonderW10', '$2y$10$RA.Mnv4VByWadq6ls0fkxe1Ry1LgbO/XWMHGnWyWgM6iFv62Mg5c6', 'admin', 'disabled'),
(22, 'Dianna', 'Price', 'wonderW1', '$2y$10$DLPWev3ZMRvKH26.E/DPauC4cbrG/fIhsMno/25VZEWaXDbPLvCTi', 'admin', 'disabled');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `ann_num` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `imige` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`id`, `userId`, `username`, `activity`, `timestamp`) VALUES
(1, 3, NULL, 'login', '2023-09-16 13:18:04'),
(2, 3, NULL, 'login', '2023-09-16 13:20:35'),
(3, 3, '202011', 'login', '2023-09-16 13:24:44'),
(4, 3, '202011', 'User logout', '2023-09-16 13:35:29'),
(5, 3, '202011', 'User login', '2023-09-16 13:35:40'),
(6, 3, '202011', 'User logout', '2023-09-16 13:35:52'),
(7, 4, '202012', 'User login', '2023-09-16 13:35:58'),
(8, 4, '202012', 'User logout', '2023-09-16 13:36:12'),
(9, 3, '202011', 'User login', '2023-09-16 14:31:22'),
(10, 3, '202011', 'profile update successfully', '2023-09-16 14:31:50'),
(11, 3, '202011', 'profile update successfully', '2023-09-16 14:32:07'),
(12, 3, '202011', 'Experience history recorded', '2023-09-16 14:36:14'),
(13, 3, '202011', 'Educational history recorded', '2023-09-16 14:37:52'),
(14, 3, '202011', 'User logout', '2023-09-16 14:41:35'),
(15, 9, '202010', 'User login', '2023-09-17 02:39:09'),
(16, 9, '202010', 'User logout', '2023-09-17 02:40:36'),
(17, 9, '202010', 'User login', '2023-09-17 02:40:58'),
(18, 9, '202010', 'User logout', '2023-09-17 03:08:59'),
(19, 3, '202011', 'User login', '2023-09-17 03:09:04'),
(20, 3, '202011', 'User login', '2023-09-17 07:49:06'),
(21, 3, '202011', 'User login', '2023-09-18 03:50:19'),
(22, 3, '202011', 'Experience history recorded', '2023-09-18 03:54:09'),
(23, 3, '202011', 'profile update successfully', '2023-09-18 03:55:04'),
(24, 3, '202011', 'User logout', '2023-09-18 03:55:11'),
(25, 10, '202019', 'User logout', '2023-09-18 03:57:16'),
(26, 3, '202011', 'User login', '2023-09-18 03:57:36'),
(27, 3, '202011', 'User logout', '2023-09-18 03:59:32'),
(28, 3, '202011', 'User login', '2023-09-18 04:01:46'),
(29, 3, '202011', 'User logout', '2023-09-18 04:02:26'),
(30, 3, '202011', 'User login', '2023-09-18 06:19:56'),
(31, 3, '202011', 'User logout', '2023-09-18 07:30:42'),
(32, 9, '202010', 'User login', '2023-09-18 07:41:18'),
(33, 9, '202010', 'User logout', '2023-09-18 07:42:55'),
(34, 3, '202011', 'User login', '2023-09-19 10:09:48'),
(35, 3, '202011', 'User logout', '2023-09-19 10:10:07'),
(36, 3, '202011', 'User login', '2023-09-19 10:13:13'),
(37, 3, '202011', 'User logout', '2023-09-19 12:24:22'),
(38, 3, '202011', 'User login', '2023-09-19 13:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `linkin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `userId`, `website`, `email`, `linkin`, `facebook`, `number`) VALUES
(1, 1, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'https://www.facebook.com/', '09566339356'),
(2, 2, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'https://www.facebook.com/', '09566339356'),
(3, 3, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'sample facebook', '09566339356'),
(4, 5, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'sample facebook', '09566339356'),
(5, 4, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', 'https://www.facebook.com/', '09566339356'),
(10, 6, 'sample website', 'sample@gmail.com', 'rulice@mailinator.com', '', '09566339356'),
(11, 7, 'lujy@mailinator.com', 'xiviqa@mailinator.com', 'qecytu@mailinator.com', 'maqu@mailinator.com', '+1 (258) 404-9572'),
(12, 9, 'vodoxemiri@mailinator.com', 'gezer@mailinator.com', 'tigim@mailinator.com', 'pymul@mailinator.com', '+1 (715) 734-4778');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `program` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `startYear` int(11) DEFAULT NULL,
  `endYear` int(11) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `userId`, `program`, `school`, `startYear`, `endYear`, `status`) VALUES
(12, 3, 'BS in Information Technology', 'DHVSU', 2020, 2024, 'active'),
(13, 3, 'BS in Information Technology', 'Elementary School', 2020, 2024, 'active'),
(14, 9, 'Beau Macdonald', 'Consequat Autem nis', 2001, 1991, 'active'),
(15, 3, 'BS in Information Technology', 'DHVSU', 2020, 2023, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `startYear` varchar(11) DEFAULT NULL,
  `endYear` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `userId`, `position`, `org`, `description`, `startYear`, `endYear`, `status`) VALUES
(1, 1, 'Mara', 'Rooney', NULL, '2021', '2021', 'disabled'),
(2, 1, 'Kagawad', 'sample org', NULL, '2012', 'Currently Working', 'disabled'),
(4, 2, 'Jr web designer', 'sample org', 'Providing assistance in developement of various software', '2010', '2011', 'active'),
(5, 3, 'Jr web designer', 'sample org', 'Providing assistance in developement of various software', '2019', 'Currently Working', 'disabled'),
(8, 3, ' web designer', 'CCPD', NULL, '2012', 'Currently Working', 'active'),
(12, 6, 'Carl', 'sss', NULL, '2021', '2023', 'active'),
(14, 3, 'Jr web designer', 'sample org', 'Providing assistance in developement of various software', '2019', 'Currently Working', 'active'),
(15, 9, 'Raven Mueller', 'Expedita quis aut mo', NULL, '1996', '2013', 'active'),
(17, 3, 'sample job', 'sample org', NULL, '2019', '2023', 'active'),
(18, 3, 'Elijah Sosa', 'Alias qui qui reicie', NULL, '2022', 'Currently Working', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mentoring`
--

CREATE TABLE `mentoring` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `profileId` int(11) DEFAULT NULL,
  `contactId` int(11) DEFAULT NULL,
  `status` enum('approve','pending','reject','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentoring`
--

INSERT INTO `mentoring` (`id`, `userId`, `profileId`, `contactId`, `status`) VALUES
(9, 7, 11, 11, 'pending'),
(10, 3, 3, 3, 'pending'),
(11, 4, 7, 5, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `predata`
--

CREATE TABLE `predata` (
  `id` int(11) NOT NULL,
  `studentId` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `predata`
--

INSERT INTO `predata` (`id`, `studentId`, `firstname`, `lastname`) VALUES
(1, 202011, 'Barry', 'Allen'),
(2, 202012, 'Bruce', 'Wayne'),
(3, 202013, 'Clark', 'Kent'),
(4, 202014, 'Dianna', 'Price'),
(5, 202015, 'John', 'Johns'),
(6, 202016, 'Wally', 'West'),
(7, 202017, 'Hal', 'Jordan'),
(8, 202018, 'John', 'Stewart'),
(9, 202019, 'Arthur', 'Curry'),
(10, 202020, 'Oliver', 'Queen'),
(11, 202010, 'Russel', 'Tinio');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(2555) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `userId`, `image`, `title`, `address`, `description`, `status`) VALUES
(3, 3, '1694850205_5a4d605a9dd2fadc1715.jpg', 'Miss', 'sample address', ' This is a desctipti', 'active'),
(7, 4, '1691244814_2ed9492b58195426eb5c.jpg', NULL, 'Bianca', 'Explicabo Libero mi', 'active'),
(10, 6, '1691665437_a2f88fd3edcb91decbb2.jpg', 'journalist', 'sample address', 'its a bird, its a plane, its superman', 'active'),
(11, 7, '1692539661_374cc8af7a2169ec1be4.png', 'Malcolm', 'Macaulay', 'Nam doloremque persp', 'active'),
(14, 9, '1693530754_f831a857ed44ca2a41ea.jpg', 'Germaine', 'Sacha', 'Cupiditate reiciendi', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `events_title` varchar(255) DEFAULT NULL,
  `events_desc` varchar(255) DEFAULT NULL,
  `events_date` varchar(255) DEFAULT NULL,
  `events_time` varchar(255) DEFAULT NULL,
  `events_image` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `events_title`, `events_desc`, `events_date`, `events_time`, `events_image`, `timestamp`, `status`) VALUES
(7, 'Event 1', 'This is a sample description for event', '2023-10-04', '14:34', '1695303280_31e31cdfd50338149b8f.webp', '2023-09-21 13:34:40', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fund`
--

CREATE TABLE `tbl_fund` (
  `id` int(11) NOT NULL,
  `fund_title` varchar(255) DEFAULT NULL,
  `fund_enddate` varchar(255) DEFAULT NULL,
  `fund_desc` varchar(255) DEFAULT NULL,
  `fund_contactperson` varchar(255) DEFAULT NULL,
  `fund_contactinfo` varchar(255) DEFAULT NULL,
  `fund_othercontact` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active',
  `fund_cover` varchar(255) DEFAULT NULL,
  `Approved/Pending` enum('approved','pending','reject') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fund`
--

INSERT INTO `tbl_fund` (`id`, `fund_title`, `fund_enddate`, `fund_desc`, `fund_contactperson`, `fund_contactinfo`, `fund_othercontact`, `status`, `fund_cover`, `Approved/Pending`) VALUES
(1, 'spare a peace of bread', '2023-09-08', 'A charity for the people who are affected of typhoon ', 'Abel Batongbakal', '099919191', 'Sergio Sinermunan', 'active', '1692262821_afcb2e9e9646c0995342.jpg', 'reject'),
(2, 'Dolor dolor et natus', '1989-12-14', 'Ea exercitationem al', 'Aut distinctio Rem ', 'Expedita adipisci co', 'Deserunt laudantium', 'active', '1692923951_32f1bd1f06514ee16309.jpg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE `tbl_jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_company` varchar(255) DEFAULT NULL,
  `job_description` varchar(255) DEFAULT NULL,
  `job_category` varchar(255) DEFAULT NULL,
  `job_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `job_salary` varchar(255) DEFAULT NULL,
  `job_email` varchar(255) DEFAULT NULL,
  `job_contacts` varchar(255) DEFAULT NULL,
  `job_website` varchar(255) DEFAULT NULL,
  `job_cover` varchar(255) DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `status` enum('active','disabled') DEFAULT 'active',
  `approval` enum('approved','pending','reject') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`id`, `job_title`, `job_company`, `job_description`, `job_category`, `job_address`, `city`, `job_salary`, `job_email`, `job_contacts`, `job_website`, `job_cover`, `date`, `status`, `approval`) VALUES
(21, 'Senior Web DEv', 'Company 1', 'This is a sample job from company 1', 'full-time', 'Aperiam amet eiusmo', 'Angeles City', '15,000.00', 'jywo@mailinator.com', 'Irure aliqua Sit si', 'https://www.qolofytog.mobi', '1695134417_459bc191ee5b1665dd18.jpg', '2023-09-19', 'active', 'approved'),
(23, 'Senior Web DEv', 'Company 2', 'this is just a simple job description', 'full-time', 'Sample Address', 'Lubao', '15,000.00', 'jywo@mailinator.com', 'Irure aliqua Sit si', 'https://www.zesibazyku.cc', '1695142131_5ea9227dfa7e802350af.png', '2023-09-20', 'active', 'approved'),
(24, 'Graphic Designer', 'Company 3', 'this is a simple job description for job 3', 'intern', 'Sample Address', 'Mexico', '5,000.00', 'luwa@mailinator.com', 'Irure aliqua Sit si', 'https://www.xalahemo.me', '1695142263_62d00cecfe5e84b8fbb1.jpg', '2023-09-20', 'active', 'approved'),
(25, 'support tech', 'Company 4', 'This is a simple job description for job 4', 'part-time', 'Sample Address', 'San Fernando City', '15,000.00', 'jywo@mailinator.com', 'Irure aliqua Sit si', 'https://www.bezy.ws', '1695142357_b473d68078708754c4a0.jpg', '2023-09-20', 'active', 'pending'),
(27, 'IT tech', 'Company 5', 'This is a brief description about the job', 'full-time', 'Sample Address', 'Apalit', '15,000.00', 'jywo@mailinator.com', 'Irure aliqua Sit si', 'https://www.fakamocoja.tv', '1695209304_22cc76201d83e6910c96.png', '2023-09-20', 'active', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `news_desc` varchar(255) DEFAULT NULL,
  `date_posted` varchar(255) DEFAULT NULL,
  `news_image` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','disabled','') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `news_title`, `news_desc`, `date_posted`, `news_image`, `timestamp`, `status`) VALUES
(14, 'news1', 'This is to show news1', 'September 19, 2023', '1695141940_ac931e77bbc04e736517.jpg', '2023-09-19 16:45:40', 'active'),
(15, 'news sample2', 'This is to show news2', 'September 19, 2023', '1695141954_67cd91521b899de9fb38.jpg', '2023-09-19 16:45:54', 'active'),
(16, 'news sample 3', 'last news sample', 'September 19, 2023', '1695141970_14d04d0eb5971d62a52a.jpg', '2023-09-19 16:46:10', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `suffix`, `username`, `password`, `status`) VALUES
(3, 'Mitsumi', 'Iwakura', '', '202011', '$2y$10$DO8Gyaluus0LhSQEUb3HleEX0JVa8F4a55Tff2OJgaLawZjKzqPSa', 'active'),
(4, 'Bruce', 'Wayne', NULL, '202012', '$2y$10$auBNo7XiWn/LXqV1nkHQ6OhoR2qI9XQfox0qcPRUxN4y1yQ5pQ3JW', 'active'),
(6, 'Clark', 'Kent', NULL, '202013', '$2y$10$7TWFcZSxLBela0fGDkIA..20SPaELp4m282jPTKmqTLDqgJxLPZD.', 'active'),
(7, 'Oliver', 'Queen', NULL, '202020', '$2y$10$LmDICMI5pWa90aOQNOzzLexDONJNlPL9poFpPt7PuXSLmT/TqD9wW', 'active'),
(8, 'John', 'Johns', NULL, '202015', '$2y$10$NUbJQqjVhfcRd190MUviNOXVg6jMTMI0yMyT2lHdLSL.rL9gpgMri', 'active'),
(9, 'Russel', 'Tinio', NULL, '202010', '$2y$10$C1lovUzc2Ap1EjQxi4WrWOPXJqCdLGltrEstdHNqBovipsA37jvVu', 'active'),
(10, 'Wally', 'West', NULL, '202019', '$2y$10$A/MzDndAsRGc6yAg0i.Nie57l4TmMKYdJvZepcRTpR8Wdv.mgXobK', 'active'),
(11, 'Hal', 'Jordan', NULL, '202017', '$2y$10$yo8qrWCywPLVrT3eMGClGe57KZk5pcLJJ6vTwctCDtpw5o0Obtok6', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`ann_num`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `predata`
--
ALTER TABLE `predata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fund`
--
ALTER TABLE `tbl_fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `ann_num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mentoring`
--
ALTER TABLE `mentoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `predata`
--
ALTER TABLE `predata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_fund`
--
ALTER TABLE `tbl_fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
