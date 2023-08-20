-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 20, 2023 at 01:56 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel-booking-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings_table`
--

CREATE TABLE `bookings_table` (
  `user_id` int(50) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `cost_per_night` decimal(10,2) NOT NULL,
  `Inc_Vat` decimal(10,2) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings_table`
--

INSERT INTO `bookings_table` (`user_id`, `booking_id`, `hotel_name`, `room_type`, `check_in_date`, `check_out_date`, `cost_per_night`, `Inc_Vat`, `total_cost`) VALUES
(2, '64e1ab230813b', 'Crystal Bay Residency', 'twin', '2023-08-21', '2023-08-22', '1750.00', '2012.50', '2012.50'),
(1, '64e1b8e0bfb8e', 'Radiant Oasis Retreat', 'double', '2023-08-20', '2023-08-26', '2300.00', '2645.00', '15870.00'),
(1, '64e1ba908dfd2', 'Velvet Sky Inn', 'single', '2023-08-22', '2023-08-26', '2867.00', '3297.05', '13188.20'),
(1, '64e1bc8c353a6', 'Crystal Bay Residency', 'twin', '2023-10-16', '2023-10-27', '1750.00', '2012.50', '22137.50'),
(1, '64e1c0691013b', 'Serene Haven Suites', 'single', '2023-09-03', '2023-09-05', '950.00', '1092.50', '2185.00'),
(2, '64e1c0d2479fb', 'Crystal Bay Residency', 'single', '2023-08-22', '2023-08-26', '1522.00', '1750.30', '7001.20'),
(2, '64e201f783618', 'Aurora Plaza Hotel', 'suite', '2023-09-01', '2023-09-08', '3450.00', '3967.50', '27772.50');

-- --------------------------------------------------------

--
-- Table structure for table `hotels_table`
--

