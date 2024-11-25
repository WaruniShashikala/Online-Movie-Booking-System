<?php
if(isset($_POST["submit"])){
    $username = $_POST["uid"];
    $lastname = $_POST["lname"];
    $emails = $_POST["mails"];
    $nicNumber = $_POST['nic'];
    $contactNo = $_POST["contactno"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    $emptyInput = emptyInputSignup($username,$lastname,$emails,$nicNumber,$contactNo,$pwd,$pwdRepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($emails);
    $pwsMatch = pwdMathch($pwd , $pwdRepeat);
    $uidExists = uidExists($connection, $username ,$emails);

    if($emptyInput !== false){
        header("Location:../registration.php?error=emptuinput");
        exit();
    }
    if($invalidUid !== false){
        header("Location:../registration.php?error=invaliduid");
        exit();
    }
    if($invalidEmail !== false){
        header("Location:../registration.php?error=invalidemail");
        exit();
    }
    if($pwsMatch !== false){
        header("Location:../registration.php?error=passworddontmatch");
        exit();
    }
    if($uidExists !== false){
        header("Location:../registration.php?error=usernametaken");
        exit();
    }

    createUser($connection,$username,$lastname,$emails,$nicNumber,$contactNo,$pwd);

    
}
else{
    header('Location:../login.php');
    exit();
}