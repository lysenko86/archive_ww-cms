<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs, $Adminka;
    $model = new classEngine();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : ''));





    switch ($Url->getAction()){
        case 'adminka': if (!$WWcms->getAdmAuth()){
            $login    = $Request->post('login');
            $password = $Request->post('password');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_adminAuth'), '?route=engine/adminka');

            if ($login || $password){
                $auth = $Adminka->admLogin($login, $password);
                switch ($auth){
                    case 'admin'  : $WWcms->setAdmAuth('admin'); break;
                    case 'none'   : $WWcms->setMsg($Langs->getTitle('modEngine_errorsAuth'), $WWcms::MSG_ERROR, true); break;
                    case 'access' : $WWcms->setMsg($Langs->getTitle('modEngine_errorsAccess'), $WWcms::MSG_ERROR, true); break;
                    default       : $WWcms->setAdmAuth($auth); break;
                }
                $WWcms->reLoad('?route=engine/adminka');
            }

            $Smarty->setTemplate('adm_index.tpl');
        } break;





        case 'admExit': if ($WWcms->getAdmAuth()){
            $WWcms->setAdmAuth();
            $WWcms->reLoad();
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'listAdmins': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_adminsList'), '?route=engine/listAdmins');
    
            if ($act == 'edit') $WWcms->reLoad("?route=engine/editAdmin&id=$id");
    
            $items = $Adminka->getAdmins();
            $Smarty->setTPL('href',  '?route=engine/listAdmins');
            $Smarty->setTPL('items', $items);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'editAdmin': if ($WWcms->getAdmAuth()){
            $id   = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_adminsList'), '?route=engine/listAdmins');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_adminEdit'), '?route=engine/editAdmin'.($id ? "&id=$id" : ''));
            $item = $Adminka->getAdmin($id);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) if ($k != 'rights') $item[$k] = $v;
                $rights = $Request->post('rights');
                foreach ($item['rights'] as $k=>$v) $item['rights'][$k]['check'] = isset($rights[$k]) ? '1' : '0';
                if (!$Request->testVar($item['login'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['password'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['email'], REG_EMAIL)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmail'));
                elseif (!$Request->testVar($item['login'], REG_LOGIN)) $WWcms->setMsg($Langs->getTitle('errors_fieldLogin'));
                elseif ($Adminka->isLoginAdmin($id, $item['login'])) $WWcms->setMsg($Langs->getTitle('errors_isLogin'));
                elseif ($Adminka->isEmailAdmin($id, $item['email'])) $WWcms->setMsg($Langs->getTitle('errors_isEmail'));
                else{
                    $Adminka->editAdmin($id ? $id : null, array(
                        'fio'      => $item['fio'],
                        'email'    => $item['email'],
                        'login'    => $item['login'],
                        'password' => $item['password'],
                        'rights'   => $item['rights']
                    ));
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad('?route=engine/listAdmins');
                }
            }

            $Smarty->setTPL('href', '?route=engine/editAdmin');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'settSite': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_settSite'), '?route=engine/settSite');
            $item = $Adminka->getSettings();
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['SITE_DOMAIN'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['SITE_URL'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                else{
                    $Adminka->setSettings(array(
                        'SITE_DOMAIN' => $item['SITE_DOMAIN'],
                        'SITE_URL'    => $item['SITE_URL'],
                        'SITE_TITLE'  => $item['SITE_TITLE'],
                        'SITE_MODE'   => $item['SITE_MODE']
                    ));
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad('?route=engine/settSite');
                }
            }

            $Smarty->setTPL('href', '?route=engine/settSite');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'settAdmin': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_settAdmin'), '?route=engine/settAdmin');
            $item = $Adminka->getSettings();
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['ADMIN_EMAIL'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['ADMIN_LOGIN'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['ADMIN_PASSWORD'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['ADMIN_EMAIL'], REG_EMAIL)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmail'));
                elseif (!$Request->testVar($item['ADMIN_LOGIN'], REG_LOGIN)) $WWcms->setMsg($Langs->getTitle('errors_fieldLogin'));
                elseif ($Adminka->isLoginAdmin('admin', $item['login'])) $WWcms->setMsg($Langs->getTitle('errors_isLogin'));
                elseif ($Adminka->isEmailAdmin('admin', $item['email'])) $WWcms->setMsg($Langs->getTitle('errors_isEmail'));
                else{
                    $Adminka->setSettings(array(
                        'ADMIN_FIO'      => $item['ADMIN_FIO'],
                        'ADMIN_EMAIL'    => $item['ADMIN_EMAIL'],
                        'ADMIN_PHONE'    => $item['ADMIN_PHONE'],
                        'ADMIN_LOGIN'    => $item['ADMIN_LOGIN'],
                        'ADMIN_PASSWORD' => $item['ADMIN_PASSWORD']
                    ));
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad('?route=engine/settAdmin');
                }
            }

            $Smarty->setTPL('href', '?route=engine/settAdmin');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'listModules': if ($WWcms->getAdmAuth()){
            $act    = $Request->get('act');
            $module = $Request->get('module');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_modulesList'), '?route=engine/listModules');
    
            switch($act){
                case 'add':
                    $Adminka->installModule($module);
                    $WWcms->setMsg($Langs->getTitle('done_moduleInstalled'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad('?route=engine/listModules');
                break;
                case 'del':
                    $Adminka->delModule($module);
                    $WWcms->setMsg($Langs->getTitle('done_delItem'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad('?route=engine/listModules');
                break;
            }
    
            $iItems = $Adminka->getImodules();
            $nItems = $Adminka->getNmodules();
            $Smarty->setTPL('href',   '?route=engine/listModules');
            $Smarty->setTPL('iItems', $iItems);
            $Smarty->setTPL('nItems', $nItems);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'listLangs': if ($WWcms->getAdmAuth()){
            $key = $Request->get('key');
            $act = $Request->get('act');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_langsList'), '?route=engine/listModules');
    
            switch($act){
                case 'active':
                    $Adminka->langsChangeActive($key);
                    if ($key == $Langs->getLang()) $Langs->setLang();
                    $WWcms->reLoad('?route=engine/listLangs');
                break;
                case 'del':
                    $Adminka->langsDelItem($key);
                    if ($key == $Langs->getLang()) $Langs->setLang();
                    $WWcms->setMsg($Langs->getTitle('done_delItem'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad('?route=engine/listLangs');
                break;
                case 'edit': $WWcms->reLoad("?route=engine/editLang&key=$key"); break;
            }
    
            $items = $Adminka->langsGetItems();
            $Smarty->setTPL('href',  '?route=engine/listLangs');
            $Smarty->setTPL('items', $items);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'editLang': if ($WWcms->getAdmAuth()){
            $key  = $Request->get('key');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_langsList'), '?route=engine/listModules');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_langEdit'), '?route=engine/editAdmin'.($key ? "&key=$key" : ''));
            $item = $Adminka->langsGetItem($key);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['key'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (array_key_exists($item['key'], $Langs->getLangs())) $WWcms->setMsg($Langs->getTitle('errors_isLang'));
                else{
                    $Adminka->langsEditItem($key, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad('?route=engine/listLangs');
                }
            }

            $Smarty->setTPL('href', '?route=engine/editLang');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'listTitles': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_titlesList'), '?route=engine/listTitles');
            $GETvars = $model->getGETvars();
    
            $tables = $Adminka->titlesGetTables();
            $items  = $Adminka->titlesGetItems($GETvars['GVfilter']);
            $Smarty->setTPL('href',       '?route=engine/listTitles');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('tables',     $tables);
            $Smarty->setTPL('items',      $items);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'addTitle': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_titlesList'), '?route=engine/listTitles');
            $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_titleAdd'), '?route=engine/addTitle');
            $item   = $Adminka->titlesGetItem();
            foreach ($Langs->getLangs() as $k=>$v) $item['val_'.$k] = '';
            $tables = $Adminka->titlesGetTables();
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['table'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['var'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['var'], REG_VAR)) $WWcms->setMsg($Langs->getTitle('errors_fieldVar'));
                elseif (array_key_exists($item['var'], $Langs->getTitles()) || array_key_exists($item['var'], $Langs->getJStitles())) $WWcms->setMsg($Langs->getTitle('errors_isVar'));
                else{
                    $Adminka->titlesAddItem($item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad('?route=engine/listTitles');
                }
            }

            $Smarty->setTPL('href',   '?route=engine/addTitle');
            $Smarty->setTPL('tables', $tables);
            $Smarty->setTPL('item',   $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'utPhpinfo': if ($WWcms->getAdmAuth()){ $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_utPhpinfo'), '?route=engine/utPhpinfo'); } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'utDumper': if ($WWcms->getAdmAuth()){ $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_utDumper'), '?route=engine/utDumper'); } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'utChmod': if ($WWcms->getAdmAuth()){ $Smarty->addBreadCrumbs($Langs->getTitle('modEngine_utChmod'), '?route=engine/utChmod'); } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'setLang':
            $lang = $Request->get('lang');
            $link = $Request->get('link') == 'adminka' ? '?route=engine/adminka' : '?';
            $Langs->setLang($lang);
            $WWcms->reLoad($link);
        break;





        case 'siteoff': if (SITE_MODE == '0' && !$WWcms->getSiteOff()){
            $login    = $Request->post('login');
            $password = $Request->post('password');
            if ($login || $password){
                if ($Adminka->siteOffLogin($login, $password)){
                    $WWcms->setSiteOff(true);
                    $WWcms->reLoad();
                }
                else $WWcms->reLoad('/?route=engine/siteoff');
            }
            $Smarty->setTemplate('siteoff_index.tpl');
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'siteOffExit': if (SITE_MODE == '0' && $WWcms->getSiteOff()){
            $WWcms->setSiteOff();
            $WWcms->reLoad();
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'home': if (!$WWcms->getAdmAuth()){
            $Smarty->setTPL('title',           'Главная страница');
            $Smarty->setTPL('headTitle',       'Главная страница');
            $Smarty->setTPL('headDescription', 'Главная страница');
            $Smarty->setTPL('headKeywords',    'Главная страница');
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'error404': if (!$WWcms->getAdmAuth()) $Smarty->setTemplate('error404.tpl'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>