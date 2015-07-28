<link type="text/css" href="{$dirs.modules}{$module}/template.css" rel="stylesheet"/>
<script type="text/javascript" src="{$dirs.modules}{$module}/template.js"></script>





{if $action == 'adminka' && !$admAuth}<div class="admAuth"><form name="fContent" method="post" action="" class="wwForm">
    <div class="row">
        <div class="left">{$titles.form_login}</div>
        <div class="right"><input type="text" name="login" class="text required"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_password}</div>
        <div class="right"><input type="password" name="password" class="text required"/></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_enter}</a></div>
</form></div>





{elseif $action == 'listAdmins' && $admAuth}<div class="listAdmins"><table class="wwTable"><tbody>
    <tr>
        <th style="width: 40px;">{$titles.table_id}</th>
        <th style="width: auto;">{$titles.table_fio}</th>
        <th style="width: 100px;">{$titles.table_email}</th>
        <th style="width: 100px;">{$titles.table_login}</th>
        <th style="width: 100px;">{$titles.table_password}</th>
        <th style="width: 75px;">{$titles.table_actions}</th>
    </tr>
    {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
        <td>{$TPL.items[i].id}</td>
        <td>{$TPL.items[i].fio}</td>
        <td>{$TPL.items[i].email}</td>
        <td>{$TPL.items[i].login}</td>
        <td>{$TPL.items[i].password}</td>
        <td class="actions">
            <a class="ajax" href="{$TPL.href}/adminsChangeAccess/?id={$TPL.items[i].id}" title="{$titles.table_btnAccess}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].access}on{else}off{/if}.png" alt=""/></a>&nbsp;
            <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].id}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
            <a class="ajax" href="{$TPL.href}/adminsDelItem/?id={$TPL.items[i].id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
        </td>
    </tr>{/section}
</tbody></table></div>





{elseif $action == 'editAdmin' && $admAuth}{if !empty($TPL.item)}<div class="editAdmin"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left">{$titles.form_fio}</div>
        <div class="right"><input class="text" type="text" name="fio" value="{$TPL.item['fio']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_email}</div>
        <div class="right"><input class="text" type="text" name="email" value="{$TPL.item['email']}" /></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_login}</div>
        <div class="right"><input class="text required" type="text" name="login" value="{$TPL.item['login']}" class="required"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_password}</div>
        <div class="right"><input class="text required" type="text" name="password" value="{$TPL.item['password']}" class="required"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_rights}</div>
        <div class="right checkbox">{foreach name=i from=$TPL.item['rights'] key=k item=v}
            <input type="checkbox" name="rights[{$k}]" value="1"{if $v.check} checked="checked"{/if}/><span>{$v.title} ({$k})</span> - {$v.descr}<br/>
        {/foreach}</div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
</form></div>{/if}





{elseif $action == 'settSite' && $admAuth}{if !empty($TPL.item)}<div class="editSettings"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left">{$titles.form_domain}</div>
        <div class="right"><input class="text required" type="text" name="SITE_DOMAIN" value="{$TPL.item['SITE_DOMAIN']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_url}</div>
        <div class="right"><input class="text required" type="text" name="SITE_URL" value="{$TPL.item['SITE_URL']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_title}</div>
        <div class="right"><input class="text" type="text" name="SITE_TITLE" value="{$TPL.item['SITE_TITLE']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.modEngine_settMode}</div>
        <div class="right radios">
            <input type="radio" name="SITE_MODE" value="1"{if $TPL.item['SITE_MODE'] == 1} checked="checked"{/if}/> {$titles.modEngine_settMode1}
            <input type="radio" name="SITE_MODE" value="0"{if $TPL.item['SITE_MODE'] == 0} checked="checked"{/if}/> {$titles.modEngine_settMode0}
        </div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
</form></div>{/if}





{elseif $action == 'settAdmin' && $admAuth}{if !empty($TPL.item)}<div class="editSettings"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left">{$titles.form_fio}</div>
        <div class="right"><input class="text" type="text" name="ADMIN_FIO" value="{$TPL.item['ADMIN_FIO']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_email}</div>
        <div class="right"><input class="text required" type="text" name="ADMIN_EMAIL" value="{$TPL.item['ADMIN_EMAIL']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_phone}</div>
        <div class="right"><input class="text" type="text" name="ADMIN_PHONE" value="{$TPL.item['ADMIN_PHONE']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_login}</div>
        <div class="right"><input class="text required" type="text" name="ADMIN_LOGIN" value="{$TPL.item['ADMIN_LOGIN']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_password}</div>
        <div class="right"><input class="text required" type="text" name="ADMIN_PASSWORD" value="{$TPL.item['ADMIN_PASSWORD']}"/></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
</form></div>{/if}





{elseif $action == 'listModules' && $admAuth}<div class="listModules">
    <h3 class="title">{$titles.titles_installed}</h3>
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 100px;">{$titles.table_name}</th>
            <th style="width: 100px;">{$titles.table_title}</th>
            <th style="width: auto;">{$titles.table_descr}</th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.iItems}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.iItems[i].name}</td>
            <td>{$TPL.iItems[i].title}</td>
            <td>{$TPL.iItems[i].descr}</td>
            <td class="actions">
                {if $TPL.iItems[i].name != 'engine'}<a class="ajax" href="{$TPL.href}/modulesChangeActive/?name={$TPL.iItems[i].name}" title="{$titles.table_btnActive}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.iItems[i].active}on{else}off{/if}.png" alt=""/></a>{/if}
                {if $TPL.iItems[i].name != 'engine'}<a class="act" href="{$TPL.href}&act=del&module={$TPL.iItems[i].name}" title="{$titles.table_btnDel}" onclick="return engine_modulesDelItem_before();"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>{/if}
            </td>
        </tr>{/section}
    </tbody></table>
    <br/>
    <h3 class="title">{$titles.titles_notinstalled}</h3>
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 100px;">{$titles.table_name}</th>
            <th style="width: 100px;">{$titles.table_title}</th>
            <th style="width: auto;">{$titles.table_descr}</th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.nItems}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.nItems[i].name}</td>
            <td>{$TPL.nItems[i].title}</td>
            <td>{$TPL.nItems[i].descr}</td>
            <td class="actions">
                <a class="act" href="{$TPL.href}&act=add&module={$TPL.nItems[i].name}" title="{$titles.table_btnAdd}"><img src="{$dirs.template}images/adminka/btn/btn_add.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
