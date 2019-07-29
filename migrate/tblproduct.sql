-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 08:28 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rootsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `prod_no` int(10) NOT NULL,
  `prod_id` int(15) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_descr` text NOT NULL,
  `prod_cat` varchar(100) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_quan` int(10) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`prod_no`, `prod_id`, `prod_name`, `prod_descr`, `prod_cat`, `prod_price`, `prod_quan`, `date_added`) VALUES
(1, 111, 'Brazil Plato Azul Farm', 'The Plato Azul Farm was established in the 1990\'s in Cerrado Mineiro, a property with a suitable regime of rains, absence of frost, and with the latitude and longitude appropriate for the cultivation of coffee.', 'Whole Bean', 50, 50, '2019-07-14 00:28:15');
INSERT INTO `tblproduct` (`prod_no`, `prod_id`, `prod_name`, `prod_descr`, `prod_cat`, `prod_price`, `prod_quan`, `date_added`) VALUES
(2, 112, 'Daybreak', 'Sunshine in your mouth! Daybreak starts your day on the right track, or kick-starts your afternoon with its tangy citrus and floral notes. A blend of coffees from the Americas and East Africa, Daybreak is roasted to a lovely chocolate brown on the lighter end of our roasting spectrum. This highlights its unassuming and cheerful sweetness and balanced nutty finish.', 'Percolator', 40, 50, '2019-07-14 00:28:15');
INSERT INTO `tblproduct` (`prod_no`, `prod_id`, `prod_name`, `prod_descr`, `prod_cat`, `prod_price`, `prod_quan`, `date_added`) VALUES
(3, 113, 'Lakeshore', 'Lakeshore Blend is a light-roast blend of coffees from Guatemala, El Salvador and coffees from East Africa. Featuring a washed Ethiopian coffee, Lakeshore Blend is smooth and fresh, featuring delicate citrus notes and a silky body. ', 'Gold Filter', 40, 50, '2019-07-14 00:28:15');
INSERT INTO `tblproduct` (`prod_no`, `prod_id`, `prod_name`, `prod_descr`, `prod_cat`, `prod_price`, `prod_quan`, `date_added`) VALUES
(4, 114, 'Caribou', 'The secret of this blend\'s relaxed complexity is the rich, hearty Indonesian bean. It has woodsy, spicy notes that balance the bright acidity and lively fruit tones of Central and South American varieties. ', 'French Press', 35, 50, '2019-07-14 00:28:15');
INSERT INTO `tblproduct` (`prod_no`, `prod_id`, `prod_name`, `prod_descr`, `prod_cat`, `prod_price`, `prod_quan`, `date_added`) VALUES
(5, 115, 'Sumatra Lintong', 'Sumatra Lintong has an earthy mineral body warmed by flavors of pure vanilla and brown butter. Small batch roasted and hand crafted 100% Arabica beans. Certified Kosher Parve', 'Espresso', 50, 50, '2019-07-14 00:28:15');
INSERT INTO `tblproduct` (`prod_no`, `prod_id`, `prod_name`, `prod_descr`, `prod_cat`, `prod_price`, `prod_quan`, `date_added`) VALUES
(6, 116, 'Vanilla and Hazelnut Dreamstate', 'Smooth and creamy, subtle sweetness, medium body, mild acidity, deep and nutty aroma. Hints of vanilla (sweet/creamy) and hazelnut (toasty/nut) will have you reaching for a second or maybe even a third cup, enjoy!.', 'Paper Filter', 30, 50, '2019-07-14 00:28:15');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`prod_no`),
  ADD UNIQUE KEY `prod_id` (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `prod_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
