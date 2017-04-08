//1.1 key

<html>
<form method='post' action='lec5_print.php'>
please type number: <br>
<input type="text" name="num"><br><br>
<input type="submit" value="Submit data">
</form>


//1.2 key

<?php

//ex while loop 1
$num = $_POST['num'];

echo '<table border = 3
	bgcolor = "FFCCCC">';
echo '<tr>';

$i=0;
	while($i++ < $num){
		echo '<td>';
		echo $i;
		echo '</td>';
	}
echo '</tr>';
echo '</table>';


//ex while loop 2
echo '<br> .<br>';


$num = $_POST['num'];

echo '<table border = 3
	bgcolor = "CCFF99">';

$i=0;
	while($i++ < $num){
		echo '<tr>';
		$j=0;
		while($j++ < $num){
			echo '<td>';
			echo $i;
		echo '</td>';
		}
		echo '</tr>';
	}

echo '</table>';

?>