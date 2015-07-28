<?php /* Smarty version Smarty-3.1.11, created on 2014-05-08 17:48:26
         compiled from "template/blocks/adm_pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:432866552536b8a637e6966-70178895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e761fe5c2b498a62a2614f0946ea24a58454ba5' => 
    array (
      0 => 'template/blocks/adm_pager.tpl',
      1 => 1399559037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '432866552536b8a637e6966-70178895',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536b8a6384af86_95128083',
  'variables' => 
  array (
    'TPL' => 0,
    'v' => 0,
    'k' => 0,
    'dirs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b8a6384af86_95128083')) {function content_536b8a6384af86_95128083($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['TPL']->value['pager'])>1){?><div class="wwPager">
    <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['k']->value!='GVpage'){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVpage=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVpage']-1;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/pager/page_left.png" alt=""/></a>
    &nbsp;&nbsp;&nbsp;
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['pager']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?><a class="page<?php if (($_smarty_tpl->tpl_vars['TPL']->value['pager'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]==$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVpage'])||(empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVpage'])&&$_smarty_tpl->getVariable('smarty')->value['section']['i']['first'])){?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['k']->value!='GVpage'){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVpage=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['pager'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['pager'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</a><?php endfor; endif; ?>
    &nbsp;&nbsp;&nbsp;
    <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['k']->value!='GVpage'){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVpage=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVpage']+1;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/pager/page_right.png" alt=""/></a>
</div><?php }?><?php }} ?>