<?php

$link = mysqli_connect("localhost","root","lict@2","first");


$query = "INSERT INTO `first`.`users` (
`id` ,
`first_name` ,
`last_name`
)
VALUES ('".$_POST['id']."','".$_POST['first_name']."','".$_POST['last_name']."');";

mysqli_query($link,$query);
header('location:list.php');
?>
