<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs, $Menu;
    $model = new classNews();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modNews_newsList'), '?route=news/admList');

            if ($act == 'edit') $WWcms->reLoad("?route=news/admEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getItems($Langs->getLang());
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=news/admList');
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
            $Smarty->addBreadCrumbs($Langs->getTitle('modNews_newsList'), '?route=news/admList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modNews_newsEdit'), '?route=news/admEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getItem($id, $lang);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                $item['photo'] = $WWcms->isLoadFile('photo');
                if (!$Request->testVar($item['descr_title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['items_date'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($item['photo'] && !$WWcms->checkFileType($item['photo'], 'images')) $WWcms->setMsg($Langs->getTitle('errors_typeFile'));
                elseif ($item['photo'] && !file_exists(DIR_UPLOAD.'news')) $WWcms->setMsg($Langs->getTitle('errors_dirNews'));
                else{
                    $item['photo'] = $item['photo'] ? 'photo' : false;
                    $model->editItem($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=news/admList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=news/admEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
            $Smarty->setTPL('lang',       $lang);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'getItems': if (!$WWcms->getAdmAuth()){
            $Menu->setActiveItem(3);
            $Smarty->addBreadCrumbs($Langs->getTitle('modNews_news'), '?route=news/getItems');
            $items = $model->getItems($Langs->getLang(), "`items`.`public` = '1'");
            $pager = $model->getPager();
            $Tasks = $WWcms->initModuleModel('tasks');
            $tasks = $Tasks->getItems($Langs->getLang(), "`items`.`public` = '1' AND `items`.`home` = '1'", false);
            unset($Tasks);
            $Smarty->setTemplate('articles.tpl');
            $Smarty->setTPL('href',       '?route=news/getItems');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('pager',      $pager);
            $Smarty->setTPL('tasks',      $tasks);
        } break;





        case 'getItem': if (!$WWcms->getAdmAuth()){
            $id   = $Request->get('id');
            $item = $model->getItem($id, $Langs->getLang());
            if ($item['items_public'] == '1'){
                $Menu->setActiveItem(3);
                $Smarty->setTemplate('article.tpl');
                $Smarty->addBreadCrumbs($item['descr_title'], '?route=news/getItem&id='.$id);

                $Comments = $WWcms->initModuleModel('comments');
                $fio     = $Request->post('fio')     ? $Request->post('fio')     : '';
                $comment = $Request->post('comment') ? $Request->post('comment') : '';
                if ($Request->isPost()){
                    if (!$Request->testVar($fio)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                    elseif (!$Request->testVar($comment)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                    else{
                        $Comments->editItem(array(
                            'items_type'    => 'news',
                            'items_mid'     => $id,
                            'items_date'    => date("Y-m-d H:i:s"),
                            'items_fio'     => $fio,
                            'items_comment' => $comment,
                            'items_public'  => 1
                        ));
                        $WWcms->setMsg($Langs->getTitle('done_sendMessage'), 2, true);
                        $WWcms->reLoad('?route=news/getItem&id='.$id);
                    }
                }
                $comments = $Comments->getItems(true, "`type` = 'news' AND `mid` = '$id'", false);
                unset($Comments);

                $Smarty->setTPL('headTitle',       $item['descr_title']);
                $Smarty->setTPL('headDescription', $item['descr_descr']);
                $Smarty->setTPL('headKeywords',    $item['descr_keywords']);
                $Smarty->setTPL('item',            $item);
                $Smarty->setTPL('comments',        $comments);
                $Smarty->setTPL('fio',             $fio);
                $Smarty->setTPL('comment',         $comment);
            }
            else $WWcms->reLoad('?route=engine/error404');
        } break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>