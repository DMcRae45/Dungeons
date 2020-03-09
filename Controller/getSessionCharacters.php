<?php
/*
    Description: Get Characters in session from Database

    Author:David McRae
 */
if(isset($_POST['getCharacterByCode']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';

  $character = GetSessionCharacters();

  if($character == "error")
  {
    header('Location: ../View/screen.php?characterError=Character Not Found');
  }
  else
  {
    $character = json_decode($character);
    $equipped = json_decode(GetCharacterEquipment($character[0]->Code));
    $armour = json_decode(GetCharacterArmour($equipped[0]->Armour_ID));
    $weapon = json_decode(GetCharacterWeapon($equipped[0]->Weapon_ID));
    $spells = json_decode(GetCharacterSpells($character[0]->Code));
    $spellsKnown = json_decode(GetKnownSpells($spells[0]->Known));


    if($equipped == "error")
    {
      header('Location: ../View/screen.php?characterError=Character Equipment Error');
    }
    if($spellsKnown == "error")
    {
      header('Location: ../View/screen.php?characterError=Character Spells Error');
    }

    if(isset($_SESSION['sessionCharacter']))
    {
      array_push($_SESSION['sessionCharacter'], $character[0]);
      array_push($_SESSION['sessionCharacterArmour'], $armour[0]);
      array_push($_SESSION['sessionCharacterWeapon'], $weapon[0]);
      array_push($_SESSION['sessionCharacterSpellsKnown'], $spellsKnown->results[0]);
    }
    else
    {
      $_SESSION['sessionCharacter'] = $character;
      $_SESSION['sessionCharacterArmour'] = $armour;
      $_SESSION['sessionCharacterWeapon'] = $weapon;
      $_SESSION['sessionCharacterSpellsKnown'] = $spellsKnown->results;
    }
    header('Location: ../View/screen.php');
  }
}
?>
