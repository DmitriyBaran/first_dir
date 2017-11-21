<?php
    if($_POST['submit'])
       {
            $a = (int)$_POST['first'];
            $b = (int)$_POST['second'];
            $p = $_POST['operation'];
            $c;
            if ($p=='+')
               $c = $a + $b;
            else if ($p=='-')
                $c = $a - $b;
            else if ($p=='*')
                $c = $a * $b;
            else if ($p=='/')
            {
                if ($b == 0)
                    echo "На 0 делить нельзя!";
                else $c = $a / $b;
            }
            else $c = $a % $b;
        }
?>
<html>
<meta charset="utf-8">
<title>
    калькулятор
</title>
<body>
<form action="" method="post">
    <input type="textbox" name="first" required>
    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>
    <input type="textbox" name="second" required>
    <input type="submit" name="submit" required>

</form>
</body>
</html>
<?php
echo $c;
?>