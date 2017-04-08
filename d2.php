<?php
	session_start();
	if($_SESSION['PassID'] == "")
	{
		echo "Please Login!";
		exit();
	}



?>


<body background = "http://stock-wallpapers.com/wp-content/uploads/2014/03/official-LG-G-Pro-2-Wallpaper-1030x915.jpg">
<h3 align ="center">
<?php
$connect = mysqli_connect("localhost","root","","instrument_shop");
$sql ='Delete from instrument where Serial_no ="'.$_POST['id'].'";';

$result = mysqli_query($connect,$sql);

if($result){
	echo '<FONT Size="30">Delete Instrument complete</FONT>';

}
else{
	echo 'Delete Instrument not complete';
}
	mysqli_close($connect);


?>
<br><br><br><form method="post" action="d1.php">
		<input type=submit value="Back to delete">
		</form>

<form action ="test.php">
<p><input type ="submit" value ="Back to Homepage"></p>
</form>