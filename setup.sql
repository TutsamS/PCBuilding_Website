--
-- Database: `mydb`
--

CREATE DATABASE IF NOT EXISTS `db_orders` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_orders`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_orders`;

CREATE TABLE `db_orders`.`tbl_orders` ( 
	`firstname` VARCHAR(20) NOT NULL , 
	`lastname` VARCHAR(20) NOT NULL , 
	`address` VARCHAR(60) NOT NULL , 
	`city` VARCHAR(20) NOT NULL , 
	`state` VARCHAR(2) NOT NULL , 
	`zipcode` INT(5) NOT NULL , 
	`modelid` VARCHAR(20) NOT NULL , 
	`price` INT(6) NOT NULL , 
	`email` VARCHAR(40) NOT NULL , 
	`phone` VARCHAR(20) NOT NULL , 
	`orderid` INT(10) NOT NULL , 
	`status` ENUM('INPROGRESS', 'SHIPPED')
	) ENGINE = InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
ADD PRIMARY KEY (`orderid`);
