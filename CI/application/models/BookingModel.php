<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
class BookingModel extends CI_Model{

	public function getRoom()  {
		$query=$this->db->get('room');
		if($query->num_rows() > 0){
			return $query->result();
		}
	}
	
	public function getBook($room , $roomid,  $bookingdate ){
		
		
			$customer_id=$this->session->userdata('user_id');	
			$name=$this->session->userdata('username');
			$arr=array(
			"customer_id"=>$customer_id,
			"username"=>$name,
			"room_type"=>$room, 
			"room_id"=>$roomid, 
			"booking_date"=>$bookingdate, 
			);
		 
			
			$this->db->insert("booking",$arr); //Active records
			header("Location : Login.php ");
			
		}

		public function delete_booking(){
		
		$customer_id=$this->session->userdata('user_id');
		$this->db->where("customer_id", $customer_id);
		$query=$this->db->get('booking');
		return $query->result();
		}
		
				
		public function cancelBooking($id){
		
		$this->db->where("booking_id", $id);
		$this->db->delete("booking");
		}

}
?>