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
        include '../Controller/getAllSpells.php' ;
    ?>
<!-- </head> -->
<title>Dungeons - ALL Spells</title>
<body>
  <br>
  <?php

  if($spellsArray->count > 0)
  {
    for ($i=0 ; $i < sizeof($spellsArray->results) ; $i++)
    {

      if($spellsArray->results[$i]->level_int > 0)
      {
        $level = "LEVEL: ".$spellsArray->results[$i]->level_int;
      }
      else
      {
        $level = "CANTRIP";
      }

      echo '<div class="container">';
      echo '<ul class="list-group">

              <li class="list-group-item d-flex justify-content-between align-items-center">Name: <text>'.$spellsArray->results[$i]->name.'</text>
                <span class="badge badge-primary badge-pill">'.$level.'</span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">Components: <text>'.$spellsArray->results[$i]->components.'</text>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">Material: <text>'.$spellsArray->results[$i]->material.'</text>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">Casting Time: <text>'.$spellsArray->results[$i]->casting_time.'</text>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">Range: <text>'.$spellsArray->results[$i]->range.'</text>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center"><text>'.nl2br($spellsArray->results[$i]->desc).'</text>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center"><text>'.nl2br($spellsArray->results[$i]->higher_level).'</text>
              </li>
            </ul>
            <hr>
            ';
      echo '</div>';
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
