<?php
echo "<div class='mt-2 row-flex row no-gutters border border-warning rounded'>";

  echo "<div class='col-3 list-group no-gutters'>
    <form action='../Controller/getCharacters.php' method='POST' class='mb-0 mr-0 border border-warning rounded'>
      <div class='input-group-append'>
        <button name='getCharacters' type='submit' class='btn btn-outline-warning'>Search</button>
      </div>
    </form>";

  if(isset($_SESSION['sessionCharacter']))
  {
    echo "
    <div class='card cave h-100'>
      <div class='card-body'>
        <h5 class='card-title'>".$_SESSION['sessionCharacter'][0]->Name."</h5>
        <h6 <span class='float-right badge badge-warning badge-pill'>".$_SESSION['sessionCharacter'][0]->Alignment."</span></h6>
      </div>
      <ul class='list-group list-group-flush'>
        <div class='row list-group-item no-gutters d-inline'>
          <div class='row no-gutters'>
            <div class='col-6 text-center'>
              <h4>HP: <text>".$_SESSION['sessionCharacter'][0]->HP."</text></h4>
            </div>
            <div class='col-6 text-center'>
              <h4>AC: <text>".$_SESSION['sessionCharacter'][0]->AC."</text></h4>
            </div>
          </div>
        </div>

        <div class='row no-gutters h-100'>
          <div class='col-2 text-center bg-custom'>
            <h6>STR: </br><text>".$_SESSION['sessionCharacter'][0]->Strength."</text></h6>
          </div>
          <div class='col-2 text-center bg-custom'>
            <h6>INT: </br><text>".$_SESSION['sessionCharacter'][0]->Intelligence."</text></h6>
          </div>
          <div class='col-2 text-center bg-custom'>
            <h6>CON: </br><text>".$_SESSION['sessionCharacter'][0]->Constitution."</text></h6>
          </div>
          <div class='col-2 text-center bg-custom'>
            <h6>WIS: </br><text>".$_SESSION['sessionCharacter'][0]->Wisdom."</text></h6>
          </div>
          <div class='col-2 text-center bg-custom'>
            <h6>DEX: </br><text>".$_SESSION['sessionCharacter'][0]->Dexterity."</text></h6>
          </div>
          <div class='col-2 text-center bg-custom'>
            <h6>CHA: </br><text>".$_SESSION['sessionCharacter'][0]->Charisma."</text></h6>
          </div>
        </div>

        <div class='list-group-item'>
        <div class='row no-gutters justify-content-around'>

        <h6>Acrobatics: <text>".$_SESSION['sessionCharacter'][0]->Proficiencies."</text></h6>


        ";


        echo "
      </ul>
    </div>
    ";
  }

  echo
  "</div>
</div>"; // close row
?>
