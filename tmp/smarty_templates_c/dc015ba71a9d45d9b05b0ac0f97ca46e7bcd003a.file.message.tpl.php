<?php /* Smarty version Smarty-3.1.11, created on 2014-02-07 02:05:59
         compiled from "template/blocks/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150315246552f423671a6a87-14963181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc015ba71a9d45d9b05b0ac0f97ca46e7bcd003a' => 
    array (
      0 => 'template/blocks/message.tpl',
      1 => 1390573731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150315246552f423671a6a87-14963181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f42367275002_36778175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f42367275002_36778175')) {function content_52f42367275002_36778175($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['message']->value['msg']){?><div id="message">
    <div class="<?php echo $_smarty_tpl->tpl_vars['message']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['msg'];?>
</div>
</div><?php }?><?php }} ?>