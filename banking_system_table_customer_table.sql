
-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customerid` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customerid`, `customer_name`, `customer_email`, `customer_balance`) VALUES
(1, 'Habib', 'habib123@gmail.com', 43991),
(2, 'Ansar', 'ansar786@gmail.com', 96009),
(3, 'Anas', 'anas677@gmail.com', 67000),
(4, 'farooq', 'farooqi347@gmail.com', 568556),
(5, 'Sharique', 'sharque37387@gmail.com', 966336),
(6, 'Owais', 'owais9894@gmail.com', 98566),
(7, 'Hussain', 'hussain298@gmail.com', 783566),
(8, 'Umar', 'umar678@gmail.com', 89000),
(9, 'Adnan', 'adnan5465@gmail.com', 70000),
(10, 'Rizwan', 'rizwn0001@gmail.com', 100000);
