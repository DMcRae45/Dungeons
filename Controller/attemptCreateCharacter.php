<?php
/*
    Description: Action for creating a character

    Author: David McRae
*/
if(!isset($_POST["userid"]))
{
  header('Location: ../View/userLogin.php?error=Must Login to create a character');
}
else
{
  include '../Model/dungeons_API.php';

  session_start();
  $userid = $_SESSION['userid'];
  CreateCharacter($userid);

  echo "Sucessfully created a character";

  //header('Location: ../View/.php');
}
?>
