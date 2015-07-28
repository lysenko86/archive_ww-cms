function news_newsChangePublic(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function news_newsChangeHome(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function news_newsDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function news_newsDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }