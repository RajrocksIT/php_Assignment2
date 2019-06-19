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

for($row=0;$row<=4;$row++)
{
for($col=0;$col<=$row;$col++)
{
echo "* ";
}
echo "<br>";

}
for($a=4; $a<=9; $a++)
{
 if($a%4 != 0)
{
 for($b=9; $b>=$a; $b--)
{
echo "* ";
}
echo "<br>";
}
}


?>

</body>
</html>