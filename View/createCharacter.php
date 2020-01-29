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
?>
<!-- </head> -->
<title>D - Create Character</title>
<body>

<!-- contains the visible web page-->

<!-- Container for the Form -->
    <div class="container">

      <div class="page-header">
        <br>
        <img src="images/D20_250.png" class="mx-auto d-block">
          <h1 class="text-center mt-4">Create a Character</h1>
      </div>

<?php
if(isset($_GET['error']))
{
  $error = $_GET['error'];
  $error = str_replace(":","</br>", $error);
  echo $error;
}
?>
<!-- Form -->
<form class="form-group needs-validation" action="../Controller/attemptCreateCharacter.php" method="POST" novalidate>

  <!-- TOP ROW > Name + Alignment -->
    <div class="form-row">
        <div class="col-md-6 form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text mt-4" id="inputGroupPrepend">Name</span>
          </div>
            <input class="form-control mt-4" type="text" id="Name" name="Name" placeholder="Name" required>
              <div class="invalid-feedback">
                You cannot Leave This field Empty.
              </div>
        </div>

        <div class="col-md-6 form-group input-group">
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Alignment: </span>
            </div>
            <select class='custom-select text mt-4' name=alignment id=alignment required>
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
            <div class="invalid-feedback">
              You cannot Leave This field Empty.
            </div>
        </div>
    </div>
    <!-- END TOP ROW -->

    <!-- SECOND ROW > Race + Class -->
      <div class="form-row">
        <div class="col-md-4 form-group input-group">
            <div class='input-group-prepend'>
              <span class='input-group-text mt-4' id='inputGroupPrepend'>Race: </span>
            </div>
            <select class='custom-select text mt-4' name=race id=race required>
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
            <div class="invalid-feedback">
              You cannot Leave This field Empty.
            </div>
        </div>

          <div class="col-md-4 form-group input-group">
              <div class='input-group-prepend'>
                <span class='input-group-text mt-4' id='inputGroupPrepend'>Class: </span>
              </div>
              <select class='custom-select text mt-4' name=class id=class required>
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
              <div class="invalid-feedback">
                You cannot Leave This field Empty.
              </div>
          </div>

          <div class="col-md-4 form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text mt-4" id="inputGroupPrepend">EXP</span>
            </div>
              <input class="form-control mt-4" type="text" id="exp" name="exp" placeholder="EXP" required>
                <div class="invalid-feedback">
                  You cannot Leave This field Empty.
                </div>
          </div>
      </div>
      <!-- END SECOND ROW -->

      <!-- THIRD ROW > AC + HP -->
        <div class="form-row">
          <div class="col-md-6 form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text mt-4" id="inputGroupPrepend">AC</span>
            </div>
              <input class="form-control mt-4" type="text" id="ac" name="ac" placeholder="AC" required>
                <div class="invalid-feedback">
                  You cannot Leave This field Empty.
                </div>
          </div>

          <div class="col-md-6 form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text mt-4" id="inputGroupPrepend">HP</span>
            </div>
              <input class="form-control mt-4" type="text" id="hp" name="hp" placeholder="HP" required>
                <div class="invalid-feedback">
                  You cannot Leave This field Empty.
                </div>
          </div>
        </div>
        <!-- END THIRD ROW -->


      <!-- FOURTH ROW > STATS -->
        <div class="form-row">
          <div class="col-md-2 form-group input-group">
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>STR: </span>
              </div>
              <select class='custom-select text' name=strength id=strength required>
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
              <div class="invalid-feedback">
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class="col-md-2 form-group input-group">
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>DEX: </span>
              </div>
              <select class='custom-select text' name=dexterity id=dexterity required>
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
              <div class="invalid-feedback">
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class="col-md-2 form-group input-group">
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>CON: </span>
              </div>
              <select class='custom-select text' name=constitution id=constitution required>
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
              <div class="invalid-feedback">
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class="col-md-2 form-group input-group">
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>INT: </span>
              </div>
              <select class='custom-select text' name=intelligence id=intelligence required>
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
              <div class="invalid-feedback">
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class="col-md-2 form-group input-group">
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>WIS: </span>
              </div>
              <select class='custom-select text' name=wisdom id=wisdome required>
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
              <div class="invalid-feedback">
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>

          <div class="col-md-2 form-group input-group">
            <div class='form-group input-group'>
              <div class='input-group-prepend'>
                <span class='input-group-text' id='inputGroupPrepend'>CHA: </span>
              </div>
              <select class='custom-select text' name=charisma id=charisma required>
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
              <div class="invalid-feedback">
                You cannot Leave This field Empty.
              </div>
            </div>
          </div>
        </div>
        <!-- END FOURTH ROW -->

        <!-- PROFICIENY TABLE -->


        <table class="table border">
          <thead>
            <tr class ="text-center">
              <th class="border text-warning col-2" scope="col">Saving Throw</th>
              <th class="border text-warning col-10" scope="col">Proficiencies</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="border" scope="row">
                <div class="container border rounded">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Strength</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="proficiency[]" value="strSavingThrow" id="str_STCheck">
                  </div>
                </div>
              </th>
              <td>
                <div class="container border rounded col-2">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Athletics</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="proficiency[]" value="athletics" id="athleticsCheck">
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th class="border" scope="row">
                <div class="container border rounded">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Dexterity</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="proficiency[]" value="dexSavingThrow" id="dex_STCheck">
                  </div>
                </div>
              </th>
              <td>
                <div class="row">
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Acrobatics</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="acrobatics" id="acrobaticsCheck">
                    </div>
                  </div>


                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Sleight Of Hand</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="sleightOfHand" id="sleightOfHandCheck">
                    </div>
                  </div>


                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Stealth</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="stealth" id="stealthCheck">
                    </div>
                  </div>
              </div>
              </td>
            </tr>
            <tr>
              <th class="border" scope="row">
                <div class="container border rounded">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Constitution</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="proficiency[]" value="conSavingThrow" id="con_STCheck">
                  </div>
                </div>
              </th>
              <td>
              </td>
            </tr>
            <tr>
              <th class="border" scope="row">
                <div class="container border rounded">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Intelligence</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="proficiency[]" value="intSavingThrow" id="int_STCheck">
                  </div>
                </div>
              </th>
              <td>
                <div class="row">
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Arcana</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="arcana" id="arcanaCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">History</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="history" id="historyCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Investigation</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="investigation" id="investigationCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Nature</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="nature" id="natureCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Religion</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="religion" id="religionCheck">
                    </div>
                  </div>
              </div>
              </td>
            </tr>
            <tr>
              <th class="border" scope="row">
                <div class="container border rounded">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Wisdom</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="proficiency[]" value="wisSavingThrow" id="wis_STCheck">
                  </div>
                </div>
              </th>
              <td>
                <div class="row">
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Animal Handling</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="animalHandling" id="animalHandlingCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Insight</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="insight" id="insightCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Medicine</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="medicine" id="medicineCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Perception</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="perception" id="perceptionCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Survival</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="survival" id="survivalCheck">
                    </div>
                  </div>
              </div>
              </td>
            </tr>
            <tr>
              <th class="border" scope="row">
                <div class="container border rounded">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Charisma</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="proficiency[]" value="chaSavingThrow" id="cha_STCheck">
                  </div>
                </div>
              </th>
              <td>
                <div class="row">
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Deception</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="deception" id="deceptionCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Intimidation</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="intimidation" id="intimidationCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Performance</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="performance" id="performanceCheck">
                    </div>
                  </div>
                  <div class="container border rounded col-2">
                    <div class="row justify-content-center">
                    <a class="text-warning input-group-text border-0">Persuasion</a>
                    </div>
                    <div class="row justify-content-center mb-2">
                      <input type="checkbox" name="proficiency[]" value="persuasion" id="persuasionCheck">
                    </div>
                  </div>
              </div>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- END PROFICIENY GRID -->

        <!-- LANGUAGE GRID -->
        <table class="table border">
          <thead>
            <tr class ="text-center">
              <th class="border text-warning col-12" scope="col">Languages</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td>
              <div class="row">
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Abyssal</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="abyssal" id="abyssalCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Aquan</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="aquan" id="aquanCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Auran</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="auran" id="auranCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Celestial</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="celestial" id="celestialCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Common</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="common" id="commonCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Deep Speech</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="deepSpeech" id="deepSpeechCheck">
                  </div>
                </div>
              </div>
            </td>
              </tr>
              <tr>
                <td>
                <div class="row">
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Draconic</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="draconic" id="draconicCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Druidic</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="druidic" id="druidicCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Dwarvish</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="dwarvish" id="dwarvishCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Elvish</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="elvish" id="elvishCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Giant</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="giant" id="giantCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Gnomish</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="gnomish" id="gnomishCheck">
                  </div>
                </div>
              </div>
            </td>
              </tr>
              <tr>
                <td>
                <div class="row">
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Goblin</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="goblin" id="goblinCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Gnoll</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="gnoll" id="gnollCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Halfling</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="halfling" id="halflingCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Ignan</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="ignan" id="ignanCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Infernal</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="infernal" id="infernalCheck">
                  </div>
                </div>
                <div class="container border rounded col m-3">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Orc</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="orc" id="orcCheck">
                  </div>
                </div>
              </div>
            </td>
              </tr>
              <tr>
                <td>
                <div class="row">
                <div class="container border rounded col-2">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Primordial</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="primordial" id="primordialCheck">
                  </div>
                </div>
                <div class="container border rounded col-2">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Sylvan</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="sylvan" id="sylvanCheck">
                  </div>
                </div>
                <div class="container border rounded col-2">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Terran</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="terran" id="terranCheck">
                  </div>
                </div>
                <div class="container border rounded col-2">
                  <div class="row justify-content-center">
                  <a class="text-warning input-group-text border-0">Undercommon</a>
                  </div>
                  <div class="row justify-content-center mb-2">
                    <input type="checkbox" name="languages[]" value="undercommon" id="undercommoncCheck">
                  </div>
                </div>
            </div>
            </td>
          </tr>
          </tbody>
        </table>
        <!-- END LANGUAGE GRID -->

    <button class="form-control btn btn-outline-warning" type="submit" name="createCharacterSubmit">Create</button>
</form>
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
