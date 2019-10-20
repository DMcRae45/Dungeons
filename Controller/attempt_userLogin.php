<?php
/*
    Description: Attempt to log the user in using the api file.

    Author: David McRae
*/
session_start();

if(!isset($_POST["userLoginSubmit"]))
{
  header('Location: ../View/index.php?error=ACCESS DENIED');
}
else
{
 include '../Model/dungeons_API.php';

 AttemptUserLogIn();
}
?>
