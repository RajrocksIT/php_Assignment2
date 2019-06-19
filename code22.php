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

date_default_timezone_set("America/New_York");
echo "The Time in USA is:". date("Y-m-d h:i:sa")."</br>"."</br>";

date_default_timezone_set("Europe/Rome");
echo "The Italy time is:". date("Y-m-d h:i:sa")."</br>"."</br>";


?>





</body>
</html>