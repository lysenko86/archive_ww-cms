{if count($langs) > 1}<div id="contentLangs">{foreach name=i from=$langs key=k item=v}
    <a href="{$TPL.href}&lang={$k}{$TPL.GETvarsStr}" {if $k == $TPL.lang}class="active"{/if} title="{$v}">{$k}</a>
{/foreach}</div>{/if}