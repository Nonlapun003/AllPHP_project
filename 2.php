//2.1

<html>
1: green<br>
2: yellow<br>
3: pink<br>
4: blue<br>
<form method='post' action='lec5_1.php'>
number of color:
<input type="text" name="color"><br><br>

number of colums and rows:
<input type="text" name="num"><br><br>

<input type="submit" value="Create Table">
<br>

</form>



//2.2

<?php
$c = $_POST['color'];

switch($c){
	case '1' : echo '<table border = 3
	bgcolor = "green">';
			break;
	case '2' :echo '<table border = 3
	bgcolor = "yellow">';
			break;
	case '3' : echo '<table border = 3
	bgcolor = "pink">';
			break;
	case '4' : echo '<table border = 3
	bgcolor = "blue">';
			break;
	default: echo '<table border = 3
	bgcolor = "red">';
}


$num = $_POST['num'];



$i=0;
	while($i++ < $num){
		echo '<tr>';
		$j=0;
		while($j++ < $num){
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




//2.2 ?????????


<?php
$c = $_POST['color'];
/*
switch($c){
	case '1' : $bg = "green"; break;
	case '2' : $bg = "yellow"; break;
	case '3' : $bg = "pink"; break;
	case '4' : $bg = "blue"; break;
	default: $bg ="red"; break;
}

*/
$num = $_POST['num'];

switch($c){
	case '1' : $bg = "#33FF00"; break;
	case '2' : $bg = "#FFFF00"; break;
	case '3' : $bg = "#FF0099"; break;
	case '4' : $bg = "#33FFFF"; break;
	default: $bg ="#CC66FF"; break;
}


echo '<table border = 3 bgcolor ="'.$bg.'">';

//echo "<table border = 3 bgcolor = $bg>";


$i=0;
	while($i++ < $num){
		echo '<tr>';
		$j=0;
		while($j++ < $num){
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