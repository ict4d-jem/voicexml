-- Serverversion: 5.7.25-0ubuntu0.18.04.2
-- PHP-version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict4d`
--

-- --------------------------------------------------------

--
-- Tablestructure for table `users`
--

CREATE TABLE `users` (
  `calledId` varchar(40) NOT NULL,
  `region` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `cropsize` varchar(255) DEFAULT NULL,
  `latestcrop` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index for exported tables
--

--
-- Index for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`calledId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
