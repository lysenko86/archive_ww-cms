<link type="text/css" href="{$dirs.modules}{$module}/template.css" rel="stylesheet"/>
<script type="text/javascript" src="{$dirs.modules}{$module}/template.js"></script>





{if $action == 'admList' && $admAuth}<div class="admList">
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">{$titles.table_id}</th>
            <th style="width: auto;">{$titles.table_title}</th>
            <th style="width: 125px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td style="padding-left: {4 + 20 * ($TPL.items[i].items_level - 1)}px">{$TPL.items[i].descr_title}</td>
            <td class="actions">
                <a class="act" href="{$TPL.href}&act=down&id={$TPL.items[i].items_id}" title="{$titles.table_btnDown}"><img src="{$dirs.template}images/adminka/btn/btn_down.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=up&id={$TPL.items[i].items_id}" title="{$titles.table_btnUp}"><img src="{$dirs.template}images/adminka/btn/btn_up.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/menuChangePublic/?id={$TPL.items[i].items_id}" title="{$titles.table_btnPublic}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].items_public}on{else}off{/if}.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=del&id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}" onclick="return menu_menuDelItem_before();"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
</div>





{elseif $action == 'admEdit' && $admAuth}<div class="admEdit">
    {include file=$dirs.template|cat:'blocks/adm_contentlangs.tpl'}
    <form class="wwForm" name="fContent" method="post" action="">
        <input type="hidden" name="items_type" value="top"/>
        <div class="row">
            <div class="left">{$titles.form_parentCat}</div>
            <div class="right"><select class="text required" name="items_pid">
                <option value="0"{if $TPL.item['items_pid'] == 0} selected="selected"{/if}>{$titles.titles_rootCat}</option>
                {section name=i loop=$TPL.items}<option value="{$TPL.items[i]['items_id']}"{if $TPL.item['items_pid'] == $TPL.items[i]['items_id']} selected="selected"{/if} style="padding-left: {20 * $TPL.items[i]['items_level']}px;">{$TPL.items[i]['descr_title']}</option>{/section}
            </select></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_title}</div>
            <div class="right"><input class="text required" type="text" name="descr_title" value="{$TPL.item['descr_title']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_link}</div>
            <div class="right"><input class="text" type="text" name="items_link" value="{$TPL.item['items_link']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{/if}