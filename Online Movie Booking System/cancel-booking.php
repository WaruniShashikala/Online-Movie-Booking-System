<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviebookingsystem";

$connect = mysqli_connect($servername,$username,$password,$dbname);
session_start();

if(issert())

    $sql "DELETE FROM 'customer' WHERE 'Customer_ID'='$id'";

    $result = $con->query($sql);

    if ($result == TRUE) {
        echo "Record deleted succrssfully.";
    }else{
        echo "Error"
    }
