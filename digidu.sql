-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for digidu
CREATE DATABASE IF NOT EXISTS `digidu` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `digidu`;


-- Dumping structure for table digidu.cibb_categories
CREATE TABLE IF NOT EXISTS `cibb_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  `publish` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.cibb_categories: ~13 rows (approximately)
/*!40000 ALTER TABLE `cibb_categories` DISABLE KEYS */;
INSERT INTO `cibb_categories` (`id`, `parent_id`, `name`, `slug`, `date_added`, `date_edit`, `publish`) VALUES
	(11, 0, 'Web Programming', 'web-programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(12, 11, 'PHP', 'php', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(14, 13, 'CSS', 'css', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(15, 12, 'Beginner & Installation', 'php-beginner-installation', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(18, 14, 'Responsive Layout', 'css-responsive-layout', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(19, 14, 'Beginner', 'css-beginner', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(20, 14, 'Effect, Animation, Gradient', 'css-effect-animation-gradient', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(21, 11, 'Javascript', 'javascript', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(22, 21, 'Jquery', 'jquery', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
/*!40000 ALTER TABLE `cibb_categories` ENABLE KEYS */;


-- Dumping structure for table digidu.cibb_posts
CREATE TABLE IF NOT EXISTS `cibb_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `reply_to_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.cibb_posts: ~65 rows (approximately)
/*!40000 ALTER TABLE `cibb_posts` DISABLE KEYS */;
INSERT INTO `cibb_posts` (`id`, `thread_id`, `reply_to_id`, `author_id`, `post`, `date_add`, `date_edit`) VALUES
	(5, 4, 0, 5, 'Is there a simple way to convert one date format into another date format in PHP?', '2012-08-06 06:19:38', '0000-00-00 00:00:00'),
	(19, 4, 0, 5, 'jtyjtyjyt', '2012-08-06 13:30:00', '0000-00-00 00:00:00'),
	(20, 4, 0, 5, 'tyjtyj', '2012-08-06 13:30:02', '0000-00-00 00:00:00'),
	(40, 5, 0, 5, 'I am not good at regular expressio. How to do a php regular expression, make a judge if a string first word is (a-h), second word is @, third part are numbers(length range from 4-15)?', '2012-08-07 12:53:33', '0000-00-00 00:00:00'),
	(46, 6, 0, 5, 'I\'m basically trying to convert an image into a fluid HTML table. I\'ve dissected the image to one top piece and 5 bottom pieces and placed them in the appropriate cells to reconstruct the image.', '2012-08-07 13:11:09', '0000-00-00 00:00:00'),
	(52, 4, 0, 5, 'ghghhgj', '2012-08-13 03:23:51', '0000-00-00 00:00:00'),
	(53, 4, 0, 0, 'fdfdg', '2012-08-13 05:30:12', '0000-00-00 00:00:00'),
	(54, 4, 0, 0, 'dfgdfg', '2012-08-13 05:30:15', '0000-00-00 00:00:00'),
	(55, 4, 0, 0, 'dfg', '2012-08-13 05:30:17', '0000-00-00 00:00:00'),
	(59, 7, 0, 5, 'I would like all the resulting methods to be included in the RDoc documentation. Is there an RDoc directive which "manually" adds a method to the list of methods for the class? I can\'t find one.', '2012-08-13 06:33:48', '0000-00-00 00:00:00'),
	(61, 9, 0, 5, '\r\n0\r\nvotes\r\n0\r\nanswers\r\n37 views\r\ntransfer (add/remove) php array values between 2 divs\r\nI have a normal div, having an input textbox which can be edited manually. I want to add/remove php values from another div having a set of php array values (from a query). Each value have an [Add] or ...', '2012-08-13 06:38:03', '0000-00-00 00:00:00'),
	(62, 10, 0, 5, 'My first cry for help here. Not sure if my title is properly explicit but it\'s the only one I can come up with right now. I\'ve been at it for 2 days now and I have read so many different things that I ...', '2012-08-13 06:38:42', '0000-00-00 00:00:00'),
	(63, 11, 0, 5, 'How can I remove \'index.php\' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:', '2012-08-13 07:16:03', '0000-00-00 00:00:00'),
	(64, 7, 0, 5, 'fghghgthrth', '2012-08-13 07:34:58', '0000-00-00 00:00:00'),
	(66, 7, 0, 5, 'ewfwef', '2012-08-13 08:18:47', '0000-00-00 00:00:00'),
	(71, 11, 63, 5, 'backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:', '2012-08-13 11:15:20', '0000-00-00 00:00:00'),
	(72, 11, 63, 5, 'posted by admin "How can I remove \'index.php\' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:"\r\n                        ', '2012-08-13 13:20:35', '0000-00-00 00:00:00'),
	(76, 11, 71, 5, 'posted by <b>@admin</b><p><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></p><p>eefwfwefwefwef<i><br></i></p>', '2012-08-14 05:58:30', '0000-00-00 00:00:00'),
	(77, 11, 71, 5, '<div style="font-size:11px; padding:5px;">posted by <b>@admin</b><p><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></p>rtyretyery<br></div>', '2012-08-14 05:59:46', '0000-00-00 00:00:00'),
	(78, 11, 76, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>posted by <b>@admin</b></i></p><p><i><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></i></p><p><i>eefwfwefwefwefrety</i></p><p><i><i>rtyretyrty<br></i></i></p><p></p></div>', '2012-08-14 06:01:35', '0000-00-00 00:00:00'),
	(79, 11, 63, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>How can I remove \'index.php\' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></p></div>rtyrtyreyryreyertyrey', '2012-08-14 06:02:20', '0000-00-00 00:00:00'),
	(80, 11, 76, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>posted by <b>@admin</b></i></p><p><i><i>backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></i></p><p><i>eefwfwefwefwef<i><br></i></i></p><p></p></div><br>retyretyeryertyre ret yretyer ty', '2012-08-14 06:02:46', '0000-00-00 00:00:00'),
	(81, 11, 80, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>&lt;div style="font-size:11px; background: #e3e3e3;padding:5px;"&gt;posted by &lt;b&gt;@admin&lt;/b&gt;&lt;p&gt;&lt;i&gt;posted by &lt;b&gt;@admin&lt;/b&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;&lt;i&gt;backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:&lt;/i&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;eefwfwefwefwef&lt;i&gt;&lt;br&gt;&lt;/i&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;/div&gt;&lt;br&gt;retyretyeryertyre ret yretyer ty</i></p></div>', '2012-08-14 06:03:48', '0000-00-00 00:00:00'),
	(82, 11, 63, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>How can I remove \'index.php\' from urls, if I have some controllers in the controllers folder and one in subfolder? For example my frontend url looks like this : domain.com/site/contact.html I would like my backend url look like this: domain.com/system/settings/profile.html, where system is not a controller, only a subfolder in the controllers folder. When I type domain.com/index.php/system/settings/profile.html, everything works fine, it just does not look right. Here\'s what\'s in my routes.php file:</i></p></div>rtyrety', '2012-08-14 06:06:20', '0000-00-00 00:00:00'),
	(85, 12, 0, 5, '<p><b itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://github.com/akzhan/jwysiwyg" class="js-rewrite-sha" itemprop="url"><span itemprop="title">jwysiwyg</span></a></b> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://github.com/akzhan/jwysiwyg/tree/master/help" class="js-rewrite-sha" itemscope="url"><span itemprop="title">help</span></a></span> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://github.com/akzhan/jwysiwyg/tree/master/help/examples" class="js-rewrite-sha" itemscope="url"><span itemprop="title">examples</span></a></span> / <strong class="final-path">10-custom-controls.html</strong></p>', '2012-08-14 06:15:57', '0000-00-00 00:00:00'),
	(86, 12, 85, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>jwysiwyg / help / examples / 10-custom-controls.html</i></p></div><br>how', '2012-08-14 06:15:58', '0000-00-00 00:00:00'),
	(87, 13, 0, 5, '<p style="margin: 0px 0px 1em; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background-color: rgb(255, 255, 255); clear: both; word-wrap: break-word; color: rgb(0, 0, 0); font-family: Arial, \'Liberation Sans\', \'DejaVu Sans\', sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial; ">I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .</p><p style="margin: 0px 0px 1em; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; background-color: rgb(255, 255, 255); clear: both; word-wrap: break-word; color: rgb(0, 0, 0); font-family: Arial, \'Liberation Sans\', \'DejaVu Sans\', sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial; ">This is how I would like for it to look:</p>', '2012-08-14 06:43:59', '0000-00-00 00:00:00'),
	(88, 13, 87, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .This is how I would like for it to look:</i></p></div><br>fyuytuityutyutyu', '2012-08-14 13:22:47', '0000-00-00 00:00:00'),
	(90, 9, 61, 5, 'which can be edited manually. I want to add/remove php values from \r\nanother div having a set of php array values (from a query). Each value \r\nhave an [Add', '2012-08-15 07:30:44', '0000-00-00 00:00:00'),
	(91, 13, 0, 5, 'yytyu', '2012-12-02 03:23:57', '0000-00-00 00:00:00'),
	(92, 13, 87, 5, '<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@admin</b><p><i>I am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .This is how I would like for it to look:</i></p></div><br>iuiyio', '2012-12-02 03:24:08', '0000-00-00 00:00:00'),
	(93, 13, 0, 5, 'hai', '2014-08-12 06:42:12', '0000-00-00 00:00:00'),
	(94, 13, 93, 5, 'masak sih ?', '2014-08-12 09:27:06', '0000-00-00 00:00:00'),
	(95, 13, 0, 5, 'apakah yang bisa ?', '2014-08-12 09:27:18', '0000-00-00 00:00:00'),
	(96, 13, 0, 5, '&nbsp;coba post', '2014-08-12 15:08:04', '0000-00-00 00:00:00'),
	(97, 11, 82, 1, 'coba bisa gak ?                                ', '2014-08-13 06:05:14', '0000-00-00 00:00:00'),
	(98, 13, 92, 1, '								<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@user</b><p><i>posted by @adminI am trying to create a schedule for a Tae Kwon Do school, and I would like the admins to be able to CRUD their table .This is how I would like for it to look:iuiyio</i></p></div><br>cobak ah<br>\r\n                                ', '2014-08-13 06:59:07', '0000-00-00 00:00:00'),
	(99, 13, 93, 1, '								<div style="font-size:11px; background: #e3e3e3;padding:5px;">posted by <b>@user</b><p><i>hai</i></p></div>apak ?<br><br><br>\r\n                                ', '2014-08-13 22:36:37', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `cibb_posts` ENABLE KEYS */;


-- Dumping structure for table digidu.cibb_roles
CREATE TABLE IF NOT EXISTS `cibb_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  `admin_area` int(1) NOT NULL DEFAULT '0',
  `thread_create` int(1) NOT NULL DEFAULT '0',
  `thread_edit` int(1) NOT NULL DEFAULT '0',
  `thread_delete` int(1) NOT NULL DEFAULT '0',
  `post_create` int(1) NOT NULL DEFAULT '0',
  `post_edit` int(1) NOT NULL DEFAULT '0',
  `post_delete` int(1) NOT NULL DEFAULT '0',
  `role_create` int(1) NOT NULL DEFAULT '0',
  `role_edit` int(1) NOT NULL DEFAULT '0',
  `role_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.cibb_roles: ~3 rows (approximately)
/*!40000 ALTER TABLE `cibb_roles` DISABLE KEYS */;
INSERT INTO `cibb_roles` (`id`, `role`, `admin_area`, `thread_create`, `thread_edit`, `thread_delete`, `post_create`, `post_edit`, `post_delete`, `role_create`, `role_edit`, `role_delete`) VALUES
	(1, 'administrator', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
	(2, 'member', 0, 1, 0, 0, 1, 0, 0, 0, 0, 0),
	(3, 'editor', 0, 0, 1, 1, 0, 1, 1, 0, 0, 0);
/*!40000 ALTER TABLE `cibb_roles` ENABLE KEYS */;


-- Dumping structure for table digidu.cibb_threads
CREATE TABLE IF NOT EXISTS `cibb_threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  `date_last_post` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.cibb_threads: ~10 rows (approximately)
/*!40000 ALTER TABLE `cibb_threads` DISABLE KEYS */;
INSERT INTO `cibb_threads` (`id`, `category_id`, `title`, `slug`, `date_add`, `date_edit`, `date_last_post`) VALUES
	(4, 12, 'Convert one date format into another in PHP', 'convert-one-date-format-into-another-in-php', '2012-08-06 06:19:38', '0000-00-00 00:00:00', '2012-08-06 06:19:38'),
	(6, 18, 'Fluid images in table - Width: CSS vs HTML', 'fluid-images-in-table---width:-css-vs-html', '2012-08-07 13:11:09', '0000-00-00 00:00:00', '2012-08-07 13:11:09'),
	(7, 12, 'How to add RDoc documentation for a method defined using class_eval?', 'how-to-add-rdoc-documentation-for-a-method-defined-using-classeval', '2012-08-13 06:33:48', '0000-00-00 00:00:00', '2012-08-13 06:33:48'),
	(9, 11, 'transfer (add/remove) php array values between 2 divs', 'transfer-addremove-php-array-values-between-2-divs', '2012-08-13 06:38:03', '0000-00-00 00:00:00', '2012-08-13 06:38:03'),
	(10, 11, 'Creating an associative array from PHP through AJAX in JQUERY', 'creating-an-associative-array-from-php-through-ajax-in-jquery', '2012-08-13 06:38:42', '0000-00-00 00:00:00', '2012-08-13 06:38:42'),
	(11, 12, 'Codeigniter - controllers in subfolder, remove index.php from url', 'codeigniter--controllers-in-subfolder-remove-indexphp-from-url', '2012-08-13 07:16:03', '0000-00-00 00:00:00', '2012-08-13 07:16:03'),
	(12, 13, '10-custom-controls.html', '10customcontrolshtml', '2012-08-14 06:15:57', '0000-00-00 00:00:00', '2012-08-14 06:15:57'),
	(13, 13, 'Multiple forms in tables, multiple submit buttons. Can I do it with just PHP and HTML?', 'multiple-forms-in-tables-multiple-submit-buttons-can-i-do-it-with-just-php-and-html', '2012-08-14 06:43:59', '0000-00-00 00:00:00', '2012-08-14 06:43:59');
