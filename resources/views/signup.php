<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Registeration Form</title>
</head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<body>
<center>
	<form action="/registeration" method="post">
	
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<table>
			<tr>
			<td>First Name:</td>
			<td><input type="text" name="firstname"></td>
			</tr>

			<tr>
			<td>Last Name:</td>
			<td><input type="text" name="lastname"></td>
			</tr>

			<tr>
			<td>User Name:</td>
			<td><input type="text" name="username"></td>
			</tr>

			<tr>
			<td>Password:</td>
			<td><input type="Password" name="password"></td>
			</tr>

			<tr>
			<td></td>
			<td><input type="submit" name="register" value="Sign Up"></td>

			</tr>


	</table>

	</form>




</center>

</body>
</html>