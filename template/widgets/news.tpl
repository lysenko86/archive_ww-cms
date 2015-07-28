{section name=i loop=$TPL.news}<div class="item">
    <div class="image">
        <img src="{$TPL.news[i].items_photo.250}" alt=""/>
        <div class="date">
            <div class="day">{substr($TPL.news[i].items_date, 0, 2)}</div>
            <div class="month">{$jsTitles.{'js_datePicker_monthNames_'|cat:substr($TPL.news[i].items_date, 3, 2) * 1}}</div>
            <div class="year">{substr($TPL.news[i].items_date, 6, 4)}</div>
        </div>
    </div>
    <div class="text">
        <div class="title"><a href="?route=news/getItem&id={$TPL.news[i].items_id}">{$TPL.news[i].descr_title}</a></div>
        <div class="descr">{$TPL.news[i].descr_content}</div>
    </div>
    <div class="separate"></div>
</div>{/section}