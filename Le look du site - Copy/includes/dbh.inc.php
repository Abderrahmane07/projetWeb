<?php

$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="projetweb";

$conn=mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// si la connexion échoue

if (!$conn){
    die("failed connection" . mysqli_connect_error());
}