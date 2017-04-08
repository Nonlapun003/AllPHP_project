<?php
	session_start();
	if($_SESSION['PassID'] == "")
	{
		echo "Please Login!";
		exit();
	}



?>

<html>

<body background = "https://pixabay.com/static/uploads/photo/2016/01/06/09/03/bokeh-1123768_960_720.jpg">
<h3 align ="center">
<?php

/*if($_FILES["images"]["name"] != "") {
            $file_name = $_FILES["images"]["name"];
            $file_ext = substr($file_name, strripos($file_name, '.'));
            $equipmentImage = date("Ymdhis").$file_ext;
            if(move_uploaded_file($_FILES["images"]["tmp_name"],"image/".$equipmentImage)) { 
            }
        }*/

	$Brand = $_POST['Brand'];
	$Model = $_POST['Model'];	
	$Color = $_POST['Color'];
	$Price = $_POST['Price'];
	$Series = $_POST['Series'];
	$Serial = $_POST['Serial'];
	$Type= $_POST['Type'];
	//$i= $_POST['images'];


	
    //if($action == "add"){//Action Add
        //Upload Image
        
	//}


	$connect = mysqli_connect("localhost","root","","instrument_shop");
			
	
	$sql = 'insert into instrument values("'.$Brand.'","'.$Model.'","'.$Color.'" ,'.$Price.',"'.$Series.'","'.$Serial.'","'.$Type.'")';
	$result = mysqli_query($connect,$sql);

	//$sql = 'select * from instrument where Serial_no = "'.$Serial.'"' ;
	$sql = 'select * from instrument' ;
	$result = mysqli_query($connect,$sql);
	echo 'Add Instrument Complete';
	echo '<br>'.'<br>';
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
	
	     echo '</tr>';
	
	}
echo '</table>';
?>
<br>
<form method="post" action="instrument.php">
		<input type=submit value="Back to instrument"><br>
		</form>
<form action ="test.php">
<p><input type ="submit" value ="Back to Homepage"></p>
</form>
</body>
</html>