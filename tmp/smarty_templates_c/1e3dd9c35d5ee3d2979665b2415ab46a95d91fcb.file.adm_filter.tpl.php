<?php /* Smarty version Smarty-3.1.11, created on 2014-05-29 13:50:15
         compiled from "template/blocks/adm_filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21081132485386eb9e063782-13091568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3dd9c35d5ee3d2979665b2415ab46a95d91fcb' => 
    array (
      0 => 'template/blocks/adm_filter.tpl',
      1 => 1401360605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21081132485386eb9e063782-13091568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5386eb9e081418_37131004',
  'variables' => 
  array (
    'items' => 0,
    'type' => 0,
    'TPL' => 0,
    'v' => 0,
    'k' => 0,
    'title' => 0,
    'default' => 0,
    'titles' => 0,
    'vv' => 0,
    'kk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386eb9e081418_37131004')) {function content_5386eb9e081418_37131004($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['items']->value)>0){?><form name="fContent" method="post" action="" class="wwForm wwFilter"><div class="row left">
    <?php if ($_smarty_tpl->tpl_vars['type']->value=='select'){?>
        <input type="hidden" name="href" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['k']->value!='GVfilter'){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>"/>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<select name="GVfilter" class="text">
            <?php if (empty($_smarty_tpl->tpl_vars['default']->value)){?><option value=""<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter']==''){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_all'];?>
</option><?php }?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ((empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter'])&&!empty($_smarty_tpl->tpl_vars['default']->value)&&$_smarty_tpl->tpl_vars['default']->value==$_smarty_tpl->tpl_vars['k']->value)||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter']==$_smarty_tpl->tpl_vars['k']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option><?php } ?>
        </select>
    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='links'){?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 &nbsp;<?php if (empty($_smarty_tpl->tpl_vars['default']->value)){?> <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['k']->value!='GVfilter'){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVfilter="<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter']==''){?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_all'];?>
</a> &nbsp;<?php }?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['vv']->value)&&$_smarty_tpl->tpl_vars['kk']->value!='GVfilter'){?>&<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
<?php }?><?php } ?>&GVfilter=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ((empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter'])&&!empty($_smarty_tpl->tpl_vars['default']->value)&&$_smarty_tpl->tpl_vars['default']->value==$_smarty_tpl->tpl_vars['k']->value)||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVfilter']==$_smarty_tpl->tpl_vars['k']->value){?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a> &nbsp; <?php } ?>
    <?php }?>
</div></form><?php }?><?php }} ?>