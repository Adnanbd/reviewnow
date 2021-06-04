-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 04:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `review_id` int(11) NOT NULL,
  `book_name` varchar(1000) NOT NULL,
  `book_category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`review_id`, `book_name`, `book_category`) VALUES
(3, 'ঘরে বসে স্পোকেন ইংলিশ', 'Others'),
(9, 'বিবাহ-পাঠ', 'Others'),
(14, 'ঘরে বসে স্পোকেন ইংলিশ MIRAZ', 'Childrens');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `review_id` int(11) NOT NULL,
  `food_name` varchar(1000) NOT NULL,
  `food_category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`review_id`, `food_name`, `food_category`) VALUES
(1, 'Boma Burger', 'Burger'),
(2, 'Kacchi', 'Kacchi'),
(8, 'Italian Pasta', 'Pasta'),
(10, 'Pizza XXX', 'Biriyani'),
(17, 'Lacchi Edited', 'Doi'),
(19, 'Chicken Cheese Burger', 'Burger'),
(20, 'Mighty Mashroom Beef Burger', 'Burger'),
(21, 'Chicken & Bacon House Burger', 'Burger');

-- --------------------------------------------------------

--
-- Table structure for table `like_dislike`
--

CREATE TABLE `like_dislike` (
  `user_email` varchar(500) NOT NULL,
  `post_id` varchar(500) NOT NULL,
  `clike` tinyint(1) DEFAULT NULL,
  `cdislike` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_dislike`
--

INSERT INTO `like_dislike` (`user_email`, `post_id`, `clike`, `cdislike`) VALUES
('mfaruk@gmail.com', '19', 0, 1),
('mfaruk@gmail.com', '20', 0, 1),
('mfaruk@gmail.com', '21', 0, 1),
('mfaruk@gmail.com', '17', 1, 0),
('mfaruk@gmail.com', '6', 0, 1),
('mfaruk@gmail.com', '14', 1, 0),
('mfaruk@gmail.com', '10', 0, 1),
('mfaruk@gmail.com', '9', 0, 1),
('mfaruk@gmail.com', '8', 0, 1),
('mfaruk@gmail.com', '7', 0, 1),
('check@gmail.com', '21', 1, 0),
('check@gmail.com', '20', 1, 0),
('check@gmail.com', '19', 1, 0),
('check@gmail.com', '17', 1, 0),
('check@gmail.com', '14', 1, 0),
('check@gmail.com', '10', 0, 1),
('check@gmail.com', '9', 0, 1),
('check@gmail.com', '8', 0, 1),
('check@gmail.com', '7', 0, 1),
('check@gmail.com', '6', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `review_id` int(11) NOT NULL,
  `movie_name` varchar(1000) NOT NULL,
  `movie_category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`review_id`, `movie_name`, `movie_category`) VALUES
(4, 'Moana', 'Science fiction'),
(5, 'asasasa', 'Political'),
(6, 'Moana', 'Fantasy'),
(7, 'Man of Steel', 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(10) NOT NULL,
  `rating` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `location` varchar(100) NOT NULL,
  `detail_location` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `like_count` int(11) NOT NULL DEFAULT 10,
  `dislike_count` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `rating`, `price`, `description`, `location`, `detail_location`, `images`, `email_id`, `like_count`, `dislike_count`) VALUES
