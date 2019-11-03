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
  <a href="allSpells.php">All Spells</a>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="nav-link" href="index.php">Dungeons <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown active">

            <?php
                if(!isset($_SESSION['LoggedIn']))
                {
                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>';
                }
                if(isset($_SESSION['LoggedIn']))
                {
                    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'</a>';
                }
            ?>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php
                if(!isset($_SESSION['LoggedIn']))
                {
                  echo '<a class="dropdown-item" href="userLogin.php">Login</a>';
                  echo '<div class="dropdown-divider"></div>';  // divider between menu items
                  echo '<a class="dropdown-item" href="userRegister.php">Register</a>';
                }
                if(isset($_SESSION['LoggedIn']) && isset($_SESSION['firstname']))
                {
                  // logged in users can see this part
                }
                if(isset($_SESSION['Admin']))
                {
                  // admins can see this part
                }
            ?>
            </div>
        </li>
    </ul>
  </div>
</nav>
