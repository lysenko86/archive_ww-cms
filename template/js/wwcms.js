function classWWcms(){
    this.MSG_ERROR    = 'error';
    this.MSG_INFO     = 'info';
    this.MSG_GOOD     = 'good';
    this.titles       = [];
    this.textCodeKeys = [8, 32, 46, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 59, 61, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 109, 110, 111, 173, 188, 190, 191, 192, 219, 220, 221, 222]
    this.getTitle     = function(key){ return this.titles[key]; }
    this.addTitle     = function(key, val){ this.titles[key] = val; }
    this.wwFormActive = function(){
        $('body').on('focus', 'form.wwForm input.text, form.wwForm textarea.text, form.wwForm select.text', function(){
            $(this).addClass('active');
            $(this).removeClass('error');
        });
        $('body').on('blur', 'form.wwForm input.text, form.wwForm textarea.text, form.wwForm select.text', function(){
            $(this).removeClass('active');
            $(this).removeClass('error');
        });
        $('form.wwForm a.submit').each(function(){
            var name = $(this).attr('class').substr(7);
            if (name.indexOf(' ') >= 0) name = name.substr(0, name.indexOf(' '));
            $(this).hover(
                function(){ $(this).addClass(name+'Hover'); },
                function(){ $(this).removeClass(name+'Hover'); }
            );
            $(this).mousedown(function(){ $(this).addClass(name+'Press'); });
            $(this).mouseup(function(){ $(this).removeClass(name+'Press'); });
            $(this).click(function(){
                $(this).closest('form.wwForm').submit();
                return false;
            });
        });
        var linkThis = this;
        $('form.wwForm').submit(function(){
            var checkReturn = true; 
            $(this).find('input[class*=required], select[class*=required]').each(function(){ if (!$(this).val()){
                checkReturn = false;
                $(this).addClass('error');
            } });
            $(this).find('textarea[class*=required]').each(function(){
                var content = $(this).next('div').hasClass('cke') ? CKEDITOR.instances[$(this).attr('name')].getData() : $(this).val();
                if (!content){
                    checkReturn = false;
                    $(this).addClass('error');
                    if ($(this).next('div').hasClass('cke')) $(this).next('div').css('border', '1px solid #FF0000');
                }
            });
            if (!checkReturn){
                linkThis.alert(500, 112, linkThis.getTitle('js_titles_error'), linkThis.getTitle('js_errors_fieldEmpty'));
                return false;
            }
            else return true;
        });
        if ($('form.wwForm').find('textarea.forCKeditor').size()){
            CKEDITOR.replace($('form.wwForm').find('textarea.forCKeditor').get(0));
            CKEDITOR.editorConfig = function(config){
                config.toolbar = 'custom';
                config.toolbar_custom = [
                    ['Source', 'Preview', 'PasteFromWord', 'Maximize', 'ShowBlocks'], ['Image', 'Flash', 'Table', 'HorizontalRule', 'SpecialChar', 'Spoiler'], ['Link', 'Unlink', 'Anchor'], ['NumberedList', 'BulletedList', 'Outdent', 'Indent'],
                    '/',
                    ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'], ['Font', 'FontSize', 'TextColor', 'BGColor'], ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                ];
                config.language                  = LANG == 'ua' ? 'uk' : LANG;
                config.height                    = 400;
                config.extraPlugins              = 'spoiler';
                config.resize_enabled            = false;
                config.enterMode                 = CKEDITOR.ENTER_BR;
                config.elementspath              = false;
                config.entities                  = true;
                config.filebrowserImageBrowseUrl = CKEDITOR.basePath+'plugins/kcfinder/browse.php';
                config.filebrowserImageUploadUrl = CKEDITOR.basePath+'plugins/kcfinder/upload.php';
                config.filebrowserWindowWidth    = 800;
                config.filebrowserWindowHeight   = 500;
                config.filebrowserWindowFeatures = 'location=no,menubar=no,toolbar=no,dependent=yes,minimizable=no,modal=yes,alwaysRaised=yes,resizable=no,scrollbars=no';
            }
        }
        if ($('form.wwForm').find('input.forDatepicker').size()){
            $.datepicker.regional[LANG] = {
                closeText:       linkThis.getTitle('js_datePicker_closeText'),
                prevText:        linkThis.getTitle('js_datePicker_prevText'),
                nextText:        linkThis.getTitle('js_datePicker_nextText'),
                currentText:     linkThis.getTitle('js_datePicker_currentText'),
                monthNames:      [
                    linkThis.getTitle('js_datePicker_monthNames_1'),
                    linkThis.getTitle('js_datePicker_monthNames_2'),
                    linkThis.getTitle('js_datePicker_monthNames_3'),
                    linkThis.getTitle('js_datePicker_monthNames_4'),
                    linkThis.getTitle('js_datePicker_monthNames_5'),
                    linkThis.getTitle('js_datePicker_monthNames_6'),
                    linkThis.getTitle('js_datePicker_monthNames_7'),
                    linkThis.getTitle('js_datePicker_monthNames_8'),
                    linkThis.getTitle('js_datePicker_monthNames_9'),
                    linkThis.getTitle('js_datePicker_monthNames_10'),
                    linkThis.getTitle('js_datePicker_monthNames_11'),
                    linkThis.getTitle('js_datePicker_monthNames_12')
                ],
                monthNamesShort: [
                    linkThis.getTitle('js_datePicker_monthNamesShort_1'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_2'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_3'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_4'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_5'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_6'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_7'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_8'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_9'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_10'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_11'),
                    linkThis.getTitle('js_datePicker_monthNamesShort_12')
                ],
                dayNames:        [
                    linkThis.getTitle('js_datePicker_dayNames_1'),
                    linkThis.getTitle('js_datePicker_dayNames_2'),
                    linkThis.getTitle('js_datePicker_dayNames_3'),
                    linkThis.getTitle('js_datePicker_dayNames_4'),
                    linkThis.getTitle('js_datePicker_dayNames_5'),
                    linkThis.getTitle('js_datePicker_dayNames_6'),
                    linkThis.getTitle('js_datePicker_dayNames_7')
                ],
                dayNamesShort:   [
                    linkThis.getTitle('js_datePicker_dayNamesShort_1'),
                    linkThis.getTitle('js_datePicker_dayNamesShort_2'),
                    linkThis.getTitle('js_datePicker_dayNamesShort_3'),
                    linkThis.getTitle('js_datePicker_dayNamesShort_4'),
                    linkThis.getTitle('js_datePicker_dayNamesShort_5'),
                    linkThis.getTitle('js_datePicker_dayNamesShort_6'),
                    linkThis.getTitle('js_datePicker_dayNamesShort_7')
                ],
                dayNamesMin:     [
                    linkThis.getTitle('js_datePicker_dayNamesMin_1'),
                    linkThis.getTitle('js_datePicker_dayNamesMin_2'),
                    linkThis.getTitle('js_datePicker_dayNamesMin_3'),
                    linkThis.getTitle('js_datePicker_dayNamesMin_4'),
                    linkThis.getTitle('js_datePicker_dayNamesMin_5'),
                    linkThis.getTitle('js_datePicker_dayNamesMin_6'),
                    linkThis.getTitle('js_datePicker_dayNamesMin_7')
                ],
                firstDay:        1,
                isRTL:           false,
                changeYear:      true,
                yearRange:       "-10:+10",
                dateFormat:      "dd.mm.yy"
            };
            $.datepicker.setDefaults($.datepicker.regional[LANG]); 
            $('form.wwForm').find('input.forDatepicker').datepicker(); 
        }
    }
    this.wwTableActive = function(){
        $('table.wwTable').on('mouseover', 'tr.odd, tr.even', function(){ $(this).addClass('active'); });
        $('table.wwTable').on('mouseout', 'tr.odd, tr.even', function(){ $(this).removeClass('active'); });
        var linkThis = this;
        $('table.wwTable').on('click', 'td.actions a.ajax', function(){
            var link   = $(this);
            var href   = $(this).attr('href');
            var module = href.substr(href.indexOf('=') + 1, href.indexOf('/') - href.indexOf('=') - 1);
            href       = href.substr(href.indexOf('/') + 1);
            var action = href.substr(href.indexOf('/') + 1);
            action     = action.substr(0, action.indexOf('/'));
            var href   = href.substr(href.indexOf('?') + 1);
            var before = true;
            if (typeof(window[module+'_'+action+'_before']) == "function") before = window[module+'_'+action+'_before'](link);
            if (before) $.get(DIR_MODULES+module+'/ajax.php?action='+action+'&'+href, {}, function(data){ if (typeof(window[module+'_'+action]) == "function") window[module+'_'+action](link, data); }, 'html');
            return false;
        });
        $('form.wwSearch').submit(function(){
            if (!$(this).find('input:first').val()){
                $(this).find('input:first').addClass('error');
                linkThis.alert(500, 112, linkThis.getTitle('js_titles_error'), linkThis.getTitle('js_errors_fieldEmpty'));
                return false;
            }
            else return true;
        });
        $('form.wwDates').submit(function(){
            if (!$(this).find('input[name=GVdateFrom]').val() && !$(this).find('input[name=GVdateTo]').val()){
                $(this).find('input[name=GVdateFrom]').addClass('error');
                $(this).find('input[name=GVdateTo]').addClass('error');
                linkThis.alert(500, 112, linkThis.getTitle('js_titles_error'), linkThis.getTitle('js_errors_fieldEmpty'));
                return false;
            }
            else return true;
        });
        $('form.wwFilter select[name=GVfilter]').change(function(){ location.href = $(this).siblings('input[name=href]').val()+'&GVfilter='+$(this).val(); });
        $('table.wwTable').on('click', 'td.edit', function(){
            var td     = $(this).html();
            var params = $(this).children('input[name=params]').val();
            var value  = $(this).text();
            $(this).attr('class', 'editing');
            $(this).html('<input class="editValue" type="text" name="value" value="'+value+'">');
            $(this).children('input').focus();
            $('table.wwTable td.editing').on('keyup', 'input.editValue', function(event){
                if ($.trim($(this).val()).length > 0 && event.keyCode == '13'){
                    var module = location.href.substr(location.href.indexOf('?route=') + 7);
                    module     = module.substr(0, module.indexOf('/'));
                    var link   = $(this);
                    var value  = $.trim($(this).val());
                    $.get(DIR_MODULES+module+'/ajax.php'+params+'&value='+value, {}, function(){
                        $(link).parent().attr('class', 'edit');
                        $(link).parent().html('<input type="hidden" name="params" value="'+params+'"/>'+value);
                    }, 'html');
                    event.stopPropagation();
                }
                else if (event.keyCode == '27'){
                    $(this).parent().attr('class', 'edit');
                    $(this).parent().html(td);
                }
            });
        });
    }
    this.alert = function(x, y, title, content, type, callback){
        if (type == undefined) type = this.MSG_ERROR;
        $('body').prepend('<div id="wwAlert"><div class="window"></div></div>');
        if ($('html').height() < $(window).height()) $('#wwAlert').height($(window).height());
        else $('#wwAlert').height($('html').height());
        $('html').css('overflow', 'hidden');
        $('#wwAlert').children('.window').width(x);
        $('#wwAlert').children('.window').height(y);
        if ($('#wwAlert').children('.window').height() > $(window).height()) $('#wwAlert').children('.window').height($(window).height());
        var height1 = $(window).height() / 2;
        var height2 = $('#wwAlert').children('.window').height() / 2;
        var paddingTop = Math.round(height1 - height2);
        if (paddingTop < 0){
            paddingTop = 0;
            $('#wwAlert').css('overflow', 'auto');
        }
        $('#wwAlert').css('padding-top', $(window).scrollTop()+paddingTop+'px');
        $('#wwAlert').children('.window').html('<div class="wndTitle '+type+'"><div class="wndTitleL">'+title+'</div><div class="wndTitleR" onclick="WWcms.alertClose('+callback+');"><img src="'+DIR_TEMPLATE+'images/adminka/btn/btn_close.png" alt=""></div><div style="clear: both"></div></div>');
        $('#wwAlert').children('.window').children('.wndTitle').after('<div class="wndContent">'+content+'</div>');
        $('#wwAlert').children('.window').children('.wndContent').after('<div class="wndButtons" style="width: 70px"><a href="#" class="button ok" onclick="return WWcms.alertClose('+callback+');">'+this.getTitle('js_buttons_ok')+'</a><div class="separate"></div></div>');
    }
    this.alertClose = function(callback){
        $('#wwAlert').remove();
        $('html').css('overflow', 'auto');
        if (callback && typeof(callback) === "function") callback();
        return false;
    }
    this.floatNumberFormat = function(num){ return Math.round(num*100)/100; }
    this.pxToNumber = function(px){ return px.substr(0, px.length - 2) * 1; }
    this.wndOpen = function(x, y, title, content, callback){
        $('body').prepend('<div id="PopUp" style="display: none;"><div class="window"></div></div>');
        if ($('html').height() < $(window).height()) $('#PopUp').height($(window).height());
        else $('#PopUp').height($('html').height());
        $('html').css('overflow', 'hidden');
        $('#PopUp').children('.window').width(x);
        $('#PopUp').children('.window').height(y);
        if ($('#PopUp').children('.window').height() > $(window).height()) $('#PopUp').children('.window').height($(window).height());
        var height1 = $(window).height() / 2;
        var height2 = $('#PopUp').children('.window').height() / 2;
        var paddingTop = Math.round(height1 - height2);
        if (paddingTop < 0){
            paddingTop = 0;
            $('#PopUp').css('overflow', 'auto');
        }
        $('#PopUp').css('padding-top', $(window).scrollTop()+paddingTop+'px');
        $('#PopUp').children('.window').html('<div class="wndTitle"><div class="wndTitleL">'+title+'</div><div class="wndTitleR" onclick="WWcms.wndClose('+callback+');">X</div><div style="clear: both"></div></div>');
        $('#PopUp').children('.window').children('.wndTitle').after('<div class="wndContent">'+content+'</div>');
        $('#PopUp').fadeIn(500);
    }
    this.wndClose = function(callback){
        $('#PopUp').fadeOut(500, function(){
            $('#PopUp').remove();
            $('html').css('overflow', 'auto');
            if (callback && typeof(callback) === "function") callback();
        });
    }
    this.wndChangeSize = function(x, y){
        var linkThis = this;
        y = y + $('#PopUp .wndTitle').height() + linkThis.pxToNumber($('#PopUp .wndTitle').css('paddingTop')) + linkThis.pxToNumber($('#PopUp .wndTitle').css('paddingBottom'));
        $('#PopUp').children('.window').width(x);
        $('#PopUp').children('.window').height(y);
        if ($('#PopUp').children('.window').height() > $(window).height()) $('#PopUp').children('.window').height($(window).height());
        var height1 = $(window).height() / 2;
        var height2 = $('#PopUp').children('.window').height() / 2;
        var paddingTop = Math.round(height1 - height2);
        if (paddingTop < 0){
            paddingTop = 0;
            $('#PopUp').css('overflow', 'auto');
        }
        $('#PopUp').css('padding-top', $(window).scrollTop()+paddingTop+'px');
    }
    this.genProportionWH = function(inX, inY, outX, outY){
        if (inX > outX){
            inY = Math.round((inY * outX) / inX);
            inX = outX;
        }
        if (inY > outY){
            inX = Math.round((inX * outY) / inY);
            inY = outY;
        }
        return [inX, inY];
    }
    this.wndOpenImages = function(title, itemsLink, item){
        var linkThis    = this;
        var minWindowX  = 400;
        var minWindowY  = 250;
        var index       = $(item).index();
        var imgSrc      = $($(itemsLink).get(index-1)).children('.image').children('img').attr('alt');
        var maxItems    = $(itemsLink).size();
        linkThis.wndOpen(minWindowX, minWindowY, title + (title ? ' ' : '') + (maxItems > 1 ? '('+index+'/'+maxItems+')' : ''), '');
        var titleHeight = $('#PopUp .wndTitle').height() + linkThis.pxToNumber($('#PopUp .wndTitle').css('paddingTop')) + linkThis.pxToNumber($('#PopUp .wndTitle').css('paddingBottom'));
        $('#PopUp .wndContent').html('<div class="loading" style="height: '+(minWindowY-titleHeight)+'px;"></div>');
        $('#PopUp').prepend('<div style="display: none;"><img src="'+imgSrc+'"/></div>');
        $('#PopUp div:first img').load(function(){
            var imgX    = $('#PopUp div:first').width();
            var imgY    = $('#PopUp div:first').height();
            var wndX    = $(window).width();
            var wndY    = $(window).height() - titleHeight;
            var imgXY   = linkThis.genProportionWH(imgX, imgY, wndX, wndY);
            imgX        = imgXY[0];
            imgY        = imgXY[1];
            var windowX = imgX;
            var windowY = imgY;
            if (windowX < minWindowX) windowX = minWindowX;
            if (windowY < minWindowY) windowY = minWindowY;
            $('#PopUp div:first, #PopUp div.loading').remove();
            linkThis.wndChangeSize(windowX, windowY);
            $('#PopUp .wndContent').html('<img src="'+imgSrc+'" alt="" width="'+imgX+'" height="'+imgY+'" style="display: none;"/>');
            $('#PopUp .wndContent img').fadeIn(500);
            if (maxItems > 1){
                $('#PopUp .window').append('<div class="btnLeft"></div><div class="btnRight"></div>');
                $('#PopUp .btnLeft').css('marginLeft', 10+'px');
                $('#PopUp .btnRight').css('marginLeft', $('#PopUp .window').width() - 60 + 'px');
                $('#PopUp .btnLeft, #PopUp .btnRight').css('top', Math.round($(window).height() / 2 - 25 + $(window).scrollTop()) + 'px');
                $('#PopUp .btnLeft, #PopUp .btnRight').click(function(){
                    index = $(this).hasClass('btnLeft') ? index - 1 : index + 1;
                    index = index < 1 ? maxItems : (index > maxItems ? 1 : index);
                    imgSrc = $($(itemsLink).get(index-1)).children('.image').children('img').attr('alt');
                    title  = $($(itemsLink).get(index-1)).children('.title').text();
                    $('#PopUp .wndContent img').fadeOut(200, function(){
                        $('#PopUp .wndContent').prepend('<div class="loading" style="height: '+($('#PopUp .window').height()-titleHeight)+'px;"></div>');
                        $(this).removeAttr('width');
                        $(this).removeAttr('height');
                        $(this).attr('src', imgSrc);
                        $(this).load(function(){
                            imgX  = $(this).width();
                            imgY  = $(this).height();
                            wndX  = $(window).width();
                            wndY  = $(window).height() - titleHeight;
                            imgXY = linkThis.genProportionWH(imgX, imgY, wndX, wndY);
                            imgX  = imgXY[0];
                            imgY  = imgXY[1];
                            windowX = imgX;
                            windowY = imgY;
                            if (windowX < minWindowX) windowX = minWindowX;
                            if (windowY < minWindowY) windowY = minWindowY;
                            $('#PopUp div.loading').remove();
                            linkThis.wndChangeSize(windowX, windowY);
                            $('#PopUp .btnRight').css('marginLeft', $('#PopUp .window').width() - 60 + 'px');
                            $(this).attr('width', imgX);
                            $(this).attr('height', imgY);
                            $(this).fadeIn(500);
                            $('#PopUp .wndTitle .wndTitleL').html(title + (title ? ' ' : '') + (maxItems > 1 ? '('+index+'/'+maxItems+')' : ''));
                        });
                    });
                });
            }
        });
    }
    this.slider = function(item, change, delay){
        $(item).css({'position':'absolute', 'zIndex': '1'});
        $(item).parent().css('overflow', 'hidden');
        var countSlides = $(item).size();
        var index       = 0;
        $(item+':eq(0)').css('z-index', '20');
        if (countSlides > 1) setInterval(function(){
            var linkOff = $(item+':eq('+index+')');
            if (index+1 >= countSlides) index = 0;
            else index++;
            var linkOn  = $(item+':eq('+index+')');
            $(linkOn).css('z-index', '15');
            $(linkOff).fadeOut(change, function(){
                $(linkOn).css('z-index', '20');
                $(linkOff).css('z-index', '10');
                $(linkOff).css('display', 'block');
            });
        }, delay);
    }
    this.bigImage = function(item){
        $('body').on('click', item, function(){
            WWcms.wndOpenImages('', $(this).parent().parent(), $(this));
        });
    }
}
var WWcms = new classWWcms();