<?php
//Insert new User to database
function CreateNewUser()
{
  if ($_COOKIE['cookiebar'] == "CookieAllowed") // User Has Accepted Cookie policy
  {
    if (isset($_POST["userRegisterSubmit"]))
    {
      Require 'connection.php';

      $email = (filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
      $username = (filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
      $password = (filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
      $passwordConfirm = (filter_input(INPUT_POST, 'passwordConfirm', FILTER_SANITIZE_STRING));

      $Error = false;
      $emailError;
      $usernameError;
      $passwordError;
      $passwordConfirmError;

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Email Must be Valid format. e.g. @xxxxx.xx.xx
      {
        $Error = true;
        $emailError = ":Invalid email format";
      }

      if(!preg_match("/^[a-zA-Z0-9]*$/", $username))//Username Must contain only letters & Numbers
      {
        $Error = true;
        $usernameError = ":Username Must Contain only letters and numbers";
      }

      if(!empty($password) && $password == $passwordConfirm) // Password & PasswordConfirm Must Match
      {
        if(strlen($password) <= '8')// Passowrd must be Atleast 8 characters
        {
          $Error = true;
          $passwordError = ":Password Must be Atleast 8 characters Long";
        }
        elseif(!preg_match("#[0-9]+#",$password)) // Password must contain a number
        {
          $Error = true;
          $passwordError = ":Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) // Password Must contain an Uppercase letter
        {
          $Error = true;
          $passwordError = ":Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password))// Password Must Conatain a Lowercase letter
        {
          $Error = true;
          $passwordError = ":Your Password Must Contain At Least 1 Lowercase Letter!";
        }
        else// No password errors have Occured
        {
          $PasswordError = ":Password Is Acceptable";
        }
      }
    }
    if(!empty($password) && $password != $passwordConfirm) // Password and PasswordConfirm do NOT Match
    {
      $Error = true;
      $passwordConfirmError = ":Please Check You've Confirmed Your Password!";
    }
    if(empty($password)) // Password Is Empty
    {
      $Error = true;
      $passwordError = ":Please enter a password";
    }

    if($Error == true) // An Error Has Occured
    {
      $errorString = $emailError.$usernameError.$passwordError.$passwordConfirmError;
      header('Location: ../View/userRegister.php?error='.$errorString);
    }
    else // Continue with the Registration
    {
      // Hash the password
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      $passwordConfirm = "";

      $query = $connection->prepare
      ("

      INSERT INTO User (Email, Username, Password)
      VALUES(:email, :username, :password)

      ");

      // Runs and executes the query
      $success = $query->execute
      ([
        'email' => $email,
        'username' => $username,
        'password' => $passwordHash
      ]);

      // If rows returned is more than 0 Let us know if it inserted or not.
      $count = $query->rowCount();
      if($count > 0)
      {
        $sql = "SELECT * FROM User WHERE Username = :username";

        $stmt = $connection->prepare($sql);
        $success = $stmt->execute(['username' => $username]);

        if($success && $stmt->rowCount() > 0)
        {
          $result = $stmt->fetch();

          if ($result && password_verify($password, $result['Password']))
          {
            $_SESSION['userid'] = $result['User_ID'];
            $_SESSION['username'] = $result['Username'];
            header('location: ../View/index.php');
          }
        }
      }
      else
      {
        echo "Insert Failed";
      }
    }
  }
  else // User has NOT accepted cookie policy
  {
    // redirect user to the register page with an error
    $errorString = ":You Must Accept the Cookie policy to register an account.";
    header('Location: ../View/userRegister.php?error='.$errorString);
  }
}

//Login User
function AttemptUserLogin()
{
  if ($_COOKIE['cookiebar'] == "CookieAllowed") // User Has Accepted Cookie policy
  {
    Require 'connection.php';

    if (isset($_POST["userLoginSubmit"]))
    {
      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

      $sql = "SELECT * FROM User WHERE Username = :username";

      $stmt = $connection->prepare($sql);
      $success = $stmt->execute(['username' => $username]);

      if($success && $stmt->rowCount() > 0)
      {
        $result = $stmt->fetch();

        if ($result && password_verify($password, $result['Password']))
        {
          $_SESSION['userid'] = $result['User_ID'];
          $_SESSION['username'] = $result['Username'];
          header('location: ../View/index.php');
        }
        else
        {
          // invalid password
          $invalidError = "Invalid Credentials";
          header('location: ../View/userLogin.php?error='.$invalidError);
        }
      }
      else
      {
        // no records found
        $invalidError = "Invalid Credentials";
        header('location: ../View/userLogin.php?error='.$invalidError);
      }
    }
  }
  else // User has NOT accepted cookie policy
  {
    // redirect user to the register page with an error
    $errorString = ":You Must Accept the Cookie policy to login to an account.";
    header('Location: ../View/userLogin.php?error='.$errorString);
  }
}

function Logout()
{
  session_start(); // Start Session / Resume Current Session
  session_destroy(); // Destroy Session
  header("Location: ../View/index.php"); // Redirect to index page
}

function CreateCharacter($userid)
{
  if ($_COOKIE['cookiebar'] == "CookieAllowed") // User Has Accepted Cookie policy
  {
    if (isset($_POST["createCharacterSubmit"]))
    {
      Require 'connection.php';

      $name = (filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
      $alignment = (filter_input(INPUT_POST, 'alignment', FILTER_SANITIZE_STRING));
      $race = (filter_input(INPUT_POST, 'race', FILTER_SANITIZE_STRING));
      $class = (filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING));
      $exp = (filter_input(INPUT_POST, 'exp', FILTER_SANITIZE_STRING));
      $ac = (filter_input(INPUT_POST, 'ac', FILTER_SANITIZE_STRING));
      $hp = (filter_input(INPUT_POST, 'hp', FILTER_SANITIZE_STRING));
      $STR = (filter_input(INPUT_POST, 'strength', FILTER_SANITIZE_STRING));
      $DEX = (filter_input(INPUT_POST, 'dexterity', FILTER_SANITIZE_STRING));
      $CON = (filter_input(INPUT_POST, 'constitution', FILTER_SANITIZE_STRING));
      $INT = (filter_input(INPUT_POST, 'intelligence', FILTER_SANITIZE_STRING));
      $WIS = (filter_input(INPUT_POST, 'wisdom', FILTER_SANITIZE_STRING));
      $CHA = (filter_input(INPUT_POST, 'charisma', FILTER_SANITIZE_STRING));

      $armour = (filter_input(INPUT_POST, 'armour', FILTER_SANITIZE_STRING));
      $weapon = (filter_input(INPUT_POST, 'weapon', FILTER_SANITIZE_STRING));
      $equipmentNote = (filter_input(INPUT_POST, 'equipmentNote', FILTER_SANITIZE_STRING));

      $pp = (filter_input(INPUT_POST, 'pp', FILTER_SANITIZE_STRING));
      $gp = (filter_input(INPUT_POST, 'gp', FILTER_SANITIZE_STRING));
      $sp = (filter_input(INPUT_POST, 'sp', FILTER_SANITIZE_STRING));
      $cp = (filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_STRING));
      $bagNote = (filter_input(INPUT_POST, 'bagNote', FILTER_SANITIZE_STRING));

      $known = (filter_input(INPUT_POST, 'known', FILTER_SANITIZE_STRING));
      $spellsNote = (filter_input(INPUT_POST, 'spellsNote', FILTER_SANITIZE_STRING));

      $savingThrows = "";
      $proficiencies = "";
      $languages = "";

      $notesNote = (filter_input(INPUT_POST, 'notesNote', FILTER_SANITIZE_STRING));

      // for each index in the savingThrows array create a single String
      for($i = 0; $i < sizeof($_POST['savingThrow']); $i++)
      {
        $savingThrows = $savingThrows." ".$_POST['savingThrow'][$i].",";
      }
      $savingThrows = rtrim($savingThrows, ','); // Remove the last comma added in the above foreach

      // for each index in the proficiency array create a single String
      for($i = 0; $i < sizeof($_POST['proficiency']); $i++)
      {
        $proficiencies = $proficiencies." ".$_POST['proficiency'][$i].",";
      }
      $proficiencies = rtrim($proficiencies, ','); // Remove the last comma added in the above foreach

      // for each index in the language array creata a single string
      for($i = 0; $i < sizeof($_POST['language']); $i++)
      {
        $languages = $languages." ".$_POST['language'][$i].",";
      }
      $languages = rtrim($languages, ','); // Remove the last comma added in the above foreach

      $lvl = ExpToLevel($exp);

      $Error = false;
      $NameError;
      $expError;
      $acError;
      $hpError;

      if(!preg_match("/^[a-zA-Z0-9\s]*$/", $name))//Name Must contain only letters & spaces
      {
        $Error = true;
        $NameError = ":Name Must Contain only letters and spaces";
      }
      if(!preg_match("/^[0-9]*$/", $exp))//Name Must contain only numbers
      {
        $Error = true;
        $expError = ":EXP must only be a number e.g. 24000";
      }
      if(!preg_match("/^[0-9]*$/", $ac))//Name Must contain only letters & spaces
      {
        $Error = true;
        $acError = ":AC must only be a number e.g. 25";
      }
      if(!preg_match("/^[0-9]*$/", $hp))//Name Must contain only letters & spaces
      {
        $Error = true;
        $hpError = ":HP must only be a number e.g. 42";
      }

    }

    if($Error == true) // An Error Has Occured
    {
      $errorString = $nameError.$expError.$acError.$hpError;
      header('Location: ../View/createCharacter.php?error='.$errorString);
    }
    else // Continue with the character creation
    {
      $code = GenerateUniqueCode($userid);

      $query = $connection->prepare
      ("

      INSERT INTO Player_Character (User_ID, Code, Name, Alignment, Exp, Level, RaceName, ClassName, AC, Max_HP, HP, Strength, Dexterity, Constitution, Intelligence, Wisdom, Charisma, Saving_Throws, Proficiencies, Language)
      VALUES(:user_id, :code, :name, :alignment, :exp, :lvl, :race, :class, :ac, :maxhp, :hp, :str, :dex, :con, :int, :wis, :cha, :savingThrows, :proficiencies, :languages)

      ");

      // Runs and executes the query
      $success = $query->execute
      ([
        'user_id' => $userid,
        'code' => $code,
        'name' => $name,
        'alignment' => $alignment,
        'exp' => $exp,
        'lvl' => $lvl,
        'race' => $race,
        'class' => $class,
        'ac' => $ac,
        'maxhp' => $hp,
        'hp' => $hp,
        'str' => $STR,
        'dex' => $DEX,
        'con' => $CON,
        'int' => $INT,
        'wis' => $WIS,
        'cha' => $CHA,
        'savingThrows' => $savingThrows,
        'proficiencies' => $proficiencies,
        'languages' => $languages
      ]);

      // If rows returned is more than 0 Let us know if it inserted or not.
      if($success && $query->rowCount() > 0)
      {
        EquipItems($code, $armour, $weapon);
        LearnSpells($code, $known);
        TakeNotes($code, $equipmentNote, $bagNote, $spellsNote, $notesNote);
        GiveMoney($code, $pp, $gp, $sp, $cp);
        //header('location: ../View/index.php');
      }
      else
      {
        echo "oops, something went wrong";
        //print_r($query->errorInfo());
      }
    }
  }
  else // User has NOT accepted cookie policy
  {
    // redirect user to the register page with an error
    $errorString = ":You Must Accept the Cookie policy and login to create a character.";
    header('Location: ../View/userLogin.php?error='.$errorString);
  }
}

function EquipItems($code, $armour, $weapon)
{
  if (isset($_POST["createCharacterSubmit"]))
  {
    Require 'connection.php';
    $query = $connection->prepare
    ("

    INSERT INTO Equipment
    VALUES(:code, :armour, :weapon)

    ");

    // Runs and executes the query
    $success = $query->execute
    ([
      'code' => $code,
      'armour' => $armour,
      'weapon' => $weapon
    ]);
    $connection = NULL;
  }
}

function LearnSpells($code, $known)
{
  if (isset($_POST["createCharacterSubmit"]))
  {
    Require 'connection.php';
    $query = $connection->prepare
    ("

    INSERT INTO SpellBook
    VALUES(:code, :known, :prepared)

    ");

    // Runs and executes the query
    $success = $query->execute
    ([
      'code' => $code,
      'known' => $known,
      'prepared' => "None"
    ]);
    $connection = NULL;
  }
}

function TakeNotes($code, $equipmentNote, $bagNote, $spellsNote, $notesNote)
{
  if (isset($_POST["createCharacterSubmit"]))
  {
    Require 'connection.php';
    $query = $connection->prepare
    ("

    INSERT INTO Notes
    VALUES(:code, :equipmentNotes, :bagNotes, :spellNotes, :notesNote)

    ");

    // Runs and executes the query
    $success = $query->execute
    ([
      'code' => $code,
      'equipmentNotes' => $equipmentNote,
      'bagNotes'=> $bagNote,
      'spellNotes'=> $spellsNote,
      'notesNote' => $notesNote
    ]);
    $connection = NULL;
  }
}

function GiveMoney($code, $pp, $gp, $sp, $cp)
{
  if (isset($_POST["createCharacterSubmit"]))
  {
    Require 'connection.php';
    $query = $connection->prepare
    ("

    INSERT INTO Bag
    VALUES(:code, :pp, :gp, :sp, :cp)

    ");

    // Runs and executes the query
    $success = $query->execute
    ([
      'code' => $code,
      'pp' => $pp,
      'gp'=> $gp,
      'sp'=> $sp,
      'cp' => $cp
    ]);
    $connection = NULL;
  }
}

function GetCharacterNotes($code)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $sql = "SELECT * FROM Notes WHERE Note_ID = :code";

    $stmt = $connection->prepare($sql);
    $success = $stmt->execute(['code' => $code]);

    if($success && $stmt->rowCount() > 0)
    {
      // convert to JSON
      $rows = array();
      while($r = $stmt->fetch())
      {
        $rows[] = $r;
      }
      return json_encode($rows);
    }
    else
    {
      $error = "error";
      return $error; // error get session character
    }
    $connection = null;
  }
}

function ExpToLevel($exp)
{
  if($exp < 300)
  {
    $lvl = 1;
  }
  else if ($exp < 900)
  {
    $lvl = 2;
  }
  else if ($exp < 2700)
  {
    $lvl = 3;
  }
  else if ($exp < 6500)
  {
    $lvl = 4;
  }
  else if ($exp < 14000)
  {
    $lvl = 5;
  }
  else if ($exp < 23000)
  {
    $lvl = 6;
  }
  else if ($exp < 34000)
  {
    $lvl = 7;
  }
  else if ($exp < 48000)
  {
    $lvl = 8;
  }
  else if ($exp < 64000)
  {
    $lvl = 9;
  }
  else if ($exp < 85000)
  {
    $lvl = 10;
  }
  else if ($exp < 100000)
  {
    $lvl = 11;
  }
  else if ($exp < 120000)
  {
    $lvl = 12;
  }
  else if ($exp < 140000)
  {
    $lvl = 13;
  }
  else if ($exp < 165000)
  {
    $lvl = 14;
  }
  else if ($exp < 195000)
  {
    $lvl = 15;
  }
  else if ($exp < 225000)
  {
    $lvl = 16;
  }
  else if ($exp < 265000)
  {
    $lvl = 17;
  }
  else if ($exp < 305000)
  {
    $lvl = 18;
  }
  else if ($exp < 355000)
  {
    $lvl = 19;
  }
  else if ($exp >= 355000)
  {
    $lvl = 20;
  }
  return $lvl;
}

//Generate Unique Code for characters
function GenerateUniqueCode($userid)
{
  $day = dechex(date('d'));
  $month = dechex(date('m'));
  $year = dechex(date('y'));
  $hour = dechex(date('H'));
  $minute = dechex(date('i'));
  $second = dechex(date('s'));

  $code = $day.$month.$year.$hour.$minute.$second.$userid;

  return $code;
}

function GetPlayerCharacters($userid)
{
  require 'connection.php';

  $sql = "SELECT * FROM Player_Character WHERE User_ID = :userid";

  $stmt = $connection->prepare($sql);
  $success = $stmt->execute(['userid' => $userid]);

  if($success && $stmt->rowCount() > 0)
  {
    $playerCharacters = array();
    while($r = $stmt->fetch())
    {
      $playerCharacters[] = $r;
    }
    return json_encode($playerCharacters);
  }
  else
  {
    $error = "error"; // error finding a players characters
    return $error; // error for Controller file
  }
  $connection = null;
}

// Get Character's details in the DM's Session
function GetCharacterByCode($code)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $sql = "SELECT * FROM Player_Character WHERE Code = :code";

    $stmt = $connection->prepare($sql);
    $success = $stmt->execute(['code' => $code]);

    if($success && $stmt->rowCount() > 0)
    {
      // convert to JSON
      $rows = array();
      while($r = $stmt->fetch())
      {
        $rows[] = $r;
      }
      return json_encode($rows);
    }
    else
    {
      $error = "error";
      return $error; // error get session character
    }
    $connection = null;
  }
}

function GetCharacterEquipment($equipment_id)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $sql = "SELECT * FROM Equipment WHERE Equipment_ID = :equipment_id";

    $stmt = $connection->prepare($sql);
    $success = $stmt->execute(['equipment_id' => $equipment_id]);

    if($success && $stmt->rowCount() > 0)
    {
      $equipmentIDs = array();
      while($r = $stmt->fetch())
      {
        $equipmentIDs[] = $r;
      }
      return json_encode($equipmentIDs);
    }
    else
    {
      $error = "error"; // error finding equipment
      return $error; // error for Controller file
    }
    $connection = null;
  }
}

function GetCharacterBag($bag_id)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $sql = "SELECT * FROM Bag WHERE Bag_ID = :bag_id";

    $stmt = $connection->prepare($sql);
    $success = $stmt->execute(['bag_id' => $bag_id]);

    if($success && $stmt->rowCount() > 0)
    {
      $bagItems = array();
      while($r = $stmt->fetch())
      {
        $bagItems[] = $r;
      }
      return json_encode($bagItems);
    }
    else
    {
      $error = "error"; // error finding equipment
      return $error; // error for Controller file
    }
    $connection = null;
  }
}

function GetCharacterArmour($armour_id)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $search_Armour = "SELECT * FROM Armour WHERE Armour_ID = :armour_id";

    $armourStmt = $connection->prepare($search_Armour);
    $armourSuccess = $armourStmt->execute(['armour_id' => $armour_id]);

    if($armourSuccess && $armourStmt->rowCount() > 0)
    {
      $armourObject = array();
      while($result = $armourStmt->fetch())
      {
        $armourObject[] = $result;
      }
      return json_encode($armourObject);
    }
    else
    {
      $error = "error rty"; // error finding weapojn
      return $error; // error for Controller file
    }
    $connection = null;
  }
}

