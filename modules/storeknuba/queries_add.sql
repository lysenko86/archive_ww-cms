CREATE TABLE IF NOT EXISTS `mod_storeknuba_bids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT 'user id',
  `gid` int(11) NOT NULL COMMENT 'group id',
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_bids_registry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `count` float(7,2) NOT NULL,
  `allow` float(7,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_bids_registry_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `count` float(7,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_bids_status` (
  `key` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_storeknuba_bids_status` (`key`, `title`) VALUES
('created', 'Створено'),
('confirm', 'Затверджено'),
('need', 'Потреба'),
('done', 'Виконано'),
('archive', 'Архів');
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `rid` int(11) NOT NULL COMMENT 'registry id',
  `date` date NOT NULL,
  `count` float(7,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_products_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `brpid` int(11) NOT NULL COMMENT 'bids_registry_products id',
  `rid` int(11) NOT NULL COMMENT 'registry id',
  `gid` int(11) NOT NULL COMMENT 'group id',
  `date` date NOT NULL,
  `count` float(7,2) NOT NULL,
  `done` tinyint(4) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brpid` (`brpid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_products_motions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `rid` int(11) NOT NULL COMMENT 'registry id',
  `countAct` int(11) NOT NULL,
  `gid` int(11) NOT NULL COMMENT 'group id',
  `bid` int(11) NOT NULL COMMENT 'bid id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_registry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_supplies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL COMMENT 'group id',
  `uid` int(11) NOT NULL COMMENT 'user id',
  `date` datetime NOT NULL,
  `sum` float(7,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_supplies_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL COMMENT 'supply id',
  `rid` int(11) NOT NULL COMMENT 'registry id',
  `count` float(7,2) NOT NULL,
  `price` float(7,2) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_supplies_status` (
  `key` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_storeknuba_supplies_status` (`key`, `title`) VALUES
('created', 'Створено'),
('done', 'Виконано');
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storeknuba_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_storeknuba_titles` (`var`, `key`, `val`) VALUES
('registryList', 'ua', 'Реєстр'),
('registryEdit', 'ua', 'Редагування реєстру'),
('errorsRegistryIsTitle', 'ua', 'Помилка! Такий товар вже є в реєстрі.'),
('productsList', 'ua', 'Товари'),
('productEdit', 'ua', 'Редагування товару'),
('errorsProductsIsCode', 'ua', 'Помилка! Даний код товару вже використовується іншим товаром.'),
('bidsList', 'ua', 'Список заявок'),
('bidAdd', 'ua', 'Подавання заявки'),
('btnAddElement', 'ua', 'Додати позицію'),
('errorsCountZero', 'ua', 'Помилка! Кількість повинна бути більше нуля.'),
('errorsCountItems', 'ua', 'Помилка! Не створено жодної позиції.'),
('doneSendBid', 'ua', 'Готово! Заявка успішно відправлена​​.'),
('suppliesList', 'ua', 'Список закупівель'),
('supplyAdd', 'ua', 'Створення закупівлі'),
('errorsPriceZero', 'ua', 'Помилка! Ціна повинна бути більше нуля.'),
('js_doneSupplyProducts', 'ua', 'Готово! Товар успішно зараховано на склад.'),
('js_doneBidNeed', 'ua', 'Готово! Заявка успішно відправлена​​ на затвердження.'),
('js_doneBid', 'ua', 'Готово! Заявка успішно виконана.'),
('productsImport', 'ua', 'Імпортування товарів'),
('errorsFormatImportFile', 'ua', 'Помилка! Вибраний файл невірного формату, дозволяється тільки *.XML формат.'),
('doneImport', 'ua', 'Готово! Імпортування завершено.'),
('errorsImportCode', 'ua', 'Помилка! Товар з кодом %s не вдалося імпортувати.'),
('reportStock', 'ua', 'Залишки на складі'),
('reportBids', 'ua', 'Зведена заявка'),
('reportMotions', 'ua', 'Переміщення товарів'),
('js_askDeleteProduct', 'ua', 'Увага! Ви дійсно хочете списати цей товар?');