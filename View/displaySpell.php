<?php
if(isset($_GET['spellError']))
{
  $spellError = $_GET['spellError'];
  echo $spellError;
}

echo "
<div class='mt-2 row-flex row no-gutters border border-warning rounded'>
";

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
      //Tabs for Spells previously searched
      echo "
      <nav>
        <div class='nav nav-tabs' id='spellTab' role='tablist'>
          ";
            for($i = 0; $i < sizeof($_SESSION['lastSpell']); $i++)
            {
              echo "
              <a class='nav-item nav-link' id='spellTab".$i."' data-toggle='tab' href='#spell".$i."' role='tab' aria-controls='spell".$i."' aria-selected='true'>".$_SESSION['lastSpell'][$i]->name."</a>
              ";
            }
          echo "
        </div>
      </nav>
      ";

  echo "
  </div>
  <div class='col-9'></div>"; // Closes col 3 div and fills rest of the row

      echo "
      <div class='row tab-content no-gutters col-12' id='nav-tabContent'>";

        for($i = 0; $i < sizeof($_SESSION['lastSpell']); $i++)
        {
          echo "
          <div class='row no-gutters tab-pane fade col-12' id='spell".$i."' role='tabpanel' aria-labelledby='spell".$i."'>
          ";

          if($_SESSION['lastSpell'][$i]->level_int > 0)
          {
            $level = "Level: ".$_SESSION['lastSpell'][$i]->level_int;
          }
          else
          {
            $level = "Cantrip";
          }
          echo "
          <div class='card cave col-3'>
            <div class='card-body'>
              <h5 class='card-title'>".$_SESSION['lastSpell'][$i]->name."</h5>

              <form action='../Controller/removeSpellObject.php' method='POST'>
                <input type='hidden' id='index' name='index' value='".$i."'>
                <button name='removeSpellObject' type='submit' style='position: absolute; top: 5px; right: 5px;' class='btn btn-outline-warning mt-0 mr-0'>X</button>
              </form>

              <h6 class='card-text'>".$_SESSION['lastSpell'][$i]->school." ".$_SESSION['lastSpell'][$i]->level."<span class='float-right badge badge-warning badge-pill'>".$level."</span></h6>
            </div>

            <ul class='list-group list-group-flush'>
              <div class='row list-group-item no-gutters'>
                <h6>Casting Time: <text>".$_SESSION['lastSpell'][$i]->casting_time."</text></h6>
                <h6 class='float-right'>Concentration: <text>".$_SESSION['lastSpell'][$i]->concentration."</text></h6>
              </div>
              <div class='row list-group-item no-gutters '>
                <h6>Range: <text>".$_SESSION['lastSpell'][$i]->range."</text></h6>
                <h6 class='float-right'>Duration: <text>".$_SESSION['lastSpell'][$i]->duration."</text></h6>
              </div>
              <div class='row list-group-item no-gutters '>
                <h6>Ritual: <text>".$_SESSION['lastSpell'][$i]->ritual."</text></h6>
                <h6 class='float-right'>Components: <text>".$_SESSION['lastSpell'][$i]->components."</text></h6>
              </div>
              <div class='row list-group-item no-gutters '>
                <h6>Class: <text>".$_SESSION['lastSpell'][$i]->dnd_class."</text></h6>
              </div>
              ";
              if($_SESSION['lastSpell'][$i]->archetype != "")
              {
                $string = str_replace('<br/>', ', ', $_SESSION['lastSpell'][$i]->archetype);
                echo"
                <div class='row list-group-item no-gutters '>
                  <h6>Archetype: <text>".$string."</text></h6>
                </div>
                ";
              }
            echo"
            </ul>
          </div>

          <div class='col-9 list-group float-right' style='position: relative; top: 0px;'>

            <li class='list-group-item d-flex justify-content-between align-items-center'><text>".nl2br($_SESSION['lastSpell'][$i]->desc)."</text>
            </li>

            <li class='list-group-item d-flex justify-content-between align-items-center'><text>".nl2br($_SESSION['lastSpell'][$i]->higher_level)."</text>
            </li>
            ";
            if($_SESSION['lastSpell'][$i]->material == "")
            {
              $_SESSION['lastSpell'][$i]->material = "N/A";
            }
            echo"
            <div class='row list-group-item no-gutters '>
              <h6>Material: <text>".$_SESSION['lastSpell'][$i]->material."</text></h6>
            </div>
          </div>
        </div>
        ";
      }
      echo "<div>
      </div>
    </div>";
    }
    else
    {
      echo "
      </div>
      <div class='col-9'></div>"; // Closes col 3 div and fills rest of the row
    }
    echo "
    </div>"; // close row
?>
