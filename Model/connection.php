<?php
/*
    Description: Database Connection and Log in Credentials to the sites database.

    Author: David McRae
 */
// Connection To Abertay
try
{
    // Abertay Credentials
    // $host ='lochnagar.abertay.ac.uk';
    // $dbname = 'sql1403163';
    // $un = 'sql1403163';
    // $pw = 'adbhU2vvBINm';

    // RPi Credentials
    $host ='localhost';
    $dbname = 'Dungeons';
    //$un = 'Pi';
    //$pw = '#R_pi';
    $un = 'root';
    $pw = '';

    $connection = new PDO ("mysql:host=$host;dbname=$dbname;charset=UTF8",$un,$pw);
    //echo "Connection Successful";

}
catch (PDOException $ex)
{
  echo $ex;
    Die("Connection Failed");
}
?>
