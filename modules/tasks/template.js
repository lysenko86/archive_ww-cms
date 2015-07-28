function tasks_tasksChangePublic(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function tasks_tasksChangeHome(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function tasks_tasksDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function tasks_tasksDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





WWcms.bigImage('img.bigImage');