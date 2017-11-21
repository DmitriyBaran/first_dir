<?php
header('Content-type: text/html; charset=utf-8');
$age = 21;
if ($age >= 18 AND $age <= 59)
{
    echo "Вам еще работать и работать";
}
else if ($age >= 0 AND $age <= 17)
{
    echo "Вам еще рано работать";
}
else if ($age > 59)
{
    echo "Вам пора на пенсию";
}
else
{
    echo "Неизвестный возраст";
}

?>