function GetCharacterWeapon($weapon_id)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $search_Weapon = "SELECT * FROM Weapon WHERE Weapon_ID = :weapon_id";

    $weaponStmt = $connection->prepare($search_Weapon);
    $weaponSuccess = $weaponStmt->execute(['weapon_id' => $weapon_id]);

    if($weaponSuccess && $weaponStmt->rowCount() > 0)
    {
      $weaponObject = array();
      while($result = $weaponStmt->fetch())
      {
        $weaponObject[] = $result;
      }
      return json_encode($weaponObject);
    }
    else
    {
      $error = "error qwe"; // error finding armour
      return $error; // error for Controller file
    }
    $connection = null;
  }
}

function GetArmourList()
{
  require 'connection.php';

  $sql = "SELECT Armour_ID, Name FROM Armour";

  $armourStmt = $connection->prepare($sql);
  $weaponSuccess = $armourStmt->execute();

  if($weaponSuccess && $armourStmt->rowCount() > 0)
  {
    $armourList = array();
    while($result = $armourStmt->fetch())
    {
      $armourList[] = $result;
    }
    return json_encode($armourList);
  }
  else
  {
    $error = "error"; // error finding weapons
    return $error; // error for Controller file
  }
  $connection = null;
}

function GetWeaponList()
{
  require 'connection.php';

  $sql = "SELECT Weapon_ID, Name FROM Weapon";

  $weaponStmt = $connection->prepare($sql);
  $weaponSuccess = $weaponStmt->execute();

  if($weaponSuccess && $weaponStmt->rowCount() > 0)
  {
    $weaponList = array();
    while($result = $weaponStmt->fetch())
    {
      $weaponList[] = $result;
    }
    return json_encode($weaponList);
  }
  else
  {
    $error = "error"; // error finding weapons
    return $error; // error for Controller file
  }
  $connection = null;
}

