-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 12:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mishtidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `short_desc` varchar(250) NOT NULL,
  `long_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `short_desc`, `long_desc`) VALUES
(1, 'انواع چلو ها', 'چلو برنج غذایی است که از برنج تهیه می‌شود و با کباب یا خورش خورده می‌شود. در چلو برنج خالص با روغن یا کره پخته می‌شود. تفاوت آن با پلو در این است که در چلو، برنج به تنهایی و بدون مخلوط شدن با مواد دیگری پخت می‌شود.', 'در این بخش چلوهایی که در رستوران سرو میشوند مشاهده خواهید کرد. برای مشاهده غذاها روی عنوان کلیک کنید.'),
(2, 'خورشت ایرانی', 'خورش در آشپزی ایرانی کاربرد فراوان دارد و معمولاً خورش با نان یا برنج ساده، که ممکن است به صورت پلو یا کته تهیه شده باشد، خورده می‌شود. خورش‌های ایرانی ترکیبی از گوشت، سبزیجات خشک یا تازه و حبوباتی چون عدس و لوبیا هستند.', 'در این بخش خورشت های ایرانی که در رستوران سرو میشوند مشاهده خواهید کرد. برای مشاهده غذاها روی عنوان کلیک کنید.'),
(3, 'غذاهای آذربایجانی', 'غذاهای سنتی کشور آذربایجان نه تنها کم نیستند بلکه هم خوشمزه‌اند و هم با بیشتر غذاهای ما ایرانی ها مشترک هستند. بیشتر این غذاها را در ایران نیز میتوان یافت. این غذاها قدمت بالایی دارند و در بخش های مختلف ایران به روش‌های مختلف پخته میشوند.', 'در این بخش غذاهای آذربایجانی که در رستوران سرو میشوند مشاهده خواهید کرد. برای مشاهده غذاها روی عنوان کلیک کنید.'),
(4, 'غذاهای ژاپنی', 'غذاهای ژاپنی غذاهایی هستند که مواد مورد استفاده در آن، از حوزهٔ کشور ژاپن تهیه شده و در اصل در این کشور ایجاد و رواج پیدا کرده‌است. بیشتر غذاهای دریایی و غذاهای تهیه شده از برنج و سبزیجات متعلق به ژاپن هستند.', 'در این بخش غذاهای ژاپنی که در رستوران سرو میشوند مشاهده خواهید کرد. برای مشاهده غذاها روی عنوان کلیک کنید.');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `cat_id`, `fname`, `description`) VALUES
(1, 1, 'چلو ماهیچه', 'چلو ماهیچه یکی از غذا‌های اصیل ایرانی خاصه مهمانی‌ها و مناسبت‌های ویژه می‌باشد. این غذای خوشمزه و اصیل ایرانی به دلیل طعم خاص و فوق العاده و مواد اولیه بسیار عالی در تهیه آن طرفداران بسیاری نیز دارد.'),
(2, 1, 'چلو کباب', 'این غذا در همۀ مراسم و در هر سفره ایرانی سرو می‌شود. ظاهر نوستالژیک و طعم فوق العاده چلو کباب کوبیده مخصوص باعث شده است تا به غذایی ملی تبدیل شود.'),
(3, 1, 'چلو جوجه', 'چلو جوجه کباب جزء غذاهای سنتی و ایرانی بوده و در کشور ما اغلب با زعفران و کره و پلو آماده شده و از غذاهایی هست که طرفدار زیادی دارد. روش متفاوت در مزه‌دار کردن یا مرینیت جوجه‌ها است که باعث تفاوت در مزه جوجه کباب رستورانی و خانگی می شود.'),
(4, 2, 'قورمه سبزی', 'خورش قورمه سبزی یکی از غذاهای سنتی و اصیل ایرانی است که قدمت بسیار زیادی دارد. قورمه سبزی نه تنها در میان ایرانیان بسیار محبوب است بلکه در خارج از ایران هم طرفداران بسیاری دارد.'),
(5, 3, 'آبگوشت دیزی', 'آبگوشت که با نام دیزی هم شناخته می شود یکی از غذاهای معروف و سنتی ایرانیان است. این غذای خوشمزه یکی از پر طرفدارترین غذاهای ایرانی است که با دستورهای متنوعی تهیه می شود.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `food_id` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `timestamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `food_id`, `user_name`, `timestamp`) VALUES
(1, 'RSTGF231465', '1', '2', 'امین', '29:06:2022 01:30:01pm'),
(2, 'RSTGF658525', '1', '4', 'امین', '29:06:2022 01:30:09pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `timestamp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `timestamp`) VALUES
(1, 'امین', 'amin@gmail.com', '12345', '29:06:2022 01:29:31pm'),
(2, 'یاشار', 'yashar@gmail.com', '12345', '29:06:2022 01:52:23pm'),
(3, 'زهرا', 'zahra@yahoo.com', '12345', '29:06:2022 03:53:49pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
