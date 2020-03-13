<?php
/*
    Description: Get Characters in session from Database

    Author:David McRae
 */
if(isset($_POST['getCharacterByCode']))
{
  include '../Model/session.php';
  include '../Model/dungeons_API.php';

  $code = (filter_input(INPUT_POST, 'characterCode', FILTER_SANITIZE_STRING));

  $character = GetSessionCharacters($code);

  if($character == "error")
  {
    header('Location: ../View/screen.php?characterError=Character Not Found');
  }
  else
  {
    $character = json_decode($character);
    $equipped = json_decode(GetCharacterEquipment($character[0]->Code));

    if($equipped == "error")
    {
      header('Location: ../View/screen.php?characterError=Character Equipment Error');
    }
    else
    {
      $armour = json_decode(GetCharacterArmour($equipped[0]->Armour_ID));
      $weapon = json_decode(GetCharacterWeapon($equipped[0]->Weapon_ID));
      $spells = json_decode(GetCharacterSpells($character[0]->Code));
      $spellsKnown = GetKnownSpells($spells[0]->Known);

      if($spells == "error")
      {
        header('Location: ../View/screen.php?characterError=Character Spells Error');
      }
      else
      {
        $spellsKnown = json_decode($spellsKnown);

        if(isset($_SESSION['sessionCharacter']))
        {
          array_push($_SESSION['sessionCharacter'], $character[0]);
          array_push($_SESSION['sessionCharacterArmour'], $armour[0]);
          array_push($_SESSION['sessionCharacterWeapon'], $weapon[0]);
          array_push($_SESSION['sessionCharacterSpellsKnown'], $spellsKnown->results);
        }
        else
        {
          $_SESSION['sessionCharacter'] = $character;
          $_SESSION['sessionCharacterArmour'] = $armour;
          $_SESSION['sessionCharacterWeapon'] = $weapon;

          $_SESSION['sessionCharacterSpellsKnown'] = array();
          $_SESSION['sessionCharacterSpellsKnown'][0] = $spellsKnown->results;

        }
        header('Location: ../View/screen.php');
      }
    }
  }
}
?>
