<!DOCTYPE html>

<html>

<head>

    <title>Add Internship</title>

    <link rel="stylesheet" type="text/css" href="../css/createStudentProfile.css">

</head>

<body>

<div class="header">

    <h2>Add Internship</h2>

</div>

<div class="content">

    <form action="addInternshipResults.php" method="POST">

        <br>
        <hr>

        <h3> Internship Information </h3>

        <hr>

        <br>

        <br>
        <br>
        <br>

        Internship ID: <input type="text" name="internshipID" size="35" required/>
        <br>
        <br>

        Organization Name: <input type="text" name="orgName" size="35"  required/> &nbsp;&nbsp; Note: Employer must already exist.
        <br><br>


        Position: <input type="text" name="empPosition" size="35" required/>
        <br>
        <br>

        Number of positions: <input type="text" name="numPos" size="35" required/>
        <br> <br>

        Start Date: <input type="date" name="startDate" size="35" required/>
        <br> <br>

        End Date: <input type="date" name="endDate" size="35" required/>
        <br> <br>

        Job Responsibilities: <input type="text" name="jobResp" size="35" required/>
        <br> <br>


        Job Requirements: <input type="text" name="jobReq" size="35" required/>
        <br> <br>

        Salary Information: <input type="text" name="salaryInfo" size="35" required/>
        <br> <br>

        <div class="button">
            <input id="submit" type="submit" value="Submit">
        </div>
        <br><br>

    </form>

</div>
</body>
</html>
