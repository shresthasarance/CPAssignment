<?php

class Datam extends CI_Model{
	
	public function saveIt($uname , $pwd)
	{
		//echo "hello!! from model $uname $pwd";
		//$this->db->query("insert into user(username, password) values('$uname', '$pwd')");
		
		$arr=array(
		"username"=>$uname, 
		"password"=>$pwd); 
		$this->db->insert("user",$arr); //Active records
		return "saved";
		
	}
	
	public function retData()
	{
		$this->db->where("username", "ram" );
		//$this->db->limit(1); to display datas in limited forms
		return $this->db->get("user");
	
	}
	
	public function retData1($username)
	{
		$this->db->where("username", $username);
		return $this->db->get("users_details");
	
	}
	
	public function updateData()
	{
		$datas=array(
		"username" => "Aman");
		$this->db->where("id",10);
		$this->db->update("user" ,$datas);
		
	}
	
	public function deleteData()
	{
		$this->db->where("id",10);
		$this->db->delete("user");
		
	}

}

