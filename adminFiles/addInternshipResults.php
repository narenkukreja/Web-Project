<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "kukrejan_root", "root123", "kukrejan_maindatabase");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$internshipID = mysqli_real_escape_string($link,$_POST['internshipID']);
$orgName = mysqli_real_escape_string($link,$_POST['orgName']);
$empPosition = mysqli_real_escape_string($link,$_POST['empPosition']);
$numPos = mysqli_real_escape_string($link,$_POST['numPos']);
$startDate = mysqli_real_escape_string($link,$_POST['startDate']);
$endDate = mysqli_real_escape_string($link,$_POST['endDate']);
$jobResp = mysqli_real_escape_string($link,$_POST['jobResp']);
$jobReq = mysqli_real_escape_string($link,$_POST['jobReq']);
$salaryInfo = mysqli_real_escape_string($link,$_POST['salaryInfo']);


$sql = "INSERT INTO internshipTable (internshipID, orgName, empPosition, numPos, startDate, endDate, jobResp, jobReq, salaryInfo)
VALUES ( '$internshipID' ,'$orgName' , '$empPosition', '$numPos', '$startDate', '$endDate', '$jobResp', '$jobReq', '$salaryInfo')";


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