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

$password = "";
$charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";

 for($i = 0; $i < 10; $i++)
     {
         $random_int = mt_rand();
 $password .= $charset[$random_int % strlen($charset)];
}

echo $password, "\n";



?>



</body>
</html>