<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs;
    $model = new classReviews();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modReviews_msgList'), '?route=reviews/admList');

            $items = $model->getItems($Langs->getLang());
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=reviews/admList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('pager',      $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'getItems': if (!$WWcms->getAdmAuth()){
            $fio     = $Request->post('fio')     ? $Request->post('fio')     : '';
            $message = $Request->post('message') ? $Request->post('message') : '';
            $items   = $model->getItems($Langs->getLang());
            $pager   = $model->getPager();

            if ($Request->isPost()){
                if (!$Request->testVar($fio)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($message)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                else{
                    $model->editItem(array(
                        'items_date'   => date("Y-m-d H:i:s"),
                        'items_fio'    => $fio,
                        'items_review' => $message
                    ));
                    $WWcms->sendMail(ADMIN_EMAIL, $Langs->getTitle('modReviews_mailTitle'), sprintf("Имя: %s\n\rСообщение: %s", $fio, $message));
                    $WWcms->setMsg($Langs->getTitle('done_sendMessage'), 2, true);
                    $WWcms->reLoad("?route=reviews/getItems");
                }
            }

            $Smarty->setTPL('fio',        $fio);
            $Smarty->setTPL('message',    $message);
            $Smarty->setTPL('href',       '?route=reviews/getItems');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('reviews',    $items);
            $Smarty->setTPL('pager',      $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>