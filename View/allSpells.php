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
      echo "<div class='col-md-4'>";
      echo '<div class="card" style="width: 20rem;">'; // Open card div
      echo '<h5 class="card-title">'.$spellsArray->results[$i]->name.'</h5>'; // card titleecho '<div class="card-body">';// open card body
      echo '<h5 class="card-title">'.$spellsArray->results[$i]->range.'</h5>'; // card title
      echo '</div>';// close card body
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
