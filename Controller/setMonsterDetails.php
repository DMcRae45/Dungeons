<?php
include '../Model/session.php';
$details = $_GET['details'];

$_SESSION['monsterDetails'] = $details;

header('Location: ../View/screen.php');
?>
