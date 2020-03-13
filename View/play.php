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
    var_dump($_SESSION['userid']);
    var_dump($characters);
?>
<!-- </head> -->
<title>Dungeons - Home</title>
<?php
echo "
<body>
  <div class='container'>
    <div class='page-header'>
        <h1>Manage Users</h1>
    </div>
    ";

    echo "
    <table class='table border border-dark text-center'>
      <thead class='thead-dark'>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Name</th>
            <th scope='col'>Alignment</th>
            <th scope='col'>Level</th>
            <th scope='col'>Class</th>
            <th scope='col'>Delete</th>
          </tr>
        </thead>";

        for ($i=0 ; $i < sizeof($characters) ; $i++)
        {
        echo "<tr>";
          echo "<td>".$characters[$i]->Code."</td>";
          echo "<td>".$characters[$i]->Name."</td>";
          echo "<td>".$characters[$i]->Alignment."</td>";
          echo "<td>".$characters[$i]->Level."</td>";
          echo "<td>".$characters[$i]->ClassName."</td>";

          echo "<td> <a class='btn btn-danger text-light' data-toggle='modal' data-target='#delete".$characters[$i]->Code."Modal'>DELETE</a> </td>";
          echo "<tr>";

          echo "<div class='modal fade' id='delete".$characters[$i]->Code."Modal' tabindex='-1' role='dialog' aria-labelledby='deleteModalLabel' aria-hidden='true'>
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
                        <a class='btn btn-outline-danger' role='button' href='../Controller/attempt_deleteCharacter.php?id=".$characters[$i]->Code."'>DELETE</a>
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
