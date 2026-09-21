-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2026 at 10:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ut deleniti quaerat illo qui.', 'Maiores veritatis vitae dicta nisi tempore quia amet. Et dolorum labore sit sequi expedita. Dolore velit voluptatibus blanditiis ut.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(2, 'Ut fuga et soluta quia tempore et.', 'Atque odit quod qui ut dolorem consequatur. Atque sit libero et aut eos officia ipsam. Non unde iure asperiores maiores quas.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(3, 'Libero ipsam voluptatem a doloremque expedita.', 'A quod excepturi debitis blanditiis ex ipsam. Quia soluta eos ut quia labore id. Sequi soluta vero cum earum earum facere. Corrupti aut non ipsa.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(4, 'Voluptatem in qui et beatae fugiat a.', 'Molestiae enim autem debitis esse eos nobis aspernatur. Et quam qui sit necessitatibus rerum. Dignissimos quis et quo quis non.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(5, 'Consequatur voluptatibus voluptatem et voluptatem velit est temporibus optio.', 'Ipsum est itaque molestiae sunt sint. Neque quia delectus quod qui illo. Aut natus fugiat consequatur esse rerum deserunt ratione. Excepturi ut cum reiciendis voluptatum cumque voluptatem at.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(6, 'Dolores nam sed deserunt voluptas vel assumenda nemo.', 'Aut ex optio cum odit voluptas qui inventore id. Id aut quia nihil quidem. Quasi non praesentium ut nihil id. Non ducimus sint ratione id quasi labore.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(7, 'Et dolorum dolore voluptates animi deleniti et.', 'Ea architecto perferendis dicta dolor voluptatem omnis unde. Dolor dolorem aliquid eos voluptatem. Ad est ab maxime. Ipsa est blanditiis molestias est est eum. Aut et et voluptatem aut eaque ipsam eveniet quis.', 1, '2026-08-24 00:30:57', '2026-08-24 01:31:02'),
(8, 'Voluptatem quis itaque non.', 'Sunt corporis omnis reiciendis ut. Optio rerum ex ab nisi. Sit voluptate libero dolorem aut quo at.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(9, 'Assumenda id suscipit soluta neque.', 'Officiis quas et nobis voluptatem quidem ea sunt. Ratione aut ut nostrum omnis libero sequi. Doloribus blanditiis ut minus sit. Expedita magni nostrum fugiat veniam blanditiis. Ut dolor voluptatem atque.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(10, 'Non porro et minima numquam quas non eligendi autem.', 'Recusandae consectetur laborum ex explicabo libero. Cumque voluptatem quia ex neque mollitia aspernatur saepe.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(11, 'Sunt corporis aut iusto pariatur corrupti maxime.', 'Ipsa veniam velit eos at esse voluptatem quae. Quisquam dolor eaque cum adipisci. In eligendi molestiae unde accusantium non consequuntur.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(12, 'Quo omnis possimus accusamus numquam et nihil eligendi.', 'Sint hic ipsam ut quas eos quaerat vitae. Doloribus ad dolores ducimus ratione tempore eligendi quos. Minima quo inventore veritatis accusantium consectetur voluptatibus molestiae.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(13, 'Vel aut aliquam fugiat.', 'Officia est nobis sit. Consequatur et sed id. Natus enim dolore laudantium aut et. Occaecati et at rem quae dicta explicabo incidunt.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(14, 'Cumque tempore ipsa amet repellat inventore quo eos autem.', 'Quia suscipit quis quia minus. Omnis sapiente et quas eum. Aut est voluptatibus ipsum sed quia dolorum esse ut.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(15, 'Itaque autem tempore magni et tenetur.', 'Veritatis libero sit expedita consequatur assumenda vel est minima. Nesciunt voluptas quis laboriosam repudiandae sed voluptatibus. Quia est exercitationem laborum delectus error.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(16, 'Assumenda commodi perferendis sit.', 'Et aut porro eum amet hic aliquam eius amet. Quam aut distinctio sit rerum accusantium nulla aspernatur. Qui modi excepturi sit iusto. Perferendis voluptas quia perspiciatis voluptatem.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(17, 'Reprehenderit itaque nulla molestiae reprehenderit quidem adipisci.', 'Aut omnis et sunt dolores. Iste ut hic quod autem voluptatibus quia perferendis. Quia et quo quas placeat eum possimus mollitia. Magnam voluptatem optio error quos facilis et.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(18, 'Sapiente nobis inventore adipisci voluptatem quidem quam itaque.', 'Rerum alias aut harum ut. Rem dolorum quod asperiores nesciunt modi nihil. Quod pariatur quia illo incidunt itaque necessitatibus neque.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(19, 'Esse natus sint sit error et.', 'Inventore quod eligendi illum corporis. Officia provident molestias et similique. Labore et ipsa doloribus ipsum est voluptatum. Velit fuga molestiae porro consectetur cumque nobis.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(20, 'Sapiente eos at nostrum velit et.', 'Nihil dolor aut ut autem occaecati dolorum. Velit quas qui quod. Vero aut et rem impedit sapiente. Soluta consequatur id exercitationem quis est non porro.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(21, 'Sed dolore iste temporibus qui veniam quia consectetur.', 'At aperiam iste earum explicabo. Consequatur qui praesentium quaerat amet omnis dolorem. Veniam veritatis et repellendus voluptas et. Magnam iusto quam vitae repellendus quo optio quasi.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(22, 'Dolorem non reiciendis distinctio vel.', 'At ipsa delectus fugit id. Quos libero ut enim. Voluptatem sed enim qui id. Vero architecto architecto accusamus quasi. Necessitatibus ea quasi minima voluptatem impedit.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(23, 'Repellat nemo aut recusandae eligendi.', 'Aut illum qui quidem libero sequi. Officiis autem non cum et et. Sunt expedita qui at perspiciatis tempora laudantium molestiae. Ducimus aut ullam architecto veniam vel eaque maiores.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(24, 'Debitis dolores voluptatum praesentium tempore.', 'Tempora placeat vitae voluptatem maiores ea et autem. Voluptates mollitia atque vero aliquid quia dicta possimus consectetur. Voluptatem minima nemo suscipit libero. Autem aspernatur dicta nobis quis non natus non.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(25, 'Nesciunt consectetur quia rerum dolor.', 'Eos quis commodi expedita. Et consectetur debitis ipsum in maxime qui quia. Enim eligendi eum minus voluptatem vel voluptate quisquam. Veritatis culpa ratione totam sit.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(26, 'In ratione consequuntur possimus ut at.', 'Omnis ut autem sit et quis maxime velit. Eveniet expedita magnam excepturi non. Aliquid itaque quia sit sunt porro. Quibusdam dolorum aliquid minus dolores quia fuga eveniet provident.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(27, 'Odit delectus expedita quia et rem aut quo.', 'Dignissimos et ea ut sed odio. Incidunt magnam incidunt enim at. Et est a fugiat.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(28, 'Debitis sed et commodi atque.', 'Ex nesciunt dolores omnis occaecati ea recusandae eaque. Adipisci aut qui vero et molestiae velit consequatur. Labore nemo quia sint eos sunt in maxime. Quasi odit blanditiis vel et eligendi. Veritatis aut atque alias consequatur.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(29, 'Eum temporibus porro et et omnis.', 'Molestias quae fuga quia corporis dignissimos velit qui. Delectus perspiciatis laborum consequatur cum recusandae modi aliquam. Reprehenderit libero temporibus cupiditate sunt.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(30, 'Eaque dolorum ut ut est.', 'Laborum quae libero consequatur earum doloremque ad voluptas. Enim quis assumenda officia earum atque. Voluptatem quidem iste qui quaerat soluta illo.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(31, 'Dolorem cupiditate culpa atque officia quas eaque.', 'Recusandae eius quas delectus tempore excepturi et. Quod vel mollitia occaecati quo reiciendis nam. Eos quis et repellendus voluptatem velit nihil. Accusamus et vel animi.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(32, 'Laborum dolorem possimus maxime sit quaerat rerum eaque.', 'Explicabo tenetur labore pariatur dolor quae alias maiores. Aut molestiae tenetur aut voluptatem deserunt. Natus amet veniam deleniti saepe minima quisquam. Nam amet sed nemo repellendus error quasi eveniet.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(33, 'Rem ut aut excepturi officiis est.', 'Eligendi odit ut rerum officiis. Ipsum et ipsum aut unde quia maiores. Excepturi officia est provident veniam nobis est rem reprehenderit.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(34, 'Natus qui voluptate rem earum.', 'Aut voluptas et ab a ipsa magnam consequatur. Quisquam necessitatibus quod amet quam ut eius. Non aliquam atque et optio.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(35, 'Nisi assumenda temporibus suscipit error aliquid inventore voluptatem.', 'Consectetur iusto et voluptates sunt voluptas omnis. Nemo minus unde omnis quod. Deserunt ut enim beatae porro ut. Et aut est quos.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(36, 'Est sint quam qui.', 'Optio eveniet consequatur consequatur. Voluptatibus veritatis consequatur et. Omnis explicabo consequatur voluptatem mollitia placeat quis accusamus.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(37, 'Dignissimos magni praesentium autem dolorum.', 'Id corrupti occaecati hic sed quos autem occaecati. Minima totam perferendis ut soluta. Sequi ut tenetur vel impedit corporis pariatur. Possimus est dolor dolores tempore sit soluta.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(38, 'Dolor ut consequatur et temporibus velit expedita natus.', 'Ut illum commodi magnam nisi pariatur odit. Hic rem placeat dolorum minus sit. Aut est quia quos velit.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(39, 'Corrupti dignissimos dignissimos accusantium.', 'Nulla molestiae dolore perspiciatis et assumenda ab quia. Doloribus temporibus vel sed optio quam animi qui. Dolorem sequi voluptatum voluptas eum culpa modi autem.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(40, 'Ut voluptas consequatur et sunt aperiam.', 'Eius molestiae sed quos aut. Voluptas beatae ut et et voluptas. Facilis mollitia et id ratione neque sed.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(41, 'Aut provident aut et consequatur rerum nihil.', 'Non non asperiores quia repellendus. Ab sint exercitationem dolores necessitatibus repellat vero. Voluptate possimus voluptatem nulla quo vel nulla. Nemo magni voluptatum non.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(42, 'Quod odio qui ex sed voluptatem ut officiis.', 'Rerum delectus rerum voluptatum ut. Sed id debitis rem voluptatibus. Dolor ipsam ut quae ducimus et porro suscipit.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(43, 'Non a dolorem nihil magni.', 'Alias dolores voluptatem error mollitia eos soluta possimus. Sit earum est sed explicabo. Aut non vel a ut.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(44, 'Cumque inventore praesentium provident illum autem et.', 'Ut et qui sapiente laboriosam nisi magni iusto. Ducimus laudantium fugit magni. Suscipit aut similique nisi at explicabo qui quis temporibus. Voluptas maxime in officia deleniti omnis. Qui numquam magnam accusamus.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(45, 'Fuga dolore quis dolorem aperiam veritatis ut fugiat.', 'Cupiditate nihil consectetur omnis numquam dignissimos dolor minus. Dolorum optio quaerat repudiandae quo nobis ipsa. Ipsa ipsam at at explicabo debitis eligendi quis.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(46, 'Eos error voluptatibus reprehenderit cupiditate nesciunt.', 'Est nesciunt nesciunt omnis natus non perspiciatis. Excepturi qui repellat et. Cupiditate nemo assumenda nulla blanditiis fuga quidem enim. Voluptates hic est vero dolore.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(47, 'Aut doloremque dolorem sit est eum qui.', 'Beatae officiis eveniet necessitatibus harum et sed est veniam. Non pariatur accusamus vel excepturi incidunt. Pariatur doloribus voluptates aspernatur id.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(48, 'Ipsum at qui qui consequuntur.', 'Veniam voluptas ipsum qui nesciunt est qui quo. Autem praesentium ratione sunt molestiae in nobis qui. Doloribus voluptatem illo sed labore maxime id officiis nesciunt. Aut et quisquam consequuntur.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(49, 'Deserunt distinctio eligendi veniam mollitia vero ad laborum.', 'Non possimus repellat dicta quis natus. Voluptas harum quisquam architecto sunt et molestias voluptas et. Vel cum omnis sapiente occaecati aperiam. Id nihil itaque voluptatem voluptate temporibus qui quae.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(50, 'Adipisci numquam ab assumenda dolorum magni.', 'Similique qui libero dolores consequatur porro. Adipisci quisquam consectetur porro amet eligendi natus accusamus libero. Distinctio minus nostrum ut laudantium numquam iste error voluptatem. Nam porro commodi provident delectus perferendis qui omnis.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(51, 'Rerum vitae aut nihil voluptatibus sit sed tenetur aliquid.', 'Aut assumenda nemo saepe. Dicta cumque sint dicta dolor aut aut. Eaque qui in animi vitae fuga. Soluta necessitatibus eum assumenda aut omnis saepe rerum.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(52, 'Quam sequi consequuntur et voluptate quam.', 'Natus architecto non ad deserunt. Eaque consequatur eum magni voluptatem iusto. Qui omnis velit est. Voluptatum adipisci sit nulla fugiat eveniet nostrum est.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(53, 'Ratione rem sit molestiae dolorem nihil pariatur aut.', 'Quia officia eius consequatur. Est aspernatur et maxime accusantium tempora quo. Et modi blanditiis in aut rem illum in optio. Adipisci iure beatae quas qui.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(54, 'Officiis corrupti veritatis id labore modi deleniti eligendi.', 'Et ad facere earum laboriosam quo optio iste. Reiciendis consequatur vel enim est sed fugit assumenda.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(55, 'Et ipsa error et laboriosam voluptatem dolorum ipsum est.', 'Nobis beatae recusandae illum nisi aut dicta. Nam deserunt et accusantium voluptas velit consequatur. Ducimus commodi corporis aut quasi quis quia quia. Deserunt architecto aspernatur natus tempora ut sed et omnis.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(56, 'Illum consequuntur deserunt accusamus voluptatum quas excepturi.', 'Repudiandae commodi facilis nesciunt sunt. Perferendis suscipit corrupti a id quae alias eos. Quo at soluta inventore amet. Aut ea non mollitia aliquid vel et.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(57, 'Quaerat vero dolor deserunt ut at.', 'Aut rerum consequuntur consectetur numquam. Quas ut aperiam ut. Reprehenderit molestias id dolorem molestiae veritatis nisi earum. Modi voluptatem eligendi possimus in aliquam aut. Est cupiditate est perspiciatis consequatur omnis.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(58, 'Quia tempore sequi consequuntur quo quod numquam.', 'Sunt atque aut corporis rerum repellendus mollitia. Deserunt quo non est mollitia aut voluptatem suscipit.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(59, 'Ut eos reprehenderit consequatur possimus necessitatibus.', 'Quae magni reiciendis commodi est sed ad aut. Dolorem quisquam est aut sed. Autem corporis corporis deleniti sapiente.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(60, 'Quasi ullam laboriosam autem voluptatem atque consectetur occaecati non.', 'Similique exercitationem sit et consequuntur odio sint molestiae. Voluptas aut molestiae dolorum qui. Officia voluptatum ipsam laudantium repellendus dicta quo voluptatem sed.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(61, 'Sunt quos expedita molestiae qui nesciunt.', 'Quisquam aperiam sequi cum error ab ut itaque. Dolores quas nesciunt autem quis est doloremque. Sit dolore velit qui.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(62, 'Amet consequatur ipsa ut tempore similique et fugit maxime.', 'Perspiciatis est ut facilis eos. Repellendus natus dolores repellendus qui ut. Et voluptas enim tenetur earum maxime excepturi suscipit. Placeat voluptatem consequatur ut praesentium vero.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(63, 'Et qui doloribus et minus ut ratione vel.', 'Sequi hic doloremque officia itaque vitae quos consequuntur. A et aut dignissimos maxime. Aperiam quam voluptas ut aut eum a quisquam.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(64, 'Nostrum distinctio et consequatur ad autem repellendus.', 'Ut ut ipsum et quasi id voluptas eveniet culpa. Aut et non ab neque voluptatem. Quidem voluptatem fugiat nisi distinctio. Expedita tempora quasi cupiditate.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(65, 'Aut molestias minus esse.', 'Quaerat fugiat eos et ducimus ea placeat. Voluptatem eveniet debitis voluptates neque mollitia est mollitia. Non perferendis sapiente reprehenderit pariatur. Minima magni consectetur optio sapiente.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(66, 'Dolor blanditiis optio cupiditate modi eos.', 'Hic voluptatem minima fugit provident ad quos. Nulla magni eaque perspiciatis. In perferendis aut error.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(67, 'Ea minima aperiam et aut voluptas porro labore corrupti.', 'Minima harum vel qui sit eos. Aut aliquid voluptas expedita non. Animi iste dolore recusandae quis qui. Explicabo et ipsa eveniet quia autem.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(68, 'Facilis repellendus officiis necessitatibus consequatur quis et deserunt.', 'Et magnam consectetur tenetur error adipisci et perspiciatis ducimus. Ad nisi quo nihil quis. Reprehenderit illum fugit reprehenderit numquam sed. Earum voluptatum exercitationem ut quibusdam qui consequatur et alias.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(69, 'Illum esse explicabo consequatur iure dolor commodi.', 'Architecto veniam architecto maiores assumenda accusantium sit. Quo assumenda aliquam libero fugiat ut. Ad dolorum tempora numquam nam aliquid hic. Ut sunt temporibus ut aspernatur est velit in. Possimus maxime similique consequuntur ea unde dolores.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(70, 'Molestiae vitae rem voluptas dignissimos.', 'Earum sit et ab doloremque. Reiciendis voluptas quia inventore nihil eos quisquam quod quod. Aut est et esse veritatis cumque repudiandae.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(71, 'Et corporis porro consequatur perferendis repellendus et.', 'Nostrum provident laboriosam est voluptas eveniet et. Qui qui non explicabo sit error. Aliquid voluptate illo quia rerum velit dicta. Nam aut nihil ullam.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(72, 'Earum voluptatem voluptatibus quis hic voluptas recusandae dolores.', 'Pariatur rerum assumenda in voluptatibus. Voluptatem ut omnis iure inventore ab. Repellat aut repudiandae nobis.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(73, 'Assumenda blanditiis totam facilis.', 'Odio et perspiciatis sunt corporis a. Nihil est architecto quia earum quae perspiciatis.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(74, 'Sequi sint voluptatem aliquam dolorum.', 'Veritatis omnis tenetur laboriosam nobis similique blanditiis. Fugit quam ea sit ea eum. Soluta non nesciunt voluptatem quia ratione. Blanditiis ducimus ut eius possimus amet.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(75, 'Modi numquam autem rerum est debitis voluptas.', 'Voluptatum ut ducimus id rerum. Maiores eos omnis est numquam qui autem error ut. Incidunt harum reprehenderit illum consequuntur id velit maxime. Voluptatibus cupiditate magnam error doloribus iste reiciendis eveniet ut.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(76, 'Consequuntur sunt quia dolorem voluptatem.', 'Iusto asperiores rerum impedit corporis. Assumenda consequatur in enim deserunt est dolorem pariatur. Ut rerum et cum. Est ut earum neque est error eaque.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(77, 'Odio asperiores officia laudantium accusamus earum.', 'Molestias quia deserunt voluptatem delectus fuga officia maiores sunt. Est omnis nobis sunt. Accusamus tempore quia sunt debitis.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(78, 'Rerum id et autem.', 'Officia quas nihil facilis hic. Accusantium et maxime hic totam. Qui voluptas voluptas expedita suscipit consequatur accusantium. Et suscipit tempore sunt nobis ullam ut.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(79, 'Rem eum alias at occaecati est fugiat molestiae.', 'Voluptatem non quia consequatur. Qui et optio ullam excepturi beatae. Eaque unde eius velit non.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(80, 'Iusto labore sed sapiente nihil vitae dolorem voluptatem placeat.', 'Neque ab sunt et ut optio. Quia deleniti doloremque cupiditate. Dolore assumenda non quam.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(81, 'Dolor nihil voluptate itaque quam.', 'Cupiditate nihil aliquid et doloremque velit maxime. Culpa aut qui sed est et. Maxime nihil in tenetur eos quis accusantium. Et sed commodi praesentium temporibus alias eaque.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(82, 'Sunt qui explicabo vel sapiente.', 'Possimus voluptas dolore aspernatur voluptate. Molestias quasi eum aut nihil et sed eos. Minus harum modi sed aut vitae nulla rerum commodi.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(83, 'Eligendi ex quia libero dicta quo consequatur nisi corporis.', 'Commodi ipsam id modi et. Voluptatem quis exercitationem voluptas et est optio. Incidunt qui atque odio.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(84, 'Aut est aperiam id explicabo similique maxime consequatur.', 'Magni ab nihil consequuntur porro sed. Dolorem quasi unde voluptatum. Fugiat iusto voluptas voluptas enim qui. Beatae labore dolorem est nihil sit impedit ea. Quis et beatae autem molestias molestiae ut sit.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(85, 'Pariatur suscipit architecto optio.', 'Voluptas quaerat iste vero nostrum molestiae enim est. Accusamus perspiciatis quaerat consequatur impedit facilis qui. Porro reprehenderit non est vero veritatis vero qui.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(86, 'Incidunt et sunt non doloribus quae omnis.', 'Qui consequatur qui numquam sed dolor sunt. Mollitia est quos eum architecto velit possimus sint. Laboriosam laboriosam excepturi repellendus excepturi officia.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(87, 'Nemo id voluptatem odit eum.', 'Deserunt porro consequatur neque vitae laborum. Ipsam quas quia dignissimos commodi sunt maxime. Pariatur animi aut nemo. Adipisci magni tenetur magnam sed sit dolorem dicta.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(88, 'Rerum perspiciatis recusandae amet perspiciatis voluptatum.', 'Facilis facilis et qui dignissimos occaecati voluptatem ducimus. Voluptas et molestias quia error illum quia error. Nemo magni et id placeat accusamus voluptas sed.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(89, 'Vero dolorum quia laudantium et tenetur atque placeat.', 'Ut consequuntur aliquam ut natus vel consequatur repudiandae. Velit cupiditate perspiciatis voluptas et recusandae repellat optio. Voluptas et dolor assumenda velit dolor sunt inventore illo. Ut eum odit maxime velit et recusandae exercitationem. Porro ducimus incidunt aut nobis qui repellendus veritatis.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(90, 'Inventore in velit est molestiae.', 'Repudiandae ut quos hic quibusdam. Voluptatum maxime nam alias assumenda. Dolorum neque et rem ipsa dolorem.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(91, 'Eaque dicta impedit veritatis minus non non voluptatem quibusdam.', 'Quis est enim aut reprehenderit. Officia magnam nisi excepturi rerum. Dolor nesciunt distinctio molestias esse. Id et aspernatur ipsam possimus.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(92, 'Rem dolorem voluptas eum unde id dolorem nulla.', 'Animi est sunt autem ea voluptatem enim ut. Aliquid consequatur officia officiis.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(93, 'Autem non reiciendis harum sit officiis.', 'Libero non rem in et quos. Occaecati dolores libero laboriosam pariatur quam quaerat porro ipsum. Voluptatum architecto deserunt eum cum rerum sint.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(94, 'Enim natus et sapiente et dolores quia.', 'Recusandae et provident debitis et iusto reprehenderit. Et id in ratione doloribus dolores doloribus nam praesentium. Tempora omnis necessitatibus est rerum suscipit eum.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(95, 'Est quod quis cumque nobis.', 'Quasi aut esse similique ab impedit labore enim. Beatae quos pariatur ea dolores. Et ipsum odit deleniti id laborum perspiciatis autem est. Neque consequatur ut sit.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(96, 'Similique quidem optio ea.', 'Illo aliquam nobis voluptas delectus eum numquam. Sit aperiam sint veritatis quae rem. Odio accusantium aut cum id. Quos qui reiciendis fugit.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(97, 'Rerum tempore voluptate quia ut.', 'Quasi distinctio nam voluptas fugit qui fugiat. Cum consequuntur libero aut ut doloremque. Veritatis saepe cum iure et rerum.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(98, 'Velit possimus incidunt aut provident.', 'Fugiat optio ut deleniti expedita quos. Harum non eos nihil nam ipsa nihil doloremque. Maxime exercitationem id dolores. At debitis voluptates omnis qui voluptates impedit quidem.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(99, 'Ut et alias molestiae accusantium.', 'Debitis est velit pariatur similique. Consequatur vitae sapiente incidunt commodi. Maiores voluptas eligendi hic. Ea esse error mollitia.', 0, '2026-08-24 00:30:57', '2026-08-24 00:30:57'),
(100, 'Id aperiam soluta aut ut id veniam.', 'Et rerum est recusandae excepturi totam qui sint nulla. Et quos ut non ut id. Itaque at et voluptatem fuga non non. Et sequi vero fuga ducimus soluta.', 1, '2026-08-24 00:30:57', '2026-08-24 00:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_08_10_072322_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('yzhv4Lr4wyiE71ldcjgtS8iGDbY4a9EKeWH9izSU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36 Edg/151.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGRydVpEV2xzUWlkNWEwVDJwVzcxd1JFVkIxc3FkUmlKc3psZUpvWSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9ncz9wYWdlPTYiO3M6NToicm91dGUiO3M6NToiYmxvZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1787560263);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2026-08-24 00:30:57', '$2y$12$0erMP5z3gNphX4/oBWc5Muy4ZcFlGaYSKDST6lSMza3lvhbJPN5iW', 'zmt90fJ1RY', '2026-08-24 00:30:57', '2026-08-24 00:30:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
