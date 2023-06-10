-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 08:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `doctors` (
  `doc_no` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_joining` date NOT NULL,
  `area_of_specialization` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `flight_name` varchar(100) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `departure_datetime` datetime DEFAULT NULL,
  `charges` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `students` (
  `stud_id` varchar(50) NOT NULL,
  `stud_name` varchar(100) NOT NULL,
  `stud_contact` varchar(20) NOT NULL,
  `stud_email` varchar(100) NOT NULL,
  `stud_dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

