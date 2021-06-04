<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body bgcolor="tfg" text="white">
<table border='0' celspacing='0' cellpadding='0' bgcolor='gray' width='99.9%' height="120" style="background-color:gray;border-radius: 10PX 10PX 0PX 0px;position: absolute;bottom:82%">
<tr><td align='center'><h1>Club Management System</h1></td></tr>
</table><br><br>

<form action="" method="POST">
<center>
<br><br>

<center>
	<div style="border: 1px; width: 20%; height: 100px; background-color: black; position: absolute;top: 45%;"><br><a href="{{ route('clubs.index') }}" style="text-decoration: none;"><font color="white">CLUB LIST</font></a>
	<br><br><a href="{{ route('club_members.index') }}" style="text-decoration: none;"><font color="white">CLUB MEMBERS</font></a>
	</div>

	<div style="border: 1px; width: 50%; height: 100px; background-color: black; position: absolute;top: 45%;left: 25%; border-radius: 0px 50px 50px 0px;"><br><br><a href="{{ route('clubs.create') }}" style="text-decoration: none;"><font color="white">ADD NEW CLUB</font></a><a href="{{ route('club_members.create') }}" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white">NEW CLUB MEMBERS</font></a></div>

	<div style="border: 1px; width: 8%; height: 70px; background-color: black; position: absolute;top: 45%; right: 0%;border-radius:80px;"><br><br><a href="logout" style="text-decoration: none;"><font color="white">SIGNOUT</font></a></div>
</center>

<table border='0' celspacing='0' cellpadding='0' bgcolor='gray' width='99.9%' height="70px" style="background-color:gray;border-radius: 0PX 0PX 10PX 10px;position: absolute;top:89.5%;">
<tr><td align='center'>Copyright by 18rp01486 and 18rp00896@laravel</td></tr>
</table>


</center>
</form>
</body>
</html>