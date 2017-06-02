<?php
class Datamgmt extends CI_CONTROLLER
{
	public function getData()
	{
		//echo "hello!its me";
		$uname=$this->input->post('uname');
		$pwd=$this->input->post('password');
		$this->load->model('datam');
		$data['modelmsg']=$this->datam->saveIt($uname , $pwd);
		
		//$data['notice']="data successfully saved";
		//$data['var2']="this is test";
		$this->load->view('message', $data);
	}
	
	public function recData()
	{
		$this->load->model('datam');
		$datas=$this->datam->retData();
		//passing value from controller to view
		$data['datas']=$datas;
		$this->load->view('message',$data);
		//var_dump($datas->result());
	}
	
	public function searchUser()
	{
		$this->load->model('datam');
		$uname=$this->input->post('username');
		$datas=$this->datam->retData1($uname);
		//passing value from controller to view
		$data['datas']=$datas;
		$this->load->view('message',$data);
		//var_dump($datas->result());
	}
	
	public function updateIt()
	{
		$this->load->model('datam');
		$this->datam->updateData();
	}
	
	public function deleteIt()
	{
		$this->load->model('datam');
		$this->datam->deleteData();
	}
	
	public function checkLib()
	{
		$this->load->library("mylib");
		$this->mylib->firstFun();
	}
}
?>