<?php
include '../Model/session.php';
$details = $_GET['details'];

$_SESSION['characterDetails'] = $details;

header('Location: ../View/screen.php');
?>
