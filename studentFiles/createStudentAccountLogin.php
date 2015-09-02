<?php

//Start the session
session_start();

//Set session variables
$_SESSION["ID"] = $_POST["studentID"];
$_SESSION["PASS"] = $_POST['password'];

$link = mysqli_connect("localhost", "kukrejan_root", "root123", "kukrejan_maindatabase");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_SESSION["ID"]);
$password = mysqli_real_escape_string($link, $_SESSION["PASS"]);

$sql = "INSERT INTO student_login (id, pass) VALUES ('$id', '$password')";


if(mysqli_query($link, $sql)){
echo "Account created successfully.<br><br>";
echo "<a href='createStudentProfile.html'>Click Here</a> to finish creating your profile.";
} else{
echo "ERROR: Could not create profile.<br> $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);

?>