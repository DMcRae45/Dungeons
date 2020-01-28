<?php
/*
    Description: Dungeons DM Screen.
    Author: David McRae
*/

?>

<html>
<!-- <head> -->
<?php
    include '../Model/session.php';
    include 'header.php';
    //include '../Controller/GetCharacters.php';
    //include '../Controller/getSpellByName.php';


  if(!isset($_SESSION['characterDetails']))
  {
   //header("location: ../View/screen.php?characterReferenced=Stats");
   $_SESSION['characterDetails'] = "Stats";
   $_SESSION['monsterDetails'] = "Stats";
  }
?>
<!-- </head> -->
<title>Dungeons - Screen</title>
<?php

echo "<div class='container-fluid mt-2'>"; // container open
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// CHARACTER ROW
include 'displayCharacters.php';

////////////////////////////////////////////////////////////////   SPELLS ROW   ////////////////////////////////////////////////////////////////
// Spell Row
include 'displaySpell.php';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////   MONSTERS ROW   ////////////////////////////////////////////////////////////////
// Monster Row
include 'displayMonster.php';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "</div>"; // container close


?>

<!-- <footer> -->
<?php
  include 'footer.php';
?>
<!-- </footer> -->

<!-- JavaScript files -->
<?php
    include '../Controller/bootstrapScript.php';
    include '../Controller/cookieConsent.php';
?>
</body>
</html>
