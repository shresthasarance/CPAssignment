<?PHP

class Customerdetails extends CI_CONTROLLER
{
	public function getData()
	{
	
		$fname=$this->input->post('fname');
		$mname=$this->input->post('mname');
		$lname=$this->input->post('lname');
		$date=$this->input->post('date');
		$phnum=$this->input->post('mobile');
		$email=$this->input->post('email');
		$peraddress=$this->input->post('peradd');
		$tempaddress=$this->input->post('tempadd');
		$joiningdate=$this->input->post('joindate');
		$fathername=$this->input->post('fathername');
		$mobilenum=$this->input->post('mobnum');
		$address=$this->input->post('address');
		$occupation=$this->input->post('occupation');
		$lguardian=$this->input->post('localname');
		$addr=$this->input->post('add');
		$mobnumber=$this->input->post('mobnumber');
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->load->model('Customermodel');
		$data['modelmsg']=$this->Customermodel->saveIt( $fname , $mname,  $lname,  $date,  $phnum,  $email,  $peraddress,  $tempaddress,  
		$joiningdate,  $fathername,  $mobilenum,  $address,
		 $occupation,  $lguardian,  $addr, $mobnumber, $username,  $password);
		
		//$data['notice']="data successfully saved";
		//$data['var2']="this is test";
		$this->load->view('message', $data);
	}
	
}