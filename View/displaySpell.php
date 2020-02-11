<?php

echo "<div class='mt-2 row-flex row no-gutters border border-warning rounded'>";

  echo "
  <div class='col-3 list-group no-gutters'>

    <form action='../Controller/getSpellByName.php' method='POST' class='mb-0 mr-0 border border-warning rounded'>
    <div class='input-group input-group-sm'>
      <input type='text' class='form-control' placeholder='Search by spell name' aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='spellName' name='spellName'>
      <div class='input-group-append'>
        <button name='getSpellByName' type='submit' class='btn btn-outline-warning'>Search</button>
      </div>
    </div>
  </form>
  ";

if(isset($_SESSION['lastSpell']))
{
  if($_SESSION['lastSpell']->level_int > 0)
  {
    $level = "LEVEL: ".$_SESSION['lastSpell']->level_int;
  }
  else
  {
    $level = "CANTRIP";
  }
    echo "
      <div class='card cave h-100'>
        <div class='card-body'>
          <h5 class='card-title'>".$_SESSION['lastSpell']->name."</h5>
          <h6 class='card-text'>".$_SESSION['lastSpell']->school." ".$_SESSION['lastSpell']->level."<span class='float-right badge badge-warning badge-pill'>".$level."</span></h6>
        </div>
        <ul class='list-group list-group-flush'>

        <div class='row list-group-item no-gutters d-inline'>
          <h6>Casting Time: <text>".$_SESSION['lastSpell']->casting_time."</text></h6>
          <h6 class='float-right'>Concentration: <text>".$_SESSION['lastSpell']->concentration."</text></h6>
        </div>
        <div class='row list-group-item no-gutters d-inline'>
          <h6>Range: <text>".$_SESSION['lastSpell']->range."</text></h6>
          <h6 class='float-right'>Duration: <text>".$_SESSION['lastSpell']->duration."</text></h6>
        </div>
        <div class='row list-group-item no-gutters d-inline'>
          <h6>Ritual: <text>".$_SESSION['lastSpell']->ritual."</text></h6>
          <h6 class='float-right'>Components: <text>".$_SESSION['lastSpell']->components."</text></h6>
        </div>
        <div class='row list-group-item no-gutters d-inline'>
          <h6>Class: <text>".$_SESSION['lastSpell']->dnd_class."</text></h6>
        </div>
        ";
        if($_SESSION['lastSpell']->archetype != "")
        {
          $string = str_replace('<br/>', ', ', $_SESSION['lastSpell']->archetype);
          echo"
          <div class='row list-group-item no-gutters d-inline'>
            <h6>Archetype: <text>".$string."</text></h6>
          </div>
          ";
        }
        echo"
        </ul>
      </div>
    </div>

    <div class='col-9 list-group h-100'>

      <li class='list-group-item d-flex justify-content-between align-items-center'><text>".nl2br($_SESSION['lastSpell']->desc)."</text>
      </li>

      <li class='list-group-item d-flex justify-content-between align-items-center'><text>".nl2br($_SESSION['lastSpell']->higher_level)."</text>
      </li>
      ";
      if($_SESSION['lastSpell']->material == "")
      {
        $_SESSION['lastSpell']->material = "N/A";
      }
      echo"
        <div class='row list-group-item no-gutters d-inline'>
          <h6>Material: <text>".$_SESSION['lastSpell']->material."</text></h6>
        </div>

    </div>
    ";
  }
  else
  {
    echo "</div>"; // close the div after search bar.
  }
echo "</div>"; // close row
?>
