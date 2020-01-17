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


<div class='mt-2 row-flex row no-gutters border border-warning rounded'>
  <div class='col-md-3 border-warning rounded'>
    <p>5E</br>
    Database</p>
  </div>
  <div class='col-md-9'>
    <p>big part</p></br>
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
