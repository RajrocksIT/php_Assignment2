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

$target_days = mktime(0,0,0,05,28,2019);
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "Days till next birthday: $days days!"."\n";

?>





</body>
</html>