<?php
echo "<div class='mt-2 row-flex row no-gutters border border-warning rounded'>"; // open row

  echo "<div class='col-3 list-group no-gutters'>

    <ul class='border nav nav-tabs'>
      <li class='dropdown'>
        <a class='dropdown-toggle badge badge-warning badge-pill' data-toggle='dropdown' href='#'>Character 1<span class='caret'></span></a>
        <ul class='dropdown-menu'>
          <li><a href='#'>Character 2</a></li>
          <li><a href='#'>Character 3</a></li>
          <li><a href='#'>Character 4</a></li>
        </ul>
      </li>
      <li class='ml-2 dropdown'>
        <a class='dropdown-toggle badge badge-warning badge-pill' data-toggle='dropdown' href='#'>".$_SESSION['characterDetails']."<span class='caret'></span></a>
        <ul class='dropdown-menu'>
          <li><a href='../Controller/setCharacterDetails.php?details=Stats'>Stats</a></li>
          <li><a href='../Controller/setCharacterDetails.php?details=Equipment'>Equipment</a></li>
          <li><a href='../Controller/setCharacterDetails.php?details=Bag'>Bag</a></li>
          <li><a href='../Controller/setCharacterDetails.php?details=Spells'>Spells</a></li>
        </ul>
      </li>
    </ul>
  </div>
  ";

echo "</div>";// close row
?>
