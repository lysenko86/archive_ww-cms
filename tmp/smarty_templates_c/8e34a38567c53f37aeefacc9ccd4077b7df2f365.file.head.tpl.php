<?php /* Smarty version Smarty-3.1.11, created on 2014-08-06 14:23:25
         compiled from "template/blocks/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200598329252f42366f1b1f1-68276566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e34a38567c53f37aeefacc9ccd4077b7df2f365' => 
    array (
      0 => 'template/blocks/head.tpl',
      1 => 1407324185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200598329252f42366f1b1f1-68276566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52f423670ddda5_11868827',
  'variables' => 
  array (
    'dirs' => 0,
    'lang' => 0,
    'jsTitles' => 0,
    'k' => 0,
    'v' => 0,
    'TPL' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f423670ddda5_11868827')) {function content_52f423670ddda5_11868827($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="generator" content="WWcms v1.0"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/icon.ico" type="image/x-icon" rel="icon"/>
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
css/styles.css" rel="stylesheet"/>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['includes'];?>
jquery-1.9.1/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
js/wwcms.js"></script>
<script type="text/javascript">
    DIR_INCLUDES = '<?php echo $_smarty_tpl->tpl_vars['dirs']->value['includes'];?>
';
    DIR_MODULES  = '<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
';
    DIR_TEMPLATE = '<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
';
    LANG         = '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
';
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jsTitles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> WWcms.addTitle('<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
', '<?php echo str_replace("'","\'",$_smarty_tpl->tpl_vars['v']->value);?>
'); <?php } ?>
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
js/scripts.js"></script>

<?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['headDescription'])){?><meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['headDescription'];?>
"/><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['headKeywords'])){?><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['headKeywords'];?>
"/><?php }?>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php if (!empty($_smarty_tpl->tpl_vars['TPL']->value['headTitle'])){?> - <?php echo $_smarty_tpl->tpl_vars['TPL']->value['headTitle'];?>
<?php }?></title><?php }} ?>