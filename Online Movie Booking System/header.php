<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title> CinemaLK </title>  <!--Title-->

<link rel="stylesheet" href="stylesheet/style.css" >	<!--link css file-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

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
				<li class="Hl1"><a class="Hl11" href="Home.php">HOME</a></li>
				<li class="Hl2"><a class="Hl12" href="movies.php">MOVIES</a></li>
				<li class="Hl3"><a class="Hl13" href="contactus.php">CONTACT</a></li>
				<li class="Hl4"><a class="Hl14" href="feedback.php">FEEDBACK</a></li>
				<li class="Hl5"><a class="Hl15" href="profile.php">PROFILE</a></li>
				<h3 class="hello"><?php
				if(isset($_SESSION["username"])){
   				 echo "Hello <br>"; echo $_SESSION["username"].'!';
				}?>
				</h3>
			</ul>

		</div>


		<div class="login">
			
		<?php
if(isset($_SESSION["username"])){
    echo '<a href="includes/logout.inc.php"><button class="logbtn">Log-Out</button></a>';
}else{
    echo '<a href="login.php"><button class="logbtn">Sign In</button></a>';
}?>
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