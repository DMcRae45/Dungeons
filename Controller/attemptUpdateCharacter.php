<?php
/*
    Description: Action for updating a character

    Author: David McRae
*/
session_start();
if(isset($_SESSION['userid']))
{
  if(isset($_POST["updateCharacterSubmit"]))
  {
    include '../Model/dungeons_API.php';

    UpdateCharacter($_GET['characterID']);

  }
  else
  {
    header('Location: ../View/userLogin.php?error=ACCESS DENIED');
  }
}
else
{
  header('Location: ../View/userLogin.php?error=Must Login to create a character');
}
?>
