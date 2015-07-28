<?php /* Smarty version Smarty-3.1.11, created on 2014-02-08 07:46:48
         compiled from "template/modules/mod_pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197804599352f5c4c86609c6-81368324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f96187f1c16c69cca962e724b972cffbe5704db' => 
    array (
      0 => 'template/modules/mod_pages.tpl',
      1 => 1390888421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197804599352f5c4c86609c6-81368324',
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
  'unifunc' => 'content_52f5c4c875a1c5_89829828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f5c4c875a1c5_89829828')) {function content_52f5c4c875a1c5_89829828($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value=='admList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><?php if (isset($_smarty_tpl->tpl_vars['TPL']->value['arrItems'])){?>
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
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_descr'];?>
</div>
            <div class="right"><input type="text" name="descr_descr" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_descr'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_keywords'];?>
</div>
            <div class="right"><input type="text" name="descr_keywords" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_keywords'];?>
"/></div>
        </div>
        <div class="row"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_content'];?>
</div>
        <div class="row"><textarea name="descr_content" class="forCKeditor"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_content'];?>
</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSave"></a></div>
    </form>
<?php }?>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='getItem'&&!$_smarty_tpl->tpl_vars['admAuth']->value){?>
   	<h1><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_title'];?>
</h1>
   	<div class="page"><?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['descr_content'];?>
</div>





<?php }else{ ?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titles']->value['errors_action'];?>
</h1>
<?php }?><?php }} ?>