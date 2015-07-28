{if count($breadCrumbs) > 1}<div id="breadCrumbs">{section name=i loop=$breadCrumbs}
    {if $smarty.section.i.last}
        <span>{$breadCrumbs[i].title}</span>
    {else}
        <a href="{$breadCrumbs[i].link}">{$breadCrumbs[i].title}</a>&nbsp;<img src="{$dirs.template}images/arrow_bc.png" alt=""/>
    {/if}
{/section}</div>{/if}