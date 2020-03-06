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

<div class='container mt-5 mb-5'>
<?php
  if(isset($_SESSION['userid']) && isset($_SESSION['username']))
  {
    echo "
    <div class='row'>
      <div class='col-12 mt-5'>
        <a class='btn btn-outline-warning btn-block'href='play.php'>Play</a>
      </div>
    </div>

    <div class='row'>
      <div class='col-12 mt-5'>
        <a class='btn btn-outline-Warning btn-block' href='createCharacter.php'>Create Character</a>
      </div>
    </div>
    ";
  }
  else
  {
    echo "
    <div class='row'>
      <div class='col-md-6 mt-5'>
        <a class='btn btn-outline-warning btn-block'href='userLogin.php'>Login</a>
      </div>

      <div class='col-md-6 mt-5'>
        <a class='btn btn-outline-Warning btn-block' href='userRegister.php'>Register</a>
      </div>
    </div>
    ";
  }
?>
  <!-- Manager Access Required -->


    <!-- Supervisor Access Required -->
  <div class='row'>
    <div class='col-12 mt-5'>
      <a class='btn btn-outline-Warning btn-block' href='screen.php'>DM Screen</a>
    </div>
  </div>

  <div class='row'>
    <!-- Manager Access Required -->
    <div class='col-md-6 mt-5'>
      <a class='btn btn-outline-warning btn-block'href='allSpells.php'>All Spells</a>
    </div>

    <!-- Manager Access Required -->
    <div class='col-md-6 mt-5'>
      <a class='btn btn-outline-Warning btn-block' href='allMonsters.php'>All Monsters</a>
    </div>
  </div>

    <!-- Employee Access Required -->
  <div class='row'>
    <div class='col-12 mt-5'>
      <a class='btn btn-outline-warning btn-block' href='RuleReference.php'>Rules of Play</a>
    </div>
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
