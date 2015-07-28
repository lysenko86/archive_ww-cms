<div id="leftmenu">{foreach name=i from=$admMenu key=k item=v}
    <div class="item{if $v.opened} opened{/if}"><a href="{$k}">{$v.title}</a></div>
    <div class="subItems{if $v.opened} opened{/if}">
        {section name=ii loop=$v.items}<a href="{$v.items[ii].href}" class="subItem">{$v.items[ii].title}</a>{/section}
        <div class="sep"></div>
    </div>
{/foreach}</div>