function GetAllSpells()
{
  $spells = file_get_contents("https://api.open5e.com/spells/"); //Get a list of search results from the API
  return $spells; //Return the results
}

function GetSpellByName()
{
  if(isset($_POST['getSpellByName']))
  {
    $spellName = (filter_input(INPUT_POST, 'spellName', FILTER_SANITIZE_STRING)); // Sanitize the string
    $spellName = str_replace(' ', '-', $spellName); //Replace any whitespace with '-' symbols to work in the API
    $spellName = strtolower($spellName);

    if(!$spell = file_get_contents("https://api.open5e.com/spells/".$spellName))
    {
      $error = "error";
      return $error;
    }
    else
    {
      $spell = file_get_contents("https://api.open5e.com/spells/".$spellName); //Get a list of search results from the Open5E API
      return $spell;
    }
  }
}

function GetCharacterSpells($spellbook_id)
{
  if(isset($_POST['getCharacterByCode']))
  {
    require 'connection.php';

    $sql = "SELECT * FROM Spellbook WHERE Spellbook_ID = :spellbook_id";

    $stmt = $connection->prepare($sql);
    $success = $stmt->execute(['spellbook_id' => $spellbook_id]);

    if($success && $stmt->rowCount() > 0)
    {
      $spellLists = array();
      while($r = $stmt->fetch())
      {
        $spellLists[] = $r;
      }
      return json_encode($spellLists);
    }
    else
    {
      $error = "error"; // error finding equipment
      return $error; // error for Controller file
    }
    $connection = null;
  }
}

