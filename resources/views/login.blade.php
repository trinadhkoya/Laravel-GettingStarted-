<!DOCTYPE html>
<html>
<head>
	<title>Login- Page</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:100">
</head>
<body>
<center>
	<form action="/logmein" method="post">
	USERNAME:<input type="text" name="username"><br>
	<br></br>
	PASSWORD:<input type="password" name="password"><br>
	<br></br>
	<input type="submit" name="login" value="Login">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	</form>


</center>
</body>
</html>