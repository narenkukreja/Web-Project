<html>
<head>
    <title>Search Options</title>
    <link href="../css/searchOptions.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
    <h2 align="center">Admin Search Options</h2>
</div>

<div class="content">

    <table align="center" border="1">
        <th colspan="2">Search Legend</th>
        <tr>
            <td>Student</td>
            <td>Student ID, First Name and Last Name</td>
        </tr>
        <tr>
            <td>Faculty</td>
            <td>Admin ID, First Name and Last Name</td>
        </tr>
        <tr>
            <td>Employer</td>
            <td>Employer Name, Employer Type (Company/Faculty)</td>
        </tr>
    </table>

    <form action="search.php" method="post">

    <table align="center" cellspacing="50">
        <tr>
            <td><input  type="checkbox" name="criteria[]" value="student"/> Students</td>
            <td><input  type="checkbox" name="criteria[]" value="faculty"/> Faculty</td>
            <td><input  type="checkbox" name="criteria[]" value="employer"/> Employer</td>
        </tr>

        <tr>
            <td colspan="3"><input id="searchbox" name="searchTerms" type="text" placeholder="Enter your search keyword here..." size="63" ></td>
        </tr>

    </table>

        <div class="button">

        <input  id="b3" type="submit" name="submit" value="Search">

        </div>

    </form>

</div>
</body>
</html>
