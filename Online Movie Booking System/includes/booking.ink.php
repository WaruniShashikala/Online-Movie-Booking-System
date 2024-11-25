<?php

    require_once 'includes/dbh.inc.php';

    if(isset($_POST['submit'])){

        $Theater_Name = $_POST["theater"];
        $Date = $_POST["date"];
        $Show_Time = $_POST["show"];
        $Num_Of_Seats = $_POST["seat"];

        $sql = "INSERT INTO ticket_book VALUES('Theater', 'Date', 'Show_Time', 'Num_Of_Seats')";

        $result = mysqli_query($connection, $sql);
    }

?>