<?php
$newfile='image/'.$_FILES['picfile']['name'];
if(empty($_FILES['picfile']['tmp_name'])){
$PictureErr="Picture is required";
echo $PictureErr;
}else
if(copy($_FILES['picfile']['tmp_name'],$newfile)){

	echo'<br>';
	echo'<br>';
	echo'<br>';
	echo'<table align="center" width="120"height="150">';
	echo'<tr>';
	echo'<td>';

	echo'<img with="120" height="150"src="'.$newfile.'">';
}
echo'</td>';
echo'</tr>';
echo'</table>';
echo'<br>';
echo'<br>';
echo'<br>';

echo'<table align="center" border="1" width="310" height="350" bgcolor="C8DEEA">';
echo'<tr>';
echo'<td>';
echo'<p>';
echo'<h2>';
echo'Your Detail';
echo'</h3>';
echo'<font color ="003399" size="3">';

echo'Name       :';
$name=test_input($_POST["firstname"]);
if(!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$name)){
$nameErr="Only letters allowed";
echo$nameErr;
}else
echo $_POST['firstname'];
echo'<br>';

echo'Lastname   :';
$name=test_input($_POST["lastname"]);
if(!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$name)){
$nameErr="Only letters allowed";
echo$nameErr;
}else 
echo$_POST['lastname'];
echo'<br>';

echo'Sex	    :';
if(empty($_POST["gender"])){
$genderErr="Gender is required";
echo $genderErr;
}else
echo$_POST['gender'];
echo'<br>';

echo'Birthdate:'; 
if(empty($_POST["year"])){
$BirthdateErr="Birthdate is required";
echo $BirthdateErr;
}else
echo$_POST['selectdate'].'/'.$_POST['selectmonth'].'/'.$_POST['year'];
echo'<br>';

echo'Address    :';
if(empty($_POST["address"])){
$addressErr="Address is required";
echo $addressErr;
}else
echo$_POST['address'];
echo'<br>';

echo'Phone      :';
$name=test_input($_POST["phone"]);
if(!preg_match("/^[0-9]+(\s[0-9]+)*$/",$name)){
$nameErr="Only letters allowed";
echo$nameErr;
}else 
echo $_POST['phone'];
echo'<br>';

echo 'Homepage  :';
if(empty($_POST["homepage"])){
$homepageErr="Homepage is required";
echo $homepageErr;
}else
echo$_POST['homepage'];
echo'<br>';

echo 'Email		:';
$email=test_input($_POST["email"]);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$emailErr="invalid email format";
echo $emailErr;

}else 
echo$_POST['email'];
echo'<br>';

echo 'Educate	:';
if(empty($_POST["educate"])){
$educateErr="educate is required";
echo $educateErr;
}else
echo$_POST['educate'];
echo'<br>';

echo 'Position:';
if(empty($_POST["h_type"])){
$PositionErr="Position is required";
echo $PositionErr;
}else if(isset($_POST["h_type"])){
$data_h_type=$_POST['h_type'];  
$data_type=$_POST['type'];

if(count($data_h_type)>0){   
    foreach($data_h_type as $key=>$value){  
       
        echo $data_type[$value]."<br>";  
    }     
}  
}
echo'<br>';
echo 'Salary	:';
if(empty($_POST["salary"])){
$salaryErr="salary is required";
echo $salaryErr;
}else
echo$_POST['salary'];
echo'<br>';

echo 'Experience	:';
if(empty($_POST["work"])){
$workErr="Experience is required";
echo $workErr;
}else
echo$_POST['work'];
echo'</font>';
echo'</td>';
echo'</tr>';
echo'</table>';
echo'<br>';
echo'<br>';

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>


