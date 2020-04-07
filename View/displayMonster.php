<?php
if(isset($_GET['monsterError']))
{
  $monsterError = $_GET['monsterError'];
  echo $monsterError;
}
$monsterHealth = array();

echo "
<div class='mt-2 row-flex row no-gutters border border-warning rounded'>";
  echo "
  <div class='row col-3 list-group no-gutters'>

  <form action='../Controller/getMonsterByName.php' method='POST' class='mb-0 mr-0 border border-warning rounded'>
    <div class='input-group input-group-sm'>
      <input type='text' class='form-control' placeholder='Search by monster name' aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='monsterName' name='monsterName'>
      <div class='input-group-append'>
        <button name='getMonsterByName' type='submit' class='btn btn-outline-warning'><i class='fas fa-plus'></i></button>
      </div>
    </div>
  </form>";

  if(isset($_SESSION['lastMonster']))
  {
    for($i = 0; $i < sizeof($_SESSION['lastMonster']); $i++)
    {
      $monsterHealth[$i] = $_SESSION['lastMonster'][$i]->hit_points;
    }

    echo "
    <nav>
      <div class='nav nav-tabs' id='monsterTab' role='tablist'>
        ";
          for($i = 0; $i < sizeof($_SESSION['lastMonster']); $i++)
          {
            echo "
            <a class='nav-item nav-link' id='monsterTab".$i."' data-toggle='tab' href='#monster".$i."' role='tab' aria-controls='monster".$i."' aria-selected='true'>".$_SESSION['lastMonster'][$i]->name."</a>
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

        for($i = 0; $i < sizeof($_SESSION['lastMonster']); $i++)
        {
          echo "
          <div class='row no-gutters tab-pane fade col-12' id='monster".$i."' role='tabpanel' aria-labelledby='monster".$i."'>

            <div class='card cave col-3'>
              <div class='card-body'>
                <h5 class='card-title'>".$_SESSION['lastMonster'][$i]->name."</h5>
                <button onclick='minimizeMonster($i)' style='position: absolute; top: 5px; right: 50px;' class='btn btn-outline-warning mt-0 mr-0'><i class='far fa-eye-slash'></i></button>
                <form action='../Controller/removeMonsterObject.php' method='POST'>
                  <input type='hidden' id='index' name='index' value='".$i."'>
                  <button name='removeMonsterObject' type='submit' style='position: absolute; top: 5px; right: 5px;' class='btn btn-outline-warning mt-0 mr-0'>X</button>
                </form>

                <h6 class='card-text'>".$_SESSION['lastMonster'][$i]->size." ".$_SESSION['lastMonster'][$i]->type."<span class='float-right badge badge-warning badge-pill'>".$_SESSION['lastMonster'][$i]->alignment."</span></h6>
              </div>
              <ul class='list-group list-group-flush'>
                <div class='row list-group-item no-gutters'>
                  <div class='row no-gutters'>
                    <div class='col-6 text-center'>

                      <button onclick='removeMonsterHealth(".$i.")' class='btn btn-outline-warning mt-0'>-</button>
                      <h4>HP: <text id='monsterHealthDisplay".$i."'>".$monsterHealth[$i]."</text></h4>
                      <button onclick='addMonsterHealth(".$i.")' class='btn btn-outline-warning mt-0'>+</button>

                    </div>
                    <div class='col-6 text-center'>
                      <h4>AC: <text>".$_SESSION['lastMonster'][$i]->armor_class."</text></h4>
                    </div>
                  </div>
                </div>

                <div class='row no-gutters h-100'>
                  <div class='col-2 text-center bg-custom pb-2'>
                    <h6>STR: </br><text>".$_SESSION['lastMonster'][$i]->strength."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom pb-2'>
                    <h6>INT: </br><text>".$_SESSION['lastMonster'][$i]->intelligence."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom pb-2'>
                    <h6>CON: </br><text>".$_SESSION['lastMonster'][$i]->constitution."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom pb-2'>
                    <h6>WIS: </br><text>".$_SESSION['lastMonster'][$i]->wisdom."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom pb-2'>
                    <h6>DEX: </br><text>".$_SESSION['lastMonster'][$i]->dexterity."</text></h6>
                  </div>
                  <div class='col-2 text-center bg-custom pb-2'>
                    <h6>CHA: </br><text>".$_SESSION['lastMonster'][$i]->charisma."</text></h6>
                  </div>
                </div>
                ";


                if($_SESSION['lastMonster'][$i]->skills != NULL)
                {
                  echo "
                  <div class='list-group-item'>";
                    echo "
                    <div class='row no-gutters justify-content-around'>";
                      if(isset($_SESSION['lastMonster'][$i]->skills->acrobatics))
                      {
                        echo "<h6>Acrobatics: <text>+".$_SESSION['lastMonster'][$i]->skills->acrobatics."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->arcana))
                      {
                        echo "<h6>Arcana: <text>+".$_SESSION['lastMonster'][$i]->skills->arcana."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->athletics))
                      {
                        echo "<h6>Athletics: <text>+".$_SESSION['lastMonster'][$i]->skills->athletics."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->deception))
                      {
                        echo "<h6>Deception: <text>+".$_SESSION['lastMonster'][$i]->skills->deception."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->history))
                      {
                        echo "<h6>History: <text>+".$_SESSION['lastMonster'][$i]->skills->history."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->insight))
                      {
                        echo "<h6>Insight: <text>+".$_SESSION['lastMonster'][$i]->skills->insight."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->intimidation))
                      {
                        echo "<h6>Intimidation: <text>+".$_SESSION['lastMonster'][$i]->skills->intimidation."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->investigation))
                      {
                        echo "<h6>Investigation: <text>+".$_SESSION['lastMonster'][$i]->skills->investigation."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->medicine))
                      {
                        echo "<h6>Medicine: <text>+".$_SESSION['lastMonster'][$i]->skills->medicine."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->nature))
                      {
                        echo "<h6>Nature: <text>+".$_SESSION['lastMonster'][$i]->skills->nature."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->perception))
                      {
                        echo "<h6>Perception: <text>+".$_SESSION['lastMonster'][$i]->skills->perception."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->performance))
                      {
                        echo "<h6>Performance: <text>+".$_SESSION['lastMonster'][$i]->skills->performance."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->persuasion))
                      {
                        echo "<h6>Persuasion: <text>+".$_SESSION['lastMonster'][$i]->skills->persuasion."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->religion))
                      {
                        echo "<h6>Religion: <text>+".$_SESSION['lastMonster'][$i]->skills->religion."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->sleight_of_hand))
                      {
                        echo "<h6>Sleight of hand: <text>+".$_SESSION['lastMonster'][$i]->skills->sleight_of_hand."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->stealth))
                      {
                        echo "<h6>Stealth: <text>+".$_SESSION['lastMonster'][$i]->skills->stealth."</text></h6>";
                      }
                      if(isset($_SESSION['lastMonster'][$i]->skills->survival))
                      {
                        echo "<h6>Survival: <text>+".$_SESSION['lastMonster'][$i]->skills->survival."</text></h6>";
                      }
                    echo "
                    </div>";
                }


                echo "
                <div class='row list-group-item no-gutters text-center'>
                  <h6>Hit Dice: <text>".$_SESSION['lastMonster'][$i]->hit_dice."</text></h6>
                </div>
                <div class='row list-group-item no-gutters'>
                  <div class='row justify-content-around'>
                    <h6>Speed: <text>".$_SESSION['lastMonster'][$i]->speed->walk."</text>\t</h6>
                    ";
                    if(isset($_SESSION['lastMonster'][$i]->speed->fly))
                    {
                      echo "<h6>Fly: <text>".$_SESSION['lastMonster'][$i]->speed->fly."</text>\t</h6>";
                    }
                    if(isset($_SESSION['lastMonster'][$i]->speed->hover))
                    {
                      echo "<h6>Hover: <text>".$_SESSION['lastMonster'][$i]->speed->hover."</text>\t</h6>";
                    }
                    if(isset($_SESSION['lastMonster'][$i]->speed->climb))
                    {
                      echo "<h6>Climb: <text>".$_SESSION['lastMonster'][$i]->speed->climb."</text>\t</h6>";
                    }
                    if(isset($_SESSION['lastMonster'][$i]->speed->burrow))
                    {
                      echo "<h6>Burrow: <text>".$_SESSION['lastMonster'][$i]->speed->burrow."</text>\t</h6>";
                    }
                  echo "
                  </div>
                </div>
              </ul>
            </div>"; // CLOSES CARD CAVE

            echo "
            <div class='col-9 list-group float-right' style='position: relative; top: 0px;'>";

              for($n = 0; $n < sizeof($_SESSION['lastMonster'][$i]->actions); $n++)
              {
                echo "
                <div class='list-group-item no-gutters'>
                  <h6>Action: <text>".$_SESSION['lastMonster'][$i]->actions[$n]->name."</text></h6>
                  </div>
                  <li class='list-group-item justify-content-between align-items-center'><text> ".nl2br($_SESSION['lastMonster'][$i]->actions[$n]->desc)."</text></li>
                ";
              }
              echo "
              <div class='list-group-item'>";
                echo "
                <div class='row no-gutters justify-content-around'>";
                  if($_SESSION['lastMonster'][$i]->damage_vulnerabilities != "")
                  {
                    echo "<h6>Weak to: <text>".$_SESSION['lastMonster'][$i]->damage_vulnerabilities."</text></h6>";
                  }
                  if($_SESSION['lastMonster'][$i]->damage_resistances != "")
                  {
                  echo "<h6>Resistant to: <text>".$_SESSION['lastMonster'][$i]->damage_resistances."</text></h6>";
                  }
                  if($_SESSION['lastMonster'][$i]->condition_immunities != "")
                  {
                  echo "<h6>Immune to: <text>".$_SESSION['lastMonster'][$i]->condition_immunities."</text></h6>";
                  }
                echo "
                </div>
              </div>
          </div>
        </div>";
  }
  echo"
  </div>"; // CLOSES THE DIV HOLDING ALL OF THE HIDDEN CONTENT
}
else
{
  echo "
  </div>
  <div class='col-9'></div>"; // Closes col 3 div and fills rest of the row
}
echo "
</div>"; // CLOSES MONSTER ROW
?>
