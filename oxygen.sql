-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2019 at 10:18 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oxygen`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `pro_qnt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `pro_qnt`) VALUES
(16, '::1', '3', '1'),
(17, '', '3', '1'),
(18, '', '6', '1'),
(19, 'test', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `em` varchar(100) NOT NULL,
  `no` varchar(20) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nm`, `em`, `no`, `msg`) VALUES
(2, 'tabish', 'tabishadnan9@gmail.com', '7549006979', 'test'),
(3, 'parijat kumar', 'parijatkr@gmail.com', '950769482', 'please contact i got damaged plant');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `cust_id` varchar(200) NOT NULL,
  `invoice` varchar(200) NOT NULL,
  `p_id` varchar(200) NOT NULL,
  `p_nm` varchar(500) NOT NULL,
  `quan` int(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `mrp` varchar(200) NOT NULL,
  `cprice` varchar(200) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `cust_id`, `invoice`, `p_id`, `p_nm`, `quan`, `amount`, `price`, `mrp`, `cprice`, `cat`) VALUES
(2677, '96c51027aef6b62cbf36d573c4e34e53', 'OD_b607ba543ad05417b8507ee86c54fcb7', '8', 'Arjuna Tree', 3, '15000', '5000', '7000', '3000', 'tree'),
(2678, '96c51027aef6b62cbf36d573c4e34e53', 'OD_e69cf84ed41fbe71985972c027190b49', '4', 'Indian Basil', 2, '10000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2679, '96c51027aef6b62cbf36d573c4e34e53', 'OD_e69cf84ed41fbe71985972c027190b49', '3', ' English Ivy', 1, '5000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2680, 'a833b91802b810f0db081d7d01c1ea2b', 'OD_68a64c1e5639454c3185e7ea2db9fc48', '3', ' English Ivy', 1, '5000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2681, 'a833b91802b810f0db081d7d01c1ea2b', 'OD_68a64c1e5639454c3185e7ea2db9fc48', '6', 'Peepal Tree', 1, '5000', '5000', '7000', '3000', 'tree'),
(2682, '312f04f99be9e857bfb2c033eeb1d3e2', 'OD_738a4e9422a11adbfda260ebac56783f', '8', 'Arjuna Tree', 1, '5000', '5000', '7000', '3000', 'tree'),
(2683, '664fae06a748e656511d55b59fc6f85e', 'OD_8a25a2a9c738ebd76043481a457b62a0', '4', 'Indian Basil', 1, '5000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2684, '664fae06a748e656511d55b59fc6f85e', 'OD_8a25a2a9c738ebd76043481a457b62a0', '7', 'Neem Tree', 1, '5000', '5000', '7000', '3000', 'tree'),
(2685, '664fae06a748e656511d55b59fc6f85e', 'OD_2c2dc47463ad7f389023f2b0fe1058cf', '8', 'Arjuna Tree', 1, '5000', '5000', '7000', '3000', 'tree'),
(2686, '6618cb0cb41637acc0fb302290763c8a', 'OD_06563f3b418fe57f8fc331872343ce44', '4', 'Indian Basil', 1, '5000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2687, '96c51027aef6b62cbf36d573c4e34e53', 'OD_0765300372d04032ca2d6d8b4ae35e63', '3', 'Lady Palm', 2, '10000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2688, '96c51027aef6b62cbf36d573c4e34e53', 'OD_0765300372d04032ca2d6d8b4ae35e63', '8', 'Arjuna Tree', 2, '10000', '5000', '7000', '3000', 'tree'),
(2689, '96c51027aef6b62cbf36d573c4e34e53', 'OD_0765300372d04032ca2d6d8b4ae35e63', '4', 'Mother in Law Tongue', 2, '10000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2690, '96c51027aef6b62cbf36d573c4e34e53', 'OD_a2d436321f525baeeb4021f7c9f3047d', '2', 'Dracaena Janet Craig', 1, '5000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2691, '96c51027aef6b62cbf36d573c4e34e53', 'OD_30d4e6422cd65c7913bc9ce62e078b79', '4', 'Mother in Law Tongue', 1, '5000', '5000', '7000', '3000', 'HOUSEHOLD'),
(2692, '96c51027aef6b62cbf36d573c4e34e53', 'OD_375c71349b295fbe2dcdca9206f20a06', '7', 'Neem Tree', 1, '5000', '5000', '7000', '3000', 'tree'),
(2693, '96c51027aef6b62cbf36d573c4e34e53', 'OD_5ddfed3d0746748d8c4add3547a80ac5', '8', 'Arjuna Tree', 1, '5000', '5000', '7000', '3000', 'tree'),
(2694, '96c51027aef6b62cbf36d573c4e34e53', 'OD_76edf3aeec7870bdbf0d146a95e611cc', '2', 'Dracaena Janet Craig', 1, '5000', '5000', '7000', '3000', 'HOUSEHOLD');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_details`
--

CREATE TABLE `customer_order_details` (
  `id` bigint(200) NOT NULL,
  `invoice` varchar(200) NOT NULL,
  `cust_id` varchar(200) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `address` varchar(800) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `datex` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `dt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order_details`
--

INSERT INTO `customer_order_details` (`id`, `invoice`, `cust_id`, `cust_name`, `address`, `pin`, `phone`, `datex`, `status`, `dt`) VALUES
(765, 'OD_b607ba543ad05417b8507ee86c54fcb7', '96c51027aef6b62cbf36d573c4e34e53', 'tabish adnan', 'SHOP NO 606, 6TH FLOOR, Bansal Arcade Ranchi', '834001', '7549006979', '20-08-18 13:03:20', 'pending', '18-08-19'),
(766, 'OD_e69cf84ed41fbe71985972c027190b49', '96c51027aef6b62cbf36d573c4e34e53', 'tabish adnan', 'SHOP NO 606, 6TH FLOOR, Bansal Arcade Ranchi', '834001', '7549006979', '20-08-18 13:05:21', 'pending', '18-08-19'),
(767, 'OD_68a64c1e5639454c3185e7ea2db9fc48', 'a833b91802b810f0db081d7d01c1ea2b', 'hoziafa zeehsan', 'SHOP NO 606, 6TH FLOOR,', '834001', '9905301099', '24-08-18 16:58:33', 'pending', '18-08-24'),
(768, 'OD_738a4e9422a11adbfda260ebac56783f', '312f04f99be9e857bfb2c033eeb1d3e2', 'Hozaifa Zeeshan', 'SHOP NO 606, 6TH FLOOR,', '834001', '8888888888', '24-08-18 17:11:29', 'Cancelled', '18-08-24'),
(769, 'OD_8a25a2a9c738ebd76043481a457b62a0', '664fae06a748e656511d55b59fc6f85e', 'tabish adnan', 'SHOP NO 606, 6TH FLOOR,', '834001', '7777777777', '25-08-18 13:24:10', 'Cancelled', '18-08-25'),
(770, 'OD_2c2dc47463ad7f389023f2b0fe1058cf', '664fae06a748e656511d55b59fc6f85e', 'Shefali Sharma', 'SHOP NO 606, 6TH FLOOR,', '834001', '7777777777', '25-08-18 13:30:18', 'pending', '18-08-25'),
(771, 'OD_06563f3b418fe57f8fc331872343ce44', '6618cb0cb41637acc0fb302290763c8a', 'Saddamul Haque', 'SHOP NO 606, 6TH FLOOR,', '834001', '7777777778', '25-08-18 14:55:44', 'pending', '18-08-25'),
(772, 'OD_0765300372d04032ca2d6d8b4ae35e63', '96c51027aef6b62cbf36d573c4e34e53', '', '', '', '', '14-09-18 19:32:24', 'Cancelled', '18-09-14'),
(773, 'OD_a2d436321f525baeeb4021f7c9f3047d', '96c51027aef6b62cbf36d573c4e34e53', '', '', '', '', '14-09-18 19:34:34', 'Cancelled', '18-09-14'),
(774, 'OD_30d4e6422cd65c7913bc9ce62e078b79', '96c51027aef6b62cbf36d573c4e34e53', 'tabish adnan', 'SHOP NO 606, 6TH FLOOR, Bansal Arcade Ranchi', '834001', '7549006979', '14-09-18 19:42:57', 'pending', '18-09-14'),
(775, 'OD_375c71349b295fbe2dcdca9206f20a06', '96c51027aef6b62cbf36d573c4e34e53', 'shefali sharma', 'SHOP NO 606, 6TH FLOOR, Bansal Arcade Ranchi', '834001', '7549006979', '14-09-18 20:26:24', 'Delivered', '18-09-14'),
(776, 'OD_5ddfed3d0746748d8c4add3547a80ac5', '96c51027aef6b62cbf36d573c4e34e53', 'shefali sharma', 'SHOP NO 606, 6TH FLOOR, Bansal Arcade Ranchi', '834001', '7549006979', '14-09-18 20:26:54', 'Delivered', '18-09-14'),
(777, 'OD_76edf3aeec7870bdbf0d146a95e611cc', '96c51027aef6b62cbf36d573c4e34e53', 'shefali sharma', 'SHOP NO 606, 6TH FLOOR, Bansal Arcade Ranchi', '834001', '7549006979', '18-09-18 10:55:46', 'Cancelled', '18-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `Full_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `user_password`, `Full_Name`) VALUES
(17, 'tabish', '113', 'Tabish Adnan');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `nm` varchar(200) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `mrp` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `feature` varchar(5000) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nm`, `img1`, `mrp`, `price`, `cp`, `feature`, `cat`, `status`) VALUES
(1, 'Areca Palm', 'areca palm.jpg', '7000', '5000', '3000', 'Areca palm plant helps in absorbing indoor air pollutants like acetone, xylene,\r\nand toluene  which emits from petroleum products and paints and wooden\r\nfurniture. It absorbs  harmful pollutants from indoor air and provide fresh air, thus\r\nhelps in minimizing upper respiratory tract diseases causes mainly because of\r\ntoluene. It helps in improving the nervous system in children and stops necrosis\r\nthat is the sudden death of cells and other tissue of the body.</BR></BR>As per the studies, the areca palm has the eighth best formaldehyde removal\r\nrate for plants. In addition, it can also serve as a humidifier. It can produce up to\r\na litter of water every 24 hours, which is perfect if anyone have asthma,\r\nallergies, or other breathing complications.', 'HOUSEHOLD', 'stock'),
(2, 'Dracaena Janet Craig', 'Dracaena Janet Craig.jpg', '7000', '5000', '3000', 'Dracaena Janet Craig helps in removing Formaldehyde, Benzene,\r\nTrichloroethylene and Carbon Monoxide from the air.</br></br><b>Formaldehyde</b> found in household cleaning products, fire retardants in soft\r\nfurnishings and carpet backings. Formaldehyde irritates the mucous membranes\r\nof the eyes, nose, throat and respiratory system and is known to\r\nexacerbate  asthma and trigger attacks.</br><b>Benzene</b> found in considerable amounts in tobacco smoke, commonly used as a solvent,\r\nand found in many common items such as paints, inks, oils, plastics, rubber, household\r\ncleaning products and petrol/gasoline.Chronic exposure to even relatively low levels of\r\nbenzene is associated with headaches, loss of appetite, drowsiness, nervousness,\r\npsychological disturbances and diseases of the  blood system, including anemia and bone\r\nmarrow diseases.</br><b>Trichloroethylene</b> found in widely used industrial solvent that is often found in printing inks,\r\npaints, lacquers, varnishes and adhesives.  Trichloroethylene is a central nervous\r\nsystem depressant and can cause  headache , dizziness, and confusion. It is also known to\r\ncause liver and kidney problems with prolonged exposure and is now known to\r\nbe cancer causing.</br><b>Carbon Monoxide</b> is a highly  toxic gas is mainly produced from sources of combustion such\r\nas open fires, gas stoves, central heating boilers etc. Low level exposure causes dizziness\r\nand headaches while more acute exposure can lead to death since it prevents the delivery of\r\noxygen to the body&#39;s cells.', 'HOUSEHOLD', 'stock'),
(3, 'Lady Palm', 'lady palm.jpg', '7000', '5000', '3000', 'Lady Palm  is said to be a good overall air purifier, removing most air pollutants.\r\nNotes: Prefers indirect sunlight, and watering without fertilizers.</br></br>These types of houseplants clean formaldehyde, toluene, and xylene out of your\r\nhome.', 'HOUSEHOLD', 'stock'),
(4, 'Mother in Law Tongue', 'Mother in Law Tongue.jpg', '7000', '5000', '3000', 'Mother in Law Tongue plants helps to remove Formaldehyde and Benzene from the air.</br><b>Formaldehyde</b> found in household cleaning products, fire retardants in soft\r\nfurnishings and carpet backings. Formaldehyde irritates the mucous membranes\r\nof the eyes, nose, throat and respiratory system and is known to\r\nexacerbate  asthma and trigger attacks.</br><b>Benzene</b> found in considerable amounts in tobacco smoke, commonly used as a\r\nsolvent, and found in many common items such as paints, inks, oils, plastics,', 'HOUSEHOLD', 'stock'),
(5, 'Ashoka Tree', 'ashoka.jpg', '7000', '5000', '3000', 'Ashoka Tree also knows as Sarka Ashoka plays a significant role in reducing air pollution. It is\r\nalso considered as symbol of positive energy. It makes life pleasant and happy.', 'tree', 'stock'),
(6, 'Polyalthia longifolia ', 'longifolia.jpg', '7000', '5000', '3000', 'It looks similar to Ashoka Tree . It is Tall, evergreen tree with a conical crown. Short but\r\nnumerous branches and long, tapering, narrow and drooping leaves with wavy margins. It has air\r\npurifying capabilities and suitable for homes having less space .', 'tree', 'stock'),
(7, 'Neem Tree', 'neem.jpg', '7000', '5000', '3000', 'The neem tree is of great importance for its anti-desertification properties and as a good carbon\r\ndioxide sink. As per studies, in the life time a neem tree has capability of 1.45 lakh tones carbon\r\ndioxide sequestration . It also trap more pollutants PM 2.5, PM 10, NOx and SOx. It is also\r\nperceived in India as beauty aid. Neem has ability to produce oxygen at night.', 'tree', 'stock'),
(8, 'Sagwan/Teak', 'sagwan.jpg', '7000', '5000', '3000', 'Sagwan or Teak tree has highest carbon sequestration i.e 3.70 lakh tones of Carbon Dioxide in its\r\nlife time. It plays an important role in improving the air quality level by absorbing Carbon\r\nDioxide and exhaling Oxygen.', 'tree', 'stock'),
(9, 'Spider Plant', 'Spider Plant.jpg', '7000', '5000', '3000', 'Spider Plant is known to have high levels of beta-carotene and vitamin C,\r\ncalcium, protein, magnesium and powerful anti-oxidants. The\r\nhealth benefits  associated with the spider plant is its ability to absorb carbon\r\nmonoxide.</br><b>Carbon Monoxide</b> is a highly toxic gas is mainly produced from sources of\r\ncombustion such as open fires, gas stoves, central heating boilers etc. It is\r\ncolourless, odourless, and tasteless toxic gas Low level exposure causes\r\ndizziness and headaches while more acute exposure can lead to  death since it\r\nprevents the delivery of oxygen to the body&#39;s cells.', 'HOUSEHOLD', 'stock'),
(10, 'Peace Lily', 'Peace Lily.jpg', '7000', '5000', '3000', 'The  Peace Lily is a beautiful plant  and that can improve indoor air quality by as\r\nmuch as 60 percent. It helps to reduce the levels of mold spores that grow in the\r\nhome by absorbing those spores through its leaves and them circulating them to\r\nthe plant&#39;s roots where they are used as food.', 'HOUSEHOLD', 'stock');

-- --------------------------------------------------------

--
-- Table structure for table `redeem`
--

CREATE TABLE `redeem` (
  `id` int(11) NOT NULL,
  `nm` varchar(500) NOT NULL,
  `acno` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redeem`
--

INSERT INTO `redeem` (`id`, `nm`, `acno`, `ifsc`, `userid`, `credit`) VALUES
(1, 'PNB', '784592658', 'PNB1111145', '96c51027aef6b62cbf36d573c4e34e53', ''),
(2, 'SBI', '754954824875', 'SBI1111145', '96c51027aef6b62cbf36d573c4e34e53', '800');

-- --------------------------------------------------------

--
-- Table structure for table `refer`
--

CREATE TABLE `refer` (
  `id` bigint(20) NOT NULL,
  `refer_id` varchar(100) NOT NULL,
  `new_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refer_amt`
--

CREATE TABLE `refer_amt` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `c_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refer_amt`
--

INSERT INTO `refer_amt` (`id`, `user_id`, `amount`, `c_id`) VALUES
(1, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e53'),
(6, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e53'),
(7, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e53'),
(8, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e53'),
(9, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e5'),
(10, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e53'),
(11, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e53'),
(12, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e53'),
(13, '7549006979', '100', '96c51027aef6b62cbf36d573c4e34e53'),
(14, '', '100', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `no` varchar(15) NOT NULL,
  `ps` varchar(50) NOT NULL,
  `adds` varchar(500) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `cno` varchar(100) NOT NULL,
  `datex` varchar(100) NOT NULL,
  `refer` varchar(100) NOT NULL,
  `em` varchar(100) NOT NULL,
  `logs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `nm`, `no`, `ps`, `adds`, `pin`, `cno`, `datex`, `refer`, `em`, `logs`) VALUES
(17, 'Tabish Adnan', '7549006979', 'a', 'SHOP NO 606, 6TH FLOOR, Bansal Arcade Ranchi', '834001', '96c51027aef6b62cbf36d573c4e34e53', '07-08-18 17:24:09', '', 'tabishadnan9@gmail.com', 'test'),
(20, 'Hozaifa Zeeshan', '8888888888', '113', 'SHOP NO 606, 6TH FLOOR,', '834001', '312f04f99be9e857bfb2c033eeb1d3e2', '24-08-18 17:11:29', '7549006979', '', '0'),
(25, 'Shefali Sharma', '7777777777', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '664fae06a748e656511d55b59fc6f85e', '25-08-18 13:30:18', '7549006979', '', '0'),
(26, 'Saddamul Haque', '7777777778', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '6618cb0cb41637acc0fb302290763c8a', '25-08-18 14:55:44', '7549006979', '', '0'),
(27, 'pooja', '9999999999', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', 'e0ec043b3f9e198ec09041687e4d4e8d', '16-09-18 11:43:28', '7549006979', 'pooja@raafta.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `register1`
--

CREATE TABLE `register1` (
  `id` int(11) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `no` varchar(50) NOT NULL,
  `ps` varchar(100) NOT NULL,
  `adds` varchar(500) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `datex` varchar(100) NOT NULL,
  `cno` varchar(100) NOT NULL,
  `refer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register1`
--

INSERT INTO `register1` (`id`, `nm`, `no`, `ps`, `adds`, `pin`, `otp`, `datex`, `cno`, `refer`) VALUES
(8, 'Tabish Adnan', '8340199343', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '959130', '17-09-18 19:18:30', '449f8a6315da3004f850d92ba5bafb7e', ''),
(9, 'tabish adnan', '7549006979', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '490728', '07-08-18 17:23:48', '96c51027aef6b62cbf36d573c4e34e53', ''),
(12, 'Hozaifa Zeeshan', '8888888888', '113', 'SHOP NO 606, 6TH FLOOR,', '834001', '539041', '24-08-18 17:10:58', '312f04f99be9e857bfb2c033eeb1d3e2', '7549006979'),
(13, 'tabish adnan', '7549006970', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '667251', '24-08-18 18:59:44', '12aca2bcce86323f709ebacff1852414', '7549006979'),
(14, 'Shefali Sharma', '7777777777', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '246173', '25-08-18 13:29:57', '664fae06a748e656511d55b59fc6f85e', '7549006979'),
(15, 'tabish adnan', '9999999999', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '910791', '16-09-18 11:42:33', 'e0ec043b3f9e198ec09041687e4d4e8d', '7549006979'),
(16, 'tabish adnan', '7549006978', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '351669', '25-08-18 14:34:13', '421b371445aacfee619843ccf1483a07', ''),
(17, 'tabish adnan', '7549006977', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '173114', '25-08-18 14:41:45', '333e49d3af6454d0e90c127ee1accb82', ''),
(18, 'Saddamul Haque', '7777777778', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '148587', '25-08-18 14:55:21', '6618cb0cb41637acc0fb302290763c8a', '7549006979'),
(19, 'tuhina', '9905301033', 'a', 'a', '834001', '268859', '17-09-18 12:36:56', '607c095e3e40ef5c3c9a01924a18b51a', '7549006979'),
(20, 'Tabish Adnan', '8000000000', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '839599', '17-09-18 17:16:37', 'a770c51a6fa4b8728f06ece2bc8f8459', ''),
(21, 'Md. Saddamul  Haque', '8518829874', 'a', 'SHOP NO 606, 6TH FLOOR,', '834001', '664862', '17-09-18 18:12:13', '67ba85ecf67d707a19df6a17b1a7bba1', '7549006979');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer_order_details`
--
ALTER TABLE `customer_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redeem`
--
ALTER TABLE `redeem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refer`
--
ALTER TABLE `refer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refer_amt`
--
ALTER TABLE `refer_amt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register1`
--
ALTER TABLE `register1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2695;

--
-- AUTO_INCREMENT for table `customer_order_details`
--
ALTER TABLE `customer_order_details`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `redeem`
--
ALTER TABLE `redeem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refer`
--
ALTER TABLE `refer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refer_amt`
--
ALTER TABLE `refer_amt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `register1`
--
ALTER TABLE `register1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
