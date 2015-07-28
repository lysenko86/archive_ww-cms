<?php /* Smarty version Smarty-3.1.11, created on 2014-05-07 13:29:05
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132664743536955002d6012-19159575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d8214c8159b41449d42875a64c923729d305851' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/error404.tpl',
      1 => 1399417074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132664743536955002d6012-19159575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536955002dd255_81827017',
  'variables' => 
  array (
    'dirs' => 0,
    'titles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536955002dd255_81827017')) {function content_536955002dd255_81827017($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/head.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</head>
    <body><div id="layout">
        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/siteoff.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div id="header">
            <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/langs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="separate"></div>
        </div>
        <div id="main"><div class="error404">
            <div class="text404">404</div>
            <div class="text"><?php echo $_smarty_tpl->tpl_vars['titles']->value['modEngine_adm404text'];?>
</div>
        </div></div>
        <div id="footer"><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    </div></body>
</html><?php }} ?>