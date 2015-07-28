CREATE TABLE IF NOT EXISTS `mod_menu_descr` (
  `id` int(11) NOT NULL,
  `lng` varchar(2) NOT NULL,
  `title` varchar(150) NOT NULL,
  PRIMARY KEY (`id`,`lng`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `ord` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `public` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_menu_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_menu_titles` (`var`, `key`, `val`) VALUES
('menuList', 'en', 'Menu items list'),
('menuList', 'ru', 'Список пунктов меню'),
('menuList', 'ua', 'Список пунктів меню'),
('menuEdit', 'en', 'Editing menu item'),
('menuEdit', 'ru', 'Редактирование пункта меню'),
('menuEdit', 'ua', 'Редагування пункту меню');