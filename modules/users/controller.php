<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs;
    $model = new classUsers();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modUsers_usersList'), '?route=users/admList');

            if ($act == 'edit') $WWcms->reLoad("?route=users/admEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getItems();
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=users/admList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'items_fio'   => $Langs->getTitle('search_fio'),
                'items_login' => $Langs->getTitle('search_login'),
                'items_email' => $Langs->getTitle('search_email')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admEdit': if ($WWcms->getAdmAuth()){
            $id         = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modUsers_usersList'), '?route=users/admList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modUsers_userEdit'), '?route=users/admEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getItem($id);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['items_type'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['items_login'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->isLogin($id, $item['items_login'])) $WWcms->setMsg($Langs->getTitle('errors_isLogin'));
                elseif (!$Request->testVar($item['items_password'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->isEmail($id, $item['items_email'])) $WWcms->setMsg($Langs->getTitle('errors_isEmail'));
                else{
                    $model->editItem($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=users/admList$GETvarsStr");
                }
            }

            $types = $model->getTypes();
            $Smarty->setTPL('href',       '?route=users/admEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
            $Smarty->setTPL('types',      $types);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'registration': if (!$WWcms->getAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modUsers_titleRegistration'), '?route=users/registration');
            $item = $model->getItem();
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['items_login'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->isLogin(0, $item['items_login'])) $WWcms->setMsg($Langs->getTitle('errors_isLogin'));
                elseif (!$Request->testVar($item['items_password'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->isEmail(0, $item['items_email'])) $WWcms->setMsg($Langs->getTitle('errors_isEmail'));
                else{
                    $model->editItem(false, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=users/auth");
                }
            }

            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'auth': if (!$WWcms->getAuth()){
            $login    = $Request->post('login');
            $password = $Request->post('password');
            $Smarty->addBreadCrumbs($Langs->getTitle('modUsers_titleAuth'), '?route=users/auth');
 
            if ($login || $password){
                $auth = $model->login($login, $password);
                switch ($auth){
                    case 'none':
                        $WWcms->setMsg($Langs->getTitle('modUsers_errorsAuth'), $WWcms::MSG_ERROR, true);
                        $WWcms->reLoad('?route=users/auth');
                    break;
                    case 'access':
                        $WWcms->setMsg($Langs->getTitle('modUsers_errorsAccess'), $WWcms::MSG_ERROR, true);
                        $WWcms->reLoad('?route=users/auth');
                    break;
                    default:
                        $WWcms->setAuth($auth);
                        $WWcms->reLoad('?route=users/cabinet');
                    break;
                }
            }

        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'remind': if (!$WWcms->getAuth()){
            $email = $Request->get('email');
            $item  = $model->getUserByEmail($email);
            $WWcms->sendMail($email, sprintf($Langs->getTitle('modUsers_mailRemindTitle'), SITE_TITLE), sprintf($Langs->getTitle('modUsers_mailRemindContent'), $item['password']));
            $WWcms->setMsg($Langs->getTitle('modUsers_doneRemindPass'), $WWcms::MSG_INFO, true);
            $WWcms->reLoad('?route=users/auth');
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'exit': if ($WWcms->getAuth()){
            $WWcms->setAuth();
            $WWcms->reLoad();
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'cabinet': if ($WWcms->getAuth()){
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>