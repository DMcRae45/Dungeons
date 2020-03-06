<?php
/*
    Description: Get ALL monsters from API

    Author:David McRae
 */
include '../Model/dungeons_API.php';

 $monsters = GetAllMonsters();
 $monstersArray = json_decode($monsters);
?>
