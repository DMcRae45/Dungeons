<?php
/*
    Description: Database Connection and Log in Credentials to the sites database.

    Author: David McRae
 */
try
{
    $host ='lochnagar.abertay.ac.uk';
    $dbname = 'sql1403163';
    $un = 'sql1403163';
    $pw = 'adbhU2vvBINm';

    $connection = new PDO ("mysql:host=$host;dbname=$dbname;charset=UTF8",$un,$pw);
    //echo "Connection Successful";

}
catch (PDOException $ex)
{
    Die("Connection Failed");
}
?>