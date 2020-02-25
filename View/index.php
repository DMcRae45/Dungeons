<?php
/*
    Description: Dungeons Home Page.
    Author: David McRae
*/
?>

<html>
<!-- <head> -->
<?php
    include '../Model/session.php';
    // include the api file here. include....
    include 'header.php';
?>
<!-- </head> -->
<title>Dungeons - Home</title>


<div class='mt-2 row-flex row no-gutters '>
  <div class='border border-warning rounded col-12 border-warning rounded d-flex justify-content-center'>
    <h1 class='display-1'>Dungeons Interactive DM Screen </h1>
  </div>
</div>


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
