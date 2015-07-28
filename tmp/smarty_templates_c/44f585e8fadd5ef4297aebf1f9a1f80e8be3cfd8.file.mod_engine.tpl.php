<?php /* Smarty version Smarty-3.1.11, created on 2014-02-07 02:05:59
         compiled from "template/modules/mod_engine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72114225652f42367332028-96673311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44f585e8fadd5ef4297aebf1f9a1f80e8be3cfd8' => 
    array (
      0 => 'template/modules/mod_engine.tpl',
      1 => 1390888416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72114225652f42367332028-96673311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'admAuth' => 0,
    'titles' => 0,
    'TPL' => 0,
    'dir' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f4236748cc06_68033376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f4236748cc06_68033376')) {function content_52f4236748cc06_68033376($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value=='adminka'&&!$_smarty_tpl->tpl_vars['admAuth']->value){?>
    <form name="fContent" method="post" action="" class="admAuth">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
            <div class="right"><input type="text" name="login" class="required"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
            <div class="right"><input type="password" name="password" class="required"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnLogin"></a></div>
    </form>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='adminka'&&$_smarty_tpl->tpl_vars['admAuth']->value){?>
   	<div class="home"><?php echo $_smarty_tpl->tpl_vars['titles']->value['modEngine_admHome'];?>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='listAdmins'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (isset($_smarty_tpl->tpl_vars['TPL']->value['arrItems'])){?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dir']->value['template']).('blocks/adm_table.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['TPL']->value['arrItems'],'href'=>$_smarty_tpl->tpl_vars['TPL']->value['href']), 0);?>

<?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='editAdmin'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (isset($_smarty_tpl->tpl_vars['TPL']->value['item'])){?>
    <form name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_fio'];?>
</div>
            <div class="right"><input type="text" name="items_fio" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_fio'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_email'];?>
</div>
            <div class="right"><input type="text" name="items_email" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_email'];?>
" /></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
            <div class="right"><input type="text" name="items_login" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_login'];?>
" class="required"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
            <div class="right"><input type="text" name="items_password" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_password'];?>
" class="required"/></div>
        </div>
        <div class="row"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_rights'];?>
</div>
        <div class="row"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['item']['rights']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <div class="checkbox"><input type="checkbox" name="rights[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="1"<?php if ($_smarty_tpl->tpl_vars['v']->value['check']){?> checked="checked"<?php }?>/><span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span> (<?php echo $_smarty_tpl->tpl_vars['v']->value['descr'];?>
)</div>
        <?php } ?></div>
        <div class="row divSubmit"><a href="#" class="submit btnSave"></a></div>
    </form>
<?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='settSite'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (isset($_smarty_tpl->tpl_vars['TPL']->value['item'])){?>
    <form name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_domain'];?>
</div>
            <div class="right"><input type="text" name="SITE_DOMAIN" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['SITE_DOMAIN'];?>
" class="required"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_url'];?>
</div>
            <div class="right"><input type="text" name="SITE_URL" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['SITE_URL'];?>
" class="required"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
            <div class="right"><input type="text" name="SITE_TITLE" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['SITE_TITLE'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSave"></a></div>
    </form>
<?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='settAdmin'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (isset($_smarty_tpl->tpl_vars['TPL']->value['item'])){?>
    <form name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_fio'];?>
</div>
            <div class="right"><input type="text" name="ADMIN_FIO" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_FIO'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_email'];?>
</div>
            <div class="right"><input type="text" name="ADMIN_EMAIL" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_EMAIL'];?>
" class="required"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_phone'];?>
</div>
            <div class="right"><input type="text" name="ADMIN_PHONE" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_PHONE'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
            <div class="right"><input type="text" name="ADMIN_LOGIN" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_LOGIN'];?>
" class="required"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
            <div class="right"><input type="text" name="ADMIN_PASSWORD" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['ADMIN_PASSWORD'];?>
" class="required"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSave"></a></div>
    </form>
<?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='home'&&!$_smarty_tpl->tpl_vars['admAuth']->value){?>
   	<div class="home"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_content'];?>
</div>





<?php }else{ ?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titles']->value['errors_action'];?>
</h1>
<?php }?><?php }} ?>