<html>
<head>
    <title>Term/Year</title>
    <link href="../css/studentProfile.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="header">
        <h2 align="center">Year/Semester Search Results</h2>
    </div>

    <div class="content">

        <br>
        <table align = "center">


        <?php
        error_reporting(E_ALL ^ E_DEPRECATED);
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        // Check connection
        // Escape user inputs for security
        mysql_connect("localhost", "kukrejan_root", "root123") or die ("could not connect to the server");
        mysql_select_db("kukrejan_maindatabase") or die("this database was not found");


        if (isset($_POST['admit_answer'])) {

            if($_POST['admit_answer'] == 'semester'){
                $searchTerms = $_POST['searchTerms'];
                $sql = mysql_query("SELECT * FROM student_personal_info WHERE term_admit = '$searchTerms'");

                if (mysql_num_rows($sql) == 0){
                    echo "Student Not Found";
                }
                else {
                    while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

                        $id = $row['id'];

                        echo "<tr>";

                        echo "<td> $row[id] </td>";
                        echo "<td> $row[fname] </td>";
                        echo "<td> $row[lname] </td>";
                        echo "<form method='post' action='viewStudentProfile.php'><td><button type='submit' name='editID' value='$id'>View Profile</button></td></form>";

                        echo "</tr>";

                    }
                }

            }

            if($_POST['admit_answer'] == 'year'){
                $searchTerms = $_POST['searchTerms'];
                $sql = mysql_query("SELECT * FROM student_personal_info WHERE year_admit = '$searchTerms'");

                if (mysql_num_rows($sql) == 0){
                    echo "Student Not Found";
                }
                else {
                    while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

                        $id = $row['id'];

                        echo "<tr>";
                        echo "<td> $row[id] </td>";
                        echo "<td> $row[fname] </td>";
                        echo "<td> $row[lname] </td>";
                        echo "<form method='post' action='viewStudentProfile.php'><td><button type='submit' name='editID' value='$id'>View Profile</button></td></form>";

                        echo "</tr>";

                    }
                }
            }

        } else {
            echo "No records found.";
        }

        ?>


</table>

</div>
</body>
</html>

