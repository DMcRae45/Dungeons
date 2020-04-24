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
?>
<!-- </head> -->
<title>Dungeons - Screen</title>
<?php
echo "<div class='container-fluid mt-2'>"; // container open
// Character Row
include 'displayCharacters.php';
// Spell Row
include 'displaySpell.php';
// Monster Row
include 'displayMonster.php';

// Custom sound Board By Tabletop Audio
echo "
<div class='mt-2 row-flex row no-gutters border border-warning rounded'>
 <object type='text/html' data='https://tabletopaudio.com/custom_sp.html' class='w-100' style='height: 500px;'></object>
</div>


</div>"; // main container close
?>

<!-- <footer> -->
<?php
  include 'footer.php';
?>
<!-- </footer> -->

<!-- JavaScript files -->
<?php
    include '../Controller/bootstrapScript.php';
    include '../Controller/tabControl.php';
    include '../Controller/fontAwesome.js';
    include '../Controller/cookieConsent.php';
?>
</body>
</html>
