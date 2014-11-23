<?php

class Admin extends CI_Controller {
   
     
    function __construct() {
    		// Call the Controller constructor
	    	parent::__construct();	    	
    }

    function index() {
    		$this->load->view('admin_view');
    }
    
    function clearOut(){
    		$this->db->empty_table('order');
    		$this->db->empty_table('customer');
    }
    
    function display(){
    	
    }
	 
}

