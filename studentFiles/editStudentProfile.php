<?php
include 'editDatabaseConnection.php';
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link href="../css/createStudentProfile.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="header">
    <h2>Edit Student Account</h2>
</div>

<div class="content">
    <form action="modify.php" method="post">

        <br>
        <div class="button">
            <input id="submit" type="submit" value="Update">
        </div>
        <br>

        <h3>Personal Information</h3>
        <hr><br>
        * indicates a required field
        <br><br><br>

        *Student ID: <input type="text" name="studentID" size="35" value="<?php echo $id ?>" readonly required> Note: Student ID cannot be changed.<br><br>

        *Password: <input type="text" name="password" size="35" value="<?php echo $_SESSION["PASS"] ?>" required><br><br>

        *First name: <input type="text" name="firstname" size="35" value="<?php echo $fname; ?>" required><br><br>

        *Last name: <input type="text" name="lastname" size="35" value="<?php echo $lname; ?>" required><br><br>

        Gender: <?php echo "$gender<br><br>";
        if ($gender == "Male"){
            echo "<input type=\"radio\" name=\"sex\" value=\"Male\" checked>Male";
            echo "<input type=\"radio\" name=\"sex\" value=\"Female\">Female<br><br>";
        }
        else{
            echo "<input type=\"radio\" name=\"sex\" value=\"Male\">Male";
            echo "<input type=\"radio\" name=\"sex\" value=\"Female\" checked>Female<br><br>";
        }
        ?>

        *Term Admitted: <?php echo $term_admit; ?> <br><br>
        <input type="radio" name="termadmitted" value="Fall" checked required>Fall
        <input type="radio" name="termadmitted" value="Winter"  required>Winter<br><br>

        *Year Admitted: <?php echo $year_admit; ?> <br><br>  <select name="yearadmitted"  required>
            <option value="2015" id="year_2015" >2015</option>
            <option value="2016" id="year_2016">2016</option>
            <option value="2017" id="year_2017">2017</option>
            <option value="2018" id="year_2018">2018</option>
            <option value="2019" id="year_2019">2019</option>
            <option value="2020" id="year_2020">2020</option>
        </select><br><br>

        *Email: <input type="email" name="email" size="35" value="<?php echo $email; ?>"  required><br><br>

        Telephone: <input type="number" name="telephone"  value="<?php echo $telephone; ?>" size="35"><br><br>

        *Address: <input type="text" name="address" size="35" value="<?php echo $address; ?>"  required><br><br>

        *City: <input type="text" name="city" size="35" value="<?php echo $city; ?>"  required><br><br>

        *Postal Code: <input type="text" name="postalcode" size="35" value="<?php echo $postal; ?>" required><br><br>

        Province: <input type="text" name="province" size="35" value="<?php echo $province; ?>" ><br><br>

        *Country: <input type="text" name="country" size="35" value="<?php echo $country; ?>"  required><br><br>

        *Citizenship Status: <?php echo "$citizen_status<br><br>";
        if ($citizen_status == "International") {
            echo "<input type = \"radio\" name = \"citizenship\" value = \"International\" checked>International";
            echo "<input type = \"radio\" name = \"citizenship\" value = \"Canadian Citizen/Permanent Resident\">Canadian Citizen / Permanent Resident <br><br>";
        }
        else {
            echo "<input type = \"radio\" name = \"citizenship\" value = \"International\">International";
            echo "<input type = \"radio\" name = \"citizenship\" value = \"Canadian Citizen/Permanent Resident\" checked>Canadian Citizen / Permanent Resident <br><br>";
        }
        ?>
        <br><h3>English Language Proficiency</h3><hr><br>

        Read:   <select name="read">
            <option></option>
            <option value="Fluent" <?php if($eng_read == "Fluent")echo" selected";?> >Fluent</option>
            <option value="Very Good" <?php if($eng_read == "Very Good")echo" selected";?> >Very Good</option>
            <option value="Good" <?php if($eng_read == "Good")echo" selected";?> >Good</option>
            <option value="Basic" <?php if($eng_read == "Basic")echo" selected";?> >Basic</option>
        </select><br><br>

        Write:   <select name="write">
            <option></option>
            <option value="Fluent"  <?php if($eng_write == "Fluent")echo" selected";?> >Fluent</option>
            <option value="Very Good"  <?php if($eng_write == "Very Good")echo" selected";?> >Very Good</option>
            <option value="Good"  <?php if($eng_write == "Good")echo" selected";?> >Good</option>
            <option value="Basic"  <?php if($eng_write == "Basic")echo" selected";?> >Basic</option>
        </select><br><br>

        Speak:   <select name="speak">
            <option></option>
            <option value="Fluent"  <?php if($eng_speak == "Fluent")echo" selected";?> >Fluent</option>
            <option value="Very Good" <?php if($eng_speak == "Very Good")echo" selected";?> >Very Good</option>
            <option value="Good" <?php if($eng_speak == "Good")echo" selected";?> >Good</option>
            <option value="Basic" <?php if($eng_speak == "Basic")echo" selected";?> >Basic</option>
        </select><br><br>



        <br><h3>Student's Education</h3><hr><br>

        <label for="degree">Undergraduate Degree(s):</label>
        <textarea id="degree" name="degree" cols="50" rows="3"><?php echo $undergrad_text ?></textarea><br><br>

        Major: <input type="text" size="35" name="major" value="<?php echo $major ?>"><br><br>

        Undergraduate Degree(s) GPA: <input type="number" step="0.01" min="0" name="gpa" value="<?php echo $undergrad_gpa ?>"><br><br>

        University: <input type="text" size="35" name="university" value="<?php echo $university ?>"><br><br>

        Country: <input type="text" size="35" name="unicountry" value="<?php echo $unicountry ?>"><br><br>

        Graduation Date: <input type="date" name="graddate" value="<?php echo $grad_date ?>"><br><br>

        Capstone:
        <input type="radio" name="capstone" <?php if($project_internship == "Internship")echo " checked";?> disabled /> Internship
        <input type="radio" name="capstone" <?php if($project_internship == "Project")echo " checked";?> disabled /> Project &nbsp;&nbsp; Note: This field can only be changed by the Admin.

        <br><h3>Work Experience</h3><hr><br>

        Company: <input type="text" name="company" size="35" value="<?php echo $company ?>"><br><br>

        Dates: <input type="date" name="datefrom" value="<?php echo $datefrom ?>"> to
        <input type="date" name="dateto" value="<?php echo $dateto ?>"><br><br>

        Position: <input type="text" name="position" size="35" value="<?php echo $position_com ?>"><br><br>

        <label for="duties">Duties:</label>
        <textarea id="duties" name="duties" cols="50" rows="5"><?php echo $duties ?></textarea><br><br>

        <br><h3>Knowledge and Skills</h3><hr><br>

        <table>

            <tr>
                <td>ASP.Net</td>
                <td>
                    <select name="asp">
                        <option></option>
                        <option value="Extremely Competent" <?php if($asp == "Extremely Competent")echo " selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($asp == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($asp == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($asp == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($asp == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>C</td>
                <td>
                    <select name="c_lang">
                        <option></option>
                        <option value="Extremely Competent" <?php if($c_lang == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($c_lang == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($c_lang == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($c_lang == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($c_lang == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>C++</td>
                <td>
                    <select name="cpp">
                        <option></option>
                        <option value="Extremely Competent"<?php if($cpp == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($cpp == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($cpp == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($cpp == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($cpp == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>C#</td>
                <td>
                    <select name="csharp">
                        <option></option>
                        <option value="Extremely Competent" <?php if($csharp == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($csharp == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($csharp == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($csharp == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($csharp == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>ColdFusion</td>
                <td>
                    <select name="coldfusion">
                        <option></option>
                        <option value="Extremely Competent" <?php if($coldfusion == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($coldfusion == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($coldfusion == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($coldfusion == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($coldfusion == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Flex</td>
                <td>
                    <select name="flex">
                        <option></option>
                        <option value="Extremely Competent" <?php if($flex == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($flex == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($flex == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($flex == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($flex == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Java</td>
                <td>
                    <select name="java">
                        <option></option>
                        <option value="Extremely Competent" <?php if($java == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($java == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($java == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($java == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($java == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>JavaScript</td>
                <td>
                    <select name="javascript">
                        <option></option>
                        <option value="Extremely Competent" <?php if($javascript == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($javascript == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($javascript == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($javascript == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($javascript == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Lisp</td>
                <td>
                    <select name="lisp">
                        <option></option>
                        <option value="Extremely Competent" <?php if($lisp == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($lisp == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($lisp == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($lisp == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($lisp == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Matlab</td>
                <td>
                    <select name="matlab">
                        <option></option>
                        <option value="Extremely Competent" <?php if($matlab == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($matlab == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($matlab == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($matlab == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($matlab == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>MySQL</td>
                <td>
                    <select name="mysql">
                        <option></option>
                        <option value="Extremely Competent" <?php if($mysql == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($mysql == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($mysql == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($mysql == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($mysql == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Objective-C</td>
                <td>
                    <select name="objc">
                        <option></option>
                        <option value="Extremely Competent" <?php if($objc == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($objc == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($objc == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($objc == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($objc == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Pascal</td>
                <td>
                    <select name="pascal_lang">
                        <option></option>
                        <option value="Extremely Competent" <?php if($pascal_lang == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($pascal_lang == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($pascal_lang == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($pascal_lang == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($pascal_lang == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Perl</td>
                <td>
                    <select name="perl">
                        <option></option>
                        <option value="Extremely Competent" <?php if($perl == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($perl == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($perl == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($perl == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($perl == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>PHP</td>
                <td>
                    <select name="php">
                        <option></option>
                        <option value="Extremely Competent" <?php if($php == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($php == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($php == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($php == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($php == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Prolog</td>
                <td>
                    <select name="prolog">
                        <option></option>
                        <option value="Extremely Competent" <?php if($prolog == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($prolog == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($prolog == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($prolog == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($prolog == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Python</td>
                <td>
                    <select name="python">
                        <option></option>
                        <option value="Extremely Competent" <?php if($python == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($python == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($python == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($python == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($python == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>R</td>
                <td>
                    <select name="r">
                        <option></option>
                        <option value="Extremely Competent" <?php if($r == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($r == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($r == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($r == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($r == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Ruby</td>
                <td>
                    <select name="ruby">
                        <option></option>
                        <option value="Extremely Competent" <?php if($ruby == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($ruby == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($ruby == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($ruby == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($ruby == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>SQL-Oracle</td>
                <td>
                    <select name="sqloracle">
                        <option></option>
                        <option value="Extremely Competent" <?php if($sqloracle == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($sqloracle == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($sqloracle == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($sqloracle == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($sqloracle == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Tcl</td>
                <td>
                    <select name="tcl">
                        <option></option>
                        <option value="Extremely Competent" <?php if($tcl == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($tcl == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($tcl == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($tcl == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($tcl == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>T-SQL</td>
                <td>
                    <select name="tsql">
                        <option></option>
                        <option value="Extremely Competent" <?php if($tsql == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($tsql == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($tsql == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($tsql == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($tsql == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>VB.NET</td>
                <td>
                    <select name="vbnet">
                        <option></option>
                        <option value="Extremely Competent" <?php if($vbnet == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($vbnet == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($vbnet == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($vbnet == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($vbnet == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Other (Specify)
                    <input  type="text" name="othersk" size="15" value="<?php echo $otherskill ?>">
                </td>
                <td>
                    <select name="otherskillcomp">
                        <option></option>
                        <option value="Extremely Competent" <?php if($otherskillcomp == "Extremely Competent")echo" selected";?> >Extremely Competent</option>
                        <option value="Very Moderately Competent" <?php if($otherskillcomp == "Very Moderately Competent")echo" selected";?> >Very Moderately Competent</option>
                        <option value="Moderately Competent" <?php if($otherskillcomp == "Moderately Competent")echo" selected";?> >Moderately Competent</option>
                        <option value="Little Competent" <?php if($otherskillcomp == "Little Competent")echo" selected";?> >Little Competent</option>
                        <option value="Not Competent at all" <?php if($otherskillcomp == "Not Competent at all")echo" selected";?> >Not Competent at all</option>
                    </select>
                </td>
        </table><br><br><br>

    </form>
</div>

</body>
</html>