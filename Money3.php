<?php
	session_start();
	if($_SESSION['PassID'] == "")
	{
		echo "Please Login!";
		exit();
	}



?>

<h3 align ="center">
<body background = "https://pixabay.com/static/uploads/photo/2016/01/20/21/56/background-1152459_960_720.jpg">
<p>Summary of Mouth sales.</p>
<?php
	$a = $_POST['a'];
	$connect = mysqli_connect("localhost","root","","instrument_shop");
	$total = 0;
	
	$sql = 'select * from buy where Date like "%'.$a.'%" ';
	$result = mysqli_query($connect,$sql);

	echo '<table border =1 align = "center">';
	echo '<tr bgcolor = #00ffff>';
		 echo '<td>'.'BuyNo'.'</td>';
		// echo '<td>'.'Customer_ID'.'</td>'; 
	//	 echo '<td>'.'Serial Number'.'</td>';
		 echo '<td>'.'Total Price'.'</td>';
		 echo '<td>'.'Date'.'</td>';
		 
		  
	     echo '</tr>';
	while($row = mysqli_fetch_assoc($result)){
		 		echo '<tr bgcolor = #ffff99>';

		 echo '<td>'.$row['BuyNo'].'</td>';
		// echo '<td>'.$row['Customer_ID'].'</td>';
	//	echo '<td>'.$row['Serial_no'].'</td>';
		 echo '<td>'.$row['TotalPrice'].'</td>';
		 echo '<td>'.$row['Date'].'</td>';
		
	 	 $total = $total+$row['TotalPrice'];
	     echo '</tr>';
		 
	
	}
	echo '</table>';
echo 'Money of instrument shop = ';
echo $total;
?>
<br>
<form method="post" action="Report.php">
		<input type=submit value="Back to report">
		</form>

<form action ="test.php">
<p><input type ="submit" value ="Back to Homepage"></p>
</form>