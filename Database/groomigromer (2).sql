-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 10:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groomigromer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_no` int(255) NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `shop_id` int(100) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `item_time` varchar(100) NOT NULL,
  `item_amount` varchar(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL,
  `user_id` int(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `booking_time` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `date_of_booking` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `otp` varchar(4) NOT NULL,
  `date` varchar(10) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_no`, `booking_id`, `shop_id`, `shop_name`, `items`, `item_time`, `item_amount`, `booking_status`, `user_id`, `user_name`, `booking_date`, `booking_time`, `payment_method`, `payment_status`, `date_of_booking`, `otp`, `date`, `total_price`) VALUES
(1, '81243', 1, 'BARBER BARBI', 'HAIR COLOR', '10', '60', 'Completed', 3, 'e', '2021/05/20', '8:10 AM', 'Cash On Delivery', 'Pending', '2021-05-21 02:25:47', '7553', '2021-05-20', ''),
(2, '44401', 1, 'BARBER BARBI', 'FACING', '10', '60', 'Confirmed', 3, 'e', '2021/05/20', '8:10 AM', 'Cash On Delivery', 'Pending', '2021-05-21 02:32:46', '1472', '2021-05-20', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_renter`
--

CREATE TABLE `booking_renter` (
  `slno` int(100) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `shop_id` int(255) NOT NULL,
  `booking_status` varchar(255) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `booking_time` varchar(255) NOT NULL,
  `otp` varchar(4) NOT NULL,
  `user_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `rating` varchar(255) NOT NULL,
  `cancel_reason` varchar(100) NOT NULL,
  `date_of_b` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_renter`
--

INSERT INTO `booking_renter` (`slno`, `booking_id`, `shop_id`, `booking_status`, `booking_date`, `booking_time`, `otp`, `user_id`, `date`, `rating`, `cancel_reason`, `date_of_b`) VALUES
(1, '81243', 1, 'Completed', '2021/05/20', '8:10 AM', '7553', 3, '2021-05-20', '4.7', '', '2021-05-21 02:25:47'),
(2, '44401', 1, 'Confirmed', '2021/05/20', '8:10 AM', '1472', 3, '2021-05-20', '', '', '2021-05-21 02:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `call_request`
--

CREATE TABLE `call_request` (
  `slno` int(255) NOT NULL,
  `request_call` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `responce` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_request`
--

INSERT INTO `call_request` (`slno`, `request_call`, `phone`, `responce`) VALUES
(1, 'Siliguri', '9134195796', '');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_by_user`
--

CREATE TABLE `cancel_by_user` (
  `cancel_no` int(100) NOT NULL,
  `shop_id` int(100) NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `cancel_request` varchar(100) NOT NULL,
  `other_reason` varchar(10000) NOT NULL,
  `booking_status` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `refund_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel_by_user`
--

INSERT INTO `cancel_by_user` (`cancel_no`, `shop_id`, `booking_id`, `cancel_request`, `other_reason`, `booking_status`, `payment_method`, `refund_amount`) VALUES
(33, 2, '73912', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(34, 1, '55714', 'Not Avalaible At That Time', 'uhihjkiuyi', 'Cancelled', 'Cash On Delivery', '0'),
(35, 1, '55714', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(36, 1, '67577', 'Shop Will Be Closed', '', 'Cancelled', 'Cash On Delivery', '0'),
(37, 1, '67577', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(38, 1, '72097', 'Shop Will Be Closed', 'uiorteuhgudhidsfuhdsguysughdfuoogyfiudhgoiufdy7fdghfdyuodrdrhg879rdgiuo', 'Cancelled', 'Cash On Delivery', '0'),
(39, 1, '72097', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(40, 1, '34018', 'Order By Mistake', '', 'Cancelled', 'Cash On Delivery', '0'),
(41, 1, '34018', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(42, 1, '52251', 'Not Avalaible At That Time', 'gghg', 'Cancelled', 'Cash On Delivery', '0'),
(43, 1, '52251', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(44, 2, '49532', 'Order By Mistake', 'gand marao', 'Cancelled', 'Cash On Delivery', '0'),
(45, 2, '49532', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(46, 1, '56849', 'Order By Mistake', 'jiklhjkl', 'Cancelled', 'Cash On Delivery', '0'),
(47, 1, '56849', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(48, 1, '40675', 'Order By Mistake', '', 'Cancelled', 'Cash On Delivery', '0'),
(49, 1, '40675', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(50, 1, '21807', 'Not Avalaible At That Time', '', 'Cancelled', 'Cash On Delivery', '0'),
(51, 1, '21807', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(52, 2, '59761', 'Shop Will Be Closed', 'v,.sfgsgl;', 'Cancelled', 'Cash On Delivery', '0'),
(53, 2, '59761', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(54, 1, '10704', 'Order By Mistake', '', 'Cancelled', 'Cash On Delivery', '0'),
(55, 1, '10704', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(56, 2, '22771', 'Not Avalaible At That Time', '', 'Cancelled', 'Cash On Delivery', '0'),
(57, 2, '22771', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(58, 1, '39766', 'Order By Mistake', '', 'Cancelled', 'Cash On Delivery', '0'),
(59, 1, '39766', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(60, 1, '72575', 'Order By Mistake', 'no', 'Cancelled', 'Cash On Delivery', '0'),
(61, 1, '72575', 'Order By Mistake', '', 'Cancelled', 'Cash On Delivery', '0'),
(62, 1, '72575', 'Order By Mistake', 'hjj', 'Cancelled', 'Cash On Delivery', '0'),
(63, 1, '72575', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(64, 2, '33356', 'Order By Mistake', '', 'Cancelled', 'Cash On Delivery', '0'),
(65, 2, '33356', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(66, 2, '49301', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(67, 2, '49301', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(68, 2, '83136', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(69, 2, '83136', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(70, 1, '46905', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(71, 1, '46905', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(72, 2, '70487', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(73, 2, '70487', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(74, 2, '38607', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(75, 2, '38607', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(76, 2, '52942', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(77, 2, '52942', '', '', 'Cancelled', 'Cash On Delivery', '0'),
(78, 2, '61581', 'Worker Is Not Available', '', 'Cancelled', 'Cash On Delivery', '0'),
(79, 2, '61581', '', '', 'Cancelled', 'Cash On Delivery', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `item_id` int(100) NOT NULL,
  `shop_id` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` varchar(100) NOT NULL,
  `time_taken` varchar(255) NOT NULL,
  `total_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_code`
--

CREATE TABLE `coupon_code` (
  `coupon_id` int(100) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `trick` varchar(255) NOT NULL,
  `trick2` varchar(255) NOT NULL,
  `trick3` varchar(255) NOT NULL,
  `value` varchar(20) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `starting_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dist_services`
--

CREATE TABLE `dist_services` (
  `id` int(100) NOT NULL,
  `dist_id` varchar(255) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `state_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dist_services`
--

INSERT INTO `dist_services` (`id`, `dist_id`, `dist`, `state_id`) VALUES
(1, 'Alipurduar', 'Alipurduar', '1'),
(2, 'Barobisha', 'Barobisha', '1'),
(3, 'Siliguri', 'Siliguri', '1');

-- --------------------------------------------------------

--
-- Table structure for table `document_of_shop`
--

CREATE TABLE `document_of_shop` (
  `slno` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `id_proof_no` varchar(100) NOT NULL,
  `id_proof_front` varchar(100) NOT NULL,
  `id_proof_back` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `pan_no_front` varchar(100) NOT NULL,
  `pan_no_back` varchar(255) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `ifsc` varchar(200) NOT NULL,
  `account_image` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_of_shop`
--

INSERT INTO `document_of_shop` (`slno`, `user_id`, `phone`, `id_proof_no`, `id_proof_front`, `id_proof_back`, `pan_no`, `pan_no_front`, `pan_no_back`, `account_no`, `ifsc`, `account_image`, `status`) VALUES
(1, 2, '9134195796', '123456789', '', '', '', '', '', '', '', '', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_shop`
--

CREATE TABLE `feedback_shop` (
  `slno` int(100) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `query` varchar(10000) NOT NULL,
  `user_id` int(100) NOT NULL,
  `shop_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_user`
--

CREATE TABLE `feedback_user` (
  `feedback_id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `query` mediumtext NOT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(255) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `item_in_shop` varchar(200) NOT NULL,
  `offers` varchar(300) NOT NULL,
  `price` varchar(60) NOT NULL,
  `time_taken` varchar(200) NOT NULL,
  `verification` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `shop_id`, `user_id`, `item_in_shop`, `offers`, `price`, `time_taken`, `verification`, `status`, `date`) VALUES
(12, 1, 2, 'FACING', '', '60', '10', 'yes', 1, '2021-05-20'),
(13, 1, 2, 'HAIR COLOR', '', '60', '10', 'yes', 1, '2021-05-20'),
(14, 1, 2, 'HAIR STRAIGHT', '', '30', '40', 'yes', 1, '2021-05-20'),
(15, 1, 2, 'SHAVING', '', '20', '20', 'yes', 1, '2021-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `user_id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userphone` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `entry_referal` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `verified` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_reg` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`user_id`, `username`, `userphone`, `useremail`, `password`, `entry_referal`, `user`, `verified`, `date`, `date_of_reg`) VALUES
(1, 'admin123', '6296002855', 'admin@gmail.com', 'admin', '', 'admin', '', '2020-12-11 20:17:16', '2020-12-11'),
(2, 'Rahul Jha', '9134195796', 'rahuljha3246@gmail.com', '1', '', 'shop_user', 'verified', '2021-02-15 11:46:05', '2021-02-15'),
(3, 'e', '734663256456', 'r@gma', '123', '', '', '', '2021-02-16 19:51:54', '2021-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeper_info`
--

CREATE TABLE `shopkeper_info` (
  `slno` int(200) NOT NULL,
  `shop_id` varchar(200) NOT NULL,
  `booking_id` varchar(200) NOT NULL,
  `total_amount` varchar(200) NOT NULL,
  `earn` varchar(200) NOT NULL,
  `comission` varchar(200) NOT NULL,
  `date_of_booking` varchar(200) NOT NULL,
  `time_of_booking` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `offers_applied` varchar(255) NOT NULL,
  `date_of_entery` datetime NOT NULL,
  `to_coustmer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopkeper_info`
--

INSERT INTO `shopkeper_info` (`slno`, `shop_id`, `booking_id`, `total_amount`, `earn`, `comission`, `date_of_booking`, `time_of_booking`, `status`, `offers_applied`, `date_of_entery`, `to_coustmer`) VALUES
(1, '1', '81243', '60', '54', '6', '2021/05/20', '8:10 AM', 'Pending', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `category_shop` varchar(255) NOT NULL,
  `shop_state` varchar(255) NOT NULL,
  `shop_dist` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `shop_pin` varchar(100) NOT NULL,
  `chairs_no` varchar(200) NOT NULL,
  `workers_no` varchar(255) NOT NULL,
  `img_1` varchar(200) NOT NULL,
  `img_2` varchar(200) NOT NULL,
  `img_3` varchar(200) NOT NULL,
  `img_4` varchar(200) NOT NULL,
  `shop_desp` varchar(500) NOT NULL,
  `shop_status` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_reg` date NOT NULL,
  `reg_id` varchar(255) NOT NULL,
  `opening_time` varchar(61) NOT NULL,
  `closing_time` varchar(61) NOT NULL,
  `base_price` varchar(100) NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `amenities1` varchar(255) NOT NULL,
  `amenities2` varchar(255) NOT NULL,
  `amenities3` varchar(255) NOT NULL,
  `amenities4` varchar(255) NOT NULL,
  `day1` varchar(200) NOT NULL,
  `day2` varchar(200) NOT NULL,
  `day3` varchar(200) NOT NULL,
  `day4` varchar(200) NOT NULL,
  `day5` varchar(200) NOT NULL,
  `day6` varchar(200) NOT NULL,
  `day7` varchar(200) NOT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `user_id`, `shop_name`, `email`, `phone`, `owner_name`, `category_shop`, `shop_state`, `shop_dist`, `dist`, `shop_pin`, `chairs_no`, `workers_no`, `img_1`, `img_2`, `img_3`, `img_4`, `shop_desp`, `shop_status`, `date`, `date_of_reg`, `reg_id`, `opening_time`, `closing_time`, `base_price`, `amenities`, `amenities1`, `amenities2`, `amenities3`, `amenities4`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `rating`) VALUES
(1, 2, 'BARBER BARBI', 'rahuljha3246@gmail.com', '9134195796', 'Rahul Jha', 'Male', '1', 'Darjelling', 'Siliguri', '734001', '5', '5', 'IMG-20200902-WA0004 (4).jpg', '', '', '', 'GOOD SHOPS', 'on', '2021-05-21 02:15:02', '2021-05-20', 'GGERUDGD4569825', '10:00AM', '10:00PM', '30', 'wifi', 'telivision', 'car', 'music', 'ac', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', '4.7');

-- --------------------------------------------------------

--
-- Table structure for table `shops_time`
--

CREATE TABLE `shops_time` (
  `slno` int(250) NOT NULL,
  `shop_id` int(250) NOT NULL,
  `opening_days1` varchar(200) NOT NULL,
  `opening_days2` varchar(220) NOT NULL,
  `opening_days3` varchar(20) NOT NULL,
  `opening_days4` varchar(20) NOT NULL,
  `opening_days5` varchar(20) NOT NULL,
  `opening_days6` varchar(20) NOT NULL,
  `opening_days7` varchar(20) NOT NULL,
  `opening_time1` varchar(200) NOT NULL,
  `opening_time2` varchar(100) NOT NULL,
  `opening_time3` varchar(100) NOT NULL,
  `opening_time4` varchar(100) NOT NULL,
  `opening_time5` varchar(100) NOT NULL,
  `opening_time6` varchar(100) NOT NULL,
  `opening_time7` varchar(100) NOT NULL,
  `closing_time1` varchar(200) NOT NULL,
  `closing_time2` varchar(100) NOT NULL,
  `closing_time3` varchar(100) NOT NULL,
  `closing_time4` varchar(100) NOT NULL,
  `closing_time5` varchar(100) NOT NULL,
  `closing_time6` varchar(100) NOT NULL,
  `closing_time7` varchar(100) NOT NULL,
  `closed_shop` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops_time`
--

INSERT INTO `shops_time` (`slno`, `shop_id`, `opening_days1`, `opening_days2`, `opening_days3`, `opening_days4`, `opening_days5`, `opening_days6`, `opening_days7`, `opening_time1`, `opening_time2`, `opening_time3`, `opening_time4`, `opening_time5`, `opening_time6`, `opening_time7`, `closing_time1`, `closing_time2`, `closing_time3`, `closing_time4`, `closing_time5`, `closing_time6`, `closing_time7`, `closed_shop`) VALUES
(1, 1, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Closed', '08:00AM', '08:00AM', '08:00AM', '08:00AM', '08:00AM', '08:00AM', 'Closed', '08:00PM', '08:00PM', '08:00PM', '08:00PM', '08:00PM', '08:00PM', 'Sunday'),
(2, 2, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', '09:00AM', '09:00AM', 'Closed', '09:00AM', '09:00AM', '09:00AM', '09:00AM', '09:00PM', '09:00PM', 'Closed', '09:00PM', '09:00PM', '09:00PM', '09:00PM', 'Tuesday'),
(3, 3, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', '10:00AM', '10:00AM', '10:00AM', '10:00AM', 'Closed', '10:00AM', '10:00AM', '10:00PM', '	10:00PM', '	10:00PM', '	10:00PM', 'Closed', '	10:00PM', '	10:00PM', 'Thursday'),
(7, 11, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', '08:00AM', '08:00AM', '08:00AM', '08:00AM', '08:00AM', '08:00AM', 'Closed Shop', '08:00PM', '08:00PM', '08:00PM', '08:00PM', '08:00PM', '08:00PM', 'Closed Shop', 'Saturday'),
(8, 12, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 12, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 12, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 16, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 1, 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', '08:00AM', '08:00AM', '08:00AM', 'Closed Shop', '11:00AM', '10:00AM', '11:00AM', '07:00PM', '06:00PM', '06:00PM', 'Closed Shop', '11:00PM', '10:00PM', '10:00PM', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `state_services`
--

CREATE TABLE `state_services` (
  `state_id` int(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_services`
--

INSERT INTO `state_services` (`state_id`, `state`) VALUES
(1, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `time_date_of_booking`
--

CREATE TABLE `time_date_of_booking` (
  `slno` int(255) NOT NULL,
  `time` varchar(60) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_date_of_booking`
--

INSERT INTO `time_date_of_booking` (`slno`, `time`, `date`) VALUES
(86, '', '2020/12/23'),
(87, '', '2020/12/24'),
(88, '10:10AM', '2020/12/25'),
(89, '08:10 PM', '2020/12/23'),
(90, '08:10 PM', '2020/12/23'),
(91, '08:30AM', '2020/12/24'),
(92, '08:10AM', '2020/12/24'),
(93, '08:20AM', '2020/12/24'),
(94, '08:40AM', '2020/12/24'),
(95, '08:40AM', '2020/12/25'),
(96, '08:10AM', '2020/12/26'),
(97, '08:00AM', '2021/01/04'),
(98, '08:00AM', '2021/01/08'),
(99, '08:00AM', '2020/12/24'),
(100, '08:00AM', '2020/12/24'),
(101, '08:00AM', '2020/12/24'),
(102, '08:00AM', '2020/12/24'),
(103, '08:00AM', '2020/12/24'),
(104, '08:10AM', '2020/12/25'),
(105, '10:10AM', '2020/12/25'),
(106, '08:10 PM', '2020/12/25'),
(107, '08:10 PM', '2020/12/25'),
(108, '08:10 PM', '2020/12/25'),
(109, '08:10 PM', '2020/12/25'),
(110, '08:10 PM', '2020/12/25'),
(111, '08:10 PM', '2020/12/25'),
(112, '08:10 PM', '2020/12/25'),
(113, '08:10 PM', '2020/12/25'),
(114, '08:10 PM', '2020/12/25'),
(115, '10:10AM', '2020/12/26'),
(116, '08:10 PM', '2020/12/26'),
(117, '10:10AM', '2020/12/26'),
(118, '08:10 PM', '2020/12/26'),
(119, '08:10 PM', '2020/12/26'),
(120, '10:10AM', '2020/12/26'),
(121, '10:10AM', '2020/12/28'),
(122, '08:10 PM', '2020/12/28'),
(123, '08:10 PM', '2020/12/29'),
(124, '08:10 PM', '2020/12/28'),
(125, '10:10AM', '2020/12/29'),
(126, '08:10 PM', '2020/12/29'),
(127, '08:10 PM', '2020/12/28'),
(128, '08:10 PM', '2020/12/29'),
(129, '10:10AM', '2020/12/29'),
(130, '08:10 PM', '2020/12/30'),
(131, '08:10 PM', '2020/12/29'),
(132, '08:10 PM', '2020/12/30'),
(133, '08:10 PM', '2020/12/29'),
(134, '08:10 PM', '2020/12/30'),
(135, '08:10 PM', '2020/12/30'),
(136, '', '2021/01/01'),
(137, '', '2021/01/02'),
(138, '11:50PM', '2021/01/02'),
(139, '', '2021/01/11'),
(140, '11:50PM', '2021/01/15'),
(141, '11:40AM', '2021/01/18'),
(142, '11:40AM', '2021/01/18'),
(143, '11:50PM', '2021/01/18'),
(144, '11:50PM', '2021/01/18'),
(145, '10:00AM', '2021/01/18'),
(146, '8:15 AM', '2021/01/22'),
(147, '8:15 AM', '2021/01/22'),
(148, '8:15 AM', '2021/01/22'),
(149, '8:15 AM', '2021/01/22'),
(150, '8:15 AM', '2021/01/22'),
(151, '8:15 AM', '2021/01/22'),
(152, '8:15 AM', '2021/01/22'),
(153, '8:15 AM', '2021/01/22'),
(154, '', '2021/01/24'),
(155, '', '2021/01/24'),
(156, '8:15 AM', '2021/02/05'),
(157, '8:15 AM', '2021/02/04'),
(158, '8:15 AM', '2021/02/04'),
(159, '11:00AM', '2021/02/05'),
(160, '11:00AM', '2021/02/05'),
(161, '11:00AM', '2021/02/05'),
(162, '11:00AM', '2021/02/05'),
(163, '11:20AM', '2021/02/05'),
(164, '11:20AM', '2021/02/05'),
(165, '11:20AM', '2021/02/05'),
(166, '11:20AM', '2021/02/05'),
(167, '11:20AM', '2021/02/05'),
(168, '11:20AM', '2021/02/05'),
(169, '11:20AM', '2021/02/05'),
(170, '11:20AM', '2021/02/05'),
(171, '11:20AM', '2021/02/05'),
(172, '11:20AM', '2021/02/05'),
(173, '11:20AM', '2021/02/05'),
(174, '11:20AM', '2021/02/05'),
(175, '11:20AM', '2021/02/08'),
(176, '11:20AM', '2021/02/08'),
(177, '11:20AM', '2021/02/08'),
(178, '11:20AM', '2021/02/08'),
(179, '11:20AM', '2021/02/08'),
(180, '11:20AM', '2021/02/08'),
(181, '11:20AM', '2021/02/08'),
(182, '11:20AM', '2021/02/08'),
(183, '11:20AM', '2021/02/08'),
(184, '11:20AM', '2021/02/08'),
(185, '11:20AM', '2021/02/08'),
(186, '11:20AM', '2021/02/08'),
(187, '11:20AM', '2021/02/10'),
(188, '11:20AM', '2021/02/10'),
(189, '', '2021/02/09'),
(190, '', '2021/02/10'),
(191, '8:10 AM', '2021/05/20'),
(192, '8:10 AM', '2021/05/20');

-- --------------------------------------------------------

--
-- Table structure for table `time_managem`
--

CREATE TABLE `time_managem` (
  `slno` int(255) NOT NULL,
  `total_time` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `shop_id` int(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `no_of_chairs` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_managem`
--

INSERT INTO `time_managem` (`slno`, `total_time`, `time`, `shop_id`, `status`, `date`, `no_of_chairs`) VALUES
(1, '20', '8:10 AM', 1, '', '', 3),
(2, '10', '8:10 AM', 1, '', '', 3),
(3, '30', '8:10 AM', 1, '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_integration`
--

CREATE TABLE `wallet_integration` (
  `slno` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `wallet_money` varchar(255) NOT NULL,
  `date_of_entry` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet_integration`
--

INSERT INTO `wallet_integration` (`slno`, `user_id`, `wallet_money`, `date_of_entry`, `date`) VALUES
(1, 2, '50', '2021-02-15 11:46:05', '2021-02-15'),
(2, 3, '50', '2021-02-16 19:51:55', '2021-02-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_no`);

--
-- Indexes for table `booking_renter`
--
ALTER TABLE `booking_renter`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `call_request`
--
ALTER TABLE `call_request`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `cancel_by_user`
--
ALTER TABLE `cancel_by_user`
  ADD PRIMARY KEY (`cancel_no`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `coupon_code`
--
ALTER TABLE `coupon_code`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `dist_services`
--
ALTER TABLE `dist_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_of_shop`
--
ALTER TABLE `document_of_shop`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `feedback_shop`
--
ALTER TABLE `feedback_shop`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `feedback_user`
--
ALTER TABLE `feedback_user`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `userphone` (`userphone`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- Indexes for table `shopkeper_info`
--
ALTER TABLE `shopkeper_info`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `shops_time`
--
ALTER TABLE `shops_time`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `state_services`
--
ALTER TABLE `state_services`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `time_date_of_booking`
--
ALTER TABLE `time_date_of_booking`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `time_managem`
--
ALTER TABLE `time_managem`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `wallet_integration`
--
ALTER TABLE `wallet_integration`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `booking_renter`
--
ALTER TABLE `booking_renter`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `call_request`
--
ALTER TABLE `call_request`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cancel_by_user`
--
ALTER TABLE `cancel_by_user`
  MODIFY `cancel_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupon_code`
--
ALTER TABLE `coupon_code`
  MODIFY `coupon_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dist_services`
--
ALTER TABLE `dist_services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `document_of_shop`
--
ALTER TABLE `document_of_shop`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback_shop`
--
ALTER TABLE `feedback_shop`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback_user`
--
ALTER TABLE `feedback_user`
  MODIFY `feedback_id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shopkeper_info`
--
ALTER TABLE `shopkeper_info`
  MODIFY `slno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shops_time`
--
ALTER TABLE `shops_time`
  MODIFY `slno` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `state_services`
--
ALTER TABLE `state_services`
  MODIFY `state_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `time_date_of_booking`
--
ALTER TABLE `time_date_of_booking`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `time_managem`
--
ALTER TABLE `time_managem`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wallet_integration`
--
ALTER TABLE `wallet_integration`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
