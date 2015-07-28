<link type="text/css" href="{$dirs.modules}{$module}/template.css" rel="stylesheet"/>
<script type="text/javascript" src="{$dirs.modules}{$module}/template.js"></script>





{if $action == 'admRegistryList' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'items_title'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_title&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_title}</a>
            </th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_title}</td>
            <td class="actions">
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}{$TPL.GETvarsStr}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/registryDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admRegistryEdit' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_title}</div>
            <div class="right"><input class="text required" type="text" name="items_title" value="{$TPL.item['items_title']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admProductsList' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_code'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_code&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_code}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'r_title'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=r_title&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_title}</a>
            </th>
            <th style="width: 80px;">{$titles.table_count}</th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_code}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td>{$TPL.items[i].items_title}</td>
            <td>{$TPL.items[i].items_count}</td>
            <td class="actions">
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}{$TPL.GETvarsStr}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/productDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admProductEdit' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_code}</div>
            <div class="right"><input class="text required" type="text" name="items_code" value="{$TPL.item['items_code']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_date}</div>
            <div class="right"><input class="text required forDatepicker" type="text" name="items_date" value="{$TPL.item['items_date']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_title}</div>
            <div class="right"><select name="items_rid" class="text required">
                <option value=""{if !$TPL.item['items_rid']} selected="selected"{/if}>{$titles.form_choose}</option>
                {section name=i loop=$TPL.registry}
                    <option value="{$TPL.registry[i].items_id}"{if $TPL.item['items_rid'] == $TPL.registry[i].items_id} selected="selected"{/if}>{$TPL.registry[i].items_title}</option>
                {/section}
            </select></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_count}</div>
            <div class="right"><input class="text required" type="text" name="items_count" value="{$TPL.item['items_count']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admBidsList' && $admAuth}<div class="admList bidsList">
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    {include file=$dirs.template|cat:'blocks/adm_filter.tpl' items=$TPL.status type='links' title=$titles.form_status}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_tGroup'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_department}</a>
            </th>
            <th style="width: 100px;">
                {if $TPL.GETvars.GVorderField == 'tStatus'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=tStatus&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_status}</a>
            </th>
            <th style="width: auto;">{$titles.table_comment}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="expand {if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td>{$TPL.items[i].tGroup}</td>
            <td>{$TPL.items[i].tStatus}<input type="hidden" name="status" value="{$TPL.items[i].items_status}"/></td>
            <td>{$TPL.items[i].items_comment}</td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admSuppliesList' && $admAuth}<div class="admList suppliesList">
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    {include file=$dirs.template|cat:'blocks/adm_filter.tpl' items=$TPL.status type='links' title=$titles.form_status}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: 100px;">{$titles.table_status}</th>
            <th style="width: auto;">{$titles.table_comment}</th>
            <th style="width: 100px;">{$titles.table_sum}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="expand {if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td>{$TPL.items[i].tStatus}<input type="hidden" name="status" value="{$TPL.items[i].items_status}"/></td>
            <td>{$TPL.items[i].items_comment}</td>
            <td>{$TPL.items[i].items_sum}</td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/pager.tpl'}
</div>





{elseif $action == 'admProductsImport' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <input type="hidden" name="import" value="true"/>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_import}</a></div>
    </form>
</div>















{elseif $action == 'bidsList' && $auth}<div class="bidsList">
    {if $user.items_type != 'offices'}<a href="?route=storeknuba/report&act=bids&GVdateFrom={$TPL.GETvars.GVdateFrom}&GVdateTo={$TPL.GETvars.GVdateTo}" class="btnExcel" target="_blank" title="{$titles.buttons_report} '{$titles.modStoreknuba_reportBids}'"><img src="{$dirs.template}images/adminka/btn/btn_excel.png" alt=""/></a>{/if}
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: 100px;">
                {if $TPL.GETvars.GVorderField == 'tGroup'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=tGroup&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_department}</a>
            </th>
            <th style="width: 100px;">
                {if $TPL.GETvars.GVorderField == 'tStatus'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=tStatus&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_status}</a>
            </th>
            <th style="width: auto;">{$titles.table_comment}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="expand {if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td>{$TPL.items[i].tGroup}</td>
            <td>{$TPL.items[i].tStatus}<input type="hidden" name="status" value="{$TPL.items[i].items_status}"/></td>
            <td>{$TPL.items[i].items_comment}</td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/pager.tpl'}
</div>





