<link type="text/css" href="{$dirs.modules}{$module}/template.css" rel="stylesheet"/>
<script type="text/javascript" src="{$dirs.modules}{$module}/template.js"></script>





{if $action == 'admList' && $admAuth}<div class="admList">
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">{$titles.table_id}</th>
            <th style="width: auto;">{$titles.table_image}</th>
            <th style="width: 125px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td><div class="image"><img src="{$TPL.items[i].photo['150']}" alt="{$TPL.items[i].photo['source']}" height="100" class="bigImage"/></div></td>
            <td class="actions">
                <a class="ajax" href="{$TPL.href}/sliderMoveItem/?id_old={$TPL.items[i].items_id}&step=down" title="{$titles.table_btnDown}"><img src="{$dirs.template}images/adminka/btn/btn_down.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/sliderMoveItem/?id_old={$TPL.items[i].items_id}&step=up" title="{$titles.table_btnUp}"><img src="{$dirs.template}images/adminka/btn/btn_up.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/sliderChangePublic/?id={$TPL.items[i].items_id}" title="{$titles.table_btnPublic}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].items_public}on{else}off{/if}.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/sliderDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
</div>





{elseif $action == 'admEdit' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="items_type" value="main"/>
        <div class="row">
            <div class="left">{$titles.form_link}</div>
            <div class="right"><input class="text" type="text" name="items_link" value="{$TPL.item['items_link']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_picture}</div>
            <div class="right">
                <div class="image"><img src="{$TPL.item['photo']['150']}" class="bigImage" alt="{$TPL.item['photo']['source']}" height="100"/></div>
                <input type="file" name="photo" value=""/>
            </div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{/if}