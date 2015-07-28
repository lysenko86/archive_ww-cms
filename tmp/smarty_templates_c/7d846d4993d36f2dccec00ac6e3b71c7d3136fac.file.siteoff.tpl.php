<?php /* Smarty version Smarty-3.1.11, created on 2014-05-07 01:53:04
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/siteoff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1425958190536967d03a96a1-27340767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d846d4993d36f2dccec00ac6e3b71c7d3136fac' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/siteoff.tpl',
      1 => 1399416780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425958190536967d03a96a1-27340767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteOff' => 0,
    'siteMode' => 0,
    'titles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536967d03de533_48583553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536967d03de533_48583553')) {function content_536967d03de533_48583553($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['siteOff']->value&&$_smarty_tpl->tpl_vars['siteMode']->value=='0'){?><div id="siteOff">
    <div class="msg"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_siteOffMsg'];?>
</div>
    <div class="exit"><a href="?route=engine/siteOffExit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_exit'];?>
</a></div>
    <div class="separate"></div>
</div><?php }?><?php }} ?>