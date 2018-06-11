<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


         public function __construct()
        {
                parent::__construct();
                if(!$this->session->userdata('user_id')){
                	
			return redirect('login/login_panel');
		//$this->load->view('signin');
		}
		
                // Your own constructor code
        }



 //        public function index(){
	// 	if($this->session->userdata('user_id')){
	// 		return redirect('../admin/dashboard/dashboard_admin');
	// 	}
	// 	$this->load->helper('form');
	// 	$this->load->view('signin');
	// }
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

	// DashBoard For The Admin
	public function dashboard_admin(){
		$this->load->view('admin/index');
	}

	// add Headquater Section 
	public function add_headquaters(){
		$this->load->view('admin/add_headquaters');
	}


	// add department Section
	public function add_departments(){
		$this->load->view('admin/add_departments');
	}

	// add designation section
	public function add_designations(){
		$this->load->view('admin/add_designations');
	}

	// add shift section
	public function add_shift(){
		$this->load->view('admin/add_shift');
	}

	// add new section
	public function newentry(){
		$this->load->view('admin/newentry');
	}

	// verify details section
	public function verifydetails(){
		$this->load->view('admin/verifydetails');
	}

	// edit/view empoyee sections
	public function editemployee(){
		$this->load->view('admin/editemployee');
	}

	// employee attnedance sections
	public function empattendance(){
		$this->load->view('admin/empattendance');
	}

	// leave application area
	public function leaveapplication(){
		$this->load->view('admin/leaveapplication');
	}
	 public function salary(){
	     $this->load->('admin/salary');
		}
		}
