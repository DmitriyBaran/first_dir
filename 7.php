<?php
header('Content-type: text/html; charset=utf-8');
$age = 21;
if ($age > 18 AND $age < 59)
{
    echo "Вам еще работать и работать";
}
if ($age > 59)
{
    echo "Вам пора на пенсию";
}
if ($age > 0 AND $age < 17)
{
    echo "Вам еще рано работать";
}
?>