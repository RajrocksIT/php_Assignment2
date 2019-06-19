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

$datetime1 = date_create('2018-10-07');
$datetime2 = date_create('2018-05-28');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a days');

?>





</body>
</html>