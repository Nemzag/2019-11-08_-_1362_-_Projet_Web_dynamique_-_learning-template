-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2020 at 08:46 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2019_pwd_learning`
--
CREATE DATABASE IF NOT EXISTS `2019_pwd_learning` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `2019_pwd_learning`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added_at` datetime NOT NULL,
  `evaluation` int(11) NOT NULL,
  `is_disabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `course_id`, `comment`, `date_added_at`, `evaluation`, `is_disabled`) VALUES
(1, 62, 2, 'Vero vero atque accusamus nesciunt. Cum labore dolor eos omnis fugiat porro deserunt. Ut modi dignissimos cumque cum. Veniam molestiae sed nihil at. Debitis itaque omnis illo repellendus. Quae dignissimos quia est cupiditate ex alias.', '2019-01-29 00:00:36', 0, 0),
(2, 74, 17, 'Veritatis voluptas nihil perferendis cumque. Et quae earum sunt iure nihil et sed. Nisi qui id asperiores et adipisci. Enim et rerum repellat consequatur et.', '2019-09-20 12:16:30', 4, 0),
(3, 51, 6, 'Ut ea et ex ut sit qui perferendis. Corporis occaecati numquam corporis voluptatibus est. Voluptate molestiae enim ducimus fugit quod molestiae reprehenderit. Doloribus voluptas nesciunt dolores cumque consequatur nisi impedit et.', '2019-10-28 08:15:45', 0, 0),
(4, 31, 8, 'Accusantium quod delectus nostrum amet ab magni. Consequatur aut officiis quo et. Magnam molestiae earum vero veniam ea et. Ipsa temporibus magni vel quis in autem optio.', '2019-09-09 12:29:31', 4, 0),
(5, 35, 7, 'Facere dolor molestias et culpa est. Repudiandae quis sequi labore ut deleniti eaque eius. Provident voluptas amet dolorem quam. Id quas aut sint est.', '2019-11-01 12:23:14', 4, 1),
(6, 65, 1, 'In suscipit iste modi inventore laudantium. Aperiam ut aliquam voluptatem ipsam. Sapiente aut voluptatem rem ipsa eaque id ab. Eaque a architecto dolorem quos illo eius nesciunt.', '2019-09-03 22:04:53', 4, 0),
(7, 56, 7, 'Impedit in dolorum rerum vel ut. In ut ipsa nam. Deleniti qui necessitatibus nulla aut provident dolores. Incidunt delectus iure eveniet non ducimus esse velit adipisci.', '2019-11-03 20:44:09', 5, 0),
(8, 6, 7, 'Atque tempora vero qui dignissimos. Molestiae est voluptas sequi aut. Sint nam commodi porro rerum reprehenderit. Esse ut ut aliquid commodi. Porro est fugit excepturi nisi.', '2019-06-16 16:36:48', 5, 0),
(9, 5, 18, 'Sunt eum unde et consequatur et aliquid vel aliquid. Quia maxime perferendis voluptatem ipsam nihil. Id est non exercitationem est ea aut. Quia explicabo laudantium saepe rerum ratione et debitis vero. Sit ratione enim amet facere.', '2019-11-14 10:34:16', 1, 0),
(10, 23, 7, 'Modi laborum omnis ea temporibus. Perferendis qui quidem eius iusto. Porro beatae et qui eos porro suscipit. Corporis aspernatur repellendus ipsum.', '2019-03-08 21:13:00', 2, 0),
(11, 58, 10, 'Vitae quae inventore omnis. Voluptatem rerum esse quo in nihil accusantium. Rerum placeat et consequatur aut pariatur exercitationem porro. Et rem quos quis qui doloribus minus.', '2019-10-21 22:47:29', 3, 0),
(12, 67, 12, 'Perspiciatis accusantium accusantium recusandae accusamus facere id. Aliquid possimus est et harum natus. Saepe est dolorum aut odit et. Consequatur ut non similique necessitatibus.', '2019-02-16 14:55:03', 5, 0),
(13, 49, 6, 'Molestiae et reprehenderit aut delectus blanditiis hic vel quo. Mollitia id aut voluptatem dolorem sint quae hic. Dolorem deleniti iusto praesentium qui rerum in inventore distinctio. Dolores aut animi quos qui ea a.', '2019-04-27 05:55:07', 2, 0),
(14, 50, 2, 'Et architecto recusandae placeat sit error asperiores iure et. Maxime quia possimus asperiores sunt reiciendis illo saepe. Necessitatibus repellat non et natus repudiandae sed nemo itaque.', '2019-03-09 12:03:25', 0, 0),
(15, 16, 2, 'Expedita beatae exercitationem aperiam unde aliquid. Iusto cumque eveniet repellat. Incidunt sed dolores qui cum provident. Et dolores ut ut adipisci pariatur corporis.', '2019-07-17 14:12:17', 2, 0),
(16, 69, 17, 'Iure dolorem sed quia aut quae architecto dolorem. Eum et accusamus sunt inventore. Atque ipsa quia ut. Dolor aliquam nulla non quos. Repellendus eum eius quia exercitationem nulla.', '2019-05-23 08:51:26', 0, 0),
(17, 23, 8, 'Qui architecto magnam aperiam accusamus delectus. Enim aperiam est explicabo sit est id in. Minima nulla id facilis ullam quia dolores.', '2019-02-24 02:58:48', 4, 0),
(18, 76, 3, 'Nihil alias amet quaerat soluta assumenda reiciendis provident. Voluptas quidem harum nemo est qui omnis repellat dolorem. Cupiditate sint dolore aut sequi tenetur excepturi et.', '2019-11-04 01:51:45', 0, 0),
(19, 68, 5, 'Maiores iusto eveniet fuga. Maiores nulla eum ut quos. Et aspernatur impedit consectetur molestiae accusamus commodi. Voluptas rerum qui voluptate aperiam est laboriosam porro minima. Tempore dolorem error consequatur eum odit minima.', '2019-12-16 22:24:29', 4, 0),
(20, 76, 7, 'Qui aperiam minima repudiandae. Ipsam rem id expedita tenetur. Qui odit corrupti quo architecto. Error et odit odit minus qui quaerat. Eos magnam ut placeat sint aut.', '2019-04-10 12:49:19', 1, 0),
(21, 16, 4, 'Explicabo sapiente minus fugiat quo aut porro voluptate. Error dolorem neque ducimus maiores dignissimos quos expedita. Occaecati quae architecto temporibus dolorem animi molestiae.', '2019-04-16 09:34:03', 5, 0),
(22, 57, 17, 'Doloremque a asperiores quia. Dolorum voluptatem sint non quos sed dolores ducimus. Nisi sapiente enim itaque provident.', '2019-06-15 02:14:11', 0, 0),
(23, 66, 14, 'Sunt vel omnis et perferendis et. Ratione eaque et ea quasi ea corporis ducimus dignissimos. Quaerat quaerat est molestiae eos quos autem alias. Totam voluptatum voluptatem sequi harum.', '2019-12-11 11:43:20', 0, 0),
(24, 73, 14, 'Ea et eum nesciunt ut non aut. A deleniti dolorem vitae molestias et. Et nulla illum a nisi possimus eaque. Excepturi nulla nihil quo porro. Fugiat repudiandae magnam a temporibus necessitatibus necessitatibus.', '2019-10-15 02:18:39', 5, 0),
(25, 66, 7, 'Quia id eos quia odit sed blanditiis. Doloribus laboriosam cum dicta ut. Sint et unde aut facere enim cum. Eveniet voluptas blanditiis nemo.', '2020-01-05 20:53:50', 1, 1),
(26, 40, 12, 'Voluptas qui et provident nemo itaque. Fugit ipsum est error ratione. Rem voluptate sequi reiciendis harum. Non expedita nisi molestiae neque deleniti.', '2019-08-16 12:09:48', 1, 0),
(27, 75, 4, 'Dolorem dicta tenetur blanditiis. In culpa inventore quos in. Voluptatem minus quasi eligendi velit repudiandae natus deleniti quos. Inventore et et perspiciatis et.', '2019-06-28 22:01:04', 5, 0),
(28, 8, 14, 'Itaque qui similique magni ea facilis illum dolore. Id eveniet hic et. Possimus ut saepe suscipit ab temporibus.', '2019-08-09 11:26:51', 4, 0),
(29, 27, 13, 'Ut amet sequi excepturi quas cumque. Veritatis voluptatem voluptatem sunt velit ea.', '2019-03-29 14:38:30', 2, 0),
(30, 34, 1, 'Esse assumenda deleniti aut. Amet labore harum facere id aliquam. Maxime enim cum sed inventore reprehenderit. Ut iusto tempore unde.', '2019-10-02 02:15:30', 0, 1),
(31, 23, 18, 'Eveniet nihil qui commodi et minus. Tempora iste consectetur et molestiae qui et et. Quis esse unde asperiores quaerat sed sit.', '2019-02-18 09:28:14', 4, 0),
(32, 58, 11, 'Provident accusamus accusamus quae voluptas maiores. Itaque similique magnam autem et qui. Esse consequatur ea autem quo deserunt voluptas.', '2019-07-23 08:25:51', 4, 0),
(33, 53, 10, 'Iusto et quia est architecto blanditiis. Ut cupiditate laudantium facilis dolores. Quidem ut est sit deleniti similique ea. Corporis necessitatibus suscipit et. Illum sed ut est nisi aliquam aut. Eius eos vero id. Animi et ea itaque.', '2019-03-24 12:48:46', 4, 0),
(34, 5, 3, 'Debitis ut aut voluptatibus provident. Est qui delectus eos eos quidem ut. Vitae earum laboriosam et perspiciatis maxime voluptas ipsum. Tempora recusandae nemo blanditiis quis et occaecati. Suscipit quas velit quo asperiores quo at illo.', '2019-03-10 15:20:31', 3, 0),
(35, 27, 5, 'Deleniti odit facere praesentium enim sit. Perferendis porro quibusdam aut corporis impedit ullam dolor. Eos unde laboriosam et deleniti natus.', '2019-10-30 11:02:35', 1, 0),
(36, 68, 8, 'Maxime quisquam vel commodi est voluptatum quo. Molestias quia a quam magnam. Ad aut officiis eveniet ex. Tenetur molestias nam aut repellat voluptatum voluptates quam. Architecto sed aperiam animi illo sit quo ab sint. Illo aliquid aut veritatis sed.', '2019-12-07 10:32:38', 4, 0),
(37, 39, 10, 'Dolores quia quaerat similique in qui molestiae. Eaque aperiam eum doloribus corrupti consequatur natus. Quis voluptate id error est quis minima. Aut non cupiditate quo nisi doloremque.', '2019-07-16 21:34:50', 1, 0),
(38, 52, 12, 'Dolor quas minus ut aliquid est. Nostrum in veritatis sapiente et facilis et. Aut dolorem corrupti eaque eaque et. Nihil officiis sint omnis magni rerum.', '2019-02-12 18:07:35', 2, 0),
(39, 35, 10, 'Qui consequuntur aut voluptatum enim enim eveniet. Neque perspiciatis commodi dolorem vel et molestiae et. Illum asperiores doloremque quae fugiat. Quis ut ut voluptate nisi.', '2019-11-19 10:12:53', 3, 1),
(42, 1, 1, 'La langue de Shakespeare m\'a permis d\'atteindre mes objectifs et projet informatique et programmatif. Super.', '2020-01-10 20:44:00', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` datetime NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_updated_at` datetime DEFAULT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `category_id`, `level_id`, `professor_id`, `name`, `small_description`, `full_description`, `duration`, `price`, `created_at`, `is_published`, `slug`, `image`, `image_updated_at`, `schedule`, `program`) VALUES
(1, 6, 3, 43, 'Anglais', 'Consequatur alias et fugiat delectus aut voluptate labore dolorum aut occaecati incidunt aut exercitationem qui delectus nihil est quas.', 'Id quam aut voluptatem inventore et. Modi dignissimos eligendi quidem nulla fugiat tenetur hic temporibus.\n\nTempora optio earum veritatis ipsam doloribus sed. In tempore quod iusto sint cumque quia magnam eveniet. Qui aliquid quam recusandae rerum voluptate temporibus itaque laborum. Laborum accusamus temporibus architecto.\n\nPlaceat amet quia soluta sunt quaerat earum. Qui provident voluptatum aspernatur sed molestias.\n\nMagnam repellat aspernatur ut vel autem similique. Repudiandae nam vero exercitationem quia. Adipisci illum voluptatem deleniti. Totam quis ut et delectus.', '1 an.', 145.82, '2019-08-03 01:56:57', 1, 'vel-non-sed-iste-blanditiis-culpa', '1.jpg', '2003-07-31 11:03:15', 'Début Septembre.\r\nFin Juin.', 'Dolores distinctio accusamus unde. Eligendi quia commodi fugit. Et quam pariatur accusamus molestiae..pdf'),
(2, 7, 4, 34, 'Machine-outils', 'Quibusdam qui ea qui ipsum non veniam laudantium corporis iusto suscipit repellat aut voluptatem exercitationem aut iusto.', 'Saepe debitis qui occaecati modi laudantium sint et ullam. Sint et et porro enim iste omnis. Nobis illum ipsum minus aut quidem. Magni consectetur cupiditate et doloribus nihil aut.\n\nFugit soluta at et nihil. Aut eum debitis sed molestias aliquid vel mollitia reiciendis. Quo omnis optio voluptas ipsam quo doloribus quia sapiente.\n\nEt iusto et accusantium dignissimos inventore eum ab. Et aut harum eum explicabo. Et rem ut cupiditate sed optio labore. Magni ratione nihil et est.\n\nQui est mollitia ut repellat iusto pariatur esse eum. Voluptate voluptas dolorem vitae et accusamus fugiat placeat. Maxime et ullam et beatae. Rem optio libero repudiandae veniam eveniet et magnam. Laborum omnis et in qui.', '2 ans.', 136.83, '2016-02-27 08:57:09', 1, 'sit-architecto-modi-cum-iusto-est', '2.jpg', '1998-07-22 03:23:05', 'Début Septembre.\r\nFin Juin', 'Neque totam libero consequuntur quo. Totam sed omnis rerum fugit sint. Est ducimus animi reiciendis dolor consectetur est autem culpa..pdf'),
(3, 4, 3, 49, 'Comptabilité', 'Commodi nesciunt unde eum blanditiis quis et quia accusamus quaerat est.', 'Iste vel repellendus qui voluptatum dolores inventore eius. Ipsum culpa eius labore assumenda quia nam. Quae suscipit alias praesentium commodi minus sed.\n\nQui voluptatem unde et porro aut rerum minima. Delectus voluptatibus vitae ipsum dicta dolores odio pariatur. Ullam dolores et unde quasi. Quia et cumque et.\n\nOmnis saepe amet et vitae itaque qui minima. Error est deleniti aliquid. Quis commodi sunt et occaecati ut. Explicabo praesentium at ab nemo officiis. Quia officiis quas consequuntur.\n\nAut fugit ut facere asperiores. Qui aut perferendis natus laborum temporibus est. Eius vel deleniti suscipit est minima perspiciatis delectus provident.', '2 ans.', 182.11, '2017-05-10 01:23:58', 1, 'ab-atque-veniam-corrupti-qui-ut', '3.jpg', '1985-02-17 08:00:18', 'Début Septembre.\r\nFin Juin.', 'Quas aliquam voluptates consequatur ullam. Voluptas impedit quisquam laudantium quis. Ipsum hic ut laudantium ab rerum atque illo. Sunt sed qui vitae ab omnis eum..pdf'),
(4, 5, 4, 76, 'Gardiennage', 'Voluptas aut sit totam quod quas aliquam fugiat et atque qui rerum.', 'Corporis aliquam sint facilis omnis ea dolore. Tempora nam eius fuga eveniet. Magni ipsum voluptatem exercitationem eum eligendi quia. Rem nesciunt sunt quae quaerat.\n\nDolores dignissimos sit sunt qui explicabo aliquam et. Eum voluptas facere architecto nam velit minus nam. Recusandae architecto omnis accusamus modi numquam aut.\n\nPlaceat accusamus distinctio excepturi qui quia sequi voluptas. Qui totam omnis eum dolorem quasi quidem dolorem corporis. Et harum rerum quos deserunt perferendis doloribus vero.\n\nAspernatur minus officiis consequatur sed quaerat. Quod est sunt illo earum. Qui dolorem ratione ipsum ex quasi rerum iste.', '1 an.', 84.12, '2017-08-22 23:45:29', 1, 'eius-non-aliquid-et-quod', '4.jpg', '1975-08-21 19:19:17', 'Début Septembre.\r\nFin Décembre.', 'Modi ab non nostrum quia consequatur nihil. Minima dolor facere dolore occaecati occaecati sed et. Nulla consequatur dolorum blanditiis dolor..pdf'),
(5, 3, 3, 25, 'Maçonnerie', 'Sint dolores illum est dolores aut dolorem aut explicabo expedita consequatur.', 'Soluta totam voluptatem repellat. Provident cumque minus autem unde ex animi perferendis. Nesciunt amet voluptatibus natus incidunt. Vel eligendi qui autem eum molestiae corrupti beatae eum.\n\nSequi et veritatis ut eveniet aut error distinctio et. Reiciendis possimus nulla necessitatibus dolorem sapiente omnis deserunt. Rem ex ea ea soluta molestiae aut laboriosam. Quis illum doloribus dolores commodi sed culpa.\n\nUt modi similique eos ut quae recusandae ex nobis. Consectetur eligendi et corrupti voluptas aliquam. Et mollitia voluptas id sint eum saepe modi. Odit quos beatae possimus sed quo.\n\nMaxime reiciendis soluta quo totam qui quod qui. Magnam dicta vel ut impedit quasi ut. Nesciunt eum perspiciatis qui eligendi magnam.', '2 ans.', 121.77, '2019-03-23 07:27:14', 1, 'tempora-et-quia-distinctio', '5.jpg', '1998-04-12 00:12:11', 'Début Septembre.\r\nFin Juin.', 'Est odit perspiciatis dolores aliquam. Aliquam aut qui architecto voluptatem non minus esse. Aut qui quas voluptatem. Eos dolor quo sed consequatur perferendis. Consequatur fuga quam aut nemo. Laudantium excepturi qui quis atque..pdf'),
(6, 2, 5, 70, 'Design d\'intérieur', 'Illum exercitationem incidunt voluptates voluptatem necessitatibus et reiciendis id est sunt rem qui atque voluptates qui autem voluptatem maiores.', 'Quo ut voluptates qui adipisci. Distinctio iure beatae odit officiis.\n\nSint reprehenderit vero rerum dolor incidunt dolor. Id quod dolore vel voluptatum. Possimus aliquid mollitia facere hic provident asperiores. Temporibus accusamus est quis occaecati repudiandae ad est.\n\nItaque reprehenderit esse corrupti est commodi et sit. Doloremque facilis quas nesciunt modi. Qui reprehenderit molestiae magnam nostrum. Et dolorum dolorem praesentium esse. Sit qui est ut aspernatur error quia et.\n\nPraesentium placeat deleniti quia quia. Unde ab repellat impedit dolorum aut. Soluta tempora et aspernatur vitae a.', '2 ans.', 178.53, '2017-07-18 21:37:34', 1, 'magni-omnis-aut-qui-doloremque', '6.jpg', '1987-10-30 08:44:08', 'Début Septembre.\r\nFin Juin.', 'Necessitatibus et dolores quibusdam. Autem aut cupiditate voluptatibus quam. Vitae eos quo et molestias. Labore aut perferendis ab est iste..pdf'),
(7, 6, 5, 50, 'Espagnol', 'Aliquam voluptas porro veniam accusantium sunt non rerum dolorum architecto quos in ipsum sit minus quis reprehenderit repellat.', 'Necessitatibus veniam accusamus quibusdam. Nihil possimus commodi eos omnis. Animi eveniet consectetur voluptas rerum magnam molestiae vitae. Eius ut blanditiis mollitia aperiam sit dolore.\n\nAt repellat iusto est blanditiis vel. Aut nihil voluptates qui sunt dolor. Commodi quaerat accusantium inventore praesentium quasi. Veniam incidunt qui qui officia aut mollitia incidunt dolor.\n\nAb qui et aut quia consequatur cum. Natus in assumenda nostrum blanditiis neque ut. Est vitae saepe quia inventore consectetur.\n\nVel repellat et officia consequatur cum. Non possimus mollitia molestiae ut animi odio. Consequatur adipisci temporibus minima ipsum. Alias dolor optio molestias temporibus sint dolore consequatur.', '1 an.', 165.01, '2016-07-11 15:16:43', 1, 'nulla-aut-facere-quasi-laboriosam-vel', '7.jpg', '2017-04-01 15:14:02', 'Début Septembre.\r\nFin Juin.', 'Error ut qui est voluptas. Perferendis aut expedita officiis rem beatae laudantium aut..pdf'),
(8, 1, 2, 15, 'Ebéniste', 'Vitae accusamus id earum eveniet vel inventore et tempore architecto.', 'Qui ut porro veritatis. Facere tempora quibusdam omnis eveniet voluptas praesentium molestias fugit. Explicabo consequatur debitis et voluptatem et debitis sequi. In voluptas perferendis asperiores consequatur. Aut ducimus tempora et perferendis possimus.\n\nHarum odio ducimus quia ut. Ullam doloremque voluptatum voluptas consequuntur voluptas voluptatem id. Explicabo dolorem deleniti tenetur dignissimos. Et nulla animi debitis quia aspernatur corrupti sunt.\n\nVoluptatem omnis veritatis et temporibus delectus temporibus laborum minima. Iste est mollitia consequatur aut occaecati qui ullam qui. Quisquam ea placeat est qui eius iure. Et ab modi et deserunt iusto odit qui. Ipsam tempore officiis exercitationem saepe aut unde.\n\nTempore voluptas quae et. Nemo magni et iure. Officia delectus id et placeat et voluptatem. Voluptatem sint optio doloribus omnis atque minus et.', '2 ans.', 71.51, '2017-02-17 12:51:27', 1, 'provident-quam-eum-eos-rem', '8.jpg', '2002-01-06 21:25:35', 'Début Septembre.\r\nFin Juin.', 'Soluta dolores porro sequi porro quis neque quo. Delectus perferendis laudantium in. Sint distinctio voluptatibus neque exercitationem possimus dolores eum..pdf'),
(9, 4, 2, 36, 'Analyste marketing', 'Facilis ut quia sit adipisci aut et magni quod atque ut exercitationem id deleniti voluptas ratione sit doloremque alias.', 'Vel non officia voluptatem. Ut et et qui velit minus nesciunt. Aut quia est magni velit quod error.\n\nSed minima omnis error cumque vel. Nobis velit quia quia aut voluptate ipsa doloribus. Porro quaerat qui sed necessitatibus.\n\nVoluptatem quibusdam officia atque nemo pariatur est aut. Quod non quos optio rerum.\n\nQuod voluptatem exercitationem qui aperiam. Accusamus fuga impedit eum magnam ipsum rerum. Dignissimos ex facilis quia repudiandae vel sequi eius.', '1 an.', 232.5, '2019-09-02 10:27:13', 1, 'et-reiciendis-mollitia-fuga-vero-iusto', '9.jpg', '1971-07-28 01:29:27', 'Début Septembre.\r\nFin Juin.', 'Natus sed reprehenderit at non. Totam ut magni eum facilis. Et commodi tempora aut. Numquam delectus reiciendis consequatur voluptatibus qui nobis ipsum..pdf'),
(10, 2, 5, 42, 'Massage', 'Natus nulla impedit error sit est voluptatem enim quia ipsa ad iure vel reiciendis sapiente perspiciatis.', 'Ut dignissimos quaerat quo voluptatum. Qui commodi impedit cupiditate et quia vel dolores. Quaerat ex ea rerum voluptatem. Ipsa velit culpa possimus voluptas nihil deleniti corrupti.\n\nMollitia alias id dolorum ex eum. Aspernatur facere porro aspernatur sunt. Ratione qui nostrum omnis quam dolores dolores et ex.\n\nAnimi consequatur deleniti odio laboriosam quidem dolor vel et. Tenetur porro ut unde dicta est error corporis. Atque quidem cum quo sequi. Ut tenetur tenetur atque non error quis. Laboriosam aspernatur debitis omnis voluptate expedita nostrum sed.\n\nSit reiciendis iure a. Dolores ut aut similique voluptate quia excepturi. Ea nihil pariatur et dolorem quaerat eos quaerat. Omnis repellendus distinctio qui nulla voluptatem et.', '1 an.', 227.79, '2016-09-29 18:10:34', 1, 'vel-et-suscipit-libero-ipsa-ut', '10.jpg', '1975-12-13 17:46:22', 'Début Septembre.\r\nFin Janvier.', 'Nihil quis repellendus non doloribus nesciunt beatae voluptatum harum. Ducimus et expedita sed praesentium et sed nisi. Sint a earum voluptate suscipit sunt. Sunt quisquam quia ut..pdf'),
(11, 1, 5, 41, 'Couturière', 'Nesciunt dolorum culpa laudantium beatae quos alias dolor ullam numquam eos.', 'Porro nihil iusto molestias temporibus sequi atque et. Nesciunt aut quam animi quis suscipit. Quis corporis ducimus culpa et qui qui.\n\nUt accusamus iure ad soluta. Est dicta minima est blanditiis quos natus omnis. Occaecati rerum molestiae tempora molestiae vel suscipit. Ullam animi consequatur enim placeat expedita harum.\n\nUt hic cumque magni rerum accusantium deleniti. Soluta officia magnam eligendi voluptatem ipsam exercitationem illo. Aut dolore sit eveniet ullam esse nobis. Sint sint voluptatem sunt molestias architecto.\n\nDistinctio accusamus quos est quia sed voluptas debitis. Qui laborum officiis sit nemo quis. Eos libero facere qui quia ut. Pariatur blanditiis est voluptatem asperiores.', '2 ans.', 213.76, '2016-09-03 11:48:16', 1, 'expedita-consectetur-soluta-adipisci', '11.jpg', '1980-12-29 07:05:32', 'Début Septembre.\r\nFin Juin.', 'Laborum magni fuga vitae dolor. Velit natus earum est aut vel. Rerum quisquam nobis esse eos. Quibusdam consequuntur placeat iste adipisci. Sed error odio dolores est. Ab atque aspernatur cum consectetur qui eos tempore..pdf'),
(12, 1, 5, 52, 'Tapissière', 'Placeat unde qui perferendis nulla ipsam error inventore delectus delectus beatae praesentium fugiat nesciunt.', 'Similique dolores cumque alias. Aspernatur qui aliquid accusamus quia dolore. Nemo ipsam velit et quia et vitae autem. Ab minima omnis labore.\n\nEaque sequi et dolores eum assumenda. Voluptate maxime deserunt est rem velit debitis sit. Rerum esse minima odit et cupiditate. Molestiae quo eos sunt modi soluta fugiat.\n\nQuidem ut et deleniti asperiores. Quam et placeat non excepturi ducimus assumenda. Quis optio sint animi minima sit occaecati quam. Ut quia occaecati iste illum ipsum. Voluptatum quasi inventore tempore dolor error.\n\nQuas ipsum architecto dolorum in possimus. Aut corporis optio praesentium harum et ipsa fugiat dolor. Porro consequatur quia ut quia quia voluptates. Et quod necessitatibus ex perferendis.', '3 ans.', 158.54, '2018-03-26 14:19:51', 1, 'hic-vero-et-tenetur-quia-itaque-beatae', '12.jpg', '2001-08-02 16:58:20', 'Début Septembre.\r\n\r\nFin Juin.', 'Voluptates est et veritatis nam ut. Adipisci ut aspernatur vel quisquam. Velit quia sit numquam voluptatem. Vel tenetur quisquam quibusdam dignissimos in reprehenderit..pdf'),
(13, 2, 3, 16, 'Yoga', 'Qui et et dolorum quasi fuga est sequi magnam illo voluptas itaque ullam quia amet consequatur adipisci architecto eaque.', 'Dignissimos quo nisi id eos officiis. Doloribus accusamus sed et qui suscipit ipsum. Eos sunt odio quae illum molestiae aut. Aliquam rerum quo et at.\n\nDolores dignissimos quis atque pariatur laboriosam culpa. Impedit et odio voluptas excepturi magnam. Et repellendus tempore corrupti consequatur. Laborum aut sit molestias reprehenderit dolore molestiae.\n\nQuisquam ut ut ut laboriosam saepe. Tempore quaerat omnis architecto sequi. Eius perferendis cum ut iure commodi officiis. Doloribus rerum quam est illo sunt sint.\n\nEx et molestiae modi tempora autem. Porro ipsam quia ut consectetur sequi.', '2 ans.', 53.18, '2019-06-10 17:19:49', 1, 'aliquid-iusto-sint-veniam-voluptates', '13.jpg', '1984-09-03 17:34:00', 'Début Septembre.\r\nFin Novembre.', 'Fugiat error nesciunt corporis fuga. Placeat sit minima sint pariatur perferendis voluptates voluptatum. Ipsa sint eum aliquid ex. Esse amet dolorum doloribus aut..pdf'),
(14, 3, 4, 74, 'Charpentier', 'Consequatur placeat modi ipsa et ea magnam tempora accusantium quasi ut autem ratione dolor ut exercitationem.', 'Mollitia tempore perferendis nesciunt vel nam et libero. Omnis aperiam assumenda qui. Excepturi veritatis nisi quasi sapiente aut soluta laudantium.\n\nVeniam ea officiis nihil aut consequuntur est eum. Dicta minus repudiandae necessitatibus ratione tempora quis. Sunt ut quis adipisci odit.\n\nSunt sint similique sapiente. Ut cumque veritatis distinctio eius.\n\nQui et officiis velit reprehenderit. Aut quos eos doloremque omnis quasi veritatis. Laudantium quo ut sunt ut molestiae. Ut ex voluptatum natus ipsum et iusto.', '2 ans.', 124.2, '2017-07-26 00:34:20', 1, 'omnis-cum-et-fugit-non-non-aut-fuga', '14.jpg', '1990-10-21 05:45:41', 'Début Septembre.\r\nFin Juin.', 'Laboriosam in ut perspiciatis quis dolorum voluptatem in. Quis dolor omnis quia et et consectetur. Magnam qui et quasi et. Minima sed facere animi unde quam..pdf'),
(15, 9, 5, 23, 'Horlogerie', 'Neque et ex sapiente voluptatem dolores fuga quisquam quo voluptatem aliquid corporis modi quo.', 'Sunt magnam hic amet sapiente. Placeat facere adipisci nemo quae ullam explicabo. Quo assumenda autem voluptas molestias quis.\r\n\r\nUt hic consequuntur aut totam vel mollitia. Accusantium praesentium mollitia accusamus saepe. Et ea ut quaerat rerum.\r\n\r\nQuidem velit rerum sed sunt ut est assumenda. Officia vel quis provident ut hic eveniet. Accusantium eligendi accusamus facilis quaerat molestiae voluptatibus fuga quam. Iusto doloremque dolor ut necessitatibus iusto.\r\n\r\nDeleniti molestias et omnis est. Quisquam corrupti nihil recusandae nemo. Molestiae dolorum asperiores sint ducimus dignissimos ipsa velit. Necessitatibus tempore id praesentium praesentium blanditiis explicabo officiis est.', '3 ans.', 241.51, '2019-10-30 15:14:05', 0, 'laborum-aut-voluptate-dolorum', '15.jpg', '2007-02-22 00:44:08', 'Début Septembre.\r\nFin Juin.', 'Omnis numquam mollitia vel et assumenda. Asperiores iure quas quibusdam et. Dolorum non atque ratione omnis asperiores. Dicta iure voluptatem aut nisi ducimus harum..pdf'),
(16, 6, 2, 71, 'Communication', 'Exercitationem sit eveniet voluptatibus assumenda et earum iusto quaerat reiciendis cum eos temporibus voluptatem maiores et explicabo labore ab quisquam.', 'Vitae ipsa natus tempore recusandae et ipsam. Et molestias autem beatae quas at provident nam. Totam illo reiciendis eum nesciunt aliquid sint ipsam veniam. Ducimus vitae fugiat distinctio dolores rem earum aut.\n\nMolestias ad itaque perspiciatis. Nisi est excepturi voluptates quia. Quo officiis quasi excepturi consequatur. Qui sunt deleniti qui alias.\n\nNihil eum ut nostrum est sint minus nisi dolores. Quas fugit rem reprehenderit quod rerum non. Architecto placeat sunt corrupti. Consequatur mollitia ullam aut. Aut dolores porro facere ut debitis expedita sint.\n\nRepellat veritatis nulla ut optio. Expedita qui harum exercitationem mollitia quia rem. Et recusandae aperiam quas dolore qui est quia nihil. Ex non est numquam iure nihil harum magni est.', '3 ans.', 149.35, '2017-09-07 19:09:01', 1, 'blanditiis-illo-accusantium-non', '16.jpg', '2019-11-30 18:00:37', 'Début Septembre.\r\nFin Juin.', 'Laudantium voluptatem ullam qui sapiente laudantium illo in et. Eveniet earum minima eligendi vel. Facilis suscipit voluptas aspernatur blanditiis..pdf'),
(17, 8, 3, 36, 'Naturaliste', 'Sit dolor tempora corrupti aut et non enim qui explicabo nemo ut voluptates blanditiis reprehenderit rerum similique.', 'Blanditiis illo atque ut est cumque. Aut aspernatur eveniet eum natus est. Ad eligendi nisi vel culpa minus quisquam. Sequi ratione nobis velit alias.\n\nItaque consequatur est voluptas qui dolor sunt culpa. Vero rerum facere suscipit ut veritatis reiciendis ipsa quod. Accusamus aliquid temporibus ipsum sed.\n\nEveniet ut voluptatem cupiditate consequatur exercitationem distinctio. Adipisci repellat quis molestiae dolorem laboriosam sed molestiae. In sit enim ad voluptatem ut minus fuga rerum. Tempore sed amet commodi temporibus laborum.\n\nIn ut amet possimus rerum. Sit consequatur qui modi distinctio et officiis. Quia rem cupiditate repellendus quasi at iste sunt. Doloremque ad et dolor voluptatem aut excepturi vitae.', '3 ans.', 59.83, '2017-09-13 13:17:49', 1, 'qui-consequatur-non-illo-voluptas-ab', '17.jpg', '2011-05-23 08:59:35', 'Début Septembre.\r\nFin Juin.', 'Voluptates nam cupiditate illo. Mollitia voluptatem beatae ut itaque doloremque omnis itaque et. Ut excepturi est fugiat repellat ab fuga..pdf'),
(18, 3, 5, 67, 'Géomètre', 'Consectetur officia sed delectus ratione in animi reprehenderit rerum sit nihil totam velit ex voluptatem laborum dolor.', 'Sit commodi veniam asperiores officiis rerum et ut. Modi vero voluptatibus est aut vel voluptas quasi. Quaerat harum dolores delectus quod ipsa.\n\nEst explicabo officia et accusantium non quis aut. Et quaerat accusantium esse non qui molestiae cum et. Harum voluptatem repudiandae dolorum quam magni veritatis fuga quod.\n\nIure reiciendis molestias qui possimus delectus. Culpa qui dolorem perspiciatis expedita voluptatem voluptatem. Aperiam atque quibusdam voluptas omnis. Vel eligendi rerum perspiciatis.\n\nPorro illum dolores omnis eum. Aut animi at dignissimos provident facere dicta corrupti doloremque. Quia quo dolores impedit distinctio. Assumenda et modi nam assumenda enim quasi adipisci.', '3 ans.', 242.72, '2018-11-03 23:05:44', 1, 'et-dolorum-cupiditate-natus-ut-rerum', '18.jpg', '1983-07-28 09:07:44', 'Début Septembre.\r\nFin Juin.', 'Voluptatem asperiores reprehenderit nostrum exercitationem. Explicabo sed aut molestiae voluptatem aperiam quis aut. Et aperiam consequatur praesentium id..pdf'),
(19, 2, 3, 15, 'Esthétique', 'Odio consequatur autem est et repudiandae nisi omnis quod dolorem aut earum repudiandae inventore esse.', 'Ullam nulla ullam rem rerum non. Officia voluptatem nesciunt enim dolore vel facere laborum. Officiis consectetur vitae maiores alias rem corporis. Tempore rem iure laudantium similique aut eum.\n\nAut dolorem fugiat ipsum ipsa a. Est rerum consectetur commodi quo. Possimus qui perspiciatis neque.\n\nQuae cumque quidem ut iste harum numquam. Odio non et ullam ut pariatur rerum at. Aut sit voluptatem accusantium repellendus rem. Eum dolor veritatis placeat dolorem dolore fugiat.\n\nMaiores sed id et blanditiis sed sit iste. Ab est aut occaecati ipsam ut non ipsam. Dolor et delectus expedita dolorum nobis.', '3 ans.', 203.49, '2018-12-26 04:51:24', 0, 'quos-ab-quidem-est-et', '19.jpg', '1974-01-24 21:33:06', 'Début Septembre.\r\nFin Juin.', 'In accusamus consequuntur omnis molestiae. Perspiciatis aut nesciunt quis ut deleniti. Fuga minima voluptatum cupiditate illo. In aut et enim quia..pdf');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `name`, `description`) VALUES
(1, 'Artisanat', 'Modi et et magnam dignissimos quod est dolorum excepturi non hic odit blanditiis et quaerat sed eaque illo.'),
(2, 'Bien être', 'Facilis reprehenderit voluptatum asperiores sunt quis in quia consequuntur sint voluptas ullam provident doloremque cum soluta ut quia.'),
(3, 'Construction', 'Mollitia laboriosam rerum recusandae deserunt vel in veritatis consequatur eius nulla dolorem et aut perferendis.'),
(4, 'Économie', 'Sequi qui esse consequatur animi aliquam odio provident iste doloribus quisquam voluptas.'),
(5, 'Éducation', 'Ea impedit accusamus possimus culpa similique ut sit facilis sit.'),
(6, 'Langue', 'Incidunt et officia atque iste suscipit veritatis animi fugit qui ipsa minus.'),
(7, 'Machinerie', 'Aliquam doloremque sed voluptatem ut unde in id est ipsa excepturi.'),
(8, 'Science ħumaine', 'Inventore sit consequuntur perferendis ipsum voluptatem libero amet laboriosam ipsum neque ducimus ducimus ullam.'),
(9, 'Techno‑logie', 'Et adipisci quibusdam sint alias voluptas et cum adipisci assumenda excepturi minus ipsa natus et unde sunt molestias.');

-- --------------------------------------------------------

--
-- Table structure for table `course_level`
--

CREATE TABLE `course_level` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prerequisite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_level`
--

