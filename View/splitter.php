<?php
function GetCharacterEqipment($equipment_id)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $sql = "SELECT * FROM Equipment WHERE Equipment_ID = :equipment_id";

    $stmt = $connection->prepare($sql);
    $success = $stmt->execute(['equipment_id' => $equipment_id]);

    if($success && $stmt->rowCount() > 0)
    {
      $equipmentIDs = array();
      while($r = $stmt->fetch())
      {
        $equipmentIDs[] = $r;
      }
      return json_encode($equipmentIDs);
    }
    else
    {
      $error = "error"; // error finding equipment
      return $error; // error for Controller file
    }
    $connection = null;
  }
}

function GetCharacterArmour($armour_id)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $search_Armour = "SELECT * FROM Armour WHERE Armour_ID = :armour_id";

    $armourStmt = $connection->prepare($search_Armour);
    $armourSuccess = $armourStmt->execute(['Armour_ID' => $armour_id]);

    if($armourSuccess && $armourStmt->rowCount() > 0)
    {
      echo 'Armour Found';

      $armourObject = array();
      while($result = $armourStmt->fetch())
      {
        $armourObject[] = $result;
      }
      return json_encode($armourObject);
    }
    else
    {
      $error = "error"; // error finding weapojn
      return $error; // error for Controller file
    }
    $connection = null;
  }
}

function GetChatacterWeapon($weapon_id)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $search_Weapon = "SELECT * FROM Weapon WHERE Weapon_ID = :weapon_id";

    $weaponStmt = $connection->prepare($search_Weapon);
    $weaponSuccess = $weaponStmt->execute(['Weapon_ID' => $weapon_id]);

    if($weaponSuccess && $weaponStmt->rowCount() > 0)
    {
      echo 'Armour Found';

      $weaponObject = array();
      while($result = $armourStmt->fetch())
      {
        $weaponObject[] = $result;
      }
      return json_encode($weaponObject);
    }
    else
    {
      $error = "error"; // error finding armour
      return $error; // error for Controller file
    }
    $connection = null;
  }
}
