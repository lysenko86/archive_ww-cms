<?php /* Smarty version Smarty-3.1.11, created on 2014-01-28 07:54:59
         compiled from "template/blocks/adm_table_filter1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134557927552e7463362f702-83370563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd8a462348cf7c10de2c80f4d36753ca80c9190a' => 
    array (
      0 => 'template/blocks/adm_table_filter1.tpl',
      1 => 1390573731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134557927552e7463362f702-83370563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filters' => 0,
    'vars' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e74633660a31_92826151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e74633660a31_92826151')) {function content_52e74633660a31_92826151($_smarty_tpl) {?><?php if ((count($_smarty_tpl->tpl_vars['filters']->value)>0)){?><form id="tableFilter1" name="fSearch" method="post" action="">
    <?php if (empty($_smarty_tpl->tpl_vars['vars']->value['field'])){?><?php $_smarty_tpl->createLocalArrayVariable('vars', null, 0);
$_smarty_tpl->tpl_vars['vars']->value['field'] = '';?><?php }?>
    <?php if (empty($_smarty_tpl->tpl_vars['vars']->value['value'])){?><?php $_smarty_tpl->createLocalArrayVariable('vars', null, 0);
$_smarty_tpl->tpl_vars['vars']->value['value'] = '';?><?php }?>
    <input type="text" name="value" value="<?php echo $_smarty_tpl->tpl_vars['vars']->value['value'];?>
"/>
    &nbsp;&nbsp;&nbsp;
    <select name="field"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['vars']->value['field']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
    <?php } ?></select>
    &nbsp;&nbsp;&nbsp;
    <a href="#" class="submit btnSubmit"></a>
    <div class="separate"></div>
</form><?php }?><?php }} ?>