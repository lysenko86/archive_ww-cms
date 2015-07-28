<link type="text/css" href="{$dirs.modules}{$module}/template.css" rel="stylesheet"/>
<script type="text/javascript" src="{$dirs.modules}{$module}/template.js"></script>





{if $action == 'admList' && $admAuth}<div class="admList">
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 150px;">{$titles.table_date}</th>
            <th style="width: 150px;">
                {if $TPL.GETvars.GVorderField == 'items_fio'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_fio&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_fio}</a>
            </th>
            <th style="width: auto;">{$titles.table_message}</th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td>{$TPL.items[i].items_fio}</td>
            <td>{$TPL.items[i].items_review}</td>
            <td class="actions">
                <a class="ajax" href="{$TPL.href}/reviewsDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'getItems' && !$admAuth}
    <h1>{$titles.modReviews_reviews}</h1>
    {section name=i loop=$TPL.reviews}<div class="item">
        <div class="fio">{$TPL.reviews[i].items_date} {$TPL.reviews[i].items_fio}</div>
        <div class="review">{$TPL.reviews[i].items_review}</div>
    </div>{/section}
    {include file=$dirs.template|cat:'blocks/pager.tpl'}
    <form name="review" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_name}</div>
            <div class="right"><input type="text" name="fio" value="{$TPL.fio}"/></div>
        </div>
        <div class="row" style="text-align: left;">{$titles.form_message}</div>
        <div class="row"><textarea name="message">{$TPL.message}</textarea></div>
        <br/><br/>
        <div class="row"><input type="submit" value="Отправить"/></div>
    </form>





{/if}