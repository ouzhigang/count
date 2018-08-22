SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `name` varchar(200) NOT NULL DEFAULT '',
  `value` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `time` text NOT NULL,
  `get` text NOT NULL,
  `referrer` text NOT NULL,
  `ip` text NOT NULL,
  `country` text NOT NULL,
  `state` varchar(200) NOT NULL DEFAULT '',
  `city` varchar(200) NOT NULL DEFAULT '',
  `area` text NOT NULL,
  `extend` varchar(200) NOT NULL DEFAULT '',
  `os` text NOT NULL,
  `lang` text NOT NULL,
  `browser` text NOT NULL,
  `ua` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `count` ADD PRIMARY KEY (`id`);
ALTER TABLE `count` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;