<html>
<head>
    <title>Add Student</title>
    <link href="../css/searchOptions.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
    <h2 align="center">Add Student</h2>
</div>

<div class="content">
    <form action="adminCreateStudentAccount.php" method="post">

        <table align="center" cellspacing="50">

            <tr>
                <td colspan="2"><b>Creating student account:</b></td>
            </tr>

            <tr>
                <td>Student ID: <input  type="text" name="createID" /></td>
            </tr>
            <tr>
                <td>Password: <input  type="text" name="createPass" /></td>
            </tr>
        </table>

        <div class="button">

            <input  id="b3" type="submit" name="submit" value="Submit">

        </div>

    </form>

</div>
</body>
</html>
