-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2013 at 02:26 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hackathon-sti`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobileapps`
--

CREATE TABLE `mobileapps` (
  `ma_id` int(3) NOT NULL AUTO_INCREMENT,
  `ma_name` varchar(25) NOT NULL,
  PRIMARY KEY (`ma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mobile_app_img`
--

CREATE TABLE `mobile_app_img` (
  `mai_id` int(3) NOT NULL AUTO_INCREMENT,
  `ma_id` int(3) NOT NULL,
  `mai_filename` varchar(30) NOT NULL,
  `mai_filetype` varchar(15) NOT NULL,
  `mai_filedir` varchar(150) NOT NULL,
  `mai_filesize` int(10) NOT NULL,
  PRIMARY KEY (`mai_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(15) NOT NULL AUTO_INCREMENT,
  `ma_id` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `date_time_voted` datetime NOT NULL,
  PRIMARY KEY (`vote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
