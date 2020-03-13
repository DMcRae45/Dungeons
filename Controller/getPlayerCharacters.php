<?php
/*
  Description: Get Monster Details by name

  Author:David McRae
*/
include '../Model/dungeons_API.php';

$characters = json_decode(GetPlayerCharacters($_SESSION['userid']));

?>
