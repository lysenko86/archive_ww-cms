<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs;
    $model = new classPhotos();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admCatsList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modPhotos_catsList'), '?route=photos/admCatsList');

            switch ($act){
                case 'edit': $WWcms->reLoad("?route=photos/admCatEdit&id=$id"); break;
                case 'del':
                    $model->delCatsItem($id);
                    $WWcms->reLoad('?route=photos/admCatsList');
                break;
                case 'up': case 'down':
                    $model->moveItemOrder('mod_photos_cats', $id, $act);
                    $WWcms->reLoad('?route=photos/admCatsList');
                break;
            }

            $items = $model->getCatsItems($Langs->getLang());
            $Smarty->setTPL('href',  '?route=photos/admCatsList');
            $Smarty->setTPL('items', $items);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admCatEdit': if ($WWcms->getAdmAuth()){
            $id    = $Request->get('id');
            $lang  = $Request->get('lang') ? $Request->get('lang') : $Langs->getLang();
            $Smarty->addBreadCrumbs($Langs->getTitle('modPhotos_catsList'), '?route=photos/admCatsList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modPhotos_catEdit'), '?route=photos/admCatEdit'.($id ? "&id=$id" : ''));
            $item  = $model->getCatItem($id, $lang);
            $items = $model->getCatsItems($lang);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['descr_title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->checkItemDepth('mod_photos_cats', $id, $item['items_pid'])) $WWcms->setMsg($Langs->getTitle('errors_depthMax'));
                elseif ($id && $model->checkItemStructure('mod_photos_cats', $id, $item['items_pid'])) $WWcms->setMsg($Langs->getTitle('errors_catsStructure'));
                else{
                    $model->editCatsItem($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad('?route=photos/admCatsList');
               }
            }

            $Smarty->setTPL('href',  '?route=photos/admCatEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('item',  $item);
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('lang',  $lang);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admPhotosList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modPhotos_photosList'), '?route=photos/admPhotosList');

            if ($act == 'edit') $WWcms->reLoad("?route=photos/admPhotoEdit&id=$id");

            $items = $model->getItems($Langs->getLang());
            $Smarty->setTPL('href',  '?route=photos/admPhotosList');
            $Smarty->setTPL('items', $items);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admPhotoEdit': if ($WWcms->getAdmAuth()){
            $id   = $Request->get('id');
            $lang = $Request->get('lang') ? $Request->get('lang') : $Langs->getLang();
            $Smarty->addBreadCrumbs($Langs->getTitle('modPhotos_photosList'), '?route=photos/admPhotosList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modPhotos_photoEdit'), '?route=photos/admPhotoEdit'.($id ? "&id=$id" : ''));
            $item = $model->getItem($id, $lang);
            $cats = $model->getCatsItems($lang);

            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                $item['photo'] = $WWcms->isLoadFile('photo');
                if ($item['photo'] && !$WWcms->checkFileType($item['photo'], 'images')) $WWcms->setMsg($Langs->getTitle('errors_typeFile'));
                elseif ($item['photo'] && !file_exists(DIR_UPLOAD.'photos')) $WWcms->setMsg($Langs->getTitle('errors_dirPhotos'));
                else{
                    $item['photo'] = $item['photo'] ? 'photo' : false;
                    $model->editItem($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=photos/admPhotosList");
                }
            }

            $Smarty->setTPL('href', '?route=photos/admPhotoEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('item', $item);
            $Smarty->setTPL('cats', $cats);
            $Smarty->setTPL('lang', $lang);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>