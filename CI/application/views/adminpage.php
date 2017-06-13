<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<HTML>
	<HEAD>
		<TITLE> ADMIN DASHBOARD </TITLE>
	
		 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

		<link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/admin.css">


	
		 
	</HEAD>

	<BODY>
	
	
	
	<form class="admin" >	
<h1 class="admin-title">Welcome to  Admin Dashboard </h1>	

				
	<table>
	
	<tr>

	<td><a href="<?php echo site_url()?>" input type="submit" value="Submit" class="admin-button" > Booking Details </a> <br><br></td>
	</tr>
	
	<tr>
	<td><a href="<?php echo site_url('AdminController/viewDetails')?>" input type="submit" value="Submit" class="admin-button" > Customer's Details </a> <br><br></td>
	</tr>
	
	<tr>
	<td><a href="<?php echo base_url();?>User/logout" input type="submit" name="logout" class="admin-button" value="Logout" > Logout </a><br><br></td>
	</tr>
	


	</form>
	</BODY>
</HTML>