<?php

session_start();

error_reporting(E_ALL ^ E_DEPRECATED);

    $id = $_SESSION["ID"];
    $pass = $_SESSION["PASS"];

mysql_connect("localhost", "kukrejan_root", "root123") or die ("could not connect to the server");
mysql_select_db("kukrejan_maindatabase") or die("this database was not found");
$userquery = mysql_query("SELECT * FROM student_login WHERE id ='$id' AND pass = '$pass'") or die("The query failed please try again");
if(mysql_num_rows($userquery) != 1){
    die("that username could not be found!");
}
$userquery2 = mysql_query("SELECT * FROM student_personal_info WHERE id ='$id'");

while($row = mysql_fetch_array($userquery2, MYSQL_ASSOC)){

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