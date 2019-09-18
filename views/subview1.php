<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php  echo site_url();?>/sub1/sublogic" method="post">
	<input type="text" name="txtnum1" placeholder="Enter First Number" value="<?php echo @$a1;  ?>" />
	<br>
	<br>
	<input type="text" name="txtnum2" placeholder="Enter Second number" value="<?php echo @$b1;?>" />
	<br>
	<br>
	<input type="submit" name="btnsubmit" value="Calculate"/>

</form>
<?php
echo @$res;
?>
</body>
</html>