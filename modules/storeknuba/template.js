function storeknuba_registryDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function storeknuba_registryDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





function storeknuba_productDelItem_before(link){
    if (confirm(WWcms.getTitle('js_ask_delItem'))) return true;
    else return false;
}
function storeknuba_productDelItem(link, data){ $(link).parent().parent().fadeOut(300, function(){ $(link).parent().parent().remove(); }); }





$(function(){
// Набивание заявки (табличка)
    $('#content .bidAdd .wwTable tr input.auto').autocomplete({
        source: DIR_MODULES+'storeknuba/ajax.php?action=getRegistryAutocomplete',
        select: function(event, ui){
            $(this).siblings('input[type=hidden]').val(ui.item.value);
            ui.item.value = ui.item.label;
        }
    });
    $('#content .bidAdd .btnAddElement').click(function(){
        var count = $('#content .bidAdd .wwTable tr').size();
        var elem  = '<tr class="'+(count % 2 > 0 ? 'odd' : 'even')+'" style="display: none;"><td><input type="text" class="text auto" name="titles[]" value="" style="width: 100%;"/><input type="hidden" name="IDs[]" value=""></td><td><input type="text" class="text" name="counts[]" value="" style="width: 70px;"/></td><td><a href="#" class="btnDel" title="'+WWcms.getTitle('js_buttons_delete')+'"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_del.png" alt=""/></a></td></tr>';
        $('#content .bidAdd .wwTable tbody').append(elem);
        $('#content .bidAdd .wwTable tr:last input.auto').autocomplete({
            source: DIR_MODULES+'storeknuba/ajax.php?action=getRegistryAutocomplete',
            select: function(event, ui){
                $(this).siblings('input[type=hidden]').val(ui.item.value);
                ui.item.value = ui.item.label;
            }
        });
        $('#content .bidAdd .wwTable tbody tr:last').fadeIn(300);
        return false;
    });
    $('#content .bidAdd .wwTable').on('click', '.btnDel', function(){
        $(this).parent().parent().fadeOut(300, function(){ $(this).remove(); });
        return false;
    });





// Раскрытие заявки, кнопки, редактирование...
    $('#content .bidsList .wwTable tr.expand, #admContent .bidsList .wwTable tr.expand').click(function(){
        var bidID     = $(this).children('td:first').text();
        var bidStatus = $(this).find('input[name=status]').val();
        $(this).parent().find('td.innerTable').parent().fadeOut(300, function(){ $(this).remove(); });
        var link = $(this);
        $.get(DIR_MODULES+'storeknuba/ajax.php?action=getBidDetails&id='+bidID, '', function(data){
            var arr = $.parseJSON(data);
            var header = footer = tHead = tBody = btnPrint = '';
            if (bidStatus == 'created') btnPrint = '<a href="?route=storeknuba/printer&act=created&id='+bidID+'" class="btnPrint" title="'+WWcms.getTitle('js_buttons_print')+'" style="position: relative; top: -2px; left: -3px;" target="_blank"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_print.png" alt=""/></a>';
            else if (bidStatus == 'confirm') btnPrint = '<a href="?route=storeknuba/printer&act=confirm&id='+bidID+'" class="btnPrint" title="'+WWcms.getTitle('js_buttons_print')+'" style="position: relative; top: -2px; left: -3px;" target="_blank"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_print.png" alt=""/></a>';
            else if (bidStatus == 'need') btnPrint = '<a href="?route=storeknuba/printer&act=need&id='+bidID+'" class="btnPrint" title="'+WWcms.getTitle('js_buttons_print')+'" style="position: relative; top: -2px; left: -3px;" target="_blank"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_print.png" alt=""/></a>';
            header += '<div class="header"><div class="msg"></div>'+btnPrint+'<a href="#" class="btnClose" title="'+WWcms.getTitle('js_buttons_close')+'"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_del.png" alt=""/></a></div>';
            tHead  += '<th style="width: 40px;">'+WWcms.getTitle('js_table_id')+'</th>';
            tHead  += '<th style="width: auto;">'+WWcms.getTitle('js_table_title')+'</th>';
            tHead  += '<th style="width: 255px;">'+WWcms.getTitle('js_table_product')+'</th>';
            tHead  += '<th style="width: 80px;">'+WWcms.getTitle('js_table_count')+'</th>';
            if (ADMINKA || (USER.type == 'supply' || USER.type == 'prorektor')) tHead  += '<th style="width: 80px;">'+WWcms.getTitle('js_table_isCount')+'</th>';
            if (ADMINKA || (USER.type == 'supply' || USER.type == 'prorektor')) tHead  += '<th style="width: 60px;">'+WWcms.getTitle('js_table_allow')+'</th>';
            for (i=0; i<arr.length; i++) if ((!ADMINKA && USER.type == 'supply' && bidStatus == 'confirm' && arr[i].allow > 0) || ADMINKA || USER.type != 'supply' || bidStatus != 'confirm'){
                tBody += '<tr class="'+(i % 2 > 0 ? 'odd' : 'even')+'">';
                tBody += '<td>'+arr[i].id+'</td>';
                tBody += '<td>'+arr[i].title+'</td>';
                tBody += '<td>';
                if (!ADMINKA && USER.type == 'supply' && bidStatus == 'confirm') tBody += '<div><input type="text" class="text auto" name="title" value="" style="width: 170px; margin-right: 3px;"/><input type="hidden" name="pid" value="0"><input type="text" class="text" name="count" value="'+arr[i].count+'" style="width: 47px;"/><a href="#" class="btnAddRIDproduct"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_add.png" alt="" style="position: relative; left: 2px; top: 2px;"/></a></div>';
                else for (ii=0; ii<arr[i].products.length; ii++) tBody += arr[i].products[ii].title+' = '+arr[i].products[ii].count+'<br/>';
                tBody += '</td>';
                tBody += '<td>'+arr[i].count+'</td>';
                if (ADMINKA || (USER.type == 'supply' || USER.type == 'prorektor')) tBody += '<td>'+arr[i].totalCount+'</td>';
                if (ADMINKA || (USER.type == 'supply' || USER.type == 'prorektor')) tBody += '<td>'+(!ADMINKA && USER.type == 'prorektor' && bidStatus == 'created' ? '<input type="text" class="text" name=allow['+arr[i].id+'] value="'+arr[i].count+'" style="width: 47px;"/>' : arr[i].allow)+'</td>';
                tBody += '</tr>';
            }
            footer += '<div class="footer">';
            if (!ADMINKA && USER.type == 'prorektor' && bidStatus == 'created') footer += '<a href="#" class="button btnConfirm">'+WWcms.getTitle('js_buttons_confirm')+'</a>';
            else if (!ADMINKA && USER.type == 'supply' && bidStatus == 'confirm') footer += '<a href="#" class="button btnNeed">'+WWcms.getTitle('js_buttons_toConfirm')+'</a>';
            else if (!ADMINKA && USER.type == 'prorektor' && bidStatus == 'need') footer += '<a href="#" class="button btnDone">'+WWcms.getTitle('js_buttons_transfer')+'</a>';
            footer += '</div>';
            var colspan = !ADMINKA && USER.type == 'supply' && bidStatus == 'confirm' ? 6 : 5;
            $(link).after('<tr><td colspan="'+colspan+'" class="innerTable">'+header+'<table class="wwTable"><tbody><tr>'+tHead+'</tr>'+tBody+'</tbody></table>'+footer+'</td></tr>');
            $(link).parent().find('td.innerTable').fadeIn(300);
            $('#content .bidsList .wwTable td.innerTable input.auto').autocomplete({
                source: DIR_MODULES+'storeknuba/ajax.php?action=getProductsAutocomplete',
                select: function(event, ui){
                    $(this).siblings('input[name=pid]').val(ui.item.value);
                    ui.item.value = ui.item.label;
                }
            });
            $('#content .bidsList .wwTable td.innerTable').on('blur', 'input.auto', function(){
                var link = $(this);
                $.get(DIR_MODULES+'storeknuba/ajax.php?action=getProduct&id='+$(this).siblings('input[name=pid]').val(), '', function(data){ $(link).val(data); });
            });
        }, 'html');
    });
    $('#content .bidsList .wwTable, #admContent .bidsList .wwTable').on('click', 'td.innerTable .btnClose', function(){
        $(this).parent().parent().parent().fadeOut(300, function(){ $(this).remove(); });
        return false;
    });
    $('#content .bidsList .wwTable').on('click', 'td.innerTable .btnAddRIDproduct', function(){
        $(this).parent().parent().append('<div><input type="text" class="text auto" name="title" value="" style="width: 170px; margin-right: 3px;"/><input type="hidden" name="pid" value="0"><input type="text" class="text" name="count" value="" style="width: 47px;"/><a href="#" class="btnDelRIDproduct"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_del.png" alt="" style="position: relative; left: 2px; top: 2px;"/></a></div>');
        $('#content .bidsList .wwTable td.innerTable input.auto').autocomplete({
            source: DIR_MODULES+'storeknuba/ajax.php?action=getProductsAutocomplete',
            select: function(event, ui){
                $(this).siblings('input[name=pid]').val(ui.item.value);
                ui.item.value = ui.item.label;
            }
        });
        return false;
    });
    $('#content .bidsList .wwTable').on('click', 'td.innerTable .btnDelRIDproduct', function(){
        $(this).parent().remove();
        return false;
    });
    $('#content .bidsList .wwTable').on('click', 'td.innerTable .btnConfirm', function(){
        var allows = [];
        var error  = '';
        $(this).closest('td.innerTable').find('tr').not(':first').each(function(){
            var val = $(this).children('td:last').children('input').val().replace(',', '.') * 1;
            if (val == '' || isNaN(val)) error = WWcms.getTitle('js_errors_fieldEmpty');
            var arr = {
                'id'  : $(this).children('td:first').text(),
                'val' : val
            };
            allows.push(arr);
        });
        if (error) $(this).closest('td.innerTable').children('.header').children('.msg').fadeOut(300, function(){ $(this).html(error).addClass('error').fadeIn(300) });
        else $.post(DIR_MODULES+'storeknuba/ajax.php?action=setBidDetails', {allows: allows}, function(){
            $('#content .bidsList .wwTable td.innerTable').parent().fadeOut(300, function(){
                $(this).prev().fadeOut(300, function(){ $(this).remove(); });
                $(this).remove();
            });
        }, 'html');
        return false;
    });
    $('#content .bidsList .wwTable').on('click', 'td.innerTable .btnNeed', function(){
        var products = [];
        var error    = '';
        $(this).closest('td.innerTable').find('tr').not(':first').each(function(){
            var brid = $(this).children('td:eq(0)').text();
            $(this).children('td:eq(2)').children('div').each(function(){
                var pid   = $(this).children('input[name=pid]').val();
                var count = $(this).children('input[name=count]').val().replace(',', '.') * 1;
                if (pid == 0 || count == '' || count <= 0 || isNaN(count)) error = WWcms.getTitle('js_errors_fieldEmpty');
                var arr = {
                    'brid'  : brid*1,
                    'pid'   : pid*1,
                    'count' : count*1
                };
                products.push(arr);
            });
        });
//        if (error) $(this).closest('td.innerTable').children('.header').children('.msg').fadeOut(300, function(){ $(this).html(error).addClass('error').fadeIn(300) });
        if (!error || confirm(WWcms.getTitle('js_ask_confirm'))) /*$(this).closest('td.innerTable').children('.header').children('.msg').fadeOut(300, function(){ $(this).html(error).addClass('error').fadeIn(300) }); */
        /*else*/ $.post(DIR_MODULES+'storeknuba/ajax.php?action=setBidProducts', {products: products}, function(data){
            if (data == 'errorAllow') $('#content .bidsList .wwTable td.innerTable').children('.header').children('.msg').fadeOut(300, function(){ $(this).html(WWcms.getTitle('js_errors_countProductsAllow')).addClass('error').fadeIn(300) });
            else if (data == 'errorCount') $('#content .bidsList .wwTable td.innerTable').children('.header').children('.msg').fadeOut(300, function(){ $(this).html(WWcms.getTitle('js_errors_countProducts')).addClass('error').fadeIn(300) });
            else $('#content .bidsList .wwTable td.innerTable').parent().fadeOut(300, function(){
                $(this).prev().fadeOut(300, function(){ $(this).remove(); });
                $(this).remove();
                $('#main').prepend('<div id="message" style="display: none;"><div class="good">'+WWcms.getTitle('js_modStoreknuba_doneBidNeed')+'</div></div>').find('#message').fadeIn(300);
            });
        }, 'html');
        return false;
    });
    $('#content .bidsList .wwTable').on('click', 'td.innerTable .btnDone', function(){
        $.get(DIR_MODULES+'storeknuba/ajax.php?action=doneBid&id='+$(this).closest('td.innerTable').parent().prev().children('td:first').text(), '', function(){
            $('#content .bidsList .wwTable td.innerTable').parent().fadeOut(300, function(){
                $(this).prev().fadeOut(300, function(){ $(this).remove(); });
                $(this).remove();
                $('#main').prepend('<div id="message" style="display: none;"><div class="good">'+WWcms.getTitle('js_modStoreknuba_doneBid')+'</div></div>').find('#message').fadeIn(300);
            });
        }, 'html');
        return false;
    });





// Набивание закупки (табличка)
    $('#content .supplyAdd .wwTable tr input.auto').autocomplete({
        source: DIR_MODULES+'storeknuba/ajax.php?action=getRegistryAutocomplete',
        select: function(event, ui){
            $(this).siblings('input[type=hidden]').val(ui.item.value);
            ui.item.value = ui.item.label;
        }
    });
    $('#content .supplyAdd .btnAddElement').click(function(){
        var count = $('#content .supplyAdd .wwTable tr').size();
        var elem  = '<tr class="'+(count % 2 > 0 ? 'odd' : 'even')+'" style="display: none;"><td><input type="text" class="text auto" name="titles[]" value="" style="width: 100%;"/><input type="hidden" name="IDs[]" value=""></td><td><input type="text" class="text" name="counts[]" value="" style="width: 70px;"/></td><td><input type="text" class="text" name="prices[]" value="" style="width: 70px;"/></td><td><a href="#" class="btnDel" title="'+WWcms.getTitle('js_buttons_delete')+'"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_del.png" alt=""/></a></td></tr>';
        $('#content .supplyAdd .wwTable tbody').append(elem);
        $('#content .supplyAdd .wwTable tr:last input.auto').autocomplete({
            source: DIR_MODULES+'storeknuba/ajax.php?action=getRegistryAutocomplete',
            select: function(event, ui){
                $(this).siblings('input[type=hidden]').val(ui.item.value);
                ui.item.value = ui.item.label;
            },
        });
        $('#content .supplyAdd .wwTable tbody tr:last').fadeIn(300);
        return false;
    });
    $('#content .supplyAdd .wwTable').on('click', '.btnDel', function(){
        $(this).parent().parent().fadeOut(300, function(){ $(this).remove(); });
        return false;
    });
    $('#content .supplyAdd .wwTable').on('blur', 'input.auto', function(){
        var link = $(this);
        $.get(DIR_MODULES+'storeknuba/ajax.php?action=getRegistry&id='+$(this).siblings('input[type=hidden]').val(), '', function(data){ $(link).val(data); });
    });





// Раскрытие закупки, кнопки, редактирование...
    $('#content .suppliesList .wwTable tr.expand, #admContent .suppliesList .wwTable tr.expand').click(function(){
        var supplyID     = $(this).children('td:first').text();
        var supplyStatus = $(this).find('input[name=status]').val();
        $(this).parent().find('td.innerTable').parent().fadeOut(300, function(){ $(this).remove(); });
        var link = $(this);
        $.get(DIR_MODULES+'storeknuba/ajax.php?action=getSupplyDetails&id='+supplyID, '', function(data){
            var arr = $.parseJSON(data);
            var header = footer = tHead = tBody = '';
            if (supplyStatus == 'done') btnPrint = '<a href="?route=storeknuba/printer&act=supply&id='+supplyID+'" class="btnPrint" title="'+WWcms.getTitle('js_buttons_print')+'" style="position: relative; top: -2px; left: -3px;" target="_blank"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_print.png" alt=""/></a>';
            header += '<div class="header"><div class="msg"></div>'+btnPrint+'<a href="#" class="btnClose" title="'+WWcms.getTitle('js_buttons_close')+'"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_del.png" alt=""/></a></div>';
            tHead  += '<th style="width: 40px;">'+WWcms.getTitle('js_table_id')+'</th>';
            tHead  += '<th style="width: 170px;">'+WWcms.getTitle('js_table_code')+'</th>';
            tHead  += '<th style="width: auto;">'+WWcms.getTitle('js_table_title')+'</th>';
            tHead  += '<th style="width: 80px;">'+WWcms.getTitle('js_table_count')+'</th>';
            tHead  += '<th style="width: 60px;">'+WWcms.getTitle('js_table_price')+'</th>';
            for (i=0; i<arr.length; i++){
                tBody += '<tr class="'+(i % 2 > 0 ? 'odd' : 'even')+'">';
                tBody += '<td>'+arr[i].id+'</td>';
                tBody += '<td>';
                if (supplyStatus == 'done') tBody += arr[i].code;
                else if (ADMINKA && supplyStatus == 'created') tBody += '';
                else if (!ADMINKA && supplyStatus == 'created') tBody += '<input type="text" class="text" name="code" value="">';
                tBody += '</td>';
                tBody += '<td>'+arr[i].rTitle+'</td>';
                tBody += '<td>'+arr[i].count+'</td>';
                tBody += '<td>'+arr[i].price+'</td>';
                tBody += '</tr>';
            }
            if (!ADMINKA && supplyStatus == 'created') footer += '<div class="footer"><a href="#" class="button btnSupply">'+WWcms.getTitle('js_buttons_supply')+'</a></div>';
            $(link).after('<tr><td colspan="5" class="innerTable">'+header+'<table class="wwTable"><tbody><tr>'+tHead+'</tr>'+tBody+'</tbody></table>'+footer+'</td></tr>');
            $(link).parent().find('td.innerTable').fadeIn(300);
        }, 'html');
    });
    $('#content .suppliesList .wwTable, #admContent .suppliesList .wwTable').on('click', 'td.innerTable .btnClose', function(){
        $(this).parent().parent().parent().fadeOut(300, function(){ $(this).remove(); });
        return false;
    });
    $('#content .suppliesList .wwTable').on('click', 'td.innerTable .btnSupply', function(){
        var supply = [];
        var error  = '';
        $(this).closest('td.innerTable').find('tr').not(':first').each(function(){
            if ($(this).children('td:eq(1)').children('input').val() == '') error = WWcms.getTitle('js_errors_fieldEmpty');
            var arr = {
                'id'   : $(this).children('td:first').text(),
                'code' : $(this).children('td:eq(1)').children('input').val()
            };
            supply.push(arr);
        });
        if (error) $(this).closest('td.innerTable').children('.header').children('.msg').fadeOut(300, function(){ $(this).html(error).addClass('error').fadeIn(300) });
        else $.post(DIR_MODULES+'storeknuba/ajax.php?action=setSupplyDetails', {supply: supply}, function(data){
            if (data == 'error') $('#content .suppliesList .wwTable').find('td.innerTable').children('.header').children('.msg').fadeOut(300, function(){ $(this).html(WWcms.getTitle('js_errors_isCode')).addClass('error').fadeIn(300) });
            else $('#content .suppliesList .wwTable td.innerTable').parent().fadeOut(300, function(){
                $(this).prev().fadeOut(300, function(){ $(this).remove(); });
                $(this).remove();
                $('#main').prepend('<div id="message" style="display: none;"><div class="good">'+WWcms.getTitle('js_modStoreknuba_doneSupplyProducts')+'</div></div>').find('#message').fadeIn(300);
            });
        }, 'html');
        return false;
    });





// Списание товара
    $('#content .productsList .btnProductDel').click(function(){
        var link = $(this);
        var id   = $(link).attr('href');
        if (confirm(WWcms.getTitle('js_modStoreknuba_askDeleteProduct'))) $.get(DIR_MODULES+'storeknuba/ajax.php?action=deleteProduct&id='+id, '', function(){
            $(link).parent().parent().fadeOut(300);
        }, 'html');
        return false;
    });
});