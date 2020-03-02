<?php
/*
    Description: Database Connection and Log in Credentials to the sites database.

    Author: David McRae
 */
// Connection To Abertay
try
{
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
  Die("Connection Failed");
}
?>
