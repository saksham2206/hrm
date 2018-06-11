<?php 
class Employee extends CI_Controller{
	public function index(){
		$this->load->view('employee/dashboard');
	}
}

?>