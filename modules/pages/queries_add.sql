CREATE TABLE IF NOT EXISTS `mod_pages_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_pages_titles` (`var`, `key`, `val`) VALUES
('pages', 'ru', 'Статьи'),
('pages', 'en', 'Pages'),
('pagesList', 'ru', 'Список статей'),
('pagesList', 'en', 'Pages list'),
('pageEdit', 'ru', 'Редактирование страницы'),
('pageEdit', 'en', 'Editing page');
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_pages_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `public` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_pages_descr` (
  `id` int(11) NOT NULL,
  `lng` varchar(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`,`lng`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;