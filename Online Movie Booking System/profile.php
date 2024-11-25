<?php 
    include_once 'header.php';

?>
<!DOCTYPE html>

<html>

<head>
    <title> PROFILE </title>  <!--Title-->
    <link rel="stylesheet" href="stylesheet/profile.css">
</head>

<body>
    <div class="body_profile">
        <div class="title_p">
            <h1>My Account</h1>
            <img src="download.png" alt="profile picture">
        </div>
        <!--left side of the page-->
        <div class="split left"> 
                <div class="container_p">
                    <div class="title_p">Profile Details</div>
                    <form action="#" method="POST">
                        <div class="input-box_p">
                            <span class="details_p">First Name:</span>
                            <input type="text" id="fname" placeholder="First Name" name="fname" value="<?php echo "{$info['First_name']}";?>" required>
                        </div>
                        <div class="input-box_p">
                            <span class="details_p">Last Name:</span>
                            <input type="text" id="lname" placeholder="Last Name" name="lname" value="<?php echo "{$info['Last_name']}";?>" required>
                        </div>
                        <div class="input-box_p">
                            <span class="details_p">NIC:</span>
                            <input type="text" id="NIC" placeholder="NIC" name="nic"value="<?php echo "{$info['NIC_number']}";?>" required>
                        </div>
                        <div class="input-box_p">
                            <span class="details_p">Email:</span>
                            <input type="text" id="Email" placeholder="Email" name="email"value="<?php echo "{$info['Email']}";?>" required>
                        </div>
                        <div class="input-box_p">
                            <span class="details_p">Contact Number:</span>
                            <input type="text" id="Number" placeholder="Contact Number" name="contactnum" value="<?php echo "{$info['Contact_No']}";?>" required>
                        </div>
                        <button class="profile_BTN" type="submit" name="update" value="Update">
                                Update Profile
                        </button>
                        <!-- <input class="btn btn-success" type="submit" name="update" value="Update"> -->
                    </form>
                </div>
            <div class="split right"> <!--right side of the page-->
                <div class="Booking_p">
                    <h3>Booking Details</h3>
                </div>
                <div class="table_p">
                    <table style="width:100%">
                        <br>
                        <tr>
                            <td>Movie Name:</td>
                            <td><input type="text" placeholder="Movie"> </td>
                        </tr>
    
                        <tr>
                            <td>Date:</td>
                            <td><input type="text" placeholder="Date"></td>
                        </tr>
                        <tr>
                            <td>Time:</td>
                            <td><input type="text" placeholder="Time" fixed></td>
                        </tr>
                        <tr>
                            <td>Seat No:</td>
                            <td><input type="text" placeholder="Seat No" fixed></td>
                        </tr>
                    </table><br>
                </div>
                <button class="profile_BTN"type="submit" name="Cancel" value="Cancel">
                Cancel Booking
                </button>
            </div>
        </div>
     
    </body>

</html>

<?php

    include_once 'footer.php';
// insert the footer
?>