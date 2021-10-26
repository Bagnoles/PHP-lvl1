<html>
<body>
<h1>Калькулятор</h1>
<form action="index.php" method="post">
    <input type="number" name="operand1"><br>
    <input type="number" name="operand2"><br>
    <select name="operation" id="operation">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select><br>
    <input type="submit" value="Calculate">
</form>
</body>
</html>
<?php
$num1 = $_POST[operand1];
$num2 = $_POST[operand2];
switch ($_POST[operation]) {
    case 'plus':
        echo $num1 + $num2;
        break;
    case 'minus':
        echo $num1 - $num2;
        break;
    case 'mul':
        echo $num1 * $num2;
        break;
    case 'div':
        if ($num2 == 0) {
            echo "На ноль делить нельзя!";
        } else {
            echo $num1 / $num2;
        }
}
?>