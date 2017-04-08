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

		
		while($row = mysqli_fetch_assoc($result)){
			echo '<input type ="radio" name ="CusName" value = '.$row['CID'].'>'.$row['Cname'].'';
				
		}
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
		while($row = mysqli_fetch_assoc($result)){
			
			echo '<input type="radio" name ="ProName" value ='.$row['Pid'].'>'.$row['Pname'].'';
		
			
		}
			
			echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';

			echo 'quality';
			echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'<input type =text name ="quality" size =5>'.'<br>'.'<br>'.'<br>';

			echo '<input type=submit value="Add">';
	
	}

?>
</form>
</html>
	