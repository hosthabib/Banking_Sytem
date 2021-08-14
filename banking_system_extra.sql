
--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `transfer_table`
--
ALTER TABLE `transfer_table`
  ADD PRIMARY KEY (`customerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customerid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfer_table`
--
ALTER TABLE `transfer_table`
  MODIFY `customerid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
