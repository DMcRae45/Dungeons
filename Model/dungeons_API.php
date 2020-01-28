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
      $password = password_hash($password, PASSWORD_DEFAULT);
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
        'password' => $password
      ]);

      // If rows returned is more than 0 Let us know if it inserted or not.
      $count = $query->rowCount();
      if($count > 0)
      {
        echo "Insert Successful";
        //header('location: ../View/index.php');
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

function createCharacter($userid)
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
      $exp = (filter_input(INPUT_POST, 'exp', FILTER_SANITIZE_NUMBER));
      $ac = (filter_input(INPUT_POST, 'ac', FILTER_SANITIZE_NUMBER));
      $hp = (filter_input(INPUT_POST, 'hp', FILTER_SANITIZE_NUMBER));
      $STR = (filter_input(INPUT_POST, 'strength', FILTER_SANITIZE_NUMBER));
      $DEX = (filter_input(INPUT_POST, 'dexterity', FILTER_SANITIZE_NUMBER));
      $CON = (filter_input(INPUT_POST, 'constitution', FILTER_SANITIZE_NUMBER));
      $INT = (filter_input(INPUT_POST, 'intelligence', FILTER_SANITIZE_NUMBER));
      $WIS = (filter_input(INPUT_POST, 'wisdom', FILTER_SANITIZE_NUMBER));
      $CHA = (filter_input(INPUT_POST, 'charisma', FILTER_SANITIZE_NUMBER));

      foreach($_POST['proficiency'] as $proficiency)
      {
        $proficiencies = $proficiency.",";
      }
      $proficiencies = substr($proficiencies, 0, -1);

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
      if(!preg_match("/^[0-9]*$/", $exp))//Name Must contain only letters & spaces
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
      header('Location: ../View/creatCharacter.php?error='.$errorString);
    }
    else // Continue with the character creation
    {
      $userid = $_SESSION['userid'];
      $unique = GenerateUniqueCode($userid);

      $query = $connection->prepare
      ("

      INSERT INTO Player_Character (User_ID, Name, Alignment, RaceName, ClassName, AC, Max_HP, Strength, Dexterity, Constitution, Intelligence, Wisdom, Charisma, Proficiencies )
      VALUES(:user_id, :name, :alignment, :exp, :race, :class, :ac, :hp, :str, :dex, :con, :int, :wis, :cha, :proficiencies)

      ");

      // Runs and executes the query
      $success = $query->execute
      ([
        'user_id' => $userid,
        'name' => $name,
        'alignment' => $alignment,
        'exp' => $exp,
        'race' => $race,
        'class' => $class,
        'ac' => $ac,
        'hp' => $hp,
        'str' => $STR,
        'dex' => $DEX,
        'con' => $CON,
        'int' => $INT,
        'wis' => $WIS,
        'cha' => $CHA,
        'proficiencies' => $proficiencies
      ]);

      // If rows returned is more than 0 Let us know if it inserted or not.
      $count = $query->rowCount();
      if($count > 0)
      {
        echo "Insert Successful";
        //header('location: ../View/index.php');
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
    $errorString = ":You Must Accept the Cookie policy and login to create a character.";
    header('Location: ../View/userLogin.php?error='.$errorString);
  }
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

// Get Character's details in the DM's Session
// Testing for only character id 2 just now
function GetSessionCharacters()
{
  require 'connection.php';

  $sessionCharacter = 1;

  $sql = "SELECT * FROM Player_Character WHERE Character_ID = :characterID";

  $stmt = $connection->prepare($sql);
  $success = $stmt->execute(['characterID' => $sessionCharacter]);

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
    echo "SQL Failed";
    return null;
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
    $spell = file_get_contents("https://api.open5e.com/spells/".$spellName); //Get a list of search results from the Open5E API
    return $spell; //Return the results
  }
}

function GetAllMonsters()
{
  $monsters = file_get_contents("https://api.open5e.com/spells/"); //Get a list of search results from the API
  return $monsters; //Return the results
}

function GetMonsterByName()
{
  if(isset($_POST['getMonsterByName']))
  {
    $monsterName = (filter_input(INPUT_POST, 'monsterName', FILTER_SANITIZE_STRING)); // Sanitize the string
    $monsterName = str_replace(' ', '-', $monsterName); // Replace any whitespace with '-' symbols to work on a url
    $monster = file_get_contents("https://api.open5e.com/monsters/".$monsterName); // Get a list of search results from the Open 5e API
    return $monster; //Return the results
  }
}

function Roll()
{
  $amount = (filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_NUMBER));
  $dice = (filter_input(INPUT_POST, 'dice', FILTER_SANITIZE_NUMBER));

  $count = 0;
  while ($count <= $amount)
  {
    $number = Rand(1,$dice);
    echo $number;
  }
}

?>
