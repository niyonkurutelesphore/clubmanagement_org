<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body bgcolor="tfg" text="white">
<table border='0' celspacing='0' cellpadding='0' bgcolor='gray' width='99.9%' height="120" style="background-color:gray;border-radius: 10PX 10PX 0PX 0px;position: absolute;bottom:82%">
<tr><td align='center'><h1>CLUB MANAGEMENT SYSTEM</h1></td></tr>
</table><br><br>

<form action="login" method="POST">
@csrf
<center>
<br><br>
	<fieldset style="width: 30%; height: 250px; background-color: gray; position: absolute; top: 26%;left: 35%;border-radius:12px 12px 12px 12px;">

		<legend align="center"><b><h3>LoginForm</h3></b></legend>
		<input type="text" name="username" placeholder="Enter UserName" required style="width: 75%; text-align: center;height: 20%;">
	<br><br>

	<input type="password" name="password" placeholder="Enter PassWord" required style="width: 75%; text-align: center;height: 20%;">
	<br><br>

		<button type="submit" style="width: 25%; height: 20%;border-radius:15px 15px 15px 15px;">SIGNIN</button>
		&nbsp;&nbsp;
		<button type="reset" style="width: 25%; height: 20%; border-radius:15px 15px 15px 15px;">RESET</button>

	</fieldset>
	

<table border='0' celspacing='0' cellpadding='0' bgcolor='gray' width='99.9%' height="70px" style="background-color:gray;border-radius: 0PX 0PX 10PX 10px;position: absolute;top:89.5%;">
<tr><td align='center'>Copyright by 18rp01486and18rp00896@laravel</td></tr>
</table>


</center>
</form>
</body>
</html>