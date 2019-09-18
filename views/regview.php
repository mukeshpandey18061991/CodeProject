<!DOCTYPE html>
<html>
<head>
 <title></title>
 <style type="text/css">
  p
  {
   color:red;
  }



 </style>
</head>
<body>
	<div class="col-md-6"><h3>Register Here</h3>
<form action=""  method="post">
<input type="text" name="txtuser" placeholder="Enter username" />

<br>
<br>
<input type="text" name="txtpass" placeholder="Enter password" />
<?php echo form_error('txtpass');?>
<br>
<br>
<input type="text" name="txtemail" placeholder="Enter email" />
<?php echo form_error('txtemail');?>
<br>
<br>
<input type="text" name="txtmobile" placeholder="Enter mobileno" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Register" />

</form>
</div>
<center><?php echo validation_errors(); ?>
</body>
</html>