(1, 4, 900, 'Jossss', 'Banani', 'Boma Queen', '1200px-RedDot_Burger.jpg', NULL, 10, 5),
(2, 1, 240, 'সুলতান ডাইন এর ফ্যান ছিলাম \r\nগুলশানের টায় যাওয়ার পর আর না যাওয়ার নিয়্যাত নিলাম😓\r\nএখন কি সব ব্রাঞ্চের ই এই অবস্থা নাকি শুধু গুলশানের টা ই এইরকম।\r\nকাচ্চি তো আগের মতো নাই ই বোরহানীও সেম।\r\nখেয়ে মনে হলো রোদে শুখানো কাচ্চি আর বোরহানির যা অবস্থা তার থেকে রাস্তার পাশের দোকান গুলার বোরহানি যথেষ্ট ভালো।', 'Gulshan', 'Sultans Dine, Gulshan 2', 'kacchiii.jpg', NULL, 10, 5),
(3, 5, 225, 'লকডাউন শুরু হতেই পড়াশোনা পুরোপুরি অনলাইন ভিত্তিক হয়ে যায়৷ অনেক বিষয়ে প্রেজেন্টেশনও দেয়া লাগত এবং অবশ্যই তা ইংরেজিতে৷ প্রথম প্রথম অনেক সমস্যা হতো। ভুলে যেতাম, কিছু একটা বলার পর মনে হয় ভুল বললাম কিনা। অনেক আগে থেকেই মুনজেরিন আপুকে ফলো করি। সেখান থেকে আপুর কোর্সটিও করে ফেলি। আগের থেকে স্পোকেন ইংলিশে দক্ষতা বেড়েছে৷ তারপর হাতে পাই মুনজেরিন আপুর বইটি। এখানে প্রেজেন্টেশন দেয়ার দারুণ কিছু ট্রিকসও আয়ত্তে আনি। আশা করি ভবিষ্যতের দিনগুলোতে এগুলো অনেক সাহায্য করবে! \r\n                                   ', 'Hazaribagh', 'Rokomari.com', 'spoken_english_by_munzerin.jpg', NULL, 10, 5),
(4, 2, 0, 'hi', '', NULL, 'unnamed.jpg', NULL, 10, 5),
(5, 3, 0, 'asasasas', '', NULL, 'rs-27709-20130611-superman-x624-1370963561.jpg', NULL, 10, 5),
(6, 5, 0, 'I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  I Really LOVE this.  ', '', NULL, 'unnamed.jpg', NULL, 10, 7),
(7, 5, 0, 'Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.Just Love it.', '', NULL, 'rs-27709-20130611-superman-x624-1370963561.jpg', NULL, 10, 7),
(8, 4, 550, 'Stumbled upon this place with my daughter and it would have to be one of the best Italian restaurants I have been to I thought it to be better than some of the Italian restaurants in Italy.\r\n\r\nWe were there early than opening hours but they welcomed us with gusto.\r\nI have already rebooked for a special occasion in the next week.\r\nWe had a bianco pizza to share and gnocchi with gorgonzola cheese we had too much left over and taking it home was not a hassle.\r\n', 'Badda', 'Visto Cafe', 'tomato-goat-cheese-pasta-recipe-1-500x500.jpg', NULL, 10, 7),
(9, 3, 180, 'আরেকটা মাস্টারপিস আসতে যাচ্ছে। যারা বিয়ে করবেন তাদের জন্য পড়া বেশি প্রয়োজন 😇\r\n                                   ', 'Banglamotor', 'Rokomari.com', '7b47733e8_210198.jpg', NULL, 10, 7),
(10, 3, 7000, 'Pizza Guy is at the top of their game right now, with good reason! almost all of their pizzas are absolutely fantastic! The decor of the restaurant is nice too. They have ambient lighting, ample seating, and an overall calm atmosphere! XXX', 'Dhanmondi', 'Pizza Guy XXX', 'pepperoni-pizza.jpg', 'mfaruk@gmail.com', 10, 7),
(14, 5, 4000, 'Bhalo Chilo.sdasdasd asss', 'Uttara', 'Rokomari.com', '15br-theflash-screenshot-newsheader-1920x1080-0e77cc2ff454.jpg', 'mfaruk@gmail.com', 12, 5),
(17, 5, 40, 'Valo Mama', 'Khilgaon', 'Sultans Dine, Gulshan 2', 'wv8.jpg', 'opuopu19@gmail.com', 12, 5),
(19, 4, 179, 'সবকিছু মিলিয়ে স্বাদে মোটামুটি ভালোই', 'Mirpur', 'Khanas Mirpur', '186281266_434099264329515_8502707206477565479_n.jpg', 'opuopu19@gmail.com', 11, 6),
(20, 5, 280, 'ডিলাক্স ব্রায়োচে বান, গরুর মাংসের প্যাটি, ক্যারামেলাইজড মাশরুম, বাসায় মেয়ো এবং বার্গার সস, পনির স্লাইস, টমেটো, পেঁয়াজ এবং জালাপেনো ।', 'Mirpur', 'Griddle', '175688920_281884446763426_9093840889604659400_n.jpg', 'opuopu19@gmail.com', 11, 6),
(21, 2, 320, 'একটি নয় দুটি নয় তিন তিনটে পেটি এই বার্গারে।\r\nসাথে নিয়েছে ডাবল চিজ।আর তাদের স্পেশাল সস।আর সাথে পেয়েছি পিয়াজ এবং টমেটো।একটি জিনিস খুব ভালো লেগেছে তাদের বার্গারের বানটা বেশ সফট।', 'Mirpur', 'Burger Xpress Mirpur', '182790569_2908335672815705_2700329281061488898_n.jpg', 'opuopu19@gmail.com', 11, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email_id`, `password`, `first_name`, `last_name`, `phone_no`, `date_of_birth`, `address`) VALUES
('aponkhan@gmail.com', 'abc123', 'Md. Arafath ', 'Khan', 1789023416, '1998-01-06', '51/B, Golap Mor, Ashuganj, Brahmanbaria'),
('opuopu19@gmail.com', 'Iamnobody123', 'Md. Shoeb', 'Adnan', 1748214521, '1999-08-13', 'Nadda, Aziz Road'),
('check@gmail.com', '123456', 'Roysa', 'Khan', 156161, '2021-03-06', 'Puran Dhaka'),
('sadadsadsa@g.b', '123', 'adsd', 'sdasda', 31231, '2021-03-11', '12312'),
('mfaruk@gmail.com', '1234', 'Miraz', 'Faruk', 8801748214521, '2021-03-25', 'Khulna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
