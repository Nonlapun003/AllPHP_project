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
Stock of Bass<br><br>

<?php
	

	$connect = mysqli_connect("localhost","root","","instrument_shop");
//	$total = 0;
	
	

	$sql = 'select * from instrument where Type = "Bass"';
	$result = mysqli_query($connect,$sql);

	echo '<table border =1 align = "center">';
	echo '<tr bgcolor = #00ffff>';
		 echo '<td>'.'Brand'.'</td>';
		 echo '<td>'.'Model'.'</td>'; 
		 echo '<td>'.'Color'.'</td>';
		 echo '<td>'.'Price'.'</td>';
		 echo '<td>'.'Serie'.'</td>';
		 echo '<td>'.'Serial number'.'</td>';
		 echo '<td>'.'Type'.'</td>';
		  
	     echo '</tr>';
	while($row = mysqli_fetch_assoc($result)){
		 echo '<tr bgcolor = #ffff99>';
		 echo '<td>'.$row['Brand'].'</td>'; 
		 echo '<td>'.$row['Model'].'</td>';
		 echo '<td>'.$row['Color'].'</td>';
		 echo '<td>'.$row['Price'].'</td>';
		 echo '<td>'.$row['Series'].'</td>';
		 echo '<td>'.$row['Serial_no'].'</td>';
		 echo '<td>'.$row['Type'].'</td>';
//		 	 $total = $total+$row['Price'];
	     echo '</tr>';
		 
	
	}
	echo '</table>';
//echo $total;
?>

<br>
<form method="post" action="Report.php">
		<input type=submit value="Back to report">
		</form>

<form action ="test.php">
<p><input type ="submit" value ="Back to Homepage"></p>
</form>