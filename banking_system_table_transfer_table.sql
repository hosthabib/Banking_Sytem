
-- --------------------------------------------------------

--
-- Table structure for table `transfer_table`
--

CREATE TABLE `transfer_table` (
  `customerid` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer_table`
--

INSERT INTO `transfer_table` (`customerid`, `customer_name`, `customer_email`, `customer_balance`) VALUES
(1, 'Habib', 'habib123@gmail.com', 20000),
(2, 'Ansar', 'ansar786@gmail.com', 4009),
(3, 'Anas', 'anas677@gmail.com', 0),
(4, 'farooq', 'farooqi347@gmail.com', 0),
(5, 'Sharique', 'sharique37387@gmail.com', 0),
(6, 'Owais', 'owais9894@gmail.com', 0),
(7, 'Hussain', 'hussain298@gmail.com', 0),
(8, 'Umar', 'umar678@gmail.com', 0),
(9, 'Adnan', 'adnan5465@gmail.com', 0),
(10, 'Rizwan', 'rizwn0001@gmail.com', 0);
