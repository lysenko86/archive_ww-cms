<link type="text/css" href="{$dirs.modules}{$module}/template.css" rel="stylesheet"/>
<script type="text/javascript" src="{$dirs.modules}{$module}/template.js"></script>





{if $action == 'admClientsList' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'items_fio'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_fio&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_fio}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'items_name'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_name&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_name}</a>
            </th>
            <th style="width: 100px;">
                {if $TPL.GETvars.GVorderField == 'items_phone'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_phone&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_phone}</a>
            </th>
            <th style="width: 100px;">
                {if $TPL.GETvars.GVorderField == 'items_birthday'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_birthday&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_birthday}</a>
            </th>
            <th style="width: 70px;">
                {if $TPL.GETvars.GVorderField == 'items_discount'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_discount&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_discount}</a>
            </th>
            <th style="width: 70px;">
                {if $TPL.GETvars.GVorderField == 'items_sum'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_sum&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_sum}</a>
            </th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_fio}</td>
            <td>{$TPL.items[i].items_name}</td>
            <td>{$TPL.items[i].items_phone}</td>
            <td>{$TPL.items[i].items_birthday}</td>
            <td>{$TPL.items[i].items_discount}%</td>
            <td>{$TPL.items[i].items_sum}</td>
            <td class="actions">
                <a class="ajax" href="{$TPL.href}/clientsChangeAccess/?id={$TPL.items[i].items_id}" title="{$titles.table_btnAccess}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].items_access}on{else}off{/if}.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}{$TPL.GETvarsStr}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/clientsDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admClientEdit' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_fio}</div>
            <div class="right"><input class="text required" type="text" name="items_fio" value="{$TPL.item['items_fio']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_name}</div>
            <div class="right"><input class="text required" type="text" name="items_name" value="{$TPL.item['items_name']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_birthday}</div>
            <div class="right"><input class="text forDatepicker" type="text" name="items_birthday" value="{$TPL.item['items_birthday']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_email}</div>
            <div class="right"><input class="text" type="text" name="items_email" value="{$TPL.item['items_email']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_phone}</div>
            <div class="right"><input class="text" type="text" name="items_phone" value="{$TPL.item['items_phone']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_male}</div>
            <div class="right"><select class="text required" name="items_male">
                <option value=""{if $TPL.item['items_male'] == ''} selected="selected"{/if}>{$titles.form_choose}</option>
                <option value="m"{if $TPL.item['items_male'] == 'm'} selected="selected"{/if}>{$titles.form_maleM}</option>
                <option value="f"{if $TPL.item['items_male'] == 'f'} selected="selected"{/if}>{$titles.form_maleF}</option>
            </select></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_discount}</div>
            <div class="right"><input class="text required" type="text" name="items_discount" value="{$TPL.item['items_discount']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admMastersList' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'items_fio'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_fio&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_fio}</a>
            </th>
            <th style="width: 85px;">
                {if $TPL.GETvars.GVorderField == 'items_phone'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_phone&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_phone}</a>
            </th>
            <th style="width: 70px;">{$titles.table_percent}</th>
            <th style="width: 100px;">{$titles.table_percentMat}</th>
            <th style="width: 70px;">
                {if $TPL.GETvars.GVorderField == 'items_sumTotal'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_sumTotal&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_sumTotal}</a>
            </th>
            <th style="width: 70px;">{$titles.table_sumSelf}</th>
            <th style="width: 85px;">{$titles.table_sumPaid}</th>
            <th style="width: 85px;" class="important">{$titles.table_sumShould}</th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_fio}</td>
            <td>{$TPL.items[i].items_phone}</td>
            <td>{$TPL.items[i].items_percent}%</td>
            <td>{$TPL.items[i].items_percentMat}%</td>
            <td>{$TPL.items[i].items_sumTotal}</td>
            <td>{$TPL.items[i].items_sumSelf}</td>
            <td>{$TPL.items[i].items_sumPaid}</td>
            <td>{$TPL.items[i].items_sumSelf - $TPL.items[i].items_sumPaid}</td>
            <td class="actions">
                <a class="ajax" href="{$TPL.href}/mastersChangeAccess/?id={$TPL.items[i].items_id}" title="{$titles.table_btnAccess}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].items_access}on{else}off{/if}.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}{$TPL.GETvarsStr}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/mastersDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admMasterEdit' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_fio}</div>
            <div class="right"><input class="text required" type="text" name="items_fio" value="{$TPL.item['items_fio']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_phone}</div>
            <div class="right"><input class="text" type="text" name="items_phone" value="{$TPL.item['items_phone']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_percent}</div>
            <div class="right"><input class="text required" type="text" name="items_percent" value="{$TPL.item['items_percent']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_percentMat}</div>
            <div class="right"><input class="text required" type="text" name="items_percentMat" value="{$TPL.item['items_percentMat']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admServicesList' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    {include file=$dirs.template|cat:'blocks/adm_filter.tpl' items=$TPL.types type='links' title=$titles.form_type}
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
            <th style="width: 150px;">
                {if $TPL.GETvars.GVorderField == 'items_type'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_type&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_type}</a>
            </th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_title}</td>
            <td>{$TPL.types[$TPL.items[i].items_type]}</td>
            <td class="actions">
                <a class="ajax" href="{$TPL.href}/servicesChangePublic/?id={$TPL.items[i].items_id}" title="{$titles.table_btnPublic}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].items_public}on{else}off{/if}.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}{$TPL.GETvarsStr}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/servicesDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admServiceEdit' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_title}</div>
            <div class="right"><input class="text required" type="text" name="items_title" value="{$TPL.item['items_title']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_type}</div>
            <div class="right radios">
                <input type="radio" name="items_type" value="percent"{if $TPL.item['items_type'] == 'percent'} checked="checked"{/if}/> {$titles.modStoremanicure_radioPercent}
                <input type="radio" name="items_type" value="percentMat"{if $TPL.item['items_type'] == 'percentMat'} checked="checked"{/if}/> {$titles.modStoremanicure_radioPercentMat}
            </div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admMailerSmsBirth' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_sms}</div>
            <div class="right">
                <input class="text required" type="text" name="sms_text_birth" value="{$TPL.item['sms_text_birth']}"/>
                <div class="countSMS">{$titles.modStoremanicure_countMessages} <span>1</span> {$titles.titles_pcs}</div>
            </div>
        </div>
        <div class="row text">
            <label><input class="text" type="radio" name="sms_birth" value="1"{if $TPL.item['sms_birth'] == '1'}checked="checked"{/if}/>{$titles.modStoremanicure_radioOn}</label>
            <label><input class="text" type="radio" name="sms_birth" value="0"{if $TPL.item['sms_birth'] == '0'}checked="checked"{/if}/>{$titles.modStoremanicure_radioOff}</label>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admMailerSms' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_sms}</div>
            <div class="right">
                <input class="text required" type="text" name="sms_text" value="{$TPL.item['sms_text']}"/>
                <div class="countSMS">{$titles.modStoremanicure_countMessages} <span>1</span> {$titles.titles_pcs}</div>
            </div>
        </div>
        <div class="row text">
            <label><input class="text" type="radio" name="send" value="0" checked="checked"/>{$titles.buttons_save}</label>
            <label><input class="text" type="radio" name="send" value="1"/>{$titles.buttons_sendAll}</label>
            <label><input class="text" type="radio" name="send" value="-1"/>{$titles.buttons_testing}</label>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_perform}</a></div>
    </form>
