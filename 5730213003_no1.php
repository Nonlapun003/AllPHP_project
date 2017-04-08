<?php

$alphabet=array("00","33","66","99","CC","FF");
sort($alphabet);
$num = count($alphabet);


echo "<table>";


for($i=0;$i<$num;$i++){
	echo '<tr>';

	
	for($j=0;$j<$num;$j++){
		echo '<tr>';
		for($k = 0 ; $k<$num ;$k++){
			
			echo "<td>";
			echo "<b><font size = 5 color = $alphabet[$i].$alphabet[$j].$alphabet[$k] > #$alphabet[$i]$alphabet[$j]$alphabet[$k] </font></b>";
			
			
			
			echo '</td>';
			

		}
		echo '</tr>';
	}

	echo '<tr>';

}

echo "</table>";



?>