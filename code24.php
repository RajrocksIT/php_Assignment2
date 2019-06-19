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

$sentence = 'In the opening act of Antony & Cleopatra, one of Cleopatra’s attendants, Alexas,
describes a meeting with Marc Antony and talks of him mounting “an armgaunt steed,
who neighed so high that what I would have spoke was beastly dumbed by him.” The
second part of this line makes it clear that Antony’s horse neighed so loudly that
anything he might have said would have been drowned out, but what about armgaunt?
Some editors take this word literally, and suggest it literally means “gaunt-armed,” or
slender-limbed. But if Alexas is trying to make Antony sound as gallant and heroic as
possible, why would he point out how skinny his horse looks?';
if (strpos($sentence,'ARMGAUNT') !== false)
{
    echo 'The word is there.';
}
else
{
    echo 'The word is not there.';
}


?>

</body>
</html>