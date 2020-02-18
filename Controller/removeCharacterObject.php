<?php
/*
    Description: Remove Character Object

    Author:David McRae
 */
if(isset($_POST['removeCharacterObject']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';
  echo "almost";

  $_SESSION['sessionCharacter'] = RemoveObject($_SESSION['sessionCharacter']);
  echo "done";

  header('Location: ../View/screen.php');
}
?>
