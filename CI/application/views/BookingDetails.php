<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<HTML>
	<HEAD>
			 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

			 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/adminview.css">

		<TITLE>CUSTOMER'S BOOKING DETAILS</TITLE>
	</HEAD>

<BODY>
	<form action="<?php echo base_url();?>AdminController/getall" class="details" method="post">
	
	<table border="1">
	<?php
	?>
	
		<thead>
			
			<th>Customer Id</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>last Name</th>
			<th>Booking Id</th>
			<th>Room Type</th>
			<th>Room Id</th>
			<th>Booking date</th>
			<th>Admission date</th>
		
		</thead>
		
		<tbody>
		<?php 
		//if(count($detailmodel) ):
			foreach ($query as $row) :
		?>
			<tr>
				<td><?= $row->StudentID?></td>
				<td><?= $row->FirstName?></td>
				<td><?= $row->MiddleName?></td>
				<td><?= $row->LastName?></td>
				<td><?= $row->booking_id?></td>
				<td><?= $row->room_type?></td>
				<td><?= $row->room_id?></td>
				<td><?= $row->booking_date?></td>
				<td><?= $row->admission_date?></td><br>
				
				</td>
			
				
			</tr>
		<?php
			endforeach;
		//endif;
		?>
		</tbody>
				<a href="<?php echo site_url('Home/admin');?>" input type="submit" name="logout" class="btn btn-info" value="Logout" > Return  </a><br><br>

	</table>
	</form>
</BODY>
</HEAD>
