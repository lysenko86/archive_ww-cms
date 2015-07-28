<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>{include file=$dirs.template|cat:'blocks/head.tpl'}</head>
    <body><div id="layout">
        {include file=$dirs.template|cat:'blocks/siteoff.tpl'}
        <div id="header"><div class="inner">
            <div id="logo"><a href="{$url}"><img src="{$dirs.template}images/logo.png" alt=""/></a></div>
            {include file=$dirs.template|cat:'blocks/langs.tpl'}
            <div class="separate"></div>
        </div></div>
        <div id="menu"><div class="inner">{include file=$dirs.template|cat:'blocks/menu.tpl'}</div></div>
        {include file=$dirs.template|cat:'blocks/breadcrumbs.tpl'}
        {include file=$dirs.template|cat:'blocks/message.tpl'}
        <div id="mainArticle"><div class="inner">{if $checkModule == 'good'}{include file=$dirs.modules|cat:$module|cat:'/template.tpl'}{/if}</div></div>
        <div id="footer"><div class="inner">{include file=$dirs.template|cat:'blocks/footer.tpl'}</div></div>
    </div></body>
</html>