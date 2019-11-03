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
        include '../Controller/getSpellByName.php' ;
    ?>
<!-- </head> -->
<title>Dungeons - Get Spell By Name</title>
<body>
  <br>
  <?php
echo "
  <form action='../Controller/getSpellByName.php' method='POST' class='form-inline my-2 my-lg-0'>
  <div class='input-group input-group-sm'>
    <input type='text' class='form-control' placeholder='Search by spell name' aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='spellName' name='spellName'>
    <div class='input-group-append'>
      <button id='getSpellByName' type='submit' class='btn btn-outline-info'>Search</button>
    </div>
  </div>
</form>
";




  ?>
</div>
<!-- <footer> -->
        <?php include 'footer.php'; ?>
<!-- </footer> -->

</div><!-- end of container-->
    <?php include '../Controller/bootstrapScript.php'; ?>
</body>
</html>
