<?php
/*
    Description: Dungeons Home Page.
    Author: David McRae
*/
// if(isset($_SESSION['userid']) && isset($_SESSION['username']))
// {

?>
<!DOCTYPE html>
<html>
<!-- <head> -->
<?php
    include '../Model/session.php';
    include 'header.php';
    include '../Controller/getCharacterSheet.php';
    include '../Controller/characterSheetCreation.php';

    // if($_SESSION['userid'] != $character[0]->User_ID)
    // {
    //   header('location: ../View/selectCharacter.php?error=You do not own this character');
    // }
    // if($characters[$i]->ClassName == "Warlock")
    // {
    //   change style background for class
    // }
    // <style>
    // .sheet
    // {
    //     background: url(images/SpellcasterSheetOne.jpg) no-repeat;
    //     background-size: 100% 100%;
    // }
    // </style>
    if($character[0]->ClassName == "Warlock")
    {
      $SpellCastingAbility = $character[0]->Charisma;
    }
    // else
    // {
    //   echo "
    //   <script>
    //     function myFunction()
    //     {
    //     alert('This page only supports a Warlock Right now, More Classes Comming soon.');
    //     }
    //   </script>
    //   ";
    // }
?>

<!-- </head> -->
<title>CharacterSheet</title>
<?php
?>
<body>
<?php
echo "
<div class='container-fluid p-0'>
<form class='form-group needs-validation' action='../Controller/attemptSaveCharacter.php?characterID=".$character[0]->Code."' method='POST'>";

  echo "
  <div class='row no-gutters border border-warning d-flex'>
    <div class='col-3 border-left border-top border-warning d-flex align-items-center justify-content-center'>
      <h6 class='card-title'>".$character[0]->Name."</h6>
    </div>
    <div class='col-9'>
      <div class='row no-gutters border border-warning'>
        <h6 class='col-4 d-inline'>Race: <text>".$character[0]->RaceName."</text></h6>
        <h6 class='col-4 d-inline'>Class: <text>".$character[0]->ClassName."</text></h6>
        <h6 class='col-4 d-inline'>Level: <text>".$character[0]->Level."</text></h6>
        <input style='display:none;' name='lvl' value='".$character[0]->Level."'></input>
      </div>
      <div class='row no-gutters border border-warning text-center'>
        <h6 class=' col-6 d-inline'>Alignment: <text>".$character[0]->Alignment."</text></h6>
        <h6 class='d-inline'>EXP: <textarea name='exp' class='col-6 d-inline custom-select text-center'>".$character[0]->Exp."</textarea></h6>
      </div>
    </div>
  </div>
  ";

  echo "
  <div class='row no-gutters d-flex text-center border border-warning'>

    <div class='row d-flex align-items-center justify-content-center col-6 border border-warning'>
      <div class='col-4'>
        <h6>AC: <text>".$character[0]->AC."</text></h6>
      </div>
      <div class='col-4'>
        <h6>Max HP: <text>".$character[0]->Max_HP."</text></h6>
      </div>
      <div class='col-4'>
        <h6>Temp HP: <text name='lvl'>".SetTempHP($SpellCastingAbility, $character[0]->Level)."</text></h6>
      </div>
    </div>

    <div class='d-flex align-items-center justify-content-center text-center col-6'>
      <div class='col-6'>
        <h6>Death Saves</h6>
        </br
        <h6 class='d-inline'>Pass: </h6><input type='checkbox'/>-<input type='checkbox'/>-<input type='checkbox'/>
        </br>
        <h6 class='d-inline'>Fail: </h6><input type='checkbox'/>-<input type='checkbox'/>-<input type='checkbox'/>
      </div>
    </div>

  </div>

  <div class='row no-gutters d-flex text-center border border-warning'>

    <div class='row d-flex col-6 text-center border border-warning'>
      <div class='mx-auto'>
        <h6>Current HP</h6>
        <input name='currentHP' type='number' class='col-6 custom-select text-center' value='".$character[0]->HP."'></input>
      </div>
    </div>

    <div class='d-flex align-items-center justify-content-center text-center col-6'>
      <div class='col-4'>
        <h6>SpellCasting Ability: <text>".GetModifier($SpellCastingAbility)."</text></h6>
      </div>
      <div class='col-4'>
        <h6>Spell Save DC: <text>".SpellSaveDC($SpellCastingAbility, $character[0]->Level)."</text></h6>
      </div>
      <div class='col-4'>
        <h6>Spell Attack Bonus: <text>".SpellCastingAbility($SpellCastingAbility, $character[0]->Level)."</text></h6>
      </div>
    </div>

  </div>
  ";

  echo "
  <div class='row no-gutters'>
    <div class='col-3 border border-warning'>
      <div class='d-flex align-items-center justify-content-center'>
        <h6>Proficieny Bonus: <text>+".ProficienyBonus($character[0]->Level)."</text></h6>
      </div>
      <div class='d-flex align-items-center justify-content-center'>
        <h6>Passive Perception: <text>".PassivePerception($character[0]->Wisdom, $character[0]->Proficiencies, $character[0]->Level)."</text></h6>
      </div>
      <div class='d-flex align-items-center justify-content-center'>
        <h6>Inspiration: </h6><textarea name='inspiration' class='col-3 custom-select text-center'></textarea>
      </div>
    </div>

    <div class='tab--container row no-gutters col-9' style='position:absolute; right:0px; overflow-y:scroll; overflow-x:hidden; height:1025px;'>
      <div class='tab--bar col-12'>
          <button type='button' class='btn btn-outline-warning tab--button' data-for-tab='1'>Equipment</button>
          <button type='button' class='btn btn-outline-warning tab--button' data-for-tab='2'>Bag</button>
          <button type='button' class='btn btn-outline-warning tab--button' data-for-tab='3'>Spells</button>
          <button type='button' class='btn btn-outline-warning tab--button' data-for-tab='4'>Notes</button>
      </div>

      <div class='tab--content row no-gutters col-12' data-tab='1'>

        <div class='row '>
          <div class='col-6'>
            <li class='list-group-item '><h6>Armour</h6>
            </li>
            <li class='list-group-item'><h6>Name: <text>".$armour[0]->Name."</text></h6>
            </li>
            <li class='list-group-item'><h6>AC: <text>".$armour[0]->AC."</text></h6>
            </li>
            <li class='list-group-item'><h6>Stealth: <text>".$armour[0]->Stealth."</text></h6>
            </li>
          </div>

          <div class='list-group col-6'>
            <li class='list-group-item d-flex align-items-center'><h6>Weapon</h6>
            </li>
            <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Name: <text>".$weapon[0]->Name."</text></h6>
            </li>
            <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Category: <text>".$weapon[0]->Category."</text></h6>
            </li>
            <li class='list-group-item justify-content-between'><h6>Damage: <text>".$weapon[0]->Damage_Dice." ".$weapon[0]->Damage_Type."</text></h6>
            </li>
            <li class='list-group-item d-flex justify-content-between align-items-center'><h6>Properties: <text>".$weapon[0]->Properties."</text></h6>
            </li>
          </div>
        </div>
        <h6><textarea name='equipmentNote' class='col-12 parchment border-warning' style='height:800px;'>".$notes[0]->Equipment_Note."</textarea></h6>
      </div>


      <div class='tab--content row no-gutters col-12' data-tab='2'>

        <!-- BAG TAB -->
          <div class='row no-gutters col-12'>
          <div class='col-12'>
            <h6 class='row no-gutters'><input type='number' name='pp' class='col-2 custom-select text-center' value='".$bag[0]->Pp."'></input>Pp</h6>
            <h6 class='row no-gutters'><input type='number' name='gp' class='col-2 custom-select text-center' value='".$bag[0]->Gp."'></input>Gp</h6>
            <h6 class='row no-gutters'><input type='number' name='sp' class='col-2 custom-select text-center' value='".$bag[0]->Sp."'></input>Sp</h6>
            <h6 class='row no-gutters'><input type='number' name='cp' class='col-2 custom-select text-center' value='".$bag[0]->Cp."'></input>Cp</h6>
          </div>

          <h6 class='col-12'><textarea name='bagNote' class='col-12 parchment border-warning' style='height:800px;'>".$notes[0]->Bag_Note."</textarea></h6>
        </div>

      </div>

      <div class='tab--content row no-gutters col-12' data-tab='3'>

        <!-- SPELL TABS -->
        <div class='no-gutters' id='Spells'>
          <div class='col-12 row no-gutters'>
            ";
            for ($i=0 ; $i < sizeof($spellsKnown[0]) ; $i++)
            {
              echo
              "
                <h6 class='d-inline list-group-item col-4'><i class='fas fa-magic'></i><a class='btn text-light' data-toggle='modal' data-target='#".str_replace(' ', '-', $spellsKnown[0][$i]->name)."'>".$spellsKnown[0][$i]->name."</a></h6>
              ";
            }

            for ($i=0 ; $i < sizeof($spellsKnown[0]) ; $i++)
            {
              echo "
              <div class='modal fade' id='".str_replace(' ', '-', $spellsKnown[0][$i]->name)."' tabindex='-1' role='dialog' aria-labelledby='modal' aria-hidden='true'>
                ";
                echo "
                <div class='container modal-dialog' role='document'>

                  <div class='modal-content bg-dark'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='".str_replace(' ', '-', $spellsKnown[0][$i]->name)."'>Spell Details</h5>
                      <button type='button' class='close btn btn-dark' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    </div>
                  </div>

                  ";
                  echo '
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Name: <text>'.$spellsKnown[0][$i]->name.'</text>
                      <span class="badge badge-warning badge-pill">'.$spellsKnown[0][$i]->level_int.'</span>
                    </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">Components: <text>'.$spellsKnown[0][$i]->components.'</text>
                    </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">Material: <text>'.$spellsKnown[0][$i]->material.'</text>
                    </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">Casting Time: <text>'.$spellsKnown[0][$i]->casting_time.'</text>
                    </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">Range: <text>'.$spellsKnown[0][$i]->range.'</text>
                    </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center"><text>'.nl2br($spellsKnown[0][$i]->desc).'</text>
                    </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center"><text>'.nl2br($spellsKnown[0][$i]->higher_level).'</text>
                    </li>
                  </ul>
                  ';
                echo "
                </div>
              </div>";
            }
            echo "
          </div>
        </div>
        <h6><textarea name='spellsNote' class='col-12 parchment border-warning' style='height:500px'>".$notes[0]->Spell_Note."</textarea></h6>
      </div>

      <div class='tab--content row no-gutters col-12' data-tab='4'>
        <h6><textarea name='notesNote' class='col-12 parchment border-warning' style='height:1100px;'>".$notes[0]->Notes_Note."</textarea></h6>
      </div>

  </div> <!-- end tab--container -->

  </div> "; // END ROW FOR PROFICIENY BONUS, PASSIVE PERCEPTION & INSPIRATION

  echo "
  <div class='col-3 border border-warning'>

    <div class='row d-flex align-items-center border-bottom border-warning'>
      <div class='col-4'>
        <h6 class='d-flex justify-content-center'>STR: <text>".$character[0]->Strength."</text></h6>
        <h6 class='d-flex justify-content-center'>Mod: <text>".GetModifier($character[0]->Strength)."</text></h6>
      </div>
      <div class='col-8 d-flex border-left border-warning p-0 pl-3'>
        <ul class='p-0 ml-2 no-border'>
        ";
        if(strpos($character[0]->Saving_Throws, "Strength") !== false)
        {
          // Found Strength
          echo "<li>Saving Throws</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Saving Throws</li>";
        }
        if(strpos($character[0]->Proficiencies, "athletics") !== false)
        {
          // Found Athletics
          echo "<li>Athletics</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Athletics</li>";
        }
        echo "
        </ul>
      </div>
    </div>

    <div class='row d-flex align-items-center border-bottom border-warning'>
      <div class='col-4'>
        <h6 class='d-flex justify-content-center'>DEX: <text>".$character[0]->Dexterity."</text></h6>
        <h6 class='d-flex justify-content-center'>Mod: <text>".GetModifier($character[0]->Dexterity)."</text></h6>
      </div>
      <div class='col-8 d-flex border-left border-warning p-0 pl-3'>
        <ul class='p-0 ml-2 no-border'>
        ";
        if(strpos($character[0]->Saving_Throws, "Dexterity") !== false)
        {
          // Found Dexterity
          echo "<li>Saving Throws</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Saving Throws</li>";
        }
        if(strpos($character[0]->Proficiencies, "acrobatics") !== false)
        {
          // Found Athletics
          echo "<li>Acrobatics</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Acrobatics</li>";
        }
        if(strpos($character[0]->Proficiencies, "sleightOfHand") !== false)
        {
          // Found Athletics
          echo "<li>Sleight Of Hand</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Sleight Of Hand</li>";
        }
        if(strpos($character[0]->Proficiencies, "stealth") !== false)
        {
          // Found Athletics
          echo "<li>Stealth</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Stealth</li>";
        }
        echo "
        </ul>
      </div>
    </div>


    <div class='row d-flex align-items-center border-bottom border-warning'>
      <div class='col-4 border-right border-warning'>
        <h6 class='d-flex justify-content-center'>CON: <text>".$character[0]->Constitution."</text></h6>
        <h6 class='d-flex justify-content-center'>Mod: <text>".GetModifier($character[0]->Constitution)."</text></h6>
      </div>
      <div class='col-8 d-flex p-0 pl-3'>
        <ul class='p-0 ml-2 no-border'>
        ";
        if(strpos($character[0]->Saving_Throws, "Constitution") !== false)
        {
          // Found Strength
          echo "<li>Saving Throws</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Saving Throws</li>";
        }
        echo "
        </ul>
      </div>
    </div>

    <div class='row d-flex align-items-center border-bottom border-warning'>
      <div class='col-4'>
        <h6 class='d-flex justify-content-center'>INT: <text>".$character[0]->Intelligence."</text></h6>
        <h6 class='d-flex justify-content-center'>Mod: <text>".GetModifier($character[0]->Intelligence)."</text></h6>
      </div>
      <div class='col-8 d-flex border-left border-warning p-0 pl-3'>
        <ul class='p-0 ml-2 no-border'>
        ";
        if(strpos($character[0]->Saving_Throws, "Intelligence") !== false)
        {
          // Found Strength
          echo "<li>Saving Throws</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Saving Throws</li>";
        }
        if(strpos($character[0]->Proficiencies, "arcana") !== false)
        {
          // Found Athletics
          echo "<li>Arcana</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Arcana</li>";
        }
        if(strpos($character[0]->Proficiencies, "history") !== false)
        {
          // Found Athletics
          echo "<li>History</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>History</li>";
        }
        if(strpos($character[0]->Proficiencies, "investigation") !== false)
        {
          // Found Athletics
          echo "<li>Investigation</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Investigation</li>";
        }
        if(strpos($character[0]->Proficiencies, "nature") !== false)
        {
          // Found Athletics
          echo "<li>Nature</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Nature</li>";
        }
        if(strpos($character[0]->Proficiencies, "religion") !== false)
        {
          // Found Athletics
          echo "<li>Religion</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Religion</li>";
        }
        echo "
        </ul>
      </div>
    </div>

    <div class='row d-flex align-items-center border-bottom border-warning'>
      <div class='col-4'>
        <h6 class='d-flex justify-content-center'>WIS: <text>".$character[0]->Wisdom."</text></h6>
        <h6 class='d-flex justify-content-center'>Mod: <text>".GetModifier($character[0]->Wisdom)."</text></h6>
      </div>
      <div class='col-8 d-flex border-left border-warning p-0 pl-3'>
        <ul class='p-0 ml-2 no-border'>
        ";
        if(strpos($character[0]->Saving_Throws, "Wisdom") !== false)
        {
          // Found Strength
          echo "<li>Saving Throws</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Saving Throws</li>";
        }
        if(strpos($character[0]->Proficiencies, "animalHandling") !== false)
        {
          // Found Athletics
          echo "<li>Animal Handling</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Animal Handling</li>";
        }
        if(strpos($character[0]->Proficiencies, "insight") !== false)
        {
          // Found Athletics
          echo "<li>Insight</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Insight</li>";
        }
        if(strpos($character[0]->Proficiencies, "medicine") !== false)
        {
          // Found Athletics
          echo "<li>Medicine</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Medicine</li>";
        }
        if(strpos($character[0]->Proficiencies, "perception") !== false)
        {
          // Found Athletics
          echo "<li>Perception</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Perception</li>";
        }
        if(strpos($character[0]->Proficiencies, "survival") !== false)
        {
          // Found Athletics
          echo "<li>Survival</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Survival</li>";
        }
        echo "
        </ul>
      </div>
    </div>

    <div class='row d-flex align-items-center'>
      <div class='col-4'>
        <h6 class='d-flex justify-content-center'>CHA: <text>".$character[0]->Charisma."</text></h6>
        <h6 class='d-flex justify-content-center'>Mod: <text>".GetModifier($character[0]->Charisma)."</text></h6>
      </div>
      <div class='col-8 d-flex border-left border-warning p-0 pl-3'>
        <ul class='p-0 ml-2 no-border'>
        ";
        if(strpos($character[0]->Saving_Throws, "Charisma") !== false)
        {
          // Found Strength
          echo "<li>Saving Throws</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Saving Throws</li>";
        }
        if(strpos($character[0]->Proficiencies, "deception") !== false)
        {
          // Found Athletics
          echo "<li>Deception</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Deception</li>";
        }
        if(strpos($character[0]->Proficiencies, "intimidation") !== false)
        {
          // Found Athletics
          echo "<li>Intimidation</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Intimidation</li>";
        }
        if(strpos($character[0]->Proficiencies, "performance") !== false)
        {
          // Found Athletics
          echo "<li>Performance</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Performance</li>";
        }
        if(strpos($character[0]->Proficiencies, "persuasion") !== false)
        {
          // Found Athletics
          echo "<li>Persuasion</li>";
        }
        else
        {
          echo "<li class='list-group-item p-0'>Persuasion</li>";
        }
        echo "
        </ul>
      </div>
    </div>
  </div>

  <div class='col-3 border border-warning'>
  <div class='text-center'>
    <h6>Languages</h6>
  </div>
    <div class='row pl-3 pr-3'>
      <h6><text>".$character[0]->Language."</text></h6>
    </div>
  </div>
  ";

