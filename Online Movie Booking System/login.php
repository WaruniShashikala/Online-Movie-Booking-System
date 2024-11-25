<?php
include_once 'header.php';
?>

<!DOCTYPE html>

<html>

    <head>

        <link rel="stylesheet" href="stylesheet/login.css">

    </head>

    <body>

    <div class="loginbody">
        <div class="loginbox">
            
                <img src="images/movie 2.jpg" alt="" class="loginimg">
        
            <div class="loginform">
                <form action="includes/login.inc.php" method = "post">
                    <h3 class="loginheding">Login</h3>
                    <input type="text" placeholder="User Name" class="textfild" name ="uid"> <br>
                    <input type="password" placeholder="Password" class="textfild" name ="pwd">
                    <div class="fogotpwAndRemember">
                    <p class="rememberme"><input type="checkbox">Remember me</p>
                    <p class="forgot"><a class="forgot_" href="forgot.php">Forgot my password</a></p>
                    </div>
                    <input type="submit" value="Login" class="LogAndSingupbutton" name ="submit"> <br>
                    
                    <p class="donthaveac">Don't you have an account ?</p>
                    <a  class="LogAndSingupbutton1" href="registration.php">Sign-up</a>

                </form>
            </div>
        </div>
    </div>

    </body>

</html>

<?php
include_once 'footer.php';
?>