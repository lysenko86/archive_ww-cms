{if count($TPL.pager) > 1}<div class="wwPager">
    <a class="button" href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && $k != 'GVpage'}&{$k}={$v}{/if}{/foreach}&GVpage={$TPL.GETvars.GVpage - 1}"><img src="{$dirs.template}images/adminka/pager/page_left.png" alt=""/></a>
    &nbsp;&nbsp;&nbsp;
    {section name=i loop=$TPL.pager}<a class="page{if ($TPL.pager[i] == $TPL.GETvars.GVpage) || (empty($TPL.GETvars.GVpage) && $smarty.section.i.first)} active{/if}" href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && $k != 'GVpage'}&{$k}={$v}{/if}{/foreach}&GVpage={$TPL.pager[i]}">{$TPL.pager[i]}</a>{/section}
    &nbsp;&nbsp;&nbsp;
    <a class="button" href="{$TPL.href}{foreach name=i from=$TPL.GETvars key=k item=v}{if !empty($v) && $k != 'GVpage'}&{$k}={$v}{/if}{/foreach}&GVpage={$TPL.GETvars.GVpage + 1}"><img src="{$dirs.template}images/adminka/pager/page_right.png" alt=""/></a>
</div>{/if}