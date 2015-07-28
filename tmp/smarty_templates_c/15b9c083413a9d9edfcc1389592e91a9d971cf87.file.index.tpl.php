<?php /* Smarty version Smarty-3.1.11, created on 2014-08-06 11:35:53
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146131688752f42366c48d54-89271492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b9c083413a9d9edfcc1389592e91a9d971cf87' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/index.tpl',
      1 => 1407305720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146131688752f42366c48d54-89271492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f42366e75c97_38688890',
  'variables' => 
  array (
    'dirs' => 0,
    'checkModule' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f42366e75c97_38688890')) {function content_52f42366e75c97_38688890($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/head.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</head>
    <body><div id="layout">
        <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/siteoff.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div id="header">
            <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/langs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="separate"></div>
        </div>
        <div id="main">
            <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/message.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/breadcrumbs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div id="content"><?php if ($_smarty_tpl->tpl_vars['checkModule']->value=='good'){?><?php echo $_smarty_tpl->getSubTemplate ((($_smarty_tpl->tpl_vars['dirs']->value['modules']).($_smarty_tpl->tpl_vars['module']->value)).('/template.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div>
        </div>
        <div id="footer"><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    </div></body>
</html><?php }} ?>