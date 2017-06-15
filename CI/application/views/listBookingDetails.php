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
	<form action="<?php echo base_url();?>Booking/deleteBooking" class="details" method="post">

	<table border="4">
		<thead>
		
			<th>Username</th>
			<th>Customer Id</th>
			<th>Room Type</th>
			<th>Room Id</th>
			<th>Booking Date</th>
			<th>Admission Date</th>
			<th>Action</th>
			
		</thead>
		
		<tbody>
		<?php 
		//if(count($detailmodel) ):
			foreach ($records as $article) :
		?>
			<tr>
				
				<td><?= $article->username?></td>
				<td><?= $article->customer_id?></td>
				<td><?= $article->room_type?></td>
				<td><?= $article->room_id?></td>
				<td><?= $article->booking_date?></td>
				<td><?= $article->admission_date?></td>
				<td>
					<a onclick="return confirm('Do you want to delete?')" class="btn btn-danger" href="<?php echo base_url();?>Booking/deleteBookingDetails?bookid=<?php echo $article->booking_id; ?>">
						Cancel Booking
					</a>
				</td>
			</tr>	

		<?php
			endforeach;
		//endif;
		?>
		</tbody>
	
		<a href="<?php echo site_url('Booking/getRoomDetails');?>" input type="submit" name="logout" class="btn btn-danger" value="Logout" > Return  </a><br><br>

	</table>
	</center>
	</form>
</BODY>
</HEAD>
