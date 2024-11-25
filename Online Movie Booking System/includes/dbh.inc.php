<?php


$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "moviebookingsystem";

$connection =new mysqli($serverName, $dbUsername, $dbPassword, $dbName);

if($connection -> connect_error ){
    die("connection failed : ");
}