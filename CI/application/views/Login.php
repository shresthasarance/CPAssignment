<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title> Login Form </title>

<link href="<?php echo base_url();?>assets/css/stylemenu.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/iconic.css" media="screen" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>assets/prefix-free.js"></script>
<link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/style1.css">

</head>
<body>
	<div class="wrap">
	
	<nav>
		<ul class="menu">
			<li><a href="<?php echo site_url('Home/index')?>"><span class="iconic home"></span> Home</a></li>
			<li><a href="#"><span class="iconic plus-alt"></span> About</a>
				
			</li>
			<li><a href="#"><span class="iconic magnifying-glass"></span> Services</a>
			
			</li>
			<li><a href="#"><span class="iconic map-pin"></span> Products</a>
			
			</li>
			<li><a href="#" <span class="iconic mail"></span> Contact Us</a>
				
			</li>
			<li><a href="#"><span class="iconic mail"></span> Login</a></li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>
	<div class="container">
	<section id="content">
		<form class="login" action="<?php echo base_url();?>User/login" method="post">
			<h1 class="login-title">Login</h1>
			<center>
			
			<div>
				<input type="text" name="username" placeholder="Username" class="login-input" required="required"  /><br><br>
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" class="login-input" required="required"  /><br><br>
			</div>
			<div>
				<input type="submit" name="login" class="login-button" value="Log in" />
				<input type="checkbox" name="remember">Remember me
				<a href="<?php echo site_url('Home/register')?>">New user?Register Now</a><br> 
				
			</div>
		</form><!-- form -->
	</section><!-- content -->
	</div><!-- container -->
		</center>
	</form>