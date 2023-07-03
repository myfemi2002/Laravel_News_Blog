-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 06:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `link`, `ads`, `type`, `created_at`, `updated_at`) VALUES
(1, 'www.com', 'upload/ads/6245ba856d6fc.png', 1, '2022-03-31 13:28:21', NULL),
(2, 'www.hedit.om', 'upload/ads/6245c295a5156.png', 1, '2022-03-31 14:02:46', '2022-03-31 14:02:45'),
(3, 'www.3h.com', 'upload/ads/6245e335e5f24.png', 2, '2022-03-31 13:55:17', '2022-03-31 16:21:57'),
(5, NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `soft_delete`, `created_at`, `updated_at`) VALUES
(5, 'ENTERTAINMENT', '0', '2022-03-09 01:56:19', '2022-03-09 01:56:19'),
(7, 'HEALTH', '0', '2022-03-08 22:57:36', '2022-03-18 17:52:01'),
(8, 'POLITICS', '0', '2022-03-08 23:05:48', NULL),
(9, 'SPORTS', '0', '2022-03-08 23:35:44', '2022-03-18 17:50:52'),
(11, 'FASHION', '0', '2022-03-09 01:46:57', '2022-03-18 17:50:18'),
(12, 'BUSINESS', '0', '2022-03-09 01:47:11', '2022-03-18 17:49:39'),
(13, 'WORLD', '0', '2022-03-09 01:47:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livetvs`
--

CREATE TABLE IF NOT EXISTS `livetvs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `embed_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livetvs`
--

INSERT INTO `livetvs` (`id`, `embed_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"729\" height=\"410\" src=\"https://www.youtube.com/embed/ko4PU4eplnY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '2022-03-18 18:37:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_05_195847_create_sessions_table', 1),
(7, '2022_03_07_085705_create_categories_table', 2),
(8, '2022_03_07_085942_create_subcategories_table', 2),
(9, '2022_03_09_152124_create_districts_table', 3),
(10, '2022_03_09_154938_create_sub_districts_table', 3),
(11, '2022_03_09_173143_create_posts_table', 4),
(12, '2022_03_17_024701_create_socials_table', 5),
(13, '2022_03_17_043228_create_seos_table', 6),
(14, '2022_03_17_045132_create_livetvs_table', 7),
(15, '2022_03_17_103029_create_notices_table', 8),
(16, '2022_03_17_111840_create_websites_table', 9),
(17, '2022_03_17_130450_create_photos_table', 10),
(18, '2022_03_17_212311_create_videos_table', 11),
(19, '2022_03_31_125306_create_ads_table', 12),
(20, '2022_04_03_010340_create_web_settings_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `notice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Graylex foundation is a non-governmental organization that promotes the return of people back to God through the Gospel and Provision of spiritual support through preaching, leadership training, teaching and counselling based on biblical doctrine.', 0, '2022-03-17 10:04:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'upload/photo_gallery/62336260d8147.jpg', 'Photo Header', '1', '2022-03-14 15:59:28', NULL),
(2, 'upload/photo_gallery/6233664408765.jpg', 'Photo Header Smallers', '0', '2022-03-17 15:59:28', NULL),
(4, 'upload/photo_gallery/624249e5eb68a.jpg', 'Another picture', '0', '2022-03-28 22:51:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` int(11) DEFAULT NULL,
  `first_section` int(11) DEFAULT NULL,
  `first_section_thumbnail` int(11) DEFAULT NULL,
  `bigthumbnail` int(11) DEFAULT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `subcategory_id`, `user_id`, `title`, `image`, `details`, `tags`, `headline`, `first_section`, `first_section_thumbnail`, `bigthumbnail`, `post_date`, `post_month`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 1, 'What Is Minting NFT?', 'upload/post_img/6235230d3c91b.jpg', '<p style=\"text-align: right; \">An NFT is a blockchain-based token that proves ownership of a digital item such as images, video files, and even physical assets. In simple terms, Minting an NFT refers to converting digital files into crypto collections or digital assets stored on the blockchain.&nbsp;</p><p style=\"text-align: right; \"><br></p><p style=\"text-align: right; \">The digital items or files will be stored in a decentralized database or distributed ledger and cannot be edited, modified, or deleted. Similar to fiat currency creation, when a manufacturer mints a physical coin, the process of uploading a specific item to the blockchain is known as minting.</p>', 'NFT', 1, 1, 1, NULL, '19-05-2022', 'March', '2022-03-17 00:37:27', '2022-03-18 23:25:49'),
(2, 5, 4, 1, 'Create a Crypto Wallet', 'upload/post_img/623522e49cbc8.jpg', '<p style=\"color: rgb(124, 136, 150); font-family: &quot;SF Pro&quot;, sans-serif; font-size: 18px; background-color: rgb(255, 255, 255); margin-top: 1rem !important; margin-right: 0px !important; margin-left: 0px !important;\">After you buy some ETH, the next step you need to do is create a crypto wallet. You will use this wallet to sell and&nbsp;<a href=\"https://zipmex.com/learn/how-to-buy-nfts/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"color: rgb(0, 123, 255);\">buy an NFT on OpenSea</a>.&nbsp;</p><p style=\"color: rgb(124, 136, 150); font-family: &quot;SF Pro&quot;, sans-serif; font-size: 18px; background-color: rgb(255, 255, 255); margin-top: 1rem !important; margin-right: 0px !important; margin-left: 0px !important;\"><a href=\"https://metamask.io/\" target=\"_blank\" rel=\"noreferrer noopener nofollow\" style=\"color: rgb(0, 123, 255);\">MetaMask</a>&nbsp;is one of the most accessible wallet options to use. This wallet is also the most used option on OpenSea. Once you have the wallet installed, you can use it to store Ethereum-based tokens.&nbsp;</p>', 'OpenSea.', 1, 1, 1, 1, '19-03-2022', 'March', '2022-03-13 18:44:21', '2022-03-19 08:10:21'),
(4, 5, 3, 1, '2Baba and I renewed marital vows – Annie Idibia', 'upload/post_img/62352fafb3265.jpg', '<p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">Actress Annie Idibia has stated she and her husband just renewed their marital vows.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">The music star’s wife explained the renewal of marital vows was done as part of the celebrations for their 10th wedding anniversary.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">The 37-year-old ‘Young, Famous and African” reality star made this known in a post on her Instagram page where she disclosed the ceremony was privately done but promised to share videos and photos from it soonest.</p>', 'Celebrity', NULL, 1, 1, NULL, '19-03-2022', 'March', '2022-03-19 00:19:43', '2022-03-19 08:14:47'),
(5, 8, 5, 1, 'Who is afraid of Tinubu?', 'upload/post_img/6235324d4574b.jpg', '<p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">For quite sometimes, Asiwaju Bola Ahmed Tinubu has become the most-talked about politician in Nigeria. There is hardly any day that you will open your newspaper and not find news/comments on what Bola Tinubu did or did not do, what he is planning or scheming, what he said or did not say etc. Some people have even taken this as a major pastime. One begins to wonder why so much attention is given to this man as if he is the only politician in Nigeria. My conjecture is that many people are very jealous of the man for his enduring relevance in Nigerian politics, his ever – widening base of supporters and his larger-than-life image. There is no doubt that this man is an enigma. You cannot but wonder what makes him tick. Instead of acknowledging that this man is a rare breed, his detractors have adopted a pull-him-down stance. However, the more they try to pull this man down, the more he soars.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">To me, some of the reasons why the profile of Bola Tinubu is ever rising are not far-fetched. First, the man is one of the greatest political thinkers and strategist in Nigeria as at today. He always sees issues beyond the ordinary. Instead of concentrating on a problem, he is always looking for a solution. Secondly, and this is very noteworthy, there is hardly anyone in the political history of this Country who has had admirers, friends and associates across the various zones in Nigeria like Tinubu. He is the greatest bridge-builder of our time. Thirdly, Bola Tinubu has a unique distinction of having “discovered”, nurtured and established brilliant minds in the Country. The list of such people is endless and many of them are playing significant roles in our polity today. Also, Bola Tinubu is a man who does not write off a friend totally. He is not only loyal and appreciative of his friends, he is ever willing to forget their betrayals and take them back whenever they repent. On top of all these, he is generous to a fault and he is a philanthropist per excellence. For all these and other attributes, Bola Tinubu is much loved by very many people and accepted as a worthy leader. This is the headache of his detractors. Instead of accepting this man as “Akanda Eda”, they go about trying to malign him.</p>', 'election', 1, 1, 1, 1, '19-03-2022', 'March', '2022-03-19 00:30:53', NULL),
(6, 9, 8, 1, 'Real, Barca pick colours for El-Clasico colours for El-Clasico', 'upload/post_img/6235356cb3f26.jpg', '<p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">Real Madrid have announced that the team will don a black kit in El Clasico against Barcelona, which will take place at the Estadio Santiago Bernabeu tomorrow.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">The new kit, which has been released this season for Real Madrid’s 120th anniversary, was designed by legendary designer Yohji Yamamoto, who has been collaborating with Adidas for the last two decades.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">Having first collaborated on Real Madrid’s third kit for the 2014/15 season, this time the partnership expands for a broader collection that channels a symbolic coalescence of dynamism and speed.</p>', 'final', NULL, 1, 1, 1, '19-03-2022', 'March', '2022-03-19 00:44:12', '2022-03-19 10:05:43'),
(7, 12, 9, 1, 'Putting cocoa commercialisation in the spotlight', 'upload/post_img/623537498351a.png', '<h1 class=\"single-post-title\" style=\"overflow-wrap: break-word; font-size: 27px; font-family: &quot;libre baskerville&quot;; line-height: 38px; color: rgb(45, 45, 45); background-color: rgb(255, 255, 255); margin-right: 0px !important; margin-bottom: 20px !important; margin-left: 0px !important;\"><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-size: 16px; font-weight: 400;\">The cocoa value chain is a multimillion-dollar industry. The demand for chocolate is encouraging countries to expand cocoa bean production.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-size: 16px; font-weight: 400;\">However, the local cocoa industry has witnessed the decline in production in recent years. Agricultural Policy Research in Africa (APRA), a six-year research programme of the Future Agricultures Consortium (FAC) funded by the UK government, has been working with researchers from University of Ibadan to enhance cocoa productivity, improve food security and farmers’ livelihoods. DANIEL ESSIET reports.</p></h1>', 'agric', NULL, 1, 1, 1, '19-03-2022', 'March', '2022-03-19 00:52:09', NULL),
(8, 8, 5, 1, 'APC National Youth Leader aspirant excited over N3 million donation', 'upload/post_img/62357c0233c2f.jpeg', '<p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">AS the All Progressives Congress (APC) National Convention approaches, an aspirant for the position of National Youth Leader, Dada Olusegun has expressed joy over the overwhelming support he has gotten from the youth segments of the party.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">It has also been verified that the youths raised the sum of N3 million within 48hours part of which was used to purchase nomination and expression of interest forms for him. This was spearheaded by a supporter with the Twitter handle iyalaya @lollylarty1.</p>', 'donation', NULL, 1, NULL, NULL, '19-03-2022', 'March', '2022-03-19 05:45:22', NULL),
(9, 7, 12, 1, 'What to know about Kemi Afolabi’s ‘incurable’ ailment lupus', 'upload/post_img/62357e26041a3.jpg', '<p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">Popular actress Kemi Afolabi in a recent interview with Chude Jideonwo revealed she’s been diagnosed with an incurable ailment.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">Afolabi revealed she’d been diagnosed with ‘lupus’ and was advised by the doctor to spend more time with her family as she has five years to live.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">The 43-year-old actress said the disease can only be managed through medication.</p>', 'treat', NULL, 1, 1, 1, '19-03-2022', 'March', '2022-03-19 05:54:30', '2022-03-19 08:30:49'),
(10, 7, 13, 1, '15 reasons you should drink enough water daily', 'upload/post_img/6235a3f5d7dbe.jpg', '<p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">Drinking water often helps to maintain a healthy balance. Mild dehydration can decrease one’s energy level and mental functioning and increase stress on the body while severe dehydration can have far more damaging effects.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">To avoid dehydration drink at least eight glasses of water every day as an adult.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">The importance of water to the mechanics of the human body cannot be overemphasised. It serves as a lubricant to the digestive system and all other body processes.</p>', 'drink', NULL, 1, 1, NULL, '19-03-2022', 'March', '2022-03-19 08:35:49', '2022-03-19 08:36:36'),
(11, 9, 8, 1, 'Lukaku, De Bruyne out of Belgium squad', 'upload/post_img/6235b9b6bf647.jpg', '<p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">ROMELU Lukaku is among the big names to have been dropped from the Belgium squad as Roberto Martinez focuses on youth.</p><p style=\"overflow-wrap: break-word; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(49, 49, 49); font-family: &quot;libre baskerville&quot;; font-size: 16px; background-color: rgb(255, 255, 255);\">The Chelsea striker joins the likes of Dries Mertens, Eden Hazard, and Kevin De Bruyne, with Martinez opting to leave out players with more than 50 caps ahead of his team’s friendlies with the Republic of Ireland and Burkina Faso later this month.</p>', 'player', 1, 1, 1, NULL, '19-03-2022', 'March', '2022-03-19 10:08:38', '2022-03-19 10:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE IF NOT EXISTS `seos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_author`, `meta_title`, `meta_keyword`, `meta_description`, `google_analytics`, `google_verification`, `alexa_analytics`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-17 03:47:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('46J16EqcOGjCUTu8ipieHx9jFm0K0qTT8QSe1g0P', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWZyOTFzWTlWam5rSWJkRUI0ZTM5TkJPblZxZmo0aHpjaFlWTDB0UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvbmV3c19wb3J0YWwvcG9ydGFsL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1660364973),
('A7zoJuWQrzJiWtWMnxi8IaUbBXMI4mJRDu9aFuxh', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmdaejdqTHkySzNvNzJseFljaHBCZ0UxZlVzVmN2WXhZcUU4Q2tDWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3QvbmV3c19wb3J0YWwvcG9ydGFsL3B1YmxpYy9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1660371455),
('BiwtxkMOACPARQoHh0sbZ2X5VMj8oAWmtdQJFqxK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiN1RENFNXMUIwRGtKNnlRRXU5QUZGVzQzRkRYSjlnVlJXeU5WbktrOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb2xlcy92aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDdSTUpPVGJrMEl5WlhZZG83SzlJZmVZNTZCYVEueS5ZRzlHYWtocnUzRDVDQWkvUzM1S0dXIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ3Uk1KT1RiazBJeVpYWWRvN0s5SWZlWTU2QmFRLnkuWUc5R2FraHJ1M0Q1Q0FpL1MzNUtHVyI7fQ==', 1649172450),
('EdZcHgQPbX8Z2BvLqesH2x9R1faUPwDmr8j8jWch', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0UweEhjWWNldFEzSXNpV3dUS0dLRkxMR0t2TlM5T05oUjQ1NktIOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649120530),
('FJndHydfLNOliFRHuuRZaFzDwMr6VUPESDS0bPiG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTGs2SGFZNjhBT2FxcTUyZHYxV1phdk43M1k2NVIxZ05Ya3RIQU1FVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649172267),
('fm6QfESbu5spEpsg1fBhKiE6lj1liCoYIXY5wedr', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXV3ZXVZRXdsQnZqYm5CQ250cnBTZVFZQkJkTnZtbXdaeUdxUFZqTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvbmV3c19wb3J0YWwvcG9ydGFsL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1660364973),
('ObjnAuk4wJxF1FMIiaTgpWWQDsaRO77u9qClhIAX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoieHNOZHZFbngyZGNmbUU5M3ZPb1JKZFZYNkZ3emtCMmV1d3FhRXdjaCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdmlldy9wb3N0LzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkN1JNSk9UYmswSXlaWFlkbzdLOUlmZVk1NkJhUS55LllHOUdha2hydTNENUNBaS9TMzVLR1ciO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDdSTUpPVGJrMEl5WlhZZG83SzlJZmVZNTZCYVEueS5ZRzlHYWtocnUzRDVDQWkvUzM1S0dXIjt9', 1648996123),
('tYY4p4oUARTIfLNDnpoxcGRNYINRr228tC55XYBQ', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQ0kxb2pUOW0wMHNKVWhaSHhtRkhRbXJPTU9QdDQ3aTI0bFM1QWFXRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb2xlcy92aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGVzT2UyZUI5elBqVnd1STFrbFljL09yQ3Z3NE5OVG9STktEanJEU0NQZUNxOUY4Q1FlVDRPIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRlc09lMmVCOXpQalZ3dUkxa2xZYy9PckN2dzROTlRvUk5LRGpyRFNDUGVDcTlGOENRZVQ0TyI7fQ==', 1649172480),
('Xe3CKezw9HlD0NbIrR4K5xJ4HsWRIGKX8zKSuQ0r', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS255bVVsNUh4V0RKcDR5a0pTaHZiMzRyV3RZbTRSemZmQU0wWnhZUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvbmV3c19wb3J0YWwvcG9ydGFsL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1660364973);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE IF NOT EXISTS `socials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `youtube`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'https://facebook.com/', 'https://twitter.com/', 'https://youtube.com/', 'https://linkedin.com/', 'https://instagram.com/', '2022-03-17 03:18:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory`, `created_at`, `updated_at`) VALUES
(1, '5', 'Music', '2022-03-09 13:51:28', '2022-03-09 13:51:28'),
(2, '5', 'Movie', '2022-03-09 11:47:25', NULL),
(3, '5', 'Art', '2022-03-09 13:56:15', NULL),
(4, '5', 'Dance', '2022-03-09 13:56:37', NULL),
(5, '8', 'Democracy', '2022-03-09 13:57:13', NULL),
(7, '9', 'Premiership', '2022-03-19 00:41:33', NULL),
(8, '9', 'La Liga', '2022-03-19 00:42:03', NULL),
(9, '12', 'Agriculture', '2022-03-19 00:47:28', NULL),
(10, '12', 'Aviation', '2022-03-19 00:48:16', NULL),
(11, '12', 'Building & Properties', '2022-03-19 00:49:15', NULL),
(12, '7', 'Drug', '2022-03-19 05:52:35', NULL),
(13, '7', 'Test', '2022-03-19 08:33:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_districts`
--

CREATE TABLE IF NOT EXISTS `sub_districts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `ads` int(11) DEFAULT NULL,
  `setting` int(11) DEFAULT NULL,
  `gallery` int(11) DEFAULT NULL,
  `video` int(11) DEFAULT NULL,
  `website` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `type`, `category`, `post`, `ads`, `setting`, `gallery`, `video`, `website`, `role`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Femi Falana', 'admin@admin.com', NULL, '$2y$10$7RMJOTbk0IyZXYdo7K9IfeY56BaQ.y.YG9Gakhru3D5CAi/S35KGW', NULL, NULL, 'HEMWfS0o364iVDjqfFXzpZv0nstULQePwgDQodXKnwbAPhjXrEfdxd5LlzZO', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, '2022-03-06 12:37:43', '2022-03-06 12:37:43'),
(2, 'Folasade Falayi', 'fola@admin.com', NULL, '$2y$10$cMgsYdNzVM95jw0EUg2StehafQPR21DvYj5hd4NYuFuJyGlHn8Q42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-07 06:31:05', '2022-03-07 06:31:05'),
(4, 'Ade  Femi', 'myfemi2002@yahoo.co.uk', NULL, '$2y$10$haLKY30T3ylwIJK2QgC/1uWZP.rwWoMmcOeAki2vjA8bFsOJgtFwG', NULL, NULL, NULL, 0, 1, 1, 1, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, '2022-04-02 22:16:51'),
(5, 'Dark Moment', 'darkmoment@yahoo.com', NULL, '$2y$10$voBtF..SUGFly8r03FO9hu20UoGYByKWTmBW2m14F0GkPJicu7wwu', NULL, NULL, NULL, 0, 1, 1, 1, 1, 1, 0, 1, 0, NULL, NULL, NULL, NULL),
(7, 'Dark Moment', 'darkm@yahoo.com', NULL, '$2y$10$esOe2eB9zPjVwuI1klYc/OrCvw4NNToRNKDjrDSCPeCq9F8CQeT4O', NULL, NULL, NULL, 0, 1, 1, 1, 1, NULL, NULL, 1, 1, NULL, NULL, '2022-04-02 08:06:31', '2022-04-05 14:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `embed_code`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Trinity Video', 'UKzJZsjbgQo', '1', '2022-03-17 22:32:28', '2022-03-28 23:18:12'),
(2, 'Woli Agba Video', 'dOYxCRHWREw', '0', '2022-03-17 22:33:13', '2022-03-28 23:18:48'),
(4, 'O Ma God', 'CbkiW4vFqKg', '0', '2022-03-28 23:20:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE IF NOT EXISTS `websites` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website_name`, `website_link`, `created_at`, `updated_at`) VALUES
(1, 'Newinfo', 'https://newinfo.com.ng', '2022-03-17 10:30:40', NULL),
(2, 'Facebook', 'https://facebook.com', '2022-03-17 11:15:54', '2022-03-17 11:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE IF NOT EXISTS `web_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `logo`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/62499f4ed4839.png', 'Block 21 Room 1 Moses Hall, Redemption Camp, Lagos/Ibadan Expressway', '08035543036', 'myfemi2002@yahoo.co.uk', NULL, '2022-04-03 12:21:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
