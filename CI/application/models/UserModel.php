<?php
	
	class UserModel extends CI_Model{
	
		public function getRegister($fname , $mname,  $lname, $date,  $phnum,  $email,  $peraddress, $tempaddress,  $joiningdate,  $fathername,  
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
			header("Location : Login.php ");
			
		}
		
		public function valid_login($username, $password)
		{
			$query=$this->db->where(['username'=>$username , 'password'=>$password])
									->get('users_details');
			
			if($query->num_rows() >=1 ) {
			
				return true;
			}else{
			
				return false;
			}
			
			//return $this->db->get("users_details");
		
		}
		
		public function view_details()
		{
			//$customer_id=$this->session->userdata('StudentID');
			$query=$this->db->get('users_details');
			return $query->result();
		}
		
		public function selectMemberById($id)
		{
			$this->db->where("StudentID", $id);
			$result=$this->db->get("users_details");
			return $result;
		}
		
		public function updateMember
		
		($studentId, $fname , $mname,  $lname,  $date,  $phnum,  $email,  $peraddress,  $tempaddress,  
		 $joiningdate,  $fathername,  $mobilenum,  $address,
		 $occupation,  $lguardian,  $addr, $mobnumber){
		$array=array(
			"StudentID"=>$id,
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
			"Temp_Address"=>$addr
			
			);
			
		$this->db->where("StudentID",$id);
		$this->db->update("users_details",$array);
		}
		
		public function removeMember($id)
		{
			$this->db->where("StudentID", $id);
			$this->db->delete("users_details");
		
		}
	}
?>