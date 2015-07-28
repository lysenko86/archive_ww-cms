<?php
    global $WWcms, $Smarty, $Url, $Request, $Langs;
    $model = new classStoremanicure();
    $Smarty->addBreadCrumbs($Langs->getTitle('bread_home'), ($WWcms->getAdmAuth() ? '?route=engine/adminka' : '?route=engine/home'));





    switch ($Url->getAction()){
        case 'admClientsList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_clientsList'), '?route=storemanicure/admClientsList');

            if ($act == 'edit') $WWcms->reLoad("?route=storemanicure/admClientEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getClients();
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storemanicure/admClientsList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'items_fio'   => $Langs->getTitle('search_fio'),
                'items_phone' => $Langs->getTitle('search_phone'),
                'items_email' => $Langs->getTitle('search_email')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admClientEdit': if ($WWcms->getAdmAuth()){
            global $Db;
            $id         = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_clientsList'), '?route=storemanicure/admClientsList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_clientEdit'), '?route=storemanicure/admClientEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getClient($id);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['items_fio'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['items_name'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['items_male'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($item['items_phone'] && $Db->checkIsValueInDB('mod_storemanicure_clients', "WHERE `phone` = '{$item['items_phone']}' AND `id` <> '$id'")) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsIsClientPhone'));
                elseif ($item['items_email'] && $Db->checkIsValueInDB('mod_storemanicure_clients', "WHERE `email` = '{$item['items_email']}' AND `id` <> '$id'")) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsIsClientEmail'));
                elseif ($item['items_discount'] == '') $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($item['items_discount'] < 0 || $item['items_discount'] > 100) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsDiscount'));
                else{
                    $model->editClient($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admClientsList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=storemanicure/admClientEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admMastersList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_mastersList'), '?route=storemanicure/admMastersList');

            if ($act == 'edit') $WWcms->reLoad("?route=storemanicure/admMasterEdit&id=$id".$model->getGETvarsToString());

            $items = $model->getMasters();
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storemanicure/admMastersList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'items_fio'   => $Langs->getTitle('search_fio'),
                'items_phone' => $Langs->getTitle('search_phone')
            ));
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admMasterEdit': if ($WWcms->getAdmAuth()){
            $id         = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_mastersList'), '?route=storemanicure/admMastersList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_masterEdit'), '?route=storemanicure/admMasterEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getMaster($id);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['items_fio'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($item['items_percent'] == '') $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($item['items_percentMat'] == '') $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($item['items_percent'] < 0 || $item['items_percent'] > 100) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsPercent'));
                elseif ($item['items_percentMat'] < 0 || $item['items_percentMat'] > 100) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsPercentMat'));
                else{
                    $model->editMaster($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admMastersList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=storemanicure/admMasterEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admServicesList': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_servicesList'), '?route=storemanicure/admServicesList');

            if ($act == 'edit') $WWcms->reLoad("?route=storemanicure/admServiceEdit&id=$id".$model->getGETvarsToString());

            $types = $model->getServicesTypes();
            $items = $model->getServices();
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storemanicure/admServicesList');
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('sFields', array(
                'items_title' => $Langs->getTitle('search_title')
            ));
            $Smarty->setTPL('types', $types);
            $Smarty->setTPL('items', $items);
            $Smarty->setTPL('pager', $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admServiceEdit': if ($WWcms->getAdmAuth()){
            $id         = $Request->get('id');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_servicesList'), '?route=storemanicure/admServicesList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_serviceEdit'), '?route=storemanicure/admServiceEdit'.($id ? "&id=$id" : ''));
            $GETvarsStr = $model->getGETvarsToString();
            $item       = $model->getService($id);
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['items_title'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($item['items_type'] == '') $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                else{
                    $model->editService($id, $item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admServicesList$GETvarsStr");
                }
            }

            $Smarty->setTPL('href',       '?route=storemanicure/admServiceEdit'.($id ? "&id=$id" : ''));
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('item',       $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admMailerSmsBirth': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_mailerSmsBirth'), '?route=storemanicure/admMailerSmsBirth');
            $item = $model->getMailerSettings();
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['sms_text_birth'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                else{
                    $model->setMailerSettings($item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admMailerSmsBirth");
                }
            }

            $Smarty->setTPL('href', '?route=storemanicure/admMailerSmsBirth');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admMailerSms': if ($WWcms->getAdmAuth()){
            global $AlphaSMS;            
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_mailerSms'), '?route=storemanicure/admMailerSms');
            $item = $model->getMailerSettings();
            if ($item['phones'] > 0) $WWcms->setMsg(sprintf($Langs->getTitle('modStoremanicure_mailerProcess'), $item['phones']), $WWcms::MSG_INFO);

            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                $send = $item['send'];
                unset($item['send']);
                if (!$Request->testVar($item['sms_text'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($send == '1' && $item['phones'] > 0) $WWcms->setMsg($Langs->getTitle('modStoremanicure_mailerErrors'));
                else{
                    $model->setMailerSettings($item);
                    if ($send == '1') $model->addPhonesToMailer();
                    elseif ($send == '-1') $model->addPhoneToMailer(3); // ID пользователя                    
                    $WWcms->setMsg($Langs->getTitle('done_saveData').($send == '1' ? ' '.$Langs->getTitle('modStoremanicure_mailerSendDone') : ''), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admMailerSms");
                }
            }

            $Smarty->setTPL('href', '?route=storemanicure/admMailerSms');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admMailerEmailBirth': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_mailerEmailBirth'), '?route=storemanicure/admMailerEmailBirth');
            $item = $model->getMailerSettings();
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['email_title_birth'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['email_content_birth'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                else{
                    $model->setMailerSettings($item);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admMailerEmailBirth");
                }
            }

            $Smarty->setTPL('href', '?route=storemanicure/admMailerEmailBirth');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admMailerEmail': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_mailerEmail'), '?route=storemanicure/admMailerEmail');
            $item = $model->getMailerSettings();
            if ($item['emails'] > 0) $WWcms->setMsg(sprintf($Langs->getTitle('modStoremanicure_mailerProcess'), $item['emails']), $WWcms::MSG_INFO);

            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                $send = $item['send'];
                unset($item['send']);
                if (!$Request->testVar($item['email_title_birth'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($item['email_content_birth'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($send == '1' && $item['emails'] > 0) $WWcms->setMsg($Langs->getTitle('modStoremanicure_mailerErrors'));
                else{
                    $model->setMailerSettings($item);
                    if ($send == '1') $model->addEmailsToMailer();
                    elseif ($send == '-1') $model->addEmailToMailer(3); // ID пользователя                    
                    $WWcms->setMsg($Langs->getTitle('done_saveData').($send == '1' ? ' '.$Langs->getTitle('modStoremanicure_mailerSendDone') : ''), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admMailerEmail");
                }
            }

            $Smarty->setTPL('href', '?route=storemanicure/admMailerEmail');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admFinanceList': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financeList'), '?route=storemanicure/admFinanceList');
            $types = $model->getActionsTypes();
            $items = $model->getActions();
            $pager = $model->getPager();
            $Smarty->setTPL('href',       '?route=storemanicure/admFinanceList');
            $Smarty->setTPL('types',      $types);
            $Smarty->setTPL('GETvars',    $model->getGETvars());
            $Smarty->setTPL('GETvarsStr', $model->getGETvarsToString());
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('pager',      $pager);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admFinanceInkass': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financeList'), '?route=storemanicure/admFinanceList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financeInkass'), '?route=storemanicure/admFinanceInkass');
            $item  = $model->getAction();
            $types = $model->getActionsTypes();

            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if ($item['items_sum'] <= 1) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsSum'));
                elseif ($item['items_sum'] > SITE_CASH) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsSumCash'));
                elseif (!$Request->testVar($item['items_comment'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($WWcms->getAdmAuth() != 'admin') $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsInkassAuth'));
                else{
                    $sum     = $item['items_sum'];
                    $comment = $types['inkass'].($item['items_comment'] ? '. '.$item['items_comment'] : '');
                    $model->addAction('inkass', $sum * -1, $comment, array());
                    $model->editCash($sum * -1);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admFinanceList");
                }
            }

            $Smarty->setTPL('href', '?route=storemanicure/admFinanceInkass');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admFinanceAdd': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financeList'), '?route=storemanicure/admFinanceList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financeAdd'), '?route=storemanicure/admFinanceAdd');
            $item  = $model->getAction();
            $types = $model->getActionsTypes();

            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if ($item['items_sum'] <= 1) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsSum'));
                elseif (!$Request->testVar($item['items_comment'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($WWcms->getAdmAuth() != 'admin') $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsInkassAuth'));
                else{
                    $sum     = $item['items_sum'];
                    $comment = $types['add'].($item['items_comment'] ? '. '.$item['items_comment'] : '');
                    $model->addAction('add', $sum * 1, $comment, array());
                    $model->editCash($sum * 1);
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admFinanceList");
                }
            }

            $Smarty->setTPL('href', '?route=storemanicure/admFinanceAdd');
            $Smarty->setTPL('item', $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admFinanceSalary': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financeList'), '?route=storemanicure/admFinanceList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financeSalary'), '?route=storemanicure/admFinanceSalary');
            $item           = $model->getAction();
            $item['worker'] = '';
            $item['should'] = '0';
            $types          = $model->getActionsTypes();
            $workers        = $model->getWorkers(false, '`items`.`fio` ASC', '`items`.`access`');

            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                if (!$Request->testVar($item['worker'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($item['items_sum'] <= 1) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsSum'));
                elseif ($item['items_sum'] > SITE_CASH) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsSumCash'));
                elseif ($item['items_sum'] > $item['should']) $WWcms->setMsg(sprintf($Langs->getTitle('modStoremanicure_errorsSumShould'), $item['should']));
                else{
                    $sum     = $item['items_sum'];
                    $type    = substr($item['worker'], 0, 1);
                    $id      = substr($item['worker'], 2);
                    $worker  = $type == 'a' ? $model->getAdmin($id) : $model->getMaster($id);
                    $comment = $types['salary'].' - '.$worker['items_fio'].($item['items_comment'] ? '. '.$item['items_comment'] : '');
                    $model->addAction('salary', $sum * -1, $comment, array($type.'id' => $id));
                    $model->editCash($sum * -1);
                    if ($type == 'a') $model->incSumAdmin($id, array('sumPaid'=>$sum));
                    elseif ($type == 'm') $model->incSumMaster($id, array('sumPaid'=>$sum));
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admFinanceList");
                }
            }

            $Smarty->setTPL('href',    '?route=storemanicure/admFinanceSalary');
            $Smarty->setTPL('workers', $workers);
            $Smarty->setTPL('item',    $item);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admFinancePrihod': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financeList'), '?route=storemanicure/admFinanceList');
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_financePrihod'), '?route=storemanicure/admFinancePrihod');
            $item     = $model->getActionArr();
            $services = $model->getServices(false, '`items`.`title` ASC', '`items`.`public`');
            $masters  = $model->getMasters(false, '`items`.`fio` ASC', '`items`.`access`');
            $clients  = $model->getClients(false, '`items`.`fio` ASC', '`items`.`access`');
            $types    = $model->getActionsTypes();
            $discount = 0;
 
            if ($Request->isPost()){
                foreach ($Request->post() as $k=>$v) $item[$k] = $v;
                foreach ($item['items_sid'] as $k=>$v) if (empty($item['items_sid'][$k]) && empty($item['items_mid'][$k]) && empty($item['items_sum'][$k])) unset($item['items_sid'][$k], $item['items_mid'][$k], $item['items_sum'][$k]);
                $client = $model->getClient($item['items_cid']);
                $discount = $client['items_discount'];
                if (in_array('0', $item['items_sid'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (in_array('0', $item['items_mid'])) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (in_array('0', $item['items_sum'])) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsSum'));
                elseif (!count($item['items_sid'])) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsCountService'));
                elseif ($WWcms->getAdmAuth() == 'admin') $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsPrihodAuth'));
                else{
                    $item['items_aid']   = $WWcms->getAdmAuth() != 'admin' ? $WWcms->getAdmAuth() : 0;
                    $admin               = $model->getAdmin($item['items_aid']);
                    $client              = $model->getClient($item['items_cid']);
                    $client['items_fio'] = !empty($client['items_fio']) ? $client['items_fio'] : $Langs->getTitle('titles_guest');
                    foreach ($item['items_sid'] as $k=>$v){
                        $master              = $model->getMaster($item['items_mid'][$k]);
                        $service             = $model->getService($item['items_sid'][$k]);
                        $sum                 = $item['items_sum'][$k] * 1 - ceil($item['items_sum'][$k] * (!empty($client['items_discount']) ? $client['items_discount'] : 0) / 100);
                        $comment             = $types['prihod'].'. '.$admin['items_fio'].' - '.$master['items_fio'].' - '.$service['items_title'].' - '.$client['items_fio'].($client['items_discount'] ? ' (-'.$client['items_discount'].'%)' : '').($item['items_comment'] ? '. '.$item['items_comment'] : '');
                        $id                  = $model->addAction('prihod', $sum, $comment, array(
                            'aid' => $item['items_aid'],
                            'mid' => $item['items_mid'][$k],
                            'sid' => $item['items_sid'][$k],
                            'cid' => $item['items_cid']
                        ));
                        $model->editCash($sum);
                        if ($item['items_aid'] != '0'){
                            $aSum = round($sum * $admin['items_percent'] / 100);
                            $model->incSumAdmin($item['items_aid'], array('sumTotal'=>$sum, 'sumSelf'=>$aSum));
                            $model->addAction('score', $aSum, $types['score'].' - '.$admin['items_fio'].'. '.$Langs->getTitle('modStoremanicure_operation').$id, array('aid'=>$item['items_aid'], 'pid'=>$id));
                        }
                        $mSum = round($sum * $master['items_'.$service['items_type']] / 100);
                        $model->incSumMaster($item['items_mid'][$k], array('sumTotal'=>$sum, 'sumSelf'=>$mSum));
                        $model->addAction('score', $mSum, $types['score'].' - '.$master['items_fio'].'. '.$Langs->getTitle('modStoremanicure_operation').$id, array('mid'=>$item['items_mid'][$k], 'pid'=>$id));
                        if (!empty($item['items_cid'])) $model->incSumClient($item['items_cid'], array('sum'=>$sum));
                    }
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admFinanceList");
                }
            }

            $Smarty->setTPL('href',     '?route=storemanicure/admFinancePrihod');
            $Smarty->setTPL('item',     $item);
            $Smarty->setTPL('services', $services);
            $Smarty->setTPL('masters',  $masters);
            $Smarty->setTPL('clients',  $clients);
            $Smarty->setTPL('discount', $discount);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admManageStatistic': if ($WWcms->getAdmAuth()){
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_manageStatistic'), '?route=storemanicure/admManageStatistic');
            $admin      = $Request->get('admin', 0);
            $master     = $Request->get('master', 0);
            $service    = $Request->get('service', 0);
            $client     = $Request->get('client', 0);
            $GETvars    = $model->getGETvars();
            $GETvarsStr = $model->getGETvarsToString(array('admin'=>$admin, 'master'=>$master, 'service'=>$service, 'client'=>$client));
            $admins     = $model->getAdmins(false, '`items`.`fio` ASC', '`items`.`access`');
            $masters    = $model->getMasters(false, '`items`.`fio` ASC', '`items`.`access`');
            $services   = $model->getServices(false, '`items`.`title` ASC', '`items`.`public`');
            $clients    = $model->getClients(false, '`items`.`fio` ASC', '`items`.`access`');
            $types      = $model->getActionsTypes();
            $items      = $model->getActions(true, '', " AND `items`.`type` = 'prihod'".($admin ? " AND `items`.`aid` = '$admin'" : '').($master ? " AND `items`.`mid` = '$master'" : '').($service ? " AND `items`.`sid` = '$service'" : '').($client ? " AND `items`.`cid` = '$client'" : ''));
            $sum        = $model->getActionsSums(" AND `items`.`type` = 'prihod'".($admin ? " AND `items`.`aid` = '$admin'" : '').($master ? " AND `items`.`mid` = '$master'" : '').($service ? " AND `items`.`sid` = '$service'" : '').($client ? " AND `items`.`cid` = '$client'" : ''));
            $pager      = $model->getPager();
            $Smarty->setTPL('sum',        $sum);
            $Smarty->setTPL('href',       '?route=storemanicure/admManageStatistic');
            $Smarty->setTPL('types',      $types);
            $Smarty->setTPL('GETvars',    $GETvars);
            $Smarty->setTPL('GETvarsStr', $GETvarsStr);
            $Smarty->setTPL('items',      $items);
            $Smarty->setTPL('pager',      $pager);
            $Smarty->setTPL('admins',     $admins);
            $Smarty->setTPL('masters',    $masters);
            $Smarty->setTPL('services',   $services);
            $Smarty->setTPL('clients',    $clients);
            $Smarty->setTPL('admin',      $admin);
            $Smarty->setTPL('master',     $master);
            $Smarty->setTPL('service',    $service);
            $Smarty->setTPL('client',     $client);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        case 'admManagePlan': if ($WWcms->getAdmAuth()){
            $act = $Request->get('act');
            $id  = $Request->get('id') ? $Request->get('id') : ($Request->post('id') ? $Request->post('id') : false);
            $Smarty->addBreadCrumbs($Langs->getTitle('modStoremanicure_managePlan'), '?route=storemanicure/admManagePlan');
            $date     = $Request->get('date', date("d.m.Y"));
            $dateNext = date("d.m.Y", mktime(0, 0, 0, substr($date, 3, 2), substr($date, 0, 2), substr($date, 6)) + 60*60*24);
            $datePrev = date("d.m.Y", mktime(0, 0, 0, substr($date, 3, 2), substr($date, 0, 2), substr($date, 6)) - 60*60*24);
            $masters  = $model->getMasters();
            $times    = $model->getTimes(8, 21, 60);
            $marks    = $model->getMarks($date);

            if ($act == 'del'){
                $model->delMark($id);
                $WWcms->reLoad("?route=storemanicure/admManagePlan&date=$date");
            }
            if ($act == 'edit'){
                $mid      = $Request->post('mid');
                $timeFrom = $Request->post('timeFrom');
                $timeTo   = $Request->post('timeTo');
                $title    = $Request->post('title');
                $length   = ceil(((substr($timeTo, 0, 2) * 60 + substr($timeTo, 3, 2) * 1) - (substr($timeFrom, 0, 2) * 60 + substr($timeFrom, 3, 2) * 1)) / 15);
                if (!$Request->testVar($timeTo)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif (!$Request->testVar($title)) $WWcms->setMsg($Langs->getTitle('errors_fieldEmpty'));
                elseif ($length <= 0) $WWcms->setMsg($Langs->getTitle('modStoremanicure_errorsLengthTime'));
                else{
                    $model->editMark($id, array(
                        'date'   => substr($date, 6, 4).'-'.substr($date, 3, 2).'-'.substr($date, 0, 2).' '.$timeFrom,
                        'length' => $length,
                        'mid'    => $mid,
                        'title'  => $title
                    ));
                    $WWcms->setMsg($Langs->getTitle('done_saveData'), $WWcms::MSG_GOOD, true);
                    $WWcms->reLoad("?route=storemanicure/admManagePlan&date=$date");
                }
            }

            $Smarty->setTPL('href',     '?route=storemanicure/admManagePlan');
            $Smarty->setTPL('masters',  $masters);
            $Smarty->setTPL('times',    $times);
            $Smarty->setTPL('marks',    $marks);
            $Smarty->setTPL('date',     $date);
            $Smarty->setTPL('dateNext', $dateNext);
            $Smarty->setTPL('datePrev', $datePrev);
        } else $WWcms->reLoad('?route=engine/error404'); break;





        default: $WWcms->reLoad('?route=engine/error404'); break;
    }
?>