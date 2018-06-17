-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 01:58 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_votingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ballot`
--

CREATE TABLE `tbl_ballot` (
  `BALLOT_ID` int(11) NOT NULL,
  `BALLOT_NUMBER` varchar(255) NOT NULL,
  `STATE` int(11) NOT NULL,
  `ELECTION_NUMBER` varchar(255) NOT NULL,
  `CANDIDATE_NUMBER` varchar(255) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate`
--

CREATE TABLE `tbl_candidate` (
  `CANDIDATE_ID` int(11) NOT NULL,
  `STATE` int(11) NOT NULL,
  `CANDIDATE_NUMBER` varchar(255) NOT NULL,
  `ELECTION_NUMBER` varchar(255) NOT NULL,
  `PARTYLIST_NUMBER` varchar(255) NOT NULL,
  `POSITION_NUMBER` varchar(255) NOT NULL,
  `STUDENT_NUMBER` varchar(255) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_election`
--

CREATE TABLE `tbl_election` (
  `ELECTION_ID` int(11) NOT NULL,
  `ELECTION_NUMBER` varchar(255) NOT NULL,
  `STATE` int(11) NOT NULL,
  `ELECTION_NAME` varchar(255) NOT NULL,
  `ELECTION_DESCRIPTION` varchar(255) NOT NULL,
  `ELECTION_TERM` varchar(255) NOT NULL,
  `ELECTION_STARTDATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ELECTION_ENDDATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ELECTION_VOTE_STARTDATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ELECTION_VOTE_ENDDATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade_level`
--

CREATE TABLE `tbl_grade_level` (
  `GRADE_LEVEL_ID` int(11) NOT NULL,
  `STATE` int(11) NOT NULL,
  `GRADE_LEVEL_NUMBER` varchar(255) NOT NULL,
  `GRADE_LEVEL` varchar(255) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partylist`
--

CREATE TABLE `tbl_partylist` (
  `PARTYLIST_ID` int(11) NOT NULL,
  `STATE` int(11) NOT NULL,
  `PARTYLIST_NUMBER` varchar(255) NOT NULL,
  `PARTYLIST_NAME` varchar(255) NOT NULL,
  `PARTYLIST_DESCRIPTION` varchar(255) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `POSITION_ID` int(11) NOT NULL,
  `POSITION_NUMBER` varchar(255) NOT NULL,
  `STATE` int(11) NOT NULL,
  `POSITION_TITLE` varchar(255) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_record_class`
--

CREATE TABLE `tbl_record_class` (
  `RECORD_CLASS_ID` int(11) NOT NULL,
  `RECORD_CLASS_NUMBER` varchar(255) NOT NULL,
  `RECORD_CLASS_TERM` varchar(255) NOT NULL,
  `STUDENT_NUMBER` varchar(255) NOT NULL,
  `GRADE_LEVEL_NUMBER` varchar(255) NOT NULL,
  `SECTION_NUMBER` varchar(255) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_record_vote`
--

CREATE TABLE `tbl_record_vote` (
  `RECORD_VOTE_ID` int(11) NOT NULL,
  `RECORD_VOTE_NUMBER` varchar(255) NOT NULL,
  `STATE` int(11) NOT NULL,
  `ELECTION_NUMBER` varchar(255) NOT NULL,
  `BALLOT_NUMBER` varchar(255) NOT NULL,
  `VOTER_NUMBER` varchar(255) NOT NULL,
  `CANDIDATE_NUMBER` varchar(255) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section`
--

CREATE TABLE `tbl_section` (
  `SECTION_ID` int(11) NOT NULL,
  `STATE` int(11) NOT NULL,
  `SECTION_NUMBER` varchar(255) NOT NULL,
  `SECTION_NAME` varchar(255) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `STATE_ID` int(11) NOT NULL,
  `STATE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`STATE_ID`, `STATE`) VALUES
(1, 'ACTIVE'),
(2, 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `STATUS_ID` int(11) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`STATUS_ID`, `STATUS`, `DATE_CREATED`) VALUES
(1, 'VOTED', '2018-06-12 00:52:38'),
(2, 'NOT_VOTED', '2018-06-12 00:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `STUDENT_ID` int(11) NOT NULL,
  `STUDENT_NUMBER` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `STUDENT_LRN` varchar(255) NOT NULL,
  `STUDENT_FNAME` varchar(255) NOT NULL,
  `STUDENT_MNAME` varchar(255) NOT NULL,
  `STUDENT_LNAME` varchar(255) NOT NULL,
  `STUDENT_EMAIL` varchar(255) NOT NULL,
  `STUDENT_GENDER` varchar(255) NOT NULL,
  `STUDENT_CONTACTNUM` varchar(255) NOT NULL,
  `STUDENT_AGE` int(11) NOT NULL,
  `STUDENT_ADDRESS` varchar(255) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `USER_ID` int(11) NOT NULL,
  `USER_NUMBER` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `USER_NAME` varchar(255) NOT NULL,
  `USER_PASSWORD` varchar(255) NOT NULL,
  `USER_TYPE_NUMBER` varchar(255) NOT NULL,
  `STUDENT_NUMBER` varchar(255) NOT NULL,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`USER_ID`, `USER_NUMBER`, `STATE`, `USER_NAME`, `USER_PASSWORD`, `USER_TYPE_NUMBER`, `STUDENT_NUMBER`, `DATE_CREATED`, `DATE_MODIFIED`) VALUES
(1, 'USER-0001', '1', 'administrator', 'admin12345', 'UT-0001', 'NONE', '2018-05-20 02:13:04', '2018-05-20 02:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `USER_TYPE_ID` int(11) NOT NULL,
  `USER_TYPE_NUMBER` varchar(255) NOT NULL,
  `USER_TYPE` varchar(255) NOT NULL,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`USER_TYPE_ID`, `USER_TYPE_NUMBER`, `USER_TYPE`, `DATE_CREATED`) VALUES
(1, 'UT-0001', 'ADMINISTRATOR', '2018-05-20 02:43:46'),
(2, 'UT-0002', 'MODERATOR', '2018-05-20 02:43:46'),
(3, 'UT-0003', 'STUDENT', '2018-05-20 02:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voter`
--

CREATE TABLE `tbl_voter` (
  `VOTER_ID` int(11) NOT NULL,
  `STATE` int(11) NOT NULL,
  `VOTER_NUMBER` varchar(255) NOT NULL,
  `ELECTION_NUMBER` varchar(255) NOT NULL,
  `STUDENT_NUMBER` varchar(255) NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_CREATED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ballot`
--
ALTER TABLE `tbl_ballot`
  ADD PRIMARY KEY (`BALLOT_ID`);

--
-- Indexes for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  ADD PRIMARY KEY (`CANDIDATE_ID`),
  ADD KEY `CANDIDATE_NUMBER` (`CANDIDATE_NUMBER`),
  ADD KEY `ELECTION_NUMBER` (`ELECTION_NUMBER`),
  ADD KEY `PARTYLIST_NUMBER` (`PARTYLIST_NUMBER`),
  ADD KEY `POSITION_NUMBER` (`POSITION_NUMBER`),
  ADD KEY `STUDENT_NUMBER` (`STUDENT_NUMBER`);

--
-- Indexes for table `tbl_election`
--
ALTER TABLE `tbl_election`
  ADD PRIMARY KEY (`ELECTION_ID`),
  ADD KEY `ELECTION_NUMBER` (`ELECTION_NUMBER`);

--
-- Indexes for table `tbl_grade_level`
--
ALTER TABLE `tbl_grade_level`
  ADD PRIMARY KEY (`GRADE_LEVEL_ID`),
  ADD UNIQUE KEY `GRADE_LEVEL_NUMBER` (`GRADE_LEVEL_NUMBER`);

--
-- Indexes for table `tbl_partylist`
--
ALTER TABLE `tbl_partylist`
  ADD PRIMARY KEY (`PARTYLIST_ID`),
  ADD UNIQUE KEY `PARTYLIST_NUMBER` (`PARTYLIST_NUMBER`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`POSITION_ID`),
  ADD KEY `POSITION_NUMBER` (`POSITION_NUMBER`);

--
-- Indexes for table `tbl_record_class`
--
ALTER TABLE `tbl_record_class`
  ADD PRIMARY KEY (`RECORD_CLASS_ID`),
  ADD KEY `RECORD_CLASS_NUMBER` (`RECORD_CLASS_NUMBER`),
  ADD KEY `STUDENT_NUMBER` (`STUDENT_NUMBER`),
  ADD KEY `GRADE_LEVEL_NUMBER` (`GRADE_LEVEL_NUMBER`),
  ADD KEY `SECTION_NUMBER` (`SECTION_NUMBER`);

--
-- Indexes for table `tbl_record_vote`
--
ALTER TABLE `tbl_record_vote`
  ADD PRIMARY KEY (`RECORD_VOTE_ID`),
  ADD KEY `RECORD_VOTE_NUMBER` (`RECORD_VOTE_NUMBER`),
  ADD KEY `ELECTION_NUMBER` (`ELECTION_NUMBER`),
  ADD KEY `BALLOT_NUMBER` (`BALLOT_NUMBER`),
  ADD KEY `VOTER_NUMBER` (`VOTER_NUMBER`),
  ADD KEY `CANDIDATE_NUMBER` (`CANDIDATE_NUMBER`);

--
-- Indexes for table `tbl_section`
--
ALTER TABLE `tbl_section`
  ADD PRIMARY KEY (`SECTION_ID`),
  ADD KEY `SECTION_NUMBER` (`SECTION_NUMBER`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`STATE_ID`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`STATUS_ID`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`STUDENT_ID`),
  ADD KEY `STUDENT_NUMBER` (`STUDENT_NUMBER`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `USER_NAME` (`USER_NAME`),
  ADD UNIQUE KEY `USER_NUMBER` (`USER_NUMBER`),
  ADD KEY `STUDENT_NUMBER` (`STUDENT_NUMBER`),
  ADD KEY `USER_TYPE_NUMBER` (`USER_TYPE_NUMBER`);

--
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`USER_TYPE_ID`),
  ADD KEY `USER_TYPE_NUMBER` (`USER_TYPE_NUMBER`);

--
-- Indexes for table `tbl_voter`
--
ALTER TABLE `tbl_voter`
  ADD PRIMARY KEY (`VOTER_ID`),
  ADD KEY `VOTER_NUMBER` (`VOTER_NUMBER`),
  ADD KEY `ELECTION_NUMBER` (`ELECTION_NUMBER`),
  ADD KEY `STUDENT_NUMBER` (`STUDENT_NUMBER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ballot`
--
ALTER TABLE `tbl_ballot`
  MODIFY `BALLOT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  MODIFY `CANDIDATE_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_election`
--
ALTER TABLE `tbl_election`
  MODIFY `ELECTION_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_grade_level`
--
ALTER TABLE `tbl_grade_level`
  MODIFY `GRADE_LEVEL_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_partylist`
--
ALTER TABLE `tbl_partylist`
  MODIFY `PARTYLIST_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `POSITION_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_record_class`
--
ALTER TABLE `tbl_record_class`
  MODIFY `RECORD_CLASS_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_record_vote`
--
ALTER TABLE `tbl_record_vote`
  MODIFY `RECORD_VOTE_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_section`
--
ALTER TABLE `tbl_section`
  MODIFY `SECTION_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `STATE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `STATUS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `STUDENT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `USER_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_voter`
--
ALTER TABLE `tbl_voter`
  MODIFY `VOTER_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
