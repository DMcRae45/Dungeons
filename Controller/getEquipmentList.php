<?php
/*
    Description: Get Equipment list in session from Database

    Author:David McRae
 */
  include '../Model/dungeons_API.php';

  $armourList = json_decode(GetArmourList());
  $weaponList = json_decode(GetWeaponList());
?>
