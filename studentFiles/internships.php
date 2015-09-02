<html>
<head>
    <title>Internships</title>
    <link href="../css/studentProfile.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header">
    <h2 align="center">Internships</h2>
</div>

<div class="content">
    <h3 align="center">Employers</h3>

    <table align="center" border="1">
        <tr>
            <th>Organization Name</th>
            <th>Employer Type</th>
            <th>Contact Person</th>
            <th>Address</th>
            <th>Website</th>
            <th>Telephone</th>
            <th>E-Mail</th>
        </tr>
<?php

session_start();

error_reporting(E_ALL ^ E_DEPRECATED);

mysql_connect("localhost", "kukrejan_root", "root123") or die ("could not connect to the server");
mysql_select_db("kukrejan_maindatabase") or die("this database was not found");
$userquery = mysql_query("SELECT * FROM employerTable") or die("The query failed please try again");
if(mysql_num_rows($userquery) == 0){
    die("Not Found");
}

while($row = mysql_fetch_array($userquery, MYSQL_ASSOC)){


    echo "<tr>";

    echo "<td> $row[orgName] </td>";
    echo "<td> $row[empType] </td>";
    echo "<td> $row[contactPerson] </td>";
    echo "<td> $row[address] </td>";
    echo "<td> $row[website] </td>";
    echo "<td> $row[telephone] </td>";
    echo "<td> $row[email] </td>";

}

 ?>

        <br><br>

        </table>


    <h3 align="center">Internships</h3>

    <table align="center" border="1">
        <tr>
            <th>Internship ID</th>
            <th>Organization Name</th>
            <th>Position</th>
            <th>Vacancies</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Job Responsibilities</th>
            <th>Job Requirements</th>
            <th>Salary Info</th>
        </tr>


<?php

$userquery2 = mysql_query("SELECT * FROM internshipTable") or die("The query failed please try again");

if(mysql_num_rows($userquery2) == 0){
    die("Not Found");
}

while($row = mysql_fetch_array($userquery2, MYSQL_ASSOC)){



    echo "<tr>";

    echo "<td> $row[internshipID] </td>";
    echo "<td> $row[orgName] </td>";
    echo "<td> $row[empPosition] </td>";
    echo "<td> $row[numPos] </td>";
    echo "<td> $row[startDate] </td>";
    echo "<td> $row[endDate] </td>";
    echo "<td> $row[jobResp] </td>";
    echo "<td> $row[jobReq] </td>";
    echo "<td> $row[salaryInfo] </td>";

    echo "</tr>";

}

?>

        </table>
</div>


</body>

</html>
