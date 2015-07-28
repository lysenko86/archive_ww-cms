<?php /* Smarty version Smarty-3.1.11, created on 2014-04-27 01:53:44
         compiled from "template/blocks/adm_langs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73376635352f5c4c0be9b83-86819646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4357b4ce52b4b983d5bc9f6490a07123ae252b80' => 
    array (
      0 => 'template/blocks/adm_langs.tpl',
      1 => 1398551546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73376635352f5c4c0be9b83-86819646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f5c4c0c93051_83079430',
  'variables' => 
  array (
    'langs' => 0,
    'k' => 0,
    'v' => 0,
    'dirs' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f5c4c0c93051_83079430')) {function content_52f5c4c0c93051_83079430($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['langs']->value)>1){?><div id="langs"><div><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <a href="?route=engine/setLang&lang=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&link=adminka" title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/langs/lang_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
.png" alt=""/></a><?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['k']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/langs/lang_arrow.png" alt="" class="selector"/><?php }?>
<?php } ?></div></div><?php }?><?php }} ?>