<?php

session_start();


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "kukrejan_root", "root123", "kukrejan_maindatabase");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$id = $_SESSION["ID"];
$fname = mysqli_real_escape_string($link,$_POST['firstname']);
$lname = mysqli_real_escape_string($link,$_POST['lastname']);
$gender = mysqli_real_escape_string($link,$_POST['sex']);
$term_admit = mysqli_real_escape_string($link,$_POST['termadmitted']);
$year_admit = mysqli_real_escape_string($link,$_POST['yearadmitted']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$telephone = mysqli_real_escape_string($link,$_POST['telephone']);
$address = mysqli_real_escape_string($link,$_POST['address']);
$city = mysqli_real_escape_string($link,$_POST['city']);
$postal = mysqli_real_escape_string($link,$_POST['postalcode']);
$province = mysqli_real_escape_string($link,$_POST['province']);
$country = mysqli_real_escape_string($link,$_POST['country']);
$citizen_status = mysqli_real_escape_string($link, $_POST['citizenship']);


$eng_read = mysqli_real_escape_string($link,$_POST['read']);
$eng_write = mysqli_real_escape_string($link,$_POST['write']);
$eng_speak = mysqli_real_escape_string($link,$_POST['speak']);


$undergrad_text = mysqli_real_escape_string($link,$_POST['degree']);
$major = mysqli_real_escape_string($link,$_POST['major']);
$undergrad_gpa = mysqli_real_escape_string($link,$_POST['gpa']);
$university = mysqli_real_escape_string($link,$_POST['university']);
$unicountry = mysqli_real_escape_string($link,$_POST['unicountry']);
$grad_date = mysqli_real_escape_string($link,$_POST['graddate']);


$company = mysqli_real_escape_string($link,$_POST['company']);
$datefrom = mysqli_real_escape_string($link,$_POST['datefrom']);
$dateto = mysqli_real_escape_string($link,$_POST['dateto']);
$position_com = mysqli_real_escape_string($link,$_POST['position']);
$duties = mysqli_real_escape_string($link,$_POST['duties']);


$asp = mysqli_real_escape_string($link,$_POST['asp']);
$c_lang = mysqli_real_escape_string($link,$_POST['c_lang']);
$cpp = mysqli_real_escape_string($link,$_POST['cpp']);
$csharp = mysqli_real_escape_string($link,$_POST['csharp']);
$coldfusion = mysqli_real_escape_string($link,$_POST['coldfusion']);
$flex = mysqli_real_escape_string($link,$_POST['flex']);
$java = mysqli_real_escape_string($link,$_POST['java']);
$javascript = mysqli_real_escape_string($link,$_POST['javascript']);
$lisp = mysqli_real_escape_string($link,$_POST['lisp']);
$matlab = mysqli_real_escape_string($link,$_POST['matlab']);
$mysql = mysqli_real_escape_string($link,$_POST['mysql']);
$objc = mysqli_real_escape_string($link,$_POST['objc']);
$pascal_lang = mysqli_real_escape_string($link,$_POST['pascal_lang']);
$perl = mysqli_real_escape_string($link,$_POST['perl']);
$php = mysqli_real_escape_string($link,$_POST['php']);
$prolog = mysqli_real_escape_string($link,$_POST['prolog']);
$python = mysqli_real_escape_string($link,$_POST['python']);
$r = mysqli_real_escape_string($link,$_POST['r']);
$ruby = mysqli_real_escape_string($link,$_POST['ruby']);
$sqloracle = mysqli_real_escape_string($link,$_POST['sqloracle']);
$tcl = mysqli_real_escape_string($link,$_POST['tcl']);
$tsql = mysqli_real_escape_string($link,$_POST['tsql']);
$vbnet = mysqli_real_escape_string($link,$_POST['vbnet']);
$othersk = mysqli_real_escape_string($link,$_POST['otherskill']);
$otherskillcomp = mysqli_real_escape_string($link,$_POST['otherskillcomp']);


$sql = "INSERT INTO student_personal_info (id, fname, lname, gender, term_admit, year_admit, email, telephone, address, city, postal, province, country, citizen_status, eng_read, eng_write, eng_speak, undergrad_text, major, undergrad_gpa, university, unicountry, grad_date, company, datefrom, dateto, position_com, duties, asp, c_lang, cpp, csharp, coldfusion, flex, java, javascript, lisp, matlab, mysql, objc, pascal_lang, perl, php, prolog, python, r, ruby, sqloracle, tcl, tsql, vbnet, otherskill, otherskillcomp)
VALUES ('$id', '$fname', '$lname','$gender','$term_admit','$year_admit','$email','$telephone','$address','$city','$postal','$province','$country','$citizen_status','$eng_read','$eng_write','$eng_speak','$undergrad_text','$major','$undergrad_gpa','$university','$unicountry','$grad_date', '$company' ,'$datefrom','$dateto','$position_com','$duties', '$asp','$c_lang','$cpp','$csharp','$coldfusion','$flex','$java','$javascript','$lisp','$matlab','$mysql','$objc','$pascal_lang','$perl','$php','$prolog','$python','$r','$ruby','$sqloracle','$tcl','$tsql','$vbnet','$othersk','$otherskillcomp')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br><br>";
    echo "<a href='../index.php'>Click Here</a> to login with your new account.";

    //Removing session variables
    session_unset();
    //Ending session
    session_destroy();

} else{
    echo "ERROR: Could not create profile.<br> $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>