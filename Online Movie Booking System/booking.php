<?php

include_once 'header.php';

require 'includes/dbh.inc.php';

if(isset($_POST["submit"])){

    $theater = $_POST["theater"];
    $date = $_POST["date"];
    $show = $_POST["show"];
    $seat = $_POST["seat"];
}

$query = "INSERT INTO ticket_book VALUES('', '$theater', '$date', '$show', '$seat')";

mysqli_query($connection, $query);

?>

<div class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1>Book Now</h1>
        </div>

        <div class="main-form">
            <form action="" method="post">
                
                <div>
                    <span>Select Theater</span>
                    <select name="theater" id="theater" required>
                        <option value=""></option>
                        <option value="Majestic Cinema">Majestic Cinema</option>
                        <option value="Scope Cinema">Scope Cinema</option>
                        <option value="Savoy Cinema">Savoy Cinema</option>
                        <option value="9D Cinema">9D Cinema</option>
                        <option value="Regal Cinema">Regal Cinema</option>
                    </select>
                </div>

                <div>
                    <span>Date</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>

                <div>
                    <span>Select Showtime</span>
                    <select name="show" id="show" required>
                        <option value=""></option>
                        <option value="10.00">11.00 AM</option>
                        <option value="13.30">1.30 PM</option>
                        <option value="16.00">4.00 PM</option>
                        <option value="18.30">6.30 PM</option>
                        <option value="21.00">9.00 PM</option>
                    </select>
                </div>

                <div>
                    <span>Number of seats</span>
                    <select name="seat" id="seat" required>
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div id="submit">
                    <input type="submit" value="CONFIRM" id="submit">
                </div>


            </form>
        </div>

    </div>

</div>

<?php

    include_once 'footer.php';


?>