<?php
$newfile = 'image/'.$_FILES['picfile']['name'];
if(copy($_FILES['picfile']['tmp_name'],$newfile)){
	
	
echo '<br>'; 
echo '<br>'; 
echo '<br>'; 
echo '<table align="center" width="120" height="150">';
echo '<tr>'; 
echo '<td>'; 
echo '<img width="120" height="150"src="'.$newfile.'">';
}
echo '</td>'; 
echo '</tr>'; 
echo '</table>';
echo '<br>'; 
echo '<br>'; 
echo '<br>';

echo '<table align="center" border= "1" width="310" height="350" bgcolor="C8DEEA">';
echo '<tr>';
echo '<td>';
echo '<p>';
echo '<h2>';
echo 'Your Detail';
echo '</h3>';
echo '<font color="003399" sise="6">'; 	
$name1=$_POST['firstname'];
$name=test_input($name1);
if(!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$name))
	{
		echo "Name:";
		echo $name1;
		$nameErr='Incorrect please enter firstname again (A-Z or a-z)';
		echo '&nbsp';
		echo $nameErr;
		echo "<br>";

	}
else {
	echo "Name: ";
	echo  $name1;
	echo '<br>';

}
/*echo 'Name:';
echo $_POST['firstname'];*/
//echo '<br>';
$lname=$_POST['lastname'];
$Lname=test_input($lname);
if(!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$Lname))
	{
		echo "Lastname:";
		echo $lname;
		$nameErr='Incorrect please enter lastname again (A-Z or a-z)';
		echo '&nbsp';
		echo $nameErr;
		echo "<br>";

	}
else {
	echo 'Lastname :';
	echo $_POST['lastname'];
	echo '<br>';
}


echo 'Sex	: ';
echo $_POST['gender']; 
echo '<br>';

echo 'Birthdate : ';
echo $_POST['selectdate'].'/'.$_POST['selectmonth'].'/'.$_POST['year'];
echo '<br>';
echo 'Address :' ;
echo $_POST['address'];
echo '<br>'; 


$Phone=$_POST['phone'];
$Phones=test_input($Phone);
if(!preg_match("/^[0-9]*$/",$Phones))
	{
		echo "Phone:";
		echo $Phone;
		$nameErr='Incorrect please enter telephone number again (0-9)';
		echo '&nbsp';
		echo $nameErr;
		echo "<br>";

	}
else {
	
	echo 'Phone : ';
	echo $_POST['phone'];
	echo '<br>';
}

if(!($_POST['homepage'] == filter_input(INPUT_POST, 'homepage', FILTER_VALIDATE_URL)))
{
	echo "Homepage:";
	echo $_POST['homepage'];
	echo '&nbsp';
	echo "Incorrect please enter URL again (Ex.http://localhost/jobprint_pre.php)";
	echo '<br>';
}
else
{
    echo 'Homepage: ';
	echo $_POST['homepage'];
	echo '<br>';
}



if(!($_POST['email'] == filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)))
{
	echo "E-Mail: ";
	echo $_POST['email']; 
	echo '&nbsp';
    echo "Incorrect please enter E-Mail again (Ex.username@gmail.com)";
	echo '<br>';
}
else
{
	echo 'E-Mail :';
	echo $_POST['email'];           
	echo '<br>'; 
    //echo "รูปแบบ Email ถูกต้อง";
}
echo 'Educate: ';
echo $_POST['educate'];
echo '<br>'; 

echo 'Position: ';
echo $_POST['position1'].''.$_POST['position2'].''.$_POST['position3'].''.$_POST['position4'].''.$_POST['position5'];
echo '<br>';

if(!preg_match("/^[0-9]*$/",$_POST['salary']))
	{
		echo "Salary:";
		echo $_POST['salary'];
		$nameErr='Incorrect please enter salary again (0-9)';
		echo '&nbsp';
		echo $nameErr;
		echo "<br>";

	}
else {
	
	echo 'Salary: ';
	echo $_POST['salary'];
	echo '<br>';
}

echo 'Experience: '; 
echo $_POST['work'];
echo '</font>';
echo '</td>'; 
echo '</tr>'; 
echo '</table>';
echo '<br>'; 
echo '<br>';
//*****************************************validate******************************************

/*$name1=$_POST['firstname'];
$name=test_input($name1);
if(!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$name))
	{
		echo $name1;
		echo "In valid";
		$nameErr='Please enter A-Za-z';
		echo $nameErr;
		echo "<br>";

	}
else {
	echo "Name:";
	echo  $name1;

}*/
	
	function test_input($data)
{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
}

?>

