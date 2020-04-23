<?php
/*
    Description: action to logout the user.
    used to destroy all sessions.

    Author: David McRae
*/
include '../Model/dungeons_API.php';

session_start();
LogOut();
?>
