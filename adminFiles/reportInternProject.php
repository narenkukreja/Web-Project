<html>
<head>
    <title>Internship/Project</title>
    <link href="../css/searchOptions.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
    <h2 align="center">Students By Internship/Project</h2>
</div>

<div class="content">
    <form action="searchInternProject.php" method="post">

        <table align="center" cellspacing="50">

            <tr>
                <td colspan="2"><b>Please select one:</b></td>
            </tr>
            <tr>
                <td><input  type="radio" name="internproj" value="internship" /> Internship</td>
                <td><input  type="radio" name="internproj" value="project" /> Project</td>
            </tr>

        </table>

        <div class="button">

            <input  id="b3" type="submit" name="submit" value="Generate Report">

        </div>

    </form>

</div>
</body>
</html>
