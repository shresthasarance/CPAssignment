<?php

class AdminController extends CI_CONTROLLER
{
	public function viewDetails()
	{
		$this->load->model('AdminModel');
		$data['records']=$this->AdminModel->viewUserDetails();
		$this->load->view('adminView', $data);
		//$detailmodel=$this->UserModel->viewUserDetails();
		//$this->load->view('home/viewdetails',['detailmodel'=>$detailmodel]);
	
	}
	public function editUserDetails(){
	
	$this->load->model("AdminModel");
	$id=$this->input->get('stdid');
	$this->AdminModel->selectUserById($id);

	$result=$this->AdminModel->selectUserById($id);
	$data['records']=$result;
	$this->load->view('editmembers',$data);
	}
	
	public function updateEditMember()
	{
		$id=$this->input->post('id');
		$fname=$this->input->post('fname');
		$mname=$this->input->post('mname');
		$lname=$this->input->post('lname');
		$phnum=$this->input->post('mobile');
		$email=$this->input->post('email');
		$peraddress=$this->input->post('peradd');
		$tempaddress=$this->input->post('tempadd');
		$mobilenum=$this->input->post('mobnum');
		$address=$this->input->post('address');
		$occupation=$this->input->post('occupation');
		$lguardian=$this->input->post('localname');
		$addr=$this->input->post('add');
		$mobnumber=$this->input->post('mobnumber');

	$this->load->model('AdminModel');
	$this->AdminModel->updateUser
	($id, $fname , $mname,  $lname,  $phnum,  $email,  $peraddress,  $tempaddress,  
	$mobilenum,  $address,	 $occupation,  $lguardian,  $addr, 
	$mobnumber);
	
	//echo "updated successfully";
	//$data['update_message']="data successfully update";
	//$this->load->view('editmembers',$data);
	}
	
	public function deleteMemberDetails()
	{
		$this->load->model("AdminModel");
		$id=$this->input->get('id');
		$this->AdminModel->removeUser($id);
		
		//$data['delete_message']="data successfully delete";
		//$this->load->view('listDeleteDetails', $data);
	}
}
?>