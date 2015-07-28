<?php /* Smarty version Smarty-3.1.11, created on 2014-05-07 01:37:40
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/siteoff_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203930817853696235984431-92422387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800749c38959004f811c8cc457c72d6b7a10bb66' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/siteoff_index.tpl',
      1 => 1399415854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203930817853696235984431-92422387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53696235a82fe5_58990880',
  'variables' => 
  array (
    'dirs' => 0,
    'title' => 0,
    'module' => 0,
    'action' => 0,
    'titles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53696235a82fe5_58990880')) {function content_53696235a82fe5_58990880($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="generator" content="WWcms v1.0"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/icon.ico" type="image/x-icon" rel="icon"/>
        <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
css/siteoff_styles.css" rel="stylesheet"/>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['includes'];?>
jquery-1.9.1/jquery-1.9.1.min.js"></script>
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body><div id="layout">
        <?php if ($_smarty_tpl->tpl_vars['module']->value=='engine'&&$_smarty_tpl->tpl_vars['action']->value=='siteoff'){?><form class="formAuth" name="fContent" method="post" action="">
            <div class="row">
                <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
                <div class="right"><input type="text" name="login" value=""/></div>
            </div>
            <div class="row">
                <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
                <div class="right"><input type="password" name="password" value=""/></div>
            </div>
            <div class="row"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_submit'];?>
"/></div>
        </form><?php }?>
        <div class="text"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_siteOffMsg'];?>
</div>
    </div></body>
</html><?php }} ?>