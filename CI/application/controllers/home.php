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
	
	
}