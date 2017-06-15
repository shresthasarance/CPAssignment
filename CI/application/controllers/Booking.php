<?PHP

class Booking extends CI_CONTROLLER
{
	public function getRoomDetails()
	{
		if(!$this->session->userdata('user_id') )
		
		$this->load->view('login');
		
		$this->load->model('BookingModel');
		$getMyRoom=$this->BookingModel->getRoom();
		$this->load->view('booking', ['getRoom'=>$getMyRoom]);
	}	
	
	public function userBooking()
	{
		$room=$this->input->post('room');
		$roomid=$this->input->post('roomid');
		$bookingdate=$this->input->post('date');
		$admitdate=$this->input->post('admitdate');
		

		$this->load->model('BookingModel');
		$data['modelmsg']=$this->BookingModel->getBook( $room , $roomid,  $bookingdate, $admitdate);
		
		return redirect('Home/booking');
	}
	
	public function deleteBooking()
	{
		$this->load->model('BookingModel');
		$data['records']=$this->BookingModel->delete_booking();
		$this->load->view('listBookingDetails', $data);
		//$detailmodel=$this->BookingModel->delete_booking();
		//$this->load->view('home/viewdetails',['detailmodel'=>$detailmodel]);
	
	}
	
	public function deleteBookingDetails()
	{
		$this->load->model("BookingModel");
		$id=$this->input->get('bookid');
		$this->BookingModel->cancelBooking($id);
//return redirect('Home/bookingdetails');
		//$data['delete_message']="data successfully delete";
		//$this->load->view('listDeleteDetails', $data);
	}
}
