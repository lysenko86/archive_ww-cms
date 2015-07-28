<?php /* Smarty version Smarty-3.1.11, created on 2014-05-08 02:24:41
         compiled from "template/blocks/adm_contentlangs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174924917152f5c4cb827ae0-15163958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e391d1b5a9ffe32bdb0e08987e6a8832f06cc2' => 
    array (
      0 => 'template/blocks/adm_contentlangs.tpl',
      1 => 1399505078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174924917152f5c4cb827ae0-15163958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f5c4cb8bcb76_27428871',
  'variables' => 
  array (
    'langs' => 0,
    'TPL' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f5c4cb8bcb76_27428871')) {function content_52f5c4cb8bcb76_27428871($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['langs']->value)>1){?><div id="contentLangs"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&lang=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvarsStr'];?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['TPL']->value['lang']){?>class="active"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a>
<?php } ?></div><?php }?><?php }} ?>