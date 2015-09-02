<html>
<head>
    <title>Search Results</title>
    <link href="../css/studentProfile.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="header">
        <h2 align="center">Search Results</h2>
    </div>

    <div class="content">

        echo "<table align="center" border="1">";

            <?php
        error_reporting(E_ALL ^ E_DEPRECATED);
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        // Check connection
        // Escape user inputs for security
        //
        //
        mysql_connect("localhost", "kukrejan_root", "root123") or die ("Could not connect to the server");
        mysql_select_db("kukrejan_maindatabase") or die("This database was not found");
        $searchTerms = $_POST['searchTerms'];
        $clause = " WHERE ";//Initial clause
        if(isset($_POST['submit'])) {
            if (isset($_POST['criteria'])) {

                $array = $_POST['criteria'];

                $array_length = count($array);


                if ($array_length == 1) {

                    if ($array[0] == 'student') {
                        $sql = mysql_query("SELECT * FROM student_personal_info WHERE
                id LIKE '%" . $searchTerms . "%' OR
                fname LIKE '%" . $searchTerms . "%' OR
                lname LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Not Found.<br>";
                        } else {

                            echo "<tr><th colspan='3'>Students</th></tr>";

                            echo "<tr>";
                                echo "<th>Student ID</th>";
                                echo "<th>First Name</th>";
                                echo "<th>Last Name</th>";

                            echo "</tr>";


                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

                                echo "<tr>";

                                echo "<td> $row[id] </td>";
                                echo "<td> $row[fname] </td>";
                                echo "<td> $row[lname] </td>";

                                echo "</tr>";



                            }
                        }
                    } elseif ($array[0] == 'faculty') {
                        $sql = mysql_query("SELECT * FROM adminTable WHERE
                adminID LIKE '%" . $searchTerms . "%' OR
                adminFname LIKE '%" . $searchTerms . "%' OR
                adminLname LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Not Found";
                        } else {

                            echo "<tr><th colspan='3'>Faculty</th></tr>";

                            echo "<tr>";

                            echo "<th>Admin/Faculty ID</th>";
                            echo "<th>First Name</th>";
                            echo "<th>Last Name</th>";

                            echo "</tr>";


                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {


                                echo "<tr>";

                                echo "<td> $row[adminID] </td>";
                                echo "<td> $row[adminFname] </td>";
                                echo "<td> $row[adminLname] </td>";

                                echo "</tr>";


                            }
                        }
                    } else {
                        $sql = mysql_query("SELECT * FROM employerTable WHERE
                orgName LIKE '%" . $searchTerms . "%' OR
                empType LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Not Found";
                        } else {

                            echo "<tr><th colspan='2'>Employers</th></tr>";

                            echo "<tr>";

                            echo "<th>Employer Name</th>";
                            echo "<th>Employer Type</th>";

                            echo "</tr>";

                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

                                echo "<tr>";

                                echo "<td> $row[orgName] </td>";
                                echo "<td> $row[empType] </td>";

                                echo "</tr>";

                            }

                        }
                    }
                }

