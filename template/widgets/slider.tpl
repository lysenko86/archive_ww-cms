<div class="slider">{section name=i loop=$TPL.slides}<div class="item">
    {if $TPL.slides[i].items_link}<a href="{$TPL.slides[i].link}">{/if}<img src="{$TPL.slides[i].photo['680']}" alt=""/>{if $TPL.slides[i].items_link}</a>{/if}
</div>{/section}</div>