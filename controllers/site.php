<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
 
	public function index()
	{
   //   load dynamic menu library ;
 $this->load->library('dynmenu');
  
//  pulling data from db assigned to $data

  $data['menu'] = $this->dynmenu->get_categories();
    
	 // loading template 
 	 $data['home_template'] = 'home';

        $this->load->view('template/template', $data);
 

		 
	}   
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */