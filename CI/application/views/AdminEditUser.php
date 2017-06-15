<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  	<meta charset="utf-8">
	
  <TITLE>Update Form</TITLE>
  
  	<link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link href="<?php echo base_url();?>assets/css/stylemenu.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url();?>assets/prefix-free.js"></script>
    <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/style1.css">
 
</HEAD>
<?php
if($records->num_rows()>0){
	foreach($records->result() as $row){
?>
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
			<li><a href="<?php echo site_url('Home/contact')?>" <span class="iconic mail"></span> Contact Us</a>
				
			</li>
			<li><a href="<?php echo site_url('Home/login')?>"><span class="iconic mail"></span> Login</a></li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>
	<?php?>
  <h1 class="register-title">Admin Update Form</h1>
  <form name="form1" class="register" action="<?php echo base_url();?>AdminController/updateEditMember/" method="post">
  
	<table>
	<fieldset>
	<legend> Student's Details </legend>
	
	<tr>
		<input type="hidden" name="id" class="form-control" id="id" required="required" value="<?php echo $row->StudentID; ?>">

	</tr>
	
	<tr>
		<td><input type="text" name="fname" class="register-input" placeholder="First Name" required="required" value="<?php echo $row->FirstName; ?>"></td>
		<td><input type="text" name="mname" class="register-input" placeholder="Middle Name" value="<?php echo $row->MiddleName; ?>"></td>
		<td><input type="text" name="lname" class="register-input" placeholder="Last Name" required="required" value="<?php echo $row->LastName; ?>"></td>
	</tr>
	

	<tr>
		<td><input type="text" name="peradd" class="register-input" placeholder="Permanent Address" required="required" value="<?php echo $row->PermanentAddress; ?>"></td>
		<td><input type="text" name="tempadd" class="register-input" placeholder="Temporary Address" value="<?php echo $row->TemporaryAddress; ?>"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="mobile" class="register-input" placeholder="Mobile Number" required="required" value="<?php echo $row->PhoneNumber; ?>"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="email" class="register-input" placeholder="Email" required="required" value="<?php echo $row->Email; ?>"></td>
	</tr>
	

	</fieldset>
	</table>
	
	<table>
	<fieldset>
	<legend>Guardian's Details</legend>

	<tr>
		<td><input type="text" name="mobnum" class="register-input" placeholder="Mobile Number" required="required" value="<?php echo $row->MobileNumber; ?>"></td>
		<td><input type="text" name="address" class="register-input" placeholder="Address" required="required" value="<?php echo $row->PermanentAddress; ?>"></td>
		<td><input type="text" name="occupation" class="register-input" placeholder="Occupation" value="<?php echo $row->Occupation; ?>"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="localname" class="register-input" placeholder="Local Guardian" required="required" value="<?php echo $row->TemporaryGuardian; ?>"></td>
	</tr>
	
	<tr>
		<td><input type="text" name="add" class="register-input" placeholder="Address" required="required" value="<?php echo $row->Mobile_Number; ?>"></td>
		<td><input type="text" name="mobnumber" class="register-input" placeholder="Mobile Number" required="required" value="<?php echo $row->Temp_Address; ?>"></td>
	</tr>
	</fieldset>
	
	<tr>
    <td><input type="submit" value="Update" class="btn btn-primary" </td><br>
   <td><a href="<?php echo site_url('Home/admin')?>" input type="submit" value="Back" class="btn btn-danger" onClick="return confirm('Are you sure?')" >Back</a></td><br>
	</tr>
	
	</table>
  </form>
  <?php
  }
  }
  ?>

 
</BODY>
</HTML>
