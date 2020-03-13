<?php
/*
    Description: All Spells from the API
    Author: David McRae
*/
?>
<html>
<!--<head>-->
    <?php
        include '../Model/session.php';
        include 'header.php';
        include '../Controller/getAllMonsters.php' ;
    ?>
<!-- </head> -->
<title>Dungeons - ALL Monsters</title>
<body>
  <?php
echo "<div class='container-fluid mt-2'>"; // container open
  if($monstersArray->count > 0)
  {
    for ($i=0 ; $i < sizeof($monstersArray->results) ; $i++)
    {
      echo"
      <div class='row no-gutters col-12 mt-2 border border-warning p-0'>
      <div class='card cave col-3 no-gutters'>
        <div class='card-body'>
          <h5 class='card-title'>".$monstersArray->results[$i]->name."</h5>
          <h6 class='card-text'>".$monstersArray->results[$i]->size." ".$monstersArray->results[$i]->type."<span class='float-right badge badge-warning badge-pill'>".$monstersArray->results[$i]->alignment."</span></h6>
        </div>
        <ul class='list-group list-group-flush'>
          <div class='row list-group-item no-gutters'>
            <div class='row no-gutters'>
              <div class='col-6 text-center'>
                <h4>HP: <text>".$monstersArray->results[$i]->hit_points."</text></h4>
              </div>
              <div class='col-6 text-center'>
                <h4>AC: <text>".$monstersArray->results[$i]->armor_class."</text></h4>
              </div>
            </div>
          </div>

          <div class='row no-gutters h-100'>
            <div class='col-2 text-center bg-custom pb-2'>
              <h6>STR: </br><text>".$monstersArray->results[$i]->strength."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom pb-2'>
              <h6>INT: </br><text>".$monstersArray->results[$i]->intelligence."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom pb-2'>
              <h6>CON: </br><text>".$monstersArray->results[$i]->constitution."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom pb-2'>
              <h6>WIS: </br><text>".$monstersArray->results[$i]->wisdom."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom pb-2'>
              <h6>DEX: </br><text>".$monstersArray->results[$i]->dexterity."</text></h6>
            </div>
            <div class='col-2 text-center bg-custom pb-2'>
              <h6>CHA: </br><text>".$monstersArray->results[$i]->charisma."</text></h6>
            </div>
          </div>
          ";


          if($monstersArray->results[$i]->skills != NULL)
          {
            echo "
            <div class='list-group-item'>";
              echo "
              <div class='row no-gutters justify-content-around'>";
                if(isset($monstersArray->results[$i]->skills->acrobatics))
                {
                  echo "<h6>Acrobatics: <text>+".$monstersArray->results[$i]->skills->acrobatics."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->arcana))
                {
                  echo "<h6>Arcana: <text>+".$monstersArray->results[$i]->skills->arcana."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->athletics))
                {
                  echo "<h6>Athletics: <text>+".$monstersArray->results[$i]->skills->athletics."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->deception))
                {
                  echo "<h6>Deception: <text>+".$monstersArray->results[$i]->skills->deception."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->history))
                {
                  echo "<h6>History: <text>+".$monstersArray->results[$i]->skills->history."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->insight))
                {
                  echo "<h6>Insight: <text>+".$monstersArray->results[$i]->skills->insight."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->intimidation))
                {
                  echo "<h6>Intimidation: <text>+".$monstersArray->results[$i]->skills->intimidation."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->investigation))
                {
                  echo "<h6>Investigation: <text>+".$monstersArray->results[$i]->skills->investigation."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->medicine))
                {
                  echo "<h6>Medicine: <text>+".$monstersArray->results[$i]->skills->medicine."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->nature))
                {
                  echo "<h6>Nature: <text>+".$monstersArray->results[$i]->skills->nature."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->perception))
                {
                  echo "<h6>Perception: <text>+".$monstersArray->results[$i]->skills->perception."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->performance))
                {
                  echo "<h6>Performance: <text>+".$monstersArray->results[$i]->skills->performance."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->persuasion))
                {
                  echo "<h6>Persuasion: <text>+".$monstersArray->results[$i]->skills->persuasion."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->religion))
                {
                  echo "<h6>Religion: <text>+".$monstersArray->results[$i]->skills->religion."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->sleight_of_hand))
                {
                  echo "<h6>Sleight of hand: <text>+".$monstersArray->results[$i]->skills->sleight_of_hand."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->stealth))
                {
                  echo "<h6>Stealth: <text>+".$monstersArray->results[$i]->skills->stealth."</text></h6>";
                }
                if(isset($monstersArray->results[$i]->skills->survival))
                {
                  echo "<h6>Survival: <text>+".$monstersArray->results[$i]->skills->survival."</text></h6>";
                }
              echo "
              </div>";
            }


          echo "
          <div class='row list-group-item no-gutters text-center'>
            <h6>Hit Dice: <text>".$monstersArray->results[$i]->hit_dice."</text></h6>
          </div>
          <div class='row list-group-item no-gutters'>
            <div class='row justify-content-around'>
              <h6>Speed: <text>".$monstersArray->results[$i]->speed->walk."</text>\t</h6>
              ";
              if(isset($monstersArray->results[$i]->speed->fly))
              {
                echo "<h6>Fly: <text>".$monstersArray->results[$i]->speed->fly."</text>\t</h6>";
              }
              if(isset($monstersArray->results[$i]->speed->hover))
              {
                echo "<h6>Hover: <text>".$monstersArray->results[$i]->speed->hover."</text>\t</h6>";
              }
              if(isset($monstersArray->results[$i]->speed->climb))
              {
                echo "<h6>Climb: <text>".$monstersArray->results[$i]->speed->climb."</text>\t</h6>";
              }
              if(isset($monstersArray->results[$i]->speed->burrow))
              {
                echo "<h6>Burrow: <text>".$monstersArray->results[$i]->speed->burrow."</text>\t</h6>";
              }
            echo "
            </div>
          </div>
        </ul>
      </div>"; // CLOSES CARD CAVE

      echo "
      <div class='col-9 list-group float-right' style='top: 0px;'>";

        for($n = 0; $n < sizeof($monstersArray->results[$i]->actions); $n++)
        {
          echo "
          <div class='list-group-item no-gutters'>
            <h6>Action: <text>".$monstersArray->results[$i]->actions[$n]->name."</text></h6>
            </div>
            <li class='list-group-item justify-content-between align-items-center'><text> ".nl2br($monstersArray->results[$i]->actions[$n]->desc)."</text></li>
          ";
        }
        echo "
        <div class='list-group-item'>";
          echo "
          <div class='row no-gutters justify-content-around'>";
            if($monstersArray->results[$i]->damage_vulnerabilities != "")
            {
              echo "<h6>Weak to: <text>".$monstersArray->results[$i]->damage_vulnerabilities."</text></h6>";
            }
            if($monstersArray->results[$i]->damage_resistances != "")
            {
            echo "<h6>Resistant to: <text>".$monstersArray->results[$i]->damage_resistances."</text></h6>";
            }
            if($monstersArray->results[$i]->condition_immunities != "")
            {
            echo "<h6>Immune to: <text>".$monstersArray->results[$i]->condition_immunities."</text></h6>";
            }
          echo "
          </div>
        </div>
      </div>
    </div>
    ";
    }
  }
  else
  {
    echo "No Records Found";
  }
  ?>
</div>
<!-- <footer> -->
        <?php include 'footer.php'; ?>
<!-- </footer> -->

    <?php include '../Controller/bootstrapScript.php'; ?>
</body>
</html>
