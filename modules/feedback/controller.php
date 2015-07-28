<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs;
    $model = new classFeedback();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modFeedback_msgList'), '?route=feedback/admList');

            $items = $model->getItems($Langs->getLang());
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=feedback/admList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>