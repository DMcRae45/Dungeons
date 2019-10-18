<?php
/*
    Description: Dungeons Terms and conditions page explaining simplified cookie usage.
    Author: David McRae
*/
include 'session.php';
?>
<html>
<!--<head>-->
    <?php
        include 'header.php';
    ?>
<!-- </head> -->
<title>Dungeons - T&C</title>
<body>
  <div class="container text-center">
<h1>Cookie Usage</h1>
<p>Cookies are used in this system to keep track of who you are.</br>
  This allows us to keep you logged in and display you the correct information related to you such as characters sheets you have created.</br>
  Any Cookies from us will automatically be removed after a set amount of time.</p>

<h1>Your Details</h1>
<p>The details you provide us on the website are strictly for the systems use.</br>
  Your details will simply be used to allow you to log in view your own data.</p>

<h1>Email Usage</h1>
<p>Your email will be used exclusively to send you a information regarding security of your account and things you create on this website.</p>

<h1>AGREEMENT</h1>
<p>By registering an account with us you are agreeing to the above stated terms.</p>
</div>


<!-- <footer> -->
        <?php include 'footer.php'; ?>
<!-- </footer> -->

    <?php include '../Controller/bootstrapScript.php'; ?>
    <?php include '../Controller/cookieConsent.php'; ?>
</body>
</html>
