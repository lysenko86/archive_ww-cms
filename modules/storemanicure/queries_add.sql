CREATE TABLE IF NOT EXISTS `mod_storemanicure_actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT 'parent id',
  `type` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `cid` int(11) NOT NULL COMMENT 'client id',
  `aid` int(11) NOT NULL COMMENT 'admin id',
  `sid` int(11) NOT NULL COMMENT 'service id',
  `mid` int(11) NOT NULL COMMENT 'master id',
  `sum` float(7,2) NOT NULL,
  `comment` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_actions_types` (
  `key` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_storemanicure_actions_types` (`key`, `title`) VALUES
('prihod', 'Приход'),
('inkass', 'Инкассация'),
('salary', 'Зарплата'),
('score', 'Начисления'),
('add', 'Пополнение');
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(300) NOT NULL,
  `name` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `male` varchar(1) NOT NULL,
  `sum` float(7,2) NOT NULL,
  `discount` tinyint(4) NOT NULL,
  `access` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_mailer` (
  `var` varchar(50) NOT NULL,
  `val` text NOT NULL,
  PRIMARY KEY (`var`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_storemanicure_mailer` (`var`, `val`) VALUES
('sms_birth', '0'),
('sms_text_birth', 'С Днем Рождения, :user:, желаем Вам счастья!'),
('email_birth', '0'),
('email_title_birth', 'С Днем Рождения, :user:, желаем Вам счастья!'),
('email_content_birth', '<span style="font-size:20px;"><span style="font-family:comic sans ms,cursive;"><strong>С Днем Рождения, :user:, желаем Вам счастья!</strong></span></span>'),
('sms_text', 'Уважаемая(ый) :user:, поздравляем Вас !!!С Новым Годом!!! Желаем успехов!'),
('email_title', 'Уважаемая(ый) :user:, поздравляем Вас !!!С Новым Годом!!! Желаем успехов!'),
('email_content', '<span style="font-size:28px;"><span style="font-family:comic sans ms,cursive;"><strong>Дорогая :user:, поздравляем Вас !!!С Новым Годом!!! Желаем успехов!</strong></span></span>'),
('cron_birth', '09-29');
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_mailer_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_mailer_phones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) NOT NULL,
  `sms` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_masters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sumTotal` float(7,2) NOT NULL,
  `sumSelf` float(7,2) NOT NULL,
  `sumPaid` float(7,2) NOT NULL,
  `percent` tinyint(4) NOT NULL,
  `percentMat` tinyint(4) NOT NULL,
  `access` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `length` tinyint(4) NOT NULL,
  `mid` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `type` varchar(20) NOT NULL,
  `public` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;
[[;;;]]





INSERT INTO `mod_storemanicure_services` (`id`, `title`, `type`, `public`) VALUES
(3, 'Маникюр', 'percent', 1),
(2, 'Педикюр', 'percent', 1),
(4, 'Наращивание ресниц', 'percentMat', 1),
(5, 'Наращивание ногтей', 'percentMat', 1),
(6, 'Коррекция ресниц', 'percentMat', 1),
(7, 'Коррекция ногтей', 'percentMat', 1),
(8, 'Массаж', 'percent', 1),
(9, 'Покрытие', 'percentMat', 1),
(10, 'Депиляция', 'percentMat', 1),
(11, 'Визаж', 'percentMat', 1);
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_services_types` (
  `key` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_storemanicure_services_types` (`key`, `title`) VALUES
('percent', 'Процент'),
('percentMat', 'Процент с материалом');
[[;;;]]





CREATE TABLE IF NOT EXISTS `mod_storemanicure_titles` (
  `var` varchar(50) NOT NULL,
  `key` varchar(2) NOT NULL,
  `val` varchar(300) NOT NULL,
  PRIMARY KEY (`var`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
[[;;;]]





INSERT INTO `mod_storemanicure_titles` (`var`, `key`, `val`) VALUES
('clients', 'ru', 'Клиенты'),
('clientsList', 'ru', 'Список клиентов'),
('clientEdit', 'ru', 'Редактирование клиента'),
('errorsPercent', 'ru', 'Ошибка! Процент должен быть больше или равно 0 и меньше или равно 100.'),
('errorsIsClientPhone', 'ru', 'Ошибка! Пользователь с таким номером телефона уже зарегистрирован в базе, используйте другой номер телефона.'),
('errorsIsClientEmail', 'ru', 'Ошибка! Пользователь с таким E-mail уже зарегистрирован в базе, используйте другой E-mail.'),
('errorsDiscount', 'ru', 'Ошибка! Сумма скидки указывается в процентах и должна быть больше или равно 0 и меньше или равно 100.'),
('mailerSmsBirth', 'ru', 'Рассылка SMS д.р.'),
('mailerSms', 'ru', 'Рассылка SMS'),
('mailerEmail', 'ru', 'Рассылка E-mail'),
('mailerEmailBirth', 'ru', 'Рассылка E-mail д.р.'),
('countMessages', 'ru', 'SMS-сообщений:'),
('OnOff', 'ru', 'Вкл/Выкл'),
('radioOn', 'ru', 'Включить'),
('radioOff', 'ru', 'Выключить'),
('mailerErrors', 'ru', 'Ошибка! В данный момент продолжается предыдущая рассылка, попробуйте немного попозже сделать новую рассылку.'),
('mailerProcess', 'ru', 'Внимание! В данный момент идет рассылка, в списке еще %s клиентов(а).'),
('mailerSendDone', 'ru', 'Рассылка успешно начата.'),
('mastersList', 'ru', 'Список мастеров'),
('masterEdit', 'ru', 'Редактирование мастера'),
('errorsPercentMat', 'ru', 'Ошибка! Процент с материалом должен быть больше или равно 0 и меньше или равно 100.'),
('servicesList', 'ru', 'Список услуг'),
('serviceEdit', 'ru', 'Редактирование услуги'),
('radioPercent', 'ru', 'Процент'),
('radioPercentMat', 'ru', 'Процент с материалом'),
('financePrihod', 'ru', 'Приход'),
('errorsSum', 'ru', 'Ошибка! Сумма должна быть больше 0.'),
('financeList', 'ru', 'История операций'),
('financeInkass', 'ru', 'Инкассация'),
('errorsInkassAuth', 'ru', 'Ошибка! Только главный администратор может инкассировать.'),
('errorsSumCash', 'ru', 'Ошибка! В кассе нет столько денег.'),
('sumTotal', 'ru', 'Всего:'),
('sumProfit', 'ru', 'Прибыль:'),
('manageSalary', 'ru', 'Зарплаты'),
('operation', 'ru', 'Операция №'),
('financeSalary', 'ru', 'Зарплата'),
('admin', 'ru', 'Администратор'),
('master', 'ru', 'Мастер'),
('errorsSumShould', 'ru', 'Ошибка! Сумма больше, чем мы должны, маскимум вы можете заплатить %s.'),
('manageStatistic', 'ru', 'Статистика'),
('managePlan', 'ru', 'План работы'),
('errorsPrihodAuth', 'ru', 'Ошибка! Главный администратор не может совершить приход.'),
('errorsCountService', 'ru', 'Ошибка! Вы не выбрали ни одной услуги.'),
('financeAdd', 'ru', 'Пополнение'),
('errorsLengthTime', 'ru', 'Ошибка! Вы должны указывать положительный интервал времени, а не отрицательный.');
[[;;;]]





INSERT INTO `settings` (`var`, `val`) VALUES
('SITE_CASH', '0');