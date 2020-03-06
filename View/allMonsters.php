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
<title>Dungeons - ALL Spells</title>
<body>
  <br>
  <?php

  if($monstersArray->count > 0)
  {
    for ($i=0 ; $i < sizeof($monstersArray->results) ; $i++)
    {
      echo "<div class='container'>";
      echo "<ul class='list-group'>

              <li class='list-group-item d-flex justify-content-between align-items-center'>Name: <text>'.$monstersArray->results[$i]->name.'</text>
                <h6 class='card-text'>".$monsterArray->results[$i]->size." ".$monsterArray->results[$i]->type."<span class='float-right badge badge-warning badge-pill'>".$monsterArray->results[$i]->alignment."</span></h6>
              </li>

              <li class='list-group-item d-flex justify-content-between align-items-center'>Components: <text>'.$monstersArray->results[$i]->components.'</text>
              </li>

              <li class='list-group-item d-flex justify-content-between align-items-center'>Material: <text>'.$monstersArray->results[$i]->material.'</text>
              </li>

              <li class='list-group-item d-flex justify-content-between align-items-center'>Casting Time: <text>'.$monstersArray->results[$i]->casting_time.'</text>
              </li>

              <li class='list-group-item d-flex justify-content-between align-items-center'>Range: <text>'.$monstersArray->results[$i]->range.'</text>
              </li>

              <li class='list-group-item d-flex justify-content-between align-items-center'><text>'.nl2br($monstersArray->results[$i]->desc).'</text>
              </li>

              <li class='list-group-item d-flex justify-content-between align-items-center'><text>'.nl2br($monstersArray->results[$i]->higher_level).'</text>
              </li>
            </ul>
            <hr>
            ";
      echo "</div>";
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

</div><!-- end of container-->
    <?php include '../Controller/bootstrapScript.php'; ?>
</body>
</html>
