<?php
$Hometype1 = $_POST['Hometype'];
$Homezone1 = $_POST['Homezone'];

$a = 0;
$b = 0;
switch($Hometype1){
	case 'q': $a = 0;break;
	case 'w': $a = 1;break;
	case 'e': $a = 2;break;
	case 'r': $a = 3;break;
	case 't': $a = 4;break;
}
switch($Homezone1){
	case 'A': $b = 0; $l="2,000,000"; $m= "10,000"; break;
	case 'B': $b = 1; $l="2,500,000"; $m= "12,000"; break;
	case 'C': $b = 2; $l="3,000,000"; $m= "15,000"; break;
	case 'D': $b = 3; $l="3,500,000"; $m= "20,000"; break;
	case 'E': $b = 4; $l="4,000,000"; $m= "25,000"; break;
}


$Hometype1= array('Home1','Home2','Home3','Home4','Home5');
$Homezone1= array('ZoneA','ZoneB','ZoneC','ZoneD','ZoneE');
$num1 = count($Hometype1);
$num = count($Homezone1);

print '<table border =1 bgcolor ="#ff0000">';

for($i=0;$i<$num1;$i++){
	print '<tr>';

	for($j=0;$j<$num;$j++){

		if(($i==$a)&&($j==$b)){
			print '<td bgcolor = "#ffff00">';
		}
		else{
			print '<td bgcolor = "#ff00cc">';
		}
		print $Hometype1[$i].'&nbsp';
		print $Homezone1[$j].'&nbsp';
		print'</td>';
	}
	print '<tr>';
}
print '</table>';
print "Total = $l Reserve = $m";
?>