<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<HTML>
	<HEAD>
		<TITLE> USER DASHBOARD </TITLE>
	
	
		<link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/dashboard.css">


	
		 
	</HEAD>

	<BODY>
	
	
	<h1 class="dashboard-title">Welcome to  User's Dashboard </h1>
	<form class="dashboard" >		
				
	<table>
	<tr>
	<td><a href="<?php echo site_url('Booking/getRoomDetails')?>" input type="submit" value="Submit" class="dashboard-button" > Book Room </a> <br><br></td>
	</tr>
	
	<tr>

	<td><a href="<?php echo site_url('User/details')?>" input type="submit" value="Submit" class="dashboard-button" > View Details </a> <br><br></td>
	</tr>
	
	<tr>
	<td><a href="<?php echo site_url('User/updateDetails')?>" input type="submit" value="Submit" class="dashboard-button" > Update Details </a> <br><br></td>
	</tr>

	
	<tr>
	<td><a href="<?php echo base_url();?>User/logout" input type="submit" name="logout" class="dashboard-button" value="Logout" > Logout </a><br><br></td>
	</tr>


	</form>
	</BODY>
</HTML>