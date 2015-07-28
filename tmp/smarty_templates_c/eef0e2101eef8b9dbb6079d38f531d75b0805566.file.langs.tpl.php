<?php /* Smarty version Smarty-3.1.11, created on 2014-04-26 17:54:05
         compiled from "template/blocks/langs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35145345452f423670e4432-54273743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eef0e2101eef8b9dbb6079d38f531d75b0805566' => 
    array (
      0 => 'template/blocks/langs.tpl',
      1 => 1398524038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35145345452f423670e4432-54273743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f4236719d0f6_07643986',
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
<?php if ($_valid && !is_callable('content_52f4236719d0f6_07643986')) {function content_52f4236719d0f6_07643986($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['langs']->value)>1){?><div id="langs"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <a href="?route=engine/setLang&lang=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/langs/lang_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
.png" alt=""/></a><?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['k']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/langs/lang_arrow.png" alt="" class="selector"/><?php }?>
<?php } ?></div><?php }?><?php }} ?>