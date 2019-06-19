


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

$colors = array(
    0 => 'Red',
    1 => 'Green',
    2 => 'White',
    3 => 'Black',
    4 => 'Red',
);

$numbers = array(
    0 => 100,
    1 => 200,
    2 => 100,
    3 => -10,
    4 => -10,
    5 => 0,
);
echo"<br/><b>Initially the values of \$colors is:</b><br/>";
var_dump($colors);
echo"<br/><b>Initially the values of \$numbers is:</b><br/>";
var_dump($numbers);
echo"<br/><b>After removing the duplicates:</b><br/>";
print_r(array_unique($colors))."<br><br>";
echo"<br/><b>After removing the duplicates:</b><br/>";
print_r(array_unique($numbers));

?>



</body>
</html>