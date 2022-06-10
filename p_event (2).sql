-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 12:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `lastlogin`, `image`) VALUES
('occasionplanner46@gmail.com', 'occasion46', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookedentertainment`
--

CREATE TABLE `bookedentertainment` (
  `bid` varchar(25) NOT NULL,
  `eid` int(25) NOT NULL,
  `edate` date NOT NULL,
  `eprice` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookedentertainment`
--

INSERT INTO `bookedentertainment` (`bid`, `eid`, `edate`, `eprice`) VALUES
('EV869930P', 2, '2021-06-28', 25000),
('EV869930P', 4, '2021-06-29', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `bookedfood`
--

CREATE TABLE `bookedfood` (
  `bid` varchar(25) NOT NULL,
  `fid` int(25) NOT NULL,
  `ftype` varchar(25) NOT NULL,
  `fpeople` int(25) NOT NULL,
  `price` int(25) NOT NULL,
  `fdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookedfood`
--

INSERT INTO `bookedfood` (`bid`, `fid`, `ftype`, `fpeople`, `price`, `fdate`) VALUES
('EV869930P', 4, 'Lunch', 100, 120000, '2021-06-28'),
('EV869930P', 3, 'Lunch', 100, 135000, '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(25) NOT NULL,
  `b_id` varchar(25) NOT NULL,
  `u_id` int(10) NOT NULL,
  `v_id` int(10) NOT NULL,
  `vcost` int(25) NOT NULL,
  `p_id` int(10) DEFAULT NULL,
  `pcost` int(25) NOT NULL,
  `did` int(25) NOT NULL,
  `dcost` int(25) NOT NULL,
  `etype` varchar(25) NOT NULL,
  `guest` int(25) NOT NULL,
  `t_amount` varchar(20) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date DEFAULT NULL,
  `p_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `b_id`, `u_id`, `v_id`, `vcost`, `p_id`, `pcost`, `did`, `dcost`, `etype`, `guest`, `t_amount`, `date_from`, `date_to`, `p_date`) VALUES
(5, 'EV225334P', 29, 17, 10000, 0, 0, 3, 25000, 'Wedding', 200, '50850', '2021-06-28', '2021-06-29', '2021-06-27'),
(7, 'EV869930P', 33, 15, 10000, 1, 95000, 3, 25000, 'Wedding', 150, '621500', '2021-06-28', '2021-06-29', '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `uid` int(255) DEFAULT NULL,
  `vid` int(255) DEFAULT NULL,
  `vcost` varchar(20) NOT NULL,
  `guest` int(255) DEFAULT NULL,
  `did` int(255) DEFAULT NULL,
  `dcost` varchar(20) DEFAULT NULL,
  `etype` varchar(25) DEFAULT NULL,
  `date_from` date NOT NULL,
  `date_to` date DEFAULT NULL,
  `t_amount` varchar(20) NOT NULL,
  `pid` int(255) DEFAULT NULL,
  `pcost` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdescription` text NOT NULL,
  `ctype` text NOT NULL,
  `ftype` text DEFAULT NULL,
  `ccost` varchar(255) NOT NULL,
  `cimage` text NOT NULL,
  `cimage2` text NOT NULL,
  `cimage3` text NOT NULL,
  `cimage4` text NOT NULL,
  `cimage5` text NOT NULL,
  `cimage6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `cname`, `cdescription`, `ctype`, `ftype`, `ccost`, `cimage`, `cimage2`, `cimage3`, `cimage4`, `cimage5`, `cimage6`) VALUES
(3, 'Fossetta Gourmet Catering', 'Sweet Lassi ,  Baby Corn Soup ,Corn Cheese Ball ,  Poori , Dhal Fry, Veg Pulav , Veg Biryani , Paneer Butter Masala , Aloo Jeera  , Gulab Jamoon ,Vanilla Icecream , Papad , Green Salad.', 'Wedding', 'Veg', '1350', 'c11.jpg', 'c22.jpg', 'c33.jpg', 'c44.jpg', 'c55.jpg', 'c66.jpg'),
(4, 'Goldfinch Catering', 'Chicken Soup , Steam Rice/Jeera Rice (anyone) ,Rumali roti ,  Chicken Tandoori , Chicken Momos ,  Dal Fry , Egg Curry , Salad , Papad , Raita , Pickel ,  Gulab jamun.', 'Wedding', 'Non-Veg', '1200', 'c1.jpg', 'c2.jpg', 'c3.jpg', 'c4.jpg', 'c5.jpg', 'c6.jpg'),
(5, 'Mohit Cateres', 'Pav Bhaji (2 pcs) ,  Aloo Vada (2 pcs) , Vegetable Pulav OR Veg Biryani Salad , Raitha , Gulab Jamun (2 pcs) , Soft Drinks OR Lemonade (200 ml) . ', 'Birthday', 'Veg', '900', 'cc1.jpg', 'cc2.jpg', 'cc3.jpg', 'cc4.jpg', 'cc5.jpg', 'cc6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE `decoration` (
  `id` int(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `ddescription` text NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `dheader` text NOT NULL,
  `dimage1` text NOT NULL,
  `dimage2` text NOT NULL,
  `dimage3` text NOT NULL,
  `dimage4` text NOT NULL,
  `dimage5` text NOT NULL,
  `dimage6` text NOT NULL,
  `dcost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`id`, `dname`, `ddescription`, `dtype`, `dheader`, `dimage1`, `dimage2`, `dimage3`, `dimage4`, `dimage5`, `dimage6`, `dcost`) VALUES
(3, ' Posh Decoration', 'Posh Events, a complete Wedding Planner company in Ahmedabad, specializes in wedding decoration and planning. They specialize in designing beautiful, bespoke weddings, personally planned down to the last detail. They have great experience in the field. They are here to cater to your every need and turn your day into a memorable experience.', 'Wedding', 'd-top.jpg', '1598272718_Screenshot_from_2020_08_24_18_06_22.jpg', '1598184010_20200129_184537.jpg', '1598184103_20191129_201045.jpg', '1598272718_61d02e16_6cd9_4292_9437_a8cbb52f14db.jpg', '1598272719_d3d6c249_766d_4153_aa5d_c5a42eb3a734.jpg', '1602052971_Screenshot_34.jpg', '25000'),
(4, 'Golden Fire Events', 'Golden Fire Events is a team of event designers based in Ahmedabad, specializing in wedding and event decoration. They are dedicated to giving you the best visual experience on your special day. They work closely with you to ensure the transform your vision into reality. They have been described as easy-going, hardworking and a complete value for money. They do all sorts of events, may it be a proposal, engagement, wedding or a reception, they are here to cater to all your needs.', 'Wedding', 'c1f3aadb-a45b-4e00-a67e-0a63a73b71c.jpeg', 'c1f3aadb-a45b-4e00-a67e-0a63a73b71c - Copy.jpeg', '1584165785_IMG_20170918_WA0019.jpeg', '1584165782_IMG_20181012_WA0004.jpeg', '1584165778_IMG_20190620_WA0020.jpeg', '1584165778_IMG_20190620_WA0015.jpeg', '1584165777_IMG_20190717_WA0106.jpeg', '20000'),
(6, 'AD Events', 'AD Events is a team of event designers based in Ahmedabad, specializing in wedding and event decoration. They are dedicated to giving you the best visual experience on your special day. They work closely with you to ensure the transform your vision into reality. They have been described as easy-going, hardworking and a complete value for money. They do all sorts of events, may it be a proposal, engagement, wedding or a reception, they are here to cater to all your needs. If you are looking for a well-coordinated and creative group of individuals, This is the team for you. Services Offered: Wedding Decor Mandap Decor Reception Decor', 'Party', '1582526665_Screenshot_from_2020_02_24_12_03_43 - Copy.jpg', '1582526665_Screenshot_from_2020_02_24_12_03_43.jpg', '1582526666_Screenshot_from_2020_02_24_12_02_59.jpg', '1582526667_Screenshot_from_2020_02_24_12_03_16.jpg', '1582526669_Screenshot_from_2020_02_24_12_03_52.jpg', '1582526671_Screenshot_from_2020_02_24_12_04_20.jpg', '1582526672_Screenshot_from_2020_02_24_12_12_42.jpg', '10000'),
(7, 'Iconic Events and Entertainment', 'Iconic Events and Entertainment is a brand that will decorate the venue to their best of their abilities as near as possible to the clients expectations or surpass their expectations. Their vision is to make the coupleâ€™s dream into reality. They use all types of decorative elements to give complete justice to the theme. Indian weddings are grand affairs with multiple pre-wedding and post-wedding rituals that take place before and after the actual wedding date. Iconic Events and Entertainment does styling and decor for wedding and all related functions. Also, they are comfortable travelling for weddings in different cities across India and also organise destination weddings.', 'Party', '1590296940_IMG_20200220_192412 - Copy.jpeg', '1590296940_IMG_20200220_192412.jpeg', 'fb8e2f93-ed25-4eb2-9267-06671f344161.jpeg', '1590296931_IMG_20200220_192454.jpeg', '1569597203_IMG_20190716_181501_118.jpeg', '1553966375_IMG_20190116_WA0002.jpeg', '1553966105_IMG_20180404_WA0005.jpeg', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `ecart`
--

CREATE TABLE `ecart` (
  `uid` int(25) DEFAULT NULL,
  `vid` int(25) DEFAULT NULL,
  `eid` int(25) DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `eprice` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `eid` int(255) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `eprice` varchar(255) NOT NULL,
  `edescription` text NOT NULL,
  `ephone` varchar(255) NOT NULL,
  `eemail` varchar(255) NOT NULL,
  `eimage1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`eid`, `ename`, `eprice`, `edescription`, `ephone`, `eemail`, `eimage1`) VALUES
(2, 'DJ Vandan', '25000', 'Making everyone dance on their feet DJ Vandan is a renowned DJ artist who is based in Ahmedabad. He has been rocking the dance floors at several events. He has an experience of performing as a DJ for more than a decade in this highly competitive music industry. He has been with Event Planning since 2 years and 8 months. Favourite Music Genres  Commercial, Punjabi, Bollywood, EDM, Hip Hop, House .', '9876543210', 'Vandan@email.com', 'dj1.jpeg'),
(3, 'DJ Vince', '32000', 'Making everyone dance on their feet DJ Vince is a renowned DJ artist who is based in Ahmedabad. He has been rocking the dance floors at several events. He has an experience of performing as a DJ for more than a decade in this highly competitive music industry. He has been with Event Planning since 3 years and 6 months. Favourite Music Genres Commercial, Punjabi, Hip Hop, EDM, House, Bollywood .', '1234567890', 'vince@email.com', 'dj2.jpeg'),
(4, 'Nirvanas Art Studio', '35000', 'Dance and Music are a big part of every Indian wedding after all we have an event dedicated just to dancing the sangeet. Nirvana Arts Studio is a Ahmedabad based choreographer. They can choreograph all sort of performances bride and groom entries, family performances and much more.  If you are looking for someone to make your performances memorable contact them. Specialization in dance genres: Contemporary Salsa Bollywood', '5555666600', 'nirvana@email.com', 'e3.jpeg'),
(5, 'Hosting Hive Entertainment', '51000', 'Wedding is incomplete without any entertainment segment. One who is professional and knows how to execute your wedding without any glitches. So, here we have one of the best entertainers in the industry who you can book for your wedding and sit back relaxed because you can trust them to take care of the entertainment segment without a hitch. Contact Hosting Hive Entertainment to know more about the services offered for your wedding. Events covered- Wedding Private Party Pre-Wedding (Roka) Sagan.', '42424213625', 'Hostinglive@email.com', 'e4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `foodcart`
--

CREATE TABLE `foodcart` (
  `uid` int(25) NOT NULL,
  `vid` int(25) NOT NULL,
  `fid` int(25) NOT NULL,
  `ftype` text NOT NULL,
  `fpeople` text NOT NULL,
  `price` text NOT NULL,
  `fdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `pid` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pdescription` text NOT NULL,
  `ptype` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pheader` text NOT NULL,
  `pimage1` text NOT NULL,
  `pimage2` text NOT NULL,
  `pimage3` text NOT NULL,
  `pimage4` text NOT NULL,
  `pimage5` text NOT NULL,
  `pimage6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`pid`, `pname`, `price`, `pdescription`, `ptype`, `phone`, `pemail`, `pheader`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `pimage5`, `pimage6`) VALUES
(1, 'Hardik Radia Photography', '95000', 'Hardik Radia Photography is a wedding photography service that shoots the various frames of brides and grooms along with their family and friends during their wedding festivities. They are sure to provide an unmatched level of quality services pan India. Service : Photo and Video.', 'Wedding', '9876543210', 'Hardik@email.com', 'ph1.jpeg', 'p1.jpeg', 'p2.jpeg', 'p3.jpeg', 'p4.jpeg', 'p5.jpeg', 'p6.jpeg'),
(2, 'UDT Photography', '12000', 'Uditi is a professional freelance photographer who has been covering birthdays for over 2 years now. She is based out of Bhuj, Gujarat and is available for shoots in Ahmedabad. She tries to capture the true emotions behind the Birthdays. ', 'Birthday', '2223334444', 'udt@email.com', 'pbh1.jpeg', 'pb1.jpeg', 'pb2.jpeg', 'pb3.jpeg', 'pb4.jpeg', 'pb5.jpeg', 'pb6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `uphone` varchar(12) NOT NULL,
  `upassword` varchar(20) NOT NULL,
  `wallet` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`uid`, `uname`, `uemail`, `uphone`, `upassword`, `wallet`) VALUES
(29, 'Rutvik Rana', 'rutu1803@gmail.com', '08758205765', '1234', 1000),
(33, 'Sahil Mansuri', 'sm269189@gmail.com', '9638190867', '12345', 897785);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `vid` int(255) NOT NULL,
  `vname` varchar(255) NOT NULL,
  `vtype` varchar(255) NOT NULL,
  `vcost` varchar(255) NOT NULL,
  `vcapacity` varchar(255) NOT NULL,
  `vaddress` varchar(255) NOT NULL,
  `vdescription` text NOT NULL,
  `himage` text NOT NULL,
  `vimage` text NOT NULL,
  `vimage2` text NOT NULL,
  `vimage3` text NOT NULL,
  `vimage4` text NOT NULL,
  `vimage5` text NOT NULL,
  `vimage6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`vid`, `vname`, `vtype`, `vcost`, `vcapacity`, `vaddress`, `vdescription`, `himage`, `vimage`, `vimage2`, `vimage3`, `vimage4`, `vimage5`, `vimage6`) VALUES
(15, 'Hyatt Regency Ahmedabad', '4 Star Hotel', '10000', '600', 'Hyatt Regency Ahmedabad, Ashram Road, Usmanpura, Ahmedabad', 'Hyatt Regency Ahmedabad takes special care to make your event a memorable one. Their amenable staff caters to your smallest of needs and pays attention to the tiniest of details. From hosting your bachelor party to vidaai ceremony, they will be by your side through it all. The modern amenities ensure that your wedding functions are planned without any delays.', 'header.jpg', '1548244641_10_Facade_Horizontal.jpg', '078b1e22-c89b-488a-8d77-5573e9056a3f.jpg', '1548244588_HYIND_P026_Wedding_Lifestyle_Couple_Staircase.jpg', '1548244590_HYIND_P023_Wedding_Lifestyle_Couple_Brunch.jpg', '1548244590_HYIND_P048_Wedding_Mendhi_Setup.jpg', '1548244593_HYIND_P037_Wedding_Lifestyle_Flambee.jpg'),
(16, 'Neonz Lifestyle & Recreation Club', 'Resort', '10000', '700', 'Neonz Resort & Club, District Anand, Gujarat, India', 'Neonz Lifestyle & Recreation Club is set in a picturesque harmony of comfort and luxury. The Lifestyle & Recreation venue offers an unmatched hospitality with a thoughtfully curated venue for your special occasion. This exceptionally well organised Lifestyle & Recreation Club takes pride in providing a venue so beautiful to behold and in taking care of their guests genuinely so that each event held there is an experience to cherish.', 'himage_neonz.jpg', '1516361024_nxb.jpg', '1516361026_fgnfx.jpg', '1516361026_gd.jpg', '1587983073_P1388342.jpg', '1587984105_Job_6043.jpg', '1587984105_Job_6107.jpg'),
(17, 'Eminence Banquets', 'Banquet Hall', '10000', '500', 'Vishala Empire, GIDC Naroda, Ahmedabad, Gujarat, India', 'Eminence Banquets in Ahmedabad is one of the most sought-after banqueting facilities in the city. It was set up with a view to providing an elegant and superior banqueting space to cater to the varied requirements of their clients. Whatever the celebration may be, big or small, it is their endeavor to make each celebration, a grand success. They are perfect when it comes to hosting wedding ceremonies as they offer heavenly views combined with lavish hospitality. Their warm welcoming nature and hospitality make your wedding experience very special.', '1619507783_3 - Copy.jpeg', '1619507783_3.jpeg', '1619507782_1.jpeg', '1619508791_8.jpeg', '1619508829_7.jpeg', '1619508883_6.jpeg', '1619508764_9.jpeg'),
(18, 'The Forum', 'Lawn/Farmhouse', '50000', '200', 'Club O7, Ahmedabad, Gujarat, India', 'The Forum is state of the art, dream destination with ultra modern facilities to cater all your requirements. The only terminal in Gujarat having ultra modern facilities, matching international quality standards. 40000 Sq. Ft. Convention Hall, accommodating upto 3000 Guest. A Wide Array of fifteen 5 star standard conference & Meeting Rooms.', '1610700194_WhatsApp_Image_2021_01_12_at_1.49.37_PM__1_ - Copy.jpeg', '1610700194_WhatsApp_Image_2021_01_12_at_1.49.37_PM__1_.jpeg', '1610700194_WhatsApp_Image_2021_01_12_at_1.49.30_PM__2_.jpeg', '1610700194_WhatsApp_Image_2021_01_12_at_1.49.35_PM__2_.jpeg', '1610700194_WhatsApp_Image_2021_01_12_at_1.49.36_PM__1_.jpeg', '1610700194_WhatsApp_Image_2021_01_12_at_1.49.36_PM__2_.jpeg', '1610700194_WhatsApp_Image_2021_01_12_at_1.49.37_PM.jpeg'),
(19, '100 Acres Club', 'Resort', '70000', '800', '100 Acres Club, Sanand - Nalsarovar Road, Ahmedabad, Gujarat, India', 'Find the perfect combination of modernity and tradition, at 100 Acres Club. Set in a picturesque harmony of comfort and luxury, 100 Acres offers you unmatched hospitality with a thoughtfully curated venue for your special occasion. They take pride in providing a venue so beautiful to behold and in taking care of their guests genuinely so that each event held there is an experience to cherish.', '1570170873_Screenshot_1.jpg', '1570170873_Screenshot_1 - Copy.jpg', '1570170874_Screenshot_9.jpg', '1570170875_Screenshot_7.jpg', '1570170875_Screenshot_8.jpg', '1570170876_Screenshot_5.jpg', '1570170877_Screenshot_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `eid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `vid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