/*!40000 ALTER TABLE `cibb_threads` ENABLE KEYS */;


-- Dumping structure for table digidu.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.ci_sessions: ~10 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('1a3d817f91798c69c754bc623a5c053b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0', 1406538937, ''),
	('2462800c9c99f96ac3b51de2fec0d6c1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:30.0) Gecko/20100101 Firefox/30.0', 1407137332, ''),
	('252f5d4a2143feb7163b564b0e7c6357', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:30.0) Gecko/20100101 Firefox/30.0', 1407128691, ''),
	('29c1b47044f69e6c9d49fa7625aa789a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:30.0) Gecko/20100101 Firefox/30.0', 1407138008, ''),
	('41326b8adffe13603374acb30230f699', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0', 1407142473, ''),
	('5c21fd02d28363ac9ea8237d6576f905', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:30.0) Gecko/20100101 Firefox/30.0', 1407128764, 'a:7:{s:9:"user_data";s:0:"";s:7:"id_user";s:1:"4";s:4:"nama";s:4:"user";s:5:"level";s:1:"1";s:8:"username";s:4:"user";s:8:"password";s:32:"ee11cbb19052e40b07aac0ca060c23ee";s:5:"email";N;}'),
	('64a74774b745b5564609d4500c658658', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:30.0) Gecko/20100101 Firefox/30.0', 1407137047, ''),
	('8267ea36f100266f8a74a302a796cde7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:29.0) Gecko/20100101 Firefox/29.0', 1402713183, ''),
	('900ab201622e4fc88b2f161af08f9106', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0', 1406538103, 'a:7:{s:9:"user_data";s:0:"";s:7:"id_user";s:1:"1";s:4:"nama";s:4:"Bank";s:5:"level";s:1:"1";s:8:"username";s:4:"bank";s:8:"password";s:32:"ee11cbb19052e40b07aac0ca060c23ee";s:5:"email";s:17:"admin@prajasa.com";}'),
	('9cc892ebd44ec43bb01d71eee935e29e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:29.0) Gecko/20100101 Firefox/29.0', 1402713121, 'a:7:{s:9:"user_data";s:0:"";s:7:"id_user";s:1:"1";s:4:"nama";s:4:"Bank";s:5:"level";s:1:"1";s:8:"username";s:4:"bank";s:8:"password";s:32:"ee11cbb19052e40b07aac0ca060c23ee";s:5:"email";s:17:"admin@prajasa.com";}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Dumping structure for table digidu.level
CREATE TABLE IF NOT EXISTS `level` (
  `level_id` int(11) NOT NULL,
  `level_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.level: ~3 rows (approximately)
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` (`level_id`, `level_nama`) VALUES
	(1, 'Administrator'),
	(2, 'User'),
	(5, 'Petugas');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;


-- Dumping structure for table digidu.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_nama` varchar(100) NOT NULL,
  `menu_uri` varchar(100) NOT NULL,
  `menu_allowed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.menu: ~2 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`menu_id`, `menu_nama`, `menu_uri`, `menu_allowed`) VALUES
	(1, 'Daftar Blog', 'blog/blog/index', '+1+'),
	(2, 'Kategori', 'blog/blog/kategori', '+1+');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;


-- Dumping structure for table digidu.statis_page
CREATE TABLE IF NOT EXISTS `statis_page` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(50) NOT NULL DEFAULT '0',
  `judul` varchar(150) DEFAULT NULL,
  `slug` text,
  `isi` text,
  `status` enum('published','unpublished') NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.statis_page: ~0 rows (approximately)
/*!40000 ALTER TABLE `statis_page` DISABLE KEYS */;
INSERT INTO `statis_page` (`id_page`, `menu_title`, `judul`, `slug`, `isi`, `status`) VALUES
	(1, 'Kami', 'Kami adalah giant', 'kami', '<p>ini adalah isi nya yah yah yah<br></p><p><br></p>', 'published');
/*!40000 ALTER TABLE `statis_page` ENABLE KEYS */;


-- Dumping structure for table digidu.tbl_blog
CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id_post` int(3) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('published','unpublished') NOT NULL,
  `uri` varchar(200) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.tbl_blog: 11 rows
/*!40000 ALTER TABLE `tbl_blog` DISABLE KEYS */;
INSERT INTO `tbl_blog` (`id_post`, `id_kategori`, `judul`, `isi`, `tanggal`, `status`, `uri`) VALUES
	(38, 1, 'Hambatan Penghantar', '\n<p>Dari pendefinisian besaran R (hambatan) oleh <b>Ohm</b>&nbsp;itu dapat memotivasi para ilmuwan untuk mempelajari&nbsp;sifat-sifat <b>resistif</b> suatu bahan dan hasilnya adalah<b> semua&nbsp;bahan di alam ini memiliki hambatan</b>. Berdasarkan sifat<i>&nbsp;resistivitas</i>nya ini bahan dibagi menjadi tiga yaitu <b>konduktor</b>,<b> isolator</b> dan <b>semikonduktor</b>. <b>Konduktor memiliki&nbsp;hambatan yang kecil</b> sehingga<b> daya hantar listriknya baik</b>.&nbsp;<b>Isolator</b> memiliki <b>hambatan cukup besar </b>sehingga <b>tidak&nbsp;dapat menghantarkan listrik</b>. Sedangkan<b> semikonduktor</b>&nbsp;memiliki sifat <b>diantaranya</b>.</p>\n\n<p>Dari sifat-sifat yang dimiliki, kemudian konduktor&nbsp;banyak di gunakan sebagai penghantar. Bagaimana sifat&nbsp;hambatan penghantar itu?? Melalui eksperimen,<b> hambatan&nbsp;penghantar</b> dipengaruhi oleh tiga besaran yaitu <b>sebanding</b>&nbsp;dengan <b>panjangnya l</b>, <b>berbanding terbalik</b> dengan <b>luas&nbsp;penampangnya A</b> dan tergabung pada<b> jenisnya</b>. Dari&nbsp;besaran-besaran ini dapat dirumuskan sebagai berikut.</p>\n\n<p><img src="http://i1306.photobucket.com/albums/s580/agusesetiyono/Untitled2.png"><br>\n</p>\n\n<p>dengan : R&nbsp; =&nbsp; hambatan penghantar (ohm),&nbsp; l&nbsp; =&nbsp; panjang (m), &nbsp;A&nbsp; =&nbsp; luas penampang penghantar (m2) &nbsp;rho &nbsp;=&nbsp; hambatan jenis (rho.m)</p>\n<hr />\n<p><b><i>Contoh soal:</i></b></p>\n\n<p>Seutas kawat besi panjangnya 20 meter dan luas penampangnya 1 mm2, mempunyai hambatan jenis 10-7 ohmmeter. Jika antara ujung-ujung kawat dipasang beda potensial 60 volt, tentukan kuat arus yang mengalir dalam kawat!</p>\n\n<p><b><i>Jawaban:</i></b></p>\n\n<p><img src="http://i1306.photobucket.com/albums/s580/agusesetiyono/Untitled3.png" style="cursor: nw-resize; height: 298px;"><b><i><br>\n</i></b></p>\n', '2012-11-06 05:47:24', 'published', ''),
	(39, 4, 'perbedaan antara potensi listrik (tegangan) dan energi potensial listrik', '<p>Video ini menjelaskan perbedaan antara &nbsp;potensi listrik (tegangan) dan energi potensial listrik. simak penjelasannya!</p>\n\n<p><br>\n<iframe frameborder="0" width="560" height="355" src="http://www.khanacademy.org/embed_video?v=zqGvUbvVQXg"></iframe><br>\n</p>', '2012-11-06 06:06:55', 'published', ''),
	(40, 1, 'Arus Listrik', '\n<p>Coba kamu perhatikan gambar berikut, Ada baterai, lampu dan penghantar (kabel).</p>\n\n<p><img src="http://img835.imageshack.us/img835/8421/listrik.jpg" style="cursor: default; "></p>\n\n<p>Pada saat saklar S terbuka ternyata pada rangkaian tidak terjadi apa-apa. Tetapi pada saat saklar S tertutup ternyata lampu dapat menyala. Nyala lampu inilah bukti bahwa pada rangkaian itu ada arus listrik.</p>\n\n<p><b>Arus listrik </b>adalah<b> aliran muatan-muatan listrik pada suatu rangkaian tertutup</b>. Dari konversi yang ada arus listrik digunakan<b> arah seperti aliran muatan positif</b> (kebalikan aliran elektron). Dalam bahasa yang lain arus listrik dapat timbul karena <b>ada beda potensial</b> pada dua titik dan arahnya dari potensial tinggi ke potensial yang lebih rendah. Besarnya arus listrik dinamakan <b>kuat arus listrik</b> dan didefnisikan sebagai <b>banyaknya muatan positif yang melalui suatu titik tiap satu satuan waktu</b>. Dari defnisi ini, kuat arus listrik dapat di rumuskan sebagai berikut.</p>\n<h1><b><span style="color: #e36c09;">I = Q / t</span></b></h1>\n\n<p>dengan <i>I = Kuat Arus, Q = Muatan Listrik , t = waktu</i></p>\n\n<p>Satuan kuat arus listrik adalah selang waktu ampere di singkat A, untuk mengenang jasa ilmuwan Fisika bernama Andre M. Ampere (1775-1836). Dan kuat arus listrik ini dapat diukur dengan alat yang dinamakan <b><i>amperemeter.</i></b></p>\n', '2012-11-06 07:21:05', 'published', ''),
	(37, 1, 'Hukum Ohm ', '<p>Hukum Ohm mempelajari tentang<b> hubungan kuat arus dengan beda potensial </b>ujung-ujung hambatan.</p>\n\n<p>George Simon Ohm (1787-1854), inilah nama lengkap ilmuwan yang pertama kali menjelaskan hubungan kuat arus dengan beda potensial ujung-ujung hambatan. </p>\n\n<p>Seperti penjelasan sebelumnya, <b>jika ada beda potensial antara dua titik dan dihubungkan melalui penghantar maka akan timbul arus listrik</b>. Penghantar tersebut dapat diganti dengan resistor misalnya lampu. Berarti jika ujung-ujung lampu diberi beda potensial maka lampu itu dialiri arus. </p>\n\n<p>Perhatikan Gambar.</p>\n\n<p>Dalam eksperimennya, Ohm menemukan bahwa setiap <b>beda potensial ujung-ujung resistor R dinaikkan maka arus yang mengalir juga akan naik</b>. Bila beda potensial diperbesar 2x ternyata kuat arusnya juga menjadi 2x semula. </p>\n\n<p>Apakah hubungan yang terjadi? Dari sifatnya itu dapat ditentukan bahwa beda potensialnya sebanding dengan kuat arus yang lewat. Hubungan ini dapat dirumuskan:</p>\n<h1><span style="color: #e36c09;">V ~ I</span></h1>\n\n<p>Hubungan V dan I yang diperoleh Ohm ini sesuai dengan grafik V-I yang diperoleh dari eksperimen,  polanya seperti pada Gambar. Agar kesebandingan di atas sama, Ohm menggunakan konstanta perbandingannya sebesar R<i>  (resistivitas = hambatan), </i>sehingga di peroleh persamaan sebagai berikut.</p>\n<h1><span style="color: #e36c09;">V = IR</span></h1>\n<h1></h1>\n\n<p>Persamaan inilah yang kemudian dikenal sebagai hukum Ohm, dengan hambatan dan diberi satuan <b>Ohm</b> disimbulkan <b>?.</b></p>\n', '2012-11-06 05:37:20', 'published', ''),
	(83, 2, 'Fisika Listrik Dinamis', '<p>Ini adalah eBook yang membahas tentang Listrik Dinamis untuk Kelas X SMA.</p>\n\n<ul>\n	<li>\n<embed src="https://www.box.com/embed/9pzf0d5zbgqnagl.swf" width="680" height="400" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"><br>\n</li>\n</ul>', '2012-11-27 22:39:55', 'published', ''),
	(84, 3, 'Listrik Dinamis: Simulasi', '\n<p>Ini adalah mediabelajar berupa flash/swf. didalamnya terdapat uraian singkat mengenai bahasan Listrik Dinamis disertai dengan Simulasi. Klik gambar untuk melihat / mendownload.</p>\n\n<p><a href="http://www.fileden.com/files/2012/11/27/3370774/template_byme.swf"><img src="http://i1306.photobucket.com/albums/s580/agusesetiyono/Screenshot_2.jpg" style="cursor: nw-resize; width: 562.0714285714286px; height: 427px; float: none; margin: 0px;" alt="Simulasi"></a><br>\n</p>\n', '2012-11-27 23:45:05', 'published', ''),
	(92, 1, 'Santa Cruz Tempat yang Membuat Newton Gerah', '\n<p><span style="line-height: 1.5em;">Santa Cruz adalah suatu tempat di california,disini Newton ilmuan besar kita di patahkan &nbsp;semua ide dan buah pikiran nya mengenai hukum gravitasi nya.Di daerah ini gravitasi seolah-olah tidak menuju kearah pusat bumi seperti yang di tuangkan oleh kakek kita Newton dalam semua pemikiran nya.pada daerah ini pepohonan dan rumah tidakl tegak berdiri melainkan miring dan hampir jatuh,padahal pohon tersebut sangat kuat.</span><br>\n</p>\n\n<p>kemiringan benda-benda di daerah ini sangat tidak lazim,yah seperti dikatakan kan tadi hukum newton tidak berlaku disini.</p>\n\n<p>Sebenarnya,fenomena-fenomena seperti ini tidak hanya terjadi diwilayah Santa Cruz,California saja,tetapi ditempat lain juga bisa ditemukan. Memang kebanyakan berada di USA,tapi di wilayah Eropa juga dapat ditemui tempat seperti ini,contohnya disekitar Warsawa,Polandia. Oh iya,aq baru ingat, hal serupa juga ada disebuah wilayah di China,namun yang ini berupa tanjakan jalan raya. Uniknya ditempat itu seluruh benda beroda/yang mudah menggelinding akan tertarik menuju keatas tanjakan,padahal jika dipikir secara logika hal tsb sangatlah tidak masuk akal.<span rel="pastemarkerend" id="pastemarkerend58673"></span></p>\n', '2013-01-03 08:13:49', 'published', ''),
	(103, 2, 'judul yang sangat panjang', 'fadsfhghjghgkjlbvcxsdfghjklkhgkdfs', '2014-08-09 06:23:33', 'published', 'judul-yang-sangat-panjang'),
	(104, 1, 'supaya saya tahu adad', 'dsfhsgkhjkl;l', '2014-08-09 10:47:30', 'unpublished', 'supaya-saya-tahu-adad-1'),
	(105, 4, 'coba membuat sebuah judul', 'hggkjhjk;l\';\r\nlkhjgh', '2014-08-09 13:09:29', 'unpublished', 'coba-membuat-sebuah-judul');
/*!40000 ALTER TABLE `tbl_blog` ENABLE KEYS */;


-- Dumping structure for table digidu.tbl_kategori
CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  `slug` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.tbl_kategori: 4 rows
/*!40000 ALTER TABLE `tbl_kategori` DISABLE KEYS */;
INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `slug`) VALUES
	(1, 'Teori', 'teori'),
	(2, 'eBook', 'ebook'),
	(3, 'Simulasi', 'simulasi'),
	(4, 'Video', 'video');
/*!40000 ALTER TABLE `tbl_kategori` ENABLE KEYS */;


-- Dumping structure for table digidu.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `tanggal` datetime DEFAULT NULL,
  `dpp` decimal(10,0) DEFAULT NULL,
  `pajak` decimal(10,0) DEFAULT NULL,
  `npwp` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.transaksi: ~4 rows (approximately)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`tanggal`, `dpp`, `pajak`, `npwp`) VALUES
	('2014-04-30 00:00:00', 409000, 40900, '02.500.748.5-124.000'),
	('2014-04-30 10:04:31', 409000, 40900, '02.500.748.5-124.000'),
	('2014-05-02 08:05:03', 409000, 40900, '02.500.748.5-124.000'),
	('2014-06-13 13:06:34', 409000, 40900, '02.500.748.5-124.000');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;


-- Dumping structure for table digidu.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `blokir` varchar(1) NOT NULL DEFAULT 'N',
  `status` varchar(1) NOT NULL DEFAULT 'N',
  `aswo` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `tgl_registrasi` datetime NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table digidu.user: ~3 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `hp`, `level`, `email`, `blokir`, `status`, `aswo`, `tgl_lahir`, `jenis_kelamin`, `profesi`, `alamat`, `kabupaten`, `provinsi`, `foto`, `tgl_registrasi`, `role_id`) VALUES
	(1, 'Administrator', 'admin', 'ee11cbb19052e40b07aac0ca060c23ee', '', 1, 'admin@prajasa.com', 'N', 'N', 'dXNlcg~~', '0000-00-00', '', '', '', '', '', '', '0000-00-00 00:00:00', 1),
	(2, 'Alif Akbar Fitrawan', 'alifable', 'ee11cbb19052e40b07aac0ca060c23ee', '085646421106', 2, 'alif@alif.com', 'N', 'N', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00 00:00:00', 2),
	(5, 'Alif Akbar Fitrawan 2', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'nohp', 2, 'alifable@gmail.com', 'N', 'N', '', '2014-08-01', '', 'profesi', 'alamat rumah', 'kota', 'provinsi', '201408121136565Penguins.jpg', '0000-00-00 00:00:00', 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
