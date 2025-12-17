<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Первое число" required>
        <select name="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Второе число" required>
        <button type="submit">Вычислить</button>
    </form>
</body>
<?php  
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operation'];
$html = "";
switch ($operator) {
    case 'add':
        $result = $num1 + $num2;
        break;
    case 'subtract':
        $result = $num1 - $num2;
        break;
    case 'multiply':
        $result = $num1 * $num2;
        break;
    case 'divide':
        if ($num2 == 0) {
            $result = "На ноль делить нельзя!!!!!!!";
        } else {
            $result = $num1 / $num2;
        }
        break;
    default:
        $result = "Неизвестная операция!!!!";
}
echo "<p>"."Результат : ".$result ."</p>";
?>
</html>
<?php