</div>





{elseif $action == 'admMailerEmailBirth' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row text">
            <label><input class="text" type="radio" name="email_birth" value="1"{if $TPL.item['email_birth'] == '1'}checked="checked"{/if}/>{$titles.modStoremanicure_radioOn}</label>
            <label><input class="text" type="radio" name="email_birth" value="0"{if $TPL.item['email_birth'] == '0'}checked="checked"{/if}/>{$titles.modStoremanicure_radioOff}</label>
        </div>
        <div class="row">
            <div class="left">{$titles.form_title}</div>
            <div class="right"><input class="text required" type="text" name="email_title_birth" value="{$TPL.item['email_title_birth']}"/></div>
        </div>
        <div class="row"><div class="left">{$titles.form_content}</div></div>
        <div class="row"><textarea class="text required forCKeditor" name="email_content_birth">{$TPL.item['email_content_birth']}</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admMailerEmail' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row text">
            <label><input class="text" type="radio" name="send" value="0" checked="checked"/>{$titles.buttons_save}</label>
            <label><input class="text" type="radio" name="send" value="1"/>{$titles.buttons_sendAll}</label>
            <label><input class="text" type="radio" name="send" value="-1"/>{$titles.buttons_testing}</label>
        </div>
        <div class="row">
            <div class="left">{$titles.form_title}</div>
            <div class="right"><input class="text required" type="text" name="email_title" value="{$TPL.item['email_title']}"/></div>
        </div>
        <div class="row"><div class="left">{$titles.form_content}</div></div>
        <div class="row"><textarea class="text required forCKeditor" name="email_content">{$TPL.item['email_content']}</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_perform}</a></div>
    </form>
