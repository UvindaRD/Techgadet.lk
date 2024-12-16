-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 10:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_gadget_lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `product_name`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(14, 'fvlldgg5goo0445bsb137204t6', 2, 'UGREEN Fast Charger', 3990.00, 2, '2024-12-15 05:12:23', '2024-12-15 05:15:17'),
(15, 'fvlldgg5goo0445bsb137204t6', 4, 'Essager fast Charger', 2400.00, 1, '2024-12-15 07:06:24', '2024-12-15 07:06:24'),
(16, 'fvlldgg5goo0445bsb137204t6', 5, 'Essager cables', 1490.00, 1, '2024-12-15 07:29:50', '2024-12-15 07:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `total_amount`, `order_date`, `status`) VALUES
(3, 'fvlldgg5goo0445bsb137204t6', 'venura', 'imethakintha@gmail.com', '0768400317', '86/5 Magammana homagama', 11470.00, '2024-12-14 17:15:24', 'pending'),
(4, '7ls661mntg0spbr60q86r2b0s3', 'Amali', 'Nimal2021@gmail.com', '0764567891', '86/5 kottawa', 7480.00, '2024-12-16 06:47:38', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `specifications` text DEFAULT NULL,
  `main_features` text DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `short_description`, `long_description`, `specifications`, `main_features`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'Baseus 20W Fast charger', 3490.00, 'Baseus 20W', 'Premium Baseus 60W Fast Charging Cable delivers exceptional charging speeds and data transfer rates. Built with high-quality materials and advanced technology for optimal performance and durability.', '- 20w fast charging\r\n- Type C and USB dual ports\r\n- QC 4.0 and QC 3.0\r\n- PD 3.0\r\n- BCT(Baseus cooling technology)\r\n', '- 20w fast charging\r\n- Type C and USB dual ports\r\n- QC 4.0 and QC 3.0\r\n- PD 3.0\r\n- BCT(Baseus cooling technology)', 'Baseus_chager\\img1.jpg.jpg', 'Baseus_chager\\img2.jpg.jpg', 'Baseus_chager\\img3.jpg.jpg', 'Baseus_chager\\img4.jpg.jpg'),
(2, 'UGREEN Fast Charger', 3990.00, '20W Charging Power', 'The UGREEN 20W Fast Charger is a powerful and efficient charging solution designed for modern devices. This compact charger delivers optimal charging speeds while maintaining the safety of your devices.', '- Input: AC 100-240V 50/60Hz\n- Output: 20W maximum power delivery\n- Protection: Over-current, over-voltage, and short-circuit protection\n- Compatibility: Works with iPhone, Samsung, and other USB-C devices\n- Certification: CE, FCC, RoHS compliant', '- 20W Charging Power\n- Universal Compatibility\n- Smart Power Distribution\n- Compact & Portable Design\n- Advanced Safety Protection', 'ugreen2\\u1.jpg.jpg', 'ugreen2\\u2.jpg.jpg', 'ugreen2\\u3.jpg.jpg', 'ugreen2\\u4.jpg.jpg'),
(3, 'Lenovo thinkplud XT88 Earbuds', 3990.00, 'HIFI sound system', 'Experience premium audio quality with the Lenovo ThinkPlus XT88 Earbuds. These wireless earbuds deliver exceptional HIFI sound, making your music, calls, and entertainment come alive with crystal-clear clarity and deep, rich bass.', '- Bluetooth Version: 5.2\n- Battery Life: Up to 20 hours with charging case\n- Driver Size: 13mm\n- Water Resistance: IPX5\n- Charging Time: 1.5 hours\n- Touch Controls: Yes\n- Noise Reduction: Environmental Noise Cancellation', '- HIFI Sound System\n- Long Battery Life\n- Quick Charging\n- Touch Controls\n- Comfortable Fit\n- Bluetooth 5.2', 'buds\\b1.jpg.jpg', 'buds\\b2.jpg.jpg', 'buds\\b3.jpg.jpg', NULL),
(4, 'Essager Fast Charger', 2400.00, '20W Fast Charging', 'Experience lightning-fast charging with the Essager 20W Fast Charger. This compact yet powerful charger delivers optimal charging speeds for your smartphones, tablets, and other USB-C devices. Built with advanced safety features and universal compatibility, it\'s the perfect charging solution for all your devices.', '- Input: AC 100-240V 50/60Hz\n- Output: USB-C PD 20W max\n- Quick Charge Protocol: PD 3.0/QC 4.0+\n- Safety Features: Over-current, over-voltage, short-circuit protection\n- Size: Compact and portable design\n- Certification: CE, FCC, RoHS compliant', '- 20W Fast Charging Technology\n- Universal Compatibility\n- Compact Design\n- Multiple Protection Systems\n- Smart Power Distribution\n- Temperature Control', 'Essager\\be1.jpg.jpg', 'Essager\\be2.jpg.jpg', 'Essager\\be3.jpg.jpg', 'Essager\\be4.jpg.jpg'),
(5, 'Essager cables', 1490.00, 'Essager', 'Premium Quality Essager USB Cable featuring durable braided nylon construction and fast charging capability. Compatible with multiple devices and engineered for long-lasting performance.', '- Material: Braided Nylon\n- Length: 1.2 meters\n- Maximum Current: 3A\n- Fast Charging Compatible\n- Reinforced Connectors\n- Bend Lifespan: 10000+ times', '- Fast Charging Support\n- Durable Braided Design\n- Universal Compatibility\n- Tangle-free Construction\n- Enhanced Durability\n- Quick Data Transfer', 'Essager_cable\\es1.jpg', 'Essager_cable\\es2.jpg', 'Essager_cable\\es3.jpg', 'Essager_cable\\es4.jpg'),
(6, 'Baseus cables', 1990.00, 'Baseus 60W', 'Premium Baseus 60W Fast Charging Cable delivers exceptional charging speeds and data transfer rates. Built with high-quality materials and advanced technology for optimal performance and durability.', '- Maximum Power: 60W\n- Input Voltage: 20V/3A\n- Cable Length: 1.2m\n- Material: Premium Nylon Braided\n- Connector Type: USB-C\n- Data Transfer Speed: Up to 480Mbps', '- 60W Fast Charging\n- Premium Build Quality\n- Universal Compatibility\n- Enhanced Durability\n- Quick Data Sync\n- Temperature Control', 'Baseus_cable\\bes1.jpg', 'Baseus_cable\\bes2.jpg', 'Baseus_cable\\bes3.jpg', 'Baseus_cable\\bes4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
