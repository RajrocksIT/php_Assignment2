

/**
* Created by PhpStorm.
* User: chinn
* Date: 10/08/2018
* Time: 12:23 AM
*/

<!DOCTYPE html>
<html>
<body>

<?php

$str = "Haikus are easy.
But sometimes they don't make sense.
Refrigerator.
Advice for those in,
a difficult position.
First, be flexible.
I like kittens, YEAH!
They are really fluffy, YEAH!
OMG KITTENS.";
$str = strtoupper($str);
echo $str;
echo "</br>";

$str = strtolower($str);
echo $str;
echo "</br>";

$str = ucfirst($str);
echo $str;
echo "</br>";

$str = ucwords($str);
echo $str;

?>





</body>
</html>