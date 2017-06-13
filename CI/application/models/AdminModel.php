<?php

class AdminModel extends CI_MODEL
{
		public function viewUserDetails()
		{
			//$customer_id=$this->session->userdata('StudentID');
			$query=$this->db->get('users_details');
			return $query->result();
		}
		
		public function selectUserById($id)
		{
			$this->db->where("StudentID", $id);
			$result=$this->db->get("users_details");
			return $result;
		}
		
		public function updateUser
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
		
		public function removeUser($id)
		{
			$this->db->where("StudentID", $id);
			$this->db->delete("users_details");
		
		}
		
}
?>