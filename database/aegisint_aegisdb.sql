-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 07:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aegisint_aegisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_managements`
--

CREATE TABLE `contact_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_location` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_area_division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_managements`
--

INSERT INTO `contact_managements` (`id`, `contact_pic`, `first_name`, `last_name`, `full_name`, `company`, `job_title`, `email_address`, `website`, `mobile`, `home_phone`, `link_profile`, `facebook`, `skype`, `address_location`, `address_area_division`, `address_two`, `description`, `created_at`, `updated_at`) VALUES
(2, '1547647403.jpg', 'hriduan', 'alex', NULL, 'aegis', 'editor', 'hriduan@gmail.com', 'https://ftit.co.uk/', '1675570701', '1986327894', 'https://linkden.com/hriduan', 'https://facebook.com/hriduan', 'hriduan_ferdous', '44 shawrapara', 'dhaka-1206', 'usa,californea', 'lorem', '2019-01-02 13:12:14', '2019-01-16 14:03:23'),
(3, '1546435430.jpg', 'ninita', 'zaman', NULL, 'future track', 'software engineer', 'ninta@gmail.com', 'https://ftit.co.uk/', '1986327894', '1986327894', 'https://linkden.com/ninita', 'https://facebook.com/ninita', 'ninita_zaman', '56 mirpur', 'dhaka-1206', 'dhaka mirpur', 'The purpose of a one-page site is to make networking and introductions more effective by giving your contacts a short bio that’s easy to pass along. You want to highlight your most impressive achievements, explain what role you are seeking, and add a few personal details. Just as your LinkedIn profile serves as a resume, a one-page site replaces the cover letter.\r\n\r\nI recently entered the job market, and (following my friends’ advice) created my own portfolio site. It gets a lot of positive feedback, and recruiters appreciate having something to share. Every email to my network includes:', '2019-01-02 13:23:50', '2019-01-02 13:23:50'),
(4, '1547049259.png', 'shawon', 'hoque', NULL, 'future track', 'software_engineer', 'shawon_hoque@gmail.com', 'https://ftit.co.uk/', '1986348224', '1986348224', 'https://linkden.com/shawon', 'https://facebook.com/shawon', 'shawon_haque', '44 dhanmondi', 'dhaka-1206', 'dhanmondi mirpur', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2019-01-03 13:14:38', '2019-01-09 15:54:19'),
(6, '1546872919.jpg', 'rodoshi', 'chowdhury', NULL, 'future track', 'software engineer', 'rodoshi@gmail.com', 'https://ftit.co.uk/', '1986348224', '1986348224', 'https://linkden.com/rodoshi', 'https://facebook.com/rodoshi', 'rodoshi_chowdhury', '135/1 matikata', 'dhaka1206', 'dhaka-cantonment', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2019-01-03 13:16:41', '2019-01-07 14:55:19'),
(7, '1551852711.png', 'mahabubrtwhgjhj', 'molla', 'mahabubrtwhgjhj molla', 'future track', 'software engineer', 'mahabub@gmail.com', 'http://mahabub.com', '1986325486', '1762585324', 'http://linkdin.com/mahabub', 'http://facebook.com/mahabub', 'mahabub_molla', 'mirpu 14', 'dhaka-1206', 'mirpur,dhaka', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2019-01-06 10:56:55', '2019-03-06 17:12:00'),
(8, '1546434480.jpg', 'Anabel', 'kholi', NULL, 'Jaskolski PLC', 'Scientist', 'rolfson.asha@grant.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Marisa', 'https://facebook.com/Kshlerin', 'Isabella_Franecki', '133 Homenick Villages Apt. 945\r\nEast Dakota, MI 22095-2921', 'dhaka-1206', 'East Garnet,British Indian Ocean Territory (Chagos Archipelago)', 'Quis eveniet voluptatum aut porro quis aliquid. Sunt enim accusantium excepturi et praesentium laborum adipisci. Sunt maxime quaerat odio labore aliquam sit saepe. Assumenda incidunt voluptas debitis enim animi nisi.', '2019-01-08 06:56:45', '2019-01-08 14:15:31'),
(9, '1546958345.jpg', 'mahbub', 'molla', NULL, 'Bruen, Kunze and Gorczany', 'Survey Researcher', 'fiona.windler@gerlach.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Carlie', 'https://facebook.com/Rath', 'Ursula_Heaney', '93522 Reichel Lock Apt. 478\r\nMadysonton, OR 44728-2858', 'dhaka-1206', 'Lake Imani,Barbados', 'Reiciendis in libero occaecati odit. Nihil non veniam temporibus laudantium. Perspiciatis est in a.', '2019-01-08 06:56:45', '2019-01-08 14:39:06'),
(10, '1546958092.jpg', 'Herminia', 'chowdhury', NULL, 'Kautzer, Nienow and Keebler', 'Drilling and Boring Machine Tool Setter', 'klynch@parker.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Millie', 'https://facebook.com/Cormier', 'Maxie_O\'Kon', '298 Beier Overpass\r\nHayesmouth, KY 46819', 'dhaka-1206', 'Leschstad,Sudan', 'The purpose of a one-page site is to make networking and introductions more effective by giving your contacts a short bio that’s easy to pass along. You want to highlight your most impressive achievements, explain what role you are seeking, and add a few personal details. Just as your LinkedIn profile serves as a resume, a one-page site replaces the cover letter.\r\n\r\nI recently entered the job market, and (following my friends’ advice) created my own portfolio site. It gets a lot of positive feedback, and recruiters appreciate having something to share. Every email to my network includes:\r\n\r\nThe purpose of a one-page site is to make networking and introductions more effective by giving your contacts a short bio that’s easy to pass along. You want to highlight your most impressive achievements, explain what role you are seeking, and add a few personal details. Just as your LinkedIn profile serves as a resume, a one-page site replaces the cover letter.\r\n\r\nI recently entered the job market, and (following my friends’ advice) created my own portfolio site. It gets a lot of positive feedback, and recruiters appreciate having something to share. Every email to my network includes:', '2019-01-08 06:56:46', '2019-01-12 10:06:15'),
(11, '1546958140.jpg', 'Kyla', 'test', NULL, 'Cremin-Metz', 'Mathematical Science Teacher', 'wharris@hotmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Flossie', 'https://facebook.com/Effertz', 'Kiara_test', '3819 Jenkins Plain\r\nSouth Pansy, NV 42364', 'dhaka-1206', 'Eichmannville,Bermuda', 'Mollitia commodi dolores dolorem impedit est et. Tenetur et porro molestiae quia aperiam rerum voluptates est. Eveniet molestiae officiis nihil beatae est et molestias fugiat.', '2019-01-08 06:56:46', '2019-01-08 14:35:40'),
(12, '1546959381.jpg', 'Cassandra', 'chowdhury', NULL, 'Daugherty and Sons', 'Tailor', 'zieme.norberto@dach.info', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Jamison', 'https://facebook.com/Kuhlman', 'Julie_Kutch', '35124 Janiya Fort\r\nWest Monicachester, WY 42011-4680', 'dhaka-1206', 'Eichmannville,Bermuda', 'Quos non possimus magni facilis. Quibusdam exercitationem mollitia et cumque minima fugiat. Vero maxime ut facere consequatur quos.', '2019-01-08 06:56:46', '2019-01-08 14:56:21'),
(15, '1546434480.jpg', 'Shakira', 'mahabub', NULL, 'Ortiz Inc', 'Movie Director oR Theatre Director', 'ythiel@hotmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Noel', 'https://facebook.com/Pacocha', 'Sonny_Borer', '616 Dedrick Summit Apt. 360\r\nKihnchester, OH 10525-4170', 'dhaka-1206', 'Anitahaven,Kiribati', 'Commodi libero nihil non aut. Molestias sed numquam velit sint et ipsum.', '2019-01-08 06:56:46', '2019-01-08 14:42:57'),
(16, '1546958513.jpg', 'lamisa_ali', 'sheikh', NULL, 'Kuhn-Murazik', 'Medical Sales Representative', 'rory55@skiles.biz', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Sheldon', 'https://facebook.com/Price', 'Magdalena_Schroeder', '632 Samanta Extension Suite 763\r\nDouglasstad, KY 00102-4703', 'dhaka-1206', 'North Travishaven,Northern Mariana Islands', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '2019-01-08 06:56:46', '2019-01-08 14:42:26'),
(17, '1546957556.jpg', 'Lindsey', 'Hoppeless', NULL, 'Toy and Sons', 'Illustrator', 'epurdy@hotmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Lisandro', 'https://facebook.com/Cole', 'Aric_Lowe', '53537 Silas Center\r\nVioletburgh, IA 93695', 'dhaka-1206', 'Magnusburgh,South Africa', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '2019-01-08 06:56:46', '2019-01-08 14:27:22'),
(18, '1546434480.jpg', 'Claudine', 'mac', 'Claudine mac', 'Hermiston, Stark and Kirlin', 'Textile Worker', 'freddy.friesen@mcdermott.org', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Halie', 'https://facebook.com/Doyle', 'Emile_Monahan', '26741 Derick Pines Suite 614\r\nAnnabellside, PA 25198', 'dhaka-1206', 'Kertzmannhaven,Nigeria', 'Suscipit rem fuga velit et fugiat ab voluptas et. Voluptatem explicabo unde omnis rerum explicabo non. Provident et cumque nam ut non.', '2019-01-08 06:56:46', '2019-03-06 18:05:35'),
(19, '1547536044.jpg', 'mahabub', 'molla', NULL, 'McDermott-Kling', 'Installation and Repair Technician', 'jamarcus.zboncak@miller.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Leopoldo', 'https://facebook.com/Grady', 'Elisabeth_Farrell', '170 Roxane Prairie Apt. 146\r\nBryanatown, WI 25706', 'dhaka-1206', 'East Tremaynefurt,Hong Kong', 'Rerum consequuntur architecto dignissimos vero rem. Non similique deleniti error eligendi. Possimus natus reprehenderit et porro quia reprehenderit.', '2019-01-08 06:56:46', '2019-01-15 07:07:40'),
(20, '1546958666.jpeg', 'Kurt', 'Hammes', NULL, 'Kovacek, Romaguera and Stroman', 'Caption Writer', 'audrey24@bins.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Abdiel', 'https://facebook.com/Farrell', 'Maryjane_Lowe', '77791 Estell Ridges\r\nWest Sheridanside, CA 55794-9377', 'dhaka-1206', 'West Vergiechester,Bahrain', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '2019-01-08 06:56:46', '2019-01-08 14:44:51'),
(21, '1546434480.jpg', 'Tyreek', 'Schaefer', NULL, 'Maggio, Barrows and Christiansen', 'Automotive Specialty Technician', 'prohaska.bettie@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Wiley', 'https://facebook.com/Russel', 'Cheyanne_Kiehn', '857 Alfred Ferry\nMuellerside, TX 36066', 'dhaka-1206', 'West Abelardo,Haiti', 'Assumenda modi qui cum quidem. Aut id et eos molestias est quos vero. Recusandae natus molestias atque velit accusamus fugiat.', '2019-01-08 06:56:46', '2019-01-08 06:56:46'),
(22, '1546434480.jpg', 'Elody', 'chowdhury', NULL, 'Hammes Group', 'Database Administrator', 'lesch.ellen@greenfelder.net', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Nelson', 'https://facebook.com/Lowe', 'Misty_Mills', '29940 Swift Meadow Suite 801\r\nSporerview, WV 67732-4612', 'dhaka-1206', 'Port Bryceshire,British Indian Ocean Territory (Chagos Archipelago)', 'Explicabo hic ducimus eum explicabo sit. Voluptates eaque fugit provident a a soluta. Vitae repellendus ea ea voluptas a.', '2019-01-08 06:56:46', '2019-01-09 15:26:08'),
(23, '1546434480.jpg', 'Elsa', 'Breitenberg', NULL, 'Moen Inc', 'Production Inspector', 'dorothea.will@mcglynn.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Brandyn', 'https://facebook.com/Stamm', 'Randal_Daugherty', '482 Rempel Tunnel\nMrazville, NJ 55551', 'dhaka-1206', 'Vidalstad,Samoa', 'Dolorem mollitia et molestias sed. Eum dignissimos tempora aut quia voluptatem illum omnis. Recusandae ab est illo minus voluptatibus eum. Aspernatur sed quos aperiam quia necessitatibus rerum.', '2019-01-08 06:56:46', '2019-01-08 06:56:46'),
(24, '1547376647.jpg', 'Adelia', 'Prosacco', NULL, 'Smitham-Lehner', 'Sales Representative', 'haskell42@yahoo.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Ressie', 'https://facebook.com/Johnston', 'Terrence_Collier', '7091 Ana Estate\r\nBeierstad, OK 89067-0408', 'dhaka-1206', 'South Ednafort,Saint Helena', 'A perferendis in consequatur. Minus numquam error corporis vel. Mollitia dolorum recusandae ut adipisci in vel in.\r\nsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nA perferendis in consequatur. Minus numquam error corporis vel. Mollitia dolorum recusandae ut adipisci in vel in.\r\nsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-01-08 06:56:46', '2019-01-13 10:50:47'),
(25, '1547013337.png', 'Joanie', 'chowdhury', NULL, 'Braun and Sons', 'Gas Pumping Station Operator', 'lily26@hotmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Amani', 'https://facebook.com/VonRueden', 'Ruben_Kutch', '500 Garett Expressway Apt. 539\r\nPort Ottisburgh, MO 46952', 'dhaka-1206', 'Schneidermouth,United Arab Emirates', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '2019-01-08 06:56:46', '2019-01-09 05:56:29'),
(26, '1547376885.jpeg', 'Jaleel', 'Kessler', NULL, 'Dicki Group', 'Director Of Marketing', 'zfranecki@bashirian.biz', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/John', 'https://facebook.com/Schmitt', 'Aniyah_Dooley', '70583 Gleason Courts Suite 461\r\nPort Aliyah, IA 92631', 'dhaka-1206', 'Fritschfort,United States Virgin Islands', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2019-01-08 06:56:46', '2019-01-13 10:56:55'),
(29, '1546434480.jpg', 'Loy', 'Kerluke', NULL, 'Cole-Walter', 'Production Manager', 'kiehn.payton@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Mozell', 'https://facebook.com/Champlin', 'Hester_Murray', '67382 Schneider Extension Suite 089\nNew Hyman, WA 53761', 'dhaka-1206', 'Treutelstad,Thailand', 'Consequuntur mollitia asperiores qui occaecati sequi excepturi aut vel. Eum est voluptates itaque molestiae officiis nesciunt. Non hic id earum. Aut et natus qui sed quia ducimus pariatur.', '2019-01-08 06:56:46', '2019-01-08 06:56:46'),
(30, '1546434480.jpg', 'Margarita', 'Wehner', NULL, 'Bahringer, Funk and Botsford', 'Grinder OR Polisher', 'khintz@emard.info', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Cullen', 'https://facebook.com/Becker', 'Arnaldo_Kuvalis', '508 Lynch Mission Suite 082\nPreciousmouth, WI 44189-7632', 'dhaka-1206', 'McKenziemouth,Ethiopia', 'Illum fuga soluta ullam voluptatem quos molestias. Qui voluptatem nihil quia odio quod omnis.', '2019-01-08 06:56:46', '2019-01-08 06:56:46'),
(31, '1546434480.jpg', 'Sebastian', 'Bailey', NULL, 'Osinski, Walsh and Effertz', 'Chef', 'olga.huels@kautzer.net', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Cayla', 'https://facebook.com/Dicki', 'Enoch_Cummings', '801 Cale Ville\nEast Valentineville, OH 95393-7521', 'dhaka-1206', 'West Claud,Pakistan', 'Aut quam omnis officia. Dignissimos vel ut necessitatibus minus nemo voluptatem. Labore a aut minima et minima vero mollitia. Nobis magnam voluptas aut sit eligendi molestiae aut.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(32, '1546434480.jpg', 'Evalyn', 'Gottlieb', NULL, 'Nicolas, Harber and Kutch', 'Mine Cutting Machine Operator', 'jasen.larkin@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Devan', 'https://facebook.com/Glover', 'Unique_Wisoky', '26250 Caterina Union Apt. 025\nNorth Wilma, NY 21917-2070', 'dhaka-1206', 'West Sonia,Ireland', 'Dignissimos mollitia enim qui ipsum necessitatibus odio perferendis. Voluptatibus adipisci quo aspernatur amet ratione. Quia soluta molestiae et odio quia. Optio id nostrum aut quisquam ut qui. Illo id inventore voluptas est perspiciatis quaerat.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(33, '1546434480.jpg', 'Ezequiel', 'Swaniawski', NULL, 'Gorczany-White', 'Control Valve Installer', 'kayleigh.koelpin@hotmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Bridgette', 'https://facebook.com/McDermott', 'Millie_Donnelly', '37158 Ursula Drive Suite 825\nWest Antonina, TN 16052-3540', 'dhaka-1206', 'Lake Audrey,Macedonia', 'Explicabo enim neque in sed. Nam ex commodi consectetur odit. Quas voluptates cumque sint provident reprehenderit enim.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(34, '1546434480.jpg', 'Jakayla', 'Mueller', NULL, 'Prohaska PLC', 'Insurance Sales Agent', 'harris.jayde@hotmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Everette', 'https://facebook.com/Fritsch', 'Jaydon_Barton', '10855 Grace Keys Apt. 197\nShawnachester, MA 77141-4878', 'dhaka-1206', 'Dereckside,United Arab Emirates', 'Quae nemo aut nihil ut voluptatum animi. Aut odit nostrum odio sint. Dolor voluptatem impedit sint incidunt iusto et.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(36, '1546434480.jpg', 'Francisco', 'McLaughlin', NULL, 'Johns-Wehner', 'Interaction Designer', 'mireya20@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Hermina', 'https://facebook.com/Kihn', 'Samara_Simonis', '63681 Conor Brooks\nSouth Rosemaryborough, WV 31536', 'dhaka-1206', 'Crookshaven,Belarus', 'Non omnis distinctio perspiciatis libero laborum recusandae quod. Dolor voluptatem a accusamus ea. Sit quidem est sed veritatis nesciunt explicabo pariatur odio.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(37, '1546434480.jpg', 'Lenna', 'Shanahan', NULL, 'Halvorson, Davis and Feest', 'Municipal Court Clerk', 'jolie49@powlowski.net', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Eulah', 'https://facebook.com/Ruecker', 'Deven_Kirlin', '4713 Lind Valleys\nLake Aliviahaven, MO 53123-7023', 'dhaka-1206', 'O\'Keefefurt,United States Virgin Islands', 'Ullam deleniti et nesciunt veniam tempora. Incidunt fuga quasi ea qui odit sunt. Consequuntur molestiae et cupiditate et voluptatum fugit placeat. Et et aut est rerum excepturi.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(38, '1546434480.jpg', 'Cedrick', 'Rohan', NULL, 'Trantow-Rice', 'Library Assistant', 'maryam60@veum.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Junius', 'https://facebook.com/Haag', 'Allene_Nienow', '74033 Hagenes Manor\nNew Jacklyntown, WV 97894', 'dhaka-1206', 'North Hermanbury,Lithuania', 'Eum magnam ad quo est aliquam. Dolorem eius quas nobis. Adipisci assumenda perferendis velit iste libero.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(39, '1546434480.jpg', 'Shaina', 'Padberg', NULL, 'Pacocha-Kerluke', 'Motorcycle Mechanic', 'keeley13@yahoo.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Lucinda', 'https://facebook.com/Kunze', 'Jevon_Labadie', '915 Stehr Haven\nSimonisside, LA 15083', 'dhaka-1206', 'Lake Mayborough,Tuvalu', 'Doloremque earum veniam fuga aut sit. Ea numquam officiis qui. Et iure omnis minima.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(40, '1546434480.jpg', 'Thelma', 'Volkman', NULL, 'Strosin-Kuhic', 'Artillery Crew Member', 'christian.lowe@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Willie', 'https://facebook.com/Quitzon', 'Brenna_Gislason', '718 Gleason Glens Apt. 130\nJedediahbury, NJ 92791-3501', 'dhaka-1206', 'Port Dellchester,Liechtenstein', 'Vel nihil aut deleniti unde velit ipsum magni. Debitis voluptas aliquam animi ad omnis. Cumque et rerum eveniet qui consequatur explicabo ab.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(41, '1546434480.jpg', 'Jimmie', 'Hessel', NULL, 'Tillman, Jerde and Lakin', 'Forming Machine Operator', 'tyrel13@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Lurline', 'https://facebook.com/Miller', 'Fabiola_Williamson', '92615 Carroll Views\nLake Isobelmouth, MO 46064', 'dhaka-1206', 'Durganshire,Saint Pierre and Miquelon', 'Et sunt quidem culpa consequatur. Beatae temporibus dolor architecto nihil. Illo quae id ullam veniam dolor. Nihil libero dolore accusantium aperiam est tempore. Consequatur beatae aperiam fugit.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(42, '1546434480.jpg', 'Annamarie', 'Bashirian', NULL, 'Heaney-Huel', 'Job Printer', 'ycole@kohler.net', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Dorthy', 'https://facebook.com/Lakin', 'Carmine_Ernser', '24189 Erdman Rue\nSouth Kristinbury, CO 40521-8800', 'dhaka-1206', 'South Dashawn,Korea', 'Voluptas voluptas iure eius quia modi vitae voluptas. Sapiente vel rerum asperiores molestiae saepe et. Est dolor et dolores et.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(43, '1546434480.jpg', 'Laurence', 'Frami', NULL, 'Schiller-Nitzsche', 'Telephone Station Installer and Repairer', 'letha80@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Emile', 'https://facebook.com/Kulas', 'Mason_Shanahan', '90504 Shania River\nSouth Jaylon, NY 56858-4009', 'dhaka-1206', 'New Ceciliaside,Saint Helena', 'Tempora mollitia ut at quia alias ut. Reiciendis harum blanditiis nisi culpa in. Recusandae delectus similique molestiae beatae illum. Et doloremque nulla vel quia.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(44, '1546434480.jpg', 'Marlee', 'Bechtelar', NULL, 'Cronin, Stiedemann and Kozey', 'Municipal Fire Fighting Supervisor', 'dfarrell@hotmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Giovanni', 'https://facebook.com/Hyatt', 'Lewis_Powlowski', '6209 Block Oval\nNorth Rosie, WA 09033-8694', 'dhaka-1206', 'Romainefurt,Timor-Leste', 'Recusandae mollitia saepe eaque maiores asperiores non. Sequi qui accusantium asperiores velit explicabo dolorem. Eligendi quod temporibus est perferendis sunt. Eum ipsum ut et quia ut modi.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(45, '1546434480.jpg', 'Kayley', 'Kunde', NULL, 'Satterfield-Gibson', 'Portable Power Tool Repairer', 'leola08@schinner.net', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Izaiah', 'https://facebook.com/McGlynn', 'Johnnie_Denesik', '858 Jast Views Apt. 697\nHermanmouth, AR 90681', 'dhaka-1206', 'North Vincefort,Djibouti', 'Sint voluptatem in omnis ea porro. Voluptatem odit nobis deserunt animi ut minima repudiandae. Ea ut est dolorem debitis ipsam. Perspiciatis quia laudantium sed accusamus. Quidem rerum consequatur ullam dolorum dolore tenetur reprehenderit.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(46, '1546434480.jpg', 'Cletus', 'Bernier', NULL, 'Conroy-Berge', 'Anesthesiologist', 'lbeer@schimmel.net', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Alexanne', 'https://facebook.com/Kling', 'Tristian_Schinner', '57898 Ernest Springs\nTurnerport, OK 54679', 'dhaka-1206', 'Virgilstad,Faroe Islands', 'Velit quaerat rerum culpa sunt reprehenderit corrupti explicabo. Saepe ut ut ullam labore ipsam. Ipsa molestiae rerum quisquam quod asperiores et.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(47, '1548071331.png', 'Rodrick', 'Towne', NULL, 'Murray Group', 'Online Marketing Analyst', 'cyril.boehm@bernhard.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Sam', 'https://facebook.com/Feil', 'Greg_Hills', '3366 Wyman Trail Suite 694\nNapoleonland, VA 95456', 'dhaka-1206', 'South Mustafaport,Nepal', 'Sed quia voluptas voluptate voluptates asperiores ut unde. Voluptatem et molestiae quo et nulla harum. Cum nihil tempore qui accusantium corrupti. Eos doloremque voluptatem id deserunt possimus enim eaque amet.', '2019-01-08 06:56:47', '2019-01-21 11:48:51'),
(48, '1546434480.jpg', 'Alex', 'Bradtke', NULL, 'Kemmer-Jast', 'Parts Salesperson', 'liliana.wehner@reichert.biz', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Jenifer', 'https://facebook.com/Hamill', 'Frederique_Bernier', '9057 Vita Lake Apt. 662\nSouth Havenbury, CO 50330-4284', 'dhaka-1206', 'New Treyburgh,United Kingdom', 'Ut recusandae ipsum eos adipisci. Id est ea quia aliquam. Quam eveniet qui vitae hic vero dolorem vero. Tenetur impedit accusamus veritatis iste ad architecto architecto. Et quos iusto non expedita possimus veritatis fugiat.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(49, '1546434480.jpg', 'Arden', 'Nolan', NULL, 'Eichmann, Bergstrom and Gibson', 'MARCOM Director', 'tiana07@yahoo.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Bell', 'https://facebook.com/Pagac', 'Reggie_Hane', '790 Marks Union\nNorth Jeremychester, SC 18662-7383', 'dhaka-1206', 'Elyssaport,Ecuador', 'Porro dolor molestiae iste quasi qui odio eum. Eligendi adipisci maxime voluptatem sit consequatur atque explicabo. Non veniam eos sint enim velit.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(50, '1546434480.jpg', 'Dudley', 'Ebert', NULL, 'Renner, Greenholt and Weissnat', 'Bindery Worker', 'padberg.kaley@oreilly.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Wilton', 'https://facebook.com/Schoen', 'Madison_McGlynn', '6120 Gina Throughway\nLake Gradyborough, AK 41550-3420', 'dhaka-1206', 'Lake Evehaven,Syrian Arab Republic', 'Saepe molestias delectus quia sint ut. Minus rerum aut tenetur quaerat aut exercitationem.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(51, '1546434480.jpg', 'Ephraim', 'Ferry', NULL, 'Muller, Ryan and Heidenreich', 'Library Assistant', 'ngreen@turcotte.org', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Abigale', 'https://facebook.com/Ledner', 'Pink_Fay', '44645 Golda Island Apt. 164\nBerneicehaven, AZ 06744-5485', 'dhaka-1206', 'Rickieview,Ireland', 'Commodi voluptatum totam porro distinctio iste est. Fugiat earum et similique ut nostrum aliquam incidunt quas. Consequatur et quo ut est autem sit.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(52, '1546434480.jpg', 'Jermaine', 'Jenkins', NULL, 'Terry Group', 'Survey Researcher', 'lschuster@sawayn.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Colt', 'https://facebook.com/Pfannerstill', 'Ellis_Price', '928 Kling Street Suite 331\nWest Samanthafurt, LA 82851', 'dhaka-1206', 'Lake Lorena,Malta', 'Sapiente repudiandae labore aliquid animi sit alias voluptas ut. Quae deserunt architecto rem id atque. Dolorem debitis eius quod quis ut mollitia.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(53, '1546434480.jpg', 'Paris', 'Schimmel', NULL, 'Terry-Lind', 'Spotters', 'jasen.ohara@powlowski.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Hunter', 'https://facebook.com/Pollich', 'Harold_Harvey', '6656 Pagac Wall\nNorth Wava, CA 17901-3991', 'dhaka-1206', 'Aricburgh,Bahamas', 'Rem quo repellendus omnis optio qui. Voluptate eius tenetur maiores eos. Sit repudiandae est veniam vitae aut possimus.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(54, '1546434480.jpg', 'Cleve', 'Hegmann', NULL, 'Ondricka, Jacobi and Bosco', 'Fiberglass Laminator and Fabricator', 'lschimmel@hotmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Florida', 'https://facebook.com/Ritchie', 'Angus_Purdy', '5378 Amalia Land Apt. 878\nEast Ewell, OK 12285-3429', 'dhaka-1206', 'Lake Kenyattafort,Western Sahara', 'Et corporis provident maxime atque molestiae et mollitia. Quo mollitia velit et eum et labore. Eos rem consequuntur vero cum consequatur doloribus deleniti. Harum est reprehenderit sed. Optio sed velit suscipit incidunt nihil repellendus aut.', '2019-01-08 06:56:47', '2019-01-08 06:56:47'),
(56, '1546434480.jpg', 'Ursula', 'Gleason', NULL, 'Schimmel, Wilkinson and Wisozk', 'Entertainer and Performer', 'reichel.carmen@yahoo.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Carissa', 'https://facebook.com/Dietrich', 'Eula_Kassulke', '678 Alexandra Walk\nPort Benjaminshire, ID 73252', 'dhaka-1206', 'Port Jarrell,Burundi', 'Atque ratione deleniti optio consequatur excepturi possimus explicabo officiis. Aspernatur et reprehenderit et sit officiis nemo dolor. Qui fugiat sint perferendis.', '2019-01-08 06:56:48', '2019-01-08 06:56:48'),
(58, '1546434480.jpg', 'Johanna', 'Boyle', NULL, 'Veum-Johnson', 'Equal Opportunity Representative', 'wtreutel@hahn.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Zaria', 'https://facebook.com/Douglas', 'Jessie_Champlin', '898 Nader Falls Apt. 416\nNew Sheahaven, MD 94115-5529', 'dhaka-1206', 'Emelieberg,Madagascar', 'Consequatur mollitia et rerum ducimus sint placeat. Quo ducimus voluptatum sit aut corrupti accusamus rerum. Culpa sit minus quod excepturi. Possimus eos itaque temporibus enim ullam.', '2019-01-08 06:56:48', '2019-01-08 06:56:48'),
(60, '1546434480.jpg', 'Constance', 'Lynch', NULL, 'Upton, Tremblay and Luettgen', 'Rail Transportation Worker', 'makenna58@emard.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Abbey', 'https://facebook.com/Jenkins', 'Ruby_Miller', '49558 Reid Cape\nAlexysburgh, VT 89590-8966', 'dhaka-1206', 'Hagenesview,Belgium', 'Voluptatibus et aspernatur maxime aliquam officia veritatis. Quia officia vel vero est. Dolore est et voluptate ea molestias omnis consequatur.', '2019-01-08 06:56:48', '2019-01-08 06:56:48'),
(63, '1546434480.jpg', 'tamim', 'iqbal', NULL, 'Mitchell-Glover', 'Teacher Assistant', 'scarlett42@considine.net', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Jay', 'https://facebook.com/Durgan', 'Kathryne_Jones', '6580 Mante Wall\r\nClintstad, OR 45923', 'dhaka-1206', 'Port Retta,Tajikistan', 'Velit dolore et at vel sit vitae et ut. Possimus ea tenetur unde iste. Sit aspernatur nam nemo ut. Iusto a soluta quibusdam et sit doloribus.', '2019-01-08 06:56:48', '2019-01-08 15:14:42'),
(72, '1546434480.jpg', 'Ruthie', 'Kuhn', NULL, 'Effertz-Koepp', 'Computer Security Specialist', 'anissa19@koelpin.net', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Payton', 'https://facebook.com/Skiles', 'Patricia_Purdy', '23951 Jaycee Parkway\nEast Raphaelfort, ME 40078-4582', 'dhaka-1206', 'Morrisborough,Myanmar', 'Dignissimos consectetur mollitia animi eveniet et. Ducimus incidunt eos quaerat voluptas. Ipsa aut dolorem officia pariatur.', '2019-01-08 06:56:48', '2019-01-08 06:56:48'),
(73, '1551607405.png', 'Karli', 'Durgan', NULL, 'Hackett, Huels and Casper', 'Compliance Officers', 'millie.christiansen@reichel.org', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Keon', 'https://facebook.com/Altenwerth', 'Jettie_Wuckert', '874 Virgil Spurs Suite 496\nEast Robb, GA 47399', 'dhaka-1206', 'Cassinborough,Serbia', 'Dolore sed magni odio eius animi. Sit est eveniet et. Voluptatem esse et quis est et voluptate tenetur. Quibusdam consectetur nisi ut molestiae est occaecati sunt.', '2019-01-08 06:56:48', '2019-03-03 10:03:25'),
(88, '1547287753.jpg', 'Providenci', 'Mante', NULL, 'Bruen Ltd', 'Ceiling Tile Installer', 'austyn.schinner@simonis.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Abagail', 'https://facebook.com/Murray', 'Anabelle_Willms', '46198 Bechtelar Village\r\nGlennieshire, TX 76003', 'dhaka-1206', 'Port Stanton,Austria', 'The purpose of a one-page site is to make networking and introductions more effective by giving your contacts a short bio that’s easy to pass along. You want to highlight your most impressive achievements, explain what role you are seeking, and add a few personal details. Just as your LinkedIn profile serves as a resume, a one-page site replaces the cover letter.\r\n\r\nI recently entered the job market, and (following my friends’ advice) created my own portfolio site. It gets a lot of positive feedback, and recruiters appreciate having something to share. Every email to my network includes:\r\n\r\nThe purpose of a one-page site is to make networking and introductions more effective by giving your contacts a short bio that’s easy to pass along. You want to highlight your most impressive achievements, explain what role you are seeking, and add a few personal details. Just as your LinkedIn profile serves as a resume, a one-page site replaces the cover letter.\r\n\r\nI recently entered the job market, and (following my friends’ advice) created my own portfolio site. It gets a lot of positive feedback, and recruiters appreciate having something to share. Every email to my network includes:', '2019-01-08 06:56:49', '2019-01-12 10:09:13'),
(93, '1546434480.jpg', 'Delphine', 'Hagenes', NULL, 'Kemmer-Dooley', 'Physician', 'iherman@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Freeman', 'https://facebook.com/Kessler', 'Monique_Sawayn', '513 Rhett Extension\nSouth Fayefort, SC 08850', 'dhaka-1206', 'Timothybury,American Samoa', 'Minus ea omnis maxime ex. Hic corporis officia fuga fugit. Ut aut sunt dolor quia in maxime rerum. Animi soluta architecto eaque sed quos veniam.', '2019-01-08 06:56:49', '2019-01-08 06:56:49'),
(94, '1546434480.jpg', 'Corene', 'Koelpin', NULL, 'Ryan, McLaughlin and Waters', 'Production Manager', 'lacey44@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Eladio', 'https://facebook.com/Bartoletti', 'Emilio_Davis', '65053 Davin Trail Apt. 453\nCormierburgh, SD 02974', 'dhaka-1206', 'Lake Deshawnstad,Sierra Leone', 'Atque sequi nihil corporis perspiciatis. Sit adipisci sit quaerat velit. Earum aut odio possimus iusto.', '2019-01-08 06:56:49', '2019-01-08 06:56:49'),
(101, '1548052528.png', 'rijwan', 'chowdhury', NULL, 'Kuhic Ltd', 'Carpenter', 'rijwan@gmail.com', 'https://ftit.co.uk/', '1986347226', '1886347226', 'https://linkdin.com/Neil', 'https://facebook.com/Grimes', 'Cooper_Kemmer', '50160 Americo Forks\r\nErnserstad, WA 28885', 'dhaka-1206', 'Runteshire,Montenegro', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', '2019-01-08 06:56:50', '2019-01-21 06:36:07'),
(114, '1549093749.png', 'another2', 'purpose', 'another2 purpose', 'future track', 'software engineer', 'sheikh@gmail.com', 'http://sheikh.com', '1986348224', '1918989492', 'http://linkedin.com/sheikh', 'http://facebook.com/sheikh', 'sheikh_mujib', '135/1 matikata', 'dhaka-1206', 'dhaka-1206', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-01-13 08:34:34', '2019-05-27 10:27:45'),
(117, '1547532192.png', 'david', 'villa', NULL, 'future track', 'software engineer', 'sheikh@gmail.com', 'http://sheikh.com', '1986348224', '1918989492', 'http://linkedin.com/sheikh', 'http://facebook.com/sheikh', 'sheikh_mujib', '135/1 matikata', 'dhaka-1206', 'dhaka-1206', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-01-13 08:48:07', '2019-01-15 06:03:33'),
(118, '1549094246.jpg', 'farhana', 'diba', NULL, 'future track', 'software engineer', 'sheikh@gmail.com', 'http://sheikh.com', '1986348224', '1918989492', 'http://linkedin.com/sheikh', 'http://facebook.com/sheikh', 'sheikh_mujib', '135/1 matikata', 'dhaka-1206', 'dhaka-1206', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-01-13 08:49:39', '2019-02-02 07:57:26'),
(121, '1551695943.jpg', 'rijwan', 'chowdhury', NULL, 'future track', 'software engineer', 'rijwan_chowdhury@gmail.com', 'http://sheikh.com', '1986348224', '1918989492', 'http://linkedin.com/sheikh', 'http://facebook.com/sheikh', 'sheikh_mujib', '135/1 matikata', 'dhaka-1206', 'dhaka-1206', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-01-13 08:56:21', '2019-03-04 21:39:03'),
(123, '1547378376.jpg', 'younusur', 'rahman', NULL, 'future track', 'software engineer', 'younusur@gmail.com', 'http://younusur.com', '1986348224', '1648226644', 'http://linkedin.com/rahman', 'http://facebook.com/rahman', 'younusur_rahmane', '135/1 matikata', 'dhaka-1206', 'dhaka cantonemnt,dhaka-1206', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', '2019-01-13 11:19:37', '2019-01-13 11:23:00'),
(124, '1547966576.jpg', 'lamisa', 'sheikh', NULL, 'future track', 'software engineer', 'lamisa_sheikh@gmail.com', 'http::/ftit.com', '1986348224', '1769824444', 'http://linkedin.com/lamisa', 'http://facebook.com/lamisa', 'lamisa_sheikh', '144/6 matikata', 'cantonment,dhaka-1206', '123/5 kajipara,dhaka-1209', 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-01-20 06:42:56', '2019-01-20 13:05:44'),
(125, '1551695500.jpg', 'Alex_jones', 'jones', NULL, 'lorem', 'Manager', 'jones@gmail.com', 'tesst.com', '1675570701', '1723239640', 'https://www.google.com/', 'test,cionq', 'alex.jonesq.watsom', '965/1 A, Shewrapara', 'Dhaka', '564/1 Shameem sharani', 'This ones is for testing purpose. lorem ipsum dolar sit..', '2019-01-20 09:06:26', '2019-03-04 23:46:51');
INSERT INTO `contact_managements` (`id`, `contact_pic`, `first_name`, `last_name`, `full_name`, `company`, `job_title`, `email_address`, `website`, `mobile`, `home_phone`, `link_profile`, `facebook`, `skype`, `address_location`, `address_area_division`, `address_two`, `description`, `created_at`, `updated_at`) VALUES
(129, '1551792407.png', 'macmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmac', 'yuri', 'macmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmacmac yuri', 'I agree with all additional terms and conditions', 'gnfngfn', 'ngfngfn@gmail.com', 'agag', 'agsagsag', 'gsagsa', 'gsagsag', 'gsagas', 'gsagsag', 'ffffs', 'fsfsfsfs', 'fsfs', 'fsfsffsfsfsfsfsfs', '2019-03-04 15:28:35', '2019-03-06 00:27:03'),
(131, '1551771199.png', 'macsacacsa', 'yuricascas', NULL, 'I agree with all additional terms and conditionscascsa', 'gnfngfncsacascsac', 'ngfngfn@gmail.com', 'https://codepen.io/', '342432432432432', '32432432432432432', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '516/1A Eash shewrapara', 'Mirpur, Dhaka', 'Looking for someone who specialized in prints and patterns and overall unique designs (for fashion)', 'Looking for someone who specialized in prints and patterns and overall unique designs (for fashion)\r\nLooking for someone who specialized in prints and patterns and overall unique designs (for fashion)\r\nLooking for someone who specialized in prints and patterns and overall unique designs (for fashion)\r\nLooking for someone who specialized in prints and patterns and overall unique designs (for fashion)', '2019-03-05 18:31:17', '2019-03-05 18:33:34'),
(132, '1551773555.png', 'fuad', 'faijul', NULL, 'future track', 'software engineer', 'fuad@gmail.com', 'ftit.com', '019863257892', '012365489621', 'www.linkedin/fuad', 'facebook/fuad', 'fuad_faijul', '44/3', 'mohammadpur,dhaka', 'dhaka-1234', 'these input going for test purpose', '2019-03-05 19:12:35', '2019-03-05 19:12:35'),
(133, '1551798249.png', 'test', 'test', 'test test', 'test', 'test', 'fuad@gmail.com', 'test', '019863257892', 'test', 'test', 'facebook/fuad', 'fuad_faijul', 'aaaa', 'aaa', 'aaaa', 'aaaa', '2019-03-05 19:14:57', '2019-03-06 02:04:09'),
(135, '1551799899.png', 'mactyg', 'dfdsfgdaMd Faijul', 'mactyg dfdsfgdaMd Faijul', 'I agree with all additional terms and conditions', 'gnfngfn', 'ngfngfn@gmail.com', 'ftit.com', 'agsagsag', 'gsagsa', 'gsagsag', 'fb.com', 'gsagsag', 'hnfretyety', 'teytey', 'tdeety', 'fgwrg', '2019-03-06 02:31:39', '2019-03-06 18:07:31'),
(136, '1583123948.png', 'mac', 'pc', 'mac pc', 'I agree with all additional terms and conditions', 'sssss', 'ngfngfn@gmail.com', 'ftit.com', 'agsagsag', 'gsagsa', 'gfsgfs', 'fb.com', 'gsagsag', 'wraet2q45', '24524542', '543253245', '4354325234', '2019-03-06 18:11:58', '2020-03-02 04:39:23');

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
(3, '2019_01_02_181338_create_contact_managements_table', 2),
(4, '2019_01_15_165311_add_columns_to_the_users_table', 3),
(6, '2019_01_15_184304_add_another_column_to_users', 4),
(7, '2019_01_15_192403_add_columns_to_contact_management', 5),
(9, '2019_01_21_162528_create_permissions_table', 6),
(11, '2019_01_21_135304_create_roles_table', 7),
(12, '2019_01_21_173134_create_permission_role', 7),
(13, '2019_01_22_171322_add_column_to_roles_table', 8),
(14, '2019_01_22_174544_add_column_to_users', 9),
(15, '2019_01_22_180502_create_role_user_table', 10),
(16, '2019_01_24_165138_create_security_roll_managements_table', 11),
(17, '2019_01_31_165513_create_todos_table', 11),
(19, '2019_01_31_170214_create_todo_user_table', 12),
(20, '2019_02_02_191005_add_column_todos_table', 12),
(22, '2019_02_03_130018_create_recent_activities_table', 14),
(23, '2019_02_03_165455_add_ip_column_recent_activities', 15),
(24, '2019_02_12_184357_create_supplier_categories_table', 16),
(27, '2019_02_16_123625_create_suppliers_table', 19),
(28, '2019_02_16_133852_create_supplier_contact_table', 20),
(29, '2019_02_24_160129_add_category_id_column_suppliers', 21),
(30, '2019_02_26_160514_add_two_columns_projects', 22),
(31, '2019_02_26_173844_create_project_supplier_table', 23),
(32, '2019_02_27_204511_create_project_todos_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission_name`, `permission_for`, `created_at`, `updated_at`) VALUES
(8, 'all project', 'project_management', '2019-01-21 10:47:57', '2019-01-21 10:47:57'),
(9, 'project download', 'project_management', '2019-01-21 10:50:48', '2019-01-21 10:50:48'),
(10, 'project manage', 'project_management', '2019-01-21 10:51:03', '2019-01-21 10:51:03'),
(11, 'project delete', 'project_management', '2019-01-21 10:51:27', '2019-01-21 10:51:27'),
(12, 'add new project', 'project_management', '2019-01-21 10:52:18', '2019-01-21 10:52:18'),
(20, 'all supplier', 'supplier_management', '2019-01-21 10:57:31', '2019-01-21 10:57:31'),
(21, 'supplier print', 'supplier_management', '2019-01-21 10:59:00', '2019-01-21 10:59:00'),
(22, 'supplier manage', 'supplier_management', '2019-01-21 10:59:14', '2019-01-21 10:59:14'),
(23, 'supplier delete', 'supplier_management', '2019-01-21 10:59:24', '2019-01-21 10:59:24'),
(24, 'supplier preview', 'supplier_management', '2019-01-21 10:59:53', '2019-01-21 10:59:53'),
(26, 'add supplier', 'supplier_management', '2019-01-21 11:00:35', '2019-01-21 11:00:35'),
(27, 'add category', 'supplier_management', '2019-01-21 11:01:21', '2019-01-21 11:01:21'),
(28, 'category delete', 'supplier_management', '2019-01-21 11:01:41', '2019-01-21 11:01:41'),
(29, 'category edit', 'supplier_management', '2019-01-21 11:01:48', '2019-01-21 11:01:48'),
(33, 'all contact', 'contact_management', '2019-01-21 11:03:51', '2019-01-21 11:03:51'),
(34, 'add contact', 'contact_management', '2019-01-21 11:04:04', '2019-01-21 11:04:04'),
(35, 'contact delete', 'contact_management', '2019-01-21 11:04:19', '2019-01-21 11:04:19'),
(36, 'contact edit', 'contact_management', '2019-01-21 11:04:34', '2019-01-21 11:04:34'),
(37, 'all employee', 'employee_management', '2019-01-21 11:05:30', '2019-01-21 11:05:30'),
(38, 'add employee', 'employee_management', '2019-01-21 11:05:40', '2019-01-21 11:05:40'),
(39, 'employee delete', 'employee_management', '2019-01-21 11:05:49', '2019-01-21 11:05:49'),
(40, 'employee edit', 'employee_management', '2019-01-21 11:06:00', '2019-01-21 11:06:00'),
(41, 'manage roll', 'setting', '2019-01-21 11:07:10', '2019-01-21 11:07:10'),
(42, 'add role', 'setting', '2019-01-21 11:07:19', '2019-01-21 11:07:19'),
(43, 'role delete', 'setting', '2019-01-21 11:07:30', '2019-01-21 11:07:30'),
(44, 'role edit', 'setting', '2019-01-21 11:07:39', '2019-01-21 11:07:39'),
(46, 'role management', 'security', '2019-01-21 11:08:21', '2019-01-21 11:08:21'),
(50, 'super admin index', 'super', '2019-01-27 10:08:47', '2019-01-27 10:08:47'),
(51, 'preview', 'project_management', '2019-03-03 07:11:15', '2019-03-03 07:11:15'),
(52, 'single download', 'project_management', '2019-03-03 07:11:32', '2019-03-03 07:11:32'),
(53, 'single delete', 'project_management', '2019-03-03 07:11:44', '2019-03-03 07:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(24, 3, 33, NULL, NULL),
(114, 11, 8, NULL, NULL),
(115, 11, 9, NULL, NULL),
(116, 11, 10, NULL, NULL),
(117, 11, 11, NULL, NULL),
(118, 11, 12, NULL, NULL),
(120, 11, 20, NULL, NULL),
(121, 11, 21, NULL, NULL),
(122, 11, 22, NULL, NULL),
(123, 11, 23, NULL, NULL),
(124, 11, 24, NULL, NULL),
(126, 11, 26, NULL, NULL),
(127, 11, 27, NULL, NULL),
(128, 11, 28, NULL, NULL),
(129, 11, 29, NULL, NULL),
(130, 11, 33, NULL, NULL),
(131, 11, 34, NULL, NULL),
(132, 11, 35, NULL, NULL),
(133, 11, 36, NULL, NULL),
(134, 11, 37, NULL, NULL),
(135, 11, 38, NULL, NULL),
(136, 11, 39, NULL, NULL),
(137, 11, 40, NULL, NULL),
(138, 11, 41, NULL, NULL),
(139, 11, 42, NULL, NULL),
(140, 11, 43, NULL, NULL),
(141, 11, 44, NULL, NULL),
(168, 12, 41, NULL, NULL),
(169, 12, 42, NULL, NULL),
(170, 12, 43, NULL, NULL),
(171, 12, 44, NULL, NULL),
(180, 2, 46, NULL, NULL),
(184, 11, 46, NULL, NULL),
(229, 2, 37, NULL, NULL),
(230, 2, 38, NULL, NULL),
(231, 2, 39, NULL, NULL),
(232, 2, 40, NULL, NULL),
(233, 3, 37, NULL, NULL),
(234, 3, 46, NULL, NULL),
(235, 3, 50, NULL, NULL),
(236, 3, 40, NULL, NULL),
(237, 12, 46, NULL, NULL),
(238, 12, 37, NULL, NULL),
(239, 12, 40, NULL, NULL),
(240, 3, 41, NULL, NULL),
(241, 12, 39, NULL, NULL),
(242, 12, 38, NULL, NULL),
(243, 3, 39, NULL, NULL),
(244, 3, 34, NULL, NULL),
(245, 3, 35, NULL, NULL),
(246, 3, 36, NULL, NULL),
(247, 3, 38, NULL, NULL),
(248, 3, 42, NULL, NULL),
(249, 3, 43, NULL, NULL),
(250, 3, 44, NULL, NULL),
(251, 2, 41, NULL, NULL),
(252, 2, 42, NULL, NULL),
(253, 2, 43, NULL, NULL),
(254, 2, 44, NULL, NULL),
(267, 2, 50, NULL, NULL),
(277, 3, 20, NULL, NULL),
(278, 3, 21, NULL, NULL),
(279, 3, 22, NULL, NULL),
(280, 3, 23, NULL, NULL),
(281, 3, 24, NULL, NULL),
(282, 3, 26, NULL, NULL),
(283, 3, 27, NULL, NULL),
(284, 3, 28, NULL, NULL),
(285, 3, 29, NULL, NULL),
(286, 3, 8, NULL, NULL),
(287, 3, 12, NULL, NULL),
(288, 3, 9, NULL, NULL),
(292, 3, 11, NULL, NULL),
(293, 3, 10, NULL, NULL),
(294, 3, 51, NULL, NULL),
(295, 3, 52, NULL, NULL),
(296, 3, 53, NULL, NULL),
(297, 13, 8, NULL, NULL),
(298, 13, 9, NULL, NULL),
(299, 13, 10, NULL, NULL),
(300, 13, 11, NULL, NULL),
(301, 13, 12, NULL, NULL),
(302, 13, 51, NULL, NULL),
(303, 13, 52, NULL, NULL),
(304, 13, 53, NULL, NULL),
(305, 13, 20, NULL, NULL),
(306, 13, 21, NULL, NULL),
(307, 13, 22, NULL, NULL),
(308, 13, 23, NULL, NULL),
(309, 13, 24, NULL, NULL),
(310, 13, 26, NULL, NULL),
(311, 13, 27, NULL, NULL),
(312, 13, 28, NULL, NULL),
(313, 13, 29, NULL, NULL),
(314, 11, 51, NULL, NULL),
(315, 11, 52, NULL, NULL),
(316, 11, 53, NULL, NULL),
(325, 13, 37, NULL, NULL),
(326, 14, 8, NULL, NULL),
(327, 14, 9, NULL, NULL),
(328, 14, 10, NULL, NULL),
(329, 14, 11, NULL, NULL),
(330, 14, 12, NULL, NULL),
(331, 14, 51, NULL, NULL),
(332, 14, 52, NULL, NULL),
(333, 14, 53, NULL, NULL),
(334, 14, 20, NULL, NULL),
(335, 14, 21, NULL, NULL),
(336, 14, 22, NULL, NULL),
(337, 14, 23, NULL, NULL),
(338, 14, 24, NULL, NULL),
(339, 14, 26, NULL, NULL),
(340, 14, 27, NULL, NULL),
(341, 14, 28, NULL, NULL),
(342, 14, 29, NULL, NULL),
(343, 14, 33, NULL, NULL),
(344, 14, 34, NULL, NULL),
(345, 14, 35, NULL, NULL),
(346, 14, 36, NULL, NULL),
(347, 14, 37, NULL, NULL),
(348, 14, 38, NULL, NULL),
(349, 14, 39, NULL, NULL),
(350, 14, 40, NULL, NULL),
(351, 14, 41, NULL, NULL),
(352, 14, 42, NULL, NULL),
(353, 14, 43, NULL, NULL),
(354, 14, 44, NULL, NULL),
(355, 14, 46, NULL, NULL),
(372, 11, 50, NULL, NULL),
(373, 15, 33, NULL, NULL),
(374, 15, 34, NULL, NULL),
(375, 15, 35, NULL, NULL),
(376, 15, 36, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci,
  `pro_name` longtext COLLATE utf8mb4_unicode_ci,
  `slug` longtext COLLATE utf8mb4_unicode_ci,
  `pro_entity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_epc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_funding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suppliers_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_sup_cat` int(11) DEFAULT NULL,
  `pro_description` text COLLATE utf8mb4_unicode_ci,
  `pro_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'starting',
  `closing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suplier_info` text COLLATE utf8mb4_unicode_ci,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `file`, `pro_name`, `slug`, `pro_entity`, `pro_epc`, `pro_funding`, `suppliers_id`, `pro_sup_cat`, `pro_description`, `pro_status`, `closing_date`, `suplier_info`, `category_id`, `category_title`, `created_at`, `updated_at`) VALUES
(1, '[\"180172411.database2txt.txt\",\"1805284859.distribution_management_system2txt.txt\",\"485398227.erp2txt.txt\",\"1291194458.goverment_project2txt.txt\",\"2082455391.password2txt.txt\",\"1003075294.resource_link2txt.txt\",\"1499281352.setcolbd_credential2txt.txt\"]', 'rijwan', 'rijwan-1394548030', 'chowdhury', '004', '007', NULL, NULL, 'there is something', NULL, NULL, NULL, '102', 'Pierce McKenzie', '2019-11-16 03:28:06', '2019-11-16 03:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `project_supplier`
--

CREATE TABLE `project_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_supplier`
--

INSERT INTO `project_supplier` (`id`, `project_id`, `supplier_id`, `created_at`, `updated_at`) VALUES
(1, 86, 20, NULL, NULL),
(2, 86, 18, NULL, NULL),
(3, 86, 11, NULL, NULL),
(4, 87, 20, NULL, NULL),
(5, 87, 11, NULL, NULL),
(6, 88, 11, NULL, NULL),
(7, 89, 20, NULL, NULL),
(8, 89, 18, NULL, NULL),
(9, 89, 11, NULL, NULL),
(10, 94, 20, NULL, NULL),
(11, 94, 18, NULL, NULL),
(12, 94, 11, NULL, NULL),
(13, 96, 20, NULL, NULL),
(14, 96, 18, NULL, NULL),
(15, 96, 11, NULL, NULL),
(16, 97, 20, NULL, NULL),
(17, 97, 18, NULL, NULL),
(18, 97, 11, NULL, NULL),
(20, 100, 11, NULL, NULL),
(41, 146, 23, NULL, NULL),
(42, 151, 26, NULL, NULL),
(43, 151, 27, NULL, NULL),
(44, 151, 29, NULL, NULL),
(45, 151, 30, NULL, NULL),
(50, 154, 30, NULL, NULL),
(53, 153, 29, NULL, NULL),
(56, 155, 30, NULL, NULL),
(74, 158, 25, NULL, NULL),
(75, 158, 27, NULL, NULL),
(76, 157, 34, NULL, NULL),
(81, 159, 11, NULL, NULL),
(82, 161, 18, NULL, NULL),
(93, 163, 39, NULL, NULL),
(94, 162, 38, NULL, NULL),
(100, 108, 37, NULL, NULL),
(101, 104, 37, NULL, NULL),
(102, 110, 37, NULL, NULL),
(106, 113, 37, NULL, NULL),
(108, 114, 37, NULL, NULL),
(109, 112, 29, NULL, NULL),
(112, 115, 29, NULL, NULL),
(113, 115, 27, NULL, NULL),
(114, 111, 37, NULL, NULL),
(115, 118, 41, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_todos`
--

CREATE TABLE `project_todos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_todos`
--

INSERT INTO `project_todos` (`id`, `title`, `description`, `date`, `slug`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'rijwan', 'rijwan', '2019-02-27', '564861822', '87', '2019-02-27 14:53:28', '2019-02-27 14:53:28'),
(3, 'something', 'something', '2019-02-05', '1040424827', '88', '2019-02-27 15:09:43', '2019-02-27 15:18:26'),
(4, 'rrr', 'rrr', '2019-02-04', '751889299', '87', '2019-02-27 15:10:20', '2019-02-27 15:10:20'),
(5, 'test_six', 'test_six', '2019-03-05', '948937721', '86', '2019-03-01 06:21:34', '2019-03-01 06:21:34'),
(6, 'seven', 'seven', '2019-03-06', '1150405665', '104', '2019-03-01 15:11:13', '2019-03-01 15:11:13'),
(7, 'gdsgsdgsdg', 'gsdgdsgsdg', '2019-03-07', '1279305023', '115', '2019-03-02 15:51:44', '2019-03-02 15:51:44'),
(8, 'hi there my name is hriduan ferdoush and today im going to tell you about the forex bitting system', 'FXSUCCESSBDFXSUCCESSBDFXSUCCESSBDFXSUCCESSBDFXSUCCESSBDFXSUCCESSBD', '2019-03-05', '1839204574', '149', '2019-03-04 15:13:41', '2019-03-04 15:13:41'),
(9, 'Popular Course', 'SDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSSSDSDDSDSSDDDSSSSSSSSSSSSS', '2019-03-05', '329217826', '151', '2019-03-04 15:48:49', '2019-03-04 15:48:49'),
(11, 'Popular Course', 'rtrwtw', '2019-03-18', '1275195222', '153', '2019-03-05 00:12:41', '2019-03-05 00:12:41'),
(12, '8578', 'yty6', '2019-03-19', '234298423', '153', '2019-03-05 00:12:57', '2019-03-05 00:12:57'),
(13, '8it', '88778', '2019-03-05', '1629565718', '152', '2019-03-05 00:29:59', '2019-03-05 00:29:59'),
(14, 'Popular Course', 'dsdsvdsv', '2019-03-12', '860889862', '156', '2019-03-05 18:01:10', '2019-03-05 18:01:10'),
(15, '55', '55', '2019-03-11', '276054988', '102', '2019-03-10 18:37:20', '2019-03-10 18:37:20'),
(16, 'rijwan', 'rijwan', '2019-03-12', '1205894527', '114', '2019-03-10 23:16:12', '2019-03-10 23:16:12'),
(17, 'Skies Engineering & Technologies Company', 'yy', '2019-07-16', '1895773818', '118', '2019-07-16 05:51:20', '2019-07-16 05:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `recent_activities`
--

CREATE TABLE `recent_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_activities`
--

INSERT INTO `recent_activities` (`id`, `user_id`, `user_pic`, `first_name`, `last_name`, `deleted_first_name`, `deleted_last_name`, `deleted_status`, `ip_address`, `created_at`, `updated_at`) VALUES
(9, '110', '1549196752.jpeg', 'rijwan', 'chowdhury', 'Liliana', 'Padberg', 'Contact', '127.0.0.1', '2019-02-03 10:33:55', '2019-03-03 06:54:32'),
(10, '110', '1549196752.jpeg', 'rijwan', 'chowdhury', 'Emmy', 'Barton', 'Contact', '127.0.0.1', '2019-02-03 11:06:24', '2019-03-03 06:54:32'),
(11, '5', '1547624107.jpg', 'shaown', 'haque', 'Antonietta', 'chowdhury', 'Contact', '127.0.0.1', '2019-02-03 11:09:09', '2019-02-03 11:09:09'),
(12, '110', '1549196752.jpeg', 'rijwan', 'chowdhury', 'Rahul', 'Collins', 'Contact', '127.0.0.1', '2019-02-04 07:28:09', '2019-03-03 06:54:32'),
(13, '110', '1549196752.jpeg', 'rijwan', 'chowdhury', 'jubayer', 'Emard', 'Contact', '127.0.0.1', '2019-02-04 07:29:01', '2019-03-03 06:54:32'),
(14, '110', '1549196752.jpeg', 'rijwan', 'chowdhury', 'Maegan', 'Glover', 'Contact', '127.0.0.1', '2019-02-07 06:25:42', '2019-03-03 06:54:32'),
(15, '113', '1551684403.jpg', 'hriduan', 'ferdoush', 'mac', 'yuri', 'Contact', '103.106.2.254', '2019-03-04 15:02:12', '2019-03-04 18:26:43'),
(16, '113', '1551684403.jpg', 'hriduan', 'ferdoush', 'Camren', 'Jast', 'Contact', '103.106.2.254', '2019-03-04 17:46:36', '2019-03-04 18:26:43'),
(17, '113', '1551684403.jpg', 'hriduan', 'ferdoush', 'file', 'file', 'Contact', '103.106.2.254', '2019-03-04 17:55:23', '2019-03-04 18:26:43'),
(18, '113', '1551684403.jpg', 'hriduan', 'ferdoush', 'rouson', 'sadia', 'Contact', '103.106.2.254', '2019-03-05 18:32:08', '2019-03-05 18:32:08'),
(19, '113', '1551684403.jpg', 'hriduan', 'ferdoush', 'uuuuuujkru6478466666666666666666666666666666666666666666,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,', 'uhgjgfjh,,658785875', 'Contact', '103.106.2.254', '2019-03-05 18:32:22', '2019-03-05 18:32:22'),
(20, '116', '1551765246.png', 'test', 'test', 'Md Faijul Islam Rezwanul Haque Rahimuddin Hawladar', 'Md Faijul Islam Rezwanul Haque Rahimuddin Hawladar', 'Contact', '103.106.2.254', '2019-03-06 18:07:07', '2019-03-06 18:07:07'),
(21, '110', '1549196752.jpeg', 'rijwan', 'chowdhury', 'supol', 'chowdhury', 'Contact', '127.0.0.1', '2019-05-27 10:27:33', '2019-05-27 10:27:33'),
(22, '110', '1549196752.jpeg', 'rijwan', 'chowdhury', 'hriduan', 'ferdous', 'Contact', '127.0.0.1', '2019-05-27 10:27:37', '2019-05-27 10:27:37'),
(23, '110', '1549196752.jpeg', 'rijwan', 'chowdhury', 'sss', 'tttwww', 'Contact', '127.0.0.1', '2019-07-16 05:49:47', '2019-07-16 05:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'editor', 'admin', '2019-01-22 07:46:57', '2019-01-22 07:46:57'),
(3, 'mentor', 'super_admin', '2019-01-22 07:48:06', '2019-01-22 07:48:06'),
(9, 'No Roll', 'no_roll', '2019-01-26 10:54:52', '2019-01-26 10:54:52'),
(11, 'Super Admin', 'admin', '2019-01-29 06:03:12', '2019-01-29 06:03:12'),
(12, 'setting', 'admin', '2019-01-29 06:42:14', '2019-01-29 06:42:14'),
(13, 'test-editor', 'admin', '2019-03-04 14:58:20', '2019-03-04 14:58:20'),
(14, 'project-test', 'admin', '2019-03-05 16:50:01', '2019-03-05 16:50:01'),
(15, 'faysal', 'admin', '2019-05-27 10:28:33', '2019-05-27 10:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(11, 106, 2, NULL, NULL),
(15, 95, 3, NULL, NULL),
(16, 97, 2, NULL, NULL),
(18, 1, 3, NULL, NULL),
(35, 110, 3, NULL, NULL),
(36, 107, 3, NULL, NULL),
(38, 113, 11, NULL, NULL),
(39, 89, 5, NULL, NULL),
(48, 108, 5, NULL, NULL),
(49, 19, 3, NULL, NULL),
(50, 12, 5, NULL, NULL),
(54, 114, 13, NULL, NULL),
(56, 102, 12, NULL, NULL),
(60, 115, 13, NULL, NULL),
(61, 116, 14, NULL, NULL),
(62, 117, 14, NULL, NULL),
(65, 118, 12, NULL, NULL),
(68, 20, 12, NULL, NULL),
(77, 11, 9, NULL, NULL),
(85, 124, 14, NULL, NULL),
(86, 125, 14, NULL, NULL),
(87, 10, 12, NULL, NULL),
(88, 5, 2, NULL, NULL),
(89, 121, 2, NULL, NULL),
(90, 123, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_description` longtext COLLATE utf8mb4_unicode_ci,
  `supplier_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_social_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_web_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_file_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `supplier_logo`, `supplier_description`, `supplier_phone`, `supplier_email`, `supplier_social_address`, `supplier_web_address`, `supplier_address`, `supplier_category`, `category_id`, `supplier_file_number`, `supplier_slug`, `created_at`, `updated_at`) VALUES
(5, 'rijwan', '1550660261.gif', 'these is a new', 'these is a new', 'these@gmail.com', 'these is a new', 'these is a new', 'these is a new', NULL, NULL, 'these is a new', '23841161', '2019-02-19 07:40:49', '2019-03-06 16:48:02'),
(6, 'younusur rahman', '1550660640.png', 'test is goning on', 'test is gonig on', 'test@gmail.com', 'test', 'https://www.facebook.com/', 'test', NULL, NULL, 'test', '672709108', '2019-02-19 07:42:02', '2019-02-24 12:06:03'),
(7, 'chowdhury shaheb', '1550666898.jpg', 'rtrt', 'rtr', NULL, 'http://localhost:8000/supplier', 'http://localhost:8000/supplier', NULL, NULL, NULL, '12345', '1888653875', '2019-02-19 07:44:13', '2019-02-24 12:25:45'),
(9, 'ninita', '1550660009.jpg', 'hi this is me', 'hi this is me', '22', 'hi this is me', 'hi this is me', 'hi this is me', NULL, NULL, '01235', '579499408', '2019-02-19 07:48:05', '2019-03-06 03:09:11'),
(11, 'lamisa', '1550660149.gif', 'there is a big issue', NULL, NULL, 'everthing is know under control', 'everthing is knwo under control', NULL, NULL, NULL, '007', '57465941', '2019-02-19 07:51:20', '2019-03-06 16:49:13'),
(18, 'there is something i gona test these is are tool tip test', '1550922778.jpeg', '123123123123123123123123123123 project test1', '3123123123123csafasf', 'dfsafasfgfdg@gmail.com', 'https://www.facebook.com/', 'https://www.facebook.com/', '354345354fsaf', NULL, NULL, '213', '1266065390', '2019-02-23 11:48:00', '2019-03-06 16:49:13'),
(19, 'future track', '1551002917.jpg', NULL, NULL, 'future@gmail.com', 'https://www.facebook.com/', 'https://www.facebook.com/', 'there is something new', NULL, NULL, '0123456789', '325832297', '2019-02-24 10:08:37', '2019-03-05 00:30:42'),
(21, 'final test', '1551009248.jpg', NULL, NULL, NULL, 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, NULL, NULL, '12345682', '661488726', '2019-02-24 10:11:19', '2019-03-05 00:30:42'),
(22, 'FXSUCCESSBD', '1551011422.jpg', 'FXSUCCESSBD বাংলা ভাষায় একটি বেতিক্রমধর্মী অনলাইন ফরেক্স কমিউনিটি এবং ট্রেডিং এডুকেশন পোর্টাল যেখানে ফরেস্ক্ররে খারাপ এবং ভাল দুই দিক নিয়েই পর্যালচনা করা হয়েছে এবং চেষ্টা করা হয়েছে সঠিক INFORMATION তুলে ধারার চেষ্টা করা হয়েছে। কাথাটি অপ্রিয় হলেও সত্য য়ে ফরেক্স একটি অত্যন্ত ঝুকি সম্পূর্ন ব্যবসায় যেখানে প্রায় ৯৫% মানুষ লসের সম্মুখিন হয়। খুটি নাটি না জেনে, ঝুকি সংক্রান্ত বিষয়গুলো পর্যালচনা না করে, সঠীকভাবে ট্রেডিং না শিখে, ডোমো না করে শুধু মাত্র অন্যের কথায় প্রলভীত হয়ে অসংখ্য মানুষ বিভিন্নভাবে লসের সম্মুখীন হচ্ছে যেটা কখনও কারও কাম্য হতে পারে না।FXSUCCESSBD বাংলা ভাষায় একটি বেতিক্রমধর্মী অনলাইন ফরেক্স কমিউনিটি এবং ট্রেডিং এডুকেশন পোর্টাল যেখানে ফরেস্ক্ররে খারাপ এবং ভাল দুই দিক নিয়েই পর্যালচনা করা হয়েছে এবং চেষ্টা করা হয়েছে সঠিক INFORMATION তুলে ধারার চেষ্টা করা হয়েছে। কাথাটি অপ্রিয় হলেও সত্য য়ে ফরেক্স একটি অত্যন্ত ঝুকি সম্পূর্ন ব্যবসায় যেখানে প্রায় ৯৫% মানুষ লসের সম্মুখিন হয়। খুটি নাটি না জেনে, ঝুকি সংক্রান্ত বিষয়গুলো পর্যালচনা না করে, সঠীকভাবে ট্রেডিং না শিখে, ডোমো না করে শুধু মাত্র অন্যের কথায় প্রলভীত হয়ে অসংখ্য মানুষ বিভিন্নভাবে লসের সম্মুখীন হচ্ছে যেটা কখনও কারও কাম্য হতে পারে না।', 'sdgsdgdsgds', 'dgfdg@gmail.com', '4564564563', 'http://www.fxsuccessbd.com/', 'gdsgsdgdsgsdg', 'project', '120', 'gds', '1895697294', '2019-02-24 12:30:22', '2019-03-01 06:12:12'),
(23, 'first_attempt', '1551012534.jpg', 'FXSUCCESSBD বাংলা ভাষায় একটি বেতিক্রমধর্মী অনলাইন ফরেক্স কমিউনিটি এবং ট্রেডিং এডুকেশন পোর্টাল যেখানে ফরেস্ক্ররে খারাপ এবং ভাল দুই দিক নিয়েই পর্যালচনা করা হয়েছে', '3123123123123', 'dgfdg@gmail.com', '4564564563', 'http://uniqueinterioranddesign.com/', 'gsdgsdgsdgsdgsdg', 'project', '120', '45343', '1812714258', '2019-02-24 12:48:54', '2019-03-01 06:12:42'),
(41, 'faysal', '1559214183.png', 'there is something', '01986348224', 'faysal@gmail.com', 'aysal', 'aysal', 'aysal', NULL, NULL, '123456789', '1695695344', '2019-05-30 11:03:03', '2019-08-28 07:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_categories`
--

CREATE TABLE `supplier_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_categories`
--

INSERT INTO `supplier_categories` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(10, 'hriduan', 'hriduan', 'hriduan', '2019-02-16 06:55:03', '2019-02-16 06:55:03'),
(11, 'ninita', 'ninita', 'ninita zaman', '2019-02-17 06:14:47', '2019-02-17 06:14:47'),
(12, 'zaman', 'zaman', 'zaman', '2019-02-18 06:18:51', '2019-02-18 06:18:51'),
(17, 'chowdhury', 'la la la', 'la la la', '2019-02-18 06:34:39', '2019-02-18 06:34:50'),
(18, 'Nathen Beahan', 'dolores-aliquid-praesentium-rem-ea-architecto-et-et', 'Terry Moen', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(19, 'Mrs. Aaliyah Larkin DVM', 'eius-labore-ad-dolores-veniam-est-quia-labore', 'Ms. Halie Becker III', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(20, 'Alia Daniel', 'qui-sit-amet-nostrum-alias-natus-sunt', 'Reba Greenfelder', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(21, 'Dashawn Rempel', 'dicta-nam-est-nobis-dolorem-similique-nostrum-in', 'Van Dicki', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(22, 'Prof. Carroll McDermott Sr.', 'ea-voluptatem-sit-vel-sed-minus-natus-voluptatem', 'Vilma Bartoletti Sr.', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(23, 'Mack Weimann', 'nihil-mollitia-delectus-perferendis-maiores-sapiente-non-aspernatur', 'Ms. Ana Schultz', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(24, 'Gust West', 'ut-est-amet-quas-molestiae', 'Anibal Cummerata', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(25, 'Mr. Vincent Bins Jr.', 'aut-cum-vel-asperiores-culpa-sed', 'Ibrahim Nolan MD', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(26, 'Ms. Carolina Thiel DVM', 'a-sunt-enim-ullam-veritatis-in', 'Noah Hilpert', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(27, 'Beth West Sr.', 'consequatur-qui-quis-nisi-quidem-autem', 'Bryana Streich', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(28, 'Erin Huel', 'reprehenderit-id-sed-illum-enim-quis-saepe-enim', 'Ike Wisoky', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(29, 'Delmer Schroeder', 'voluptatem-magnam-placeat-possimus-doloremque-esse-aut-est', 'Julie Gulgowski', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(30, 'Stanford Treutel', 'laboriosam-omnis-odio-incidunt-placeat', 'Seth Leffler', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(31, 'Verna Toy', 'autem-eveniet-adipisci-est-vitae-architecto', 'Krystina Prosacco', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(32, 'Okey Jakubowski V', 'consequuntur-cum-dignissimos-ex-laudantium-qui-voluptatem-quisquam', 'Zachery Pacocha', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(33, 'Lamont Bernier', 'velit-doloribus-laborum-quia-omnis', 'Lacy Baumbach', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(34, 'Mr. Parker Rogahn DDS', 'sed-quia-molestiae-consequatur-commodi-ut', 'Mrs. Anita Wyman DVM', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(35, 'Dr. Werner Lubowitz Sr.', 'placeat-error-placeat-eos', 'Prof. Destiny McGlynn Jr.', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(36, 'Ms. Vicky Boehm MD', 'velit-accusantium-et-eum-exercitationem-omnis-veritatis-inventore', 'Prof. Stuart Grimes MD', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(37, 'Kay Lesch', 'quia-omnis-et-exercitationem-nostrum', 'Mrs. Abbigail Abshire I', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(38, 'Paris Schaden', 'qui-sunt-vel-est-inventore-voluptatem', 'Sim Frami IV', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(39, 'Dr. Macy Ortiz', 'unde-et-dolores-est-numquam-quisquam-voluptatem', 'Ms. Ressie Haag', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(40, 'Cortez Marvin', 'totam-consequuntur-repudiandae-ut-tempora-reprehenderit-sed-accusantium-in', 'Mr. Sage Gorczany', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(41, 'Oren Gerhold', 'eveniet-aut-sit-illum-est', 'Shania Medhurst DDS', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(42, 'Tremaine Altenwerth', 'quos-omnis-veniam-harum-voluptatum-quaerat-eveniet', 'Miss Maia Schmitt', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(43, 'Nadia Weber', 'id-laborum-quo-est-numquam-hic-vero-quo', 'Samson Kulas Jr.', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(44, 'Dameon Hickle DDS', 'consequatur-voluptas-non-id-illum-reprehenderit', 'Kieran Mohr', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(45, 'Isidro Casper', 'aspernatur-quisquam-commodi-vel-laudantium-reiciendis-alias-et-expedita', 'Brandi Jenkins PhD', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(46, 'Mrs. Antonina Bailey DVM', 'quo-magnam-et-aliquid-et-rerum-quod-praesentium-et', 'Mrs. Kristina Huels DDS', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(47, 'Sydni Tremblay', 'eum-corrupti-dolores-est-qui-consequatur', 'Miss Carissa Wilkinson', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(48, 'Mr. Damian Kiehn IV', 'reiciendis-voluptatum-iusto-fugit-illo-explicabo-ad-at-est', 'Dr. Virginie Kessler', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(49, 'Adonis Lynch Jr.', 'et-totam-veniam-corrupti-qui-nam', 'Prof. Camron Keeling', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(50, 'Miss Dora Cruickshank', 'vero-assumenda-consequatur-commodi-deleniti-voluptatem-et-illum', 'Annette Price', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(51, 'Winnifred Will', 'numquam-voluptatem-et-sint-reiciendis-nostrum', 'Darlene Koss', '2019-02-18 06:51:15', '2019-02-18 06:51:15'),
(52, 'Vincent Hyatt', 'odit-sed-molestiae-est-saepe-impedit-est-delectus', 'Dr. Percy Windler Sr.', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(53, 'Brigitte Mraz', 'velit-impedit-quo-nostrum-dolor-ea', 'Prof. Maynard Murazik', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(54, 'Sabina', 'qui-reprehenderit-nulla-non-ad-nam-tenetur-repudiandae', 'Myrtice Erdman', '2019-02-18 06:51:16', '2019-02-18 11:22:45'),
(56, 'Prof. Maria Medhurst Sr.', 'quis-et-at-sed-facilis-non', 'Chad Hodkiewicz Jr.', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(57, 'Dax Kuvalis', 'quia-ipsa-asperiores-voluptatum-in-quia', 'Dannie O\'Keefe', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(58, 'Timmothy Predovic', 'error-voluptatum-quas-et-sed-minima', 'Mackenzie Watsica', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(59, 'Marlon Jakubowski', 'eos-consequuntur-molestiae-eum-sed-aut-natus', 'Marlene Pacocha MD', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(60, 'Terence Spencer', 'non-veritatis-ut-quo-tempora-vel-et-dolorem', 'Trycia Bechtelar', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(61, 'Mr. Omer Veum I', 'tenetur-odit-maxime-velit-facere-molestiae-velit', 'Simeon Schneider', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(62, 'Miss Princess Larson', 'odit-ut-temporibus-eligendi-natus-nesciunt', 'Frederik Lehner', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(63, 'August Dibbert', 'illo-dolore-impedit-optio-commodi-ut', 'Jeramie Wyman', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(64, 'Valerie Mueller', 'molestias-voluptatibus-suscipit-vitae-nostrum-culpa', 'Bianka Hodkiewicz', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(65, 'Savanna Zemlak III', 'sapiente-labore-soluta-placeat', 'Laisha Crooks IV', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(66, 'Dr. Toney Welch', 'ducimus-non-laudantium-eum-voluptate-quis-modi-quo-expedita', 'Kay Haag', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(67, 'Weldon Gleason', 'porro-non-autem-minima', 'Nona Ullrich', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(68, 'Astrid Gutmann', 'qui-velit-et-iusto-eius-id-reiciendis-explicabo', 'Freeman O\'Reilly', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(69, 'Terrell Bednar', 'vitae-eum-ratione-similique-est', 'Benton Hettinger', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(70, 'Dr. Elnora Ratke Sr.', 'totam-natus-laboriosam-velit', 'Prof. Nannie Kris V', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(71, 'Frances Mills', 'vel-est-cum-aliquam-quia-harum-ad', 'Darrion Conroy', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(72, 'Jerrell Block V', 'dolorem-aut-ipsam-et-libero-et-error', 'Gwendolyn Schinner', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(73, 'Afton Lueilwitz', 'vero-quaerat-pariatur-dolores-deleniti-provident-aperiam-cumque-et', 'Dr. Josefina Strosin I', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(74, 'Alexandrea Witting IV', 'quia-quibusdam-ratione-est-laborum-eos', 'Magdalena Jacobi', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(75, 'Giuseppe Bernier', 'rerum-quia-qui-a-deserunt-perspiciatis', 'Carroll Heller IV', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(76, 'Samanta Bergstrom', 'et-earum-sed-consequuntur', 'Beulah Wolff', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(77, 'Anne Cartwright', 'ut-sint-sunt-voluptas-reprehenderit-voluptas-fugiat-vel', 'Lloyd Cartwright', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(78, 'Derrick Casper II', 'quas-numquam-voluptas-quam-optio-animi-omnis', 'Prof. Eladio Doyle PhD', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(79, 'Martina Hodkiewicz', 'quis-numquam-architecto-voluptatibus-voluptatem-est', 'Prof. Daron Lehner III', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(80, 'Mrs. Marion Hill DDS', 'tempora-non-dolores-maiores-at', 'Alyson Boehm IV', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(81, 'Katheryn Kirlin', 'quia-est-quasi-autem-eos-architecto-sed-vitae', 'Francisca Braun', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(82, 'Ryann Romaguera', 'cumque-odit-voluptatum-non', 'Dr. Mellie Kertzmann', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(83, 'Jaqueline Leuschke III', 'possimus-laborum-adipisci-odio-id-eius-sapiente-quos-molestiae', 'Payton Bins', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(84, 'Elva Emmerich II', 'tempora-saepe-sunt-et-quibusdam', 'Crawford Nicolas', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(85, 'Prof. Brayan Weimann MD', 'natus-autem-dolores-facere-voluptatem-recusandae-et-molestiae', 'Dr. Troy Moen DDS', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(86, 'Dante Heidenreich', 'veniam-praesentium-illum-maiores-quos-accusamus-veniam', 'Janie Crona', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(87, 'Alfred Wisozk PhD', 'sapiente-ea-et-sunt-et-ducimus-eligendi-unde-ipsum', 'Darwin Dare', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(88, 'Hertha Medhurst II', 'velit-maiores-natus-laudantium-provident', 'Leanna Harvey', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(89, 'Maye Hintz', 'et-minima-soluta-et', 'Mr. Deshaun Wintheiser', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(90, 'Dr. Tyrell Klein V', 'asperiores-voluptatem-facilis-nihil-reiciendis', 'Aimee Kuhlman PhD', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(91, 'Heath Jacobs', 'veniam-doloremque-itaque-laboriosam-pariatur-consequatur-corporis-necessitatibus-totam', 'Yasmeen O\'Hara', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(92, 'Margarete Barrows', 'enim-recusandae-aut-adipisci-odio-fuga-dolores', 'Jimmy Corwin', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(93, 'Prof. Albina Toy', 'aut-qui-eveniet-voluptatem-enim-rerum-unde', 'Kaylin Heathcote', '2019-02-18 06:51:16', '2019-02-18 06:51:16'),
(94, 'Raleigh Wisoky', 'voluptatibus-sint-nostrum-expedita-debitis', 'Dr. Janessa Collins MD', '2019-02-18 06:51:17', '2019-02-18 06:51:17'),
(96, 'Joanie Ankunding', 'nulla-consequuntur-dignissimos-molestiae-aut-est-dolores-expedita', 'Coleman Krajcik', '2019-02-18 06:51:17', '2019-02-18 06:51:17'),
(97, 'Carley Quigley', 'dolorum-aut-aut-et-recusandae', 'Mr. Ismael Mitchell I', '2019-02-18 06:51:17', '2019-02-18 06:51:17'),
(99, 'Alexane Rodriguez', 'numquam-consequatur-officiis-voluptate-ab', 'Deron Beahan', '2019-02-18 06:51:17', '2019-02-18 06:51:17'),
(100, 'nestro', 'quis-molestiae-tempora-tempora-et-sed', 'Viviane Schroeder', '2019-02-18 06:51:17', '2019-03-10 23:13:03'),
(101, 'Conner Jr.', 'omnis-et-quia-harum-ut-neque', 'Jane Quigley Sr.', '2019-02-18 06:51:17', '2019-02-19 12:02:44'),
(102, 'Pierce McKenzie', 'quia-natus-dignissimos-iste', 'Audrey Hartmann', '2019-02-18 06:51:17', '2019-02-18 06:51:17'),
(104, 'Grace Hirthe', 'sit-et-quia-corrupti-sed-quae-inventore', 'Mr. Braeden Stamm Jr.', '2019-02-18 06:51:17', '2019-02-18 06:51:17'),
(125, 'Test Supplyer', 'Test Supplyer', 'Test SupplyerTest SupplyerTest Supplyer', '2019-03-11 00:34:16', '2019-03-11 00:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_contacts`
--

CREATE TABLE `supplier_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `person_name` longtext COLLATE utf8mb4_unicode_ci,
  `designation` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_contacts`
--

INSERT INTO `supplier_contacts` (`id`, `person_name`, `designation`, `phone`, `email`, `social_address`, `address`, `supplier_slug`, `created_at`, `updated_at`) VALUES
(37, 'chowdhury', 'these is a new', 'these is a new', 'these is a new', 'these is a new', 'these is a new', '23841161', '2019-02-19 07:40:49', '2019-02-24 12:01:49'),
(39, 'test one', 'test one', 'test one', 'testone@gmail.com', 'testone', 'testone', '672709108', '2019-02-19 07:42:02', '2019-02-24 12:01:36'),
(41, 'test three', 'test three', 'test three', 'test three', 'test threse', 'test three', '672709108', '2019-02-19 07:42:02', '2019-02-24 12:01:36'),
(42, 'shaheb', NULL, NULL, NULL, NULL, NULL, '1888653875', '2019-02-19 07:44:13', '2019-02-24 12:01:15'),
(43, 'shaheb two', 'what goes around what comes around', 'rtrtr', 'null', 'null', 'null', '1888653875', '2019-02-19 07:44:13', '2019-02-24 12:01:15'),
(44, 'shaheeb three', 'chowdhury shaheeb is sick know', 'null', 'null', 'null', 'null', '1888653875', '2019-02-19 07:44:13', '2019-02-24 12:01:15'),
(48, 'zamana one', 'rijwan', 'rijwan', 'chowdhury@gmail.com', 'yo', 'yo', '579499408', '2019-02-19 07:48:05', '2019-02-24 12:00:48'),
(49, 'zaman two', '586', '007', 'there@gmail.com', '007', '123456', '579499408', '2019-02-19 07:48:05', '2019-02-24 12:00:48'),
(53, 'zaman one', NULL, NULL, NULL, NULL, NULL, '625653731', '2019-02-19 07:49:59', '2019-02-19 07:49:59'),
(54, 'zaman two', NULL, NULL, NULL, NULL, NULL, '625653731', '2019-02-19 07:49:59', '2019-02-19 07:49:59'),
(55, 'zaman three', NULL, NULL, NULL, NULL, NULL, '625653731', '2019-02-19 07:49:59', '2019-02-19 07:49:59'),
(56, 'sheikh one', NULL, NULL, NULL, NULL, NULL, '57465941', '2019-02-19 07:51:20', '2019-02-24 12:00:36'),
(57, 'sheikh two', 'sheikh two', 'null', 'null', 'null', 'null', '57465941', '2019-02-19 07:51:20', '2019-02-24 12:00:36'),
(59, 'ananna one', NULL, NULL, NULL, NULL, NULL, '421193393', '2019-02-19 07:52:30', '2019-02-19 07:52:30'),
(60, 'ananna two', NULL, NULL, NULL, NULL, NULL, '421193393', '2019-02-19 07:52:30', '2019-02-19 07:52:30'),
(61, 'cynthia one', NULL, NULL, NULL, NULL, NULL, '396117243', '2019-02-19 07:53:25', '2019-02-19 07:53:25'),
(62, 'cynthia two', NULL, NULL, NULL, NULL, NULL, '396117243', '2019-02-19 07:53:25', '2019-02-19 07:53:25'),
(67, '543543ngfngfn', '354354ncnvcvn', '3543453453nvcn', 'dfsdsf@gmail.comncvn', '3112312ncvn', '.21.12.12.ncvn', '1266065390', '2019-02-23 11:48:00', '2019-02-24 12:00:11'),
(68, NULL, NULL, NULL, NULL, NULL, '01239875', '325832297', '2019-02-24 10:08:37', '2019-02-24 12:22:51'),
(69, 'null', '0123456987', 'null', 'null', 'null', 'null', '325832297', '2019-02-24 10:08:37', '2019-02-24 12:22:51'),
(73, NULL, NULL, NULL, NULL, NULL, NULL, '661488726', '2019-02-24 10:11:19', '2019-02-24 10:11:19'),
(74, 'ooo', '354354', '3543453453', 'dfsdsf@gmail.com', '3112312', '.21.12.12.', '1895697294', '2019-02-24 12:30:22', '2019-03-01 06:12:12'),
(79, '543543', '0123456987', '3543453453', 'dfsdsf@gmail.com', '3112312', '.21.12.12.', '1812714258', '2019-02-24 12:48:54', '2019-03-01 06:12:42'),
(105, 'person_one', 'person_one', '0169863482214', 'person_one@gmail.com', 'person_one', 'person_one', '1695695344', '2019-05-30 11:03:03', '2019-05-30 11:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `themeid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `themeid`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, '2019-03-11 17:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `description`, `date`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(38, 'name feil', 'he is very good person', '2019-02-12', '1018740159', '18', '2019-02-02 13:19:18', '2019-02-02 13:19:18'),
(40, 'super user', 'super man', '2019-02-14', '1148951332', '113', '2019-02-02 13:22:40', '2019-02-02 13:22:40'),
(44, 'shawon', 'life is a game.so you dnt play these game carefully,you will be loose.so concentrate..', '2019-02-05', '281806041', '5', '2019-02-03 11:10:51', '2019-02-03 11:10:51'),
(56, 'dfs', 'fsgfsg', '2019-02-27', '369128751', '110', '2019-03-05 00:29:25', '2019-03-05 00:29:25'),
(59, 'fuyry', 'yuurusrfst', NULL, '887629216', '116', '2019-03-06 18:20:07', '2019-03-06 18:20:14'),
(60, 'Skies Engineering & Technologies Company', 'hridoy', '2019-05-21', '1013217375', '110', '2019-05-27 10:25:44', '2019-05-27 10:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sky_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_area_division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_pic`, `first_name`, `last_name`, `full_name`, `status`, `company`, `job_title`, `email`, `website`, `mobile_phone`, `home_phone`, `link_profile`, `facebook`, `sky_id`, `email_verified_at`, `password`, `confirm_password`, `address_location`, `address_area_division`, `address_two`, `notes`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, '1547624107.jpg', 'shaown', 'haque', NULL, NULL, 'future track', 'web developer', 'shawon@gmail.com', 'https://ftit.co.uk', '1986348224', '167464466', 'https://linkedin.com/shawon', 'https://facebook.com/shawon', 'shawon_haque', NULL, '$2y$10$tWxfvlUpW5f9clibJnfAhOl3sOFDVlS1DKIKjBRxXOqeRg2S/2D/q', '123456', '156/1 kajipara', 'mirpur,dhaka-1208', '156/3 shaowrapara dhaka-1208', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains', 'kfd4jMR6gc6Jgd3WeBtQnQEDrxotfizaHeYz0ypEUDyAe6WlqUHRIF36unYc', '2019-01-16 07:35:07', '2019-02-03 11:08:10'),
(10, '1547906236.jpg', 'Kayla', 'stevs', NULL, NULL, 'Barton-Hoppe', 'Artist', 'mullrich@example.com', 'http://simonis.com/eius-unde-natus-ea-ut-quam', '1986348224', '1986348224', 'http://farrell.com/nobis-voluptatum-vero-rem.html', 'http://www.conn.net/cupiditate-molestiae-nihil-dolores-ullam', 'http://www.wehner.net/', '2019-01-20 10:29:19', '$2y$10$fy25z2cA3O3PYSMqN02g1.1fn/Vd4beEtaNq1lTv1IHF5ghOrWZAi', '123456', '674 Senger Tunnel Apt. 105\r\nPort Marlin, TX 39154-8063', 'South Bayleetown', '8943 Prohaska Junctions\r\nNew Arlo, TN 33470-4369', 'Quaerat at et qui et nulla rerum. Error quibusdam qui velit vel repudiandae. Consequatur officiis laudantium aliquam et vel earum. Accusamus aut at ut rerum.', 'G8vKv4U9dygppsT8uTXB8VuNLpalueu9c85ZGDVCJ83NkdtxDRceEFp8znQD', '2019-01-20 10:29:31', '2019-01-21 12:21:13'),
(11, '1547906236.jpg', 'Omer', 'Reynolds', NULL, NULL, 'Predovic, Weissnat and Goyette', 'Mechanical Engineering Technician', 'fvonrueden@example.net', 'http://gorczany.com/sint-aliquid-deserunt-est-nesciunt-vel-deserunt', '1986348224', '1986348224', 'https://www.hickle.org/deleniti-nam-in-unde-architecto', 'http://www.mckenzie.com/', 'http://www.rogahn.com/ducimus-cum-sed-id', '2019-01-20 10:29:20', '$2y$10$FoQcK9h04HSTzHoJUWXwlO5gAh2/XJCgiv6s1IrBh9Z/t3mzhUToG', '123456', '628 Beier Gateway\nNew Ally, NM 36624-1899', 'Rosenbaumfurt', '7185 Mina Branch Apt. 322\nSpinkafort, SD 86363', 'Dicta exercitationem et repellendus numquam numquam et fugit. Et itaque dignissimos enim molestiae quae.', 'iWnwcMf37z', '2019-01-20 10:29:31', '2019-01-20 10:29:31'),
(13, '1547906236.jpg', 'Norris', 'Gibson', NULL, NULL, 'Runolfsdottir-Lang', 'Metal Molding Operator', 'hjacobson@example.org', 'http://leuschke.com/voluptatum-voluptatem-ullam-nam-accusantium-et-voluptatem-eius-eos', '1986348224', '1986348224', 'https://www.gorczany.org/odit-quia-quibusdam-unde-veritatis-error-perferendis-nam-adipisci', 'http://www.beahan.com/repellendus-perspiciatis-non-cupiditate-ipsam-cum', 'http://collier.net/', '2019-01-20 10:29:20', '$2y$10$EfWDzm8EDm8nwew5.HLsHOYdT/kZsJ2DW.0lLBRWy2N/efODTjzwq', '123456', '7688 Hill Mews Suite 843\nNorth Pamela, KY 90707', 'New Denis', '8790 Whitney Forge Apt. 717\nBuckridgefort, UT 92939-3521', 'Accusamus ab ipsa et doloremque voluptatibus. Id qui in quae blanditiis veniam. Commodi ea neque vero sint ea excepturi similique iste. Rerum nobis et molestiae quia iusto veritatis odio dolorem.', '9mKhZUb7h3', '2019-01-20 10:29:31', '2019-01-20 10:29:31'),
(14, '1547906236.jpg', 'Kristin', 'Heaney', NULL, NULL, 'Corwin Ltd', 'Pharmacist', 'gianni.carroll@example.org', 'http://www.stamm.net/ipsum-asperiores-suscipit-vel-aut-natus-placeat-distinctio', '1986348224', '1986348224', 'http://legros.info/consequatur-sint-natus-quia-laudantium.html', 'http://ward.biz/placeat-sed-porro-illum.html', 'http://hagenes.com/inventore-et-consequatur-et-eius-dolor-illum-consequatur', '2019-01-20 10:29:20', '$2y$10$uyOKfqcbYUPBUaCJUeMGKe9l5yJuTPK4PyQrh/m51/k/ffTANLq3O', '123456', '3860 Isidro Springs Suite 816\nNew Luella, NJ 34357-0770', 'South Alanisport', '51185 Koch Village\nReynoldsbury, MN 65961-7457', 'Ut ut dicta et qui ut quia blanditiis. Modi magni consectetur mollitia sequi est illo voluptatem id. Quae repudiandae voluptas autem tempore cum quia aut.', 'ca926PyJmV', '2019-01-20 10:29:31', '2019-01-20 10:29:31'),
(15, '1547906236.jpg', 'Kamron', 'Stokes', NULL, NULL, 'Runolfsson Inc', 'City', 'zweissnat@example.com', 'http://www.ward.org/quasi-cum-et-consequuntur-dolorum', '1986348224', '1986348224', 'http://botsford.org/', 'http://www.heathcote.com/', 'http://carter.com/laborum-provident-possimus-corrupti-illum-quod-consequatur', '2019-01-20 10:29:20', '$2y$10$prbWF.OdRb/wAQXZnIr/p.Pvp9Ps8v2Y4BpZYtDD3O9zMTGQDfVMG', '123456', '972 Kirsten Camp\nElnachester, NH 73723-5526', 'Larkinberg', '12333 Ulices Manors\nWest Ludwigfort, NC 03424', 'Deserunt necessitatibus unde dolores fugiat optio aliquid. Dolorum officia laudantium eos sunt cum distinctio voluptas. Nulla praesentium aut accusamus molestiae ipsa reprehenderit. Omnis quo laudantium quia facilis.', 'RYHHQyWcAq', '2019-01-20 10:29:31', '2019-01-20 10:29:31'),
(16, '1547906236.jpg', 'Addison', 'Romaguera', NULL, NULL, 'Bradtke, Pollich and Tremblay', 'Office Clerk', 'annie.jakubowski@example.com', 'http://www.olson.com/repudiandae-ut-et-repellat-quis-incidunt', '1986348224', '1986348224', 'http://www.hilpert.com/quo-expedita-officia-culpa-earum.html', 'http://hegmann.com/iste-libero-atque-iste-tenetur-quae-ea-a', 'http://hammes.com/qui-laborum-ipsum-facilis-occaecati-asperiores', '2019-01-20 10:29:20', '$2y$10$O9/xp4Xwe6pWSrNCNyckAerSHemKWiv/sYBegzrh1txks41PTQ76O', '123456', '18996 Wiegand Port Suite 882\nWest Amberland, GA 90615', 'Eulaborough', '680 Kemmer Points Apt. 661\nEzekielchester, FL 45322', 'Quas repellat similique recusandae quo deserunt porro et. Cupiditate sit pariatur aut. Porro qui eos eum placeat voluptatibus iusto. Magni aut est nam molestias voluptatem deleniti.', 'vw5uwnJpya', '2019-01-20 10:29:31', '2019-01-20 10:29:31'),
(17, '1547906236.jpg', 'Modesta', 'Wolff', NULL, NULL, 'Kris PLC', 'Molder', 'katlynn.blick@example.com', 'http://medhurst.com/', '1986348224', '1986348224', 'http://www.labadie.info/minima-consequuntur-sit-at-qui', 'http://heaney.com/et-eligendi-vitae-nobis-perspiciatis-fuga-distinctio-labore', 'http://www.kuvalis.com/cumque-eum-doloribus-vitae-quidem-distinctio-ratione', '2019-01-20 10:29:20', '$2y$10$Idwj9rUo9MpnSsNqldmjCO8vj8WSeA4FEA5X2Sp5lTA2uaUXt20Fu', '123456', '49525 Idella Dale Suite 014\nConsidineport, WI 40072-9878', 'Estherchester', '43592 Ewald Shore\nEast Candidofort, ND 52469-3119', 'Libero possimus corporis error. Hic excepturi nihil velit illo. Asperiores ab qui eaque ut fugit nostrum illum.', 'PusGnXts8g', '2019-01-20 10:29:31', '2019-01-20 10:29:31'),
(18, '1547906236.jpg', 'Name', 'Feil', NULL, NULL, 'Ankunding-Harris', 'Railroad Yard Worker', 'van89@example.org', 'http://rempel.com/voluptas-voluptas-tempore-quia-ducimus.html', '1986348224', '1986348224', 'http://www.bins.org/', 'http://corwin.com/qui-ut-accusamus-dolores-exercitationem-dolor', 'http://www.hagenes.com/quisquam-voluptas-beatae-maiores-sed-nihil.html', '2019-01-20 10:29:20', '$2y$10$5iGHRnoPcIHkTkB0Xwk7euZwDWbnOMi662MD4jZdMnuSouP8xyyMC', '123456', '85808 Kamron Common Suite 981\nCummeratastad, NV 09343', 'North Rosemouth', '116 Anastasia Rest Suite 656\nMoenview, HI 63730-4316', 'Qui tenetur molestiae quia aut est voluptatem. Ut facilis vel quod molestiae ea nemo. Dolores omnis deleniti nisi praesentium dolor odit ducimus.', '4UyrXz24IXhCjmgHrB4v2adBm3oR1XbZgYe8TgnOFGg1q1e4CX0qKijOUDkL', '2019-01-20 10:29:31', '2019-01-20 10:29:31'),
(19, '1547906236.jpg', 'Maximillia', 'Sipes', NULL, NULL, 'Dicki, Gleason and Schaden', 'Pharmaceutical Sales Representative', 'hwalter@example.com', 'http://www.wisozk.biz/voluptatem-rerum-et-modi-quasi-distinctio-maiores.html', '1986348224', '1986348224', 'http://oreilly.net/ad-maiores-ab-repellat-quis-a-a-nesciunt', 'http://www.morar.net/maxime-beatae-at-expedita-provident-et-iusto-dignissimos.html', 'http://www.funk.info/et-dignissimos-minus-impedit-quasi-eaque', '2019-01-20 10:29:20', '$2y$10$DDHbtv8ZtWQJY1ELddEAYOb0I1ctaNTKb2fZSDMepFnI5Qh7AMxZq', '123456', '639 Willow Throughway Suite 085\r\nO\'Reillybury, TX 98930', 'New Suzanneview', '45361 Schmeler Island\r\nWest Tristonville, IA 06180-0763', 'Ducimus ut voluptatibus placeat asperiores. Iste sunt quam voluptates sunt quasi magni voluptatem quia. Consequatur est aspernatur ut maiores consequatur ex.', 'kNupcTviCprxPm9WA701rmMtdE34ZRsByKHUxdqnWmZiZ822B9AxpiBi0Pwt', '2019-01-20 10:29:32', '2019-02-06 08:24:51'),
(20, '1547906236.jpg', 'Neal', 'Kiehn', NULL, NULL, 'Satterfield Group', 'Motorboat Mechanic', 'wkautzer@example.net', 'http://www.collier.com/et-aliquam-atque-sit-dolores-nemo-quam-veniam-officiis', '1986348224', '1986348224', 'http://braun.com/', 'http://blanda.com/veniam-accusamus-animi-ducimus-et-asperiores-et', 'http://www.lakin.info/et-cum-sapiente-odio-neque-aliquid', '2019-01-20 10:29:21', '$2y$10$0br1ub87PFOVJ.Cr0gxR6OpkQT0plFPysdX8/A9/3i7ZMx2raJW4S', '123456', '451 O\'Hara Camp\nPort Jessika, MD 77274-6864', 'Lake Makenzieside', '72056 Larson Lock Apt. 216\nMichelside, OH 57379-6409', 'Nobis ut dicta sit et magnam ab tempora optio. Doloremque illum impedit temporibus quia est a provident occaecati. Sapiente nihil et et qui odio.', 'ZFSOiGkTll', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(21, '1547906236.jpg', 'Brandy', 'Paucek', NULL, NULL, 'Mitchell Group', 'Instructional Coordinator', 'mabel.lebsack@example.com', 'https://www.johnston.com/rerum-blanditiis-ratione-dicta', '1986348224', '1986348224', 'http://www.boyle.com/commodi-magnam-fuga-quam-mollitia-assumenda-earum-eaque-temporibus', 'http://brekke.com/omnis-qui-unde-est', 'https://www.rosenbaum.com/voluptates-non-voluptatem-eaque-debitis-rerum-voluptatibus-sit-unde', '2019-01-20 10:29:21', '$2y$10$GbW.oIyzH93p142JuG/hz.CUOd1c0vWt9OWHYFUDXCh5JDcP7xz3q', '123456', '591 Howe Island Apt. 508\nHicklehaven, SD 05057-7160', 'Port Millie', '605 Farrell Street Suite 959\nMayertton, MO 45437', 'Nesciunt esse reprehenderit quos sapiente consequatur cumque ex consectetur. Quis temporibus nam et delectus sint. Quia autem iste dolorum quam quia dolores dolorem. Sed fugiat nobis velit quod.', 'KfxQvgHHm5', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(22, '1547906236.jpg', 'Zack', 'Haag', NULL, NULL, 'Jaskolski-Bergnaum', 'Photographic Reproduction Technician', 'auer.trudie@example.net', 'http://www.mitchell.net/dolor-veniam-dolores-veritatis-beatae-aut', '1986348224', '1986348224', 'http://powlowski.net/dolor-amet-neque-sit-aut-exercitationem-optio', 'http://www.moore.info/natus-ut-dolores-ea-non-est-et.html', 'http://www.rolfson.com/enim-est-dolorem-necessitatibus-velit-amet-error-tempora.html', '2019-01-20 10:29:21', '$2y$10$PhBsi7FSyDPfFVlk5eaTBugC8wvQi2l32audxw.QL.44Vm.RFkrtK', '123456', '6758 Stephanie Turnpike Suite 057\nGutkowskibury, GA 19212', 'East Gradyfort', '859 Samanta Circle\nIsaiahmouth, WV 63823', 'Magni quae et quia expedita eius est tempora alias. Corporis molestiae quia voluptatum. Eius officiis hic est est ea esse est pariatur. Blanditiis incidunt placeat nobis adipisci sit.', 'EZhn5pei2h', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(23, '1547906236.jpg', 'Ally', 'Batz', NULL, NULL, 'Powlowski-Jaskolski', 'Locker Room Attendant', 'sgrimes@example.com', 'http://www.hermiston.org/pariatur-ut-aliquid-sequi-aut', '1986348224', '1986348224', 'http://www.stokes.info/', 'http://www.terry.com/', 'http://www.bashirian.com/', '2019-01-20 10:29:21', '$2y$10$7b32f.L.3QDh7K4y2ZZjVe9h11zALnHo6PkiMaGuAWGh/Vl21eni2', '123456', '469 Wiza Turnpike\nWest Cleveland, MI 92729-3949', 'Yesseniaside', '5828 Osinski Parks Suite 095\nWalterport, WI 09894', 'Dolores qui error sint nemo soluta ut. Hic non aut libero enim veniam error perspiciatis praesentium. Culpa vitae quo dolore sit modi asperiores. Labore voluptatem ut id laudantium facere.', 'lHbc6sgkMX', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(24, '1547906236.jpg', 'Dante', 'Wisozk', NULL, NULL, 'Hayes Inc', 'Precision Dyer', 'ntorphy@example.net', 'https://leannon.com/commodi-velit-beatae-dicta-molestiae-laboriosam-fugiat-perspiciatis.html', '1986348224', '1986348224', 'http://wiza.info/', 'http://www.robel.com/sapiente-temporibus-est-est-iusto.html', 'http://www.cronin.org/', '2019-01-20 10:29:21', '$2y$10$G6fuyb6dodPi3YwUkwPrLeaobPRar0DRTHjWVQvjuRRt6rIqjYkDa', '123456', '9913 Muriel Ridge\nOlafborough, KS 18392-0560', 'Streichbury', '7873 Tillman Mall Suite 556\nNorth Austinport, CA 88362', 'Inventore ducimus animi rerum aspernatur harum. Vero architecto architecto quis dolor. Quos dolore occaecati provident vel laudantium dolores placeat.', 'cspWNdRXM9', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(25, '1547906236.jpg', 'Enola', 'Stokes', NULL, NULL, 'Daniel-O\'Keefe', 'Refractory Materials Repairer', 'telly49@example.com', 'http://schinner.info/', '1986348224', '1986348224', 'http://johnson.com/nam-et-nulla-voluptatem-quo-sapiente.html', 'http://www.shields.org/', 'http://cummerata.net/repudiandae-quisquam-autem-asperiores-rerum-vitae-explicabo-vitae-atque.html', '2019-01-20 10:29:21', '$2y$10$flH3zJR8QWQJnF87q0PuNOZ0dADxitpAjNPZJ.ZlIvgwgK5jaMLvS', '123456', '897 Abe Causeway Apt. 326\nMalloryview, HI 87776-7595', 'Lake Ona', '1214 Farrell Shoal Suite 213\nNorth Tate, SC 80263', 'Fugit corporis atque eaque id hic. Possimus recusandae ab facere error et qui. Commodi mollitia assumenda dolorem itaque nihil suscipit et. Quia dolorem nemo nemo ipsum reiciendis impedit.', '6W4Xl2bWEK', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(26, '1547906236.jpg', 'Lila', 'Daniel', NULL, NULL, 'Schamberger Inc', 'Aviation Inspector', 'autumn33@example.net', 'http://www.veum.net/amet-ipsa-corrupti-neque-officia.html', '1986348224', '1986348224', 'http://kohler.info/dolor-voluptatem-maiores-fugiat', 'http://www.harvey.com/est-porro-inventore-est-perspiciatis-iure-doloribus-ipsa.html', 'http://www.von.com/excepturi-veritatis-odit-sed-recusandae-molestias.html', '2019-01-20 10:29:21', '$2y$10$EVWQyOP1Uh2D6PTOvRdbwOIBp.7JdVPe2avqT5utJ826ov689Xj1y', '123456', '5327 Lysanne Square\nStonestad, LA 03563-7470', 'Cronafort', '569 Yazmin Walks\nNorth Tabithaland, LA 76958', 'Sunt ipsum sed eius illo necessitatibus quaerat magnam. Cumque labore et eum et. Saepe voluptatum atque non. Non velit consectetur cum aliquam excepturi sit impedit. Et exercitationem fuga harum deserunt.', '6Qx45TItj5', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(27, '1551602089.png', 'Kenna', 'Macejkovic', NULL, NULL, 'Kerluke Inc', 'Marketing Manager', 'grady.chadd@example.com', 'http://www.runolfsson.com/', '1986348224', '1986348224', 'http://metz.net/tenetur-tenetur-ullam-expedita', 'http://sauer.biz/vero-iure-nisi-aspernatur-voluptatem-et-voluptatem', 'http://borer.biz/nemo-et-quibusdam-et-omnis', '2019-01-20 10:29:21', '$2y$10$Uab2Hkx98a3s0b1gDdljKud9x83u2G8SJMrJY0qampH6bzIxbDlfu', '123456', '475 Saul Ville Apt. 603\nGreenfelderhaven, OH 85373-4716', 'Lake Dewitt', '9877 Hegmann Plaza\nKeiraberg, NJ 70828', 'Numquam error reprehenderit et voluptas et voluptatem ut itaque. Commodi iste aut ut velit ipsa nesciunt. Rerum in sed dolorum odio esse quis.', 'ErqVuapvmN', '2019-01-20 10:29:32', '2019-03-03 08:34:49'),
(28, '1551602066.png', 'Katrina', 'Shanahan', NULL, NULL, 'Monahan, Orn and Murray', 'Desktop Publisher', 'devante.hamill@example.org', 'https://grady.org/non-dolorem-veritatis-rem-incidunt.html', '1986348224', '1986348224', 'http://www.wiegand.biz/dolorum-vitae-provident-quam-necessitatibus-ipsum', 'http://www.ritchie.org/non-omnis-natus-sit-itaque-ut-nulla', 'http://www.gerhold.com/', '2019-01-20 10:29:21', '$2y$10$9GiJ.03M.09coB/6o3qowOFOsWYW8RbCRZbvoZT4sCChv1Zmw97z.', '123456', '22807 Lucious Mountains\nLake Wanda, NM 97018', 'Aufderharshire', '871 Katelyn Way Suite 582\nNew Carmelo, OR 61167-4110', 'Voluptas magnam fuga accusamus ut et omnis est. Ex ab dolorum minus debitis aut eaque. Suscipit vitae veniam eum blanditiis. Non nihil incidunt eum eum sunt consectetur.', 'yJOcI3NyNu', '2019-01-20 10:29:32', '2019-03-03 08:34:26'),
(29, '1551602046.png', 'Alvena', 'Koelpin', NULL, NULL, 'Bechtelar LLC', 'Agricultural Product Grader Sorter', 'maximillian30@example.org', 'http://www.zemlak.com/pariatur-ut-cum-et-dolorem-aut-tempora-culpa.html', '1986348224', '1986348224', 'http://pfeffer.com/quos-quia-mollitia-dolor-occaecati.html', 'http://www.schulist.biz/aliquam-laboriosam-vel-beatae-a-sed', 'https://www.murray.info/quidem-velit-magni-esse-consequatur-veritatis-et-sed-dolor', '2019-01-20 10:29:22', '$2y$10$CPYyhu/Df0LZoiKNrI55EuaYVewaQmeCLUexQvd1BrQvMbJJVeMZi', '123456', '290 Ignatius Camp Apt. 174\nRobynfurt, NH 73799', 'Robertsbury', '482 Haylee Plain\nBlaiseland, TN 53295-5479', 'Sed aperiam fugiat laborum non expedita. Soluta non omnis illum fugit rerum. Dolor recusandae voluptatem atque voluptate omnis. Praesentium nesciunt est atque voluptatem dolor officiis.', 'av5PruTOcB', '2019-01-20 10:29:32', '2019-03-03 08:34:06'),
(30, '1547906236.jpg', 'Margot', 'Cartwright', NULL, NULL, 'O\'Conner-Predovic', 'Historian', 'pterry@example.net', 'http://www.yundt.com/minima-nobis-corrupti-aut-iure.html', '1986348224', '1986348224', 'http://witting.com/aut-magni-voluptatem-molestias-commodi-repudiandae-et.html', 'http://www.moore.com/', 'http://abbott.org/ut-earum-quam-id-voluptatum-quod-est', '2019-01-20 10:29:22', '$2y$10$bEwbe3XI5AvUbk0oj1I4YOw4KhA1cVawEjFIhvgM2qqpMYy4PAeE6', '123456', '190 Kenyon Club\nLake Bobbie, ME 74216', 'Ashtynstad', '486 Sarai Spur Apt. 810\nSouth Frederic, PA 23711', 'Ipsa qui voluptas et libero optio reprehenderit. Cum provident et sed amet eaque quae qui. Aut consequatur officia est quis ullam sapiente laudantium. Dolorem doloribus sed eligendi sint.', 'dYDcmVeud8', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(31, '1547906236.jpg', 'Linwood', 'Shields', NULL, NULL, 'McDermott-O\'Reilly', 'Paperhanger', 'istokes@example.net', 'http://bahringer.info/est-quia-rerum-aspernatur-et-laboriosam-voluptate-impedit.html', '1986348224', '1986348224', 'http://botsford.com/ut-soluta-voluptatibus-ea-consequuntur-excepturi-et-et', 'https://www.mayert.com/accusamus-eveniet-eos-dolorem-et-modi-aut-ut', 'http://oreilly.com/nam-et-perferendis-sint-iusto-aut-quisquam-corporis.html', '2019-01-20 10:29:22', '$2y$10$bMS3w3ChyK3tUqNcziwt8.wjuV8Dd5dYnja2SqzJBOm5eUzeu77z.', '123456', '3001 Lauren Fords\nJohnstonville, HI 03021', 'Kihnchester', '150 Lind Keys\nLake Laylahaven, WV 19016-6717', 'Delectus qui et quos quo quasi. Ex ratione voluptate ut labore eligendi. Tempore voluptas voluptatum ea ducimus quia.', 'LgSi94SJB2', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(32, '1547906236.jpg', 'Retha', 'Rosenbaum', NULL, NULL, 'Johnston-Kutch', 'Forest Fire Fighter', 'shields.flavio@example.org', 'http://www.kling.com/', '1986348224', '1986348224', 'http://donnelly.biz/aut-atque-sequi-suscipit-ullam', 'http://www.rolfson.biz/ea-vel-quae-voluptates-rerum', 'http://kub.biz/nihil-est-eos-occaecati-aut', '2019-01-20 10:29:22', '$2y$10$NLRXVe66FlVxPJB68GGUVuJy8GtZtMRQBNVN25UflFBZ5w3lrjI5i', '123456', '708 Wilderman Passage\nPort Eleonore, MS 18733', 'Port Alvina', '477 Stewart Islands Suite 405\nWhiteland, NE 24184-6785', 'In sed cum quod. Nisi repudiandae neque autem. Cupiditate ad suscipit dolorem ut aliquam commodi nam. Quis ratione est qui eos quasi.', 'x4Cdvl2fKI', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(33, '1547906236.jpg', 'Quentin', 'Hoeger', NULL, NULL, 'Franecki, Von and Trantow', 'Anthropologist', 'christa.herzog@example.org', 'http://www.zboncak.com/', '1986348224', '1986348224', 'https://price.com/officiis-ad-qui-est-est-dolorem-perferendis-modi.html', 'https://www.schoen.com/et-modi-eaque-rem-incidunt-ipsum', 'http://williamson.com/ipsum-et-distinctio-nulla-qui-error-eaque-id', '2019-01-20 10:29:22', '$2y$10$7kA8dqQa691t2kQRdOZ4b.DNpk99I65eJNBjhL6pa.ai6t6DX7nLa', '123456', '425 Eve Port\nHegmannbury, MN 84782', 'South Monicamouth', '8189 Baron Estate\nSouth Pearl, FL 36931-8434', 'Consectetur commodi cumque velit et itaque. Quaerat et ratione rerum dolores et. Dignissimos cupiditate animi inventore voluptatem.', 'm343iqiLpR', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(34, '1547906236.jpg', 'Dwight', 'Kunde', NULL, NULL, 'Huel Group', 'Teacher Assistant', 'mohammad49@example.net', 'http://nolan.biz/rerum-accusamus-sit-nihil-vel-dicta', '1986348224', '1986348224', 'http://www.runolfsdottir.org/quaerat-placeat-perferendis-excepturi-odit-voluptatem', 'https://www.stoltenberg.com/cumque-iste-dignissimos-dolore-beatae', 'https://www.upton.com/qui-autem-quidem-optio-sed-qui-fugiat', '2019-01-20 10:29:22', '$2y$10$WeRfACY0teHi1BZukuF1ge6sfx21KRl/VtXUxw4jA07xAxxaGL81.', '123456', '667 Devante Way Apt. 726\nCynthiachester, WY 26187-2589', 'East Glennie', '601 Wisoky Forges Suite 941\nStiedemannmouth, CT 26048-8527', 'Voluptates velit sed ad. Labore eaque vel odio provident. Et ut magnam voluptatum qui. Est incidunt suscipit quos maiores eos.', 'bYZIxZxNsr', '2019-01-20 10:29:32', '2019-01-20 10:29:32'),
(35, '1547906236.jpg', 'Taurean', 'Sanford', NULL, NULL, 'Ritchie LLC', 'Government', 'ada50@example.com', 'http://tromp.net/accusantium-est-nostrum-quibusdam-voluptates-voluptatem-iste.html', '1986348224', '1986348224', 'http://reichel.com/', 'http://vonrueden.org/', 'http://klocko.com/doloribus-ad-debitis-natus-porro', '2019-01-20 10:29:22', '$2y$10$0dCMsHfSjD6MzRTfruhrxucDJLHMiEsWTb2cguYy3PeL497HTR7.e', '123456', '902 Minnie Roads\nNew Toreyville, HI 10168', 'Goldnerstad', '762 Windler Roads\nTheodorashire, UT 95450', 'Sint velit veritatis necessitatibus sit est eos et consequatur. Laudantium rerum inventore possimus. Laboriosam est ex veniam ut ullam nihil ducimus. Debitis voluptas placeat possimus voluptatem.', '94ZPLOhHIv', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(36, '1547906236.jpg', 'Wade', 'Bailey', NULL, NULL, 'Little, Gerlach and Kautzer', 'Bindery Machine Operator', 'francesca.kreiger@example.org', 'http://bergstrom.org/veniam-et-distinctio-occaecati-rem-impedit', '1986348224', '1986348224', 'https://www.osinski.com/ipsum-culpa-id-consequuntur-esse-rerum-voluptatem-ut', 'http://www.beer.com/distinctio-aut-quisquam-ipsa-et-doloremque-sit', 'http://www.lubowitz.com/soluta-ea-rerum-tempore-sed.html', '2019-01-20 10:29:22', '$2y$10$bsUcBVyJQO7E7M4FCyTxAec9zFsElyW5IVTz3ZF4z61OnZAncA2pW', '123456', '281 Katherine Road Suite 036\nBirdiebury, WI 22647-0678', 'North Dessie', '6208 Watsica Wells Apt. 783\nKihnport, AZ 93238-0326', 'Ipsa esse nulla labore non voluptate. Repellendus sunt et illum sapiente voluptatum. Ut quam vel ea et veniam error. Dolorem eos omnis facilis mollitia rem nisi.', 'aMp0fL0E6e', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(37, '1547906236.jpg', 'Rebeca', 'Breitenberg', NULL, NULL, 'Dach-Collier', 'Warehouse', 'moore.brent@example.net', 'http://friesen.com/et-sint-at-ut-in-vel-sed-officia.html', '1986348224', '1986348224', 'http://www.blick.net/', 'https://www.sauer.com/at-quia-et-voluptate-aut-accusantium-rerum-ea', 'http://www.keebler.com/veniam-laboriosam-ullam-laborum-et-ab-dolor', '2019-01-20 10:29:22', '$2y$10$8L/owL8IJP3cSsDPfPGPN.FsKzIehPQoaweKWLEl2mMoHHrHXc3CK', '123456', '5260 Jayde Shoals\nMonahanville, WV 16736', 'Jerrelltown', '14046 Jast Road Suite 968\nPort Marc, TX 57111', 'Nesciunt praesentium earum consequatur provident rem suscipit. Ipsum animi enim doloremque est. Aut rerum id eum error harum odit dolore eum. Cum cumque laboriosam placeat iure eos vero. Aliquam et velit dolor itaque voluptatum voluptatem quam.', 'Pv5WlCb3NZ', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(38, '1547906236.jpg', 'Maida', 'Lind', NULL, NULL, 'Morar Group', 'Software Engineer', 'ernie.rath@example.net', 'http://donnelly.com/reiciendis-veritatis-animi-ad-voluptas-ut-maxime-cumque-ea.html', '1986348224', '1986348224', 'http://www.trantow.com/et-quos-qui-nobis-quisquam', 'http://bogisich.com/deleniti-atque-autem-commodi', 'http://www.hills.com/quam-cum-eum-doloremque-ea-animi.html', '2019-01-20 10:29:22', '$2y$10$0TDMYkQ/fx/KEpYrJT26B.Gaa.xuQRoMhASpo2dgJ.ask8v7gYB5y', '123456', '6649 O\'Connell Crest Suite 981\nNew Jonathanville, NV 24893', 'Konopelskifort', '24532 Harris Way Suite 263\nNew Margarettehaven, RI 82226-1158', 'Voluptatum qui quos ut natus consequatur. Maxime suscipit minima expedita est.', 'NuSRIrNenK', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(39, '1547906236.jpg', 'Earnestine', 'Beier', NULL, NULL, 'Heller, Ortiz and Moen', 'Construction Driller', 'sharon.bechtelar@example.org', 'http://www.rohan.org/', '1986348224', '1986348224', 'http://www.waters.com/quisquam-sint-quaerat-repellat-voluptate.html', 'http://www.hickle.com/pariatur-aut-et-ducimus-ipsam-quod', 'http://luettgen.com/', '2019-01-20 10:29:23', '$2y$10$WheZTXJLeCizOJbmWc4dYeiLQZ/Zj3WJVMwt3gq90CfoVUYKyhsGq', '123456', '1893 Mertie Extension\nBednarton, NY 23300', 'West Vilmaland', '9446 Aletha Islands Suite 061\nNorth Katelin, ND 88852', 'Unde accusantium amet ut quia aut nemo ea. Enim repellendus odit dolores eligendi veniam tenetur aut.', 'fhKqhKtGmX', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(40, '1547906236.jpg', 'Keara', 'Bosco', NULL, NULL, 'Corkery-Schultz', 'Credit Authorizer', 'owalsh@example.net', 'https://kertzmann.com/suscipit-quae-dolorum-aperiam-molestiae-ut-at-et.html', '1986348224', '1986348224', 'https://www.schmeler.com/deleniti-deserunt-dolores-unde-assumenda-voluptatem-eum', 'https://www.nicolas.com/quasi-soluta-veritatis-id-cumque', 'http://www.powlowski.org/possimus-tempore-consequatur-nesciunt-error-similique', '2019-01-20 10:29:23', '$2y$10$Xg6l9GnC8SMZT1VAxZcDVe3uXEttbTuAuYWeAeFOGnCWb3ChPKOb.', '123456', '98366 Schroeder Inlet\nChamplinburgh, HI 58618', 'Schuppeton', '65143 Kerluke Junction\nSaulburgh, TN 22214', 'Saepe et amet culpa aut et ut culpa. Eius asperiores nam similique expedita distinctio laudantium aspernatur.', 'ubsOv8zmnX', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(41, '1547906236.jpg', 'Brown', 'Pagac', NULL, NULL, 'Green PLC', 'English Language Teacher', 'oconner.barbara@example.net', 'http://hamill.com/rerum-rerum-veritatis-aut-excepturi', '1986348224', '1986348224', 'http://gleichner.org/voluptas-voluptatem-et-rerum-sit-ipsum-rerum-est', 'https://www.wunsch.info/qui-asperiores-amet-debitis-quos', 'http://www.medhurst.com/quo-cum-culpa-et-minima-quae-quod-illo-impedit.html', '2019-01-20 10:29:23', '$2y$10$gKWp3brz4AEMXMODFoaLYuBmMDAuWampLsmq3/osodOV0E.6hbt1O', '123456', '5852 Fern Squares Suite 285\nMatthaven, MN 02911-7741', 'Howellfort', '2725 Nolan Extensions Apt. 329\nLake Bradlyborough, MT 63733', 'Maxime qui qui sunt dolor. Possimus placeat totam iste aut cum necessitatibus repellendus. Enim fugit voluptas alias ullam rerum voluptas exercitationem iste. Veritatis maiores voluptatum necessitatibus aliquam et.', 'TO5lkaRNhw', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(42, '1547906236.jpg', 'Danyka', 'Vandervort', NULL, NULL, 'Stokes PLC', 'Hand Sewer', 'don.quitzon@example.com', 'http://heathcote.com/cupiditate-dignissimos-veritatis-veritatis-asperiores-accusamus.html', '1986348224', '1986348224', 'http://kuhlman.net/', 'http://volkman.com/et-rerum-deleniti-explicabo-maxime-dolorem-assumenda', 'http://www.ward.com/similique-quae-iure-expedita-omnis-iure-blanditiis-nobis.html', '2019-01-20 10:29:23', '$2y$10$SWadNLcRJuF25j29mp2tFOLwJtLRQnCa9O3kEruJyB8y5jgdl1PrO', '123456', '59005 Adele Wall\nNorth Delbertburgh, AZ 21706-1689', 'New Lennieland', '566 Reba Spur\nSouth Thereseland, NE 09967-6535', 'Quis eum consequatur minus nam. Aut aut nostrum sit ut accusantium ex. Dignissimos consectetur dicta et delectus numquam.', 'xmOtBazVeg', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(43, '1547906236.jpg', 'Kayley', 'Torphy', NULL, NULL, 'Stokes LLC', 'Mechanical Engineering Technician', 'ghackett@example.com', 'http://armstrong.com/et-et-inventore-reprehenderit-similique-accusamus-et-accusamus.html', '1986348224', '1986348224', 'http://gerlach.info/molestiae-praesentium-quia-voluptatum-impedit-consectetur-libero', 'https://www.towne.com/veniam-praesentium-aut-qui-commodi', 'http://dicki.com/tempore-esse-est-nam-architecto-debitis.html', '2019-01-20 10:29:23', '$2y$10$8j0ZQVB5MsEC1nMs0.mv7.nXSk1kzsYaipUKzFPOiKrK8AOpbae4C', '123456', '9903 Hamill Manors Suite 485\nSouth Martaport, OK 61422-6059', 'Dorthaberg', '3003 Heloise Ways\nPort Akeem, VT 20999', 'Similique similique eligendi ex architecto recusandae nihil quidem consequuntur. Sint cum dolore dolores atque illum optio. Harum autem voluptatem doloribus iste quis ut.', 'huYNiXA4MxauqPZpFQMwRMSr7HemWFecOoMrsI2QYby3zy5F5E1ZBtx007Ej', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(44, '1547906236.jpg', 'Rocio', 'Nader', NULL, NULL, 'Larkin-Osinski', 'Stevedore', 'violette.mcclure@example.net', 'http://wolff.com/dignissimos-nostrum-voluptatem-et-blanditiis', '1986348224', '1986348224', 'http://auer.info/adipisci-iusto-illo-ut-consequatur-voluptatem-nostrum-debitis', 'https://www.towne.com/non-possimus-sed-non-modi-maiores-quasi-eum-corrupti', 'http://schmeler.com/', '2019-01-20 10:29:23', '$2y$10$cNatkdoV5ZkdnWv3CceuTOznMMbcYVTkbVveD1R6EY.53Zo3QxCGe', '123456', '492 Jeffery Ville\nBrauntown, OH 93526-6127', 'Demetrisside', '420 Morar Wall\nDickensville, AZ 10482-8466', 'Doloribus consequatur et quia voluptas ea quia. Ut dolorum consequatur praesentium ipsa qui veniam. Vero fuga doloremque non tempora.', 'VGZWmaXuB5', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(45, '1547906236.jpg', 'Patrick', 'Walsh', NULL, NULL, 'Walter, Skiles and Mraz', 'Garment', 'bailey.dewitt@example.com', 'http://kemmer.net/quis-et-deserunt-quos-molestiae.html', '1986348224', '1986348224', 'http://hauck.com/libero-sint-ipsum-eum-numquam-a', 'http://www.kunze.biz/', 'http://www.pouros.com/', '2019-01-20 10:29:23', '$2y$10$SNGuD8zVGisUzBwV7IvnWOpGaCu2b8YMJtmmjzv.OTYv26ebQVKJq', '123456', '925 Schmeler Passage\nLake Khalidhaven, LA 83277-6693', 'West Ora', '415 Hamill Common\nRogelioville, AZ 76259-8223', 'Doloribus omnis qui qui quis aspernatur qui. At consequuntur illum expedita velit delectus quisquam. Nisi qui similique qui blanditiis. Nesciunt incidunt facilis ut vero et eos laboriosam.', 'hjygFqJ3cX', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(46, '1547906236.jpg', 'Abigayle', 'Altenwerth', NULL, NULL, 'Gulgowski-Kuvalis', 'Therapist', 'hirthe.darian@example.com', 'http://wyman.info/voluptatum-reiciendis-eos-nihil-officia-hic-omnis', '1986348224', '1986348224', 'https://murray.com/eius-consequatur-qui-ducimus-sunt-aperiam-nihil-vel.html', 'https://strosin.biz/quos-et-sed-asperiores-dolore-quasi-pariatur.html', 'http://www.ullrich.com/cupiditate-error-ex-natus-voluptatem-quo-aut', '2019-01-20 10:29:23', '$2y$10$5xzutWibgVFQAq2DcuAPouG9ZJPq6xsI1umLQCTc3Nc/6A48iOUGq', '123456', '97647 Vincenza Inlet\nJohnsonstad, UT 70902-2406', 'Howellberg', '6391 Lakin Island\nNew Lina, WY 61409', 'Quia molestiae quas sapiente sed ut earum molestiae. Eos ratione sed quia sint minima necessitatibus iure. Hic et aliquid a aut iusto.', 'JANtePQj0x', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(47, '1547906236.jpg', 'Stephon', 'Willms', NULL, NULL, 'O\'Keefe-Aufderhar', 'Paralegal', 'chad.cassin@example.org', 'http://www.fadel.info/nam-accusantium-fugiat-nam-suscipit-fugiat-ut-laudantium', '1986348224', '1986348224', 'http://roob.com/molestiae-aut-harum-illum-ipsam-doloribus-ut-a.html', 'http://www.cole.com/consequuntur-est-amet-qui-minus-distinctio', 'http://grimes.com/', '2019-01-20 10:29:23', '$2y$10$RfRUJo7o0FejFHG2lBZ9Ku52FRWCY6fq6lsMwedIS3ssyO8QQtm1C', '123456', '85406 Hintz Radial\nNorth Lina, IA 45122', 'West Nathen', '71901 Hessel Hollow Apt. 233\nCobyfurt, AK 94618', 'Incidunt aut consequatur omnis sit. Nesciunt culpa ipsam pariatur animi accusamus nulla sit. Dolores aut tempore aliquid animi harum.', 'UNAtknIhJN', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(49, '1547906236.jpg', 'Brionna', 'Dooley', NULL, NULL, 'Franecki Ltd', 'Insulation Installer', 'era78@example.com', 'https://www.ledner.com/omnis-a-facere-in-est-enim-itaque-dicta-sint', '1986348224', '1986348224', 'https://kiehn.com/aliquam-reiciendis-optio-sit-architecto-minima-ipsa.html', 'https://www.leuschke.com/sunt-velit-officiis-atque-quia', 'http://langworth.info/', '2019-01-20 10:29:24', '$2y$10$lK1QSTvLki810wYwrONK6.QgAAGZ3aHzDylpx7myhL3DrAYdswKie', '123456', '86562 Corwin Causeway\nWest Maryjanestad, SD 66031-3850', 'Josiahville', '1715 Donnie Prairie\nNew Avaland, OH 93984-3966', 'Tempora corporis officia placeat odit aut cumque velit quae. Facilis itaque est placeat iure expedita temporibus. Quod porro magni voluptas aspernatur. Molestiae sit aut voluptas.', 'VHucHiVUIU', '2019-01-20 10:29:33', '2019-01-20 10:29:33'),
(50, '1547906236.jpg', 'Maritza', 'Berge', NULL, NULL, 'Dare and Sons', 'Costume Attendant', 'whitney.veum@example.org', 'http://tillman.biz/', '1986348224', '1986348224', 'http://www.volkman.net/', 'https://www.howe.com/adipisci-labore-asperiores-rem-ut-eum-et', 'https://www.monahan.info/earum-molestias-facere-debitis-sequi-nobis-est', '2019-01-20 10:29:24', '$2y$10$jCLEhkNBGm3a4r8ki0y1KeHmsvdMht85HNSfauweCo23DjFWwXKB2', '123456', '45131 Williamson Landing\nEast Nikolas, SD 47110-0059', 'Linniefurt', '2050 Chase Mission\nJarredville, WA 13453-2404', 'Eum nobis qui minima nulla sint aliquid possimus. Quos quo aut repudiandae ratione sint ut laborum. Odit non eum non dolore perferendis odio atque.', 'fz6OFisIjN', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(51, '1547906236.jpg', 'Jack', 'Bayer', NULL, NULL, 'Hackett, Willms and Watsica', 'Forest Fire Fighting Supervisor', 'mpouros@example.net', 'http://kautzer.com/omnis-quia-laborum-nostrum-similique-doloribus-aut', '1986348224', '1986348224', 'http://wunsch.biz/ratione-excepturi-quod-facere-et-adipisci-repellat', 'http://nienow.biz/', 'http://kuvalis.net/asperiores-qui-cum-assumenda-dolorem-asperiores-neque-dolores-suscipit', '2019-01-20 10:29:24', '$2y$10$jbNDF1jJhWaaKxoNYJPIG.HSkM10YnrJ.jYUjytkroFSdZ.lNNi/C', '123456', '7272 Verla Alley\nWest Matilda, CT 68268', 'West Eddhaven', '582 Pacocha Meadows\nHintzville, ME 24942', 'Illo repudiandae deserunt id et. At delectus corrupti repellat. Ab voluptatibus occaecati quia odio consequuntur dolores qui.', 'mkPJusLAEU', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(52, '1547906236.jpg', 'Keon', 'Nicolas', NULL, NULL, 'Purdy, Thompson and Schroeder', 'Orthodontist', 'marvin00@example.org', 'http://jacobs.biz/et-vitae-quaerat-saepe-totam-illo-recusandae-quia.html', '1986348224', '1986348224', 'http://lehner.info/deleniti-enim-ut-nemo-velit-voluptas-ea-ratione', 'http://schamberger.net/nostrum-animi-laboriosam-et-porro-mollitia', 'http://bradtke.com/ut-et-a-fuga-qui-quibusdam-qui', '2019-01-20 10:29:24', '$2y$10$gfzwGBeTslPgsscRPfruUendY7rJnVShuAV5x9klG9.Lm53mcB7GO', '123456', '98155 Swift Lodge Suite 626\nMayerland, OR 36375-7674', 'Maximillianchester', '5803 Mose Roads Apt. 933\nAbshireshire, IA 31181-0987', 'Et pariatur quia voluptatem sint. Nostrum eum natus saepe in eum. Ut ut eum modi et doloribus quaerat maxime consequuntur. Eum consequatur non numquam laboriosam.', 'nSg0g7887V', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(53, '1547906236.jpg', 'Sandy', 'Ullrich', NULL, NULL, 'Oberbrunner LLC', 'Creative Writer', 'walsh.winfield@example.net', 'http://www.sawayn.com/', '1986348224', '1986348224', 'https://orn.org/voluptas-magnam-voluptatem-mollitia-eligendi.html', 'http://www.shields.com/quo-aliquam-et-quam-et-accusamus.html', 'http://pouros.com/ut-aut-provident-architecto-et-qui', '2019-01-20 10:29:24', '$2y$10$JWJrTylJ4tAI7XYhUIS95OSPFWwZdOk3zkIvs8AsOoSVenF.0UZ.K', '123456', '10239 Lakin Course Suite 201\nJaskolskishire, AR 38133-6519', 'Tillmanside', '130 O\'Kon Ford\nKovacekfort, NY 11175-3750', 'Quia possimus sunt nam veniam non. Est veniam nulla qui ut quia ut. Fugit nobis esse eos est amet rerum. Recusandae fugiat eaque sed sit quo.', 'cbt9nySoph', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(54, '1547906236.jpg', 'Shania', 'Hermann', NULL, NULL, 'Hintz, Borer and Prosacco', 'Outdoor Power Equipment Mechanic', 'reinhold.keebler@example.net', 'https://www.krajcik.com/ipsam-quibusdam-ullam-laborum', '1986348224', '1986348224', 'http://www.herman.com/molestiae-neque-ut-et-distinctio-illum-similique-voluptate.html', 'http://www.streich.info/nulla-omnis-dolor-quas-enim.html', 'http://grady.com/molestias-earum-illum-autem-odit-animi-ad-sit-deserunt.html', '2019-01-20 10:29:24', '$2y$10$edtM43IuxPxvxEUYYcs.POGHhsXJTuMxvoJ03ssbUGqEfM/fdPsce', '123456', '774 Hessel Loop Suite 901\nLydaville, AR 63302', 'Sengerborough', '8909 Hailee Centers\nThompsonborough, RI 62098', 'Eos voluptate molestias consequatur vel voluptas est. Dicta distinctio quaerat dolor et ex fuga enim. Eligendi dolorem vitae fugiat recusandae laborum. Amet qui ab commodi et voluptatibus laborum minima.', 'oFCbR7TDdr', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(57, '1547906236.jpg', 'Pearlie', 'Jacobi', NULL, NULL, 'Armstrong Group', 'Commercial and Industrial Designer', 'jacklyn38@example.com', 'http://schimmel.com/tempore-voluptate-mollitia-consequatur-quam-labore-reprehenderit-accusantium', '1986348224', '1986348224', 'https://www.goodwin.com/ipsa-quam-nihil-recusandae-perferendis-quo-odio', 'http://johnston.org/consequatur-quia-laboriosam-reprehenderit-nihil-autem', 'http://www.kerluke.com/animi-et-est-a-animi', '2019-01-20 10:29:25', '$2y$10$dmMqdWRFJfU0/JM2oc6.Q.PzsQUnBslYETyoqSaErl8FuLXsOBj0e', '123456', '7505 Torphy Green Apt. 435\nNorth Guiseppe, IN 37677-8410', 'Rogelioville', '398 Wilford Turnpike\nEast Carolynfort, MT 81115-3264', 'Et perferendis provident autem laudantium architecto. Optio ex qui voluptatem consequatur nobis repudiandae. Magni ratione nobis ad velit aut. Nam sunt quia qui quam aut. Libero ut harum sed et eum.', '6sXbCyIIET', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(58, '1547906236.jpg', 'Cynthia', 'Hill', NULL, NULL, 'Klein-Langworth', 'Material Moving Worker', 'schuppe.malinda@example.com', 'https://www.littel.info/corrupti-labore-quisquam-aut-est-et-tempore-cumque-autem', '1986348224', '1986348224', 'http://hansen.biz/provident-sequi-libero-sit-dignissimos-vel-dolore-mollitia', 'https://www.balistreri.com/recusandae-temporibus-ea-nam-aperiam-et', 'http://balistreri.com/accusantium-eveniet-asperiores-cupiditate-rerum-blanditiis-quod', '2019-01-20 10:29:25', '$2y$10$f01gHsGI1A43xuqT6Z1.O.Qr4N23vXDtnDFD6ToJenLHWbOcULO46', '123456', '967 Betsy Trace\nAnissabury, ID 18555', 'New Rogertown', '9337 Connelly Motorway Suite 933\nGutkowskiland, NJ 87690-5182', 'Laborum doloremque odio corporis. Et magnam et aut. Voluptatem inventore est et quidem ex modi.', 'OIMUYtqLSK', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(59, '1547906236.jpg', 'Taylor', 'Ratke', NULL, NULL, 'Hintz, Toy and Walter', 'Producers and Director', 'stiedemann.destini@example.org', 'http://www.yundt.biz/', '1986348224', '1986348224', 'http://bailey.com/suscipit-exercitationem-eos-velit-tenetur', 'http://www.turner.info/aut-asperiores-rem-voluptates-dolores.html', 'https://www.hudson.com/atque-sequi-ullam-autem-pariatur', '2019-01-20 10:29:25', '$2y$10$7shGvTcMWXCzMi6GUokkUuM8f0yOCufMnEDCkNglXIF/S2i91ufTS', '123456', '811 Dietrich Flat\nO\'Reillyview, NH 79968-7649', 'Lake Hugh', '64336 Walker Tunnel Suite 583\nSouth Demarcus, KS 54769', 'Ipsam blanditiis aut doloribus omnis. Eum similique recusandae vel dolorem veritatis modi deleniti.', 'eSXYAjKj9X', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(60, '1547906236.jpg', 'Vicente', 'Wiegand', NULL, NULL, 'Kohler, Osinski and Watsica', 'Tailor', 'aurelio23@example.org', 'http://www.kunze.com/', '1986348224', '1986348224', 'http://mclaughlin.net/eveniet-temporibus-quisquam-et', 'http://cruickshank.net/aspernatur-sapiente-dolores-nulla-iusto-quo.html', 'https://www.bernier.com/excepturi-quibusdam-voluptatibus-voluptatibus-aut-commodi', '2019-01-20 10:29:25', '$2y$10$ZlSZW6MLB7lJNQlgf7eATOK0uF9RVtdPrRkOxmziyb0XRTQ0ip4TO', '123456', '9673 Roob Orchard\nEast Shanonberg, AR 01960-7813', 'Henriview', '5899 Altenwerth Avenue\nJennyferview, DC 71304-2879', 'Autem provident repellendus libero. Dolorum id atque et velit. Soluta eos accusantium perferendis enim tempora porro. Ut incidunt quibusdam dolores aut optio officia adipisci.', 'ohACVS1exg', '2019-01-20 10:29:34', '2019-01-20 10:29:34'),
(62, '1547906236.jpg', 'rijwan_chowdhury_isgsggggggggggggsggggggggggggggggggggggggggggggggggggggggggggg', 'Altenwerth', NULL, NULL, 'Huels-White', 'Umpire and Referee', 'stroman.eusebio@example.org', 'https://lang.org/et-aut-qui-sed-fugiat.html', '1986348224', '1986348224', 'http://gottlieb.com/', 'http://larson.com/et-vel-aut-deleniti-minima-repudiandae-ut-qui-quis', 'https://www.turner.com/velit-saepe-occaecati-autem-aperiam', '2019-01-20 10:29:25', '$2y$10$jl6mK72XiK.r3SeuHqEOM.g/aSoKsvAESKvMKjmCswTxALeqZfxvq', '123456', '614 Wunsch Skyway Suite 258\r\nWest Torey, AZ 85335-5941', 'Uptonhaven', '7406 Rubie Course\r\nLake Michel, ME 00074', 'Dolores praesentium natus illum animi delectus sunt consectetur. Tempora natus fugit magni voluptatem quis maxime. Vero aspernatur quia et quas non et voluptas. Quae aliquid et quisquam facilis.', 'gFeanhOYI9', '2019-01-20 10:29:34', '2019-03-05 01:07:49'),
(65, '1551607680.png', 'Addie', 'McLaughlin', NULL, NULL, 'Hyatt Inc', 'Dispatcher', 'estell.hammes@example.net', 'http://gibson.org/sit-nobis-ut-voluptatum', '1986348224', '1986348224', 'http://pollich.com/ea-perspiciatis-cupiditate-ipsa-aut-vitae', 'http://www.ernser.net/qui-iure-inventore-voluptatem-harum', 'http://king.com/omnis-ipsam-doloribus-doloremque-accusantium-voluptatem-sit-eum-qui', '2019-01-20 10:29:26', '$2y$10$HhSNkHBEZTtzCjwzrysXXO5vQhPd7T1lyYEZ.G.uSCcxvMUk1OSLi', '123456', '27574 Jody Crest\nNorth Madilyn, NV 81525-0959', 'South Bethany', '3681 Raphaelle Park Apt. 553\nFernchester, CT 42433-0383', 'Explicabo suscipit neque suscipit quasi ut ipsam. Est ducimus dolorem ut similique fuga rerum itaque. At consequatur vel sunt fuga earum vitae autem. Reiciendis ratione neque accusantium temporibus velit quis accusamus. Ut sint quas molestiae et.', 'DXK05hluSc', '2019-01-20 10:29:35', '2019-03-03 10:08:00'),
(82, '1551682150.png', 'Kaela', 'Kiehn', NULL, NULL, 'Steuber, Swaniawski and D\'Amore', 'Aircraft Mechanics OR Aircraft Service Technician', 'shields.gage@example.org', 'https://wintheiser.org/necessitatibus-ducimus-porro-explicabo-placeat-totam-qui.html', '1986348224', '1986348224', 'http://www.schmitt.com/nobis-esse-nesciunt-fugit-aspernatur-et', 'http://www.grant.info/ex-necessitatibus-voluptate-similique-fugiat-beatae.html', 'https://douglas.biz/quibusdam-ratione-qui-eligendi-nostrum-commodi-eum-porro.html', '2019-01-20 10:29:27', '$2y$10$ON99Cu1.TkuYaLdYSX64cuXoqpmHu0pdBho5sR3kZXuZQDzCLrQMO', '123456', '29227 Mann Extensions\nLake Nettieburgh, DE 03770', 'Port Era', '71008 Kemmer Isle\nLake Ashamouth, SD 66838-6888', 'Quis deserunt rem sint quia sed ipsum sint. Voluptatem delectus voluptatum omnis quo cupiditate qui non. Iusto adipisci expedita nam voluptatem ipsa.', 'qY6IsQamcv', '2019-01-20 10:29:36', '2019-03-04 17:49:10'),
(102, '1547981123.jpg', 'Destin', 'Lakin', NULL, NULL, 'Rempel Ltd', 'Data Entry Operator', 'constance12@example.net', 'http://www.konopelski.net/', '1986348224', '1986348224', 'http://torp.com/cumque-ipsum-nesciunt-ipsa-ut-hic', 'https://www.bashirian.org/est-minus-cum-et-esse-et-voluptas-possimus', 'http://www.treutel.com/voluptatem-ea-sapiente-autem-sit-qui-tempora-quasi', '2019-01-20 10:29:30', '$2y$10$ppDn/iya6pS2Mxqh3tmidOFcDL/VVhobTLve9uzfaDtMBodBaHtu.', '123456', '81562 Schultz Landing\r\nNew Shayleemouth, WI 53054-0241', 'Anselstad', '97158 Jovan Forest Apt. 136\r\nRobelbury, IA 64034-7542', 'Nemo ut omnis culpa voluptas amet qui quam. Voluptas voluptatem totam quis vero illum accusantium est enim.', 'XEdaRtbZs3', '2019-01-20 10:29:37', '2019-03-04 19:08:27'),
(110, '1549196752.jpeg', 'rijwan', 'chowdhury', NULL, 'NULL', 'future track', 'programmer', 'chowdhury@gmail.com', 'http://ftit.co.uk', '01986348224', '01619636722', 'http://linkedin.com/chowdhury', 'http://facebook.com/chowdhury', 'supol_chowdhury', NULL, '$2a$10$pxoN7q95HONFnTGSq3.dNO6nMh9bxIgfU/5zLfYnV0vkMoYuD8vca', 'rijwan', '135/1 matikata', 'cantonment dhaka-1206', '56/7 kajipara mirpur dhaka-1208', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', 'z41T7F7P8z1h2GdZVrmHmStC3BKkvZrXYnsxF6PhglY9TMETv46StvNKU9e5', '2019-01-20 10:41:33', '2019-03-03 06:54:32'),
(113, '1551684403.jpg', 'hriduan', 'ferdoush', NULL, 'super_admin', 'future track', 'project manager', 'ferdous@gmail.com', 'ftit.com', '01234567899', '01234567899', 'http://linkedin.com/ferdous', 'http://facebook.com/ferdous', 'super_man', NULL, '$2y$10$sRy.uKKqI7DCzYrlW8BP6e1wvNEAQRPSXtpfl1z/IUuBwLSSxCOE6', '123456', '44/5 shaowrapara', 'mirpur,dhaka-1212', 'kajipara 44/5 , mirpur dhaka-1206', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem', 'm3Tub9LhhmD5IpTRzCW4Dx4FiRysxRUw9n39wRWYsoW5QsmwJxT4orIAD8Ae', '2019-01-29 07:50:12', '2019-03-04 18:26:43'),
(114, '1551601968.png', 'rijwan', 'test', NULL, NULL, 'testh_habi_jabi', 'developer', 'test1234@gmail.com', 'test', '01675570701', '01675570701', 'alex.jonex', 'alex.jones.me', 'alex.jones', NULL, '$2y$10$mYtxXfmGprfTnTNyTF1ZseUv95lk2GUoSTkMQYr9vX7AJQP0hVQFe', '123456', '123456', '123456', '123456', '123456789', NULL, '2019-03-03 08:28:12', '2019-03-04 18:30:12'),
(115, '1551707434.jpg', 'macmacmacmacmacma', 'yuri', 'macmacmacmacmacma yuri', NULL, 'I agree with all additional terms and conditions', 'gnfngfn', 'me@gmail.com', 'https://codepen.io/', 'jjljllj', 'jljl', 'gsagsag', 'gsagas', 'ljlljjljl', NULL, '$2y$10$nKg32m9v9eCBG2ppOg5CLeBlzUWkvNTrXW/NwfZNKxXSspShWKnBy', '123123', 'ututuut', 'utuut', 'tuutu', 'utuuttu', 'xMIij4IoBjudttIqnpFZWH3fb5vSJcHebCPRcV4vchAOIiEbiXLhKT7RRoY7', '2019-03-04 15:21:26', '2019-03-05 21:51:57'),
(116, '1551765246.png', 'test', 'test', NULL, NULL, 'ftit', 'project test', 'test@mail.com', 'ftit.com', '01234567891', '021234567', 'linkedin.com', 'fb.com', 'bggsf', NULL, '$2y$10$r5yCAnrqwAaMf.TY8WEvV.Ur/A4nItX4rxC7GSMy4yng8QDd5KsjG', '123456', 'ftit', 'dhaka', 'dhaka', 'this is testing profile', 'jAOZi6paNyjJqMZI2JW2aXVB4Hr1106IgpBtvHexziVNy2BvvgrzxIqHbtwX', '2019-03-05 16:52:20', '2019-03-05 16:54:34');
INSERT INTO `users` (`id`, `employee_pic`, `first_name`, `last_name`, `full_name`, `status`, `company`, `job_title`, `email`, `website`, `mobile_phone`, `home_phone`, `link_profile`, `facebook`, `sky_id`, `email_verified_at`, `password`, `confirm_password`, `address_location`, `address_area_division`, `address_two`, `notes`, `remember_token`, `created_at`, `updated_at`) VALUES
(117, '1551771307.png', 'mac jonex', 'yuri', NULL, NULL, 'I agree with all additional terms and conditions', 'gnfngfn', 'macyuri2017@gmail.com', 'https://codepen.io/', '017233239640', '017233239640', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, '$2y$10$0z6rY5RC2tVSJZ5agF8GM.1ifujKjYjbMdiSfZNbLothVvBsKETa2', '123123', 'sgsgsdgdsgdsgsd', 'Mirpur, DHaka', 'sdggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 'Hello! I\'m going to be creating some fashion accessories and am in need of someone who I can work efficiently and harmoniously with on bringing certain ideas of mine (and developing new ones in the process) to life. There are a lot them swirling around inside my head and I need someone who has the proper graphic design/artist/illustration skills to help me actually bring them to life. Again, I\'m happy to collaborate on new ideas too. I would eventually own the copyright to these designs (as the end goal is to have them replicated on fabric) and am hoping to inspire each other along the way.', NULL, '2019-03-05 18:35:07', '2019-03-05 18:36:43'),
(118, '1551774236.png', 'Md Faijul Islam Khonkar', 'Al Faisal Alam', 'Md Faijul Islam Khonkar Al Faisal Alam', NULL, 'future track', 'software engineer', '345@gmail.com', 'ftit.com', 'test', 'test', 'www.linkedin/fuad', 'facebook/fuad', 'test', NULL, '$2y$10$oNXFDcnRuG9cuqNI4BX1DuDfWi3OvpD9l.9G2KX2A3lwOusZd.6A2', '123456', 'dhaka', 'dhaka', 'dhaka', 'dhaka', NULL, '2019-03-05 19:23:56', '2019-03-05 22:24:57'),
(120, '1551794778.png', 'Md Faijul Islam Khonkar Hawladar Shofiul Alam', 'dfdsfgda', 'Md Faijul Islam Khonkar Hawladar Shofiul Alam dfdsfgda', NULL, 'today-task.com', 'gnfngfn', 'mfuad14@gmail.com', 'ftit.com', 'f xf', 'fdgfd', 'linkedin.com', 'fb.com', 'bggsf', NULL, '$2y$10$OOzU/QNrpvvGMOkmhdx7euvNlXGs3/JbKmSx2vdRM8LNN/cSzb13m', '123', 'dereqr', 'eqrqr', 'rqe', 'xvbvx', NULL, '2019-03-06 01:06:18', '2019-03-06 01:06:18'),
(121, '1551794923.png', 'Md Faijul Islam Khonkar Hawladar Shofiul Alam', 'Md Faijul Islam Khonkar Hawladar Shofiul Alam Md', 'Md Faijul Islam Khonkar Hawladar Shofiul Alam Md Faijul Islam Khonkar Hawladar Shofiul Alam Md', NULL, 'I agree with all additional terms and conditions', 'gnfngfngnfngfngnfngfn', 'sddfasdf@mail.com', 'ftit.com', 'fsgsfgfs', 'gfsgfsgfs', 'gfsgfs', 'gfsgfsg', 'fsgfsg', NULL, '$2y$10$iDhK7m2O5Z32yRYe4cf1p.nYuczXqJFbCne1HDjdYGQJ9trdhe5E6', '123', 'fgfsgfsg', 'fsgfs', 'fsgfsg', 'gfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsggfsgfsg', NULL, '2019-03-06 01:08:44', '2019-03-09 18:55:06'),
(122, '1566977062.png', 'rijwangsfgsf', 'test', 'rijwangsfgsf test', NULL, 'future track', 'software engineer', '25@gmail.com', 'test', 'test', 'test', 'www.linkedin/fuad', 'facebook/fuad', 'test', NULL, '$2y$10$pI/ob7elbva0NP.5u.rCx.L.XvOn1h/lpobmOkY91xLvWBgv.svdy', '123456', 'rrrrr', 'rrr', 'rrrrrrrrrrr', 'rrrrrrrrr', NULL, '2019-03-06 02:47:00', '2019-08-28 07:24:22'),
(123, '1558953008.png', 'faysal', 'hoque', 'faysal hoque', NULL, 'ftit', 'software_engineer', 'faysal@gmail.com', 'fiti.com', '01986348224', '0198348224', 'fdfdfd', 'fdfdfd', 'dfdfdf', NULL, '$2y$10$dKUsXYnFVpL844/4c6loF.VChhlL.LgahVRRNJIwgDykymRlouHVy', '123456', 'ssss', 'sssss', 'ssss', 'ssssss', NULL, '2019-05-27 10:30:08', '2019-05-27 10:30:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_managements`
--
ALTER TABLE `contact_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_supplier`
--
ALTER TABLE `project_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_todos`
--
ALTER TABLE `project_todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_activities`
--
ALTER TABLE `recent_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_categories`
--
ALTER TABLE `supplier_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_contacts`
--
ALTER TABLE `supplier_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contact_managements`
--
ALTER TABLE `contact_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_supplier`
--
ALTER TABLE `project_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `project_todos`
--
ALTER TABLE `project_todos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `recent_activities`
--
ALTER TABLE `recent_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `supplier_categories`
--
ALTER TABLE `supplier_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `supplier_contacts`
--
ALTER TABLE `supplier_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
