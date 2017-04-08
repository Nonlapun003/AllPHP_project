<html>

<script language ="javascript">
	
	function checktel(){
		
			if(isNaN(document.buy.Tel.value)){
				alert('Press Insert TelephoneNumber');
				document.buy.Tel.focus();
				return false;
			}

			document.buy.submit();
	
	}


</script>

<form name="buy" method ="post" action="Total.php"  onSubmit="JavaScript:return checktel();">

<?php

	$type = $_POST['type'];

	echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.$type;

	$connect= mysqli_connect("localhost","root","","instrument_shop");
	$sql = 'SELECT Brand,Model,Color,Price,Series,Serial_no FROM instrument WHERE type="'.$type.'"';
	$result = mysqli_query($connect,$sql);
	
	

	$num = mysqli_num_rows($result);
	

	echo '<input name ="num" type ="hidden" value ="'.$num.'">';

	echo '<table border="1">';

	echo '<tr>';
	echo '<td>'.'Brand'.'</td>';
	echo '<td>'.'Model'.'</td>';
	echo '<td>'.'Color'.'</td>';
	echo '<td>'.'Price'.'</td>';
	echo '<td>'.'Series'.'</td>';
	echo '<td>'.'Buy?'.'</td>';
	echo '</tr>';
	

	$count =0;
	while($row =mysqli_fetch_assoc($result)){
		
		echo '<tr>';
		
		while(list($key,$value)=each($row)){
		
			if($key=="Serial_no"){
				
			}
			else{
				
				echo '<td>';
				echo $value;
				echo '</td>';
			}
		}
		echo '<input type ="hidden" name ="price'.$count.'" value ="'.$row['Price'].'">';
		echo '<td>'.'<input name ="buy'.$count.'" type="checkbox" value="'.$row['Serial_no'].'"> Buy'.'</td>';
		echo '</tr>';

		$count++;
	}
	
	
	echo '</table>';
	
	echo '<p>'.'FirstName :'.'<input type ="text" name ="Fname" required>'.'</p>';
	echo '<p>'.'LastName :'.'<input type ="text" name ="Lname" required>'.'</p>';
	echo '<p>'.'Address :'.'<input type ="text" name ="Address" required>'.'</p>';
	echo '<p>'.'Tel :'.'<input type ="text" name ="Tel" maxlength="10" required>'.'</p>';
	echo '<p>'.'Email :'.'<input type ="email" name ="Email" required>'.'</p>';

	echo '<p>'.'<input type ="submit" value ="Submit" >'.'</p>';

?>
</form>
</html>