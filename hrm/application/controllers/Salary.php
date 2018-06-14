<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Controller {

	public function index(){
		if($this->session->userdata('user_id')){
			return redirect('../admin/dashboard/salary');
		}
		$this->load->helper('form');
		$this->load->view('form_component');
	}

	public function salary_panel(){

		 // echo "hey";
		 // die;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_id','user_id','required|alpha');
		// $this->form_validation->set_rules('salary','salary','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");



		if($this->form_validation->run()){

			$user_id=$this->input->post('user_id');
			
				$this->load->model('Salarymodel');
			$salary=$this->salarymodel->valid($user_id);
			$this->load->view('form_component');


			   if($salary > 50000)
			   {
			  	 	$tax=$salary * 10/100;
			  	 	echo $tax;

			   } 
			   elseif ($salary > 30000) {

			   	    $tax = $salary * 5/100;
			          echo $tax;	
			          	# code...
			          }       

			           else 
			           {

			           	$tax= $salary;
			           }

			           echo $tax;
			       }
        
    		}

    		}

//  function calc()
// 	{
// 		if($user_id='user_id')
// 		{
// 			$this->load->model('Salarymodel');
// 		}
// 	}
// }