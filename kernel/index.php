<?php
    ini_set('display_errors', 1);
    if (!include_once "$ROOT_DIR/kernel/wwcms.php") fatalError('Не могу подключить ядро "/kernel/wwcms.php"');
    else{
// Инициализация класса ядра и классов движка
        $WWcms   = new classWWcms();
        $Db      = $WWcms->initClass('Db');
        $Img     = $WWcms->initClass('Img');
        $Session = $WWcms->initClass('Session');
        $Url     = $WWcms->initClass('Url');
        $Request = $WWcms->initClass('Request');
        $Langs   = $WWcms->initClass('Langs');
        $Smarty  = $WWcms->initClass('Smarty');
        $Adminka = $WWcms->initClass('Adminka');

// Инициализация настроек сайта
        $WWcms->initSettings();

// Проверка авторизации пользователя, админа, режима отладки и задание шаблона
        if ($WWcms->getAuth()) $Smarty->setTemplate('cabinet_index.tpl');
        if ($WWcms->getAdmAuth()) $Smarty->setTemplate('adm_index.tpl');
        if (SITE_MODE == '0' && !$WWcms->getSiteOff() && !$WWcms->getAdmAuth()) $Smarty->setTemplate('siteoff_index.tpl');

// Проверка модуля и подключение языка и модуля
        $checkModule = $WWcms->checkModule($Url->getModule());
        switch ($checkModule){
            case 'off': $WWcms->setMsg(sprintf($Langs->getTitle('errors_moduleOff'), $Url->getModule())); break;
            case 'nofiles': $WWcms->setMsg(sprintf($Langs->getTitle('errors_moduleFiles'), $Url->getModule())); break;
            case 'good':
                $checkRights = $Adminka->checkRights($WWcms->getAdmAuth(), $Url->getModule(), $Url->getAction());
                if ($checkRights){
                    $Langs->addModuleTitles($Url->getModule());
                    $WWcms->initModule($Url->getModule());
                }
                else $WWcms->setMsg($Langs->getTitle('errors_moduleAccess'));
            break;
        }

// Передача информации в Smarty
        $Smarty->initVars(array(
            'action'      => $Url->getAction(),
            'module'      => $Url->getModule(),
            'checkModule' => $checkModule,
            'checkRights' => $checkRights,
            'dirs'        => $Smarty->getDirs(),
            'lang'        => $Langs->getLang(),
            'langs'       => $Langs->getLangs(),
            'langTitle'   => $Langs->getLangTitle(),
            'auth'        => $WWcms->getAuth(),
            'admAuth'     => $WWcms->getAdmAuth(),
            'siteOff'     => $WWcms->getSiteOff(),
            'siteMode'    => SITE_MODE,
            'admMenu'     => $Adminka->getMenu($Langs->getAdmMenu(), $WWcms->getAdmAuth()),
            'breadCrumbs' => $Smarty->getBreadCrumbs(),
            'message'     => $WWcms->getMsg(),
            'domain'      => SITE_DOMAIN,
            'title'       => SITE_TITLE,
            'url'         => SITE_URL,
            'TPL'         => $Smarty->getTPL(),
            'titles'      => $Langs->getTitles(),
            'jsTitles'    => $Langs->getJStitles()
        ));

// Подключение шаблона
        $Smarty->display();

// Отключаемся от базы
        $Db = NULL;
    }
?>