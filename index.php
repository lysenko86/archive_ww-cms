<?php
    function fatalError($txt){ exit('<html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <title>Критическая ошибка!</title>
        </head>
        <body style="margin: 0px; padding: 0px;"><div style="
            font-family: sans-serif;
            font-size: 14px;
            font-weight: bold;
            line-height: 16px;
            padding: 3px 10px;
            background-color: #FF0000;
            color: #FFFFFF;
        ">Критическая ошибка! '.$txt.'</div></body>
    </html>'); }



    $ROOT_DIR = $_SERVER['SCRIPT_FILENAME'];
    $ROOT_DIR = substr($ROOT_DIR, 0, strlen($ROOT_DIR)-9);
    if (is_dir("{$ROOT_DIR}install")){ if (!include_once "{$ROOT_DIR}install/index.php") fatalError('Не могу подключить файл ядра "/install/index.php"'); }
    elseif (!include_once "{$ROOT_DIR}kernel/index.php") fatalError('Не могу подключить файл ядра "/kernel/index.php"');
?>