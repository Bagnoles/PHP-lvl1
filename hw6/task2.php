<html>
<body>
<h1>Калькулятор</h1>
<form action="index.php" method="post">
    <input type="number" name="operand1"><br>
    <input type="number" name="operand2"><br>
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
</form>
</body>
</html>
<?php
$num1 = $_POST[operand1];
$num2 = $_POST[operand2];
switch ($_POST[operation]) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            echo "На ноль делить нельзя!";
        } else {
            echo $num1 / $num2;
        }
}
?>