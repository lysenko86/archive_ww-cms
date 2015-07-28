<?php /* Smarty version Smarty-3.1.11, created on 2014-08-06 13:58:17
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/cabinet_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211044319653e20a4928a7d0-68371201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe07472a299dc532d54f4258b660ac3cdca6375d' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/cabinet_index.tpl',
      1 => 1407322693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211044319653e20a4928a7d0-68371201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dirs' => 0,
    'checkModule' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53e20a49364a66_16455159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e20a49364a66_16455159')) {function content_53e20a49364a66_16455159($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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