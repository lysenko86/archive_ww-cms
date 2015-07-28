<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>{include file=$dirs.template|cat:'blocks/adm_head.tpl'}</head>
    <body><div id="layout">
        <div id="header">
            <div class="title">{sprintf($titles.titles_admPanel, $domain)}</div>
            {if $admAuth}<div id="menu"><a href="?route=engine/admExit">{$titles.buttons_exit}</a></div>{/if}
            {include file=$dirs.template|cat:'blocks/adm_langs.tpl'}
        </div>
        <div id="admMain"{if $admAuth} class="mainBG"{/if}>
            {if !$admAuth}
                {include file=$dirs.template|cat:'blocks/adm_message.tpl'}
                {include file=$dirs.template|cat:'blocks/adm_breadcrumbs.tpl'}
                <div id="admContent">{include file=$dirs.modules|cat:'engine/template.tpl'}</div>
            {else}
                <div class="mainLeft">{include file=$dirs.template|cat:'blocks/adm_leftmenu.tpl'}</div>
                <div class="mainRight">
                    {include file=$dirs.template|cat:'blocks/adm_message.tpl'}
                    {include file=$dirs.template|cat:'blocks/adm_breadcrumbs.tpl'}
                    <div id="admContent">{if $checkModule == 'good' && $checkRights}{include file=$dirs.modules|cat:$module|cat:'/template.tpl'}{/if}</div>
                </div>
                <div class="separate"></div>
            {/if}
        </div>
        <div id="footer">{include file=$dirs.template|cat:'blocks/adm_footer.tpl'}</div>
    </div></body>
</html>