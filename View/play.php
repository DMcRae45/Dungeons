<?php
/*
    Description: Dungeons Home Page.
    Author: David McRae
*/
// if(isset($_SESSION['userid']) && isset($_SESSION['username']))
// {
?>

<html>
<!-- <head> -->
<?php
    include '../Model/session.php';
    include 'header.php';
    include '../Controller/getPlayerCharacters.php';
?>
<!-- </head> -->
<title>Select Character</title>
<?php
echo "
<body>
  <div class='container'>
    <div class='page-header'>
        <h1>Select Character</h1>
    </div>
    ";

    echo "
    <table class='table border border-dark text-center'>
      <thead class='thead-dark'>
          <tr>
            <th scope='col'>Name</th>
            <th scope='col'>Level</th>
            <th scope='col'>Class</th>
            <th scope='col'>Select</th>
            <th scope='col'>Update</th>
            <th scope='col'>Delete</th>
          </tr>
        </thead>";

        for ($i=0 ; $i < sizeof($characters) ; $i++)
        {
          echo "<tr>";
          echo "<td><text>".$characters[$i]->Name."</text></td>";
          echo "<td><text>".$characters[$i]->Level."</text></td>";
          echo "<td><text>".$characters[$i]->ClassName."</text></td>";
          echo "<td><a class='btn btn-success' href='playerCharacter.php?characterID=".$characters[$i]->Code."'>Select</a></td>";
          echo "<td><a class='btn btn-warning' href='updateCharacter.php?characterID=".$characters[$i]->Code."'>Update</a></td>";

          echo "<td> <a class='btn btn-danger text-light' data-toggle='modal' data-target='#delete".$characters[$i]->Code."Modal'>DELETE</a> </td>";
          echo "<tr>";

          echo "
          <div class='modal fade' id='delete".$characters[$i]->Code."Modal' tabindex='-1' role='dialog' aria-labelledby='deleteModalLabel' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
              <div class='modal-content bg-dark'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='deleteModalLabel'>Are You Sure?</h5>
                  <button type='button' class='close btn btn-dark' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                </div>
                <div class='modal-body'>
                  <p>Are you sure you want to delete the Character: ".$characters[$i]->Name."?<p>
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-outline-warning' data-dismiss='modal'>No!</button>
                  <a class='btn btn-outline-danger' role='button' href='../Controller/attempt_deleteCharacter.php?characterid=".$characters[$i]->Code."'>DELETE</a>
                </div>
              </div>
            </div>
          </div>";
        }
        echo "</table>";
echo "
    </div>
";
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
<?php
// }
// else
// {
//   header('location: ../View/userLogin.php?error=Must Login to Play a character');
// }
?>
