<?php

session_start();

error_reporting(E_ALL ^ E_DEPRECATED);
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];
} else die("You need  to specify a username!");

mysql_connect("localhost", "kukrejan_root", "root123") or die ("could not connect to the server");
mysql_select_db("kukrejan_maindatabase") or die("this database was not found");
$userquery = mysql_query("SELECT * FROM student_login WHERE id ='$id' AND pass = '$pass'") or die("The query failed please try again");
if(mysql_num_rows($userquery) != 1){
    die("That username/password could not be found!");
}
else if(mysql_num_rows($userquery) == 1){
    $_SESSION["ID"] = $_POST['id'];
    $_SESSION["PASS"] = $_POST['pass'];
}

while($row = mysql_fetch_array($userquery, MYSQL_ASSOC)){

    $id = $_SESSION["ID"];
    $pass = $_SESSION["PASS"];
}

?>

<html>

<body>

<?php echo "Student " . $id . " Login Successful" ?> <br><br>

<a href="studentDash.php">Click Here</a> To Go To Your Dashboard</a>

</body>

</html>
