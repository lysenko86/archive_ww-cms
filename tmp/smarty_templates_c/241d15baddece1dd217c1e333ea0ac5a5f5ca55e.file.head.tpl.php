<?php /* Smarty version Smarty-3.1.11, created on 2014-04-26 16:38:07
         compiled from "/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1146910494535b92b0c65602-00989156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241d15baddece1dd217c1e333ea0ac5a5f5ca55e' => 
    array (
      0 => '/var/www/lysenko86/data/www/wwcms.wworks.com.ua/template/blocks/head.tpl',
      1 => 1398519481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1146910494535b92b0c65602-00989156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_535b92b16af308_79998976',
  'variables' => 
  array (
    'dirs' => 0,
    'dir' => 0,
    'lang' => 0,
    'jsTitles' => 0,
    'k' => 0,
    'v' => 0,
    'TPL' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535b92b16af308_79998976')) {function content_535b92b16af308_79998976($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
    var WWcms    = new classWWcms();
    DIR_TEMPLATE = '<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
';
    DIR_INCLUDES = '<?php echo $_smarty_tpl->tpl_vars['dirs']->value['includes'];?>
';
//    AJAX         = '<?php echo $_smarty_tpl->tpl_vars['dir']->value['kernel'];?>
ajax.php?';
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