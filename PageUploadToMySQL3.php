<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php
	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("instrument_shop");
	$strSQL = "SELECT * FROM instrument";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="340" border="1">
<tr>
<th width="50"> <div align="center">Brand </div></th>
<th width="150"> <div align="center">Model</div></th>
<th width="150"> <div align="center">Photo</div></th>
<th width="150"> <div align="center">Color</div></th>
<th width="50"> <div align="center">Price</div></th>
<th width="150"> <div align="center">Serie</div></th>
<th width="150"> <div align="center">Serial_no</div></th>
<th width="150"> <div align="center">Type</div></th>
</tr>
<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
?>
<tr>
<td><div align="center"><?php echo $objResult["FilesID"];?></div></td>
<td><center><img src="myfile/<?php echo $objResult["FilesName"];?>"></center></td>
<td><center><?php echo $objResult["Name"];?></center></td>
<td><center><a href="PageUploadToMySQL4.php?FilesID=<?php echo $objResult["FilesID"];?>">Edit</a></center></td>
</tr>
<?php
	}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>
