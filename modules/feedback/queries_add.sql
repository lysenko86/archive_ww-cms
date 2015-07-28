CREATE TABLE IF NOT EXISTS `mod_feedback_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_feedback_titles` (`var`, `key`, `val`) VALUES
('feedback', 'ru', 'Обратная связь'),
('feedback', 'en', 'Feedback'),
('msgList', 'ru', 'Список сообщений'),
('msgList', 'en', 'Messages list')
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_feedback_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;