function GetKnownSpells($spellList)
{
  $spellList = strtolower($spellList);
  $spellList = str_replace(', ', '%2C', $spellList);
  $spellList = str_replace(' ', '-', $spellList);

  if(!$spelsKnown = file_get_contents("https://api.open5e.com/spells/?slug_iexact&slug__in=".$spellList))
  {
    $error = "error";
    return $error;
  }
  else
  {
    $spellsKnown = file_get_contents("https://api.open5e.com/spells/?slug_iexact&slug__in=".$spellList); //Get a list of search results from the Open5E API
    return $spellsKnown;
  }
}

function GetAllMonsters()
{
  $monsters = file_get_contents("https://api.open5e.com/monsters/"); //Get a list of search results from the API
  return $monsters; //Return the results
}

function GetMonsterByName()
{
  if(isset($_POST['getMonsterByName']))
  {
    $monsterName = (filter_input(INPUT_POST, 'monsterName', FILTER_SANITIZE_STRING)); // Sanitize the string
    $monsterName = str_replace(' ', '-', $monsterName); // Replace any whitespace with '-' symbols to work on a url
    $monsterName = strtolower($monsterName);

    if(!$monster = file_get_contents("https://api.open5e.com/monsters/".$monsterName))
    {
      $error = "error";
      return $error;
    }
    else
    {
      $monster = file_get_contents("https://api.open5e.com/monsters/".$monsterName); // Get a list of search results from the Open 5e API
      return $monster;
    }
  }
}

