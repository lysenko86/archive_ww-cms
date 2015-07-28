<?php /* Smarty version Smarty-3.1.11, created on 2014-09-10 20:15:35
         compiled from "modules/engine/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1509697555535bcb8e26bea6-80882466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '162d167961073e6867ce740ca0f697261cd4f7c7' => 
    array (
      0 => 'modules/engine/template.tpl',
      1 => 1409865449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1509697555535bcb8e26bea6-80882466',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_535bcb8e3bad01_95452797',
  'variables' => 
  array (
    'dirs' => 0,
    'module' => 0,
    'action' => 0,
    'admAuth' => 0,
    'titles' => 0,
    'TPL' => 0,
    'k' => 0,
    'v' => 0,
    'langs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bcb8e3bad01_95452797')) {function content_535bcb8e3bad01_95452797($_smarty_tpl) {?><link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.js"></script>





<?php if ($_smarty_tpl->tpl_vars['action']->value=='adminka'&&!$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admAuth"><form name="fContent" method="post" action="" class="wwForm">
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
        <div class="right"><input type="text" name="login" class="text required"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
        <div class="right"><input type="password" name="password" class="text required"/></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_enter'];?>
</a></div>
</form></div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='listAdmins'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="listAdmins"><table class="wwTable"><tbody>
    <tr>
        <th style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</th>
        <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_fio'];?>
</th>
        <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_email'];?>
</th>
        <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_login'];?>
</th>
        <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_password'];?>
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
        <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fio'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['login'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['password'];?>
</td>
        <td class="actions">
            <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/adminsChangeAccess/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnAccess'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['access']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
            <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
            <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/adminsDelItem/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
        </td>
    </tr><?php endfor; endif; ?>
</tbody></table></div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='editAdmin'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['item'])){?><div class="editAdmin"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_fio'];?>
</div>
        <div class="right"><input class="text" type="text" name="fio" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['fio'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_email'];?>
</div>
        <div class="right"><input class="text" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['email'];?>
" /></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
        <div class="right"><input class="text required" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['login'];?>
" class="required"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
        <div class="right"><input class="text required" type="text" name="password" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['password'];?>
" class="required"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_rights'];?>
</div>
        <div class="right checkbox"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['item']['rights']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <input type="checkbox" name="rights[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="1"<?php if ($_smarty_tpl->tpl_vars['v']->value['check']){?> checked="checked"<?php }?>/><span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)</span> - <?php echo $_smarty_tpl->tpl_vars['v']->value['descr'];?>
<br/>
        <?php } ?></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
</form></div><?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='settSite'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['item'])){?><div class="editSettings"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_domain'];?>
</div>
        <div class="right"><input class="text required" type="text" name="SITE_DOMAIN" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['SITE_DOMAIN'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_url'];?>
</div>
        <div class="right"><input class="text required" type="text" name="SITE_URL" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['SITE_URL'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
        <div class="right"><input class="text" type="text" name="SITE_TITLE" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['SITE_TITLE'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['modEngine_settMode'];?>
</div>
        <div class="right radios">
            <input type="radio" name="SITE_MODE" value="1"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['SITE_MODE']==1){?> checked="checked"<?php }?>/> <?php echo $_smarty_tpl->tpl_vars['titles']->value['modEngine_settMode1'];?>

            <input type="radio" name="SITE_MODE" value="0"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['SITE_MODE']==0){?> checked="checked"<?php }?>/> <?php echo $_smarty_tpl->tpl_vars['titles']->value['modEngine_settMode0'];?>

        </div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
</form></div><?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='settAdmin'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['item'])){?><div class="editSettings"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_fio'];?>
</div>
        <div class="right"><input class="text" type="text" name="ADMIN_FIO" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_FIO'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_email'];?>
</div>
        <div class="right"><input class="text required" type="text" name="ADMIN_EMAIL" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_EMAIL'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_phone'];?>
</div>
        <div class="right"><input class="text" type="text" name="ADMIN_PHONE" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_PHONE'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
        <div class="right"><input class="text required" type="text" name="ADMIN_LOGIN" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_LOGIN'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
        <div class="right"><input class="text required" type="text" name="ADMIN_PASSWORD" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_PASSWORD'];?>
"/></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
</form></div><?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='listModules'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="listModules">
    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_installed'];?>
</h3>
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_name'];?>
</th>
            <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_title'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_descr'];?>
</th>
            <th style="width: 75px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['iItems']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['iItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['iItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['iItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr'];?>
</td>
            <td class="actions">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['iItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']!='engine'){?><a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/modulesChangeActive/?name=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['iItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnActive'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['iItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['iItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']!='engine'){?><a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=del&module=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['iItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
" onclick="return engine_modulesDelItem_before();"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a><?php }?>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
    <br/>
    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_notinstalled'];?>
</h3>
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_name'];?>
</th>
            <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_title'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_descr'];?>
</th>
            <th style="width: 75px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['nItems']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['nItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['nItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['nItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descr'];?>
</td>
            <td class="actions">
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=add&module=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['nItems'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnAdd'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_add.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='listLangs'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="listLangs"><table class="wwTable"><tbody>
    <tr>
        <th style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_code'];?>
</th>
        <th style="width: 60px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_flag'];?>
</th>
        <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_title'];?>
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
        <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
</td>
        <td><?php if (file_exists(((($_smarty_tpl->tpl_vars['dirs']->value['template']).('images/adminka/langs/lang_')).($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'])).('.png'))){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/langs/lang_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
.png" alt=""/><?php }?></td>
        <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</td>
        <td class="actions">
            <?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key']!='ua'){?><a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=active&key=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnActive'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key']!='ua'){?><a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&key=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key']!='ua'){?><a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=del&key=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
" onclick="return engine_langsDelItem_before();"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a><?php }?>
        </td>
    </tr><?php endfor; endif; ?>
</tbody></table></div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='editLang'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['item'])){?><div class="editLang"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_code'];?>
</div>
        <div class="right"><input class="text required" type="text" name="key" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['key'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
        <div class="right"><input class="text required" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['title'];?>
" /></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
</form></div><?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='listTitles'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="listTitles">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_filter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['TPL']->value['tables'],'type'=>'links','default'=>'languages_titles','title'=>$_smarty_tpl->tpl_vars['titles']->value['form_table']), 0);?>

    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 220px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_code'];?>
</th>
            <th style="width: 75px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_lang'];?>
</th>
            <th style="width: auto;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_value'];?>
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
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['var'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
</td>
            <td class="edit"><input type="hidden" name="params" value="?action=titlesEditItem&table=<?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter'])){?><?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter'];?>
<?php }else{ ?>languages_titles<?php }?>&var=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['var'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
"/><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['val'];?>
</td>
            <td class="actions">
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/titlesDelItem/?table=<?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter'])){?><?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter'];?>
<?php }else{ ?>languages_titles<?php }?>&var=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['var'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='addTitle'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['item'])){?><div class="addTitle"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_table'];?>
</div>
        <div class="right"><select class="text required" name="table"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['TPL']->value['item']['table']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option><?php } ?></select></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_code'];?>
</div>
        <div class="right"><input class="text required" type="text" name="var" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['var'];?>
"/></div>
    </div>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
):</div>
        <div class="right"><input class="text" type="text" name="val_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item'][('val_').($_smarty_tpl->tpl_vars['k']->value)];?>
" /></div>
    </div><?php } ?>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
</form></div><?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='utPhpinfo'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="utility">
    <iframe src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['includes'];?>
phpinfo/phpinfo.php"></iframe>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='utDumper'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="utility">
    <iframe src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['includes'];?>
dumper/dumper.php"></iframe>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='utChmod'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="utility">
    <iframe src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['includes'];?>
chmod/chmod.php"></iframe>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='error404'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="error404">
    <div class="text404">404</div>
    <div class="text"><?php echo $_smarty_tpl->tpl_vars['titles']->value['modEngine_adm404text'];?>
</div>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='adminka'&&$_smarty_tpl->tpl_vars['admAuth']->value){?>
   	<div class="home"><?php echo $_smarty_tpl->tpl_vars['titles']->value['modEngine_admHome'];?>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='home'&&!$_smarty_tpl->tpl_vars['admAuth']->value){?>
   	<div class="home"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['title'];?>
</div>
<?php }?><?php }} ?>