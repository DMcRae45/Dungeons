<?php
if(isset($_GET['characterError']))
{
  $characterError = $_GET['characterError'];
  echo $characterError;
}

echo "<div class='mt-2 row-flex row no-gutters border border-warning rounded'>";

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

  if(isset($_SESSION['sessionCharacter']))
  {
    echo "
    <nav>
      <div class='nav nav-tabs' id='characterTab' role='tablist'>
        ";
          for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
          {
            echo "
            <a class='nav-item nav-link' id='characterTab".$i."' data-toggle='tab' href='#Character".$i."' role='tab' aria-controls='Character".$i."' aria-selected='true'>".$_SESSION['sessionCharacter'][$i]->Name."</a>
            ";
          }
        echo "
      </div>
    </nav>
    ";

    echo "
    <div class='tab-content' id='nav-tabContent'>
      ";
        for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
        {
          echo "
          <div class='tab-pane fade' id='Character".$i."' role='tabpanel' aria-labelledby='Character".$i."'>

            <div class='card cave h-100'>
              <div class='card-body'>
                <h5 class='card-title'>".$_SESSION['sessionCharacter'][$i]->Name."</h5>
                <form action='../Controller/removeCharacterObject.php' method='POST'>
                  <input type='hidden' id='index' name='index' value='".$i."'>
                  <button name='removeCharacterObject' type='submit' style='position: absolute; top: 5px; right: 5px;' class='btn btn-outline-warning mt-0 mr-0'>X</button>
                </form>
                <h6 <span class='float-right badge badge-warning badge-pill'>".$_SESSION['sessionCharacter'][$i]->Alignment."</span></h6>
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

                <div class='row no-gutters h-100'>
                  <div class='col-2 text-center bg-custom'>
                    <h6>STR: </br><text>".$_SESSION['sessionCharacter'][$i]->Strength."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom'>
                    <h6>INT: </br><text>".$_SESSION['sessionCharacter'][$i]->Intelligence."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom'>
                    <h6>CON: </br><text>".$_SESSION['sessionCharacter'][$i]->Constitution."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom'>
                    <h6>WIS: </br><text>".$_SESSION['sessionCharacter'][$i]->Wisdom."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom'>
                    <h6>DEX: </br><text>".$_SESSION['sessionCharacter'][$i]->Dexterity."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom'>
                    <h6>CHA: </br><text>".$_SESSION['sessionCharacter'][$i]->Charisma."</text></h6>
                  </div>
                </div>

                <div class='list-group-item'>
                  <div class='row no-gutters justify-content-around'>
                    <h6>Proficiencies: <text>".$_SESSION['sessionCharacter'][$i]->Proficiencies."</text></h6>
                  </div>
                </div>

              </ul>
            </div>
          </div>
          ";
        }
      echo "
    </div>
    ";
  }

  echo
  "</div>
</div>"; // close row
?>