///ARRAY LENGTH = 2

                if ($array_length == 2) {

                    if ($array[0] == 'student') {
                        $sql = mysql_query("SELECT * FROM student_personal_info WHERE
                id LIKE '%" . $searchTerms . "%' OR
                fname LIKE '%" . $searchTerms . "%' OR
                lname LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Not Found";
                        } else {

                            echo "<tr><th colspan='3'>Students</th></tr>";

                            echo "<tr>";

                            echo "<th>Student ID</th>";
                            echo "<th>First Name</th>";
                            echo "<th>Last Name</th>";

                            echo "</tr>";


                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

                                echo "<tr>";

                                echo "<td> $row[id] </td>";
                                echo "<td> $row[fname] </td>";
                                echo "<td> $row[lname] </td>";

                                echo "</tr>";
                            }
                        }
                    }

                    if ($array[0] == 'faculty' || $array[1] == 'faculty') {
                        $sql = mysql_query("SELECT * FROM adminTable WHERE
                adminID LIKE '%" . $searchTerms . "%' OR
                adminFname LIKE '%" . $searchTerms . "%' OR
                adminLname LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Student Not Found";
                        } else {

                            echo "<tr><th colspan='3'>Faculty</th></tr>";

                            echo "<tr>";

                            echo "<th>Admin/Faculty ID</th>";
                            echo "<th>First Name</th>";
                            echo "<th>Last Name</th>";

                            echo "</tr>";


                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {


                                echo "<tr>";

                                echo "<td> $row[adminID] </td>";
                                echo "<td> $row[adminFname] </td>";
                                echo "<td> $row[adminLname] </td>";

                                echo "</tr>";
                            }
                        }
                    }
                    if($array[0] == 'employer' || $array[1] == 'employer') {

                        $sql = mysql_query("SELECT * FROM employerTable WHERE
                orgName LIKE '%" . $searchTerms . "%' OR
                empType LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Student Not Found";
                        } else {

                            echo "<tr><th colspan='2'>Employers</th></tr>";

                            echo "<tr>";
                            echo "<th>Employer Name</th>";
                            echo "<th>Employer Type</th>";

                            echo "</tr>";

                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

                                echo "<tr>";

                                echo "<td> $row[orgName] </td>";
                                echo "<td> $row[empType] </td>";

                                echo "</tr>";
                            }

                        }
                    }
                }

                //ARRAY LENGTH = 3
                if ($array_length == 3) {

                    if ($array[0] == 'student') {
                        $sql = mysql_query("SELECT * FROM student_personal_info WHERE
                id LIKE '%" . $searchTerms . "%' OR
                fname LIKE '%" . $searchTerms . "%' OR
                lname LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Student Not Found";
                        } else {
                            echo "<tr><th colspan='3'>Students</th></tr>";
                            echo "<tr>";
                            echo "<th>Student ID</th>";
                            echo "<th>First Name</th>";
                            echo "<th>Last Name</th>";
                            echo "</tr>";


                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

                                echo "<tr>";

                                echo "<td> $row[id] </td>";
                                echo "<td> $row[fname] </td>";
                                echo "<td> $row[lname] </td>";

                                echo "</tr>";
                            }
                        }
                    }

                    if ($array[1] == 'faculty') {
                        $sql = mysql_query("SELECT * FROM adminTable WHERE
                adminID LIKE '%" . $searchTerms . "%' OR
                adminFname LIKE '%" . $searchTerms . "%' OR
                adminLname LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Student Not Found";
                        } else {

                            echo "<tr><th colspan='3'>Faculty</th></tr>";
                            echo "<tr>";
                            echo "<th>Admin/Faculty ID</th>";
                            echo "<th>First Name</th>";
                            echo "<th>Last Name</th>";
                            echo "</tr>";


                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {


                                echo "<tr>";

                                echo "<td> $row[adminID] </td>";
                                echo "<td> $row[adminFname] </td>";
                                echo "<td> $row[adminLname] </td>";

                                echo "</tr>";
                            }
                        }
                    }
                    if($array[2] == 'employer') {

                        $sql = mysql_query("SELECT * FROM employerTable WHERE
                orgName LIKE '%" . $searchTerms . "%' OR
                empType LIKE '%" . $searchTerms . "%'");

                        if (mysql_num_rows($sql) == 0) {
                            echo "Not Found";
                        } else {

                            echo "<tr><th colspan='2'>Employers</th></tr>";
                            echo "<tr>";
                            echo "<th>Employer Name</th>";
                            echo "<th>Employer Type</th>";
                            echo "</tr>";

                            while ($row = mysql_fetch_array($sql, MYSQL_ASSOC)) {

                                echo "<tr>";

                                echo "<td> $row[orgName] </td>";
                                echo "<td> $row[empType] </td>";

                                echo "</tr>";
                            }

                        }
                    }
                }

            }

            echo "</table>";

        }

        ?>

    </div>

</body>
</html>


