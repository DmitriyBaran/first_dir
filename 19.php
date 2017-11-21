<?php
header('Content-type: text/html; charset=utf-8');
$a = (string) 78;
$b = (int) 78;
if ($a == $b)
{
    echo 'равны';
}
else
    echo 'не равны';
    echo '<br>';

var_dump($a == $b);

?>