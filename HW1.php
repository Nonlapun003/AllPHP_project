<?php
$alphabet=array("00","33","66","99","CC","FF");

$num = count($alphabet);


//echo '<table border = 3 bgcolor = "C0FF3E">';


for($i=0;$i<$num;$i++){
	echo '<tr>';

	
	for($j=0;$j<$num;$j++){
		for($k=0;$k<$num;$k++){
	
	//echo '<td>';
	echo "#";
	echo $alphabet[$i];
	echo $alphabet[$j];
	echo $alphabet[$k];
	//echo '</td>';
	}
	echo "</tr>";
	}
}

echo '</table>';

?>


//<font color=#FF0033 size=3>??????????? ? ?????????</font>