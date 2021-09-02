create database crud;

use crud;

CREATE TABLE `account` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
   `phone`varchar(100) NOT NULL,
    `password`varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);