<?php
	session_start();
	if($_SESSION['PassID'] == "")
	{
		echo "Please Login!";
		exit();
	}



?>


<html>
	<head><title>UPDATE</title></head>
	<script language="Javascript">
	</script>
<h3 align ="center">
<body background = "http://i-cdn.phonearena.com/images/articles/115776-image/HTC-One-M8-official-wallpapers.jpg">
<style type="text/css">body, a:hover {cursor: url(http://ani.cursors-4u.net/anime/ani-13/ani1221.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2013/02/15/hetalia-axis-powers-romano.html" target="_blank" title="Hetalia: Axis Powers - Romano"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Hetalia: Axis Powers - Romano" style="position:absolute; top: 0px; right: 0px;" /></a>
<FONT Size="30">Update</FONT><br><br>


<?php
	 $connect = mysqli_connect("localhost","root","","instrument_shop");
		if(!isset($smtDelete)){
			$sql = 'select * from instrument';
		$result = mysqli_query($connect,$sql);

		$numrows = mysqli_num_rows($result);
		$numfields = mysqli_num_fields($result);

		if(!$result){
			echo '<b>Error</b>'.mysqli_errno().':'.mysqli_error().'<br>';
		} else if ($numrows==0){
			echo '<b>Query execueted successfully but no row returns!</b>';
		} else {
			echo '<table border ="1" cellspacing="0" cellpadding="3" align = "center">';
			echo '<tr bgcolor = #00ffff>';
			echo '<td>';
			echo 'Brand';
			echo '</td>';
			echo '<td>';
			echo 'Model';
			echo '</td>';
			echo '<td>';
			echo 'Color';
			echo '</td>';
			echo '<td>';
			echo 'Price';
			echo '</td>';
			echo '<td>';
			echo 'Series';
			echo '</td>';
			echo '<td>';
			echo 'Serial_no';
			echo '</td>';			
			echo '<td>';
			echo 'Type';
			echo '</td>';
			echo '<td>';
			echo 'Update';
			echo '</td>';
			echo '</tr>';

			while ($row = mysqli_fetch_array($result)){
			echo'<form name="frmDelete'.$row['Serial_no'].'"method="post" action="update2.php">'."\n";
				echo '<tr bgcolor = #cc99ff>';	
				
				for ($i=0; $i<$numfields; $i++){
						echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
				}
				echo '<input type ="hidden" name="id" value="'.$row['Serial_no'].'">'."\n";
				echo '<td><input name="update" type ="submit" value ="UPDATE" ></td>'."\n";
				echo '</tr>'."\n";
				echo '</form>'."\n";
			}
			echo '</table>';
		}
		}
		mysqli_close($connect);
	?>
</body>
</html>