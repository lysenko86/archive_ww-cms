<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>{include file=$dirs.template|cat:'blocks/head.tpl'}</head>
    <body><div id="layout">
        {include file=$dirs.template|cat:'blocks/siteoff.tpl'}
        <div id="header">
            {include file=$dirs.template|cat:'blocks/langs.tpl'}
            <div class="separate"></div>
        </div>
        <div id="main">
            {include file=$dirs.template|cat:'blocks/message.tpl'}
            {include file=$dirs.template|cat:'blocks/breadcrumbs.tpl'}
            <div id="content">{if $checkModule == 'good'}{include file=$dirs.modules|cat:$module|cat:'/template.tpl'}{/if}</div>
        </div>
        <div id="footer">{include file=$dirs.template|cat:'blocks/footer.tpl'}</div>
    </div></body>
</html>