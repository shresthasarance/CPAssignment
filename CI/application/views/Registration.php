<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  	<meta charset="utf-8">
	<!--javascript-->
	<SCRIPT>
		function checkpwd(){
		var password=document.form1.password.value;
		var cpassword=document.form1.cpassword.value;
		
		if(password===cpassword){
		
			document.getElementById('message').innerHTML="password match";
		}else{
		
			document.getElementById('message').innerHTML="password doesn't match";
		}
		
		}
	</SCRIPT>
	
  <TITLE>Registration Form</TITLE>
	<link href="<?php echo base_url();?>assets/css/stylemenu.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/iconic.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url();?>assets/prefix-free.js"></script>
    <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/style1.css">

 
</HEAD>
<BODY>
	<div class="wrap">
	
	<nav>
		<ul class="menu">
			<li><a href="<?php echo site_url('Home/index')?>"><span class="iconic home"></span> Home</a></li>
			<li><a href="#"><span class="iconic plus-alt"></span> About</a>
				
			</li>
			<li><a href="#"><span class="iconic magnifying-glass"></span> Services</a>
			
			</li>
			<li><a href="#"><span class="iconic map-pin"></span> Products</a>
			
			</li>
			<li><a href="#" <span class="iconic mail"></span> Contact Us</a>
				
			</li>
			<li><a href="<?php echo site_url('Home/login')?>"><span class="iconic mail"></span> Login</a></li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>
	
  <h1 class="register-title">Welcome</h1>
  <form name="form1" class="register" action="<?php echo base_url();?>User/register/" method="post">
  
	<table>
	<fieldset>
	<legend> Student's Details </legend>
	
	<tr>
		<td><input type="text" name="fname" class="register-input" placeholder="First Name" required="required"></td>
		<td><input type="text" name="mname" class="register-input" placeholder="Middle Name"></td>
		<td><input type="text" name="lname" class="register-input" placeholder="Last Name" required="required"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="username" class="register-input" placeholder="Username" required="required"></td>
		<td><input type="password" name="password" class="register-input" maxlength="20" placeholder="Password" required="required"></td>
	</tr>
	<tr>
		<td><input type="password" name="cpassword" class="register-input" maxlength="20" placeholder="Confirm Password" required="required" onchange="checkpwd();"></td>
		<span id="message"></span>
	</tr>
	
	
	<tr>
		<td><input type="date" name="date" class="register-input" placeholder="Date Of Birth" required="required"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="peradd" class="register-input" placeholder="Permanent Address" required="required"></td>
		<td><input type="text" name="tempadd" class="register-input" placeholder="Temporary Address"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="mobile" class="register-input" placeholder="Mobile Number" required="required"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="email" class="register-input" placeholder="Email" required="required"></td>
	</tr>
	
	<tr>
		<td><input type="date" name="joindate" class="register-input" placeholder="Joining Date" required="required"></td>
	</tr>
	</fieldset>
	</table>
	
	<table>
	<fieldset>
	<legend>Guardian's Details</legend>
	
	<tr>
		<td><input type="text" name="fathername" class="register-input" placeholder="Father's Name" required="required"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="mobnum" class="register-input" placeholder="Mobile Number" required="required"></td>
		<td><input type="text" name="address" class="register-input" placeholder="Address" required="required"></td>
		<td><input type="text" name="occupation" class="register-input" placeholder="Occupation" ></td>
	</tr>
	
	<tr>
		<td><input type="text" name="localname" class="register-input" placeholder="Local Guardian" required="required"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="add" class="register-input" placeholder="Address" required="required"></td>
		<td><input type="text" name="mobnumber" class="register-input" placeholder="Mobile Number" required="required"></td>
	</tr>
	</fieldset>
	
	<tr>
    <td><input type="submit" value="Submit" class="register-button"  href="<?php echo site_url('Home/login')?>" </td><br>
	</tr>
	
	</table>
  </form>

 
</BODY>
</HTML>
