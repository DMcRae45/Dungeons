<?php
/*
    Description: Action for updating a character

    Author: David McRae
*/
session_start();
if(isset($_POST["saveCharacterSubmit"]))
{
  include '../Model/dungeons_API.php';
  $code = $_GET['characterID'];
  SaveCharacter($code);
//  header('Location: ../View/playerCharacter.php?characterID='.$code);
}
else
{
  header('Location: ../View/index.php?error=ACCESS DENIED');
}
?>
