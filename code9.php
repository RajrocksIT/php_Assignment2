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

echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 6; $row++) {
    echo "<tr> \n";
    for ($col=1; $col <= 6; $col++) {
        $p = $col * $row;
        echo "<td>$p</td> \n";
    }
    echo "</tr>";
}
echo "</table>";


?>



</body>
</html>