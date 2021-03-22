-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2021 at 04:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Smart_Health_Consultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `created_at`, `updated_at`) VALUES
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd6ab8', 'Sys Admin', 'sysadmin@smarthealthconsultancy.org', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2020-09-11 00:19:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `consul_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consul_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consul_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `consul_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`consul_id`, `consul_code`, `member_id`, `member_name`, `member_phone`, `doc_id`, `doc_name`, `consul_details`, `consul_status`, `created_at`) VALUES
('2c19b0e0d9b5a0be025e6e004da3b1', 'DWQZI-76921', 'e8cd3d7cf39372cbf46ae5fc95caaa', 'Judy', ' 254737229776', 'f19ea88c421566c7e380de7671e081', 'Mart Developers Inc', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n', 'Prescribed', '2020-09-19 11:31:37'),
('65e43b6bbba42493a0d118abe1700e', 'CIMTY-31560', '63f545118ac0b082fa3865544e3c08', 'Mart Mbithi', ' 254737229776', '9330d618b141520812f593d0525ef7', 'John F Wayne', '<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#d27b53\">&lt;?php</span></div>\r\n\r\n<div><span style=\"color:#008ed2\">include</span><span style=\"color:#a497b5\">(</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#c30051\">configs/pdoconfig.php</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#a497b5\">);</span></div>\r\n&nbsp;\r\n\r\n<div><span style=\"color:#e45100\">if</span><span style=\"color:#a497b5\"> (</span><span style=\"color:#008ed2\">!</span><span style=\"color:#66cccc\">empty</span><span style=\"color:#a497b5\">(</span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">_POST</span><span style=\"color:#a497b5\">[</span><span style=\"color:#d3d0c8\">&quot;</span><span style=\"color:#c30051\">docNumber</span><span style=\"color:#d3d0c8\">&quot;</span><span style=\"color:#a497b5\">])) {</span></div>\r\n\r\n<div><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">id</span><span style=\"color:#a497b5\"> </span><span style=\"color:#008ed2\">=</span><span style=\"color:#a497b5\"> </span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">_POST</span><span style=\"color:#a497b5\">[</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#c30051\">docNumber</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#a497b5\">];</span></div>\r\n\r\n<div><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">stmt</span><span style=\"color:#a497b5\"> </span><span style=\"color:#008ed2\">=</span><span style=\"color:#a497b5\"> </span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">DB_con</span><span style=\"color:#008ed2\">-&gt;prepare</span><span style=\"color:#a497b5\">(</span><span style=\"color:#d3d0c8\">&quot;</span><span style=\"color:#e45100\">SELECT</span><span style=\"color:#c30051\"> </span><span style=\"color:#008ed2\">*</span><span style=\"color:#c30051\"> </span><span style=\"color:#e45100\">FROM</span><span style=\"color:#c30051\"> medical_experts </span><span style=\"color:#e45100\">WHERE</span><span style=\"color:#c30051\"> doc_number </span><span style=\"color:#008ed2\">=</span><span style=\"color:#c30051\"> :id</span><span style=\"color:#d3d0c8\">&quot;</span><span style=\"color:#a497b5\">);</span></div>\r\n\r\n<div><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">stmt</span><span style=\"color:#008ed2\">-&gt;execute</span><span style=\"color:#a497b5\">(</span><span style=\"color:#66cccc\">array</span><span style=\"color:#d3d0c8\">(</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#c30051\">:id</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#a497b5\"> </span><span style=\"color:#008ed2\">=&gt;</span><span style=\"color:#a497b5\"> </span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">id</span><span style=\"color:#d3d0c8\">)</span><span style=\"color:#a497b5\">);</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">?</span><span style=\"color:#d27b53\">&gt;</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">&lt;?php</span></div>\r\n\r\n<div><span style=\"color:#e45100\">while</span><span style=\"color:#a497b5\"> (</span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">row</span><span style=\"color:#a497b5\"> </span><span style=\"color:#008ed2\">=</span><span style=\"color:#a497b5\"> </span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">stmt</span><span style=\"color:#008ed2\">-&gt;fetch</span><span style=\"color:#a497b5\">(</span><span style=\"color:#9f47ff\">PDO</span><span style=\"color:#008ed2\">::</span><span style=\"color:#f99157\">FETCH_ASSOC</span><span style=\"color:#a497b5\">)) {</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">?</span><span style=\"color:#d27b53\">&gt;</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">&lt;?php</span><span style=\"color:#a497b5\"> </span><span style=\"color:#66cccc\">echo</span><span style=\"color:#a497b5\"> </span><span style=\"color:#66cccc\">htmlentities</span><span style=\"color:#a497b5\">(</span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">row</span><span style=\"color:#a497b5\">[</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#c30051\">doc_name</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#a497b5\">]); </span><span style=\"color:#d27b53\">?</span><span style=\"color:#d27b53\">&gt;</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">&lt;?php</span></div>\r\n\r\n<div><span style=\"color:#a497b5\">}</span></div>\r\n\r\n<div><span style=\"color:#a497b5\">}</span></div>\r\n&nbsp;\r\n\r\n<div><span style=\"color:#e45100\">if</span><span style=\"color:#a497b5\"> (</span><span style=\"color:#008ed2\">!</span><span style=\"color:#66cccc\">empty</span><span style=\"color:#a497b5\">(</span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">_POST</span><span style=\"color:#a497b5\">[</span><span style=\"color:#d3d0c8\">&quot;</span><span style=\"color:#c30051\">docName</span><span style=\"color:#d3d0c8\">&quot;</span><span style=\"color:#a497b5\">])) {</span></div>\r\n\r\n<div><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">id</span><span style=\"color:#a497b5\"> </span><span style=\"color:#008ed2\">=</span><span style=\"color:#a497b5\"> </span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">_POST</span><span style=\"color:#a497b5\">[</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#c30051\">docName</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#a497b5\">];</span></div>\r\n\r\n<div><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">stmt</span><span style=\"color:#a497b5\"> </span><span style=\"color:#008ed2\">=</span><span style=\"color:#a497b5\"> </span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">DB_con</span><span style=\"color:#008ed2\">-&gt;prepare</span><span style=\"color:#a497b5\">(</span><span style=\"color:#d3d0c8\">&quot;</span><span style=\"color:#e45100\">SELECT</span><span style=\"color:#c30051\"> </span><span style=\"color:#008ed2\">*</span><span style=\"color:#c30051\"> </span><span style=\"color:#e45100\">FROM</span><span style=\"color:#c30051\"> medical_experts </span><span style=\"color:#e45100\">WHERE</span><span style=\"color:#c30051\"> doc_number </span><span style=\"color:#008ed2\">=</span><span style=\"color:#c30051\"> :id</span><span style=\"color:#d3d0c8\">&quot;</span><span style=\"color:#a497b5\">);</span></div>\r\n\r\n<div><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">stmt</span><span style=\"color:#008ed2\">-&gt;execute</span><span style=\"color:#a497b5\">(</span><span style=\"color:#66cccc\">array</span><span style=\"color:#d3d0c8\">(</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#c30051\">:id</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#a497b5\"> </span><span style=\"color:#008ed2\">=&gt;</span><span style=\"color:#a497b5\"> </span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">id</span><span style=\"color:#d3d0c8\">)</span><span style=\"color:#a497b5\">);</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">?</span><span style=\"color:#d27b53\">&gt;</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">&lt;?php</span></div>\r\n\r\n<div><span style=\"color:#e45100\">while</span><span style=\"color:#a497b5\"> (</span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">row</span><span style=\"color:#a497b5\"> </span><span style=\"color:#008ed2\">=</span><span style=\"color:#a497b5\"> </span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">stmt</span><span style=\"color:#008ed2\">-&gt;fetch</span><span style=\"color:#a497b5\">(</span><span style=\"color:#9f47ff\">PDO</span><span style=\"color:#008ed2\">::</span><span style=\"color:#f99157\">FETCH_ASSOC</span><span style=\"color:#a497b5\">)) {</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">?</span><span style=\"color:#d27b53\">&gt;</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">&lt;?php</span><span style=\"color:#a497b5\"> </span><span style=\"color:#66cccc\">echo</span><span style=\"color:#a497b5\"> </span><span style=\"color:#66cccc\">htmlentities</span><span style=\"color:#a497b5\">(</span><span style=\"color:#d3d0c8\">$</span><span style=\"color:#a5d851\">row</span><span style=\"color:#a497b5\">[</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#c30051\">doc_id</span><span style=\"color:#d3d0c8\">&#39;</span><span style=\"color:#a497b5\">]); </span><span style=\"color:#d27b53\">?</span><span style=\"color:#d27b53\">&gt;</span></div>\r\n\r\n<div><span style=\"color:#d27b53\">&lt;?php</span></div>\r\n\r\n<div><span style=\"color:#a497b5\">}</span></div>\r\n\r\n<div><span style=\"color:#a497b5\">}</span></div>\r\n</div>\r\n', 'Prescribed', '2020-09-20 11:39:45'),
('bd6fef470c8fb1d29618c90865b2db', 'ZWFXS-94251', '63f545118ac0b082fa3865544e3c08', 'Mart Mbithi', ' 254737229776', 'e5cf872b9c6d319db8b0f01aafad98', 'Doc Mart Developers', '<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">This is a dummy consultation</span></div>\r\n</div>\r\n', 'Prescribed', '2020-09-20 11:45:54'),
('cbf236a367bf6b55b1071f8f70d5ba', 'LDQBM-70918', '63f545118ac0b082fa3865544e3c08', 'Mart Mbithi', ' 254737229776', '9696970c70d75be65c2b0d3bbb0a69', 'Juan Musau', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee ', 'Prescribed', '2020-09-16 08:45:06'),
('d1b063aeeb65887d1310ff40c18dff', 'AFVTN-95461', '60b2389fc7878f4b221ced502b6138', 'Lorem Ipsum', '+254737229776', '9696970c70d75be65c2b0d3bbb0a69', 'Juan Musau', '<p>Hello doctor, i have the following syptoms</p>\r\n\r\n<ul>\r\n	<li>chills</li>\r\n	<li>fever&nbsp;</li>\r\n	<li>sweating</li>\r\n	<li>Headache</li>\r\n	<li>Nausea and vomiting</li>\r\n	<li>Muscle pain and fatigue</li>\r\n</ul>\r\n\r\n<p>Please help me</p>\r\n', 'Pending', '2020-09-22 08:13:12'),
('d5dfefa79b0185289b9ce98ccc09f8', 'CVGNB-81094', '63f545118ac0b082fa3865544e3c08', 'Mart Mbithi', ' 254737229776', 'f19ea88c421566c7e380de7671e081', 'Mart Developers Inc', '<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span></div>\r\n\r\n<div>\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span>\r\n\r\n<div style=\"background-color:#110e1a; color:#a497b5; font-family:\'Droid Sans Mono\',\'monospace\',monospace,\'Droid Sans Fallback\'; font-size:14px; font-weight:normal; line-height:19px; white-space:pre\">\r\n<div><span style=\"color:#a5d851\">member_id</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 'Prescribed', '2020-09-20 12:02:03'),
('d88b045aee2d9bbbc55d856d277b62', 'FKSPT-45732', 'a98be3085acee03f015ad5f0bf919c', 'Jane Doe', ' 254737229776', 'e5cf872b9c6d319db8b0f01aafad98', 'Doc Mart Developers', '<h1><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Hello Doctor</span></span></h1>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Comic Sans MS,cursive\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</span></span></p>\r\n', 'Prescribed', '2020-09-19 08:11:39'),
('e023c37bc24c7b799e9c2553df4a8d', 'WDHXY-40632', 'b1e179181fc0fd9ed2f76826afb233', 'joseph mutua', '0708100522', '9330d618b141520812f593d0525ef7', 'John F Wayne', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae dolor nec elit porta ullamcorper a eget augue. Morbi neque justo, iaculis eget nisl eget, dignissim tincidunt felis. Cras dapibus at nulla quis tristique. Sed tempus, mi eget posuere tincidunt, tortor dui bibendum nibh, ut tristique nibh quam nec orci. Aliquam et pretium ex, vitae sollicitudin tellus. Cras interdum consequat nisi quis gravida. Ut interdum ex et erat scelerisque, vitae maximus ex lobortis. Aenean sed semper neque. Aenean libero justo, luctus a tortor ut, convallis mattis tortor. Etiam vehicula rutrum pellentesque. Nunc malesuada quam at purus consequat rutrum. Vestibulum eget sapien ex. Curabitur nec facilisis est, at luctus felis.</p>\r\n\r\n<p>Etiam at semper elit. Proin quis enim scelerisque, ultricies nibh sed, eleifend lectus. Pellentesque blandit diam et egestas vulputate. Nullam lacinia dapibus risus, sit amet aliquam velit consectetur ac. Quisque turpis nulla, ultricies in eros vel, bibendum aliquet arcu. Aliquam commodo ante lobortis, molestie nibh ut, imperdiet neque. Donec enim mi, cursus at lacus a, bibendum faucibus sapien. Mauris sit amet quam purus. Cras risus ex, venenatis nec pharetra in, hendrerit nec mi. In metus felis, mattis vel erat in, venenatis suscipit nisl. Mauris vel sapien et arcu sollicitudin luctus non in orci. Ut neque odio, finibus sed nibh ut, pellentesque euismod sapien. Vivamus accumsan, odio non ultrices accumsan, dolor dui semper velit, eget tristique libero lacus et felis. Ut id eros purus. Etiam a purus vel sapien feugiat aliquet in vitae augue. Ut iaculis diam non turpis ultricies, sed auctor quam mattis.</p>\r\n\r\n<p>Praesent tempor accumsan metus suscipit mattis. Duis varius est eget ante maximus ultrices. Etiam imperdiet libero at facilisis convallis. Nulla vulputate, justo quis condimentum egestas, tortor risus faucibus enim, ut egestas justo justo eget metus. Phasellus mi quam, finibus eu ullamcorper quis, auctor eget leo. Vestibulum at neque suscipit, feugiat libero at, lobortis magna. Morbi non eros a purus pharetra suscipit vel a dui. Vivamus vel erat a mauris egestas imperdiet sit amet in dolor. Suspendisse luctus eleifend nisl eget cursus. Ut maximus dignissim blandit.</p>\r\n\r\n<p>In egestas dolor eu erat sagittis rhoncus. Donec suscipit arcu tempus sapien efficitur, nec pretium sem pretium. Nullam ultrices purus sit amet sapien tempor, at pellentesque enim vehicula. Ut feugiat risus aliquam, pulvinar justo posuere, tincidunt ante. Vivamus bibendum turpis et accumsan tincidunt. Donec sit amet bibendum augue, vel faucibus ligula. Nullam sit amet posuere nulla. Pellentesque in tortor justo. Cras elementum bibendum lacinia. Fusce euismod odio ut mattis finibus. Curabitur convallis ultricies odio at consequat. Phasellus fermentum sapien nunc, eu dapibus ex suscipit eu.</p>\r\n\r\n<p>Nunc dictum at augue at dictum. Nunc eu nisl vel erat dignissim aliquam. Vivamus quis lorem ipsum. Vestibulum felis arcu, molestie eget ornare eget, scelerisque in nulla. Pellentesque id nulla at neque malesuada dapibus quis id risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sed neque scelerisque, vulputate velit in, eleifend augue. In ut quam a neque malesuada varius. Fusce eget imperdiet urna, ut scelerisque nunc. Etiam auctor, elit aliquam consectetur rutrum, dui tellus dapibus lectus, ac blandit dolor quam eu velit. Aenean scelerisque consequat diam at vestibulum. Fusce pellentesque, mauris in porttitor blandit, diam nibh euismod nisi, sed convallis ex arcu non leo. Nulla pharetra mauris magna, eu commodo nulla pharetra at. Sed enim nunc, volutpat vitae nunc sed, sodales porttitor dolor. Suspendisse mollis auctor ornare.</p>\r\n</div>\r\n', 'Prescribed', '2020-09-21 13:24:59'),
('e045129729ae0ea21d2b8b5f1b4cc3', 'XMNIA-83470', 'a98be3085acee03f015ad5f0bf919c', 'Jane Doe', ' 254737229776', '9696970c70d75be65c2b0d3bbb0a69', 'Juan Musau', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 'Prescribed', '2020-09-16 08:42:09'),
('f7f4d0a41fa838b40b81bd483629ee', 'STZLU-49731', 'b734faff03af20628f95689ff5e552', 'John Doe', ' 254737229776', '9696970c70d75be65c2b0d3bbb0a69', 'Juan Musau', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee \r\nBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee ', 'Prescribed', '2020-09-16 08:45:46'),
('fd178452ebe955d71511a8b93d00cc', 'QUIDL-35276', 'b734faff03af20628f95689ff5e552', 'John Doe', ' 254737229776', 'e5cf872b9c6d319db8b0f01aafad98', 'Doc Mart Developers', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee ', 'Prescribed', '2020-09-16 08:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`f_id`, `member_id`, `member_name`, `f_content`, `type`, `created_at`) VALUES
('449a9e33ec742a2de55900007b341b', 'a98be3085acee03f015ad5f0bf919c', 'Jane Doe', 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me?\" he thought. It wasn\'t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops \r\nOne morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me?\" he thought. It wasn\'t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me?\" he thought. It wasn\'t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops ', 'Complain', '2020-09-18 09:07:30'),
('4b0e55cef5a2ba29ad6b0c18b34faa', 'b734faff03af20628f95689ff5e552', 'John Doe', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>\r\n', 'Complain', '2020-09-19 08:19:50'),
('6dcdd1cb61d0feeade3181864c5d32', 'a98be3085acee03f015ad5f0bf919c', 'Jane Doe', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, ', '', '2020-09-18 08:31:47'),
('c92526f4319f02b9367b11d770c1fc', 'b1e179181fc0fd9ed2f76826afb233', 'joseph mutua', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae dolor nec elit porta ullamcorper a eget augue. Morbi neque justo, iaculis eget nisl eget, dignissim tincidunt felis. Cras dapibus at nulla quis tristique. Sed tempus, mi eget posuere tincidunt, tortor dui bibendum nibh, ut tristique nibh quam nec orci. Aliquam et pretium ex, vitae sollicitudin tellus. Cras interdum consequat nisi quis gravida. Ut interdum ex et erat scelerisque, vitae maximus ex lobortis. Aenean sed semper neque. Aenean libero justo, luctus a tortor ut, convallis mattis tortor. Etiam vehicula rutrum pellentesque. Nunc malesuada quam at purus consequat rutrum. Vestibulum eget sapien ex. Curabitur nec facilisis est, at luctus felis.</p>\r\n\r\n<p>Etiam at semper elit. Proin quis enim scelerisque, ultricies nibh sed, eleifend lectus. Pellentesque blandit diam et egestas vulputate. Nullam lacinia dapibus risus, sit amet aliquam velit consectetur ac. Quisque turpis nulla, ultricies in eros vel, bibendum aliquet arcu. Aliquam commodo ante lobortis, molestie nibh ut, imperdiet neque. Donec enim mi, cursus at lacus a, bibendum faucibus sapien. Mauris sit amet quam purus. Cras risus ex, venenatis nec pharetra in, hendrerit nec mi. In metus felis, mattis vel erat in, venenatis suscipit nisl. Mauris vel sapien et arcu sollicitudin luctus non in orci. Ut neque odio, finibus sed nibh ut, pellentesque euismod sapien. Vivamus accumsan, odio non ultrices accumsan, dolor dui semper velit, eget tristique libero lacus et felis. Ut id eros purus. Etiam a purus vel sapien feugiat aliquet in vitae augue. Ut iaculis diam non turpis ultricies, sed auctor quam mattis.</p>\r\n\r\n<p>Praesent tempor accumsan metus suscipit mattis. Duis varius est eget ante maximus ultrices. Etiam imperdiet libero at facilisis convallis. Nulla vulputate, justo quis condimentum egestas, tortor risus faucibus enim, ut egestas justo justo eget metus. Phasellus mi quam, finibus eu ullamcorper quis, auctor eget leo. Vestibulum at neque suscipit, feugiat libero at, lobortis magna. Morbi non eros a purus pharetra suscipit vel a dui. Vivamus vel erat a mauris egestas imperdiet sit amet in dolor. Suspendisse luctus eleifend nisl eget cursus. Ut maximus dignissim blandit.</p>\r\n\r\n<p>In egestas dolor eu erat sagittis rhoncus. Donec suscipit arcu tempus sapien efficitur, nec pretium sem pretium. Nullam ultrices purus sit amet sapien tempor, at pellentesque enim vehicula. Ut feugiat risus aliquam, pulvinar justo posuere, tincidunt ante. Vivamus bibendum turpis et accumsan tincidunt. Donec sit amet bibendum augue, vel faucibus ligula. Nullam sit amet posuere nulla. Pellentesque in tortor justo. Cras elementum bibendum lacinia. Fusce euismod odio ut mattis finibus. Curabitur convallis ultricies odio at consequat. Phasellus fermentum sapien nunc, eu dapibus ex suscipit eu.</p>\r\n\r\n<p>Nunc dictum at augue at dictum. Nunc eu nisl vel erat dignissim aliquam. Vivamus quis lorem ipsum. Vestibulum felis arcu, molestie eget ornare eget, scelerisque in nulla. Pellentesque id nulla at neque malesuada dapibus quis id risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sed neque scelerisque, vulputate velit in, eleifend augue. In ut quam a neque malesuada varius. Fusce eget imperdiet urna, ut scelerisque nunc. Etiam auctor, elit aliquam consectetur rutrum, dui tellus dapibus lectus, ac blandit dolor quam eu velit. Aenean scelerisque consequat diam at vestibulum. Fusce pellentesque, mauris in porttitor blandit, diam nibh euismod nisi, sed convallis ex arcu non leo. Nulla pharetra mauris magna, eu commodo nulla pharetra at. Sed enim nunc, volutpat vitae nunc sed, sodales porttitor dolor. Suspendisse mollis auctor ornare.</p>\r\n</div>\r\n', 'Complain', '2020-09-21 13:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_base`
--

CREATE TABLE `knowledge_base` (
  `kb_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kb_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kb_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knowledge_base`
--

INSERT INTO `knowledge_base` (`kb_id`, `kb_title`, `kb_desc`, `created_at`) VALUES
('4b9dcd7430c4bfed208fcdaf0eccae', 'CoVid 19', '<div class=\"PZPZlf wTz7Vd\">\r\n<div>\r\n<div class=\"PZPZlf\">\r\n<div class=\"INGOOb\">oronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</div>\r\n</div>\r\n\r\n<div>\r\n<div class=\"CfnCCf\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"PZPZlf\">\r\n<div class=\"INGOOb\">Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"mEmEye\">\r\n<div>\r\n<div>\r\n<hr /></div>\r\n\r\n<div>\r\n<div class=\"CfnCCf\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"PZPZlf\">\r\n<div class=\"O2TtKe\">How it spreads</div>\r\n</div>\r\n\r\n<div>\r\n<div class=\"CfnCCf\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"PZPZlf\">\r\n<div class=\"INGOOb\">The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.</div>\r\n</div>\r\n\r\n<div>\r\n<div class=\"CfnCCf\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"PZPZlf\">\r\n<div class=\"INGOOb\">You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.</div>\r\n</div>\r\n</div>\r\n</div>\r\n', '2020-09-21 13:31:29.095706'),
('dc4387a85f704ce609f491a7e46f7c', 'Contagious Diseases', '<p><span style=\"font-family:Courier New,Courier,monospace\">A contagious disease is a subset category of transmissible diseases, which are transmitted to other persons, either by physical contact with the person suffering the disease, or by casual contact with their secretions or objects touched by them or airborne route among other routes.[1] Contagiousness varies between diseases. Non-contagious infections, by contrast, usually require a special mode of transmission between persons or hosts. These include need for intermediate vector species (mosquitoes that carry malaria) or by non-casual transfer of bodily fluid (such as transfusions, needle sharing or sexual contact).[2] The boundary between contagious and non-contagious infectious diseases is not perfectly drawn, as illustrated classically by tuberculosis, which is clearly transmissible from person to person, but was not classically considered a contagious disease. In the present day, most sexually transmitted infections are considered contagious, but only some of them are subject to medical isolation. A disease may be known to be contagious but its causative factors remain undetermined. A contagion may be more infectious if the incubation period is long.</span></p>\r\n', '2020-09-19 08:04:32.922271');

-- --------------------------------------------------------

--
-- Table structure for table `medical_experts`
--

CREATE TABLE `medical_experts` (
  `doc_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_bio` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month_joined` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_experts`
--

INSERT INTO `medical_experts` (`doc_id`, `doc_number`, `doc_name`, `doc_email`, `doc_phone`, `doc_password`, `doc_bio`, `doc_photo`, `month_joined`, `doc_status`, `created_at`, `updated_at`) VALUES
('c5ad02c467f957187bc74bfccf0ab3', 'ZDSWC-02936', 'John Doe', 'jd@mail.com', '+098765423', 'a69681bcf334ae130217fea4505fd3c994f5683f', '', '', 'Mar', 'Pending', '2021-03-22 15:15:37.856986', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_adr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month_joined` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_package` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_payments`
--

CREATE TABLE `membership_payments` (
  `pay_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_amt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_package` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_09_10_103721_create_sessions_table', 1),
(9, '2020_09_11_104548_create_admin_table', 1),
(10, '2020_09_11_104739_create_members_table', 1),
(11, '2020_09_11_104831_create_medical_experts_table', 1),
(12, '2020_09_11_104853_create_knowledge_base_table', 1),
(13, '2020_09_11_104918_create_packages_table', 1),
(14, '2020_09_11_104942_create_membership_payments_table', 1),
(15, '2020_09_11_105003_create_payment_methods_table', 1),
(16, '2020_09_11_105109_create_consultations_table', 1),
(17, '2020_09_11_105223_create_prescriptions_table', 1),
(18, '2020_09_11_105247_create_feedbacks_table', 1),
(19, '2020_09_11_105300_create_ratings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_price`, `package_desc`, `created_at`) VALUES
('364be92fc74a333ebff64f2f674e59', 'Gold Package', '5500', '        -> 24/7 Consultation\r\n        -> 24/7 Prescriptions\r\n        -> 24/7 Doctor / Medical Expert Support\r\n        -> Can Share Medical Records Like X-RAYS, Utrasounds For Further Examination\r\n        -> Unlimited Number Of Consultation\r\n        -> Free Delivery On Ordered Pharmaceuticals\r\n        -> Calls , SMS, Emails Support\r\n        -> And Many More', '2020-09-15 11:57:47'),
('7112f0c75452adc77df24f57c38ba4', 'Silver Package', '3500', '        -> 24/7 Consultation\r\n        -> 24/7 Prescriptions\r\n        -> 24/7 Doctor / Medical Expert Support\r\n        -> Can Share Medical Records Like X-RAYS Only\r\n        -> Unlimited Number Of Consultation\r\n        -> Free Delivery On Ordered Pharmaceuticals\r\n        -> And Many More', '2020-09-15 11:58:04'),
('d065a92c4c62e2463d09574bf174a3', 'Bronze Package', '2500', '        -> Limited Consultation\r\n        -> Limited Prescriptions\r\n        -> Limited Doctor / Medical Expert Support\r\n        -> Can Share Medical Records Like X-RAYS Only\r\n        -> Limited Number Of Consultation\r\n        -> Paid Delivery On Ordered Pharmaceuticals', '2020-09-15 11:58:26'),
('df7841f99b726da7b0ce5560e751ae', 'Free Trial', '0', '         ->Limited Consultation\r\n        -> Limited Prescriptions\r\n        -> Limited Doctor / Medical Expert Support\r\n        -> Can Share Medical Records Like X-RAYS Only\r\n        -> Limited Number Of Consultation\r\n        -> Paid Delivery On Ordered Pharmaceuticals\r\n        -> Only lasts for one month', '2020-09-15 11:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('josephmutua@gmail.com', 'c89a06b6c3f9fc4637115667dcdf6722db5ce67e1b7cad3138955f54aee3eb4d58b6337f6c892783c0a3b00c84d1ca3bf43c8f6109348f249d2bd36e3c3f6e9b06b64851798753c294edb5c09da0a9edcf7205b22346ea6cede8f9506764f33', '2020-09-21 13:33:45'),
('martdevelopers254@gmail.com', 'bf914660569e1289b8dc472f2ddd30462952d90963054b0348dc470d07b2d44cfb668111addf379a07e415b42524352d4546e4b406b444dfc66e4f70520db9e81af43afca00ec47a76a9fb79737ca332884509c284a8df322eaa970bc3f10ca', '2020-09-20 17:13:03'),
('sysadmin@lamcorp.com', '393d5d44b9597388b5396d68da227cd5fe08ed13bf9a18b7781a6983cfcc2265254861992c47b61e006e0a64f71c7443ad9ce5244ce8298942c5056293e288bb231ca4ae50f6be25bb0a9b01920086305db9a573530fb0d9843b95f0dc50a27', '2020-09-20 17:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `method_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`method_id`, `method_code`, `method_name`, `created_at`) VALUES
('0f6dfa06d9a8c455a9ed57821ea974', 'AZFBS-52347', 'Mpesa', '2020-09-16 21:38:41'),
('d6aec2c8d58429d2bf20c99e5f1054', 'PECVU-06547', 'Credit Card', '2020-09-16 21:40:00'),
('ee8d59fb3a54b6764bbe9dcc4a4c54', 'KNYHV-43571', 'Airtel Money', '2020-09-16 21:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `payroll_id` varchar(200) NOT NULL,
  `payroll_code` varchar(200) NOT NULL,
  `payroll_month` varchar(200) NOT NULL,
  `payroll_salary` varchar(200) NOT NULL,
  `doc_id` varchar(200) NOT NULL,
  `doc_number` varchar(200) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `doc_email` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`payroll_id`, `payroll_code`, `payroll_month`, `payroll_salary`, `doc_id`, `doc_number`, `doc_name`, `doc_email`, `created_at`) VALUES
('43bdf6fb0be03346f797ee3cf1b524', 'AIRBZ-43521', 'September', '12000', '9696970c70d75be65c2b0d3bbb0a69', 'JOMVZ-78029', 'Juan Musau', 'juanmusau6@gmail.com', '2020-09-14 08:15:51.932616'),
('7a109a710f4d630d2864e106600278', 'NCFST-49517', 'January', '12000', 'f19ea88c421566c7e380de7671e081', 'VXBUO-74253', 'Mart Developers Inc', 'mail@martdevelopers.inc', '2020-09-19 10:04:17.142018'),
('9722b9e0ea29e3f803aa14d3428c1c', 'BRDSG-60329', 'February', '15000', 'f19ea88c421566c7e380de7671e081', 'VXBUO-74253', 'Mart Developers Inc', 'mail@martdevelopers.inc', '2020-09-19 10:04:37.177773'),
('f0f03c7554c558b150bd745286d71c', 'VGIJK-68792', 'February', '25000', '9696970c70d75be65c2b0d3bbb0a69', 'JOMVZ-78029', 'Juan Musau', 'juanmusau6@gmail.com', '2020-09-14 07:53:19.144771');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `pre_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consul_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rate_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`consul_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD PRIMARY KEY (`kb_id`);

--
-- Indexes for table `medical_experts`
--
ALTER TABLE `medical_experts`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `membership_payments`
--
ALTER TABLE `membership_payments`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`method_id`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`pre_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
