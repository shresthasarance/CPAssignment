<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title> Login Form </title>

  	<link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

<link href="<?php echo base_url();?>assets/css/stylemenu.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquerymin.js"></script>
<link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/style1.css">


<script type="text/javascript">
	$(document).ready(function(){
		$('#btnHello').click(function(){
			var username=$('#username').val();
			$.ajax({
				type:'POST',
				data:(username:username),
				url:'<?php echo site_url('Home/hello');?>',
				success:function(result){
					$('#result1').html(result);
				}
		});
	});
	});
	
</script>

</head>
<body>
	<div class="wrap">
	
	<nav>
		<ul class="menu">
			<li><a href="<?php echo site_url('Home/index')?>"><span class="iconic home"></span> Home</a></li>

			<li><a href="#"><span class="iconic magnifying-glass"></span> Services</a>
			
			
			</li>
			<li><a href="<?php echo site_url('Home/contact')?>" <span class="iconic mail"></span> Contact Us</a>
				
			</li>
			<li><a href="#"><span class="iconic mail"></span> Login</a></li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>
	<div class="container">
	<section id="content">
		<form class="login" id="frm_login"  action="<?php echo base_url();?>User/login" method="post">
			<h1 class="login-title">Login</h1>
			<center>
			
			<div>
				<input type="text" id="username" name="username" placeholder="Username" class="login-input" required="required"  /><br><br>
			</div>
			<div>
				<input type="password"  name="password" placeholder="Password" class="login-input" required="required"  /><br><br>
			</div>
			<div>
				<td><input type="submit" name="login"  id="btnHello" class="btn btn-primary" value="Log in" style="    margin-left: -83px; width: 90px; padding-left: 17px;"/></td>
				<span id="result1"></span>
				<td><a class="btn btn-success" href="<?php echo site_url('Home/register')?>">New user?Register Now</a><br> </td>
				
			</div>
		</form><!-- form -->
	</section><!-- content -->
	</div><!-- container -->
		</center>
	</form>
	
		<!-- jQuery -->
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
		<!-- Stellar -->
		<script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
		<!-- countTo -->
		<script src="<?php echo base_url();?>assets/js/jquery.countTo.js"></script>
		<!-- Magnific Popup -->
		<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Main JS -->
		<script src="<?php echo base_url();?>assets/js/main.js"></script>
</Body>
</Html>