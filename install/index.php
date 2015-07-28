<?php
    ini_set('display_errors', 1);
    $ROOT_DIR = $_SERVER['SCRIPT_FILENAME'];
    $ROOT_DIR = substr($ROOT_DIR, 0, strlen($ROOT_DIR)-17);

    $step         = !empty($_GET['step'])          ? $_GET['step']                : '0';
    $stepDo       = !empty($_GET['stepDo'])        ? $_GET['stepDo']              : '0';
    $host         = !empty($_POST['host'])         ? trim($_POST['host'])         : '';
    $name         = !empty($_POST['name'])         ? trim($_POST['name'])         : '';;
    $login        = !empty($_POST['login'])        ? trim($_POST['login'])        : '';
    $password     = !empty($_POST['password'])     ? trim($_POST['password'])     : '';
    $settDomain   = !empty($_POST['settDomain'])   ? trim($_POST['settDomain'])   : '';
    $settUrl      = !empty($_POST['settUrl'])      ? trim($_POST['settUrl'])      : '';
    $settTitle    = !empty($_POST['settTitle'])    ? trim($_POST['settTitle'])    : '';
    $settEmail    = !empty($_POST['settEmail'])    ? trim($_POST['settEmail'])    : '';
    $settPhone    = !empty($_POST['settPhone'])    ? trim($_POST['settPhone'])    : '';
    $settLogin    = !empty($_POST['settLogin'])    ? trim($_POST['settLogin'])    : '';
    $settPassword = !empty($_POST['settPassword']) ? trim($_POST['settPassword']) : '';
    $settFio      = !empty($_POST['settFio'])      ? trim($_POST['settFio'])      : '';
    $delInstall   = !empty($_GET['delInstall'])    ? $_GET['delInstall']          : '0';
    $msg          = '';
    $msgType      = 'error';

    switch ($step){
        case '0': break;
        case '1': if ($stepDo == '1'){   // Установка прав
            function getFilesFromDir($dir){
                $files = array();
                if ($handle = opendir($dir)){
                    while (false !== ($file = readdir($handle))){
                        if ($file != "." && $file != ".."){
                            if(is_dir($dir.'/'.$file)){
                                $dir2 = $dir.'/'.$file;
                                chmod($dir2, 0777);
                                getFilesFromDir($dir2);
                            }
                            else chmod($dir.'/'.$file, 0777);
                        }
                    }
                    closedir($handle);
                }
            }
            getFilesFromDir($ROOT_DIR.'tmp');
            getFilesFromDir($ROOT_DIR.'upload');
            $msg     = 'Права доступа успешно установлены.';
            $msgType = 'good';
        } break;
        case '2': if ($stepDo == '1'){   // Настройка соединения с базой
            if (!$host || !$name || !$login || !$password){
                $stepDo = '0';
                $msg    = 'Ошибка! Одно из обязательных полей не заполнено.';
            }
            else{
                @$connect = mysql_connect($host, $login, $password);
                if ($connect == false){
                    $stepDo = '0';
                    $msg    = 'Ошибка! Введены неверные данные для подключения к базе данных.';
                }
                else{
                    if (!mysql_select_db($name, $connect)){
                        $stepDo = '0';
                        $msg    = 'Ошибка! Базы данных с именем "'.$name.'" у вас на сервере не существует, возможно, вы забыли ее создать в хостинговой панели.';
                    }
                    else{
                        $f = fopen($ROOT_DIR.'kernel/dbconfig.sql', "w");
                        fwrite($f, "$host\n$name\n$login\n$password");
                        fclose($f);
                        mysql_query("set character_set_client='utf8'");
                        mysql_query("set character_set_results='utf8'");
                        mysql_query("set collation_connection='utf8_general_ci'");
                        $content = file_get_contents($ROOT_DIR."install/queries.sql");
                        $arr     = explode('[[;;;]]', $content);
                        foreach ($arr as $v) mysql_query(trim($v));
                        mysql_close($connect);
                        $msg     = 'Подключение к базе данных успешно настроено, база заполнена начальной информацией.';
                        $msgType = 'good';
                    }
                }
            }
        } break;
        case '3': if ($stepDo == '1'){   // Параметры сайта
            if (!$settDomain || !$settUrl || !$settTitle || !$settEmail || !$settLogin || !$settPassword){
                $stepDo = '0';
                $msg    = 'Ошибка! Одно из обязательных полей не заполнено.';
            }
            else{
                $arr = file($ROOT_DIR.'kernel/dbconfig.sql');
                foreach ($arr as $k=>$v) $arr[$k] = trim($v);
                $connect = mysql_connect($arr[0], $arr[2], $arr[3]);
                mysql_select_db($arr[1], $connect);
                mysql_query("set character_set_client='utf8'");
                mysql_query("set character_set_results='utf8'");
                mysql_query("set collation_connection='utf8_general_ci'");
                mysql_query("UPDATE `settings` SET `val` = '$settDomain' WHERE `var` = 'SITE_DOMAIN'");
                mysql_query("UPDATE `settings` SET `val` = '$settUrl' WHERE `var` = 'SITE_URL'");
                mysql_query("UPDATE `settings` SET `val` = '$settTitle' WHERE `var` = 'SITE_TITLE'");
                mysql_query("UPDATE `settings` SET `val` = '$settEmail' WHERE `var` = 'ADMIN_EMAIL'");
                mysql_query("UPDATE `settings` SET `val` = '$settPhone' WHERE `var` = 'ADMIN_PHONE'");
                mysql_query("UPDATE `settings` SET `val` = '$settLogin' WHERE `var` = 'ADMIN_LOGIN'");
                mysql_query("UPDATE `settings` SET `val` = '$settPassword' WHERE `var` = 'ADMIN_PASSWORD'");
                mysql_query("UPDATE `settings` SET `val` = '$settFio' WHERE `var` = 'ADMIN_FIO'");
                mysql_close($connect);
                $msg     = 'Параметры сайта успешно настроены.';
                $msgType = 'good';
            }
        } break;
        case '4': if ($stepDo == '1'){   // Переименование / удаление папки install и на сайт
            if ($delInstall == '0') rename($ROOT_DIR.'install', $ROOT_DIR.'installed');
            elseif ($delInstall == '1'){
                unlink($ROOT_DIR.'install/css/styles.css');
                rmdir($ROOT_DIR.'install/css');
                unlink($ROOT_DIR.'install/images/footer.gif');
                unlink($ROOT_DIR.'install/images/header.jpg');
                unlink($ROOT_DIR.'install/images/icon.ico');
                unlink($ROOT_DIR.'install/images/logo400.jpg');
                unlink($ROOT_DIR.'install/images/required.png');
                rmdir($ROOT_DIR.'install/images');
                unlink($ROOT_DIR.'install/js/jquery-1.9.1.min.js');
                unlink($ROOT_DIR.'install/js/scripts.js');
                rmdir($ROOT_DIR.'install/js');
                unlink($ROOT_DIR.'install/index.php');
                unlink($ROOT_DIR.'install/queries.sql');
                rmdir($ROOT_DIR.'install');
            }
            header('location: /index.php');
        } break;
    }


    echo '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <meta name="generator" content="WWcms v1.0"/>
                <link href="/install/images/icon.ico" type="image/x-icon" rel="icon"/>
                <link type="text/css" href="/install/css/styles.css" rel="stylesheet"/>
                <script type="text/javascript" src="/install/js/jquery-1.9.1.min.js"></script>
                <script type="text/javascript" src="/install/js/scripts.js"></script>
                <title>WWcms - Установка движка</title>
            </head>
            <body><div id="layout"><div id="header"></div><div id="main">';
                if (!empty($msg)) echo '<div id="message"><div class="'.$msgType.'">'.$msg.'</div></div>';
                switch ($step){
                    case '0': echo '<div id="content">
                        <div class="logo"><a href="http://wworks.com.ua/" target="_blank"><img src="/install/images/logo400.jpg" alt="WWcms"/></a></div>
                        <div class="info">
                            Добро пожаловать в процесс установки движка WWcms, разработанного и постоянно обновляемого Лысенко А.В., сайт движка <a href="http://wworks.com.ua/">wworks.com.ua</a>. Процесс установки состоит из нескольких этапов:
                            <br/>1. Установка прав доступа на папки;
                            <br/>2. Подключение к базе данных и и заполнение базы начальной информацией;
                            <br/>3. Настройка параметров сайта и данных администратора;
                            <a class="go" href="/install/index.php?step=1">Поехали!</a>
                        </div>
                    </div>'; break;
                    case '1': echo '<div id="content">
                        <div class="logo"><a href="http://wworks.com.ua/" target="_blank"><img src="/install/images/logo400.jpg" alt="WWcms"/></a></div>
                        <div class="info">
                            <h3>1. Установка прав доступа на папки</h3>
                            На этом этапе движок установит права доступа 0777 на папки "/tmp" и "/upload". Возможно хостинг, из-за каких-то ограничений не даст это сделать программно, рекомендуется после установки движка проверить права доступа на эти папки.';
                            echo $stepDo == '0' ? '<a class="go" href="/install/index.php?step=1&stepDo=1">Выполнить</a>' : '<a class="go" href="/install/index.php?step=2">Дальше</a>';
                        echo '</div>
                    </div>'; break;
                    case '2': echo '<div id="content">
                        <div class="logo"><a href="http://wworks.com.ua/" target="_blank"><img src="/install/images/logo400.jpg" alt="WWcms"/></a></div>
                        <div class="info">
                            <h3>2. Подключение к базе данных и заполнение базы начальной информацией</h3>
                            Теперь необходимо настроить подключение к базе данных, нужно указать в приведенной ниже форме такие параметры как: хост, имя базы, логин, пароль. Все это можно узнать на хостинге. Если данные будут указаны верно, движок автоматически создаст в базе свою структуру таблиц и запишет начальные данные в базу.';
                            if ($stepDo == '0') echo '<form class="wwForm" method="post" name="fContent" action="/install/index.php?step=2&stepDo=1">
                                <div class="row"><div class="left">Хост:</div><div class="right"><input class="text required" type="text" name="host" value="'.$host.'"/></div></div>
                                <div class="row"><div class="left">Имя базы:</div><div class="right"><input class="text required" type="text" name="name" value="'.$name.'"/></div></div>
                                <div class="row"><div class="left">Логин:</div><div class="right"><input class="text required" type="text" name="login" value="'.$login.'"/></div></div>
                                <div class="row"><div class="left">Пароль:</div><div class="right"><input class="text required" type="text" name="password" value="'.$password.'"/></div></div>
                                <div class="row divSubmit"><input type="submit" value="Сохранить"/></div>
                            </form>';
                            elseif ($stepDo == '1') echo '
                                <form class="wwForm" method="post" name="fContent" action="">
                                    <div class="row"><div class="left">Хост:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="host" value="'.$host.'"/></div></div>
                                    <div class="row"><div class="left">Имя базы:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="name" value="'.$name.'"/></div></div>
                                    <div class="row"><div class="left">Логин:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="login" value="'.$login.'"/></div></div>
                                    <div class="row"><div class="left">Пароль:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="password" value="'.$password.'"/></div></div>
                                    <div class="row"></div>
                                </form>
                                <a class="go" href="/install/index.php?step=3">Дальше</a>
                            ';
                        echo '</div>
                    </div>'; break;
                    case '3': echo '<div id="content">
                        <div class="logo"><a href="http://wworks.com.ua/" target="_blank"><img src="/install/images/logo400.jpg" alt="WWcms"/></a></div>
                        <div class="info">
                            <h3>3. Настройка параметров сайта и данных администратора</h3>
                            Сейчас необходимо задать все параметры сайта и данные администратора, представленные в форме ниже, в дальнейшем их можно будет изменить в административной панели сайта по ссылке "/adminka".';
                            if ($stepDo == '0') echo '<form class="wwForm" method="post" name="fContent" action="/install/index.php?step=3&stepDo=1">
                                <div class="row"><div class="left">Домен сайта:</div><div class="right"><input class="text required" type="text" name="settDomain" value="'.$settDomain.'"/></div></div>
                                <div class="row"><div class="left">URL сайта:</div><div class="right"><input class="text required" type="text" name="settUrl" value="'.$settUrl.'"/></div></div>
                                <div class="row"><div class="left">Название сайта:</div><div class="right"><input class="text required" type="text" name="settTitle" value="'.$settTitle.'"/></div></div>
                                <div class="row"><div class="left">E-mail админа:</div><div class="right"><input class="text required" type="text" name="settEmail" value="'.$settEmail.'"/></div></div>
                                <div class="row"><div class="left">Телефон админа:</div><div class="right"><input class="text" type="text" name="settPhone" value="'.$settPhone.'"/></div></div>
                                <div class="row"><div class="left">Логин админа:</div><div class="right"><input class="text required" type="text" name="settLogin" value="'.$settLogin.'"/></div></div>
                                <div class="row"><div class="left">Пароль админа:</div><div class="right"><input class="text required" type="text" name="settPassword" value="'.$settPassword.'"/></div></div>
                                <div class="row"><div class="left">ФИО админа:</div><div class="right"><input class="text" type="text" name="settFio" value="'.$settFio.'"/></div></div>
                                <div class="row divSubmit"><input type="submit" value="Сохранить"/></div>
                            </form>';
                            elseif ($stepDo == '1') echo '
                                <form class="wwForm" method="post" name="fContent" action="">
                                    <div class="row"><div class="left">Домен:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="domain" value="'.$settDomain.'"/></div></div>
                                    <div class="row"><div class="left">URL сайта:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="settUrl" value="'.$settUrl.'"/></div></div>
                                    <div class="row"><div class="left">Название сайта:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="settTitle" value="'.$settTitle.'"/></div></div>
                                    <div class="row"><div class="left">E-mail админа:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="settEmail" value="'.$settEmail.'"/></div></div>
                                    <div class="row"><div class="left">Телефон админа:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="settPhone" value="'.$settPhone.'"/></div></div>
                                    <div class="row"><div class="left">Логин админа:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="settLogin" value="'.$settLogin.'"/></div></div>
                                    <div class="row"><div class="left">Пароль админа:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="settPassword" value="'.$settPassword.'"/></div></div>
                                    <div class="row"><div class="left">ФИО админа:</div><div class="right"><input class="text readonly" type="text" readonly="readonly" name="settFio" value="'.$settFio.'"/></div></div>
                                    <div class="row"></div>
                                </form>
                                <a class="go" href="/install/index.php?step=4">Дальше</a>
                            ';
                        echo '</div>
                    </div>'; break;
                    case '4': echo '<div id="content">
                        <div class="logo"><a href="http://wworks.com.ua/" target="_blank"><img src="/install/images/logo400.jpg" alt="WWcms"/></a></div>
                        <div class="info">
                            <b>Поздравляем вас!</b> Вы успешно установили движок WWcms на ваш хостинг, все настроено и теперь вы можете перейти на сайт. Папка "/install" для установки движка будет автоматически переименована в "/installed", вообще-то мы рекомендуем вам ее удалить, но если вы ее не удалите - она никак не помешает работе сайта.
                            <div class="delInstall"><input type="checkbox" name="delInstall" value="1"/> Удалить папку "install"</div>
                            <a class="go big" href="/install/index.php?step=4&stepDo=1&delInstall=0">На сайт!</a>';
                        echo '</div>
                    </div>'; break;
                }
            echo '</div><div id="footer"><a href="http://wworks.com.ua/" target="_blank">WWcms v1.0</a></div></div></body>
        </html>
    ';

?>