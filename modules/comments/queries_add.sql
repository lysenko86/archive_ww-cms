CREATE TABLE IF NOT EXISTS `mod_comments_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_comments_titles` (`var`, `key`, `val`) VALUES
('comments', 'ru', 'Комментарии'),
('comments', 'en', 'Comments'),
('commentsList', 'ru', 'Список комментариев'),
('commentsList', 'en', 'Comments list'),
('commentsList', 'ua', 'Список коментарів'),
('comments', 'ua', 'Коментарі');
[[;;;]]






CREATE TABLE IF NOT EXISTS `mod_comments_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL COMMENT 'type of material',
  `mid` int(11) NOT NULL COMMENT 'material ID',
  `date` datetime NOT NULL,
  `uid` int(11) NOT NULL COMMENT 'user ID',
  `fio` varchar(150) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `public` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;