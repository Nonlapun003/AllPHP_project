<?php
//ex for loop 1
$num = 5;

echo '<table border = 3 bgcolor ="FF9999">';
echo '<tr>';

for($i=0;$i<$num;$i++){
echo '<td>';
echo $i+1;
echo '</td>';
}
echo '</tr>';
echo '</table>';





//ex for loop 2
echo '<br> .<br>';

$num = 5;

echo '<table border = 3 bgcolor ="FF9999">';
echo '<tr>';

for($i=1;$i<=$num;$i++){
echo '<tr>';

for($j=1;$j<=$num;$j++){
	echo '<td>';
	echo $i;
	echo '</td>';}
	echo '</tr>';


}


echo '</table>';







//ex while loop 3
echo '<br> .<br>';


$num = 5;

echo '<table border = 3
	bgcolor = "FFCC99">';


	
for($i=1;$i<=$num;$i++){
		echo '<tr>';
		
		for($j=1;$j<=$num;$j++){
			echo '<td>';
			echo 'No. ';
			echo $i;
			echo '_';
			echo $j;
		echo '</td>';
		}
		echo '</tr>';
	}

echo '</table>';





?>