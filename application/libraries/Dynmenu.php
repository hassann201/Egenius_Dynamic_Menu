
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Egenius CodeIgniter Dynamic Menu
 *
 *
 * @author		 Hassan Kibria
 * @copyright	Copyright (c) 2015, Web E Genius
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://webegenius.es
 * @version		v1.0.0
 * 
 *
 * @usage 		$this->load->library('Dynmenu');
 *               Add this to your inside of __construct or main controller 
 * $params = array('type' => 'large', 'color' => 'red');
 *
 **   You can pass class or id  as well ;   $this->load->library('Dynmenu', $params);
 *
 */



  


   class Dynmenu  {
/*
  function show_hello_world()
  {
    return '<h2>Hello Dynamic  World</h2>';
  }

   */
 
       function hello(){
  
        return '<h2>NEW TEXT FROM LIBRARY </h2>';
            } 




    function get_categories(){
   $CI =   &get_instance();
        $q = $CI->db->get('dyn_menu');
        if ($q->num_rows() > 0){
                        foreach ($q->result() as $row)  {
                                   //  echo $row->first_name;
                                    $data[] = $row;

                                }
                    return $data; 
            }  

    }

} // end class
