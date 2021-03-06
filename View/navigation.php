<?php
/*
    Description: Dungeons Navigation bar..

    Author: David McRae
*/
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a href="index.php"><img src="images/Dungeons.png"></a>


<div class="" id="navbarSupportedContent">

    <ul class="navbar-nav">

        <li class="nav-item dropdown active">

            <?php
                if(isset($_SESSION['userid']) && isset($_SESSION['username']))
                {
                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'</a>';
                }
                else
                {
                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>';
                }
            ?>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php
                if(isset($_SESSION['userid']) && isset($_SESSION['username']))
                {
                  // logged in users can see this part
                  echo '<a class="dropdown-item" href="index.php">Home</a>';
                  echo '<a class="dropdown-item" href="screen.php">DM Screen</a>';
                  echo '<div class="dropdown-divider"></div>';  // divider between menu items
                  echo '<a class="dropdown-item" href="play.php">Select Character</a>';
                  echo '<div class="dropdown-divider"></div>';  // divider between menu items
                  echo '<a class="dropdown-item" href="allSpells.php">Spells</a>';
                  echo '<a class="dropdown-item" href="allMonsters.php">Monsters</a>';
                  echo '<div class="dropdown-divider"></div>';
                  echo '<a class="dropdown-item" href="RuleReference.php">Rules Reference</a>';
                  echo '<div class="dropdown-divider"></div>';  // divider between menu items
                  echo '<a class="dropdown-item" href="../Controller/logout.php">Logout</a>';
                }
                else
                {
                  echo '<a class="dropdown-item" href="userLogin.php">Login</a>';
                  echo '<div class="dropdown-divider"></div>';  // divider between menu items
                  echo '<a class="dropdown-item" href="userRegister.php">Register</a>';
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
        <div class='form-group input-group w-100 p-0'>
          <div class='input-group-prepend'>
            <span class='input-group-text' id='inputGroupPrepend'>D20</span>
          </div>
          <input class='input-group-text' type="number" name="dice20">
        </div>
        <button onclick='roll()' type='button'>Roll</button>
      </form>
      <h6 id='RollResult'></h6>
    </div>

    <div class='float-right' id="openDice">
      <a class="btn float-right" onclick="openNav()"><img class ='float-right' src="images/D20_100.png"></a>
    </div>
</nav>
