<?php
    include '../Model/session.php';
    include 'header.php';

if(isset($_GET['characterError']))
{
  $characterError = $_GET['characterError'];
  echo $characterError;
}

var_dump($_SESSION['sessionCharacterSpellsKnown']);

echo "<div class='mt-2 row-flex row no-gutters border border-warning rounded'>"; // CHARACTER ROW

  // CHARACTER SEARCH BAR
  echo "
  <div class='col-3 list-group no-gutters'>

    <form action='../Controller/getSessionCharacters.php' method='POST' class='mb-0 mr-0 border border-warning rounded'>
      <div class='input-group input-group-sm'>
        <input type='text' class='form-control' placeholder='Character Code' aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='characterCode' name='characterCode'>
        <div class='input-group-append'>
          <button name='getCharacterByCode' type='submit' class='btn btn-outline-warning'>Add</button>
        </div>
      </div>
    </form>
    ";

    //CHARACTER TABS
    if(isset($_SESSION['sessionCharacter']))
    {
      echo "
      <nav>
        <div class='nav nav-tabs' id='characterTab' role='tablist'>
          ";
          for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
          {
            if($i == 0)
            {
              echo "
              <li class='active'>
              <a class='nav-item nav-link' id='characterTab".$i."' data-toggle='tab' href='#Character".$i."' role='tab' aria-controls='Character".$i."' aria-selected='true'>".$_SESSION['sessionCharacter'][$i]->Name."</a>
              </li>
              ";
            }
            else
            {
              echo "
              <li>
              <a class='nav-item nav-link' id='characterTab".$i."' data-toggle='tab' href='#Character".$i."' role='tab' aria-controls='Character".$i."' aria-selected='true'>".$_SESSION['sessionCharacter'][$i]->Name."</a>
              </li>
              ";
            }
          }
          echo "
        </div>
      </nav>
  </div>";

  // CHARACTER EQUIPMENT TABS
  echo "
  <div class='row tab-content no-gutters col-9' id='nav-tabContent'>
    <nav>
      <div class='nav nav-tabs' id='equipmentTab' role='tablist'>
        ";
          for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
          {
            echo "
            <a class='nav-item nav-link' id='equipmentTab".$i."' data-toggle='tab' href='#Equipment".$i."' role='tab' aria-controls='Equipment".$i."' aria-selected='false'>Equipped</a>
            <a class='nav-item nav-link' id='equipmentTab".$i."' data-toggle='tab' href='#Spells".$i."' role='tab' aria-controls='Equipment".$i."' aria-selected='false'>Spells</a>
            ";
          }
        echo "
      </div>
    </nav>
  </div>

    ";

    echo "
    <div class='row tab-content no-gutters col-12' id='nav-tabContent'>
      ";
        for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
        {
          echo "
          <div class='row no-gutters tab-pane fade col-12' id='Character".$i."' role='tabpanel' aria-labelledby='Character".$i."'>

            <div class='card cave h-100 col-3'>
              <div class='card-body'>
                <h5 class='card-title'>".$_SESSION['sessionCharacter'][$i]->Name."</h5>
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
                      <h4>HP: <text>".$_SESSION['sessionCharacter'][$i]->HP."</text></h4>
                    </div>
                    <div class='col-6 text-center'>
                      <h4>AC: <text>".$_SESSION['sessionCharacter'][$i]->AC."</text></h4>
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
                    <h6>languages: <text>".$_SESSION['sessionCharacter'][$i]->Language."</text></h6>
                  </div>
                </div>

              </ul>
            </div>

          <!-- EQUIPMENT TABS -->
          <div class='row no-gutters tab-pane fade col-9' style='position:absolute; right:0px;' id='Equipment".$i."' role='tabpanel' aria-labelledby='Character".$i."'>
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

            <div class='col-2 list-group' style='position: relative; top: 0px;'>
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
          </div>

          <!-- SPELL TABS -->
          <div class='row no-gutters tab-pane fade col-9' style='position:absolute; right:0px;' id='Spells".$i."' role='tabpanel' aria-labelledby='Character".$i."'>
            <div class='col-2 list-group' style='position: relative; top: 0px;'>
              <li class='list-group-item d-flex'><h6>Armour</h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Name: <text>".$_SESSION['sessionCharacterSpellsKnown'][$i]->Name."</text></h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>AC: <text>".$_SESSION['sessionCharacterArmour'][$i]->AC."</text></h6>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Stealth: <text>".$_SESSION['sessionCharacterArmour'][$i]->Stealth."</text></h6>
              </li>
            </div>

            <div class='col-2 list-group' style='position: relative; top: 0px;'>
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
          </div>

          </div>";// End character specific content (the hidden stuff)
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
</div>
</div>
</div>
</div>"; // close row

    include '../Controller/bootstrapScript.php';
    include '../Controller/cookieConsent.php';
?>
</body>
</html>
<script>
$("nav.nav-tabs a").click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
</script>
