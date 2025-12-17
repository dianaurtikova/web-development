<?php
$num1 = 12;
$num2 = 345;
$sum = $num1 + $num2;
echo $num1 ." + " .$num2 ." = ".$sum;
if($sum%2==0){
    echo "<p>"."Сумма - четное число!"."</p>";
}
else{
    echo "<p>"."Сумма - нечетное число!"."</p>";
}