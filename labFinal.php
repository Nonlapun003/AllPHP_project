<html>
<form action="labFinal2.php" method="post">

Customer Name 


<?php
	$connect = mysqli_connect("localhost","root","","labweb");
	$sql ='select * from customer';
	$result = mysqli_query($connect,$sql);

	if(!$result)
	{
		echo mysqil_error();
	}
	else {

		echo '<select name ="CusName">';
		while($row = mysqli_fetch_assoc($result)){
			
			echo '<option value ='.$row['CID'].'>';       
			echo ''.$row['Cname'].'</option>';
			
		}
		echo '</select>';
	}
	$sql = 'select * from product';
	$result = mysqli_query($connect,$sql);

	if(!$result)
	{
		echo mysqil_error();
	}
	else {
			echo '<br>'.'<br>';
			echo 'Product Name ';
			echo '<select name="ProName">';
		while($row = mysqli_fetch_assoc($result)){
			
			echo '<option value =';
			echo ''.$row['Pid'].'>';
			echo ''.$row['Pname'].'</option>';
			
		}
			echo '</select>';
			echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';

			echo 'quality';
			echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'<input type =text name ="quality" size =5>'.'<br>'.'<br>'.'<br>';

			echo '<input type=submit value="Add">';
	
	}

?>
</form>
</html>
	