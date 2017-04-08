<?php
//ให้สร้างตารางวันที่และเวลา

$day=array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
$time=array("9.00-10.00","10.00-11.00","11.00-12.00","12.00-13.00","13.00-14.00","14.00-15.00","15.00-16.00");
$color="#FF0099";
$color1="#FFFF00";
$num=count($day);
echo '<table border =2>';
	
	for($i=0;$i<$num;$i++){
		echo '<tr>';
		for($j=0;$j<$num;$j++){
			if($day[$i]!="Sun"){
				echo "<td bgcolor='$color'>";
				echo $day[$i];
				echo $time[$j];
				echo '</td>';
			}//if
			else {
				echo "<td bgcolor='$color1'>";
				echo $day[$i];
				echo $time[$j];
				echo '</td>';}
		
		}//forj
	echo '</tr>';
	
	}//fori


?>