<?php

include 'databaseConnection.php';

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

    <a href="../index.php"><input id="button" type="button" value="Logout"/></a>
    <a href="editStudentProfile.php"><input id="button" type="button" value="Edit Profile"/></a>



<h3>Personal Information</h3>
    <hr><br>

    Student ID: <?php echo $_SESSION["ID"] ?> <br><br>

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