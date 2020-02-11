<?php
/*
    Description: Get Monster Details by name

    Author:David McRae
 */
if(isset($_POST['removeMonsterObject']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';

  $_SESSION['lastMonster'] = RemoveObject($_SESSION['lastMonster']);

  header('Location: ../View/screen.php');
}
?>
