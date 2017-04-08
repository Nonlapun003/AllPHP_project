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
	<?php
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$y=$_POST['y'];
		$e=$_POST['e'];
		$f=$_POST['f'];
		$g=$_POST['g'];
		$connect = mysqli_connect("localhost","root","","instrument_shop");
		//UPDATE `instrument` SET Price = '100' where Serial_no = "ee"
			$sql = 'update instrument set Price = '.$y.' where Serial_no = "'.$f.'"';
	
			$result = mysqli_query($connect,$sql);
				if($result) {
				echo '<FONT Size="30">Complete</FONT>';
			} else {
				
				 echo 'no complete';
			}
	
mysqli_close($connect);
	?>

<br><br><br><form method="post" action="Update1.php">
		<input type=submit value="Back to update">
		</form>

<form action ="test.php">
<p><input type ="submit" value ="Back to Homepage"></p>
</form>
</html>