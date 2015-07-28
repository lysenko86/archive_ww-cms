<?php /* Smarty version Smarty-3.1.11, created on 2014-04-26 14:04:17
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/langs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1659227733535b92b16f5f57-48946515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be73226718278752e460836fc7c6b34b4d680016' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/langs.tpl',
      1 => 1390573731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1659227733535b92b16f5f57-48946515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs' => 0,
    'k' => 0,
    'v' => 0,
    'dir' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_535b92b173e5a9_78332776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535b92b173e5a9_78332776')) {function content_535b92b173e5a9_78332776($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['langs']->value)>1){?><div id="langs"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <a href="?route=engine/setLang&lang=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/langs/lang_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
.png" alt=""/></a><?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['k']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/langs/lang_arrow.png" alt="" class="selector"/><?php }?>
<?php } ?></div><?php }?><?php }} ?>