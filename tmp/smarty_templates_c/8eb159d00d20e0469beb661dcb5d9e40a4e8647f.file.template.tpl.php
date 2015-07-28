<?php /* Smarty version Smarty-3.1.11, created on 2015-05-14 10:29:36
         compiled from "modules/storemanicure/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92660821355544ee03464f2-44358128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb159d00d20e0469beb661dcb5d9e40a4e8647f' => 
    array (
      0 => 'modules/storemanicure/template.tpl',
      1 => 1431585377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92660821355544ee03464f2-44358128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dirs' => 0,
    'module' => 0,
    'action' => 0,
    'admAuth' => 0,
    'TPL' => 0,
    'v' => 0,
    'k' => 0,
    'titles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55544ee11216a9_02235648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55544ee11216a9_02235648')) {function content_55544ee11216a9_02235648($_smarty_tpl) {?><link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.js"></script>





<?php if ($_smarty_tpl->tpl_vars['action']->value=='admClientsList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_search.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_id'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_id&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</a>
            </th>
            <th style="width: auto;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_fio'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_fio&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_fio'];?>
</a>
            </th>
            <th style="width: auto;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_name'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_name&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_name'];?>
</a>
            </th>
            <th style="width: 100px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_phone'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_phone&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_phone'];?>
</a>
            </th>
            <th style="width: 100px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_birthday'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_birthday&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_birthday'];?>
</a>
            </th>
            <th style="width: 70px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_discount'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_discount&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_discount'];?>
</a>
            </th>
            <th style="width: 70px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_sum'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_sum&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_sum'];?>
</a>
            </th>
            <th style="width: 75px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_birthday'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_discount'];?>
%</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sum'];?>
</td>
            <td class="actions">
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/clientsChangeAccess/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnAccess'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_access']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvarsStr'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/clientsDelItem/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_pager.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admClientEdit'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_fio'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_fio" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_fio'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_name'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_name" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_name'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_birthday'];?>
</div>
            <div class="right"><input class="text forDatepicker" type="text" name="items_birthday" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_birthday'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_email'];?>
</div>
            <div class="right"><input class="text" type="text" name="items_email" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_email'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_phone'];?>
</div>
            <div class="right"><input class="text" type="text" name="items_phone" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_phone'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_male'];?>
</div>
            <div class="right"><select class="text required" name="items_male">
                <option value=""<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_male']==''){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_choose'];?>
</option>
                <option value="m"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_male']=='m'){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_maleM'];?>
</option>
                <option value="f"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_male']=='f'){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_maleF'];?>
</option>
            </select></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_discount'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_discount" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_discount'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admMastersList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_search.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_id'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_id&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</a>
            </th>
            <th style="width: auto;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_fio'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_fio&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_fio'];?>
</a>
            </th>
            <th style="width: 85px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_phone'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_phone&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_phone'];?>
</a>
            </th>
            <th style="width: 70px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_percent'];?>
</th>
            <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_percentMat'];?>
</th>
            <th style="width: 70px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_sumTotal'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_sumTotal&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_sumTotal'];?>
</a>
            </th>
            <th style="width: 70px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_sumSelf'];?>
</th>
            <th style="width: 85px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_sumPaid'];?>
</th>
            <th style="width: 85px;" class="important"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_sumShould'];?>
</th>
            <th style="width: 75px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_percent'];?>
%</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_percentMat'];?>
%</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sumTotal'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sumSelf'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sumPaid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sumSelf']-$_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sumPaid'];?>
</td>
            <td class="actions">
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/mastersChangeAccess/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnAccess'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_access']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvarsStr'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/mastersDelItem/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_pager.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admMasterEdit'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_fio'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_fio" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_fio'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_phone'];?>
</div>
            <div class="right"><input class="text" type="text" name="items_phone" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_phone'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_percent'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_percent" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_percent'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_percentMat'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_percentMat" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_percentMat'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admServicesList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_search.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_filter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['TPL']->value['types'],'type'=>'links','title'=>$_smarty_tpl->tpl_vars['titles']->value['form_type']), 0);?>

    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_id'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_id&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</a>
            </th>
            <th style="width: auto;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_title'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_title&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_title'];?>
</a>
            </th>
            <th style="width: 150px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_type'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_type&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_type'];?>
</a>
            </th>
            <th style="width: 75px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['types'][$_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_type']];?>
</td>
            <td class="actions">
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/servicesChangePublic/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnPublic'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_public']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvarsStr'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/servicesDelItem/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_pager.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admServiceEdit'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_title" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_title'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_type'];?>
</div>
            <div class="right radios">
                <input type="radio" name="items_type" value="percent"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_type']=='percent'){?> checked="checked"<?php }?>/> <?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_radioPercent'];?>

                <input type="radio" name="items_type" value="percentMat"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_type']=='percentMat'){?> checked="checked"<?php }?>/> <?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_radioPercentMat'];?>

            </div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admMailerSmsBirth'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sms'];?>
</div>
            <div class="right">
                <input class="text required" type="text" name="sms_text_birth" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['sms_text_birth'];?>
"/>
                <div class="countSMS"><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_countMessages'];?>
 <span>1</span> <?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_pcs'];?>
</div>
            </div>
        </div>
        <div class="row text">
            <label><input class="text" type="radio" name="sms_birth" value="1"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['sms_birth']=='1'){?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_radioOn'];?>
</label>
            <label><input class="text" type="radio" name="sms_birth" value="0"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['sms_birth']=='0'){?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_radioOff'];?>
</label>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admMailerSms'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sms'];?>
</div>
            <div class="right">
                <input class="text required" type="text" name="sms_text" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['sms_text'];?>
"/>
                <div class="countSMS"><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_countMessages'];?>
 <span>1</span> <?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_pcs'];?>
</div>
            </div>
        </div>
        <div class="row text">
            <label><input class="text" type="radio" name="send" value="0" checked="checked"/><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</label>
            <label><input class="text" type="radio" name="send" value="1"/><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_sendAll'];?>
</label>
            <label><input class="text" type="radio" name="send" value="-1"/><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_testing'];?>
</label>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_perform'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admMailerEmailBirth'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row text">
            <label><input class="text" type="radio" name="email_birth" value="1"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['email_birth']=='1'){?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_radioOn'];?>
</label>
            <label><input class="text" type="radio" name="email_birth" value="0"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['email_birth']=='0'){?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_radioOff'];?>
</label>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
            <div class="right"><input class="text required" type="text" name="email_title_birth" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['email_title_birth'];?>
"/></div>
        </div>
        <div class="row"><div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_content'];?>
</div></div>
        <div class="row"><textarea class="text required forCKeditor" name="email_content_birth"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['email_content_birth'];?>
</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admMailerEmail'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row text">
            <label><input class="text" type="radio" name="send" value="0" checked="checked"/><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</label>
            <label><input class="text" type="radio" name="send" value="1"/><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_sendAll'];?>
</label>
            <label><input class="text" type="radio" name="send" value="-1"/><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_testing'];?>
</label>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
            <div class="right"><input class="text required" type="text" name="email_title" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['email_title'];?>
"/></div>
        </div>
        <div class="row"><div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_content'];?>
</div></div>
        <div class="row"><textarea class="text required forCKeditor" name="email_content"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['email_content'];?>
</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_perform'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admFinanceList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_dates.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_filter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['TPL']->value['types'],'type'=>'links','title'=>$_smarty_tpl->tpl_vars['titles']->value['form_type']), 0);?>

    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_id'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_id&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</a>
            </th>
            <th style="width: 110px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_date'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_date&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_date'];?>
</a>
            </th>
            <th style="width: 60px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_sum'];?>
</th>
            <th style="width: 90px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_type'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_type&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_type'];?>
</a>
            </th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_comment'];?>
</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_date'];?>
</td>
            <td style="color: #<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sum']>=0){?>009900<?php }else{ ?>FF0000<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['types'][$_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_type']];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_comment'];?>
</td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_pager.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admFinanceInkass'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sum'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_sum" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_sum'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_comment'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_comment" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_comment'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admFinanceAdd'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sum'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_sum" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_sum'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_comment'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_comment" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_comment'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admFinanceSalary'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_worker'];?>
</div>
            <div class="right">
                <select class="text required" name="worker">
                    <option value=""<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['worker']==''){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_choose'];?>
</option>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['workers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['workers'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['wid'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['workers'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['wid']==$_smarty_tpl->tpl_vars['TPL']->value['item']['worker']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value[$_smarty_tpl->tpl_vars['TPL']->value['workers'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']];?>
 - <?php echo $_smarty_tpl->tpl_vars['TPL']->value['workers'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</option><?php endfor; endif; ?>
                </select>
                <input type="hidden" name="should" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['should'];?>
"/>
            </div>
            <div class="last"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_should'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['should'];?>
</strong></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sum'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_sum" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_sum'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_comment'];?>
</div>
            <div class="right"><input class="text" type="text" name="items_comment" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_comment'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admFinancePrihod'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <div class="row serviceItem" style="display: none;">
        <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_service'];?>

        <select class="text required" style="width: 140px;" name="items_sid[]">
            <option value="" selected="selected"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_choose'];?>
</option>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['services']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['services'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['services'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_title'];?>
</option><?php endfor; endif; ?>
        </select>
        &nbsp;
        <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_master'];?>

        <select class="text required" style="width: 140px;" name="items_mid[]">
            <option value="" selected="selected"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_choose'];?>
</option>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['masters']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</option><?php endfor; endif; ?>
        </select>
        &nbsp;
        <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sum'];?>

        <input class="text required sum" style="width: 60px;" type="text" name="items_sum[]" value="0.00"/>
        <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sum'];?>
 <strong>0</strong>
        <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_delete'];?>
" class="btnDel"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
    </div>
    <form class="wwForm prihodForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_client'];?>
</div>
            <div class="right"><select class="text" name="items_cid">
                <option value=""<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_cid']=='0'){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_choose'];?>
</option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['clients']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['clients'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['clients'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']==$_smarty_tpl->tpl_vars['TPL']->value['item']['items_cid']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['TPL']->value['clients'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</option><?php endfor; endif; ?>
            </select></div>
            <div class="last"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_discount'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['TPL']->value['discount'];?>
</strong>%</div>
            <div class="separate"></div>
        </div>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['item']['items_sid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><div class="row serviceItem">
            <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_service'];?>

            <select class="text required" style="width: 140px;" name="items_sid[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]">
                <option value=""<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_sid'][$_smarty_tpl->tpl_vars['k']->value]=='0'){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_choose'];?>
</option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['services']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['services'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['services'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']==$_smarty_tpl->tpl_vars['TPL']->value['item']['items_sid'][$_smarty_tpl->tpl_vars['k']->value]){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['TPL']->value['services'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_title'];?>
</option><?php endfor; endif; ?>
            </select>
            &nbsp;
            <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_master'];?>

            <select class="text required" style="width: 140px;" name="items_mid[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]">
                <option value=""<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_mid'][$_smarty_tpl->tpl_vars['k']->value]=='0'){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_choose'];?>
</option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['masters']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']==$_smarty_tpl->tpl_vars['TPL']->value['item']['items_mid'][$_smarty_tpl->tpl_vars['k']->value]){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</option><?php endfor; endif; ?>
            </select>
            &nbsp;
            <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sum'];?>

            <input class="text required sum" style="width: 60px;" type="text" name="items_sum[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_sum'][$_smarty_tpl->tpl_vars['k']->value];?>
"/>
            <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_sum'];?>
 <strong>0</strong>
            <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_delete'];?>
" class="btnDel"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
        </div><?php } ?>
        <div class="row"><a href="#" class="btnAdd"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_addService'];?>
</a><div class="total"><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_sumTotal'];?>
 <span>0</span></div></div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_comment'];?>
</div>
            <div class="right"><input class="text" type="text" name="items_comment" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_comment'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admManageStatistic'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_dates.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="elements">
        <input type="hidden" name="href" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvarsStr'];?>
"/>
        <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_admin'];?>
 <select name="admin" class="text">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_all'];?>
</option>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['admins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['admins'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['admin']==$_smarty_tpl->tpl_vars['TPL']->value['admins'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['TPL']->value['admins'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</option><?php endfor; endif; ?>
        </select>
        &nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_master'];?>
 <select name="master" class="text">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_all'];?>
</option>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['masters']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['master']==$_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</option><?php endfor; endif; ?>
        </select>
        &nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_service'];?>
 <select name="service" class="text">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_all'];?>
</option>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['services']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['services'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['service']==$_smarty_tpl->tpl_vars['TPL']->value['services'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['TPL']->value['services'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_title'];?>
</option><?php endfor; endif; ?>
        </select>
        &nbsp; &nbsp; <?php echo $_smarty_tpl->tpl_vars['titles']->value['form_client'];?>
 <select name="client" class="text">
            <option value="0"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_all'];?>
</option>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['clients']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['clients'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['client']==$_smarty_tpl->tpl_vars['TPL']->value['clients'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['TPL']->value['clients'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</option><?php endfor; endif; ?>
        </select>
    </div>
    <div class="divSum"><strong><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_sumTotal'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['TPL']->value['sum']['sumTotal'];?>
 &nbsp; &nbsp; <strong><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_sumProfit'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['TPL']->value['sum']['sumProfit'];?>
</div>
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_id'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_id&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</a>
            </th>
            <th style="width: 110px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_date'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_date&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_date'];?>
</a>
            </th>
            <th style="width: 60px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_sum'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_admin'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_master'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_service'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_client'];?>
</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_date'];?>
</td>
            <td style="color: #<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sum']>=0){?>009900<?php }else{ ?>FF0000<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_sum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_admin'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_master'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_service'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_client'];?>
</td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
    <div class="divSum"><strong><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_sumTotal'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['TPL']->value['sum']['sumTotal'];?>
 &nbsp; &nbsp; <strong><?php echo $_smarty_tpl->tpl_vars['titles']->value['modStoremanicure_sumProfit'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['TPL']->value['sum']['sumProfit'];?>
</div>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_pager.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admManagePlan'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList"><div id="tablePlan">
    <div class="dateChange"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_date'];?>
 <input class="text forDatepicker" style="width: 70px;" type="text" name="date" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['date'];?>
"/></div>
    <div class="dateTitle"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['date'];?>
</div>
    <a href="?route=storemanicure/admManagePlan&date=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['datePrev'];?>
" class="btnLeft" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_next'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/btn_wndleft.png" alt=""/></a>
    <a href="?route=storemanicure/admManagePlan&date=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['dateNext'];?>
" class="btnRight" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_prev'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/btn_wndright.png" alt=""/></a>
    <div class="days"><table class="day"><tbody>
        <tr><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['times']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
            <td colspan="4" class="time <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']%2==0){?>odd<?php }else{ ?>even<?php }?>"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['times'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'];?>
</td>
        <?php endfor; endif; ?></tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['masters']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><tr>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ii'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['name'] = 'ii';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['times']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total']);
?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iii'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iii']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['name'] = 'iii';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['loop'] = is_array($_loop=4) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iii']['total']);
?>
                <td class="mark <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['iii']['iteration']%2==0){?>odd<?php }else{ ?>even<?php }?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['name'] = 'iiii';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['marks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total']);
?><?php if ($_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['mid']==$_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']&&$_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['minutes']+($_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['length']-1)*15>=$_smarty_tpl->tpl_vars['TPL']->value['times'][$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['minutes']+($_smarty_tpl->getVariable('smarty')->value['section']['iii']['iteration']-1)*15&&$_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['minutes']<$_smarty_tpl->tpl_vars['TPL']->value['times'][$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['minutes']+$_smarty_tpl->getVariable('smarty')->value['section']['iii']['iteration']*15){?> checked<?php }?><?php endfor; endif; ?>">
                    <input type="hidden" name="mid" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"/>
                    <input type="hidden" name="date" value="<?php echo round($_smarty_tpl->tpl_vars['TPL']->value['times'][$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['minutes']/60);?>
:<?php echo ($_smarty_tpl->getVariable('smarty')->value['section']['iii']['iteration']-1)*15;?>
"/>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['ii']['last']&&$_smarty_tpl->getVariable('smarty')->value['section']['iii']['last']){?><div class="master"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</div><?php }?>
                    <div class="wnd"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['name'] = 'iiii';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['marks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iiii']['total']);
?><?php if ($_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['mid']==$_smarty_tpl->tpl_vars['TPL']->value['masters'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']&&$_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['minutes']+($_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['length']-1)*15>=$_smarty_tpl->tpl_vars['TPL']->value['times'][$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['minutes']+($_smarty_tpl->getVariable('smarty')->value['section']['iii']['iteration']-1)*15&&$_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['minutes']<$_smarty_tpl->tpl_vars['TPL']->value['times'][$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['minutes']+$_smarty_tpl->getVariable('smarty')->value['section']['iii']['iteration']*15){?>
                        <?php echo $_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['title'];?>

                        <a href="?route=storemanicure/admManagePlan&act=del&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['marks'][$_smarty_tpl->getVariable('smarty')->value['section']['iiii']['index']]['id'];?>
" class="button"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_delete'];?>
</a>
                    <?php }?><?php endfor; endif; ?></div>
                </td>
            <?php endfor; endif; ?><?php endfor; endif; ?>
        </tr><?php endfor; endif; ?>
    </tbody></table></div>
    <form class="wwForm" name="fContent" action="?route=storemanicure/admManagePlan&date=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['date'];?>
&act=edit" method="post" style="width: 450px; margin: 30px auto 0px; display: none;">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_master'];?>
</div>
            <div class="right" style="padding-top: 3px;"><span></span><input type="hidden" name="mid" value=""/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_timeFrom'];?>
</div>
            <div class="right" style="padding-top: 3px;"><span></span><input type="hidden" name="timeFrom" value=""/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_timeTo'];?>
</div>
            <div class="right"><input class="text required" type="text" name="timeTo" value=""/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_text'];?>
</div>
            <div class="right"><input class="text required" type="text" name="title" value=""/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div></div>





<?php }?><?php }} ?>