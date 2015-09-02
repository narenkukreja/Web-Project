<html>
<head>
    <title>Term/Year</title>
    <link href="../css/searchOptions.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
    <h2 align="center">Students By Term/Year</h2>
</div>

<div class="content">
    <form action="reportYearSem.php" method="post">

        <table align="center" cellspacing="50">
            <tr>
                <td>
                    <input type="radio" name="admit_answer" value="semester" required/>Semester
                </td>
                <td><input type="radio" name="admit_answer" value="year" required/>Year</td>
            </tr>
            <tr>
                <td colspan="2"><input style="font-size: medium" type="text" size="30" name="searchTerms" placeholder="Enter a semester or year..."></td>
            </tr>

        </table>

        <div class="button">

            <input  id="b3" type="submit" name="submit" value="Generate Report">

        </div>

    </form>

</div>
</body>
</html>
