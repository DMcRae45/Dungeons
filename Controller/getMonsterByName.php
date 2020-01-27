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
  $monsterArray = json_decode($monster);

  $_SESSION['lastMonster'] = $monsterArray;

  header('Location: ../View/screen.php');
}
?>
