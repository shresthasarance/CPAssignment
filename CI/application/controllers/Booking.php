<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?PHP

class Booking extends CI_CONTROLLER
{
	public function getRoomDetails()
	{
		$this->load->model('BookingModel');
		$getMyRoom=$this->BookingModel->getRoom();
		$this->load->view('booking', ['getRoom'=>$getMyRoom]);
	}	
	
	public function userBooking()
	{
		$room=$this->input->post('room');
		$roomid=$this->input->post('roomid');
		$bookingdate=$this->input->post('date');
		

		$this->load->model('BookingModel');
		$data['modelmsg']=$this->BookingModel->getBook( $room , $roomid,  $bookingdate);
		
		return redirect('listBookingDetails');
	
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
		
		//$data['delete_message']="data successfully delete";
		//$this->load->view('listDeleteDetails', $data);
	}
}
