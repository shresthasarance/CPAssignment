<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<HTML>
	<HEAD>
			 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

			 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/view.css">

		<TITLE>STUDENTS DETAILS</TITLE>
	</HEAD>

<BODY>
	<form action="<?php echo base_url();?>User/details" class="details" method="post">
	
	<table border="1">
	<?php
	?>
	
		<thead>
			
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Permanent Address</th>
			<th>Joining Date</th>
			<th>Father Name</th>
			<th>Mobile Number</th>
			<th>Permanent Address</th>
			<th>Occupation</th>
			<th>Temorary Guardian</th>
			<th>Mobile Number</th>
			<th>Temporary Address</th>
			
		</thead>
		
		<tbody>
		<?php 
		//if(count($detailmodel) ):
			foreach ($records as $article) :
		?>
			<tr>
				
				<td><?= $article->FirstName?></td>
				<td><?= $article->MiddleName?></td>
				<td><?= $article->LastName?></td>
				<td><?= $article->DOB?></td><br>
				<td><?= $article->PhoneNumber?></td>
				<td><?= $article->Email?></td>
				<td><?= $article->PermanentAddress?></td>
				<td><?= $article->JoiningDate?></td>
				<td><?= $article->FatherName?></td>
				<td><?= $article->MobileNumber?></td>
				<td><?= $article->Permanent_Address?></td>
				<td><?= $article->Occupation?></td>
				<td><?= $article->TemporaryGuardian?></td>
				<td><?= $article->Mobile_Number?></td>
				<td><?= $article->Temp_Address?></td>
				</td>
			
				
			</tr>
		<?php
			endforeach;
		//endif;
		?>
		</tbody>
				<a href="<?php echo site_url('Home/dashboard');?>" input type="submit" name="logout" class="btn btn-primary" value="Logout" > Return  </a><br><br>

	</table>
	</form>
</BODY>
</HEAD>
