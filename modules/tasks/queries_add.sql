CREATE TABLE IF NOT EXISTS `mod_tasks_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `public` tinyint(4) NOT NULL,
  `home` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_tasks_descr` (
  `id` int(11) NOT NULL,
  `lng` varchar(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `report` text NOT NULL,
  PRIMARY KEY (`id`,`lng`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_tasks_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_tasks_titles` (`var`, `key`, `val`) VALUES
('tasks', 'ru', 'Задачи'),
('tasks', 'ua', 'Задачі'),
('tasks', 'en', 'Tasks'),
('tasksList', 'ru', 'Список задач'),
('tasksList', 'ua', 'Список задач'),
('tasksList', 'en', 'Tasks list'),
('tasksEdit', 'ru', 'Редактирование задачи'),
('tasksEdit', 'ua', 'Редагування задачі'),
('tasksEdit', 'en', 'Editing task');