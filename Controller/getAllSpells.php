<?php
/*
    Description: Get ALL spells from API

    Author:David McRae
 */
include '../Model/dungeons_API.php';

 $spells = GetAllSpells();
 $spellsArray = json_decode($spells);
?>
