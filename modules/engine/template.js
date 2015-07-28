function engine_adminsChangeAccess(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function engine_adminsDelItem_before(){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function engine_adminsDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); };





function engine_modulesChangeActive(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function engine_modulesDelItem_before(){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function engine_modulesDelItem(link){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





function engine_langsDelItem_before(){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}





function engine_titlesDelItem_before(){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function engine_titlesDelItem(link){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }