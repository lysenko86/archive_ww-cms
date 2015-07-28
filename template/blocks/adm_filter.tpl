{if count($items) > 0}<form name="fContent" method="post" action="" class="wwForm wwFilter"><div class="row left">
    {if $type == 'select'}
        <input type="hidden" name="href" value="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && $k != 'GVfilter'}&{$k}={$v}{/if}{/foreach}"/>
        {$title}<select name="GVfilter" class="text">
            {if empty($default)}<option value=""{if empty($TPL.GETvars.GVfilter) || $TPL.GETvars.GVfilter == ''} selected="selected"{/if}>{$titles.titles_all}</option>{/if}
            {foreach name=i from=$items key=k item=v}<option value="{$k}"{if (empty($TPL.GETvars.GVfilter) && !empty($default) && $default == $k) || $TPL.GETvars.GVfilter == $k} selected="selected"{/if}>{$v}</option>{/foreach}
        </select>
    {elseif $type == 'links'}
        {$title} &nbsp;{if empty($default)} <a href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && $k != 'GVfilter'}&{$k}={$v}{/if}{/foreach}&GVfilter="{if empty($TPL.GETvars.GVfilter) || $TPL.GETvars.GVfilter == ''} class="active"{/if}>{$titles.titles_all}</a> &nbsp;{/if}
        {foreach name=i from=$items key=k item=v}<a href="{$TPL.href}{foreach name=ii from=$TPL.GETvars key=kk item=vv}{if !empty($vv) && $kk != 'GVfilter'}&{$kk}={$vv}{/if}{/foreach}&GVfilter={$k}"{if (empty($TPL.GETvars.GVfilter) && !empty($default) && $default == $k) || $TPL.GETvars.GVfilter == $k} class="active"{/if}>{$v}</a> &nbsp; {/foreach}
    {/if}
</div></form>{/if}