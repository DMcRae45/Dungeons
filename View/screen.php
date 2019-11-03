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
    // include the api file here. include....
    include 'header.php';
?>
<!-- </head> -->
<title>Dungeons - Screen</title>
<?php

// if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
//    $URL = "https";
// else
//    $URL = "http";
//
// // Here append the common URL characters.
// $URL .= "://";
//
// // Append the host(domain name, ip) to the URL.
// $URL .= $_SERVER['HTTP_HOST'];
//
// // Append the requested resource location to the URL
// $URL .= $_SERVER['REQUEST_URI'];
//
// // Print the link

if(!isset($_POST['references']))
{
 //header("location: ../View/screen.php?characterReferenced=Stats");
 $_POST['references'] = True;
 $_POST['characterReferenced'] = "Stats";
 $_POST['monsterReferenced'] = "Stats";
}


echo "<div class='container'>"; // container open
  echo "<div class=' mt-4 row'>"; // open row

    echo "
      <div class='border col-md-6'>
      Character:
        <select>
          <option class='dropdown-item' value='Stats'>Stats</option>
          <option class='dropdown-item' value='Equipment'>Equipment</option>
          <option class='dropdown-item' value='Bag'>Bag</option>
          <option class='dropdown-item' value='Spells'>Spells</option>
        </select>

        </br>
        some stuff


      </div>
    ";

    echo "
      <div class='border col-md-6'>
      Monster:
        <select>
          <option class='dropdown-item' value='Stats'>Stats</option>
          <option class='dropdown-item' value='Equipment'>Equipment</option>
          <option class='dropdown-item' value='Bag'>Bag</option>
          <option class='dropdown-item' value='Spells'>Spells</option>
        </select>

        </br>
        some stuff


      </div>
    ";

    echo "</div>";// close row
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
