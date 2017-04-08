<?php
	$Employee_ID = $_GET["ID"];
	$Work_hour = $_GET["hour"];
	
	function cal_salary($Work_hour){
		if(($Work_hour*200)>15000)
		{	
			$salary=($Work_hour*200)+5000;
			echo $salary;
			return $salary;
		}
		else
		{	
			$salary=($Work_hour*200)+2000;
			echo $salary;
			return $salary;
		}
	}
	echo '<table border = 2>';
	echo '<tr bgcolor ="#ff66ff">';
	echo '<td>EmployeeID</td>';
	echo '<td>Hour</td>';
	echo '<td>Salary+Bonus</td>';
	echo '<tr bgcolor ="#ccffff">';
	echo '<td>';
	echo $Employee_ID;
	echo '</td>';
	echo '<td>';
	echo $Work_hour;
	echo '</td>';
	echo '<td>';
	cal_salary($Work_hour);
	echo '</td>';
	echo '</tr>';
	echo '</tr>';
	echo '</table>';
?>
