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
		    <script src="http://code.jquery.com/jquery-1.6.1.js"></script>

	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.countTo.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
    <script>
function myfun(){
	alert ("success");
}

    
    </script>

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
            <td width="180">  
				<label for="room" >Room type </label>                        
             </td> 
                <td>
                    <Select class="booking-input" name="room">
					<option value="room">Select</option>
					<?php if(count($getRoom)):?>
								
					<?php foreach($getRoom as $room):?>
					<option value="<?php echo $room->description;?>" > <?php echo $room->description;?> </option>

										
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
                <td width="90">
                    <Select  class="booking-input" name="roomid">
					<option value="roomid">Select</option>
					<?php if(count($getRoom)):?>
								
					<?php foreach($getRoom as $room):?>
					<option value="<?php echo $room->room_id?>" > <?php echo $room->room_id;?> </option>

										
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
                <td width="">
                   	<td><input type="date" name="date" class="booking-input" required="required" style="margin-left: -82px;"></td>

                </td>
				 
        </tr>

		<tr>
			<td> 
				<label for="AdmissionDate">Admission Date </label>                        
			</td> 
                <td width="">
                   	<td><input type="date" name="admitdate" class="booking-input" required="required" style="margin-left: -82px;"></td>

                </td>
				 
        </tr>
		<tr>
		    <td><input type="submit" value="Book Room" class="btn btn-success" onClick="return confirm('Are you sure want to book?')" ></td><br>
		    <td><a href="<?php echo site_url('Home/dashboard')?>" input type="submit" value="Back" class="btn btn-danger" onClick="return confirm('Are you sure, you want to return?')" >Back</a></td><br>
			<td><a href="<?php echo site_url('Booking/deleteBooking')?>" onclick="myfun();" input type="submit" value="Submit" class="btn btn-primary" > Booking Details </a> <br><br></td>
		</tr>
			

		</table>
		<td>
		<p>NOTE:</p>
		<p>
			Only the Original copy of the application form will be valid while admiting the student.
		</p>
		
		</td>
			<!-- jQuery -->
		
	</form>
<BODY>
</HTML>