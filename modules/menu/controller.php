<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs;
    $model = new classMenu();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modMenu_menuList'), '?route=menu/admList');

            switch ($act){
                case 'edit': $WWcms->reLoad("?route=menu/admEdit&id=$id"); break;
                case 'del':
                    $model->delItem($id);
                    $WWcms->reLoad('?route=menu/admList');
                break;
                case 'up': case 'down':
                    $model->moveItemOrder('mod_menu_items', $id, $act);
                    $WWcms->reLoad('?route=menu/admList');
                break;
            }

            $items = $model->getItems($Langs->getLang());
            $Smarty->setTPL('href',  '?route=menu/admList');
            $Smarty->setTPL('items', $items);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admEdit': if ($WWcms->getAdmAuth()){
            $id    = $Request->get('id');
            $lang  = $Request->get('lang') ? $Request->get('lang') : $Langs->getLang();
            $Smarty->addBreadCrumbs($Langs->getTitle('modMenu_menuList'), '?route=menu/admList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modMenu_menuEdit'), '?route=menu/admEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item  = $model->getItem($id, $lang);
            $items = $model->getItems($lang);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['descr_title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->checkItemDepth('mod_menu_items', $id, $item['items_pid'])) $WWcms->setMsg($Langs->getTitle('errors_depthMax'));
                elseif ($id && $model->checkItemStructure('mod_menu_items', $id, $item['items_pid'])) $WWcms->setMsg($Langs->getTitle('errors_catsStructure'));
                else{
                    $model->editItem($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad('?route=menu/admList');
                }
            }

            $Smarty->setTPL('href',  '?route=menu/admEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',  $item);
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('lang',  $lang);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>