

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE Database onlinerestaurantsystem1 ;

USE  onlinerestaurantsystem1;

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `category` (`CategoryID`, `Name`) VALUES
(2, 'chicken'),
(3, 'fish'),
(1, 'meat'),
(8, 'Pizza'),
(13, 'عصاير');

CREATE TABLE `item` (
  `ItemID` int(11) NOT NULL,
  `Name` varchar(225) DEFAULT NULL,
  `Size` varchar(225) DEFAULT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `item` (`ItemID`, `Name`, `Size`, `Image`, `Price`, `CategoryID`) VALUES
(7, 'Ancona Chicken', '1 -Chicken', 'Ancona Chicken.jpg', 120, 2),
(8, 'Ancona Chicken', '1/2 K', 'Ancona Chicken.jpg', 60, 2),
(9, 'Ancona Chicken', '1/4 K', 'Ancona Chicken.jpg', 30, 2),
(10, 'Barnevelder Chicken', '1 -Chicken', 'Barnevelder Chicken.jpg', 140, 2),
(11, 'Barnevelder Chicken', '1/2 K', 'Barnevelder Chicken.jpg', 70, 2),
(12, 'Barnevelder Chicken', '1/4 K', 'Barnevelder Chicken.jpg', 35, 2),
(13, 'Golden Comet Chicken', '1 K', 'Golden Comet Chicken.jpg', 160, 2),
(14, 'Golden Comet Chicken', '1/2 K', 'Golden Comet Chicken.jpg', 80, 2),
(15, 'Golden Comet Chicken', '1/4 K', 'Golden Comet Chicken.jpg', 40, 2),
(16, 'Leghorn Chicken', '1 pice ', 'Leghorn Chicken.jpg', 125, 2),
(17, 'Plymouth Rock Chicken', '1 pice ', 'Plymouth Rock Chicken.jpg', 100, 2),
(18, 'Rhode Island Red Chicken', '1 K', 'Rhode Island Red Chicken.jpg', 150, 2),
(19, 'Rhode Island Red Chicken', '1/2 K', 'Rhode Island Red Chicken.jpg', 75, 2),
(20, 'Sussex Chicken', '1 pice ', 'Sussex Chicken.jpg', 175, 2),
(21, 'Bourbon Fish', '1 pice', 'Bourbon Fish.jpg', 250, 3),
(22, 'Mackerel Fish', '2 pice', 'Mackerel Fish.jpg', 180, 3),
(23, 'Salmon Fish', '3 pice', 'Salmon Fish.jpg', 180, 3),
(24, 'Salmon Fish', '2 pice', 'Salmon Fish.jpg', 120, 3),
(25, 'Sardine Fish', '1 dich', 'Sardine Fish.jpg', 145, 3),
(26, 'Sea bass Fish', '1 dich', 'Sea bass Fish.jpg', 200, 3),
(27, 'Tilapia Fish', '1 dich', 'Tilapia Fish.jpg', 180, 3),
(28, 'Tuna Fish', '1 dich', 'Tuna Fish.jpg', 165, 3),
(29, 'Beef Meat', '1 K', 'Beef Meat.jpg', 250, 1),
(30, 'Beef Meat', '1/2 K', 'Beef Meat.jpg', 130, 1),
(31, 'Beef Meat', '1/4 K', 'Beef Meat.jpg', 70, 1),
(32, 'Camel Meat', '1 K', 'Camel Meat.jpg', 180, 1),
(34, 'Camel Meat', '1/2 K', 'Camel Meat.jpg', 90, 1),
(35, 'Goat Meat', '1 K', 'Goat Meat.jpg', 220, 1),
(36, 'Goat Meat', '1/2 K', 'Goat Meat.jpg', 110, 1),
(37, 'Mutton Meat', '1 K', 'Mutton Meat.jpg', 250, 1),
(38, 'Mutton Meat', '1/2 K', 'Mutton Meat.jpg', 125, 1),
(39, 'Ostrich Meat', '1 K', 'Ostrich Meat.jpg', 260, 1),
(40, 'Ostrich Meat', '1/2 K', 'Ostrich Meat.jpg', 130, 1),
(41, 'Ostrich Meat', '1/4 K', 'Ostrich Meat.jpg', 70, 1),
(42, 'Turkey Meat', '1 K', 'Turkey Meat.jpg', 300, 1),
(43, 'Turkey Meat', '1/2 K', 'Turkey Meat.jpg', 150, 1),
(44, 'Veal Meat', '1 K', 'Veal Meat.jpg', 240, 1),
(45, 'Veal Meat', '1/2 K', 'Veal Meat.jpg', 120, 1),
(46, 'BBQ chicken Pizza', 'Large', 'BBQ chicken Pizza.jpg', 140, 8),
(47, 'BBQ chicken Pizza', 'medium', 'BBQ chicken Pizza.jpg', 70, 8),
(48, 'medium', 'small', 'BBQ chicken Pizza.jpg', 40, 8),
(49, 'Four cheese Pizza', 'Large', 'Four cheese Pizza.jpg', 120, 8),
(51, 'Four cheese Pizza', 'medium', 'Four cheese Pizza.jpg', 60, 8),
(52, 'Margherita Pizza', 'Large', 'Margherita Pizza.jpg', 100, 8),
(53, 'Margherita Pizza', 'medium', 'Margherita Pizza.jpg', 50, 8),
(54, 'Mushroom Pizza', 'Large', 'Mushroom Pizza.jpg', 120, 8),
(55, 'Mushroom Pizza', 'medium', 'Mushroom Pizza.jpg', 60, 8),
(56, 'Pepperoni Pizza', 'medium', 'Pepperoni Pizza.jpg', 60, 8),
(57, 'Pepperoni Pizza', 'Large', 'Pepperoni Pizza.jpg', 120, 8),
(60, 'عصير فرش مانجا', ' صغير ', 'Mackerel Fish.jpg', 15, 13);



CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `TotalPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `orders` (`OrderID`, `CustomerID`, `TotalPrice`) VALUES
(10, 6, 300),
(11, 6, 280),
(12, 6, 460),
(13, 1, 300),
(14, 1, 125),
(15, 1, 165),
(16, 1, 580);



CREATE TABLE `ordersitem` (
  `OrderID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `ordersitem` (`OrderID`, `ItemID`) VALUES
(10, 23),
(10, 24),
(11, 9),
(11, 11),
(11, 27),
(12, 9),
(12, 11),
(12, 27),
(12, 56),
(12, 57),
(13, 23),
(13, 24),
(14, 38),
(15, 28),
(16, 40),
(16, 42),
(16, 43);


CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `user_Role` varchar(2500) NOT NULL DEFAULT 'user',
  `Password` varchar(225) DEFAULT NULL,
  `Address` varchar(225) NOT NULL,
  `Phone` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `user` (`ID`, `Name`, `Email`, `user_Role`, `Password`, `Address`, `Phone`) VALUES
(1, 'sameh makram', 'fammakram618@gmail.com', 'user', '$2y$10$j9UMdreRyPBLMSpb7KwMG.VTAwKYFJCwUw.8cOLlrYEsa.wfnvesm', 'sohag', '01271044939'),
(3, 'Abanob Edward', 'abanobefwa@gmail.com', 'admin', '$2y$10$p59aAOIkr4RIM56TaBdpAeuwJZGBe0BemrD75nlbxNwGdvYRJi1Rm', 'sohag-Tema', '01271044939'),
(6, 'demiana Adel', 'demina@gmail.com', 'user', '$2y$10$Bltk9CO7n0YJh.MUgaeV1eY0K3.dZY.psHPw5th6YwUhXU6LrC/LS', 'assuit-elganiam', '01271044939'),
(10, 'sameh makram', 'fammakram6186@gmail.com', 'user', '$2y$10$yHTkIQaFd4NtioNl5CgHM.eag2.LzJGG4b2IkvmUV8u/kOaa88MVS', 'sohag-Tema', '01271044939');



ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Name_2` (`Name`),
  ADD UNIQUE KEY `Name_3` (`Name`);


ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `CategoryID` (`CategoryID`);


ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`);


ALTER TABLE `ordersitem`
  ADD PRIMARY KEY (`OrderID`,`ItemID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `ordersitem`
--
ALTER TABLE `ordersitem`
  ADD CONSTRAINT `ordersitem_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `ordersitem_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `item` (`ItemID`);
COMMIT;


