<?php
error_reporting(E_ALL ^ E_DEPRECATED);

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "kukrejan_root", "root123", "kukrejan_maindatabase");

//Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$id = mysqli_real_escape_string($link,$_POST['studentID']);
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
$othersk = mysqli_real_escape_string($link,$_POST['othersk']);
$otherskillcomp = mysqli_real_escape_string($link,$_POST['otherskillcomp']);
$project_internship = mysqli_real_escape_string($link,$_POST['capstone']);

if(!empty($fname)) {
    $result = ("UPDATE student_personal_info SET fname ='$fname' WHERE id = '$id'") or die(mysql_error());
     if(mysqli_query($link, $result)){
        echo "Profile updated successfully.<br><br>";
        echo "<a href='studentHub.php'>Click Here</a> To Go Back To The Student Hub <br>";
    }
}

if(!empty($lname)) {
    $result = ("UPDATE student_personal_info SET lname ='$lname' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));
}

if(!empty($gender)) {
    $result = ("UPDATE student_personal_info SET gender ='$gender' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($term_admit)) {
    $result = ("UPDATE student_personal_info SET term_admit ='$term_admit' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($year_admit)) {
    $result = ("UPDATE student_personal_info SET year_admit ='$year_admit' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($email)) {
    $result = ("UPDATE student_personal_info SET email ='$email' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($telephone)) {
    $result = ("UPDATE student_personal_info SET telephone ='$telephone' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($address)) {
    $result = ("UPDATE student_personal_info SET address ='$address' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($city)) {
    $result = ("UPDATE student_personal_info SET city ='$city' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($postal)) {
    $result = ("UPDATE student_personal_info SET postal ='$postal' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($province)) {
    $result = ("UPDATE student_personal_info SET province ='$province' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($country)) {
    $result = ("UPDATE student_personal_info SET country ='$country' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($citizen_status)) {
    $result = ("UPDATE student_personal_info SET citizen_status ='$citizen_status' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($eng_read)) {
    $result = ("UPDATE student_personal_info SET eng_read ='$eng_read' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($eng_write)) {
    $result = ("UPDATE student_personal_info SET eng_write ='$eng_write' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($eng_speak)) {
    $result = ("UPDATE student_personal_info SET eng_speak ='$eng_speak' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($undergrad_text)) {
    $result = ("UPDATE student_personal_info SET undergrad_text ='$undergrad_text' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($major)) {
    $result = ("UPDATE student_personal_info SET major ='$major' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($undergrad_gpa)) {
    $result = ("UPDATE student_personal_info SET undergrad_gpa ='$undergrad_gpa' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($university)) {
    $result = ("UPDATE student_personal_info SET university ='$university' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($unicountry)) {
    $result = ("UPDATE student_personal_info SET unicountry ='$unicountry' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($grad_date)) {
    $result = ("UPDATE student_personal_info SET grad_date ='$grad_date' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($company)) {
    $result = ("UPDATE student_personal_info SET company ='$company' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($datefrom)) {
    $result = ("UPDATE student_personal_info SET datefrom ='$datefrom' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($dateto)) {
    $result = ("UPDATE student_personal_info SET dateto ='$dateto' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($position_com)) {
    $result = ("UPDATE student_personal_info SET position_com ='$position_com' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($duties)) {
    $result = ("UPDATE student_personal_info SET duties ='$duties' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($asp)) {
    $result = ("UPDATE student_personal_info SET asp ='$asp' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($c_lang)) {
    $result = ("UPDATE student_personal_info SET c_lang ='$c_lang' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($cpp)) {
    $result = ("UPDATE student_personal_info SET cpp ='$cpp' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($csharp)) {
    $result = ("UPDATE student_personal_info SET csharp ='$csharp' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($coldfusion)) {
    $result = ("UPDATE student_personal_info SET coldfusion ='$coldfusion' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($flex)) {
    $result = ("UPDATE student_personal_info SET flex ='$flex' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($java)) {
    $result = ("UPDATE student_personal_info SET java ='$java' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($javascript)) {
    $result = ("UPDATE student_personal_info SET javascript ='$javascript' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($lisp)) {
    $result = ("UPDATE student_personal_info SET lisp ='$lisp' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($matlab)) {
    $result = ("UPDATE student_personal_info SET matlab ='$matlab' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($mysql)) {
    $result = ("UPDATE student_personal_info SET mysql ='$mysql' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($objc)) {
    $result = ("UPDATE student_personal_info SET objc ='$objc' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($pascal_lang)) {
    $result = ("UPDATE student_personal_info SET pascal_lang ='$pascal_lang' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($perl)) {
    $result = ("UPDATE student_personal_info SET perl ='$perl' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($php)) {
    $result = ("UPDATE student_personal_info SET php ='$php' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($prolog)) {
    $result = ("UPDATE student_personal_info SET prolog ='$prolog' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($python)) {
    $result = ("UPDATE student_personal_info SET python ='$python' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($r)) {
    $result = ("UPDATE student_personal_info SET r ='$r' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($ruby)) {
    $result = ("UPDATE student_personal_info SET ruby ='$ruby' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($sqloracle)) {
    $result = ("UPDATE student_personal_info SET sqloracle ='$sqloracle' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($tcl)) {
    $result = ("UPDATE student_personal_info SET tcl ='$tcl' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($vbnet)) {
    $result = ("UPDATE student_personal_info SET vbnet ='$vbnet' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($othersk)) {
    $result = ("UPDATE student_personal_info SET otherskill ='$othersk' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($otherskillcomp)) {
    $result = ("UPDATE student_personal_info SET otherskillcomp ='$otherskillcomp' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(empty($project_internship)) {
    $result = ("INSERT INTO student_personal_info WHERE project_internship ='$project_internship' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}

if(!empty($project_internship)) {
    $result = ("UPDATE student_personal_info SET project_internship ='$project_internship' WHERE id = '$id'") or die(mysql_error());
    (mysqli_query($link, $result));

}



/*
// attempt insert query execution
$sql = "UPDATE studentform SET id = '$id' WHERE id = '$id';

 /*,fname, lname, gender, term_admit, year_admit, email, telephone, address, city, postal, province, country,
 citizen_status, eng_read, eng_write, eng_speak, undergrad_text, major, undergrad_gpa, university, unicountry, grad_date, company, datefrom,
 dateto, position_com, duties, asp, c_lang, cpp, csharp, coldfusion, flex, java, javascript, lisp, matlab, mysql, objc, pascal_lang, perl, php,
 prolog, python, r, ruby, sqloracle, tcl, tsql, vbnet, otherskill, otherskillcomp);";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br><br>";
    echo "<a href=\"../html/index.php\">Click Here</a> to go back to the homepage.";
}

*/ //else{
// echo "ERROR: Could not create profile.<br> " . mysqli_error($link);
//}

// close connection
mysqli_close($link);
?>