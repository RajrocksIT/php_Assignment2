
/**
 * Created by PhpStorm.
 * User: chinn
 * Date: 10/13/2018
 * Time: 4:04 PM
 */


<html>
<head>
    <title>My Second Program: Variable Assignment</title>
</head>
<body>
<?php

$user = 'root';
$pass = '';
$db = 'carvana';
$db = new mysqli('localhost', $user, $pass, $db);
echo "Its connected!!!";
?>
</body>
</html>