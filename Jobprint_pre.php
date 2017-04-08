<?php

$newfile='image/'.$_FILES['picfile']['name'];
if(copy($_FILES['picfile']['tmp_name'],$newfile)){
echo'<br>';
echo'<br>';
echo'<br>';
echo'<table align="center" width="120" height="150">';
echo'<tr>';
echo'<td>';
echo'<img width="120" height="150" src="'.$newfile.'">';
}
echo'</td>';
echo'</tr>';
echo'</table>';
echo'<br>';
echo'<br>';
echo'<br>';

echo'<table align="center" border="1" width="310" hieght="350" bgcolor="C8DEEA">';
echo'<tr>';
echo'<td>';
echo'<p>';
echo'<h2>';
echo'Your Detail';
echo'</h3>';
echo'<font color ="003399" size="6">';
	echo 'Name	:';
	echo $_POST['firstname'];
	echo'<br>';
	echo'Lastname	:';
	echo $_POST['lastname'];
	echo '<br>';

		echo'Sex	:';
		echo $_POST['gender'];
		echo'<br>';
		echo 'Birthdath	:';
		echo $_POST['selectdate'].'/'.$_POST['selectmonth'].'/'.$_POST['year'];
		echo'<br>';
		echo'Address	:';
		echo $_POST['address'];
		echo'<br>';
		echo 'Phone	:';
		echo $_POST['phone'];
		echo'<br>';
		echo 'Homepage	:';
		echo $_POST['homepage'];
		echo'<br>';
		echo 'Email	:';
		echo $_POST['email'];
		echo'<br>';
		echo 'Educate	:';
		echo $_POST['educate'];
		echo'<br>';
		echo 'Position :';
		echo $_POST['position1'].''.$_POST['position2'].''.$_POST['position3'].''.$_POST['position4'].''.$_POST['position5'];
		echo'<br>';
		echo'Salary: ';
		echo  $_POST['salary'];
		echo '<br>';

		echo 'Experience: ';
		echo $_POST['work'];

echo '</font>';
echo '</td>';
echo '</tr>';
echo '</table>';
echo '<br>';
echo '<br>';
?>
