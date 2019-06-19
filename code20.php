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

$olddateformat = "2018-10-07";
$newDateformat = date("d-m-Y", strtotime($olddateformat));
echo $newDateformat."\n";

?>





</body>
</html>