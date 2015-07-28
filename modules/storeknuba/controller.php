<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs, $User;
    $model = new classStoreknuba();
    $usr   = $User->getUser($WWcms->getAuth());
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admRegistryList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_registryList'), '?route=storeknuba/admRegistryList');

            if ($act == 'edit') $WWcms->reLoad("?route=storeknuba/admRegistryEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getRegistries();
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/admRegistryList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'items_title' => $Langs->getTitle('search_title')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admRegistryEdit': if ($WWcms->getAdmAuth()){
            $id         = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_registryList'), '?route=storeknuba/admRegistryList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_registryEdit'), '?route=storeknuba/admRegistryEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getRegistry($id);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['items_title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->isRegistryTitle($id, $item['items_title'])) $WWcms->setMsg($Langs->getTitle('modStoreknuba_errorsRegistryIsTitle'));
                else{
                    $model->editRegistry($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=storeknuba/admRegistryList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=storeknuba/admRegistryEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admProductsList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_productsList'), '?route=storeknuba/admProductsList');

            if ($act == 'edit') $WWcms->reLoad("?route=storeknuba/admProductEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getProducts(true, '', false, '');
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/admProductsList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'r_title' => $Langs->getTitle('search_title')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admProductEdit': if ($WWcms->getAdmAuth()){
            $id         = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_productsList'), '?route=storeknuba/admProductsList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_productEdit'), '?route=storeknuba/admProductEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getProduct($id);
            $registry   = $model->getRegistries(false, '`items`.`title` ASC');
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                $item['items_count'] = str_replace(',', '.', $item['items_count']) * 1;
                if (!$Request->testVar($item['items_code'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['items_date'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['items_rid'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->isProductCode($id, $item['items_code'])) $WWcms->setMsg($Langs->getTitle('modStoreknuba_errorsProductsIsCode'));
                else{
                    $model->editProduct($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=storeknuba/admProductsList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=storeknuba/admProductEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
            $Smarty->setTPL('registry',   $registry);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admBidsList': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_bidsList'), '?route=storeknuba/admBidsList');

            $items  = $model->getBids();
            $status = $model->getBidsStatus();
            $pager  = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/admBidsList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('status',     $status);
            $Smarty->setTPL('pager',      $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admSuppliesList': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_suppliesList'), '?route=storeknuba/admSuppliesList');

            $items  = $model->getSupplies(true, '', false, '');
            $status = $model->getSuppliesStatus();
            $pager  = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/admSuppliesList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('status',     $status);
            $Smarty->setTPL('pager',      $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admProductsImport': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_productsImport'), '?route=storeknuba/admProductsImport');
 
            if ($Request->isPost()){
                if (!file_exists(DIR_ROOT.'products.xml')) $WWcms->setMsg($Langs->getTitle('errors_loadFile'));
                else{
                    $errors    = $model->importProducts(DIR_ROOT.'products.xml');
                    $strErrors = '';
                    foreach ($errors as $k=>$v) $strErrors .= sprintf($Langs->getTitle('modStoreknuba_errorsImportCode'), $v).'<br/>';
                    $WWcms->setMsg($Langs->getTitle('modStoreknuba_doneImport').'<br/><br/>'.$strErrors, 2, true);
                    $WWcms->reLoad("?route=storeknuba/admProductsImport");
                }
            }

            $Smarty->setTPL('href', '?route=storeknuba/admProductsImport');
        } else $WWcms->reLoad('?route=engine/error404'); break;















        case 'bidsList': if ($WWcms->getAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_bidsList'), '?route=storeknuba/bidsList');

            $status   = $Request->get('status');
            $addWhere = '';
            if ($usr['items_type'] == 'offices') $addWhere = " AND `items`.`status` ".($status ? "= '$status'" : ' IN(\'created\', \'confirm\', \'need\')')." AND `items`.`gid` = '{$usr['items_gid']}'";
            elseif ($usr['items_type'] == 'prorektor') $addWhere = " AND `items`.`status` = '".($status ? $status : 'created')."'";
            elseif ($usr['items_type'] == 'supply') $addWhere = " AND `items`.`status` = '".($status ? $status : 'confirm')."'";
            $items  = $model->getBids(true, '', false, $addWhere);
            $pager  = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/bidsList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('pager',      $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'bidAdd': if ($WWcms->getAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_bidsList'), '?route=storeknuba/bidsList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_bidAdd'), '?route=storeknuba/bidAdd');
            $IDs     = $titles = $counts = array();
            $comment = '';
            $errors  = '';
 
            if ($Request->isPost()){
                $IDs     = $Request->post('IDs')     ? $Request->post('IDs')     : array();
                $titles  = $Request->post('titles')  ? $Request->post('titles')  : array();
                $counts  = $Request->post('counts')  ? $Request->post('counts')  : array();
                $comment = $Request->post('comment') ? $Request->post('comment') : '';
                foreach ($counts as $k=>$v) $counts[$k] = str_replace(',', '.', $v) * 1;
                foreach ($IDs as $k=>$v) if (empty($titles[$k]) && empty($counts[$k])) unset($IDs[$k], $titles[$k], $counts[$k]);
                if (in_array('', $titles)) $errors .= $Langs->getTitle('errors_fieldEmpty').'<br/>';
                if (in_array('', $counts)) $errors .= $Langs->getTitle('errors_fieldEmpty').'<br/>';
                foreach ($counts as $k=>$v) if ($v <= 0) $errors .= $Langs->getTitle('modStoreknuba_errorsCountZero').'<br/>';
                if (!count($IDs)) $errors .= $Langs->getTitle('modStoreknuba_errorsCountItems').'<br/>';
                if ($errors) $WWcms->setMsg($errors);
                else{
                    $model->addBid(array(
                        'items_uid'     => $usr['items_id'],
                        'items_gid'     => $usr['items_gid'],
                        'items_status'  => 'created',
                        'items_comment' => $comment,
                        'IDs'           => $IDs,
                        'titles'        => $titles,
                        'counts'        => $counts
                    ));
                    $WWcms->setMsg($Langs->getTitle('modStoreknuba_doneSendBid'), 2, true);
                    $WWcms->reLoad("?route=storeknuba/bidsList");
                }
            }

            $Smarty->setTPL('href',    '?route=storeknuba/bidAdd');
            $Smarty->setTPL('IDs',     $IDs);
            $Smarty->setTPL('titles',  $titles);
            $Smarty->setTPL('counts',  $counts);
            $Smarty->setTPL('comment', $comment);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'productsList': if ($WWcms->getAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_productsList'), '?route=storeknuba/productsList');

            $items = $model->getProducts(true, '', false, '');
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/productsList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'r_title' => $Langs->getTitle('search_title')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'productsGroupsList': if ($WWcms->getAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_productsList'), '?route=storeknuba/productsGroupsList');

            $items = $model->getProductsGroups(true, '', false, " AND `items`.`gid` = {$usr['items_gid']} AND `items`.`deleted` = '0'");
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/productsGroupsList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'r_title' => $Langs->getTitle('search_title')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'registryList': if ($WWcms->getAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_registryList'), '?route=storeknuba/registryList');

            if ($act == 'edit') $WWcms->reLoad("?route=storeknuba/registryEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getRegistries();
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/registryList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'items_title' => $Langs->getTitle('search_title')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'registryEdit': if ($WWcms->getAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_registryList'), '?route=storeknuba/registryList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_registryEdit'), '?route=storeknuba/registryEdit');
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getRegistry();
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['items_title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($model->isRegistryTitle(false, $item['items_title'])) $WWcms->setMsg($Langs->getTitle('modStoreknuba_errorsRegistryIsTitle'));
                else{
                    $model->editRegistry(false, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), 2, true);
                    $WWcms->reLoad("?route=storeknuba/registryList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=storeknuba/registryEdit');
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'suppliesList': if ($WWcms->getAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_suppliesList'), '?route=storeknuba/suppliesList');

            $items  = $model->getSupplies(true, '', false, " AND `items`.`gid` = '{$usr['items_gid']}'");
            $status = $model->getSuppliesStatus();
            $pager  = $model->getPager();
            $Smarty->setTPL('href',       '?route=storeknuba/suppliesList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('status',     $status);
            $Smarty->setTPL('pager',      $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'supplyAdd': if ($WWcms->getAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_suppliesList'), '?route=storeknuba/suppliesList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoreknuba_supplyAdd'), '?route=storeknuba/supplyAdd');
            $IDs     = $titles = $counts = $prices = array();
            $comment = '';
            $errors  = '';
 
            if ($Request->isPost()){
                $IDs     = $Request->post('IDs')     ? $Request->post('IDs')     : array();
                $titles  = $Request->post('titles')  ? $Request->post('titles')  : array();
                $counts  = $Request->post('counts')  ? $Request->post('counts')  : array();
                $prices  = $Request->post('prices')  ? $Request->post('prices')  : array();
                $comment = $Request->post('comment') ? $Request->post('comment') : '';
                foreach ($counts as $k=>$v){
                    $counts[$k] = str_replace(',', '.', $counts[$k]) * 1;
                    $prices[$k] = str_replace(',', '.', $prices[$k]) * 1;
                }
                foreach ($IDs as $k=>$v) if (empty($titles[$k]) && empty($counts[$k]) && empty($prices[$k])) unset($IDs[$k], $titles[$k], $counts[$k], $prices[$k]);
                if (in_array('', $IDs)) $errors .= $Langs->getTitle('errors_fieldEmpty').'<br/>';
                if (in_array('', $counts)) $errors .= $Langs->getTitle('errors_fieldEmpty').'<br/>';
                if (in_array('', $prices)) $errors .= $Langs->getTitle('errors_fieldEmpty').'<br/>';
                foreach ($counts as $k=>$v) if ($v <= 0) $errors .= $Langs->getTitle('modStoreknuba_errorsCountZero').'<br/>';
                foreach ($prices as $k=>$v) if ($v <= 0) $errors .= $Langs->getTitle('modStoreknuba_errorsPriceZero').'<br/>';
                if (!count($IDs)) $errors .= $Langs->getTitle('modStoreknuba_errorsCountItems').'<br/>';
                if ($errors) $WWcms->setMsg($errors);
                else{
                    $model->addSupply(array(
                        'items_gid'     => $usr['items_gid'],
                        'items_uid'     => $usr['items_id'],
                        'items_status'  => 'created',
                        'items_comment' => $comment,
                        'IDs'           => $IDs,
                        'titles'        => $titles,
                        'counts'        => $counts,
                        'prices'        => $prices
                    ));
                    $WWcms->setMsg($Langs->getTitle('modStoreknuba_doneSave'), 2, true);
                    $WWcms->reLoad("?route=storeknuba/suppliesList");
                }
            }

            $Smarty->setTPL('href',    '?route=storeknuba/supplyAdd');
            $Smarty->setTPL('IDs',     $IDs);
            $Smarty->setTPL('titles',  $titles);
            $Smarty->setTPL('counts',  $counts);
            $Smarty->setTPL('prices',  $prices);
            $Smarty->setTPL('comment', $comment);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'printer': if ($WWcms->getAuth() || $WWcms->getAdmAuth()){ global $Db;
            $act = $Request->get('act') ? $Request->get('act') : false;
            $id  = $Request->get('id')  ? $Request->get('id')  : false;
            define('FPDF_FONTPATH', DIR_INCLUDES.'fpdf17/font/');
            require_once(DIR_INCLUDES.'fpdf17/fpdf.php');
            $pdf = new FPDF();
            $pdf->AddFont('FontCYR', '', 'tahoma.php');
            switch ($act){
                case 'created':
                    $sql = $Db->query("
                        SELECT `b`.*, DATE_FORMAT(`b`.`date`, '%d.%m.%Y') AS `tDate`, `g`.`title` AS `gTitle`
                        FROM `mod_storeknuba_bids` AS `b`
                            LEFT JOIN `mod_users_groups` AS `g` ON `g`.`id` = `b`.`gid`
                        WHERE `b`.`id` = '$id'
                    ");
                    $row = $sql->fetch();
                    $pdf->SetFont('FontCYR', '', 18);
                    $pdf->AddPage();
                    $pdf->SetFontSize(12);
                    $pdf->Cell(0, 3, iconv("UTF-8", "CP1251", SITE_TITLE), 0, 1, 'C');
                    $pdf->Ln();
                    $pdf->SetFontSize(18);
                    $pdf->Cell(0, 6, iconv("UTF-8", "CP1251", 'Заявка №'.$row['id'].', від '.$row['tDate'].', відділ: '.$row['gTitle']), 0, 1, 'C');
                    $pdf->Ln();
                    $pdf->SetFontSize(11);
                    $pdf->SetFillColor(100, 100, 100);
                    $pdf->SetTextColor(255);
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetLineWidth(.3);
                    $pdf->Cell(16, 7, iconv("UTF-8", "CP1251", 'ID'), 1, 0, 'C', true);
                    $pdf->Cell(150, 7, iconv("UTF-8", "CP1251", 'НАЗВА'), 1, 0, 'C', true);
                    $pdf->Cell(24, 7, iconv("UTF-8", "CP1251", 'КІЛЬКІСТЬ'), 1, 0, 'C', true);
                    $pdf->Ln();
                    $pdf->SetFontSize(8);
                    $pdf->SetTextColor(0);
                    $sql = $Db->query("SELECT * FROM `mod_storeknuba_bids_registry` WHERE `bid` = '$id'");
                    $ind = 0;
                    while ($row = $sql->fetch()){
                        if ($ind++ % 2 > 0) $pdf->SetFillColor(230, 230, 230);
                        else $pdf->SetFillColor(255, 255, 255);
                        $pdf->Cell(16, 6, iconv("UTF-8", "CP1251", $row['id']), 1, 0, 'L', true);
                        $pdf->Cell(150, 6, iconv("UTF-8", "CP1251", $row['title']), 1, 0, 'L', true);
                        $pdf->Cell(24, 6, iconv("UTF-8", "CP1251", $row['count']), 1, 0, 'L', true);
                        $pdf->Ln();
                    }
                break;
                case 'confirm':
                    $sql = $Db->query("
                        SELECT `b`.*, DATE_FORMAT(`b`.`date`, '%d.%m.%Y') AS `tDate`, `g`.`title` AS `gTitle`
                        FROM `mod_storeknuba_bids` AS `b`
                            LEFT JOIN `mod_users_groups` AS `g` ON `g`.`id` = `b`.`gid`
                        WHERE `b`.`id` = '$id'
                    ");
                    $row = $sql->fetch();
                    $pdf->SetFont('FontCYR', '', 18);
                    $pdf->AddPage();
                    $pdf->SetFontSize(12);
                    $pdf->Cell(0, 3, iconv("UTF-8", "CP1251", SITE_TITLE), 0, 1, 'C');
                    $pdf->Ln();
                    $pdf->SetFontSize(18);
                    $pdf->Cell(0, 6, iconv("UTF-8", "CP1251", 'Заявка затверджена №'.$row['id'].', від '.$row['tDate'].', відділ: '.$row['gTitle']), 0, 1, 'C');
                    $pdf->Ln();
                    $pdf->SetFontSize(11);
                    $pdf->SetFillColor(100, 100, 100);
                    $pdf->SetTextColor(255);
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetLineWidth(.3);
                    $pdf->Cell(16, 7, iconv("UTF-8", "CP1251", 'ID'), 1, 0, 'C', true);
                    $pdf->Cell(130, 7, iconv("UTF-8", "CP1251", 'НАЗВА'), 1, 0, 'C', true);
                    $pdf->Cell(24, 7, iconv("UTF-8", "CP1251", 'КІЛЬКІСТЬ'), 1, 0, 'C', true);
                    $pdf->Cell(20, 7, iconv("UTF-8", "CP1251", 'ДАЮ'), 1, 0, 'C', true);
                    $pdf->Ln();
                    $pdf->SetFontSize(8);
                    $pdf->SetTextColor(0);
                    $sql = $Db->query("SELECT * FROM `mod_storeknuba_bids_registry` WHERE `bid` = '$id'");
                    $ind = 0;
                    while ($row = $sql->fetch()){
                        if ($ind++ % 2 > 0) $pdf->SetFillColor(230, 230, 230);
                        else $pdf->SetFillColor(255, 255, 255);
                        $pdf->Cell(16, 6, iconv("UTF-8", "CP1251", $row['id']), 1, 0, 'L', true);
                        $pdf->Cell(130, 6, iconv("UTF-8", "CP1251", $row['title']), 1, 0, 'L', true);
                        $pdf->Cell(24, 6, iconv("UTF-8", "CP1251", $row['count']), 1, 0, 'L', true);
                        $pdf->Cell(20, 6, iconv("UTF-8", "CP1251", $row['allow']), 1, 0, 'L', true);
                        $pdf->Ln();
                    }
                break;
                case 'need':
                    $sql = $Db->query("
                        SELECT `b`.*, DATE_FORMAT(`b`.`date`, '%d.%m.%Y') AS `tDate`, `g`.`title` AS `gTitle`
                        FROM `mod_storeknuba_bids` AS `b`
                            LEFT JOIN `mod_users_groups` AS `g` ON `g`.`id` = `b`.`gid`
                        WHERE `b`.`id` = '$id'
                    ");
                    $row = $sql->fetch();
                    $pdf->SetFont('FontCYR', '', 18);
                    $pdf->AddPage();
                    $pdf->SetFontSize(12);
                    $pdf->Cell(0, 3, iconv("UTF-8", "CP1251", SITE_TITLE), 0, 1, 'C');
                    $pdf->Ln();
                    $pdf->SetFontSize(18);
                    $pdf->Cell(0, 6, iconv("UTF-8", "CP1251", 'Заявка-потреба №'.$row['id'].', від '.$row['tDate'].', відділ: '.$row['gTitle']), 0, 1, 'C');
                    $pdf->Ln();
                    $pdf->SetFontSize(11);
                    $pdf->SetFillColor(100, 100, 100);
                    $pdf->SetTextColor(255);
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetLineWidth(.3);
                    $pdf->Cell(16, 7, iconv("UTF-8", "CP1251", 'ID'), 1, 0, 'C', true);
                    $pdf->Cell(65, 7, iconv("UTF-8", "CP1251", 'НАЗВА'), 1, 0, 'C', true);
                    $pdf->Cell(65, 7, iconv("UTF-8", "CP1251", 'ТОВАР'), 1, 0, 'C', true);
                    $pdf->Cell(24, 7, iconv("UTF-8", "CP1251", 'КІЛЬКІСТЬ'), 1, 0, 'C', true);
                    $pdf->Cell(20, 7, iconv("UTF-8", "CP1251", 'ДАЮ'), 1, 0, 'C', true);
                    $pdf->Ln();
                    $pdf->SetFontSize(8);
                    $pdf->SetTextColor(0);
                    $sql = $Db->query("SELECT * FROM `mod_storeknuba_bids_registry` WHERE `bid` = '$id'");
                    $ind = 0;
                    while ($row = $sql->fetch()){
                        if ($ind++ % 2 > 0) $pdf->SetFillColor(230, 230, 230);
                        else $pdf->SetFillColor(255, 255, 255);
                        $ssql = $Db->query("
                            SELECT `brp`.*, `r`.`title`
                            FROM `mod_storeknuba_bids_registry_products` AS `brp`
                                LEFT JOIN `mod_storeknuba_products` AS `p` ON `p`.`id` = `brp`.`pid`
                                LEFT JOIN `mod_storeknuba_registry` AS `r` ON `r`.`id` = `p`.`rid`
                            WHERE `brp`.`brid` = '{$row['id']}'
                        ");
                        $rrow = $ssql->fetchAll();
                        $row['products'] = '';
                        foreach ($rrow as $v) $row['products'] .= $v['title'].' = '.$v['count']."\n";
                        $height = count($rrow) * 6;
                        $pdf->Cell(16, $height, iconv("UTF-8", "CP1251", $row['id']), 1, 0, 'L', true);
                        $pdf->Cell(65, $height, iconv("UTF-8", "CP1251", $row['title']), 1, 0, 'L', true);
                        $pdf->MultiCell(65, 6, iconv("UTF-8", "CP1251", $row['products']), 1, 'L', 0);
                        $pdf->SetXY($pdf->GetX()+16+65+65, $pdf->GetY()-$height);
                        $pdf->Cell(24, $height, iconv("UTF-8", "CP1251", $row['count']), 1, 0, 'L', true);
                        $pdf->Cell(20, $height, iconv("UTF-8", "CP1251", $row['allow']), 1, 0, 'L', true);
                        $pdf->Ln();
                    }
                break;
                case 'supply':
                    $sql = $Db->query("
                        SELECT `s`.*, DATE_FORMAT(`s`.`date`, '%d.%m.%Y') AS `tDate`, `g`.`title` AS `gTitle`
                        FROM `mod_storeknuba_supplies` AS `s`
                            LEFT JOIN `mod_users_groups` AS `g` ON `g`.`id` = `s`.`gid`
                        WHERE `s`.`id` = '$id'
                    ");
                    $row = $sql->fetch();
                    $pdf->SetFont('FontCYR', '', 18);
                    $pdf->AddPage();
                    $pdf->SetFontSize(12);
                    $pdf->Cell(0, 3, iconv("UTF-8", "CP1251", SITE_TITLE), 0, 1, 'C');
                    $pdf->Ln();
                    $pdf->SetFontSize(18);
                    $pdf->Cell(0, 6, iconv("UTF-8", "CP1251", 'Закупівля №'.$row['id'].', від '.$row['tDate'].', відділ: '.$row['gTitle']), 0, 1, 'C');
                    $pdf->Ln();
                    $pdf->SetFontSize(11);
                    $pdf->SetFillColor(100, 100, 100);
                    $pdf->SetTextColor(255);
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetLineWidth(.3);
                    $pdf->Cell(16, 7, iconv("UTF-8", "CP1251", 'ID'), 1, 0, 'C', true);
                    $pdf->Cell(30, 7, iconv("UTF-8", "CP1251", 'КОД'), 1, 0, 'C', true);
                    $pdf->Cell(80, 7, iconv("UTF-8", "CP1251", 'НАЗВА'), 1, 0, 'C', true);
                    $pdf->Cell(20, 7, iconv("UTF-8", "CP1251", 'ЦІНА'), 1, 0, 'C', true);
                    $pdf->Cell(24, 7, iconv("UTF-8", "CP1251", 'КІЛЬКІСТЬ'), 1, 0, 'C', true);
                    $pdf->Cell(20, 7, iconv("UTF-8", "CP1251", 'СУМА'), 1, 0, 'C', true);
                    $pdf->Ln();
                    $pdf->SetFontSize(8);
                    $pdf->SetTextColor(0);
                    $sql = $Db->query("
                        SELECT `sp`.*, `r`.`title`
                        FROM `mod_storeknuba_supplies_products` AS `sp`
                            LEFT JOIN `mod_storeknuba_registry` AS `r` ON `r`.`id` = `sp`.`rid`
                        WHERE `sp`.`sid` = '$id'
                    ");
                    $ind = 0;
                    while ($row = $sql->fetch()){
                        if ($ind++ % 2 > 0) $pdf->SetFillColor(230, 230, 230);
                        else $pdf->SetFillColor(255, 255, 255);
                        $pdf->Cell(16, 6, iconv("UTF-8", "CP1251", $row['id']), 1, 0, 'L', true);
                        $pdf->Cell(30, 6, iconv("UTF-8", "CP1251", $row['code']), 1, 0, 'L', true);
                        $pdf->Cell(80, 6, iconv("UTF-8", "CP1251", $row['title']), 1, 0, 'L', true);
                        $pdf->Cell(20, 6, iconv("UTF-8", "CP1251", $row['price']), 1, 0, 'L', true);
                        $pdf->Cell(24, 6, iconv("UTF-8", "CP1251", $row['count']), 1, 0, 'L', true);
                        $pdf->Cell(20, 6, iconv("UTF-8", "CP1251", $row['price'] * $row['count']), 1, 0, 'L', true);
                        $pdf->Ln();
                    }
                break;
                default: break;
            }
//            $pdf->Output('doc.pdf', 'D'); - закачка сразу же
            $pdf->Output(); // вывод на экран
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'report': if ($WWcms->getAuth() || $WWcms->getAdmAuth()){ global $Db;
            $act = $Request->get('act') ? $Request->get('act') : false;
            $id  = $Request->get('id')  ? $Request->get('id')  : false;
            require_once (DIR_INCLUDES.'phpexcel18/PHPExcel.php');
            require_once (DIR_INCLUDES.'phpexcel18/PHPExcel/IOFactory.php');
            $excel = new PHPExcel();
            $excel->getProperties()->setCreator("PHP")
                ->setLastModifiedBy("КНУБА")
                ->setTitle("Звіт");
            switch ($act){
                case 'stock':
                    $GETvars = $model->getGETvars();
                    $date1   = !empty($GETvars['GVdateFrom']) ? $GETvars['GVdateFrom'] : '...';
                    $date2   = !empty($GETvars['GVdateTo']) ? $GETvars['GVdateTo'] : '...';
                    $excel->getActiveSheet()->setTitle('Звіт "Залишки на складі"');
                    $excel->getActiveSheet()->mergeCells("A1:E1")->setCellValue("A1", SITE_TITLE."\n".'Звіт "Залишки на складі" за '.($date1 == '...' && $date2 == '...' ? 'весь ': '').'період: '.$date1.' - '.$date2); $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(40); $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14); $excel->getActiveSheet()->getStyle("A1")->getAlignment()->setWrapText(true); $excel->getActiveSheet()->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('A2', 'ID')->getColumnDimension('A')->setWidth(8); $excel->getActiveSheet()->getStyle('A2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('A2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('A2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('B2', 'КОД')->getColumnDimension('B')->setWidth(20); $excel->getActiveSheet()->getStyle('B2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('B2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('B2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('B2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('C2', 'ДАТА')->getColumnDimension('C')->setWidth(16); $excel->getActiveSheet()->getStyle('C2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('C2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('C2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('C2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('D2', 'НАЗВА')->getColumnDimension('D')->setWidth(70); $excel->getActiveSheet()->getStyle('D2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('D2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('D2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('D2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('D2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('E2', 'КІЛЬКІСТЬ')->getColumnDimension('E')->setWidth(11); $excel->getActiveSheet()->getStyle('E2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('E2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('E2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('E2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('E2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $items = $usr['items_type'] == 'offices' ? $model->getProductsGroups(false, '', false, " AND `items`.`gid` = '{$usr['items_gid']}' AND `items`.`deleted` = '0'") : $items = $model->getProducts(false, '', false, '');
                    $index = 2;
                    foreach ($items as $v){
                        $index++;
                        $excel->getActiveSheet()->setCellValue("A$index", $v['items_id']);
                        $excel->getActiveSheet()->setCellValue("B$index", $v['items_code']);
                        $excel->getActiveSheet()->setCellValue("C$index", $v['items_date']);
                        $excel->getActiveSheet()->setCellValue("D$index", $v['items_title']);
                        $excel->getActiveSheet()->setCellValue("E$index", $v['items_count']);
                    }
                break;
                case 'bids':
                    $GETvars = $model->getGETvars();
                    $date1   = !empty($GETvars['GVdateFrom']) ? $GETvars['GVdateFrom'] : '...';
                    $date2   = !empty($GETvars['GVdateTo']) ? $GETvars['GVdateTo'] : '...';
                    $excel->getActiveSheet()->setTitle('Звіт "Зведена заявка"');
                    $excel->getActiveSheet()->mergeCells("A1:G1")->setCellValue("A1", SITE_TITLE."\n".'Звіт "Зведена заявка" за '.($date1 == '...' && $date2 == '...' ? 'весь ': '').'період: '.$date1.' - '.$date2); $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(40); $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14); $excel->getActiveSheet()->getStyle("A1")->getAlignment()->setWrapText(true); $excel->getActiveSheet()->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('A2', 'ID')->getColumnDimension('A')->setWidth(8); $excel->getActiveSheet()->getStyle('A2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('A2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('A2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('B2', 'ДАТА')->getColumnDimension('B')->setWidth(20); $excel->getActiveSheet()->getStyle('B2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('B2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('B2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('B2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('C2', 'ВІДДІЛ')->getColumnDimension('C')->setWidth(30); $excel->getActiveSheet()->getStyle('C2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('C2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('C2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('C2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('D2', 'НАЗВА')->getColumnDimension('D')->setWidth(45); $excel->getActiveSheet()->getStyle('D2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('D2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('D2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('D2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('D2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('E2', 'ТОВАР')->getColumnDimension('E')->setWidth(45); $excel->getActiveSheet()->getStyle('E2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('E2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('E2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('E2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('E2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('F2', 'КІЛЬКІСТЬ')->getColumnDimension('F')->setWidth(11); $excel->getActiveSheet()->getStyle('F2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('F2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('F2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('F2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('F2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('G2', 'СТАТУС')->getColumnDimension('G')->setWidth(14); $excel->getActiveSheet()->getStyle('G2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('G2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('G2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('G2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('G2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $bids = $model->getBids(false, '', false, '');
                    $ind  = 2;
                    foreach ($bids as $bid){
                        $sql = $Db->query("SELECT * FROM `mod_storeknuba_bids_registry` WHERE `bid` = '{$bid['items_id']}'");
                        while ($row = $sql->fetch()){
                            $ssql = $Db->query("
                                SELECT `brp`.*, `r`.`title`
                                FROM `mod_storeknuba_bids_registry_products` AS `brp`
                                    LEFT JOIN `mod_storeknuba_products` AS `p` ON `p`.`id` = `brp`.`pid`
                                    LEFT JOIN `mod_storeknuba_registry` AS `r` ON `r`.`id` = `p`.`rid`
                                WHERE `brp`.`brid` = '{$row['id']}'
                            ");
                            $rrow = $ssql->fetchAll();
                            $row['products'] = '';
                            foreach ($rrow as $v) $row['products'] .= $v['title'].' = '.$v['count']."\n";
                            $row['products'] = trim($row['products']);
                            $ind++;
                            $excel->getActiveSheet()->setCellValue("A$ind", $row['id']);
                            $excel->getActiveSheet()->setCellValue("B$ind", $bid['items_date']);
                            $excel->getActiveSheet()->setCellValue("C$ind", $bid['tGroup']);
                            $excel->getActiveSheet()->setCellValue("D$ind", $row['title']);
                            $excel->getActiveSheet()->setCellValue("E$ind", $row['products']);
                            $excel->getActiveSheet()->getStyle("E$ind")->getAlignment()->setWrapText(true);
                            $excel->getActiveSheet()->setCellValue("F$ind", $row['count']);
                            $excel->getActiveSheet()->setCellValue("G$ind", $bid['tStatus']);
                        }
                    }
                break;
                case 'motions':
                    $GETvars = $model->getGETvars();
                    $date1   = !empty($GETvars['GVdateFrom']) ? $GETvars['GVdateFrom'] : '...';
                    $date2   = !empty($GETvars['GVdateTo']) ? $GETvars['GVdateTo'] : '...';
                    $excel->getActiveSheet()->setTitle('Звіт "Переміщення товарів"');
                    $excel->getActiveSheet()->mergeCells("A1:E1")->setCellValue("A1", SITE_TITLE."\n".'Звіт "Переміщення товарів по відділам" за '.($date1 == '...' && $date2 == '...' ? 'весь ': '').'період: '.$date1.' - '.$date2); $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(40); $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14); $excel->getActiveSheet()->getStyle("A1")->getAlignment()->setWrapText(true); $excel->getActiveSheet()->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('A1')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('A2', 'ВІДДІЛ')->getColumnDimension('A')->setWidth(40); $excel->getActiveSheet()->getStyle('A2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('A2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('A2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('B2', 'ТОВАР')->getColumnDimension('B')->setWidth(70); $excel->getActiveSheet()->getStyle('B2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('B2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('B2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('B2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('C2', 'БУЛО')->getColumnDimension('C')->setWidth(10); $excel->getActiveSheet()->getStyle('C2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('C2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('C2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('C2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('D2', 'ПРИХІД')->getColumnDimension('D')->setWidth(10); $excel->getActiveSheet()->getStyle('D2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('D2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('D2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('D2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('D2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $excel->getActiveSheet()->setCellValue('E2', 'СТАЛО')->getColumnDimension('E')->setWidth(10); $excel->getActiveSheet()->getStyle('E2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID); $excel->getActiveSheet()->getStyle('E2')->getFill()->getStartColor()->setARGB('FF0000FF'); $excel->getActiveSheet()->getStyle('E2')->getFont()->getColor()->setARGB('FFFFFFFF'); $excel->getActiveSheet()->getStyle('E2')->getFont()->setBold(true); $excel->getActiveSheet()->getStyle('E2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                    $items = $model->getProductsMotions(false, '`ug`.`title` ASC, `r`.`title` ASC');
                    $index = 2;
                    foreach ($items as $v){
                        $index++;
                        $excel->getActiveSheet()->setCellValue("A$index", $v['gTitle']);
                        $excel->getActiveSheet()->setCellValue("B$index", $v['pTitle']);
                        $excel->getActiveSheet()->setCellValue("C$index", $v['countBegin']);
                        $excel->getActiveSheet()->setCellValue("D$index", $v['countAct']);
                        $excel->getActiveSheet()->setCellValue("E$index", $v['countEnd']);
                    }
                break;
                default: break;
            }
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="report.xls"');
            header('Cache-Control: max-age=0');
            $excelWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
            $excelWriter->save('php://output'); 
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>