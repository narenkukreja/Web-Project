<?php
error_reporting(E_ALL ^ E_DEPRECATED);

session_start();

$_SESSION['viewID'] = $_POST['editID'];
$id = $_SESSION['viewID'];

mysql_connect("localhost", "kukrejan_root", "root123") or die ("could not connect to the server");
mysql_select_db("kukrejan_maindatabase") or die("this database was not found");
$userquery = mysql_query("SELECT * FROM student_personal_info WHERE id ='$id'") or die("The query failed please try again");
if(mysql_num_rows($userquery) != 1){
    die("that username could not be found!");
}

while($row = mysql_fetch_array($userquery, MYSQL_ASSOC)){

    $fname = $row['fname']; $lname = $row['lname']; $gender = $row['gender'];
    $term_admit= $row['term_admit']; $year_admit = $row['year_admit']; $email = $row['email'];
    $telephone = $row['telephone']; $address = $row['address']; $city = $row['city'];
    $postal = $row['postal']; $province = $row['province'];$country= $row['country'];
    $citizen_status = $row['citizen_status'];

    $eng_read= $row['eng_read'];$eng_write= $row['eng_write'];$eng_speak = $row['eng_speak'];

    $undergrad_text= $row['undergrad_text'];$major= $row['major'];$undergrad_gpa= $row['undergrad_gpa'];
    $university= $row['university'];$unicountry= $row['unicountry'];$grad_date = $row['grad_date'];

    $company = $row['company'];$datefrom = $row['datefrom'];$dateto = $row['dateto'];
    $position_com = $row['position_com'];$duties = $row['duties'];

    $asp= $row['asp'];$c_lang = $row['c_lang'];$cpp= $row['cpp'];
    $csharp = $row['csharp'];$coldfusion  = $row['coldfusion'];$flex = $row['flex'];
    $java = $row['java'];$javascript = $row['javascript'];$lisp = $row['lisp'];
    $matlab = $row['matlab'];$mysql = $row['mysql'];$objc = $row['objc'];
    $pascal_lang = $row['pascal_lang'];$perl = $row['perl'];$php = $row['php'];
    $prolog = $row['prolog'];$python = $row['python'];$r = $row['r'];
    $ruby = $row['ruby'];$sqloracle = $row['sqloracle'];$tcl = $row['tcl'];
    $tsql= $row['tsql'];$vbnet= $row['vbnet'];$otherskill= $row['otherskill'];
    $otherskillcomp = $row['otherskillcomp'];
    $project_internship = $row['project_internship'];
}


?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Student Sign-Up</title>
    <link href="../css/studentProfile.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="header">

    <h2 style="display:inline;"> <?php echo "$fname $lname's Profile"?></h2>

</div>

<div class="content">

    <h3>Personal Information</h3>
    <hr><br>

    Student ID: <?php echo $_SESSION["viewID"] ?> <br><br>

    First name: <?php echo  $fname; ?><br><br>

  Last name: <?php echo $lname ?> <br><br>  

    Gender: <?php echo $gender ?> <br><br>  

    Term Admitted: <?php echo $term_admit ?> <br><br>

  Year Admitted: <?php echo $year_admit ?> <br><br>  

    Email: <?php echo $email ?> <br><br>  

    Telephone: <?php echo $telephone ?> <br><br>

  Address: <?php echo $address ?> <br><br>  

    City: <?php echo $city ?> <br><br>

  Postal Code: <?php echo $postal ?> <br><br>  

    Province: <?php echo $province ?> <br><br>  

    Country: <?php echo $country ?> <br><br>  

    Citizenship Status: <?php echo $citizen_status ?> <br><br>

    <br><h3>English Language Proficiency</h3><hr><br>

    Read: <?php echo $eng_read ?> <br><br>

    Write: <?php echo $eng_write ?> <br><br>

    Speak:  <?php echo $eng_speak ?> <br><br>

    <br><h3>Student's Education</h3><hr><br>

    Undergraduate Degree(s): <?php echo $undergrad_text ?> <br><br>

    Major: <?php echo $major ?> <br><br>

    Undergraduate Degree(s) GPA: <?php echo $undergrad_gpa ?> <br><br>

    University: <?php echo $university ?> <br><br>

    Country: <?php echo $unicountry ?> <br><br>

    Graduation Date: <?php echo $grad_date ?> <br><br>

    Capstone: <?php echo $project_internship ?> <br><br> &nbsp; Note: This field can only be changed by the Admin.

    <br><h3>Work Experience</h3><hr><br>

    Company: <?php echo $company ?> <br><br>

    Position: <?php echo $position_com ?> <br><br>

    Date From: <?php echo $datefrom?> <br><br>

    Date To: <?php echo $dateto ?> <br><br>

    Duties: <?php echo $duties ?> <br><br>

    <br><h3>Knowledge and Skills</h3><hr><br>

    <table>

        <tr>
            <td>ASP.Net: <?php echo $asp ?> </td>
            <td>

            </td>
        </tr>

        <tr>
            <td>C: <?php echo $c_lang ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>C++: <?php echo $cpp ?> </td>
            <td>

            </td>
        </tr>

        <tr>
            <td>C#: <?php echo $csharp ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>ColdFusion: <?php echo $coldfusion ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Flex: <?php echo $flex ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Java: <?php echo $java ?> </td>
            <td>

            </td>
        </tr>

        <tr>
            <td>JavaScript: <?php echo $javascript ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Lisp: <?php echo $lisp ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Matlab: <?php echo $matlab ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>MySQL: <?php echo $mysql ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Objective-C: <?php echo $objc ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Pascal: <?php echo $pascal_lang ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Perl: <?php echo $perl ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>PHP: <?php echo $php ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Prolog: <?php echo $prolog ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Python: <?php echo $python ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>R: <?php echo $r ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Ruby: <?php echo $ruby ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>SQL-Oracle: <?php echo $sqloracle ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Tcl: <?php echo $tcl ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>T-SQL: <?php echo $tsql ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>VB.NET: <?php echo $vbnet ?></td>
            <td>

            </td>
        </tr>

        <tr>
            <td>Other (Specify): <?php echo $otherskill ?>

            </td>
            <td>
                Other (Competency): <?php echo $otherskillcomp ?>
            </td>

    </table><br><br>
</div>


</body>
</html>