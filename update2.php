<?php
	session_start();
	if($_SESSION['PassID'] == "")
	{
		echo "Please Login!";
		exit();
	}



?>

<html>
	<h3 align ="center">
<body background = "http://i-cdn.phonearena.com/images/articles/115776-image/HTC-One-M8-official-wallpapers.jpg">

<FONT Size="30">Update</FONT><br><br>
	<?php
		
		$connect = mysqli_connect("localhost","root","","instrument_shop");
			$sql = 'SELECT * from instrument where Serial_no="'.$_POST['id'].'";';
			$result = mysqli_query($connect,$sql);
	
	while($row = mysqli_fetch_array($result)){
	echo '<form method = "post" action="update3.php">';

	echo 'Brand &nbsp&nbsp <input type="text" name="a" value="'.$row[0].'" readonly="true" ><br>';
	echo 'Model &nbsp&nbsp <input type="text" name="b" value="'.$row[1].'" readonly="true" ><br>';
	echo 'Color &nbsp&nbsp <input type="text" name="c" value="'.$row[2].'" readonly="true" ><br>';
	echo 'Price &nbsp&nbsp <input type="text" name="y" value="'.$row[3].'"><br>';
	echo 'Series &nbsp&nbsp <input type="text" name="e" value="'.$row[4].'" readonly="true" ><br>';
	echo 'Serial_no &nbsp&nbsp <input type="text" name="f" value="'.$row[5].'" readonly="true" ><br>';
	echo 'Type &nbsp&nbsp <input type="text" name="g" value="'.$row[6].'" readonly="true" ><br>';
	echo '<td><input name ="update" type="submit" value="Update"></td>'."\n";
	
	echo '</form>';
	}
	
	
mysqli_close($connect);
	?>


</html>