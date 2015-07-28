CREATE TABLE IF NOT EXISTS `mod_slider_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `ord` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  `public` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_slider_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_slider_titles` (`var`, `key`, `val`) VALUES
('slider', 'ru', 'Слайдер'),
('slider', 'ua', 'Слайдер'),
('slider', 'en', 'Slider'),
('sliderList', 'ru', 'Список картинок'),
('sliderList', 'ua', 'Список картинок'),
('sliderList', 'en', 'Pictures list'),
('sliderEdit', 'ru', 'Редактирование картинки'),
('sliderEdit', 'ua', 'Редагування картинки'),
('sliderEdit', 'en', 'Editing picture');
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_slider_descr` (
  `id` int(11) NOT NULL,
  `lng` varchar(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`,`lng`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;