{if count($langs) > 1}<div id="langs">{foreach name=i from=$langs key=k item=v}
    <a href="?route=engine/setLang&lang={$k}" title="{$v}"><img src="{$dirs.template}images/langs/lang_{$k}.png" alt=""/></a>{if $lang == $k}<img src="{$dirs.template}images/langs/lang_arrow.png" alt="" class="selector"/>{/if}
{/foreach}</div>{/if}