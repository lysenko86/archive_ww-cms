<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="generator" content="WWcms v1.0"/>
<link href="{$dirs.template}images/adminka/icon.ico" type="image/x-icon" rel="icon"/>
<link type="text/css" href="{$dirs.includes}calendar_ui/jquery-ui-1.10.0.custom.css" rel="stylesheet"/>
<link type="text/css" href="{$dirs.template}css/adm_styles.css" rel="stylesheet"/>

<script type="text/javascript" src="{$dirs.includes}jquery-1.9.1/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="{$dirs.includes}calendar_ui/jquery-ui-1.10.0.custom.min.js"></script>
<script type="text/javascript" src="{$dirs.includes}ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="{$dirs.template}js/wwcms.js"></script>
<script type="text/javascript">
    DIR_INCLUDES = '{$dirs.includes}';
    DIR_MODULES  = '{$dirs.modules}';
    DIR_TEMPLATE = '{$dirs.template}';
    LANG         = '{$lang}';
    {foreach name=i from=$jsTitles key=k item=v} WWcms.addTitle('{$k}', '{str_replace("'", "\'", $v)}'); {/foreach}
</script>
<script type="text/javascript" src="{$dirs.template}js/adm_scripts.js"></script>

{if !empty($TPL.headDescription)}<meta name="description" content="{$TPL.headDescription}"/>{/if}
{if !empty($TPL.headKeywords)}<meta name="keywords" content="{$TPL.headKeywords}"/>{/if}
<title>{$title}{if !empty($TPL.headTitle)} - {$TPL.headTitle}{/if}</title>