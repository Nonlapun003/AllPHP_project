1.1
<html>
<form method='post' action='lec5_print.php'>
please type number: <br>
<input type="text" name="num"><br><br>
<input type="submit" value="Submit data">
</form>

1.2
<?php

//ex while loop 1
echo '<table border = 3
	bgcolor = "FFCCCC">';
echo '<tr>';

$i=0;
	while($i++ < $_POST['num']){
		echo '<td>';
		echo $i;
		echo '</td>';
	}
echo '</tr>';
echo '</table>';


//ex while loop 2
echo '<br><br>';



echo '<table border = 3
	bgcolor = "CCFF99">';

$i=0;
	while($i++ < $_POST['num']){
		echo '<tr>';
		$j=0;
		while($j++ < $_POST['num']){
			echo '<td>';
			echo $i;
		echo '</td>';
		}
		echo '</tr>';
	}

echo '</table>';

?>

