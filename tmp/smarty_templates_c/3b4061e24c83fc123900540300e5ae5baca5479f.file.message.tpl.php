<?php /* Smarty version Smarty-3.1.11, created on 2014-04-26 14:04:17
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:684411411535b92b1744854-66393587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b4061e24c83fc123900540300e5ae5baca5479f' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/message.tpl',
      1 => 1390573731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '684411411535b92b1744854-66393587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_535b92b1781b99_36094128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535b92b1781b99_36094128')) {function content_535b92b1781b99_36094128($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['message']->value['msg']){?><div id="message">
    <div class="<?php echo $_smarty_tpl->tpl_vars['message']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['msg'];?>
</div>
</div><?php }?><?php }} ?>