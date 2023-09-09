-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 07:55 AM
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
(9, NULL, NULL, 'superadmin', '$2y$10$6eqymK3AkFNB2R8bUGSRieLstGvcI4mNgJZxSSfujVgIvAJSLId6S', 'superadmin', 'active'),
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
(14, 9, 'Beau Macdonald', 'Consequat Autem nis', 2001, 1991, 'active');

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
(15, 9, 'Raven Mueller', 'Expedita quis aut mo', NULL, '1996', '2013', 'active');

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
(3, 3, '1692921661_1b7dbb97f31c4798e98d.jpg', 'godess', 'sample address', 'Happy now', 'active'),
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
  `events_status` enum('active','disbabled') NOT NULL DEFAULT 'active',
  `Approved/Pending` enum('approved','pending','rejected','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `events_title`, `events_desc`, `events_date`, `events_time`, `events_image`, `events_status`, `Approved/Pending`) VALUES
(1, 'Quasi non necessitat', 'Ex laborum in quidem', '2004-12-26', '20:43', '1692924318_1166c7e8736e92e819f5.png', 'active', 'pending');

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
  `job_salary` varchar(255) DEFAULT NULL,
  `job_email` varchar(255) DEFAULT NULL,
  `job_contacts` varchar(255) DEFAULT NULL,
  `job_website` varchar(255) DEFAULT NULL,
  `job_cover` varchar(255) DEFAULT NULL,
  `Status` enum('active','disabled') DEFAULT 'active',
  `Approved/Pending` enum('approved','pending','reject') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`id`, `job_title`, `job_company`, `job_description`, `job_category`, `job_address`, `job_salary`, `job_email`, `job_contacts`, `job_website`, `job_cover`, `Status`, `Approved/Pending`) VALUES
(2, 'Esse nihil architec', 'Romero Shepherd Plc', 'Molestiae nihil mini', 'part-time', 'Mabalacat', 'Aliquam deserunt dis', 'huzyz@mailinator.com', 'Ut enim cumque ab ut', 'https://www.vocovihumu.me.uk', '1692924025_97ac50e70aa011ed45f8.jpg', 'active', 'pending'),
(3, 'new title', 'Howell Brock Associates', 'Est magna excepturi', 'fulltime', 'Mexico', 'Laboris officiis nih', 'masecun@mailinator.com', 'Voluptatum suscipit ', 'https://www.bezy.ws', '1693129632_3fbc791d2953f9074512.jpeg', 'active', 'pending'),
(4, 'sample', 'Sample Company', 'Nesciunt distinctio fbseiuf ifubsfies fbseyifise fbisf sbfiuesf besfuies fbsieuf sebfiusef bseiu fbuesf', 'part-time', 'Angeles', 'Amet nihil aut ut d', 'ryromusez@mailinator.com', 'Culpa veniam invent', 'https://www.zesibazyku.cc', '1693129959_386385c5761e7e20d275.jpg', 'active', 'pending'),
(5, 'Senior Web DEv', 'Daugherty and Sawyer Plc', 'Blanditiis enim dign', 'intern', 'Lubao', 'Consequat Nostrud n', 'ryfyc@mailinator.com', 'Enim officia qui cup', 'https://www.fibexapic.biz', '1693915653_a14585c65d7820fe6687.jpg', 'active', 'pending'),
(6, 'IT tech', 'Huber and Peters Co', 'Qui id adipisicing o', 'intern', 'San Fernando', 'Sint accusantium su', 'lykomaxunu@mailinator.com', 'Qui ullamco in non n', 'https://www.rahex.cm', '1693915686_83a8aa88739b59f130a8.jpg', 'active', 'pending'),
(7, 'Admin Work', 'Chase Lindsay Plc', 'Amet et eos rerum v', 'full-time', 'Mexico', 'Ex qui eum quasi nis', 'rilawo@mailinator.com', 'Nemo voluptas esse ', 'https://www.rivopup.ca', '1693915710_33aa5cf94965896bb6eb.jpg', 'active', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `news_desc` varchar(255) DEFAULT NULL,
  `news_date` date DEFAULT NULL,
  `news_image` varchar(255) DEFAULT NULL,
  `Status` enum('active','disabled') DEFAULT 'active',
  `Approved/Pending` enum('approved','pending','reject') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `news_title`, `news_desc`, `news_date`, `news_image`, `Status`, `Approved/Pending`) VALUES
(1, 'hahahahha', 'ewewwewewew', '2023-08-08', '1692924231_0ee92d4d8b14026adc94.jpg', 'active', 'approved'),
(2, 'Beauty is not definite', 'We define it!', '2023-09-08', '1692084941_2cecc0af861a4a23fc9e.jpg', 'disabled', 'reject'),
(3, 'edit news express', 'di ko alam san kang galing', '2023-08-02', '1691425799_d781f24d52b5be8a71f9.jpg', 'active', 'pending'),
(4, 'hello', 'everyone', '2023-08-14', '1692019120_c718c60d2ca63b67a051.png', 'active', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `suffix` int(10) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('active','disabled') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `suffix`, `username`, `password`, `status`) VALUES
(3, 'Shouko', 'Komi', NULL, '202011', '$2y$10$DO8Gyaluus0LhSQEUb3HleEX0JVa8F4a55Tff2OJgaLawZjKzqPSa', 'active'),
(4, 'Bruce', 'Wayne', NULL, '202012', '$2y$10$auBNo7XiWn/LXqV1nkHQ6OhoR2qI9XQfox0qcPRUxN4y1yQ5pQ3JW', 'active'),
(6, 'Clark', 'Kent', NULL, '202013', '$2y$10$7TWFcZSxLBela0fGDkIA..20SPaELp4m282jPTKmqTLDqgJxLPZD.', 'active'),
(7, 'Oliver', 'Queen', NULL, '202020', '$2y$10$LmDICMI5pWa90aOQNOzzLexDONJNlPL9poFpPt7PuXSLmT/TqD9wW', 'active'),
(8, 'John', 'Johns', NULL, '202015', '$2y$10$NUbJQqjVhfcRd190MUviNOXVg6jMTMI0yMyT2lHdLSL.rL9gpgMri', 'active'),
(9, 'Russel', 'Tinio', NULL, '202010', '$2y$10$C1lovUzc2Ap1EjQxi4WrWOPXJqCdLGltrEstdHNqBovipsA37jvVu', 'active');

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_fund`
--
ALTER TABLE `tbl_fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
