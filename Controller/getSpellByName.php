<?php
/*
    Description: Get ALL spells from API

    Author:David McRae
 */
include '../Model/dungeons_API.php';

 $spell = GetSpellByName();
 $spellArray = json_decode($spell);

 echo $spellArray[0];
?>
