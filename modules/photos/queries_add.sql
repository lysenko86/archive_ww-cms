CREATE TABLE IF NOT EXISTS `mod_photos_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` tinyint(4) NOT NULL,
  `pid` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `ord` int(11) NOT NULL,
  `public` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_photos_cats_descr` (
  `id` int(11) NOT NULL,
  `lng` varchar(2) NOT NULL,
  `title` varchar(300) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`,`lng`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_photos_descr` (
  `id` int(11) NOT NULL,
  `lng` varchar(2) NOT NULL,
  `title` varchar(300) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`,`lng`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_photos_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `ord` int(11) NOT NULL,
  `public` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_photos_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_photos_titles` (`var`, `key`, `val`) VALUES
('photos', 'ru', 'Фотогалерея'),
('photos', 'ua', 'Фотогалерея'),
('photos', 'en', 'Photo Gallery'),
('catsList', 'ru', 'Список категорий'),
('catsList', 'ua', 'Список категорій'),
('catsList', 'en', 'Categories list'),
('catEdit', 'ru', 'Редактирование категории'),
('catEdit', 'ua', 'Редагування категорії'),
('catEdit', 'en', 'Editing category'),
('photosList', 'ru', 'Список фото'),
('photosList', 'ua', 'Список фото'),
('photosList', 'en', 'Photos list'),
('photoEdit', 'ru', 'Редактирование фото'),
('photoEdit', 'ua', 'Редагування фото'),
('photoEdit', 'en', 'Editing photo');