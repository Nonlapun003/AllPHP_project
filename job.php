<html>
<head>
<body>
<table align="center" border= "1" width="700" height="980" bgcolor="#CCFFCC">
<tr>
<td>
<br>


<div style ="backgroud-color:white;"><p align="center"><font color="000000" size="4">--PLEASE INPUT YOUR DATA--</font></div>

<form name="formjob" action="jobprint_pre.php" method="post" enctype="multipart/form-data">

	Name <input type="text" name="firstname" size="20" value="">
	Lastname <input type ="text" name="lastname" size="25" value="">
	<p> Gender Female <input type="radio" name="gender" value="female" size="25">
	Male <input type="radio" name="gender" value="male" size="25"></P>
	<P> Birthdate Date

		<select name="selectdate">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		</select>
		Month
		<select name="selectmonth">
		<option value="January">January</option>
		<option value="Febuary">Febuary</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="Agust">Agust</option>
		<option value="September">Sebtember</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
		</select>

	Year<input type="text" name="year" size="10" value="">(value>1950)</p>
	<p> Addtress	<input type="text" name="address" size="60" value=""></p>
	<p> Telephone Number	<input type="text" name="phone" size="20" value=""></p>
	<p> Email Address	<input type="text" name="email" size="40" value=""></p>
	<p> Homepage	<input type="text" name="homepage" size="40" value=""></p>
	<p> Education </p>
	<p> &nbsp;&nbsp;&nbsp;<input type="radio" name="educate" value="Secondary Education">Secondary Education</p>
	<p> &nbsp;&nbsp;&nbsp;<input type="radio" name="educate" value="Dregree">Bachelor Dregree</p>
	<p> &nbsp;&nbsp;&nbsp;<input type="radio" name="educate" value="Master">Master degree</p>
	<p> Position</p>
	<p> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="position1" value="Office administrator">Office administrator</p>
	<p> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="position2" value="accountant">accountant</p>
	<p> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="position3" value="customer support web designer">accountantcustomer suppost web designer</p>
	<p> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="position4" value="programmer">programmer</p> 
	<p> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="position5" value="system administrator">system administrator</p>
	<p> Salary <input type="text" name="salary" size="15" value=""> bath</p>
	<p> Picture <input type="file" name="picfile" size="50"><input type="hidden" name="MAX_FILE+SIZE" value="100000">
	<p> Experience</p>
	<p> <textarea name="work" rows="10" cols"60"></textarea></P>
		<input type="submit" name="Submit" value="Submit Now">
		<input type="reset" value="Click to Reset">

</form>
</td>
</tr>
</table>
</html>
</head>
</body>
