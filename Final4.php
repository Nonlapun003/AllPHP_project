<html>
<form action="Final2.php" method="post">

Customer Name 


<?php
	$connect = mysqli_connect("localhost","root","","product");
	$sql ='select * from customer';
	$result = mysqli_query($connect,$sql);

	if(!$result)
	{
		echo mysqil_error();
	}
	else {

		while($row = mysqli_fetch_assoc($result)){
		
			echo '<input type = "checkbox" name = "CName" value = '.$row['CID'].'>'.$row['Cname'].'';

			
		}
		
	}
	$sql = 'select * from productlist';
	$result = mysqli_query($connect,$sql);

	if(!$result)
	{
		echo mysqil_error();
	}
	else {
			echo '<br>'.'<br>';
			echo 'Product Name ';
			
		while($row = mysqli_fetch_assoc($result)){
			
			echo '<input type = "checkbox" name = "ProName" value = '.$row['PID'].'>'.$row['Pname'].'';

			
		}
			
			echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';

			echo 'quality';
			echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'<input type =text name ="quality" size =5>'.'<br>'.'<br>'.'<br>';

			echo '<input type=submit value="Add">';
	
	}

?>
</form>
</html>
	