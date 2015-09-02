<?php

session_start();

$_SESSION['deleteID'] = $_POST['editID'];
$id = $_SESSION['deleteID'];

error_reporting(E_ALL ^ E_DEPRECATED);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// Check connection
// Escape user inputs for security
//
//

$con=mysqli_connect("localhost","kukrejan_root","root123","kukrejan_maindatabase");

//mysql_connect("localhost", "root", "") or die ("could not connect to the server");
//mysql_select_db("maindatabase") or die("this database was not found");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql = "DELETE FROM  student_personal_info WHERE id = '$id';";
$sql .= "DELETE FROM student_login WHERE id = '$id';";

//$sql = mysql_query("DELETE FROM  student_personal_info WHERE id = '$id'");
//$sql .= mysql_query("DELETE FROM student_login WHERE id = '$id'");

if (mysqli_multi_query($con,$sql))
{
    echo "Student $id Has Been Deleted Successfully<br><br>";

} else {
    echo "Student Could Not Be Deleted<br><br>";

}

mysqli_close($con);


 /*
if (mysql_num_rows($sql) != 0) {
    echo "Student Could Not Be Deleted";
} else {
    echo "Student $id Has Been Deleted Successfully";
}
*/
?>

<html>
<body>

<a href="studentHub.php"> Click Here</a> To Go Back To The Student Hub

</body>
</html>
