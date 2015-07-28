function comments_commentsChangePublic(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function comments_commentsDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function comments_commentsDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }