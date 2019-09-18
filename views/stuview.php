<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<a href="<?php echo site_url(); ?>/student/logout"><button style="color: orange;">LOGOUT</button></a>
	<br>
	<br>
	<a href="<?php echo site_url(); ?>/student/stushow"><button style="color: darkred;">Show Data</button></a>
<h1>Welcome in Student Information</h1>

<form action="<?php echo site_url(); ?>/Student/stuadd" method="post">

<input type="text" name="txtrollnum" placeholder="enter rno" />
<br>
<br>
<input type="text" name="txtname" placeholder="enter name" />
<br>
<br>
<input type="text" name="txtbranch" placeholder="enter branch" />
<br>
<br>
<input type="text" name="txtfees" placeholder="enter fees" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Insert" style="width: 100px;" />
</form>
<br>
<br>


<?php
echo @$res;
?>
</center>
</body>
</html>