echo "
  <button class='form-control btn btn-outline-warning mt-2' type='submit' name='saveCharacterSubmit'>Save</button>
</form>
</div>";
?>


<!-- <footer> -->
<?php
  include 'footer.php';
?>
<!-- </footer> -->



<!-- JavaScript files -->
<?php
  //include '../Controller/tabControl.php';
  include '../Controller/bootstrapScript.php';
  include '../Controller/cookieConsent.php';
  ?>
  <script>
    function setUpTabs()
    {
        document.querySelectorAll(".tab--button").forEach(button => {
            button.addEventListener("click", () => {
                const bar = button.parentElement;
                const tabContainer = bar.parentElement;
                const tabNumber = button.dataset.forTab;
                const tabToActivate = tabContainer.querySelector(`.tab--content[data-tab="${tabNumber}"]`);

                bar.querySelectorAll(".tab--button").forEach(button => {
                    button.classList.remove("tab--button--active");
                });

                tabContainer.querySelectorAll(".tab--content").forEach(tab => {
                    tab.classList.remove("tab--content--active");
                });

                button.classList.add("tab--button--active");
                tabToActivate.classList.add("tab--content--active")
            });
        });
    }

    document.addEventListener("DOMContentLoaded", () => {
        setUpTabs();

        document.querySelectorAll(".tab--container").forEach(tabContainer => {
            tabContainer.querySelector(".tab--bar .tab--button").click();
        });
    });
</script>
</body>
</html>
<?php
// }
// else
// {
//   header('location: ../View/userLogin.php?error=Must Login to Play a character');
// }
?>
