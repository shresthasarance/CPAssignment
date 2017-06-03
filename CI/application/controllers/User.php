<?PHP

class User extends CI_CONTROLLER
{
	public function register()
	{
		
		$this->load->library('form_validation'); //validating
		
		$this->form_validation->set_rules('fname', 'Fname', 'required|alpha|trim');	
		$this->form_validation->set_rules('mname', 'Mname', 'required|alpha|trim');	
		$this->form_validation->set_rules('lname', 'Lname', 'required|alpha|trim');	
		$this->form_validation->set_rules('date', 'Date', 'required|alpha|trim');	
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|trim');	
		$this->form_validation->set_rules('email', 'Email', 'required|alpha|trim');	
		$this->form_validation->set_rules('peradd', 'Permanenet Address', 'required|alpha|trim');	
		$this->form_validation->set_rules('tempadd', 'Temporary address', 'required|alpha|trim');	
		$this->form_validation->set_rules('joindate', 'Date', 'required|alpha|trim');	
		$this->form_validation->set_rules('fathername', 'Name', 'required|alpha|trim');	
		$this->form_validation->set_rules('mobnum', 'Mobile', 'required|numeric|trim');	
		$this->form_validation->set_rules('address', 'Address', 'required|alpha|trim');	
		$this->form_validation->set_rules('occupation', 'Occupation', 'required|alpha|trim');	
		$this->form_validation->set_rules('localname', 'Guardian Name', 'required|alpha|trim');	
		$this->form_validation->set_rules('add', 'Add', 'required|alpha|trim');	
		$this->form_validation->set_rules('mobnumber', 'Phone', 'required|numeric|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|alpha|trim');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
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

		$this->load->model('UserModel');
		$data['modelmsg']=$this->UserModel->getRegister( $fname , $mname,  $lname,  $date,  $phnum,  $email,  $peraddress,  $tempaddress,  
		$joiningdate,  $fathername,  $mobilenum,  $address,
		 $occupation,  $lguardian,  $addr, $mobnumber, $username,  $password);
		
		$this->load->view('Login');
	}
	public function login()
	{
		$this->load->library('form_validation'); //validating
		
		
		$this->form_validation->set_rules('username', 'Username', 'required|alpha|trim');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run() ){ //if validation passess
		
			$username=$this->input->post('username');
			$password=$this->input->post('password');
		
			$this->load->model('UserModel');
			
			$login_id=$this->UserModel->valid_login($username, $password);
			IF($login_id){
				
				$this->session->set_userdata('StudentID', $login_id);
				return redirect('Home/dashboard');
				
				//++echo 'password match';
			}else{
			
				return redirect('Home/login');
			}

		}else {
		
			$this->load->view('login');
		}
		
	}
	
	public function dashboard()
	{
			if(!$this->session->userdata('StudentID') )
			return redirect('Home/login');
	}
	
	public function logout()
	{
		$this->session->unset_userdata('StudentID');
		return redirect ('Home/login');
	}
	
	public function details()
	{
		$this->load->model('UserModel');
		$data['records']=$this->UserModel->view_details();
		$this->load->view('viewdetails', $data);
		//$detailmodel=$this->UserModel->view_details();
		//$this->load->view('home/viewdetails',['detailmodel'=>$detailmodel]);
	}
	
	public function editDetails(){
	
	$this->load->model("UserModel");
	$id=$this->input->get('stdid');
	$this->UserModel->selectMemberById($id);

	$result=$this->UserModel->selectMemberById($id);
	$data['records']=$result;
	$this->load->view('home/edit',$data);
	}
	
	public function updateEditMember()
	{
		$id=$this->input->post('id');
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

	$this->load->model('UserModel');
	$this->UserModel->updateMember
	($id, $fname , $mname,  $lname,  $date,  $phnum,  $email,  $peraddress,  $tempaddress,  
	$joiningdate,  $fathername,  $mobilenum,  $address,	 $occupation,  $lguardian,  $addr, 
	$mobnumber);
	
	echo "updated successfully";
	//$data['update_message']="data successfully update";
	//$this->load->view('admin/adminPage',$data);

	}
	
	public function deleteMember()
	{
		$this->load->model("UserModel");
		$id=$this->input->get('id');
		$this->UserModel->removeMember($id);
		
		//$data['delete_message']="data successfully delete";
		//$this->load->view('Home/viewdetails'), $data);
	}
	
}