<?php
$HAANGA_VERSION  = '1.0.7';
/* Generated from /media/ramon/ProgramsAndFiles/sites/obs/themes/default/templates/login.html */
function haanga_82f334a0ea43f8a0d863d4390afb95c201a46ac8($vars15b5f5cb205f7b, $return=FALSE, $blocks=array())
{
    extract($vars15b5f5cb205f7b);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN TEMPLATE</title>
</head>
<body>
LOGIN

<form method="post" action="/login">
    <input type="text" name="username"/>
    <br>
    <input type="password" name="password"?>
    <br>
    <input type="submit"/>

    <br>

    <a href="/register">register</a>

    <br><br>

    '.htmlspecialchars($message).'

</form>


</body>
</html>';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}