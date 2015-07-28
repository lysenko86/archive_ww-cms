<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="generator" content="WWcms v1.0"/>
        <link href="{$dirs.template}images/icon.ico" type="image/x-icon" rel="icon"/>
        <link type="text/css" href="{$dirs.template}css/siteoff_styles.css" rel="stylesheet"/>
        <script type="text/javascript" src="{$dirs.includes}jquery-1.9.1/jquery-1.9.1.min.js"></script>
        <meta name="description" content="{$title}"/>
        <meta name="keywords" content="{$title}"/>
        <title>{$title}</title>
    </head>
    <body><div id="layout">
        {if $module == 'engine' && $action == 'siteoff'}<form class="formAuth" name="fContent" method="post" action="">
            <div class="row">
                <div class="left">{$titles.form_login}</div>
                <div class="right"><input type="text" name="login" value=""/></div>
            </div>
            <div class="row">
                <div class="left">{$titles.form_password}</div>
                <div class="right"><input type="password" name="password" value=""/></div>
            </div>
            <div class="row"><input type="submit" value="{$titles.buttons_submit}"/></div>
        </form>{/if}
        <div class="text">{$titles.titles_siteOffMsg}</div>
    </div></body>
</html>