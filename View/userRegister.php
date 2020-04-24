<?php
/*
    Description: form used to register a new user to the website.

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
<title>Dungeons - Registration</title>
<body>

<!-- contains the visible web page-->

<!-- Container for the Form -->
<div class="container">

  <div class="page-header">
    <br>
    <img src="images/register.png" class="mx-auto d-block">
      <h1 class="text-center mt-4">Register for an account</h1>
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
        <form class="form-group needs-validation" action="../Controller/attempt_userRegister.php" method="POST" novalidate>

          <!-- Email -->
          <div class="mt-4 form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">Email</span>
            </div>
              <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
                <div class="invalid-feedback">
                  You cannot Leave This field Empty and it must be a valid Email.
                </div>
          </div>

          <!-- Username -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">Username</span>
            </div>
              <input class="form-control" type="text" id="username" name="username" placeholder="Username" required>
                <div class="invalid-feedback">
                  You cannot Leave This field Empty.
                </div>
          </div>

          <!-- Password -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">Password</span>
            </div>
              <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                <div class="invalid-feedback">
                  You cannot Leave This field Empty.
                </div>
          </div>

          <!-- Password Confirmation -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">Password Confirmation</span>
            </div>
            <input class="form-control" type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Password Confirmation" required>
            <div class="invalid-feedback">
              You cannot Leave This field Empty.
            </div>
          </div>

          <!-- Terms and Conditions CheckBox -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
            <a href="termsAndConditions.php" class="btn input-group-text btn-outline-info">Terms & Conditions</a>
            </div>
            <div class="input-group-text">
              <input type="checkbox" value="" id="invalidCheck" required>
            </div>
            <div class="invalid-feedback">
              You Must accept the terms and condition to register for an account.
            </div>
          </div>
          <button class="form-control" type="submit" name="userRegisterSubmit">Register</button>
        </form>
<!-- End Form -->
      <p>Already have an account? Sign in <a href="userLogin.php">here!</a></p>
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
