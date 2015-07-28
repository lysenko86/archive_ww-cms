<?php /* Smarty version Smarty-3.1.11, created on 2014-05-07 01:57:20
         compiled from "template/blocks/siteoff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1219762459536968d0ba96b4-82275263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd150273e657489ff39df443738b2c0948cf24970' => 
    array (
      0 => 'template/blocks/siteoff.tpl',
      1 => 1399416780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1219762459536968d0ba96b4-82275263',
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
  'unifunc' => 'content_536968d0bb66b8_68477693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536968d0bb66b8_68477693')) {function content_536968d0bb66b8_68477693($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['siteOff']->value&&$_smarty_tpl->tpl_vars['siteMode']->value=='0'){?><div id="siteOff">
    <div class="msg"><?php echo $_smarty_tpl->tpl_vars['titles']->value['titles_siteOffMsg'];?>
</div>
    <div class="exit"><a href="?route=engine/siteOffExit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_exit'];?>
</a></div>
    <div class="separate"></div>
</div><?php }?><?php }} ?>