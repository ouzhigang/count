SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `name` varchar(200) NOT NULL DEFAULT '',
  `value` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `config` (`name`, `value`) VALUES
('title', ''),
('admin', ''),
('pass', ''),
('date', '');

DROP TABLE IF EXISTS `count`;
CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  `month` int(10) UNSIGNED NOT NULL,
  `day` int(10) UNSIGNED NOT NULL,
  `time` time NOT NULL,
  `get` varchar(255) NOT NULL DEFAULT '',
  `referrer` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(200) NOT NULL DEFAULT '',
  `city` varchar(200) NOT NULL DEFAULT '',
  `area` varchar(255) NOT NULL DEFAULT '',
  `extend` varchar(200) NOT NULL DEFAULT '',
  `os` varchar(255) NOT NULL DEFAULT '',
  `lang` varchar(255) NOT NULL DEFAULT '',
  `browser` varchar(255) NOT NULL DEFAULT '',
  `ua` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


ALTER TABLE `count` ADD PRIMARY KEY (`id`), ADD KEY `year` (`year`), ADD KEY `month` (`month`), ADD KEY `day` (`day`);
ALTER TABLE `count` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  