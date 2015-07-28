CREATE TABLE IF NOT EXISTS `mod_engine_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_engine_titles` (`var`, `key`, `val`) VALUES
('home', 'ru', 'Добро пожаловать на наш сайт!'),
('home', 'ua', 'Ласкаво просимо на наш сайт!'),
('home', 'en', 'Welcome to our website!'),
('adminsList', 'ua', 'Список адміністраторів'),
('adminsList', 'ru', 'Список администраторов'),
('admHome', 'ru', 'Добро пожаловать в панель администратора!'),
('admHome', 'ua', 'Ласкаво просимо в панель адміністратора!'),
('admHome', 'en', 'Welcome to the admin panel!'),
('errorsAuth', 'ru', 'Ошибка! Неверный логин, или пароль.'),
('errorsAuth', 'ua', 'Помилка! Невірний логін, або пароль.'),
('errorsAuth', 'en', 'Error! Invalid username or password.'),
('errorsAccess', 'ru', 'Ошибка! Доступ в панель администратора для вас закрыт администратором сайта!'),
('errorsAccess', 'ua', 'Помилка! Доступ в панель адміністратора для вас закритий адміністратором сайту!'),
('errorsAccess', 'en', 'Error! Access to the admin panel for you closed by site administrator!'),
('adminsList', 'en', 'List of administrators'),
('adminEdit', 'ru', 'Редактирование администратора'),
('adminEdit', 'ua', 'Редагування адміністратора'),
('adminEdit', 'en', 'Editing administrator'),
('settSite', 'ru', 'Настройки сайта'),
('settSite', 'ua', 'Налаштування сайту'),
('settSite', 'en', 'Site settings'),
('settAdmin', 'ru', 'Настройки администратора'),
('settAdmin', 'ua', 'Нналаштування адміністратора'),
('settAdmin', 'en', 'Administrator settings'),
('settMode', 'ru', 'Режим отображения:'),
('settMode', 'ua', 'Режим відображення:'),
('settMode', 'en', 'Display mode:'),
('settMode1', 'ru', 'Обычный режим'),
('settMode1', 'ua', 'Звичайний режим'),
('settMode1', 'en', 'Common mode'),
('settMode0', 'ru', 'Режим отладки'),
('settMode0', 'ua', 'Режим налагодження'),
('settMode0', 'en', 'Debugging mode '),
('modulesList', 'ru', 'Список модулей'),
('modulesList', 'ua', 'Список модулів'),
('modulesList', 'en', 'Modules list'),
('adm404text', 'ru', 'Ошибка! Запрашиваемая страница не найдена.'),
('adm404text', 'ua', 'Помилка! Запитувана сторінка не знайдена.'),
('adm404text', 'en', 'Error! The requested URL was not found.'),
('adminAuth', 'ru', 'Вход в админку'),
('adminAuth', 'ua', 'Вхід в адмінку'),
('adminAuth', 'en', 'Login in admin panel'),
('langsList', 'ru', 'Список языков'),
('langsList', 'ua', 'Список мов'),
('langsList', 'en', 'Languages list'),
('langEdit', 'ru', 'Редактирование языка'),
('langEdit', 'ua', 'Редагування мови'),
('langEdit', 'en', 'Editing language'),
('titlesList', 'ru', 'Список надписей'),
('titlesList', 'ua', 'Список написів'),
('titlesList', 'en', 'Titles list'),
('titleAdd', 'ru', 'Добавление надписи'),
('titleAdd', 'ua', 'Додавання напису'),
('titleAdd', 'en', 'Adding title'),
('test_test', 'en', 'test e'),
('test_test', 'ru', 'test р'),
('test_test', 'ua', 'test у'),
('utPhpinfo', 'en', 'Utility "PhpInfo"'),
('utPhpinfo', 'ru', 'Утилита "PhpInfo"'),
('utPhpinfo', 'ua', 'Утиліта "PhpInfo"'),
('utDumper', 'en', 'Utility "Dumper"'),
('utDumper', 'ru', 'Утилита "Dumper"'),
('utDumper', 'ua', 'Утиліта "Dumper"'),
('utChmod', 'en', 'Utility "Chmod"'),
('utChmod', 'ru', 'Утилита "Chmod"'),
('utChmod', 'ua', 'Утиліта "Chmod"');