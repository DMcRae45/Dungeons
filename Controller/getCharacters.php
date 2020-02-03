<?php
/*
    Description: Get Characters in session from Database

    Author:David McRae
 */
if(isset($_POST['getSessionCharacters']))
{
 include '../Model/session.php';
 include '../Model/dungeons_API.php';

 $character = GetSessionCharacters();
 $_SESSION['sessionCharacter'] = json_decode($character);

 //header('Location: ../View/screen.php');
}
else
{
 header('Location: ../View/screen.php?error=ControllerError');
}
?>
