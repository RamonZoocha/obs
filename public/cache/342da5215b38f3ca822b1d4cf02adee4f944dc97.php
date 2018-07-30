<?php
$HAANGA_VERSION  = '1.0.7';
/* Generated from /media/ramon/ProgramsAndFiles/sites/obs/themes/default/templates/register.html */
function haanga_342da5215b38f3ca822b1d4cf02adee4f944dc97($vars15b5f609625dc6, $return=FALSE, $blocks=array())
{
    extract($vars15b5f609625dc6);
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
REGISTER

<form method="post" action="/register">
    <input type="text" name="username"/>
    <br>
    <input type="password" name="password"?>
    <br>
    <input type="submit"/>

    <br><br>

    '.htmlspecialchars($message).'

</form>


</body>
</html>';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}