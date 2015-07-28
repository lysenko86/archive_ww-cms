 $(function(){
    $('input[name=delInstall]').change(function(){
        if ($(this).prop("checked")) $('.go.big').attr('href', '/install/index.php?step=4&stepDo=1&delInstall=1');
        else $('.go.big').attr('href', '/install/index.php?step=4&stepDo=1&delInstall=0');
    });
 });