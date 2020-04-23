<?php
/*
    Description: Form to create a new character

    Author: David McRae
 */
?>
<!DOCTYPE html>
<html>
<!-- <head> -->
<?php
  include '../Model/session.php';
  include 'header.php';
  include '../Controller/getCharacterSheet.php';

  $armourList = json_decode(GetArmourList());
  $weaponList = json_decode(GetWeaponList());
?>
<!-- </head> -->
<title>Update Character</title>
<body>

<!-- contains the visible web page-->

<!-- Container for the Form -->
    <div class='container'>

      <div class='page-header'>
        <br>
        <img src='images/D20_250.png' class='mx-auto d-block'>
        <?php
        if(isset($_GET['levelUp']))
        {
          echo "<h1 class='text-center mt-4'>YOU LEVELED UP!</h1>";

          echo "<img src='images/WarlockLevelTable.JPG'>";
        }
        else
        {
          echo "<h1 class='text-center mt-4'>Update Character</h1>";
        }

        ?>
      </div>

<?php
if(isset($_GET['error']))
{
  $error = $_GET['error'];
  $error = str_replace(':','</br>', $error);
  echo $error;
}
?>
<?php
echo "
<!-- Form -->
<form class='form-group needs-validation' action='../Controller/attemptUpdateCharacter.php?characterID=".$character[0]->Code."' method='POST' novalidate>

  <!-- TOP ROW > Name + Alignment -->
    <div class='form-row'>
        <div class='col-md-6 form-group input-group'>
          <div class='input-group-prepend'>
            <span class='input-group-text mt-4' id='inputGroupPrepend'>Name</span>
          </div>
            <input class='form-control mt-4' type='text' id='name' name='name' value='".$character[0]->Name."'>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
        </div>

        <div class='col-md-6 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Alignment: </span>
            </div>
            <select class='custom-select text mt-4' name=alignment id=alignment required>
              <option selected='selected'>".$character[0]->Alignment."</option>
              <option value='Lawful Good'>Lawful Good</option>
              <option value='Lawful Nuetral'>Lawful Nuetral</option>
              <option value='Lawful Evil'>Lawful Evil</option>
              <option value='Nuetral Good'>Nuetral Good</option>
              <option value='True Nuetral'>True Nuetral</option>
              <option value='Nuetral Evil'>Nuetral Evil</option>
              <option value='Chaotic Good'>Chaotic Good</option>
              <option value='Chaotic Nuetral'>Chaotic Nuetral</option>
              <option value='Chaotic Evil'>Chaotic Evil</option>
            </select>
            <div class='invalid-feedback'>
              You cannot Leave This field Empty.
            </div>
        </div>
    </div>
    <!-- END TOP ROW -->

    <!-- SECOND ROW > Race + Class -->
      <div class='form-row'>
        <div class='col-md-4 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Race: </span>
            </div>
            <select class='custom-select text mt-4' name=race id=race required>
              <option selected='selected'>".$character[0]->RaceName."</option>
              <option value='Dragonborn'>Dragonborn</option>
              <option value='Dwarf'>Dwarf</option>
              <option value='Elf'>Elf</option>
              <option value='Gnome'>Gnome</option>
              <option value='Half-Elf'>Half-Elf</option>
              <option value='Halfling'>Halfling</option>
              <option value='Half-Orc'>Half-Orc</option>
              <option value='Human'>Human</option>
              <option value='Tiefling'>Tiefling</option>
            </select>
            <div class='invalid-feedback'>
              You cannot Leave This field Empty.
            </div>
        </div>

          <div class='col-md-4 form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text mt-4' id='inputGroupPrepend'>Class: </span>
              </div>
              <select class='custom-select text mt-4' name=class id=class required>
                <option selected='selected'>".$character[0]->ClassName."</option>
                <option value='Barbarian'>Barbarian</option>
                <option value='Bard'>Bard</option>
                <option value='Cleric'>Cleric</option>
                <option value='Druid'>Druid</option>
                <option value='Fighter'>Fighter</option>
                <option value='Monk'>Monk</option>
                <option value='Palidin'>Paladin</option>
                <option value='Ranger'>Ranger</option>
                <option value='Rogue'>Rogue</option>
                <option value='Sorcerer'>Sorcerer</option>
                <option value='Warlock'>Warlock</option>
                <option value='Wizard'>Wizard</option>
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
          </div>

          <div class='col-md-4 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>EXP</span>
            </div>
              <input class='form-control mt-4' type='number' id='exp' name='exp' value='".$character[0]->Exp."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
      </div>
      <!-- END SECOND ROW -->

      <!-- THIRD ROW > AC + HP -->
        <div class='form-row'>
          <div class='col-md-6 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>AC</span>
            </div>
              <input class='form-control mt-4' type='number' id='ac' name='ac' value='".$character[0]->AC."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>

          <div class='col-md-6 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Max HP</span>
            </div>
              <input class='form-control mt-4' type='text' id='maxHp' name='maxHp' value='".$character[0]->Max_HP."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
        </div>
        <!-- END THIRD ROW -->


      <!-- FOURTH ROW > STATS -->
        <div class='form-row'>
          <div class='col-md-2 form-group input-group'>
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>STR: </span>
              </div>
              <select class='custom-select text' name=strength id=strength required>
                <option selected='selected'>".$character[0]->Strength."</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='12'>20</option>
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class='col-md-2 form-group input-group'>
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>DEX: </span>
              </div>
              <select class='custom-select text' name=dexterity id=dexterity required>
                <option selected='selected'>".$character[0]->Dexterity."</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='12'>20</option>
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class='col-md-2 form-group input-group'>
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>CON: </span>
              </div>
              <select class='custom-select text' name=constitution id=constitution required>
                <option selected='selected'>".$character[0]->Constitution."</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='12'>20</option>
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class='col-md-2 form-group input-group'>
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>INT: </span>
              </div>
              <select class='custom-select text' name=intelligence id=intelligence required>
                <option selected='selected'>".$character[0]->Intelligence."</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='12'>20</option>
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class='col-md-2 form-group input-group'>
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>WIS: </span>
              </div>
              <select class='custom-select text' name=wisdom id=wisdom required>
                <option selected='selected'>".$character[0]->Wisdom."</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='12'>20</option>
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class='col-md-2 form-group input-group'>
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>CHA: </span>
              </div>
              <select class='custom-select text' name=charisma id=charisma required>
                <option selected='selected'>".$character[0]->Charisma."</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='12'>20</option>
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>
        </div>
        <!-- END FOURTH ROW -->

        <!-- FIFTH ROW EQUIPMENT -->
        <div class='form-row'>
          <div class='col-12'>
            Equipped Items
          </div>

          <div class='col-md-6 form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text mt-4' id='inputGroupPrepend'>Armour: </span>
              </div>
              <select class='custom-select text mt-4' name=armour id=armour required>
                <option selected='selected' value='".$armour[0]->Armour_ID."'>".$armour[0]->Name."</option>
                ";
                for($i = 0; $i < sizeof($armourList); $i++)
                {
                  echo "<option value='".$armourList[$i]->Armour_ID."'>".$armourList[$i]->Name."</option>";
                }
              echo "
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
          </div>

          <div class='col-md-6 form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text mt-4' id='inputGroupPrepend'>Weapon: </span>
              </div>
              <select class='custom-select text mt-4' name=weapon id=weapon required>
              <option selected='selected' value='".$weapon[0]->Weapon_ID."'>".$weapon[0]->Name."</option>
              ";
                for($i = 0; $i < sizeof($weaponList); $i++)
                {
                  echo "<option value='".$weaponList[$i]->Weapon_ID."'>".$weaponList[$i]->Name."</option>";
                }
              echo "
              </select>
              <div class='invalid-feedback'>
                You cannot Leave This field Empty.
              </div>
          </div>
        </div>

        <div class='form-row'>
          <div class='col-12 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Equipment Note</span>
            </div>
              <input class='form-control mt-4' type='text' id='equipmentNote' name='equipmentNote' value='".$notes[0]->Equipment_Note."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
        </div>

        <!-- END FIFTH ROW -->

        <div class='form-row'>
          <div class='col-12'>
            Player Backpack
          </div>

          <div class='col-md-3 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Platinum</span>
            </div>
              <input class='form-control mt-4' type='number' id='pp' name='pp' value='".$bag[0]->Pp."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
          <div class='col-md-3 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Gold</span>
            </div>
              <input class='form-control mt-4' type='number' id='gp' name='gp' value='".$bag[0]->Gp."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
          <div class='col-md-3 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Silver</span>
            </div>
              <input class='form-control mt-4' type='number' id='sp' name='sp' value='".$bag[0]->Sp."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
          <div class='col-md-3 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Copper</span>
            </div>
              <input class='form-control mt-4' type='number' id='cp' name='cp' value='".$bag[0]->Cp."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
        </div>

        <div class='form-row'>
          <div class='col-12 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Bag Note</span>
            </div>
              <input class='form-control mt-4' type='text' id='bagNote' name='bagNote' value='".$notes[0]->Bag_Note."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
        </div>

        <!-- SIXTH ROW SPELLS KNOWN -->
        <div class='col-12'>
          Spells
        </div>

        <div class='form-row'>
          <div class='col-12 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Spells Known</span>
            </div>
              <input class='form-control mt-4' type='text' id='known' name='known' value='".$spells[0]->Known."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
        </div>

        <div class='form-row'>
          <div class='col-12 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Spells Note</span>
            </div>
              <input class='form-control mt-4' type='text' id='spellsNote' name='spellsNote' value='".$notes[0]->Spell_Note."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
        </div>
        </br>
        <!-- END SIXTH ROW -->

        <!-- PROFICIENY TABLE -->
        <table class='table border'>
          <thead>
            <tr class ='text-center'>
              <th class='border text-warning col-2' scope='col'>Saving Throw</th>
              <th class='border text-warning col-10' scope='col'>Proficiencies</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class='border' scope='row'>
                <div class='container border rounded'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Strength</a>
                  </div>
                  <div class='row justify-content-center mb-2'>

                  <input type='checkbox' name='savingThrow[]' value='Strength' id='str_STCheck'
                  ";

                  if(strpos($character[0]->Saving_Throws, "Strength") !== false)
                  {
                    // Found Strength
                    echo "checked>";
                  }
                  else
                  {
                    echo ">";
                  }

                  echo "
                  </div>
                </div>
              </th>
              <td>
                <div class='container border rounded col-2'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Athletics</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='proficiency[]' value='athletics' id='athleticsCheck'
                    ";
                    if(strpos($character[0]->Proficiencies, "athletics") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <th class='border' scope='row'>
                <div class='container border rounded'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Dexterity</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='savingThrow[]' value='Dexterity' id='dex_STCheck'
                    ";
                    if(strpos($character[0]->Saving_Throws, "Dexterity") !== false)
                    {
                      // Found Dexterity
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </th>
              <td>
                <div class='row'>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Acrobatics</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='acrobatics' id='acrobaticsCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "acrobatics") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>


                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Sleight Of Hand</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='sleightOfHand' id='sleightOfHandCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "sleightOfHand") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>


                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Stealth</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='stealth' id='stealthCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "stealth") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
              </div>
              </td>
            </tr>

            <tr>
              <th class='border' scope='row'>
                <div class='container border rounded'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Constitution</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='savingThrow[]' value='Constitution' id='con_STCheck'
                    ";
                    if(strpos($character[0]->Saving_Throws, "Constitution") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </th>
              <td>
              </td>
            </tr>

            <tr>
              <th class='border' scope='row'>
                <div class='container border rounded'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Intelligence</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='savingThrow[]' value='Intelligence' id='int_STCheck'
                    ";
                    if(strpos($character[0]->Saving_Throws, "Intelligence") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </th>
              <td>
                <div class='row'>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Arcana</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='arcana' id='arcanaCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "arcana") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>History</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='history' id='historyCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "history") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Investigation</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='investigation' id='investigationCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "investigation") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Nature</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='nature' id='natureCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "nature") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Religion</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='religion' id='religionCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "religion") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
              </div>
              </td>
            </tr>

            <tr>
              <th class='border' scope='row'>
                <div class='container border rounded'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Wisdom</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='savingThrow[]' value='Wisdom' id='wis_STCheck'
                    ";
                    if(strpos($character[0]->Saving_Throws, "Wisdom") !== false)
                    {
                      // Found Wisdom
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </th>
              <td>
                <div class='row'>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Animal Handling</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='animalHandling' id='animalHandlingCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "animalHandling") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Insight</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='insight' id='insightCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "insight") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Medicine</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='medicine' id='medicineCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "medicine") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Perception</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='perception' id='perceptionCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "perception") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Survival</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='survival' id='survivalCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "survival") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
              </div>
              </td>
            </tr>

            <tr>
              <th class='border' scope='row'>
                <div class='container border rounded'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Charisma</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='savingThrow[]' value='Charisma' id='cha_STCheck'
                    ";
                    if(strpos($character[0]->Saving_Throws, "Charisma") !== false)
                    {
                      // Found Strength
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </th>
              <td>
                <div class='row'>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Deception</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='deception' id='deceptionCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "deception") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Intimidation</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='intimidation' id='intimidationCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "intimidation") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Performance</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='performance' id='performanceCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "performance") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
                  <div class='container border rounded col-2'>
                    <div class='row justify-content-center'>
                    <a class='text-warning input-group-text border-0'>Persuasion</a>
                    </div>
                    <div class='row justify-content-center mb-2'>
                      <input type='checkbox' name='proficiency[]' value='persuasion' id='persuasionCheck'
                      ";
                      if(strpos($character[0]->Proficiencies, "persuasion") !== false)
                      {
                        // Found
                        echo "checked>";
                      }
                      else
                      {
                        echo ">";
                      }
                      echo "
                    </div>
                  </div>
              </div>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- END PROFICIENY GRID -->

        <!-- LANGUAGE GRID -->
        <table class='table border'>
          <thead>
            <tr class ='text-center'>
              <th class='border text-warning col-12' scope='col'>Languages</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td>
              <div class='row'>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Abyssal</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='abyssal' id='abyssalCheck'
                    ";
                    if(strpos($character[0]->Language, "abyssal") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Aquan</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='aquan' id='aquanCheck'
                    ";
                    if(strpos($character[0]->Language, "aquan") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Auran</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='auran' id='auranCheck'
                    ";
                    if(strpos($character[0]->Language, "auran") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Celestial</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='celestial' id='celestialCheck'
                    ";
                    if(strpos($character[0]->Language, "celestial") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Common</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='common' id='commonCheck'
                    ";
                    if(strpos($character[0]->Language, "common") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Deep Speech</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='deepSpeech' id='deepSpeechCheck'
                    ";
                    if(strpos($character[0]->Language, "deepSpeech") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </div>
            </td>
              </tr>
              <tr>
                <td>
                <div class='row'>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Draconic</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='draconic' id='draconicCheck'
                    ";
                    if(strpos($character[0]->Language, "draconic") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Druidic</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='druidic' id='druidicCheck'
                    ";
                    if(strpos($character[0]->Language, "druidic") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Dwarvish</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='dwarvish' id='dwarvishCheck'
                    ";
                    if(strpos($character[0]->Language, "dwarvish") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Elvish</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='elvish' id='elvishCheck'
                    ";
                    if(strpos($character[0]->Language, "elvish") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Giant</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='giant' id='giantCheck'
                    ";
                    if(strpos($character[0]->Language, "giant") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Gnomish</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='gnomish' id='gnomishCheck'
                    ";
                    if(strpos($character[0]->Language, "gnomish") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </div>
            </td>
              </tr>
              <tr>
                <td>
                <div class='row'>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Goblin</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='goblin' id='goblinCheck'
                    ";
                    if(strpos($character[0]->Language, "goblin") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Gnoll</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='gnoll' id='gnollCheck'
                    ";
                    if(strpos($character[0]->Language, "gnoll") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Halfling</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='halfling' id='halflingCheck'
                    ";
                    if(strpos($character[0]->Language, "halfling") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Ignan</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='ignan' id='ignanCheck'
                    ";
                    if(strpos($character[0]->Language, "ignan") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Infernal</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='infernal' id='infernalCheck'
                    ";
                    if(strpos($character[0]->Language, "infernal") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col m-3'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Orc</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='orc' id='orcCheck'
                    ";
                    if(strpos($character[0]->Language, "orc") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
              </div>
            </td>
              </tr>
              <tr>
                <td>
                <div class='row'>
                <div class='container border rounded col-2'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Primordial</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='primordial' id='primordialCheck'
                    ";
                    if(strpos($character[0]->Language, "primordial") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col-2'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Sylvan</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='sylvan' id='sylvanCheck'
                    ";
                    if(strpos($character[0]->Language, "sylvan") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col-2'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Terran</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='terran' id='terranCheck'
                    ";
                    if(strpos($character[0]->Language, "terran") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
                <div class='container border rounded col-2'>
                  <div class='row justify-content-center'>
                  <a class='text-warning input-group-text border-0'>Undercommon</a>
                  </div>
                  <div class='row justify-content-center mb-2'>
                    <input type='checkbox' name='language[]' value='undercommon' id='undercommoncCheck'
                    ";
                    if(strpos($character[0]->Language, "undercommon") !== false)
                    {
                      // Found
                      echo "checked>";
                    }
                    else
                    {
                      echo ">";
                    }
                    echo "
                  </div>
                </div>
            </div>
            </td>
          </tr>
          </tbody>
        </table>
        <!-- END LANGUAGE GRID -->

        <div class='col-12'>
          Extra Notes
        </div>

        <div class='form-row'>
          <div class='col-12 form-group input-group'>
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Notes</span>
            </div>
              <input class='form-control mt-4' type='text' id='notesNote' name='notesNote' value='".$notes[0]->Notes_Note."'>
                <div class='invalid-feedback'>
                  You cannot Leave This field Empty.
                </div>
          </div>
        </div>

    <button class='form-control btn btn-outline-warning' type='submit' name='updateCharacterSubmit'>UPDATE</button>
</form>
";
?>
<!-- End Form -->
</div>
<!-- End Form Container -->

<!-- <footer> -->
<?php
  include 'footer.php';
?>
<!-- </footer> -->

<!-- javascript -->
<?php
require '../Controller/bootstrapScript.php';
require '../Controller/ValidateEmptyFields.js';
?>
</body>
</html>
