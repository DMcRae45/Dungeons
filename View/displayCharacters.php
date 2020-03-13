<?php
if(isset($_GET['characterError']))
{
  $characterError = $_GET['characterError'];
  echo $characterError;
}
$characterHealth = array();
for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
{
  $characterHealth[$i] = $_SESSION['sessionCharacter'][$i]->HP;
}

echo "<div class='mt-2 row-flex row no-gutters border border-warning rounded'>"; // CHARACTER ROW

  // CHARACTER SEARCH BAR
  echo "
  <div class='col-3 list-group no-gutters'>

    <form action='../Controller/getSessionCharacters.php' method='POST' class='mb-0 mr-0 border border-warning rounded'>
      <div class='input-group input-group-sm'>
        <input type='text' class='form-control' placeholder='Character Code' aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='characterCode' name='characterCode'>
        <div class='input-group-append'>
          <button name='getCharacterByCode' type='submit' class='btn btn-outline-warning'><i class='fas fa-plus'></i></button>
        </div>
      </div>
    </form>
    ";

    //CHARACTER TABS
    if(isset($_SESSION['sessionCharacter']))
    {
      echo "
      <nav>
        <div class='nav nav-tabs' id='CharacterTab' role='tablist'>
          ";
          for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
          {
            echo "
              <a class='nav-item nav-link' id='characterTab".$i."' href='#characterRow".$i."' data-toggle='tab' role='tab' aria-controls='characterRow".$i."' aria-selected='false'>".$_SESSION['sessionCharacter'][$i]->Name."</a>
            ";
          }
          echo "
        </div>
      </nav>
  </div>";

  // CHARACTER EQUIPMENT TABS
  echo "
  <div class='row tab-content no-gutters col-9' id='characterSubTabs'>";

  for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
  {
    echo "
    <div class='row no-gutters tab-pane fade col-9' id='characterSubTabs".$i."' role='tabpanel' aria-labelledby='Character".$i."'>
      <nav>
        <div class='nav nav-tabs' id='equipmentTab' role='tablist'>
              <a class='nav-item nav-link' id='CharacterEquipmentTab".$i."' data-toggle='tab' href='#Equipment".$i."' role='tab' aria-controls='Equipment".$i."' aria-selected='false'>Equipped</a>
              <a class='nav-item nav-link' id='CharacterSpellTab".$i."' data-toggle='tab' href='#Spells".$i."' role='tab' aria-controls='Equipment".$i."' aria-selected='false'>Spells</a>
        </div>
      </nav>
    </div>";
  }
  echo"</div>

    ";

    echo "
    <div class='row tab-content no-gutters col-12' id='characterInfo'>
      ";
        for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
        {
          echo "
          <div class='row no-gutters tab-pane fade col-12' id='characterRow".$i."' role='tabpanel' aria-labelledby='characterRow".$i."'>

            <div class='card cave h-100 col-3'>
              <div class='card-body'>
                <h5 class='card-title'>".$_SESSION['sessionCharacter'][$i]->Name."</h5>
                  <button onclick='minimizeCharacter($i)' style='position: absolute; top: 5px; right: 50px;' class='btn btn-outline-warning mt-0 mr-0'><i class='far fa-eye-slash'></i></button>
                <form action='../Controller/removeCharacterObject.php' method='POST'>
                  <input type='hidden' id='index' name='index' value='".$i."'>
                  <button name='removeCharacterObject' type='submit' style='position: absolute; top: 5px; right: 5px;' class='btn btn-outline-warning mt-0 mr-0'>X</button>
                </form>
                <h6 <span class='float-right badge badge-warning badge-pill'>Level: ".$_SESSION['sessionCharacter'][$i]->Level."</span></h6>
                <h6>".$_SESSION['sessionCharacter'][$i]->Alignment."</h6>
              </div>
              <ul class='list-group list-group-flush'>
                <div class='row list-group-item no-gutters d-inline'>
                  <div class='row no-gutters'>
                    <div class='col-6 text-center'>

                      <button onclick='removeCharacterHealth(".$i.")' class='btn btn-outline-warning mt-0'>-</button>
                      <h4><i class='fas fa-heartbeat'></i> <text id='characterHealthDisplay".$i."'>".$characterHealth[$i]."</text></h4>
                      <button onclick='addCharacterHealth(".$i.")' class='btn btn-outline-warning mt-0'>+</button>

                  </div>
                    <div class='col-6 text-center'>
                      <h4><i class='fas fa-shield-alt'></i> <text>".$_SESSION['sessionCharacter'][$i]->AC."</text></h4>
                    </div>
                  </div>
                </div>

                <div class='row no-gutters bg-Custom h-100 pb-2'>
                  <div class='col-2 text-center'>
                    <h6>STR: </br><text>".$_SESSION['sessionCharacter'][$i]->Strength."</text></h6>
                  </div>
                  <div class='col-2 text-center'>
                    <h6>INT: </br><text>".$_SESSION['sessionCharacter'][$i]->Intelligence."</text></h6>
                  </div>
                  <div class='col-2 text-center'>
                    <h6>CON: </br><text>".$_SESSION['sessionCharacter'][$i]->Constitution."</text></h6>
                  </div>
                  <div class='col-2 text-center'>
                    <h6>WIS: </br><text>".$_SESSION['sessionCharacter'][$i]->Wisdom."</text></h6>
                  </div>
                  <div class='col-2 text-center'>
                    <h6>DEX: </br><text>".$_SESSION['sessionCharacter'][$i]->Dexterity."</text></h6>
                  </div>
                  <div class='col-2 text-center'>
                    <h6>CHA: </br><text>".$_SESSION['sessionCharacter'][$i]->Charisma."</text></h6>
                  </div>
                </div>

                <div class='list-group-item'>
                  <div class='row no-gutters'>
                    <h6>Saving Throw: <text>".$_SESSION['sessionCharacter'][$i]->Saving_Throws."</text></h6>
                  </div>
                </div>

                <div class='list-group-item'>
                  <div class='row no-gutters'>
                    <h6>Proficiencies: <text>".$_SESSION['sessionCharacter'][$i]->Proficiencies."</text></h6>
                  </div>
                </div>

                <div class='list-group-item'>
                  <div class='row no-gutters'>
                    <h6><i class='fas fa-comment'></i> <text>".$_SESSION['sessionCharacter'][$i]->Language."</text></h6>
                  </div>
                </div>

              </ul>
            </div>

            <div class='col-9' style='position:absolute; right:0px; top:-42px;' role='tabpanel' aria-labelledby='Character".$i."'>
              <nav>
                <div class='nav nav-tabs' id='equipmentTab' role='tablist'>
                      <a class='nav-item nav-link' id='CharacterEquipmentTab".$i."' data-toggle='tab' href='#Equipment".$i."' role='tab' aria-controls='Equipment".$i."' aria-selected='false'>Equipped</a>
                      <a class='nav-item nav-link' id='CharacterSpellTab".$i."' data-toggle='tab' href='#Spells".$i."' role='tab' aria-controls='Equipment".$i."' aria-selected='false'>Spells</a>
                </div>
              </nav>
            </div>

          <!-- EQUIPMENT TABS -->
          <div class='row no-gutters tab-pane fade col-9' style='position:absolute; top:0px; right:0px;' id='Equipment".$i."' role='tabpanel' aria-labelledby='Character".$i."'>
            <div class='col-2 list-group' style='position: relative; top: 0px;'>
              <li class='list-group-item d-flex'><h6>Armour</h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Name: <text>".$_SESSION['sessionCharacterArmour'][$i]->Name."</text></h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>AC: <text>".$_SESSION['sessionCharacterArmour'][$i]->AC."</text></h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Stealth: <text>".$_SESSION['sessionCharacterArmour'][$i]->Stealth."</text></h6>
              </li>
            </div>

            <div class='col-3 list-group' style='position: relative; top: 0px;'>
              <li class='list-group-item d-flex align-items-center'><h6>Weapon</h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Name: <text>".$_SESSION['sessionCharacterWeapon'][$i]->Name."</text></h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Category: <text>".$_SESSION['sessionCharacterWeapon'][$i]->Category."</text></h6>
              </li>
              <li class='list-group-item justify-content-between'><h6>Damage: <text>".$_SESSION['sessionCharacterWeapon'][$i]->Damage_Dice." ".$_SESSION['sessionCharacterWeapon'][$i]->Damage_Type."</text></h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Properties: <text>".$_SESSION['sessionCharacterWeapon'][$i]->Properties."</text></h6>
              </li>
            </div>

            <div class='col-7 list-group' style='position: relative; top: 0px;'>
              <li class='list-group-item d-flex align-items-center'><h6>BAG</h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Name: <text>".$_SESSION['sessionCharacterWeapon'][$i]->Name."</text></h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Category: <text>".$_SESSION['sessionCharacterWeapon'][$i]->Category."</text></h6>
              </li>
              <li class='list-group-item justify-content-between'><h6>Damage: <text>".$_SESSION['sessionCharacterWeapon'][$i]->Damage_Dice." ".$_SESSION['sessionCharacterWeapon'][$i]->Damage_Type."</text></h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Properties: <text>".$_SESSION['sessionCharacterWeapon'][$i]->Properties."</text></h6>
              </li>
            </div>
          </div>

          ";




          echo "
          <!-- SPELL TABS -->
          <div class='row no-gutters tab-pane fade col-9' style='position:absolute; top:0px; right:0px;' id='Spells".$i."' role='tabpanel' aria-labelledby='Character".$i."'>
            <div class='col-12 row no-gutters' style='position: relative; top: 0px;'>
              </li>
              ";
              for ($n=0 ; $n < sizeof($_SESSION['sessionCharacterSpellsKnown'][$i]) ; $n++)
              {
                echo "
                <h6 class='list-group-item col-2 pl-2'><i class='fas fa-magic'></i> <text>".$_SESSION['sessionCharacterSpellsKnown'][$i][$n]->name."</text></h6>
                ";
              }

              echo "
            </div>
          </div>

          </div>";// End character specific content (the hidden tab content)
        }
      echo "
    </div>
    ";
  }
  else
  {
    echo "
    </div>
    <div class='col-9'></div>"; // Closes col 3 div and fills rest of the row
  }
  echo
  "
</div>"; // close row
?>
