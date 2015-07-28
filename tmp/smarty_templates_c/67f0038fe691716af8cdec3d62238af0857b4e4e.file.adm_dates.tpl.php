<?php /* Smarty version Smarty-3.1.11, created on 2015-05-14 10:29:57
         compiled from "template/blocks/adm_dates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1666034063537cabb67af3b0-74246277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67f0038fe691716af8cdec3d62238af0857b4e4e' => 
    array (
      0 => 'template/blocks/adm_dates.tpl',
      1 => 1411571823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1666034063537cabb67af3b0-74246277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537cabb67b90c0_86977642',
  'variables' => 
  array (
    'TPL' => 0,
    'v' => 0,
    'k' => 0,
    'titles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537cabb67b90c0_86977642')) {function content_537cabb67b90c0_86977642($_smarty_tpl) {?><form class="wwForm wwDates" name="fDates" method="post" action="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVdateFrom','GVdateTo'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>">
    <div class="row"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_dateFrom'];?>
<input class="text forDatepicker" type="text" name="GVdateFrom" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVdateFrom'];?>
"/></div>
    <div class="row"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_dateTo'];?>
<input class="text forDatepicker" type="text" name="GVdateTo" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVdateTo'];?>
"/></div>
    <a href="#" class="submit btnSearch"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_search'];?>
</a>
<div class="separate"></div></form><?php }} ?>