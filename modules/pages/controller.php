<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs, $Menu;
    $model = new classPages();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modPages_pagesList'), '?route=pages/admList');

            if ($act == 'edit') $WWcms->reLoad("?route=pages/admEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getItems($Langs->getLang());
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=pages/admList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'descr_title' => $Langs->getTitle('search_title'),
                'descr_descr' => $Langs->getTitle('search_descr')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admEdit': if ($WWcms->getAdmAuth()){
            $id         = $Request->get('id');
            $lang       = $Request->get('lang') ? $Request->get('lang') : $Langs->getLang();
            $Smarty->addBreadCrumbs($Langs->getTitle('modPages_pagesList'), '?route=pages/admList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modPages_pageEdit'), '?route=pages/admEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getItem($id, $lang);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['descr_title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                else{
                    $model->editItem($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=pages/admList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=pages/admEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
            $Smarty->setTPL('lang',       $lang);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'getItem': if (!$WWcms->getAdmAuth()){
            $id   = $Request->get('id');
            $item = $model->getItem($id, $Langs->getLang());
            if ($item['items_public'] == '1'){
                switch ($id){
                    case 3: $Menu->setActiveItem(2); break;
                    case 2: $Menu->setActiveItem(6); break;
                    case 1: $Menu->setActiveItem(7); break;
                }
                $Smarty->setTemplate('article.tpl');
                $Smarty->addBreadCrumbs($item['descr_title'], '?route=pages/getItem&id='.$id);
                $Smarty->setTPL('headTitle',       $item['descr_title']);
                $Smarty->setTPL('headDescription', $item['descr_descr']);
                $Smarty->setTPL('headKeywords',    $item['descr_keywords']);
                $Smarty->setTPL('item',            $item);
            }
            else $WWcms->reLoad('?route=engine/error404');
        } break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>