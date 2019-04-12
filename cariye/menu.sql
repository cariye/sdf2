-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 04:11 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `number`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `enviree`
-- 

CREATE TABLE `enviree` (
  `id` int(11) NOT NULL,
  `text` varchar(11) NOT NULL,
  `textt` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `enviree`
-- 

INSERT INTO `enviree` VALUES (0, 'About The B', 'This lovely, well-written book is concerned foremost with creating typography and is essential for professionals who regularly work for clients.\r\nAuthor writes about designing with the correct typeface; striving for rhythm, proportion, and harmony; choosing and combining type; designing pages; using section heads, subheads, footnotes, and tables; applying kerning and other type adjustments to improve legibility; and adding special characters, including punctuation and diacritical marks.\r\n\r\nThe Elements of Typographic Style teaches the history of and the artistic and practical perspectives on a variety of type families that are available in Europe and America today.');
