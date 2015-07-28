<?php /* Smarty version Smarty-3.1.11, created on 2014-02-08 07:46:40
         compiled from "template/blocks/adm_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131117020652f5c4c0c95f88-62814253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64824eba151f7c2070461b37ff9b8fe25975f0f5' => 
    array (
      0 => 'template/blocks/adm_message.tpl',
      1 => 1390573731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131117020652f5c4c0c95f88-62814253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f5c4c0cd4328_83031585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f5c4c0cd4328_83031585')) {function content_52f5c4c0cd4328_83031585($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['message']->value['msg']){?><div id="message">
    <div class="<?php echo $_smarty_tpl->tpl_vars['message']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['msg'];?>
</div>
</div><?php }?><?php }} ?>