{elseif $action == 'bidAdd' && $auth}<div class="bidAdd">
    <form class="wwForm" name="fContent" method="post" action="">
        <input type="hidden" name="checkSend" value="true"/>
        <table class="wwTable"><tbody>
            <tr>
                <th style="width: auto;">{$titles.table_title}</th>
                <th style="width: 80px;">{$titles.table_count}</th>
                <th style="width: 24px;"><a href="#" class="btnAddElement" title="{$titles.modStoreknuba_btnAddElement}"><img src="{$dirs.template}images/adminka/btn/btn_add.png" alt="" style="top: 0px;"/></a></th>
            </tr>
            {foreach name=i from=$TPL.IDs key=k item=v}<tr class="{if $smarty.foreach.i.iteration % 2 > 0}odd{else}even{/if}">
                <td><input type="text" class="text auto" name="titles[{$k}]" value="{$TPL.titles[$k]}" style="width: 100%;"/><input type="hidden" name="IDs[{$k}]" value="{$TPL.IDs[$k]}"/></td>
                <td><input type="text" class="text" name="counts[{$k}]" value="{$TPL.counts[$k]}" style="width: 70px;"/></td>
                <td><a href="#" class="btnDel" title="{$titles.buttons_delete}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a></td>
            </tr>{/foreach}
        </tbody></table>
        <div class="row" style="padding-top: 10px;">
            <div class="left">{$titles.form_comment}</div>
            <div class="right" style="width: 700px;"><input type="text" class="text" name="comment" value="{$TPL.comment}" style="width: 540px;"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'productsList' && $auth}<div class="productsList">
    <a href="?route=storeknuba/report&act=stock&GVdateFrom={$TPL.GETvars.GVdateFrom}&GVdateTo={$TPL.GETvars.GVdateTo}" class="btnExcel" target="_blank" title="{$titles.buttons_report} '{$titles.modStoreknuba_reportStock}'"><img src="{$dirs.template}images/adminka/btn/btn_excel.png" alt=""/></a>
    {if $user.items_type == 'prorektor'}<a href="?route=storeknuba/report&act=motions&GVdateFrom={$TPL.GETvars.GVdateFrom}&GVdateTo={$TPL.GETvars.GVdateTo}" class="btnExcel" target="_blank" title="{$titles.buttons_report} '{$titles.modStoreknuba_reportMotions}'" style="margin-left: 900px;"><img src="{$dirs.template}images/adminka/btn/btn_excel.png" alt=""/></a>{/if}
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_code'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_code&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_code}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'r_title'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=r_title&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_title}</a>
            </th>
            <th style="width: 80px;">{$titles.table_count}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_code}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td>{$TPL.items[i].items_title}</td>
            <td>{$TPL.items[i].items_count}</td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/pager.tpl'}
</div>





{elseif $action == 'productsGroupsList' && $auth}<div class="productsList">
    <a href="?route=storeknuba/report&act=stock&GVdateFrom={$TPL.GETvars.GVdateFrom}&GVdateTo={$TPL.GETvars.GVdateTo}" class="btnExcel" target="_blank" title="{$titles.buttons_report}"><img src="{$dirs.template}images/adminka/btn/btn_excel.png" alt=""/></a>
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_code'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_code&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_code}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'r_title'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=r_title&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_title}</a>
            </th>
            <th style="width: 80px;">{$titles.table_count}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_code}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td>{$TPL.items[i].items_title}</td>
            <td>{$TPL.items[i].items_count}{if $user.items_type == 'offices'}<a href="{$TPL.items[i].items_id}" class="btnProductDel" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>{/if}</td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/pager.tpl'}
</div>





{elseif $action == 'registryList' && $auth}<div class="registryList">
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'items_title'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_title&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_title}</a>
            </th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_title}</td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/pager.tpl'}
</div>





{elseif $action == 'registryEdit' && $auth}<div class="registryEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_title}</div>
            <div class="right"><input class="text required" type="text" name="items_title" value="{$TPL.item['items_title']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'suppliesList' && $auth}<div class="suppliesList">
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    {include file=$dirs.template|cat:'blocks/adm_filter.tpl' items=$TPL.status type='links' title=$titles.form_status}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 130px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: 100px;">{$titles.table_status}</th>
            <th style="width: auto;">{$titles.table_comment}</th>
            <th style="width: 100px;">{$titles.table_sum}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="expand {if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td>{$TPL.items[i].tStatus}<input type="hidden" name="status" value="{$TPL.items[i].items_status}"/></td>
            <td>{$TPL.items[i].items_comment}</td>
            <td>{$TPL.items[i].items_sum}</td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/pager.tpl'}
</div>





{elseif $action == 'supplyAdd' && $auth}<div class="supplyAdd">
    <form class="wwForm" name="fContent" method="post" action="">
        <input type="hidden" name="checkSend" value="true"/>
        <table class="wwTable"><tbody>
            <tr>
                <th style="width: auto;">{$titles.table_title}</th>
                <th style="width: 80px;">{$titles.table_count}</th>
                <th style="width: 80px;">{$titles.table_price}</th>
                <th style="width: 24px;"><a href="#" class="btnAddElement" title="{$titles.modStoreknuba_btnAddElement}"><img src="{$dirs.template}images/adminka/btn/btn_add.png" alt="" style="top: 0px;"/></a></th>
            </tr>
            {foreach name=i from=$TPL.IDs key=k item=v}<tr class="{if $smarty.foreach.i.iteration % 2 > 0}odd{else}even{/if}">
                <td><input type="text" class="text auto" name="titles[{$k}]" value="{$TPL.titles[$k]}" style="width: 100%;"/><input type="hidden" name="IDs[{$k}]" value="{$TPL.IDs[$k]}"/></td>
                <td><input type="text" class="text" name="counts[{$k}]" value="{$TPL.counts[$k]}" style="width: 70px;"/></td>
                <td><input type="text" class="text" name="prices[{$k}]" value="{$TPL.prices[$k]}" style="width: 70px;"/></td>
                <td><a href="#" class="btnDel" title="{$titles.buttons_delete}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a></td>
            </tr>{/foreach}
        </tbody></table>
        <div class="row" style="padding-top: 10px;">
            <div class="left">{$titles.form_comment}</div>
            <div class="right" style="width: 700px;"><input type="text" class="text" name="comment" value="{$TPL.comment}" style="width: 540px;"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{/if}