
/**
 * Created by PhpStorm.
 * User: chinn
 * Date: 10/03/2018
 * Time: 1:45 PM
 */

<html>
<head>
    <title>Different Operators Demo</title>
</head>
<body>
<?php

$number1 = '5';
$number2 = '10';
$number3 = '13';
$number4 = '17';

echo "<h3>I am demonstrating different arithmetic functions</h3>";
echo "Addition : ". ($number1 + $number2) ."<br><br>";
echo "Subtraction : ". ($number1 - $number2) ."<br><br>";
echo "Division : ". ($number1 / $number2) ."<br><br>";
echo "Multiplication : " .($number1 * $number2) ."<br><br>";
echo "Multiplication : " .($number3 * $number4) ."<br><br>";
echo "Power : " .($number3 ** $number4) ."<br><br>";
?>
</body>
</html>