CREATE TABLE IF NOT EXISTS `mod_reviews_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_reviews_titles` (`var`, `key`, `val`) VALUES
('reviews', 'ru', 'Отзывы'),
('reviews', 'en', 'Reviews'),
('msgList', 'ru', 'Список сообщений'),
('msgList', 'en', 'Messages list')
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_reviews_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `uid` int(11) NOT NULL,
  `fio` varchar(150) NOT NULL,
  `review` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;