<?PHP

class Home extends CI_CONTROLLER
{
	public function index()
	{
	
		$this->load->view('homepage');
	}
	
	public function register()
	{
	
		$this->load->view('Registration');
	}
	
	public function login()
	{
	
		$this->load->view('Login');
	}
	
	public function dashboard()
	{
		
		$this->load->view('dashboard');
		
	}
	
	public function viewdetails()
	{
		$this->load->view('viewdetails');
	
	}
	
	public function updateDetails()
	{
		$this->load->view('listUpdateDetails');
	
	}
	
	public function deleteDetails()
	{
		$this->load->view('listDeleteDetails');
	
	}
	
	public function edit()
	{
		$this->load->view('editmembers');
	
	}
	
	public function contact()
	{
		$this->load->view('contactus');
	
	}
	
	public function service()
	{
		$this->load->view('services');
	
	}
	
	public function booking()
	{
		$this->load->view('booking');
	
	}
	public function admin()
	{
		$this->load->view('adminpage');
	
	}
	public function hello()
	{
		$username=$this->input->post('username');
		echo 'Hello'. $username;
	}

	
	
}