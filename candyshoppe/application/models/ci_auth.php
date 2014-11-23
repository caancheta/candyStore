<?php
class CI_auth extends CI_Model {

    function __construct()
    {
        parent::__construct();
            $this->load->library('session'); 
            $this->load->database();
            $this->load->helper('url');
	    	$this->load->model(array('CI_encrypt'));
    }

	
	function check_logged(){
		return ($this->session->userdata('logged_user'))?TRUE:FALSE;
	}
	

	function logged_id(){
		return ($this->check_logged())?$this->session->userdata('logged_user'):'';
	}
}