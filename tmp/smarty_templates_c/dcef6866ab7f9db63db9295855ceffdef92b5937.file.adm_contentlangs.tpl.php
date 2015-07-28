<?php /* Smarty version Smarty-3.1.11, created on 2014-05-07 03:37:06
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/adm_contentlangs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:718518765536980329deb36-71126482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcef6866ab7f9db63db9295855ceffdef92b5937' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/adm_contentlangs.tpl',
      1 => 1390573731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718518765536980329deb36-71126482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs' => 0,
    'href' => 0,
    'k' => 0,
    'vars' => 0,
    'vv' => 0,
    'kk' => 0,
    'TPL' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53698032a73b78_38742265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53698032a73b78_38742265')) {function content_53698032a73b78_38742265($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['langs']->value)>1){?><div id="contentLangs"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
&lang=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?><?php if ($_smarty_tpl->tpl_vars['vv']->value){?>&<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
=<?php echo str_replace('`','',$_smarty_tpl->tpl_vars['vv']->value);?>
<?php }?><?php } ?>" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['TPL']->value['lang']){?>class="active"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a>
<?php } ?></div><?php }?><?php }} ?>