<?php /* Smarty version Smarty-3.1.11, created on 2014-01-28 07:54:59
         compiled from "template/modules/mod_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199603948652e746335cd333-97092354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c13f3f0f06c0508d09b551bc1566ba2dd926a08' => 
    array (
      0 => 'template/modules/mod_menu.tpl',
      1 => 1390888487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199603948652e746335cd333-97092354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'admAuth' => 0,
    'TPL' => 0,
    'dir' => 0,
    'titles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e7463362c752_78609026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7463362c752_78609026')) {function content_52e7463362c752_78609026($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value=='admList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (isset($_smarty_tpl->tpl_vars['TPL']->value['arrItems'])){?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dir']->value['template']).('blocks/adm_table_filter1.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('filters'=>$_smarty_tpl->tpl_vars['TPL']->value['arrFilters'],'vars'=>$_smarty_tpl->tpl_vars['TPL']->value['arrVars'],'href'=>$_smarty_tpl->tpl_vars['TPL']->value['href']), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dir']->value['template']).('blocks/adm_table.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['TPL']->value['arrItems'],'vars'=>$_smarty_tpl->tpl_vars['TPL']->value['arrVars'],'href'=>$_smarty_tpl->tpl_vars['TPL']->value['href']), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dir']->value['template']).('blocks/adm_paginate.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginate'=>$_smarty_tpl->tpl_vars['TPL']->value['arrPaginate'],'vars'=>$_smarty_tpl->tpl_vars['TPL']->value['arrVars'],'href'=>$_smarty_tpl->tpl_vars['TPL']->value['href']), 0);?>

<?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admEdit'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (isset($_smarty_tpl->tpl_vars['TPL']->value['item'])){?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dir']->value['template']).('blocks/adm_contentlangs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('vars'=>$_smarty_tpl->tpl_vars['TPL']->value['arrVars'],'href'=>$_smarty_tpl->tpl_vars['TPL']->value['href']), 0);?>

    <form name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_title'];?>
</div>
            <div class="right"><input type="text" name="descr_title" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_title'];?>
" class="required"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_link'];?>
</div>
            <div class="right"><input type="text" name="items_link" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_link'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSave"></a></div>
    </form>
<?php }?>




<?php }else{ ?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titles']->value['errors_action'];?>
</h1>
<?php }?><?php }} ?>