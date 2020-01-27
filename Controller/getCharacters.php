<?php
/*
    Description: Get Characters in session from Database

    Author:David McRae
 */
 if(isset($_POST['getMonsterByName']))
 {
   include '../Model/session.php';
   include '../Model/dungeons_API.php';


   $character = GetCharacters();
   $characterArray = json_decode($character);

   $_SESSION['sessionCharacter'] = $characterArray;

   header('Location: ../View/screen.php');
 }
