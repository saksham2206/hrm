<?php
class Salarymodel extends CI_Model{

	public function valid($user_id){

	
		$q=$this->db->where(['user_id'=> $user_id])
				->get('users');
		if($q->num_rows()){


			return $q->row()->$salary;

			//return TRUE;
		}else{
			return FALSE;
		} 
	}

		 // function tax()
   //  		{ 
			   
			//    if('salary' > 50000)
			//    {
			//    	$tax='salary' * 10/100;

			//    } 
			//    elseif ('salary' > 30000) {

			//    	    $tax = 'salary' * 5/100;
			//           	# code...
			//           }       

			//            else 
			//            {

			//            	$tax= 'salary';
			//            }

			//            return $tax;
			//        }
        
   //  		}
