<?php
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



    echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <title>PHP ChMod</title>
        </head>
        <body style="background: #ECE9D8;">';
            if ($_GET['act'] == 'true'){
                getFilesFromDir('.');
                echo '<div style="padding-top: 150px; text-align: center; font: bold 16px/18px \'Arial\'; color: #0000FF;">Права доступа "0777" на все папки и файлы сайта успешно установлены.</div>';
            }
            else{
                echo '<div style="padding-top: 120px; text-align: center; font: bold 16px/18px \'Arial\';">Внимание, данная утилита установит права доступа "0777" на все папки и файлы сайта, вы уверены, что хотите выполнить это действие?</div>
                <div style="padding-top: 50px; text-align: center;"><a style="padding: 5px 10px; border-radius: 5px; background: #0000FF; font: bold 16px/18px \'Arial\'; text-decoration: none; color: #FFFFFF;" href="?act=true">Выполнить</a></div>';
            }
        echo '</body>
    </html>';
?>