<html>
<p>Instrument buy</p>
<form action="buy_add.php" method="post">

Customer ID


<?php
	$connect = mysqli_connect("localhost","root","","instrument_shop");
	$sql ='select Customer_ID from customer';
	$result = mysqli_query($connect,$sql);

	if(!$result)
	{
		echo mysqil_error();
	}
	else {

		echo '<select name ="CName">';
		while($row = mysqli_fetch_assoc($result)){
			echo '<option value = ';
			while(list($key,$value)=each($row)){
				echo $value;
				echo '>';
				echo $value;
				echo '</option>';
			
			
		}
		}
		echo '</select>';
	}


	$sql = 'select Serial_no from instrument';
	$result = mysqli_query($connect,$sql);

	if(!$result)
	{
		echo mysqil_error();
	}
	else {
			echo '<br>'.'<br>';
			echo 'Product ID ';
			echo '<select name="ProId">';
			while($row = mysqli_fetch_assoc($result)){
			echo '<option value = ';
			while(list($key,$value)=each($row)){
				echo $value;
				echo '>';
				echo $value;
				echo '</option>';
			}
			
		}
		echo '</select>';
			echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'<br>'.'<br>';

			

			echo '<input type=submit value="Add">';
	
	}

?>
</form>
</html>