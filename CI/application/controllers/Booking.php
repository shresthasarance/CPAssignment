<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?PHP

class Booking extends CI_CONTROLLER
{
	public function userBooking()
	{
		$this->load->model('BookingModel');
		$getMyRoom=$this->BookingModel->getRoom();
		$this->load->view('booking', ['getRoom'=>$getMyRoom]);
		}
}