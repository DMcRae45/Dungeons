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

// Get Character's details in the DM's Session
// Testing for only character id 2 just now
function GetCharacters()
{
  require 'connection.php';

  $sessionCharacter = 2;

  $sql = "SELECT * FROM Player_Character Where Character_ID = $sessionCharacter";

  $stmt = $pdo->prepare($sql);
  $result = $stmt->fetch();
  $success = $stmt->execute();

  if($success && $stmt->rowCount() > 0)
  {
    //  convert to JSON
    $rows = array();
    while($r = $stmt->fetch())
    {
      $rows[] = $r;
    }
    return json_encode($rows);
  }
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
  $spells = file_get_contents("https://api.open5e.com/spells/"); //Get a list of search results from the API
  return $spells; //Return the results
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
