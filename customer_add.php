<?php
	$Fname = $_POST['Fristname'];
	$Lname = $_POST['Lastname'];
	$Add = $_POST['Address'];
	$Tele = $_POST['Telephone'];
	$Email = $_POST['Email'];

	$connect = mysqli_connect("localhost","root","","instrument_shop");
	$sql = 'insert into customer values("","'.$Fname.'","'.$Lname.'","'.$Add.'",'.$Tele.',"'.$Email.'")';
	mysqli_query($connect,$sql);
	
	$sql = 'select * from customer';
	$result = mysqli_query($connect,$sql);

	echo '<table border =1>';
	echo '<tr>';
		 echo '<td>'.'Customer ID'.'</td>';
		 echo '<td>'.'Fristname'.'</td>';
		 echo '<td>'.'Lastname'.'</td>';
		 echo '<td>'.'Address'.'</td>';
		 echo '<td>'.'Telephone'.'</td>';
		 echo '<td>'.'Email'.'</td>';
		   
	     echo '</tr>';
	while($row = mysqli_fetch_assoc($result)){
		 echo '<tr>';
		 echo '<td>'.$row['Customer_ID'].'</td>';
		 echo '<td>'.$row['Fname'].'</td>';
		 echo '<td>'.$row['Lname'].'</td>';
		 echo '<td>'.$row['Address'].'</td>';
		 echo '<td>'.$row['Telephone'].'</td>';
		 echo '<td>'.$row['Email'].'</td>';
	     echo '</tr>';
	
	}
	

?>