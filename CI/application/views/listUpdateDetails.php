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
	<form action="<?php echo base_url();?>User/updateDetails" class="details" method="post">
	
	<table border="1">
		<thead>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Permanent Address</th>
			<th>Father Name</th>
			<th>Mobile Number</th>
			<th>Permanent Address</th>
			<th>Occupation</th>
			<th>Temorary Guardian</th>
			<th>Mobile Number</th>
			<th>Temporary Address</th>
			<th>Action</th>
			
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
				<td><?= $article->DOB?></td>
				<td><?= $article->PhoneNumber?></td>
				<td><?= $article->Email?></td>
				<td><?= $article->PermanentAddress?></td>
				<td><?= $article->FatherName?></td>
				<td><?= $article->MobileNumber?></td>
				<td><?= $article->Permanent_Address?></td>
				<td><?= $article->Occupation?></td>
				<td><?= $article->TemporaryGuardian?></td>
				<td><?= $article->Mobile_Number?></td>
				<td><?= $article->Temp_Address?></td>
				<td><a  class="btn btn-primary" href="<?php echo base_url();?>User/editDetails?stdid=<?php echo $article->StudentID;?>">Edit</a></td>

				</td>
			
				
			</tr>
		<?php
			endforeach;
		//endif;
		?>
		</tbody>
			<a href="<?php echo site_url('Home/dashboard');?>" input type="submit" name="logout" class="btn btn-success" value="Logout" > Return  </a><br><br>

	</table>
	</form>
</BODY>
</HEAD>
