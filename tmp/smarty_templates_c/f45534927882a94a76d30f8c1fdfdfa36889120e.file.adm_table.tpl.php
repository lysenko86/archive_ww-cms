<?php /* Smarty version Smarty-3.1.11, created on 2014-04-29 02:24:59
         compiled from "template/blocks/adm_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186832187452f5c4c87cb209-11546857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45534927882a94a76d30f8c1fdfdfa36889120e' => 
    array (
      0 => 'template/blocks/adm_table.tpl',
      1 => 1398727493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186832187452f5c4c87cb209-11546857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f5c4c8986ea1_30985085',
  'variables' => 
  array (
    'vars' => 0,
    'items' => 0,
    'v' => 0,
    'saveField' => 0,
    'dir' => 0,
    'saveSort' => 0,
    'href' => 0,
    'vv' => 0,
    'kk' => 0,
    'titles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f5c4c8986ea1_30985085')) {function content_52f5c4c8986ea1_30985085($_smarty_tpl) {?><table class="wwTable"><tbody>
    <tr>
        <?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['sField'])){?><?php $_smarty_tpl->tpl_vars["saveField"] = new Smarty_variable($_smarty_tpl->tpl_vars['vars']->value['sField'], null, 0);?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('vars', null, 0);
$_smarty_tpl->tpl_vars['vars']->value['sField'] = '';?>
        <?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['sort'])){?><?php $_smarty_tpl->tpl_vars["saveSort"] = new Smarty_variable($_smarty_tpl->tpl_vars['vars']->value['sort'], null, 0);?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('vars', null, 0);
$_smarty_tpl->tpl_vars['vars']->value['sort'] = '';?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['v']->value[1]){?><th style="width: <?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
;">
                <?php if (!empty($_smarty_tpl->tpl_vars['saveField']->value)&&$_smarty_tpl->tpl_vars['v']->value[0]==str_replace('`','',$_smarty_tpl->tpl_vars['saveField']->value)){?><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/btn/sort_<?php echo $_smarty_tpl->tpl_vars['saveSort']->value;?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ii']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ii']['index']++;
?><?php if ($_smarty_tpl->tpl_vars['vv']->value){?>&<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
=<?php echo str_replace('`','',$_smarty_tpl->tpl_vars['vv']->value);?>
<?php }?><?php } ?>&sField=<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
<?php if (empty($_smarty_tpl->tpl_vars['saveSort']->value)||$_smarty_tpl->tpl_vars['saveSort']->value=='up'){?>&sort=down<?php }else{ ?>&sort=up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value[2];?>
</a>
            </th><?php }?>
        <?php } ?>
        <?php if (count($_smarty_tpl->tpl_vars['items']->value['actions'])){?><th style="width: <?php if (count($_smarty_tpl->tpl_vars['items']->value['actions'])*25>=75){?><?php echo count($_smarty_tpl->tpl_vars['items']->value['actions'])*25;?>
<?php }else{ ?>75<?php }?>px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
</th><?php }?>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']%2==0){?>odd<?php }else{ ?>even<?php }?>">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ii']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ii']['index']++;
?><?php if ($_smarty_tpl->tpl_vars['items']->value['fields'][$_smarty_tpl->getVariable('smarty')->value['foreach']['ii']['index']][1]){?><td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td><?php }?><?php } ?>
        <?php if (count($_smarty_tpl->tpl_vars['items']->value['actions'])){?><td class="actions"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ii']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ii']['index']++;
?>
            <?php if ($_smarty_tpl->tpl_vars['v']->value=='public'){?>
                <a class="actPublic" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['items']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnPublic'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['items']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['public']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
            <?php }elseif($_smarty_tpl->tpl_vars['v']->value=='access'){?>
                <a class="actAccess" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['items']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnAccess'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['items']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['access']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
            <?php }elseif($_smarty_tpl->tpl_vars['v']->value=='edit'){?>
                <a class="actEdit" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['items']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ii']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ii']['index']++;
?><?php if ($_smarty_tpl->tpl_vars['vv']->value){?>&<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
=<?php echo str_replace('`','',$_smarty_tpl->tpl_vars['vv']->value);?>
<?php }?><?php } ?><?php if (!empty($_smarty_tpl->tpl_vars['saveField']->value)){?>&sField=<?php echo str_replace('`','',$_smarty_tpl->tpl_vars['saveField']->value);?>
&sort=<?php echo $_smarty_tpl->tpl_vars['saveSort']->value;?>
<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
            <?php }elseif($_smarty_tpl->tpl_vars['v']->value=='delete'){?>
                <a class="actDelete" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['items']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dir']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            <?php }?>
        <?php } ?></td><?php }?>
    </tr><?php endfor; endif; ?>
</tbody></table><?php }} ?>