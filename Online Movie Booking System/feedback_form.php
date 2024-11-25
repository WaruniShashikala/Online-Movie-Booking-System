<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "moviebookingsystem";

$connection = mysqli_connect($servername, $username, $password, $database);

if ($connection == false) {
	die("Error: can not connect to database " . mysqli_connect_error());
}
?>

<!DOCTYPE html>

<html>

<head>

	<title> FEEDBACK FORM </title> <!--Title-->

	<link rel="stylesheet" href="stylesheet/feedback_form.css"> <!--link css file-->
	<link rel="stylesheet" href="stylesheet/feedback_form.css">

	<script src="https://kit.fontawesome.com/05aa69cff2.js" crossorigin="anonymous"></script>

</head>

<body> <!--start body-->

	<header class="header">

		<div class="main">

			<div class="navbar">

				<div class="icon">
					<h1 class="logo"> CinemaLK </h1>
				</div>


				<div class="menu">
					<ul class="Hlist">
						<li class="Hl1"><a class="Hl11" href="Home.php">HOME</a></li>
						<li class="Hl2"><a class="Hl12" href="movies.php">MOVIES</a></li>
						<li class="Hl3"><a class="Hl13" href="contactus.php">CONTACT</a></li>
						<li class="Hl4"><a class="Hl14" href="feedback.php">FEEDBACK</a></li>
						<li class="Hl5"><a class="Hl15" href="#">PROFILE</a></li>
					</ul>
				</div>

				<div class="login">
					<a href="login.php"> <button class="logbtn">Log In</button></a>
				</div>

				<div class="register">
					<a href="registration.php"> <button class="registerbtn">Register</button></a>
				</div>

				<div class="search">
					<input class="srch" type="search" name="" placeholder="Search..">
					<a href="#"> <button class="btn">Search</button></a>
				</div>


			</div>

		</div>

	</header>




	<!--create form header-->
	<div class="container">
		<h1 class="formName">FEEDBACK FORM</h1>
		<form method="post" action="">
			<!--create form -->

			<label for="name">NAME</label>
			<input type="text" name="name" placeholder="Enter your name" required>
			<!--create input field to input name-->




			<label for="feedback">FEEDBACK</label>
			<textarea id="feedback" name="feedback" placeholder="enter your feedback" rows="7" autocomplete="off"
				required></textarea> <!--create textarea to input feedback-->



			<label for="number">RATING STARS(1-5)</label>
			<input type="number" id="rate" name="rate" min=1 max=5 required> <!--create input field to input ratings-->

			<!--create submit and reset buttons-->
			<input type="submit" name="submit" id="submit" value="Submit">
			<button type="reset" id="reset">Reset</button>


		</form>

	</div>
	<!--end of the form-->








	<footer>

		<div class="row">
			<div class="col">
				<h2 class="Flogo">CinemaLK</h2>
				<p>We are CinemaLK.You can book tickets to watch latest movies through our web page </p>
			</div>

			<div class="col">
				<h3>Links</h3>
				<ul class="Flist">
					<li class="Fl1"> <a class="Fl11" href="Home.php">Home</a> </li>
					<li class="Fl2"> <a class="Fl12" href="movies.php">Movies</a> </li>
					<li class="Fl3"> <a class="Fl13" href="aboutus.php">About us</a> </li>
					<li class="Fl4"> <a class="Fl14" href="contactsu.php">Contact</a> </li>
					<li class="Fl5"> <a class="Fl15" href="#">Privacy and Policy</a> </li>
					<li class="Fl6"> <a class="Fl16" href="#">Teams and Conditions</a> </li>
					<li class="Fl7"> <a class="Fl17" href="feedback.php">Feedback</a> </li>
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

<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$feedback = $_POST['feedback'];
	$rate = $_POST['rate'];

	$sql = "INSERT INTO feedback (name , feedback , rating) VALUES ('$name','$feedback',$rate);";
	$result = mysqli_query($connection, $sql);
	echo "alert(\"Feedback successfilly Submitted\");";
}
?>