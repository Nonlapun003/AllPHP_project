<?php
	$CusID = $_POST['CusName'];
	$ProID = $_POST['ProName'];
	$quality = $_POST['quality'];

	$connect = mysqli_connect("localhost","root","","labweb");
	$sql = 'insert into sell values("",'.$quality.','.$CusID.','.$ProID.',"'.date("d-m-y h:i:s a").'")';
	mysqli_query($connect,$sql);
	
	$sql = 'select * from sell';
	$result = mysqli_query($connect,$sql);

	echo '<table border =1>';
	echo '<tr>';
		 echo '<td>'.'Sell ID'.'</td>';
		 echo '<td>'.'CID'.'</td>';
		 echo '<td>'.'PID'.'</td>';
		 echo '<td>'.'Quality'.'</td>';
		 echo '<td>'.'Date'.'</td>';
	     echo '</tr>';
	while($row = mysqli_fetch_assoc($result)){
		 echo '<tr>';
		 echo '<td>'.$row['Sid'].'</td>';
		 echo '<td>'.$row['Cid'].'</td>';
		 echo '<td>'.$row['Pid'].'</td>';
		 echo '<td>'.$row['quan'].'</td>';
		 echo '<td>'.$row['Date'].'</td>';
	     echo '</tr>';
	
	}
	

?>