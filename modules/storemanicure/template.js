function storemanicure_clientsChangeAccess(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function storemanicure_clientsDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function storemanicure_clientsDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





function storemanicure_mastersChangeAccess(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function storemanicure_mastersDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function storemanicure_mastersDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





function storemanicure_servicesChangePublic(link, data){
    if (data == 1) $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_on.png');
    else $(link).children('img').attr('src', DIR_TEMPLATE+'images/adminka/btn/btn_off.png');
}





function storemanicure_servicesDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function storemanicure_servicesDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





$(function(){
// Работа со страницами СМС
    if ($('#admContent .wwForm .countSMS span').size()) $('#admContent .wwForm .countSMS span').text(Math.ceil($('#admContent .wwForm input[name=sms_text_birth], #admContent .wwForm input[name=sms_text]').val().length / 70));
    if ($('#admContent .wwForm input[name=sms_text_birth], #admContent .wwForm input[name=sms_text]').size()) $('#admContent .wwForm input[name=sms_text_birth], #admContent .wwForm input[name=sms_text]').keyup(function(){ $(this).next('div').children('span').text(Math.ceil($(this).val().length / 70)); });



// Страница начисления зарплат (salary)
    $('#admContent .wwForm select[name=worker]').change(function(){
        $.get(DIR_MODULES+'storemanicure/ajax.php?action=financeGetShould&id='+$(this).val(), '', function(data){
            $('#admContent .wwForm select[name=worker]').parent().next().children('strong').text(data);
            $('#admContent .wwForm select[name=worker]').next('input[name=should]').val(data);
        }, 'html');
    });



// Форма прихода
    $('#admContent .prihodForm .btnAdd').click(function(){
        var html = $('#admContent .admEdit .serviceItem:first').html();
        $('#admContent .prihodForm .btnAdd').parent().before('<div class="row serviceItem" style="display: none;">'+html+'</div>');
        $('#admContent .prihodForm .serviceItem:last').fadeIn(300);
        return false;
    });
    $('#admContent .prihodForm').on('click', '.serviceItem a.btnDel', '', function(){
        if (confirm(WWcms.getTitle('js_ask_delItem'))){
            $(this).parent().fadeOut(300, function(){ $(this).remove(); });
        }
        return false;
    });
    $('#admContent .prihodForm input.sum').next('strong').each(function(){
        $(this).text($(this).prev('input.sum').val() * 1 - Math.ceil($(this).prev('input.sum').val() * $('#admContent .wwForm select[name=items_cid]').parent().next().children('strong').text() / 100))        
    });
    var sum = 0;
    $('#admContent .prihodForm input.sum').next('strong').each(function(){ sum += $(this).text() * 1; });
    $('#admContent .wwForm div.total span').text(sum);
    $('#admContent .prihodForm select[name=items_cid]').change(function(){
        $.get(DIR_MODULES+'storemanicure/ajax.php?action=clientsGetDiscount&id='+$(this).val(), '', function(data){
            $('#admContent .wwForm select[name=items_cid]').parent().next().children('strong').text(data);
            $('#admContent .wwForm input.sum').val('0.00');
            $('#admContent .wwForm input.sum').next('strong').text('0');
            $('#admContent .wwForm div.total span').text('0');
        }, 'html');
    });
    $('#admContent .prihodForm').on('keyup', 'input.sum', '', function(){
        $(this).next('strong').text($(this).val() * 1 - Math.ceil($(this).val() * $('#admContent .wwForm select[name=items_cid]').parent().next().children('strong').text() / 100));
        var sum = 0;
        $('#admContent .prihodForm input.sum').next('strong').each(function(){ sum += $(this).text() * 1; });
        $('#admContent .wwForm div.total span').text(sum);
    });



// Таблица статистики
    $('#admContent .admList .elements select').change(function(){ location.href = $(this).parent().children('input[name=href]').val()+'&'+$(this).attr('name')+'='+$(this).val(); });



// Таблица плана работ
    $('#tablePlan .day tr').hover(
        function(){ $(this).addClass('active'); },
        function(){ $(this).removeClass('active'); }
    );
    $('#tablePlan .day .mark').not('.checked').click(function(){
        $('#tablePlan form .row:eq(0) .right span').text($(this).parent().children('td:last').children('.master').text());
        $('#tablePlan form .row:eq(0) .right input[name=mid]').val($(this).children('input[name=mid]').val());
        $('#tablePlan form .row:eq(1) .right span').text($(this).children('input[name=date]').val());
        $('#tablePlan form .row:eq(1) .right input[name=timeFrom]').val($(this).children('input[name=date]').val());
        $('#tablePlan form').fadeIn(300);
    });
    $('#tablePlan .dateChange input[name=date]').change(function(){ location.href = '?route=storemanicure/admManagePlan&date='+$(this).val(); });
});