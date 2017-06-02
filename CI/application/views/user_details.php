<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<HTML lang="en">
	<HEAD>
		<meta charset="utf-8">
	<!--javascript-->
	<SCRIPT>
		function checkpwd(){
		var password=document.form1.password.value;
		var cpassword=document.form1.cpassword.value;
		
		if(password===cpassword){
		
			document.getElementById('message').innerHTML="password match";
		}else{
		
			document.getElementById('message').innerHTML="password doesn't match";
		}
		
		}
	</SCRIPT>
		<TITLE> STUDENT DETAILS </TITLE>
		
	</HEAD>

		<BODY>
		
			<form name="form1" action="<?php echo base_url();?>User/register/" method="post">
			<center>
			<fieldset>
			<legend>STUDENT'S DETAILS</legend>
	
				<table>
				<tr>
					<td><label>FIRST NAME:</label><br><br></td>
					<td><input type="text" name="fname" required="required"/><br><br></td>
					
					<td><label>MIDDLE NAME:</label><br><br></td>
					<td><input type="text" name="mname" /><br><br></td>
				
					<td><label>LAST NAME:</label><br><br></td>
					<td><input type="text" name="lname" required="required"/><br><br></td>
				</tr>
					
				<tr>
					<td><label>USERNAME:</label><br><br></td>
					<td><input type="text" name="username" required="required"/><br><br><td>
				</tr>
					
				<tr>
					<td><label>PASSWORD:</label><br><br></td>
					<td><input type="password" name="password" maxlength="20" required="required"/><br><br></td>
					
					<td><label>CONFIRM PASSWORD:</label><br><br></td>
					<td><input type="password" name="cpassword" maxlength="20" required="required"  onchange="checkpwd();" /><br><br></td>
					<span id="message"></span>
				</tr>
		
				<tr>
					<td><label>DOB:</label><br><br></td>
					<td><input type="date" name="date" > <br><br></td>
					
				</tr>
				
				<tr>
					<td><label>PERMANENT ADDRESS :</label><br><br></td>
					<td><input type="text" name="peradd" required="required"  /><br><br></td>
					
					<td><label>TEMPORARY ADDRESS :</label><br><br></td>
					<td><input type="text" name="tempadd" required="required"  /><br><br></td>
									
				</tr>
					
				<tr>
					<td><label>MOBILE NUMBER.:</label><br><br></td>
					<td><input type="text" name="mobile" placeholder="number" required="required" onkeypress="FrmVal1();" /><br><br></td>
					<td><span id="msz"></span></td>
			
				</tr>
				
				<tr>
					<td><label>EMAIL :</label><br><br></td>
					<td><input type="text" name="email" required="required" onkeypress="FrmVal();" /><br><br></td>
					<td><span id="msg"></span></td>
							
				</tr>
				
				<tr>
					<td><label>JOINING DATA :</label><br><br></td>
					<td><input type="date" name="joindate" required="required"  /><br><br></td>
									
				</tr>
		
				<tr>
				</fieldset>
				<fieldset>
				<legend> Guardian Detail's </legend>
				
					
					<td><label>FATHER NAME :</label><br><br></td>
					<td><input type="text" name="fathername" required="required"  /><br><br></td>
									
				</tr>
					
				<tr>
					<td><label>MOBILE NUMBER :</label><br><br></td>
					<td><input type="text" name="mobnum" required="required"  /><br><br></td>
				
					<td><label>ADDRESS :</label><br><br></td>
					<td><input type="text" name="address" required="required"  /><br><br></td>
					
					<td><label>OCCUPATION:</label><br><br></td>
					<td><input type="text" name="occupation" required="required"  /><br><br></td>
																
				</tr>
				
				<tr>
					
					<td><label>LOCAL GUARDIAN NAME :</label><br><br></td>
					<td><input type="text" name="localname" required="required"  /><br><br></td>
									
				</tr>
				
				<tr>
					
					<td><label>ADDRESS :</label><br><br></td>
					<td><input type="text" name="add" required="required"  /><br><br></td>
					
					<td><label>MOBILE NUMBER :</label><br><br></td>
					<td><input type="text" name="mobnumber" required="required"  /><br><br></td>
									
				</tr>
				
		
		
				<tr>	
					<td><input type="submit" name="submit" value="Register"</td>
					<td><input type="Cancel" name="Cancel" value="Cancel"</td>
				</tr>
				</table>
			</fieldset>
		
			</center>
			</form>
			
			<a href="loginform.php" >ALREADY A MEMBER?? CLICK HERE</a>
		</body>
		</html>
				
	