<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "kukrejan_root", "root123", "kukrejan_maindatabase");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$orgName = mysqli_real_escape_string($link,$_POST['orgName']);
$empType = mysqli_real_escape_string($link,$_POST['empType']);
$contactPerson = mysqli_real_escape_string($link,$_POST['contactPerson']);
$address = mysqli_real_escape_string($link,$_POST['address']);
$website = mysqli_real_escape_string($link,$_POST['website']);
$telephone = mysqli_real_escape_string($link,$_POST['telephone']);
$email = mysqli_real_escape_string($link,$_POST['email']);

$sql = "INSERT INTO employerTable (orgName, empType, contactPerson, address, website, telephone, email)
VALUES ( '$orgName' , '$empType', '$contactPerson', '$address', '$website', '$telephone', '$email')";


if(mysqli_query($link, $sql)){
    echo "Data was added succesfully to the database.<br><br>";
    echo "<a href='adminDash.php'>Click Here</a> to go back to the admin dashboard";
    //Removing session variables
    session_unset();


} else{
    echo "ERROR: Could not enter data provided<br> $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);