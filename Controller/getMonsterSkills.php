<?php
/*
    Description: Get ALL spells from API

    Author:David McRae
 */
  include '../Model/dungeons_API.php';

  $skills = GetMonsterSkills();
  $skills = json_decode($skills);
?>
