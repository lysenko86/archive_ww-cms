<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs, $Menu;
    $model = new classTasks();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modTasks_tasksList'), '?route=tasks/admList');

            if ($act == 'edit') $WWcms->reLoad("?route=tasks/admEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getItems($Langs->getLang());
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=tasks/admList');
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
            $Smarty->addBreadCrumbs($Langs->getTitle('modTasks_tasksList'), '?route=tasks/admList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modTasks_tasksEdit'), '?route=tasks/admEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getItem($id, $lang);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['descr_title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['items_date'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                else{
                    $model->editItem($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=tasks/admList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=tasks/admEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
            $Smarty->setTPL('lang',       $lang);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'getItemsT': case 'getItemsR': if (!$WWcms->getAdmAuth()){
            if ($Url->getAction() == 'getItemsT'){
                $Menu->setActiveItem(4);
                $Smarty->addBreadCrumbs($Langs->getTitle('modTasks_tasks'), '?route=tasks/getItemsT');
                $Smarty->setTPL('href', '?route=tasks/getItemsT');
            }
            else{
                $Menu->setActiveItem(5);
                $Smarty->addBreadCrumbs($Langs->getTitle('modTasks_reports'), '?route=tasks/getItemsR');
                $Smarty->setTPL('href', '?route=tasks/getItemsR');
            }
            $items = $model->getItems($Langs->getLang(), "`items`.`public` = '1'");
            $pager = $model->getPager();
            $tasks = $model->getItems($Langs->getLang(), "`items`.`public` = '1' AND `items`.`home` = '1'", false);
            $Smarty->setTemplate('articles.tpl');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('pager',      $pager);
            $Smarty->setTPL('tasks',      $tasks);
        } break;





        case 'getItemT': case 'getItemR': if (!$WWcms->getAdmAuth()){
            $id   = $Request->get('id');
            $item = $model->getItem($id, $Langs->getLang());
            if ($item['items_public'] == '1'){
                if ($Url->getAction() == 'getItemT') $Menu->setActiveItem(4);
                else $Menu->setActiveItem(5);
                $Smarty->addBreadCrumbs($item['descr_title'], '?route=tasks/'.$Url->getAction().'&id='.$id);
                $Smarty->setTemplate('article.tpl');

                $Comments = $WWcms->initModuleModel('comments');
                $fio     = $Request->post('fio')     ? $Request->post('fio')     : '';
                $comment = $Request->post('comment') ? $Request->post('comment') : '';
                if ($Request->isPost()){
                    if (!$Request->testVar($fio)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                    elseif (!$Request->testVar($comment)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                    else{
                        $Comments->editItem(array(
                            'items_type'    => 'tasks',
                            'items_mid'     => $id,
                            'items_date'    => date("Y-m-d H:i:s"),
                            'items_fio'     => $fio,
                            'items_comment' => $comment,
                            'items_public'  => 1
                        ));
                        $WWcms->setMsg($Langs->getTitle('done_sendMessage'), 2, true);
                        $WWcms->reLoad('?route=tasks/'.($Url->getAction()).'&id='.$id);
                    }
                }
                $comments = $Comments->getItems(true, "`type` = 'tasks' AND `mid` = '$id'", false);
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