<!DOCTYPE html>

<html>

<head>

    <title>Add Employer</title>

    <link rel="stylesheet" type="text/css" href="../css/createStudentProfile.css">

</head>

<body>

<div class="header">

    <h2>Add Employer</h2>

</div>

<div class="content">

    <form action="addEmployerResult.php" method="POST">

        <br>
        <hr>

        <h3> Employer Information </h3>

        <hr>

        <br>

        * indicates a required field

        <br>
        <br>
        <br>


        *Organization Name: <input type="text" name="orgName" size="35" required/>

        <br>
        <br>


        *Employer Type:
        <input type="radio" name="empType" value="Company" required/> Company
        <input type="radio" name="empType" value="Faculty" required/> Faculty

        <br><br>

        *Contact Person: <input type="text" name="contactPerson" size="35" required/>
        <br>
        <br>

        Address: <input type="text" name="address" size="35" required/>
        <br> <br>

        *Website: <input type="text" name="website" size="35" required/>
        <br> <br>

        Telephone: <input type="text" name="telephone" size="35" required/>
        <br> <br>


        *E-Mail: <input type="text" name="email" size="35" required/>
        <br> <br>

        <div class="button">
            <input id="submit" type="submit" value="Submit">
        </div>
        <br><br>

    </form>

</div>
</body>
</html>
