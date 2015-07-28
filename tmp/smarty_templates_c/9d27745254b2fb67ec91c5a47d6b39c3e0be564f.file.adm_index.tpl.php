<?php /* Smarty version Smarty-3.1.11, created on 2014-10-15 11:05:48
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/adm_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184228545752f5c4c07d7de3-97393683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d27745254b2fb67ec91c5a47d6b39c3e0be564f' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/adm_index.tpl',
      1 => 1411157074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184228545752f5c4c07d7de3-97393683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f5c4c0a43d97_28206055',
  'variables' => 
  array (
    'dirs' => 0,
    'titles' => 0,
    'domain' => 0,
    'admAuth' => 0,
    'checkModule' => 0,
    'checkRights' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f5c4c0a43d97_28206055')) {function content_52f5c4c0a43d97_28206055($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_head.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</head>
    <body><div id="layout">
        <div id="header">
            <div class="title"><?php echo sprintf($_smarty_tpl->tpl_vars['titles']->value['titles_admPanel'],$_smarty_tpl->tpl_vars['domain']->value);?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['admAuth']->value){?><div id="menu"><a href="?route=engine/admExit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_exit'];?>
</a></div><?php }?>
            <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_langs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <div id="admMain"<?php if ($_smarty_tpl->tpl_vars['admAuth']->value){?> class="mainBG"<?php }?>>
            <?php if (!$_smarty_tpl->tpl_vars['admAuth']->value){?>
                <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_message.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_breadcrumbs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div id="admContent"><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['modules']).('engine/template.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
            <?php }else{ ?>
                <div class="mainLeft"><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_leftmenu.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
                <div class="mainRight">
                    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_message.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_breadcrumbs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <div id="admContent"><?php if ($_smarty_tpl->tpl_vars['checkModule']->value=='good'&&$_smarty_tpl->tpl_vars['checkRights']->value){?><?php echo $_smarty_tpl->getSubTemplate ((($_smarty_tpl->tpl_vars['dirs']->value['modules']).($_smarty_tpl->tpl_vars['module']->value)).('/template.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div>
                </div>
                <div class="separate"></div>
            <?php }?>
        </div>
        <div id="footer"><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    </div></body>
</html><?php }} ?>