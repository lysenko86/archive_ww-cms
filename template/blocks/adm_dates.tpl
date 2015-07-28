<form class="wwForm wwDates" name="fDates" method="post" action="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVdateFrom', 'GVdateTo'))}&{$k}={$v}{/if}{/foreach}">
    <div class="row">{$titles.form_dateFrom}<input class="text forDatepicker" type="text" name="GVdateFrom" value="{$TPL.GETvars.GVdateFrom}"/></div>
    <div class="row">{$titles.form_dateTo}<input class="text forDatepicker" type="text" name="GVdateTo" value="{$TPL.GETvars.GVdateTo}"/></div>
    <a href="#" class="submit btnSearch">{$titles.buttons_search}</a>
<div class="separate"></div></form>