<html>
<head>
    <title>Edit Students</title>
    <link href="../css/studentProfile.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="header">
    <h2>Edit Students</h2>
</div>

<div class="content">

    <table align="center" border="1">

        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>


<?php

error_reporting(E_ALL ^ E_DEPRECATED);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// Check connection
// Escape user inputs for security
//
//
mysql_connect("localhost", "kukrejan_root", "root123") or die ("could not connect to the server");
mysql_select_db("kukrejan_maindatabase") or die("this database was not found");

$sql = mysql_query("SELECT * FROM student_personal_info");

if (mysql_num_rows($sql) == 0) {
    echo "Student Not Found";
} else {

    while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

        $id = $row['id'];

        echo "<tr>";

        echo "<td> $row[id] </td>";
        echo "<td> $row[fname] </td>";
        echo "<td> $row[lname] </td>";
        echo "<form method='post' action='adminEditStudentProfile.php'><td><button type='submit' name='editID' value='$id'>Edit Profile</button></td></form><br>";

        echo "</tr>";

    }
}


?>

    </table>


</div>


</body>
</html>


