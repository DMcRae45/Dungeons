<?php
/*
    Description: Remove Character Object

    Author:David McRae
 */
if(isset($_POST['removeCharacterObject']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';

  if(sizeof($_SESSION['sessionCharacter']) > 1)
  {
    $_SESSION['sessionCharacter'] = RemoveObject($_SESSION['sessionCharacter']);
    $_SESSION['sessionCharacterArmour'] = RemoveObject($_SESSION['sessionCharacterArmour']);
    $_SESSION['sessionCharacterWeapon'] = RemoveObject($_SESSION['sessionCharacterWeapon']);
    $_SESSION['sessionCharacterSpellsKnown'] = RemoveObject($_SESSION['sessionCharacterSpellsKnown']);
  }
  else
  {
    unset($_SESSION['sessionCharacter']);
    unset($_SESSION['sessionCharacterArmour']);
    unset($_SESSION['sessionCharacterWeapon']);
    unset($_SESSION['sessionCharacterSpellsKnown']);
  }
  header('Location: ../View/screen.php');
}
?>
