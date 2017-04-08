
<html>


<style type="text/css">
p.big {font-size: 100px}
</style>

<?php

    $total = array();
    $price  = array();
    
    for($i =0 ; $i<$_POST['num'] ; $i++){

        if(empty($_POST['buy'.$i])){

        }
        else{
            array_push($price,$_POST['price'.$i]);
            array_push($total,$_POST['buy'.$i]);
            
        }
    }

    $count = count($total);
    
    $connect= mysqli_connect("localhost","root","","instrument_shop");
    
    if($count == 0){
        echo '<p class="big" >'.'Please Choose Product'.'</p>';
        include("page1.php");
    }
    else{
		$sql = 'INSERT INTO customer VALUE(0,"'.$_POST['Fname'].'","'.$_POST['Lname'].'","'.$_POST['Address'].'","'.$_POST['Tel'].'","'.$_POST['Email'].'")';
    
			mysqli_query($connect,$sql);
    
		$sql = 'SELECT Customer_ID FROM customer';
		$result = mysqli_query($connect,$sql);

		$num = mysqli_num_rows($result);


		for($i = 0 ; $i <$count ; $i++){
			$sql = 'INSERT INTO buy                 VALUE(0,'.$num.',"'.$total[$i].'",'.$price[$i].',"'.date("y-m-d").'")';
				mysqli_query($connect,$sql);
    
			$sql = 'DELETE FROM instrument WHERE Serial_no = "'.$total[$i].'"';
				mysqli_query($connect,$sql);

		}
    
		echo '<p align ="center" class ="big"> '.'Complete '.'</p>';
		echo '<form action ="page1.php">';
		echo '<p align ="center">'.'<input type ="submit" value ="Go To Page 1">'.'</p>';
		echo '</form>';

    }
?>
    

</html>
