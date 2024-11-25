<?php
include_once 'header.php';
?>
   
   <!DOCTYPE html>

   <html>

   <head>

        <link rel="stylesheet" href="stylesheet/forgot.css">

   </head>

   <body>

   <div class="forgot_container">
    <div class="forgot_box">
    <div class="forgot_form">
    <form action="" class="forgot_form">
        <h2 class="forgot_h2">Reset Password</h2>
        <div class="forgot_input_">
            <input type="text" name="username" class="forgot_inputbox_" placeholder="User Name"><br>
            <input type="password" name="new_password" class="forgot_inputbox_" placeholder="New Password"><br>
            <input type="password" name="password" class="forgot_inputbox_" placeholder="Re-enter Password"><br>
        </div> 
            <input type="submit" value="Save" class="forgot_save" id="forgot_submit">
    </form>
    </div>
        <div class="forgot_img_">
            <img src="images/forgot.jpg" alt="forgot password image" class="forgot_img">
        </div>
    </div>
   </div>

   </body>

   </html>

<?php
include_once 'footer.php';
?>