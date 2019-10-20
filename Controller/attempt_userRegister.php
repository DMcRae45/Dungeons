<?php
/*
    Description: Action for the register customer page.

    Author: David McRae
*/
if(!isset($_POST["userRegisterSubmit"]))
{
  header('Location: ../View/index.php?error=ACCESS DENIED');
}
else
{
  include '../Model/dungeons_API.php';

  session_start();

  CreateNewUser();
}
?>
