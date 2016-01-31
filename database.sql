-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2015 at 12:45 PM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mohammad_script`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_fail`
--

CREATE TABLE IF NOT EXISTS `login_fail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(128) NOT NULL,
  `session` varchar(100) NOT NULL,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(128) NOT NULL,
  `room_type` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_cat`
--

CREATE TABLE IF NOT EXISTS `staff_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(128) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_list`
--

CREATE TABLE IF NOT EXISTS `staff_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(128) NOT NULL,
  `image` tinytext NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `parola` text NOT NULL,
  `hash` text NOT NULL,
  `level` int(1) NOT NULL,
  `user` int(1) NOT NULL,
  `lang` text NOT NULL,
  `online` int(1) NOT NULL,
  `country` varchar(128) NOT NULL,
  `prices` varchar(128) NOT NULL,
  `state` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `from` varchar(10) NOT NULL,
  `to` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;


CREATE TABLE IF NOT EXISTS `profiles`
`id` int(11) NOT NULL AUTO_INCREMENT`,
`user_id` int(11) NOT NULL,

PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `parola`, `hash`, `lang`, `online`, `country`, `prices`, `state`, `price`, `from`, `to`) VALUES
(30, 'admin', 'arsene.claudiu94@gmail.com', '89bacf2bf8f0c87535bab41361041a14e9e7554fc9a625a490e43ef5daf643588560f6c3740b11ed35adef66a7e2d15da714b751b491b51a86c12323c3e601bd', '7efc3fbd66483433b8a6343108fd3786ebafb6c61237140f20058029a92853c5cfaa81140e6fa1eeb9e443b3ddc8d33c117cf8269bcd823923b222108d21c638', 'ro', 1426761068, 'Romania', '50', 'Bucuresti', '50', '02-01-2015', '01-03-2014'),
(32, 'test', 'test@example.com', '72c886b379383dcf5c7f896f1eb5ce29be338d58c51c52cd4dfb78ae850e5f5e7fdac4260729f376cec2729fe2b18f4ca7e6ad1244f0096b112bc3d0e446ec73', '4aa9aa2f88a966941266944df611974c58d1073f01c742f68d6635efdc90a5f1837d54233bda246b6c0c68589ddc06ef8c1b6b16f136753cbbfd8cbefdb36432', 'ro', 0, 'Romania', '100', 'Constanta', '100', '01-02-2015', '19-02-2015'),
(33, 'gigel', 'hellspawn_2009@yahoo.com', '31952fab219e3afb87ac873699b7fa9a4ac97f5398707458960fad8024edc7b008aa2d1e15b20cac6408d16b7d1168d8fd496ccda2f699d92b0e084a595ec4ae', '1797ca2b9b134d4aa8c47250db663de26452247acfcc29cce62ddf0f73f0b9d65a70de60db243ef8cd3e53425d07a0972ca82a5583891eba9829416b2dd2d055', 'ro', 1426759634, 'Romania', '50', 'Brasov', '50', '06-02-2015', '02-02-2016'),
(34, 'playtrav', 'garysderfh@gmail.com', '1cad545857b7174e90dded8fdf0e6f792ab9572a95c5b1a48cc4f21e4846e443febc7398e068b494e661fef75ff6a8747901062d3a8ca305aab8434f546933ef', '1e00668556d95c18575758e82c19869bb42766fb216337b1e803750981cc1e8f51e7a02f80d006d60dc4abc122081dd73f02ad2a3c47aef016eb18e52356c345', 'ro', 0, '', '', '', '', '', '');

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `ptitle1` varchar(128) NOT NULL,
  `ptitle2` varchar(128) NOT NULL,
  `ptitle3` varchar(128) NOT NULL,
  `ptitle4` varchar(128) NOT NULL,
  `ptitle5` varchar(128) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `text4` text NOT NULL,
  `text5` text NOT NULL,
  `postby` varchar(128) NOT NULL,
  `date` varchar(100) NOT NULL,
  `rand` varchar(128) NOT NULL,
  `for` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

