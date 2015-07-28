<?php /* Smarty version Smarty-3.1.11, created on 2014-05-21 16:35:50
         compiled from "modules/news/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:759274491537c99112e14f2-11870447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93280b96462f4ae464259a14ea00dc55ef66422b' => 
    array (
      0 => 'modules/news/template.tpl',
      1 => 1400679342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '759274491537c99112e14f2-11870447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537c99114ef917_68510296',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c99114ef917_68510296')) {function content_537c99114ef917_68510296($_smarty_tpl) {?><link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.js"></script>





<?php if ($_smarty_tpl->tpl_vars['action']->value=='admList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_dates.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
            <th style="width: 125px;">
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
            <th style="width: auto;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='descr_title'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
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
<?php }?><?php } ?>&GVorderField=descr_title&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_title'];?>
</a>
            </th>
            <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr_title'];?>
</td>
            <td class="actions">
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/newsChangePublic/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnPublic'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_public']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/newsChangeHome/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnHome'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_home']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvarsStr'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/newsDelItem/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_pager.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admEdit'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_contentlangs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_date'];?>
</div>
            <div class="right"><input class="text forDatepicker required" type="text" name="items_date" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_date'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
            <div class="right"><input class="text required" type="text" name="descr_title" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_title'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_descr'];?>
</div>
            <div class="right"><input class="text" type="text" name="descr_descr" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_descr'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_keywords'];?>
</div>
            <div class="right"><input class="text" type="text" name="descr_keywords" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_keywords'];?>
"/></div>
        </div>
        <div class="row"><div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_content'];?>
</div></div>
        <div class="row"><textarea class="text forCKeditor" name="descr_content"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_content'];?>
</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSave"></a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='getItem'&&!$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['item'])){?>
    <div class="page"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_content'];?>
</div>
<?php }?>





<?php }?><?php }} ?>