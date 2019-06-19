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

$numbers = array(2,3,3,5,4,1,2,2,1,1,2,2,3,4,5,5);
$numbers = array_unique($numbers);
asort($numbers);
print_r($numbers);


?>



</body>
</html>
