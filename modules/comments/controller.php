<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs;
    $model = new classComments();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modComments_commentsList'), '?route=comments/admList');

            $items = $model->getItems();
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=comments/admList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('pager',      $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>