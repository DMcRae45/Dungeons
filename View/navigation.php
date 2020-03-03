<?php
/*
    Description: Dungeons Navigation bar..

    Author: David McRae
*/
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a href="index.php"><img src="images/Dungeons.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="nav-link" href="index.php">Dungeons <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown active">

            <?php
                if(!isset($_SESSION['userid']))
                {
                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>';
                }
                if(isset($_SESSION['userid']))
                {
                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'</a>';
                }
            ?>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php
                if(!isset($_SESSION['userid']))
                {
                  echo '<a class="dropdown-item" href="userLogin.php">Login</a>';
                  echo '<div class="dropdown-divider"></div>';  // divider between menu items
                  echo '<a class="dropdown-item" href="userRegister.php">Register</a>';
                }
                if(isset($_SESSION['userid']))
                {
                  // logged in users can see this part
                    echo '<a class="dropdown-item" href="screen.php">DM Screen</a>';
                    echo '<div class="dropdown-divider"></div>';  // divider between menu items
                    echo '<a class="dropdown-item" href="allSpells.php">ALL Spells</a>';

                }
            ?>
            </div>
        </li>
    </ul>
  </div>
    <!-- <a class='float-right'<img src="images/D20_100.png"></a> -->


    <div id="sidebar" class="sidebar mx-auto">
      <div class='row'>
        <a class="btn" onclick="closeNav()"><img src="images/D20_100.png"></a>
      </div>
      <a>Roll For Damage</a>
      <div class="dropdown-divider"></div>
      <form>
        <div class='form-group input-group w-100'>
          <div class='input-group-prepend'>
            <span class='input-group-text' id='inputGroupPrepend'>D4: </span>
          </div>
          <input class='input-group-text' type="number" name="dice4">
        </div>

      </form>
    </div>

    <div id="openDice">
      <a class="btn" onclick="openNav()"><img src="images/D20_100.png"></a>
    </div>



</nav>
