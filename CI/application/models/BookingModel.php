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

}
?>