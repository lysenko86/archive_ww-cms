function photos_catsChangePublic(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function photos_catsDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}






function photos_itemsChangePublic(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function photos_itemsDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function photos_itemsDelItem(link){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





function photos_itemsMoveItem(link, data){
    if ((data == 'up' && $(link).parent().parent().prev().children('td').size()) || (data == 'down' && $(link).parent().parent().next().children('td').size())){
        var className = $(link).parent().parent().attr('class').replace(' active', '');
        var item = '<tr class="'+className+'">'+$(link).parent().parent().html()+'</tr>';
        switch (data){
            case 'down': $(link).parent().parent().next().after(item); break;
            case 'up':  $(link).parent().parent().prev().before(item); break;
        }
        $(link).parent().parent().remove();
    }
}