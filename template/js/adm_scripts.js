$(function(){
    WWcms.wwFormActive();
    WWcms.wwTableActive();




// Анимация списков левого меню
    $('#leftmenu .item a').click(function(){
        var link = $(this);
        var name = $(this).attr('href');
        if (!$(link).parent().hasClass('opened')){ $.get(DIR_MODULES+'engine/ajax.php?action=leftMenuOpen&name='+name, {}, function(){
            $(link).parent().next('.subItems').slideDown(300, function(){
                $(link).parent().addClass('opened');
                $(link).parent().next('.subItems').addClass('opened');
            });
        }); }
        else{ $.get(DIR_MODULES+'engine/ajax.php?action=leftMenuClose&name='+name, {}, function(){
            $(link).parent().next('.subItems').slideUp(300, function(){
                $(link).parent().removeClass('opened');
                $(link).parent().next('.subItems').removeClass('opened');
            });
        }); }
        return false;
    });
});