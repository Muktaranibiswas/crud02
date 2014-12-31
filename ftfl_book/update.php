<?php
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$password = $_POST['password'];
$gender = $_POST['gender'];
$byear = $_POST['byear'];
$bmonth = $_POST['bmonth'];
$bday = $_POST['bday'];
$dob= $_POST['byear'].'-'.$_POST['bmonth'].'-'.$_POST['bday'];
$hobby = $_POST['hobby'];
$ffood = $_POST['ffood'];
$Comment = $_POST['Comment'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");

$query = "UPDATE `ftfl_book`.`users` SET `fname` = '".$fname."',
`lname` = '".$lname."',
`email` = '".$email."',
`password` = '".$password."',
`gender` = '".$gender."',
`dob` = '".$dob."',
`hobby` = '".$hobby."',
`ffood` = '".$ffood."',
`Comment` = '".$Comment."'

WHERE `users`.`id` = $id;";

mysqli_query($link, $query);
header('location:list.php');
?>