CREATE TABLE IF NOT EXISTS `mod_users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fio` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `access` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
[[;;;]]





INSERT INTO `mod_users_items` (`id`, `type`, `login`, `password`, `fio`, `email`, `access`) VALUES
(1, 'users', 'alex', '123456', 'Александр', 'lysenko86@i.ua', 1);
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_users_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_users_titles` (`var`, `key`, `val`) VALUES
('usersList', 'en', 'List of users'),
('usersList', 'ru', 'Список пользователей'),
('usersList', 'ua', 'Список користувачів'),
('userEdit', 'en', 'Editing user'),
('userEdit', 'ru', 'Редактирование пользователя'),
('userEdit', 'ua', 'Редагування користувача'),
('titleRegistration', 'en', 'Registration'),
('titleRegistration', 'ru', 'Регистрация'),
('titleRegistration', 'ua', 'Реєстрація'),
('titleAuth', 'en', 'Authorization'),
('titleAuth', 'ru', 'Авторизация'),
('titleAuth', 'ua', 'Авторизація'),
('errorsAuth', 'en', 'Error! Invalid username or password.'),
('errorsAuth', 'ru', 'Ошибка! Неверный логин, или пароль.'),
('errorsAuth', 'ua', 'Помилка! Невірний логін, або пароль.'),
('errorsAccess', 'en', 'Error! Access to the site for you closed by site administrator!'),
('errorsAccess', 'ru', 'Ошибка! Доступ на сайт для вас закрыт администратором сайта!'),
('errorsAccess', 'ua', 'Помилка! Доступ на сайт для вас закритий адміністратором сайту!'),
('mailRemindTitle', 'en', 'Lost password to the site %s'),
('mailRemindTitle', 'ru', 'Напоминание пароля с сайта %s'),
('mailRemindTitle', 'ua', 'Нагадування пароля з сайту %s'),
('mailRemindContent', 'en', 'Your password: %s'),
('mailRemindContent', 'ru', 'Ваш пароль: %s'),
('mailRemindContent', 'ua', 'Ваш пароль: %s'),
('doneRemindPass', 'en', 'Done! Password was successfully sent to the specified E-mail.'),
('doneRemindPass', 'ru', 'Готово! Пароль успешно выслан на указанный E-mail.'),
('doneRemindPass', 'ua', 'Готово! Пароль успішно вислано на вказаний E-mail.');
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_users_types` (
  `key` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_users_types` (`key`, `title`) VALUES
('users', 'Пользователи');