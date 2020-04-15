<?php
/*
    Description: Action for the register customer page.

    Author: David McRae
*/
session_start();
if(!isset($_SESSION['userid']))
{
  header('Location: ../View/index.php?error=ACCESS DENIED');
}
else
{
  include '../Model/dungeons_API.php';
  $code = $_GET['characterid'];

  DeleteCharacterByCode($code);

  header('Location: ../View/play.php');
}
?>
