<link type="text/css" href="{$dirs.modules}{$module}/template.css" rel="stylesheet"/>
<script type="text/javascript" src="{$dirs.modules}{$module}/template.js"></script>





{if $action == 'admList' && $admAuth}<div class="admList">
    {include file=$dirs.template|cat:'blocks/adm_search.tpl'}
    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                {if $TPL.GETvars.GVorderField == 'items_id'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_id&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_id}</a>
            </th>
            <th style="width: 100px;">
                {if $TPL.GETvars.GVorderField == 'items_type'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_type&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_type}</a>
            </th>
            <th style="width: 120px;">
                {if $TPL.GETvars.GVorderField == 'items_login'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_login&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_login}</a>
            </th>
            <th style="width: 100px;">{$titles.table_password}</th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'items_email'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_email&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_email}</a>
            </th>
            <th style="width: auto;">
                {if $TPL.GETvars.GVorderField == 'items_fio'}<img src="{$dirs.template}images/adminka/btn/sort_{$TPL.GETvars.GVorderValue}.png" alt=""/>{/if}
                <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVorderField', 'GVorderValue'))}&{$k}={$v}{/if}{/foreach}&GVorderField=items_fio&GVorderValue={if empty($TPL.GETvars.GVorderValue) || $TPL.GETvars.GVorderValue == 'up'}down{else}up{/if}">{$titles.table_fio}</a>
            </th>
            <th style="width: 75px;">{$titles.table_actions}</th>
        </tr>
        {section name=i loop=$TPL.items}<tr class="{if $smarty.section.i.iteration % 2 == 0}odd{else}even{/if}">
            <td>{$TPL.items[i].items_id}</td>
            <td>{$TPL.items[i].items_type}</td>
            <td>{$TPL.items[i].items_login}</td>
            <td>{$TPL.items[i].items_password}</td>
            <td>{$TPL.items[i].items_email}</td>
            <td>{$TPL.items[i].items_fio}</td>
            <td class="actions">
                <a class="ajax" href="{$TPL.href}/usersChangeAccess/?id={$TPL.items[i].items_id}" title="{$titles.table_btnAccess}"><img src="{$dirs.template}images/adminka/btn/btn_{if $TPL.items[i].items_access}on{else}off{/if}.png" alt=""/></a>&nbsp;
                <a class="act" href="{$TPL.href}&act=edit&id={$TPL.items[i].items_id}{$TPL.GETvarsStr}" title="{$titles.table_btnEdit}"><img src="{$dirs.template}images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="{$TPL.href}/usersDelItem/?id={$TPL.items[i].items_id}" title="{$titles.table_btnDel}"><img src="{$dirs.template}images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr>{/section}
    </tbody></table>
    {include file=$dirs.template|cat:'blocks/adm_pager.tpl'}
</div>





{elseif $action == 'admEdit' && $admAuth}<div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left">{$titles.form_type}</div>
            <div class="right"><select class="text required" name="items_type">
                <option value=""{if $TPL.item['items_type'] == ''} selected="selected"{/if}>{$titles.form_choose}</option>
                {section name=i loop=$TPL.types}<option value="{$TPL.types[i].key}"{if $TPL.item['items_type'] == $TPL.types[i].key} selected="selected"{/if}>{$TPL.types[i].title}</option>{/section}
            </select></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_login}</div>
            <div class="right"><input class="text required" type="text" name="items_login" value="{$TPL.item['items_login']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_password}</div>
            <div class="right"><input class="text required" type="text" name="items_password" value="{$TPL.item['items_password']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_fio}</div>
            <div class="right"><input class="text" type="text" name="items_fio" value="{$TPL.item['items_fio']}"/></div>
        </div>
        <div class="row">
            <div class="left">{$titles.form_email}</div>
            <div class="right"><input class="text required" type="text" name="items_email" value="{$TPL.item['items_email']}"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_save}</a></div>
    </form>
</div>





{elseif $action == 'registration' && !$auth}<div class="registration"><form name="fContent" method="post" action="" class="wwForm">
    <div class="row">
        <div class="left">{$titles.form_login}</div>
        <div class="right"><input type="text" name="items_login" class="text required" value="{$TPL.item['items_login']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_password}</div>
        <div class="right"><input type="password" name="items_password" class="text required" value=""/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_fio}</div>
        <div class="right"><input type="text" name="items_fio" class="text" value="{$TPL.item['items_fio']}"/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_email}</div>
        <div class="right"><input type="text" name="items_email" class="text required" value="{$TPL.item['items_email']}"/></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_registration}</a></div>
</form></div>





{elseif $action == 'auth' && !$auth}<div class="auth"><form name="fContent" method="post" action="" class="wwForm">
    <div class="row">
        <div class="left">{$titles.form_login}</div>
        <div class="right"><input type="text" name="login" class="text required" value=""/></div>
    </div>
    <div class="row">
        <div class="left">{$titles.form_password}</div>
        <div class="right"><input type="password" name="password" class="text required" value=""/></div>
    </div>
    <div class="row">
        <div class="left"></div>
        <div class="right remindPass"><a href="#">{$titles.buttons_remindPass}</a></div>
    </div>
    <div class="row remindDiv">{$titles.form_email} <input type="text" name="email" value=""/><a href="?route=users/remind">{$titles.buttons_submit}</a></div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_enter}</a></div>
</form></div>





{elseif $action == 'cabinet' && $auth}<div class="cabinet"><a href="?route=users/exit">exit</a></div>





{/if}