</div>





{elseif $action == 'listLangs' && $admAuth}<div class="listLangs"><table class="wwTable"><tbody>
    <tr>
        <th style="width: 40px;">{$titles.table_code}</th>
        <th style="width: 60px;">{$titles.table_flag}</th>
        <th style="width: auto;">{$titles.table_title}</th>
        <th style="width: 75px;">{$titles.table_actions}</th>
    </tr>
    {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
        <td>{$TPL.items[i].key}</td>
        <td>{if file_exists($dirs.template|cat:'images/adminka/langs/lang_'|cat:$TPL.items[i].key|cat:'.png')}<img src="{$dirs.template}images/adminka/langs/lang_{$TPL.items[i].key}.png" alt=""/>{/if}</td>
        <td>{$TPL.items[i].title}</td>
        <td class="actions">
            {if $TPL.items[i].key != 'ua'}<a class="act" href="{$TPL.href}&act=active&key={$TPL.items[i].key}" title="{$titles.table_btnActive}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].active}on{else}off{/if}.png" alt=""/></a>{/if}
            {if $TPL.items[i].key != 'ua'}<a class="act" href="{$TPL.href}&act=edit&key={$TPL.items[i].key}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>{/if}
            {if $TPL.items[i].key != 'ua'}<a class="act" href="{$TPL.href}&act=del&key={$TPL.items[i].key}" title="{$titles.table_btnDel}" onclick="return engine_langsDelItem_before();"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>{/if}
        </td>
    </tr>{/section}
</tbody></table></div>





{elseif $action == 'editLang' && $admAuth}{if !empty($TPL.item)}<div class="editLang"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left">{$titles.form_code}</div>
        <div class="right"><input class="text required" type="text" name="key" value="{$TPL.item['key']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_title}</div>
        <div class="right"><input class="text required" type="text" name="title" value="{$TPL.item['title']}" /></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
</form></div>{/if}





{elseif $action == 'listTitles' && $admAuth}<div class="listTitles">
    {include file=$dirs.template|cat:'blocks/adm_filter.tpl' items=$TPL.tables type='links' default='languages_titles' title=$titles.form_table}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 220px;">{$titles.table_code}</th>
            <th style="width: 75px;">{$titles.table_lang}</th>
            <th style="width: auto;">{$titles.table_value}</th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].var}</td>
            <td>{$TPL.items[i].key}</td>
            <td class="edit"><input type="hidden" name="params" value="?action=titlesEditItem&table={if !empty($TPL.GETvars.GVfilter)}{$TPL.GETvars.GVfilter}{else}languages_titles{/if}&var={$TPL.items[i].var}&key={$TPL.items[i].key}"/>{$TPL.items[i].val}</td>
            <td class="actions">
                <a class="ajax" href="{$TPL.href}/titlesDelItem/?table={if !empty($TPL.GETvars.GVfilter)}{$TPL.GETvars.GVfilter}{else}languages_titles{/if}&var={$TPL.items[i].var}&key={$TPL.items[i].key}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
</div>





{elseif $action == 'addTitle' && $admAuth}{if !empty($TPL.item)}<div class="addTitle"><form class="wwForm" name="fContent" method="post" action="">
    <div class="row">
        <div class="left">{$titles.form_table}</div>
        <div class="right"><select class="text required" name="table">{foreach name=i from=$TPL.tables key=k item=v}<option value="{$k}"{if $k == $TPL.item['table']} selected="selected"{/if}>{$v}</option>{/foreach}</select></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_code}</div>
        <div class="right"><input class="text required" type="text" name="var" value="{$TPL.item['var']}"/></div>
    </div>
    {foreach name=i from=$langs key=k item=v}<div class="row">
        <div class="left">{$titles.titles_title} ({$v}):</div>
        <div class="right"><input class="text" type="text" name="val_{$k}" value="{$TPL.item['val_'|cat:$k]}" /></div>
    </div>{/foreach}
    <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
</form></div>{/if}





{elseif $action == 'utPhpinfo' && $admAuth}<div class="utility">
    <iframe src="{$dirs.includes}phpinfo/phpinfo.php"></iframe>
</div>





{elseif $action == 'utDumper' && $admAuth}<div class="utility">
    <iframe src="{$dirs.includes}dumper/dumper.php"></iframe>
</div>





{elseif $action == 'utChmod' && $admAuth}<div class="utility">
    <iframe src="{$dirs.includes}chmod/chmod.php"></iframe>
</div>





{elseif $action == 'error404' && $admAuth}<div class="error404">
    <div class="text404">404</div>
    <div class="text">{$titles.modEngine_adm404text}</div>
</div>





{elseif $action == 'adminka' && $admAuth}
   	<div class="home">{$titles.modEngine_admHome}</div>





{elseif $action == 'home' && !$admAuth}
   	<div class="home">{$TPL.title}</div>
{/if}