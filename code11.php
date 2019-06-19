



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

$color = array('black','green','white','yellow','indigo','blue','purple','red');
sort($color);
$length = count($color);
$string = rtrim(implode(',', $color), ',');
echo $string;

for($x = 0; $x < $length; $x++) {
    echo "<li>" . $color[$x] . "</li>\n";
    echo "<br>";
}






?>



</body>
</html>

