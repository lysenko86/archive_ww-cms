<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs;
    $model = new classSlider();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modSlider_sliderList'), '?route=slider/admList');

            if ($act == 'edit') $WWcms->reLoad("?route=slider/admEdit&id=$id");

            $items = $model->getItems($Langs->getLang());
            $Smarty->setTPL('href',  '?route=slider/admList');
            $Smarty->setTPL('items', $items);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admEdit': if ($WWcms->getAdmAuth()){
            $id   = $Request->get('id');
            $lang = $Request->get('lang') ? $Request->get('lang') : $Langs->getLang();
            $Smarty->addBreadCrumbs($Langs->getTitle('modSlider_sliderList'), '?route=slider/admList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modSlider_sliderEdit'), '?route=slider/admEdit'.($id ? "&id=$id" : ''));
            $item = $model->getItem($id, $lang);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                $item['photo'] = $WWcms->isLoadFile('photo');
                if ($item['photo'] && !$WWcms->checkFileType($item['photo'], 'images')) $WWcms->setMsg($Langs->getTitle('errors_typeFile'));
                elseif ($item['photo'] && !file_exists(DIR_UPLOAD.'slider')) $WWcms->setMsg($Langs->getTitle('errors_dirSlider'));
                else{
                    $item['photo'] = $item['photo'] ? 'photo' : false;
                    $model->editItem($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=slider/admList");
                }
            }

            $Smarty->setTPL('href', '?route=slider/admEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('item', $item);
            $Smarty->setTPL('lang', $lang);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>