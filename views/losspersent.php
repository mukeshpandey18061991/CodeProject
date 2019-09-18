<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo site_url();?>/losspersent/losspersentlogic" method="post">
		<input type="text" name="txtnum1" placeholder="cost price" value="<?php echo @$a1;?>" />
		<br>
		<br>
		<input type="text" name="txtnum2" placeholder="Loss" value="<?php echo @$b1;?>" />
		<br>
		<br>
		<input type="submit" name="btnsubmit" value="Loss persent"/>
		<h3>[Loss*100]/cost price==</h3>

	</form>
<?php

echo @$res;

?>
</body>
</html>