<?php
$count1 = $_POST["count1"];
$count2 = $_POST["count2"];
$count3 = $_POST["count3"];


echo $count1 . $count3 . $count2 . '=';
switch ($count3) {
    case '+':
        echo $count1 + $count2;
        break;
    case '-':
        echo $count1 - $count2;
        break;
    case '*':
        echo $count1 * $count2;
        break;
    case '/':
        echo $count1 / $count2;
        break;
}

?>