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
			<th>Room Type</th>
			<th>Room Id</th>
			<th>Booking Date</th>
			<th>Username</th>
			<th>Action</th>
			
		</thead>
		
		<tbody>
		<?php 
		//if(count($detailmodel) ):
			foreach ($records as $article) :
		?>
			<tr>
				
				<td><?= $article->room_type?></td>
				<td><?= $article->room_id?></td>
				<td><?= $article->booking_date?></td>
				<td><?= $article->username?></td>
				<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>Booking/deleteBookingDetails?bookid=<?php echo $article->booking_id; ?>">Delete</a></td>
				</td>
			
				
			</tr>
		<?php
			endforeach;
		//endif;
		?>
		</tbody>
			<a href="<?php echo site_url('Home/booking');?>" input type="submit" name="logout" class="btn btn-danger" value="Logout" > Return  </a><br><br>

	</table>
	</center>
	</form>
</BODY>
</HEAD>