CREATE TABLE IF NOT EXISTS `pnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `postby` varchar(128) NOT NULL,
  `date` varchar(100) NOT NULL,
  `rand` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `profile_id` int(99) NOT NULL,
  `hotel_name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

CREATE TABLE `countries` (
`id` int(11) NOT NULL auto_increment,
`short_name` varchar(2) NOT NULL default '',
`name` varchar(100) NOT NULL default '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- 
-- Dumping data for table `countries`
-- 
INSERT INTO `countries` VALUES (1, 'us', 'United States');
INSERT INTO `countries` VALUES (2, 'ca', 'Canada');
INSERT INTO `countries` VALUES (3, 'af', 'Afghanistan');
INSERT INTO `countries` VALUES (4, 'al', 'Albania');
INSERT INTO `countries` VALUES (5, 'dz', 'Algeria');
INSERT INTO `countries` VALUES (6, 'ds', 'American Samoa');
INSERT INTO `countries` VALUES (7, 'ad', 'Andorra');
INSERT INTO `countries` VALUES (8, 'ao', 'Angola');
INSERT INTO `countries` VALUES (9, 'ai', 'Anguilla');
INSERT INTO `countries` VALUES (10, 'aq', 'Antarctica');
INSERT INTO `countries` VALUES (11, 'ag', 'Antigua and/or Barbuda');
INSERT INTO `countries` VALUES (12, 'ar', 'Argentina');
INSERT INTO `countries` VALUES (13, 'am', 'Armenia');
INSERT INTO `countries` VALUES (14, 'aw', 'Aruba');
INSERT INTO `countries` VALUES (15, 'au', 'Australia');
INSERT INTO `countries` VALUES (16, 'at', 'Austria');
INSERT INTO `countries` VALUES (17, 'az', 'Azerbaijan');
INSERT INTO `countries` VALUES (18, 'bs', 'Bahamas');
INSERT INTO `countries` VALUES (19, 'bh', 'Bahrain');
INSERT INTO `countries` VALUES (20, 'bd', 'Bangladesh');
INSERT INTO `countries` VALUES (21, 'bb', 'Barbados');
INSERT INTO `countries` VALUES (22, 'by', 'Belarus');
INSERT INTO `countries` VALUES (23, 'be', 'Belgium');
INSERT INTO `countries` VALUES (24, 'bz', 'Belize');
INSERT INTO `countries` VALUES (25, 'bj', 'Benin');
INSERT INTO `countries` VALUES (26, 'bm', 'Bermuda');
INSERT INTO `countries` VALUES (27, 'bt', 'Bhutan');
INSERT INTO `countries` VALUES (28, 'bo', 'Bolivia');
INSERT INTO `countries` VALUES (29, 'ba', 'Bosnia and Herzegovina');
INSERT INTO `countries` VALUES (30, 'bw', 'Botswana');
INSERT INTO `countries` VALUES (31, 'bv', 'Bouvet Island');
INSERT INTO `countries` VALUES (32, 'br', 'Brazil');
INSERT INTO `countries` VALUES (33, 'io', 'British lndian Ocean Territory');
INSERT INTO `countries` VALUES (34, 'bn', 'Brunei Darussalam');
INSERT INTO `countries` VALUES (35, 'bg', 'Bulgaria');
INSERT INTO `countries` VALUES (36, 'bf', 'Burkina Faso');
INSERT INTO `countries` VALUES (37, 'bi', 'Burundi');
INSERT INTO `countries` VALUES (38, 'kh', 'Cambodia');
INSERT INTO `countries` VALUES (39, 'cm', 'Cameroon');
INSERT INTO `countries` VALUES (40, 'cv', 'Cape Verde');
INSERT INTO `countries` VALUES (41, 'ky', 'Cayman Islands');
INSERT INTO `countries` VALUES (42, 'cf', 'Central African Republic');
INSERT INTO `countries` VALUES (43, 'td', 'Chad');
INSERT INTO `countries` VALUES (44, 'cl', 'Chile');
INSERT INTO `countries` VALUES (45, 'cn', 'China');
INSERT INTO `countries` VALUES (46, 'cx', 'Christmas Island');
INSERT INTO `countries` VALUES (47, 'cc', 'Cocos (Keeling) Islands');
INSERT INTO `countries` VALUES (48, 'co', 'Colombia');
INSERT INTO `countries` VALUES (49, 'km', 'Comoros');
INSERT INTO `countries` VALUES (50, 'cg', 'Congo');
INSERT INTO `countries` VALUES (51, 'ck', 'Cook Islands');
INSERT INTO `countries` VALUES (52, 'cr', 'Costa Rica');
INSERT INTO `countries` VALUES (53, 'hr', 'Croatia (Hrvatska)');
INSERT INTO `countries` VALUES (54, 'cu', 'Cuba');
INSERT INTO `countries` VALUES (55, 'cy', 'Cyprus');
INSERT INTO `countries` VALUES (56, 'cz', 'Czech Republic');
INSERT INTO `countries` VALUES (57, 'dk', 'Denmark');
INSERT INTO `countries` VALUES (58, 'dj', 'Djibouti');
INSERT INTO `countries` VALUES (59, 'dm', 'Dominica');
INSERT INTO `countries` VALUES (60, 'do', 'Dominican Republic');
INSERT INTO `countries` VALUES (61, 'tp', 'East Timor');
INSERT INTO `countries` VALUES (62, 'ec', 'Ecuador');
INSERT INTO `countries` VALUES (63, 'eg', 'Egypt');
INSERT INTO `countries` VALUES (64, 'sv', 'El Salvador');
INSERT INTO `countries` VALUES (65, 'gq', 'Equatorial Guinea');
INSERT INTO `countries` VALUES (66, 'er', 'Eritrea');
INSERT INTO `countries` VALUES (67, 'ee', 'Estonia');
INSERT INTO `countries` VALUES (68, 'et', 'Ethiopia');
INSERT INTO `countries` VALUES (69, 'fk', 'Falkland Islands (Malvinas)');
INSERT INTO `countries` VALUES (70, 'fo', 'Faroe Islands');
INSERT INTO `countries` VALUES (71, 'fj', 'Fiji');
INSERT INTO `countries` VALUES (72, 'fi', 'Finland');
INSERT INTO `countries` VALUES (73, 'fr', 'France');
INSERT INTO `countries` VALUES (74, 'fx', 'France, Metropolitan');
INSERT INTO `countries` VALUES (75, 'gf', 'French Guiana');
INSERT INTO `countries` VALUES (76, 'pf', 'French Polynesia');
INSERT INTO `countries` VALUES (77, 'tf', 'French Southern Territories');
INSERT INTO `countries` VALUES (78, 'ga', 'Gabon');
INSERT INTO `countries` VALUES (79, 'gm', 'Gambia');
INSERT INTO `countries` VALUES (80, 'ge', 'Georgia');
INSERT INTO `countries` VALUES (81, 'de', 'Germany');
INSERT INTO `countries` VALUES (82, 'gh', 'Ghana');
INSERT INTO `countries` VALUES (83, 'gi', 'Gibraltar');
INSERT INTO `countries` VALUES (84, 'gr', 'Greece');
INSERT INTO `countries` VALUES (85, 'gl', 'Greenland');
INSERT INTO `countries` VALUES (86, 'gd', 'Grenada');
INSERT INTO `countries` VALUES (87, 'gp', 'Guadeloupe');
INSERT INTO `countries` VALUES (88, 'gu', 'Guam');
INSERT INTO `countries` VALUES (89, 'gt', 'Guatemala');
INSERT INTO `countries` VALUES (90, 'gn', 'Guinea');
INSERT INTO `countries` VALUES (91, 'gw', 'Guinea-Bissau');
INSERT INTO `countries` VALUES (92, 'gy', 'Guyana');
INSERT INTO `countries` VALUES (93, 'ht', 'Haiti');
INSERT INTO `countries` VALUES (94, 'hm', 'Heard and Mc Donald Islands');
INSERT INTO `countries` VALUES (95, 'hn', 'Honduras');
INSERT INTO `countries` VALUES (96, 'hk', 'Hong Kong');
INSERT INTO `countries` VALUES (97, 'hu', 'Hungary');
INSERT INTO `countries` VALUES (98, 'is', 'Iceland');
INSERT INTO `countries` VALUES (99, 'in', 'India');
INSERT INTO `countries` VALUES (100, 'id', 'Indonesia');
INSERT INTO `countries` VALUES (101, 'ir', 'Iran (Islamic Republic of)');
INSERT INTO `countries` VALUES (102, 'iq', 'Iraq');
INSERT INTO `countries` VALUES (103, 'ie', 'Ireland');
INSERT INTO `countries` VALUES (104, 'il', 'Israel');
INSERT INTO `countries` VALUES (105, 'it', 'Italy');
INSERT INTO `countries` VALUES (106, 'ci', 'Ivory Coast');
INSERT INTO `countries` VALUES (107, 'jm', 'Jamaica');
INSERT INTO `countries` VALUES (108, 'jp', 'Japan');
INSERT INTO `countries` VALUES (109, 'jo', 'Jordan');
INSERT INTO `countries` VALUES (110, 'kz', 'Kazakhstan');
INSERT INTO `countries` VALUES (111, 'ke', 'Kenya');
INSERT INTO `countries` VALUES (112, 'ki', 'Kiribati');
INSERT INTO `countries` VALUES (113, 'kp', 'Korea, Democratic People''s Republic of');
INSERT INTO `countries` VALUES (114, 'kr', 'Korea, Republic of');
INSERT INTO `countries` VALUES (115, 'xk', 'Kosovo');
INSERT INTO `countries` VALUES (116, 'kw', 'Kuwait');
INSERT INTO `countries` VALUES (117, 'kg', 'Kyrgyzstan');
INSERT INTO `countries` VALUES (118, 'la', 'Lao People''s Democratic Republic');
INSERT INTO `countries` VALUES (119, 'lv', 'Latvia');
INSERT INTO `countries` VALUES (120, 'lb', 'Lebanon');
INSERT INTO `countries` VALUES (121, 'ls', 'Lesotho');
INSERT INTO `countries` VALUES (122, 'lr', 'Liberia');
INSERT INTO `countries` VALUES (123, 'ly', 'Libyan Arab Jamahiriya');
INSERT INTO `countries` VALUES (124, 'li', 'Liechtenstein');
INSERT INTO `countries` VALUES (125, 'lt', 'Lithuania');
INSERT INTO `countries` VALUES (126, 'lu', 'Luxembourg');
INSERT INTO `countries` VALUES (127, 'mo', 'Macau');
INSERT INTO `countries` VALUES (128, 'mk', 'Macedonia');
INSERT INTO `countries` VALUES (129, 'mg', 'Madagascar');
INSERT INTO `countries` VALUES (130, 'mw', 'Malawi');
INSERT INTO `countries` VALUES (131, 'my', 'Malaysia');
INSERT INTO `countries` VALUES (132, 'mv', 'Maldives');
INSERT INTO `countries` VALUES (133, 'ml', 'Mali');
INSERT INTO `countries` VALUES (134, 'mt', 'Malta');
INSERT INTO `countries` VALUES (135, 'mh', 'Marshall Islands');
INSERT INTO `countries` VALUES (136, 'mq', 'Martinique');
INSERT INTO `countries` VALUES (137, 'mr', 'Mauritania');
INSERT INTO `countries` VALUES (138, 'mu', 'Mauritius');
INSERT INTO `countries` VALUES (139, 'ty', 'Mayotte');
INSERT INTO `countries` VALUES (140, 'mx', 'Mexico');
INSERT INTO `countries` VALUES (141, 'fm', 'Micronesia, Federated States of');
INSERT INTO `countries` VALUES (142, 'md', 'Moldova, Republic of');
INSERT INTO `countries` VALUES (143, 'mc', 'Monaco');
INSERT INTO `countries` VALUES (144, 'mn', 'Mongolia');
INSERT INTO `countries` VALUES (145, 'me', 'Montenegro');
INSERT INTO `countries` VALUES (146, 'ms', 'Montserrat');
INSERT INTO `countries` VALUES (147, 'ma', 'Morocco');
INSERT INTO `countries` VALUES (148, 'mz', 'Mozambique');
INSERT INTO `countries` VALUES (149, 'mm', 'Myanmar');
INSERT INTO `countries` VALUES (150, 'na', 'Namibia');
INSERT INTO `countries` VALUES (151, 'nr', 'Nauru');
INSERT INTO `countries` VALUES (152, 'np', 'Nepal');
INSERT INTO `countries` VALUES (153, 'nl', 'Netherlands');
INSERT INTO `countries` VALUES (154, 'an', 'Netherlands Antilles');
INSERT INTO `countries` VALUES (155, 'nc', 'New Caledonia');
INSERT INTO `countries` VALUES (156, 'nz', 'New Zealand');
INSERT INTO `countries` VALUES (157, 'ni', 'Nicaragua');
INSERT INTO `countries` VALUES (158, 'ne', 'Niger');
INSERT INTO `countries` VALUES (159, 'ng', 'Nigeria');
INSERT INTO `countries` VALUES (160, 'nu', 'Niue');
INSERT INTO `countries` VALUES (161, 'nf', 'Norfork Island');
INSERT INTO `countries` VALUES (162, 'mp', 'Northern Mariana Islands');
INSERT INTO `countries` VALUES (163, 'no', 'Norway');
INSERT INTO `countries` VALUES (164, 'om', 'Oman');
INSERT INTO `countries` VALUES (165, 'pk', 'Pakistan');
INSERT INTO `countries` VALUES (166, 'pw', 'Palau');
INSERT INTO `countries` VALUES (167, 'pa', 'Panama');
INSERT INTO `countries` VALUES (168, 'pg', 'Papua New Guinea');
INSERT INTO `countries` VALUES (169, 'py', 'Paraguay');
INSERT INTO `countries` VALUES (170, 'pe', 'Peru');
INSERT INTO `countries` VALUES (171, 'ph', 'Philippines');
INSERT INTO `countries` VALUES (172, 'pn', 'Pitcairn');
INSERT INTO `countries` VALUES (173, 'pl', 'Poland');
INSERT INTO `countries` VALUES (174, 'pt', 'Portugal');
INSERT INTO `countries` VALUES (175, 'pr', 'Puerto Rico');
INSERT INTO `countries` VALUES (176, 'qa', 'Qatar');
INSERT INTO `countries` VALUES (177, 're', 'Reunion');
INSERT INTO `countries` VALUES (178, 'ro', 'Romania');
INSERT INTO `countries` VALUES (179, 'ru', 'Russian Federation');
INSERT INTO `countries` VALUES (180, 'rw', 'Rwanda');
INSERT INTO `countries` VALUES (181, 'kn', 'Saint Kitts and Nevis');
INSERT INTO `countries` VALUES (182, 'lc', 'Saint Lucia');
INSERT INTO `countries` VALUES (183, 'vc', 'Saint Vincent and the Grenadines');
INSERT INTO `countries` VALUES (184, 'ws', 'Samoa');
INSERT INTO `countries` VALUES (185, 'sm', 'San Marino');
INSERT INTO `countries` VALUES (186, 'st', 'Sao Tome and Principe');
INSERT INTO `countries` VALUES (187, 'sa', 'Saudi Arabia');
INSERT INTO `countries` VALUES (188, 'sn', 'Senegal');
INSERT INTO `countries` VALUES (189, 'rs', 'Serbia');
INSERT INTO `countries` VALUES (190, 'sc', 'Seychelles');
INSERT INTO `countries` VALUES (191, 'sl', 'Sierra Leone');
INSERT INTO `countries` VALUES (192, 'sg', 'Singapore');
INSERT INTO `countries` VALUES (193, 'sk', 'Slovakia');
INSERT INTO `countries` VALUES (194, 'si', 'Slovenia');
INSERT INTO `countries` VALUES (195, 'sb', 'Solomon Islands');
INSERT INTO `countries` VALUES (196, 'so', 'Somalia');
INSERT INTO `countries` VALUES (197, 'za', 'South Africa');
INSERT INTO `countries` VALUES (198, 'gs', 'South Georgia South Sandwich Islands');
INSERT INTO `countries` VALUES (199, 'es', 'Spain');
INSERT INTO `countries` VALUES (200, 'lk', 'Sri Lanka');
INSERT INTO `countries` VALUES (201, 'sh', 'St. Helena');
INSERT INTO `countries` VALUES (202, 'pm', 'St. Pierre and Miquelon');
INSERT INTO `countries` VALUES (203, 'sd', 'Sudan');
INSERT INTO `countries` VALUES (204, 'sr', 'Suriname');
INSERT INTO `countries` VALUES (205, 'sj', 'Svalbarn and Jan Mayen Islands');
INSERT INTO `countries` VALUES (206, 'sz', 'Swaziland');
INSERT INTO `countries` VALUES (207, 'se', 'Sweden');
INSERT INTO `countries` VALUES (208, 'ch', 'Switzerland');
INSERT INTO `countries` VALUES (209, 'sy', 'Syrian Arab Republic');
INSERT INTO `countries` VALUES (210, 'tw', 'Taiwan');
INSERT INTO `countries` VALUES (211, 'tj', 'Tajikistan');
INSERT INTO `countries` VALUES (212, 'tz', 'Tanzania, United Republic of');
INSERT INTO `countries` VALUES (213, 'th', 'Thailand');
INSERT INTO `countries` VALUES (214, 'tg', 'Togo');
INSERT INTO `countries` VALUES (215, 'tk', 'Tokelau');
INSERT INTO `countries` VALUES (216, 'to', 'Tonga');
INSERT INTO `countries` VALUES (217, 'tt', 'Trinidad and Tobago');
INSERT INTO `countries` VALUES (218, 'tn', 'Tunisia');
INSERT INTO `countries` VALUES (219, 'tr', 'Turkey');
INSERT INTO `countries` VALUES (220, 'tm', 'Turkmenistan');
INSERT INTO `countries` VALUES (221, 'tc', 'Turks and Caicos Islands');
INSERT INTO `countries` VALUES (222, 'tv', 'Tuvalu');
INSERT INTO `countries` VALUES (223, 'ug', 'Uganda');
INSERT INTO `countries` VALUES (224, 'ua', 'Ukraine');
INSERT INTO `countries` VALUES (225, 'ae', 'United Arab Emirates');
INSERT INTO `countries` VALUES (226, 'gb', 'United Kingdom');
INSERT INTO `countries` VALUES (227, 'um', 'United States minor outlying islands');
INSERT INTO `countries` VALUES (228, 'uy', 'Uruguay');
INSERT INTO `countries` VALUES (229, 'uz', 'Uzbekistan');
INSERT INTO `countries` VALUES (230, 'vu', 'Vanuatu');
INSERT INTO `countries` VALUES (231, 'va', 'Vatican City State');
INSERT INTO `countries` VALUES (232, 've', 'Venezuela');
INSERT INTO `countries` VALUES (233, 'vn', 'Vietnam');
INSERT INTO `countries` VALUES (234, 'vg', 'Virgin Islands (British)');
INSERT INTO `countries` VALUES (235, 'vi', 'Virgin Islands (U.S.)');
INSERT INTO `countries` VALUES (236, 'wf', 'Wallis and Futuna Islands');
INSERT INTO `countries` VALUES (237, 'eh', 'Western Sahara');
INSERT INTO `countries` VALUES (238, 'ye', 'Yemen');
INSERT INTO `countries` VALUES (239, 'yu', 'Yugoslavia');
INSERT INTO `countries` VALUES (240, 'zr', 'Zaire');
INSERT INTO `countries` VALUES (241, 'zm', 'Zambia');
INSERT INTO `countries` VALUES (242, 'zw', 'Zimbabwe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
