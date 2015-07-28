function users_usersChangeAccess(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function users_usersDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function users_usersDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





$(function(){
    $('#content .auth .remindPass a').click(function(){
        $(this).addClass('active');
        $('#content .auth .remindDiv').slideDown(300);
        return false;
    });
    $('#content .auth .remindDiv a').click(function(){
        var val = $.trim($('#content .auth .remindDiv input').val());
        if (val) location.href = $(this).attr('href')+'&email='+$('#content .auth .remindDiv input').val();
        else WWcms.alert(500, 112, WWcms.getTitle('js_titles_error'), WWcms.getTitle('js_errors_fieldEmpty'));
        return false;
    });
});