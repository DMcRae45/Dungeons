<?php
if(!isset($_GET['characterID']))
{
  header('location: ../View/selectCharacter.php?error=Must Select a Character');
}
else
{
  include '../Model/dungeons_API.php';
  $_POST['getCharacterByCode'] = True;
  $character = json_decode(GetCharacterByCode($_GET['characterID']));

  $equipped = json_decode(GetCharacterEquipment($character[0]->Code));

  $armour = json_decode(GetCharacterArmour($equipped[0]->Armour_ID));
  $weapon = json_decode(GetCharacterWeapon($equipped[0]->Weapon_ID));
  $spells = json_decode(GetCharacterSpells($character[0]->Code));
  $spellsObject = json_decode(GetKnownSpells($spells[0]->Known));

  $notes = json_decode(GetCharacterNotes($character[0]->Code));

  $spellsKnown = array();
  $spellsKnown[0] = $spellsObject->results;
}
?>