function RemoveObject($array)
{
  $i = (filter_input(INPUT_POST, 'index', FILTER_SANITIZE_STRING));

  array_splice($array, $i, 1);

  return $array;
}

function DeleteCharacterByCode($code)
{
  require 'connection.php';

  // Delete Notes
  $stmtNotes = $connection->prepare
  (
    "DELETE FROM Notes WHERE Note_ID = :code"
  );
  $success = $stmtNotes->execute
  ([
    'code' => $code
  ]);
  // Delete EQUIPMENT
  $stmtEquipment = $connection->prepare
  (
    "DELETE FROM Equipment WHERE Equipment_ID = :code"
  );
  $success = $stmtEquipment->execute
  ([
    'code' => $code
  ]);
  // Delete BAG
  $stmtBag = $connection->prepare
  (
    "DELETE FROM Bag WHERE Bag_ID = :code"
  );
  $success = $stmtBag->execute
  ([
    'code' => $code
  ]);
  // Delete Spells
  $stmtSpells = $connection->prepare
  (
    "DELETE FROM Spellbook WHERE Spellbook_ID = :code"
  );
  $success = $stmtSpells->execute
  ([
    'code' => $code
  ]);
  // Delete Character
  $stmtCharacter = $connection->prepare
  (
    "DELETE FROM Player_Character WHERE Code = :code"
  );
  $success = $stmtCharacter->execute
  ([
    'code' => $code
  ]);
}

