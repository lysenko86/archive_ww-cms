<?php /* Smarty version Smarty-3.1.11, created on 2015-05-14 10:29:37
         compiled from "template/blocks/adm_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:368772692536a4db56cf237-05322682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327158d5413b2c5327eedce60910d433f7c0e69c' => 
    array (
      0 => 'template/blocks/adm_search.tpl',
      1 => 1411535090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '368772692536a4db56cf237-05322682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536a4db5755eb6_92322118',
  'variables' => 
  array (
    'TPL' => 0,
    'v' => 0,
    'k' => 0,
    'titles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536a4db5755eb6_92322118')) {function content_536a4db5755eb6_92322118($_smarty_tpl) {?><?php if ((count($_smarty_tpl->tpl_vars['TPL']->value['sFields']))){?><form class="wwForm wwSearch" name="fSearch" method="post" action="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVsearchField','GVsearchValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>"><div class="row">
    <div class="input"><input class="text" type="text" name="GVsearchValue" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVsearchValue'];?>
"/></div>
    <div class="select"><select class="text" name="GVsearchField"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['sFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVsearchField']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
    <?php } ?></select></div>
    <div class="button"><a href="#" class="submit btnSearch"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_search'];?>
</a></div>
</div><div class="separate"></div></form><?php }?><?php }} ?>