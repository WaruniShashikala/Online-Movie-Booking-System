<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviebookingsystem";

$connection = mysqli_connect($servername,$username,$password,$dbname);
session_start();

if(issert($_POST['update'])){
    $id = $row['Customer_ID']
    $fname = $row['First_name'];
    $lname = $row['Last_name'];
    $nic = $row['NIC_number'];
    $email = $row['Email'];
    $number = $row['Contact_No'];

    $sql = "UPDATE 'customer' SET 'First_name' = '$fname', 'Last_name' = '$lname', 'NIC_number' = '$nic', 'Email' = '$email', 'Contact_No' = '$number' "

    $result = $connection->query($sql);
    if($result==TRUE){
        echo "Record Update Sucessfully";
    }
    else{
        echo "Error";
    }
}

if(issert($_GET['id'])){
    $id = $GET['Customer_ID'];

    $sql = "SELECT * FROM 'customer' WHERE 'Customer_ID'='$id'";

    $result = $connect->query($sql);

  }
?>

<!DOCTYPE html>

<html>

<head>

<title> Edit Profile Details </title>  <!--Title-->

<link rel="stylesheet" href="Home1.css" >	<!--link css file-->
<link rel="stylesheet" href="profile.css" >

<script src="https://kit.fontawesome.com/05aa69cff2.js" crossorigin="anonymous"></script>

</head>

<body>	<!--start body-->
<header class="header">

<div class="main">

	<div class="navbar">

		<div class="icon">
			<h1 class="logo"> CinemaLK </h1>
		</div>


		<div class="menu">
			<ul class="Hlist">
				<li class="Hl1"><a class="Hl11" href="#">HOME</a></li>
				<li class="Hl2"><a class="Hl12" href="#">MOVIES</a></li>
				<li class="Hl3"><a class="Hl13" href="#">CONTACT</a></li>
				<li class="Hl4"><a class="Hl14" href="#">FEEDBACK</a></li>
				<li class="Hl5"><a class="Hl15" href="#">PROFILE</a></li>
			</ul>
		</div>

		<div class="login">
			<a href="#"> <button class="logbtn">Log In</button></a>
		</div>

		<div class="register">
			<a href="#"> <button class="registerbtn">Register</button></a>
		</div>

		<div class="search">
			<input class="srch" type="search" name="" placeholder="Search..">
			<a href="#"> <button class="btn">Search</button></a>
		</div>
	</div>
</div>
</header><br><br><br><br><br><br>
    <h1>User Profile</h1>
    <form id="profileForm">
        <label for="firstName">First Name:</label>
        <input type="text" id="First_name" value ="<?php echo $fname;?>">
        
        <label for="lastName">Last Name:</label>
        <input type="text" id="Last_name"  value ="<?php echo $lname;?>">
        
        <label for="nic">NIC:</label>
        <input type="text" id="NIC_number"  value ="<?php echo $nic;?>">
        
        <label for="email">Email:</label>
        <input type="email" id="Email"  value ="<?php echo $email;?>">
        
        <label for="contactNumber">Contact Number:</label>
        <input type="tel" id="Contact_No"  value ="<?php echo $number;?>">
        
        <label for="gender">Gender:</label>
        <select id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        
        <input type="submit" value="Save Profile">
    </form>
    <script>
        // Get the profile form element
        var profileForm = document.getElementById('profileForm');

        // Add event listener to the form submission
        profileForm.addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Show the success message
            alert('Update successfully');
        });
    </script>
    <footer>

        <div class="row">
            <div class="col">
                <h2 class="Flogo">CinemaLK</h2>
                <p>We are CinemaLK.You can book tickets to watch latest movies through our web page </p>
            </div>
    
            <div class="col">
                <h3>Links</h3>
                <ul class="Flist">
                    <li class="Fl1"> <a class="Fl11" href="#">Home</a> </li>
                    <li class="Fl2"> <a class="Fl12" href="#">Movies</a> </li>
                    <li class="Fl3"> <a class="Fl13" href="#">About us</a> </li>
                    <li class="Fl4"> <a class="Fl14" href="#">Contact</a> </li>
                    <li class="Fl5"> <a class="Fl15" href="#">Privacy and Policy</a> </li>
                    <li class="Fl6"> <a class="Fl16" href="#">Teams and Conditions</a> </li>
                    <li class="Fl7"> <a class="Fl17" href="#">Feedback</a> </li>
                    <li class="Fl7"> <a class="Fl17" href="#">Profile</a> </li>
                </ul>
            </div>
    
            <div class="col">
    
                <div class="follow">
                    <h3>Follow Us On</h3>
                </div>
    
                <div class="social-icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-pinterest"></i>
                </div>
    
                <div class="email">
                    <p class="emailname"> Email : cinemalk@gmail.com </p>
                </div>
    
            </div>
        </div>
    
        <hr>
    
        <p class="copyright">CinemaLK © 2023 - All Rights Reserved</p>
    
    </footer>
        
        
    </body>
    
    </html>
   </body>
   </html> 