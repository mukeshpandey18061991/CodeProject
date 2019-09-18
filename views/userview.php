

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
	<div class="col-md-6" style="border: 1px solid red;">
		<h1 style="color: darkred;">Register Here</h1>
		<hr>
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
         <?php echo validation_errors(); ?>
        
		
	</div>




	<div class="col-md-6" style="border: 1px solid red;"><h1 style="color: darkred;">Login Here</h1>
		<hr>
          <form action="<?php echo site_url(); ?>/user/logincode" method="post">
            <input type="text" name="txtuser" placeholder="enter username" value="<?php echo @$a; ?>"/>
            <br>
            <br>
            <input type="password" name="txtpass" placeholder="enter password" value="<?php echo @$b; ?>"/>
            <br>
            <br>
            <input type="checkbox" name="chk1"  <?php if($a!=null && $b!=null) echo "checked"  ?>/>Rememeber me
            <br>
            <br>
            <input type="submit" name="btnsubmit" value="Login" />
          </form>

           <?php echo @$res;?>
	</div>
	


</div>
</body>
</html>