<?php
	$CID = $_POST['CName'];
	$PID = $_POST['ProId'];
	

	$connect = mysqli_connect("localhost","root","","instrument_shop");
	$sql = 'insert into sell values("",'.$CID.','.$PID.',"","'.date("d-m-y h:i:s a").'")';
	mysqli_query($connect,$sql);
	
	$sql = 'select * from sell';
	$result = mysqli_query($connect,$sql);

	echo '<table border =1>';
	echo '<tr>';
		 echo '<td>'.'Buy ID'.'</td>';
		 echo '<td>'.'Customer ID'.'</td>';
		 echo '<td>'.'Serial Number'.'</td>';
		 echo '<td>'.'Total price'.'</td>';
		 echo '<td>'.'Date'.'</td>';
	     echo '</tr>';
	while($row = mysqli_fetch_assoc($result)){
		 echo '<tr>';
		 echo '<td>'.$row['BuyID'].'</td>';
		 echo '<td>'.$row['Customer_ID'].'</td>';
		 echo '<td>'.$row['Serial_no'].'</td>';
		 echo '<td>'.$row['TotalP'].'</td>';
		 echo '<td>'.$row['Date'].'</td>';
	     echo '</tr>';
	
	}
	

?>