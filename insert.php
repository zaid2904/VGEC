<?php

session_start();
$con=mysqli_connect('localhost', 'root', '', 'captchadb');
// $_SESSION['CODE']
$Email=$_POST['Email'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Captcha=$_POST['Captcha'];
if($_SESSION['$code']==$Captcha){
echo "submitted successfully";
}
else{
    echo "please enter valid captcha";
}
?>