<?php
print_r($_REQUEST);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$byear = $_POST['byear'];
$bmonth = $_POST['bmonth'];
$bday = $_POST['bday'];
$hobby = $_POST['hobby'];
$ffood = $_POST['ffood'];
$Comment = $_POST['Comment'];
$dob= $_POST['byear'].'-'.$_POST['bmonth'].'-'.$_POST['bday'];

$link = mysqli_connect("localhost","root","lict@2","ftfl_book");

$query = "INSERT INTO `ftfl_book`.`users` (`fname`, `lname`, `email`, `password`, `gender`, `hobby`, `ffood`,`Comment`, `created`, `modified`, `dob`)
VALUES ('$fname', '$lname', '$email', '$password', '$gender', '$hobby', '$ffood','$Comment', NOW( ) , NOW( ), '$dob');";
//echo $query;
mysqli_query($link, $query);
?>
<a href="create.html">Go Back</a>
