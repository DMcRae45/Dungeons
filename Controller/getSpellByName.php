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

  if($spell == "error")
  {
    header('Location: ../View/screen.php?spellError=Spell Not Found');
  }
  else
  {
    $spellObject = json_decode($spell);

    if(isset($_SESSION['lastSpell']))
    {
      array_push($_SESSION['lastSpell'], $spellObject);
    }
    else
    {
      $spellArray = array($spellObject);
      $_SESSION['lastSpell'] = $spellArray;
    }
    header('Location: ../View/screen.php');
  }
}
?>
