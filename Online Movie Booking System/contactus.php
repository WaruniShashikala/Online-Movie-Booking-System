
<?php 

    include_once 'header.php';
// insert the header
?>

<?php
if(isset($_POST['submit'])){ //check the submit button is clicked and get in user entered details of text field for variable
    $fullname =$_POST['Fullname'];
    $email = $_POST['Email'];
    $subject= $_POST['telno'];
    $message = $_POST['message'];

    $to ="cinemalk25@gmail.com";  //Your Email Address
    $mailsubject = "Message from website";
    $email_body ="message from contactus page of the website : <br>";
    $email_body .= "<br>from:</br> {$fullname} <br>";
    $email_body .="<br> subject: </br> {$subject} <br>";
    $email_body .= "<br>message:</br><br>" .nl2br(strip_tags($message));

    $header ="from: {$email}\r\ncontent-type: text/html;";

    $send_mail_result =mail($to, $mailsubject, $email_body, $header);

    if($send_mail_result){
        echo "message sent";
    }else{
        echo "message not sent";
    }
}
?>


<!DOCTYPE html>

<html>

<head>

     <link rel="stylesheet" href="stylesheet/contactus_.css">


</head>

<body>

<div class="contactusbody">
    <div class="contactusbox">
        <h2 class="contactusheading">Contact us</h2>
        <hr>
        <div class="contactusDetailsbox">

        <!--contact us ditails section -->    
            <div class="details">
            <div class="info_"><i class="fas fa-phone" aria-hidden="true"></i>
            <p class="info_p">Telephone</p></div><br>
                <p>+94 11xxxxxxx <br>
                +94 11xxxxxxx <br>
                +94 11xxxxxxx <br></p>

            </div>

            <div class="details">
            <div class="info_"><i class="fas fa-envelope" aria-hidden="true"></i>
            <p class="info_p">E-mail</p></div><br>
                cinemalk@gmail.com <br></p>
            </div>
            
            <div class="details">
            <div class="info_"><i class="fa fa-map-marker" aria-hidden="true"></i>
            <p class="info_p">Address</p></div><br>
                no.x,hygdyf, <br>
                ggdgcfugadhhg,hhjefuhfwhr, <br>
                udgugdugg.</p>
            </div>
        </div>
<!--contact us form-->
        <form action="contactus.php" method="post" class="contactusform">
            <div class="contactinput">
            <p class="lable">Full name </p>
            <p class="symbol1">:</p>
            <input type="text" class="contactusinput" name="Fullname"> <br>
            </div>

            <div class="contactinput">
            <p class="lable">E-mail </p>
            <p class="symbol2">:</p>
            <input type="text" class="contactusinput" name="Email"> <br>
            </div>
            
            <div class="contactinput">
            <p class="lable">Telephone </p>
            <p class="symbol3">:</p>
            <input type="text" class="contactusinput" name="telno"> <br>
            </div>

            <div class="contactinput">
            <p class="lable">Message </p>
            <p class="symbol4">:</p>
            <textarea id="" cols="30" rows="50" class="contactusinputarea" name="message"></textarea>
            </div>

            <button class="contactus_submit" name="submit" type="submit">Submit</button>

        </form>
    </div>
</div>
</div>

</body>

</html>

<?php

    include_once 'footer.php';
// insert the footer
?>