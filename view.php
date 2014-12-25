<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "first");

$query = "select * from users WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);


//header('location:list.php');

?>