</div>





{elseif $action == 'admFinanceList' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    {include file=$dirs.template|cat:'blocks/adm_filter.tpl' items=$TPL.types type='links' title=$titles.form_type}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 110px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: 60px;">{$titles.table_sum}</th>
            <th style="width: 90px;">
                {if $TPL.GETvars.GVorderField == 'items_type'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_type&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_type}</a>
            </th>
            <th style="width: auto;">{$titles.table_comment}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td style="color: #{if $TPL.items[i].items_sum >= 0}009900{else}FF0000{/if};">{$TPL.items[i].items_sum}</td>
            <td>{$TPL.types[$TPL.items[i].items_type]}</td>
            <td>{$TPL.items[i].items_comment}</td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admFinanceInkass' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_sum}</div>
            <div class="right"><input class="text required" type="text" name="items_sum" value="{$TPL.item['items_sum']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_comment}</div>
            <div class="right"><input class="text required" type="text" name="items_comment" value="{$TPL.item['items_comment']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admFinanceAdd' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_sum}</div>
            <div class="right"><input class="text required" type="text" name="items_sum" value="{$TPL.item['items_sum']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_comment}</div>
            <div class="right"><input class="text required" type="text" name="items_comment" value="{$TPL.item['items_comment']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admFinanceSalary' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_worker}</div>
            <div class="right">
                <select class="text required" name="worker">
                    <option value=""{if $TPL.item['worker'] == ''} selected="selected"{/if}>{$titles.form_choose}</option>
                    {section name=i loop=$TPL.workers}<option value="{$TPL.workers[i].wid}"{if $TPL.workers[i].wid == $TPL.item['worker']} selected="selected"{/if}>{$titles[$TPL.workers[i].type]} - {$TPL.workers[i].items_fio}</option>{/section}
                </select>
                <input type="hidden" name="should" value="{$TPL.item['should']}"/>
            </div>
            <div class="last">{$titles.form_should} <strong>{$TPL.item['should']}</strong></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_sum}</div>
            <div class="right"><input class="text required" type="text" name="items_sum" value="{$TPL.item['items_sum']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_comment}</div>
            <div class="right"><input class="text" type="text" name="items_comment" value="{$TPL.item['items_comment']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admFinancePrihod' && $admAuth}<div class="admEdit">
    <div class="row serviceItem" style="display: none;">
        {$titles.form_service}
        <select class="text required" style="width: 140px;" name="items_sid[]">
            <option value="" selected="selected">{$titles.form_choose}</option>
            {section name=i loop=$TPL.services}<option value="{$TPL.services[i].items_id}">{$TPL.services[i].items_title}</option>{/section}
        </select>
        &nbsp;
        {$titles.form_master}
        <select class="text required" style="width: 140px;" name="items_mid[]">
            <option value="" selected="selected">{$titles.form_choose}</option>
            {section name=i loop=$TPL.masters}<option value="{$TPL.masters[i].items_id}">{$TPL.masters[i].items_fio}</option>{/section}
        </select>
        &nbsp;
        {$titles.form_sum}
        <input class="text required sum" style="width: 60px;" type="text" name="items_sum[]" value="0.00"/>
        {$titles.form_sum} <strong>0</strong>
        <a href="#" title="{$titles.buttons_delete}" class="btnDel"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
    </div>
    <form class="wwForm prihodForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_client}</div>
            <div class="right"><select class="text" name="items_cid">
                <option value=""{if $TPL.item['items_cid'] == '0'} selected="selected"{/if}>{$titles.form_choose}</option>
                {section name=i loop=$TPL.clients}<option value="{$TPL.clients[i].items_id}"{if $TPL.clients[i].items_id == $TPL.item['items_cid']} selected="selected"{/if}>{$TPL.clients[i].items_fio}</option>{/section}
            </select></div>
            <div class="last">{$titles.form_discount} <strong>{$TPL.discount}</strong>%</div>
            <div class="separate"></div>
        </div>
        {foreach name=i from=$TPL.item['items_sid'] key=k item=v}<div class="row serviceItem">
            {$titles.form_service}
            <select class="text required" style="width: 140px;" name="items_sid[{$k}]">
                <option value=""{if $TPL.item['items_sid'][$k] == '0'} selected="selected"{/if}>{$titles.form_choose}</option>
                {section name=i loop=$TPL.services}<option value="{$TPL.services[i].items_id}"{if $TPL.services[i].items_id == $TPL.item['items_sid'][$k]} selected="selected"{/if}>{$TPL.services[i].items_title}</option>{/section}
            </select>
            &nbsp;
            {$titles.form_master}
            <select class="text required" style="width: 140px;" name="items_mid[{$k}]">
                <option value=""{if $TPL.item['items_mid'][$k] == '0'} selected="selected"{/if}>{$titles.form_choose}</option>
                {section name=i loop=$TPL.masters}<option value="{$TPL.masters[i].items_id}"{if $TPL.masters[i].items_id == $TPL.item['items_mid'][$k]} selected="selected"{/if}>{$TPL.masters[i].items_fio}</option>{/section}
            </select>
            &nbsp;
            {$titles.form_sum}
            <input class="text required sum" style="width: 60px;" type="text" name="items_sum[{$k}]" value="{$TPL.item['items_sum'][$k]}"/>
            {$titles.form_sum} <strong>0</strong>
            <a href="#" title="{$titles.buttons_delete}" class="btnDel"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
        </div>{/foreach}
        <div class="row"><a href="#" class="btnAdd">{$titles.buttons_addService}</a><div class="total">{$titles.modStoremanicure_sumTotal} <span>0</span></div></div>
        <div class="row">
            <div class="left">{$titles.form_comment}</div>
            <div class="right"><input class="text" type="text" name="items_comment" value="{$TPL.item['items_comment']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'admManageStatistic' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_dates.tpl'}
    <div class="elements">
        <input type="hidden" name="href" value="{$TPL.href}{$TPL.GETvarsStr}"/>
        {$titles.form_admin} <select name="admin" class="text">
            <option value="0">{$titles.titles_all}</option>
            {section name=i loop=$TPL.admins}<option value="{$TPL.admins[i].items_id}"{if $TPL.admin == $TPL.admins[i].items_id} selected="selected"{/if}>{$TPL.admins[i].items_fio}</option>{/section}
        </select>
        &nbsp; &nbsp; {$titles.form_master} <select name="master" class="text">
            <option value="0">{$titles.titles_all}</option>
            {section name=i loop=$TPL.masters}<option value="{$TPL.masters[i].items_id}"{if $TPL.master == $TPL.masters[i].items_id} selected="selected"{/if}>{$TPL.masters[i].items_fio}</option>{/section}
        </select>
        &nbsp; &nbsp; {$titles.form_service} <select name="service" class="text">
            <option value="0">{$titles.titles_all}</option>
            {section name=i loop=$TPL.services}<option value="{$TPL.services[i].items_id}"{if $TPL.service == $TPL.services[i].items_id} selected="selected"{/if}>{$TPL.services[i].items_title}</option>{/section}
        </select>
        &nbsp; &nbsp; {$titles.form_client} <select name="client" class="text">
            <option value="0">{$titles.titles_all}</option>
            {section name=i loop=$TPL.clients}<option value="{$TPL.clients[i].items_id}"{if $TPL.client == $TPL.clients[i].items_id} selected="selected"{/if}>{$TPL.clients[i].items_fio}</option>{/section}
        </select>
    </div>
    <div class="divSum"><strong>{$titles.modStoremanicure_sumTotal}</strong> {$TPL.sum['sumTotal']} &nbsp; &nbsp; <strong>{$titles.modStoremanicure_sumProfit}</strong> {$TPL.sum['sumProfit']}</div>
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 110px;">
                {if $TPL.GETvars.GVorderField == 'items_date'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_date&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_date}</a>
            </th>
            <th style="width: 60px;">{$titles.table_sum}</th>
            <th style="width: auto;">{$titles.table_admin}</th>
            <th style="width: auto;">{$titles.table_master}</th>
            <th style="width: auto;">{$titles.table_service}</th>
            <th style="width: auto;">{$titles.table_client}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_date}</td>
            <td style="color: #{if $TPL.items[i].items_sum >= 0}009900{else}FF0000{/if};">{$TPL.items[i].items_sum}</td>
            <td>{$TPL.items[i].items_admin}</td>
            <td>{$TPL.items[i].items_master}</td>
            <td>{$TPL.items[i].items_service}</td>
            <td>{$TPL.items[i].items_client}</td>
        </tr>{/section}
    </tbody></table>
    <div class="divSum"><strong>{$titles.modStoremanicure_sumTotal}</strong> {$TPL.sum['sumTotal']} &nbsp; &nbsp; <strong>{$titles.modStoremanicure_sumProfit}</strong> {$TPL.sum['sumProfit']}</div>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admManagePlan' && $admAuth}<div class="admList"><div id="tablePlan">
    <div class="dateChange">{$titles.form_date} <input class="text forDatepicker" style="width: 70px;" type="text" name="date" value="{$TPL.date}"/></div>
    <div class="dateTitle">{$TPL.date}</div>
    <a href="?route=storemanicure/admManagePlan&date={$TPL.datePrev}" class="btnLeft" title="{$titles.buttons_next}"><img src="{$dirs.template}images/btn_wndleft.png" alt=""/></a>
    <a href="?route=storemanicure/admManagePlan&date={$TPL.dateNext}" class="btnRight" title="{$titles.buttons_prev}"><img src="{$dirs.template}images/btn_wndright.png" alt=""/></a>
    <div class="days"><table class="day"><tbody>
        <tr>{section name=i loop=$TPL.times}
            <td colspan="4" class="time {if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">{$TPL.times[i].time}</td>
        {/section}</tr>
        {section name=i loop=$TPL.masters}<tr>
            {section name=ii loop=$TPL.times}{section name=iii loop=4}
                <td class="mark {if $smarty.section.iii.iteration % 2 == 0}odd{else}even{/if}{section name=iiii loop=$TPL.marks}{if $TPL.marks[iiii].mid == $TPL.masters[i].items_id && $TPL.marks[iiii].minutes + ($TPL.marks[iiii].length - 1) * 15 >= $TPL.times[ii].minutes + ($smarty.section.iii.iteration - 1) * 15 && $TPL.marks[iiii].minutes < $TPL.times[ii].minutes + $smarty.section.iii.iteration * 15} checked{/if}{/section}">
                    <input type="hidden" name="mid" value="{$TPL.masters[i].items_id}"/>
                    <input type="hidden" name="date" value="{round($TPL.times[ii].minutes / 60)}:{($smarty.section.iii.iteration - 1) * 15}"/>
                    {if $smarty.section.ii.last && $smarty.section.iii.last}<div class="master">{$TPL.masters[i].items_fio}</div>{/if}
                    <div class="wnd">{section name=iiii loop=$TPL.marks}{if $TPL.marks[iiii].mid == $TPL.masters[i].items_id && $TPL.marks[iiii].minutes + ($TPL.marks[iiii].length - 1) * 15 >= $TPL.times[ii].minutes + ($smarty.section.iii.iteration - 1) * 15 && $TPL.marks[iiii].minutes < $TPL.times[ii].minutes + $smarty.section.iii.iteration * 15}
                        {$TPL.marks[iiii].title}
                        <a href="?route=storemanicure/admManagePlan&act=del&id={$TPL.marks[iiii].id}" class="button">{$titles.buttons_delete}</a>
                    {/if}{/section}</div>
                </td>
            {/section}{/section}
        </tr>{/section}
    </tbody></table></div>
    <form class="wwForm" name="fContent" action="?route=storemanicure/admManagePlan&date={$TPL.date}&act=edit" method="post" style="width: 450px; margin: 30px auto 0px; display: none;">
        <div class="row">
            <div class="left">{$titles.form_master}</div>
            <div class="right" style="padding-top: 3px;"><span></span><input type="hidden" name="mid" value=""/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_timeFrom}</div>
            <div class="right" style="padding-top: 3px;"><span></span><input type="hidden" name="timeFrom" value=""/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_timeTo}</div>
            <div class="right"><input class="text required" type="text" name="timeTo" value=""/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_text}</div>
            <div class="right"><input class="text required" type="text" name="title" value=""/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div></div>





{/if}