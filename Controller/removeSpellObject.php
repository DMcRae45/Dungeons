<?php
/*
    Description: Remove Spell Object

    Author:David McRae
 */
if(isset($_POST['removeSpellObject']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';

  $_SESSION['lastSpell'] = RemoveObject($_SESSION['lastSpell']);

  header('Location: ../View/screen.php');
}
?>
