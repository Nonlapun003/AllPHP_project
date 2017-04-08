<html>

<style type="text/css">
p.big {font-size: 50px}
</style>




<?php

	session_start();
	$connect = mysqli_connect("localhost","root","","instrument_shop");
	$sql= "SELECT * FROM employee WHERE Username = '".($_POST['user'])."' 
	and Password = '".($_POST['password'])."'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($result);


	if(!$row){
		//echo '<p align ="center" class="big">'.'Not Complete'.'</p>';
		//include("login.php");
		header("location:login.php");
		 
	}
	else {

			$_SESSION["PassID"] = $row["PassID"];
			$_SESSION["Status"] = $row["Status"];

			session_write_close();

			if($row["Status"] == "admin")
			{
				header("location:test.php");
			}

	}

?>


</html>