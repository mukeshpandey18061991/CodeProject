<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><center>
<h1>Welcome in Admin Login Page</h1>
<br>
<hr>
<form action="<?php echo site_url()?>/adminlogin/login" method="post">
	Enter username
	<br>
	<input type="text"  name="txtuser"/>
	<br>
	<br>
	Enter Password
	<br>
	<input type="text" name="txtpass"/>
	<br>
	<br>
	<input type="submit" name="btnsubmit" value="Login"/>
	

</form>
</center>
</body>
</html>