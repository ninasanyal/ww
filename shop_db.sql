-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 01:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(64, 32, 39, 'CHANNEL', 999, 1, 'V2.JPG'),
(65, 32, 52, 'MAKE UP.6', 799, 1, 'mk6.jpg'),
(66, 32, 60, 'JWELLARY COLLECTION .6', 1499, 1, 'j6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(14, 32, 'NINA SAN', '6291410390', 'nina@gmail.com', 'cash on delivery', 'flat no. puroshree PUROSREE chandannagar WEST BENGAL India - 712136', ', DAISY ( 1 )', 6499, '12-Jun-2023', 'completed'),
(15, 32, 'Barsha', '6291410390', 'barsha@gmail.com', 'cash on delivery', 'flat no. qkjyrhtcliu PUROSREE chandannagar WEST BENGAL India - 712136', ', Berry ( 2 ), VIOLETA ( 1 )', 18997, '12-Jun-2023', 'completed'),
(16, 32, 'NINA SAN', '6291410390', 'sanyal.tulsi0903@gmail.com', 'cash on delivery', 'flat no. puroshree PUROSREE chandannagar WEST BENGAL India - 712136', ', LOTUS ( 1 ), CHANNEL ( 2 )', 7997, '13-Jun-2023', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `details`, `price`, `image`) VALUES
(25, 'ROSE PETALS', 'ROYAL', 'Wide length red floear dress from ww ', 4999, 'T1.jpg'),
(26, 'LOTUS', 'ROYAL', 'PINK FLARES WIDE GOWN ROYAL SET FROM WW', 5999, 'T2.jpg'),
(28, 'DAISY', 'ROYAL', 'Trendy Twill Stin Womens Blue color Gown from ww', 6499, 'T3.jpg'),
(29, 'Peach', 'ROYAL', 'Women&#39;s Gown Maxi Long Dress, Latest Georgette Long Ethnic from ww', 2999, 'T4.jpg'),
(30, 'Blacky', 'ROYAL', 'SURYAA Women&#39;s Fit & Flare Georgette Western Designer V-Neck 3/4 Sleeve Maxi Gown Dress (S-C-119) from ww', 3999, 'T5.jpg'),
(31, 'Berry', 'ROYAL', 'GG Fashion\r\nWomen&#39;s Fit and Double Flare Knee Length Dress ', 5999, 'T6.jpg'),
(32, 'SKY', 'SILVER', 'KERI PERRY\r\nWomen&#39;s Chiffon Western Dress(Sky Blue) Dress for Women, Dress', 3999, 'S-1.jpg'),
(33, 'VIOLETA', 'SILVER', 'Women&#39;s Elegant Belted Pleated Sleeveess Short Dress VIOLET Color', 6999, 'S-2.jpg'),
(34, 'PALE', 'SILVER', 'Polyester Western Dresses for Women|Stylish Latest', 4999, 'S3.jpg'),
(35, 'VENOM', 'SILVER', 'PLERIZA\r\nWomen&#39;s 2 Piece Outfit Co-ord Set Crop Tops & Elasticated Waist', 3999, 'S4.jpg'),
(36, 'SEA', 'SILVER', 'KERI PERRY Women&#39;s Dobby Georgette Western Dress (Sea Green) Dress for Women, Dress', 4999, 'S5.jpg'),
(37, 'FLOW', 'SILVER', 'Women Cutout Dress CERIN GLOSS IN PINK-PURPLE', 2999, 'S6.jpg'),
(38, 'VELVET', 'PERFUME', 'ITALIC FLAME SMELL THE WORLD', 799, 'V1.JPG'),
(39, 'CHANNEL', 'PERFUME', 'CHANNEL Eau De Parfum Bloom 50ml| Premium Long Lasting Luxury Perfume| Notes of Almond | Scent for All Occasions\r\nFloral', 999, 'V2.JPG'),
(40, 'CHAONG', 'PERFUME', 'Plum Women&#39;s Body Lovin&#39; Hawaiian Rumba Eau De Parfum Long Lasting Scent Mini Perfume,', 599, 'V3.JPG'),
(41, 'LINT', 'PERFUME', 'Plum BodyLovin&#39; Vanilla Vibes Body Mist | Vanilla perfume for women | Long Lasting | Fine fragrance', 380, 'V4.JPG'),
(42, 'COCO', 'PERFUME', 'Wild Stone Ultra Sensual Perfume Spray for Men, 100ml, A Sensory Treat for Casual Encounters', 499, 'V5.JPG'),
(43, 'TOM FORD', 'PERFUME', 'Bella Vita Luxury Man Perfume Gift Set 4x20 ML for Men with Dominus, Oud, CEO, Impact Perfume.', 610, 'V6.JPG'),
(44, 'TOM FORD.2', 'PERFUME', 'Bella Vita Luxury Man Perfume Gift Set 4x20 ML for Men with Dominus, Oud, CEO, Impact Perfume.', 610, 'V7.JPG'),
(45, 'TOM FORD.3', 'PERFUME', 'Bella Vita Luxury Man Perfume Gift Set 4x20 ML for Men with Dominus, Oud, CEO, Impact Perfume|', 610, 'V8.JPG'),
(47, 'MAKE UP.1', 'MAKEUP', 'Maybelline New York Matte Lipstick, Intense Colour, Moisturised Lips, Color Sensational Creamy Matte', 210, 'mk1.jpg'),
(48, 'MAKE UP.2', 'MAKEUP', 'Blue Heaven Festive MakeUp Kit For Women, Medium Tone Combo, 75gm (Pack of 8)', 4999, 'mk2.jpg'),
(49, 'MAKE UP.3', 'MAKEUP', 'Blue Heaven Festive MakeUp Kit For Women, Medium Tone Combo, 75gm (Pack of 8)', 4100, 'mk3.jpg'),
(50, 'MAKE UP.4', 'MAKEUP', 'Maybelline New York Eyeshadow Palette, 12 Highly Blendable Shades, Matte and Sheen Colours', 749, 'mk4.jpg'),
(51, 'MAKE UP.5', 'MAKEUP', 'RENEE Glass Glow Pre Makeup Oil Primer 10ml| Non Sticky, Smoooth Finish| Hydrates, Repairs ', 299, 'mk5.jpg'),
(52, 'MAKE UP.6', 'MAKEUP', 'Sh.Huda Hudacrush Beauty Matte Finish, Long Lasting, Waterproof Liquid Lipsticks Combo Set', 799, 'mk6.jpg'),
(53, 'MAKE UP.7', 'MAKEUP', 'Swiss Beauty Ultimate 9 Pigmented Colors Eyeshadow Palette Long Wearing And Easily Blendable', 202, 'mk7.jpg'),
(54, 'MAKE UP.8', 'MAKEUP', 'RENEE Bollywood Filter Face Primer 15gm| For A Flawless & Smooth Canvas| Blurs Fine Lines, Wrinkles', 315, 'mk8.jpg'),
(55, 'JWELLARY COLLECTION .1 ', 'JWELLARY', 'Yellow Chimes Toe Rings for Women | Traditional Silver Oxidised Toe Rings Set | Bichiya for women Combo | Accessories Jewellery for Women', 1090, 'j1.jpg'),
(56, 'JWELLARY COLLECTION .2', 'JWELLARY', '925 Sterling Silver Heart Toe earrings For Women', 980, 'j2.jpg'),
(57, 'JWELLARY COLLECTION .3', 'JWELLARY', '925 Sterling Silver Heart Toe earrings For Women', 999, 'j3.jpg'),
(58, 'JWELLARY COLLECTION .4', 'JWELLARY', 'Rhodium Plated Silver Toned White American Diamond Studded Necklace', 1999, 'j4.jpg'),
(59, 'JWELLARY COLLECTION .5', 'JWELLARY', '925 Sterling Silver Heart Toe earrings For Women ', 879, 'j5.jpg'),
(60, 'JWELLARY COLLECTION .6', 'JWELLARY', '925 Sterling Silver Heart Toe earrings For Women ', 1499, 'j6.jpg'),
(61, 'JWELLARY COLLECTION .7', 'JWELLARY', 'Splendid Silver Plated Alloy Choker Necklace Set for Women', 3200, 'j7.jpg'),
(62, 'JWELLARY COLLECTION .8', 'JWELLARY', 'Silver Chest Silver  Rings for Women Pure Silver 925', 925, 'j8.jpg'),
(63, 'SNEAKERS . 1', 'SHOES', 'Bacca Bucci\r\nBoys or Girls Streetwear Flat Heel High-top Fashions Sneakers', 1499, 'sn1.jpg'),
(64, 'SNEAKERS . 2', 'SHOES', 'Hopits Sneakers Sports Shoes |Running Shoes for Girls', 999, 'sn3.jpg'),
(65, 'SNEAKERS . 3', 'SHOES', 'Women White Casual Sneakers', 625, 'sn4.jpg'),
(66, 'SNEAKERS . 4', 'SHOES', 'Women Shoes Chunky Sneakers Shoes for Womens and Girls Stylish 3 COMBO PACK', 3499, 'sn6.jpg'),
(67, 'HEEL AND BOOTS . 1', 'SHOES', 'Shoetopia\r\nStylish Braid Style  ZEBRA Strap Platform Heels For Women & Girls', 799, 'h1.jpg'),
(68, 'HEEL AND BOOTS . 2', 'SHOES', 'Smart & Sleek\r\nWomen&#39;s Comfortable Block Heels Sandal', 479, 'h2.jpg'),
(69, 'HEEL AND BOOTS . 3', 'SHOES', 'commander shoes\r\nCasual Heel Boots for Girls and Women', 1370, 'h3.jpg'),
(70, 'HEEL AND BOOTS . 4', 'SHOES', 'Sole: T.P.C\r\nClosure: Pull On\r\nShoe Width: Narrow\r\nOuter Material : Leatherite, Sole Material : T.P.C\r\nLifestyle: Casual, Dailywear, Formal & Party\r\nHeel Height (inch) : 2.5\r\nDurable, Stylish & Comfortable', 699, 'h6.jpg'),
(71, 'SAREE . 1', 'SAREE', 'Name : Bollywood Rose saree\r\n\r\nSaree Fabric : Chanderi Cotton\r\n\r\nBlouse : Separate Blouse Piece\r\n\r\nBlouse Fabric : Poly Silk\r\n\r\nPattern : Embroidered\r\n\r\nBlouse Pattern : Solid\r\n\r\nNet Quantity (N) : Single\r\n\r\nTraditional Bollywood Chanderi Saree With Separate Blouse Piece With Work\r\n\r\nSaree Color : Peach\r\n\r\nBlouse Color : Silver\r\n\r\nSizes : \r\n\r\nFree Size\r\n\r\nCountry of Origin : India', 1999, 'saree1.jpg'),
(72, 'SAREE . 2', 'SAREE', 'Name : FLORAL PRINTED BLEND SAREE\r\n\r\nSaree Fabric : Khadi Silk\r\n\r\nBlouse : Running Blouse\r\n\r\nBlouse Fabric : Khadi Silk\r\n\r\nPattern : Printed\r\n\r\nBlouse Pattern : Printed\r\n\r\nNet Quantity (N) : Single\r\n\r\nSizes : \r\n\r\nFree Size\r\n\r\nCountry of Origin : India', 980, 'saree2.jpg'),
(73, 'SAREE . 3', 'SAREE', 'Name : FLORAL PRINTED BLEND SAREE\r\n\r\nSaree Fabric : Khadi Silk\r\n\r\nBlouse : Running Blouse\r\n\r\nBlouse Fabric : Khadi Silk\r\n\r\nPattern : Printed\r\n\r\nBlouse Pattern : Printed\r\n\r\nNet Quantity (N) : Single\r\n\r\nSizes : \r\n\r\nFree Size\r\n\r\nCountry of Origin : India', 2100, 'saree4.jpg'),
(74, 'SAREE . 4', 'SAREE', 'Name : FLORAL PRINTED BLEND SAREE\r\n\r\nSaree Fabric : Khadi Silk\r\n\r\nBlouse : Running Blouse\r\n\r\nBlouse Fabric : Khadi Silk\r\n\r\nPattern : Printed\r\n\r\nBlouse Pattern : Printed\r\n\r\nNet Quantity (N) : Single\r\n\r\nSizes : \r\n\r\nFree Size\r\n\r\nCountry of Origin : India', 1999, 'saree6.jpg'),
(75, 'SAREE . 5', 'SAREE', 'Name : Georgette Multicolor Saree With Blouse\r\n\r\nSaree Fabric : Georgette\r\n\r\nBlouse : Saree with Multiple Blouse\r\n\r\nBlouse Fabric : Georgette\r\n\r\nPattern : Printed\r\n\r\nBlouse Pattern : Solid\r\n\r\nNet Quantity (N) : Single\r\n\r\nSaree length : 6.30 meters including 0.80 meters blouse pcs.Light comfortable to wear,casual wear, perfect for festival.fashion net Jacquard fabric saree.Moti Work Saree.\r\n\r\nAnd We are making many types of saree brasso net saree, brasso saree, silk saree, georgette saree, printe', 2100, 'saree3.jpg'),
(76, 'SAREE . 6', 'SAREE', 'Name : Georgette Multicolor Saree With Blouse\r\n\r\nSaree Fabric : Georgette\r\n\r\nBlouse : Saree with Multiple Blouse\r\n\r\nBlouse Fabric : Georgette\r\n\r\nPattern : Printed\r\n\r\nBlouse Pattern : Solid\r\n\r\nNet Quantity (N) : Single\r\n\r\nSaree length : 6.30 meters including 0.80 meters blouse pcs.Light comfortable to wear,casual wear, perfect for festival.fashion net Jacquard fabric saree.Moti Work Saree.\r\n\r\nAnd We are making many types of saree brasso net saree, brasso saree, silk saree, georgette saree, printe', 2100, 'saree5.jpg'),
(77, 'LAHENGA . 1', 'LAHENGA', 'Name : BEAUTIFULL GEORGETTE LAHENGA CHOLI WITH REAL MIRROR WORK\r\n\r\nTopwear Fabric : Georgette\r\n\r\nBottomwear Fabric : Georgette\r\n\r\nDupatta Fabric : Net\r\n\r\nSet type : Choli And Dupatta\r\n\r\nTop Print or Pattern Type : Embellished\r\n\r\nBottom Print or Pattern Type : Embellished\r\n\r\nDupatta Print or Pattern Type : Embellished\r\n\r\nSizes : \r\n\r\nSemi Stitched (Lehenga Waist Size : 42 in, Lehenga Length Size: 44 in, Duppatta Length Size: 2.2 in)\r\n\r\nUn Stitched (Lehenga Waist Size : 42 m, Lehenga Length Size: 4', 3999, 'lahenga1.jpg'),
(78, 'LAHENGA . 2', 'LAHENGA', 'Name : FLEX_Lehnega_Preeti_chiku\r\n\r\nTopwear Fabric : Net\r\n\r\nBottomwear Fabric : Net\r\n\r\nDupatta Fabric : Net\r\n\r\nSet type : Choli And Dupatta\r\n\r\nTop Print or Pattern Type : Embroidered\r\n\r\nBottom Print or Pattern Type : Embroidered\r\n\r\nDupatta Print or Pattern Type : Lace\r\n\r\nSizes : \r\n\r\nFree Size (Lehenga Waist Size : 40 in, Lehenga Length Size: 44 in, Duppatta Length Size: 2.1 in)\r\n\r\nCountry of Origin : India', 5710, 'lahenga2.jpg'),
(79, 'LAHENGA . 3', 'LAHENGA', 'Name : FLEX_Lehnega_Preeti_chiku\r\n\r\nTopwear Fabric : Net\r\n\r\nBottomwear Fabric : Net\r\n\r\nDupatta Fabric : Net\r\n\r\nSet type : Choli And Dupatta\r\n\r\nTop Print or Pattern Type : Embroidered\r\n\r\nBottom Print or Pattern Type : Embroidered\r\n\r\nDupatta Print or Pattern Type : Lace\r\n\r\nSizes : \r\n\r\nFree Size (Lehenga Waist Size : 40 in, Lehenga Length Size: 44 in, Duppatta Length Size: 2.1 in)\r\n\r\nCountry of Origin : India', 1999, 'lahenga3.jpg'),
(80, 'LAHENGA . 4', 'LAHENGA', 'Name : Alisha Sensational Women Lehenga\r\n\r\nTopwear Fabric : Net\r\n\r\nBottomwear Fabric : Net\r\n\r\nDupatta Fabric : Net\r\n\r\nSet type : Choli And Dupatta\r\n\r\nTop Print or Pattern Type : Embroidered\r\n\r\nBottom Print or Pattern Type : Embroidered\r\n\r\nDupatta Print or Pattern Type : Embroidered\r\n\r\nSizes : \r\n\r\nSemi Stitched (Lehenga Waist Size : 42 m, Lehenga Length Size: 48 m, Duppatta Length Size: 2.25 m)\r\n\r\nUn Stitched, Free Size\r\n\r\nCountry of Origin : India', 2499, 'lahenga4.jpg'),
(81, 'LAHENGA . 5', 'LAHENGA', 'Name : Women&#39;s Flower lehenga\r\n\r\nTopwear Fabric : Net\r\n\r\nBottomwear Fabric : Net\r\n\r\nDupatta Fabric : Net\r\n\r\nSet type : Choli And Dupatta\r\n\r\nTop Print or Pattern Type : Embellished\r\n\r\nBottom Print or Pattern Type : Embellished\r\n\r\nDupatta Print or Pattern Type : Ruffle\r\n\r\nSizes : \r\n\r\nSemi Stitched (Lehenga Waist Size : 39 in, Lehenga Length Size: 42 in)\r\n\r\nCountry of Origin : India', 779, 'lahenga5.jpg'),
(82, 'LAHENGA . 6', 'LAHENGA', 'Name : Women&#39;s Flower lehenga\r\n\r\nTopwear Fabric : Net\r\n\r\nBottomwear Fabric : Net\r\n\r\nDupatta Fabric : Net\r\n\r\nSet type : Choli And Dupatta\r\n\r\nTop Print or Pattern Type : Embellished\r\n\r\nBottom Print or Pattern Type : Embellished\r\n\r\nDupatta Print or Pattern Type : Ruffle\r\n\r\nSizes : \r\n\r\nSemi Stitched (Lehenga Waist Size : 39 in, Lehenga Length Size: 42 in)\r\n\r\nCountry of Origin : India', 2100, 'lahenga6.jpg'),
(83, 'ITALIC', 'blue', 'FLOWER SHIRT AND FORMAL PANT CERTIN TYPE FEBRIC', 5570, 'b1.jpg'),
(84, 'BLUE STAR', 'blue', 'UPER KNEE DRESS ', 899, 'b2.jpg'),
(85, 'SAWINA', 'blue', 'SHIERT,FORMALPANT', 1570, 'b3.jpg'),
(86, 'NIGHT LIGHT', 'blue', 'SUAIT COAT DRESS', 949, 'b4.jpg'),
(87, 'BLUE DUO ', 'blue', 'FULL SLEEVE WITH STEEVE SKIRT ', 999, 'b5.jpg'),
(88, 'UP-DOWN 2', 'blue', 'FULL SLEEVE WORKOUT PRACTICE SET ', 1250, 'b6.jpg'),
(89, 'CORSET', 'grey', 'WHITE SHIRT WITH BLACK COAT FORMAL PANT UP BLAZER', 1560, 'GR1.jpg'),
(90, 'UP-TOP', 'grey', 'OFFICIAL TYPE DRESS ', 1499, 'GR2.jpg'),
(91, 'SHORT-COAT', 'grey', 'BOLD GIRL BEYOND YOUR EXPECTATIONS', 1570, 'GR3.jpg'),
(92, 'E-O SUIT', 'grey', 'CONFEDENTIAL STEVE DOWN', 1355, 'GR4.jpg'),
(93, 'E-COAT SUIT', 'grey', 'BODYCONE WITH SUITABLE COAT', 1390, 'GR5.jpg'),
(94, 'CORSET DUO', 'grey', 'FULL SLEEVE TOPTREDIS WITH PERFECT SET', 1799, 'GR6.jpg'),
(95, 'MIX-MAX', 'brown', 'WHITE-BROWN FORMAL MIX PANTS', 1990, 'WP1.webp'),
(96, 'DAISY-WHITE', 'brown', 'WHITE SHIRT WITH FORMAL PANT', 5400, 'WP2.webp'),
(97, 'CORAL', 'brown', 'WHITE SHIRT WITH FORMAL PANT', 1570, 'WP3.webp'),
(98, 'FLE-AIR', 'brown', 'WHITE SHIRT WITH FORMAL PANT DUO SET', 7800, 'WP4.webp'),
(99, 'SIMPLE O-WEAR', 'brown', 'BROWN SHIRT WITH FORMAL PANT', 6500, 'WP5.webp'),
(100, 'VELVET SET', 'brown', 'LIGHT BROWN WITH FORMAL PANT', 1200, 'WP6.webp'),
(101, 'Flower small frock', 'pink', ' SHORT AND HIGHLY MADE FOR YOUTH ', 800, 'p1.webp'),
(102, 'BABYDOLL FROCK', 'pink', ' SHORT AND HIGHLY MADE FOR YOUTH ', 1050, 'p2.webp'),
(103, 'MIDI DRESS', 'pink', ' SHORT AND HIGHLY MADE FOR YOUTH ', 1555, 'p3.webp'),
(104, 'BADOCON FROCK', 'pink', ' SHORT AND HIGHLY BLACKPINK MADE FOR YOUTH ', 1539, 'p5.webp'),
(105, 'SHIFT FROCK', 'pink', ' SHORT AND HIGHLY MADE FOR YOUTH ', 1999, 'p8.webp'),
(106, 'HALTER DRESS', 'pink', ' SHORT AND HIGHLY MADE FOR YOUTH ', 1459, 'p7.webp'),
(107, 'FLOWER', 'yellow', ' FEEL THE SUNWITH YELLOW SHORT AND HIGHLY MADE FOR YOUTH ', 1570, '1ssn.png'),
(108, 'SEA BLUE SHADES', 'yellow', ' FEEL THE SUN WITH YELLOW SHORT AND HIGHLY MADE FOR YOUTH ', 899, '2ssn.png'),
(109, 'BEAUTY BUTTERFLY', 'yellow', ' FEEL THE SUN WITH YELLOW SHORT AND HIGHLY MADE FOR YOUTH ', 1590, '3ssn.png'),
(110, 'WALL-FLOWER', 'yellow', ' FEEL THE SUN WITH YELLOW SHORT AND HIGHLY MADE FOR YOUTH ', 949, '4ssn.png'),
(111, 'PINK GINGER', 'yellow', ' FEEL THE SUN WITH YELLOW SHORT AND HIGHLY MADE FOR YOUTH ', 1250, '9ssn.png'),
(112, 'SUN FEEL', 'yellow', ' FEEL THE SUN WITH YELLOW SHORT AND HIGHLY MADE FOR YOUTH ', 1499, '11ssn.png'),
(113, 'MAXI 2', 'pink', 'PINK SHADES DRESS', 999, 'p4.webp'),
(114, 'YOUTU', 'pink', 'NET SLEEVE DRESS DOWN KNEE', 1299, 'p6.webp'),
(115, 'L-W DRESS', 'yellow', ' FEEL THE SUN WITH YELLOW SHORT AND HIGHLY MADE FOR YOUTH ', 1370, '10ssn.png'),
(116, 'GREEN FLARES', 'yellow', ' FEEL THE SUN WITH YELLOW SHORT AND HIGHLY MADE FOR YOUTH ', 1570, '12ssn.png'),
(117, 'F CUT', 'green', 'GREEN SHADES TO FEEL THE NATURE', 669, 'g1.jpg'),
(118, 'TRUMPET', 'green', 'GREEN SHADES TO FEEL THE NATURE', 889, 'g2.jpg'),
(119, 'TUNIC', 'green', 'GREEN SHADES TO FEEL THE NATURE', 1570, 'g3.jpg'),
(120, 'SMOKED', 'green', 'GREEN SHADES TO FEEL THE NATURE', 1399, 'g4.jpg'),
(121, 'SHEATH', 'green', 'GREEN SHADES TO FEEL THE NATURE', 2500, 'g5.jpg'),
(122, 'BURSH BASH', 'green', 'GREEN SHADES TO FEEL THE NATURE', 590, 'g6.jpg'),
(123, 'SACK', 'green', 'GREEN SHADES TO FEEL THE NATURE', 590, 'g7.jpg'),
(124, 'LAYRED', 'green', 'GREEN SHADES TO FEEL THE NATURE', 1150, 'g8.jpg'),
(125, 'ONE-CUT', 'blue', 'ONE LENGTH SIDE DRESS LONG', 8450, 'b7.jpg'),
(126, 'QUEEN BEE', 'blue', 'LONG FLARES DRESS ', 3999, 'b8.jpg'),
(127, 'GRISH', 'grey', 'WHOLE SUIT TOTALLY  SETS OF OFFICE', 2500, 'GR7.jpg'),
(128, 'UP-TOP DUO', 'grey', 'CORSET DUO BLACK GREY SETS', 2999, 'GR8.png'),
(129, 'SEA-SUIT', 'brown', 'LIGHT BROWN WITH FORMAL PANT', 1499, 'WP7.webp'),
(130, 'BROWNEY', 'brown', 'LIGHT BROWN WITH FORMAL PANT', 5400, 'WP8.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `image`) VALUES
(31, 'ww_admin', 'ww_admin@gmail.com', 'e89d22bbaede54e71d41848fe17fdf63', 'admin', '111.jpg'),
(32, 'Barsha', 'barsha@gmail.com', '0ec8d18868587d358d9eec5defbf9e95', 'user', 'C1.png'),
(33, 'nina', 'nina@gmail.com', 'f2ceea1536ac1b8fed1a167a9c8bf04d', 'user', 'a4c0023a7cadfcd9581acb6736e982e2.jpg'),
(34, 'Rupanajana Sanyal', 'rupanjana@gmail.com', '8c14af8a19c4b0d77a4fc68ac3dfafb0', 'user', 'YeP.png'),
(35, 'NINA SAN', 'sanyal.tulsi0903@gmail.com', 'f2ceea1536ac1b8fed1a167a9c8bf04d', 'user', 'WhatsApp Image 2023-06-13 at 10.55.46.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pid`, `name`, `price`, `image`) VALUES
(50, 32, 77, 'LAHENGA . 1', 3999, 'lahenga1.jpg'),
(51, 32, 32, 'SKY', 3999, 'S-1.jpg'),
(53, 32, 55, 'JWELLARY COLLECTION .1 ', 1090, 'j1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
