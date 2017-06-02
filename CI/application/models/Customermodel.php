<?php
	
	class Customermodel extends CI_Model{
	
		public function saveIt($fname , $mname,  $lname, $date,  $phnum,  $email,  $peraddress, $tempaddress,  $joiningdate,  $fathername,  
		$mobilenum,  $address,  $occupation,  $lguardian,  $addr, $mobnumber,  $username,  $password  )
		{
		
	
			$arr=array(
			"FirstName"=>$fname, 
			"MiddleName"=>$mname, 
			"LastName"=>$lname, 
			"DOB"=>$date, 
			"PhoneNumber"=>$phnum, 
			"Email"=>$email, 
			"PermanentAddress"=>$peraddress, 
			"TemporaryAddress"=>$tempaddress, 
			"JoiningDate"=>$joiningdate, 
			"FatherName"=>$fathername, 
			"MobileNumber"=>$mobilenum, 
			"TemporaryGuardian"=>$lguardian, 
			"Mobile_Number"=>$mobnumber, 
			"Occupation"=>$occupation, 
			"Permanent_Address"=>$address, 
			"Temp_Address"=>$addr, 
			"username"=>$username, 
			"password"=>$password, 
			);
		 
			$this->db->insert("users_details",$arr); //Active records
			return "Data Inserted Successfully";
			
		}
	}
?>