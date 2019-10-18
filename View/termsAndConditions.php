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
<title>DPH - Home</title>
<body>
  <div class="container text-center">
<h1>Cookie usage</h1>
<p>Cookies are used in this system to keep track of who you are.</br>
  this allows us to keep you logged in and display you the correct information related to you such as characters sheets you have created.</br>
  Any Cookies from us will automatically be removed after a set amount of time.</p>

<h1>Your Details</h1>
<p>The details you provide us on the website are strictly for the systems use.</br>
  Your details will simply be used to allow you to log in view your own data.</p>
<p><text>If you have any questions including recovering a password or you wish to remove any details stored on our system. please contact me via email at </text>DMcRae45@Gmail.com<p>

<h1>Email usage</h1>
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
