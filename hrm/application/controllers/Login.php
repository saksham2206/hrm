<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		if($this->session->userdata('user_id')){
			return redirect('../admin/dashboard/dashboard_admin');
		}
		$this->load->helper('form');
		$this->load->view('signin');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('signin');
	// }

	public function login_panel(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required|alpha');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		// if($this->form_validation->run('admin_login')){
		// 	$username=$this->input->post('username');
		// 	$password=$this->input->post('password');
		// 	if($username == 'admin' && $password=='admin')
		// 	{

				
		// 	}
		// 	else{
		// 	$this->load->model('loginmodel');
		// 	$login_id=$this->loginmodel->login_valid($username,$password);
		// 	if($login_id){
		// 		//authenticate
				
		//		$this->session->set_userdata('user_id',$login_id);
		// 		return redirect('admin/dashboard');

		// 	}else{
				
		// 		$this->session->set_flashdata('login_failed','Invalid Username/Password');
		// 		return redirect('login');
				
		// 	}
		// }}
		if($this->form_validation->run('admin_login')){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
				$this->load->model('loginmodel');
			$user_role_id=$this->loginmodel->login_valid($username,$password);
			//if($login_id){
				//authenticate
				
				//$this->session->set_userdata('user_id',$login_id);
			//	return redirect('../admin/dashboard/dashboard_admin');

			//}else{
				
			//	$this->session->set_flashdata('login_failed','Invalid Username/Password');
			//	return redirect('../login');
				
			//}
		//}
			if ($user_role_id==1) {

			$this->session->set_userdata('user_id',$user_role_id);
			return redirect('../admin/dashboard/dashboard_admin');
				# code...
			}
			elseif ($user_role_id==2) {

			$this->session->set_userdata('user_id',$user_role_id);
			return redirect('../employee/Employee');
		}
		else{
				
				$this->session->set_flashdata('login_failed','Invalid Username/Password');
				return redirect('../login');
				
			}
		}
		else{
			$this->load->view('signin');
		}

		//$this->load->view('admin/index');
	}
 function logout(){
		$this->session->unset_userdata('user_id');
		$this->load->view('signin');
	}	
}
