<?php
/*
    Description: Get spell from API

    Author:David McRae
 */
if(isset($_POST['getSpellByName']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';


  $spell = GetSpellByName();
  $spellArray = json_decode($spell);

  $_SESSION['lastSpell'] = $spellArray;

  header('Location: ../View/screen.php');
}
?>
