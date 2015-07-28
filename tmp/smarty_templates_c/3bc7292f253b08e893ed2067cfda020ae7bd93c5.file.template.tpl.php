<?php /* Smarty version Smarty-3.1.11, created on 2014-05-27 14:49:46
         compiled from "modules/photos/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1474934357537f53233b7301-16785877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bc7292f253b08e893ed2067cfda020ae7bd93c5' => 
    array (
      0 => 'modules/photos/template.tpl',
      1 => 1401191381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1474934357537f53233b7301-16785877',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537f532354aef8_19849790',
  'variables' => 
  array (
    'dirs' => 0,
    'module' => 0,
    'action' => 0,
    'admAuth' => 0,
    'titles' => 0,
    'TPL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537f532354aef8_19849790')) {function content_537f532354aef8_19849790($_smarty_tpl) {?><link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.js"></script>





<?php if ($_smarty_tpl->tpl_vars['action']->value=='admCatsList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_title'];?>
</th>
            <th style="width: 125px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
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
            <td style="padding-left: <?php echo 4+20*($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_level']-1);?>
px"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr_title'];?>
</td>
            <td class="actions">
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=down&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDown'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_down.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=up&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnUp'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_up.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/catsChangePublic/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnPublic'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_public']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=del&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
" onclick="return photos_catsDelItem_before();"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admCatEdit'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_contentlangs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <form class="wwForm" name="fContent" method="post" action="">
        <input type="hidden" name="items_type" value="gallery"/>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_parentCat'];?>
</div>
            <div class="right"><select class="text required" name="items_pid">
                <option value="0"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_pid']==0){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_rootCat'];?>
</option>
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_pid']==$_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']){?> selected="selected"<?php }?> style="padding-left: <?php echo 20*$_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_level'];?>
px;"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr_title'];?>
</option><?php endfor; endif; ?>
            </select></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
            <div class="right"><input class="text required" type="text" name="descr_title" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_title'];?>
"/></div>
        </div>
        <div class="row"><div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_descr'];?>
</div></div>
        <div class="row"><textarea class="text forCKeditor" name="descr_descr"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_descr'];?>
</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSave"></a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admPhotosList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_image'];?>
</th>
            <th style="width: 125px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
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
            <td><img src="<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'][200]){?><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'][200];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/nophoto.gif<?php }?>" alt="" height="100"/></td>
            <td class="actions">
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/itemsMoveItem/?id_old=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
&step=down" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDown'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_down.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/itemsMoveItem/?id_old=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
&step=up" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnUp'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_up.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/itemsChangePublic/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnPublic'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_public']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/itemsDelItem/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admPhotoEdit'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_category'];?>
</div>
            <div class="right"><select class="text required" name="items_cid">
                <option value="0"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_cid']==0){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_rootCat'];?>
</option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['cats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['cats'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_cid']==$_smarty_tpl->tpl_vars['TPL']->value['cats'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id']){?> selected="selected"<?php }?> style="padding-left: <?php echo 20*$_smarty_tpl->tpl_vars['TPL']->value['cats'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_level'];?>
px;"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['cats'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr_title'];?>
</option><?php endfor; endif; ?>
            </select></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
            <div class="right"><input class="text" type="text" name="descr_title" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_title'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_picture'];?>
</div>
            <div class="right">
                <img src="<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['photo']){?><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['photo'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/nophoto.gif<?php }?>" alt="" height="100"/>
                <br/><input type="file" name="photo" value=""/>
            </div>
        </div>
        <div class="row"><div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_descr'];?>
</div></div>
        <div class="row"><textarea class="text forCKeditor" name="descr_descr"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_descr'];?>
</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSave"></a></div>
    </form>
</div>





<?php }?><?php }} ?>