<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  	<meta charset="utf-8"> 
	<TITLE> BOOKING </TITLE>
	
	
	<link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link href="<?php echo base_url();?>assets/css/stylemenu.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url();?>assets/prefix-free.js"></script>
    <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/booking.css">
	
</HEAD>
<BODY>

<div class="wrap">
	
	<nav>
		<ul class="menu">
			<li><a href="<?php echo site_url('Home/index')?>"><span class="iconic home"></span> Home</a></li>
			<li><a href="#"><span class="iconic magnifying-glass"></span> Services</a>
			
			
			<li><a href="#" <span class="iconic mail"></span> Contact Us</a>
				
			</li>
			<li><a href="<?php echo site_url('Home/login')?>"><span class="iconic mail"></span> Login</a></li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>
	
<h1 class="booking-title">BOOKING</h1>
  <form name="form1" class="booking" action="<?php echo base_url();?>Booking/userBooking/" method="post">
	<table>
		<tr>
            <td width="150"> 
				<label for="roomtype" >Room type </label>                        
             </td> 
                <td>
                    <Select  class="booking-input" name="room">
					<option value="">Select</option>
					<?php if(count($getRoom)):?>
								
					<?php foreach($getRoom as $room):?>
					<option value=<?php echo $room->room_id?> > <?php echo $room->description;?> </option>

										
					<?php endforeach;?>
									
					<?php else :?>
								
					<?php endif;?>
                               
                    </Select>
                </td>
		</tr>
		
		<tr>
            <td width="150"> 
				<label for="roomid">Room ID </label>                        
             </td> 
                <td>
                    <Select  class="booking-input" name="roomid">
					<option value="">Select</option>
					<?php if(count($getRoom)):?>
								
					<?php foreach($getRoom as $room):?>
					<option value=<?php echo $room->room_id?> > <?php echo $room->room_id;?> </option>

										
					<?php endforeach;?>
									
					<?php else :?>
								
					<?php endif;?>
                               
                    </Select>
                </td>
		</tr>
			
		<tr>
			<td> 
				<label for="Bookingdate">Booking Date </label>                        
			</td> 
                <td>
                   	<td><input type="date" name="date" class="booking-input" required="required"></td>

                </td>
				 
        </tr>
		    <td><input type="submit" value="Book Room" class="btn btn-info" onClick="return confirm('Are you sure want to Book Room?')" ></td><br>
		    <td><a href="<?php echo site_url('Home/dashboard')?>" input type="submit" value="Back" class="btn btn-danger" onClick="return confirm('Are you sure?')" >Back</a></td><br>
			<td><a href="<?php echo site_url('Booking/deleteBooking')?>" input type="submit" value="Submit" class="btn btn-primary" > Booking Details </a> <br><br></td>
			

		</table>
	</form>
<BODY>
</HTML>