CREATE TABLE `hotels_table` (
  `hotel_name` varchar(100) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `cost_per_night` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels_table`
--

INSERT INTO `hotels_table` (`hotel_name`, `room_type`, `cost_per_night`, `description`, `image_url`) VALUES
('Radiant Oasis Retreat', 'Single Room', '1500.00', 'Experience tranquility in our Rooms at Radiant Oasis Retreat. These thoughtfully designed rooms are tailored for travelers seeking comfort and convenience. With a plush bed and a calming atmosphere, you\'ll find the perfect haven for rest and relaxation. Our Rooms provide a harmonious blend of modern amenities and a cozy retreat.', 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'),
('Radiant Oasis Retreat', 'Twin Room', '2300.00', 'Experience tranquility in our Rooms at Radiant Oasis Retreat. These thoughtfully designed rooms are tailored for travelers seeking comfort and convenience. With a plush bed and a calming atmosphere, you\'ll find the perfect haven for rest and relaxation. Our Rooms provide a harmonious blend of modern amenities and a cozy retreat.', 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'),
('Radiant Oasis Retreat', 'Double Room', '2750.00', 'Experience tranquility in our Rooms at Radiant Oasis Retreat. These thoughtfully designed rooms are tailored for travelers seeking comfort and convenience. With a plush bed and a calming atmosphere, you\'ll find the perfect haven for rest and relaxation. Our Rooms provide a harmonious blend of modern amenities and a cozy retreat.', 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'),
('Radiant Oasis Retreat', 'Suite', '3450.00', 'Experience tranquility in our Rooms at Radiant Oasis Retreat. These thoughtfully designed rooms are tailored for travelers seeking comfort and convenience. With a plush bed and a calming atmosphere, you\'ll find the perfect haven for rest and relaxation. Our Rooms provide a harmonious blend of modern amenities and a cozy retreat.', 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'),
('Aurora Plaze', 'Single Room', '2324.00', 'Welcome to Aurora Plaza, where luxury and comfort intertwine to create an unforgettable stay. Nestled in the heart of a bustling city, our hotel offers a serene oasis for both business and leisure travelers. Immerse yourself in elegant surroundings and modern amenities, from spacious rooms adorned with panoramic views to exquisite dining options that cater to your every craving. Relax by our inviting indoor and outdoor pools, indulge in rejuvenating spa treatments, and experience personalized service that exceeds your expectations. Whether you\'re here to explore the city\'s vibrant culture or unwind in opulent tranquility, Aurora Plaza is your gateway to a remarkable journey.', 'https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80'),
('Aurora Plaze', 'Twin Room', '2500.00', 'Welcome to Aurora Plaza, where luxury and comfort intertwine to create an unforgettable stay. Nestled in the heart of a bustling city, our hotel offers a serene oasis for both business and leisure travelers. Immerse yourself in elegant surroundings and modern amenities, from spacious rooms adorned with panoramic views to exquisite dining options that cater to your every craving. Relax by our inviting indoor and outdoor pools, indulge in rejuvenating spa treatments, and experience personalized service that exceeds your expectations. Whether you\'re here to explore the city\'s vibrant culture or unwind in opulent tranquility, Aurora Plaza is your gateway to a remarkable journey.', 'https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80'),
('Aurora Plaze', 'Double Room', '2800.00', 'Welcome to Aurora Plaza, where luxury and comfort intertwine to create an unforgettable stay. Nestled in the heart of a bustling city, our hotel offers a serene oasis for both business and leisure travelers. Immerse yourself in elegant surroundings and modern amenities, from spacious rooms adorned with panoramic views to exquisite dining options that cater to your every craving. Relax by our inviting indoor and outdoor pools, indulge in rejuvenating spa treatments, and experience personalized service that exceeds your expectations. Whether you\'re here to explore the city\'s vibrant culture or unwind in opulent tranquility, Aurora Plaza is your gateway to a remarkable journey.', 'https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80'),
('Aurora Plaze', 'Suite', '3450.00', 'Welcome to Aurora Plaza, where luxury and comfort intertwine to create an unforgettable stay. Nestled in the heart of a bustling city, our hotel offers a serene oasis for both business and leisure travelers. Immerse yourself in elegant surroundings and modern amenities, from spacious rooms adorned with panoramic views to exquisite dining options that cater to your every craving. Relax by our inviting indoor and outdoor pools, indulge in rejuvenating spa treatments, and experience personalized service that exceeds your expectations. Whether you\'re here to explore the city\'s vibrant culture or unwind in opulent tranquility, Aurora Plaza is your gateway to a remarkable journey.', 'https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80'),
('Majestic Horizons Resort', 'Single Room', '1364.00', 'Discover the epitome of luxury and relaxation at Majestic Horizons Resort. Nestled amidst pristine landscapes, our resort offers a sanctuary of serenity where every moment is designed to elevate your senses. Immerse yourself in the grandeur of our elegantly appointed rooms, each offering breathtaking views that stretch across lush gardens and azure waters. Unwind by our private beaches, indulge in world-class spa treatments, and savor gourmet dining experiences that tantalize your taste buds. With a blend of refined elegance and modern sophistication, Majestic Horizons Resort promises an unforgettable escape where your dreams and desires take center stage.', 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'),
('Majestic Horizons Resort', 'Twin Room', '1050.00', 'Discover the epitome of luxury and relaxation at Majestic Horizons Resort. Nestled amidst pristine landscapes, our resort offers a sanctuary of serenity where every moment is designed to elevate your senses. Immerse yourself in the grandeur of our elegantly appointed rooms, each offering breathtaking views that stretch across lush gardens and azure waters. Unwind by our private beaches, indulge in world-class spa treatments, and savor gourmet dining experiences that tantalize your taste buds. With a blend of refined elegance and modern sophistication, Majestic Horizons Resort promises an unforgettable escape where your dreams and desires take center stage.', 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'),
('Majestic Horizons Resort', 'Double Room', '1999.00', 'Discover the epitome of luxury and relaxation at Majestic Horizons Resort. Nestled amidst pristine landscapes, our resort offers a sanctuary of serenity where every moment is designed to elevate your senses. Immerse yourself in the grandeur of our elegantly appointed rooms, each offering breathtaking views that stretch across lush gardens and azure waters. Unwind by our private beaches, indulge in world-class spa treatments, and savor gourmet dining experiences that tantalize your taste buds. With a blend of refined elegance and modern sophistication, Majestic Horizons Resort promises an unforgettable escape where your dreams and desires take center stage.', 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'),
('Majestic Horizons Resort', 'Suite', '2450.00', 'Discover the epitome of luxury and relaxation at Majestic Horizons Resort. Nestled amidst pristine landscapes, our resort offers a sanctuary of serenity where every moment is designed to elevate your senses. Immerse yourself in the grandeur of our elegantly appointed rooms, each offering breathtaking views that stretch across lush gardens and azure waters. Unwind by our private beaches, indulge in world-class spa treatments, and savor gourmet dining experiences that tantalize your taste buds. With a blend of refined elegance and modern sophistication, Majestic Horizons Resort promises an unforgettable escape where your dreams and desires take center stage.', 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'),
('Serene Haven Suites', 'Single Room', '950.00', 'Welcome to Serene Haven Suites, your haven of tranquility in the heart of urban excitement. Our boutique hotel is a sanctuary where sophistication meets serenity, offering a refined escape for both business and leisure travelers. Immerse yourself in the allure of our exquisitely designed suites, each adorned with modern amenities and thoughtfully curated touches. From the moment you step into our elegant lobby, you\'ll be enveloped in a sense of calm that permeates every corner of our property. Unwind in our lush courtyard, indulge in gourmet dining experiences, and experience warm and attentive service that anticipates your every need. At Serene Haven Suites, we invite you to embrace relaxation and revel in the harmony of a truly serene experience.', 'https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1025&q=80'),
('Serene Haven Suites', 'Twin Room', '1290.00', 'Welcome to Serene Haven Suites, your haven of tranquility in the heart of urban excitement. Our boutique hotel is a sanctuary where sophistication meets serenity, offering a refined escape for both business and leisure travelers. Immerse yourself in the allure of our exquisitely designed suites, each adorned with modern amenities and thoughtfully curated touches. From the moment you step into our elegant lobby, you\'ll be enveloped in a sense of calm that permeates every corner of our property. Unwind in our lush courtyard, indulge in gourmet dining experiences, and experience warm and attentive service that anticipates your every need. At Serene Haven Suites, we invite you to embrace relaxation and revel in the harmony of a truly serene experience.', 'https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1025&q=80'),
('Serene Haven Suites', 'Double Room', '1500.00', 'Welcome to Serene Haven Suites, your haven of tranquility in the heart of urban excitement. Our boutique hotel is a sanctuary where sophistication meets serenity, offering a refined escape for both business and leisure travelers. Immerse yourself in the allure of our exquisitely designed suites, each adorned with modern amenities and thoughtfully curated touches. From the moment you step into our elegant lobby, you\'ll be enveloped in a sense of calm that permeates every corner of our property. Unwind in our lush courtyard, indulge in gourmet dining experiences, and experience warm and attentive service that anticipates your every need. At Serene Haven Suites, we invite you to embrace relaxation and revel in the harmony of a truly serene experience.', 'https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1025&q=80'),
('Serene Haven Suites', 'Suite', '1995.00', 'Welcome to Serene Haven Suites, your haven of tranquility in the heart of urban excitement. Our boutique hotel is a sanctuary where sophistication meets serenity, offering a refined escape for both business and leisure travelers. Immerse yourself in the allure of our exquisitely designed suites, each adorned with modern amenities and thoughtfully curated touches. From the moment you step into our elegant lobby, you\'ll be enveloped in a sense of calm that permeates every corner of our property. Unwind in our lush courtyard, indulge in gourmet dining experiences, and experience warm and attentive service that anticipates your every need. At Serene Haven Suites, we invite you to embrace relaxation and revel in the harmony of a truly serene experience.', 'https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1025&q=80'),
('Velvet Sky Inn', 'Single Room', '2867.00', 'Step into a world of luxury and elegance at Velvet Sky Inn. Nestled amidst the beauty of nature, our inn offers a haven of comfort and sophistication for discerning travelers. As you enter, you\'ll be greeted by an atmosphere of timeless charm and modern allure, where every detail has been meticulously crafted to ensure an exceptional stay. Our well-appointed rooms offer a serene retreat, while our panoramic views captivate your senses and inspire relaxation. Indulge in delectable dining, unwind in our tranquil spa, and let our attentive staff cater to your desires. At Velvet Sky Inn, you\'ll experience a blend of opulence and serenity that defines true hospitality.', 'https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=749&q=80'),
('Velvet Sky Inn', 'Twin Room', '3005.00', 'Step into a world of luxury and elegance at Velvet Sky Inn. Nestled amidst the beauty of nature, our inn offers a haven of comfort and sophistication for discerning travelers. As you enter, you\'ll be greeted by an atmosphere of timeless charm and modern allure, where every detail has been meticulously crafted to ensure an exceptional stay. Our well-appointed rooms offer a serene retreat, while our panoramic views captivate your senses and inspire relaxation. Indulge in delectable dining, unwind in our tranquil spa, and let our attentive staff cater to your desires. At Velvet Sky Inn, you\'ll experience a blend of opulence and serenity that defines true hospitality.', 'https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=749&q=80'),
('Velvet Sky Inn', 'Double Room', '3300.00', 'Step into a world of luxury and elegance at Velvet Sky Inn. Nestled amidst the beauty of nature, our inn offers a haven of comfort and sophistication for discerning travelers. As you enter, you\'ll be greeted by an atmosphere of timeless charm and modern allure, where every detail has been meticulously crafted to ensure an exceptional stay. Our well-appointed rooms offer a serene retreat, while our panoramic views captivate your senses and inspire relaxation. Indulge in delectable dining, unwind in our tranquil spa, and let our attentive staff cater to your desires. At Velvet Sky Inn, you\'ll experience a blend of opulence and serenity that defines true hospitality.', 'https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=749&q=80'),
('Velvet Sky Inn', 'Suite', '3950.00', 'Step into a world of luxury and elegance at Velvet Sky Inn. Nestled amidst the beauty of nature, our inn offers a haven of comfort and sophistication for discerning travelers. As you enter, you\'ll be greeted by an atmosphere of timeless charm and modern allure, where every detail has been meticulously crafted to ensure an exceptional stay. Our well-appointed rooms offer a serene retreat, while our panoramic views captivate your senses and inspire relaxation. Indulge in delectable dining, unwind in our tranquil spa, and let our attentive staff cater to your desires. At Velvet Sky Inn, you\'ll experience a blend of opulence and serenity that defines true hospitality.', 'https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=749&q=80'),
('Crystal Bay Residency', 'Single Room', '1522.00', 'Welcome to Crystal Bay Residency, where the allure of coastal beauty meets unmatched comfort. Situated along the glistening shores, our hotel offers a captivating escape that combines modern luxury with the charm of the sea. Each room is a retreat of sophistication, adorned with contemporary amenities and designed to provide both relaxation and inspiration. Bask in the serenity of the sea breeze from your private balcony, savor culinary delights that mirror the flavors of the ocean, and immerse yourself in the rejuvenating embrace of our wellness offerings. Whether you seek an idyllic beach getaway or a tranquil sanctuary, Crystal Bay Residency promises an enchanting experience that echoes the rhythms of the waves.', 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'),
('Crystal Bay Residency', 'Twin Room', '1750.00', 'Welcome to Crystal Bay Residency, where the allure of coastal beauty meets unmatched comfort. Situated along the glistening shores, our hotel offers a captivating escape that combines modern luxury with the charm of the sea. Each room is a retreat of sophistication, adorned with contemporary amenities and designed to provide both relaxation and inspiration. Bask in the serenity of the sea breeze from your private balcony, savor culinary delights that mirror the flavors of the ocean, and immerse yourself in the rejuvenating embrace of our wellness offerings. Whether you seek an idyllic beach getaway or a tranquil sanctuary, Crystal Bay Residency promises an enchanting experience that echoes the rhythms of the waves.', 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'),
('Crystal Bay Residency', 'Double Room', '1900.00', 'Welcome to Crystal Bay Residency, where the allure of coastal beauty meets unmatched comfort. Situated along the glistening shores, our hotel offers a captivating escape that combines modern luxury with the charm of the sea. Each room is a retreat of sophistication, adorned with contemporary amenities and designed to provide both relaxation and inspiration. Bask in the serenity of the sea breeze from your private balcony, savor culinary delights that mirror the flavors of the ocean, and immerse yourself in the rejuvenating embrace of our wellness offerings. Whether you seek an idyllic beach getaway or a tranquil sanctuary, Crystal Bay Residency promises an enchanting experience that echoes the rhythms of the waves.', 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'),
('Crystal Bay Residency', 'Suite', '2300.00', 'Welcome to Crystal Bay Residency, where the allure of coastal beauty meets unmatched comfort. Situated along the glistening shores, our hotel offers a captivating escape that combines modern luxury with the charm of the sea. Each room is a retreat of sophistication, adorned with contemporary amenities and designed to provide both relaxation and inspiration. Bask in the serenity of the sea breeze from your private balcony, savor culinary delights that mirror the flavors of the ocean, and immerse yourself in the rejuvenating embrace of our wellness offerings. Whether you seek an idyllic beach getaway or a tranquil sanctuary, Crystal Bay Residency promises an enchanting experience that echoes the rhythms of the waves.', 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');

-- --------------------------------------------------------

--
-- Table structure for table `registration_table`
--

CREATE TABLE `registration_table` (
  `id` int(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings_table`
--
ALTER TABLE `bookings_table`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `registration_table`
--
ALTER TABLE `registration_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_table`
--
ALTER TABLE `registration_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings_table`
--
ALTER TABLE `bookings_table`
  ADD CONSTRAINT `bookings_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
