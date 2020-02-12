<?php
/*
    Description: Get Characters in session from Database

    Author:David McRae
 */
if(isset($_POST['getCharacterByCode']))
{
 include '../Model/session.php';
 include '../Model/dungeons_API.php';

  $character = GetSessionCharacters();

  if($character == "error")
  {
    header('Location: ../View/screen.php?characterError=Character Not Found');
  }
  else
  {
    if(isset($_SESSION['sessionCharacter']))
    {
      array_push($_SESSION['sessionCharacter'], json_decode($character)[0]);
    }
    else
    {
      $_SESSION['sessionCharacter'] = json_decode($character);
    }
    header('Location: ../View/screen.php');
  }



}
?>
