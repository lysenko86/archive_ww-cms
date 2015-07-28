{if (count($TPL.sFields))}<form class="wwForm wwSearch" name="fSearch" method="post" action="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && !in_array($k, array('GVsearchField', 'GVsearchValue'))}&{$k}={$v}{/if}{/foreach}"><div class="row">
    <div class="input"><input class="text" type="text" name="GVsearchValue" value="{$TPL.GETvars.GVsearchValue}"/></div>
    <div class="select"><select class="text" name="GVsearchField">{foreach name=i from=$TPL.sFields key=k item=v}
        <option value="{$k}"{if $k == $TPL.GETvars.GVsearchField} selected="selected"{/if}>{$v}</option>
    {/foreach}</select></div>
    <div class="button"><a href="#" class="submit btnSearch">{$titles.buttons_search}</a></div>
</div><div class="separate"></div></form>{/if}