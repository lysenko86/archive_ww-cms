<div class="comments">
    <div class="title"><span>{$titles.titles_comments}</span></div>
    <div class="list">{section name=i loop=$TPL.comments}<div class="item">
        <div class="fio">{$TPL.comments[i].items_date}, {$TPL.comments[i].items_fio}</div>
        <div class="comment">{$TPL.comments[i].items_comment}</div>
    </div>{/section}</div class="list">
    <form name="comment" method="post" action="" class="wwForm">
        <div class="row">
            <div class="left">{$titles.form_fio}</div>
            <div class="right"><input type="text" class="text required" name="fio" value="{$TPL.fio}"/></div>
        </div>
        <div class="row"><div class="left">{$titles.form_comment}</div></div>
        <div class="row"><textarea class="text required" name="comment">{$TPL.comment}</textarea></div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit">{$titles.buttons_send}</a></div>
    </form>
</div>