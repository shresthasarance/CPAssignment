<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myc extends CI_Controller {

	public function about()
	{
		$this->load->view( 'welcome_message' );
	}
	
	}

?>