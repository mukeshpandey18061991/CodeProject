<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url();?>/profitpersent1/profitpersentlogic" method="post">
		<input type="text" name="txtnum1" placeholder="cost price" value="<?php echo @$a1;?>" />
		<br>
		<br>
		<input type="text" name="txtnum2" placeholder="profit" value="<?php echo @$b1;?>" />
		<br>
		<br>
		<input type="submit" name="btnsubmit" value="profit persent"/>
		<h3>[Profit*100]/cost price==</h3>

	</form>
<?php

echo @$res;

?>
</body>
</html>