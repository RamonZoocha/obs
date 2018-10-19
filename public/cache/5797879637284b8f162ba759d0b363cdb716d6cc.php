<?php
$HAANGA_VERSION  = '1.0.7';
/* Generated from /media/ramon/ProgramsAndFiles/sites/obs/themes/default/templates/chat.html */
function haanga_5797879637284b8f162ba759d0b363cdb716d6cc($vars15bc71d60b3233, $return=FALSE, $blocks=array())
{
    extract($vars15bc71d60b3233);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="1"></head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

hello there

<br>
<a href="/logout">quit</a>
</body>
</html>';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}