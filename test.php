<html>


<?php
	session_start();
	if($_SESSION['PassID'] == "")
	{
		echo "Please Login!";
		exit();
	}



?>


<h3 align ="center">
<body background = "http://previews.123rf.com/images/hannamariah/hannamariah1103/hannamariah110300016/9190202-Acoustic-guitar-against-an-old-barn-background--Stock-Photo-western.jpg">
<style type="text/css">body, a:hover {cursor: url(http://ani.cursors-4u.net/anime/ani-13/ani1221.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2013/02/15/hetalia-axis-powers-romano.html" target="_blank" title="Hetalia: Axis Powers - Romano"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Hetalia: Axis Powers - Romano" style="position:absolute; top: 0px; right: 0px;" /></a>
<FONT Size="30">Homepage</FONT>
<form action ="instrument.php">
<p><input type ="submit" value ="Add"></p>
</form>

<form action ="update1.php" >
<p><input type ="submit" value ="Update" ></p>
</form>

<form action ="d1.php">
<p><input type = "submit" value ="Delete"></p>

</form>

<form action ="Report.php">
<p><input type ="submit" value ="Report"></p>
</form>

<form action ="logout.php">
<p><input type ="submit" value ="Logout"></p>
</form>


</h3>
</html>