function SaveCharacter($code)
{
  if(isset($_POST['saveCharacterSubmit']))
  {
    require 'connection.php';

    $lvl = (filter_input(INPUT_POST, 'lvl', FILTER_SANITIZE_STRING));
    $exp = (filter_input(INPUT_POST, 'exp', FILTER_SANITIZE_STRING));
    $currentHP = (filter_input(INPUT_POST, 'currentHP', FILTER_SANITIZE_STRING));

    $equipmentNote = (filter_input(INPUT_POST, 'equipmentNote', FILTER_SANITIZE_STRING));

    $pp = (filter_input(INPUT_POST, 'pp', FILTER_SANITIZE_STRING));
    $gp = (filter_input(INPUT_POST, 'gp', FILTER_SANITIZE_STRING));
    $sp = (filter_input(INPUT_POST, 'sp', FILTER_SANITIZE_STRING));
    $cp = (filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_STRING));

    $bagNote = (filter_input(INPUT_POST, 'bagNote', FILTER_SANITIZE_STRING));
    $spellsNote = (filter_input(INPUT_POST, 'spellsNote', FILTER_SANITIZE_STRING));
    $notesNote = (filter_input(INPUT_POST, 'notesNote', FILTER_SANITIZE_STRING));

    $newLvl = ExpToLevel($exp);

    $stmtNotes = $connection->prepare
    ("

    UPDATE Notes SET Equipment_Note = :equipmentNote, Bag_Note = :bagNote, Spell_Note = :spellsNote, Notes_Note = :notesNote
    WHERE Note_ID = :code;

    ");

    // Runs and executes the query
    $successNotes = $stmtNotes->execute
    ([
      'equipmentNote' => $equipmentNote,
      'bagNote' => $bagNote,
      'spellsNote' => $spellsNote,
      'notesNote' => $notesNote,
      'code' => $code
    ]);

    if($successNotes && $stmtNotes->rowCount() > 0)
    {
      echo "Notes changed";
    }
    else
    {
      echo "Notes unchanged";
    }

    $stmtEquipment = $connection->prepare
    ("

    UPDATE Bag SET Pp = :pp, Gp = :gp, Sp = :sp, Cp = :cp
    WHERE Bag_ID = :code;

    ");

    // Runs and executes the query
    $successEquipment = $stmtEquipment->execute
    ([
      'pp' => $pp,
      'gp' => $gp,
      'sp' => $sp,
      'cp' => $cp,
      'code' => $code
    ]);

    if($successEquipment && $stmtEquipment->rowCount() > 0)
    {
      echo "bag updated";
    }
    else
    {
      echo "bag unchanged";
    }

    $stmtCharacter = $connection->prepare
    ("

    UPDATE Player_Character SET Exp = :exp, Level = :newLvl,  HP = :currentHp
    WHERE Code = :code;

    ");

    // Runs and executes the query
    $successCharacter = $stmtCharacter->execute
    ([
      'exp' => $exp,
      'newLvl' => $newLvl,
      'currentHp' => $currentHP,
      'code' => $code
    ]);

    if($successCharacter && $stmtCharacter->rowCount() > 0)
    {
      if($newLvl > $lvl)
      {
        header('Location: ../View/updateCharacter.php?levelUp=true&characterID='.$code);
      }
      else
      {
        header('Location: ../View/playerCharacter.php?characterID='.$code);
      }
    }
    else
    {
      header('Location: ../View/playerCharacter.php?characterID='.$code);
    }
    $connection = null;
  }
}

function UpdateCharacter($code)
{
  if ($_COOKIE['cookiebar'] == "CookieAllowed") // User Has Accepted Cookie policy
  {
    if (isset($_POST["updateCharacterSubmit"]))
    {
      Require 'connection.php';

      $name = (filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
      $alignment = (filter_input(INPUT_POST, 'alignment', FILTER_SANITIZE_STRING));
      $race = (filter_input(INPUT_POST, 'race', FILTER_SANITIZE_STRING));
      $class = (filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING));
      $exp = (filter_input(INPUT_POST, 'exp', FILTER_SANITIZE_STRING));
      $ac = (filter_input(INPUT_POST, 'ac', FILTER_SANITIZE_STRING));
      $maxHp = (filter_input(INPUT_POST, 'maxHp', FILTER_SANITIZE_STRING));
      $STR = (filter_input(INPUT_POST, 'strength', FILTER_SANITIZE_STRING));
      $DEX = (filter_input(INPUT_POST, 'dexterity', FILTER_SANITIZE_STRING));
      $CON = (filter_input(INPUT_POST, 'constitution', FILTER_SANITIZE_STRING));
      $INT = (filter_input(INPUT_POST, 'intelligence', FILTER_SANITIZE_STRING));
      $WIS = (filter_input(INPUT_POST, 'wisdom', FILTER_SANITIZE_STRING));
      $CHA = (filter_input(INPUT_POST, 'charisma', FILTER_SANITIZE_STRING));

      $armour = (filter_input(INPUT_POST, 'armour', FILTER_SANITIZE_STRING));
      $weapon = (filter_input(INPUT_POST, 'weapon', FILTER_SANITIZE_STRING));
      $equipmentNote = (filter_input(INPUT_POST, 'equipmentNote', FILTER_SANITIZE_STRING));

      $pp = (filter_input(INPUT_POST, 'pp', FILTER_SANITIZE_STRING));
      $gp = (filter_input(INPUT_POST, 'gp', FILTER_SANITIZE_STRING));
      $sp = (filter_input(INPUT_POST, 'sp', FILTER_SANITIZE_STRING));
      $cp = (filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_STRING));
      $bagNote = (filter_input(INPUT_POST, 'bagNote', FILTER_SANITIZE_STRING));

      $known = (filter_input(INPUT_POST, 'known', FILTER_SANITIZE_STRING));
      $spellsNote = (filter_input(INPUT_POST, 'spellsNote', FILTER_SANITIZE_STRING));

      $savingThrows = "";
      $proficiencies = "";
      $languages = "";

      $notesNote = (filter_input(INPUT_POST, 'notesNote', FILTER_SANITIZE_STRING));

      // for each index in the savingThrows array create a single String
      for($i = 0; $i < sizeof($_POST['savingThrow']); $i++)
      {
        $savingThrows = $savingThrows." ".$_POST['savingThrow'][$i].",";
      }
      $savingThrows = rtrim($savingThrows, ','); // Remove the last comma added in the above foreach

      // for each index in the proficiency array create a single String
      for($i = 0; $i < sizeof($_POST['proficiency']); $i++)
      {
        $proficiencies = $proficiencies." ".$_POST['proficiency'][$i].",";
      }
      $proficiencies = rtrim($proficiencies, ','); // Remove the last comma added in the above foreach

      // for each index in the language array creata a single string
      for($i = 0; $i < sizeof($_POST['language']); $i++)
      {
        $languages = $languages." ".$_POST['language'][$i].",";
      }
      $languages = rtrim($languages, ','); // Remove the last comma added in the above foreach

      $lvl = ExpToLevel($exp);

      $Error = false;
      $NameError;
      $expError;
      $acError;
      $hpError;

      if(!preg_match("/^[a-zA-Z0-9\s]*$/", $name))//Name Must contain only letters & spaces
      {
        $Error = true;
        $NameError = ":Name Must Contain only letters and spaces";
      }
      if(!preg_match("/^[0-9]*$/", $exp))//Name Must contain only numbers
      {
        $Error = true;
        $expError = ":EXP must only be a number e.g. 24000";
      }
      if(!preg_match("/^[0-9]*$/", $ac))//Name Must contain only letters & spaces
      {
        $Error = true;
        $acError = ":AC must only be a number e.g. 15";
      }
      if(!preg_match("/^[0-9]*$/", $maxHp))//Name Must contain only letters & spaces
      {
        $Error = true;
        $hpError = ":HP must only be a number e.g. 42";
      }

    }

    if($Error == true) // An Error Has Occured
    {
      $errorString = $nameError.$expError.$acError.$hpError;
      header('Location: ../View/updateCharacter.php?error='.$errorString);
    }
    else // Continue with the character update
    {

      $stmtNotes = $connection->prepare
      ("

      UPDATE Notes SET Equipment_Note = :equipmentNote, Bag_Note = :bagNote, Spell_Note = :spellsNote, Notes_Note = :notesNote
      WHERE Note_ID = :code;

      ");

      // Runs and executes the query
      $successNotes = $stmtNotes->execute
      ([
        'equipmentNote' => $equipmentNote,
        'bagNote' => $bagNote,
        'spellsNote' => $spellsNote,
        'notesNote' => $notesNote,
        'code' => $code
      ]);

      if($successNotes && $stmtNotes->rowCount() > 0)
      {
        echo "notes updated";
      }
      else
      {
        echo "notes unchanged";
      }

      $stmtEquipment = $connection->prepare
      ("

      UPDATE Equipment SET Armour_ID = :armour, Weapon_ID = :weapon
      WHERE Equipment_ID = :code;

      ");

      // Runs and executes the query
      $successEquipment = $stmtEquipment->execute
      ([
        'armour' => $armour,
        'weapon' => $weapon,
        'code' => $code
      ]);

      if($successEquipment && $stmtEquipment->rowCount() > 0)
      {
        echo "equipment updated";
      }
      else
      {
        echo "equipment unchanged";
      }

      $stmtEquipment = $connection->prepare
      ("

      UPDATE Bag SET Pp = :pp, Gp = :gp, Sp = :sp, Cp = :cp
      WHERE Bag_ID = :code;

      ");

      // Runs and executes the query
      $successEquipment = $stmtEquipment->execute
      ([
        'pp' => $pp,
        'gp' => $gp,
        'sp' => $sp,
        'cp' => $cp,
        'code' => $code
      ]);

      if($successEquipment && $stmtEquipment->rowCount() > 0)
      {
        echo "bag updated";
      }
      else
      {
        echo "bag unchanged";
      }

      $stmtSpells = $connection->prepare
      ("

      UPDATE Spellbook SET Known = :known
      WHERE Spellbook_ID = :code;

      ");

      // Runs and executes the query
      $successSpells = $stmtSpells->execute
      ([
        'known' => $known,
        'code' => $code
      ]);

      if($successSpells && $stmtSpells->rowCount() > 0)
      {
        echo "spells updated";
      }
      else
      {
        echo "spells unchanged";
      }

      $newLvl = ExpToLevel($exp);
      $stmtCharacter = $connection->prepare
      ("

      UPDATE Player_Character SET Name = :name, Alignment = :alignment, Exp = :exp, Level = :lvl, RaceName = :race, ClassName = :class, AC = :ac, Max_HP = :maxhp, Strength = :str, Dexterity = :dex, Constitution = :con, Intelligence = :int, Wisdom = :wis, Charisma = :cha, Saving_Throws = :savingThrows, Proficiencies = :proficiencies, Language = :languages
      WHERE Code = :code;

      ");

      // Runs and executes the query
      $successCharacter = $stmtCharacter->execute
      ([
        'name' => $name,
        'alignment' => $alignment,
        'exp' => $exp,
        'lvl' => $lvl,
        'race' => $race,
        'class' => $class,
        'ac' => $ac,
        'maxhp' => $maxHp,
        'str' => $STR,
        'dex' => $DEX,
        'con' => $CON,
        'int' => $INT,
        'wis' => $WIS,
        'cha' => $CHA,
        'savingThrows' => $savingThrows,
        'proficiencies' => $proficiencies,
        'languages' => $languages,
        'code' => $code
      ]);

      if($successCharacter && $stmtCharacter->rowCount() > 0)
      {
        echo "character updated";
      }
      else
      {
        echo "character unchanged";
      }
    }
    $connection = null;
  }
}
?>
