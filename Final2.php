<?php
	$CID = $_POST['CName'];
	$PID = $_POST['ProName'];
	$Quantity = $_POST['quality'];

	$connect = mysqli_connect("localhost","root","","product");
	$sql = 'insert into sell values("",'.$PID.','.$CID.','.$Quantity.',"'.date("d-m-y h:i:s a").'")';
	mysqli_query($connect,$sql);
	
	$sql = 'select * from sell';
	$result = mysqli_query($connect,$sql);

	echo '<table border =1>';
	echo '<tr>';
		 echo '<td>'.'Sell_ID'.'</td>';
		 echo '<td>'.'PID'.'</td>';
		 echo '<td>'.'CID'.'</td>';
		 echo '<td>'.'Quantity'.'</td>';
		 echo '<td>'.'Date'.'</td>';
	     echo '</tr>';
	while($row = mysqli_fetch_assoc($result)){
		 echo '<tr>';
		 echo '<td>'.$row['Sell_ID'].'</td>';
		 echo '<td>'.$row['PID'].'</td>';
		 echo '<td>'.$row['CID'].'</td>';
		 echo '<td>'.$row['Quantity'].'</td>';
		 echo '<td>'.$row['Date'].'</td>';
	     echo '</tr>';
	
	}
	

?>