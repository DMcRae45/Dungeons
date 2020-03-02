<?php
/*
    Description: Remove Character Object

    Author:David McRae
 */
if(isset($_POST['removeCharacterObject']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';

  $_SESSION['sessionCharacter'] = RemoveObject($_SESSION['sessionCharacter']);
  $_SESSION['sessionCharacterArmour'] = RemoveObject($_SESSION['sessionCharacterArmour']);
  $_SESSION['sessionCharacterWeapon'] = RemoveObject($_SESSION['sessionCharacterWeapon']);

  header('Location: ../View/screen.php');
}
?>
