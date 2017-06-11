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
				
				//$row=$query->row();
				//return row()->StudentID;
				return $query->row()->StudentID; 
				//return true;
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
				
		public function update_details()
		{
			//$customer_id=$this->session->userdata('StudentID');
			$query=$this->db->get('users_details');
			return $query->result();
		}
		
	
		public function updateMember
		($id, $fname , $mname,  $lname,  $phnum,  $email,  $peraddress,  $tempaddress,  
		 $mobilenum,  $address, $occupation,  $lguardian,  $addr, $mobnumber){
		$array=array(
			"StudentID"=>$id,
			"FirstName"=>$fname, 
			"MiddleName"=>$mname, 
			"LastName"=>$lname, 
			"PhoneNumber"=>$phnum, 
			"Email"=>$email, 
			"PermanentAddress"=>$peraddress, 
			"TemporaryAddress"=>$tempaddress, 
			"MobileNumber"=>$mobilenum, 
			"TemporaryGuardian"=>$lguardian, 
			"Mobile_Number"=>$mobnumber, 
			"Occupation"=>$occupation, 
			"Permanent_Address"=>$address, 
			"Temp_Address"=>$addr
			
			);
			
		$this->db->where("StudentID",$id);
		$this->db->update("users_details",$array);
		return "data updated";
		}
		
			
		public function delete_details()
		{
			//$customer_id=$this->session->userdata('StudentID');
			$query=$this->db->get('users_details');
			return $query->result();
		}
		
		public function removeMember($id)
		{
			$this->db->where("StudentID", $id);
			$this->db->delete("users_details");
		
		}
	}
?>