<link type="text/css" href="{$dirs.modules}{$module}/template.css" rel="stylesheet"/>
<script type="text/javascript" src="{$dirs.modules}{$module}/template.js"></script>





{if $action == 'admList' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 80px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'descr_title'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=descr_title&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_title}</a>
            </th>
            <th style="width: 100px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{substr($TPL.items[i].items_date, 0, 10)}</td>
            <td>{$TPL.items[i].descr_title}</td>
            <td class="actions">
                <a class="ajax" href="{$TPL.href}/tasksChangePublic/?id={$TPL.items[i].items_id}" title="{$titles.table_btnPublic}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].items_public}on{else}off{/if}.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/tasksChangeHome/?id={$TPL.items[i].items_id}" title="{$titles.table_btnHome}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].items_home}on{else}off{/if}.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}{$TPL.GETvarsStr}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/tasksDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admEdit' && $admAuth}<div class="admEdit">
    {include file=$dirs.template|cat:'blocks/adm_contentlangs.tpl'}
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_date}</div>
            <div class="right"><input class="text forDatepicker required" type="text" name="items_date" value="{$TPL.item['items_date']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_title}</div>
            <div class="right"><input class="text required" type="text" name="descr_title" value="{$TPL.item['descr_title']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_descr}</div>
            <div class="right"><input class="text" type="text" name="descr_descr" value="{$TPL.item['descr_descr']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_keywords}</div>
            <div class="right"><input class="text" type="text" name="descr_keywords" value="{$TPL.item['descr_keywords']}"/></div>
        </div>
        <div class="row"><div class="left">{$titles.form_content}</div></div>
        <div class="row"><textarea class="text forCKeditor" name="descr_content">{$TPL.item['descr_content']}</textarea></div>
        <div class="row"><div class="left">{$titles.form_report}</div></div>
        <div class="row"><textarea class="text forCKeditor" name="descr_report">{$TPL.item['descr_report']}</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif ($action == 'getItemT' || $action == 'getItemR') && !$admAuth}{if !empty($TPL.item)}
    <div class="title">
        <div class="left">{$TPL.item.descr_title}</div>
        <div class="right">{substr($TPL.item.items_date, 0, 2)} {$jsTitles.{'js_datePicker_monthNames_'|cat:substr($TPL.item.items_date, 3, 2) * 1}} {substr($TPL.item.items_date, 6, 4)}</div>
        <div class="separate"></div>
    </div>
    <div class="content">{if $action == 'getItemT'}{$TPL.item.descr_content}{else}{$TPL.item.descr_report}{/if}</div>
    {include file=$dirs.template|cat:'widgets/comments.tpl'}
{/if}





{elseif ($action == 'getItemsT' || $action == 'getItemsR') && !$admAuth}{if !empty($TPL.items)}
    <div class="tasks">{section name=i loop=$TPL.items}<div class="item">
        <div class="title"><a href="?route=tasks/getItem{if $action == 'getItemsT'}T{else}R{/if}&id={$TPL.items[i].items_id}">{$TPL.items[i].descr_title}</a></div>
        <div class="descr">{if $action == 'getItemsT'}{$TPL.items[i].descr_content}{else}{$TPL.items[i].descr_report}{/if}</div>
    </div>{/section}</div>
    {include file=$dirs.template|cat:'blocks/pager.tpl'}
{/if}





{/if}