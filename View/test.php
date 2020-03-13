<?php
    include '../Model/session.php';
    include 'header.php';
?>
<!-- MAIN DIV -->
<div class='mt-2 row-flex row no-gutters border border-warning rounded'>
  <!-- PLAYER TAB -->
  <div class='col-3 list-group no-gutters'>

    <form action='../Controller/getSessionCharacters.php' method='POST' class='mb-0 mr-0 border border-warning rounded'>
      <div class='input-group input-group-sm'>
        <input type='text' class='form-control' placeholder='Character Code' aria-label='Small' aria-describedby='inputGroup-sizing-sm' id='characterCode' name='characterCode'>
        <div class='input-group-append'>
          <button name='getCharacterByCode' type='submit' class='btn btn-outline-warning'>Add</button>
        </div>
      </div>
    </form>

    <ul class="nav nav-tabs">
      <?php

      for($i = 0; $i < sizeof($_SESSION['sessionCharacter']); $i++)
      {
        if($i == 0)
        {
          echo "
          <li class='active'>
          <a class='nav-item nav-link' id='characterTab".$i."' data-toggle='tab' href='#Character".$i."' role='tab' aria-controls='Character".$i."' aria-selected='true'>".$_SESSION['sessionCharacter'][$i]->Name."</a>
          </li>
          ";
        }
        else
        {
          echo "
          <li>
          <a class='nav-item nav-link' id='characterTab".$i."' data-toggle='tab' href='#Character".$i."' role='tab' aria-controls='Character".$i."' aria-selected='true'>".$_SESSION['sessionCharacter'][$i]->Name."</a>
          </li>
          ";
        }
      }
      ?>
    </ul>

    <!-- SUB TABS -->
    <div id="myTabContent" class="tab-content">


      <div class='tab-pane fade active in' id='Character".$i."'>

        <div class='tabbable'>
          <ul class='nav nav-tabs'>
            <li class='active'>
            <a class='nav-item nav-link' id='characterTab".$i."' data-toggle='tab' href='#CharacterEquip".$i."' role='tab' aria-controls='Character".$i."' aria-selected='true'>STUFF</a>
            </li>
            <li>
              <a href='#CharacterSpell".$i."'>Sub Tab 2</a>
            </li>
          </ul>


          <!-- CONTENT OF THE SUB TABS -->
          <div id='myTabContent' class='tab-content'>

              <div class='tab-pane fade active in' id='CharacterEquip".$i."'>
                <p>CLOTHES GED</p>
              </div>

              <div class='tab-pane fade' id='CharacterSpell".$i."'>
                <p>BIG BOI SPELLS</p>
              </div>

          </div>

        </div>
      </div>
    </div><!-- END SUB TABS -->
</div> <!-- END MAIN DIV-->

<?php
    include '../Controller/bootstrapScript.php';
    include '../Controller/cookieConsent.php';
?>
</body>
</html>

<script>
$("nav.nav-tabs a").click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
</script>
