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



$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
    "Brussels","Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
    "Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece"
    => "Athens", "Ireland"=>"Dublin","Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
    "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna",
    "Poland"=>"Warsaw");

arsort($ceu);

$key_of_max = key($ceu);
echo "Index of the highest value : ".$key_of_max."\n";



?>



</body>
</html>