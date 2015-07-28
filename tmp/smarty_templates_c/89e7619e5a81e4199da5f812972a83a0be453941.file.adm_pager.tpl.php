<?php /* Smarty version Smarty-3.1.11, created on 2014-05-07 18:14:50
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/adm_pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681162316536a4dea1f8b07-88497297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89e7619e5a81e4199da5f812972a83a0be453941' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/adm_pager.tpl',
      1 => 1390886650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681162316536a4dea1f8b07-88497297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paginate' => 0,
    'vars' => 0,
    'href' => 0,
    'v' => 0,
    'k' => 0,
    'dir' => 0,
    'savePage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536a4dea28b177_38183678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536a4dea28b177_38183678')) {function content_536a4dea28b177_38183678($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['paginate']->value)>1){?><div id="paginate">
    <?php $_smarty_tpl->tpl_vars["savePage"] = new Smarty_variable($_smarty_tpl->tpl_vars['vars']->value['page'], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['vars']->value['page']-1>0){?><?php $_smarty_tpl->createLocalArrayVariable('vars', null, 0);
$_smarty_tpl->tpl_vars['vars']->value['page'] = $_smarty_tpl->tpl_vars['vars']->value['page']-1;?><?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['v']->value){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo str_replace('`','',$_smarty_tpl->tpl_vars['v']->value);?>
<?php }?><?php } ?>" class="button"><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/adminka/pager/page_left.png" alt=""/></a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['paginate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
<?php $_smarty_tpl->createLocalArrayVariable('vars', null, 0);
$_smarty_tpl->tpl_vars['vars']->value['page'] = $_smarty_tpl->tpl_vars['paginate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['v']->value){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo str_replace('`','',$_smarty_tpl->tpl_vars['v']->value);?>
<?php }?><?php } ?>"<?php if ($_smarty_tpl->tpl_vars['paginate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]==$_smarty_tpl->tpl_vars['savePage']->value){?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['paginate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</a>&nbsp;<?php endfor; endif; ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php $_smarty_tpl->createLocalArrayVariable('vars', null, 0);
$_smarty_tpl->tpl_vars['vars']->value['page'] = $_smarty_tpl->tpl_vars['savePage']->value+1;?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['v']->value){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo str_replace('`','',$_smarty_tpl->tpl_vars['v']->value);?>
<?php }?><?php } ?>" class="button"><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/adminka/pager/page_right.png" alt=""/></a>
</div><?php }?><?php }} ?>