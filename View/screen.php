<?php
/*
    Description: Dungeons DM Screen.
    Author: David McRae
*/

?>

<html>
<!-- <head> -->
<?php
    include '../Model/session.php';
    include 'header.php';
    include '../Controller/getSpellByName.php';


  if(!isset($_SESSION['characterDetails']))
  {
   //header("location: ../View/screen.php?characterReferenced=Stats");
   $_SESSION['characterDetails'] = "Stats";
   $_SESSION['monsterDetails'] = "Stats";
  }
?>
<!-- </head> -->
<title>Dungeons - Screen</title>
<?php

echo "<div class='container-fluid mt-2'>"; // container open
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// CHARACTER ROW
  echo "<div class='mt-2 row-flex row no-gutters border border-warning rounded'>"; // open row

    echo "<div class='col-3 list-group no-gutters'>

      <ul class='border nav nav-tabs'>
        <li class='dropdown'>
          <a class='dropdown-toggle badge badge-warning badge-pill' data-toggle='dropdown' href='#'>Character 1<span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='#'>Character 2</a></li>
            <li><a href='#'>Character 3</a></li>
            <li><a href='#'>Character 4</a></li>
          </ul>
        </li>
        <li class='ml-2 dropdown'>
          <a class='dropdown-toggle badge badge-warning badge-pill' data-toggle='dropdown' href='#'>".$_SESSION['characterDetails']."<span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='../Controller/setCharacterDetails.php?details=Stats'>Stats</a></li>
            <li><a href='../Controller/setCharacterDetails.php?details=Equipment'>Equipment</a></li>
            <li><a href='../Controller/setCharacterDetails.php?details=Bag'>Bag</a></li>
            <li><a href='../Controller/setCharacterDetails.php?details=Spells'>Spells</a></li>
          </ul>
        </li>
      </ul>
      ";


      //if(isset($_SESSION['characterName']))
      //{
      //$character[] = $_SESSION['characterName'];

      echo "
      <div class='card cave'>
        <div class='card-body'>
          <h5 class='card-title'>".$_SESSION['lastSpell']->name."</h5>
          <p class='card-text'>".$_SESSION['lastSpell']->school." ".$_SESSION['lastSpell']->level."</p>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Casting Time: <text>".$_SESSION['lastSpell']->casting_time."</text></li>
          <li class='list-group-item'>Range: <text>".$_SESSION['lastSpell']->range."</text></li>
          <li class='list-group-item'>Components: <text>".$_SESSION['lastSpell']->components."</text></li>
          <li class='list-group-item'>Duration: <text>".$_SESSION['lastSpell']->duration."</text></li>
        </ul>
      </div>
    </div>

    <div class='col-9 list-group h-100'>
      <li class='list-group-item d-flex justify-content-between align-items-center'>Material: <text>".$_SESSION['lastSpell']->material."</text>
      </li>

      <li class='list-group-item d-flex justify-content-between align-items-center'><text>".nl2br($_SESSION['lastSpell']->desc)."</text>
      </li>

      <li class='list-group-item d-flex justify-content-between align-items-center'><text>".nl2br($_SESSION['lastSpell']->higher_level)."</text>
      </li>
    </div>
    ";
  echo "</div>";// close row
  ////////////////////////////////////////////////////////////////   SPELLS ROW   ////////////////////////////////////////////////////////////////
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

  if($_SESSION['lastSpell']->name != NULL)
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
    else {
      echo "</div>"; // close the div after search bar.
    }
  echo "</div>"; // close row

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////   MONSTERS ROW   ////////////////////////////////////////////////////////////////
  echo "<div class='mt-2 row-flex row no-gutters border border-warning rounded'>";

  echo "
  <div class='col-3 list-group no-gutters'>

    <form action='../Controller/getMonsterByName.php' method='POST' class='mb-0 mr-0 border border-warning rounded'>
    <div class='input-group input-group-sm'>
      <input type='text' class='form-control' placeholder='Search by monster name' aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='monsterName' name='monsterName'>
      <div class='input-group-append'>
        <button name='getMonsterByName' type='submit' class='btn btn-outline-warning'>Search</button>
      </div>
    </div>
  </form>
  ";

  echo "
      <div class='card cave h-100'>
        <div class='card-body'>
          <h5 class='card-title'>".$_SESSION['lastMonster']->name."</h5>
          <h6 class='card-text'>".$_SESSION['lastMonster']->size." ".$_SESSION['lastMonster']->type."<span class='float-right badge badge-warning badge-pill'>".$_SESSION['lastMonster']->alignment."</span></h6>
        </div>
        <ul class='list-group list-group-flush'>
          <div class='row list-group-item no-gutters d-inline'>
            <div class='row no-gutters'>
              <div class='col-6 text-center'>
                <h4>HP: <text>".$_SESSION['lastMonster']->hit_points."</text></h4>
              </div>
              <div class='col-6 text-center'>
                <h4>AC: <text>".$_SESSION['lastMonster']->armor_class."</text></h4>
              </div>
            </div>
          </div>

          <div class='row no-gutters h-100'>
            <div class='col-2 text-center bg-custom'>
              <h6>STR: </br><text>".$_SESSION['lastMonster']->strength."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom'>
              <h6>INT: </br><text>".$_SESSION['lastMonster']->intelligence."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom'>
              <h6>CON: </br><text>".$_SESSION['lastMonster']->constitution."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom'>
              <h6>WIS: </br><text>".$_SESSION['lastMonster']->wisdom."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom'>
              <h6>DEX: </br><text>".$_SESSION['lastMonster']->dexterity."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom'>
              <h6>CHA: </br><text>".$_SESSION['lastMonster']->charisma."</text></h6>
            </div>
          </div>
          ";


          if($_SESSION['lastMonster']->skills != NULL)
          {
            echo "<div class='list-group-item'>";
            echo "<div class='row no-gutters justify-content-around'>";
            if(isset($_SESSION['lastMonster']->skills->acrobatics))
            {
              echo "<h6>Acrobatics: <text>+".$_SESSION['lastMonster']->skills->acrobatics."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->arcana))
            {
              echo "<h6>Arcana: <text>+".$_SESSION['lastMonster']->skills->arcana."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->athletics))
            {
              echo "<h6>Athletics: <text>+".$_SESSION['lastMonster']->skills->athletics."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->deception))
            {
              echo "<h6>Deception: <text>+".$_SESSION['lastMonster']->skills->deception."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->history))
            {
              echo "<h6>History: <text>+".$_SESSION['lastMonster']->skills->history."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->insight))
            {
              echo "<h6>Insight: <text>+".$_SESSION['lastMonster']->skills->insight."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->intimidation))
            {
              echo "<h6>Intimidation: <text>+".$_SESSION['lastMonster']->skills->intimidation."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->investigation))
            {
              echo "<h6>Investigation: <text>+".$_SESSION['lastMonster']->skills->investigation."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->medicine))
            {
              echo "<h6>Medicine: <text>+".$_SESSION['lastMonster']->skills->medicine."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->nature))
            {
              echo "<h6>Nature: <text>+".$_SESSION['lastMonster']->skills->nature."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->perception))
            {
              echo "<h6>Perception: <text>+".$_SESSION['lastMonster']->skills->perception."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->performance))
            {
              echo "<h6>Performance: <text>+".$_SESSION['lastMonster']->skills->performance."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->persuasion))
            {
              echo "<h6>Persuasion: <text>+".$_SESSION['lastMonster']->skills->persuasion."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->religion))
            {
              echo "<h6>Religion: <text>+".$_SESSION['lastMonster']->skills->religion."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->sleight_of_hand))
            {
              echo "<h6>Sleight of hand: <text>+".$_SESSION['lastMonster']->skills->sleight_of_hand."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->stealth))
            {
              echo "<h6>Stealth: <text>+".$_SESSION['lastMonster']->skills->stealth."</text></h6>";
            }
            if(isset($_SESSION['lastMonster']->skills->survival))
            {
              echo "<h6>Survival: <text>+".$_SESSION['lastMonster']->skills->survival."</text></h6>";
            }
            echo "
              </div>
            </div>";
          }

          echo "
          <div class='row list-group-item no-gutters d-inline text-center'>
            <h6>Hit Dice: <text>".$_SESSION['lastMonster']->hit_dice."</text></h6>
          </div>
          <div class='row list-group-item no-gutters d-inline'>
            <h6>Speed: <text>".$_SESSION['lastMonster']->speed->walk."</text>\t</h6>

            ";
            if(isset($_SESSION['lastMonster']->speed->fly))
            {
              echo "<h6>Fly: <text>".$_SESSION['lastMonster']->speed->fly."</text>\t</h6>";
            }
            if(isset($_SESSION['lastMonster']->speed->hover))
            {
              echo "<h6>Hover: <text>".$_SESSION['lastMonster']->speed->hover."</text>\t</h6>";
            }
            if(isset($_SESSION['lastMonster']->speed->climb))
            {
              echo "<h6>Climb: <text>".$_SESSION['lastMonster']->speed->climb."</text>\t</h6>";
            }
            if(isset($_SESSION['lastMonster']->speed->burrow))
            {
              echo "<h6>Burrow: <text>".$_SESSION['lastMonster']->speed->burrow."</text>\t</h6>";
            }
          echo "
          </div>
        </ul>
      </div>
    ";



    // if($_SESSION['lastMonster']->skills != NULL)
    // {
    //   echo "Skills: </br>";
    //   echo "Stealth: ".$_SESSION['lastMonster']->skills->stealth."</br>";
    //   echo "Survival: ".$_SESSION['lastMonster']->skills->Survival."</br>";
    // }

echo "</div>"; // close row

echo "<div class='col-9 list-group h-100'>";

for($i = 0; $i < sizeof($_SESSION['lastMonster']->actions); $i++)
{
  echo "
  <div class='list-group-item no-gutters d-inline'>
    <h6>Action: <text>".$_SESSION['lastMonster']->actions[$i]->name."</text></h6>

    <li class='list-group-item d-flex justify-content-between align-items-center'><text> ".nl2br($_SESSION['lastMonster']->actions[$i]->desc)."</text>
    </li>
  </div>
  ";
}

echo "</div>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "</div>"; // container close


?>








<!-- <footer> -->
<?php
  include 'footer.php';
?>
<!-- </footer> -->

<!-- JavaScript files -->
<?php
    include '../Controller/bootstrapScript.php';
    include '../Controller/cookieConsent.php';
?>
</body>
</html>
