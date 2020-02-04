<?php
/*
    Description: Get Monster Details by name

    Author:David McRae
 */
if(isset($_POST['getMonsterByName']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';

  $monster = GetMonsterByName();
  $monsterObject = json_decode($monster);

  if(isset($_SESSION['lastMonster']))
  {
    array_push($_SESSION['lastMonster'], $monsterObject);
  }
  else
  {
    $monsterArray = array($monsterObject);
    $_SESSION['lastMonster'] = $monsterArray;
  }
  //header('Location: ../View/screen.php');
}
?>