INSERT INTO `course_level` (`id`, `name`, `prerequisite`) VALUES
(1, 'C2D', 'Non neque tempore dicta vitae occaecati et dolorem. Numquam ea accusamus hic. Enim magni molestias maiores. Natus aut odit aut nostrum ut aspernatur. Amet aliquam nisi consequatur aliquam atque.'),
(2, 'CEB', 'Corrupti aut at mollitia accusantium harum et inventore. Maxime amet sequi quidem fugit cupiditate adipisci. Ipsum eveniet est corrupti fugiat rem.'),
(3, 'CESI', 'Qui perspiciatis maiores rerum quasi distinctio. Odit atque possimus aut possimus odit tenetur quos. Aut repudiandae adipisci nisi facilis cum sapiente. Eos tenetur tempore est nihil. Sint repellendus veritatis nostrum harum qui.'),
(4, 'CESS', 'Sed qui aut rerum dolorem. Assumenda placeat hic eum. Consequuntur excepturi voluptas delectus. Atque et quia dolorem nihil. Quis veniam sint totam eum blanditiis.'),
(5, 'CQ', 'Facere sit eum eius exercitationem odio labore. Explicabo nisi aut recusandae cupiditate quae magni provident. Ut iste numquam aut quasi atque.');

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200110181912', '2020-01-10 18:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `image_updated_at`, `created_at`, `text`, `is_published`) VALUES
(1, 'Magnam doloribus facilis autem laboriosam beatae. Consequatur iusto vel ut error accusamus iste asperiores. Ipsam quidem rerum in ut earum. Dolores sunt a hic laborum.', '01.png', '2016-02-01 16:49:20', '1996-07-26 05:39:51', 'Sunt error iure sint officia consequatur ea eaque sed. Nobis consectetur et omnis harum quas eveniet. Accusamus magnam nisi voluptas doloribus sed non.\n\nCum aut autem ut qui. Rerum et iure eveniet earum officiis commodi nulla. Corrupti ipsam quia atque cumque numquam vero et. Non ea fuga nulla.\n\nDolorem deleniti quia voluptatem odio. Accusantium deleniti reiciendis animi voluptatem. Consequatur earum sint et fugiat rerum. Accusantium velit magni omnis non.\n\nAut nemo id est ut voluptas possimus repellendus. Ea amet omnis aut delectus. Sed debitis vel quibusdam doloribus. Animi omnis unde quos accusamus quidem repellendus consequatur sint.\n\nQuia quidem voluptatem libero repellendus quae qui optio. Rerum ipsam consequatur ea alias voluptatem explicabo. Inventore ex sed vel. Eos minus dolores dolor velit reiciendis. Dolorem quia illum eum reprehenderit eveniet.\n\nEsse eius corporis veritatis qui velit numquam. Dignissimos ex aperiam ut quas ut sint. Incidunt odit commodi eaque ullam deleniti. Architecto inventore quidem ab enim amet aperiam quibusdam.\n\nAccusamus ut deserunt impedit voluptatum. Molestias deserunt at suscipit debitis non ullam. Aperiam quia assumenda vel excepturi ut sit eaque.\n\nIn dolorem placeat qui labore sapiente iusto. Ex facere quibusdam similique natus illo itaque. Neque error atque tempora nisi eius exercitationem nostrum. Quae vel velit nihil id est fuga.', 1),
(2, 'Fête des diplômes', '02.png', '2016-03-20 07:24:47', '2015-11-11 05:43:00', 'Deleniti fugit ex ullam recusandae dolores vel. Voluptatem officia quidem quibusdam. Quia odio sapiente voluptas aut.\r\n\r\nEt esse aut unde consequuntur atque esse ipsam. Consequatur saepe at quas rerum consequatur qui ut. Assumenda pariatur iure eveniet sint. Odit illum deleniti molestias.\r\n\r\nCorrupti et dolorem quod enim itaque molestiae nulla. Exercitationem placeat incidunt architecto accusantium similique sed. Qui dolorum dolorem sed nemo necessitatibus sed possimus. Sed quidem qui nulla dolore laboriosam dolorem.\r\n\r\nCorrupti optio quia voluptatem facere laboriosam temporibus ut. Facere quia et vel et delectus. Sequi dicta at quas eum.\r\n\r\nRepellat vel quisquam eius possimus explicabo. Rerum et qui dicta rerum repellendus quam officiis. Expedita dignissimos explicabo eaque corrupti. Quae occaecati iure quis quos voluptas ipsum.\r\n\r\nEsse provident ea nihil necessitatibus quia praesentium aliquid. Error facilis tempore vitae aut. Quod enim tenetur dolor.\r\n\r\nSoluta accusamus voluptates harum praesentium. Ut deleniti quaerat aliquam sint earum nemo et. Amet sed fugiat consequatur at assumenda ut sint.\r\n\r\nQui consectetur culpa incidunt id. Omnis nisi eos pariatur culpa consectetur harum. Deserunt debitis quia labore.', 1),
(3, 'Nemo magni ut vel recusandae quia aliquid ad. Sit amet officia inventore et blanditiis voluptatum asperiores ut. Eum aut neque eaque voluptatem corrupti fugiat.', '03.png', '2011-02-18 09:00:27', '1974-10-13 09:18:54', 'Sint optio aliquid soluta qui illum suscipit aspernatur. Quia quos et aut et. Reprehenderit non consequatur aliquid provident quod at eum.\n\nConsequatur eos quae voluptatem voluptatem fugit pariatur recusandae illo. Omnis consequuntur consequatur rerum consequuntur sed.\n\nId qui molestiae provident cum et aliquam ut animi. Beatae perspiciatis sapiente harum. Id est voluptatem beatae.\n\nOccaecati distinctio aperiam quis nulla ducimus culpa recusandae temporibus. Nam beatae enim eos dolores dolor quis perspiciatis sunt. Voluptas maxime nesciunt repellendus.\n\nEt hic alias ut veritatis mollitia fuga. Aut est et et culpa. Eos soluta qui ut. Alias quidem eos porro quo voluptates ea.\n\nMinima ut hic voluptas laudantium ducimus sit ea. Sed quos esse provident eligendi omnis voluptas id. Vitae pariatur sunt asperiores.\n\nRatione repudiandae deserunt vel ratione natus sunt. Doloribus qui ullam voluptate. Ratione nemo accusamus aut velit dolor unde ea culpa. Esse quisquam suscipit aperiam id magni.\n\nEst consequatur et architecto aut ut. Officia nulla quia numquam reprehenderit tempore eos. Non et quidem necessitatibus.', 1),
(4, 'Consequatur consequatur aut dolor error enim iure incidunt. Consequatur est reprehenderit porro. Et repellat dolor incidunt. Id reiciendis qui perferendis.', '04.png', '1974-08-31 20:45:37', '1994-01-05 09:36:01', 'Quo aliquid velit rem beatae quasi harum molestias. Dolorum quis accusamus quo mollitia dolorum.\n\nAut accusantium a quidem ut dolore ea quibusdam enim. Nihil qui sapiente voluptatum non. Nihil vel cumque rerum asperiores. Ut tempora vel explicabo quo quas.\n\nAliquid iste et sequi nostrum. Et ut incidunt animi occaecati tempora voluptatem. Cumque repellat culpa sed nobis quo molestiae commodi. Nihil et tenetur quia esse qui nisi commodi. Dolor incidunt a culpa.\n\nMaiores et et reprehenderit aut accusantium impedit asperiores fugiat. Qui facere inventore saepe voluptas laborum ut. Reiciendis ducimus ea vitae.\n\nDolorem qui culpa voluptatem id excepturi assumenda deleniti. Impedit dignissimos amet qui pariatur autem consectetur est. Ullam aut ipsa sunt est est.\n\nAspernatur iste enim error sapiente. Necessitatibus nihil nulla unde necessitatibus autem. Illo unde hic error qui sit accusamus. Temporibus consequatur illum quia vero omnis laudantium temporibus.\n\nNon suscipit similique quaerat quo hic. Repellat sequi cupiditate voluptatem. Accusamus ipsa voluptatem facere est commodi fugiat mollitia. Voluptatem doloremque ut alias tenetur amet et id.\n\nA quis sed at magnam reprehenderit eaque quos. Explicabo aut voluptas ullam harum enim qui. Quae soluta aut tempore praesentium iusto numquam dolor qui. Rerum eum fugiat doloremque dolor ducimus ex. Atque reiciendis ea ut officia aut.', 1),
(5, 'Vero mollitia repellat autem ex reiciendis ut molestiae. Iure ex corporis ut omnis iusto eum. Corrupti accusantium est deserunt pariatur. Sed id sed molestiae dolores est est. Enim dolores voluptatem possimus est porro ex. Odit corrupti sunt ab quod.', '05.png', '1976-09-03 19:01:35', '2019-07-27 03:49:21', 'Ex quidem animi laborum. Ad dolor aut ea qui. Est consequatur sit eaque repellat voluptate earum cumque dolorum. Neque excepturi maiores illo aliquam fuga enim praesentium sed.\n\nQuas id odio ipsam qui ipsum. Rerum tempora quo est. Consequatur et facilis non omnis.\n\nTempore quidem exercitationem expedita animi doloribus. Pariatur sequi laborum quam dolor deserunt sed et.\n\nAliquid animi harum dolorem molestias ut. Ipsa magni reprehenderit quibusdam natus nostrum repudiandae. Ut ea quasi aliquid non eum. Laborum iusto laudantium ut aut facilis aut fugit.\n\nQui repellat ipsum dolorem quae earum libero. Ea possimus sed deleniti illum eveniet natus. Rerum consequuntur repellendus occaecati id. Ipsa esse excepturi quia tempora aspernatur sint consequatur et.\n\nTemporibus magnam odio ipsum occaecati qui reiciendis suscipit. Vel consequatur consectetur soluta cum veniam.\n\nVoluptatibus qui illum iste. Eum voluptatem autem nostrum laudantium quia eos. Iusto rem delectus neque excepturi libero voluptatem illum mollitia. Rerum eligendi et nesciunt.\n\nEos dolore qui ex ipsam exercitationem consequuntur. Vel beatae recusandae expedita sit sit voluptate consequatur. Sit unde ipsam in nihil voluptatem inventore. Voluptas id architecto ducimus incidunt. Suscipit maiores veritatis excepturi.', 1),
(6, 'Praesentium sit neque vel rerum aut nostrum. Animi nostrum quia omnis omnis. Recusandae natus alias dolorum iusto quia voluptatum.', '06.png', '2014-12-10 00:53:08', '2004-06-10 18:30:27', 'Voluptatem et aliquam eum quis enim eum. Molestias atque commodi ea dolores totam. Aut harum molestias inventore rerum inventore ullam omnis. Asperiores fuga sit maiores omnis vel.\n\nEt culpa nihil voluptatem itaque ullam atque et omnis. Quia est facere id maiores officia. Ut molestias autem asperiores.\n\nRerum nobis saepe occaecati. Voluptas suscipit accusantium in sit. Cum alias ad aut dolore maiores rerum.\n\nVeritatis qui eius quos dolore numquam aut. Commodi qui autem iste culpa sit. Optio blanditiis voluptatibus doloremque at voluptatum.\n\nEnim provident animi nihil sit inventore in in. Voluptas suscipit aut nam occaecati sed tenetur.\n\nEst autem qui aut consectetur rerum corrupti. Est qui sed voluptatem et qui. Sunt et est sunt eius facilis. Vitae sed inventore dolores aut.\n\nOfficiis maxime quia modi et. Eveniet aliquid quos suscipit consequatur nihil in ab.\n\nNam aut ea dolores voluptas tenetur. Consequatur possimus ipsam suscipit soluta. Inventore cumque accusantium aperiam voluptatem eum.', 1),
(7, 'Provident eveniet similique quia blanditiis sapiente. Quod fugit alias delectus porro aliquam blanditiis voluptatum. Velit qui at eos amet sed.', '07.png', '1978-11-09 21:43:19', '2007-11-30 18:16:15', 'Sunt temporibus qui consequuntur magnam impedit omnis cum. Labore cum quae omnis doloremque nihil beatae. Reiciendis molestiae impedit animi sed consequuntur.\n\nQuibusdam deleniti deleniti non et. Qui qui esse sit provident nemo delectus vel hic. Est velit est inventore iusto et adipisci hic alias. Est praesentium aliquam rerum quas qui.\n\nVoluptatum dicta voluptatem et deleniti in necessitatibus exercitationem repellendus. Ipsam accusantium reprehenderit id error nisi omnis provident. Deleniti aperiam amet porro est minima corporis non explicabo.\n\nConsectetur dolorum deserunt voluptatem explicabo. Fugit natus ut deserunt quia molestiae voluptas. Reiciendis autem tenetur vero quidem nisi eligendi. Voluptas sed eum et facere voluptas eligendi quae.\n\nRecusandae tenetur odit assumenda voluptatum fugiat minima. Eos velit rerum est quod et et.\n\nSit aut dicta accusamus omnis error modi. Qui ut itaque ea neque tenetur corporis. Eos soluta molestiae ut veritatis quia dignissimos et. Soluta maxime voluptatem ducimus quidem est.\n\nNobis eligendi quia voluptatem. Officia quidem eum sed error voluptas consequatur maxime.\n\nQuaerat consequatur modi quis quo. Laboriosam et provident nihil est. In et dolores dicta commodi quasi ipsum.', 1),
(8, 'Ut eius error libero eaque autem distinctio. Qui impedit et et. Facere et iste iste. Dolor doloremque sit nam facilis earum voluptatibus sint. Ad suscipit et voluptatibus dolorum dicta quos. Et maiores magnam fuga. Nam numquam enim atque est ullam.', '08.png', '1992-01-06 00:04:20', '2012-09-25 08:43:48', 'Accusamus dolores enim sint vero in. Ut quae quia sapiente tenetur veritatis. Sed modi rerum est possimus sit aut. Tempore magnam at impedit non maxime.\n\nEum rerum laboriosam rerum laudantium blanditiis sed eos. Iusto sit reprehenderit minima et rerum quia. Dolorum in blanditiis maiores error incidunt architecto et.\n\nVelit quibusdam reprehenderit aut aliquam nam fugiat earum. Est error ab necessitatibus dolores voluptatem aut voluptas. Quos est explicabo voluptas delectus aut amet dolorum. Ut unde nihil sunt. Non placeat autem amet ut natus fugiat.\n\nSint explicabo sed at voluptas cupiditate consectetur. Qui possimus possimus nisi similique quis.\n\nIpsam nesciunt velit quia consequatur qui id sit. Aperiam reiciendis quam qui commodi molestias. Repellendus deleniti eos minus fuga. Omnis sit enim et ut exercitationem.\n\nMagnam voluptatem recusandae hic dolorem maiores. Sapiente quas dolore dolorem et quasi sint. Fugit quae velit eos placeat quo.\n\nCommodi est non aliquid cumque corporis officia. Laborum adipisci non aut quas. Quam dolorem asperiores dolorem voluptatem voluptatum commodi.\n\nAut qui sunt enim id placeat. Officia ex illo et itaque sunt vitae ut. Doloremque mollitia modi sit quia tenetur blanditiis recusandae. Aut enim odio consectetur non nemo. Similique dolor dicta et adipisci repellat.', 1),
(9, 'Debitis sapiente alias expedita alias. Officiis consequuntur et culpa quia expedita. Ut aut vero rerum. Quia molestiae aliquid voluptatibus unde ut aliquam.', '09.png', '1980-05-13 14:34:26', '1978-12-26 17:59:48', 'Dolores aut temporibus officiis doloremque delectus. Autem doloremque sed ut molestias nemo quos. Qui debitis asperiores sed molestiae eveniet suscipit reiciendis.\n\nIpsam ut et culpa dolore earum reiciendis. Voluptatum fugit id quia quae ut libero cum. Distinctio et consequatur reiciendis distinctio. Perferendis rerum dignissimos vero voluptas totam iusto quibusdam.\n\nQui fugit veritatis aperiam deserunt hic sit quia. Temporibus facilis et qui qui molestias modi reiciendis. Non esse sit veritatis voluptas. Beatae sapiente magnam laudantium commodi ducimus molestias.\n\nSoluta qui aut qui voluptatem et corrupti. Aut qui est reprehenderit et ab libero. Qui consequatur consequatur ut doloribus architecto est. Aut officia nihil similique corporis iure nostrum provident. Nihil et qui eaque est ipsam ullam hic.\n\nPorro eum itaque quia at. Voluptatem odit corporis occaecati sed sit sint et. Error velit excepturi modi. Ea perferendis voluptatem sunt quidem.\n\nAut voluptates et perferendis consequuntur in voluptatem magnam. Nostrum ea et eaque ducimus maxime quia omnis laudantium. Qui beatae ad deserunt distinctio inventore sunt numquam.\n\nEst aut enim perspiciatis laboriosam saepe. Maiores consequuntur ducimus omnis dicta saepe iste quam laudantium. Fugit porro voluptatum incidunt architecto ad est nesciunt. Eos corrupti non corporis.\n\nPraesentium quis quaerat temporibus ipsam quia non. Numquam voluptate qui provident. Earum doloribus minus inventore a velit.', 1),
(10, 'Eos nemo voluptatem ipsa sed sit. Vel numquam corporis nam asperiores necessitatibus. Est rerum eos quam eligendi odio dolorum. Sed velit odit amet ut a provident laborum corporis.', '010.png', '1976-12-02 19:02:39', '1978-07-28 07:35:07', 'Voluptates suscipit sed doloribus ut. Enim ullam occaecati est cumque dignissimos voluptatem quae. Error doloribus et consequuntur iusto architecto nihil ut. Accusamus nulla fugiat voluptatem qui.\n\nRatione repellendus culpa est praesentium deserunt voluptas. Dicta deleniti earum est maiores dignissimos sint. Voluptas rerum odit harum.\n\nOmnis provident consequuntur omnis alias dolorum laborum. Quas voluptatem voluptate labore. Neque voluptas et facere ipsa.\n\nVoluptas minima blanditiis saepe illo in aut. Non repellat nostrum minima soluta vel architecto.\n\nVoluptatem ut quibusdam a debitis modi recusandae libero. Fuga non ea totam itaque. Voluptatibus ipsa dolores molestiae vitae voluptas qui.\n\nTempora minima et quia ea sed debitis. Repellendus nobis ad est explicabo eaque. Blanditiis error quibusdam alias. Blanditiis corrupti quas officia nihil similique libero ipsum.\n\nMaiores qui aspernatur debitis. Et recusandae nobis quaerat. Consequatur architecto molestiae suscipit omnis praesentium ipsa.\n\nEligendi quae aut possimus. Consequatur eos vel laborum aut sed. Voluptas ipsum et aut facilis. Fuga inventore accusamus voluptas quas tempore quisquam modi minima.', 1),
(11, 'Culpa deleniti est ut minima quos. Voluptatem soluta velit ipsum quo enim sed nihil.', '011.png', '2010-11-02 01:05:24', '1978-09-09 12:35:18', 'Aspernatur odio est quis aspernatur est nesciunt. A doloremque veniam rerum. Id minus laudantium quia. Quisquam autem ut ut.\n\nDistinctio commodi commodi incidunt dolor ducimus culpa. Eligendi dolores cupiditate delectus dicta. Mollitia atque ut tempora numquam molestiae. Atque consequatur voluptas illum reiciendis et.\n\nOfficia ullam ipsa enim. Nulla ut repudiandae et nulla ratione. Rerum nobis inventore autem. Est vel molestiae et qui eaque.\n\nAd odit rerum esse voluptas alias voluptatum. Nostrum ea deleniti aperiam. Et quo omnis sint ex quia. Blanditiis saepe quasi est dolores.\n\nIllo ab voluptas nihil. Cumque dolore qui dolor non. Totam numquam qui quia numquam praesentium consequuntur et. Sed sequi et ipsam.\n\nIn blanditiis sit omnis voluptatem sint quam. Inventore consectetur nisi eveniet in consectetur enim. Qui excepturi reprehenderit et quo.\n\nSapiente voluptas modi et vero. Et asperiores ipsum ducimus ex delectus. Sapiente corrupti nobis rem officiis fuga possimus. Optio consequuntur culpa et aspernatur quidem.\n\nEt ratione exercitationem minus eveniet nemo eligendi. Sapiente voluptatem mollitia in voluptas. Hic nemo aperiam doloribus doloribus et vitae.', 1),
(12, 'Amet quas modi nihil quos alias temporibus laborum. Ut aut qui fugit iusto unde. Voluptate dolorem repellendus quia non aut. Sed qui atque ut.', '012.png', '1998-11-03 19:36:08', '2017-06-07 00:25:00', 'Asperiores sed quod nihil odio id perferendis. Enim ea et ex sed debitis et. Repudiandae excepturi asperiores est commodi possimus quibusdam. Dicta repellat est quisquam.\n\nAut sed quidem suscipit. Sunt ea aut autem ut adipisci. Dolores quia ipsa dolore fugit itaque officiis. Suscipit modi optio quia modi sunt.\n\nId sequi pariatur eveniet omnis amet. Delectus minus provident quisquam voluptates voluptates numquam. Rerum nostrum beatae dicta autem quis modi et.\n\nVeniam nisi nemo ea quo qui qui soluta. Et placeat id quam reiciendis quo quia fugit. Vitae nostrum delectus officiis voluptas rerum. Esse ut similique qui.\n\nAutem perspiciatis corporis vero itaque enim voluptatibus voluptatem eum. Voluptatem nostrum quia velit natus doloremque maxime. Maiores illum tenetur sint et rerum. Dolor culpa pariatur earum et et soluta totam nostrum.\n\nUt debitis doloremque soluta est ipsum in nam. Omnis libero quibusdam ratione reiciendis ut reiciendis ea. Magni omnis eos necessitatibus laudantium eligendi eum. Quisquam porro quisquam vitae qui ab.\n\nMolestias ipsa et pariatur quia ut consectetur. Quos excepturi fuga velit accusamus. Nemo eveniet explicabo quam id.\n\nAutem soluta quia quos eligendi saepe qui. Eius deleniti atque nihil cum. Omnis porro et qui cupiditate animi nihil eius.', 1),
(13, 'Adipisci sed nihil minima provident facilis iusto vero. Quae et enim aut et nemo iure. Quia natus aliquid id vel omnis quibusdam.', '013.png', '2015-10-03 17:57:02', '2019-07-19 04:11:35', 'Ipsam sint consequatur eius in. Nobis deleniti qui et ut voluptatem consectetur. Voluptate consequuntur voluptatem explicabo fugiat molestiae dolor et in. Ut illum placeat velit.\n\nInventore culpa facilis ut voluptas soluta exercitationem. Alias et quae cupiditate temporibus velit. Ut placeat vero molestiae qui. Quia possimus eius non molestiae soluta occaecati possimus.\n\nEius officia quo natus aut iste vel eum. Minus ex qui sunt illum laborum omnis voluptatibus minima. Adipisci exercitationem quos aperiam voluptates iure.\n\nEa impedit aliquam adipisci qui dolorem asperiores. Et autem sit expedita ut soluta. Aut et distinctio quia alias ut. Ut voluptas vitae qui.\n\nEt laborum maiores ad veritatis. Delectus libero omnis nemo ratione qui dignissimos. Mollitia molestiae facilis tenetur esse molestiae provident. Deserunt cum voluptas modi facilis.\n\nAliquid voluptatibus deleniti nisi velit est commodi et. Facere vitae mollitia dolor ad dolorem. Officiis dolore deserunt animi.\n\nEveniet quos in et. Maiores maiores odit nulla. Voluptas molestiae error fuga rerum vero.\n\nEt eos maxime omnis ut. Illo officiis quod eius corporis. Perferendis voluptatem laudantium harum aliquam facere. Ipsam aliquam aut et ut.', 1),
(14, 'Voluptas et quam consequatur maiores. Quia sit sit occaecati similique ab. Molestiae aliquid ad aut.', '014.png', '1993-07-23 10:00:18', '2001-06-01 16:53:49', 'Veritatis laborum optio at repellendus. Ut culpa doloremque omnis impedit aut doloribus. Odio consectetur sint quam deserunt officiis doloremque velit. Dolorum magnam ducimus qui at adipisci earum aut.\n\nFuga suscipit non voluptatem. Qui et consequatur animi quo molestiae quasi ut. Doloremque ut tempore voluptatem.\n\nSed in nobis et est. Illum aperiam itaque rerum deserunt nisi totam. Est ullam at deserunt in ut ullam.\n\nBeatae omnis porro molestiae occaecati perspiciatis. Molestiae numquam aut possimus aut doloremque et quae aliquid.\n\nAccusamus autem officiis consequatur sunt dolorum labore natus. Qui non tempore rem ut. Labore eveniet porro quis aliquam. Veniam voluptates autem tempore numquam aperiam totam.\n\nIllum omnis labore ducimus et quisquam vitae et. Suscipit ratione quod dolorem at nulla et aspernatur. Quia occaecati soluta veritatis ut illo occaecati.\n\nDolores et maiores voluptas culpa suscipit quidem. Enim ut accusamus et et. Eos quis harum qui architecto quo nostrum perspiciatis nostrum. Est minus ad ducimus maxime dolores repellat iste.\n\nCorporis in incidunt impedit id nam eum. Consequatur culpa a qui illum ea. Nobis quas qui sequi vitae amet corporis. Libero minima qui est aliquid. Enim nisi natus natus architecto ut.', 1),
(15, 'Odio quidem qui assumenda. Voluptas molestiae consectetur recusandae quia sint. Excepturi atque aliquam et magnam. Consequatur eum consequuntur sequi totam dolorum debitis blanditiis.', '015.png', '1997-06-07 10:55:15', '1980-05-24 06:35:23', 'Dignissimos fugit non alias maxime amet laborum dolorum. Impedit rem voluptas ipsum quae perferendis sint ipsum esse. Repellendus nemo perspiciatis ullam dolor. Qui expedita blanditiis magnam ut numquam.\n\nPerspiciatis qui deleniti quos temporibus debitis quia doloremque et. Vero molestiae fuga non doloribus rem ea ex sit. Cum quibusdam accusantium sapiente sed praesentium. Dolor molestiae accusantium in et.\n\nRerum dolore cupiditate voluptatum recusandae est. Maiores molestiae nihil dolor alias dicta voluptatem. Harum non natus voluptas earum. Qui voluptas itaque dolorem occaecati. Qui sequi modi qui enim earum ipsum fuga ullam.\n\nDoloremque odio facere itaque voluptatem vel. Consequatur temporibus aspernatur aperiam voluptatum velit veritatis autem exercitationem. Rem et dolor vero aperiam doloremque incidunt.\n\nIpsum ea iure praesentium quis distinctio aliquam. Optio cumque sit qui aut ut optio quisquam voluptas. Eveniet nulla sit molestiae laudantium. Beatae sint quas illo.\n\nDolorum voluptatibus sint sint quae corporis velit nisi. Minima maxime sapiente ut sint itaque facere cum. Et numquam velit quis dolore quam ullam expedita. Voluptatum exercitationem labore consequuntur libero.\n\nDoloremque recusandae necessitatibus provident non et minus. Sapiente vero recusandae ipsum veniam ullam sit impedit. Ut exercitationem autem libero odio adipisci voluptatem sit molestias. Deserunt dignissimos quo mollitia.\n\nReiciendis quaerat sit eveniet facilis. Exercitationem consequatur eum quaerat et itaque eveniet est nostrum.', 1),
(16, 'Cum beatae quis eos quia. Maxime odio omnis nobis consequatur vitae laborum. Magni nisi cupiditate autem fugit illum et. Libero sunt et quis est quis nisi et. Quas voluptas corrupti eum error ex. Voluptatem et veritatis vel adipisci itaque.', '016.png', '2016-04-30 12:16:55', '1984-09-21 14:31:25', 'Enim quia culpa eaque quo laboriosam totam eius. Quia rerum est quos. Neque nisi quisquam esse. Explicabo nisi aut saepe corrupti.\n\nAssumenda saepe accusantium officiis laboriosam. Facilis consectetur porro et est. Dolorem dicta voluptatem incidunt in modi. Corrupti ad non consequatur minus. Ea et repellendus molestias.\n\nAmet ullam nemo mollitia sunt debitis voluptatem. Magni et non sint quia consequatur aliquid. Dolorem ea et nemo quod. Provident est nam tempora quam esse fugit et.\n\nOmnis aspernatur sapiente et vitae. Nulla ipsa ex consectetur. Recusandae error natus minus minus unde. Ut velit odit sint.\n\nQuam adipisci dolor amet in voluptatem omnis. Omnis non dolores quam ullam voluptate. Natus nemo neque exercitationem quasi molestiae in. Deserunt iure iure et perspiciatis quia eum libero.\n\nEt odit sapiente dolorem ut porro enim. Sequi fugit sed in pariatur tenetur et. Est aut hic nisi dolorum modi. Nisi est nihil excepturi voluptatum ut.\n\nIncidunt excepturi quia qui vitae rerum. Eos animi distinctio laborum. Neque qui et distinctio delectus.\n\nAccusantium veniam quisquam non in neque minima. Hic praesentium ducimus est inventore dolore voluptas ut. Enim architecto aliquam fugit.', 1),
(17, 'Ut at ratione saepe nostrum perspiciatis corporis. Non repellat veritatis voluptatum voluptas qui eveniet. Est suscipit vel quis excepturi quidem sed vel. Earum qui nisi ipsum.', '017.png', '2017-02-27 23:01:11', '1992-03-10 15:43:11', 'Aliquid accusantium molestiae et explicabo minima a sed soluta. Minima excepturi impedit eveniet itaque fugit quia. Nisi ipsa consectetur excepturi ratione corporis non autem.\n\nAd doloribus optio incidunt sequi esse voluptatibus. Nostrum consequatur voluptatem labore molestiae quia est. Culpa et ea numquam quas. Nostrum quas ad voluptatem distinctio perspiciatis.\n\nQuod quia ullam eos vel asperiores voluptates enim. Possimus sunt eum expedita quod vitae iusto. Quo voluptas vero vero labore. Itaque voluptates quo et aperiam ut iure. Totam eligendi illum quos voluptate saepe et adipisci.\n\nExpedita earum et pariatur at magni unde quod. Vel ullam et nulla dicta aut. Vero qui blanditiis illum quia. Accusantium soluta temporibus voluptas ipsam voluptatem. Ea nulla voluptas optio non.\n\nNatus est accusantium id eos. Reprehenderit occaecati tempore maiores temporibus maiores. Laudantium nobis autem eveniet alias.\n\nQui aliquid ex rerum possimus mollitia dolor. Dolores distinctio aut nam hic officia. Quam at maiores aut. Eveniet minima sed et earum dolore perferendis aut qui.\n\nAt rem saepe illo dolores neque atque. Laboriosam blanditiis harum qui blanditiis. Asperiores mollitia tenetur veritatis dolores quis eveniet.\n\nConsectetur ut esse distinctio voluptate eligendi deserunt neque reprehenderit. Et nihil nostrum quis saepe. Iure ducimus dignissimos nihil recusandae accusamus ut.', 1),
(18, 'Labore aperiam vero molestiae provident recusandae. Sit labore dolores eos incidunt. Sed corrupti aspernatur veniam molestias hic. Numquam illum hic corporis ab architecto quae. Perferendis dignissimos soluta ipsum inventore. Fugiat sed quae sed numquam.', '018.png', '1989-09-30 02:51:51', '2001-10-01 03:18:36', 'At aperiam quis ut vero occaecati. Architecto accusamus perspiciatis illo commodi aperiam earum. Aut voluptatem iusto consequuntur nulla quia. Ab autem in dolore et aut saepe.\n\nQuibusdam ea ut beatae saepe esse sint. Sit occaecati laboriosam consectetur expedita.\n\nConsequatur recusandae eos omnis praesentium sed molestiae nemo. Quasi blanditiis fugit soluta. Nemo vero beatae tempora a consequatur eius quo. Saepe commodi ut dolorum nulla.\n\nNon et et hic corrupti sapiente impedit rem. Enim accusamus error unde sapiente consequatur sint non. Quam quos quibusdam repellat quo.\n\nLaborum labore incidunt unde qui sit nulla doloribus laboriosam. Consequatur quos nostrum nulla dolores quidem totam. Unde tempore autem excepturi sint omnis qui.\n\nAlias quas autem est alias corrupti. Tenetur praesentium iste amet qui sapiente. Aliquid enim et nulla beatae. Perferendis qui fugit et nostrum sit debitis.\n\nAccusantium blanditiis quaerat facere eaque autem. Voluptas doloremque enim quam ipsa id. Nemo enim fuga eaque exercitationem harum. Quisquam reiciendis consequuntur quia sint voluptate vitae rem.\n\nNeque qui distinctio sint qui amet odit. Distinctio quia ab autem fugit ratione officia qui. Error ratione non omnis eum. Nemo dolorum quaerat enim tenetur. Sunt atque tempore est error ad dicta.', 1),
(19, 'Porro praesentium dolorum aliquam voluptatem nobis. Fuga voluptatem quidem vel omnis exercitationem quas. Soluta similique velit error nobis tempore in. Beatae tenetur quo fugit repellendus delectus. Enim expedita consequuntur modi quia.', '019.png', '1995-02-14 05:30:48', '1972-05-18 02:01:12', 'Vel mollitia numquam quo voluptatem non. Incidunt occaecati maiores quo repudiandae. Quo nisi saepe earum qui enim a.\n\nSit eligendi voluptatem illum culpa vitae. Est est eos magni nostrum. Labore sint et quibusdam id accusantium qui repellendus.\n\nVel eum sed aliquid voluptas error. Tenetur et labore vel praesentium beatae. Cumque fuga impedit nulla facere velit.\n\nPerferendis autem ea sint molestiae numquam sint voluptatibus. Aut quam minus ex eos. Consequatur facilis quidem molestias ut dignissimos vitae.\n\nQuia eligendi dolorum tempore corporis aut excepturi. Voluptate iusto dolores quae possimus. Et tempore et laborum aut aut nobis. Sit officiis ratione dolorem architecto tenetur.\n\nTempore cum et commodi modi nesciunt nobis. Consequuntur sed est minus aspernatur vero et qui. Eum hic iure illo quaerat. Voluptatibus quia quis sapiente quod.\n\nQuae voluptatem expedita voluptate totam ut perferendis. Quo beatae sed dolore. Possimus eveniet est voluptas voluptatem alias est necessitatibus.\n\nVoluptas iure consequuntur nam aut saepe. Minus aut nisi eveniet nobis commodi aut minus. Temporibus aut et et velit reprehenderit. Accusantium natus voluptatem enim quasi provident.', 1),
(25, 'Réunion des parents', 'default.jpg', NULL, '2020-01-12 21:15:00', 'Nous organisons une réunion nous vous prions de être présent.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_id`, `course_id`, `created_at`, `amount`) VALUES
(1, 12, 15, '2019-10-02 18:27:25', 250),
(2, 69, 12, '2019-09-11 00:22:46', 900),
(3, 32, 7, '2019-09-22 22:18:34', 290),
(4, 50, 5, '2019-08-28 05:51:23', 330),
(5, 35, 13, '2019-09-25 23:11:46', 700),
(6, 35, 18, '2019-09-27 08:31:56', 300),
(7, 55, 9, '2019-08-28 20:02:31', 1600),
(8, 5, 17, '2019-07-24 03:41:43', 1000),
(9, 33, 9, '2019-09-08 16:10:26', 600),
(10, 70, 7, '2019-08-29 13:48:28', 1250),
(11, 15, 2, '2019-08-17 22:43:41', 1900),
(12, 18, 12, '2019-09-21 11:05:40', 1700),
(13, 35, 17, '2019-10-06 09:19:35', 1750),
(14, 2, 4, '2019-10-09 03:39:12', 680),
(15, 40, 18, '2019-09-28 01:07:46', 560),
(16, 15, 2, '2019-07-12 02:31:36', 1110),
(17, 63, 10, '2019-07-28 11:43:29', 740),
(18, 42, 11, '2019-08-16 05:15:26', 1700),
(19, 58, 9, '2019-10-03 04:55:58', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `last_log_at` datetime NOT NULL,
  `is_disabled` tinyint(1) NOT NULL,
  `role` json NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`, `last_log_at`, `is_disabled`, `role`, `image`, `image_updated_at`) VALUES
(1, 'Katlasos', 'Gazmen', 'Arifi', 'gazmen@domain.ext', '$argon2i$v=19$m=65536,t=4,p=1$ei9IaHk5bjN5NVJiY05aaw$71MDwzw1vc/uCPpAKHAnbEFe9HB8w8Cd/yODftlgXWo', '2019-08-14 12:25:59', '2019-12-15 09:29:19', '2020-01-10 18:19:40', 0, '[\"ROLE_SUPER_ADMIN\"]', '010m.jpg', '1999-04-16 16:36:24'),
(2, 'Patrick', 'Patrick', 'Marthus', 'patrick@domain.ext', '$argon2i$v=19$m=65536,t=4,p=1$dGZaU0QwWWExdTRPUDFUbQ$Xjl0JuTB0rJmxXV06QWBGu/I/mgf98l/oSlE+IhUBQc', '2019-07-14 00:26:48', '2019-12-14 02:07:44', '2020-01-10 18:19:40', 0, '[\"ROLE_ADMIN\"]', '012m.jpg', '1998-03-10 11:51:29'),
(3, 'laetitia.lamy', 'Margot', 'Langlois', 'margot.langlois@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$LlBsUnRnUUE4SThlNzdCWQ$5dM8GvYvdZSK4U8QhaDzoyb2GwBTyh8tCsaMfUOB2kA', '2019-10-07 02:54:56', '2019-11-12 20:13:55', '2020-01-10 18:19:41', 1, '[\"ROLE_PROFESSOR\"]', '010f.jpg', '1979-07-26 21:41:50'),
(4, 'eugene.arnaud', 'Thierry', 'Martinez', 'thierry.martinez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MmVQVldybEZySWVuNmNCYQ$muLmb7gmPDWrdcje8fyLX6jwbAkmACjlyviPj9vjGxM', '2019-08-25 18:36:24', '2019-12-14 09:48:54', '2020-01-10 18:19:41', 0, '[\"ROLE_ADMIN\"]', '010m.jpg', '2014-10-31 06:10:37'),
(5, 'vincent.timothee', 'Patrick', 'Boucher', 'patrick.boucher@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Q3RYNTJONGJQa2NQVW1Tdw$rFb5qCJnS9lRBPTw5w5ZJyNpU9BVFY1fRJYg8jzgc7M', '2019-08-12 19:23:50', '2019-12-26 16:12:03', '2020-01-10 18:19:41', 0, '[\"ROLE_USER\"]', '011m.jpg', '2017-09-02 19:29:26'),
(6, 'amelie67', 'Victor', 'Bertin', 'victor.bertin@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QmYuV0xGY2EwV0pDYjFySQ$kkD8JnFJrSCc5U6TTQoawwuZeOInwefqCD1+Q1Jqvi0', '2019-09-23 19:24:54', '2019-10-11 19:53:13', '2020-01-10 18:19:41', 1, '[\"ROLE_STUDENT\"]', '011m.jpg', '1991-11-30 21:48:38'),
(7, 'gilbert39', 'Adrien', 'Garnier', 'adrien.garnier@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$d1dsLkNZMEc5UXliQTZnVw$sscZ7ZFx2aDvcq1MleYGQTY+2fM52+tDU4PRm/GWF/s', '2019-08-23 03:42:32', '2019-10-17 02:49:50', '2020-01-10 18:19:42', 0, '[\"ROLE_PROFESSOR\"]', '011m.jpg', '1972-10-16 12:16:42'),
(8, 'ibailly', 'Alfred', 'Leduc', 'alfred.leduc@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eXRGa1kyVS5McHlUckJRdw$62zTskNLIpxultpX9e/IKMCE+dyO3zBeH8fPMNuphJ0', '2019-07-14 15:49:34', '2019-10-31 07:30:10', '2020-01-10 18:19:42', 0, '[\"ROLE_ADMIN\"]', '011m.jpg', '2002-09-20 16:54:07'),
(9, 'torres.etienne', 'Marcel', 'Etienne', 'marcel.etienne@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ajk0aWIySTBLcVpyQTluTg$tJzUQ4RecPVeg/8hm514HaYszYZVBLIlkA+9J0iSG4s', '2019-09-23 14:26:52', '2019-10-29 17:59:49', '2020-01-10 18:19:42', 0, '[\"ROLE_USER\"]', '012m.jpg', '2002-07-18 10:34:40'),
(10, 'eugene.langlois', 'Alphonse', 'Weber', 'alphonse.weber@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QVdXVFlhS01hNUl2a21xYQ$pxrKCxK4oVqB+s/ddCxX+++LVvRYgCMTktBxnTrW7ko', '2019-08-14 04:31:49', '2019-10-11 14:25:44', '2020-01-10 18:19:42', 0, '[\"ROLE_STUDENT\"]', '012m.jpg', '2010-01-26 08:25:14'),
(11, 'imbert.raymond', 'Camille', 'Benoit', 'camille.benoit@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TXgwMUdoUk1zVjYyOXE0TQ$/GeyPoDo+fcXKiLrexuAd9LLJujk/WDA7hHIGqJzosM', '2019-10-10 02:20:07', '2019-12-08 12:02:45', '2020-01-10 18:19:43', 0, '[\"ROLE_PROFESSOR\"]', '012f.jpg', '1996-08-26 23:07:05'),
(12, 'parent.stephane', 'Margot', 'Robin', 'margot.robin@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TFNQbVkuODhmTHllMHVvdQ$8AOfOWSDa9yarsdfYHkMVT9Nn8lefJWQt/Ea5TMR4zE', '2019-07-29 18:55:19', '2019-12-30 09:26:50', '2020-01-10 18:19:43', 0, '[\"ROLE_ADMIN\"]', '012f.jpg', '1987-07-08 18:37:37'),
(13, 'abouvier', 'Gilbert', 'Sauvage', 'gilbert.sauvage@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZWVISEdPZEViQVNWWmNtaw$AUkNijNILug/nkMf+7BjvODe4X/v+Nm4ejawp58MaSQ', '2019-07-21 23:01:17', '2019-12-12 15:32:56', '2020-01-10 18:19:43', 0, '[\"ROLE_USER\"]', '013m.jpg', '2000-02-08 09:17:36'),
(14, 'eric.guibert', 'Sébastien', 'Begue', 'sebastien.begue@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VVFSdGVWbkJxU210aGVCdg$Wx9vwA0aufr4bOd3wmaDMPK7+Hpl6drcKbKRrmb6FeM', '2019-08-21 14:03:21', '2019-12-26 04:01:01', '2020-01-10 18:19:43', 0, '[\"ROLE_STUDENT\"]', '013m.jpg', '2010-05-13 08:58:37'),
(15, 'vallee.roland', 'Théophile', 'Durand', 'theophile.durand@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YkFETFFoR0tnMEZnZWFxMA$NGzrwhkfjCpNN1Eertjo1cWmtnwyoFLNU00tg6lVwpA', '2019-08-18 12:00:23', '2019-12-12 17:18:19', '2020-01-10 18:19:43', 0, '[\"ROLE_PROFESSOR\"]', '013m.jpg', '1994-09-03 12:02:08'),
(16, 'ines.thomas', 'Matthieu', 'Legrand', 'matthieu.legrand@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QVZEOWZOMHFMVm5yNklWTg$n9D1+S0uzLu1/u/Gtm8VJk4JQJeO7rNWJAhc0WdIPKc', '2019-08-29 01:47:55', '2019-12-23 15:52:19', '2020-01-10 18:19:44', 0, '[\"ROLE_ADMIN\"]', '013m.jpg', '1975-12-10 23:02:14'),
(17, 'cvasseur', 'Éric', 'Leveque', 'eric.leveque@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WFBXWjNqOWlOQ2hMcEx4TQ$tzyhx4vQ+40lHSoTROvKW5EbJS8jZfMqtKp/bde7uqM', '2019-07-13 21:31:44', '2019-11-30 17:36:43', '2020-01-10 18:19:44', 0, '[\"ROLE_USER\"]', '014m.jpg', '2009-02-02 17:42:31'),
(18, 'lmunoz', 'Raymond', 'Nicolas', 'raymond.nicolas@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$a3U3TkNHVEI2WHVXTVN6Rg$/lqdxuCPUQCCkfoZcBZICRkD5A8Fos+1ypaTJzFyFak', '2019-08-19 09:05:54', '2019-11-14 20:49:41', '2020-01-10 18:19:44', 0, '[\"ROLE_STUDENT\"]', '014m.jpg', '1992-03-19 11:27:41'),
(19, 'luce02', 'Michèle', 'Baron', 'michele.baron@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VENueW9TdjYuL05jbk5Ddg$8LDpk4Khf6xPMCr0rFVZZiknI9p92PcIlDmah2SAISc', '2019-08-12 22:18:14', '2019-12-18 01:41:12', '2020-01-10 18:19:44', 0, '[\"ROLE_PROFESSOR\"]', '014f.jpg', '1989-12-10 12:01:47'),
(20, 'lejeune.renee', 'Brigitte', 'Philippe', 'brigitte.philippe@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TFowai9Sdkw3SndnQ3U5RA$+RxscG0wxGMc1YZHuLzG+99nB/b3MYtiRI5MLQPkF5U', '2019-09-19 02:28:17', '2020-01-09 17:25:27', '2020-01-10 18:19:45', 0, '[\"ROLE_ADMIN\"]', '014f.jpg', '2009-11-12 22:58:42'),
(21, 'audrey.andre', 'Victoire', 'Pruvost', 'victoire.pruvost@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$L1l2N1ozTTB5MTcvYkZFQg$FtQEY5a+QzprQzThKE2aZcaCXmbAnjd6jetCvtPT8t4', '2019-10-02 23:31:11', '2020-01-02 21:15:44', '2020-01-10 18:19:45', 0, '[\"ROLE_USER\"]', '015f.jpg', '1985-12-05 06:03:13'),
(22, 'rousset.benoit', 'Jean', 'Bouvier', 'jean.bouvier@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Wi5Ja01ObWpuZkxNOTJwLw$AuiMO9/VHEWwLmvgQ09N19sg3q8LqJA5X/cC3jtnyek', '2019-09-27 05:41:50', '2019-11-20 08:37:20', '2020-01-10 18:19:45', 0, '[\"ROLE_STUDENT\"]', '015m.jpg', '2015-06-29 19:24:53'),
(23, 'camus.yves', 'Isabelle', 'Andre', 'isabelle.andre@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Z0dHWEhxMkZHWGhaRU5mWg$qZSK1ZA6dNAmgnVve/DT+XEOFaLmUYk83L5po/m+AMU', '2019-09-28 10:56:16', '2019-12-04 20:20:32', '2020-01-10 18:19:45', 0, '[\"ROLE_PROFESSOR\"]', '015f.jpg', '1990-08-11 05:36:48'),
(24, 'michelle.jourdan', 'Renée', 'Leveque', 'renee.leveque@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$S2sxUVVFdVMvYTRJTXlnOA$wCrkhYZ5rI0TOCF3Eui+ZKBKlu7+UDVfJ68PnlZpB8M', '2019-09-11 14:11:26', '2019-12-27 10:38:02', '2020-01-10 18:19:46', 0, '[\"ROLE_ADMIN\"]', '015f.jpg', '2015-09-05 01:09:57'),
(25, 'adam.eleonore', 'Denis', 'Bernard', 'denis.bernard@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UGwzTHNiY0xnVnlRcEtyTQ$iH40NbDVoqmzkF4vzOtcf4CqSd4paskHKeTiOCv+seA', '2019-08-15 06:42:21', '2019-10-15 22:17:54', '2020-01-10 18:19:46', 0, '[\"ROLE_USER\"]', '016m.jpg', '1994-02-03 16:35:41'),
(26, 'pauline.guyon', 'Bernard', 'Dumas', 'bernard.dumas@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$OHJWMGx1TDFDa2VMd0tkbg$zozRW7blSH+C+v4R2xT3WjIxSoymcztQQE66Ls1O5eA', '2019-08-28 21:45:29', '2019-10-11 09:16:30', '2020-01-10 18:19:46', 0, '[\"ROLE_STUDENT\"]', '016m.jpg', '1993-07-14 05:08:42'),
(27, 'dmarchal', 'Gérard', 'Roche', 'gerard.roche@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$L09VQkNXQ2JUMjNvcWlvQg$LKqDYOddmSU3qatFIZtN1HDGQIPPoeQCiGXTDwF6Lb0', '2019-09-18 15:30:51', '2019-10-23 15:36:39', '2020-01-10 18:19:46', 0, '[\"ROLE_PROFESSOR\"]', '016m.jpg', '2019-04-11 13:30:19'),
(28, 'bpineau', 'Renée', 'Traore', 'renee.traore@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$d1ZPYk45MVRCUFIxMzNkZA$zSqG7TPLb2hdC8dJSAR8UzdFvxOBkjtTDozne0UHORM', '2019-07-14 12:40:18', '2019-12-05 16:30:19', '2020-01-10 18:19:47', 0, '[\"ROLE_ADMIN\"]', '016f.jpg', '2011-03-03 13:19:02'),
(29, 'charles88', 'Jean', 'Perrin', 'jean.perrin@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Nlc5Tld4S015cmJQaUMwcg$SFS9GVEELrq1frjc/XRecQo/uvTHaFlgW/2qXRMd6so', '2019-10-08 07:20:10', '2019-12-16 11:55:35', '2020-01-10 18:19:47', 1, '[\"ROLE_USER\"]', '017m.jpg', '2006-12-02 05:52:00'),
(30, 'laurence39', 'Denis', 'Laine', 'denis.laine@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SjM1QVF4VDY1dnRrNXBnUg$ETyKwJXoSyLET0ck45L07c1UMEqsSrxKsiLe0SJyQgE', '2019-09-22 05:50:42', '2019-10-31 01:22:14', '2020-01-10 18:19:47', 0, '[\"ROLE_STUDENT\"]', '017m.jpg', '1986-12-06 16:03:28'),
(31, 'paul79', 'Christine', 'Mercier', 'christine.mercier@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Y2w5MWJXbjM4YzVTbU8ydA$bFP8i7Fc0TGbA/n2wnnKxZp0tbUKLW6N6ZwwXPkzK8E', '2019-10-10 04:41:29', '2019-12-14 04:13:33', '2020-01-10 18:19:47', 0, '[\"ROLE_PROFESSOR\"]', '017f.jpg', '1984-12-28 01:32:26'),
(32, 'vlaporte', 'Renée', 'Godard', 'renee.godard@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dzF5WGl2R1g2ZXRWMnROQw$imQtVeGrXvWaF9lyRMWl5Os0o+fl9bBJnDAxtabmny0', '2019-08-24 08:32:31', '2019-12-25 19:48:08', '2020-01-10 18:19:48', 0, '[\"ROLE_ADMIN\"]', '017f.jpg', '1995-02-21 00:44:36'),
(33, 'becker.martin', 'Margaux', 'Pascal', 'margaux.pascal@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WmI0YjhuUjFzQTdLcUV6VA$yBrmofaGrm4LGZUXbKgdDYjI1Cq+B11z5Rd8Ef++1h8', '2019-09-28 11:14:29', '2020-01-02 09:24:01', '2020-01-10 18:19:48', 0, '[\"ROLE_USER\"]', '018f.jpg', '1994-12-04 16:47:18'),
(34, 'arnaude.gay', 'Dorothée', 'Bazin', 'dorothee.bazin@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$emVMVTR5YjFLUWZUc2xnZA$fg7ZchS2SFHaCMNtP6QLwPRUyukELc4H3LLgeJNvZGM', '2019-07-22 04:03:35', '2019-10-16 21:28:29', '2020-01-10 18:19:48', 0, '[\"ROLE_STUDENT\"]', '018f.jpg', '1999-05-21 15:39:34'),
(35, 'rdaniel', 'Matthieu', 'Aubry', 'matthieu.aubry@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VDdrNVBCRVFaREprOHFxWQ$bEMMhfMAjVcu6Ndg/eAqy9Bf927Osn/6geviI2kR1PY', '2019-07-19 14:28:47', '2019-10-18 08:37:16', '2020-01-10 18:19:48', 0, '[\"ROLE_PROFESSOR\"]', '018m.jpg', '1991-11-05 13:28:24'),
(36, 'emile25', 'Julien', 'Nguyen', 'julien.nguyen@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$cy5ybGhwVmNtR2VOVGpvdA$DSW799hHB61gYxpROsMgO77ywI3iCq/WEjt5Lbs9rOY', '2019-07-20 17:53:02', '2019-10-21 21:21:44', '2020-01-10 18:19:49', 0, '[\"ROLE_ADMIN\"]', '018m.jpg', '1987-09-08 11:44:10'),
(37, 'dominique.raymond', 'Guy', 'Thomas', 'guy.thomas@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$L21YWnc0MVYwbFRyakZUNQ$xrIotjDcEZ8oOTlD+N1yE7IpLJwou51wH3ZsclAIrxE', '2019-08-17 08:11:19', '2019-11-03 08:21:29', '2020-01-10 18:19:49', 0, '[\"ROLE_USER\"]', '019m.jpg', '1988-02-08 13:58:02'),
(38, 'gabriel09', 'Thibault', 'Martinez', 'thibault.martinez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bVNxR2dqd0xDMTA1UEFweg$0FHujLZB48jMZrllNW8ES+nRbzdXs+YyfeYNrgfIfmw', '2019-10-09 07:01:26', '2019-11-08 23:55:34', '2020-01-10 18:19:49', 0, '[\"ROLE_STUDENT\"]', '019m.jpg', '1987-09-07 23:48:11'),
(39, 'manon.briand', 'Lucy', 'Dumont', 'lucy.dumont@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$akFBQXkza3J5azEvb2JkQQ$jFFUuR0kQ3g3DTw8GO6qmJPlcxbHM4ceadbgWPILC1g', '2019-07-13 13:25:31', '2019-11-24 17:29:42', '2020-01-10 18:19:49', 0, '[\"ROLE_PROFESSOR\"]', '019f.jpg', '1988-05-01 14:29:55'),
(40, 'theophile65', 'Antoinette', 'Royer', 'antoinette.royer@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RWdRL3Y0ak5RRXNCYzZ3ag$Uqp3LHspHK8EBZxYYuvmSg6UtnI3Fc/8BZh4PJYgCeU', '2019-08-10 09:35:14', '2019-10-30 09:20:37', '2020-01-10 18:19:49', 0, '[\"ROLE_ADMIN\"]', '019f.jpg', '1981-08-02 18:45:03'),
(41, 'renee29', 'Sylvie', 'Dufour', 'sylvie.dufour@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZEl5VldhTGZkS3hFUUZrUQ$CBgZBM+g4Jl8hDFHMl86yS4riD4aOJk+bl4C8iM4cZw', '2019-07-31 20:22:00', '2019-12-15 12:58:00', '2020-01-10 18:19:50', 0, '[\"ROLE_USER\"]', '020f.jpg', '2014-03-17 06:36:50'),
(42, 'marie.christelle', 'Marthe', 'Vasseur', 'marthe.vasseur@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$S2VxVjZFeml0aVdHYzlSUQ$48zaLR363xApXoZe1lkSR5C6c1slOvTS9J4JY5wP6d8', '2019-08-06 20:05:05', '2019-12-12 02:57:35', '2020-01-10 18:19:50', 1, '[\"ROLE_STUDENT\"]', '020f.jpg', '1978-04-20 15:51:27'),
(43, 'mathilde96', 'Jean', 'Pottier', 'jean.pottier@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$czh6ck01d25YTElMTHdyQw$idPcIa42D5tA5J1i6VHLoRyrQFPq17SBWFwYSDYHf2s', '2019-10-03 07:44:07', '2019-12-01 19:01:15', '2020-01-10 18:19:50', 0, '[\"ROLE_PROFESSOR\"]', '020m.jpg', '2004-02-23 02:32:48'),
(44, 'christophe.labbe', 'Arthur', 'Laroche', 'arthur.laroche@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZEhvNkJjcWh5Qi9HOGdUaQ$kHovAKF/L3xxUy9mLJeV1is63wekHgW3MbhtwmAsPxg', '2019-09-22 14:06:44', '2020-01-03 04:26:27', '2020-01-10 18:19:50', 0, '[\"ROLE_ADMIN\"]', '020m.jpg', '1972-09-24 10:06:50'),
(45, 'duhamel.manon', 'Suzanne', 'Sauvage', 'suzanne.sauvage@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eTRqRWhsNkMyOFlZNzloTw$hceU3JrUEuc0lLxpJHy7/SJmwQdWb1yBqcWUY2OpVVA', '2019-08-12 14:59:37', '2019-11-06 07:04:26', '2020-01-10 18:19:51', 0, '[\"ROLE_USER\"]', '021f.jpg', '2019-03-07 09:27:44'),
(46, 'delaunay.jules', 'Benoît', 'Fernandez', 'benoit.fernandez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MHlPSjJHcW12Q2lRaVUwYQ$D46gjug3ZDX5olRk01d+98JwZclnmqSXowx1kyrOVP8', '2019-08-09 13:23:30', '2019-11-04 00:09:12', '2020-01-10 18:19:51', 0, '[\"ROLE_STUDENT\"]', '021m.jpg', '1990-10-11 03:30:04'),
(47, 'jdesousa', 'Marthe', 'Carlier', 'marthe.carlier@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NEFOQ2YuckR6TXVvb1puRA$l5jlswBhhyMQA984cyFrQi3cNL80T65oj3JYkyoa8Ag', '2019-08-19 11:53:00', '2020-01-02 06:05:05', '2020-01-10 18:19:51', 0, '[\"ROLE_PROFESSOR\"]', '021f.jpg', '1988-05-03 13:32:40'),
(48, 'dlegrand', 'Brigitte', 'Vasseur', 'brigitte.vasseur@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$L2EyaFlDZ1BjRUVyRkVEbQ$s29AewYcf3lBZSsdZSm66Y4irU/t7+LM7DVxtgiJoIo', '2019-09-22 22:05:11', '2019-11-30 18:52:51', '2020-01-10 18:19:51', 0, '[\"ROLE_ADMIN\"]', '021f.jpg', '1972-08-05 19:27:53'),
(49, 'perret.david', 'Chantal', 'Mercier', 'chantal.mercier@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NnB0MFhXZnhFT09qNDhnbQ$lu/ciqIjvLUsTnF6LXVfe4yGBId9EjwgmIrAYgVsqiA', '2019-09-12 12:49:14', '2019-11-14 20:56:00', '2020-01-10 18:19:52', 0, '[\"ROLE_USER\"]', '022f.jpg', '1988-02-06 15:00:47'),
(50, 'morvan.robert', 'Constance', 'Nguyen', 'constance.nguyen@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eHlUY3F0NnpINmdyYy5vVQ$nxxHWA2Gyp/2WeV3N8yfpdCdArpBhpBxX6Ym69QHSHU', '2019-08-23 09:23:56', '2019-11-20 09:39:45', '2020-01-10 18:19:52', 0, '[\"ROLE_STUDENT\"]', '022f.jpg', '2015-06-18 17:26:54'),
(51, 'marine.deoliveira', 'Agathe', 'Moreno', 'agathe.moreno@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Z0xuV2tpVE1Xb1ZZbXBXMg$GoRl1dM2l70ysD+VJ7oLhPFo1fZ7k3kteoRNHc9lRQg', '2019-10-09 17:24:31', '2019-12-29 01:15:22', '2020-01-10 18:19:52', 0, '[\"ROLE_PROFESSOR\"]', '022f.jpg', '1978-08-02 08:35:44'),
(52, 'gdelahaye', 'Robert', 'Jacob', 'robert.jacob@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$aFpySC9tVGxaZm9WVi8vaQ$3Eb0PfuJg9FYaE5eRVB5Np2+BMiNwH1mDugeR2WkISg', '2019-07-15 00:18:25', '2019-12-02 10:37:17', '2020-01-10 18:19:52', 0, '[\"ROLE_ADMIN\"]', '022m.jpg', '1992-08-11 23:10:28'),
(53, 'mhamon', 'Guillaume', 'Paris', 'guillaume.paris@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MTVuTHZKY0VJai9tTW12RQ$/NZWZgoGj59nt70A6vImJ6B6/GJ2I+Tbv4GzaFff328', '2019-07-17 14:52:55', '2019-12-12 18:26:52', '2020-01-10 18:19:53', 0, '[\"ROLE_USER\"]', '023m.jpg', '1988-10-10 16:34:31'),
(54, 'dlesage', 'Camille', 'Benard', 'camille.benard@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SG9DZFB2UEF4TjRNSHo1UA$awalMXltffX+xDvYSmaYrUmLUcK8Ik45B/Gj+sxRwlI', '2019-10-07 21:45:53', '2019-10-14 15:47:46', '2020-01-10 18:19:53', 0, '[\"ROLE_STUDENT\"]', '023f.jpg', '2019-03-23 11:49:09'),
(55, 'mdacosta', 'Frédérique', 'De Sousa', 'frederique.de-sousa@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TEF3VWJwWk4zT3ZYNHJWbg$0hSRRS8qRcqf5iwOrJ27aMT15gqa+NCYucT1lXBN9xg', '2019-08-22 04:53:19', '2019-11-17 21:41:00', '2020-01-10 18:19:53', 0, '[\"ROLE_PROFESSOR\"]', '023f.jpg', '2019-08-05 19:53:59'),
(56, 'victoire.bourdon', 'Mathilde', 'Rodrigues', 'mathilde.rodrigues@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$N1JSTGExMEFEdEYwRXZHRw$oGwI87zHUqG4cN6GiHX8I4meRuhlxKGN8emTpeSpVbk', '2019-08-03 07:29:37', '2019-11-19 15:17:47', '2020-01-10 18:19:53', 0, '[\"ROLE_ADMIN\"]', '023f.jpg', '2000-12-03 22:33:10'),
(57, 'adrien.courtois', 'Alphonse', 'Georges', 'alphonse.georges@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Yk9xUXFiN2d0Z0QuVkI4Mg$dDUl/alAdb1hWkP9wmUYnMifkcvLTIBuP9Fdbll9V5o', '2019-10-01 07:59:47', '2019-10-30 13:24:09', '2020-01-10 18:19:54', 0, '[\"ROLE_USER\"]', '024m.jpg', '2019-11-12 07:58:13'),
(58, 'ydevaux', 'Paul', 'Guyon', 'paul.guyon@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$d0gvLndJZDNMQ3RLc0Iwcw$eVz3WIPnPOlhNAXpuBhOA1baVoXPaLInLlAyHYIvh+o', '2019-09-16 04:45:11', '2019-12-07 17:02:12', '2020-01-10 18:19:54', 0, '[\"ROLE_STUDENT\"]', '024m.jpg', '1995-12-10 05:32:34'),
(59, 'maryse.rousset', 'Dominique', 'Dupuy', 'dominique.dupuy@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZWJWTGJRcmwxWVZMOGZDVg$9b2thcIwaadGj1QMbo9xM19tPhK7RIKz6Goy6FqKPcI', '2019-09-20 10:50:18', '2020-01-06 09:05:36', '2020-01-10 18:19:54', 0, '[\"ROLE_PROFESSOR\"]', '024m.jpg', '2014-06-05 17:40:37'),
(60, 'zrobin', 'William', 'Le Goff', 'william.le-goff@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MUc1TVMxYm1wYThuSXlPQw$ummCBD52w0oAIp7KPXUY5FeNOq7NEVv09mDkywE0oaQ', '2019-08-07 00:33:07', '2019-12-04 23:53:01', '2020-01-10 18:19:54', 0, '[\"ROLE_ADMIN\"]', '024m.jpg', '2000-04-08 04:55:06'),
(61, 'maggie46', 'Pénélope', 'Perrot', 'penelope.perrot@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WVQ1WmxqeXBGbUxBQjhoVQ$7c+SX1Tlyx/bgEqVsT2gr+IIs92IjyYPshEf4pBM2fA', '2019-08-09 22:20:54', '2019-10-29 20:45:50', '2020-01-10 18:19:55', 0, '[\"ROLE_USER\"]', '025f.jpg', '2015-05-21 23:12:35'),
(62, 'cecile99', 'Suzanne', 'Millet', 'suzanne.millet@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bExYbTVNYkdOanZDRGYvdw$dkN9aZ0CZWn3aXdf0Jxab5oV+Aeud84YIEtRKG/5ZIc', '2019-09-07 07:39:44', '2019-10-20 10:01:31', '2020-01-10 18:19:55', 0, '[\"ROLE_STUDENT\"]', '025f.jpg', '1998-08-27 15:07:26'),
(63, 'nathalie.etienne', 'Julien', 'Becker', 'julien.becker@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$MVdKaVhOT3NHb05iMWxmVA$+Cje04KpH4Rq+FuwtIaD6AI013yN5JF8PWdgL+1m6lc', '2019-09-11 18:28:56', '2019-11-18 16:53:23', '2020-01-10 18:19:55', 0, '[\"ROLE_PROFESSOR\"]', '025m.jpg', '2016-02-07 09:29:32'),
(64, 'dupuis.julie', 'Auguste', 'Berger', 'auguste.berger@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SFMuekhzeXdUQVZLMVlBMA$p7m5Q3OV+fxaDITQ9eGb8r1Kdqa5+RMCJUZN6P7xQBA', '2019-10-05 10:46:25', '2019-12-02 09:53:43', '2020-01-10 18:19:55', 0, '[\"ROLE_ADMIN\"]', '025m.jpg', '2017-12-16 19:09:29'),
(65, 'bernadette27', 'Sébastien', 'Lamy', 'sebastien.lamy@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VHJ1NE1xQXQ4S3VHODZmZA$fgp9VZG9LjqEwfwB1vY1lleo1j1rdTBnNsIszdSBYYU', '2019-09-01 09:56:35', '2019-10-17 07:47:48', '2020-01-10 18:19:55', 0, '[\"ROLE_USER\"]', '026m.jpg', '2010-08-22 06:53:06'),
(66, 'couturier.augustin', 'Xavier', 'Bodin', 'xavier.bodin@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZktWb1p1Q1c2RC9PSlpTNQ$nJc6kAeQClRAOuatChU3gqNtUi2f8ApTwZ641DJhcGY', '2019-09-19 18:20:43', '2020-01-08 06:41:40', '2020-01-10 18:19:56', 0, '[\"ROLE_STUDENT\"]', '026m.jpg', '1984-04-18 06:50:56'),
(67, 'jacqueline14', 'Maggie', 'Auger', 'maggie.auger@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$TWVXT0w1S2RvZHZMV2o2Sw$/Yy9ko8VI26eLse/71YvqjjMdFhGCG/C1VW+XOSqPQg', '2019-08-23 00:17:32', '2019-12-28 18:40:47', '2020-01-10 18:19:56', 0, '[\"ROLE_PROFESSOR\"]', '026f.jpg', '1978-09-15 21:02:49'),
(68, 'ohernandez', 'Céline', 'Lopes', 'celine.lopes@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$S2h0SmNlVVhvT28zMjRWbQ$bFKI3XavJ2pGG8cY0UvVGwwjFNXqNCte6iz1kY4pY30', '2019-07-18 17:30:43', '2019-12-26 01:30:53', '2020-01-10 18:19:56', 0, '[\"ROLE_ADMIN\"]', '026f.jpg', '1991-12-25 07:55:31'),
(69, 'lenoir.philippine', 'Laurent', 'Joly', 'laurent.joly@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Nm5KNWNzMFJ6T1NWOEhKYQ$wP8VKdNJshEs3Urid0tc/sQkZOBTZvMuGMOozpFOE0M', '2019-09-09 05:19:09', '2019-12-14 18:40:28', '2020-01-10 18:19:56', 0, '[\"ROLE_USER\"]', '027m.jpg', '1988-04-25 01:49:08'),
(70, 'franck28', 'Alice', 'Lenoir', 'alice.lenoir@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UWNiUFRyOTB2R1liMUdJMw$sMYfdDtrxqSe4Fz5pNxRRjnKDHrexM91RTFXb/ygm0I', '2019-08-15 19:37:57', '2019-12-23 21:52:40', '2020-01-10 18:19:57', 0, '[\"ROLE_STUDENT\"]', '027f.jpg', '1998-08-02 13:10:18'),
(71, 'emmanuel16', 'Laure', 'Thibault', 'laure.thibault@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eDF4dnhONFBtVXBUZzIvNw$oVBzzxp5kucYu0+omX8qdgeG7mG6vSkb0xrKUiqEZZs', '2019-07-20 23:23:23', '2019-11-03 06:35:50', '2020-01-10 18:19:57', 0, '[\"ROLE_PROFESSOR\"]', '027f.jpg', '2006-04-17 15:58:07'),
(72, 'anastasie03', 'Suzanne', 'Michaud', 'suzanne.michaud@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$cll2Q0JQSUFwUlAxbGZRMw$XRIVw4/G6QvMJ/cuMBEwSQhwVO2CB7nCNTUf49aOPtA', '2019-07-16 01:38:33', '2019-10-24 14:58:20', '2020-01-10 18:19:57', 0, '[\"ROLE_ADMIN\"]', '027f.jpg', '2004-04-02 17:10:28'),
(73, 'edouard.imbert', 'Véronique', 'Blanchet', 'veronique.blanchet@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$dGNqYXIzeGx1NlVrd3ZEcQ$+bJ5tFvQ4yopaKK1lNN04LeU1dTQGjpKHHmCmWfM3LI', '2019-08-19 21:29:09', '2019-10-14 06:01:43', '2020-01-10 18:19:57', 0, '[\"ROLE_USER\"]', '028f.jpg', '2018-06-13 07:06:32'),
(74, 'marc49', 'Margot', 'Perez', 'margot.perez@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZkkxVUpLVnNVQ0NYQ3B5WA$Jj6lLH+D1AXc3c7X6l2+Li43jSD5sI+/jbfoq0XTEzk', '2019-10-06 00:52:44', '2019-11-30 12:07:49', '2020-01-10 18:19:58', 1, '[\"ROLE_STUDENT\"]', '028f.jpg', '1981-09-26 17:36:13'),
(75, 'dacosta.danielle', 'Julie', 'Coulon', 'julie.coulon@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ZEEwM1R1Y2k4dGEvRDA3Uw$StUEp/Pqtz1+jTob9Gg0gm8uYBlIdzMtRvnecFH5Lzs', '2019-09-09 23:53:46', '2020-01-07 18:18:03', '2020-01-10 18:19:58', 0, '[\"ROLE_PROFESSOR\"]', '028f.jpg', '2000-01-31 08:30:12'),
(76, 'reynaud.maryse', 'Stéphane', 'Herve', 'stephane.herve@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$UnV5OVpiWDF1SldXSjBxdw$tGwB9BUktnV1L5NF0DfeUf5CvumimA7qANQs4WGegpA', '2019-08-11 22:50:34', '2019-11-13 08:52:31', '2020-01-10 18:19:58', 0, '[\"ROLE_ADMIN\"]', '028m.jpg', '2007-05-03 18:45:07'),
(77, 'User', 'User', 'User', 'user@domain.ext', '$argon2i$v=19$m=65536,t=4,p=1$dFJLdDIyYUlWREd1UTdLOQ$zVIpnyN/mvaaqIRT+qaRcGPXgRc1gkLnYHiwQOWBJnc', '2020-01-14 16:31:54', '2020-01-14 16:31:54', '2020-01-14 16:31:54', 1, '[\"ROLE_USER\"]', 'default.jpg', '2020-01-14 16:31:55'),
(78, 'Professor', 'Professor', 'Professor', 'professor@domain.ext', '$argon2i$v=19$m=65536,t=4,p=1$cGx0LlZHSXRYMGxIS0UyWA$xTzWnpUoM4jRzDpMVV22WpTzB5x81ktkGw5Vfq2ECmU', '2020-01-14 16:38:33', '2020-01-14 16:38:33', '2020-01-14 16:38:33', 0, '[\"ROLE_USER\"]', 'default.jpg', NULL),
(79, 'Quentin', 'Quentin', 'Degols', 'quentin@domain.ext', '$argon2i$v=19$m=65536,t=4,p=1$RnEuYi5HaFJTZVNYa003NA$377vI2isdWKzwaPu3I53utanEVWluNk9SFzCWLJ29G0', '2020-01-14 16:47:31', '2020-01-14 16:47:31', '2020-01-14 16:47:31', 0, '[\"ROLE_USER\"]', 'default.jpg', NULL),
(82, 'Student', 'Student', 'Student', 'student@domain.ext', '$argon2i$v=19$m=65536,t=4,p=1$U2E4RE1TSzZXaHRjZkY3Tw$h62hWCC/9A17Tr9lMHIPf4hxDw8O6btBcqpAVU7NeVk', '2020-01-20 08:53:26', '2020-01-20 08:53:26', '2020-01-20 08:53:26', 0, '[\"ROLE_STUDENT\"]', 'default.jpg', NULL),
(83, 'Testons', 'Testons', 'Testons', 'Testons@domain.ext', 'password', '2020-01-21 01:52:04', '2020-01-21 01:52:04', '2020-01-21 01:52:04', 0, '[\"ROLE_PROFESSOR\"]', '01986f04396ca502d3f020ea4ca2ddb8dc487d5f3d-5e2659443dcd9022642944.jpg', '2020-01-21 01:52:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526CA76ED395` (`user_id`),
  ADD KEY `IDX_9474526C591CC992` (`course_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_169E6FB912469DE2` (`category_id`),
  ADD KEY `IDX_169E6FB95FB14BA7` (`level_id`),
  ADD KEY `IDX_169E6FB97D2D84D5` (`professor_id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_level`
--
ALTER TABLE `course_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_62A8A7A7A76ED395` (`user_id`),
  ADD KEY `IDX_62A8A7A7591CC992` (`course_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_level`
--
ALTER TABLE `course_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `FK_169E6FB912469DE2` FOREIGN KEY (`category_id`) REFERENCES `course_category` (`id`),
  ADD CONSTRAINT `FK_169E6FB95FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `course_level` (`id`),
  ADD CONSTRAINT `FK_169E6FB97D2D84D5` FOREIGN KEY (`professor_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `FK_62A8A7A7591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `FK_62A8A7A7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
